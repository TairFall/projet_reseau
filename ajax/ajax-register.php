<?php
require('../inc/function_mail.php');
require('../inc/functions.php');
require('../inc/pdo.php');



$errors = array();
$success = false;
// Faille XSS
$nom = trim(strip_tags($_POST['nom']));
$prenom = trim(strip_tags($_POST['prenom']));
$email = trim(strip_tags($_POST['email']));
$password1 = trim(strip_tags($_POST['password1']));
$password2 = trim(strip_tags($_POST['password2']));

// Validation du formulaire

$errors = validText($errors,$nom,'nom',4,30);

$errors = validText($errors,$prenom,'prenom',4,30);

$errors = validMail($errors,$email,'email');

$errors = validPass($errors,$password1,'password',$password2,4,10);


if(count($errors) == 0) {


  // On vérifie qu'un user n'a pas déjà le même mail
  $sql = "SELECT id FROM utilisateur WHERE email = :email";
  $query = $pdo->prepare($sql);
  $query->bindValue(':email',$email,PDO::PARAM_STR);
  $query->execute();
  $emailExist = $query->fetch();

  // SI LE MAIL EXISTE DEJA IL Y A UNE ERREUR OR UN COMPTE SE CREE QUE SI ERREUR = 0
  if(!empty($emailExist)){
    $errors['email'] = 'ce mail existe déjà';
  }

  if(count($errors) == 0){

    $token = generateRandomString(120);
    $password = password_hash($password1, PASSWORD_DEFAULT);
    $sql = "INSERT INTO utilisateur (nom,prenom,email,password,roles,created_at,token,token_at) VALUES (:nom,:prenom,:email,:password,'user_novalid',NOW(),'$token',NOW())";

    $query = $pdo->prepare($sql);
    $query->bindValue(':nom',$nom,PDO::PARAM_STR);
    $query->bindValue(':prenom',$prenom,PDO::PARAM_STR);
    $query->bindValue(':email',$email,PDO::PARAM_STR);
    $query->bindValue(':password',$password,PDO::PARAM_STR);
    $query->execute();

    $link = $link = '<a href="http://localhost'.dirname($_SERVER['PHP_SELF'],2).'/validate_user.php?id='. $token.'">Lien</a>';

    $date = New DateTime("now");
    $date->add(new DateInterval('PT3M'));

    $mailexpediteur = 'vacbook@laposte.net';
    $passwordmail = 'PoLhUUHG@56dqsdq9Saf';
    //$mailrecepteur = 'baz.martin42@gmail.com';
    $mailrecepteur = $email;
    $object = 'Création de votre compte';
    $message = 'Veuillez cliquer sur ce '.$link.' pour valider votre compte<br>Attention, le lien expire le '.$date->format('d-m-Y à H:i:s').'';


    $msg = sendMailer($mailexpediteur,$passwordmail,$mailrecepteur,$object,$message);
    $success = true;

  }
  // envoie email

}
$data = array(
  //'msg' => $msg,
  'errors' => $errors,
  'success' => $success
);
showJson($data);
