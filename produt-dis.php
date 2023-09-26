<!-- <img src="<?php // echo $q.$a+1?>.webp" alt=""> -->

<?php 
    session_start();
    include("./connection.php");
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    $prosql = "SELECT * FROM imqge where productid = '$id' limit 1 ";
    $resultprosql = $conn->query($prosql);
    if(($resultprosql->num_rows > 0)){
        $product = $resultprosql->fetch_assoc();
    }
    // print_r($product);
    $moresql = "SELECT * FROM moreinfo where productid = '$id' limit 1 ";
    $moreresult = $conn->query($moresql);
    if(($moreresult->num_rows > 0)){
        $moreproduct = $moreresult->fetch_assoc();
    }
    // echo "<br/>";
    // print_r($moreproduct);
    $q = "./img/p-" . $id[2]."/img-";
    // echo $q;
?>
<!--  -->
<!-- <img src="./img/p-1/img-1.webp" alt=""> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/p.css">
</head>
<body>
    <header>
        <?php  
            require_once("./templeate/header.php");
        ?>
    </header>
    <main>
        <div class="product product-1">
            <div class="iner">
                <div class="full-img">
                    <img src="<?php echo $q."1"?>.webp" class="main-img" id="img" width="330px" alt="">
                </div>
                <div class="iner-2">
                    <div class="">
                    <p class="off"><?php echo "RS. ".$product['price'] ?></p>
                    <p><?php echo "RS. ".$product['offf'] ?></p>
                    </div>
                    <div class="size">
                        <div class="s">
                            <p>S</p>
                            <input type="radio" name="s" id="s" value="S">
                        </div>
                        <div class="s">
                            <p>M</p>
                            <input type="radio" name="m" id="s" value="S">
                        </div>
                        <div class="s">
                            <p>L</p>
                            <input type="radio" name="l" id="s" value="S">
                        </div>
                        <div class="s">
                            <p>XL</p>
                            <input type="radio" name="xl" id="s" value="S">
                        </div>
                    </div>
                    <div class="buy">
                        <h4>Add To Cart</h4>
                        <h4>Buy Now</h4>
                    </div>
                </div>
                <!-- <img src="../img/p-0/img-2.webp" alt="" srcset=""> -->
            </div>
        </div>
        <div class="iner-3">
                <?php for($i=0;$i<4;$i++){?> 
                    <img src="<?php echo $q.$i+1?>.webp" class="inn img-<?php echo $i+1
                    ?>" id="<?php echo $moreproduct['productid']?>" width="200px" alt="">    
                <?php } ?>
        </div>
        <!-- <img src="" alt="" srcset=""> -->
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./js/product.js"></script>
</body>
</html>