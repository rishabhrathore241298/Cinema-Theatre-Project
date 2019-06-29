<?php
$Mname=$_POST['moviename'];
//$Username =$_POST['Username'];
//$Password =$_POST['Password'];
$operation = $_POST['button2'];
$conn = mysqli_connect("localhost", "root", "","cinema");

if($operation=="search")
{	
	$sql = "select mdesc from movie,customer where customer.mid=(select movie.mid from movie where movie.mname='$Mname')";
		$r = mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($r);
		

echo $row["mdesc"];
}
else 
echo "unsuccesful";





?>