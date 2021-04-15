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
    <body class="vh-100 mainBackground">
        <!-- NavBar -->
        <nav class="nav d-inline-flex flex-column nav-justified bg-dark vh-100 pt-5 shadow-sm" id="sticky-sidebar"> 
            <a class="nav-link link-light" aria-current="page" href="#"><h2><i class="bi bi-app hoverNav"></i></i></h1></a> <!-- Home -->
            <a class="nav-link link-light" href="#"><h2><i class="bi bi-box hoverNav"></i></h2></a> <!-- Products -->
            <a class="nav-link link-light" href="#"><h2><i class="bi bi-calendar3 hoverNav"></i></h2></a> <!-- Reservation -->
            <a class="nav-link link-light" href="#" tabindex="-1" aria-disabled="true"><h2><i class="bi bi-plus-circle hoverNav"></i></h2></a> <!-- Add product -->
            <a class="nav-link link-light" href="#" tabindex="-1" aria-disabled="true"><h2><i class="bi bi-person-x hoverNav"></i></h2></a> <!-- Log out -->
            <a class="nav-link link-light" href="#" tabindex="-1" aria-disabled="true"><h2><i class="bi bi-gear hoverNav"></i></h2></a> <!-- Setting/Add User -->
        </nav>  
        <!-- EndNavBar -->
        <!-- Container -->
        <div class="container-fluid">
            <!-- Title -->
            <div class="row py-5">
                <div class="col-1">
                </div>
                <div class="col-8 align-self-start"> 
                    <h1 class="title text-capitalize fontSizeWelcome">Bienvenue, <?= $nameUser ?></h1>
                    <h5 class="fw-light fst-italic text-secondary">Gestionnaire de materiel</h5>
                </div>
            </div>
            <!-- EndTitle -->

            <!-- Graph -->
            <div class="row">
                <div class="col-1"></div>
                <!-- Graph Black -->
                <div class="col-2 px-4">
                    <div class="card graphBlack text-white text-center graphCorner shadow-sm">
                        <div class="card-body">
                            <p class="card-subtitle text-muted">Outils Réservés: </p>
                            <h3 class="card-title"><a href="#" class="link link-light text-decoration-none">###</a></h3>
                            <p class="card-subtitle text-muted">Items</p>
                        </div>
                    </div>  
                </div>
                <!-- EndGraph Black -->

                <!-- Graph Yellow -->
                <div class="col-2 px-4">
                    <div class="card graphYellow text-white text-center graphCorner shadow-sm">
                        <div class="card-body">
                            <p class="card-subtitle text-muted">Stock Total Restant: </p>
                            <h3 class="card-title"><a href="#" class="link link-light text-decoration-none">###</a></h3>
                            <p class="card-subtitle text-muted">Items</p>
                        </div>
                    </div>  
                </div>
                <!-- EndGraph Yellow -->

                <!-- Graph Orange -->
                <div class="col-2 px-4">
                    <div class="card graphOrange text-white text-center graphCorner shadow-sm">
                        <div class="card-body">
                            <p class="card-subtitle text-muted">Stock Faible: </p>
                            <h3 class="card-title"><a href="#" class="link link-light text-decoration-none">###</a></h3>
                            <p class="card-subtitle text-muted">Items</p>
                        </div>
                    </div>  
                </div>
                <!-- EndGraph Orange -->

                <!-- Graph Red -->
                <div class="col-2 px-4">
                    <div class="card graphRed text-white text-center graphCorner shadow-sm">
                        <div class="card-body">
                            <p class="card-subtitle text-muted">Rupture de Stock: </p>
                            <h3 class="card-title"><a href="#" class="link link-light text-decoration-none">###</a></h3>
                            <p class="card-subtitle text-muted">Items</p>
                        </div>
                    </div>  
                </div>
                <!-- EndGraph Red -->
            </div>
            <!-- EndGraph -->

            <!-- Items List -->
            <div class="row mt-5 pt-5">
                <div class="col-1"></div>
                <div class="col-3">
                    <h3>Liste d'items: </h3>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-1"></div>
                <div class="col-8">
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Type</th>
                                <th scope="col">Status</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Quantité</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $content ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- EndItems List -->

            <!-- Footer -->
            <div class="row pt-5">
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
    </body>
    
</html>


<!-- style="background-color: red;" -->

