<?php

session_start();
if(empty($_SESSION['username']))
{
    header('Location: login.php');
    exit();
}
require 'inc/head.php';
require 'inc/data/products.php';
?>

<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_COOKIES here.
    </div>
</section>
<?php require 'inc/foot.php'; ?>
