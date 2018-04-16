<title>Inventory</title>
	<div id="inv_form">
    <h2 id="inv_title">Inventory</h2>
<body>
    <div class="table-responsive">  
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: responsive">  
        <thead>  
    
        <tr>  
            <th><strong>Purchase Order No.</strong></th>
            <th><strong>Serial Number</strong></th>
            <th><strong>Manufacturer</strong></th>
            <th><strong>Quantity</strong></th>
            <th><strong>Category</strong></th>
            <th><strong>Amount</strong></th>
            <th><strong>Remarks</strong></th>
            

        </tr>
        <thead>

            <?php if(is_array($inventory_list)) { 

                foreach ($inventory_list as $row) { ?>
                    
                 <tr>
                    <td><?php echo ($row->purchase_order_no); ?></td> 
                    <td><?php echo htmlspecialchars($row->serial_number); ?></td> 
                    <td><?php echo ($row->manufacturer); ?></td> 
                    <td><?php echo htmlspecialchars($row->quantity); ?></td>
                    <td><?php echo ($row->category); ?></td>
                    <td><?php echo htmlspecialchars($row->amount); ?></td>
                    <td><?php echo ($row->remarks); ?></td>
                    <!--<td><a href="<?php echo base_url() ?>index.php/login/inventory/<?php echo $row->serial_number ?>" id="a_upd">Add Details</a></td>-->

                </tr> 
                   

          <?php      }

            } ?>   
    </table>
</div>
</div>
</div>


 
 
