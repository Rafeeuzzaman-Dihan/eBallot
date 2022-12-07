<?php
include "../Controller/LoginVoterCNTRL.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title>eBallot</title>
</head>
<center>


<?php
include('../Model/head.php');
?>
  
  <form action="" method="post" enctype="multipart/form-data">
    <h3>Welcome to eBallot (Voter)</h3>
    <br>
    <table>
            <tr>
                <td>NID : </td>
                <td><input type="text" placeholder="Enter your NID" name="nid"></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" placeholder="Enter your Password" name="pass"></td>
            </tr>
        </table>
        <br>
         <br><br>
    <input type="submit" value="Login" name="login">
    <br><br>
    Didn't have account? <a href="RegistrationVoterView.php">Create Account</a>
</form>
</center>

<?php
    include('../Model/foot.php');
     ?>
</body>
</html>