<?php
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
session_start();
if(isset($_SESSION['email'])){
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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
                    <div class="tof">
                        <i class="far fa-sort"></i>
                    </div>
                    <a href="addstud.php" type="button" class="btn btn-primary">add new student</a>
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

                    $sql_re ="SELECT * FROM `students`";//$sql_re is a string
                    $sql_obj = mysqli_query( $conn,$sql_re);//sql is a obj, take connection and requete
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
    <?php 
}
else
    header('Location:index.php');
?>
</body>

</html>