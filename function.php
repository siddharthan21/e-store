<?php 
include("./connection.php");
session_start();
$id = $_SESSION['id'];
if(isset($_SESSION['id'])){
    $sql = "SELECT * FROM imqge where productid = '$id' limit 1";
    $res = $conn->query($sql);
    if($res->num_rows>0){
        $pro = $res->fetch_assoc();
    }
    echo "<pre>";
        // print_r($pro);
    echo "</pre>";
}
$cartid = $_SESSION['cartid'] ;
// $cartt = $email;

$sql6 = "SELECT * FROM $cartid";
    $val = $conn->query($sql6);
    if($val !== FALSE)
    {
       print("Exists");
    }else{
       print("Doesn't exist");
       $create = "CREATE TABLE $cartid (
        id INT(6)  PRIMARY KEY,
        email VARCHAR(30) NOT NULL,
        qty VARCHAR(30) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    }
$sqlcreate = $conn->query($create);
    foreach ($_SESSION['cart'] as $key => $value) {

        echo $value['pid'];
        echo $value['qty'];
        // echo "ada";

        # code...
}

?>
