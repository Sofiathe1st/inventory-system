<!DOCTYPE html>
<html>
<title>Purchase Orders</title>
	<div id="inv_form">
    <h2 id="inv_title">Purchase Orders</h2> 
    <a href="<?php echo base_url() ?>index.php/purchase_order" id="a_add">Create New Purchase Order</a><br><br>
<table>

        <thead>  
    
        <tr>  
            <th>PO no.</th>
            <th>PO Order Date</th>
            <th>Manufacturer</th>
            <th>Quantity</th>
            <th>Remarks</th>
            <th>Options</th>
            

        </tr>
        </thead>
        <tbody>

            <?php if(is_array($purchase_order_list)) { 

                foreach ($purchase_order_list as $row) { ?>
                    
                 <tr> 
                    <td><?php echo htmlspecialchars($row->purchase_order_no); ?></td> 
                    <td><?php echo htmlspecialchars($row->purchase_order_date); ?></td>
                    <td><?php echo htmlspecialchars($row->manufacturer); ?></td>
                    <td><?php echo htmlspecialchars($row->quantity); ?></td>
                    <td><?php echo htmlspecialchars($row->remarks); ?></td>
                    <td><a href="<?php echo base_url() ?>index.php/login/edit_purchase_order_details/<?php echo $row->id ?>" id="a_upd" target="_blank">EDIT</a>
                        | <a href="<?php echo base_url() ?>index.php/login/deletepurchaseorder/?del=<?php echo $row->id ?>" id="a_del">DELETE</a></td>
                </tr> 
                   

          <?php      }

            } ?>
            </tbody>   
    </table>



</div>