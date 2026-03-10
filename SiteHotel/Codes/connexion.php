<?php

try{
    $bdd = new PDO(
        "mysql:host=localhost;dbname=message;charset=utf8",
        "adminsitehotel",
        "azerty"
    );
}catch(Exception $e){
    die("Erreur: ". $e->getMessage());
}

?>