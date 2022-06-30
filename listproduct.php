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
//echo "connect faile";
//echo "<br>";

$sql_txt = "select * from products" ;
$result = $conn -> query($sql_txt);
// var_dump($result); die();
$list = [];
if($result -> num_rows>0){
    while ($row = $result -> fetch_assoc()){
//        echo "id ".$row['id']." name:".$row['studentName']."<Br>";
        $list[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h1 style="text-align: center">Product List</h1>
    <form action="addproduct.php">
    <button type="submit" style="margin-left: 1150px; margin-bottom: 25px" type="button" class="btn btn-info">ADD PRODUCT</button>
    </form>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Unit</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Status</th>
            <th></th>
            <th></th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($list as $pd): ?>
            <tr>
                <td><?php echo $pd["name"]; ?></td>
                <td><?php echo $pd["price"];?></td>
                <td><?php echo $pd["unit"]; ?></td>
                <td><?php echo $pd["quantity"]; ?></td>
                <td><?php echo $pd["description"]; ?></td>
                <td><?php
                    if( $pd["status"]==1){
                        echo "active";
                    }
                    if( $pd["status"]==2)
                    {
                        echo "deavtice";
                    }
                     ?></td>
                <td>
                    <a href="editproduct.php?id=<?php echo $pd["id"];?>"> Edit </a>
                </td>
                <td>
                    <a onclick="return confirm('Are you sure')"; href="removeproduct.php?id=<?php echo $pd["id"];?>"> Remove </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
