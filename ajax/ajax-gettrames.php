<?php
require('../inc/functions.php');
require('../inc/pdo.php');
 ?>

 <?php
     $sql = "SELECT DISTINCT protocol_name FROM trames";
     $query = $pdo->prepare($sql);
     $query->execute();
     $tramesGet = $query->fetchAll();
     showJson($tramesGet);
 ?>
