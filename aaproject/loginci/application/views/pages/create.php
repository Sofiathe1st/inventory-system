<?php 
include ('datetime.php'); 
?>

    <title><?php echo $firstname?>: Create User Area</title>

            	<h3>Create User</h3>
              <?php echo validation_errors(); ?>

<?php echo form_open('login/register'); ?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label><h2>Create User</h2></label>
  <label>Firstname</label>
    <input type="text" name="firstname" value="" placeholder="Firstname" />

  <label>Lastname</label>
    <input type="text" name="lastname" value="" placeholder="Lastname" />

  <label>Middlename</label>
    <input type="text" name="middlename" value="" placeholder="Middlename"/>

                 <div class="form-group">  
                        <select name="type">
                          <option value="Super-Admin">Super-Admin</option>
                          <option value="Admin">Admin</option>
                          <option value="User">User</option>
                        </select>
                            </div><br>
                  <div class="form-group">  
                        <select name="department">
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
                <center><button type="submit" name="register" value="Register">Register</button></center>
              <?php echo form_close() ?>



        <div class="col-md-4"></div>

