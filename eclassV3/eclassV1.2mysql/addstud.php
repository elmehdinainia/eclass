
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
  <?php include 'conect.php'; ?> 
    <div class="vh-100 d-flex align-items-center">
        <div class="container h-80  w-50  " style="border-radius: 30px;">
            <form method="POST">
                <h2 class="text-center p-2 text-decoration-underline">Formullaire</h2>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control border-2 border border-primary" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control border-2 border border-primary " id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">phone</label>
                    <input type="text" name="phone" class="form-control border-2 border border-primary" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Enrol</label>
                    <input type="text" name="enrol_number" class="form-control border-2 border border-primary" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Date of admission</label>
                    <input type="text" name="date_of_admission" class="form-control border-2 border border-primary" id="exampleInputPassword1">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" name="save" class="btn btn-primary">Submit</button>
                </div>
            </form>



        </div>
    </div>
    <?php

if (isset($_POST['save'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enrol=$_POST['enrol_number'];
    $date_of_admission = $_POST['date_of_admission'];
    $requete =("INSERT INTO students (name,email,phone,enrol_number,date_of_admission)
	VALUES ('$name','$email','$phone','$enrol','$date_of_admission')");
    mysqli_query($conn,$requete);
    header('location:student.php');
}
?>
</body>

</html>
