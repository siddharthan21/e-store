<?php 
    session_start();
    include("connection.php");
    // include("function.php");
    $user_name = $_SESSION['username'];
    $email = $_SESSION['email'];
    if($user_name){
    // echo $_SESSION['username'];
    $sql2 = "SELECT * FROM imqge";
    $task = $conn->query($sql2);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="">
        <?php require_once('./templeate/header.php') ?>
    </header>
    <main>

    <div class="ma ma-1">
        <?php require_once("./templeate/mainimge.php") ?>
    </div>
    </main>
    <footer>
        <?php require_once("./templeate/footer.php") ?>
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="./js/product.js"></script>
</html>
<?php
}else{
    header("location:index.php");
}
?>