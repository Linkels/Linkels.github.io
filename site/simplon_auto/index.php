<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/logo.png">
      <title>Home</title>
  </head>
      <body>
        <?php include "header.php";?>

        <br>
        <center>
          <h1> Simplon Auto</h1> </center> <br>
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            Simplon est dorénavant un revendeur certifié d'automobile compatible aux tableaux de bord
            de technologie "Android Car©"<br>
            De plus, chaque Simploniens et Simploniennes aura droit à une réduction du prix ainsi
            qu'un OS Android plus poussée afin de coder pendant les embouteillages, de regarder des films
            d'avoir sa playlist du téléphone ou PC sans CD, etc, etc..
            </div>
            <div class="col-md-2">
            </div>
            <div id="content">
              <div class="card-deck mr-4 ml-4">
                <div class="card text-white bg-dark mb-3" style="max-width: 39rem;">
                  <center><img src="img/car_mercedes.png" class="card-img-top" alt="Mercedes"></center>
                  <div class="card-body">
                    <h5 class="card-title">La Nouvelle Classe A!</h5>
                    <p class="card-text">Nouvelle voiture Classe A de Mercedes! Venez lire notre tout dernier article...</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"><a href="a_mercedes.php">En savoir plus</a></small>
              </div>
            </div>
            <div class="card border-dark mb-3" style="max-width: 39rem;">
              <center><img src="img/car_lambo.png" class="card-img-top" alt="Lamborghini"></center>
              <div class="card-body">
                <h5 class="card-title">La Lamborghini Urus enfin disponible!</h5>
                <p class="card-text">Des performances incroyables, ce petit bijou vous emmènera partout avec puissance et
                                    classe!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><a href="a_lamborghini.php">En savoir plus</a></small>
              </div>
            </div>
            <div class="card text-white bg-dark mb-3" style="max-width: 39rem;">
              <center><img src="img/car_audi.png" class="card-img-top" alt="Audi"></center>
              <div class="card-body">
                <h5 class="card-title">L'audi A3 est chez nous!</h5>
                <p class="card-text">Venez découvrir notre nouvelle arrivée! L'audi A3,
                                      avec une belle réduction pour nos amis Simploniens!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><a href="a_audi.php">En savoir plus</a></small>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php include "footer.php";?>
      </body>
</html>
