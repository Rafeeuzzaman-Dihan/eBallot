<?php
include "../Controller/AddEcCNTRL.php"; 
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Add Election Comission</title>
</head>
<body>

<?php
include("../Model/head.php");
?>

<br>
<form action="" method="post" enctype="multipart/form-data">
		<center>
			<h1>Add Election Comission</h1>
			<table>
				<tr>
					<td>First Name :</td>
					<td><input type="text" name="fname"></td>
				</tr>
				<tr>
					<td>Last Name :</td>
					<td><input type="text" name="lname"></td>
				</tr>
				<tr>
					<td>User Name :</td>
					<td><input type="text" name="uname"></td>
				</tr>
				<tr>
					<td>Phone :</td>
					<td><input type="text" name="phone"></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="Password" name="pass"></td>
				</tr>
				<tr>
					<td>EC Area :</td>
					<td><input type="radio" name="area" value="Gazipur 1">Gazipur 1</td>
					<td><input type="radio" name="area" value="Gazipur 2">Gazipur 2</td>
				</tr>
				<tr>
					<td><input type="submit" name="add" value="Add EC"></td>
				</tr>
			</table>
		</center>
        </form>


		<?php
include("../Model/foot2.php");
 ?>
</body>
</html>