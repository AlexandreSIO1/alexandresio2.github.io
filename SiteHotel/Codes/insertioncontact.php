<?php

include "connexion.php";

$req = $bdd->prepare("insert into message (nom, prenom, email, message) values (?,?,?,?)");
$req->execute([$_POST["nom"], $_POST["prenom"], $_POST["email"],$_POST["message"]]);

header("Location:contact.html");
?>