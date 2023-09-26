<?php 
    session_start();
    $email = $_SESSION['email'];
    include("../connection.php");
    $prosql = "SELECT * FROM imqge where productid = 't-1' limit 1 ";
    $resultprosql = $conn->query($prosql);
    if(($resultprosql->num_rows > 0)){
        $product = $resultprosql->fetch_assoc();
    }
    // print_r($product);
    $moresql = "SELECT * FROM moreinfo where productid = 't-1' limit 1 ";
    $moreresult = $conn->query($moresql);
    if(($moreresult->num_rows > 0)){
        $moreproduct = $moreresult->fetch_assoc();
    }
    // print_r($moreproduct);
?>
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
            require_once("../templeate/header.php");
        ?>
    </header>
    <main>
        <div class="product product-1">
            <div class="iner">
                <div class="full-img">
                    <img src="../img/p-1/<?php echo $moreproduct['img-1']?>.webp" class="main-img" id="img" width="330px" alt="">
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
                <!-- <img src="../img/p-1/img-2.webp" alt="" srcset=""> -->
            </div>
        </div>
        <div class="iner-3">
                <?php for($i=1;$i<5;$i++){?> 
                    <img src="../img/p-1/img-<?php echo $i?>.webp" class="inn img-<?php echo $i?>" id="<?php echo $moreproduct['productid'] ?>" width="200px" alt="">    
                <?php } ?>
        </div>
        <!-- <img src="" alt="" srcset=""> -->
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/product.js"></script>
</body>
</html>