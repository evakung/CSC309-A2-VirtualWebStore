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
	background-image: url('<?php echo $bg; ?>'); background-attachment: fixed;
}

table{
	margin: 0px auto;
}
p{
	display:inline;
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
.logout{
	position:absolute;
	font-size:20px;
	top:20;
   	right:50;

}
</style>
<body>

 <div align="center"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395357042.png" /></div>
<?php

print_r($cart);


echo "FINAL RECEIPT!";
echo "<p>" . anchor('candystore/index',' Back to the Candyshop') . "</p>";
echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
?>
</body>
</html>


