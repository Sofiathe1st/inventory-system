<!DOCTYPE html>
<html>
  <head>
      <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">


  </head>
    <body>
      <div id="mySidenav" class="sidenav">
        <b href="javascript:void(0)" class="closebtn" style="cursor:pointer" onclick="closeNav()">&times;</b>
          <center>
            <a href="profileimage">
              <img alt="Avatar" src="<?php echo base_url('assets/images/userpicture.png'); ?>" style="width:100px">
            </a>
          </center>
            <a href="#">NAME: <?php echo htmlspecialchars("$firstname $lastname"); ?></a>
            <a id="logout" name= "logout" href='<?php echo base_url() ?>index.php/home/logout'>Logout</a>
      </div>



      <div id="main">
          <ul>
            <li><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></li>
            <li><a class="active" href="<?php echo base_url() ?>index.php/home">Home</a></li>
            <li><a class="active" href="<?php echo base_url() ?>index.php/read">Users</a></li>
            <!-- <li><a class="active" href="<?php echo base_url() ?>index.php/manufacturer">Manufacturers</a></li>
            <li><a class="active" href="<?php echo base_url() ?>index.php/purchase_order_view">Purchase Orders</a></li>
            <li><a class="active" href="<?php echo base_url() ?>index.php/purchase_order_search">Po search</a></li>
            <li><a class="active" href="<?php echo base_url() ?>index.php/inventory_read">Inventory</a></li> -->
            <li><a class="active" href="<?php echo base_url() ?>index.php/inventory_hardware">Inventory Hardware</a></li>
            <li><a class="active" href="<?php echo base_url() ?>index.php/inventory_software">Inventory Software</a></li>

          </ul>


      <script>
      function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
      }
      </script>
     
<br>
<br>
