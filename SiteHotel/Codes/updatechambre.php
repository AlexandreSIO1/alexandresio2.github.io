<?php
include "connexion.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $reqSelect = $bdd->prepare("SELECT * FROM chambre WHERE id_chambre = ?");
    $reqSelect->execute([$id]);
    $chambre = $reqSelect->fetch();
}

if(!empty($_POST)){
    try {
        $req = $bdd->prepare("UPDATE chambre SET numero_chambre = ?, nbpersonne = ?, tarifpersonne = ? WHERE id_chambre = ?");
        
        $req->execute([
            $_POST['numero_chambre'],
            $_POST['nbpersonne'],
            $_POST['tarifpersonne'],
            $_POST['id_chambre']
        ]);

        header("Location: chambres.php");
        exit();

    } catch (Exception $e) {
        die("Erreur de modification : " . $e->getMessage());
    }
}
?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Modifier la chambre</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary shadow-sm mb-5" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="../Images/logo.png" height="50" width="50">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chambres.php">Chambres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Connexion</a>
                    </li>
                    <?php if(isset($_SESSION['admin'])): ?>
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="deconnexion.php">Déconnexion</a>
                            </li>
                        <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2>Modifier la chambre n° <?php echo $chambre['numero_chambre']; ?></h2>
        </div>
        <div class="card-body">
            <form action="" method="POST">
                
                <input type="hidden" name="id_chambre" value="<?php echo $chambre['id_chambre']; ?>">

                <div class="mb-3">
                    <label class="form-label">Numéro de chambre :</label>
                    <input type="number" name="numero_chambre" class="form-control" 
                           value="<?php echo $chambre['numero_chambre']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nombre de personnes :</label>
                    <input type="number" name="nbpersonne" class="form-control" 
                           value="<?php echo $chambre['nbpersonne']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tarif par nuit (€) :</label>
                    <input type="number" name="tarifpersonne" class="form-control" 
                           value="<?php echo $chambre['tarifpersonne']; ?>" required>
                </div>

                <button type="submit" class="btn btn-success">Valider</button>
                <a href="chambres.php" class="btn btn-secondary">Annuler</a>
            </form>
        </div>
    </div>

</body>
</html>