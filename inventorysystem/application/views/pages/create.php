<title><?php echo $firstname?>: Create User Area</title>

            	<h3>Create User</h3>
              <?php echo validation_errors(); ?>

<?php echo form_open('login/register'); ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div id="form_1">
<label><h2>Create User</h2></label>
  <label>Firstname</label>
    <input type="text" name="firstname" value="" placeholder="Firstname" id="input_1" />

  <label>Lastname</label>
    <input type="text" name="lastname" value="" placeholder="Lastname" id="input_1"/>

  <label>Middlename</label>
    <input type="text" name="middlename" value="" placeholder="Middlename" id="input_1"/>

                 <div class="form-group">  
                        <select name="type">
                          <option value="SuperAdmin">SuperAdmin</option>
                          <option value="Admin">Admin</option>
                          <option value="User">User</option>
                        </select>
                            </div><br>
                  <div class="form-group">  
                        <select name="department">
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
    <input type="text" name="username" value="" placeholder="Username" id="input_1"/>
  <label>Password</label>
    <input type="password" name="password" value="" placeholder="Password" id="input_1"/>
  <label>Email</label>
    <input type="email" name="email" value="" placeholder="Email" id="input_1"/>
                <input name="dateregistered" type="hidden" id="dateregistered" value="<?php echo date('Y-m-d');?>" readonly="true" />
                <center><button type="submit" name="register" value="Register" id="button_1">Register</button></center>
              </div>
              <?php echo form_close() ?>



        <div class="col-md-4"></div>

