<?php
require_once('../Model/db.php');


    if(isset($_POST["reg"]))
    {
        if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["uname"]) || empty($_POST["nid"]) || empty($_POST["phone"]) || empty($_POST["pass"]) || empty($_POST["area"]))
        {
            echo '<script type = "text/javascript">alert("All information is required") </script>';
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
            $mydb->addvoter($connobj, "voter", $fname, $lname, $uname, $nid, $phone, $pass, $area);

            echo '<script type = "text/javascript">alert("Registration Succesfull") </script>';

        }   

    }

    else
    {
        
    }

?>