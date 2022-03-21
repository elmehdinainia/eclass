<?php
 include 'conect.php';
// include_once('session.php');


if(isset($_POST['Signup'])){
  $name = $_POST["Name"] ;
  $Email = $_POST["Email"] ;
  $password= $_POST["Password"] ;
  $confirm_passw = $_POST["confirm_passw"];

if($name!="" && $Email!="" &&  $password!="" && $confirm_passw!=""){
  $query="INSERT INTO counts(Name,Email, Password,confirm_passw) values ('$name','$Email','$password','$confirm_passw')";
   if(mysqli_query($conn,$query)) {
    header('location: index.php');
   } else {
   }
  }
}
// ?>



      
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <title>sign in</title>
</head>

<body class="bg-info mt-5 mb-4 bg-primary">
  <div class="container col-md-4 py-3 ">

    <form name="myForm" class="container border-5 bg-white py-5" style="border-radius: 16px;" id ="form" method="POST" onsubmit="return validation()">




      <h1 class="border-start border-info border-5 ">E-classe</h1>
      <h4 class="text-center">sign up</h4>
      <p class="text-center">create your account</p>
      <!-- verification -->




      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" id="nameid" class="form-control" name="Name" placeholder="entrer votre password">
    

   
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">email</label>
        <input type="email" id="emailid" class="form-control" name="Email"  placeholder="entrer votre email">
    
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" id="passwordid"  class="form-control" name="Password" placeholder="entrer votre email">
    
      </div>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" id="Confirmpasswordid" class="form-control" name="confirm_passw" placeholder="entrer votre email">
    
      </div>


      <button type="submit"class="btn  btn-info w-100 text-white text-uppercase  "  value="Sign in" name="Signup"> 
          Sign up
          </button>
      <p class="text-center my-3">forget your password? <span class="btn-link"> reset password </span></p>
      <input class="form-check-input me-1" type="checkbox" name="remember" value="" aria-label="...">
       <span>remamber me</span> 

    </form>
  </div>
  <script src="validarion.js"></script>
</body>

</html>