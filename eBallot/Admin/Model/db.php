<?php
class db
{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "eBallot";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 //CHECKING USER
 function CheckUser($conn,$table,$username,$password)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }
 

function CloseCon($conn)
 {
 $conn -> close();
 }

  //CHECKING VOTER nid
  function CheckVoternid($conn,$table,$nid)
  {
     $result = $conn->query("SELECT * FROM ". $table." WHERE nid='". $nid."'");
    return $result;
  }
  
 
 function CloseConnnn($connnn)
  {
  $connnn -> close();
  }

    //CHECKING EC uname
    function CheckEC($conn,$table,$uname)
    {
       $result = $conn->query("SELECT * FROM ". $table." WHERE uname='". $uname."'");
    return $result;
    }
    
   
   function CloseConn($connn)
    {
    $connn -> close();
    }


//CHECKING ADMIN pass
////function Checkadmin($conn,$table,$pass)
//{
   //$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."'");
//return $result;
//}



//INSERTING EC DATA
 function InsertData($conn, $tablename, $fname, $lname, $uname, $phone, $pass, $area)
 {
   $sqlstr = "INSERT INTO $tablename (fname, lname, uname, phone, pass, area) Values ('$fname','$lname','$uname','$phone','$pass','$area')";
   
   if($conn->query($sqlstr))
   {
       echo "EC Added";
   }
   else
   {
       echo"Can't Add EC".$conn->error;
   }

}

//INSERTING Voter DATA
function InsertVoterData($conn, $tablename, $fname, $lname, $uname, $nid, $phone, $pass, $area)
{
  $sqlstr = "INSERT INTO $tablename (fname, lname, uname, nid, phone, pass, area) Values ('$fname','$lname','$uname','$nid','$phone','$pass','$area')";
  
  if($conn->query($sqlstr))
  {
    echo '<script type = "text/javascript">alert("Voter Added Succesfully") </script>';
  }
  else
  {
      echo"Can't Add Voter".$conn->error;
  }

}

//FETCHING Votes
function fetchVotesData($conn, $tablename){
    $sqlstr="SELECT * FROM $tablename";
    $results = $conn->query($sqlstr);
    return $results;
}

//FETCHING EC DATA
function fetchData($conn, $tablename){
    $sqlstr="SELECT * FROM $tablename";
    $results = $conn->query($sqlstr);
    return $results;
}

//FETCHING VOTER DATA
function fetchVData($conn, $tablename){
    $sqlstr="SELECT * FROM $tablename";
    $results = $conn->query($sqlstr);
    return $results;
}

//UPDATING EC DATA
function updateData($conn, $tablename, $fname, $lname, $uname, $phone, $area)
{
    $sqlstr = "UPDATE $tablename SET fname='$fname', lname='$lname', uname='$uname', phone='$phone',  area='$area' WHERE uname='$uname'";
    if($conn->query($sqlstr))
    {
        echo "EC Updated";
    }
    else
    {
        echo"Can't update EC".$conn->error;
    }

}

//UPDATING VOTER DATA
function updateVoterData($conn, $tablename, $fname, $lname, $uname, $nid, $phone, $area)
{
    $sqlstr = "UPDATE $tablename SET fname='$fname', lname='$lname', uname='$uname', nid='$nid', phone='$phone', area='$area' WHERE nid='$nid'";
    if($conn->query($sqlstr))
    {
        echo "Voter Updated";
    }
    else
    {
        echo"Can't update Voter".$conn->error;
    }

}

//UPDATING ADMIN DATA
function updateadminData($conn, $tablename, $username, $password)
{
    $sqlstr = "UPDATE $tablename SET username='$username', password='$password'";
    if($conn->query($sqlstr))
    {
        echo '<script type = "text/javascript">alert("Profile Updated Succesfully") </script>';
    }
    else
    {
        echo"Can't update Profile".$conn->error;
    }
 

}

//DELETING DATA



}
?>