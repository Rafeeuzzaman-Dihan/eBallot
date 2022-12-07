<?php
session_start(); 
if(!isset($_COOKIE["user"]))
{
header("Location: ../View/LoginAdminView.php"); // Redirecting To Login Page
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../CSS/Dashboardadmin.css">
	
	<title>Dashboard (Admin)</title>
</head>
<body>

<?php
include("../Model/head2.php");
?>
<br>
        <form action="" method="post" enctype="multipart/form-data">
		<center>
			<table>
				<tr>
					<td><p id = "labelsdashboard">Admin Dashboard</p></td>
				</tr>
                <tr>
					<td><h3><li><a href="ProfileAdminView.php">Profile</li></a></h3></td>
				</tr>
				<tr>
					<td><h3><li><a href="VoterAdminView.php">Voter</li></a></h3></td>
				</tr>
				<tr>
					<td><h3><li><a href="EcAdminView.php">Election Comission (EC)</li></a></h3></td>
				</tr>
					<td><h3><li><a href="ResultAdminView.php">Publish Result</a></li></h3></td>
				</tr>
			</table>
		</form>
		</center>
		<br>
<?php
include("../Model/foot2.php");
?>

</body>
</html>