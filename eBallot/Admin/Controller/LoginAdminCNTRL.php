<?php
require_once('../Model/db.php'); 


if (isset($_POST['login'])) 
{
if (empty($_POST['username']) || empty($_POST['password'])) 
{
    echo '<script type = "text/javascript">alert("Username and Password is Required") </script>';
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"admin",$username,$password);

if ($userQuery->num_rows > 0) 
{
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;

            //session_start();
			//$_SESSION["user"]=$username;
			setcookie("user",$username,time()+600,"/");

header("location: ../View/DashboardAdminView.php");

}


else 
{
	echo '<script type = "text/javascript">alert("Username and Password is incorrect") </script>';
}

$connection->CloseCon($conobj);

}
}


?>