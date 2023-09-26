<?php
    session_start();
    session_destroy();
    header('location:../index.php');
?>

<div class="card" id="card-1">
            <img src="../img/product/<?php echo $de[2]['img'] ?>" width="200px" alt="">
            <h3 class="off"><?php echo $de[0]['offf'] ?></h3>
            <h4><?php echo $de[0]['price'] ?></h4>
        </div>