<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style>
            body{
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
          .container{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
          }
          form a{
            font-size:20px;
            margin-top:15px;
          }
        
        </style>


</head>
<body>

<?php
 if(isset($_POST['submit']))
 {
    include './connection.php';
    $email=$_POST['email'];
    $pwd=$_POST['password'];

$query="SELECT * FROM `registration` WHERE Email='$email' AND Password='$pwd'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$count=mysqli_num_rows($result);
if($count==1)
{
  
    
   
    session_start();
    $_SESSION['UserId']=$row["UserId"];
    $_SESSION['Name']=$row["User_Name"];
    $_SESSION['Email']=$row["Email"];
    $_SESSION['Phone']=$row["Phone"]; 
    $_SESSION['Address']=$row["User_Address"];
    
  
    echo "<script> 
    
                     window.location.href='index.php';
                   
                     </script>";
 
 

}

else{
  echo "<script> alert('Login failed');
 </script>";

}





 
    

 }

 ?>


    <h1 align=center>LOGIN</h1>
    <form action="login.php" method="post">

<div class="outer-container my-5">
   
<div class="container w-70">
<div class="mb-3 w-50">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name=" email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
    
        </div>
  <div class="mb-3 w-50">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="text" name="password" class="form-control " id="exampleInputEmail1">
  
    
  </div>
  
  <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
  <a href="registration.php" >sign up?</a>         
  </div>
</div>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">

    </script>
</body>
</html>







