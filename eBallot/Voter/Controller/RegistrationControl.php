<?php

session_start();

if (isset($_POST['submit'])) {

  $fnameErr = $lnameErr = $passwordErr = $con_passErr = $nidErr =$error= "";

  $phoneErr="";

 $con_passErr="";

  
 $con_passErr="";
 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

  if (empty($_POST["fname"])) {
    $fnameErr= "First name is required";
    $flag=0;
  } else {

       $fname = test_input($_POST["fname"]);
       $_SESSION['fname']=$fname;

      if (!preg_match("/^[a-zA-Z-. ]*$/",$fname)) {
         $fnameErr= "Only letters and white space allowed";
         $flag=0;
       }
    else  {
             if(str_word_count($fname)<0)
          {
          $fnameErr= "First name must contains at least three letters ";
           $flag=0;

          }
    }
  }

  if (empty($_POST["lname"])) {
    $fnameErr= "Last name is required";
    $flag=0;
  } else {

       $lname = test_input($_POST["lname"]);
       $_SESSION['lname']=$lname;

      if (!preg_match("/^[a-zA-Z-. ]*$/",$lname)) {
         $lnameErr= "Only letters and white space allowed";
         $flag=0;
       }
    else  {
             if(str_word_count($lname)<0)
          {
          $lnameErr= "Last name must contains at least three letters ";
           $flag=0;

          }
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr= "Phone number is required";
    $flag=0;
  } else {
    $phone = test_input($_POST["phone"]);
    $_SESSION['phone']=$phone;
    if (!filter_var($phone, FILTER_VALIDATE_PHONE)) {
      $phoneErr= "Invalid phone format";
      $flag=0;
    }
  }



    if (empty($_POST["nid"])) {
      $nidErr= "NID is required";
      $flag=0;
    }
    else {
     $nid = test_input($_POST["nid"]);

      if (!preg_match("/^[0-1-2-6]*$/",$nid)) {-
          $nidErr= "Only Numbers Alowed";
         $flag=0;
       }
       else {
         if(strlen($nid)<6)
         {
            $nidErr= "NID must contain six numbers ";
            $flag=0;
         }

       }
    }

    if(empty($_POST["password"]))
    {
      $passwordErr= "Password is required";
      $flag=0;
    }
    else {
      $password=test_input($_POST["password"]);
      if(strlen($password)<8)
      {
        $passwordErr= "Password must not be less than eight (8) characters";
        $flag=0;
      }
      else {
        if(substr_count($password,"@")<1 || substr_count($password,"#")<1 || substr_count($password,"%")<1 || substr_count($password,"$")<1)
        {
          $passwordErr= "Password must contain these special characters (@, #, $,%)";
          $flag=0;
        }
      }
    }

    if(empty($_POST["con_pass"]))
    {
      $con_passErr= "Confirm Password is required";
      $flag=0;
    }
    else {
      if(empty($_POST["password"]))
      {
        $con_passErr= "Password is required";
        $flag=0;
      }
      else {
        $con_pass=test_input($_POST["confirmpassword"]);

        if(strcmp($password,$con_pass))
        {
          $con_passErr= "Password and confirm password have to be same";
          $flag=0;
        }
      }
    }
   

if($flag==1)
{
  $myfile = fopen("newfile.txt", "w");
  fwrite($myfile, $fname." ,");
  fwrite($myfile, $phone." ,");
  fwrite($myfile, $nid." ,");
  fwrite($myfile, $password." ,");
  fwrite($myfile, $lname." ,");
  fclose($myfile);


    header('location:../View/Login.php');

}
else {
  $args = array(
   'fnameErr' => $fnameErr,
   'nidErr' => $nidErr,
   'phoneErr' => $phoneErr,
   'passwordErr' => $passwordErr,
   'con_passErr' => $con_passErr,
   'lnameErr' => $lnameErr
   
);
     header("location:../View/Registration.php?" . http_build_query($args));
  }




}else {
  echo "You can not access this page!!";
}






?>
