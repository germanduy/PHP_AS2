<?php
$serverName = "localhost" ;
$userName = "root" ;
$password = "" ;
$dbName = "t2108m1" ;
// connect db
$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn -> connect_errno){
    die($conn -> connect_errno);
}
$sql_txt= "delete from products where id=".$_GET["id"];
$stt = $conn->prepare($sql_txt);
$stt-> execute();
echo "done" ;
header("Location: listproduct.php");