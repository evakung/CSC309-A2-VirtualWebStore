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
 <div align="center"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395307027.png" /></div>
<h2>here is your dirty bitch</h2>
<?php 
	echo "<p>" . anchor('customer/index','Back') . "</p>";

	echo "<p> ID = " . $customer->first . "</p>";
	echo "<p> NAME = " . $customer->last . "</p>";
	echo "<p> Description = " . $customer->login . "</p>";
	echo "<p> Price = " . $customer->password . "</p>";
	echo "<p> Price = " . $customer->email . "</p>";
		
?>	

