
<?php 
        include 'conect.php';// pour connecté avec bass de donnee
        if(isset($_POST['save'])) { 
  //    $id = $_POST['id'];
        $name = $_POST['name'];//name  dyal input
        $type= $_POST['type'];
        $prix = $_POST['prix'];
        $durer = $_POST['durer'];    

            $requete ="INSERT INTO cours (Name,Type,Prix,Durer)
            VALUES ('$name','$type','$prix','$durer')";
            $query=mysqli_query($conn,$requete);
            header('location:course.php');
        }
        ?>
        
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
                <h2 class="text-center p-2 text-decoration-underline">Formullaire Course</h2>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control border-2 border border-primary" id="exampleInputPassword1" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">type</label>
                    <input type="text" name="type" class="form-control border-2 border border-primary " id="exampleInputPassword1" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">prix</label>
                    <input type="text" name="prix" class="form-control border-2 border border-primary" id="exampleInputPassword1" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">durer</label>
                    <input type="text" name="durer" class="form-control border-2 border border-primary" id="exampleInputPassword1">
                </div>
                <input type="hidden" name="id">
                <div class="d-flex justify-content-center">
                    <!-- <button type="submit" name="save" >Submit</button> -->
                    <input type="submit" name="save" class="btn btn-primary">
                </div>
            </form>



        </div>
    </div>
    

</body>

</html>
