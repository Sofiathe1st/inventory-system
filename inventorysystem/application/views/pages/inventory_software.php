<!DOCTYPE html>
<html>
<title>Inventory</title>
	<div id="inv_form">
    <center><h2 id="inv_title">Inventory Software</h2></center>
    <a href="<?php echo base_url() ?>index.php/inventory_software_add" id="a_add">Add Items</a><br><br>
<table>

        <thead>  
    
        <tr>  
            <th style="font-size:14px">Asset Type</th>
            <th style="font-size:14px">Software Name</th>
            <th style="font-size:14px">Software Info</th>
            <th style="font-size:14px">Assigned To</th>
            <th style="font-size:14px">Quantity</th>
            <th style="font-size:14px">Date Purchased</th>
            <th style="font-size:14px">Amount</th>
            <th style="font-size:14px">Status</th>
            <th style="font-size:14px">Comments/Remarks</th>
            <th style="font-size:14px">Options</th>
            

        </tr>
        </thead>
        <tbody>

            <?php if(is_array($inventory_software_list)) { 

                foreach ($inventory_software_list as $row) { ?>
                    
                 <tr> 
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->asset_type); ?></td> 
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->software_name); ?></td>
                    <td style="font-size:14px" width="20%"><?php echo htmlspecialchars($row->software_info); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->assigned_to); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->quantity); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->date_purchased); ?></td>
                    <td style="font-size:14px">Php <?php echo htmlspecialchars($row->amount); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->status); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->comments); ?></td>

                    <td width="9%"><a href="<?php echo base_url() ?>index.php/login/edit_inventory_software_details/<?php echo $row->id ?>" id="edit_inv1" ><font size="2">EDIT</font></a>
                        | <a href="<?php echo base_url() ?>index.php/login/delete_inventory_software/?del=<?php echo $row->id ?>" id="del_inv1"><font size="2">DELETE</font></a></td>
                </tr> 
                   

          <?php      }

            } ?>
            </tbody>   
    </table>



</div>