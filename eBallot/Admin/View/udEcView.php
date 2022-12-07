<?php
include("../Controller/udEcCNTRL.php");
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Update Election Comission</title>
</head>
<body>

<?php
include("../Model/head.php");
?>

<br>
<form action="" method="post" enctype="multipart/form-data">
		<center>
			<h1>Election Comission</h1>
			<input type="submit" name="fetch" value="Fetch Data">
        </form>
		<br>
        <br>


        <?php
        require_once('../Model/db.php');


        $fname = $lname = $uname= $phone = $area ="";

    if(isset($_POST["fetch"]))
    {
        $mydb = new DB();
        $connobj = $mydb->openCon();

        $myData = $mydb->fetchData($connobj, "ec");
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
            echo "Phone";
            echo "</td>";

            echo "<td>";
            echo "Area";
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
                echo $row["phone"];
                echo "</td>";

                echo "<td>";
                echo $row["area"];
                echo "</td>";

                echo "<td><a href = 'UpdateEcView.php'>Update</a></td>";
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
        include("../Model/foot2.php");
    ?>

</body>
</html>