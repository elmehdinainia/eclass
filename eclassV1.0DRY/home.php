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
            <!-- side bar -->
               <?php include 'sidebar.php'; ?>
                <!-- side bar -->
           </div>

          
           <div class="col">
               <!-- Content -->

               <nav class="navbar">
                
                   <?php include 'navbar.php'; ?>
               </nav>
               <!-- <div class="container"> -->
               <div class="row gap-3">
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


         
       </div>

   
       
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>

 </html>