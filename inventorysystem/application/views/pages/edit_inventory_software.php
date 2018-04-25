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
              echo form_open('login/edit_inventory_software','class="myclass"');
              $id_inv_s		 	          = $result[0]['id'];
              $asset_type		          = $result[0]['asset_type'];
              $software_name			      = $result[0]['software_name'];
              $software_info				  = $result[0]['software_info'];
              $assigned_to				  = $result[0]['assigned_to'];
              $quantity			  = $result[0]['quantity'];
              $date_purchased			  = $result[0]['date_purchased'];
              $amount				      = $result[0]['amount'];
              $status				      = $result[0]['status'];
              $comments				      = $result[0]['comments'];
              $author_email    	          = $result[0]['author_email'];
              $author_firstname           = $result[0]['author_firstname'];
              $author_lastname            = $result[0]['author_lastname'];

              ?>
              <div id="po_form">

                <h3 id="inv_title">Edit Inventory Software Details</h3>
                <div class="form-group"> 

            <input type="hidden" id="id" name="id" value="<?php echo $id_inv_s;?>" required>
        </div> 
               <label>Asset Type:</label> 
						<input type="text" name="asset_type" value="Software" id="po_no" readonly="true" /><br>
				    
				    <label>Software Name</label>
				    	<input type="text" name="software_name" value="<?php echo $software_name;?>" id="po_no" /><br>
				    <hr id="po_div_line">
				    <label>Software Info</label><br>
				    	<input type="text" name="software_info" value="<?php echo $software_info;?>" id="remarks_po" /><br>
				   	<label>Assigned To:</label>
				   		<input type="text" name="assigned_to" value="<?php echo $assigned_to;?>" id="po_no"/><br>
				   	<label>Quantity:</label><br>
				   		<input type="text" name="quantity" value="<?php echo $quantity;?>" id="po_no" /><br>
				   	<label>Date Purchased:</label>
				   		<input type="date" name="date_purchased" value="<?php echo $date_purchased;?>" id="po_no"><br>
				   	<label>Amount:</label>
				   		<input type="text" name="amount" value="<?php echo $amount;?>" id="po_no"><br>
				   	<label>Status</label> 
					<select name="status" id="category">
						<option value="<?php echo $status;?>"><?php echo $status;?></option>
						<option value="Working">Working</option>
						<option value="Defective">Defective</option>
						<option value="Spare">Spare</option>
				    </select><br>

				   	<label>Comment/Remarks:</label><br>
				   		<input type="text" name="comments" value="<?php echo $comments;?>" id="remarks_po"><br>
				<input type="hidden" name="author_email" value="<?php echo $email; ?>">
				<input type="hidden" name="author_firstname" value="<?php echo $firstname; ?>">
				<input type="hidden" name="author_lastname" value="<?php echo $lastname; ?>">
				<button type="submit" name="edit_inventory_software" value="edit_inventory_software" id="submit" >Submit</button>
              <?php echo form_close() ?>
            </button>
          </div>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>