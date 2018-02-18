<?php

$host="database";
$user="root";
$password="root";
$db="testdb";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
	$uname=$_POST['username'];
	$pword=$_POST['password'];
	$sql="select * from users where username='".$uname."' and password='".$pword."' limit 1";
        $results=mysql_query($sql);

	if(mysql_num_rows($results)==1){
		echo "You have successfully logged in";
		exit();
		
	} else {
		echo "Login failed";
		exit();
	}
	
}

?>

<html>
	<head>
		<title=Login Form</title>
	</head>
	<body>
		<form method="POST" action="#">
		<input type="text" name="username" placeholder="Enter username"/>
		<input type="text" name="password" placeholder="Enter password"/>
		<input type="submit" name="submit" value="LOGIN">		
		</form>
		
	</body>
</html>
