<?php
session_start();

    if(empty($_GET['search']))
    {
      header('location:accueil.php?');
    }
    else
    {
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_annuel;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
      }
      catch(Exception $e)
      {
        die('Erreur : '.$e->getMessage());
      }
      $q = htmlspecialchars($_GET['search']);
      $req = $bdd->query('SELECT pseudo, id FROM ADHERENT WHERE pseudo LIKE "%'.$q.'%"');
      echo '<ul>';
      while($donnees = $req->fetch()){
	      echo '<li>' . $donnees['pseudo'] . ' (id = ' . $donnees['id'] . ')</li>';
      }
      echo '</ul>';
      $req->closeCursor();
    }
?>
