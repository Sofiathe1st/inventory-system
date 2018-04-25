<title>Purchase Order</title>
<div id="po_form">
	<h2 id="po_title"> Add New Item</h2>
		<?php echo validation_errors(); ?>
			<?php echo form_open('login/inventory_hardware_add'); ?>
				
				<label>Asset Type:</label> 
						<input type="text" name="asset_type" value="Hardware" id="po_no" readonly="true" /><br>
				    
				    <label>Asset Number</label>
				    	<input type="text" name="asset_num" value="" id="po_no" /><br>
				    <!-- <input type="hidden" name="purchase_order_date" value="<?php echo date('Y-m-d');?>" id="po_date" readonly="true" /><br> -->
				    <hr id="po_div_line">
				    <label>Type</label>
				    	<input type="text" name="type_item" value="" id="po_no"/><br>
				    <label>Brand:</label>
				    	<input type="text" name="brand" value="" id="po_no"/><br>
				   	<label>Assigned To:</label>
				   		<input type="text" name="assigned_to" value="" id="po_no"/><br>
				   	<label>Specifications:</label><br>
				   		<textarea rows="4" cols="50" name="specifications" value="" id="remarks_po"></textarea><br>
				   	<label>Date Purchased:</label>
				   		<input type="date" name="date_purchased" value="" id="po_no"><br>
				   	<label>Amount:</label>
				   		<input type="text" name="amount" value="" id="po_no"><br>
				   	<label>Status</label> 
					<select name="status" id="category">
						<option value="Working">Working</option>
						<option value="Defective">Defective</option>
						<option value="Spare">Spare</option>
				    </select><br>

				   	<label>Comment/Remarks:</label><br>
				   		<textarea rows="4" cols="50" name="comment" value="" id="remarks_po"></textarea><br>
				<input type="hidden" name="author_email" value="<?php echo $email; ?>">
				<input type="hidden" name="author_firstname" value="<?php echo $firstname; ?>">
				<input type="hidden" name="author_lastname" value="<?php echo $lastname; ?>">
				<button type="submit" name="inventory_hardware_add" value="inventory_hardware_add" id="submit" >Submit</button>
			<?php echo form_close() ?>
</div>