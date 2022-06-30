<?php
$serverName = "localhost" ;
$userName = "root" ;
$password = "" ;
$dbName = "t2108m1" ;
// connect db
$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn -> connect_errno) {
    die($conn->connect_errno);
}
$sql_txt = "insert into products(name,price,unit,quantity,description,status) values (?,?,?,?,?,?)" ;
$stt = $conn->prepare($sql_txt);
$stt->bind_param("sdsisi",$name,$price,$unit,$quantity,$description,$status);
//set param and excute
$name = $_POST["name"];
$price = $_POST["price"];
$unit = $_POST["unit"];
$quantity = $_POST["quantity"];
$description = $_POST["description"];
$status = $_GET['status'];
if(!$_POST["status"]){
    header("Location: addproduct.php");
}else{
    $status = $_POST["status"];
}
$stt-> execute();
echo "done" ;
header("Location: listproduct.php");