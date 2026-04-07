<?php
session_start();
include "connexion.php";
?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Nos Chambres - Hotello</title>
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
                        <a class="nav-link active" href="chambres.php">Chambres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
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

<div class="container mt-4">
    <h1 class="text-center mb-4">Nos Chambres</h1>
    <div class="row">

    <?php
    $req = $bdd->prepare("SELECT * FROM chambre");
    $req->execute();
    $tabs = $req->fetchAll();

    foreach ($tabs as $tab){
    ?>

        <div class="col-md-3 mb-4">
            <div class="card text-center">
                <img src="../Images/chambre1.png" class="card-img-top" alt="Chambre">

                <div class="card-body">
                    <h5 class="card-title">
                        Chambre numéro <?php echo $tab["numero_chambre"]; ?>
                    </h5>

                    <p class="card-text fw-bold">
                        <?php echo $tab["tarifpersonne"]; ?> € / nuit
                    </p>

                    <p class="text-muted">
                        Nb de pers : <?php echo $tab["nbpersonne"]; ?>
                    </p>

                    <?php if(isset($_SESSION['admin'])): ?>
                    <a href="deletechambre.php?id=<?php echo $tab["id_chambre"]; ?>" 
                       class="btn btn-danger btn-sm">Supprimer</a>

                    <a href="updatechambre.php?id=<?php echo $tab["id_chambre"]; ?>" 
                       class="btn btn-primary btn-sm">Modifier</a>
                       <?php endif; ?>
                </div>
            </div>
        </div>

    <?php } ?>

    </div>
    <?php if(isset($_SESSION['admin'])): ?>
    <div class="text-center mt-4">
        <a href="createchambre.php" class="btn btn-success">Ajouter une chambre</a>
        <?php endif; ?>
    </div>
</div>

</body>
</html>