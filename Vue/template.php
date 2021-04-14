<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

        <!-- My CSS -->
        <link rel="stylesheet" href="CSS/style.css">
        <title><?= $title ?></title>
    </head>
    <body class="heightGraphPage">
        <div class="d-inline-flex justify-content-center bd-highlight h-100"> <!-- FlexBox Container -->
                <div class="pt-5 px-0 bg-dark"> <!-- NavBar -->
                    <ul class="nav flex-column mt-5 pt-5 px-1 bg-dark">
                        <li class="nav-item pb-3">
                            <a class="nav-link link-light" aria-current="page" href="#"><h2><i class="bi bi-app"></i></i></h1></a> <!-- Home -->
                        </li>
                        <li class="nav-item pb-3">
                            <a class="nav-link link-light" href="#"><h2><i class="bi bi-box"></i></h2></a> <!-- Products -->
                        </li>
                        <li class="nav-item pb-3">
                            <a class="nav-link link-light" href="#"><h2><i class="bi bi-calendar3"></i></h2></a> <!-- Reservation -->
                        </li>
                        <li class="nav-item pb-3">
                            <a class="nav-link link-light" href="#" tabindex="-1" aria-disabled="true"><h2><i class="bi bi-plus-circle"></i></h2></a> <!-- Add product -->
                        </li>
                        <li class="nav-item pb-3">
                            <a class="nav-link link-light" href="#" tabindex="-1" aria-disabled="true"><h2><i class="bi bi-person-x"></i></h2></a> <!-- Log out -->
                        </li>
                        <li class="nav-item pb-3">
                            <a class="nav-link link-light" href="#" tabindex="-1" aria-disabled="true"><h2><i class="bi bi-gear"></i></h2></a> <!-- Setting/Add User -->
                        </li>
                    </ul>
                </div> <!-- EndNavBar -->
        </div> <!-- End FlexBox Container -->
        <div class="d-inline-flex"> <!-- FlexBox Container -->
            <div class="test" style="background-color: blue;">
                <h1 class="title">Bienvenue, <?= $nameUser ?></h1>
                <h4>Gestionnaire de materiel</h4>
                <p>Bienvenue !</p>
                <p><?= $content ?></p>
            </div>
            
        </div> <!-- End FlexBox Container -->
        <footer id="piedBlog">
            Blog réalisé avec PHP, HTML5 et CSS.
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
    
</html>


<!-- style="background-color: red;" -->

