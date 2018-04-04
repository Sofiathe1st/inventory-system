<title>Purchase Orders</title>
	<div id="inv_form">
    <h2 id="inv_title">Purchase Orders</h2>     
    <object align="right">
    <input type="text" id="searchbar" name="searchbar" placeholder="">
    <input type="submit" id="submitsearch" name="submitsearch" value="Search"></object>
<body>
    <div class="table-responsive">  
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: responsive">  
        <thead>  
    
        <tr>  
            <th><strong>PO no.</strong></th>
            <th><strong>PO Order Date</strong></th>
            <th><strong>Manufacturer</strong></th>
            <th><strong>Remarks</strong></th>
            <th><strong>Options</strong></th>
            <!--<th><strong>Add Details</strong></th>-->
            

        </tr>
        <thead>

            <?php if(is_array($purchase_order_list)) { 

                foreach ($purchase_order_list as $row) { ?>
                    
                 <tr> 
                    <td><?php echo htmlspecialchars($row->purchase_order_no); ?></td> 
                    <td><?php echo htmlspecialchars($row->purchase_order_date); ?></td>
                    <td><?php echo htmlspecialchars($row->manufacturer); ?></td>
                    <td><?php echo htmlspecialchars($row->remarks); ?></td>
                    <td><a href="<?php echo base_url() ?>index.php/login/update/<?php echo $row->id ?>" id="a_upd">Edit</a>
                        | <a href="<?php echo base_url() ?>index.php/login/update/<?php echo $row->id ?>" id="a_del">Delete</a></td>
                    <!--<td><a href="<?php echo base_url() ?>index.php/login/inventory/<?php echo $row->serial_number ?>" id="a_upd">Add Details</a></td>-->

                </tr> 
                   

          <?php      }

            } ?>   
    </table>
</div>
</div>
</div>


 
 
