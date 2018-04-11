<?php
session_start();
	if (!isset($_SESSION['mail'])) {
    header('location:formulaire.php');
  }
  else {
    $mailmembre = $_SESSION['mail'];
		$pseudomembre = $_SESSION['pseudo'];
    $bdd = new PDO('mysql:host=localhost;dbname=projet_annuel', 'root', '');
$req= $bdd->prepare('SELECT * FROM adherent WHERE mail = ? ');
$req->execute(array($mailmembre));
while ($donnees = $req->fetch())
{
  $psn = $donnees['psn'];
  $xbox = $donnees['xbox'];
  $steam = $donnees['steam'];
  }
if (isset($psn) AND (!empty($psn)) OR  (isset($xbox)) AND (!empty($xbox)) OR (isset($steam)) AND (!empty($steam)))

{
	?>

	  <!DOCTYPE html>
	  </html>
	  <head>
	  	<meta charset="utf-8">
	  	<link href="css/bootstrap.css" rel="stylesheet">
	  	<link href="css/formulaire.css" rel="stylesheet">
	  	<title>Création d'équipe</title>
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
										<a class="nav-link" href="create_team.php" id="headlink2">Groupes</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#" id="headlink3">Offres</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#" id="headlink4">Informations</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="membre.php?id=" id="headlink5"><?php echo $pseudomembre?></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="deconnexion.php" id="headlink6">Se déconnecter</a>
									</li>
								</ul>
	  	          <form class="form-inline my-2 my-lg-0">
	  	            <input class="form-control mr-sm-2" type="search" placeholder="Chercher un groupe" aria-label="Search">
	  	            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
	  	          </form>
	  	        </div>
	  	      </header>
	          <div class="container">

	    <form class="well form-horizontal" action="verifteam.php" method="post"  id="contact_form" enctype="multipart/form-data">
	<fieldset>

	<legend>Créer ton équipe !</legend>

	<div class="form-group">
	  <label class="col-md-4 control-label">Jeu*</label>
	    <div class="col-md-4 selectContainer">
	    <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
	    <select name="jeu" class="form-control selectpicker" >
	      <option>League of Legends</option>
	      <option>Counter Strike</option>
	      <option>Fornite</option>
	      <option>PUBG</option>
	      <option>H1Z1</option>
	      <option>Dota 2</option>
	      <option>Hearstone</option>
	      <option>Overwatch</option>
	      <option>World of Warcraft</option>
	      <option>Starcraft II</option>
	      <option>Minecraft</option>
	      <option>Heroes of the Storm</option>
	      <option>Fifa 18</option>
	      <option>GTA V</option>
	      <option>Rainbow Six</option>
	      <option>Rocket League</option>
	      <option>Street Fighter V</option>
	      <option>TrackMania Stadium</option>
	      <option>Smite</option>
	      <option>Clash Royale</option>
	    </select>
	  </div>
	</div>
	</div>

	<div class="form-group">
	  <label class="col-md-4 control-label">Nom d'équipe*</label>
	  <div class="col-md-4 inputGroupContainer">
	  <div class="input-group">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  <input  name="nom_equipe" placeholder="Nom" class="form-control"  type="text">
	    </div>
	  </div>
	</div>

	<div class="form-group">
	  <label class="col-md-4 control-label">Logo</label>
	   <div class="col-md-5 inputGroupContainer">
	    <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
	  <input name="avatar"  class="form-control" type="file">
	    </div>
	  </div>
	</div>


	<div class="form-group">
	  <label class="col-md-4 control-label">Plateforme*</label>
	    <div class="col-md-4 selectContainer">
	    <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
	    <select name="plateforme" class="form-control selectpicker" >
	      <option>PC</option>
	      <option>Xbox 360</option>
	      <option >Xbox One</option>
	      <option >PS3</option>
	      <option >PS4</option>
	    </select>
	  </div>
	</div>
	</div>

	<div class="form-group">
	  <label class="col-md-4 control-label">Nombres de joueurs recherché ?*</label>
	  <div class="col-md-4 inputGroupContainer">
	  <div class="input-group">
	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	  <input  name="number_equipe" placeholder="Nombre de joueurs" class="form-control"  type="number" min="1" max="20">
	    </div>
	  </div>
	</div>



	<div class="form-group">
	  <label class="col-md-4 control-label">But de l'équipe*</label>
	    <div class="col-md-4 selectContainer">
	    <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
	    <select name="but_equipe" class="form-control selectpicker" >
	      <option>Fun</option>
	      <option>Competitive</option>
	      <option>Un peu des deux</option>
	    </select>
	  </div>
	</div>
	</div>


	<div class="form-group">
	  <label class="col-md-4 control-label">Niveau de l'équipe*</label>
	    <div class="col-md-4 selectContainer">
	    <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
	    <select name="niveau_equipe" class="form-control selectpicker" >
	      <option>Faible</option>
	      <option>Moyen</option>
	      <option>Bon</option>
	      <option>Excellent</option>
	    </select>
	  </div>
	</div>
	</div>


	<div class="form-group">
	  <label class="col-md-4 control-label">Site de l'équipe</label>
	   <div class="col-md-4 inputGroupContainer">
	    <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
	  <input name="website" placeholder="Site internet" class="form-control" type="url">
	    </div>
	  </div>
	</div>


	 <div class="form-group">
	                        <label class="col-md-4 control-label">Est-ce une structure ?*</label>
	                        <div class="col-md-4">
	                            <div class="radio">
	                                <label>
	                                    <input type="radio" name="structure" value="Oui" /> Oui
	                                </label>
	                            </div>
	                            <div class="radio">
	                                <label>
	                                    <input type="radio" name="structure" value="Non" /> Non
	                                </label>
	                            </div>
	                        </div>
	                    </div>



	<div class="form-group">
	  <label class="col-md-4 control-label">Description de l'équipe*</label>
	    <div class="col-md-4 inputGroupContainer">
	    <div class="input-group">
	        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
	        	<textarea class="form-control" name="description" placeholder="Décriver l'équipe, les ambitions ..."></textarea>
	  </div>
	  </div>
	</div>


	<div class="form-group">
	  <label class="col-md-4 control-label"></label>
	  <div class="col-md-4">
	    <button type="submit" class="btn btn-warning" >Valider <span class="glyphicon glyphicon-send"></span></button>
	  </div>
	</div>

	</fieldset>
	</form>
	</div>
	    </div>
<?php
}
else {
  header('location:accueil.php?error=Veuillez_renseigner_console');
}

}
?>
