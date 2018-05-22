<?php 
include ("datetime.php"); 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register Area</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

  </head>
  <body>
    <div class="container"  style="margin-top:100px;">

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">

              <?php
              if(validation_errors()){
              ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><?php echo validation_errors(); ?></strong>
              </div>
              <?php
              }
              echo form_open('login/register','class="myclass"');
              ?>

                <div class="form-group">
                  <?php
                    echo form_label('First Name','firstname');
                    echo form_input('firstname','','class="form-control" id="firstname" placeholder="Firstname"')
                  ?>
                </div>
                 <div class="form-group">
                  <?php
                    echo form_label('Last Name','lastname');
                    echo form_input('lastname','','class="form-control" id="lastname" placeholder="Lastname"')
                  ?>
                </div>
                 <div class="form-group">
                  <?php
                    echo form_label('Middle Name','middlename');
                    echo form_input('middlename','','class="form-control" id="middlename" placeholder="Middlename"')
                  ?>
                </div>
                 <div class="form-group">  
                                  <select name="type">
                        <option value="SuperAdmin">SUPER-ADMIN</option>
                        <option value="Admin">ADMIN</option>
                        <option value="User">USER</option>
                        
                                    </select>
                            </div>
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
                <div class="form-group">
                  <?php
                    echo form_label('Username','username');
                    echo form_input('username','','class="form-control" id="username" placeholder="Username"')
                  ?>
                </div>
                <div class="form-group">
                  <?php
                    echo form_label('Password','password');
                    echo form_password('password','','class="form-control" id="password" placeholder="Password"')
                  ?>
                </div>
                <div class="form-group">
                  <?php
                    echo form_label('Email','email');
                    echo form_input('email','','class="form-control" id="email" placeholder="email"')
                  ?>
                  </div>
                  <input name="dateregistered" type="hidden" id="dateregistered" value="<?php echo $timezone; ?>" />
                <?php echo form_submit('daftar', 'Register', 'class="btn btn-primary"') ?>
                <a href="<?php echo site_url('login') ?>" class="btn btn-link">Sign In</a>
              <?php echo form_close() ?>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>


    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  </body>
</html>