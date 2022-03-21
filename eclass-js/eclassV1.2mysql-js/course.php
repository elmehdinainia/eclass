 <?php
 
 include_once('session.php');

 $home="";
 $course="active";
 $students="";
 $payment="";
 $reports="";
 $settings="";
 ?>

 <?php
        include 'conect.php';
        $sql ="SELECT * FROM `cours`";//$sql_re is a string
        $sql_c = mysqli_query( $conn,$sql)
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="Style.css">
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
                <div class="title h6 fw-bold">Course list</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="tof">
                        <i class="far fa-sort"></i>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    add new student
                </button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table student_list table-borderless">
                    <thead>
                        <tr class="align-middle t-rows">
                            <th></th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Prix</th>
                            <th>Durer</th>
                    
                        </tr>
                    </thead>
                    <tbody>

                   
                   <?php
                       
                       while( $row = mysqli_fetch_assoc($sql_c)){
                   ?>
                
                           <tr class="bg-white align-middle">
                            <td><img src="image/student.jpg" alt="" height="50" width="50" class="rounded-circle"></td>
                            <td><?php echo $row['Name'] ?></td>
                            <td><?php echo $row['Type'] ?></td>
                            <td><?php echo $row['Prix'] ?></td>
                            <td><?php echo $row['Durer'] ?></td>
       
                            <td class="d-md-flex gap-3 mt-3">
                                <a href="editcors.php?id=<?php echo $row['id']; ?>"><i class="far fa-pen"></i></a>
                               <a href="deletcorse.php?id=<?php echo $row['id']; ?>"> <i class="far fa-trash"></i></a>
                   
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
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
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
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>