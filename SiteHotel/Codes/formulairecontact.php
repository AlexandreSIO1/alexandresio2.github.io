<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$message = $_POST["message"];

echo "Nom : ", $nom, "<br>";
echo "Prénom : ", $prenom, "<br>";
echo "Email : ", $email, "<br><br>";
echo "Message reçu : <br>", $message;
?>