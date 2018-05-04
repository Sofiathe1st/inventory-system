<?php

 foreach ($results as $row) { 


}    
?>
<div id="po_form">
	<h2 id="po_title">Purchase Order</h2>
			<?php echo validation_errors(); ?>
				<?php echo form_open('login/purchase_order_add_info'); ?>

				   	<?php 
    for ($i = 0; $i < $row->quantity; $i++) { 
    	$price2 = $row->price / $row->quantity;
        echo 	"<label>Purchase Order No.:</label>
					<input type='text' name='purchase_order_no[]' value='$row->purchase_order_no' id='po_no' readonly='true' />";
		echo 	"<label>Purchase Order Date:</label>
					<input type='text' name='purchase_order_date[]' value='$row->purchase_order_date' id='po_date' readonly='true' /><br>";
		echo    "<label>Request Type:</label>
					<input type='text' name='request_type[]' value='$row->request_type' readonly='true'/>";
		echo 	"<label>Serial Number:</label>
					<input type='text' name='serial_number[]' required />";
		echo 	"<label>Supplier:</label>
					 	<input type='text' name='supplier[]' value='$row->supplier' id='' readonly='true'/><br>";
		echo 	"<hr id='po_div_line'>";
		
		echo 	"<label>Name/Model:</label>
					<input type='text' name='name_sh[]' value='' />";
		echo 	"<label>Manufacuturer:</label>
					 	<input type='text' name='manufacturer[]' value='' id='' required'/><br>";
		echo 	"<label>Quantity:</label>
				    	<input type='text' name='quantity[]' value='1' id='quantity' readonly='true' /><br>";
		echo 	"<label>Assigned to:</label>
		    			<input type='text' name='assigned_to[]' id='amount' required /><br> ";
		echo 	"<label>Category:</label> 
						<input type='text' name='category[]' value='$row->category' id='amount' readonly='true'/><br>";
		echo 	"<label>Specifications:</label><br> 
						<textarea rows='4' cols='50' name='specifications[]' value='' id='remarks_po' required ></textarea><br>";
		echo 	"<label>Price:</label>
				    	<input type='text' name='price[]' value='$price2' id='amount' readonly='true'/><br>";
		echo 	"<label>Status</label>
						<select name='status[]' id='category'>
						<option value='Working'>Working</option>
						<option value='Defective'>Defective</option>
						<option value='Spare'>Spare</option>
				    </select><br>";
		echo 	"<label>Color:</label>
						<input type='text' name='color[]' value='' id='amount' required /><br>";
		echo 	"<input type='hidden' name='remarks[]' value='$row->remarks'>";
		echo 	"<input type='hidden' name='author_email[]' value='$row->author_email'>";
		echo 	"<input type='hidden' name='author_firstname[]' value='$row->author_firstname'>";
		echo 	"<input type='hidden' name='author_lastname[]' value='$row->author_lastname'>";
        echo 	"<br><hr id='po_div_line2'>";
        echo "<input type='hidden' name='quantity2' value='$row->quantity'>";
    }
?>

					
					<button type="submit" name="purchase_order" value="purchase_order" id="submit" >Submit</button>
				<?php echo form_close() ?>
</div>