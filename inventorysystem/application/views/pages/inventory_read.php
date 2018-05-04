<title>Inventory</title>
	<div id="inv_form">
    <h2 id="inv_title">Inventory</h2>
<body>
    <div class="table-responsive">  
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: responsive">  
        <thead>  
    
        <tr>  
            <th><strong>PO #</strong></th>
            <th><strong>PO Date</strong></th>
            <th><strong>Asset Type</strong></th>
            <th><strong>Serial Number</strong></th>
            <th><strong>Name/Model</strong></th>
            <th><strong>Manufacturer</strong></th>
            <th><strong>Quantity</strong></th>
            <th><strong>Assigned To</strong></th>
            <th><strong>Specifications</strong></th>
            <th><strong>Category</strong></th>
            <th><strong>Price</strong></th>
            <th><strong>Status</strong></th>
            <th><strong>Color</strong></th>
            <th><strong>Remarks</strong></th>
            

        </tr>
        <thead>

            <?php if(is_array($inventory_list)) { 

                foreach ($inventory_list as $row) { ?>
                    
                 <tr>
                    <td><?php echo ($row->purchase_order_no); ?></td>
                    <td><?php echo ($row->purchase_order_date); ?></td>
                    <td><?php echo ($row->asset_type); ?></td>
                    <td><?php echo htmlspecialchars($row->serial_number); ?></td>
                    <td><?php echo ($row->name_sh); ?></td>
                    <td><?php echo ($row->manufacturer); ?></td> 
                    <td><?php echo htmlspecialchars($row->quantity); ?></td>
                    <td><?php echo ($row->assigned_to); ?></td>
                    <td><?php echo ($row->specifications); ?></td>
                    <td><?php echo ($row->category); ?></td>       
                    <td><?php echo htmlspecialchars($row->price); ?>
                    </td><td><?php echo ($row->status); ?></td>
                    <td><?php echo htmlspecialchars($row->color); ?></td>
                    <td><?php echo ($row->remarks); ?></td>

                </tr> 
                   

          <?php      }

            } ?>   
    </table>
</div>
</div>
</div>


 
 
