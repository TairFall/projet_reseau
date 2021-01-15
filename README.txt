Vacbook (PHP)
Grouoe 3
Benjamin, Enzo, Basile, Taïr (Pape)

README structuré en 2 parties.
  I/ Guide pour faire fonctionner le site
  II/ Technologies


I/ Guide pour faire fonctionner le site


  1) SERVEUR PHP ET MY SQL DOIT ETRE OUVERT AFIN D'AFFICHER LE SITE

  2) Récuperer tout le code via git

  + Créer un fichier pdo.php dans le dossier inc
  Il doit contenir :


  ```
  <?php
    try {
      $pdo = new PDO('mysql:host=localhost;dbname=namedatabase', "root", "", array(
          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
      ));
    }
    catch (PDOException $e) {
      echo 'Erreur de connexion : ' . $e->getMessage();
    }

  ````


  3) Composer doit être installé sur votre ordinateur afin de faire fonctionner des dépendances.
  https://getcomposer.org/


  4) Une fois composer installé,

  TAPER DANS CMD A LA RACINE DU PROJET
  composer update


  5) ENJOY



II/ Technologies

1) Langages

  Notre site est codé en PHP, HTML, JS, Ajax, MYSQL et CSS
  L'intérêt principal étant de générer dynamiquement du html selon nos variables, nos requêtes sql, etc...
  Le js permet de rendre le site dynamique visuellement, le ajax permet d'appeler la base de données sans recharger la page en question

2) Serveur local

  PHP SERVEUR = Apache (XAMPP)
  BASE DE DONNEES = MYSQL (XAMPP)


3) DEPENDANCE

  Php Mailer = Permet d'instancier des objets qui envoient des mails.




4) Structure et code

  Le site est séparé en 2, un côté dashboard et un côté.
  Dans les 2 cas, le header et footer sont contenus dans un seul fichier qui sera appelé
  quand la page contient du html.

  Il y a un fichier css et un fichier par developpeur, cela facilite le travail collaboratif.

  La plupart du code est tapé de manière procédurale pour le php.
  Cependant les dépendances composer et les dates font que certains objets sont utilisés dans le code.

  Toutes les fonctions utilisées dans notre code sont stockées dans un fichier functions.php qui est commun
  au dashboard et au back.
