<html>
	<head>
		<title>
			Log into chat - AdityaPutra.com
		</title>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" />
	</head>
	<body>
		<div id="wrapper">
			Please enter your username and password to login. <a href="#">Not registered?</a>
	        <div id="menu" align="center">
	        	<table>
	        	<form action="<?php echo base_url();?>index.php/login/do_login" method="post">
	        		<tr><td>Username</td><td>:</td><td><input type="text" name="username" id="username" required="required"/></td></tr>
	        		<tr><td>Password</td><td>:</td><td><input type="password" name="password" id="password" required="required"/></td></tr>
	        		<tr><td></td><td><input type="submit" value="login" name="submit" id="submit" /></td></tr>
	        	</form>
	        	</table>
	    	</div>
    	</div>
	</body>
</html>