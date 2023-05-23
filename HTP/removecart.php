<?php
if (isset($_GET['del']))
{
session_start();
include 'connection.php';
    $UserId = $_SESSION['UserId'];
$sql = "DELETE FROM cart WHERE UserId =".$UserId." AND  Product_Id =".$_GET['del'];
$result = mysqli_query($conn, $sql);
if (!$result)
{
    echo mysqli_error($conn);
}
else
{
    header('location:cart.php');
}
}
?>