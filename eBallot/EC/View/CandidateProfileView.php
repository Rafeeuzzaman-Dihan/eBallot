<?php
include("../Controller/CandidateProfileEcCNTRL.php");
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Candidates</title>
</head>
<body>

<?php
include("../Model/head.php");
?>

<br>
<form action="" method="post" enctype="multipart/form-data">
		<center>
			<h1>Candidates</h1>
			<input type="submit" name="fetch" value="Fetch Data">
            <br><br>
            <a href="AddCandidateEcView.php"><li>Add Candidate</li></a>
        </form>
		<br>
        <br>


        <?php
        require_once('../Model/db.php');


        $fname = $lname = $uname= $nid = $party = $symbol ="";

    if(isset($_POST["fetch"]))
    {
        $mydb = new DB();
        $connobj = $mydb->openCon();

        $myData = $mydb->fetchData($connobj, "candidate");
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
            echo "User Name";
            echo "</td>";

            echo "<td>";
            echo "NID";
            echo "</td>";

            echo "<td>";
            echo "Party";
            echo "</td>";

            echo "<td>";
            echo "Symbol";
            echo "</td>";

            echo "<td>";
            echo "Action";
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
                echo $row["uname"];
                echo "</td>";
                
                echo "<td>";
                echo $row["nid"];
                echo "</td>";

                echo "<td>";
                echo $row["party"];
                echo "</td>";

                echo "<td>";
                echo $row["symbol"];
                echo "</td>";

                echo "<td><a href = 'UpdateCandidateEcView.php'>Update</a></td>";
                echo "<td><a href = 'AddEcView.php'>Delete</a></td>";
                

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