<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Login | Vertigo Agriculture Private Limited</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/admin/login/images/icons/favicon.png">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/login/vendor/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/login/fonts/iconic/css/material-design-iconic-font.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/login/vendor/animate/animate.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/login/vendor/css-hamburgers/hamburgers.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/login/vendor/animsition/css/animsition.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/login/vendor/select2/select2.min.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/login/vendor/daterangepicker/daterangepicker.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/login/css/util.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/login/css/main.css">
      <meta name="robots" content="noindex, follow">
   </head>
   <body>
      <div class="container-login100" style="background-image: url('<?php echo base_url()?>assets/admin/login/images/bg-01.jpg');">
         <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
            <form class="login100-form validate-form" action="<?php echo base_url();?>admin/login/loginMe" method="post" autocomplete="off" novalidate >
               <span class="login100-form-title p-b-37">
               <img src="<?php echo base_url()?>assets/admin/login/images/logo-light.png" alt="Vertigo Agriculture Pvt Ltd" title="Vertigo Agriculture Pvt Ltd" class="img-fluid">
               </span>
               <?php $this->load->helper('form'); ?>
               <div class="row">
                  <div class="col-md-12">
                     <?php echo validation_errors('<div class="alert alert-danger alert-dismissible fade show " role="alert" >', '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'); ?>
                  </div>
               </div>
               <?php
                  $this->load->helper('form');
                  $error = $this->session->flashdata('error');
                  if($error)
                  {
                      ?>
               <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <?php echo $error; ?> 
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               <?php }
                  $success = $this->session->flashdata('success');
                  if($success)
                  {
                      ?>
               <div class="alert alert-success  alert-dismissible fade show" role="alert">
                  <?php echo $success; ?> 
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
               <?php } ?>
               <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                  <input type="email" name="email" required  class="input100" parsley-type="email" required  id="email" placeholder="Enter your email" autocomplete="off" value="<?php echo set_value('email',$this->session->userdata('login_email'));?>">
                  <span class="focus-input100"></span>
               </div>
               <div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
                  <input type="password" class="input100" required placeholder="Enter your password" name="password" id="password" aria-label="Password" aria-describedby="password-addon" autocomplete="off" value="<?php echo set_value('password',$this->session->userdata('login_password'));?>">
                  <span class="focus-input100"></span>
               </div>
               <div class="container-login100-form-btn">
                  <button class="login100-form-btn" type="submit">
                  Sign In
                  </button>
               </div>
               <div class="text-center p-t-57 p-b-20">
                  <span class="txt1">
                  Designed and Developed By
                  </span>
               </div>
               <div class="flex-c">
                  <a href="https://megatasktechnologies.com/" class="login100-social-item">
                  <img src="<?php echo base_url()?>assets/admin/login/images/icons/icon-google.png" alt="Megatask Technologies Pvt Ltd" title="Megatask Technologies Pvt Ltd">
                  </a>
               </div>
            </form>
         </div>
      </div>
      <div id="dropDownSelect1"></div>
      <script src="<?php echo base_url()?>assets/admin/login/vendor/jquery/jquery-3.2.1.min.js"></script>
      <script src="<?php echo base_url()?>assets/admin/login/vendor/animsition/js/animsition.min.js"></script>
      <script src="<?php echo base_url()?>assets/admin/login/vendor/bootstrap/js/popper.js"></script>
      <script src="<?php echo base_url()?>assets/admin/login/vendor/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url()?>assets/admin/login/vendor/select2/select2.min.js"></script>
      <script src="<?php echo base_url()?>assets/admin/login/vendor/daterangepicker/moment.min.js"></script>
      <script src="<?php echo base_url()?>assets/admin/login/vendor/daterangepicker/daterangepicker.js"></script>
      <script src="<?php echo base_url()?>assets/admin/login/vendor/countdowntime/countdowntime.js"></script>
      <script src="<?php echo base_url()?>assets/admin/login/js/main.js"></script>
      <script type="text/javascript">
         function password_toggle(inputpass,togglepass)
         {
           const togglePassword = document.querySelector('#'+togglepass);
           const password = document.querySelector('#'+inputpass);
           // toggle the type attribute
           const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
           password.setAttribute('type', type);
           // toggle the eye slash icon
           togglePassword.classList.toggle('fa-eye-slash');
         }
         $(document).ready(function(){
           $(".custom-validation").parsley()
         });
      </script>
   </body>
</html>