<?php
include 'connection.php';
 session_start();
$User_Id = $_SESSION['UserId'];
$query = "INSERT INTO Orders (UserId,Product_Id,Quantity)
(SELECT cart.UserId,cart.Product_Id,cart.Quantity from cart where UserId =".$User_Id.")
";
$result = mysqli_query($conn, $query);
if($result)
{
    $query = "DELETE FROM Cart WHERE UserId = ".$User_Id;
$result = mysqli_query($conn, $query);
if($result)
{
      echo "<script> alert('Order Placed Successfully');
                  window.location.href='products.php';</script>";
}
}
else
{
    echo mysqli_error($conn);
}
?>