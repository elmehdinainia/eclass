<?php    $id = $_GET['id'];
        include 'conect.php';
        if(isset($_POST['Update']))
{ 

        $name = $_POST['name'];
        $type = $_POST['type'];
        $prix = $_POST['prix'];
        $durer = $_POST['durer'];
        $result = mysqli_query($conn, "UPDATE cours SET Name='$name', Type='$type', Prix='$prix' , Durer='$durer' WHERE id=$id ");
        header("Location:course.php");
    } 
    ?>
 <?php 
        // $id = $_GET['id'];
 
        //selecting data associated with this particular id
        $result = mysqli_query($conn, "SELECT * FROM cours WHERE id=$id ");
         
        while($row = mysqli_fetch_array($result))
        {
            $name = $row['Name'];
            $type = $row['Type'];
            $prix = $row['Prix'];
            $durer = $row['Durer'];

        }
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

            <form method="POST">
                <h2 class="text-center p-2 text-decoration-underline">modifier</h2>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control border-2 border border-primary" value="<?php echo $name ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Type</label>
                    <input type="text" name="type" class="form-control border-2 border border-primary" value="<?php echo $type?>" >
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Prix</label>
                    <input type="text" name="prix" class="form-control border-2 border border-primary" value="<?php echo $prix?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Durer</label>
                    <input type="text" name="durer" class="form-control border-2 border border-primary"value="<?php echo $durer?>">
                </div>
                <input type="hidden" name="id">
                <div class="d-flex justify-content-center">     
                <button type="submit" name="Update" class="btn btn-primary">Submit</button>
                </div>
          
            </form>
            
            
          
        </div>
    </div>

</body>

</html>