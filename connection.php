<?php



$dbhost = "localhost";
$dbuser = "root";
$dbpass = "password";
$dbname = "connection";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// if($conn->connect_error){
//     echo("COnnection falied".$conn->connect_error);
// }else{
//     echo ("conection sucess");    
// }
?>