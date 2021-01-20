<?php
 $dbhost = "localhost";  
 $dbuser = "root";
 $dbpass = "";
 $db = "contact_us";
 $conn = new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
 echo "connected successfully";
 $fname=$_GET['firstname'];
 $lname=$_GET['lastname'];
 $subject=$_GET['subject'];
 $res = mysqli_query($conn,"insert into contact
  values('$fname','$lname','$subject')");



   $conn -> close();
?>