<?php

require('..\inc\dbcon.php');

$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$password = stripslashes($password);
$password = mysqli_real_escape_string($connection,$password);

$sql="SELECT * FROM users WHERE password='$password'";
$result=mysqli_query($connection,$sql);

// mysqli_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
//Name variable
while($row = mysqli_fetch_assoc($result))
{
   $name = $row["name"];
}
// Register $myusername, $mypassword and redirect to file "login_success.php"
// Start the session
session_start();
// Set session variables
$_SESSION["password"] = $password;
$_SESSION["name"] = $name;
//echo "Session variables are set.";
header("location:dashboard.php?m=Log in Success full !");
}
else {
echo "Wrong Username or Password";
}
?>
