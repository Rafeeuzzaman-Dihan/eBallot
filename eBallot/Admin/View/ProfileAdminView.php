<?php
include'../Controller/ProfileAdminCNTRL.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../CSS/profileAdmin.css">
  <title>eBallot</title>
</head>
<center>


<?php
include('../Model/head2.php');
?>
 
<body>
  
    
    <form action="" method="post" enctype="multipart/form-data">

      <p id = "labelprofile">Update Profile</p>
      <br><br>
      <table>
        
        <tr>
        <td><p id = "labelsPROFILE">Username: <input type="text" class = "inputprofile" name="username"></p></td>
        </tr>
        <tr>
        <td><p id = "labelsPROFILE">Password: <input type="text" class = "inputprofile" name="password"><p></td>
        </tr>
      </table>  
<input type="submit" class = "saveprofilebtn" name="save" value="Save">
<br><br>
</form>
</center>

<br><br>
    <?php
    include('../Model/foot2.php');
    ?>
</body>
</html>