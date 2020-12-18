<?php
session_start();

require('inc/functions.php');
include('inc/header.php');
?>
<div class="wrap1">
    <div class="container-fluid mb-5">
        <div id="titre" class="d-flex flex-column text-center mt-5 mb-5">
            <h1 id="bienvenue" class="text-uppercase text-primary mb-2">Bienvenue chez NetworkVIP</h1>
            <br>
            <p>Le site N°1 pour mesurer les connexions entre utilisateurs</p>
        </div>

        <!-- SECTION ICÔNE/CATCHA -->

        <div id="icon" class="d-flex flex-row align-items-baseline mt-5 mb-5 pt-5 pb-5">
            <div id="image1" class="text-center flex-column">
                <img src="asset/img/confiance.png" alt="confiance" class="img-fluid mb-3">
                <h1 class="text-uppercase text-primary  mt-3">Confiance</h1>
                <p class="mt-3 ">Aucune donnée personelle ne vous sera demandé.</p>
            </div>
            <div id="image2" class="text-center flex-column">
                <img src="asset/img/reseau.png" alt="connectivité" class="img-fluid mb-3">
                <h1 class="text-uppercase text-primary mt-3">Connecté</h1>
                <p class="mt-3 ">Tout se passe en ligne.</p>
            </div>
            <div id="image3" class="text-center flex-column">
                <img src="asset/img/bdd.png" alt="Securité" class="img-fluid mb-3">
                <h1 class="mt-3 text-uppercase text-primary">Sécurisé</h1>
                <p class="mt-3 ">Toutes vos données sont stockées et sécurisées.</p>
            </div>
        </div>

    <!-- SECTION VITRINE -->

        <div id="contenu" class="container-fluid mt-5 d-flex flex-row">
            <img src="asset/flexslider/img/reseau.jpg" class="img-fluid " alt="Réseau">
            <div class="container-fluid d-flex flex-column">
                <h1 class="text-center mt-5 mb-4 text-uppercase text-primary">Réseau sécurisé</h1>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni soluta et, error commodi nihil illo mollitia quae necessitatibus quia deserunt pariatur aliquam expedita dolor earum rem ut omnis voluptatum perferendis?</p>
            </div>
        </div>
        <div id="contenu" class="container-fluid mt-5 d-flex flex-row-reverse">
            <img src="asset/flexslider/img/fibre.jpg" class="img-fluid" alt="Réseau">
            <div class="container-fluid d-flex flex-column">
                <h1 class="text-center mt-5 mb-4 text-uppercase text-primary">Optez pour la rapidité et une utilisation intuitive</h1>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni soluta et, error commodi nihil illo mollitia quae necessitatibus quia deserunt pariatur aliquam expedita dolor earum rem ut omnis voluptatum perferendis?</p>
            </div>
        </div>
        <div id="contenu" class="container-fluid mt-5 d-flex flex-row">
            <img src="asset/flexslider/img/fibre2.jpg" class="img-fluid" alt="Réseau">
            <div class="container-fluid d-flex flex-column">
                <h1 class="text-center mt-5 mb-4 text-uppercase text-primary">Testez votre réseau n'importe où, n'importe quand</h1>
                <p class="text-center">Notre service est disponible, sur toutes plateformes, à tous moments de la journée, il suffit juste d'une connexion internet. Inscrivez-vous ou connectez-vous dès maintenant, pour profiter de ce service 100% gratuit.</p>
            </div>
        </div>
    </div>
</div>
<?php
include('inc/footer.php');
