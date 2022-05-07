<?php
include_once("mysql-connection.php");
$uid=$_POST["uid"];
echo "$uid";
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mobile=$_POST["mobile"];
$city=$_POST["city"];
$gender=$_POST["gend"];
$purp=$_POST["purp"];

$query="insert into users(uid,fname,lname,contact,city,gender,purp,dos,tos)  values('$uid','$fname','$lname','$mobile','$city','$gender','$purp','CURRENT_DATE()','CURRENT_TIME()')";
    mysqli_query($dbcon,$query);

    $msg=mysqli_error($dbcon);
    if($msg=="")
    {
         echo "<script type='text/javascript'> alert('Your appointment is booked. We will contact you within 24 hours'); 
window.location='index.php'; </script>";

    }
?>