<?php
session_start();

require('inc/functions.php');
require('inc/pdo.php');
include('inc/header.php');
?>
<div class="jumbotron d-flex align-items-center flex-column">
    <h1 class="display-4 mb3">Nous contacter</h1>
    <p class="lead text-center">Nous nous mettons à votre disposition partout, le plus longtemps possible, pour répondre à vos demandes </p>
</div>
<div class="wrap1">
    <div class="container-fluid">
        <h2 class="text-primary"><u>Contactez nous via mail :</u></h2>
        <p>Si vous souhaitez contacter l'équipe VIP Network, veuillez utiliser l'adresse mai suivante : VIPNetworkSupport@gmail.com .Veuillez renseigner un objet lors de l'envoi du mail, car le support n'ouvrira pas de mail sans objets.</p>
        <br>
        <h2 class="text-primary"><u>Contactez nous via nos réseau sociaux :</u></h2>
        <p>Nous disponsons d'un support par messagerie privée sur nos réseaux sociaux, notamment <a href="#">Facebook</a>, <a href="#">Twitter</a>, et <a href="#">Instagram</a>. Nous nous efforcerons de vous apporter une réponse appropriée le plus rapidement possible </p>
        <br>
        <h2 class="text-primary"><u>Contactez nous via courier :</u></h2>
        <p>Si vous souhaitez nous contacter via un courier, vous pouvez nous contacter à l'adresse suivante : Placeholder</p>
        <br>
        <h2 class="text-primary"><u>Contactez nous via téléphone : </u></h2>
        <p>Si vous souhaitez nous contacter par téléphone, Appellez nous au : Placeholder. Disponible du Lundi au Vendredi de 8 h à 18h. Appels non surtaxés. Nous ne répondons pas aux SMS, et ne conservons pas les messages sur répondeur.</p>
        <br>
        <h2 class="text-primary"><u>Contactez nous via le formulaire ci-dessous</u></h2>
        <p>Nous vous proposons aussi de remplir ce formulaire, pour obtenir une réponse rapide de la part du support. La rapidité de la réponse peut varier. Disponibilité du Lundi au Vendredi, de 8h à 18h.</p>
        <br>
        <h2 class="text-success"><u>Formulaire :</u></h2>
        <form>
            <label class="mt-2 mb-2" for="votreAdresseMail">Votre Adresse Mail</label>
            <input type="email" class="form-control" aria-describedby="emailHelp">
            <small class="form-text text-muted mt-2 mb-2">Elle ne sera pas conservé à des fins commerciales</small>
            <div class="form-group">
                <label class="mt-2 mb-2" for="votreMessage">Votre Message</label>
                <small class="form-text text-muted mt-2 mb-2">Renseignez ici le sujet de votre demande</small>
                <textarea class="form-control" rows="3*6"></textarea>
                <button type="submit" class="btn btn-primary mt-2">Envoyer</button>
            </div>
        </form>

    </div>

</div>
<?php
include('inc/footer.php');
