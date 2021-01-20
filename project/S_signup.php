<?php
session_start();
header('Refresh:1; url=http://localhost/gym-website/signup.html');
$con= mysqli_connect('localhost','root');
 mysqli_select_db($con,'signup');
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $user=$_POST['user'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $confirmpassword=$_POST['cpassword'];
 $s= "select * from signup where user='$user'";
 $result= mysqli_query($con,$s);
 $num= mysqli_num_rows($result);
 if ($num==1)
 {
     echo"Username already Taken!";
     header('Refresh:2; url=http://localhost/project/signup.html');
 }
 else
 {
     $reg= "insert into signup(firstname,lastname,user,email,password,confirmpassword) values('$firstname','$lastname','$user','$email','$password','$confirmpassword')";
     mysqli_query($con,$reg);
     echo"Registration Successful";
     header('Refresh:2; url=http://localhost/project/index.html');
    }
?>
