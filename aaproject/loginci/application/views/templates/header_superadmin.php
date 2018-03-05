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
            <a href="#">NAME: <?php echo "$firstname $lastname"; ?></a>
            <!--<a href="#">ID: <?php echo $id; ?></a>
            <a href="#"><?php echo $type; ?></a>
            <a href="#">EMAIL: <?php echo $email; ?></a>
            <a href="#">DEPARTMENT: <?php echo $department; ?></a>-->
            <a id="logout" name= "logout" href='home/logout'>Logout</a>
      </div>



      <div id="main">
          <ul>
            <li><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></li>
            <li><a class="active" href="home">Home</a></li>
              <div class="dropdown" id="title">
            <li><a class="dropbtn">Users<i class="fa fa-caret-down"></i></a></li>
      <div class="dropdown-content" id="content">
            <a href="create">Create</a>
            <a href="read">Read</a>
            <a href="update">Update</a>
            <a href="delete">Delete</a>
      </div>
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
