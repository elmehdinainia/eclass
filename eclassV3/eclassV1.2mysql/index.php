<?php

include 'conect.php';
session_start();
$query = "SELECT * FROM counts" ;
$result = mysqli_query($conn , $query) ;
$row = mysqli_fetch_assoc($result) ;

if(isset($_POST['login'])){

      if ($_POST['email'] == $row['Email']) {
      if ($_POST['password'] == $row['Password']){
        $_SESSION['email'] = $row['Email'];
        $_SESSION['password'] = $row['Password'];
        if(isset($_POST['remember'])){
        setcookie('email', $_SESSION['email'] , time()+(3600*24),"/");
        setcookie('password', $_SESSION['password'] , time()+(3600*24),"/");
        }



       header('location:home.php') ;

}
else{
  $error = 'password incorrect' ;
}
}
else {
$error = 'email and password est incorrect' ;
}

}









//                            validation en general

$password_error =  $email_error = "";
$regex = "/^[_a-z0-9-]+(.[_a-z0-9-]+)@[a-z0-9-]+(.[a-z0-9-]+)(.[a-z]{2,3})$/";

if ($_SERVER['REQUEST_METHOD'] == "POST") { //verifier le method get / post

  $Email = validatinput($_POST["email"]);
  $Password = validatinput($_POST["password"]);

    }
        function validatinput($data){ 
        $data=htmlspecialchars($data);
        $data=trim($data);
        $data=stripslashes($data);
        return $data;
        }
              //validation email
              if (empty($_POST['email'])) {
                $email_error = "please enter your email"; 
                
              } else {
                $email = $_POST['email'];
                if (!preg_match($regex, $email)) {
                  $email_error = "please enter  email valid";
                }

            }
                //validation password
                if (empty($_POST['Password'])) {
                  $password_error = "please enter your password";
                }

?>

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

<body class="bg-infon mt-5 mb-4" style="background-image: linear-gradient(20deg,#00C1FE,#FAFFC1);">
  <div class="container col-md-4 py-3 ">

    <form method="POST" class="container border-5 bg-white py-5" style="border-radius: 16px;">




      <h1 class="border-start border-info border-5 ">E-classe</h1>
      <h4 class="text-center">sign in</h4>
      <p class="text-center">entrer your credential to access your account</p>
      <!-- verification -->




      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="entrer votre password" value="<?php if (isset($_COOKIE['email'])) echo $_COOKIE['email'] ?> ">
        <?php  if(isset($_POST['email'])){?>
        <span class="text-danger"><?php echo  $email_error     ?>
      </span>
      <?php } ?>
      </div>




      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="entrer votre email"value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>">
        <?php  if(isset($_POST['password'])){?>
        <span class="text-danger"><?php echo  $password_error ?></span>
        <?php }?>
      </div>



      <input type="submit" name="login" class="btn btn-primary w-100 fw-bold te"> </input>
      <p class="text-center my-3">forget your password? <span class="btn-link"> reset password </span></p>
      <input class="form-check-input me-1" type="checkbox" name="remember" value="" aria-label="...">
        remamber me

    </form>
  </div>
</body>

</html>