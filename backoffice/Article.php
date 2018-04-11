<?php
session_start();
if ($_SESSION['mail'] = 'tutur.77@hotmail.fr')
{
 ?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">

  <title>Zion</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Administration</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Tables</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="admin.php">Adherent</a>
            </li>
            <li>
              <a href="Equipes.php">Equipes</a>
            </li>
            <li>
              <a href="Messages.php">Article</a>
            </li>
            <li>
              <a href="Messages.php">Messages</a>
            </li>
            <li>
              <a href="Messages_privees.php">Messages Privées</a>
            </li>
            <li>
              <a href="Offres_jeux.php">Offres jeux de sociétés</a>
            </li>
            <li>
              <a href="Jeux.php">Jeux</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Chercher...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a href="deconnexion.php" class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Se déconnecter</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="admin.php">Menu</a>
        </li>
        <li class="breadcrumb-item active">Articles</li>
      </ol>
      <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Contenu</th>
                  <th>Date</th>
                  <th>Auteur</th>
                  <th>Jeux associé </th>

                </tr>
              </thead>

              <tbody>
                <tr>
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
                    $req = $bdd ->prepare('DELETE FROM article WHERE id = ? ');
                    $req->execute(array($supprimer));
                  }
                  $reponse = $bdd->query('SELECT * FROM article');
                  while ($donnees = $reponse->fetch())
                  {
                  ?>
                  <td> <?php echo $donnees['Nom'] ?> </td>
                  <td> <?php echo $donnees['Contenu'] ?> </td>
                  <td> <?php echo $donnees['date'] ?> </td>
                  <td> <?php echo $donnees['auteur'] ?> </td>
                  <td> EN COURS</td>
                  <td> <button> <a
                     href="Article.php?supprimer=<?=$donnees['id'] ?>">Supprimer l'article </a></button>
                   </td>
                   <td>
                     <?php
                     $idMembres = $donnees['id'];

                      ?>
                      <button type="button" value="Modifier les infos" onclick="toggle_text('span_txt2');">Modifier les informations</button><br>
                      <span id="span_txt2" style="display:none;">

                        <form  action="verifadmin.php?id=<?php echo $donnees['id'] ?>" method="post">

                        <input type="text" name="Nom" placeholder="Nouveau nom d'article">
                 <br>
                 <input type="text" name="Contenu" placeholder="Nouveau contenu">
                 <br>
                 <input type="date" name="date" placeholder="Nouvelle date">
                 <br>
                 <input type="text" name="auteur" placeholder="Nouvelle auteur">
                       <br>
                        <input type="submit"  value="Modifier">
                 <br>
                </form>

                </span>
                      <script type="text/javascript">
                      function toggle_text(id) {
                        var span = document.getElementById(id);
                        if(span.style.display == "none") {
                          span.style.display = "inline";
                        } else {
                          span.style.display = "none";
                        }
                      }
                      </script> <br>





               </tr> <tr>
                 <?php
            }
             ?>
          </td>

                                </table>
                              </div>
                            </div>
                            <div class="card-footer small text-muted">Mis à jour automatiquement</div>
                          </div>
                        </div>

                        <footer class="sticky-footer">
                          <div class="container">
                            <div class="text-center">
                              <small>Copyright Zion</small>
                            </div>
                          </div>
                        </footer>
                        <a class="scroll-to-top rounded" href="#page-top">
                          <i class="fa fa-angle-up"></i>
                        </a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Deconnexion</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">Etes vous sûr ?</div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                                <a class="btn btn-primary" href="deconnexion.php">Oui</a>
                              </div>
                            </div>
                          </div>
                        </div>

                        <script src="vendor/jquery/jquery.min.js"></script>
                        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                        <script src="vendor/datatables/jquery.dataTables.js"></script>
                        <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
                        <script src="js/sb-admin.min.js"></script>
                        <script src="js/sb-admin-datatables.min.js"></script>
                      </div>
                    </body>

                    </html>
                    <?php }
                    else {
                      header('location:accueil.php');
                    } ?>
