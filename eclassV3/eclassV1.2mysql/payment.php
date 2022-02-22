<?php
$home="";
$course="";
$students="";
$payment="active";
$reports="";
$settings="";
?>
<?php 
        include 'conect.php';
        $sql_re ="SELECT * FROM `payements`";//$sql_re is a string
        $sql_obj = mysqli_query( $conn,$sql_re);//sql is a obj, take connection and requete
        //$sql_assoc = mysqli_fetch_assoc($sql_obj);// mysqli_fetch_assoc this function takes a obj and convert to array associative 
        //mysqli_num_rows this function return number all the rows

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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    

    <title>payment</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
        
                <?php include 'sidebar.php'; ?>
            </div>
            <!-- end side bar -->

            <!-- start nav bar  -->
            <div class="col col-sm-10 flex-column-sm h-sm-50 my-2">
                <nav class="navbar">
                   
                    <?php include 'navbar.php'; ?>
                </nav>
         <!-- end nav bar -->

         <div class="bg-light py-2">
            <div class="d-flex align-items-center  justify-content-center justify-content-sm-between  mt-3">
                <h5 class=" fw-bolder d-none d-sm-block mx-3">Payment Details</h5>
                <div class="d-flex align-items-center">
                    <i class="far fs-6 fa-sort me-3 text-info d-sm-block"></i>
                </div>
            </div>
        </div>
        <hr>

        <table class="table  table-borderless ">
            <thead>
              <tr>
                  <th></th>
                <th scope="col" class="text-muted  ">Name</th>
                <th scope="col" class="text-muted h6 " >Payment Schedule</th>
                <th scope="col" class="text-muted h6 ">Bill Number</th>
                <th scope="col" class="text-muted h6 ">Amount Paid</th>
                <th scope="col" class="text-muted h6 ">Balance amount</th>
                <th scope="col" class="text-muted h6 ">Date </th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            <?php
                       
                       while( $row = mysqli_fetch_assoc($sql_obj)):
                   ?>
                
                           <tr class="bg-white align-middle">
                            <td><img src="image/student.jpg" alt="" height="50" width="50"></td>
                            <td><?php echo $row['Name'] ?></td>
                            <td><?php echo $row['payement_schedul'] ?></td>
                            <td><?php echo $row['Bill_number'] ?></td>
                            <td><?php echo 'DHS ' .$row['Amount_paid']; ?></td>
                            <td><?php echo $row['Blance_amount'] ?></td>
                            <td><?php echo $row['Date'] ?></td>
                            
                            <td>
                            <i class="fas fa-eye btn text-info "></i>
                            </td>
                        </tr>
                       <?php 
                      endwhile;?>   
              
            </tbody>
          </table>
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