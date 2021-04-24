<?php $title='Connexion:' ?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

        <!-- My CSS -->
        <link rel="stylesheet" href="CSS/style.css" />
        <title><?= $title ?></title>
    </head>
    <body class="loginBackground">
        <div class="container margTopContainer"> <!-- container -->
          <div class="row justify-content-center">
            <div class="col-5 text-center">
              <h1 id="titreBlog">Gestionnaire de materiel</h1>
              <h2 id="title" class="mt-5 mb-1"><?= $title ?></h2>
            </div>
          </div> 
          <div class="row justify-content-center mt-5">
            <div class="col-4 text-center">
              <form method="POST">
                <label for="username" class="form-label">Username:</label><br>
                <input type="text" name="username" class="form-control" placeholder="name@example.com"><br>
                <label for="password" class="form-label">Password:</label><br>
                <input type="password" name="password" class="form-control"><br>
                <input type="submit" value="Submit" name="submit" class="btn btn-secondary" onclick='loadPieChart()'>
              </form>
            </div>
          </div> 
        </div> <!-- Endcontainer -->

        <footer id="piedBlog">  <!-- Footer --> 
          <div class="container mt-5 pt-5"> <!-- container -->
            <div class="row justify-content-center mt-5">
              <div class="col-4 text-center">
                Réalisé par Vincent REINOSO, 2021.
              </div>  
            </div>
          </div> <!-- Endcontainer -->
        </footer> <!-- EndFooter -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
    
</html>



<!-- style="background-color: red;" -->

