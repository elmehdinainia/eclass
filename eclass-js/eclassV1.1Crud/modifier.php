<?php
    //get the index from URL
    $index = $_GET['index'];

    $data = file_get_contents('student.json');
    $data = json_decode($data, true);

    $row = $data[$index];
  
   
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
    <div class="vh-100 d-flex align-items-center">
        <div class="container h-100  w-50 h-auto ">
            <form method="POST">
                <h2 class=" w-100 text-center p-2 shadow-md p-2 bg-success text-white mh-4 ">Formullaire</h2>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="stud1" class="form-control border-2 border border-success" value="<?php echo $row['name']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="text" name="stud2" class="form-control border-2 border border-success" value="<?php echo $row['email']; ?>" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">phone</label>
                    <input type="text" name="stud3" class="form-control border-2 border border-success" value="<?php echo $row['phone']; ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Enrol</label>
                    <input type="text" name="stud4" class="form-control border-2 border border-success"value="<?php echo $row['enrol']; ?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Date of admission</label>
                    <input type="text" name="stud5" class="form-control border-2 border border-success"value="<?php echo $row['date']; ?>">
                </div>
                <div class="d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
            <?php
            if (isset($_POST['submit'])){
 

                $input = array(
                    'name'=>$_POST['stud1'],
                    'email'=>$_POST['stud2'],
                    'phone'=>$_POST['stud3'],
                    'enrol'=>$_POST['stud4'],
                    'date'=>$_POST['stud5'],
               );
               $data[$index]= $input;
               $data=json_encode($data, JSON_PRETTY_PRINT);
               file_put_contents('student.json',$data);
               header('location:student.php');

            }
            ?>
        </div>
    </div>

</body>

</html>