<?php 
if($type == 'User'){
?>
<?php
$this->load->view('templates/header_user');
$this->load->view('pages/purchase_order_view_user');
$this->load->view('templates/footer');
?>
<?php } else { ?>



 
<?php } ?>
<?php 
if($type == 'Admin'){
?>
<?php
$this->load->view('templates/header_admin');
$this->load->view('pages/purchase_order_view_admin');
$this->load->view('templates/footer');
?>
<?php } else { ?>



 
<?php } ?>
<?php 
if($type == 'SuperAdmin'){
?>
<?php
$this->load->view('templates/header_superadmin');
$this->load->view('pages/purchase_order_view_superadmin');
$this->load->view('templates/footer');
?>
<?php } else { ?>



 
<?php } ?>






