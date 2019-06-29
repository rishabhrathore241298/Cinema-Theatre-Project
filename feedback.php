<?php

$conn = new mysqli("localhost", "root", "","cinema");

$r=0;
$Name =$_POST["nm"];
$Username =$_POST["unm"];
$Mobileno =$_POST["mbl"];
$Suggestion =$_POST["sgg"];
$operation = $_POST['Submit'];

if($operation=="Submit")
{	
	$sql = "insert into feedback (Name,Username,Mobileno,Suggestion) values ('".$Name."','".$Username."',".$Mobileno.",'".$Suggestion."')";
	$r=1;

}

$r = $conn->query($sql);




if($r==1)
{
	
	echo $operation ."your suggestion succesfully added";
	header('Location:index.html');
}
else
{
	echo "not inserted";
}

?>