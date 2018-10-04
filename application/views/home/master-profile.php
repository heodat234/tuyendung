<?php 
if($this->session->has_userdata('user_admin')) {
?>
<link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/daterangepicker.css">
<link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/mycss.css">
<link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/profile.css">
<link rel="stylesheet" href="<?php echo base_url()?>public/admin/css/bootstrap-multiselect.css">
<script src="<?php echo base_url()?>public/admin/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>public/admin/js/bootstrap-multiselect.js"></script>

      <?php echo isset($temp)? $temp: "" ;?>
        
<script src="<?php echo base_url()?>public/admin/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url()?>public/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>public/admin/js/daterangepicker.js"></script>
<script src="<?php echo base_url()?>public/admin/js/bootstrap-datepicker.min.js"></script>
<?php 
}else{redirect(base_url('login.html'));}
?>