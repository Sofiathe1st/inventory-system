    <title><?php echo $firstname?>: Update User Area</title>

              <?php
              if(validation_errors()){
              ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                <strong><?php echo validation_errors(); ?></strong>
              </div>
              <?php
              }
              echo form_open('login/edit_inventory_hs','class="myclass"');
              $id_inv_hs		          = $result[0]['id'];
              $asset_type		          = $result[0]['asset_type'];
              $asset_num			      = $result[0]['asset_num'];
              $type_item				  = $result[0]['type_item'];
              $brand 					  = $result[0]['brand'];
              $assigned_to				  = $result[0]['assigned_to'];
              $specifications			  = $result[0]['specifications'];
              $date_purchased			  = $result[0]['date_purchased'];
              $amount				      = $result[0]['amount'];
              $status				      = $result[0]['status'];
              $comment				      = $result[0]['comment'];
              $author_email    	          = $result[0]['author_email'];
              $author_firstname           = $result[0]['author_firstname'];
              $author_lastname            = $result[0]['author_lastname'];

              ?>
              <div id="po_form">

                <h3 id="inv_title">Edit Inventory h/s Details</h3>
                <div class="form-group"> 

            <input type="hidden" id="id" name="id" value="<?php echo $id_inv_hs;?>" required>
        </div> 
               <label>Asset Type:</label> 
					<select name="asset_type" id="category">
						<option value="Hardware">Hardware</option>
						<option value="Software">Software</option>
				    </select>
				    <label>Asset Number</label>
				    	<input type="text" name="asset_num" value="<?php echo $asset_num; ?>" id="po_no" /><br>
				    <!-- <input type="hidden" name="purchase_order_date" value="<?php echo date('Y-m-d');?>" id="po_date" readonly="true" /><br> -->
				    <hr id="po_div_line">
				    <label>Type</label>
				    	<input type="text" name="type_item" value="<?php echo $type_item; ?>" id="po_no"/><br>
				    <label>Brand:</label>
				    	<input type="text" name="brand" value="<?php echo $brand; ?>" id="po_no"/><br>
				   	<label>Assigned To:</label>
				   		<input type="text" name="assigned_to" value="<?php echo $assigned_to; ?>" id="po_no"/><br>
				   	<label>Specifications:</label><br>
				   		<input  type="text" name="specifications" value="<?php echo $specifications; ?>" id="remarks_po"/><br>
				   	<label>Date Purchased:</label>
				   		<input type="date" name="date_purchased" value="<?php echo $date_purchased; ?>" id="po_no"><br>
				   	<label>Amount:</label>
				   		<input type="text" name="amount" value="<?php echo $amount; ?>" id="po_no"><br>
				   	<label>Status</label> 
					<select name="status" id="category">
						<option value="<?php echo $status; ?>"><?php echo $status; ?></option>
						<option value="Working">Working</option>
						<option value="Defective">Defective</option>
						<option value="Spare">Spare</option>
				    </select><br>

				   	<label>Comment/Remarks:</label><br>
				   		<input type="" name="comment" value="<?php echo $comment; ?>" id="remarks_po"/><br>
				<input type="hidden" name="author_email" value="<?php echo $author_email; ?>">
				<input type="hidden" name="author_firstname" value="<?php echo $author_firstname; ?>">
				<input type="hidden" name="author_lastname" value="<?php echo $author_lastname; ?>">
				<button type="submit" name="edit_inventory_hs" value="edit_inventory_hs" id="submit" >Submit</button>
              <?php echo form_close() ?>
            </button>
          </div>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>
