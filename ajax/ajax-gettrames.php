<?php
require('../inc/functions.php');
require('../inc/pdo.php');


// NOMBRE DE TRAMES PAR TYPE DE REQUÊTE (ICMP, TCP/IP, UDP…)
$sql = "SELECT COUNT(protocol_name) AS nbr , protocol_name FROM trames GROUP BY protocol_name";
$query = $pdo->prepare($sql);
$query->execute();
$protocol_names = $query->fetchAll();
// NOMBRE DE REQUÊTES MANQUANTS DE TTL
$sql = "SELECT COUNT(*) AS nbr , ttl FROM trames WHERE ttl < 128";
$query = $pdo->prepare($sql);
$query->execute();
$ttl = $query->fetchAll();
// NOMBRE DE TTL PERDU AU TOTAL
$sql = "SELECT ttl FROM trames WHERE ttl < 128";
$query = $pdo->prepare($sql);
$query->execute();
$total = $query->fetchAll();
// NOMBRE DE REQUÊTES EN ECHEC
$sql = "SELECT COUNT(*) FROM trames WHERE status = 'timeout'";
$query = $pdo->prepare($sql);
$query->execute();
$status = $query->fetchColumn();
// HEURES DE VISITES
// $hours = [
//   "1" => [1],
//   "2" => [2],
//   "3" => [3],
//   "4" => [4],
//   "5" => [5],
//   "6" => [6],
//   "7" => [7],
//   "8" => [7],
//   "9" => [7],
//   "10" => [7],
//   "11" => [7],
// ];
// foreach ($hours as $hour) {
//   $sql = "SELECT datet FROM trames";
//   $query = $pdo->prepare($sql);
//   $query->execute();
//   $hour = $query->fetchAll();
// }
// debug($hour);





$show = [$protocol_names,$ttl,$total,$status];
showJson($show);
?>

<!-- // $arrayDays = [
//   "1" => [1],
//   "2" => [2],
//   "3" => [3],
//   "4" => [4],
//   "5" => [5],
//   "6" => [6],
//   "7" => [7],
// ];
// foreach ($arrayDays as $arrayDay) {
//   $sql = "SELECT COUNT(DISTINCT id) FROM trames WHERE status = 'timeout' AND DAYOFWEEK(datet) = $arrayDay['DAYOFWEEK(datet)'] ORDER BY DAYOFWEEK(datet) ASC";
//   $query = $pdo->prepare($sql);
//   $query->execute();
//   $statusWeeks = $query->fetchAll();
//   debug($statusWeeks);
// }





// $sql = "SELECT DAYOFWEEK(datet) FROM trames WHERE ttl < 128";
// $query = $pdo->prepare($sql);
// $query->execute();
// $dayofweeks = $query->fetchAll();


// TABLEAU POUR STOCKER LE NOMBRE DE TTL MANQUANTS SELON LE JOUR
// $arrayDays = [
//   "1" => [0],
//   "2" => [0],
//   "3" => [0],
//   "4" => [0],
//   "5" => [0],
//   "6" => [0],
//   "7" => [0],
// ];
// foreach ($dayofweeks as $dayofweek) {
//   if($arrayDays[2] != 0){
//     $arrayDays[2] = 8;
//   };
// };
// debug($arrayDays); -->
