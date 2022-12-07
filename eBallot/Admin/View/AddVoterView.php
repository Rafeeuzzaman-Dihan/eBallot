<?php
include("../Controller/AddVoterCNTRL.php");
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../CSS/AddVoter.css">
        <title> Add Voter </title>

</head>

<body>

<?php
include("../Model/head2.php");
?>

<form action="" method="post" enctype="multipart/form-data" onsubmit = "return AddVoterValidation()">

    <center>
        <h1>Add Voter</h1>
        <table>
        <tr>
                <td>First name : </td>
                <td><input type="text" placeholder="Enter your first Name" name="fname" id = "fname" onkeyup="AddVoterValidation()">
                <p id = "nameerror"></p>
            </td>
            </tr>
            <tr>
                <td>Last Name : </td>
                <td><input type="text" placeholder="Enter your last name" name="lname">
            </td>
            </tr>
            <tr>
				<td>User Name :</td>
				<td><input type="text" placeholder="Enter your username" name="uname">

            </td>
				</tr>
            <tr>
                <td>National ID : </td>
                <td><input type="text" placeholder="Enter your national id" name="nid">

            </td>
            </tr>
            <tr>
                <td>Phone : </td>
                <td><input type="text" placeholder="Enter your phone number" name="phone">

            </td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" placeholder="Enter your password" name="pass">

            </td>
            </tr>
            <tr>
					<td> Area : </td>
					<td><input type="radio" name="area" value= "Gazipur 1"> Gazipur 1
>
                </td>
					<td><input type="radio" name="area" value= "Gazipur 2"> Gazipur 2
>
                </td>
				</tr>
            <td>
                        <input type="submit" class = "addvoterbtn" name="add" value="Add Voter">
                    </td>

                </tr>
                    

        </table>
            
    



</center>
<br>
</form>
<script src="../JS/AddVoterValidation.js"></script> 
<?php
include("../Model/foot2.php");
 ?>
</body>
</html>
