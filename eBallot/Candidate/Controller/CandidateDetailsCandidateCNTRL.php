<?php
require_once('../Model/db.php'); 

    if(isset($_POST["vote"]))
    {
        if(empty($_POST["symbol"]))
        {
            echo "Please Select a symbol";
        }
        else 
        {
            $symbol = $_POST["symbol"];

                $mydb = new DB();
                $connobj = $mydb->openCon();
                $mydb->InsertVotes($connobj, "votes",  $symbol);
                //$mydb->closeCon($connobj);

                header("location: ../View/ThankyouCandidateView.php");
            
        }
        
    }
    else

    
        


?>