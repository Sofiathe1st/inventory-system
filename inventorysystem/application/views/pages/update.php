    <title>Update User Data</title>

    <h3 id="read_title"><center>Update User</center></h3>
              <?php
              if(validation_errors()){
              ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
                <strong><?php echo validation_errors(); ?></strong>
              </div>
              <?php
              }
              echo form_open('login/update_user','class="myclass"');
              $id_user             = $result[0]['id'];
              $firstname_user      = $result[0]['firstname'];
              $lastname_user       = $result[0]['lastname'];
              $middlename_user     = $result[0]['middlename'];
              $type_user           = $result[0]['type'];
              $department_user     = $result[0]['department'];
              $username_user       = $result[0]['username'];
              $email_user          = $result[0]['email'];
              $dateregistered_user = $result[0]['dateregistered'];

              ?>
              <div id="form_1">

                <h3>Update User Form</h3>
                <h4><label>ID: <?php echo $id_user;?></label></h4>
                <div class="form-group"> 

            <input type="hidden" id="id" name="id" value="<?php echo $id_user;?>" required>
        </div> 
               <label>Firstname</label>
                  <input type="text" id="input_1" name="firstname" value="<?php echo $firstname_user; ?>" placeholder="Firstname" />

               <label>Lastname</label>
                  <input type="text" id="input_1" name="lastname" value="<?php echo $lastname_user; ?>" placeholder="Lastname" />

               <label>Middlename</label>
                  <input type="text" id="input_1" name="middlename" value="<?php echo $middlename_user; ?>" placeholder="Middlename" />

                 <div class="form-group">  
                        <select name="type">
                          <option value="<?php echo $type_user; ?>"><?php echo $type_user; ?></option>
                          <option value="SuperAdmin">SuperAdmin</option>
                          <option value="Admin">Admin</option>
                          <option value="User">User</option>
                        </select>
                            </div><br>
                  <div class="form-group">  
                        <select name="department">
                          <option value="<?php echo $department_user ?>"><?php echo $department_user ?></option>
                          <option value="CTD-DEPARTMENT">CTD-DEPARTMENT</option>
                          <option value="ITD-DEPARTMENT">ITD-DEPARTMENT</option>
                          <option value="HRD-DEPARTMENT">HRD-DEPARTMENT</option>
                          <option value="BDD-DEPARTMENT">BDD-DEPARTMENT</option>
                          <option value="CSD-DEPARTMENT">CSD-DEPARTMENT</option>
                          <option value="RCD-DEPARTMENT">RCD-DEPARTMENT</option>
                          <option value="BSD-DEPARTMENT">BSD-DEPARTMENT</option>
                          <option value="ACD-DEPARTMENT">ACD-DEPARTMENT</option>
                        </select>
                            </div>  
              <label>Username</label>
                <input type="text" id="input_1" name="username" value="<?php echo $username_user ?>" placeholder="Username" />
              <label>Password</label>
                <input type="password" id="input_1" name="password" value="" placeholder="Password" required />
              <label>Email</label>
                <input type="email" id="input_1" name="email" value="<?php echo $email_user; ?>" placeholder="Email" />
                <input name="dateregistered" type="hidden" id="dateregistered" value="<?php echo date('Y-m-d');?>" />
                <center><button type="submit" name="update" value="Update" id="button_1">Update</button></center>
              <?php echo form_close() ?>
            </button>
          </div>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>
