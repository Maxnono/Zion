
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="SHORTCUT ICON" href="img/logo-trans.png"/>
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

              <a class="nav-link" href="#" id="headlink2">Groupes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="headlink3">Offres</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="headlink4">Informations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="formulaire.php" id="headlink5">S'inscrire</a>
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

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Tables</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="">Adhérents <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Equipes <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Amis <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Article <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Offres <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Sujet de discussion <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Message<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Messages privées <span class="sr-only">(current)</span></a>
            </li>

          </ul>
        </div>
      </nav>
<p> Modification des membres : </p>
<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projet_annuel;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


if (isset($_GET['supprimer']) AND !empty($_GET['supprimer']))
{
	$supprimer = (int) $_GET['supprimer'];
	$req = $bdd ->prepare('DELETE FROM adherent WHERE id = ? ');
	$req->execute(array($supprimer));
}

if (isset($_GET['add_droit']) AND !empty($_GET['add_droit']))
{
	$add_droit = (int) $_GET['add_droit'];
	$req = $bdd ->prepare('UPDATE adherent SET droit = 1 WHERE id = ?');
	$req->execute(array($add_droit));
}

if (isset($_GET['remove_droit']) AND !empty($_GET['remove_droit']))
{
	$remove_droit = (int) $_GET['remove_droit'];
	$req = $bdd ->prepare('UPDATE adherent SET droit = 0 WHERE id = ?');
	$req->execute(array($remove_droit));
}


$reponse = $bdd->query('SELECT * FROM adherent');

  ?>
  <table>
    <tr>
    <td>Id</todo>
    <td>Pseudo</td>
  </tr>
</table>
  <?php

while ($donnees = $reponse->fetch())
{

	echo $donnees['id'] . " " . $donnees['pseudo']
	?>
	<button> <a class="mot" href="admin.php?supprimer=<?=$donnees['id'] ?>">Supprimer le membre </a></button>
	<?php if ($donnees['droit'] == 0) {
		?> <button> <a class="mot" href="admin.php?add_droit=<?=$donnees['id'] ?>">Autoriser des droits d'admin </a></button> <?php } ?>
		<?php if ($donnees['droit'] >0) { ?>
			<button ><a class="mot" href="admin.php?remove_droit=<?=$donnees['id'] ?>">Supprimer les droits d'admin </a></button> <?php } ?>



			<button type="button" value="Modifier les infos" onclick="toggle_text('span_txt2');">Modifier les informations</button><br>
			<span id="span_txt2" style="display:none;">

				<form  action="" method="post">
				<input type="text" name="pseudo" placeholder="Nouveau Pseudo"> 		<input type="submit" name="Valider_un" value="Modifier">
 <br>
				<input type="text" name="mail" placeholder="Nouvelle email"><input type="submit" name="Valider_deux" value="Modifier" onclick="modifier_un ();">
 <br>
				<input type="text" name="birthday" placeholder="Nouvelle date de naissance"><input type="submit" name="Valider_trois" value="Modifier" onclick="">
 <br>
				<input type="text" name="country" placeholder="Nouveau pays"><input type="submit" name="Valider_quatre" value="Modifier">
 <br>
</form>

<script>
function modifier_un ()
{
	header('location:admin.php?lol');
}
</script>




</span>
			<script type="text/javascript">
			function toggle_text(id) {
			  var span = document.getElementById(id);
			  if(span.style.display == "none") {
			    span.style.display = "inline";
			  } else {
			    span.style.display = "none";
			  }
			}
			</script> <br>




<?php
}

$reponse->closeCursor();
?>
<br> <div> Consulter la liste des : </div>
<a href="log.txt"> Adhérent </a> <br>
</body>

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
