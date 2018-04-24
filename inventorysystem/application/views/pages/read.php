<title>Read User Area</title>
<body>
    <div class="table-responsive">  
<h3>Users</h3>
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  <div id="inv_form">
    <table class="table table-bordered table-hover table-striped" style="table-layout: responsive">  
        <thead>  
    
        <tr>  
            <th><strong>Id</strong></th>
            <th><strong>Firstname</strong></th>
            <th><strong>Lastname</strong></th>
            <th><strong>Middlename</strong></th>
            <th><strong>Type</strong></th>
            <th><strong>Department</strong></th>
            <th><strong>Username</strong></th>
            <th><strong>Email</strong></th>
        </tr>
        <thead>

            <?php if(is_array($user_list)) { 

                foreach ($user_list as $row) {
                    
                echo "<tr>
                    <td>". $row->id ."</td>  
                    <td>". htmlspecialchars($row->firstname) ."</td>  
                    <td>". htmlspecialchars($row->lastname) ."</td>  
                    <td>". htmlspecialchars($row->middlename) ."</td>
                    <td>". $row->type ."</td>
                    <td>". $row->department ."</td> 
                    <td>". htmlspecialchars($row->username) ."</td>
                    <td>". htmlspecialchars($row->email) ."</td>
                </tr> 
                ";    

                }

            } ?>    
    </table>
 
 
