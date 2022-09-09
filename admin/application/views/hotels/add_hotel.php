<?php $this->load->view('header');?>
<link href="<?php echo base_url();?>public/css/new.css" rel="stylesheet">
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
								<div class="page-title">Add Hotel</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
										</i>&nbsp;<a class="parent-item"
										href="<?php echo site_url();?>hotel/view_hotels">Hotel</a>&nbsp;<i class="fa fa-angle-right"></i>
								
								</li>
								<li class="active">Add hotel</li>
							</ol>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<form action="<?php echo site_url();?>hotel/addHotelDetails" method="POST" class="hotel-form row" enctype="multipart/form-data" >
										<div class="col-md-8">
										   <div class="backgrop">
											  <div class="panel panel-default">
												 <div class="tab-pane show active" role="tabpanel" id="materialTabBarJsDemo" aria-labelledby="materialTabBarJsDemoTab">
													<mwc-tab-bar class="nav nav-tabs" role="tablist">
													   <mwc-tab id="general-tab" label="General" data-bs-toggle="tab" data-bs-target="#general" role="tab" aria-controls="general" aria-selected="true" dir="" class="active" active=""></mwc-tab>
													   <mwc-tab id="FACILITIES-tab" label="Facilities" data-bs-toggle="tab" data-bs-target="#FACILITIES" role="tab" aria-controls="FACILITIES" aria-selected="true" dir="" class="" active=""></mwc-tab>
													  
													   <mwc-tab id="POLICY-tab" label="Policy" data-bs-toggle="tab" data-bs-target="#POLICY" role="tab" aria-controls="POLICY" aria-selected="true" dir="" class="" active=""></mwc-tab>
													   <mwc-tab id="CONTACT-tab" label="Contact" data-bs-toggle="tab" data-bs-target="#CONTACT" role="tab" aria-controls="CONTACT" aria-selected="true" dir="" class="" active=""></mwc-tab>
													  
													</mwc-tab-bar>
												 </div>
												 <div class="panel-body">
													<div class="tab-content border border-top-0 p-3">
													   <div class="tab-pane wow fadeIn animated active in" id="general">
														  <div class="clearfix"></div>
														  <div class="row form-group mb-3">
															 <div class="col-md-12">
																<!-- <mwc-textfield class="w-100 bg-white" name="hotelname" label="Hotel Name" outlined value=""></mwc-textfield> -->
																<label class="col-md-12 control-label text-left">Hotel Name</label>
																<input required class="w-100 bg-white form-control form-control-lg" name="hotelname" value="">
															 </div>
														  </div>
														  <div class="row form-group mb-3">
															 <label class="col-md-12 control-label text-left">Hotel Description</label>
															 <div class="col-md-12">
																<textarea name="hoteldesc" id="editor">
																</textarea>
															
															 </div>
														  </div>
														  <!-- Address and Map -->
														  <div class="panel panel-default">
															 <div class="panel-body" style="margin-bottom: 0px;">
																<div class="col-md-12 form-horizontal">
																   <table class="table">
																	  <tbody>
																		 <tr>
																			<td>City</td>
																			<td>
																			   <!-- <input required type="text" class="form-control Places pac-target-input"  name="hotelmapaddress" value="" placeholder="Enter Address" > -->
																			   <select class="form-control"   required="" name="hotelmapaddress">
																					<option>Select City</option>                      
																					<option value="Dubai">Dubai</option>
																					<option value="AbuDhabi">Abu Dhabi</option>
																					<option value="Sharjah">Sharjah</option>
																					<option value="Ajman">Ajman</option>
																					<option value="Sir Baniyas">Sir Baniyas</option>
																					<option value="Umm Al-Quwain">Umm Al-Quwain</option>
																					<option value="Fujairah">Fujairah</option>
																					<option value="Ras Al Khaimah">Ras Al Khaimah</option>
																					<option value="Al Ain">Al Ain</option>
																				</select>
																			</td>
																		 </tr>
																		 <!-- <tr>
																			<td></td>
																		 </tr> -->
																		 <!-- <tr>
																			<td>Latitude</td>
																			<td><input required type="text" class="form-control" id="latitude" value="" name="latitude"></td>
																		 </tr>
																		 <tr>
																			<td>Longitude</td>
																			<td><input required type="text" class="form-control" id="longitude" value="" name="longitude"></td>
																		 </tr> -->
																	  </tbody>
																   </table>
																</div>
															
																<div class="clearfix"></div>
															 </div>
														  </div>
														  <!-- Address and Map -->
													   </div>
													   <div class="tab-pane wow fadeIn animated in" id="FACILITIES">
														  <div class="row form-group">
															 <div class="col-md-12">
																<!-- <div class="col-md-4">
																   <label class="pointer">
																	  <div class="icheckbox_square-grey" style="position: relative;"><input class="all" type="checkbox" name="" value="all" id="select_all" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																	  Select All
																   </label>
																</div> -->
																<hr>
																<div class="row">
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Airport Transport" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Airport Transport
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Business Center" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Business Center
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Disabled Facilities" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Disabled Facilities
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Night Club" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Night Club
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Laundry Service" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Laundry Service
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Restaurant" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Restaurant
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Wi-Fi Internet" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Wi-Fi Internet
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Bar Lounge" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Bar Lounge
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Swimming Pool" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Swimming Pool
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Inside Parking" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Inside Parking
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Shuttle Bus Service" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Shuttle Bus Service
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Fitness Center" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Fitness Center
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="SPA" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 SPA
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Children Activites" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Children Activites
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Air Conditioner" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Air Conditioner
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Banquet Hall" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Banquet Hall
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Cards Accepted" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Cards Accepted
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Elevator" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Elevator
																	  </label>
																   </div>
																   <div class="col-md-4 mb-2">
																	  <label class="pointer">
																		 <div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" value="Pets Allowed" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		 Pets Allowed
																	  </label>
																   </div>
																</div>
															 </div>
														  </div>
													   </div>
													
													   <div class="tab-pane wow fadeIn animated in" id="POLICY">
														  <div class="row form-group mb-3">
															 <label class="col-md-2 control-label text-left">Check In</label>
															 <div class="col-md-4">
																<input required name="checkintime" type="text" placeholder="Check In" class="form-control timepicker" data-format="hh:mm A" value="">
															 </div>
															 <label class="col-md-2 control-label text-left">Check Out</label>
															 <div class="col-md-4">
																<input required name="checkouttime" type="text" placeholder="Check Out" class="form-control timepicker" data-format="hh:mm A" value="">
															 </div>
														  </div>
														  <div class="row form-group mb-3">
															 <label class="col-md-2 control-label text-left">Payment Options</label>
															 <div class="col-md-10">
															
																<select required multiple=""  name="hotelpayments[]"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
																	<option value="bank_transfer">
																	  Bank Transfer              
																   </option>   
																  <option value="Skrill">
																	  Skrill                
																   </option>																   
																   <option value="Credit Card">
																	  Credit Card                
																   </option>
																   <option value="Wire Transfer">
																	  Wire Transfer                
																   </option>
																   <option value="American Express">
																	  American Express                
																   </option>
																   <option value="Paypal">
																	  Paypal                
																   </option>
																   <option value="Master/ Visa Card">
																	  Master/ Visa Card                
																   </option>
																   <option value="Pay on Arrival">
																	  Pay on Arrival                
																   </option>
																</select>
															 </div>
														  </div>
														  <div class="row form-group mb-3">
															 <label class="col-md-2 control-label text-left">Policy And Terms</label>
															 <div class="col-md-10">
																<textarea required name="hotelpolicy" placeholder="Policy..." class="form-control" id="" cols="30" rows="7"></textarea>
															 </div>
														  </div>
													   </div>
													   <div class="tab-pane wow fadeIn animated in" id="CONTACT">
														  <div class="row form-group mb-3">
															 <label class="col-md-2 control-label text-left">Hotel's Email</label>
															 <div class="col-md-10">
																<input required name="hotelemail" type="text" placeholder="Email" class="form-control " value="">
															 </div>
														  </div>
														  <div class="row form-group mb-3">
															 <label class="col-md-2 control-label text-left">Hotel's Website</label>
															 <div class="col-md-10">
																<input required name="hotelwebsite" type="text" placeholder="Website" class="form-control " value="">
															 </div>
														  </div>
														  <div class="row form-group mb-3">
															 <label class="col-md-2 control-label text-left">Phone</label>
															 <div class="col-md-10">
																<input required name="hotelphone" type="text" placeholder="Phone" class="form-control" value="">
															 </div>
														  </div>
														
													   </div>
													
													</div>
												 </div>
											
											  </div>
										   </div>
										</div>
										<div class="col-md-4 sticky">
										   <div class="backgrop">
											  <div class="card p-5">
											  <h4 class="mb-3 center"><strong><b>Main Settings</b></strong></h4>
												 <strong>
													<div class="panel-body form-horizontal">
													   <!-- <div class="row1 form-group mb-3">
														  <label class="col-md-4 control-label1 text-left">Status</label>
														  <div class="col-md-8">
															 <select required data-placeholder="Select" class="form-select1" name="hotelstatus">
																<option value="Yes">Enabled</option>
																<option value="No">Disabled</option>
															 </select>
														  </div>
													   </div> -->
													   <div class="row1 form-group mb-3">
														  <label class="col-md-4 control-label1 text-left">Category</label>
														  <div class="col-md-8">
															 <select required data-placeholder="Select" class="form-select1" name="hotelstars">
																<option value="1"> 1</option>
																<option value="2"> 2</option>
																<option value="3"> 3</option>
																<option value="4"> 4</option>
																<option value="5"> 5</option>
															 </select>
														  </div>
													   </div>
													   <div class="row1 form-group mb-3">
														  <label class="col-md-4 control-label1 text-left">Property Type</label>
														  <div class="col-md-8">
															 <select required data-placeholder="Select" class="form-select1" name="propertytype">
																<option value="Apartment">Apartment</option>
																<option value="Hotel">Hotel</option>
																<option value="Guest House">Guest House</option>
																<option value="Residence">Residence</option>
																<option value="Resort">Resort</option>
								
																<option value="Villa">Villa</option>
															 </select>
														  </div>
													   </div>

													   <div class="row1 form-group mb-3">
														  <label class="col-md-4 control-label1 text-left">Supplier</label>
														  <div class="col-md-8">
													
															 <select required data-placeholder="Select" class="form-select1" name="supplier">
															<?php foreach($supplier as $val){ 
																//print_r($val->firstName);
																?>	
															 <option value="<?php print_r($val->firstName) ?> <?php print_r($val->lastName) ?>"> <?php print_r($val->firstName) ?> <?php print_r($val->lastName) ?></option>
															<?php } ?>
															 </select>
														  </div>
													   </div>
												
													</div>
												 </strong>
											  </div>
											  		<div class="col-lg-12 p-t-20 text-center">
														<input type="submit" 
														  class="new_btn px-3" />
														  <!-- class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink" /> -->
													  </div>
												 </div>
											  </strong>
											  
										   </div>
										   <strong>
										   </strong>
										</div>
										
									 </form>
								</div>
							</div>
						</div>
					</div>



					<!-- start widget -->
					<div class="state-overview">
					</div>
					<!-- end widget -->
					<!-- chart start -->
					<!-- Chart end -->

					<!-- start Payment Details -->

					<!-- end Payment Details -->

				</div>
			</div>

			<!-- end chat sidebar -->
		</div>
		<!-- end page container -->
		<?php $this->load->view('footer');?>

		<!-- <script src="js/sb-customizer.js"></script> -->
	<script>
		console.clear()
		initSample();
		$('.js-example-basic-multiple').select2();
	</script>
	<script>
		// Listen for click on toggle checkbox
		$('#select_all').click(function (event) {
			if (this.checked) {
				// Iterate each checkbox
				$(':checkbox').each(function () {
					this.checked = true;
				});
			} else {
				$(':checkbox').each(function () {
					this.checked = false;
				});
			}
		});

		function select_all_data(e) {
			if ($("#select_all").prop("checked")) {
				$("[class=checkboxcls]").prop("checked", true);
			} else {
				$("[class=checkboxcls]").prop("checked", false);
			}
		}

	

	</script>
	<!-- icheck -->
	<script src="<?php echo base_url();?>public/js/icheck.min.js"></script>
	<link href="<?php echo base_url();?>public/css/grey.css" rel="stylesheet">
	<script>
		var cb, optionSet1;

		$(function () {
			var checkAll = $('input.all');
			var checkboxes = $('input.checkboxcls');

			$('.tab-pane input').iCheck({
				checkboxClass: "icheckbox_square-grey",
			});

			checkAll.on('ifChecked ifUnchecked', function (event) {
				if (event.type == 'ifChecked') {
					checkboxes.iCheck('check');
				} else {
					checkboxes.iCheck('uncheck');
				}
			});

			checkboxes.on('ifChanged', function (event) {
				if (checkboxes.filter(':checked').length == checkboxes.length) {
					checkAll.prop('checked', 'checked');
				} else {
					checkAll.removeProp('checked');
				}
				checkAll.iCheck('update');
			});
		});

		$("radio").iCheck({
			checkboxClass: "icheckbox_square-grey",
			radioClass: "iradio_square-grey"
		});
	</script>
	<!-- datepicker -->
	<script src="js/datepicker.js"></script>
	<link rel="stylesheet" href="css/datepicker.css">
	<script>
		var fmt = "dd/mm/yyyy";
		if (top.location != location) { top.location.href = document.location.href; }
		$(function () {
			window.prettyPrint && prettyPrint(); $('.dob').datepicker({ format: fmt, autoclose: true }).on('changeDate', function (ev) {
				$(this).datepicker('hide');
			});
			$('#dp1').datepicker();
			$('#dp2').datepicker();
			$('#dp3').datepicker();
			$('#dp5').datepicker();

			// disabling dates
			var nowTemp = new Date();
			var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

			var date = $('.dpd3').datepicker({
				format: fmt,
				onRender: function (date) {
					return date.valueOf() < now.valueOf() ? 'disabled' : '';
				}
			})
				.on('changeDate', function (ev) {
					date.hide();
				})
				.data('datepicker');

			var date12 = $('.dpd5').datepicker({
				format: fmt,
				onRender: function (date) {
					return date.valueOf() < now.valueOf() ? 'disabled' : '';
				}
			})
				.on('changeDate', function (ev) {
					date12.hide();
				})
				.data('datepicker');
			var date13 = $('.dpd6').datepicker({
				format: fmt,
				onRender: function (date) {
					return date.valueOf() < now.valueOf() ? 'disabled' : '';
				}
			})
				.on('changeDate', function (ev) {
					date13.hide();
				})
				.data('datepicker');

			var checkin = $('.dpd1').datepicker({
				format: fmt,
				onRender: function (date) {
					return date.valueOf() < now.valueOf() ? 'disabled' : '';
				}
			})
				.on('changeDate', function (ev) {
					if (ev.date.valueOf() > checkout.date.valueOf()) {
						var newDate = new Date(ev.date)
						newDate.setDate(newDate.getDate() + 1); checkout.setValue(newDate);
					}
					checkin.hide();
					$('.dpd2')[0].focus();
				})
				.data('datepicker');
			var checkout = $('.dpd2').datepicker({
				format: fmt,
				onRender: function (date) {
					return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
				}
			})
				.on('changeDate', function (ev) {
					checkout.hide();
				})
				.data('datepicker');

		});
	</script>
	
	<script>
		$(function () {
			$('.timepicker').clockface();
		});
	</script>
	<!-- dronzone -->
