<?php
require_once('../Model/db.php'); 


if (isset($_POST['login'])) 
{
if (empty($_POST['uname']) || empty($_POST['pass'])) 
{
    echo '<script type = "text/javascript">alert("Username and Password is Required") </script>';
}
else
{
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckECLogin($conobj,"ec",$uname,$pass);

if ($userQuery->num_rows > 0) 
{
$_SESSION["uname"] = $uname;
$_SESSION["pass"] = $pass;

            //session_start();
			//$_SESSION["user"]=$username;
			setcookie("user",$uname,time()+600,"/");

header("location: ../View/DashboardEcView.php");

}


else 
{
	echo '<script type = "text/javascript">alert("Username and Password is incorrect") </script>';
}

$connection->CloseCon($conobj);

}
}


?>