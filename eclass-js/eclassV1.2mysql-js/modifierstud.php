
<?php 
 include_once('session.php');
//  envoyé les  modification vers base  de donnés
        include 'conect.php';

        if(isset($_GET['id'])) { //affichage
                        $id = $_GET['id'];
                        //selecting data associated with this particular id
                        $result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id ");
                        //   base de donnee ==> variables ==> form  
                        $row = mysqli_fetch_array($result);   
                 
                        $name = $row['name'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $enroll_n = $row['enrol_number'];
                        $date = $row['date_of_admission'];
        }

        if(isset($_POST['Update'])) {  //update
                        //$_post des input de la form.
                        //  form ==> variables  ==>  inserer ==> base de donnee
                     // hidden 
                        $name = $_POST['Nom'];
                        $email = $_POST['Email'];
                        $phone = $_POST['Phone'];
                        $enroll_n = $_POST['Enrol'];
                        $date_a = $_POST['date'];  
                        $sql =  "UPDATE students SET name='$name', email='$email', phone='$phone' , enrol_number='$enroll_n' , date_of_admission='$date_a'  WHERE id='$id' ";
                        $result = mysqli_query($conn, $sql);
                        var_dump($result);
                        header("Location:student.php");
        } 
         
            // afficher les info de la ligne qui on a séléctionné  dans  la form de modificatio
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
        <div class="container h-80  w-50  " style="border-radius: 30px;">

            <form method="POST" >
                <h2 class="text-center p-2 text-decoration-underline">modifier</h2>
                <!-- <input type="text" name="id" value="<?php echo $id; ?>"> -->

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="Nom" class="form-control border-2 border border-primary" value="<?php echo $name ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="text" name="Email" class="form-control border-2 border border-primary" value="<?php echo $email?>" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">phone</label>
                    <input type="text" name="Phone" class="form-control border-2 border border-primary" value="<?php echo $phone?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Enrol</label>
                    <input type="text" name="Enrol" class="form-control border-2 border border-primary"value="<?php echo $enroll_n?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Date of admission</label>
                    <input type="text" name="date" class="form-control border-2 border border-primary"value="<?php echo $date?>">
                </div>
                <div class="d-flex justify-content-center">     
                <button type="submit" name="Update" class="btn btn-primary">Submit</button>
                </div>
          
            </form>
            
            
          
        </div>
    </div>

</body>

</html>