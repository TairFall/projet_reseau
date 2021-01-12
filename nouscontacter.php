<?php
session_start();

require('inc/functions.php');
require('inc/pdo.php');
include('inc/header.php');
?>
<div class="jumbotron d-flex align-items-center flex-column">
    <h1 class="display-4 mb3">Nous contacter</h1>
    <p class="lead text-center">Si vous avez envie de nous contacter, suivez les instructions ci dessous </p>
</div>
<div class="container-fluid">
    <h2><u>Contactez nous via mail :</u></h2>
    <p>Si vous souhaitez contacter l'équipe VIP Network, veuillez utiliser l'adresse mai suivante : VIPNetworkSupport@gmail.com .Veuillez renseigner un objet lors de l'envoi du mail, car le support n'ouvrira pas de mail sans objets.</p>
    <br>
    
    
</div>
<?php
include('inc/footer.php');