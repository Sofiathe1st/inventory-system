<!DOCTYPE html>
<html>
<title>Inventory Hardware/Software</title>
	<div id="inv_form">
    <h2 id="inv_title">Inventory Hardware/Software</h2> 
    <a href="<?php echo base_url() ?>index.php/inventory_hs_add" id="a_add">Add Items</a><br><br>
<table>

        <thead>  
    
        <tr>  
            <th>Asset Type</th>
            <th>Asset Number</th>
            <th>Type</th>
            <th>Brand</th>
            <th>Assigned To</th>
            <th>Specifications</th>
            <th>Date Purchased</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Comment/Remarks</th>
            

        </tr>
        </thead>
        <tbody>

            <?php if(is_array($inventory_hs_list)) { 

                foreach ($inventory_hs_list as $row) { ?>
                    
                 <tr> 
                    <td><?php echo htmlspecialchars($row->asset_type); ?></td> 
                    <td><?php echo htmlspecialchars($row->asset_num); ?></td>
                    <td><?php echo htmlspecialchars($row->type); ?></td>
                    <td><?php echo htmlspecialchars($row->brand); ?></td>
                    <td><?php echo htmlspecialchars($row->assigned_to); ?></td>
                    <td><?php echo htmlspecialchars($row->specifications); ?></td>
                    <td><?php echo htmlspecialchars($row->date_purchased); ?></td>
                    <td><?php echo htmlspecialchars($row->amount); ?></td>
                    <td><?php echo htmlspecialchars($row->status); ?></td>
                    <td><?php echo htmlspecialchars($row->comment); ?></td>

                    <!-- <td><a href="<?php echo base_url() ?>index.php/login/edit_purchase_order_details/<?php echo $row->id ?>" id="a_upd" target="_blank">EDIT</a>
                        | <a href="<?php echo base_url() ?>index.php/login/deletepurchaseorder/?del=<?php echo $row->id ?>" id="a_del">DELETE</a></td> -->
                </tr> 
                   

          <?php      }

            } ?>
            </tbody>   
    </table>



</div>