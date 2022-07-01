<?php
/* récupération de l'adresse de page passée dans URL*/
$path='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
// echo $path.'<br>';
/*récupération du dernier élément*/
$current=basename($path);
// echo $current;

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hélène CARRIOU, web développeuse</title>
    <link rel="icon" type="image/x-icon" href="images/code.png">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"> 

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="sticky-top">
        <div id="bandeau-header" class="bg-bleu">
            <div class="container">
                <div class="row">
                    <nav id="menuprincipal" class="col d-flex navbar navbar-expand-xl py-xl-2">
                        <!-- <h2 class="yclair"><a class="navbar-brand row" href="index.php"><i class="yclair fa-solid fa-code"></i></a> <span class="yclair font-italic">Hélène Carriou</span>,<br>développeuse web</h2> -->
                        <a id="my-name" class="navbar-brand row" href="./index.php"><h2 class="yclair"><i class="yclair fa-solid fa-code"></i> <span class="yclair font-italic">Hélène Carriou</span>,<br>développeuse web</h2></a>


                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                            <span class="navbar-toggler-icon"><i class="fa-solid fa-bars yclair"></i></span>
                        </button>
                        <div id="navbarContent" class="collapse navbar-collapse justify-content-end mx-3">
                            <ul id="navbar" class="navbar-nav yclair nav-pills">
                                <li class="nav-item mx-3 mx-xl-0"><a class="nav-link text-center <?php if($current=='index.php') {echo 'isactive';}?>" href="index.php">Qui suis-je ?</a></li>
                                <li class="nav-item mx-3"><a class="nav-link text-center <?php if($current=='cv.php'){echo 'isactive';}?>" href="cv.php">CV</a></li>
                                <li class="nav-item mx-3"><a class="nav-link text-center <?php if($current=='list-portfolio.php'){echo 'isactive';}?>" href="list-portfolio.php">Portfolio</a></li>
                                <li class="nav-item mx-3"><a class="nav-link text-center" href="https://www.linkedin.com/in/h%C3%A9l%C3%A8ne-carriou/" target="_blank">Contactez-moi sur LinkedIn</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

<main class=" py-4">