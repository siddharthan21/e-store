<?php 
    session_start();
    include("./connection.php");
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
    $cartid = $_SESSION['cartid'];
    $prosql = "SELECT * FROM imqge where productid = '$id' limit 1 ";
    $resultprosql = $conn->query($prosql);
    if(($resultprosql->num_rows > 0)){
        $product = $resultprosql->fetch_assoc();
    }
    $moresql = "SELECT * FROM moreinfo where productid = '$id' limit 1 ";
    $moreresult = $conn->query($moresql);
    if(($moreresult->num_rows > 0)){
        $moreproduct = $moreresult->fetch_assoc();
    }
    $q = "./img/p-" . $id[2]."/img-";



    if(isset($_POST['addCart'])){
        // echo "okay";
        if(isset($_SESSION['cart'])){

            $pid_array=array_column($_SESSION["cart"],"pid");
					if(!in_array($_SESSION["id"],$pid_array))
					{
						$index=count($_SESSION["cart"]);
						$item=array(
							'pid' => $_SESSION["id"],
							'pname' => $_POST["pname"],
							'price' => $_POST["price"],
							'qty' => $_POST["qty"]
						);
						$_SESSION["cart"][$index]=$item;
                        // echo $item;
							echo "<script>alert('Product Added..');</script>";
						    header("location:./function.php");
                        print_r($item);

					}
					else
					{
						// echo "<script>alert('Already Added..');</script>";
						header("location:./function.php");

					}

        }
        else{
            $item=array(
                'pid' => $_SESSION["id"],
                'pname' => $_POST["pname"],
                'price' => $_POST["price"],
                'qty' => $_POST["qty"]
            );
            $_SESSION["cart"][0]=$item;
            echo "<script>alert('Product Added..');</script>";
            header("location:./function.php");
            echo $item;
        }
    }



?></html>
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
                    <form action="" method="post">
                    <p><input type="text"  placeholder="Enter Qty" name="qty"  class="form-control"></p>
	                <p><input type="hidden"  name="pname" value="<?php $product['type'] ?>" class="form-control"></p>
	                <p><input type="hidden"  name="price" value="<?php $product['price'] ?>" class="form-control"></p>
	                <p><input type="submit" name="addCart" class="btn btn-success" value="Add to Cart"></p>
                </form>
                        <h4>Buy Now</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="iner-3">
                <?php for($i=0;$i<4;$i++){?> 
                    <img src="<?php echo $q.$i+1?>.webp" class="inn img-<?php echo $i+1
                    ?>" id="<?php echo $product['productid']?>" width="200px" alt="">    
                <?php } ?>
        </div>
    </main>
    <footer>
        <?php require_once("./templeate/footer.php") ?>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./js/product.js"></script>
</body>
</html>