<?php

 foreach ($results as $row) { 


}    
?>
<div id="po_form">
	<h2 id="po_title">Purchase Order</h2>
	<label><b>Purchase Order NO. :</b> &nbsp; <?php echo $row->purchase_order_no; ?></label><br>
	<label><b>Category:</b> &nbsp; <?php echo $row->category; ?></label><br>
	<label><b>Item Type:</b> &nbsp; <?php echo $row->item_type?></label><br>
	<label><b>Supplier:</b> &nbsp; <?php echo $row->supplier?></label><br>
	<label><b>Total Price: </b> &nbsp; <?php echo $row->price?></label><br>


	<hr id='po_div_line2'>
			<?php echo validation_errors(); ?>
				<?php echo form_open('login/purchase_order_add_info'); ?>

				   	<?php 
    for ($i = 0; $i < $row->quantity; $i++) { 
    	$price2 = $row->price / $row->quantity;
        echo 	"<!--<label>Purchase Order No.:</label>-->
					<input type='hidden' name='purchase_order_no[]' value='$row->purchase_order_no' id='po_no' readonly='true' />";
		echo 	"<!--<label>Purchase Order Date:</label>-->
					<input type='hidden' name='purchase_order_date[]' value='$row->purchase_order_date' id='po_date' readonly='true' /><br>";
		echo    "<!--<label>Category:</label>-->
					<input type='hidden' name='category[]' value='$row->category' readonly='true'/>";
		echo 	"<label><b>Serial Number:</b></label>
					<input type='text' name='serial_number[]' required /> &nbsp;&nbsp;";
		echo 	"<!--<label><b>Supplier:</b></label>-->
					 	<input type='hidden' name='supplier[]' value='$row->supplier' id='' readonly='true'/><br>";
		echo 	"<hr id='po_div_line'>";
		
		echo 	"<label><b>Name/Model:</b></label>
					<input type='text' name='name_sh[]' value='' /> &nbsp;&nbsp;";
		echo 	"<label><b>Manufacuturer:</b></label>
					 	<input type='text' name='manufacturer[]' value='' id='' required'/><br>";
		echo 	"<label><b>Quantity:</b></label>
				    	<input type='text' name='quantity[]' value='1' id='quantity' readonly='true' /><br>";
		echo 	"<label><b>Assigned to:</b></label>
		    			<input type='text' name='assigned_to[]' id='amount' required /><br> ";
		echo 	"<!--<label>Item Type:</label>--> 
						<input type='hidden' name='item_type[]' value='$row->item_type' id='amount' readonly='true'/><br>";
		echo 	"<label><b>Specifications:</b></label><br> 
						<textarea rows='4' cols='50' name='specifications[]' value='' id='remarks_po' required ></textarea><br>";
		echo 	"<label><b>Price:</b></label>
				    	<input type='text' name='price[]' value='$price2' id='amount' readonly='true'/><br>";
		echo 	"<label><b>Status</b></label>
						<select name='status[]' id='category'>
						<option value='Working'>Working</option>
						<option value='Defective'>Defective</option>
						<option value='Spare'>Spare</option>
				    </select><br>";
		echo 	"<label><b>Color:</b></label>
						<input type='text' name='color[]' value='' id='amount' required /><br>";
		echo 	"<input type='hidden' name='remarks[]' value='$row->remarks'>";
		echo 	"<input type='hidden' name='author_email[]' value='$row->author_email'>";
		echo 	"<input type='hidden' name='author_firstname[]' value='$row->author_firstname'>";
		echo 	"<input type='hidden' name='author_lastname[]' value='$row->author_lastname'>";
        echo 	"<br><hr id='po_div_line2'>";
        echo    "<input type='hidden' name='quantity2' value='$row->quantity'>";
    }
?>

					
					<button type="submit" name="purchase_order" value="purchase_order" id="submit" >Submit</button>
				<?php echo form_close() ?>
</div>