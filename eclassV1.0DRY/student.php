<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.html">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>student</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #FAFFC1;">

                <div class="d-flex flex-column align-items-center px-3 pt-2 text-white min-vh-100 ps-5">
                    <a href="home.php"
                        class="d-none d-sm-inline pb-sm-3 mb-md-1 me-md-auto text-black text-decoration-none">
                        <span class=" fs-6 py-0 me-2"></span>
                        <h3 class=" fw-bolder text-dark ps-2">E-classe</h3>
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
                            <a href="home.php" class="nav-link align-middle text-dark">
                                <i class="fal fa-home-lg-alt px-1 "></i> <span
                                    class="ms-1 d-none d-sm-inline mt-4 ">Home</span>
                            </a>
                        </li>
                        <li class="mb-sm-2">
                            <a href="#" data-bs-toggle="collapse" class="nav-link align-middle text-dark">
                                <i class="far fa-bookmark px-1"></i> <span class="ms-1 d-none d-sm-inline">Course</span>
                            </a>
                        </li>
                        <li class="mb-sm-2">
                            <a href="student.php" class="nav-link align-middle bg-info text-dark">
                                <i class="fal fa-graduation-cap"></i> <span
                                    class="ms-1 d-none d-sm-inline">Students</span></a>
                        </li>
                        <li class=" mb-sm-2">
                            <a href="payment.php" data-bs-toggle="collapse"
                                class="nav-link    align-middle text-dark ">
                                <i class="far fa-usd-square "></i> <span
                                    class="ms-1 d-none d-sm-inline">Payment</span></a>
                        </li>
                        <li class="mb-sm-2">
                            <a href="#" data-bs-toggle="collapse" class="nav-link  align-middle text-dark ">
                                <i class="fal fa-file-chart-line"></i> <span
                                    class="ms-1 d-none d-sm-inline">Report</span></a>
                        </li>
                        <li class="mb-sm-3">
                            <a href="#" data-bs-toggle="collapse" class="nav-link  align-middle text-dark  ">
                                <i class="fal fa-sliders-v-square "></i> <span
                                    class="ms-1 d-none d-sm-inline">Settings</span></a>
                        </li>

                        <li class="mt-5">
                            <a href="index.html" class="nav-link mt-sm-5 text-dark">
                                <span class="me-3 d-none d-sm-inline px-sm-1">Logout</span><i
                                    class="fal fa-sign-out-alt fs-5 "></i></a>
                        </li>
                    </ul>
                </div> -->
            <?php include 'sidebar.php';?>
        </div>
        <!-- end side bar -->

        <!-- start nav bar  -->
        <div class="col col-sm-10 flex-column-sm h-sm-50 my-2">
            <nav class="navbar">
                <!-- <div class="container-fluid">
                        <a href="#" class="fal fa-caret-circle-left text-decoration-none text-muted"></a> 
                           <form class="d-flex align-items-center">
                            <div class="d-flex align-items-center"> 
                                <input class="form-control vw-20 d-none d-lg-inline border-0" type="search"
                                    placeholder="Search..." aria-label="Search">
                                <a href="#">
                                    <i class="far fa-search position-a text-muted me-3"></i>
                                </a>
                            </div>
                            <i class="fal fa-bell ms-2 text-muted"></i> 
                        </form>
                    </div> -->
                <?php include 'navbar.php'; ?>
            </nav>
            <!-- end nav bar -->


            <div class="d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Students list</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="tof">
                        <i class="far fa-sort"></i>
                    </div>
                    <button type="button" class="btn btn-primary">add new student</button>
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
                    
                        <?php include 'tableau.php'?>
                    </tbody>

                </table>
            </div>
        </div>

    </div>
    </div>
</body>

</html>