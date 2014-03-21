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

</head>
<body> 

<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395343118.png" />
</div>


<table cellpadding="6" cellspacing="1" style="width:50%" border="0">

<tr>
  <th>Quantity</th>
  <th>Item name</th>
  <th style="text-align:right">Item Price</th>
  <th style="text-align:right">Sub-Total</th>
  <th style="text-align:right"></th>
  <th style="text-align:right"></th>
</tr>



<?php if($cart_empty>0):?>
<?php $i = 1; ?>

<?php foreach ($cart as $items): ?>
	<?php if ($items['quantity'] > 0):?>
	
	<?php echo form_hidden($i.'[name]', $items['name']); ?>
	
	<tr>
	  <td><?php echo $items['quantity']; ?></td>
	  <td>
		<?php echo $items['name']; ?>

			<?php if ($this->cart->has_options($items['name']) == TRUE): ?>

				<p>
					<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

					<?php endforeach; ?>
				</p>

			<?php endif; ?>

	  </td>
	  <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
	  <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
	  <?php 
	  		$name = $items['name'];
	    	echo "<td>" . anchor("shoppingcart/edit_form/$name",'Edit') . "</td>";
			echo "<td>" . anchor("shoppingcart/delete_item/$name",'Delete') . "</td>";
	?>
	</tr>

<?php $i++; ?>
<?php endif;?>
<?php endforeach; ?>

<?php endif;?>
<tr>
  <td colspan="2"> </td>
  <td class="right"><strong>Total</strong>: $<?php echo $total; ?></td>
  
</tr>

</table>
<br><br><br>
<?php 
	echo "<p>" . anchor('candystore/index','<< Back') . "</p>";
	echo " | ";
	echo "<p>" . anchor('shoppingcart/purchase','Final Order Details >>') . "</p>";
	echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
?>
</body>
</html>

