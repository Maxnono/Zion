<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_annuel', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM adherent WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>Profil</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
         <br /><br />

         Pseudo = <?php echo $userinfo['pseudo']; ?>
         <br />

         Mail = <?php echo $userinfo['mail']; ?>
         <br />

         <?php
         if(isset($userinfo['genre'])) {
         ?>
         Genre = <?php echo $userinfo['genre']; ?>
         <br />
         <?php
         }
         ?>

         <?php
         if(isset($userinfo['country'])) {
         ?>
         Pays = <?php echo $userinfo['country']; ?>
         <br />
         <?php
         }
         ?>

         <?php
         if(isset($userinfo['ville'])) {
         ?>
         Ville = <?php echo $userinfo['ville']; ?>
         <br />
         <?php
         }
         ?>

         <?php
         if(isset($userinfo['psn'])) {
         ?>
         Identifiant PSN = <?php echo $userinfo['psn']; ?>
         <br />
         <?php
         }
         ?>

         <?php
         if(isset($userinfo['xbox'])) {
         ?>
         Identifiant Xbox = <?php echo $userinfo['xbox']; ?>
         <br />
         <?php
         }
         ?>

         <?php
         if(isset($userinfo['steam'])) {
         ?>
         Identifiant Steam = <?php echo $userinfo['steam']; ?>
         <br />
         <?php
         }
         ?>

         <?php
         if(isset($userinfo['birthday'])) {
         ?>
         Âge = <?php
         $reqage = $bdd->prepare('SELECT Year(NOW()) - Year(?) + (Format(?, "mm/dd") > Format(NOW(), "mm/dd")) AS age FROM adherent WHERE id = 49');
         $reqage->execute(array($userinfo['birthday'], $userinfo['birthday']));
         $userage = $reqage->fetch();
         echo $userage['age']; ?>
         <br />
         <?php
         }
         ?>

         <?php
         if(isset($userinfo['birthday'])) {
         ?>
         Date de naissance = <?php echo $userinfo['birthday']; ?>
         <br />
         <?php
         }
         ?>

         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="accueil.php">Retour vers l'accueil</a>
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
      </div>
   </body>
</html>
<?php
}
?>
