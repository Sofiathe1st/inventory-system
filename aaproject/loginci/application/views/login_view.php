<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login Area</title>

    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">

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

              <center>
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="btn btn-primary" data-dismiss="alert" aria-label="Close">&times;</button>
                    <strong><?php echo validation_errors(); ?></strong>
                  <br>
                </div> 
              </center>
              <?php
              }
              echo form_open('login','class="myclass"');
              ?>
                <h3>Login</h3>
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
               <center><button type="submit" class="btn btn-primary" name="login" value="Login">Login</button></center>
                <!--<a href="<?php echo site_url('login/register') ?>" class="btn btn-link">Sign Up</a>-->
              <?php echo form_close() ?>

            </div>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  </body>
</html>