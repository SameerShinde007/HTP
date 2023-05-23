<?php

    include 'connection.php';
    session_start();
    $UserId = $_SESSION['UserId'];
    
$query2 = "SELECT SUM(products.product_price * cart.Quantity) AS SUM FROM products INNER JOIN cart ON products.product_id = cart.product_id where cart.UserId =".$UserId;
$result2 = mysqli_query($conn, $query2);
$row = mysqli_fetch_array($result2);
echo'
 <th scope="row">Total</th>
<td id="total">'.$row['SUM'].'</td>';
?>