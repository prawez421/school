<?php

session_start();


require_once "connection.php";



$username=$_POST['UserName'];

$password=$_POST['Password'];



$sql="
SELECT * FROM registration
WHERE UserName='$username'
AND Password='$password'
";



$result=mysqli_query($conn,$sql);



if(mysqli_num_rows($result)==1)
{


$_SESSION['login']=true;


$_SESSION['username']=$username;


$_SESSION['success']="✅ Login Successful!";



header("Location:../studentdesboard/index.php");


exit();


}

else
{


header("Location:../components/login.php?error=1");


exit();


}


?>