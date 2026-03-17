<?php
include "connexion.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    try {
        $req = $bdd->prepare("DELETE FROM chambre WHERE id_chambre = ?");

        $req->execute([$id]);

        header("Location: chambres.php");

    } catch (Exception $e) {
        die("Erreur de suppression : " . $e->getMessage());
    }
}

?>