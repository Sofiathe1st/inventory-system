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
               <img src="<?php echo base_url('assets/images/userpicture.png'); ?>" alt="Avatar" style="width:100px">
            </center>
          <a href="#">NAME: <?php echo "$firstname $lastname"; ?></a>
          <a href="#">ID: <?php echo $id; ?></a>
          <a href="#"><?php echo $type; ?></a>
          <a href="#">EMAIL: <?php echo $email; ?></a>
          <a href="#">DEPARTMENT: <?php echo $department; ?></a>
          <a id="logout" name= "logout" href='login'>Logout</a>
      </div>


      <div id="main">
          <ul>
            <li><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></li>
            <li><a class="active" href="home">Home</a></li>
            <li><a class="active" href="create">Create</a></li>
            <li><a class="active" href="read">Read</a></li>
            <li><a class="active" href="update">Update</a></li>
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
   
