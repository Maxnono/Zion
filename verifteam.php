<?php
session_start();
	if (!isset($_SESSION['pseudo']))
  {
    header('location:formulaire.php');
  }
  else {


if ( (htmlspecialchars(isset($_POST['niveau_equipe']))) && (htmlspecialchars(!empty($_POST['niveau_equipe'])))
&& (htmlspecialchars(isset($_POST['nom_equipe']))) && (htmlspecialchars(!empty($_POST['nom_equipe'])))
&& (htmlspecialchars (isset($_POST['plateforme']))) && (htmlspecialchars(!empty($_POST['plateforme'])))
&& (htmlspecialchars (isset($_POST['but_equipe']))) && (htmlspecialchars (!empty($_POST['but_equipe'])))
&& (htmlspecialchars (isset($_POST['structure']))) && (htmlspecialchars (!empty($_POST['structure'])))
&& (htmlspecialchars (isset($_POST['description']))) && (htmlspecialchars (!empty($_POST['description'])))
&& (htmlspecialchars (isset($_POST['number_equipe']))) && (htmlspecialchars (!empty($_POST['number_equipe'])))
&& (htmlspecialchars (isset($_POST['jeu']))) && (htmlspecialchars (!empty($_POST['jeu']))))
{
  if (strlen($_POST['nom_equipe']) >= 4)
  {
  $bdd = new PDO('mysql:host=localhost;dbname=projet_annuel', 'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  $check = $bdd->prepare('SELECT nom_equipe FROM equipe WHERE nom_equipe=:nom_equipe');
  $check->execute(array('nom_equipe' => $_POST['nom_equipe']));

  $num_rows = $check->rowCount();
      if($num_rows==0)
      {

        $req = $bdd->prepare('INSERT INTO equipe (jeu,nom_equipe,plateforme,number_equipe,but_equipe,niveau_equipe,website,structure,description,date_inscription,avatar) VALUES (:jeu,:nom_equipe,:plateforme,:number_equipe,:but_equipe,:niveau_equipe,:website,:structure,:description,NOW(),:avatar)');
        $req ->execute(array(
        'jeu' => $_POST['jeu'],
        'nom_equipe' => $_POST['nom_equipe'],
        'plateforme' =>  $_POST['plateforme'],
        'number_equipe' =>  $_POST['number_equipe'],
        'but_equipe'=>  $_POST['but_equipe'],
        'niveau_equipe'=>  $_POST['niveau_equipe'],
        'website'=>  $_POST['website'],
        'structure'=>  $_POST['structure'],
        'description'=>  $_POST['description'],
        'avatar' => 'ok'

      ));
      }

      else
      {
        header('location:create_team.php?error=nom_equipe_deja_utilise');
      }
}
else
{
  header('location:create_team.php?error=nom_equipe_trop_court');
}
}
else {
  header('location:create_team.php?error=Remplissez_tous_les_champs');
}


if (isset($_FILES['avatar']) && (!empty($_FILES['avatar']['name'])))
{
  $taillemax = 2097152;
  $extensionValide = array('jpg','jpeg','gif','png');
  if ($_FILES['avatar']['size'] <= $taillemax)
  {
    $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'],'.'),1));
    if (in_array($extensionUpload,$extensionValide))
    {
      $chemin = "img/avatar/".$_SESSION['mail'].".".$extensionUpload;
      $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'],$chemin);
      if ($resultat)
      {
        $updateAvatar = $bdd->prepare('UPDATE equipe SET avatar = :avatar WHERE mail = :mail');
        $updateAvatar->execute(array(
          'avatar' => $_SESSION['mail'].".".$extensionUpload,
          'mail' => $_SESSION['mail']
        ));
				header('location:accueil.php');
      }
      else {
        header('location:create_team?error=erreur_importation');
      }
    }
    else
    {
      header('location:create_team?error=photo_profil_mauvaus_format');

    }
  }
  else
   {
    header('location:create_team?error=photo_profl_trop_lourde');
  }
}
}
?>
