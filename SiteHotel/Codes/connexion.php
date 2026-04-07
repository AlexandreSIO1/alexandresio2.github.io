<?php
try {
    $bdd = new PDO(
        "mysql:host=localhost;dbname=site_hotel;charset=utf8",
        "adminsitehotel",
        "azerty",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch(Exception $e) {
    die("Erreur: ". $e->getMessage());
}
?>