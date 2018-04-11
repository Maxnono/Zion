<?php


if ( (htmlspecialchars(isset($_POST['mail']))) && (htmlspecialchars(!empty($_POST['mail'])))
&& (htmlspecialchars(isset($_POST['password']))) && (htmlspecialchars(!empty($_POST['password'])))
&& (htmlspecialchars (isset($_POST['password_confirm']))) && (htmlspecialchars(!empty($_POST['password_confirm'])))
&& (htmlspecialchars (isset($_POST['pseudo']))) && (htmlspecialchars (!empty($_POST['pseudo']))) )

{
	if (strlen($_POST['password']) >= 6 && preg_match('/(?=.*[0-9])[A-Z]|(?=.*[A-Z])[0-9]/', $_POST['password']))
	{

				if ($_POST['password'] == $_POST['password_confirm'])
				{

					$bdd = new PDO('mysql:host=localhost;dbname=projet_annuel', 'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
					$check = $bdd->prepare('SELECT mail FROM adherent WHERE mail=:mail');
					$check->execute(array('mail' => $_POST['mail']));
					$num_rows = $check->rowCount();
							if($num_rows==0)
							{

								$log=fopen("log.txt", "r+");
								fseek($log, 0, SEEK_END);
								fputs($log,$_POST['pseudo']."\n");
								session_start();

								$_SESSION['pseudo'] = $_POST['pseudo'];
								$_SESSION['mail'] = $_POST['mail'];

								$password_crypt = sha1($_POST['password']);
								$req = $bdd->prepare('INSERT INTO adherent (mail,pseudo,password,date_inscription) VALUES (:mail,:pseudo,:password,NOW())');
								$req ->execute(array(
								'mail' => $_POST['mail'],
								'pseudo' => $_POST['pseudo'],
								'password' =>$password_crypt
								));
								$reqid = $bdd->prepare('SELECT id FROM adherent WHERE mail = ?');
								$reqid ->execute(array($_POST['mail']));
								$userid = $reqid->fetch();
								$_SESSION['id'] = $userid['id'];
								header('location:accueil.php?id='.$_SESSION['id'].'');
			}

			else
			{
				header('location:formulaire.php?Mail_deja_utilisee');

			}
		}
			else {
			header('location:formulaire.php?mot_de_passe_different');
			}
		}


else {
	header('location:formulaire.php?Mot_de_passe_non_conforme');
}
}

	else
	{
		header('location:formulaire.php?Remplissez_tous_les_champs');
	}



	?>
