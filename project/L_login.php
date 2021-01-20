<?php
 $dbhost = "localhost";  
 $dbuser = "root";
 $dbpass = "";
 $db = "signup";
 $conn = new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
 
 $user = $_POST['user'];  
 $password = $_POST ['password'];  
      
      
        $user = stripcslashes($user);  
        $password = stripcslashes($password);  
        $user = mysqli_real_escape_string($conn, $user);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from signup where user = '$user' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
          echo '<script type="text/javascript">';
echo ' alert("Succesful login")'; 
  echo '</script>';
header('Refresh:2; url=http://localhost/project/index.html');
}  
else{  

echo '<script type="text/javascript">';
echo ' alert(" Invalid username or password")';  
echo '</script>';
header('Refresh:2; url=http://localhost/project/signup.html');
}     
?>  