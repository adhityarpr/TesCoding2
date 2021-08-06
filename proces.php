<?php

require_once('koneksi.php');
session_start();

    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $email = mysqli_real_escape_string($koneksi, $email);  
    $password = mysqli_real_escape_string($koneksi, $password);  

    $sql = "select * from admin where Email = '$email' and Password = '$password'";  
    $result = mysqli_query($koneksi, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    if($count == 1){  

        header("location: menuindex.php");
    }  
    else{  
        echo "<h1> Login failed. Invalid email or password.</h1>";  
    } 
?>