<?php 
   
   require_once 'connection.php';

   // variable from input from for sql
    $Name =$_POST['Name'];
    $Email =$_POST['Email'];
    $UserName =$_POST['UserName'];
    $MoblieNumber =$_POST['MoblieNumber'];
    $Password =$_POST['Password'];
    $C_Password =$_POST['C_Password'];

    $sql = "INSERT INTO registration(Name,Email,UserName,MobileNumber,Password,C_Password)
    VALUES('$Name','$Email','$UserName','$MoblieNumber','$Password','$C_Password')";

    if(mysqli_query($conn,$sql)){
    header("Location: ../components/login.php");
exit();
    }else{
        echo"Error : colud not able to execute";
    }

    mysqli_close($conn);
?>