<?php
session_start();

require('inc/functions.php');
include('inc/header.php');
?>
<div class="wrap4">
    <div id="faq" class="justify-content-center">
        <div id="titre" class="d-flex flex-column text-center mt-4 mb-5">
            <h1 id="bienvenue" class="text-uppercase text-primary mb-2">F.A.Q</h1>
            <br>
            <p>NetworkVIP</p>
        </div>
        <div id="contenu" class="container-fluid mt-5 d-flex flex-row align-items-center">
            <h1 class="faq">Impossible de me connecter à mon compte, que faire ?</h1>
            <div class="container-fluid d-flex mt-5 flex-column pb-5">
                <p class="text-center">Assurez vous de n'avoir fais aucune faute dans vos identifiants de connexion, sinon dirigez vous vers le bouton <a href="#">mot de passe oublié.</a></p>
            </div>
        </div>
        <div id="contenu" class="container-fluid mt-5 d-flex flex-row align-items-center">
            <h1 class="faq">Votre service est-il disponible sur smartphone ?</h1>
            <div class="container-fluid d-flex mt-5 flex-column pb-5">
                <p class="text-center">Notre service est disponible sur n'importe quelle plateforme, n'importe où, n'importe quand.</p>
            </div>
        </div>
        <div id="contenu" class="container-fluid mt-5 d-flex flex-row align-items-center">
            <h1 class="faq">Quels protocoles utilisez-vous ?</h1>
            <div class="container-fluid d-flex mt-5 flex-column pb-5">
                <p class="text-center">Afin de fournir un maximum d'information, nous analysons la trame TTL (Time to Live),qui est la durée de vie de votre trame, le TCP (Transmission Control Protocol), qui sert a contrôler la transmission entre l'utilisateur et le serveur. L'UDP (User Diagram Protocol), qui permet une bonne transmission de donnée entre vous et le serveur. Et pour finir, l'ICMP (Internet Control Message Protocol), qui sert à vous prevenir quand un site est inaccessible ou dangereux.</p>
            </div>
        </div>
        <div id="contenu" class="container-fluid mt-5 d-flex flex-row align-items-center">
            <h1 class="faq">Est-il possible de localiser le lieu de connexion de l'internaute ?</h1>
            <div class="container-fluid d-flex mt-5 flex-column pb-5">
                <p class="text-center">Il est possible de connaître le pays et la région à partir desquels l'internaute se connecte. Pour des régions très étendues comme le Canada, la précision géographique atteint la ville.</p>
            </div>
        </div>
    </div>
</div>
</div>


<?php
include('inc/footer.php');
