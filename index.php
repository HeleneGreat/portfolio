<?php include_once('header.php'); ?>

    <!-- JUMBOTRON -->
    <section class="jumbotron container">
        <h1 class="bleu">Bienvenue sur mon portfolio</h1>
    </section>

<!-- Alerte RECHERCHE STAGE -->
<aside class="alert my-alert alert-dismissible fade show container" role="alert">
    <h5 class="alert-heading">Je suis actuellement à la recherche d'un stage de 2 mois, du 27 avril au 24 juin 2022. Contactez-moi si mon profil vous intéresse !</h5>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aira-hidden="true">x</span>
    </button>
</aside>


<!-- SIDEBAR NAV -->
<aside id="sidebar-nav">
    <div class="sidebar my-1"><p>Qualités personnelles</p><a href="#skills"><i class="cv fa-solid fa-person-hiking"></i></a></div>
    <div class="sidebar my-1"><p>Formations</p><a href="#school"><i class="cv fa-solid fa-graduation-cap"></i></a></div>
    <div class="sidebar my-1"><p>Expériences</p><a href="#job"><i class="cv fa-solid fa-briefcase"></i></a></div>
    <div class="sidebar my-1"><p>Langues étrangères</p><a href="#language"><i class="cv fa-solid fa-comment-dots"></i></a></div>
    <div class="sidebar my-1"><p>Centres d'intérêt</p><a href="#hobby"><i class="cv fa-solid fa-sailboat"></i></a></div>
</aside>

<section class="container">
    <hr class="mt-4">

</section>

<!-- SOFT SKILLS -->
<section id="skills" class="container">
    <h2 class="bleu mb-3 text-decoration-underline"><i class="cv fa-solid fa-person-hiking bleu"></i> Qualités personnelles</h2>
    <!-- <h2 class="bleu mb-3 text-decoration-underline"><i class="cv fa-solid fa-brain bleu"></i> Qualités personnelles</h2> -->
    <div class="row justify-content-around">
        <ul class="">
            <li>Travail en équipe</li>
            <li>Autonomie</li>
            <li>Adaptabilité</li>
        </ul>
        <ul class="">
            <li>Sens de l'organisation</li>
            <li>Force de proposition</li>
            <li>Curiosité</li>
        </ul>
        <ul class="">
            <li>Polyvalence</li>
            <li>Rigueur</li>
            <li>Diplomatie</li>
        </ul>
    </div>
    <hr class="mt-4">
</section>

<!-- FORMATIONS -->
    <section id="school" class="container">
        <h2 class="bleu mb-3 text-decoration-underline"><i class="cv fa-solid fa-graduation-cap bleu"></i> Formations</h2>
        <!-- KERCODE -->
        <div class="pl-4">
            <h3 class="what bleu">BTS Développeur intégrateur en réalisation d'applications web</h3>
            <h4 class="where">Formation Kercode au greta de Vannes<span class="bleu px-3">|</span>2021-2022</h4>
            <ul>
                <li>HTML CSS Javascript PHP mySQL</li>
                <li>Wordpress, Drupal</li>
            </ul>
        </div>
        <!-- M2 CAEN -->
        <div class="pl-4">
            <h3 class="what bleu">Master 2 LEA, Développement Durable : Stratégie de Concertation et de Communication</h3>
            <h4 class="where">Université de Caen-Normandie<span class="bleu px-3">|</span>2016-2017</h4>
            <ul>
                <li>Problématiques et enjeux du développement durable</li>
                <li>Langues étrangères et interculturalité</li>
                <li>Communication et gouvernance</li>
                <li>Economie sociale et solidaire</li>
                <li>Responsabilité sociale des entreprises</li>
                <li>Technologies de l'information et de la communication</li>
                <li>Projet étudiant de gestion des biodéchets</li>
            </ul>
        </div>
        <!-- M1 LILLE -->
        <div class="pl-4">
            <h3 class="what bleu">Master 1 LEA, Relations interculturelles et coopération internationale</h3>
            <h4 class="where">Université Lille 3<span class="bleu px-3">|</span>2015-2016</h4>
            <ul>
                <li>Spécialité : Amérique latine</li>
                <li>Langues et cultures : anglais et espagnol</li>
                <li>Coopération internationale</li>
                <li>Economie</li>
            </ul>
        </div>
        <!-- L3 QUERETARO -->
        <div class="pl-4">
            <h3 class="what bleu">Licenciatura en negocios turísticos y comercio internacional</h3>
            <h4 class="where">Universidad Autónoma de Querétaro (Mexique)<span class="bleu px-3">|</span>2014-2015</h4>
            <ul>
                <li>Troisième année de licence LEA au Mexique</li>
                <li>Cours de commerce international, d'économie du tourisme et d'histoire mexicaine</li>
                <li>Année en immersion totale</li>
            </ul>
        </div>
        <!-- LICENCE NANTES -->
        <div class="pl-4">
            <h3 class="what bleu">Licence Langues Etrangères Appliquées (LEA)</h3>
            <h4 class="where">Université de Nantes<span class="bleu px-3">|</span>2012-2015</h4>
            <ul>
                <li>Langues et civilisations : anglais, espagnol, russe</li>
                <li>Communication</li>
                <li>Economie des entreprises, statistiques, comptabilité</li>
                <li>Droit fiscal, droit du travail</li>
            </ul>
        </div>
        <hr class="mt-4">
    </section>

<!-- EXPERIENCES -->
    <section id="job" class="container">
        <h2 class="bleu"><i class="cv fa-solid fa-briefcase bleu"></i> Expériences</h2>
        <!-- Vannes -->
        <div class="pl-4">
            <h3 class="what bleu">Gestionnaire insertion</h3>
            <h4 class="where">Département du Morbihan<span class="bleu px-3">|</span>2021</h4>
            <ul>
                <li>Gestion administrative des appels à projet insertion</li>
                <li>Liquidation des subventions aux chantiers d'insertion</li>
            </ul>
        </div>
        <!-- Faouët -->
        <div class="pl-4">
            <h3 class="what bleu">Assistante de territoire en protection de l'enfance</h3>
            <h4 class="where">Département du Morbihan<span class="bleu px-3">|</span>2019-2020</h4>
            <ul>
                <li>Gestion administrative des dossiers de prévention enfance</li>
                <li>Saisie et liquidation des demande d'aides financières</li>
                <li>Référente du logiciel temps pour les agents du territoire</li>
            </ul>
        </div>
        <!-- Mr Bricolage -->
        <div class="pl-4">
            <h3 class="what bleu">Chargée de missions Qualité et Développement Durable</h3>
            <h4 class="where">Mr. Bricolage (45)<span class="bleu px-3">|</span>2018</h4>
            <ul>
                <li></li>
            </ul>
        </div>
        <!-- Galway -->
        <div class="pl-4">
            <h3 class="what bleu">Chargée de communication internationale</h3>
            <h4 class="where">National University of Ireland, Galway<span class="bleu px-3">|</span>2016</h4>
            <ul>
                <li>Communication internationale</li>
                <li>Webmastering (CMS Terminal Four)</li>
                <li>Amélioration de l'attractivité de l'université à l'international</li>
                <li>Rédaction d'un guide d'utilisation du site internet (back-office)</li>
            </ul>
        </div>
        <hr class="mt-4">
    </section>

<!-- LANGUAGES -->
    <section id="language" class="container">
        <h2 class="bleu"><i class="cv fa-solid fa-comment-dots bleu"></i> Langues étrangères</h2>
        <ul>
            <li>Anglais : bilingue</li>
            <li>Espagnol : bilingue</li>
        </ul>
        <hr class="mt-4">
    </section>


<!-- HOBBIES -->
    <section id="hobby" class="container">
        <h2 class="bleu"><i class="cv fa-solid fa-sailboat bleu"></i> Centres d'intérêts</h2>
        <ul>
            <li><i class="fa-solid fa-music mr-4"></i>Piano</li>
            <li><i class="fa-solid fa-dice mr-3"></i>Jeux de société</li>
            <li><i class="fa-solid fa-computer-mouse mr-4"></i>Jeux vidéos</li>
            <li><i class="fa-solid fa-clapperboard mr-4"></i>Séries</li>
            <li><i class="fa-solid fa-magnifying-glass mr-4"></i></i>Histoire, recherches généalogiques</li>
            <li><i class="fa-solid fa-screwdriver-wrench mr-4"></i>Bricolage, DIY</li>
        </ul>
    </section>


    
    

<?php include_once('footer.php'); ?> 
  