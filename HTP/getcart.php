<?php
include './connection.php';
     $UserId = $_SESSION['UserId'];
       $query = "SELECT products.Product_Name,products.Product_Des,products.Product_Img,products.Product_Price,cart.Quantity FROM products INNER JOIN cart ON products.Product_Id = cart.Product_Id WHERE cart.UserId=".$UserId;
       $result = mysqli_query($conn,$query);
  
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
                                <div class="mb-3 d-flex align-items-center w-100">
                                    <label for="Quantity" class="form-label ">Quantity:</label>
                                    <div class="w-50 mx-2">
                                        <input type="number" class="form-control w-100" id="Quantity" value="'.$Quantity.'">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
       }

     echo'   </div>

        <div class="table-responsive w-50 mx-2">
            <table class="table">
                <thead>
                    <tr class="bg-success">

                        <th scope="col">Product</th>
                        <th scope="col">Price</th>

                    </tr>
                </thead>
                <tbody class="table-group-divider">
                ';
                    
                       $query1 = "SELECT products.Product_Name,products.Product_Price,cart.Quantity FROM products INNER JOIN cart ON products.Product_Id = cart.Product_Id WHERE cart.UserId=".$UserId;
       $result1 = mysqli_query($conn,$query1);
  
       while($row = mysqli_fetch_assoc($result1))
       {
 extract($row);
      
                 echo'   <tr class="bg-light">
                        
                    <td>'.$Product_Name.'('.$Quantity.')</td>
                    <td>'.$Product_Price.'</td>
                    
                </tr>';}
                        ?>