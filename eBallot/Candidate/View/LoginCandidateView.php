<?php
include "../Controller/LoginCandidateCNTRL.php";
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
    <h3>Welcome to eBallot (Candidate)</h3>
    <br>
    <table>
            <tr>
                <td>Username : </td>
                <td><input type="text" placeholder="Enter your username" name="uname"></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" placeholder="Enter your Password" name="pass"></td>
            </tr>
        </table>
        <br>
    <input type="submit" value="Login" name="login">
    <br><br>
</form>
</center>

<?php
    include('../Model/foot.php');
     ?>
</body>
</html>