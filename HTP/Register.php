<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $pwd=$_POST['password'];

   

    include './connection.php';

    
    $query= "INSERT INTO `registration`( `User_Name`, `Email`, `Phone`, `User_Address`, `Password`)  VALUES ('$name', '$email', '$phone', '$address', '$pwd')";

 

    $result=mysqli_query($conn,$query);

    if($result)
    {

        echo "<script>alert('Registration successfull');
       
        window.location.href='index.php';
        
        </script>";


       
      
        
    }
    else{
             
        echo mysqli_error($conn);
    }

    
}

?>