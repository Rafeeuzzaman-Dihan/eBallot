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
    <h2>Notify admin to start/pause/stop voting.</h2>
    <br>
    <input type= "submit" name= "start" value= "Start"> <input type= "submit" name= "pause" value= "Pause"> <input type= "submit" name= "stop" value= "Stop"> 

    
</form>
</center>
<br>
<br>
<?php
    include('../Model/foot.php');
     ?>
</body>
</html>