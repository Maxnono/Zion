<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=projet_annuel;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// PARTIE ADHERENT
if ( (htmlspecialchars(isset($_POST['pseudo']))) && (htmlspecialchars(!empty($_POST['pseudo'])))
  && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
)
{

    $updatepseudo = $bdd->prepare('UPDATE adherent SET pseudo = ? WHERE id = ? ');
    $updatepseudo->execute(array(
      $_POST['pseudo'],
      $_GET['id']
    ));


  }

  if ( (htmlspecialchars(isset($_POST['ville']))) && (htmlspecialchars(!empty($_POST['ville'])))
    && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
  )
  {

      $updateville = $bdd->prepare('UPDATE adherent SET ville = ? WHERE id = ? ');
      $updateville->execute(array(
        $_POST['ville'],
        $_GET['id']
      ));


    }


    if ( (htmlspecialchars(isset($_POST['birthday']))) && (htmlspecialchars(!empty($_POST['birthday'])))
      && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
    )
    {

        $updatebirthday = $bdd->prepare('UPDATE adherent SET birthday = ? WHERE id = ? ');
        $updatebirthday->execute(array(
          $_POST['birthday'],
          $_GET['id']
        ));


      }

      if ( (htmlspecialchars(isset($_POST['country']))) && (htmlspecialchars(!empty($_POST['country'])))
        && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
      )
      {

          $updatecountry= $bdd->prepare('UPDATE adherent SET country = ? WHERE id = ? ');
          $updatecountry->execute(array(
            $_POST['country'],
            $_GET['id']
          ));
        }
// PARTIE Equipes


      if ( (htmlspecialchars(isset($_POST['jeu']))) && (htmlspecialchars(!empty($_POST['jeu'])))
        && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
      )
      {

          $updatecountry= $bdd->prepare('UPDATE equipe SET jeu = ? WHERE id = ? ');
          $updatecountry->execute(array(
            $_POST['jeu'],
            $_GET['id']
          ));
        }



              if ( (htmlspecialchars(isset($_POST['nom_equipe']))) && (htmlspecialchars(!empty($_POST['nom_equipe'])))
                && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
              )
              {

                  $updatecountry= $bdd->prepare('UPDATE equipe SET nom_equipe = ? WHERE id = ? ');
                  $updatecountry->execute(array(
                    $_POST['nom_equipe'],
                    $_GET['id']
                  ));
                }



                      if ( (htmlspecialchars(isset($_POST['plateforme']))) && (htmlspecialchars(!empty($_POST['plateforme'])))
                        && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
                      )
                      {

                          $updatecountry= $bdd->prepare('UPDATE equipe SET plateforme = ? WHERE id = ? ');
                          $updatecountry->execute(array(
                            $_POST['plateforme'],
                            $_GET['id']
                          ));
                        }



                              if ( (htmlspecialchars(isset($_POST['number_equipe']))) && (htmlspecialchars(!empty($_POST['number_equipe'])))
                                && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
                              )
                              {

                                  $updatecountry= $bdd->prepare('UPDATE equipe SET number_equipe = ? WHERE id = ? ');
                                  $updatecountry->execute(array(
                                    $_POST['number_equipe'],
                                    $_GET['id']
                                  ));
                                }



                                      if ( (htmlspecialchars(isset($_POST['but_equipe']))) && (htmlspecialchars(!empty($_POST['but_equipe'])))
                                        && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
                                      )
                                      {

                                          $updatecountry= $bdd->prepare('UPDATE equipe SET but_equipe = ? WHERE id = ? ');
                                          $updatecountry->execute(array(
                                            $_POST['but_equipe'],
                                            $_GET['id']
                                          ));
                                        }



                                              if ( (htmlspecialchars(isset($_POST['niveau_equipe']))) && (htmlspecialchars(!empty($_POST['niveau_equipe'])))
                                                && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
                                              )
                                              {

                                                  $updatecountry= $bdd->prepare('UPDATE equipe SET niveau_equipe = ? WHERE id = ? ');
                                                  $updatecountry->execute(array(
                                                    $_POST['niveau_equipe'],
                                                    $_GET['id']
                                                  ));
                                                }



                                                      if ( (htmlspecialchars(isset($_POST['description']))) && (htmlspecialchars(!empty($_POST['description'])))
                                                        && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
                                                      )
                                                      {

                                                          $updatecountry= $bdd->prepare('UPDATE equipe SET description = ? WHERE id = ? ');
                                                          $updatecountry->execute(array(
                                                            $_POST['description'],
                                                            $_GET['id']
                                                          ));
                                                        }



                                                              if ( (htmlspecialchars(isset($_POST['avatar']))) && (htmlspecialchars(!empty($_POST['avatar'])))
                                                                && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
                                                              )
                                                              {

                                                                  $updatecountry= $bdd->prepare('UPDATE equipe SET avatar = ? WHERE id = ? ');
                                                                  $updatecountry->execute(array(
                                                                    $_POST['avatar'],
                                                                    $_GET['id']
                                                                  ));

                                                                }

// PARTIE Article
if ( (htmlspecialchars(isset($_POST['Nom']))) && (htmlspecialchars(!empty($_POST['Nom'])))
  && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
)
{

    $updatecountry= $bdd->prepare('UPDATE article SET Nom = ? WHERE id = ? ');
    $updatecountry->execute(array(
      $_POST['Nom'],
      $_GET['id']
    ));

  }

  if ( (htmlspecialchars(isset($_POST['Contenu']))) && (htmlspecialchars(!empty($_POST['Contenu'])))
    && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
  )
  {

      $updatecountry= $bdd->prepare('UPDATE article SET Contenu = ? WHERE id = ? ');
      $updatecountry->execute(array(
        $_POST['Contenu'],
        $_GET['id']
      ));

    }

    if ( (htmlspecialchars(isset($_POST['date']))) && (htmlspecialchars(!empty($_POST['date'])))
      && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
    )
    {

        $updatecountry= $bdd->prepare('UPDATE article SET date = ? WHERE id = ? ');
        $updatecountry->execute(array(
          $_POST['date'],
          $_GET['id']
        ));

      }
      if ( (htmlspecialchars(isset($_POST['auteur']))) && (htmlspecialchars(!empty($_POST['auteur'])))
        && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
      )
      {

          $updatecountry= $bdd->prepare('UPDATE article SET auteur = ? WHERE id = ? ');
          $updatecountry->execute(array(
            $_POST['auteur'],
            $_GET['id']
          ));

        }
        if ( (htmlspecialchars(isset($_POST['id_jeu']))) && (htmlspecialchars(!empty($_POST['id_jeu'])))
          && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
        )
        {

            $updatecountry= $bdd->prepare('UPDATE equipe SET id_jeu = ? WHERE id = ? ');
            $updatecountry->execute(array(
              $_POST['id_jeu'],
              $_GET['id']
            ));

          }
// PARTIE MESSAGES


if ( (htmlspecialchars(isset($_POST['Auteur']))) && (htmlspecialchars(!empty($_POST['Auteur'])))
  && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
)
{

    $updatecountry= $bdd->prepare('UPDATE message SET Auteur = ? WHERE id = ? ');
    $updatecountry->execute(array(
      $_POST['Auteur'],
      $_GET['id']
    ));

  }
  if ( (htmlspecialchars(isset($_POST['Contenu']))) && (htmlspecialchars(!empty($_POST['Contenu'])))
    && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
  )
  {

      $updatecountry= $bdd->prepare('UPDATE message SET Contenu = ? WHERE id = ? ');
      $updatecountry->execute(array(
        $_POST['Contenu'],
        $_GET['id']
      ));

    }
    if ( (htmlspecialchars(isset($_POST['date']))) && (htmlspecialchars(!empty($_POST['date'])))
      && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
    )
    {

        $updatecountry= $bdd->prepare('UPDATE message SET date = ? WHERE id = ? ');
        $updatecountry->execute(array(
          $_POST['date'],
          $_GET['id']
        ));

      }
      if ( (htmlspecialchars(isset($_POST['objet']))) && (htmlspecialchars(!empty($_POST['objet'])))
        && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
      )
      {

          $updatecountry= $bdd->prepare('UPDATE message SET objet = ? WHERE id = ? ');
          $updatecountry->execute(array(
            $_POST['objet'],
            $_GET['id']
          ));

        }
        if ( (htmlspecialchars(isset($_POST['jeux']))) && (htmlspecialchars(!empty($_POST['jeux'])))
          && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
        )
        {

            $updatecountry= $bdd->prepare('UPDATE message SET jeux = ? WHERE id = ? ');
            $updatecountry->execute(array(
              $_POST['jeux'],
              $_GET['id']
            ));

          }
// PARIE JEUX DE SOCIETES
if ( (htmlspecialchars(isset($_POST['Nom']))) && (htmlspecialchars(!empty($_POST['Nom'])))
  && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
)
{

    $updatecountry= $bdd->prepare('UPDATE offre_jeu_societe SET Nom = ? WHERE id = ? ');
    $updatecountry->execute(array(
      $_POST['Nom'],
      $_GET['id']
    ));

  }
  if ( (htmlspecialchars(isset($_POST['Description']))) && (htmlspecialchars(!empty($_POST['Description'])))
    && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
  )
  {

      $updatecountry= $bdd->prepare('UPDATE offre_jeu_societe SET Description = ? WHERE id = ? ');
      $updatecountry->execute(array(
        $_POST['Description'],
        $_GET['id']
      ));

    }
    if ( (htmlspecialchars(isset($_POST['Date_creation_offre']))) && (htmlspecialchars(!empty($_POST['Date_creation_offre'])))
      && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
    )
    {

        $updatecountry= $bdd->prepare('UPDATE offre_jeu_societe SET Date_creation_offre = ? WHERE id = ? ');
        $updatecountry->execute(array(
          $_POST['Date_creation_offre'],
          $_GET['id']
        ));

      }
      if ( (htmlspecialchars(isset($_POST['Date_rdv']))) && (htmlspecialchars(!empty($_POST['Date_rdv'])))
        && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
      )
      {

          $updatecountry= $bdd->prepare('UPDATE offre_jeu_societe SET Date_rdv = ? WHERE id = ? ');
          $updatecountry->execute(array(
            $_POST['Date_rdv'],
            $_GET['id']
          ));

        }
        if ( (htmlspecialchars(isset($_POST['Lieu_rdv']))) && (htmlspecialchars(!empty($_POST['Lieu_rdv'])))
          && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
        )
        {

            $updatecountry= $bdd->prepare('UPDATE offre_jeu_societe SET Lieu_rdv = ? WHERE id = ? ');
            $updatecountry->execute(array(
              $_POST['Lieu_rdv'],
              $_GET['id']
            ));

          }


          if ( (htmlspecialchars(isset($_POST['Nombres_participants']))) && (htmlspecialchars(!empty($_POST['Nombres_participants'])))
            && (htmlspecialchars(isset($_GET['id']))) && (htmlspecialchars(!empty($_GET['id'])))
          )
          {

              $updatecountry= $bdd->prepare('UPDATE offre_jeu_societe SET Nombres_participants = ? WHERE id = ? ');
              $updatecountry->execute(array(
                $_POST['Nombres_participants'],
                $_GET['id']
              ));

            }



header('location:admin.php');
