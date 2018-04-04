<title>Inventory</title>
	<div id="inv_form">
    <h2 id="inv_title">Inventory</h2>
<body>
    <div class="table-responsive">  
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: responsive">  
        <thead>  
    
        <tr>  
            <th><strong>Serial Number</strong></th>
            <th><strong>Manufacturer</strong></th>
            <th><strong>Purchase Order No.</strong></th>
            <th><strong>Remarks</strong></th>
            <th><strong>Color</strong></th>
            <th><strong>Item With Complete Details</strong></th>
            <!--<th><strong>Add Details</strong></th>-->
            

        </tr>
        <thead>

            <?php if(is_array($inventory_list)) { 

                foreach ($inventory_list as $row) { ?>
                    
                 <tr> 
                    <td><?php echo htmlspecialchars($row->serial_number); ?></td> 
                    <td>-----</td> 
                    <td><?php echo htmlspecialchars($row->purchase_order_no); ?></td>
                    <td>-----</td>
                    <td><?php echo htmlspecialchars($row->color); ?></td>
                    <td>-----</td>
                    <!--<td><a href="<?php echo base_url() ?>index.php/login/inventory/<?php echo $row->serial_number ?>" id="a_upd">Add Details</a></td>-->

                </tr> 
                   

          <?php      }

            } ?>   
    </table>
</div>
</div>
</div>


 
 
