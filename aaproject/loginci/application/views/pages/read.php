<title><?php echo $firstname?>: Read User Area</title>
<body>
    <div class="table-responsive">  
<h3>Users</h3>
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
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

        <tr>
            <td><?php echo $id;  ?></td>  
            <td><?php echo $firstname;  ?></td>  
            <td><?php echo $lastname; ?> </td>  
            <td><?php echo $middlename;  ?></td>
            <td><?php echo $type;  ?></td>
            <td><?php echo $department;  ?></td> 
            <td><?php echo $username;  ?></td>
            <td><?php echo $email; ?></td>
        </tr>     
    
    </table>
 
 
