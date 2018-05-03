<!DOCTYPE html>
<html>
<title>Inventory</title>
	<div id="inv_form">
    <center><h2 id="inv_title">Inventory Software</h2></center>
    <a href="<?php echo base_url() ?>index.php/inventory_software_add" id="a_add">Add Item</a><br><br>

    <?php
              
              echo form_open('login/software_search','class="myclass"');
              ?>
        <div class="form-group">
            <input type="text" class="form-control" name="search_input" id="search" placeholder="Search...">
  
            <button type="submit" class="btn btn-info" name="software_search">Search</button>      
        </div>
    </form>
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

            <?php 

                foreach ($inventory_software as $row) { ?>
                    
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
                   

          <?php      

            } ?>
            </tbody>   
    </table>

 <center><?php echo $links; ?></center>

</div>