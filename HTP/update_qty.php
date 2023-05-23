<?php
if (isset($_GET['qty'])) {
   
    include 'connection.php';
$query = "UPDATE `cart` SET `Quantity` = ".$_GET['qty']." WHERE `Cart_Id`=".$_GET['cartid']." AND Product_Id = ".$_GET['productid'];

$result = mysqli_query($conn, $query);
if(!$result)
{
    echo  mysqli_error($conn);
}
}

?>