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
              echo form_open('login/edit_manufacturer','class="myclass"');
              $id_manufacturer          = $result[0]['id'];
              $manufacturer_name      	= $result[0]['manufacturer_name'];
              $contact_no_manufacturer  = $result[0]['contact_no'];
              $region_manufacturer     	= $result[0]['region'];
              $province_manufacturer    = $result[0]['province'];
              $city_manufacturer     	= $result[0]['city'];
              $address_manufacturer     = $result[0]['address'];
              $status_manufacturer      = $result[0]['status'];

              ?>
              <div id="form_1">

                <h3>Update User Form</h3>
                <h4><label>ID: <?php echo $id_manufacturer;?></label></h4>
                <div class="form-group"> 

            <input type="hidden" id="id" name="id" value="<?php echo $id_manufacturer;?>" required>
        </div> 
               <label>Manufacturer</label>
                  <input type="text" id="input_1" name="manufacturer_name" value="<?php echo $manufacturer_name; ?>" placeholder="Manufacturer" />

               <label>contact no</label>
                  <input type="text" id="input_1" name="contact_no" value="<?php echo $contact_no_manufacturer; ?>" placeholder="Lastname" />

               <label>region</label>
                  <input type="text" id="input_1" name="region" value="<?php echo $region_manufacturer; ?>" placeholder="Middlename" />

               <label>province</label>
                  <input type="text" id="input_1" name="province" value="<?php echo $province_manufacturer; ?>" placeholder="Middlename" />

               <label>city</label>
                  <input type="text" id="input_1" name="city" value="<?php echo $city_manufacturer; ?>" placeholder="Middlename" />
               <label>address</label>
                  <input type="text" id="input_1" name="address" value="<?php echo $address_manufacturer; ?>" placeholder="Middlename" />

                 <div class="form-group">  
                        <select name="status">
                          <option value="<?php echo $status_manufacturer; ?>"><?php echo $status_manufacturer; ?></option>
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
