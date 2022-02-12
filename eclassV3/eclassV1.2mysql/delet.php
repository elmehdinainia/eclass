<?php
include 'conect.php';
$id=$_GET['id'];
$result = mysqli_query($conn, " DELETE FROM students WHERE id=$id");
    header('location:student.php');


?>