<?php
include '../Controller/UpdateCandidateEcCNTRL.php' ;
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>eBallot</title>
</head>
<body>
<?php
include('../Model/head.php');
 ?>
  <center>
  
  <form action="" method="post" enctype="multipart/form-data">
      <h3>Update Candidate Profile</h3>
      <br><br>
      <table>
      User Name: <input type="text" name="uname">  
      <br><br>
      First Name: <input type="text" name="fname">
      <br><br>
      Last Name: <input type="text" name="lname">  
      <br><br>
</table>
<br><br>
<input type="Submit" name= "update" value= "Update">
<br><br>
</form>
</center>

<?php
    include('../Model/foot.php');
     ?>
</body>
</html>