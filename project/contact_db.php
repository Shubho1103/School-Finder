
<?php
 $dbhost = "localhost";  
 $dbuser = "root";
 $dbpass = "";
 $db = "contact_us";
 $conn = new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
 echo "connected successfully";
 $fname=$_GET['fname'];
 $lname=$_GET['lname'];
 $subject=$_GET['subject'];
 $res = mysqli_query($conn,"insert into contact
  values('$fname','$lname','$subject')");
}


   $conn -> close();
