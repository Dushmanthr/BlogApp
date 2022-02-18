<?php

//defining host
$host = "localhost";

//defining username of the host
$username = "root";
//defining password
$password = "";
//defie database
$database = "blogapp";

$conn = mysqli_connect($host,$username,$password,$database);



if(mysqli_connect_errno()){
    die('Database connection failed'. mysqli_connect_error());
}
else{
   // echo "success";
}
?>







?>