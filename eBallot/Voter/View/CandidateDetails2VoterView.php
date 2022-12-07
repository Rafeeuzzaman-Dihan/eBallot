<!DOCTYPE html>
<html>
<body>
  <?php

include("../Model/head.php");
?>
<br>

<form action="" method="post" enctype="multipart/form-data">  
  
<center>
  <h3>Candidate Details</h3>
  <br>

<table>
  <tr>
    <th>Name</th>
    <th>Political Party</th>
    <th>Election Symbol</th>
  </tr>
  <tr>
    <td>Jubair Iqbal</td> 
    <td>Southern Future Party</td>
    <td>Clock</td> <td><input type="submit" name="Profile1" value="See Profile"></td> 
  </tr>
  
  <tr>
    <td>Ovi Faruq</td>
    <td>First Citizens Party</td>
    <td>Lotus</td> <td><input type="submit" name="profile2" value="See Profile"></td> 
  </tr>
  <tr>
    <td>Hasnat Hemel</td>
    <td>People's Industry Party</td>
    <td>Axe</td> <td><input type="submit" name="profile3" value="See Profile"></td> 
  </tr>
</table>
<br>
<tr>
  <td>
    Choose Your Symbol  :
  </td>
  <select>
    <option>Clock</option>
    <option>Lotus</option>
    <option>Axe</option>
  </select>


</tr>
<tr>
  <td>
    <input type="submit" name="vote" value="Vote">
  </td>
</tr>
</center>
<br>
  <?php
include("../Model/foot2.php");
 ?>

</body>
</html>

