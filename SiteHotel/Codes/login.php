<?php
session_start();
include "connexion.php";

if (!empty($_POST)) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $req = $bdd->prepare("SELECT * FROM utilisateur WHERE login = ? AND password = ?");
    $req->execute([$login, $password]);
    $user = $req->fetch();

    if ($user) {
        $_SESSION['admin'] = $user['login'];
        header("Location: index.html");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin - Hotello</title>
</head>
<body>
        <form method="POST">
            <h1>Connexion Admin</h1>
            <input type="text" name="login" placeholder="Nom d'utilisateur" required>
            <input type="password" name="password"placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>
</body>
</html>