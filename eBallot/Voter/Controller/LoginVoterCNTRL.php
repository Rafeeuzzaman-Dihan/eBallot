<?php
require_once('../Model/db.php'); 


if (isset($_POST['login'])) 
{
if (empty($_POST['nid']) || empty($_POST['pass'])) 
{
    echo '<script type = "text/javascript">alert("NID and Password is Required") </script>';
}
else
{
$nid=$_POST['nid'];
$pass=$_POST['pass'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckVoter($conobj,"voter",$nid,$pass);

if ($userQuery->num_rows > 0) 
{
$_SESSION["nid"] = $nid;
$_SESSION["pass"] = $pass;

            session_start();
			$_SESSION["nid"]=$nid;
			setcookie("nid",$nid,time()+600,"/");

header("location: ../View/DashboardVoterView.php");

}


else 
{
	echo '<script type = "text/javascript">alert("Username and Password is incorrect") </script>';
}

$connection->CloseConV($conobj);

}
}


?>