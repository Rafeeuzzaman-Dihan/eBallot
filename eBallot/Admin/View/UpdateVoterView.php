<?php
include("../Controller/UpdateVoterCNTRL.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Update Voter </title>

</head>

<body>

<?php
include("../Model/head.php");
?>

<form action="" method="post" enctype="multipart/form-data">

    <center>
        <h3>Update Voter</h3>
        <table>
        <tr>
                <td>First name : </td>
                <td><input type="text" placeholder="Enter your first Name" name="fname"></td>
            </tr>
            <tr>
                <td>Last Name : </td>
                <td><input type="text" placeholder="Enter your last name" name="lname"></td>
            </tr>
            <tr>
                <td>User Name : </td>
                <td><input type="text" placeholder="Enter your username" name="uname"></td>
            </tr>
            <tr>
                <td>National ID : </td>
                <td><input type="text" placeholder="Enter your national id" name="nid"></td>
            </tr>
            <tr>
                <td>Phone : </td>
                <td><input type="text" placeholder="Enter your phone number" name="phone"></td>
            </tr>
            <tr>
					<td>Voter Area :</td>
					<td><input type="radio" name="area" value="Gazipur 1">Gazipur 1</td>
					<td><input type="radio" name="area" value="Gazipur 2">Gazipur 2</td>
				</tr>
            
                    <td>
                        <input type="submit" name="update" value="Update Voter">
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
