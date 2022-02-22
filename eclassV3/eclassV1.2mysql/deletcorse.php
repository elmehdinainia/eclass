<?php
include 'conect.php';
$id=$_GET['id'];
$result = mysqli_query($conn, " DELETE FROM cours WHERE id=$id");
    header('location:course.php');


?>