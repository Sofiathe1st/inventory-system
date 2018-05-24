    <title>Edit Supplier Data</title>

    <h3 id="read_title"><center>Edit Supplier</center></h3>
              <?php
              if(validation_errors()){
              ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                <strong><?php echo validation_errors(); ?></strong>
              </div>
              <?php
              }
              echo form_open('login/edit_supplier','class="myclass"');
              $id_supplier          = $result[0]['id'];
              $supplier_name      	= $result[0]['supplier_name'];
              $contact_no_supplier  = $result[0]['contact_no'];
              $region_supplier     	= $result[0]['region'];
              $province_supplier    = $result[0]['province'];
              $city_supplier     	= $result[0]['city'];
              $address_supplier     = $result[0]['address'];
              $status_supplier     = $result[0]['status'];

              ?>
              <div id="form_1">

                <h3>Edit Supplier Form</h3>
                <h4><label>ID: <?php echo $id_supplier;?></label></h4>
                <div class="form-group"> 

            <input type="hidden" id="id" name="id" value="<?php echo $id_supplier;?>" required>
        </div> 
               <label>Supplier</label>
                  <input type="text" id="input_1" name="supplier_name" value="<?php echo $supplier_name; ?>" placeholder="Supplier" />

               <label>contact no</label>
                  <input type="text" id="input_1" name="contact_no" value="<?php echo $contact_no_supplier; ?>" placeholder="Lastname" />

               <label>region</label>
                  <input type="text" id="input_1" name="region" value="<?php echo $region_supplier; ?>" placeholder="Middlename" />

               <label>province</label>
                  <input type="text" id="input_1" name="province" value="<?php echo $province_supplier; ?>" placeholder="Middlename" />

               <label>city</label>
                  <input type="text" id="input_1" name="city" value="<?php echo $city_supplier; ?>" placeholder="Middlename" />
               <label>address</label>
                  <input type="text" id="input_1" name="address" value="<?php echo $address_supplier; ?>" placeholder="Middlename" />

                 <div class="form-group">  
                        <select name="status">
                          <option value="<?php echo $status_supplier; ?>"><?php echo $status_supplier; ?></option>
                          <option value="active">active</option>
                          <option value="not-active">not-active</option>
                        </select>
                            </div><br>
 
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
