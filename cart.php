<?php require 'inc/head.php';
if (!isset($_SESSION['loginname'])){
    header("location: login.php");
}
?>
<section class="cookies container-fluid">
    <?php foreach ($_SESSION as $key=>$value){
    ?>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <figure class="thumbnail text-center">
                <?php if ($key != "loginname"){ ?>
                <img src="assets/img/<?= $key ?>.jpg" alt="cookies choclate chips" class="img-responsive">
            </figure>
        </div>
        <div class="col-sm-12 col-md-6">
            <p> Quantity = <?=$value ?> </p>
        </div>
    </div>
<?php }
    } ?>
</section>
<?php require 'inc/foot.php'; ?>
