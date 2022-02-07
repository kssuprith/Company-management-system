<?php
include('connection.php');



$email = $_POST['email'];
$pass = $_POST['password'];
//$pwd = $_POST['passwordss'];

//echo $email;
//echo $pass;



$query = "SELECT * FROM `users` WHERE email = '$email' and password='$pass'";

$data = mysqli_query($conn , $query);

$total = mysqli_num_rows($data);


if($total == 1)
{   
	session_start();
	$_SESSION['emailid']=$email;
$_SESSION['active'] = 1;
	echo "<script>alert(\"login successfull.\")</script>";
	echo "<script> window.location = \"dashboard.php\"</script>";

}
else
{
	echo "<script>alert(\"login failed.\")</script>";
	echo "<script>window.location = \"index.html \"</script>";
}

?>