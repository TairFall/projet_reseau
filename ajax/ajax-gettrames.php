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




$show = [$protocol_names,$ttl,$total,$status];
showJson($show);
?>
