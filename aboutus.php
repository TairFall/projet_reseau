<?php
session_start();
require('inc/functions.php');
include('inc/header.php');
?>

<!-- JUMBOTRON -->
<div class="jumbotron jumbotron-fluid jumbotron_about" id="accroche">
  <div class="head">
    <img id="logo_about" src="asset/img/logo.png">
    <h1 class="display-4 mb-3">Nous sommes NetworkVIP.<br>Nous prenons nos responsabilités.</h1>
    <p class="lead ml-5 mr-5">La connexion Internet de votre entreprise ou votre logement est de moins en moins fiable ?<br> Votre réseau rencontre des erreurs dont vous ignorez la cause ?<br> Avec NetworkVIP, vous disposez d’un outil de supervision du trafic réseau qui analyse votre consommation de données et met au jour les causes des problèmes qui perturbent votre réseau.</p>
  </div>
</div>
<div class="wrap1">


  <!-- DECOUVREZ-NOUS -->
  <div class="contenant bg-light">
    <div class="discover">
      <button type="button" class="btn btn-primary btn-lg">Découvrez-nous...</button>
    </div>


    <!-- PREMIER DECK DE CARTES BOOTSTRAP -->
    <div class="card-deck card_about d-flex p-2">
      <div class="card .bg-light text-primary">
        <img class="card-img-top" src="asset/img/test.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Notre mode opératoire</h5>
          <hr>
          <p class="card-text text-dark">Nous apprécions les difficultés liées à la complexité des infrastructures informatiques et réseaux, nos produits donnent à nos clients les moyens de superviser tout, et les aident ainsi à optimiser leurs ressources.</p>
        </div>
      </div>
      <div class="card .bg-light text-primary">
        <img class="card-img-top" src="asset/img/security.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Notre motivation</h5>
          <hr>
          <p class="card-text  text-dark">Nous pensons que la sécurité des informations de nos clients est d'une importance cruciale, nous mettons donc tout en oeuvres pour la garantir.</p>
        </div>
      </div>
      <div class="card .bg-light text-primary">
        <img class="card-img-top" src="asset/img/people.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Notre domaine de compétence</h5>
          <hr>
          <p class="card-text text-dark">Nous proposons des solutions de supervision aux particuliers et entreprises dans le but de simplifier leurs tâches, en collaboration avec des partenaires de renom pour surmonter les défis de la supervision dans un monde virtuel en perpétuelle évolution.</p>
        </div>
      </div>
    </div>


    <!-- CAROUSEL -->
    <div class="carousel-content">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div id="firstslide" class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://www.faveohelpdesk.com/wp-content/uploads/2015/06/1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="asset/img/security.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="asset/img/work.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


    <!-- NOS VALEURS -->
    <div class="valeurs_group">
      <button type="button" class="btn btn-primary btn-lg">Nos valeurs</button>


      <!-- SECOND DECK DE CARTES BOOTSTRAP -->
      <div class="card-deck card_about2">
        <div class="card .bg-light text-primary">
          <div class="card-body">
            <h5 class="card-title">Nous plaçons le client
              au centre</h5>
              <hr>
              <p class="card-text text-dark">
                Nous sommes nous-mêmes des professionnels de l’informatique. Le client est au cœur de tout ce que nous entreprenons.</p>
              </div>
            </div>
            <div class="card .bg-light text-primary">
              <div class="card-body">
                <h5 class="card-title">Nous cultivons
                  l’esprit d’équipe</h5>
                  <hr>
                  <p class="card-text text-dark">Nous sommes heureux de transmettre nos connaissances entre collègues et toujours prêts à accueillir de nouveaux membres dans notre équipe.</p>
                </div>
              </div>
              <div class="card .bg-light text-primary">
                <div class="card-body">
                  <h5 class="card-title">Nous visons
                    l’excellence</h5>
                    <hr>
                    <p class="card-text text-dark">Nous remettons systématiquement en question nos pratiques et solutions pour faire rimer NetworkVIP avec qualité.</p>
                  </div>
                </div>
              </div>
            </div>


            <!-- NOTRE EQUIPE -->
            <div class="section_title">
              <button type="button" class="btn btn-primary btn-lg">Notre équipe</button>
            </div>
            <hr class="my-4">
            <div class="container-fluid d-flex justify-content-around">
              <div class="text-center">
              <img class="rounded-circle" height="180" src="https://www.pearlinux.fr/wp-content/uploads/2018/10/Discord.png" />
              <p class="mt-4">Basile</p>
              </div>
              <div class="text-center">
              <img class="rounded-circle" height="180" width="180" src="asset/img/avatar-benj.png" />
              <p class="mt-4">Benjamin</p>
              </div>
              <div class="text-center">
              <img class="rounded-circle" height="180" src="asset/img/avatar-enzo.png" />
              <p class="mt-4">Enzo</p>
              </div>
              <div class="text-center">
              <img class="rounded-circle" height="180" src="https://directleaks.net/data/avatars/o/21/21204.jpg?1602018447" />
              <p class="mt-4">Taïr</p>
              </div>
            </div>


            <!-- NetworkVIP N'ATTEND PLUS QUE VOUS -->
            <div class="launch">
              <div class="card text-center">
                <div class="card-header">
                </div>
                <div class="card-body">
                  <h5 class="card-title">NetworkVIP n'attend plus que vous !</h5>
                  <p class="card-text">Lancez-vous en suivant ce lien !</p>
                  <a href="index.php" class="btn btn-primary btn_about">Accueil</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
        include('inc/footer.php');
