<?php include_once('header.php'); 
require_once('class/Portfolio.php');
require_once('class/fakeBdd.php');

$id = (int)$_GET['id'];

for($i = 0; $i<count($allPortfolios); $i++ ){
    if($id == $allPortfolios[$i]->getId()){
        $currentId = array_search($allPortfolios[$i], $allPortfolios);
    }
}
?>




<section class="container mb-4">
    <article class="row">
        <div class="col mt-5">
            <div id="detail-card" class="row card shadow no-gutters py-3">
                <div class="col px-3">
                    <img class="card-img border-soft" src="<?= $allPortfolios[$currentId]->getImage();?>" alt="<?= $allPortfolios[$currentId]->getTitle();?>">
                </div>
                <hr class="mx-5 mt-5">
                <div class="col">
                    <div class="card-body">
                        <h1 class="card-title text-center bleu"><?= $allPortfolios[$currentId]->getTitle();?></h1>
                        <h4 class="card-text font-italic text-center mb-4"><?= $allPortfolios[$currentId]->getUnderTitle();?></h4>
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <h4 class="bleu">Cahier des charges</h4>
                                <div class="pl-3"><?= $allPortfolios[$currentId]->getDescription();?></div>
                            </div>
                            <div class="col-12 col-md-4 text-center border-md-left">
                                <h4 class="bleu">Technologies utilisées</h4>
                                <ul class="p-0">
                                <?php foreach($allPortfolios[$currentId]->getTechno() as $techno) {?>
                                    <li class="techno"><span><?= $techno ; ?></span></li>
                                    <?php } ?>
                                    <li class="mt-5"><a title="GitHub" href="<?= $allPortfolios[$currentId]->getGithub();?>"><i class="fa-brands fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <a class="btn btn-bleu d-block col-8 col-sm-6  col-md-3  col-xl-2 mx-auto" href="<?= $allPortfolios[$currentId]->getExternalLink();?>" target=_blank>Voir le site en ligne</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<!-- CAPTURE D'ECRAN DU PROJET -->
<section class="container mt-3">
    <div class="row justify-content-around">
        <!-- CAPTURE D'ECRAN  -->
           
          
    <!-- PHOTO 1 -->
        <article class="col-12 col-lg-3 mt-5">
            <div id="detail-card" class="col row card shadow no-gutters py-3">
            <button type="button" class="col btn" data-toggle="modal" data-target="#myModal1">
                <img class="card-img" src="images/<?= $allPortfolios[$currentId]->getScreenshot1(); ?>" alt="">
            </button>
            </div>
            <!-- The Modal -->
            <div class="modal" id="myModal1">
                <div id="modal-window" class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal body -->
                        <div class="modal-body ">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <img class="col mb-3" src="images/<?= $allPortfolios[$currentId]->getScreenshot1(); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </article>

<!-- PHOTO 2 -->
        <article class="col-12 col-lg-3 mt-5">
            <div id="detail-card" class="col row card shadow no-gutters py-3">
            <button type="button" class="col btn" data-toggle="modal" data-target="#myModal2">
                <img class="card-img" src="images/<?= $allPortfolios[$currentId]->getScreenshot2(); ?>" alt="">
            </button>
            </div>
            <!-- The Modal -->
            <div class="modal" id="myModal2">
                <div id="modal-window" class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal body -->
                        <div class="modal-body ">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <img class="col mb-3" src="images/<?= $allPortfolios[$currentId]->getScreenshot2(); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </article>

    <!-- PHOTO 3 -->
        <article class="col-12 col-lg-3 mt-5">
            <div id="detail-card" class="col row card shadow no-gutters py-3">
            <button type="button" class="col btn" data-toggle="modal" data-target="#myModal3">
                <img class="card-img" src="images/<?= $allPortfolios[$currentId]->getScreenshot3(); ?>" alt="">
            </button>
            </div>
            <!-- The Modal -->
            <div class="modal" id="myModal3">
                <div id="modal-window" class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal body -->
                        <div class="modal-body ">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <img class="col mb-3" src="images/<?= $allPortfolios[$currentId]->getScreenshot3(); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </article>
    
    </div>
</section>

<?php include_once('footer.php'); ?> 