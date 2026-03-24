<?php
include "connexion.php";

if (!empty($_POST)) {
    try {
        $req = $bdd->prepare("INSERT INTO chambre (numero_chambre, nbpersonne, tarifpersonne, id_hotel) VALUES (?, ?, ?, ?)");
        
        $req->execute([
            $_POST["numero_chambre"], 
            $_POST["nbpersonne"],
            $_POST["tarifpersonne"],
            $_POST["id_hotel"]
        ]);

        header("Location: chambres.php");
        exit();

    } catch (Exception $e) {
        echo "Erreur SQL : " . $e->getMessage();
    }
}
?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ajout de chambre</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2>Ajouter une nouvelle chambre</h2>

    <form action="" method="POST" class="col-md-6">
        <div class="mb-3">
            <label>Numéro de la chambre :</label>   
            <input type="number" name="numero_chambre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nombre de personnes :</label>
            <input type="number" name="nbpersonne" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tarif par nuit :</label>
            <input type="number" name="tarifpersonne" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>ID de l'Hôtel (doit exister) :</label>
            <input type="number" name="id_hotel" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-success">Enregistrer la chambre</button>
        <a href="chambres.php" class="btn btn-secondary">Annuler</a>
    </form>

</body>
</html>