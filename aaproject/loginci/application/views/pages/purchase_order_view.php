<link rel="stylesheet" href="http://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="http://cdn.datatables.net/1.10.11/jquery.dataTables.min.js"></script>
<script>
    $(document) .ready(function()){
        $('#example').DataTable();

    });
</script>
<title>Purchase Orders</title>
	<div id="inv_form">
    <h2 id="inv_title">Purchase Orders</h2> 
    <a href="<?php echo base_url() ?>index.php/purchase_order" id="a_add">Create New Purchase Order</a>
<body>
    <div class="table-responsive">  
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  <div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">

    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example"> 
        <thead>  
    
        <tr>  
            <th><strong>PO no.</strong></th>
            <th><strong>PO Order Date</strong></th>
            <th><strong>Manufacturer</strong></th>
            <th><strong>Remarks</strong></th>
            <th><strong>Options</strong></th>
            <!--<th><strong>Add Details</strong></th>-->
            

        </tr>
        </thead>

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
