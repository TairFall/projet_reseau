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
  <!-- Navigation -->
  <nav class="navbar navbar-light static-top">
    <div class="container headcontain">
        <div class="logo">
            <a href="index.php"><img src="asset/img/logo.png" class="imglogo" alt="logo"></a>
        </div>



        <nav class="navbar navbar-light bg-light">
        <button type="button" class="btn " data-toggle="modal" data-target="#registerModal">
          Créer un compte
        </button>
        <?php if(!isLoggedUser()) { ?>
          <button type="button" class="btn " data-toggle="modal" data-target="#loginModal">
            Connexion
          </button>
          <button style="display: none;" type="button" class="btn " data-toggle="modal" data-target="#forgotModal">
            forgot
          </button>
        <?php } ?>

        <?php if(isLoggedUser() || isLoggedAdmin()) { ?>
        <p>Bonjour <?= $_SESSION['user']['pseudo']; ?> </p>
        <button id="logout" type="button" class="btn ">
          Deconnexion
        </button>
        <?php } ?>
        <a class="btn" href="aboutus.php">Qui sommes-nous ?</a>
        </nav>
  </div>
</nav>




      <!-- Button trigger modal -->

      <div class="bouton-header">




    </div>
      <!-- Modal -->
      <!-- CREER UN COMPTE -->
      <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Créer un compte</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="formabonne" action="ajax/ajax-register.php" method="post">
                <div class="form-group">
                  <label for="nom">Nom*</label>
                  <input type="text" id="nom" name="nom">
                  <span class="error" id="error_nom"></span>
                </div>
                <div class="form-group">
                  <label for="prenom">Prenom*</label>
                  <input type="text" id="prenom" name="prenom">
                  <span class="error" id="error_prenom"></span>
                </div>
                <div class="form-group">
                  <label for="email">Email*</label>
                  <input type="email" id="email" name="email">
                  <span class="error" id="error_email"></span>
                </div>
                <div class="form-group">
                  <label for="password">Password*</label>
                  <input type="password" id="password1" name="password1">
                </div>
                <div class="form-group">
                  <label for="password">Password Confirmation*</label>
                  <input type="password" id="password2" name="password2">
                  <span class="error" id="error_password"></span>
                </div>
                <input type="submit" value="Inscription" name="submitted" class="btn btn-primary">
              </form>
            </div>
            <div class="modal-footer">
              <button id="bye" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
              <button id="bye2" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                <span class="error" id="lerror_email"></span>
                <p class="mt-3 mb-3"><input id="submit_forgot" type="submit" value="Connexion" name="lsubmitted" class="btn btn-primary"></p>
              </form>
            </div>
            <div class="modal-footer">
              <button id="bye3" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Masthead -->
  </header>
