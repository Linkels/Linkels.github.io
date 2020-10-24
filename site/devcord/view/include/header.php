<?php
ini_set('display_errors','off');
if($_SESSION['statut'] == 'user'){
?>   
    <nav class="navbar navbar-expand-lg navbar-dark header">
      <a class="navbar-brand" href="#"><h1><img src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord.png" width="200px;" alt="logo by Law.Ercity"></h1></a>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
    </ul>
    <span class="navbar-text">
      <h5><?php echo $_SESSION['pseudo']; ?> <?php echo $_SESSION['statut']; ?></h5>
      <a href="http://site.chaumoitre-maxime.fr/devcord/model/unco.php" class="menu-item fas fa-sign-out-alt fa-2x"></a>
    </span>
  </div>
</nav>

<div id="circularMenu" class="circular-menu">

  <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
    <i class="fa fa-plus"></i>
  </a>

  <menu class="items-wrapper">
  <a href="http://site.chaumoitre-maxime.fr/devcord/view/commande.php" class="menu-item">Formu</a>
    <a href="#" class="menu-item">#</a>
    <a href="#" class="menu-item fas fa-arrow-up"></a>
  </menu>

</div>


<div id="circularMenu1" class="circular-menu circular-menu-left">

  <a class="floating-btn" onclick="document.getElementById('circularMenu1').classList.toggle('active');">
    <i class="fa fa-bars"></i>
  </a>

  <menu class="items-wrapper">
    <a href="http://site.chaumoitre-maxime.fr/devcord/index.php" class="menu-item fa fa-home"></a>
    <a href="http://site.chaumoitre-maxime.fr/devcord/view/login.php" class="menu-item fa fa-user"></a>
      <a href="http://site.chaumoitre-maxime.fr/devcord/model/unco.php" class="menu-item fas fa-sign-out-alt fa-2x"></a>
  </menu>

</div>

<?php }elseif ($_SESSION['statut'] == 'admin'){?>

  <nav class="navbar navbar-expand-lg navbar-dark header">
      <a class="navbar-brand" href="#"><h1><img src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord.png" width="200px;" alt="logo by Law.Ercity"> - ADMIN</h1></a>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
    </ul>
    <span class="navbar-text">
      <h5><?php echo $_SESSION['pseudo']; ?> <?php echo $_SESSION['statut']; ?></h5>
      <a href="http://site.chaumoitre-maxime.fr/devcord/model/unco.php" class="menu-item fas fa-sign-out-alt fa-2x"></a>
    </span>
  </div>
</nav>

<div id="circularMenu" class="circular-menu">

  <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
    <i class="fa fa-plus"></i>
  </a>

  <menu class="items-wrapper">
    <a href="http://site.chaumoitre-maxime.fr/devcord/view/commande.php" class="menu-item">Formu</a>
    <a href="#" class="menu-item">#</a>
    <a href="#" class="menu-item">#</a>
    <a href="#" class="menu-item fas fa-arrow-up"></a>
  </menu>

</div>


<div id="circularMenu1" class="circular-menu circular-menu-left">

  <a class="floating-btn" onclick="document.getElementById('circularMenu1').classList.toggle('active');">
    <i class="fa fa-bars"></i>
  </a>

  <menu class="items-wrapper">
    <a href="http://site.chaumoitre-maxime.fr/devcord/index.php" class="menu-item fa fa-home"></a>
    <a href="http://site.chaumoitre-maxime.fr/devcord/view/login.php" class="menu-item fa fa-user"></a>
    <a href="http://site.chaumoitre-maxime.fr/devcord/view/admin/panel.php" class="menu-item fa fa-user"></a>
    <a href="http://site.chaumoitre-maxime.fr/devcord/model/unco.php" class="menu-item fas fa-sign-out-alt fa-2x"></a>
  </menu>

</div>

<?php }else{?>

<nav class="navbar navbar-expand-lg navbar-dark header">
      <a class="navbar-brand" href="#"><h1><img src="http://site.chaumoitre-maxime.fr/devcord/public/img/devcord.png" width="200px;" alt="logo by Law.Ercity"></h1></a>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
    </ul>
    <span class="navbar-text">
    </span>
  </div>
</nav>

<div id="circularMenu" class="circular-menu">

  <a class="floating-btn" onclick="document.getElementById('circularMenu').classList.toggle('active');">
    <i class="fa fa-plus"></i>
  </a>

  <menu class="items-wrapper">
  <a href="http://site.chaumoitre-maxime.fr/devcord/view/commande.php" class="menu-item">Formu</a>
    <a href="#" class="menu-item">#</a>
    <a href="#" class="menu-item fas fa-arrow-up"></a>
  </menu>

</div>


<div id="circularMenu1" class="circular-menu circular-menu-left">

  <a class="floating-btn" onclick="document.getElementById('circularMenu1').classList.toggle('active');">
    <i class="fa fa-bars"></i>
  </a>

  <menu class="items-wrapper">
    <a href="http://site.chaumoitre-maxime.fr/devcord/index.php" class="menu-item fa fa-home"></a>
    <a href="http://site.chaumoitre-maxime.fr/devcord/view/login.php" class="menu-item fa fa-user"></a>
    <a href="http://site.chaumoitre-maxime.fr/devcord/view/register.php" class="menu-item fas fa-registered"></a>
  </menu>

</div>
<?php
 }
?>

