<title>Inventory</title>
	<div id="inv_form">
    <h2 id="inv_title">Inventory</h2>
<body>
    <div class="table-responsive">  
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  <?php
              
              echo form_open('login/inventory_search','class="myclass"');
              ?>
        <div class="form-group">
            <input type="text" class="form-control" name="search_input" id="search" placeholder="Search...">
  
            <button type="submit" class="btn btn-info" name="inventory_search">Search</button>      
        </div><br>  

    <table class="table table-bordered table-hover table-striped" style="table-layout: responsive">  

        <thead>  
    
        <tr>  
            <th style="font-size:14px"><strong>PO #</strong></th>
            <th style="font-size:14px"><strong>PO Date</strong></th>
            <th style="font-size:14px"><strong>Category</strong></th>
            <th style="font-size:14px"><strong>Serial Number</strong></th>
            <th style="font-size:14px"><strong>Name/Model</strong></th>
            <th style="font-size:14px"><strong>Manufacturer</strong></th>
            <th style="font-size:14px"><strong>Quantity</strong></th>
            <th style="font-size:14px"><strong>Assigned To</strong></th>
            <th style="font-size:14px"><strong>Specifications</strong></th>
            <th style="font-size:14px"><strong>Item Type</strong></th>
            <th style="font-size:14px"><strong>Price</strong></th>
            <th style="font-size:14px"><strong>Supplier</strong></th>
            <th style="font-size:14px"><strong>Status</strong></th>
            <th style="font-size:14px"><strong>Color</strong></th>
            <th style="font-size:14px"><strong>Remarks</strong></th>
            

        </tr>
        <thead>

            <?php

                foreach ($inventory_read as $row) { ?>
                    
                 <tr>
                    <td style="font-size:14px"><?php echo ($row->purchase_order_no); ?></td>
                    <td style="font-size:14px"><?php echo ($row->purchase_order_date); ?></td>
                    <td style="font-size:14px"><?php echo ($row->category); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->serial_number); ?></td>
                    <td style="font-size:14px"><?php echo ($row->name_sh); ?></td>
                    <td style="font-size:14px"><?php echo ($row->manufacturer); ?></td> 
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->quantity); ?></td>
                    <td style="font-size:14px"><?php echo ($row->assigned_to); ?></td>
                    <td style="font-size:14px"><?php echo ($row->specifications); ?></td>
                    <td style="font-size:14px"><?php echo ($row->item_type); ?></td>       
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->price); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->supplier); ?></td>
                    <td style="font-size:14px"><?php echo ($row->status); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->color); ?></td>
                    <td style="font-size:14px"><?php echo ($row->remarks); ?></td>

                </tr> 
                   

          <?php      

            } ?>   
    </table>
    <center><?php echo $links; ?></center>
</div>
</div>
</div>


 
 
