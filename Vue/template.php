<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <!-- <link rel="stylesheet" href="CSS/style.css" /> -->
        <title><?= $title ?></title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">Gestionnaire de materiel</h1></a>
                <p>Bienvenue !</p>
            </header>
            <div id="contenu">
                <?= $content ?>
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                Blog réalisé avec PHP, HTML5 et CSS.
            </footer>
        </div> <!-- #global -->
    </body>
</html>
