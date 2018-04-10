


<title>Manufacturer</title>
<h2 id="inv_title">Manufacturers</h2>
<a href="<?php echo base_url() ?>index.php/manufacturer_add" id="a_add">Add Manufacturer</a>
<body>
    <div class="table-responsive">
<br>
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: responsive">  
        <thead>  
    
        <tr>  
            <th><strong>Id</strong></th>
            <th><strong>Manufacturer</strong></th>
            <th><strong>Contact number</strong></th>
            <th><strong>Region</strong></th>
            <th><strong>Province</strong></th>
            <th><strong>City</strong></th>
            <th><strong>Address</strong></th>
            <th><strong>Status</strong></th>
            <th><strong>Options</strong></th>
        </tr>
        <thead>

            <?php if(is_array($manufacturer_list)) { 

                foreach ($manufacturer_list as $row) { ?>
                    
                 <tr>
                    <td><?php echo $row->id;?></td>  
                    <td><?php echo htmlspecialchars($row->manufacturer_name); ?></td>  
                    <td><?php echo htmlspecialchars($row->contact_no); ?></td>  
                    <td><?php echo htmlspecialchars($row->region); ?></td>
                    <td><?php echo htmlspecialchars($row->province); ?></td>
                    <td><?php echo htmlspecialchars($row->city); ?></td> 
                    <td><?php echo htmlspecialchars($row->address); ?></td>
                    <td><?php echo htmlspecialchars($row->status); ?></td>
                    <td><a href="<?php echo base_url() ?>index.php/login/deletemanufacturer/?del=<?php echo $row->id ?>" id="a_del">DELETE</a>

                </tr> 
                   
<!-- http://localhost/aaproject/loginci/index.php/update?id=1 -->
          <?php      }

            } ?>    
    </table>
 
 
