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
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">

      <img src="asset/img/logo.png" class="logo">
      <a class="btn btn-primary" href="#">Qui sommes-nous ?</a>

      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Créer un compte
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

    </div>
  </nav>

  <div class="flexslider carousel">
  <ul class="slides">
    <li>
      <img src="asset/flexslider/img/fibre.jpg" />
    </li>
    <li>
      <img src="asset/flexslider/img/fibre2.jpg" />
    </li>
    <li>
      <img src="asset/flexslider/img/reseau.jpg" />
    </li>
  </ul>
</div>

  <!-- Masthead -->
  <header class="masthead text-white text-center">

  </header>
