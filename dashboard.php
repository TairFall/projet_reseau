<?php
session_start();

require('inc/functions.php');
if(!isLoggedUser()) {
  header('Location: index.php');
  exit(); }
require('inc/pdo.php');
include('inc/header.php');
?>
<div class="wrap1">
  <div class="page_title">
    <div class="jumbotron2">
      <h1 class="display-4">Votre Espace Client</h1>
      <p class="lead">Voici votre espace client personnel, vous pourrez à partir d'ici visualiser les différentes statistiques liées au réseau.</p>
      <hr class="my-4">
    </div>
</div>
  </div>
  <div class="contenant_dashboard">
    <!-- PREMIER GRAPHIQUE -->
    <div class="graphiques">
      <div class="graph1">
        <canvas id="myChart" width="400" height="400"></canvas>
      </div>
      <!-- DEUXIEME GRAPHIQUE -->
      <div class="graph2">
        <canvas id="myChart2" width="400" height="400"></canvas>
      </div>
  </div>
</div>

<?php include('inc/footer.php');
