<title>Inventory</title>
	<h2>Inventory</h2>

		<?php echo validation_errors(); ?>
			<?php echo form_open('login/inventory'); ?>

				<div>
					<label>Manufacturer:</label>
				    	<input type="text" name="manufacturer" value="" id="manufacturer" />
					<label>Serial Number:</label>
					    <input type="text" name="serial_number" value="" id="serial_number" />
					<label>Purchase Order:</label>
					    <input type="text" name="purchase_order_inv" value="" id="purchase_order_inv" />
				</div>
					<label>Item Details:</label>
					    <input type="text" name="item_details" value="" id="item_details" />
					<label>Color:</label>
					    <input type="text" name="color" value="" id="color" /><br>
					<label>Remarks:</label><br>
					    <textarea rows="4" cols="65" name="remarks" value="" id="remarks_inv"></textarea><br>
					<label>Item name with complete details:</label><br>
					    <input type="text" name="item_name_w_details" value="" id="item_name_w_details" /><br>
					<button type="submit" name="inventory" value="inventory" id="submit" class="btn danger">Submit</button>
	    	<?php echo form_close() ?>