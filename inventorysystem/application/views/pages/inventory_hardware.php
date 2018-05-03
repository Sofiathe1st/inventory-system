<!DOCTYPE html>
<html>
<title>Inventory</title>
	<div id="inv_form">
    <center><h2 id="inv_title">Inventory Hardware</h2></center>
    <a href="<?php echo base_url() ?>index.php/inventory_hardware_add" id="a_add">Add Item</a><br><br>
<?php
              
              echo form_open('login/hardware_search','class="myclass"');
              ?>
        <div class="search-box-wrapper">
            <input type="text" class="search-box-input" name="search_input" placeholder="Search...">
      
            <button type="submit" class="search-box-button" name="hardware_search">Search</button>
      </div>
  </form>

<table>

        <thead>  
    
        <tr>  
            <th style="font-size:14px">Asset Type</th>
            <th style="font-size:14px">Asset Number</th>
            <th style="font-size:14px">Type</th>
            <th style="font-size:14px">Brand</th>
            <th style="font-size:14px">Assigned To</th>
            <th style="font-size:14px">Specifications</th>
            <th style="font-size:14px">Date Purchased</th>
            <th style="font-size:14px">Amount</th>
            <th style="font-size:14px">Status</th>
            <th style="font-size:14px">Comment/Remarks</th>
            <th style="font-size:14px">Options</th>
            

        </tr>
        </thead>
        <tbody>

            <?php

                foreach ($inventory_hardware as $row) { ?>
                    
                 <tr> 
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->asset_type); ?></td> 
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->asset_num); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->type_item); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->brand); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->assigned_to); ?></td>
                    <td style="font-size:14px" width="20%"><?php echo htmlspecialchars($row->specifications); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->date_purchased); ?></td>
                    <td style="font-size:14px">Php <?php echo htmlspecialchars($row->amount); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->status); ?></td>
                    <td style="font-size:14px"><?php echo htmlspecialchars($row->comment); ?></td>

                    <td width="9%"><a href="<?php echo base_url() ?>index.php/login/edit_inventory_hardware_details/<?php echo $row->id ?>" id="edit_inv1" ><font size="2">EDIT</font></a>
                        | <a href="<?php echo base_url() ?>index.php/login/delete_inventory_hardware/?del=<?php echo $row->id ?>" id="del_inv1"><font size="2">DELETE</font></a></td>
                </tr> 
                   

          <?php      

            } ?>
            </tbody>   
    </table>
 <center><?php echo $links; ?></center>


</div>