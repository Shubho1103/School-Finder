<?php
 $dbhost = "localhost";  
 $dbuser = "root";
 $dbpass = "";
 $db = "Login";
 $conn = new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
echo 'connected Succesfully';
 $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
      
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
          echo '<script type="text/javascript">';
echo ' alert("Succesful login")';  }   
?>  