    <title><?php echo $firstname?>: Update User Area</title>

    <h3>Update User</h3>
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
              $manufacturer_purchase_order= $result[0]['manufacturer'];
              $remarks_purchase_order     = $result[0]['remarks'];
              $author_email    	          = $result[0]['author_email'];
              $author_firstname           = $result[0]['author_firstname'];
              $author_lastname            = $result[0]['author_lastname'];

              ?>
              <div id="form_1">

                <h3>Update User Form</h3>
                <h4><label>ID: <?php echo $id_purchase_order;?></label></h4>
                <div class="form-group"> 

            <input type="hidden" id="id" name="id" value="<?php echo $id_purchase_order;?>" required>
        </div> 
               <label>Purchase Order No</label>
                  <input type="text" id="input_1" name="purchase_order_no" value="<?php echo $purchase_order_no; ?>" placeholder="Manufacturer" readonly="true" />

               <label>Purchase Order Date</label>
                  <input type="text" id="input_1" name="purchase_order_date" value="<?php echo $purchase_order_date; ?>" placeholder="Lastname" readonly="true" />

               <label>Manufacturer:</label>
          <select name="manufacturer" id="manufacturer">
             <option value="<?php echo "$manufacturer_purchase_order"?>"><?php echo "$manufacturer_purchase_order"?></option>
                        <?php
                            foreach ($manufacturer as $res) {
                                echo "<option value='$res->manufacturer_name'>$res->manufacturer_name</option>";
                            }
                        ?>
          </select><br>

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
