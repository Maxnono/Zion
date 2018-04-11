<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

	<title>Creation de groupe</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="feuille.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="SHORTCUT ICON" href="image/logo-trans.png"/>
</head>
<body>

	<header class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><img src="img/logo-Zion.png" alt="Logo" id="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon icon-span"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarHeader">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#" id="headlink1">Jeux</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#" id="headlink2">Groupes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="headlink3">Offres</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="headlink4">Informations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="headlink5">S'inscrire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="headlink6">Se connecter</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Chercher un groupe" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
          </form>
        </div>
      </header>

	<div id='titre'>
	<li><a href='accueil.php'>Accueil</a></li>
		<h1><strong>Equipes</strong></h1><br>


	</div>


	<div class="container" >

		<div class="row" >


		<div class="col-lg-2"></div>
		<div class="col-lg-3">Jeu :</div>
		<div class="col-lg-1">Niveau :</div>
		<div class="col-lg-1">Nombres joueurs :</div>
		<div class="col-lg-2">Type d'équipe :</div>
		</tr>
		</div>
		<br/>


	<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_annuel;charset=utf8', 'root', '');
$reponse = $bdd->query('SELECT * FROM equipe');
		?>

		<div class="row" id='equipe'>
				<div class="col-lg-2"> </div>

				<div class="col-lg-3">
					<?php
				 	while($valeurs = $reponse->fetch())
						{

							echo $valeurs['jeu'] . ' ' . '|' . ' ' . $valeurs['plateforme'] . '<br>';

						}
					?>
				</div>

			<div class="col-lg-1">
				<?php
				$reponse1 = $bdd->query('SELECT * FROM equipe');
					while($valeurs1 = $reponse1->fetch())
					{
						echo $valeurs1['niveau_equipe'] . "<br>";
					}
				?>
			</div>


			<div class="col-lg-1">
					<?php
					$reponse3 = $bdd->query('SELECT * FROM equipe');
					while($valeurs3 = $reponse3->fetch())
					{
						echo $valeurs3['number_equipe'] . "<br>";
					}
					?>
			</div>


			<div class="col-lg-2">
					<?php
					$reponse2 = $bdd->query('SELECT * FROM equipe');
					while($valeurs2 = $reponse2->fetch())
					{
						echo $valeurs2['but_equipe'] . "<br>";
					}
					?>
			</div>

			<div class="col-lg-3">

			 <a href="#">Plus d'info ?</a>
			</div>

			</div>



		</div>




	</div>






</body>
<footer class="row">
        <div class="offset-lg-1 col-lg-2 offset-sm-2 col-sm-8 offset-sm-2 col-12 logoFoot">
          <img src="image/logo-Zion.png" alt="Logo" id="logo">
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
                <li><a href="#" class="linkFoot">Créer un groupe</a></li>
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
</html>
