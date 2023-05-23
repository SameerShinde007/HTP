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
    <title>My Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <style>
        .user-info p{
         font-size:20px;
        }
    </style>
</head>

<body>

    
   
    <h1 class="my-5" align="center">

        MyCart🛒
    </h1>
    <div
        class="container h-100 d-flex align-items-sm-none align-items-center justify-content-center w-100 flex-sm-row flex-column  gap-5">
        <div class=" d-flex align-items-center flex-column w-75 my-2" style="max-height: 100vh; overflow-y: scroll;">
            <?php
        include './connection.php';
        $display = true;
     $UserId = $_SESSION['UserId'];
       $query = "SELECT products.Product_Name,products.Product_Id,products.Product_Des,products.Product_Img,products.Quantity as PQuantity,products.Product_Price,cart.Quantity,cart.Cart_Id FROM products INNER JOIN cart ON products.Product_Id = cart.Product_Id WHERE cart.UserId=".$UserId;
       $result = mysqli_query($conn,$query);
  if(mysqli_num_rows($result) > 0)
  {
       while($row = mysqli_fetch_assoc($result))
       {
 extract($row);
      
          echo'  <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="'.$Product_Img.'" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">'.$Product_Name.'</h5>
                            <p class="card-text">'.$Product_Des.'.</p>
                            <div class="d-flex flex-column px-3">
                                <p class="card-text"><small class="text-muted">Price: '.$Product_Price.'</small></p>
                                <div class="mb-3 d-flex align-items-center w-100 gap-2 flex-wrap">
                                    <label for="Quantity" class="form-label ">Quantity:</label>
                                    <div class="w-50">
                                        <input type="number" class="form-control w-100" class="Quantity" 
                                        id="Quantity-'.$Product_Id.'"
                                         value="'.$Quantity.'" onchange="update_qty('.$Cart_Id.','.$Product_Id.')" min="1" max="'.$PQuantity.'">
                                    </div>
                                </div>
                                <div class="w-100 d-flex align-items-end justify-content-end">
                               
                                <a href="./removecart.php?del='.$Product_Id.'" class="w-100" align="right"> <button class="btn btn-primary mx-auto" name="remove">Remove❌</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
             }
            }
            else  {
                 echo '
                      
                      <h1> No Products added to the Cart!...</h1>
                      <a href="./products.php">Go to Products!..</a>';
                      $display = false;
            }
?>

        </div>
        <?php
if($display)
{?>
        <div class="table-responsive w-50 mx-2">

        <div class="user-info "align=>
            <h4>Customer-Information:</h4>
      <h5>   <?php
    echo $_SESSION['Name'];
    ?></h5>
    <p>   <?php
    echo $_SESSION['Address'];
    ?></p>
    <p>  <?php
    echo $_SESSION['Email'];
    ?></p>
   
   <h4>Product-Information:</h4>
    </div>


            <table class="table">
                <thead>
                    <tr class="bg-success">

                        <th scope="col">Product</th>
                        <th scope="col">Price</th>

                    </tr>
                </thead>
                <tbody class="table-group-divider" id="cart-table">

                    <!-- <tr class="bg-light" id="cart-table">
                    </tr> -->



                </tbody>
                <tbody id="total">

                </tbody>
            </table>

          
            <div class="w-100" align="center">

                <a href="./insertorder.php" class="w-100"> <button class="btn btn-primary mx-auto">Order
                        Now</button></a>
            </div>
            <?php } ?>
        </div>
    </div>
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./cart.js"></script>
</body>

</html>