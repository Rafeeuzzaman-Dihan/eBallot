<?php
session_start(); 
if(!isset($_COOKIE["user"]))
{
header("Location: ../View/LoginAdminView.php"); // Redirecting To Login Page
}
?>

<?php
require_once('../Model/db.php'); 

    if(isset($_POST["save"]))
    {
        if(empty($_POST["username"]) || empty($_POST["password"]))
        {
            echo '<script type = "text/javascript">alert("All information Required") </script>';
        }
        else
    {
            $mydb = new DB();
            $connnobj = $mydb->openCon();
            $mydb->updateadminData($connnobj, "admin", $_POST["username"], $_POST["password"]);
            $mydb->closeCon($connnobj);
        
    }
        
    }
    else

    
        


?>