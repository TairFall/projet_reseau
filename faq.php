<?php
session_start();

require('inc/functions.php');
require('inc/pdo.php');
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
                <p class="text-center">Assurez vous de n'avoir fais aucune faute dans vos identifiants de connexion, sinon dirigez vous vers le bouton mot de passe oublié.</p>
            </div>
        </div>
        <div id="contenu" class="container-fluid mt-5 d-flex flex-row align-items-center">
            <h1 class="faq">Votre service est-il disponible sur smartphone ?</h1>
            <div class="container-fluid d-flex mt-5 flex-column pb-5">
                <p class="text-center">Notre service est disponible sur n'importe quelle plateforme, n'importe où, n'importe quand.</p>
            </div>
        </div>
        <div id="contenu" class="container-fluid mt-5 d-flex flex-row align-items-center">
            <h1 class="faq">Impossible de me connecter à mon compte, que faire ?</h1>
            <div class="container-fluid d-flex mt-5 flex-column pb-5">
                <p class="text-center">Assurez vous de n'avoir fais aucune faute dans vos identifiants de connexion, sinon dirigez vous vers le bouton mot de passe oublié.</p>
            </div>
        </div>
    </div>
</div>
</div>


<?php
include('inc/footer.php');
