<?php 
include ('datetime.php'); 
?>
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
              echo form_open('login/update','class="myclass"');
              ?>
                <h3>Update User Form</h3>
                <div class="form-group">  
            ID<input type="text" id="id" name="id" value="" placeholder="Id" required>
        </div> 
               <label>Firstname</label>
                  <input type="text" name="firstname" value="" placeholder="Firstname" onkeypress="return isLetterKey(event)"/>

               <label>Lastname</label>
                  <input type="text" name="lastname" value="" placeholder="Lastname" onkeypress="return isLetterKey(event)"/>

               <label>Middlename</label>
                  <input type="text" name="middlename" value="" placeholder="Middlename" onkeypress="return isLetterKey(event)"/>

                 <div class="form-group">  
                        <select name="type">
                          <option value="SuperAdmin">SUPER-ADMIN</option>
                          <option value="Admin">ADMIN</option>
                          <option value="User">USER</option>
                        </select>
                            </div><br>
                  <div class="form-group">  
                        <select name="department">
                          <option value="CTD">CT-DEPARTMENT</option>
                          <option value="ITD">IT-DEPARTMENT</option>
                          <option value="HRD">HR-DEAPRTMENT</option>
                          <option value="BDD">BD-DEPARTMENT</option>
                          <option value="CSD">CS-DEPARTMENT</option>
                          <option value="RCD">RC-DEPARTMENT</option>
                          <option value="BSD">BS-DEPARTMENT</option>
                          <option value="AAD">AA-DEPARTMENT</option>
                        </select>
                            </div>  
              <label>Username</label>
                <input type="text" name="username" value="" placeholder="Username" />
              <label>Password</label>
                <input type="password" name="password" value="" placeholder="Password" />
              <label>Email</label>
                <input type="email" name="email" value="" placeholder="Email" />
                  <!--<div> 
                    <img height="100" width="100" id="profile" src="<?php echo base_url('assets/images/userpicture.png'); ?>" alt="profile-image" />

                    <input id="image" type="file" name="image" placeholder="Photo" required="" capture>
                   </div>
                    <br>
                      <br>-->
                 <input name="dateregistered" type="hidden" id="dateregistered" value="<?php echo $timezone; ?>" />
                <center><button type="submit" name="update" value="Update">Update</button></center>
                <!--<a href="<?php echo site_url('login') ?>" class="btn btn-link">Sign In</a>-->
              <?php echo form_close() ?>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>
