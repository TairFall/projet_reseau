<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="asset/flexslider/flexslider.css">
  <link rel="stylesheet" href="asset/css/style.css">
  <title>NetworkVIP</title>
  <!-- Bootstrap core CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link href="template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- Perso css -->
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="asset/css/basile.css">
  <link rel="stylesheet" href="asset/css/benjamin.css">
  <link rel="stylesheet" href="asset/css/enzo.css">
  <link rel="stylesheet" href="asset/css/tair.css">
</head>
<body>
<!-- <header class="masthead text-white text-center"> -->

<nav class="navbar navbar-light static-top">
    <div class="container headcontain">
        <div class="logo">
            <a href="index.php"><img src="asset/img/logo.png" class="imglogo" alt="logo"></a>
        </div>

  <!-- Navbar responsive avec modal -->
  <nav id="navbarcollapse" class="navbar navbar-expand-lg navbar-light bg-light">
<!-- bouton collapse pour le menu burger responsive -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
    <!-- Si l'utilisateur est log, on affiche un message d'acceuil et un bouton déconnexion -->
    <li class="navbar-text text-body">
      <?php if(isLoggedUser() || isLoggedAdmin()) { ?>
        <p>Bonjour <?= $_SESSION['user']['pseudo']; ?> </p>
      </li>
      <li class="nav-item">
        <button id="logout" type="button" class="btn ">
          Déconnexion
        </button>
        <?php } ?>
        <!-- Si l'utilisateur n'est pas log, on lui propose une création de compte -->
      <li class="nav-item">
      <?php if(!isLoggedUser()) { ?>
      <button type="button" class="btn " data-toggle="modal" data-target="#registerModal">
          Créer un compte
        </button>
        <button style="display: none;" type="button" class="btn " data-toggle="modal" data-target="#forgotModal">
            forgot
          </button>
        <?php } ?>
      </li>
      <!-- Si l'utilisateur n'est pas log, on lui propose une connexion a son compte -->
      <li class="nav-item">
      <?php if(!isLoggedUser()) { ?>
          <button type="button" class="btn " data-toggle="modal" data-target="#loginModal">
            Connexion
          </button>
          <button style="display: none;" type="button" class="btn " data-toggle="modal" data-target="#forgotModal">
            forgot
          </button>
        <?php } ?>

      </li>
      <!-- Renvoi vers une page du site -->
      <li class="nav-item">
        <a class="btn" href="aboutus.php">Qui sommes-nous ?</a>
      </li>
      <!-- si l'admin ou l'user est log, on lui propose une redirection vers le dashboard -->
      <li class="nav-item">
        <?php if(isLoggedUser() || isLoggedAdmin()) { ?>
        <a class="btn" href="dashboard.php">Dashboard</a>
        <?php } ?>
      </li>
    </ul>
  </div>
</nav>
      <!-- Modal -->
      <!-- CREER UN COMPTE -->
      <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Créer un compte</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="formabonne" action="ajax/ajax-register.php" method="post">
                <div class="form-group">
                  <label for="nom">Nom*</label>
                  <input type="text" id="nom" name="nom">
                  <br>
                  <span class="error" id="error_nom"></span>
                </div>
                <div class="form-group">
                  <label for="prenom">Prenom*</label>
                  <input type="text" id="prenom" name="prenom">
                  <br>
                  <span class="error" id="error_prenom"></span>
                </div>
                <div class="form-group">
                  <label for="email">Email*</label>
                  <input type="email" id="email" name="email">
                  <br>
                  <span class="error" id="error_email"></span>
                </div>
                <div class="form-group">
                  <label for="password">Password*</label>
                  <input type="password" id="password1" name="password1">
                </div>
                <div class="form-group">
                  <label for="password">Password Confirmation*</label>
                  <input type="password" id="password2" name="password2">
                  <br>
                  <span class="error" id="error_password"></span>
                </div>
                <input type="submit" value="Inscription" name="submitted" class="btn btn-primary">
              </form>
              <div style="display: none;" class="info_create">
                <p>Veuillez cliquer sur le lien que vous venez de recevoir par mail pour valider votre compte.</p>
                <p>Vous ne l'avez pas reçu ? <a href="#">Cliquez ici</a></p>
              </div>
            </div>
            <div class="modal-footer">
              <button id="bye" type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
      <!-- CONNEXION -->
      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="formlogin" action="ajax/ajax-login.php" method="post">
                <div id="email_login" class="form-group">
                  <label for="nom">Email</label>
                  <input type="email" id="lemail" name="lemail">
                  <!-- <span class="error" id="lerror_email"></span> -->
                </div>
                <div id="password_login_form" class="form-group">
                  <label for="lpassword">Mot de passe</label>
                  <input type="password" id="lpassword" name="lpassword">
                  <!-- <span class="error" id="lpassword"></span> -->
                </div>
                <span class="error" id="lerror_email"></span>
                <span class="error" id="lpassword"></span>
                <p class="mt-3 mb-3"><input id="submit_login" type="submit" value="Connexion" name="lsubmitted" class="btn btn-primary"></p>
              </form>
              <a class="forgot_pass" href="index.php"  data-toggle="modal" data-target="#forgotModal">Mot de passe oublié ?</a>
            </div>
            <div class="modal-footer">
              <button id="bye2" type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
      <!-- MDP OUBLIE -->
      <div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Mot de passe oublié</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fermer">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="formforget" action="ajax/ajax-forgot.php" method="post">
                <div id="email_forgot" class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="lemaile" name="lemail">
                  <!-- <span class="error" id="lerror_email"></span> -->
                </div>
                <span class="error" id="lerror_emaile"></span>
                <span class="info_forget"></span>
                <p class="mt-3 mb-3"><input id="submit_forgot" type="submit" value="Envoyer" name="lsubmitted" class="btn btn-primary"></p>
              </form>
            </div>
            <div class="modal-footer">
              <button id="bye3" type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Masthead -->
  </header>
