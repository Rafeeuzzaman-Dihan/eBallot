

<?php
require_once('../Model/db.php'); 


if (isset($_POST['update'])) 
{
if (empty($_POST['uname']) || empty($_POST['fname']) || empty($_POST['lname'])) 
{
echo "All fields required";
}
else
{

$uname=$_POST['uname'];

$connection = new db();
$conobj=$connection->OpenCon();
$userQuery=$connection->CheckCandidate($conobj,"candidate",$uname);

if($userQuery->num_rows > 0)
{
    $mydb = new DB();
    $connobj = $mydb->openCon();
    $mydb->updateCandidateData($connobj, "candidate", $_POST["uname"], $_POST["fname"], $_POST["lname"]);
    $mydb->closeCon($connobj);

}

else
{
    echo "Username Doesn't Matched";
}

}


}

?>