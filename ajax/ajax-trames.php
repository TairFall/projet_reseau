<?php
require('../inc/functions.php');
require('../inc/pdo.php');
//$trames = json_decode($_POST['trames']);
//print_r($_POST['trames']);

$trames = $_POST['trames'];

foreach ($trames as $trame) {

  if(isset($trame['protocol']['type']))
  {
    $protocol_type = $trame['protocol']['type'];
    $protocol_code = $trame['protocol']['code'];
  }

  $datet = $trame['date'];
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
  $ip_from = $trame['ip']['from'];
  $ip_dest = $trame['ip']['dest'];

  // INSERTION

  if(isset($trame['protocol']['type']))
  {
    /// VERIF QUE TOTO N'EXISTE PAS DEJA POUR PAS FAIRE DOUBLON BDD
    $sql = "SELECT * FROM trames WHERE datet = '$datet' AND protocol_name = '$protocol_name' AND identification = '$identification' AND protocol_flags_code = '$protocol_flags_code'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $trameExist = $query->fetch();


    if(empty($trameExist)){
      $sql = "INSERT INTO trames (datet,version,headerLength,service,identification,flags_code,ttl,protocol_name,protocol_flags_code,protocol_checksum_status,protocol_ports_from,protocol_ports_dest,protocol_type,protocol_code,headerChecksum,ip_from,ip_dest) VALUES (".$datet.",".$version.",".$headerLength.",'".$service."','".$identification."','".$flags_code."',".$ttl.",'".$protocol_name."','".$protocol_flags_code."','".$protocol_checksum_status."',".$protocol_ports_from.",".$protocol_ports_dest.",".$protocol_type.",".$protocol_code.",'".$headerChecksum."','".$ip_from."','".$ip_dest."')";
      $query = $pdo->prepare($sql);
      $query->execute();
    }


  }
  else {

    /// VERIF QUE TOTO N'EXISTE PAS DEJA POUR PAS FAIRE DOUBLON BDD
    $sql = "SELECT * FROM trames WHERE datet = '$datet' AND protocol_name = '$protocol_name' AND identification = '$identification' AND protocol_flags_code = '$protocol_flags_code'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $trameExist = $query->fetch();


    if(empty($trameExist)){
      $sql = "INSERT INTO trames (datet,version,headerLength,service,identification,flags_code,ttl,protocol_name,protocol_flags_code,protocol_checksum_status,protocol_ports_from,protocol_ports_dest,headerChecksum,ip_from,ip_dest) VALUES (".$datet.",".$version.",".$headerLength.",'".$service."','".$identification."','".$flags_code."',".$ttl.",'".$protocol_name."','".$protocol_flags_code."','".$protocol_checksum_status."',".$protocol_ports_from.",".$protocol_ports_dest.",'".$headerChecksum."','".$ip_from."','".$ip_dest."')";
      $query = $pdo->prepare($sql);
      $query->execute();
    }

  }

}
