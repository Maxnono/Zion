<?php
session_start();
if (!isset($_SESSION['pseudo'])) {
	header ('Location: formulaire.php');
	exit();
}
?>

<html>
<head>
<title>Espace membre</title>
</head>

<body>
Bienvenue <?php echo htmlentities(trim($_SESSION['pseudo'])); ?> !<br />
<a href="deconnexion.php">Déconnexion</a>
</body>
</html>
