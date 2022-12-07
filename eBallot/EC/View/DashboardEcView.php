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
      <h3>EC Dashboard</h3>
      <br>
      <a href="ProfileEcView.php"><li>Profile</li></a>
      <br>
      <a href="CandidateProfileView.php"><li>Candidates</li></a>
      <br>
      <a href="NotifyAdminEcView.php"><li>Notify Admin</li></a>
      </form>

</center>

<br>

<?php
    include('../Model/foot.php');
?>

</body>
</html>