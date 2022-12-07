<?php
include "../Controller/ElectionAreaVoterCNTRL.php";
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Choose Your Election Area</title>
</head>
<body>
	<?php

include("../Model/head.php");
?>
<br>
        <form action="" method="post" enctype="multipart/form-data">    
		<center>
		<table>
			<tr>
				<td>Select your election area  :</td>
				<td>
                <input type="radio" Name="area"> Gazipur 1
                <br><br>
                <input type="radio" Name="area"> Gazipur 2
				</td>

			</tr>
			<tr>
				<td>
					<input type= "submit" name= "next" value= "Next">
				</td>
			</tr>
			
		</table>
		</center>
		<br>

		<?php
		include("../Model/foot2.php");
 		?>

</body>
</html>