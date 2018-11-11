
<?php 

if(isset($_POST['check'])){
	
	session_start();
	$code=$_SESSION['cap_code'];
	
	$user=$_POST['cap'];
	
	if($code===$user){
		
		echo "<h3>Insert Captcha Sucessfully</h3>";
	}
	else
		echo "<h3>Insert valid captcha code</h3>";
}

?>




<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Captcha|Code</title>
	
	<style type="text/css"> 
	
	.name{
		width: 400px;
		height: 35px;
		background-color: #F0F0F0;
	}
	.captchaImg{
		width: 170px;
		height: 117px;
	}
	.captcha{
		width: 400px;
		height: 35px;
		background-color: #F0F0F0;
	}
	.submit{
		margin-top: 30px;
		margin-left: 63px;
		height: 40px;
		width: 70px;
		background-color: unset;
		color: green;
		font-size: 18px;
		
	}
	
	</style>
	
	
</head>
<body>
	
	<form action="register.php" method="post" class="form">
	
	
	Name: <input type="text" name="name" class="name" />
	
	<br />
	
	Captcha: <input type="text" name="cap" class="captcha"/><img src="captcha.php" alt=""  class="captchaImg"/>
	
	<br /> 
	
	<input type="submit" name="check" value="verify" class="submit"/>
	
	</form>
	
	
	
</body>
</html>