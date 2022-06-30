<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>ADD</title>
</head>
<body>
<div class="container mt-3"  >
    <div style="margin-left: 400px; margin-right: 400px">
        <h2 style="text-align: center">Product Detail</h2>
        <form action="postProduct.php" method="post" >
            <div class="mb-3 mt-3">
                <label for="name">Product Name:</label>
                <input required type="text" class="form-control"  placeholder="Enter Name:" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="price">Price:</label>
                <input required type="text" class="form-control"  placeholder="Enter Price:" name="price">
            </div>
            <div class="mb-3 mt-3">
                <label for="unit">Unit:</label>
                <input required type="text" class="form-control"  placeholder="Enter Unit:" name="unit">
            </div>
            <div class="mb-3 mt-3">
                <label for="quantity">Quantity:</label>
                <input required type="text" class="form-control"  placeholder="Enter Quantity:" name="quantity">
            </div>
            <div class="mb-3 mt-3">
                <label for="description">Description:</label>
                <input required type="text" class="form-control"  placeholder="Enter Description:" name="description">
            </div>
            <div class="mb-3 mt-3">
                <label class="container">
                    <input type="radio"  name="status" value="1">
                    Active
                </label>
                <label class="container">
                    <input type="radio"  name="status" value="2">
                    Deactive
                </label>
            </div>
            <button type="submit" style="margin-left: 200px" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
