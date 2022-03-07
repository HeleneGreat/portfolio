<?php include_once('header.php');
require_once('class/fakeBdd.php'); 
?>


<!-- CAROUSEL -->
<section id="carouselControls" class="d-none d-md-block carousel slide mb-4 mt-n4" data-ride="carousel" data-interval="3500" data-pause="hover" data-touch="true">
    <!-- images -->
    <div id="slider" class="carousel-inner">
        <div class="carousel-item active">
            <a href="#<?= $allPortfolios[0]->getId();?>">
                <img src="<?= $allPortfolios[0]->getImage();?>" class="d-block mx-auto w-75" alt="<?= $allPortfolios[0]->getTitle();?>">
            </a>
        </div>
        <?php foreach(array_slice ($allPortfolios, 1) as $allPortfolio) {                
                ?> 

        <div class="carousel-item">
            <a href="#<?= $allPortfolio->getId();?>">
                <img src="<?= $allPortfolio->getImage();?>" class="d-block mx-auto w-75" alt="<?= $allPortfolio->getTitle();?>">
            </a>
        </div>
        
        <?php }; ?> 
    </div>
    <!-- Controls du carousel -->
    <a href="#carouselControls" class="control carousel-control-prev bleu" role="button" data-slide="prev">
        <span aria-hidden="true"><i class="fa-solid fa-chevron-left"></i></span>
        <span class="sr-only">Précédent</span>
    </a>
    <a href="#carouselControls" class="control carousel-control-next bleu" role="button" data-slide="next">
        <span aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
        <span class="sr-only">Suivant</span>
    </a>
</section>


<!-- Alerte MAJ régulières -->
<aside class="alert my-alert alert-dismissible fade show container" role="alert">
    <h5 class="alert-heading">Cette section est régulièrement mise à jour pour y intégrer mes derniers projets.</h5>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aira-hidden="true">x</span>
    </button>
</aside>



<!-- CARDS -->
<section class="container mb-4">
    <div class="row justify-content-between">
    <?php foreach($allPortfolios as $allPortfolio) {?>
        <article id="<?= $allPortfolio->getId();?>" class="col-12 col-lg-5 mt-5 project-card">
            <div class="card shadow pt-3 px-2 all-cards">
                <!-- <div class="card-img"> -->
                    <a href="<?= $allPortfolio->getUrl();?>">
                        <img class="card-img-top mx-auto border-soft" src="<?= $allPortfolio->getImage();?>" alt="<?= $allPortfolio->getTitle();?>">
                    </a>
                <!-- </div> -->
                <div class="card-body">
                    <h3 class="card-title bleu"><?= $allPortfolio->getTitle();?></h3>
                    <p class="card-text"><?= $allPortfolio->getUnderTitle();?></p>
                </div>   
                <a class="btn btn-bleu w-50 mx-auto mb-4" href="<?= $allPortfolio->getUrl();?>">Détails du projet</a>
            </div>
        </article>
    <?php } ?>
    </div>
</section>



<?php include_once('footer.php'); ?> 