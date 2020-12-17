<?php
session_start();

require('inc/functions.php');
include('inc/header.php');
?>
<div class="container-fluid">
    <div id="titre" class="d-flex flex-column text-center">
        <p class="text-uppercase text-primary">Bienvenue chez NetworkVIP</p>
        <br>

        <p>Le site N°1 pour mesurer les connexions entre utilisateurs</p>
    </div>


<div id="icon" class="d-flex flex-row align-items-center mt-5">
    <div id="image1" class="text-center flex-column">
        <img src="asset/img/confiance.png" alt="confiance" class="img-fluid mb-3">
        <h1 class="mt-3">Confiance</h1>
        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
    </div>
    <div id="image2" class="text-center flex-column">
        <img src="asset/img/reseau.png" alt="connectivité" class="img-fluid mb-3">
        <h1 class="mt-3">Connecté</h1>
        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
    </div>
    <div id="image3" class="text-center flex-column">
        <img src="asset/img/bdd.png" alt="Securité" class="img-fluid mb-3">
        <h1 class="mt-3">Securité</h1>
        <p class="mt-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
    </div>
</div>

    <div id="contenu" class="container-fluid mt-5 d-flex flex-row">
        <img src="asset/flexslider/img/reseau.jpg" class="img-fluid mb-5" alt="Réseau">
        <div class="container-fluid d-flex flex-column">
            <h1 class="text-center mt-5 mb-4">Titre 1</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni soluta et, error commodi nihil illo mollitia quae necessitatibus quia deserunt pariatur aliquam expedita dolor earum rem ut omnis voluptatum perferendis?</p>
        </div>

    </div>
    <div id="contenu" class="container-fluid mt-5 d-flex flex-row-reverse">
        <img src="asset/flexslider/img/fibre.jpg" class="img-fluid" alt="Réseau">
        <div class="container-fluid d-flex flex-column">
            <h1 class="text-center mt-5 mb-4">Titre 2</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni soluta et, error commodi nihil illo mollitia quae necessitatibus quia deserunt pariatur aliquam expedita dolor earum rem ut omnis voluptatum perferendis?</p>
        </div>

    </div>
    <div id="contenu" class="container-fluid mt-5 d-flex flex-row">
        <img src="asset/flexslider/img/fibre2.jpg" class="img-fluid" alt="Réseau">
        <div class="container-fluid d-flex flex-column">
            <h1 class="text-center mt-5 mb-4">Titre 3</h1>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni soluta et, error commodi nihil illo mollitia quae necessitatibus quia deserunt pariatur aliquam expedita dolor earum rem ut omnis voluptatum perferendis?</p>
        </div>

    </div>


</div>
<div class="container-fluid d-flex flex-column"></div>
<?php
include('inc/footer.php');
