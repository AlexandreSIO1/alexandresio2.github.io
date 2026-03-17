<?php
include "connexion.php";

$req = $bdd->prepare("INSERT INTO message (nom, prenom, email, message) VALUES (?, ?, ?, ?)");

$req->execute([
    $_POST["nom"], 
    $_POST["prenom"], 
    $_POST["email"], 
    $_POST["message"]
]);

header("Location: contact.html");
?>