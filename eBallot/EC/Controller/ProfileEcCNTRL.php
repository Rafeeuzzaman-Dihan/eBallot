<?php
require_once('../Model/db.php'); 

if (isset($_POST['submit'])) 
{
if (empty($_POST['uname']) || empty($_POST['pass'])) 
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
    $mydb->updateECpData($connobj, "ec", $_POST["uname"], $_POST["pass"]);

}

else
{
    echo "Username Doesn't Matched";
}

}


}

?>