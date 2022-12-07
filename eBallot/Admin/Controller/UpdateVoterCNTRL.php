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
if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['uname']) ||empty($_POST['nid']) || empty($_POST['phone']) || empty($_POST['area'])) 
{
echo "All fields required";
}
else
{

$nid=$_POST['nid'];

$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->CheckVoternid($conobj,"voter",$nid);

if($userQuery->num_rows > 0)
{
    $mydb = new DB();
    $connnnobj = $mydb->openCon();
    $mydb->updateVoterData($connnnobj, "voter", $_POST["fname"], $_POST["lname"], $_POST["uname"], $_POST["nid"], $_POST["phone"], $_POST["area"]);
    $mydb->closeCon($connnnobj);

}

else
{
    echo "NID Doesn't Matched";
}

}


}

else
{

}

?>