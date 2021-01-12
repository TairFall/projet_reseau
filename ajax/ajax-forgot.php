<?php
session_start();
require('../inc/functions.php');
require('../inc/pdo.php');

$errors = array();
$success = false;

$email    = cleanXss($_POST['lemail']);

if(!empty($email)){

    $sql = "SELECT * FROM utilisateur WHERE email = :email";
    $query = $pdo->prepare($sql);
    $query->bindValue(':email',$email,PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();
    if(!empty($user)){

      echo 'bravo';
    }

}
else {
  $errors['email'] = 'Veuillez renseigner les champs';
}


$data = array(
  'errors' => $errors,
  'success' => $success,

);


showJson($data);
