<?php $this->load->view('header');?>
<script src="<?php echo base_url();?>public/assets/js/hotelVoucher.js"></script>

<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<?php $this->load->view('side_bar');?>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Hotel Voucher</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Hotel Voucher</li>

							</ol>
						</div>
					</div>
					<?php  if($this->session->flashdata('error'))
{?><center>
<div class="alert alert-danger" style="font-size: 12px;">
<?php echo $this->session->flashdata('error')?>
</div>
</center>

<?php } ?>
            <?php  if($this->session->flashdata('success'))
{?><center>
<div class="alert alert-success" style="font-size: 12px;">
<?php echo $this->session->flashdata('success');
$this->session->unset_userdata ( 'success' );
?>
</div>
</center>
<?php } ?>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Hotel Voucher</header>
									
								</div>
								<div class="card-body ">
									<div class="row p-b-20">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group">
												<a href="<?php echo site_url();?>HotelVoucher/add_hotel" id="addRow-btn" class="new_btn px-3">
												Add New <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6">
											
										</div>
									</div>
									<div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width"
											id="exampleReport2">
											<!-- id="example4"> -->
											<thead>
												<!-- <tr><th class="center"> SL.NO</th>
													<th class="center">Query ID </th>
													<th class="center">Hotel Name </th>
													<th class="center"> Category </th>
												 	<th class="center"> Property Type </th> 
													<th class="center"> Supplier </th>
													<th class="center"> Location </th>
													<th class="center"> Action </th>
												</tr> -->
												<tr><th class="center"> SL.NO</th>
													<th class="center">Query ID </th>
													<th class="center"> Confirmation Id </th>
													<th class="center">Agent Name </th>
													<th class="center">Guest Name </th>
													<th class="center">Hotel Name </th>
													<th class="center"> Booking Date </th>
												 	<th class="center"> Check In </th> 
													<th class="center"> Check Out </th>
													<th class="center"> Action </th>
												</tr>
											</thead>
											<tbody>
												<!-- ?php print_r($hotels) ?> -->
											<?php if($hotels) : ?>
											<?php foreach ($hotels as $key => $value) : ?>
												<tr class="odd gradeX">
													<td class="center"><?php echo $key + 1 ?></td>
													<td class="center"><?php echo $value->query_id ?></td>
													<td class="center"><?php echo $value->confirmation_id ?></td>
													<td class="center"><?php echo $agent_names[$key] ?></td>
													<td class="center"><?php echo $value->guest_name ?></td>
													<td class="center"><?php echo $value->query_hotel_name ?></td>
													<td class="center"><?php echo $value->query_hotel_booking_date ?></td>
													<td class="center"><?php echo $value->query_check_in ?></td>
													<td class="center"><?php echo $value->query_check_out ?></td>
													<td class="center">
														<!-- <a class="btn btn-tbl-delete btn-xs" href="<?php //echo site_url();?>hotel/delete_hotel/<?php //echo $hotels[$i]->id;?>" onclick="//return confirm('Are you sure to Delete..?')">
															<i class="fa fa-trash-o "></i>
														</a> -->
														<a class="btn btn-tbl-edit btn-xs" href="<?php echo site_url();?>HotelVoucher/editVoucherDetails/<?php echo $value->query_id;?>">
															<i class="fa fa-edit "></i>
														</a>
														<!-- <a id="resend" data-id="<?php echo $value->query_id?>" href="#" onclick="resendmail(this);" class="btn btn-tbl-delete btn-xs"><i class="fa fa-envelope "></i></a> -->
														<a type="button" class="btn btn-tbl-delete btn-xs" onclick="modalEmail('<?php echo $value->query_id?>','<?php echo $agent_emails[$key] ?>')"
														 id="resendBtn" data-id="<?php echo $value->query_id?>" data-bs-toggle="modal" data-bs-target="#sendMail"><i class="fa fa-envelope "></i></a>

													</td>
												</tr>
												
											<?php endforeach; ?>
												<?php endif?>

											<?php
												//}?>
											</tbody>
											<input type="hidden" id="base_url_id" name="base_url" value=<?php echo site_url(); ?>>

										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			<!-- start chat sidebar -->
			<div class="chat-sidebar-container" data-close-on-body-click="false">
				<div class="chat-sidebar">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab">Theme
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-toggle="tab"> Chat
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> Settings
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel"
							id="quick_sidebar_tab_1">
							<div class="slimscroll-style">
								<div class="theme-light-dark">
									<h6>Sidebar Theme</h6>
									<button type="button" data-theme="white"
										class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light
										Sidebar</button>
									<button type="button" data-theme="dark"
										class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark
										Sidebar</button>
								</div>
								<div class="theme-light-dark">
									<h6>Sidebar Color</h6>
									<ul class="list-unstyled">
										<li class="complete">
											<div class="theme-color sidebar-theme">
												<a href="#" data-theme="white"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="dark"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="blue"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="indigo"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="cyan"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="green"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="red"><span class="head"></span><span
														class="cont"></span></a>
											</div>
										</li>
									</ul>
									<h6>Header Brand color</h6>
									<ul class="list-unstyled">
										<li class="theme-option">
											<div class="theme-color logo-theme">
												<a href="#" data-theme="logo-white"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-dark"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-blue"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-indigo"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-cyan"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-green"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="logo-red"><span class="head"></span><span
														class="cont"></span></a>
											</div>
										</li>
									</ul>
									<h6>Header color</h6>
									<ul class="list-unstyled">
										<li class="theme-option">
											<div class="theme-color header-theme">
												<a href="#" data-theme="header-white"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-dark"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-blue"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-indigo"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-cyan"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-green"><span class="head"></span><span
														class="cont"></span></a>
												<a href="#" data-theme="header-red"><span class="head"></span><span
														class="cont"></span></a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Start Doctor Chat -->
						<div class="tab-pane chat-sidebar-chat animated slideInRight" id="quick_sidebar_tab_2">
							<div class="chat-sidebar-list">
								<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
									data-wrapper-class="chat-sidebar-list">
									<div class="chat-header">
										<h5 class="list-heading">Online</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media"><img class="media-object" src="assets/img/user/user3.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">John Deo</h5>
												<div class="media-heading-sub">Spine Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">5</span>
											</div> <img class="media-object" src="assets/img/user/user1.jpg" width="35"
												height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Rajesh</h5>
												<div class="media-heading-sub">Director</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user5.jpg"
												width="35" height="35" alt="...">
											<i class="away dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jacob Ryan</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">8</span>
											</div> <img class="media-object" src="assets/img/user/user4.jpg" width="35"
												height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Kehn Anderson</h5>
												<div class="media-heading-sub">CEO</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user2.jpg"
												width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Sarah Smith</h5>
												<div class="media-heading-sub">Anaesthetics</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user7.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Vlad Cardella</h5>
												<div class="media-heading-sub">Cardiologist</div>
											</div>
										</li>
									</ul>
									<div class="chat-header">
										<h5 class="list-heading">Offline</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-warning">4</span>
											</div> <img class="media-object" src="assets/img/user/user6.jpg" width="35"
												height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jennifer Maklen</h5>
												<div class="media-heading-sub">Nurse</div>
												<div class="media-heading-small">Last seen 01:20 AM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user8.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Lina Smith</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
												<div class="media-heading-small">Last seen 11:14 PM</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">9</span>
											</div> <img class="media-object" src="assets/img/user/user9.jpg" width="35"
												height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jeff Adam</h5>
												<div class="media-heading-sub">Compounder</div>
												<div class="media-heading-small">Last seen 3:31 PM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="assets/img/user/user10.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Anjelina Cardella</h5>
												<div class="media-heading-sub">Physiotherapist</div>
												<div class="media-heading-small">Last seen 7:45 PM</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Doctor Chat -->
						<!-- Start Setting Panel -->
						<div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_3">
							<div class="chat-sidebar-settings-list slimscroll-style">
								<div class="chat-header">
									<h5 class="list-heading">Layout Settings</h5>
								</div>
								<div class="chatpane inner-content ">
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Sidebar Position</div>
											<div class="setting-set">
												<select
													class="sidebar-pos-option form-control input-inline input-sm input-small ">
													<option value="left" selected="selected">Left</option>
													<option value="right">Right</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Header</div>
											<div class="setting-set">
												<select
													class="page-header-option form-control input-inline input-sm input-small ">
													<option value="fixed" selected="selected">Fixed</option>
													<option value="default">Default</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Sidebar Menu </div>
											<div class="setting-set">
												<select
													class="sidebar-menu-option form-control input-inline input-sm input-small ">
													<option value="accordion" selected="selected">Accordion</option>
													<option value="hover">Hover</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Footer</div>
											<div class="setting-set">
												<select
													class="page-footer-option form-control input-inline input-sm input-small ">
													<option value="fixed">Fixed</option>
													<option value="default" selected="selected">Default</option>
												</select>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">Account Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Notifications</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-1">
														<input type="checkbox" id="switch-1" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Show Online</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-7">
														<input type="checkbox" id="switch-7" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Status</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-2">
														<input type="checkbox" id="switch-2" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">2 Steps Verification</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-3">
														<input type="checkbox" id="switch-3" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">General Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Location</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-4">
														<input type="checkbox" id="switch-4" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Save Histry</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-5">
														<input type="checkbox" id="switch-5" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Auto Updates</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-6">
														<input type="checkbox" id="switch-6" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<div class="modal fade" id="sendMail" tabindex="-1" aria-labelledby="sendMailModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sendMailModalLabel">Send Email</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
		<label class="input__label">Email</label>
			<input class="form-control" type="text" placeholder=" " id="voucherEmailId" 
				autocomplete="off" />
			<input class="form-control" type="hidden" placeholder=" " id="voucherQuery" 
			autocomplete="off" />
      </div>
      <div class="modal-footer">
        <button type="button" class="new_btn px-3" data-bs-dismiss="modal">Close</button>
        <button type="button" onclick="resendmail('voucherQuery','voucherEmailId')" id="send_voucher_mail" class="new_btn px-3">Send</button>
      </div>
    </div>
  </div>
</div>

			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<?php $this->load->view('footer');?>
		<!-- <script>
			$('#addRow-btn').on('click',function(){
				alert("Add Hotel vouchers");

			});
		

		</script> -->
		<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
	// CKEDITOR.replace('impInfo');
	function modalEmail(id,mail){
		document.getElementById('voucherQuery').value = id;
		document.getElementById('voucherEmailId').value = mail;
	}

	
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js" defer></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>

<script>

$(document).ready(function() {
  $('#exampleReport2').DataTable( {
	  dom: 'Bfrtip',
	  buttons: [
			  {
				  extend: 'pdfHtml5',
				  text: '<i class="fa-solid fa-file-pdf fa-2x"></i>',
				  title: 'Hotel Voucher Data',
			  },
			  {
				  extend: 'excelHtml5',
				  text: '<i class="fa-solid fa-file-excel fa-2x"></i>',
				  title: 'Hotel Voucher Data',
			  },
			 
	  ]
  } );
} );
</script>

<style>
  .dataTables_filter {
  float: left !important;
  }

  .dataTables_wrapper .dt-buttons {
	  float: right;
	  font-size: 2.5rem !important;
  }
</style>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

		<script>
			function resendmail(id,email){

				var query_id= document.getElementById(id).value;
				var email_value= document.getElementById(email).value;

				var base_url = '<?php echo base_url()?>';
				$.ajax({
					url: base_url + "HotelVoucher/getVoucherDetails",
					dataType : 'json',
					type: "POST",
					data : { 'query_id':query_id },
					success: function(result) {
					// console.log(result);
					resendEmail(result,email_value);
				}});
			}
		</script>