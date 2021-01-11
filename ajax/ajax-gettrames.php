<?php
require('../inc/functions.php');
require('../inc/pdo.php');



$sql = "SELECT COUNT(protocol_name) AS nbr , protocol_name FROM trames GROUP BY protocol_name";
$query = $pdo->prepare($sql);
$query->execute();
$protocol_names = $query->fetchAll();

$sql = "SELECT COUNT(*) AS nbr , ttl FROM trames WHERE ttl < 128";
$query = $pdo->prepare($sql);
$query->execute();
$ttl = $query->fetchAll();

$sql = "SELECT ttl FROM trames WHERE ttl < 128";
$query = $pdo->prepare($sql);
$query->execute();
$total = $query->fetchAll();

$sql = "SELECT COUNT(*) FROM trames WHERE status = 'timeout'";
$query = $pdo->prepare($sql);
$query->execute();
$status = $query->fetchColumn();
$show = [$protocol_names, $ttl,$total, $status];
showJson($show);
?>

