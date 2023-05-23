<?php
session_start();
if(!isset($_SESSION['UserId']))
{
header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <h1 align="center" class="my-5">Customer Form</h1>
    <div class="container h-100 d-flex align-items-center justify-content-center my-5">
        <form action="./insertproduct.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">

                <input type="text" class="form-control" id="ProductName" placeholder="Enter Product Name" name="pname"
                    required>

            </div>
            <div class="mb-3">


                <textarea placeholder="Product Description" class="form-control" name="ProductDes" id="ProductDes"
                    cols="30" rows="6" required></textarea>

            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Enter Product Buying Date</label>
                <input type="date" class="form-control" id="Date" name="date" required>
            </div>
            <div class="mb-3">

                <input type="number" class="form-control" id="Price" placeholder="Enter Product Price" name="price"
                    required>
            </div>
            <div class="mb-3">

                <input type="number" class="form-control" id="Quantity" placeholder="Enter Product Quantity"
                    name="quantity" required>
            </div>
            <div>
                <label for="formFileLg" class="form-label">Upload Product Image</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="PImg" required>
            </div>
            <div class="text-center w-100">

                <button type="submit" class="btn btn-primary my-5 w-100" name="submit">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>