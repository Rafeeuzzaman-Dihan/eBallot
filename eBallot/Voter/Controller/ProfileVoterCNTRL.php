<?php
session_start(); 
if(!isset($_COOKIE["nid"]))
{
header("Location: ../View/LoginVoterView.php"); // Redirecting To Login Page
}
?>

<?php
require_once('../Model/db.php'); 

if (isset($_POST['save'])) 
{
if (empty($_POST['nid']) || empty($_POST['pass'])) 
{
echo "All fields required";
}
else
{

$nid=$_POST['nid'];

$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->CheckVoterNIDp($conobj,"voter",$nid);

if($userQuery->num_rows > 0)
{
    $mydb = new DB();
    $connobj = $mydb->openCon();
    $mydb->updateVoterPData($connobj, "voter", $_POST["nid"], $_POST["pass"]);
   // $mydb->CloseConVP($connobj);

}

else
{
    echo "NID Doesn't Matched";
}

}


}

?>