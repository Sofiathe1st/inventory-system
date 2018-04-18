<?php


// Generate Purchase No.
@$purchase_no = $result[0]['purchase_order_no'];

if(($purchase_no == 0) || $purchase_no == ''){
    // generate purchase no
    $new_purchase_no = '0001';

  } else {
    // new purchase no and ADD 1
    $new_purchase_no = sprintf('%04d', $purchase_no + 1);
}
?>
<title>Purchase Order</title>
<div id="po_form">
	<h2 id="po_title"> Create New Purchase Order</h2>
		<?php echo validation_errors(); ?>
			<?php echo form_open('login/purchase_order'); ?>
				<label>Purchase Order No.:</label>
				    <input type="text" name="purchase_order_no" value="" id="po_no" />
				    <input type="hidden" name="purchase_order_date" value="<?php echo date('Y-m-d');?>" id="po_date" readonly="true" /><br>
				    <hr id="po_div_line">
				<label>Manufacuturer:</label>
					<select name="manufacturer" id="manufacturer">
						 <option value="">Select Manufacturer</option>
                        <?php
                            foreach ($manufacturer as $res) {
                                echo "<option value='$res->manufacturer_name'>$res->manufacturer_name</option>";
                            }
                        ?>
					</select><br>
					</
				<label>Quantity:</label>
				    <input type="text" name="quantity" value="" id="quantity" /><br>
				<!--<label>Category:</label> 
					<select name="category" id="category">
						<option value="Television">Television</option>
						<option value="Computer">Computer</option>
						<option value="Cellphones">Cellphones</option>
				    </select><br>
				<label>Amount:</label>
				    <input type="text" name="amount" value="" id="amount" /><br>-->
				<label>Remarks:</label><br>
				    <textarea rows="4" cols="50" name="remarks" value="" id="remarks_po"></textarea><br>
				<input type="hidden" name="author_email" value="<?php echo $email; ?>">
				<input type="hidden" name="author_firstname" value="<?php echo $firstname; ?>">
				<input type="hidden" name="author_lastname" value="<?php echo $lastname; ?>">
				<button type="submit" name="purchase_order" value="purchase_order" id="submit" >Create Purchase Order</button>
			<?php echo form_close() ?>
</div>