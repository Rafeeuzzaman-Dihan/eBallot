<?php
session_start(); 
if(!isset($_COOKIE["user"]))
{
header("Location: ../View/LoginAdminView.php"); // Redirecting To Login Page
}
?>

<?php
require_once('../Model/db.php'); 


if (isset($_POST['update'])) 
{
if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['uname']) || empty($_POST['phone']) || empty($_POST['area'])) 
{
echo "All fields required";
}
else
{

$uname=$_POST['uname'];

$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->CheckEC($conobj,"ec",$uname);

if($userQuery->num_rows > 0)
{
    $mydb = new DB();
    $connobj = $mydb->openCon();
    $mydb->updateData($connobj, "ec", $_POST["fname"], $_POST["lname"], $_POST["uname"], $_POST["phone"], $_POST["area"]);
    $mydb->closeCon($connobj);

}

else
{
    echo "Username Doesn't Matched";
}

}


}

?>