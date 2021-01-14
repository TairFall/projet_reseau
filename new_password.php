<?php
session_start();
require('inc/pdo.php');
require('inc/functions.php');
if(!empty($_GET['id'])){
  $token = $_GET['id'];
}
else {
  header('Location: 404.php');
  exit();
}

include('inc/header.php');




?>
<div class="wrap1 wrap1formnew">
  <div class="container-fluid d-flex justify-content-center">
    <form id="formnewpass" action="ajax/ajax-newpass.php" method="post">
      <div id="newpass1" class="form-group">
        <label class="mb-2" for="newpassword1">Nouveau mot de passe</label>
        <input class="form-control" type="password" id="newpassword1" name="newpassword1">
      </div>
      <div id="newpass2" class="form-group">
        <label class="mb-2" for="newpassword2">Confirmation mot de passe</label>
        <input class="form-control" type="password" id="newpassword2" name="newpassword2">
      </div>

      <input id="token" type="hidden" name="token" value="<?php if(!empty($token)) { echo $token; } ?>">

      <span class="error" id="error_newpass"></span>
      <div class="d-flex justify-content-center">
        <p class="mt-3 mb-3"><input class="form-control" id="submit_newpass" type="submit" value="Envoyer" name="submittednew" class="btn btn-primary"></p>
      </div>


    </form>
  </div>
</div>

<div class="info_newpass text-center"></div>

<?php
include('inc/footer.php');
