<?php
session_start(); 
if(!isset($_COOKIE["user"]))
{
header("Location: ../View/LoginAdminView.php"); // Redirecting To Login Page
}
?>

<?php
require_once('../Model/db.php');


    if(isset($_POST["add"]))
    {
        if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["uname"]) || empty($_POST["nid"]) || empty($_POST["phone"]) || empty($_POST["pass"]) || empty($_POST["area"]))
        {
            echo "All information required";
        }

        else
        {
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $uname = $_POST["uname"];
            $nid = $_POST["nid"];
            $phone = $_POST["phone"];
            $pass = $_POST["pass"];
            $area = $_POST["area"];

            
            $mydb = new DB();
            $connobj = $mydb->openCon();
            $mydb->InsertVoterData($connobj, "voter", $fname, $lname, $uname, $nid, $phone, $pass, $area);

        }   

    }

    else
    {
        
    }

?>