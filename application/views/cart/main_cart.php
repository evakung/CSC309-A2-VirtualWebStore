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
}
</style>

</head>
<body> 

<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395343118.png" />
</div>

<?php 
	echo form_open('shoppingcart/update_cart'); 
	echo "<p>" . anchor('candystore/index','Back') . " | </p>";
	echo "<p>" . anchor('shoppingcart/purchase','Final Order Details') . "</p>";
?>

<table cellpadding="6" cellspacing="1" style="width:50%" border="0">

<tr>
  <th>Quantity</th>
  <th>Item name</th>
  <th style="text-align:right">Item Price</th>
  <th style="text-align:right">Sub-Total</th>
</tr>

<?php $i = 1; ?>

<?php foreach ($cart as $items): ?>

	<?php echo form_hidden($i.'[name]', $items['name']); ?>

	<tr>
	  <td><?php echo form_input(array('name' => $i.'[quantity]', 'value' => $items['quantity'], 'maxlength' => '3', 'size' => '5')); ?></td>
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
	</tr>

<?php $i++; ?>

<?php endforeach; ?>

<tr>
  <td colspan="2"> </td>
  <td class="right"><strong>Total</strong></td>
  <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>

<p><?php echo form_submit('', 'Update your Cart'); ?></p>
</body>
</html>

