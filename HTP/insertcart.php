<?php
if(isset($_GET['productid']))
 {
    
    session_start();
    include 'connection.php';
    $UserId = $_SESSION['UserId'];
    
$query = "SELECT * FROM Cart WHERE Product_Id=".$_GET['productid']." AND UserId=".$UserId;
$result= mysqli_query($conn,$query);
// echo $query;
if(mysqli_num_rows($result) == 0)
{

         $query = "INSERT INTO `Cart`(UserId,Product_Id) VALUES (".$UserId.",".$_GET['productid'].")";
    $result= mysqli_query($conn,$query);
    if($result)
    {
     
        echo "<script> alert('Added to Cart');
                     window.location.href='products.php';</script>";
    }
    else
    {
        echo mysqli_error($conn);
    }
}
else
{
    echo "<script> alert('Already Added to Cart');
                     window.location.href='products.php';</script>";
}
    if( isset($_GET['set']))
    {
        header('Location:cart.php');
    }
}
?>