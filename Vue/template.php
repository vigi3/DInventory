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
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@900&display=swap" rel="stylesheet">

        <!-- My CSS -->
        <link rel="stylesheet" href="CSS/style.css">
        <title><?= $title ?></title>
    </head>
    <body class="vh-100 mainBackground">
        <!-- NavBar -->
        <nav class="nav d-inline-flex flex-column nav-justified navbarColor vh-100 pt-5 shadow-sm" id="sticky-sidebar"> 
            <a class="nav-link link-light <?= $focusNavbarHome ?>" aria-current="page" href="<?= "index.php?action=MainPage"?>"><h2><i class="bi bi-app hoverNav"></i></i></h1></a> <!-- Home -->
            <a class="nav-link link-light <?= $focusNavbarList ?>" href="<?= "index.php?action=ItemList"?>"><h2><i class="bi bi-box hoverNav"></i></h2></a> <!-- Products -->
            <a class="nav-link link-light <?= $focusNavbarReserv ?>" href="<?= "index.php?action=Reservation"?>"><h2><i class="bi bi-calendar3 hoverNav"></i></h2></a> <!-- Reservation -->
            <a class="nav-link link-light <?= $focusNavbarAddItem ?>" href="<?= "index.php?action=AddItem"?>" aria-disabled="true"><h2><i class="bi bi-plus-circle hoverNav"></i></h2></a> <!-- Add product -->
            <a class="nav-link link-light" href="<?= "index.php?action=LogOut"?>" aria-disabled="true"><h2><i class="bi bi-person-x hoverNav"></i></h2></a> <!-- Log out -->
            <a class="nav-link link-light" href="#" tabindex="-1" aria-disabled="true"><h2><i class="bi bi-gear hoverNav"></i></h2></a> <!-- Setting/Add User -->
        </nav>  
        <!-- EndNavBar -->
        <?= $pieChart ?>
        <!-- Container -->
        <div class="container-fluid h-100">
            <!-- Title -->
            <div class="row py-5">
                <div class="col-1">
                </div>
                <div class="col-8 align-self-start"> 
                    <h1 class="title text-capitalize fontSizeWelcome fontBodoni"><?= $title ?><?= $nameUser ?></h1>
                    <h5 class="fw-light fst-italic text-secondary"><?= $subtitle ?></h5>
                </div>
            </div>
            <!-- EndTitle -->

            <?= $content ?>

            <!-- Footer -->
            <div class="row mb-5 pt-5">
                <div class="col-1"></div>
                <div class="col-3">
                    <footer id="piedBlog">
                    </footer>
                </div>
            </div>
            <!-- EndFooter -->
        </div> 
        <!-- EndContainer -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="JS/pieChart.js"></script>
    </body>
    
</html>


<!-- style="background-color: red;" -->

