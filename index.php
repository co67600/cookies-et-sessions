<?php
session_start();
require 'inc/head.php';
require 'inc/data/products.php';
var_dump($_SESSION);
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <form method="post">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>"
                             class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $cookie['name']; ?></h3>
                            <p><?= $cookie['description']; ?></p>

                            <input type="hidden" name="hiddenName" value="<?= $cookie['name']; ?>">
                            <input type="hidden" name="hiddenDescription" value="<?= $cookie['description']; ?>">
                            <input type="hidden" name="hiddenId" value="<?= $id; ?>">
                            <input type="submit" class="btn btn-primary" name="add" value="Add to cart">
                        </figcaption>
                    </figure>
                </div>
            </form>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>