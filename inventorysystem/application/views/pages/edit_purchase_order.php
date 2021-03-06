    <title>Edit Purchase Order</title>

    <h3>Update Purchase Order</h3>
              <?php
              if(validation_errors()){
              ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                <strong><?php echo validation_errors(); ?></strong>
              </div>
              <?php
              }
              echo form_open('login/edit_purchase_order','class="myclass"');
              $id_purchase_order          = $result[0]['id'];
              $purchase_order_no          = $result[0]['purchase_order_no'];
              $purchase_order_date        = $result[0]['purchase_order_date'];
              $supplier_purchase_order     = $result[0]['supplier'];
              $remarks_purchase_order     = $result[0]['remarks'];
              $author_email    	          = $result[0]['author_email'];
              $author_firstname           = $result[0]['author_firstname'];
              $author_lastname            = $result[0]['author_lastname'];
              $item_type               = $result[0]['item_type'];
              $category                   = $result[0]['category'];
              $price                      = $result[0]['price'];
              $quantity                   = $result[0]['quantity'];

              ?>
              <div id="form_1">

                <h3>Update Purchase Order Form</h3>
                <h4><label>ID: <?php echo $id_purchase_order;?></label></h4>
                <div class="form-group"> 

            <input type="hidden" id="id" name="id" value="<?php echo $id_purchase_order;?>" required>
        </div> 
               <label>Purchase Order No</label>
                  <input type="text" id="input_1" name="purchase_order_no" value="<?php echo $purchase_order_no; ?>" placeholder="Manufacturer" readonly="true" />

               <label>Purchase Order Date</label>
                  <input type="text" id="input_1" name="purchase_order_date" value="<?php echo $purchase_order_date; ?>" placeholder="Lastname" readonly="true" />
                <label>Category:</label>

        <select name="category" id="category">
            <option value="<?php echo $category?>"><?php echo $category?></option>
            <option value="Hardware">Hardware</option>
            <option value="Software">Software</option>
            <option value="Other">Other</option>
        </select><br>

               <label>Supplier:</label>
          <select name="supplier" id="manufacturer">
             <option value="<?php echo $supplier_purchase_order?>"><?php echo $supplier_purchase_order?></option>
                        <?php
                            foreach ($supplier as $res) {
                                echo "<option value='$res->supplier_name'>$res->supplier_name</option>";
                            }
                        ?>
          </select><br>
          <label>Quantity:</label>
            <input type="text" name="quantity" value="<?php echo $quantity?>" id="quantity" /><br>
        <label>Item Type:</label>
          <input type="text" name="item_type" value="<?php echo $item_type?>" id="quantity" /><br>

          <label>Price</label>
            <input type="text" name="price" value="<?php echo $price?>" id="amount" /><br>

               <label>Remarks</label>
                  <input type="text" id="input_1" name="remarks" value="<?php echo $remarks_purchase_order; ?>" placeholder="remarks" />

             <input type="hidden" name="author_email" value="<?php echo $email; ?>">
        <input type="hidden" name="author_firstname" value="<?php echo $firstname; ?>">
        <input type="hidden" name="author_lastname" value="<?php echo $lastname; ?>">
 
                <center><button type="submit" name="submit" value="submit" id="button_1">Submit</button></center>
              <?php echo form_close() ?>
            </button>
          </div>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>
