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

<body class="bg-info mt-5 mb-4" style="background-image: linear-gradient(20deg,#00C1FE,#FAFFC1);">
  <div class="container col-md-4 py-3">
    <div class="container border-5 bg-white py-5" style="border-radius: 16px;">
      <h1 class="border-start border-info border-5 ">E-classe</h1>
      <h4 class="text-center">sign in</h4>
      <p class="text-center">entrer your credential to access your account</p>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="entrer votre password" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="entrer votre email"
          required>

      </div>
      <a class="btn btn-primary w-100 fw-bold te" href="home.php">
              Sign IN          
        </a>
      <p class="text-center my-3">forget your password? <span class="btn-link"> reset password </span></p>

    </div>
  </div>
</body>

</html>