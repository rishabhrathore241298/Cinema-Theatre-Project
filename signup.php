<html>
<head>
  
<meta charset="UTF-8">
  <title>Cinema Theater Website Template</title>
  <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
  <div id="header">
    <div>
      <a href="index.html" id="logo"><img src="images/logo.png" alt=""></a>
      <ul>
        <li class="selected">
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="about us.html">about us</a>
          <!--<ul>
            <li>
              <a href="#">sign up</a>
            </li>
            <li>
              <a href="#">about us</a>
            </li>
          </ul>-->
        </li>
        <li>
          <!--<a href="#">register</a>-->
        </li>
        <li>
          <a href="newlogin (2).html">login</a>
        </li>
        <li>
          <a href="feedback2.html">contact us</a>
        </li>
        <li>
          <!--<a href="about.html">About</a>
        </li>
        <li>
          <a href="blog.html">Blog</a>
        </li>-->
      </ul>
    </div>
  </div>

    <title> sign up </title>
    <link rel="stylesheet" type="text/css" href="style (1).css">
    <script type="text/javascript">
      function go(){      
        var name=document.getElementById('nm').value;
        var Username=document.getElementById('unm').value;
          var Password=document.getElementById('pwd').value;
            alert("Registered Sucessfully!");
        return true;}
    </script>
</head>
<body>
  <div id="login-box">
  <h1 ><b>...Welcome! U are registered sucessfully...</b></h1><br><br>
  <a href="index.html"><input type="submit" id="lg" name="register" value="Go To Home" >
        </a>
    <!--<form action="http://localhost/dbfinal/signup.php" method="post">
      <p><input type="text" id= "name" name="nm" placeholder="                Enter name"></p>
      <p><input type="text" id="us" name="unm" placeholder="                Enter Username"></p>
      <p><input type="password" id="Password" name="pwd" placeholder="                Enter Password"></p>
      <input type="submit" id="lg" name="register" value="register" onclick="return go()">-->

        
        
    </form>
  </div>
</body>
</html>

<?php
$Name =$_POST["nm"];
$Username =$_POST["unm"];
$Password =$_POST["pwd"];
$operation = $_POST['register'];
$conn = new mysqli("localhost", "root", "","cinema");

if($operation=="register")
{	
	$sql = "insert into user (Name,Username,Password) values ('".$Name."','".$Username."','".$Password."')";
}

$r = $conn->query($sql);




if($r==1)
{
	
	echo $operation ."Successfully,you have created a account";
}


?>