<!DOCTYPE html>
<html>
<head>
	
	<title>Publish Result</title>
</head>
<body>
<center>
<?php
include("../Model/head.php");
?>
<br>

<form action="" method="post" enctype="multipart/form-data">
		<center>
			<h1> Result </h1>
			<input type="submit" name="fetch" value="Publish Result">
        </form>
		<br>
        <br>


        <?php
        require_once('../Model/db.php');


        $symbol ="";

    if(isset($_POST["fetch"]))
    {
        $mydb = new DB();
        $connobj = $mydb->openCon();

        $myData = $mydb->fetchVotesData($connobj, "votes");
        $mydb->closeCon($connobj);

        if($myData->num_rows > 0)
        {

            echo "<center>";

            echo "<table border = 2>";
            
            echo "<tr>";

            echo "<td>";
            echo "Symbol";
            echo "</td>";

            echo "</tr>";

            while($row = $myData->fetch_assoc())
            {
                
                echo "<tr>";

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


</center>
<br>
              <?php
include("../Model/foot2.php");
 ?>

</body>
</html>