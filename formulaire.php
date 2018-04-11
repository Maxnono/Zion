<!DOCTYPE html>
</html>
<head>
	<meta charset="utf-8">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/formulaire.css" rel="stylesheet">
	<title>Formulaire d'inscription</title>
</head>
<body>

	      <header class="navbar navbar-expand-lg">
	        <a class="navbar-brand" href="accueil.html"><img src="img/logo-Zion.png" alt="Logo" id="logo"></a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon icon-span"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarHeader">
	          <ul class="navbar-nav mr-auto">
	            <li class="nav-item">
	              <a class="nav-link" href="#" id="headlink1">Jeux</a>
	            </li>

	              <a class="nav-link" href="create_team.php" id="headlink2">Groupes</a>
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
	              <a class="nav-link" href="formconnexion.php" id="headlink6">Se connecter</a>
	            </li>
	          </ul>
	          <form class="form-inline my-2 my-lg-0">
	            <input class="form-control mr-sm-2" type="search" placeholder="Chercher un groupe" aria-label="Search">
	            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
	          </form>
	        </div>
	      </header>
	<div  id="div_formulaire" class="offset-sm-4 col-sm-4 offset-sm-4">

<form class="form-horizontal"  action="verifinscription.php" method="POST">

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email: </label>
    <div class="col-sm-10">
  <input type="email" class="form-control" name="mail" id="email" placeholder="Entrer votre adresse mail" autofocus required>
</div>

	<div class="form-group">
    <label class="control-label col-sm-2" for="pseudo"> Pseudo </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Entrer votre pseudo ">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-12" for="pwd">Mot de passe ( 6 caractères au minimum, une majuscule,un chiffre ) :</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Entrer votre mot de passe">
    </div>
  </div>

	<div class="form-group">
    <label class="control-label col-sm-12" for="pwd_password">Confirmer le mot de passe</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password_confirm"  id="pwd_confirm" placeholder="Entrer le mot de passe">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Rester connecté</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Valider</button>
    </div>
  </div>
</div>
</form>

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


</body>
</html>
