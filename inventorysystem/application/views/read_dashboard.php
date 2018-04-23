<?php 
if($type == 'User'){
?>
<?php
$this->load->view('templates/header_user');
$this->load->view('pages/readuser');
$this->load->view('templates/footer');
?>
<?php } else { ?>



 
<?php } ?>
<?php 
if($type == 'Admin'){
?>
<?php
$this->load->view('templates/header_admin');
$this->load->view('pages/readadmin');
$this->load->view('templates/footer');
?>
<?php } else { ?>



 
<?php } ?>
<?php 
if($type == 'SuperAdmin'){
?>
<?php
$this->load->view('templates/header_superadmin');
$this->load->view('pages/readsuperadmin');
$this->load->view('templates/footer');
?>
<?php } else { ?>



 
<?php } ?>






