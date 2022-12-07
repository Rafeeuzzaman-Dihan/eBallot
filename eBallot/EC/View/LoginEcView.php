<?php
include "../Controller/LoginEcCNTRL.php";
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
    <h3>Welcome to eBallot (EC)</h3>
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
         <br><br>
    <input type="submit" value="Login" name="login">
</form>
</center>

<br>
<?php
    include('../Model/foot.php');
     ?>
</body>
</html>