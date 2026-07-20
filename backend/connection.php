<?php
   // connection karne k liye
   $servername = 'localhost';
   $username = 'root';
   $password = '';
   $dbname = 'alibrosschool';

// 
   $conn = mysqli_connect($servername,$username,$password,$dbname);

   // check connection
   if (!$conn) {
    die("Connection faild : ".mysqli_connect_error());
   }
   // }else{
   //  echo"connection successfully <br>";
   // }
?>