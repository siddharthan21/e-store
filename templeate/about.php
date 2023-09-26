<?php 
include("../connection.php");
session_start();
//  echo $_SESSION['username'];
$mail = $_SESSION['email'];
if($mail) {
    $user = "SELECT * FROM sgin where email = '$mail' limit 1";
    $userresult = $conn->query($user);
    if($userresult->num_rows > 0) {
        $data = $userresult->fetch_assoc();
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/head&foot.css">
</head>
<body>
    <header>
        <?php require_once("../templeate/header.php")?>
    </header>
    <main>
            <div class="dis">
                <div class="wel">
                    <h1>Welcomee</h1>
                    <h3><?php echo $data['name'] ?></h3>
                </div>
                <h5>
                    <a href="../include/logout.php">Logout?</a>
                </h5>
            </div>
    </main>
</body>
</html>
<?php
} 
else{
    header("location:../index.php");
}
?>