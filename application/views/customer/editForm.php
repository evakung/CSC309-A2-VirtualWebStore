<!--
<h2>Edit dat bitch</h2>
-->
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
}


body{
	background-image: url('<?php echo $bg; ?>'); 
}

input{ 
	display: block;
	margin: 0px auto;
}

</style>

 <div align="center"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395305414.png" /></div>
<?php 
	echo "<p>" . anchor('customer/index','Back') . "</p>";
	
	echo form_open("customer/update/$customer->id");
	
	echo form_label('First Name'); 
	echo form_error('first');
	echo form_input('first',$customer->first,"required");
?>
<br>
<?php
	echo form_label('Last Name');
	echo form_error('last');
	echo form_input('last',$customer->last,"required");
?>
<br>
<?php	
	echo form_label('Login');
	echo form_error('login');
	echo form_input('login',$customer->login,"required");
?>
<br>
<?php	
	echo form_label('Password');
	echo form_error('password');
	echo form_input('password',$customer->password,"required");
?>
<br>
<?php	
	echo form_label('Email');
	echo form_error('email');
	echo form_input('email',$customer->email,"required");
?>
<br><br>
<?php	

	
	
	echo form_submit('submit', 'Save');
	echo form_close();
?>	

