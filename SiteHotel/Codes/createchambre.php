<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ajout de chambre</title>
</head>
<body>

<?php
include "connexion.php";

if (!empty($_POST)) {
    try {
        $req = $bdd->prepare("INSERT INTO chambre (id_chambre, numero_chambre, nbpersonne, tarifpersonne, id_hotel) VALUES (?, ?, ?, ?, ?)");
        
        $req->execute([
            $_POST["id_chambre"],
            $_POST["numero_chambre"], 
            $_POST["nbpersonne"],
            $_POST["tarifpersonne"],
            $_POST["id_hotel"]
        ]);

    } catch (Exception $e) {
        echo "Erreur : </b>" . $e->getMessage();
    }
}
?>

<h2>Ajouter une chambre</h2>
<form action="" method="POST">
    ID Chambre: <input type="number" name="id_chambre" required><br><br>
    Numéro de la cha: <input type="number" name="numero_chambre" required><br><br>
    Nombre de personnes : <input type="number" name="nbpersonne" required><br><br>
    Tarif par personne: <input type="number" name="tarifpersonne" required><br><br>
    ID Hôtel: <input type="number" name="id_hotel" required><br><br>
    
    <input type="submit" value="Ajouter la chambre">
</form>

</body>
</html>