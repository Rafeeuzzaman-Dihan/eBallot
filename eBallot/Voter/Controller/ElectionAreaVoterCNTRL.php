<?php
    session_start();
    if(isset($_POST["next"]))
    {
            if(empty($_POST["area"]))
            {
                echo "Please Choose a Area";
            }

            else if($_POST["area"] = "Gazipur 1")
            {
                    $_SESSION["area"]=$_POST["area"];
    
                    header("location: ../View/CandidateDetailsVoterView.php");
            }

            else if($_POST["area"] = "Gazipur 2")
            {
                    $_SESSION["area"]=$_POST["area"];
    
                    header("location: ../View/CandidateDetails2VoterView.php");
            }

        }

        else
        {
            
        }
         
        
    
?>