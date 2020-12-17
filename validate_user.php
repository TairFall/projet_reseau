<?php


require('inc/pdo.php');
require('inc/functions.php');


if (!empty($_GET['id'])){
  $token = $_GET['id'];
  $token = cleanXss($token);
  $sql = "SELECT * FROM utilisateur WHERE token = '$token'";
  $query = $pdo->prepare($sql);
  $query->execute();
  $user = $query->fetch();





  // On vérifie que l'user n'est pas encore validé
  if(!empty($user) && $user['roles'] == 'user_novalid')
    {
      // Ici on doit récupérer $user['token_at'] et déterminer au bout de combien de temps le lien n'est plus valide.
      $now = New DateTime("now");
      $tokenlimit = New DateTime($user['token_at']);
      $tokenlimit->add(new DateInterval('PT3M'));
      //$tokenlimit->add(new DateInterval('PT4H'));
      if($now < $tokenlimit == true) {

        $sql = "UPDATE utilisateur SET roles = 'user', token = NULL WHERE token = '$token'";
        $query = $pdo->prepare($sql);
        $query->execute();


        header('Location: index.php');
        exit();
      }
      else {
        include('inc/header.php'); ?>
          <p>Le lien de validation a expiré...</p>
          <p>Pour obtenir un nouveau lien, veuillez renseigner votre adresse mail et mot de passe<a href="valid_register.php?id=<?= $user['token'] ?>">ICI</a></p>
          <p>Mot de passe oublié ? <a href="forgot_form_auth.php">Demander un nouveau mot de passe</a></p>
        <?php
        include('inc/footer.php');
      }
   }

  else{
    header('Location: 404.php');
    exit();
  }
}
else {
  header('Location: 404.php');
  exit();
}

?>
