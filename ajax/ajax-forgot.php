<?php
session_start();
require('../inc/function_mail.php');
require('../inc/functions.php');
require('../inc/pdo.php');

$errors = array();
$success = false;


$email    = cleanXss($_POST['lemail']);

$errors = validMail($errors,$email,'lemail');

if(!empty($email)){
    // On génère un token
    if(count($errors) == 0) {


      $token = generateRandomString(120);
      $sql = "SELECT * FROM utilisateur WHERE email = :email";
      $query = $pdo->prepare($sql);
      $query->bindValue(':email',$email,PDO::PARAM_STR);
      $query->execute();
      $user = $query->fetch();
      if(!empty($user)){
        $success = true;

          $token = generateRandomString(120);
          $sql = "UPDATE utilisateur SET token = '$token', token_at = NOW() WHERE email = '$email'";
          $query = $pdo->prepare($sql);
          $query->execute();


        // Envoie mail
        $link = $link = '<a href="http://localhost'.dirname($_SERVER['PHP_SELF'],2).'/new_password.php?id='. $token.'">Lien</a>';

        $date = New DateTime("now");
        $date->add(new DateInterval('PT3M'));

        $mailexpediteur = 'vacbook@laposte.net';
        $passwordmail = 'PoLhUUHG@56dqsdq9Saf';
        $mailrecepteur = 'baz.martin42@gmail.com';
        $object = 'Nouveau mot de passe';
        $message = 'Veuillez cliquer sur ce '.$link.' pour changer votre mot de passe<br>Attention, le lien expire le '.$date->format('d-m-Y à H:i:s').'';


        $msg = sendMailer($mailexpediteur,$passwordmail,$mailrecepteur,$object,$message);
      }
      else {
        $errors['email'] = 'Email non valide';
      }
    }
}
else {
  $errors['email'] = 'Veuillez renseigner votre mail';
}


$data = array(
  'errors' => $errors,
  'success' => $success,

);


showJson($data);
