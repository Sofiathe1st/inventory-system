<html>
<title>Purchase Orders</title>

<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</head>
	<div id="inv_form">
    <h2 id="inv_title">Purchase Orders</h2> 
    <a href="<?php echo base_url() ?>index.php/purchase_order" id="a_add">Create New Purchase Order</a><br><br>
<table id="table_id" class="display">

        <thead>  
    
        <tr>  
            <th>PO no.</th>
            <th>PO Order Date</th>
            <th>Manufacturer</th>
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
                    <td><?php echo htmlspecialchars($row->remarks); ?></td>
                    <td><a href="<?php echo base_url() ?>index.php/login/editpurchaseorder/?upd=<?php echo $row->id ?>" id="a_upd">Edit</a>
                        | <a href="<?php echo base_url() ?>index.php/login/deletepurchaseorder/?del=<?php echo $row->id ?>" id="a_del">Delete</a></td>
                </tr> 
                   

          <?php      }

            } ?>
            </tbody>   
    </table>
