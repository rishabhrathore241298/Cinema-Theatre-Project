<?php
$Mname=$_POST['Name'];
$movieid=$_POST['Movieid'];
$description=$_POST['Moviedescp'];
//$Username =$_POST['Username'];
//$Password =$_POST['Password'];
$operation = $_POST['btn'];
$conn = mysqli_connect("localhost", "root", "","cinema");

if($operation=="add")
{	
	$sql = "insert into movie (mname,mid,mdesc) values ('".$Mname."','".$movieid."','".$description."')";
		$r = mysqli_query($conn,$sql);
	
		
}
if($r==1)
{
	
	echo $operation ."Successfully,you have added a movie";
}








?>