<?php
include("../Controller/CandidateDetailsCandidateCNTRL.php");
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Candidate Details</title>
</head>
<body>

<?php
include("../Model/head.php");
?>

<br>
<form action="" method="post" enctype="multipart/form-data">
		<center>
			<h1>Candidate Details</h1>
			<input type="submit" name="fetch" value="Show Candidates">
            <br>
            <br>
            Choose Your Symbol  :

            <input type="radio" name="symbol" value = "Clock"> Clock
            <input type="radio" name="symbol" value = "Lotus"> Lotus
            <input type="radio" name="symbol" value = "Axe"> Axe

            <input type="submit" name="vote" value="Vote">
        </form>
		<br>
    <br>


        <?php
        require_once('../Model/db.php');


        $fname = $lname = $party= $symbol ="";

    if(isset($_POST["fetch"]))
    {
        $mydb = new DB();
        $connobj = $mydb->openCon();

        $myData = $mydb->fetchcData($connobj, "candidate");
        $mydb->closeCon($connobj);

        if($myData->num_rows > 0)
        {

            echo "<center>";

            echo "<table border = 2>";
            
            echo "<tr>";

            echo "<td>";
            echo "First Name";
            echo "</td>";
            
            echo "<td>";
            echo "Last Name";
            echo "</td>";
            
            echo "<td>";
            echo "Party";
            echo "</td>";

            echo "<td>";
            echo "Symbol";
            echo "</td>";


            echo "</tr>";

            while($row = $myData->fetch_assoc())
            {
                
                echo "<tr>";

                echo "<td>";
                echo $row["fname"];
                echo "</td>";
                
                echo "<td>";
                echo $row["lname"];
                echo "</td>";
                
                echo "<td>";
                echo $row["party"];
                echo "</td>";

                echo "<td>";
                echo $row["symbol"];
                echo "</td>";
                

                echo "</tr>";

            }

            

            echo "</center>";
            echo "</table>";



        }
        else
        {
            echo "no data found";
        }
    }
    
    ?>


        
    <br>
    <br>
    
    <?php
        include("../Model/foot.php");
    ?>

</body>
</html>