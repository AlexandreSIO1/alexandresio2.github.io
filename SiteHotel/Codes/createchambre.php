<?php
session_start();
include "connexion.php";

if (!empty($_POST)) {
    try {
        $req = $bdd->prepare("INSERT INTO chambre (numero_chambre, tarifpersonne, nbpersonne, id_hotel) VALUES (?, ?, ?, ?)");
        
        $res = $req->execute([
            $_POST['numero_chambre'], 
            $_POST['tarifpersonne'], 
            $_POST['nbpersonne'], 
            $_POST['id_hotel']
        ]);

        if($res) {
            header("Location: chambres.php");
            exit();
        } else {
            $message_erreur = "La requête a échoué sans erreur SQL critique.";
        }

    } catch (PDOException $e) {
        $message_erreur = "Erreur de base de données : " . $e->getMessage();
    }
}

$liste_hotels = $bdd->query("SELECT id_hotel, nom_hotel FROM hotel")->fetchAll();
?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ajouter une Chambre</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h3 class="mb-0">Nouvelle Chambre</h3>
                </div>
                <div class="card-body">
                    
                    <?php if (isset($message_erreur)): ?>
                        <div class="alert alert-danger"><?php echo $message_erreur; ?></div>
                    <?php endif; ?>

                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Hôtel</label>
                            <select name="id_hotel" class="form-select" required>
                                <option value="">Choisir un hôtel</option>
                                <?php foreach($liste_hotels as $h): ?>
                                    <option value="<?php echo $h['id_hotel']; ?>">
                                        <?php echo $h['nom_hotel']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Numéro de chambre</label>
                            <input type="number" name="numero_chambre" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nombre de personnes</label>
                            <input type="number" name="nbpersonne" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Prix par nuit (€)</label>
                            <input type="number" step="0.01" name="tarifpersonne" class="form-control" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">Enregistrer en base de données</button>
                            <a href="chambres.php" class="btn btn-light">Retour</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>