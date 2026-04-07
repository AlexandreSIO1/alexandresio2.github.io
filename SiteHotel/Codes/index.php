<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Accueil - Hotello</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary shadow-sm" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="../Images/logo.png" height="50" width="50">
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chambres.php">Chambres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Connexion</a>
                    </li>
                    <?php if(isset($_SESSION['admin'])): ?>
                            <li class="nav-item">
                                <a class="nav-link text-danger" href="deconnexion.php">Déconnexion</a>
                            </li>
                        <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <h1>Bienvenu sur Hotello</h1>
    <p>Le meilleur site pour comparer, réserver et optimiser vos séjours à l’hôtel, partout dans le monde</p>
    <h2>Les dernières offres</h2>
    <img src="../Images/image1.png" height=150 width=200>
    <table>
            <tr>
                <th>Pays</th>
                <th>Ville</th>
                <th>Prix</th>
                <th>Chambres</th>
            </tr>
            <tr>
                <td>France</td>
                <td>Paris</td>
                <td>0,01€/nuit</td>
                <td>2 chambres</td>
            </tr>
    </table>    
    <br>
    <img src="../Images/image2.png" height=150 width=200>
    <table>
            <tr>
                <th>Pays</th>
                <th>Ville</th>
                <th>Prix</th>
                <th>Chambres</th>
            </tr>
            <tr>
                <td>France</td>
                <td>Paris</td>
                <td>199,99€/nuit</td>
                <td>4 chambres</td>
            </tr>
    </table> 
</body>
<footer>
    <img src="../Images/logo.png" height=70 width=70>
    <p>Alexandre PRYIMAK</p>
    <p>2026</p>
</footer>
</html>