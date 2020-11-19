
<?php 
$ROOT = './';
include_once('header.php');
?>
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Le Bon Barquette</h1>
                <p>Commandez votre barquette sur notre
                    site web !</p>
                <button class='btn-barq-primary'>
                    Commencez maintenant !
                </button>
            </div>
        </div>
    </div>
</section>
<section class="section-repas">
    <div class="container">
        <h1 class="text-center">Repas du jour</h1>
        <div class="d-flex justify-content-center">
            <div class="divider"></div>
        </div>
        <div class="repas mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="Plat/details.php">
                            <div class="barq-card">
                                <div class="barq-card-img">
                                    <img src="img/logo.png" class="img-fluid" alt="">
                                </div>
                                <div class="barq-card-body">
                                    <a href="Plat/details.php" class="barq-link">
                                        <h4>Rougail Saucisses</h4>
                                    </a>
                                    <p class="price">6,25 €</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>

<?php include_once('footer.php') ?>