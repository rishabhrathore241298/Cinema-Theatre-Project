<?php


$Username =$_POST["unm"];
$Password =$_POST["pwd"];
$operation = $_POST["Login"];
//$operation1 = $_POST["button2"];

$conn = mysqli_connect("localhost", "root", "","cinema");

$r=0;

if($operation=="Login")
{	
	$sql = "select Username,Password from user where Username = '$Username'";
	$result = mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	if($Username==$row['Username'] && $Password==$row['Password'])
		{$r=1;}

 	else if($Username=="rishabh@gmail.com" && $Password=="qwerty")
		{header('Location: http://localhost/new/admin.html');}
}
//else if ($operation1=="signup")
//{
//	header('Location: http://localhost/new/signup.html');
//}

if($r==1)
{
	
	
	header('Location:logintohome.html');

}
else
{
	echo"Login Unsucessful";
}
?>


