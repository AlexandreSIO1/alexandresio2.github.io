<?php

$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$typechambre=$_POST["typechambre"];
$date=$_POST["date"];
$nbnuit=$_POST["nbnuit"];
$petitdej=$_POST["acceptation"];

echo "<h1>Bonjour ",$prenom," ",$nom,".</h1>","<br>";
echo "Nom: ",$nom,"<br>", 
"Prénom: ",$prenom, "<br>", 
"E-mail: ",$email, "<br>", 
"Téléphone: ",$tel, "<br>", 
"Type de chambre: ",$typechambre, "<br>", 
"Date d'arrivée: ",$date, "<br>", 
"Nombre de nuit: ",$nbnuit, "<br>",
"Petit déjeuner? : ",$petitdej, "<br>";
?>