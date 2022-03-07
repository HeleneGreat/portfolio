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

$mvcPortfolio = new Portfolio(
    002, 
    "Découverte de MVC", 
    "Premier site réalisé avec l'arborescence MVC et création d'un espace administrateur
    ", 
    "mvc-php-messages.png", 
    "mvc-php-messages.png", 
    "mvc-php-messages.png", 
    "mvc-php-messages.png",
    "",
    "portfolio",
    ["HTML", "CSS", "Javascript", "PHP", "MySQL", "MVC", "Composer"],
    "<p>Ici le design et le remplissage du site n'était pas la priorité, c'est pourquoi les pages sont assez vides.</p>
    <p>L'objectif de ce micro-projet est la découverte de l'arborescence MVC et du gestionnaire de dépendances Composer, la compréhension de l'organisation et du schéma de transmission des informations entre le routeur, le controller, le model et la view.</p>
    <p>Ce site a aussi été l'occasion d'y lier une base de données et de créer un espace administrateur pour intéragir avec elle.</p>
    <p>Le formulaire de contact est opérationnel, il envoie en BDD les messages des internautes. Un SELECT dans l'espace administrateur permet de les afficher, et un DELETE est associé à un bouton pour supprimer une ligne de la BDD.</p>
    "
);

$asterix;

$yulbaba;

$hielo;

// Array containing all of the projets (add the most recent one in [0])
$allPortfolios = [$istorel, $mvcPortfolio];