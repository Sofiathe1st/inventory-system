<title>Purchase Order</title>
	<h2>Purchase Order</h2>
		<?php echo validation_errors(); ?>
			<?php echo form_open('login/purchase_order'); ?>
				<label>Purchase Order No.:</label>
				    <input type="text" name="purchase_order_no" value="" id="po_no" />
				<label>Purchase Order Date:</label>
				    <input type="date" name="purchase_order_date" value="" id="po_date" /><br>
				<label>Quantity:</label>
				    <input type="text" name="quantity" value="" id="quantity" />
				<label>Category:</label> 
					<select name="category" id="category">
						<option value="Television">Television</option>
						<option value="Computer">Computer</option>
						<option value="Cellphones">Cellphones</option>
				    </select><br>
				<label>Amount:</label>
				    <input type="text" name="amount" value="" id="amount" /><br>
				<label>Remarks:</label><br>
				    <textarea rows="4" cols="50" name="remarks" value="" id="remarks_po"></textarea><br>
				<button type="submit" name="purchase_order" value="purchase_order" id="submit">Submit</button>
			<?php echo form_close() ?>