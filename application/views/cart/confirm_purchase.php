<html>
<head>

<?php 
	$bg="http://www.samsung-wallpapers.com/uploads/allimg/130523/1-130523011435.jpg";
?>
<style type="text/css">
*{
	font-family:fantasy;
	text-align:center;
	color:#2B3856;
}

body{
	background-image: url('<?php echo $bg; ?>'); 
}

table{
	margin: 0px auto;
}
p{
	display:inline;
	color:red;
}
</style>

</head>
<body> 


<div align="center"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395345733.png" /></a></div>
<?php
echo "<p>Note: Please double check on your order details and press confirm to proceeed. </p>";


echo form_open('item/create');
echo form_submit('submit', 'Confirm ');
echo form_close();



echo "<p>" . anchor('candystore/index','Back') . "</p>";
