    <title><?php echo $firstname?>: Search Purchase Order</title>

            	<h2 id="read_title">Search Purchase Order No.</h2>
              <div id="form_1">
            	<p>Search Po by inputting po no</p>
              <?php
              if(validation_errors()){
              ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                <strong><?php echo validation_errors(); ?></strong>
              </div>
              <?php
              }
              echo form_open('login/delete2','class="myclass"');
              ?>
                <div class="form-group">  
            <input type="text" id="id" name="purchase_order_no"  placeholder="Po no." value="" required>
        </div> 


                <center><button type="submit" name="submit" id="a_upd" value="submit">Search</button></center>
              <?php echo form_close() ?>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>
