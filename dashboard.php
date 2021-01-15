<?php
session_start();

require('inc/functions.php');
if(!isLoggedUser()) {
  header('Location: index.php');
  exit(); }
require('inc/pdo.php');

$sql = "SELECT * FROM trames";
$query = $pdo->prepare($sql);
$query->execute();
$trames = $query->fetchAll();

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


    <?php
    ini_set('display_errors', 'off');
    $tableau_conv = [
      //  CHIFFRES
      "0" => [0],
      "1" => [1],
      "2" => [2],
      "3" => [3],
      "4" => [4],
      "5" => [5],
      "6" => [7],
      "8" => [8],
      "9" => [9],
      //  MINUSCULES
      "a" => [10],
      "b" => [11],
      "c" => [12],
      "d" => [13],
      "e" => [14],
      "f" => [15],
      // MAJUSCULES
      "A" => [10],
      "B" => [11],
      "C" => [12],
      "D" => [13],
      "E" => [14],
      "F" => [15]
    ];

    ?>
    <h1 class="text-center mt-5">Logs</h1>
    <div class="container-fluid mt-5">

      <table class="table">
        <td>IP ASC</td>
        <td>Protocole</td>
        <td>TTL</td>
        <td>Status</td>
        <td>Date</td>
    <?php
      foreach ($trames as $trame) { ?>
        <tr <?php if($trame['ttl'] < 128 || $trame['status'] == 'timeout') { echo 'class="bg-danger"';} else { echo 'class="bg-success"'; } ?>>
          <td><?= $trame['ip_from'] ?></td>
          <td><?= $trame['protocol_name'] ?></td>
          <td><?= $trame['ttl'] ?></td>
          <td><?= $trame['status'] ?></td>
          <td><?= formatageDate($trame['datet']) ?></td>
        </tr>
    <?php  }

     ?>
  </table>
</div>

<?php include('inc/footer.php');
