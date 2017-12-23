<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['userSession'])!="")
{
	header("Location: index.php");
	exit;
}

if(isset($_POST['btn-login']))
{
	$email = $MySQLi_CON->real_escape_string(trim($_POST['user_email']));
	$upass = $MySQLi_CON->real_escape_string(trim($_POST['password']));
	
	$query = $MySQLi_CON->query("SELECT user_id, user_email, user_pass FROM users WHERE user_email='$email'");
	$row=$query->fetch_array();
	
	if(password_verify($upass, $row['user_pass']))
	{
		$_SESSION['userSession'] = $row['user_id'];
		header("Location: index.php");
	}
	else
	{
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; email or password does not exists !
				</div>";
	}
	
	$MySQLi_CON->close();
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<title>Coding Cage - Login & Registration System</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="style.css" type="text/css" />-->
<!--<link rel="stylesheet" href="css/style.css">-->
<link rel="stylesheet" href="less/style.less">
<link rel="stylesheet" href="css_login/login_style.css">

</head>
<body>

<div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
     
        
       <form class="form" method="post" id="login-form">
      
<!--        <h2 class="form-signin-heading">Sign In.</h2><hr />-->
        
        <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="user_email" required />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required />
        </div>
       
<!--     	<hr />-->
        
     
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
			</button> 
            
           <button  onclick="register.php" class="btn btn-default" >Sign UP Here </a> </button> 
           
      
        
        
      
      </form>
      </div>
<ul class="image">
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
            <li class="image"></li>
        </ul>
   </div>





<!--
<div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form">
			<input type="text" placeholder="Username">
			<input type="password" placeholder="Password">
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>-->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js_login/index.js"></script>

</body>
</html>