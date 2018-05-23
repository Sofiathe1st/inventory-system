
<title>Purchase Order</title>
<div id="po_form">
	<h2 id="po_title"> Create New Purchase Order</h2>
		
			<?php echo form_open('login/purchase_order'); ?>
				
				<?php
    
    if(isset($message))
    {
        echo $message;
    }  
    ?>
    <br>
    <label><b>Purchase Order No.:</b></label>
				    <input type="text" name="purchase_order_no" value="" id="po_no" />

				<label><b>Purchase Order Date:</b></label>
				<input type="date" name="purchase_order_date" value="" /><br>
				    <hr id="po_div_line">
				<label><b>Category:</b></label>
				<select name="category" id="category">
						<option value="Hardware">Hardware</option>
						<option value="Software">Software</option>
						<option value="Other">Other</option>
				</select><br>
				<label><b>Supplier:</b></label>
					<select name="supplier" id="manufacturer">
						 <option value="">Select Supplier</option>
                        <?php
                            foreach ($supplier as $res) {
                                echo "<option value='$res->supplier_name'>$res->supplier_name</option>";
                            }
                        ?>
					</select><br>
				
				<label><b>Quantity:</b></label>
				    <input type="text" name="quantity" value="" id="quantity" /><br>
				<label><b>Item Type:</b></label>
					<input type="text" name="item_type" value="" id="quantity" /><br> 
				<label><b>Price</b></label>
				    <input type="text" name="price" value="" id="amount" /><br>
				<label><b>Remarks:</b></label><br>
				    <textarea rows="4" cols="50" name="remarks" value="" id="remarks_po"></textarea><br>
				<input type="hidden" name="author_email" value="<?php echo $email; ?>">
				<input type="hidden" name="author_firstname" value="<?php echo $firstname; ?>">
				<input type="hidden" name="author_lastname" value="<?php echo $lastname; ?>">
				<button type="submit" name="purchase_order" value="purchase_order" id="submit" >Create Purchase Order</button>
			<?php echo form_close() ?>
</div>