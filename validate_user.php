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

        $sql = "UPDATE utilisateur SET roles = 'user', token = NULL WHERE token = '$token'";
        $query = $pdo->prepare($sql);
        $query->execute();

        header('Location: index.php?id=new');
        exit();
      }
   }



else {
  header('Location: 404.php');
  exit();
}

?>
