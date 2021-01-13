<?php

require('inc/pdo.php');
require('inc/functions.php');
include('inc/header.php');

if(!empty($_GET['id'])){
  $token = $_GET['id'];
}
else {
  die('404');
}

?>
  <form id="formnewpass" action="ajax/ajax-newpass.php" method="post">
    <div id="newpass1" class="form-group">
      <label for="newpassword1">Nouveau mot de passe</label>
      <input type="password" id="newpassword1" name="newpassword1">
    </div>
    <div id="newpass2" class="form-group">
      <label for="newpassword2">Confirmation mot de passe</label>
      <input type="password" id="newpassword2" name="newpassword2">
    </div>
    <input id="inptoken" type="hidden" name="token" value="<?php if(!empty($token)) { echo $token; } ?>">

    <span class="error" id="error_newpass"></span>
    <span class="info_newpass"></span>
    <p class="mt-3 mb-3"><input id="submit_newpass" type="submit" value="Envoyer" name="submittednew" class="btn btn-primary"></p>
  </form>


<?php
include('inc/footer.php');
