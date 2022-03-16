<?php

    // $hostname='localhost';
    // $username='root';
    // $password='';
    // $dname='e_classe_db';
    
    $conn=new mysqli('localhost','root','','e_classe_db');
    if(!$conn){
        echo ("error : ");
    }
?>