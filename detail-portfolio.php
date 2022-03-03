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
                        <h1 class="card-title text-center"><?= $allPortfolios[$currentId]->getTitle();?></h1>
                        <h4 class="card-text font-italic text-center"><?= $allPortfolios[$currentId]->getUnderTitle();?></h4>
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <h2>Cahier des charges</h2>
                            </div>
                            <div class="col-12 col-md-4 border-left">
                                <h2>Technologies utilisées</h2>
                            </div>
                        </div>

                        <a class="btn btn-info d-block col-2 mx-auto" href="<?= $allPortfolios[$currentId]->getExternalLink();?>" target=_blank>Voir le site en ligne</a>
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

        <?php foreach($allPortfolios[$currentId]->getScreenshots() as $screenshot) {?>
        <article class="col-12 col-lg-3 mt-5">
            <div id="detail-card" class="col row card shadow no-gutters py-3">
            <button type="button" class="col btn" data-toggle="modal" data-target="#myModal">
                <img class="card-img" src="images/<?= $screenshot; ?>" alt="">
            </button>
            </div>
            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div id="modal-window" class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal body -->
                        <div class="modal-body ">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <img class="col" src="images/<?= $screenshot; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </article>
        <?php };?>
    
    </div>
</section>

<?php include_once('footer.php'); ?> 