<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_annuel', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM adherent WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $bdd->prepare("UPDATE adherent SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']) {
     $check = $bdd->prepare('SELECT mail FROM adherent WHERE mail=:mail');
     $check->execute(array('mail' => $_POST['newmail']));
     $num_rows = $check->rowCount();
     if($num_rows==0)
     {
       $newmail = htmlspecialchars($_POST['newmail']);
       $insertmail = $bdd->prepare("UPDATE adherent SET mail = ? WHERE id = ?");
       $insertmail->execute(array($newmail, $_SESSION['id']));
       header('Location: profil.php?id='.$_SESSION['id']);
     } else {
       $msg = "adresse mail déjà existante.";
     }
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
     if(sha1($_POST['lastmdp']) == $user['password']){
       if (strlen($_POST['newmdp1']) >= 6 && preg_match('/(?=.*[0-9])[A-Z]|(?=.*[A-Z])[0-9]/', $_POST['newmdp1']))
     	 {
          $mdp1 = sha1($_POST['newmdp1']);
          $mdp2 = sha1($_POST['newmdp2']);
          if($mdp1 == $mdp2) {
             $insertmdp = $bdd->prepare("UPDATE adherent SET password = ? WHERE id = ?");
             $insertmdp->execute(array($mdp1, $_SESSION['id']));
             header('Location: profil.php?id='.$_SESSION['id']);
          } else {
             $msg = "Vos deux mdp ne correspondent pas.";
          }
        } else {
          $msg = "Votre mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre, et faire plus de 6 caractères.";
        }
      } else {
        $msg = "Votre mot de passe actuel est incorrect.";
      }
   }
   if(isset($_POST['genre']) AND !empty($_POST['genre']) AND $_POST['genre'] != $user['genre']) {
      $newgenre = htmlspecialchars($_POST['genre']);
      $insertgenre = $bdd->prepare("UPDATE adherent SET genre = ? WHERE id = ?");
      $insertgenre->execute(array($newgenre, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['birthday']) AND !empty($_POST['birthday']) AND $_POST['birthday'] != $user['birthday']) {
      $newbirthday = htmlspecialchars($_POST['birthday']);
      $insertbirthday = $bdd->prepare("UPDATE adherent SET birthday = ? WHERE id = ?");
      $insertbirthday->execute(array($newbirthday, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['country']) AND !empty($_POST['country']) AND $_POST['country'] != $user['country']) {
      $newcountry = htmlspecialchars($_POST['country']);
      $insertcountry = $bdd->prepare("UPDATE adherent SET country = ? WHERE id = ?");
      $insertcountry->execute(array($newcountry, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['city']) AND !empty($_POST['city']) AND $_POST['city'] != $user['city']) {
      $newcity = htmlspecialchars($_POST['city']);
      $insertcity = $bdd->prepare("UPDATE adherent SET ville = ? WHERE id = ?");
      $insertcity->execute(array($newcity, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['psn']) AND !empty($_POST['psn']) AND $_POST['psn'] != $user['psn']) {
      $newpsn = htmlspecialchars($_POST['psn']);
      $insertpsn = $bdd->prepare("UPDATE adherent SET psn = ? WHERE id = ?");
      $insertpsn->execute(array($newpsn, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['xbox']) AND !empty($_POST['xbox']) AND $_POST['xbox'] != $user['xbox']) {
      $newxbox = htmlspecialchars($_POST['xbox']);
      $insertxbox = $bdd->prepare("UPDATE adherent SET xbox = ? WHERE id = ?");
      $insertxbox->execute(array($newxbox, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['steam']) AND !empty($_POST['steam']) AND $_POST['steam'] != $user['steam']) {
      $newsteam = htmlspecialchars($_POST['steam']);
      $insertsteam = $bdd->prepare("UPDATE adherent SET steam = ? WHERE id = ?");
      $insertsteam->execute(array($newsteam, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }

?>
<html>
   <head>
      <title>Edition Profil</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Edition de mon profil</h2>
         <div align="left">
            <form method="POST" action="" enctype="multipart/form-data">
               <label>Pseudo :</label>
               <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" /><br /><br />
               <label>Mail :</label>
               <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>" /><br /><br />
               <label>Mot de passe actuel :</label>
               <input type="password" name="lastmdp" placeholder="Ancien mot de passe"/><br /><br />
               <label>Nouveau mot de passe :</label>
               <input type="password" name="newmdp1" placeholder="Mot de passe"/><br /><br />
               <label>Confirmation mot de passe :</label>
               <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" /><br /><br />
               <label> Genre : </label><br>
               <input type="radio" name="genre" value="Homme" <?php if($user['genre'] == "Homme") { ?> checked <?php } ?>> Homme<br>
           		 <input type="radio" name="genre" value="Femme" <?php if($user['genre'] == "Femme") { ?> checked <?php } ?>> Femme <br> <br>
               <label>Date de naissance :</label>
               <input type="date" name="birthday" placeholder="DAte de naissance" /><br /><br />
               <label>Pays :</label>
               <input type="text" name="country" placeholder="Pays" value="<?php echo $user['country']; ?>" /><br /><br />
               <label>Ville :</label>
               <input type="text" name="city" placeholder="Ville" value="<?php echo $user['ville']; ?>" /><br /><br />
               <label>Identifiant PSN :</label>
               <input type="text" name="psn" placeholder="PSN" value="<?php echo $user['psn']; ?>" /><br /><br />
               <label>Identifiant Xbox :</label>
               <input type="text" name="xbox" placeholder="Xbox" value="<?php echo $user['xbox']; ?>" /><br /><br />
               <label>Identifiant Steam :</label>
               <input type="text" name="steam" placeholder="Steam" value="<?php echo $user['steam']; ?>" /><br /><br />
               <input type="submit" value="Mettre à jour mon profil" />
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>
   </body>
</html>
<?php
}
else {
   header("Location: connexion.php");
}
?>
