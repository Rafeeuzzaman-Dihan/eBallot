<?php
include "../Controller/LoginAdminCNTRL.php";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../CSS/loginadmin.css">
<body>
  <title>eBallot</title>
</head>
<body>

<?php
include('../Model/head.php');
?>

<center>

  <p id = "labelsheading"> Welcome to eBallot (Admin) </p>

  
  <form action="" method="post" enctype="multipart/form-data">
    <div class = "bg">    

    <table>
      <tr>
        <td><p id = "labels"> Username : </p></td>
        <td><input type="text" name="username" id="username"  class = "input"></td>
      </tr>

      <tr>
        <td><p id = "labels"> Password : </p></td>
        <td><input type="password" name="password" id="password"  class = "input"></td>
      </tr>

    </table>

      <br>
      <br>
                  
      <input type="submit" class="button loginbutton" name="login" value="Login">

</div>
</form>
</center>


<br>
<br>

<?php
include('../Model/foot.php');
?>


</body>
</html>