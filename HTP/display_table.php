<?php


    include 'connection.php';
    session_start();
    $UserId = $_SESSION['UserId'];
    
                       $query1 = "SELECT products.Product_Name,products.Product_Price,cart.Quantity FROM products INNER JOIN cart ON products.Product_Id = cart.Product_Id WHERE cart.UserId=".$UserId;
       $result1 = mysqli_query($conn,$query1);
       if(mysqli_num_rows($result1) > 0)
       {
       while($row = mysqli_fetch_assoc($result1))
       {
 extract($row);
      
 echo'   
 <tr class="bg-light">
                        
                    <td>'.$Product_Name.'('.$Quantity.')</td>
                    <td>'.$Product_Price.'</td>
                    
                    </tr>
                    ';
                    // <br>
            

                      }
                    }
                   
?>