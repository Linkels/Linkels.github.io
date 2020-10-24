<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/logo.png">
      <title>Nous contacter</title>
  </head>
<body>
  <?php include "header.php";?>
  <section class="presentation">
    <center><font size="20px">Nous Contacter</font></center>
  <center>  Une suggestions ? Une question ? Vous pouvez nous contacter ici même ! </center>
    <hr/>
  </section>
    <form action="cible.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-7">
          <label for="inputNom" name="nom">Nom</label>
          <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-7">
          <label for="inputEmail" name="email">Email</label>
          <input type="text" class="form-control" name="email" placeholder="Entrez votre adresse Email">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-7">
          <label for="inputSujet" name="sujet">Sujet</label>
          <input type="text" class="form-control" name="sujet" placeholder="Sujet">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-7">
          <textarea name="text" class="form-control" id="contenu" placeholder="Votre message ici" rows="8" cols="10"></textarea>
        </div>
      </div>
      <div class="button">
        <button type="submit" class="btn btn-dark">Envoyer</button>
      </div>
  </form>
<br><br>
    <?php include "footer.php";?>
</body>
