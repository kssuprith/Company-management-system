<?php
include('connection.php');


session_start();

$username = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['repassword'];
//$pwd = $_POST['passwordss'];

// echo $username;
// echo $email;
// echo $pass;
// echo $cpass;

if(strcmp($pass,$cpass)!=0)
{
    echo "<script>alert(\"password doesn't match.\")</script>";
	echo "<script> window.location = \"index.html\"</script>"; 
}
else
{
$query = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$pass')";

$data = mysqli_query($conn , $query);  
	
	echo "<script>alert(\"registerd successfully.\")</script>";
	echo "<script> window.location = \"index.html\"</script>";

}
?>