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
            <label>ID</label><input type="text" id="id" name="id" value="<?php echo $id;?>" required>
        </div> 
               <label>Firstname</label>
                  <input type="text" name="firstname" value="<?php echo $firstname;?>" placeholder="Firstname" />

               <label>Lastname</label>
                  <input type="text" name="lastname" value="<?php echo $lastname;?>" placeholder="Lastname" />

               <label>Middlename</label>
                  <input type="text" name="middlename" value="<?php echo $middlename;?>" placeholder="Middlename" />

                 <div class="form-group">  
                        <select name="type">
                          <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                          <option value="Super-Admin">Super-Admin</option>
                          <option value="Admin">Admin</option>
                          <option value="User">User</option>
                        </select>
                            </div><br>
                  <div class="form-group">  
                        <select name="department">
                          <option value="<?php echo $department; ?>"><?php echo $department; ?></option>
                          <option value="CT-DEPARTMENT">CT-DEPARTMENT</option>
                          <option value="IT-DEPARTMENT">IT-DEPARTMENT</option>
                          <option value="HR-DEPARTMENT">HR-DEPARTMENT</option>
                          <option value="BD-DEPARTMENT">BD-DEPARTMENT</option>
                          <option value="CS-DEPARTMENT">CS-DEPARTMENT</option>
                          <option value="RC-DEPARTMENT">RC-DEPARTMENT</option>
                          <option value="BS-DEPARTMENT">BS-DEPARTMENT</option>
                          <option value="AA-DEPARTMENT">AA-DEPARTMENT</option>
                        </select>
                            </div>  
              <label>Username</label>
                <input type="text" name="username" value="<?php echo $username;?>" placeholder="Username" />
              <label>Password</label>
                <input type="password" name="password" value="" placeholder="Password" required />
              <label>Email</label>
                <input type="email" name="email" value="<?php echo $email;?>" placeholder="Email" />
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
