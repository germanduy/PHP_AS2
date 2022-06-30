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

//echo "<br>";

$sql_txt = "select * from products where id =".$_GET["id"] ;
$result = $conn -> query($sql_txt);
$product = null;
$list = [];
if($result -> num_rows>0){
    while ($row = $result -> fetch_assoc()){
//        echo "id ".$row['id']." name:".$row['studentName']."<Br>";
        $product = $row;
    }
}
if($product ==null){
    die("product not found");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>EDIT</title>
</head>
<body>
<div class="container mt-3"  >
    <div style="margin-left: 400px; margin-right: 400px">
        <h2 style="text-align: center">Product Detail</h2>
        <form action="updateproduct.php?id=<?php echo $product["id"]?>" method="post" >
            <div class="mb-3 mt-3">
                <label for="name">Product Name:</label>
                <input required type="text" class="form-control" value="<?php echo $product["name"]; ?>" placeholder="Enter Name:" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="price">Price:</label>
                <input required type="text" class="form-control" value="<?php echo $product["price"]; ?>" placeholder="Enter Price:" name="price">
            </div>
            <div class="mb-3 mt-3">
                <label for="unit">Unit:</label>
                <input required type="text" class="form-control" value="<?php echo $product["unit"]; ?>" placeholder="Enter Unit:" name="unit">
            </div>
            <div class="mb-3 mt-3">
                <label for="quantity">Quantity:</label>
                <input required type="text" class="form-control" value="<?php echo $product["quantity"]; ?>" placeholder="Enter Quantity:" name="quantity">
            </div>
            <div class="mb-3 mt-3">
                <label for="description">Description:</label>
                <input required type="text" class="form-control" value="<?php echo $product["description"]; ?>" placeholder="Enter Description:" name="description">
            </div>
            <div class="mb-3 mt-3">
                <label class="container">
                    <input type="radio"  name="status"  value="1" <?php
                    if($product["status"]==1){
                        echo "checked=";
                    }else {
                        echo "";
                    }
                    ?>>
                    Active
                </label>
                <label class="container">
                    <input type="radio"  name="status" value="2" <?php
                    if($product["status"]==2){
                        echo "checked=";
                    }else {
                        echo "";
                    }
                    ?>>
                    Deactive
                </label>
            </div>
            <button type="submit" style="margin-left: 200px" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
