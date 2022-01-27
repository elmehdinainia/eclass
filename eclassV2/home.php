   <!doctype html>
   <html lang="en">

   <head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- Bootstrap CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

       <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
       <!-- <link rel="stylesheet" href="style.css"> -->
       <title>home</title>
   </head>

   <body>

       <div class="container-fluid">
           <div class="row flex-nowrap">
               <!-- <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0  " style="background-color: #FAFFC1;">

                <div class="d-flex flex-column  align-items-center px-3 pt-2 text-white min-vh-100 ps-5">
                    <a href="deuxpage.html"
                        class="d-none d-sm-inline pb-sm-3 mb-md-1 me-md-auto text-black text-decoration-none">
                        <span class=" fs-6 py-0 me-2"></span>
                        <h3 class=" fw-bolder text-dark  ps-2   ">E-classe</h3>
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
                            <a href="home.html" class="nav-link active align-middle  text-dark">
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
                            <a href="student.html" class="nav-link align-middle text-dark">
                                <i class="fal fa-graduation-cap "></i> <span
                                    class="ms-1 d-none d-sm-inline">Students</span></a>
                        </li>
                        <li class=" mb-sm-2">
                            <a href="Payment.html" data-bs-toggle="collapse"
                                class="nav-link    align-middle text-dark ">
                                <i class="far fa-usd-square "></i> <span
                                    class="ms-1 d-none d-sm-inline">Payment</span></a>
                        </li>
                        <li class="mb-sm-2">
                            <a href="#" data-bs-toggle="collapse" class="nav-link bg align-middle text-dark ">
                                <i class="fal fa-file-chart-line"></i> <span
                                    class="ms-1 d-none d-sm-inline">Report</span></a>
                        </li>
                        <li class="mb-sm-3 ">
                            <a href="#" data-bs-toggle="collapse" class="nav-link  align-middle text-dark  ">
                                <i class="fal fa-sliders-v-square "></i> <span
                                    class="ms-1 d-none d-sm-inline">Settings</span></a>
                        </li>

                        <li class="position-absolute" style="bottom: 5px;">
                            <a href="index.html" class="nav-link mt-sm-5  text-dark">
                                <span class="me-3 d-none d-sm-inline px-sm-1">Logout</span><i
                                    class="fal fa-sign-out-alt fs-5 "></i></a>
                        </li>
                    </ul>
                </div> -->
               <?php include 'sidebar.php'; ?>
           </div>

           <!-- side bar -->
           <div class="col">
               <!-- Content -->

               <nav class="navbar">
                   <!-- <div class="container-fluid">
                       <a href="#" class="fal fa-caret-circle-left text-decoration-none text-muted "></a>
                       <form class="d-flex align-items-center">
                           <div class="d-flex align-items-center">
                               <input class="form-control vw-20 d-none d-lg-inline border-0" type="search" placeholder="Search..." aria-label="Search">
                               <a href="#">
                                   <i class="far fa-search position-a text-muted me-3"></i>
                               </a>
                           </div>


                           <i class="fal fa-bell ms-2 text-muted"></i>
                       </form>
                   </div> -->
                   <?php include 'navbar.php'; ?>
               </nav>
               <!-- <div class="container"> -->
               <div class="row">
                   <div class="col">
                       <div class="card" style="width: 14rem;background-color:#F0F9FF;">

                           <div class="card-body">
                               <i class="bi bi-mortarboard"></i>
                               <p class="">student</p>
                               <p class="float-end"><span style="font-size: 25px;font-weight: bold;">342</span></p>
                           </div>
                       </div>
                   </div>
                   <div class="col">
                       <div class="card" style="width: 14rem;background-color: #FEF6FB;">
                           <div class="card-body">
                               <i class=" col-3 bi bi-bookmark "></i>
                               <p class="">cours</p>
                               <p class="float-end"><span style="font-size: 25px;font-weight: bold;">342</span></p>
                           </div>
                       </div>
                   </div>
                   <div class="col">
                       <div class="card" style="width: 14rem;background-color:#FEFBEC;">

                           <div class="card-body">
                               <i class=" col-3bi bi-currency-dollar"></i>
                               <p class="">payment</p>
                               <div class="d-flex align-items-center float-end">
                                   <h6>DHS</h6>
                                   <p style="font-size: 25px;font-weight: bold;">556,000</p>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col">
                       <div class="card" style="width: 14rem;background-image: linear-gradient(20deg,#00C1FE,#FAFFC1);">
                           <div class="card-body">
                               <i class="col-3 bi bi-person"></i>
                               <p class="">users</p>
                               <p class="float-end"><span style="font-size: 25px;font-weight: bold;">342</span></p>
                           </div>
                       </div>
                   </div>
               </div>

           </div>


           <!-- Option 2: Separate Popper and Bootstrap JS -->
       </div>

   
       <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>

 </html>