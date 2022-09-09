<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>Travel-CRM</title>
	<!-- icons -->
	<link href="<?php echo site_url();?>public/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo site_url();?>public/assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<!-- bootstrap -->
	<link href="<?php echo site_url();?>public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="<?php echo site_url();?>public/assets/css/pages/extra_pages.css">
	<!-- favicon -->
	<link rel="shortcut icon" href="<?php echo site_url();?>public/assets/img/favicon.ico" />

	<style>

      .error{
       position: absolute;
    font-size: 12px;
    color: red;         
}
</style>
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo site_url();?>login/login" method="post">
					<!-- <span class="login100-form-logo">
						<i class="zmdi zmdi-flower"></i>
						
					</span> -->
					<img src="<?php echo base_url();?>public/image/proposalLogo.png" style="width: 50%;align-items: center;margin-left: 20%;"/>
					<span class="login100-form-title p-b-30 p-t-27">
						<p style="color: red;"><?php if(!empty($status)){echo $status;} ?></p>
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input  value="<?php if(isset($_COOKIE["loginId"])) { echo $_COOKIE["loginId"]; } ?>" class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input  value="<?php if(isset($_COOKIE["loginPass"])) { echo $_COOKIE["loginPass"]; } ?>" class="input100"  type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" <?php if(isset($_COOKIE["loginId"])) { ?> checked <?php } ?> id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button href="index.html" class="login100-form-btn">
							Login
						</button>
					</div>
					<!-- <div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="<?php echo site_url();?>public/assets/plugins/jquery/jquery.min.js"></script>
	<!-- bootstrap -->
	<script src="<?php echo site_url();?>public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo site_url();?>public/assets/js/pages/extra_pages/login.js"></script>
	<!-- end js include path -->
</body>

</html>