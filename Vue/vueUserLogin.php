<?php $title='Connexion:' ?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="CSS/style.css" /> -->
        <title><?= $title ?></title>
    </head>
    <body>
        <div class="container"> <!-- container -->
          <div class="row justify-content-center" >
            <div class="col-5 text-center">
              <h1 id="titreBlog">Gestionnaire de materiel</h1>
              <h2 id="title"><?= $title ?></h2>
            </div>
          </div> 
          <div class="row justify-content-center">
            <div class="col-8 text-center">
              <form method="POST">
                <label for="username">Username:</label><br>
                <input type="text" id="uname" name="username"><br>
                <label for="password">Password:</label><br>
                <input type="text" id="pwd" name="password"><br>
                <input type="submit" value="Submit" name="submit">
              </form>
            </div>
          </div> 
        </div> <!-- container -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
    <footer id="piedBlog">
        Blog réalisé avec PHP, HTML5 et CSS.
    </footer>
</html>



<!-- style="background-color: red;" -->

