<!DOCTYPE html>
<head>
	<meta charset="utf-8"
	<title> Admin</title>
	<link rel="steelsheet" href="admin.css">
</head>

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

while ($donnees = $reponse->fetch())
{
	echo $donnees['id']. $donnees['pseudo']
	?>
	<a href="admin.php?supprimer=<?=$donnees['id'] ?>">Supprimer le membre</a>
	<?php if ($donnees['droit'] == 0) {
		?> <a href="admin.php?add_droit=<?=$donnees['id'] ?>">Autoriser des droits d'admin</a> <?php } ?>
		<?php if ($donnees['droit'] >0) { ?>
			<a href="admin.php?remove_droit=<?=$donnees['id'] ?>">Supprimer les droits d'admin</a> <?php } ?>
			<a href="admin.php?modif_infos=<?=$donnees['id'] ?>">Modifier les informations </a> <br> <?php
}


$reponse->closeCursor();
?>
<br> <div> Consulter la liste des : </div>
<a href="log.txt"> Adhérent </a> <br>
