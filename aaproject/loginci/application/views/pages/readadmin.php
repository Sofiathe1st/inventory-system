<title><?php echo $firstname?>: Read User Area</title>
<body>
    <div class="table-responsive">  
<center><h3 id="read_title" >Users</h3></center>
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: responsive">  
        <thead>  
    
        <tr>  
            <th><strong>Id</strong></th>
            <th><strong>Firstname</strong></th>
            <th><strong>Lastname</strong></th>
            <th><strong>Middlename</strong></th>
            <th><strong>Type</strong></th>
            <th><strong>Department</strong></th>
            <th><strong>Username</strong></th>
            <th><strong>Email</strong></th>
            <th><strong>Update</strong></th>
        </tr>
        <thead>

            <?php if(is_array($user_list)) { 

                foreach ($user_list as $row) { ?>
                    
                 <tr>
                    <td><?php echo $row->id;?></td>  
                    <td><?php echo htmlspecialchars($row->firstname); ?></td>  
                    <td><?php echo htmlspecialchars($row->lastname); ?></td>  
                    <td><?php echo htmlspecialchars($row->middlename); ?></td>
                    <td><?php echo $row->type; ?></td>
                    <td><?php echo $row->department; ?></td> 
                    <td><?php echo htmlspecialchars($row->username); ?></td>
                    <td><?php echo htmlspecialchars($row->email); ?></td>
                    <td><a href="<?php echo base_url() ?>index.php/login/update/<?php echo $row->id ?>" id="a_upd">UPDATE</a></td>

                </tr> 
                   

          <?php      }

            } ?>    
    </table>
 
 
