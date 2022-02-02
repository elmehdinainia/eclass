<?php
    //get the index from URL
    $index = $_GET['index'];

    $data = file_get_contents('student.json');
    $data = json_decode($data, true);

    unset($data[$index]);
    
    $data = json_encode($data, JSON_PRETTY_PRINT);
	file_put_contents('student.json', $data);

	header('location: student.php');

  
   
?>