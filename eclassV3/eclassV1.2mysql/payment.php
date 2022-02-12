<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="home.html">
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
                <th scope="col" class="text-muted h6 ">Name</th>
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
   
                foreach ($tab_student as $END){
      echo '<tr>
     <td>'.$END['name'].'</td>
     <td>'.$END['Payment_Schedule'].'</td>
     <td>'.$END['Bill_Number'].'</td>
     <td>'.$END['Amount_Paid'].'</td>
     <td>'.$END['Balance_amount'].'</td>
     <td>'.$END['Date'].'</td>
        <td><i class="fal fa-eye text-info"></i></td>
        <tr>';
                } 
        ?>
              
            </tbody>
          </table>
      </div>   

</div>  
</div>

</body>

</html>