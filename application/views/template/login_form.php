<html>
<head>

<?php 
	$bg="http://www.samsung-wallpapers.com/uploads/allimg/130523/1-130523011435.jpg";
?>
</head>

<style type="text/css">
*{
	font-family:fantasy;
	text-align:center;
	color:#2B3856;
	margin-right:auto;
	margin-left:auto;
}


body{
	background-image: url('<?php echo $bg; ?>'); 
}

form{
	margin: 0px auto;
	float:center;
	position:relative;
}


a:hover{
	color:white;
}
a:visited{
	color:#663366;
}
a:visited:hover{
	color:white;
}

</style>

<body> 
<div align="left">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395342334.png" />
</div>

<?php 
	echo "<p><b>Login:</p>";
	echo form_open('login/validate_credentials');
	echo form_input('login',set_value('login'));
	echo "<p> Password: </b></p>";
	echo form_password('password',set_value('password'));
	echo "<br><br>";
	echo form_submit('submit', 'Login');
	echo "<br><br>";
	echo "New User? Click " . anchor('login/signup', 'Here') . " to register!";
?>

</body>
