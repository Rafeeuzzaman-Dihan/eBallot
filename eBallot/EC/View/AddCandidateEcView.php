<?php
include("../Controller/AddCandidateEcCNTRL.php");
?>

<!DOCTYPE html>
<html>
<body>
  
<?php
include("../Model/head.php");
?>
<br>

<form action="" method="post" enctype="multipart/form-data">  

<center>
  <h3>Add Candidate</h3>
  <br>

<table>
      First Name: <input type="text" name="fname">
      <br><br>
      Last Name: <input type="text" name="lname">
      <br><br>
      Userame: <input type="text" name="uname">
      <br><br>
      Password: <input type="password" name="pass">  
      <br><br>
      National ID No: <input type="text" name="nid">
      <br><br>  

<tr>
  <td>
    Choose Party  :
  </td>
  <tr>
  <td><input type="radio" Name="party" value = "Southern Future Party"> Southern Future Party </td>
  <td><input type="radio" Name="party" value = "First Citizens Party"> First Citizens Party </td>
  <td><input type="radio" Name="party" value = "People's Industry Party"> People's Industry Party </td>
  </tr>
  </td>

<tr>
  <td>
    Choose Symbol  :
  </td>
  <tr>
  <td><input type="radio" Name="symbol" value = "Clock"> Clock</td>
  <td><input type="radio" Name="symbol" value = "Lotus"> Lotus</td>
  <td><input type="radio" Name="symbol" value = "Axe"> Axe</td>
  </tr>
  </td>
  </table>

  <br>


    <input type="submit" name="add" value="Add Candidates">


</center>
<br>
  <?php
include("../Model/foot.php");
 ?>

</body>
</html>

