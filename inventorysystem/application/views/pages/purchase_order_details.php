<?php
@$purchase_order_id  = $result[0]['id'];
@$purchase_order_no  = $result[0]['purchase_order_no'];
@$supplier       = $result[0]['supplier'];
@$purchase_order_date= $result[0]['purchase_order_date'];
@$remarks			 = $result[0]['remarks'];
?>

<title>Purchase Order</title>
	<div id="inv_form">
		<h2 id="inv_title">Purchase Order Details</h2>	

		<?php echo validation_errors(); ?>
			<?php echo form_open('login/purchase_order_details'); ?>

				<div>
					<!--<label>Manufacturer:</label>
				    	<input type="text" name="manufacturer" value="" id="manufacturer" />-->
				   	<label><?php echo $purchase_order_id; ?></label>
					<label>Purchase Order No.:</label>
					    <input type="text" name="purchase_order_no" value="<?php echo $purchase_order_no ?>" placeholder="" id="purchase_order_no" />
					<label>Serial Number:</label>
					    <input type="text" name="serial_number" value="" id="serial_number" />
					
				</div>
				<hr id="inv_div_line">
					<!--<label>Model</label>
					<label>Quantity</label>-->
					<label>Color:</label>
					    <input type="text" name="color" value="" id="color" /><br>
					<!--<label>Price</label>-->
					<input type="text" name="supplier" value="<?php echo $supplier; ?>">
					<input type="text" name="purchase_order_date" value="<?php echo $purchase_order_date ?>">
					<input type="text" name="purchase_order_no" value="<?php echo $purchase_order_no; ?>">
					<input type="text" name="remarks" value="<?php echo $remarks; ?>">
					<input type="hidden" name="author_email" value="<?php echo $email; ?>">
					<input type="hidden" name="author_firstname" value="<?php echo $firstname; ?>">
					<input type="hidden" name="author_lastname" value="<?php echo $lastname; ?>">
					<!--<label>Prepared by: <?php echo $firstname ?> <?php echo $lastname ?></label><br>
					<label>Email: <?php echo $email ?></label><br>-->
					<button type="submit" name="inventory" value="inventory" id="submit" class="btn danger">Submit Purchase Order</button>
	    	<?php echo form_close() ?>
	    </div>