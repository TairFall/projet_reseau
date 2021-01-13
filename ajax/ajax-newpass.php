<?php

require('../inc/functions.php');
require('../inc/pdo.php');

debug($_POST);

$token = $_POST['token'];
$errors = array();
$success = false;
$password1 = trim(strip_tags($_POST['newpassword1']));
$password2 = trim(strip_tags($_POST['newpassword2']));
$errors = validPass($errors,$password1,'newpassword1',$password2,4,10);


$sql = "SELECT * FROM utilisateur WHERE token = :token";
$query = $pdo->prepare($sql);
$query->bindValue(':token',$token,PDO::PARAM_STR);
$query->execute();
$user = $query->fetch();

if(count($errors) == 0){
  $success = true;
}

/*
if(!empty($user)) {
    if(count($errors) == 0){
    $password = password_hash($password1, PASSWORD_DEFAULT);
    $success = true;
    //echo 'bravo';
    $sql = "UPDATE utilisateur SET password = '$password', token = '$token' WHERE token = '$token'";
    $query = $pdo->prepare($sql);
    $query->execute();
  }

  // update mot de passe
} */

$data = array(
  //'msg' => $msg,
  'errors' => $errors,
  'success' => $success
);
showJson($data);
