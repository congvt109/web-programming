<?php 
    $server = "localhost";
    $username = "root";
    $password = ""; 
    $database = "business_server";
    
    $conn = mysqli_connect($server,$username,$password,$database);
    if($conn){
	    mysqli_query($conn,"SET NAMES 'utf8'");
	    //echo"ket noi thanh cong";
    }
    else{
	    echo "Ket noi that bai ";
    }
?>