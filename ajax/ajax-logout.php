<?php
require('../inc/functions.php');
session_start();

if(isLoggedUser() || isLoggedAdmin()) {
$_SESSION = array();
session_destroy();
}

$data = 'ok';
showJson($data);
