<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/accueil.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="SHORTCUT ICON" href="img/logo-trans.png"/>
  </head>


  <body>

      <header class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="accueil.php"><img src="img/logo-Zion.png" alt="Logo" id="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon icon-span"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarHeader">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#" id="headlink1">Jeux</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="create_team.php" id="headlink2">Equipes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create_team.php" id="headlink3">Offres</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="headlink4">Informations</a>
            </li>
            <?php
              if (!isset($_SESSION['mail'])) {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="formulaire.php" id="headlink5">S'inscrire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="formconnexion.php" id="headlink6">Se connecter</a>
            </li>
            <?php
        	  }
        	   else
        	  {
        		?>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="membre.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['pseudo']; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="profil.php?id=<?php echo $_SESSION['id']; ?>">Mon profil</a>
              <a class="dropdown-item" href="#">Mes équipes</a>
              <?php
              if ($_SESSION['mail'] = 'tutur.77@hotmail.fr')
              {
                ?>
                <a class="dropdown-item" href="backoffice\admin.php">Back office</a>
                <?php

              }
              ?>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="deconnexion.php">Se déconnecter</a>
            </div>
          </li>
          <?php
          }
          ?>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
            <input class="form-control mr-sm-2" type="search" placeholder="Chercher un groupe" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
          </form>
        </div>
      </header>

  	<div class="container-fluid">
      <div class="row" id="imagerow">
        <div class="offset-lg-2 col-lg-8 offset-lg-2 offset-2-sm col-sm-8 offset-sm-2" id="cadre">
          <h1>TROUVEZ VOS PARTENAIRES DE JEU</h1>
          <h2>FACILEMENT ET RAPIDEMENT</h2>
          <br><br>
          <p>Trouvez d'autres passionnés avec qui jouer en moins de deux minutes.<br>
             Que vous soyez joueur de haut niveau, ou joueur occasionnel, partagez l'instant.</p>
        </div>
        <div class="col-lg-12">
          <div class="row" id="row2">
            <div class="offset-lg-2 col-lg-2 offset-sm-2 col-sm-3 offset-2 col-8 offset-2 mb-4" id="box1"><img src="https://image.noelshack.com/fichiers/2018/11/3/1520989278-logodef.png"
              alt="def" width="128px" height="128px"><br>
              <h1 id="title1">REJOIGNEZ UNE ÉQUIPE</h1>
              <a href="#section1"><img src="https://image.noelshack.com/fichiers/2018/11/4/1521125034-fleche.png" alt="fleche" width="32" height="32"></a>
            </div>
            <div class="offset-lg-1 col-lg-2 offset-sm-2 col-sm-3 offset-sm-2 offset-2 col-8 offset-2 mb-4" id="box2"><img src="https://image.noelshack.com/fichiers/2018/11/4/1521123130-sword.png"
              alt="att" width="128px" height="128px"><br>
              <h1 id="title2">CRÉEZ VOTRE ÉQUIPE</h1>
              <a href="#section2"><img src="https://image.noelshack.com/fichiers/2018/11/4/1521125034-fleche.png" alt="fleche" width="32" height="32"></a>
            </div>
            <div class="offset-lg-1 col-lg-2 offset-sm-4 col-sm-4 offset-2 col-8 offset-2 mb-4" id="box3"><img src="https://image.noelshack.com/fichiers/2018/11/4/1521124236-dice.png"
              alt="dice" width="126px" height="126px"><br>
              <h1 id="title3">CONSULTEZ LES OFFRES</h1>
              <a href="#section3"><img src="https://image.noelshack.com/fichiers/2018/11/4/1521125034-fleche.png" alt="fleche" width="32" height="32"></a>
            </div>
          </div>
        </div>

        <div class="col-lg-12 divSections" id="section1">
          <div class="row">
            <div class="offset-lg-2 col-lg-1 offset-sm-4 col-sm-4 offset-sm-4 col-12 mr-5 logo-section"><img src="https://image.noelshack.com/fichiers/2018/11/3/1520989278-logodef.png"
              alt="def" width="128px" height="128px">
            </div>
            <div class="col-lg-5 divText">
              <h1>REJOIGNEZ<br>
                  UNE ÉQUIPE</h1>
              <h2 class="divTitle">Jouez avec des gens qui partagent <b>votre passion</b></h2>
              <p>Marre de jouer seul ? Avec Zion et son système de groupe innovant, vous trouverez les partenaires qui vous conviennent.</p>
              <p>Créez votre profil en quelques minutes, et commencez à chercher grâce à nos fonctionnalités le groupe qui vous correspond.</p>
              <p>Rejoignez la communauté.</p>
            </div>
            <div class="col-lg-3">
              <div class="row">
                <a class="btn btn-default btn-custom" href="membre.php" role="button">Personnalise ton profil</a>
              </div>
              <div class="row">
                <a class="btn btn-default btn-custom" href="create_team.php" role="button">Equipes</a>
              </div>
              <div class="row">
                <div class="container-fluid etapesContain">
                  <p class="containTitle">Comment rejoindre une équipe ?</p>
                  <p class="etapes"><b>1. Modifie</b> votre profil pour renseigner vos informations</p>
                  <p class="etapes"><b>2. Cherchez</b> une équipe par jeux, par type, et par catégorie</p>
                  <p class="etapes"><b>3. Rejoignez !</b></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 divSections" id="section2">
          <div class="row">
            <div class="offset-lg-2 col-lg-1 offset-sm-4 col-sm-4 offset-sm-4 col-12 mr-5 logo-section"><img src="https://image.noelshack.com/fichiers/2018/11/4/1521123130-sword.png"
              alt="def" width="128px" height="128px">
            </div>
            <div class="col-lg-5 divText">
              <h1>CRÉEZ<br>
                  UNE ÉQUIPE</h1>
              <h2 class="divTitle">Rassemblez autour de <b>votre passion</b></h2>
              <p>Zion vous offre la possibilité de créer une équipe à votre image, et de la promouvoir sur tout le site.</p>
              <p>Façonnez votre équipe, recrutez vos joueurs, créez votre rêve. Tout est à votre portée.</p>
              <p>Rejoignez la communauté.</p>
            </div>
            <div class="col-lg-3">
              <div class="row">
                <a class="btn btn-default btn-custom" href="create_team.php" role="button">Créer ton groupe</a>
              </div>
              <div class="row">
                <a class="btn btn-default btn-custom" href="#" role="button">Jeux</a>
              </div>
              <div class="row">
                <div class="container-fluid etapesContain">
                  <p class="containTitle">Comment créer une équipe ?</p>
                  <p class="etapes"><b>1. Modifie</b> votre profil pour renseigner vos informations</p>
                  <p class="etapes"><b>2. Remplissez</b> votre page d'équipe, en personnalisant votre page pour vos futurs membres.</p>
                  <p class="etapes"><b>3. Recrutez !</b></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 divSections" id="section3">
          <div class="row">
            <div class="offset-lg-2 col-lg-1 offset-sm-4 col-sm-4 offset-sm-4 col-12 mr-5 logo-section"><img src="https://image.noelshack.com/fichiers/2018/11/4/1521124236-dice.png"
              alt="def" width="128px" height="128px">
            </div>
            <div class="col-lg-5 divText">
              <h1>CONSULTEZ<br>
                  LES OFFRES</h1>
              <h2 class="divTitle">Trouvez les gens qui vivent <b>votre passion</b></h2>
              <p>Trouver des partenaires de jeux de plateau est devenu compliqué avec l'arrivée d'Internet.</p>
              <p>Zion est là pour mettre à l'honneur cette pratique, et pour vous aider à trouver d'autres passionnés avec qui jouer.</p>
              <p>Rejoignez la communauté.</p>
            </div>
            <div class="col-lg-3">
              <div class="row">
                <a class="btn btn-default btn-custom" href="offres.html" role="button">Créer une offre</a>
              </div>
              <div class="row">
                <a class="btn btn-default btn-custom" href="offres.html" role="button">Offres</a>
              </div>
              <div class="row">
                <div class="container-fluid etapesContain">
                  <p class="containTitle">Comment consulter les offres ?</p>
                  <p class="etapes"><b>1. Modifier</b> votre profil et renseigner vos informations</p>
                  <p class="etapes"><b>2. Cherchez</b> les offres existantes, ou créez-en une nouvelle.</p>
                  <p class="etapes"><b>3. Retrouvez </b>les passionnés, et jouez !</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="row">
        <div class="offset-lg-1 col-lg-2 offset-sm-2 col-sm-8 offset-sm-2 col-12 logoFoot">
          <img src="img/logo-Zion.png" alt="Logo" id="logo">
        </div>
        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-3 col-sm-4 footSec">
              <p class="titleFoot">Jeux</p>
              <ul class="liFoot">
                <li><a href="#" class="linkFoot">Liste des jeux</a></li>
                <li><a href="#" class="linkFoot">Ajouter un jeu</a></li>
                <li><a href="#" class="linkFoot">Catégories</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-sm-4 footSec">
              <p class="titleFoot">Groupes</p>
              <ul class="liFoot">
                <li><a href="#" class="linkFoot">Liste des groupes</a></li>
                <li><a href="#" class="linkFoot">Rejoindre un groupe</a></li>
                <li><a href="create_team.php" class="linkFoot">Créer un groupe</a></li>
                <li><a href="#" class="linkFoot">Chercher un groupe</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-sm-4 footSec">
              <p class="titleFoot">Offres</p>
              <ul class="liFoot">
                <li><a href="#" class="linkFoot">Liste des offres</a></li>
                <li><a href="#" class="linkFoot">Créer une offre</a></li>
                <li><a href="#" class="linkFoot">Parcourir les offres</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-sm-4 footSec">
              <p class="titleFoot"s>Informations</p>
              <ul class="liFoot">
                <li><a href="#" class="linkFoot">Développeurs</a></li>
                <li><a href="#" class="linkFoot">Conditions d'utilisation</a></li>
                <li><a href="#" class="linkFoot">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
