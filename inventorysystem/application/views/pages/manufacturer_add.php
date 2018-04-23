<title><?php echo $firstname?>: Create User Area</title>
    <h3>Create User</h3>

    <?php echo validation_errors(); ?>
        <?php echo form_open('login/manufacturer_add'); ?>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div id="form_1">
        
                    <label><h2>Create User</h2></label>
  
                        <label>Manufacturer</label>
                            <input type="text" name="manufacturer_name" value="" placeholder="Manufacturer" id="input_1" />

                        <label>Contact No.</label>
                            <input type="text" name="contact_no" value="" placeholder="Contact No." id="input_1"/>

                        <label>Region</label>
                            <input type="text" name="region" value="" placeholder="Region" id="input_1"/>

                        <label>Province</label>
                            <input type="text" name="province" value="" placeholder="Province" id="input_1"/>

                        <label>City</label>
                            <input type="text" name="city" value="" placeholder="City" id="input_1"/>

                        <label>Address</label>  
                            <input type="text" name="address" value="" placeholder="Address" id="input_1"/>

                        <label>Status</label>
                            <div class="form-group">  
                                <select name="status">
                                    <option value="active">active</option>
                                    <option value="not-active">not-active</option>
                                </select>
                            </div>  

                    <center><button type="submit" name="manufacturer_add" value="Manufacturer_add" id="button_1">Add</button></center>

        
                </div>
    <?php echo form_close() ?>


<div class="col-md-4"></div>

