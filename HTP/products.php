<!doctype html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['UserId']))
{
header("location:login.php");
}
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        
        <link rel="stylesheet" href=".//css/style.css">
    <title>Products</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        

        .flex-box {
            display: flex;
            flex-wrap: wrap;
        }

        .prod-box {
            width: 30%;
            
        }
      

        @media only screen and (max-width: 600px) {
            .flex-box {
                flex-direction: column;
                width: 100%;
            }

            .prod-box {
                width: 75%;
                flex-wrap: wrap;
            }
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light jon-header ">
    <div class="container">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">


          <li class="nav-item ">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
          <a class="nav-link" href="Products.php">PRODUCTS</a></li>
          <a class="nav-link" href="Cart.php">CART</a></li>
          <a class="nav-link" href="aboutUs.html">ABOUT US</a></li>
          <a class="nav-link" href="#">CONTACT US</a></li>





        </ul>
        <div class="logo mx-auto mt-2 ">
          <img src=".//img/LOGO.png" alt="">
        </div>

        <div class="text-center px-4" >
            <a href="./customerform.php" class="w-100"><button class="btn btn-primary"> Add
                    Product</button></a>

        </div>

        <form class="d-flex ml-auto ">
          <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light " type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

 

    <h1 align="center">Products</h1>

 

    <div class="container">
        <div class="flex-box g-2 justify-content-center align-items-center w-100">



            <?php
        include './connection.php';
        // echo"<h1>Error is </h1>";
       $query = "SELECT * FROM products";
       $result = mysqli_query($conn,$query);
    //    print_r($result);
       while($row = mysqli_fetch_assoc($result))
       {
        extract($row);
        echo '
         <div
                class="prod-box card d-flex flex-column justify-content-center align-items-center p-2 g-2 border-2 m-2 flex-wrap">
       
         <h1>'.$Product_Name.'</h1>
                <div class="prod-img w-25">
                    <img src="'.$Product_Img.'" class="w-100" alt="Product" srcset="">
                </div>
           <div class="prod-des p-2">
                  '.$Product_Des.'
                </div>
                <div class="d-flex g-5 flex-wrap w-100">
                <a href="./insertcart.php?productid='.$Product_Id.'" class="w-100"><button class="btn btn-primary my-2 w-100">Add to Cart🛒</button></a>
                <a href="./insertcart.php?productid='.$Product_Id.'&set=1" class="w-100"><button class="btn btn-secondary my-2 w-100">Buy Now💰</button></a>
                <!-- <button class="btn btn-secondary my-2 w-100">Buy Now💰</button> -->
                </div>
               
                <div class="card-footer d-flex w-100 justify-sm-content-center flex-sm-row flex-wrap">
                <div class="fs-4">
                ₹: '.$Product_Price.'
                </div>
                
                <small class="text-muted mx-1">
                
                <span class="badge bg-secondary"> Only  '.$Quantity.' Left</span>
                </small>
                
                </div>
              
                   </div>';
                // <strong>2 Left</strong>
            }
            ?>


        </div>
        
    </div>





    </div>




   








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>



</body>

</html>