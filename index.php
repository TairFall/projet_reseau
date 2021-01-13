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

        <!-- SECTION ICÔNE/CATCHER -->

        <div id="icon" class="d-flex flex-row align-items-baseline mt-5 mb-5 pt-5 pb-5">
            <div id="image1" class="text-center flex-column">
                <img src="asset/img/confiance.png" alt="confiance" class="img-fluid mb-3">
                <h1 class="text-uppercase text-primary  mt-3">Confiance</h1>
                <p class="mt-3 ">Aucune donnée personnelle ne vous sera demandé.</p>
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

        <div id="contenu" class="container-fluid mt-4 d-flex flex-row align-items-center">
            <img src="asset/flexslider/img/reseau.jpg" class="img-fluid " alt="Réseau">
            <div class="container-fluid d-flex flex-column pb-5">
                <h1 class="text-center text-uppercase text-primary mt-5 mb-4">Réseau sécurisé</h1>
                <p class="text-center">Profitez d'un réseau sécurisé, adapté à vos besoin. Besoin d'un réseau d'entreprise rapide et sécurisé ? Besoin d'un réseau rapide au sein de votre foyer? Network VIP est la solution ! Notre protocole vérifie régulièrement la trame UDP de votre réseau afin de vous fournir une transmission sécurisée et sans perte de données entre vous et le serveur.</p>
            </div>
        </div>
        <div id="contenu" class="container-fluid mt-5 d-flex flex-row-reverse align-items-center">
            <img src="asset/flexslider/img/fibre.jpg" class="img-fluid" alt="Réseau">
            <div class="container-fluid d-flex flex-column pb-5">
                <h1 class="text-center mt-5 mb-4 text-uppercase text-primary">Optez pour la rapidité et une utilisation intuitive</h1>
                <p class="text-center">Simple et rapide à installer, Network VIP fait partie des solutions les plus intuitives du marché. Connectez vous et boostez votre réseau dès maintenant !</p>
            </div>
        </div>
        <div id="contenu" class="container-fluid mt-5 d-flex flex-row align-items-center">
            <img src="asset/flexslider/img/fibre2.jpg" class="img-fluid" alt="Réseau">
            <div class="container-fluid d-flex flex-column pb-5">
                <h1 class="text-center mt-5 mb-4 text-uppercase text-primary">Testez votre réseau n'importe où, n'importe quand</h1>
                <p class="text-center">Besoin d'un test, d'une estimation ou de récolter des données, mais vous n'êtes pas sur place ? Grâce a Network VIP, testez votre réseau n'importe où, aussi rapidement que sur le lieu d'installation de votre réseau.</p>
            </div>
        </div>
    </div>
</div>
<?php
include('inc/footer.php');
