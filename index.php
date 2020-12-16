<?php
session_start();

require('inc/functions.php');
include('inc/header.php');
?>

<?php
if(isLoggedUser() || isLoggedAdmin()) {
   print_r($_SESSION);
}
?>


<?php
include('inc/footer.php');
