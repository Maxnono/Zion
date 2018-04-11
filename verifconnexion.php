<?php
session_start();


    if (empty($_POST['mail']) || empty($_POST['password']) )
    {
    header('location:formconnexion.php?Remplissez_tous_les_champs');
    }
    else
    {
      $mailConnect = $_POST['mail'];
      $passwordConnect = sha1($_POST['password']);
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_annuel;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }
      $req = $bdd->prepare('SELECT * FROM adherent WHERE mail = ? AND password = ?');
      $req->execute(array($mailConnect,$passwordConnect));
      $userexist = $req->RowCount();
      if ($userexist == 1)
       {
         $userinfos = $req->fetch();
         $_SESSION['mail'] = $_POST['mail'];
         $_SESSION['pseudo'] = $userinfos['pseudo'];
         $_SESSION['id'] = $userinfos['id'];
         header('location:accueil.php?id='.$_SESSION['id'].'');
       }
       else {
         header('location:formconnexion.php?error=Mauvaises_informations');
       }
    }

?>
