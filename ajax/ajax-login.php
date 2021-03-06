<?php
session_start();
require('../inc/functions.php');
require('../inc/pdo.php');

$errors = array();
$success = false;

  $email    = cleanXss($_POST['lemail']);
  $password = cleanXss($_POST['lpassword']);

  if(!empty($email && $password)){

      $sql = "SELECT * FROM utilisateur WHERE email = :email";
      $query = $pdo->prepare($sql);
      $query->bindValue(':email',$email,PDO::PARAM_STR);
      $query->execute();
      $user = $query->fetch();
      if(!empty($user)){

        $hashpassword = $user['password'];

        if(password_verify($password,$hashpassword)){


          if($user['roles'] == 'user') {
            $success = true;
            $_SESSION['user'] = array(
            'id'     => $user['id'],
            'pseudo' => $user['email'],
            'role'   => $user['roles'],
            'ip'     => $_SERVER['REMOTE_ADDR'] // ::1
          );





        }
        else {
          $errors['email'] = 'ERREUR ROLE';
        }

      }

      else {
        $errors['email'] = 'ERREUR';
      }
    }

  else {
    $errors['email'] = 'Veuillez renseigner les champs';
  }
}
else {
  $errors['email'] = 'Veuillez renseigner les champs';
}

if(!empty($_SESSION['user'])){
  $userajax = $_SESSION['user'];
}

$data = array(
  'errors' => $errors,
  'success' => $success,

);

if(!empty($_SESSION['user'])){
  $data['user'] = $userajax;
}
showJson($data);
