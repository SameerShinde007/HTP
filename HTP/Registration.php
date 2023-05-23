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
          #message{
            color:red;
          }

          form a{
            font-size:20px;
            margin-top:15px;
          }
        
        </style>
</head>
<body>
<h1 align=center>Register</h1>
<form action="Register.php" method="post">
        

<div class="outer-container my-5">
<div class="container w-70">
<div class="mb-3 w-50">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control " id="exampleInputEmail1">
   
  </div>
  <div class="mb-3 w-50">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name=" email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3 w-50">
    <label for="exampleInputContact" class="form-label"> Phone</label>
    <input type="number" name="phone" class="form-control " id="exampleInputContact" >
    
  </div>

  <div class="mb-3 w-50">
    <label for="exampleInputAddress" class="form-label"> Address</label>
    <input type="text" name=" address" class="form-control " id="exampleInputAddress" >
    
  </div>
  <div class="mb-3 w-50">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control " id="exampleInputPassword1">
  </div>

  <div id="message">

  </div>

  <div class="mb-3 w-50">
    <label for="exampleInputPassword2" class="form-label">Confirm-Password</label>
    <input type="password" class="form-control " id="exampleInputPassword2">
  </div>

 

  
  <button type="submit" name="submit"  class="btn btn-primary">Submit</button>

  <a href="login.php" >sign in?</a>   

  </div>
  </div>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">

    </script>

    <script>
            function matchPassword()
    {
        var pw1=document.getElementById("exampleInputPassword1").value;
        var pw2=document.getElementById("exampleInputPassword2").value;

        if(pw1.length<8)
        {
            document.getElementById("message").innerHTML="**length must be greater than 8**";
            document.getElementById("exampleInputPassword1").style="border-color:red"
            return false;
        }

        if(pw1!=pw2)
        {
            alert("password did not match");
            return false;
        }
        else{
            alert("passwprd created successfullly");
            
        }
        
    }
    </script>
</body>
</html>