<?php
if(isset($_POST['submit']))
{
    include 'connection.php';
     session_start();
    $name = $_POST['pname'];
    $ProductDes = addslashes($_POST['ProductDes']);
    $date = $_POST['date'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
 
    $UserId = $_SESSION['UserId'];

  $filename = $_FILES["PImg"]["name"] ;
        $tmp_filename = $_FILES["PImg"]["tmp_name"] ;
        $file_ext = explode(".",$filename);
    $filecheck = strtolower(end($file_ext));
    $file_extensions = array('png','jpg','jpeg');
    if(in_array($filecheck,$file_extensions) && $_FILES["PImg"]["size"]<1053248)
    {
        $folder = "./Server_Storage/".$filename;
        move_uploaded_file($tmp_filename,$folder);
       
       $query = "INSERT INTO Products(UserId,Product_Name,Product_Des,Product_Img,Product_Price,Quantity) values (".$UserId.",'$name','$ProductDes','$folder',".$price.",".$quantity.")";
    
        $result = mysqli_query($conn,$query);
         if($result)
    {
 echo "Inserted Successfully";
       header("location:products.php");
    }
else
    {
        echo mysqli_error($conn);
    }
}
}
?>