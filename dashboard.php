<?php
session_start();
require('inc/functions.php');
include('inc/header.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Espace Client</title>
</head>
<body>
  <div class="page_title">
    <div class="jumbotron2">
      <h1 class="display-4">Votre Espace Client</h1>
      <p class="lead">Voici votre espace client personnel, vous pourrez à partir d'ici visualiser les différentes statistiques liées à votre réseau.</p>
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
</body>
</html>


<?php include('inc/footer.php');
