<?php include ('connect.php');
$Mname=$_POST['Name'];
//$Username =$_POST['Username'];
//$Password =$_POST['Password'];
$operation = $_POST['btn'];
//$conn = mysqli_connect("localhost", "root", "","cinema");

if($operation=="delete")
{	
	$sql = "delete from movie where mname='$Mname'";
		$r = mysqli_query($conn,$sql);
	
		
}
if($r==1)
{
	
	echo $operation ."movie deleted";
}








?>