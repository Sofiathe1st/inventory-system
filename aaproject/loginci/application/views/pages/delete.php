    <title><?php echo $firstname?>: Delete User Area</title>

            	<h2>Delete User</h2>
            	<p>Delete User by Inputting ID</p>
              <?php
              if(validation_errors()){
              ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                <strong><?php echo validation_errors(); ?></strong>
              </div>
              <?php
              }
              echo form_open('login/delete','class="myclass"');
              ?>
                <h3>Delete User Form</h3>
                <div class="form-group">  
            <input type="text" id="id" name="id" value="" placeholder="Id" required>
        </div> 


                <center><button type="submit" name="delete" id="delete" value="Delete">Delete</button></center>
              <?php echo form_close() ?>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>
