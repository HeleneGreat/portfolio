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
    "Refonte d'un site web non responsive et au design démodé", 
    "istorel.png", 
    "istorel-contact.png", 
    "istorel-news.png", 
    "istorel-code-news.png", 
    "https://helenegreat.alwaysdata.net/istorel/",
    "istorel",
    ["HTML", "CSS", "Javascript", "PHP"],
    "Istorel est le premier projet que j'ai eu à concevoir de A à Z au cours de ma formation. La consigne était de créer la refonte d'un site non responsive et qui ne répond pas aux critères d'accessibilité, d'ergonomie et de design actuels.</p>
    <p>J'ai choisi </p>
    "
);

$mvcPortfolio = new Portfolio(
    002, 
    "Découverte de MVC", 
    "Premier site réalisé avec l'arborescence MVC, c'est aussi la première fois que je créé un espace administrateur un peu plus étoffé.", 
    "mvc-php-messages.png", 
    "mvc-php-messages.png", 
    "mvc-php-messages.png", 
    "mvc-php-messages.png",
    "",
    "portfolio",
    ["HTML", "CSS", "Javascript", "PHP", "MySQL", "MVC", "Composer"],
    ""
);



// Array containing all of the projets (add the most recent one in [0])
$allPortfolios = [$istorel, $mvcPortfolio];