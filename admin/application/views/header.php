<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />

	<script src="<?php echo base_url();?>public/ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url();?>public/ckeditor/samples/js/sample.js"></script>
	<link rel="stylesheet" href="<?php echo site_url();?>public/assets/css/pages/extra_pages.css">
	<link rel="shortcut icon" href="<?php echo site_url();?>public/assets/img/favicon.ico" />

	<!-- icons -->
	<link rel="stylesheet" href="<?php echo site_url();?>public/assets/plugins/iconic/css/material-design-iconic-font.min.css">



	<title>Travel-CRM</title>
	<!-- icons -->
	<link href="<?php echo base_url();?>public/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>public/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="<?php echo base_url();?>public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>public/assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- morris chart -->
	<link href="<?php echo base_url();?>public/assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>public/assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/material_style.css">
	<!-- data tables -->
	<link href="<?php echo base_url();?>public/assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
		type="text/css" />
	<!-- animation -->
	<link href="<?php echo base_url();?>public/assets/css/pages/animate_page.css" rel="stylesheet">
	<!-- Template Styles -->
	<link href="<?php echo base_url();?>public/assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo site_url();?>public/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	
	<link href="<?php echo base_url();?>public/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>public/assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>public/assets/img/favicon.ico" />
	
	<link type="text/css" rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans:400,500,700|Google+Sans+Text:400">
	<link type="text/css" rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Google+Sans+Text:400&amp;text=%E2%86%90%E2%86%92%E2%86%91%E2%86%93">
	
	<script>var base_url = ''; </script>

	<link href="<?php echo base_url();?>public/css/select2.css" rel="stylesheet">
	<link href="<?php echo base_url();?>public/css/select2-default.css" rel="stylesheet">





 <link rel="stylesheet" href="<?php echo base_url();?>public/css/style1.css">
	<style id="cke_ui_color" type="text/css"></style>

</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top" style="background-color:#d9a927 !important;">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index.html">
						<!-- <span class="logo-default"><img src="<?php echo base_url();?>public/image/logo.png" style="width: 225px;margin-left: -23px !important;margin-top: -8px !important;background:white !important;"/></span> </a> -->
						<span class="logo-default"><img src="<?php echo base_url();?>public/image/logo.png" style="width: 230px;"/></span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." name="query">
						<span class="input-group-btn search-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
							
				</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<?php  $a = $this->session->userdata('reg_type'); 
				$access_stocks = $this->session->userdata('access_stocks');
				$stock_logged_in = $this->session->userdata('stock_logged_in');

				//print_r($a);die();
				if($access_stocks && !isset($stock_logged_in)){
				?>
				<a href="javascript:;" class="dropdown-toggle" data-toggle="modal" data-target="#exampleModal10">
								<img alt="" class="img-circle " style="width:40px;margin-top:10px;margin-left: 40%;"src="<?php echo base_url();?>public/assets/img/stock.png" />
						
							</a>
							<?php } ?>	
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<img alt="" class="img-circle " src="<?php echo base_url();?>public/assets/img/dp.jpg" />
								<span class="username username-hide-on-mobile"> <?php echo $this->session->userdata('admin_username');?> </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default animated jello">
								<li>
									<a href="user_profile.html">
										<i class="icon-user"></i> Profile </a>
								</li>
								
								<li>
									<a href="<?php echo site_url();?>login/logout">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
											</ul>
				</div>
			</div>

		</div>

		<div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
			  
				<!-- <div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel"></h5>

				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
					<div class="card bg-dark text-white" style="border-radius: 1rem;">
						<div class="card-body p-5 text-center">
							<div class="">
			  
								<h2 class="fw-bold mb-2 text-uppercase">Login</h2>
								<p class="text-white-50 mb-5">Please enter your Credentials for loggin into Stocks!</p>
				           <form  action="<?php echo site_url();?>login/loginstock" method="post" >
								<div class="form-outline form-white mb-4">
									<label class="form-label" for="typeEmailX">Username</label>

								  <input type="text" class="form-control form-control-lg" name="username"/>
								</div>
				  
								<div class="form-outline form-white mb-4">
									<label class="form-label" for="typePasswordX">Password</label>

								  <input type="password" id="typePasswordX" class="form-control form-control-lg" name="pass" />
								</div>
				  
								<p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
				  
				
                         <button href="index.html" class="login100-form-btn">
							Login
						</button>
							  </div>
				  
				</form>
						 
						</div>
					  </div>
				</div>
				<div class="modal-footer">
				</div> -->

				<div class="wrap-login100" style="border-radius: inherit;">
				<form  action="<?php echo site_url();?>login/loginstock" method="post" >
					<!-- <span class="login100-form-logo">
						<i class="zmdi zmdi-flower"></i>
						
					</span> -->
					<img src="<?php echo site_url();?>/public/image/proposalLogo.png" style="width: 50%;align-items: center;margin-left: 20%;">
					<span class="login100-form-title p-b-30 p-t-27">
						<p style="color: red;"></p>
						Log in
					</span>
					<p class="text-white-50 mb-5">Please enter your Credentials for loggin into Stocks!</p>

					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<!-- <input type="text" value="" class="form-control form-control-lg input100" name="username"/> -->
						<input value="" class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder=""></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input value="" class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder=""></span>
					</div>
					<!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->

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
		  </div>
		<!-- end header -->
