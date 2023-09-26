<?php 
$cars = array('t-1','t-2','t-3');
if($_SERVER['REQUEST_METHOD']=="POST"){
    // print($value);
    foreach ($cars as $value) {
        // print("ja");
        if(array_key_exists($value,$_POST)){
                // print($value);
                $_SESSION['id'] = $value;
                // echo $id;
                // print_r($_SESSION);
                header("location:produt-dis.php");

        }   
      }
}
if($email) {
    ?>
<link rel="stylesheet" href="../style/main.css">
<div class="main-main-1">
        <div class="main-image">
            <div class="iner-main">
                <div class="bg-img">
                    <h4>Men Collection</h4>
                    <h1>New SeaSon</h1>
                </div>
            </div>
    </div>
</div>
<div class="main main-items-1">
    <div class="item men">
        <h3>MEN</h3>
        <p>SPring 2023</p>
    </div>
    <div class="item women">
        <h3>Women</h3>
        <p>SPring 2023</p>
    </div>
    <div class="item acces">
        <h3>Acesstory</h3>  
        <p>SPring 2023</p>
    </div>
</div>
<div class="all product">
    <div class="select">
        <h1>PRODUCT OVERVIEW</h1>
        <br>
        <div class="all list">
        <?php
                while($row = $task->fetch_assoc()) {
                    $de[] = $row;
                }
                // echo $de[0]['img'];
    ?>
       <?php
for($a = 0;$a <3;$a++) {
    ?>
        <div class="card" id="card-1" >
            <img src="../img/product/<?php echo $de[$a]['img'] ?>" class="immg"  alt="">
            <div class="">
                <h3 class="off"><?php echo $de[$a]['offf'] ?></h3>
                <h2><?php echo $de[$a]['price'] ?></h2>
                <form  method="post">
                    <!-- <p id="view" class="<?php // echo $moreproduct['productid'] ?>"><a href="../product-tem/p-<?php //echo $a+1?>.php">View</a></p> -->
                    <input type="submit"  id="view" name="<?php echo $de[$a]['productid'] ?>" >
                </form>
            </div>
        </div>
        <?php } ?>
        </div>
    </div>
    </div>
</div>
<?php }  
else {
    header("location:../index.php");
}?>