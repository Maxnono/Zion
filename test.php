<td>
  <?php
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_annuel;charset=utf8', 'root', '');
  }
  catch(Exception $e)
  {
          die('Erreur : '.$e->getMessage());
  }
  $reponse = $bdd->query('SELECT * FROM adherent');
  while ($donnees = $reponse->fetch())
  {
    echo $donnees['mail'];
    ?> <br> <?php
  }
   ?>
</td>

<td>     <?php
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_annuel;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }
      $reponse = $bdd->query('SELECT * FROM adherent');
      while ($donnees = $reponse->fetch())
      {
        echo $donnees['genre'];
        ?> <br> <?php
      }
       ?></td>

<td>      <?php
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_annuel;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }
      $reponse = $bdd->query('SELECT * FROM adherent');
      while ($donnees = $reponse->fetch())
      {
        echo $donnees['birthday'];
        ?> <br> <?php
      }
       ?></td>

<td>      <?php
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_annuel;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }
      $reponse = $bdd->query('SELECT * FROM adherent');
      while ($donnees = $reponse->fetch())
      {
        echo $donnees['country'];
        ?> <br> <?php
      }
       ?></td>


<td>      <?php
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_annuel;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }
      $reponse = $bdd->query('SELECT * FROM adherent');
      while ($donnees = $reponse->fetch())
      {
        echo $donnees['ville'];
        ?> <br> <?php
      }
       ?></td>


<td>      <?php
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_annuel;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }
      $reponse = $bdd->query('SELECT * FROM adherent');
      while ($donnees = $reponse->fetch())
      {
        echo $donnees['date_inscription'];
        ?> <br> <?php
      }
       ?></td>

<td>      <?php
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_annuel;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }
      $reponse = $bdd->query('SELECT * FROM adherent');
      while ($donnees = $reponse->fetch())
      {
        echo $donnees['psn'];
        ?> <br> <?php
      }
       ?></td>

<td>      <?php
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_annuel;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }
      $reponse = $bdd->query('SELECT * FROM adherent');
      while ($donnees = $reponse->fetch())
      {
        echo $donnees['xbox'];
        ?> <br> <?php
      }
       ?></td>

<td>      <?php
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=projet_annuel;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
              die('Erreur : '.$e->getMessage());
      }
      $reponse = $bdd->query('SELECT * FROM adherent');
      while ($donnees = $reponse->fetch())
      {
        echo $donnees['steam'];
        ?> <br> <?php
      }
       ?></td>
