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
            <!-- <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bgc " style="background-color:#FAFFC1;">

                <div class="d-flex flex-column  align-items-center px-3 pt-2 text-white min-vh-100 ps-5">
                    <a href="Dashboard.html"
                        class="d-none d-sm-inline pb-sm-3 mb-md-1 me-md-auto text-black text-decoration-none">
                        <span class=" fs-6 py-0 me-2"></span>
                        <h3 class=" fw-bolder text-dark  ps-2 ">E-classe</h3>
                    </a>
                    <div class="d-flex flex-column align-items-center ">
                        <img src="image/4K-Ultra-HD-2160p-Wallpapers-Pixelz.jpg" alt="hugenerd" width="70" height="70"
                            class="rounded-circle  mt-1">
                        <h4 class="text-dark mt-3 h6"> <b> Admin name </b></h4>
                        <p class="text-info">Admin</p>
                    </div>

                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start "
                        id="menu">
                        <li class="nav-item mt-3 mb-sm-2">
                            <a href="home.php" class="nav-link align-middle     text-dark">
                                <i class="fal fa-home-lg-alt px-1 "></i> <span
                                    class="ms-1 d-none d-sm-inline mt-4 ">Home</span>
                            </a>
                        </li>
                        <li class="mb-sm-2">
                            <a href="#" data-bs-toggle="collapse" class="nav-link   align-middle text-dark">
                                <i class="far fa-bookmark px-1  "></i> <span
                                    class="ms-1 d-none d-sm-inline">Course</span> </a>
                        </li>
                        <li class="mb-sm-2">
                            <a href="student.php" class="nav-link align-middle text-dark">
                                <i class="fal fa-graduation-cap "></i> <span
                                    class="ms-1 d-none d-sm-inline">Students</span></a>
                        </li>
                        <li class=" mb-sm-2">
                            <a href="payment.php" data-bs-toggle="collapse"
                                class="nav-link   bg-info align-middle text-dark ">
                                <i class="far fa-usd-square "></i> <span
                                    class="ms-1 d-none d-sm-inline">Payment</span></a>
                        </li>
                        <li class="mb-sm-2">
                            <a href="#" data-bs-toggle="collapse" class="nav-link  align-middle text-dark ">
                                <i class="fal fa-file-chart-line"></i> <span
                                    class="ms-1 d-none d-sm-inline">Report</span></a>
                        </li>
                        <li class="mb-sm-3 ">
                            <a href="#" data-bs-toggle="collapse" class="nav-link  align-middle text-dark  ">
                                <i class="fal fa-sliders-v-square "></i> <span
                                    class="ms-1 d-none d-sm-inline">Settings</span></a>
                        </li>

                        <li class="mt-5">
                            <a href="index.html" class="nav-link mt-sm-5   text-dark">
                                <span class="me-3 d-none d-sm-inline px-sm-1">Logout</span><i
                                    class="fal fa-sign-out-alt fs-5 "></i></a>
                        </li>
                    </ul>
                </div> -->
                <?php include 'sidebar.php'; ?>
            </div>
            <!-- end side bar -->

            <!-- start nav bar  -->
            <div class="col col-sm-10 flex-column-sm h-sm-50 my-2">
                <nav class="navbar">
                    <!-- <div class="container-fluid">
                        <a href="#" class="fal fa-caret-circle-left text-decoration-none text-muted "></a>
                            <form class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <input class="form-control vw-20 d-none d-lg-inline border-0" type="search" placeholder="Search..." aria-label="Search">
                                    <a href="#">
                                    <i class="far fa-search position-a text-muted me-3"></i> </a>
                                </div>
                                    <i class="fal fa-bell ms-2 text-muted"></i>
                            </form>
                    </div>        -->
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
              <!-- <tr class=" bg-white">
                <th scope="row" >mehdi</th>
                <td>first</td>
                <td>0288765</td>
                <td>DHS 200,000</td>
                <td>DHS 230,000</td>
                <td>05-Jan, 2022</td>
                <td><i class="fal fa-eye text-info"></i></td>
                </tr>
                <tr>
                    <th scope="row" >mehdi</th>
                    <td>first</td>
                    <td>03654709</td>
                    <td>DHS 100,000</td>
                    <td>DHS 500,000</td>
                    <td>05-Jan, 2022</td>
                    <td><i class="fal fa-eye text-info"></i></td>
                    </tr>
                    <tr class=" bg-white">
                        <th scope="row" >mehdi</th>
                        <td>First</td>
                        <td>1657865</td>
                        <td>DHS 100,000</td>
                        <td>DHS 500,000</td>
                        <td>05-Jan, 2022</td>
                        <td><i class="fal fa-eye text-info"></i></td>
                        </tr>
                        <tr >
                            <th scope="row" >mehdi</th>
                            <td>First</td>
                            <td>00735778</td>
                            <td>DHS 900,000</td>
                            <td>DHS 300,000</td>
                            <td>05-Jan, 2022</td>
                            <td><i class="fal fa-eye text-info"></i></td>
                            </tr> -->
                            <?php include 'tab-payement.php'?>
              
            </tbody>
          </table>
      </div>   

</div>  
</div>

</body>

</html>