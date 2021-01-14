<?php

require('../inc/functions.php');
require('../inc/pdo.php');


$token = $_POST['token'];


$errors = array();
$success = false;
$password1 = $_POST['newpassword1'];
$password2 = $_POST['newpassword2'];
$errors = validPass($errors,$password1,'newpassword1',$password2,4,10);


$sql = "SELECT * FROM utilisateur WHERE token = :token";
$query = $pdo->prepare($sql);
$query->bindValue(':token',$token,PDO::PARAM_STR);
$query->execute();
$user = $query->fetch();


if(!empty($user)) {
    if(count($errors) == 0){
    $password = password_hash($password1, PASSWORD_DEFAULT);
    $success = true;
    $sql = "UPDATE utilisateur SET password = '$password', roles = 'user', token = '' WHERE token = '$token'";
    $query = $pdo->prepare($sql);
    $query->execute();
  }

  // update mot de passe
}

$data = array(
  'errors' => $errors,
  'success' => $success
);
showJson($data);
