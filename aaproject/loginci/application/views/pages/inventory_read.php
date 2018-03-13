<title>Inventory</title>
	<h2>Inventory</h2>
	<a href="<?php echo base_url() ?>index.php/inventory" id="a_add">Add Item</a>

<title><?php echo $firstname?>: Read User Area</title>
<body>
    <div class="table-responsive">  
<h3>Users</h3>
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: responsive">  
        <thead>  
    
        <tr>  
            <th><strong>Id</strong></th>
            <th><strong>Manufacturer</strong></th>
            <th><strong>Serial Number</strong></th>
            <th><strong>Purchase Order</strong></th>
            <th><strong>Item Details</strong></th>
            <th><strong>Remarks</strong></th>
            <th><strong>Color</strong></th>
            <th><strong>Item Name With Complete Details</strong></th>
            

        </tr>
        <thead>

            <?php if(is_array($inventory_list)) { 

                foreach ($inventory_list as $row) { ?>
                    
                 <tr>
                    <td><?php echo $row->id;?></td>  
                    <td><?php echo htmlspecialchars($row->manufacturer); ?></td>  
                    <td><?php echo htmlspecialchars($row->serial_number); ?></td>  
                    <td><?php echo htmlspecialchars($row->purchase_order_inv); ?></td>
                    <td><?php echo htmlspecialchars($row->item_details); ?></td>
                    <td><?php echo htmlspecialchars($row->remarks); ?></td>
                    <td><?php echo htmlspecialchars($row->color); ?></td> 
                    <td><?php echo htmlspecialchars($row->item_name_w_details); ?></td>

                </tr> 
                   

          <?php      }

            } ?>    
    </table>
 
 
