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
        <div class="container h-80  w-50  " style="border-radius: 30px;">
            <form method="POST">
                <h2 class="text-center p-2 text-decoration-underline">Formullaire</h2>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" name="stud1" class="form-control border-2 border border-primary" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="text" name="stud2" class="form-control border-2 border border-primary " id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">phone</label>
                    <input type="text" name="stud3" class="form-control border-2 border border-primary" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Enrol</label>
                    <input type="text" name="stud4" class="form-control border-2 border border-primary" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Date of admission</label>
                    <input type="text" name="stud5" class="form-control border-2 border border-primary" id="exampleInputPassword1">
                </div>
                <div class="d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <?php
            if (isset($_POST['submit'])){
                $data = file_get_contents('student.json');
                $data = json_decode($data,true);

                $mehdi = array(
                    'stud1'=>$_POST['stud1'],
                    'stud2'=>$_POST['stud2'],
                    'stud3'=>$_POST['stud3'],
                    'stud4'=>$_POST['stud4'],
                    'stud5'=>$_POST['stud5'],
               );
               $data[] = $mehdi;
               $data=json_encode($data, JSON_PRETTY_PRINT);
               file_put_contents('student.json',$data);
               header('location:student.php');

            }
            ?>
        </div>
    </div>

</body>

</html>