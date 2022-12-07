<?php
include('../Controller/ProfileCandidateCNTRL.php');
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
 
 <body>
  
    
  <form action="" method="post" enctype="multipart/form-data">

    <h3>Change Password</h3>
    <br><br>
    <table>
    <tr>
      <td>Username: <input type="text" name="uname"></td>
      </tr>
      <tr>
      <td>Password: <input type="text" name="pass"></td>
      </tr>
    </table>  
<input type="submit" name="save" value="Save">
<br><br>
</form>
</center>

<br><br>
<?php
    include('../Model/foot.php');
     ?>
</body>
</html>