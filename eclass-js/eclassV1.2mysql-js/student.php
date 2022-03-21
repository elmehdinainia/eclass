<?php
    include('session.php');
       $home="";
       $course="";
       $students="active";
       $payment="";
       $reports="";
       $settings="";
?>
<?php 
        include 'conect.php';

?>
   <?php

if (isset($_POST['save'])) {  //determine si une variable declaré et non null 
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enrol=$_POST['enrol_number'];
    $date_of_admission = $_POST['date_of_admission'];
    if($name != "" && $email!="" && $phone!="" && $enrol!="" && $date_of_admission!=""){
    $requete =("INSERT INTO student (name,email,phone,enrol_number,date_of_admission)
	VALUES ('$name','$email','$phone','$enrol','$date_of_admission')");
    mysqli_query($conn,$requete);  //sayfatharequette lbase de donnée
    header('location:student.php');   //deiger vers la page student 
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>student</title>
</head>

<body> 
    <div class="container-fluid">
        <div class="row flex-nowrap">
            
            <?php include 'sidebar.php';?>
        </div>
        <!-- end side bar -->

        <!-- start nav bar  -->
        <div class="col col-sm-10 flex-column-sm h-sm-50 my-2">
            <nav class="navbar">
                
                <?php include 'navbar.php'; ?>
            </nav>
            <!-- end nav bar -->


            <div class="d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Students list</div>
                <div class="btn-add d-flex gap-3 align-items-center">
    
                        <i class="far fa-sort"></i>
                    <!-- <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"> add new student</a> -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    add new student
                </button>

               
  



                </div>
            </div>
            <div class="table-responsive">
                <table class="table student_list table-borderless">
                    <thead>
                        <tr class="align-middle">
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Enroll Number</th>
                            <th>Date of admission</th>
                            <th class="opacity-0">list</th>
                        </tr>
                    </thead>
                    <tbody>
                   <?php
                // Tableaux

                    $sql_re ="SELECT * FROM `student`";//$sql_re is a string
                    $sql_obj = mysqli_query( $conn,$sql_re);//sql is RETURN a obj, take connection and requete
                    //$sql_assoc = mysqli_fetch_assoc($sql_obj);// mysqli_fetch_assoc this function takes a obj and convert to array associative 
                    //mysqli_num_rows this function return number all the rows

                //    affichage
                    while( $row = mysqli_fetch_assoc($sql_obj)){ ?>
                    <tr   class="bg-white align-middle">
                            <td>  <img src="image/student.jpg" alt="" height="50" width="50"></td>
                            <td>  <?php echo $row['name'] ?>              </td>  <!-- all key name,email etc... this is a names column of database -->
                            <td>  <?php echo $row['email'] ?>             </td>
                            <td>  <?php echo $row['phone'] ?>              </td>
                            <td>  <?php echo $row['enrol_number'] ?>        </td>
                            <td>  <?php echo $row['date_of_admission'] ?>   </td>
                            <!-- BUTTONC  -->
                            <td class="d-md-flex gap-3 mt-3">
                                <!-- QUERRY STRING  -->

                               <!-- pour modifier -->

                                <a href="modifierstud.php?id=<?php echo $row['id']; ?>"><i class="far fa-pen"></i></a>

                                <!--  pour supprimer-->
                               <a href="delet.php?id=<?php echo $row['id']; ?>"> <i class="far fa-trash"></i></a>
                   
                            </td>
                    </tr>
                       <?php 
                      }?>
                        
                      

                        
                    </tbody>

                </table>

            </div>
        </div>
        

    </div>

    </div>
                    <!-- /******create student**** */ -->

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
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
                    <input type="date" name="date_of_admission" class="form-control border-2 border border-primary" id="exampleInputPassword1">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" name="save" class="btn btn-primary">Submit</button>
                </div>
            </form>

      </div>
      
    </div>
  </div>
</div>





<!-- ******************************* -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>