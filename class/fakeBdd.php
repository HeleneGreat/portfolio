<?php
require_once('Portfolio.php');


/* Liste des composants d'un projet :

- id
- titre
- sous-titre
- image (capture d'écran)
- [3 captures d'écran / du code]
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
    ["istorel.png", "istorel.png", "istorel.png"], 
    "https://helenegreat.alwaysdata.net/istorel/",
    "https://github.com/HeleneGreat/istorel",
    ["HTML", "CSS", "Javascript", "PHP"]
);

$mvcPortfolio = new Portfolio(
    002, 
    "Découverte de MVC", 
    "Premier site réalisé avec l'arborescence MVC, c'est aussi la première fois que je créé un espace administrateur un peu plus étoffé.", 
    "mvc-php-messages.png", 
    ["mvc-php-messages.png", "mvc-php-messages.png", "mvc-php-messages.png"],
    "",
    "",
    ["HTML", "CSS", "Javascript", "PHP", "MySQL", "MVC", "Composer"]
);



// Array containing all of the projets (add the most recent one in [0])
$allPortfolios = [$istorel, $mvcPortfolio];