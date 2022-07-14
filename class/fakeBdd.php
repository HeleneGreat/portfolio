<?php
require_once('Portfolio.php');


/* Liste des composants d'un projet :
- id
- titre
- sous-titre
- image (capture d'écran)
- screenshot 1
- screenshot 2
- screenshot 3
- lien externe
- lien Github
- [technologies utilisées]
- cahier des charges
*/


$istorel = new Portfolio(
    001, 
    "Istorel, association d'histoire locale", 
    "Refonte d'un site web non responsive et au design dépassé", 
    "istorel.png", 
    "istorel-contact.png", 
    "istorel-news.png", 
    "istorel-code-news.png", 
    "https://helenegreat.alwaysdata.net/istorel/",
    "istorel",
    ["HTML", "CSS", "Javascript", "PHP"],
    "<p>Istorel est le premier projet que j'ai eu à concevoir de A à Z au cours de ma formation. La consigne était de créer la refonte d'un site non responsive et qui ne répond pas aux critères d'accessibilité, d'ergonomie et de design actuels.</p>
    <p>J'ai choisi le site d'une association d'historiens locaux. En plus du design, l'objectif était aussi de réorganiser les informations et d'épurer la page d'accueil, qui comportait beaucoup trop d'éléments, pas forcément pertinents.</p>
    <p>Le site a d'abord été entièrement créé en HTML / CSS et un peu de JS. Puis, suite à l'apprentissage de la POO en PHP, j'y ai ajouté une classe 'Article' pour me permettre de générer automatiquement l'affichage de la page 'Actualités' et des articles détaillés.</p>
    <p>Le site n'étant relié à aucune BDD, le formulaire de contact n'est pas opérationnel.</p>
    "
);


$asterix = new Portfolio(
    002,
    "Parc Astérix en PHP",
    "Petit projet perso pour tester PHP",
    "asterix-uml.png",
    "asterix-results.png",
    "asterix-parc.png",
    "asterix-sensationsfortes.png",
    "",
    "parc-asterix",
    ["PHP"],
    "<p>Voici un tout petit projet perso que j'ai réalisé lorsque j'ai découvert PHP orienté objet. J'ai testé les différents piliers de la POO avec ce petit jeu. Je le lançais dans la console de debug de VS Code.</p>
    <p>Il s'agit d'un petit jeu de gestion d'un parc d'attractions. Il est possible de construire des attractions, les entretenir et les dégrader !</p>
    <p>Toute ressemblance avec le jeu Planet Coaster n'est absolument pas fortuite...</p>"
);


$mvcPortfolio = new Portfolio(
    003, 
    "Découverte de MVC", 
    "Premier site réalisé avec l'arborescence MVC et création d'un espace administrateur", 
    "mvc-read-delete.png", 
    "mvc-update.png", 
    "mvc-create-admin.png", 
    "mvc-create.png",
    "",
    "portfolio",
    ["HTML", "CSS", "Javascript", "PHP", "MySQL", "MVC", "Composer"],
    "<p>Ici le design et le remplissage du site n'était pas la priorité, c'est pourquoi les pages sont assez vides.</p>
    <p>L'objectif de ce micro-projet est la découverte de l'arborescence MVC et du gestionnaire de dépendances Composer, la compréhension de l'organisation et du schéma de transmission des informations entre le routeur, le controller, le model et la view.</p>
    <p>Ce site a aussi été l'occasion d'y lier une base de données et de créer un espace administrateur pour intéragir avec elle.</p>
    <p>Le formulaire de contact est opérationnel, il envoie en BDD les messages des internautes. Un SELECT dans l'espace administrateur permet de les afficher, et un DELETE est associé à un bouton pour supprimer une ligne de la BDD. L'administrateur peut aussi modifier ses identifiants.</p>
    <p>Pour des raisons de manque de sécurité (création de compte admin et accès à la BDD...) ce site n'est pas en ligne. Des captures d'écran sont disponibles en bas de page.</p>
    "
);


$bookshelfCorner = new Portfolio(
    004,
    "The Bookshelf Corner",
    "Projet final pour la validation de mon Bac+2 développeur web",
    "bookshelf-home.png",
    "bookshelf-book.png",
    "bookshelf-admin.png",
    "bookshelf-comments.png",
    "https://helenegreat.alwaysdata.net/bookshelf_corner/",
    "bookshelf-corner",
    ["HTML", "CSS", "Javascript", "PHP", "MySQL", "MVC"],
    "<p>J'ai créé un blog de passionnés de lecture, qui publient des articles sur les livres qu'ils ont aimé.</p>
    <p>Le site comprend un espace administrateur étoffé, qui permet une gestion complète des articles, commentaires des utilisateurs, messages reçus, modification de l'identité du blog (logo + nom)...</p>
    <p>Les visiteurs du blog peuvent également se créer un compte pour poster des commentaires</p>
    <p>C'est mon premier vrai projet avec une base de données et un MVC. Je me suis bien éclatée avec PHP et toutes les possibilités de requêtes et d'affichage ! J'avais encore pleins d'idées d'amélioration, mais à un moment il fallait bien rendre le projet pour obtenir la certification &#128517;</p>"
);


$boleesJS = new Portfolio(
    005,
    "Exercice CDA en JS",
    "Petit test pour l'entrée en CDA",
    "bolees-js.png",
    "bolees-js-event.png",
    "bolees-js-lyrics.png",
    "",
    "",
    "bolees-js",
    ["HTML", "CSS", "Javascript"],
    "<p>Il s'agit d'un petit test qui m'a été demandé pour l'entrée en formation Concepteur Développeur d'Application.</p>
    <p>L'objectif : afficher les paroles d'une chansonnette en fonction d'un nombre donné par l'utilisateur. Le langage utilisé et l'interface qui permet d'intéragir avec l'utilisateur sont au choix.</p>
    <p>Par simplicité et pour pratiquer les event listener, j'ai choisi JS. L'utilisateur entre un chiffre dans l'input number et clique sur le bouton pour afficher les paroles.</p>
    <p>J'ai essayé de découper mon code en fonction et de respecter au maximum le principe de 1 fonction = 1 action. Et j'ai ajouté un peu de CSS pour faire joli !</p>"
);


$boleesPython = new Portfolio(
    006,
    "Exercice CDA en Python",
    "Petit test pour l'entrée en CDA",
    "bolees-py.png",
    "bolees-py-main.png",
    "bolees-py-check.png",
    "bolees-py-lyrics1.png",
    "bolees-py-lyrics2.png",
    "bolees-python",
    ["Python"],
    "<p>Il s'agit du même exercice que celui réalisé en JS. Comme je l'avais réussi assez rapidement, j'ai voulu me défier un peu plus et le réaliser cette fois en python</p>
    <p>J'ai appris ce langage en totale autonomie lors de mon stage, et je n'avais pas eu l'occasion de l'utiliser depuis.</p>
    <p>Le code ressemble beaucoup à celui en JS, par contre j'ai tout typé pour éviter toute erreur possible. Cette fois il faut lancer le script via le terminal. L'utilisateur doit ensuite renseigner un nombre pour afficher ensuite les paroles de la chansonnette.</p>"
);


$yulbaba;

$hielo;

// Array containing all of the projets (add the most recent one in [0])
$allPortfolios = [$boleesPython, $boleesJS, $bookshelfCorner, $mvcPortfolio, $asterix, $istorel];