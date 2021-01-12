<?php
require('../inc/functions.php');
require('../inc/pdo.php');
//$trames = json_decode($_POST['trames']);
//print_r($_POST['trames']);

$trames = $_POST['trames'];
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
foreach ($trames as $trame) {

  $protocol_type = "";
  $protocol_code = "";
  $status = "";
  if(isset($trame['protocol']['type']))
  {
    $protocol_type = $trame['protocol']['type'];
    $protocol_code = $trame['protocol']['code'];
  }

  if(isset($trame['status'])) {
    $status = $trame['status'];
  }

  // CONVERSION TIMESTAMP TO DATE
  $date = new DateTime();
  $date->setTimestamp($trame['date']);
  $finalDate = $date->format('Y-m-d H:i:s');
  formatageDate($finalDate);

  $datet = $finalDate;
  $version = $trame['version'];
  $headerLength = $trame['headerLength'];
  $service = $trame['service'];
  $identification = $trame['identification'];
  $flags_code = $trame['flags']['code'];
  $ttl = $trame['ttl'];
  $protocol_name = $trame['protocol']['name'];
  $protocol_flags_code = "";
  if (isset($trame['protocol']['flags'])){
    $protocol_flags_code = $trame['protocol']['flags']['code'];
  }
  $protocol_checksum_status = $trame['protocol']['checksum']['status'];
  $protocol_ports_from = $trame['protocol']['ports']['from'];
  $protocol_ports_dest = $trame['protocol']['ports']['dest'];
  $headerChecksum = $trame['headerChecksum'];
  /// IP HEXA TO IP COOL

  $ip_from = $trame['ip']['from'];
  $broke_ip = splite($ip_from);
  $new_ip = hexatoIp($tableau_conv,$broke_ip);

  //// END OF HEAX TO IP /////

  $ip_dest = $trame['ip']['dest'];

  // INSERTION




    /// VERIF QUE TOTO N'EXISTE PAS DEJA POUR PAS FAIRE DOUBLON BDD
    $sql = "SELECT * FROM trames WHERE datet = '$datet' AND protocol_name = '$protocol_name' AND identification = '$identification' AND protocol_flags_code = '$protocol_flags_code'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $trameExist = $query->fetch();


    if(empty($trameExist)) {

      $sql = "INSERT INTO trames (datet,version,headerLength,service,identification,status,flags_code,ttl,protocol_name,protocol_flags_code,protocol_checksum_status,protocol_ports_from,protocol_ports_dest,protocol_type,protocol_code,headerChecksum,ip_from,ip_dest) VALUES ('".$datet."',".$version.",".$headerLength.",'".$service."','".$identification."','".$status."','".$flags_code."',".$ttl.",'".$protocol_name."','".$protocol_flags_code."','".$protocol_checksum_status."',".$protocol_ports_from.",".$protocol_ports_dest.",'".$protocol_type."','".$protocol_code."','".$headerChecksum."','".$new_ip."','".$ip_dest."')";
      $query = $pdo->prepare($sql);
      $query->execute();

    }
