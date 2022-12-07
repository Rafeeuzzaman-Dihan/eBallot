<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
</head>
<body>

<?php
include('../Model/head.php');
?>
  <center>
  
      <form action="" method="post" enctype="multipart/form-data">
      <h3>Dashboard</h3>
      <br>
      <a href="ProfileVoterView.php"><li>Profile</li></a>
      <br>
      <a href="ElectionAreaVoterView.php"><li>Vote</li></a>
      </form>

</center>

<br>

<?php
    include('../Model/foot2.php');
?>

</body>
</html>