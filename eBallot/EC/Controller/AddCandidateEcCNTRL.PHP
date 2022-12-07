

<?php
require_once('../Model/db.php');
 

    if(isset($_POST["add"]))
    {
        if(empty($_POST["fname"]) || empty($_POST["lname"]) || empty($_POST["uname"]) || empty($_POST["pass"]) || empty($_POST["nid"]) || empty($_POST["party"]) || empty($_POST["symbol"]))
        {
            echo "All information required";
        }

        else
        {
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $uname = $_POST["uname"];
            $pass = $_POST["pass"];
            $nid = $_POST["nid"];
            $party = $_POST["party"];
            $symbol = $_POST["symbol"];

            
            $mydb = new DB();
            $connobj = $mydb->openCon();
            $mydb->InsertCData($connobj, "candidate", $fname, $lname, $uname, $pass, $nid, $party, $symbol);

        }   

    }

    else
    {
        
    }

?>