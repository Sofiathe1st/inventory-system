<?php

 foreach ($results as $row) { ?>
                    

        <?php        }
                ?>

	<h2 id="po_title">Purchase Order</h2>
		<?php echo validation_errors(); ?>
			<?php echo form_open('login/purchase_order_add_info'); ?>
				<label>Purchase Order No.:</label>
				    <input type="text" name="purchase_order_no" value="<?php echo htmlspecialchars($row->purchase_order_no); ?>" id="po_no" readonly="true" />
				    <input type="hidden" name="purchase_order_date" value="<?php echo ($row->purchase_order_date); ?>" id="po_date" readonly="true" /><br>
				    <hr id="po_div_line">
				<label>Serial Number</label>
					<input type="text" name="serial_number" required />
				<label>Manufacuturer:</label>
					 <input type="text" name="manufacturer" value="<?php echo htmlspecialchars($row->manufacturer); ?>" id="" readonly="true"/>
				<label>Quantity:</label>
				    <input type="text" name="quantity" value="1" id="quantity" readonly="true" />
				<label>Category:</label> 
					<select name="category" id="category">
						<option value="Television">Television</option>
						<option value="Computer">Computer</option>
						<option value="Cellphones">Cellphones</option>
				    </select>
				<label>Price:</label>
				    <input type="text" name="price" value="" id="amount" required /><br>
				<input type="hidden" name="remarks" value="<?php echo ($row->remarks); ?>">
				<input type="hidden" name="author_email" value="<?php echo ($row->author_email); ?>">
				<input type="hidden" name="author_firstname" value="<?php echo ($row->author_firstname); ?>">
				<input type="hidden" name="author_lastname" value="<?php echo ($row->author_lastname);; ?>">
				<button type="submit" name="purchase_order" value="purchase_order" id="submit" >Submit</button>
			<?php echo form_close() ?>