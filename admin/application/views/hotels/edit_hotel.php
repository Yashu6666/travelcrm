
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
						<div class="page-title">Edit Hotel</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
							href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
						</i>&nbsp;<a class="parent-item"
						href="<?php echo site_url();?>hotel/view_hotels">Hotel</a>&nbsp;<i class="fa fa-angle-right"></i>
						
					</li>
					<li class="active">Edit hotel</li>
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
						<form action="<?php echo site_url();?>hotel/updateHotelDetails/<?php echo $edit->id;?>" method="POST" class="hotel-form row" enctype="multipart/form-data" >
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
															<?php 
															$in = explode(',', $edit->hotelamenities);
															//echo '<pre>';print_r($in);	exit;?>
																<!-- <mwc-textfield class="w-100 bg-white" name="hotelname" label="Hotel Name" outlined value=""></mwc-textfield> -->
																<label class="col-md-12 control-label text-left">Property Name</label>
																<input required class="w-100 bg-white form-control form-control-lg" name="hotelname" value="<?php echo $edit->hotelname;?>">
															</div>
														</div>
														<div class="row form-group mb-3">
															<label class="col-md-12 control-label text-left">Hotel Description</label>
															<div class="col-md-12">
																<textarea name="hoteldesc" id="editor">
																	<?php echo $edit->hoteldesc;?>
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
																					<!-- <input required type="text" class="form-control Places pac-target-input"  name="hotelmapaddress" value="<?php //echo $edit->hotelmapaddress;?>" placeholder="Enter Address" > -->
																					<select class="form-control"   required="" name="hotelmapaddress">
																					<option>Select City</option>                      
																					<option <?php echo $edit->hotelmapaddress == "Dubai" ? "selected" : "" ;?> value="Dubai">Dubai</option>
																					<option <?php echo $edit->hotelmapaddress == "AbuDhabi" ? "selected" : "" ;?> value="AbuDhabi">Abu Dhabi</option>
																					<option <?php echo $edit->hotelmapaddress == "Sharjah" ? "selected" : "" ;?> value="Sharjah">Sharjah</option>
																					<option <?php echo $edit->hotelmapaddress == "Ajman" ? "selected" : "" ;?> value="Ajman">Ajman</option>
																					<option <?php echo $edit->hotelmapaddress == "Sir Baniyas" ? "selected" : "" ;?> value="Sir Baniyas">Sir Baniyas</option>
																					<option <?php echo $edit->hotelmapaddress == "Umm Al-Quwain" ? "selected" : "" ;?> value="Umm Al-Quwain">Umm Al-Quwain</option>
																					<option <?php echo $edit->hotelmapaddress == "Fujairah" ? "selected" : "" ;?> value="Fujairah">Fujairah</option>
																					<option <?php echo $edit->hotelmapaddress == "Ras Al Khaimah" ? "selected" : "" ;?> value="Ras Al Khaimah">Ras Al Khaimah</option>
																					<option <?php echo $edit->hotelmapaddress == "Al Ain" ? "selected" : "" ;?> value="Al Ain">Al Ain</option>
																				</select>
																				</td>
																			</tr>
																			<!-- <tr>
																				<td></td>
																			</tr> -->
																			<!-- <tr>
																				<td>Latitude</td>
																				<td><input required type="text" class="form-control" id="latitude" value="<?php echo $edit->latitude;?>" name="latitude"></td>
																			</tr>
																			<tr>
																				<td>Longitude</td>
																				<td><input required type="text" class="form-control" id="longitude" value="<?php echo $edit->longitude;?>" name="longitude"></td>
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
																		<div class="icheckbox_square-grey" style="position: relative;"><input class="all" type="checkbox" name="" value="all" <?php echo (count($in)==19?'checked':''); ?> id="select_all" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																		Select All
																	</label>
																</div> -->
																<hr>
																<div class="row">
																	<div class="col-md-4 mb-2">
																		<label class="pointer">
																			<div class="icheckbox_square-grey" style="position: relative;">
																				<input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Airport Transport", $in)?'checked':''); ?> value="Airport Transport" style="position: absolute; opacity: 0;">
																				<ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Airport Transport
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Business Center", $in)?'checked':''); ?> value="Business Center" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Business Center
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Disabled Facilities", $in)?'checked':''); ?> value="Disabled Facilities" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Disabled Facilities
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Night Club", $in)?'checked':''); ?> value="Night Club" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Night Club
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Laundry Service", $in)?'checked':''); ?> value="Laundry Service" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Laundry Service
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Restaurant", $in)?'checked':''); ?> value="Restaurant" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Restaurant
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Wi-Fi Internet", $in)?'checked':''); ?> value="Wi-Fi Internet" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Wi-Fi Internet
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Bar Lounge", $in)?'checked':''); ?> value="Bar Lounge" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Bar Lounge
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Swimming Pool", $in)?'checked':''); ?> value="Swimming Pool" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Swimming Pool
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Inside Parking", $in)?'checked':''); ?> value="Inside Parking" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Inside Parking
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Shuttle Bus", $in)?'checked':''); ?> value="Shuttle Bus Service" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Shuttle Bus Service
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]"  <?php echo (in_array("Fitness Center", $in)?'checked':''); ?> value="Fitness Center" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Fitness Center
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("SPA", $in)?'checked':''); ?> value="SPA" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				SPA
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Children Activites", $in)?'checked':''); ?> value="Children Activites" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Children Activites
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Air Conditioner", $in)?'checked':''); ?> value="Air Conditioner" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Air Conditioner
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Banquet Hall", $in)?'checked':''); ?> value="Banquet Hall" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Banquet Hall
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Cards Accepted", $in)?'checked':''); ?> value="Cards Accepted" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Cards Accepted
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Elevator", $in)?'checked':''); ?> value="Elevator" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
																				Elevator
																			</label>
																		</div>
																		<div class="col-md-4 mb-2">
																			<label class="pointer">
																				<div class="icheckbox_square-grey" style="position: relative;"><input class="checkboxcls" type="checkbox" name="hotelamenities[]" <?php echo (in_array("Pets Allowed", $in)?'checked':''); ?> value="Pets Allowed" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
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
																	<input required name="checkintime" type="text" placeholder="Check In" class="form-control timepicker" data-format="hh:mm A" value="<?php echo $edit->checkintime;?>">
																</div>
																<label class="col-md-2 control-label text-left">Check Out</label>
																<div class="col-md-4">
																	<input required name="checkouttime" type="text" placeholder="Check Out" class="form-control timepicker" data-format="hh:mm A" value="<?php echo $edit->checkouttime;?>">
																</div>
															</div>
															<div class="row form-group mb-3">
																<label class="col-md-2 control-label text-left">Payment Options</label>
																<div class="col-md-10">
																	<?php $payment = explode(',', $edit->hotelpayments); ?>
																	<select required multiple=""  name="hotelpayments[]"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
																		<?php for ($i=0; $i <count($payment) ; $i++) { ?>
																		<option selected=""><?php echo $payment[$i];?></option>
																		<?php	} ?>
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
																	<textarea required name="hotelpolicy" placeholder="Policy..." class="form-control" id="" cols="30" rows="7"><?php echo $edit->hotelpolicy;?></textarea>
																</div>
															</div>
														</div>
														<div class="tab-pane wow fadeIn animated in" id="CONTACT">
															<!-- <div class="row form-group mb-3">
																<label class="col-md-2 control-label text-left">Hotel's Email</label>
																<div class="col-md-10">
																	<input required name="hotelemail" type="text" placeholder="Email" class="form-control " value="<?php echo $edit->hotelemail;?>">
																</div>
															</div> -->

															<?php 
															$emails = explode(",",$edit->hotelemail);
															$contact_names = explode(",",$edit->contact_name);
															$phones = explode(",",$edit->hotelphone);
															?>

															<div class="row form-group mb-3">
															 <label class="col-md-12 control-label text-left">Hotel's Email</label>
																<div class="col-md-12 d-flex">
																	<input required name="hotelemail[]" type="text"  placeholder="Email" class="form-control" value="<?php echo count($emails) > 0 ? $emails[0] : "" ;?>">
																	<input type="button" value="Add" onclick="addNewEmails()" id="add_hotel_email" class="new_btn px-3 ml-5" />
																</div>
														  </div>

														  
														  <div id="new_hotel_email_ids">
															<?php if(count($emails) > 1) : ?>
																<?php foreach($emails as $key => $val) : ?>
																	<?php if ( $key == 0 ) { continue; } ?>
																	<div class="row form-group mb-3" id=<?php echo "email_row_edit".$key ?> >
															 		<label class="col-md-2 control-label text-left"></label>
																	<div class="col-md-12 d-flex">
																	<input required name="hotelemail[]" type="text"  placeholder="Email" class="form-control mr-2" value="<?php echo 
																	$emails[$key] ;?>">
																	<button type="button" class="btn btn-danger ml-5 mt-0 py-2"  onclick="removeNewEmails(<?php echo 'email_row_edit'.$key ?>)"><i class="fa fa-trash"></i></button>
																</div>
																</div>
																<?php endforeach ?>
															<?php endif ?>
														  </div>

															<div class="row form-group mb-3">
																<label class="col-md-12 control-label text-left">Hotel's Website</label>
																<div class="col-md-12">
																	<input required name="hotelwebsite" type="text" placeholder="Website" class="form-control " value="<?php echo $edit->hotelwebsite;?>">
																</div>
															</div>


															<div class="row form-group mb-3">
															 <label class="col-md-12 control-label text-left">Contact Person</label>
																<div class="col-md-12 d-flex">
																	<input required name="contact_person[]" type="text"  placeholder="Contact Person Name" class="form-control" value="<?php echo count($contact_names) > 0 ? $contact_names[0] : "" ;?>">
																	<input type="button" value="Add" onclick="addNewContactNames()" id="" class="new_btn px-3 ml-5" />
																</div>
														  </div>

														  <div id="new_contact_person_names">

														  <?php if(count($contact_names) > 1) : ?>
																<?php foreach($contact_names as $key => $val) : ?>
																	<?php if ( $key == 0 ) { continue; } ?>
																	<div class="row form-group mb-3" id=<?php echo "contact_row_edit".$key ?> >
															 		<label class="col-md-2 control-label text-left"></label>
																	<div class="col-md-12 d-flex">
																	<input required name="contact_person[]" type="text"  placeholder="Contact Person Name" class="form-control mr-2" value="<?php echo 
																	$contact_names[$key] ;?>">
																	<button type="button" class="btn btn-danger ml-5 mt-0 py-2"  onclick="removeNewEmails(<?php echo 'contact_row_edit'.$key ?>)"><i class="fa fa-trash"></i></button>
																</div>
																</div>
																<?php endforeach ?>
															<?php endif ?>

														  </div>


														  <div class="row form-group mb-3">
															 <label class="col-md-12 control-label text-left">Phone</label>
																<div class="col-md-12 d-flex">
																	<input required name="phone[]" type="text"  placeholder="Phone" class="form-control" value="<?php echo count($phones) > 0 ? $phones[0] : "" ;?>">
																	<input type="button" value="Add" onclick="addNewPhones()" id="" class="new_btn px-3 ml-5" />
																</div>
														  </div>

														  <div id="new_phone">

														  <?php if(count($phones) > 1) : ?>
																<?php foreach($phones as $key => $val) : ?>
																	<?php if ( $key == 0 ) { continue; } ?>
																	<div class="row form-group mb-3" id=<?php echo "phone_row_edit".$key ?> >
															 		<label class="col-md-2 control-label text-left"></label>
																	<div class="col-md-12 d-flex">
																	<input required name="phone[]" type="text"  placeholder="Phone" class="form-control mr-2" value="<?php echo 
																	$phones[$key] ;?>">
																	<button type="button" class="btn btn-danger ml-5 mt-0 py-2"  onclick="removeNewEmails(<?php echo 'phone_row_edit'.$key ?>)"><i class="fa fa-trash"></i></button>
																</div>
																</div>
																<?php endforeach ?>
															<?php endif ?>

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
																	<?php if($edit->hotelstatus == 'Yes') {?>
																	<option value="Yes">Enabled</option>
																	<?php } else if($edit->hotelstatus == 'No') {?>
																	<option value="No">Disabled</option>
																	<?php } ?>
																	<option value="Yes">Enabled</option>
																	<option value="No">Disabled</option>
																</select>
															</div>
														</div> -->
														<div class="row1 form-group mb-3">
															<label class="col-md-4 control-label1 text-left">Category</label>
															<div class="col-md-8">
																<select required data-placeholder="Select" class="form-select1" name="hotelstars">
																<option <?php echo $edit->hotelstars=="1"?"selected":"";?> value="1"> 1</option>
																	<option  <?php echo $edit->hotelstars=="2"?"selected":"";?> value="2"> 2</option>
																	<option  <?php echo $edit->hotelstars=="3"?"selected":"";?> value="3"> 3</option>
																	<option  <?php echo $edit->hotelstars=="4"?"selected":"";?> value="4"> 4</option>
																	<option  <?php echo $edit->hotelstars=="5"?"selected":"";?> value="5"> 5</option>
																</select>
															</div>
														</div>
														<div class="row1 form-group mb-3">
															<label class="col-md-4 control-label1 text-left">Property Type</label>
															<div class="col-md-8">
																<select required data-placeholder="Select" class="form-select1" name="propertytype">
																	<option  <?php echo $edit->propertytype=="Apartment"?"selected":"";?> value="Apartment">Apartment</option>
																	<option <?php echo $edit->propertytype=="Hotel"?"selected":"";?>  value="Hotel">Hotel</option>
																	<option <?php echo $edit->propertytype=="Guest House"?"selected":"";?>  value="Guest House">Guest House</option>
																	<option <?php echo $edit->propertytype=="Residence"?"selected":"";?>  value="Residence">Residence</option>
																	<option <?php echo $edit->propertytype=="Resort"?"selected":"";?>  value="Resort">Resort</option>
																    <option <?php echo $edit->propertytype=="Villa"?"selected":"";?>  value="Villa">Villa</option>
																</select>
															</div>
														</div>

														<div class="row1 form-group mb-3">
														  <label class="col-md-4 control-label1 text-left">Supplier</label>
														  <div class="col-md-8">
															 <select required data-placeholder="Select" class="form-select1" name="supplier">
																	
															<?php foreach($supplier as $val){ ?>	
 															 <option <?php echo $val->firstName.' '.$val->lastName== $edit->supplier? "Selected":""?> value="<?php print_r($val->company_name) ?>"> <?php print_r($val->company_name) ?></option>
															<?php } ?>
															 </select>
														  </div>
													   </div>
														
													</div>
												</strong>
											</div>
											<strong>
												<!-- <div class="card p-5">
													<h4 class="mb-3"><strong>Total Markup</strong></h4>
													<div class="panel-body form-horizontal">
														<div class="row form-group">
															
															<div class="col-md-7">
																
																<input required type="number" name="total_markup" class="form-control" placeholder="Value" value="<?php echo $edit->total_markup;?>">
																
															</div>
															<div class="col-md-7">
																
																<input required type="number" name="total_markup_per" class="form-control" placeholder="%" value="<?php echo $edit->total_markup_per;?>">
																
															</div>
														</div>
														<hr>
														
													</div>
													<div class="col-lg-12 p-t-20 text-center">
														<input type="submit" 
														class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink" />
													</div>
												</div> -->
												<div class="col-lg-12 p-t-20 text-center">
														<input type="submit" 
														class="new_btn px-3" />
														<!-- class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink" value="Update" /> -->
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

	<script>
		let email_row_id = 1;
		function addNewEmails(){
			let row_data = `<div class="row form-group mb-3" id="email_row${email_row_id}">
							<label class="col-md-2 control-label text-left"></label>
							<div class="col-md-12 d-flex">
								<input required name="hotelemail[]" type="text"  placeholder="Email" class="form-control mr-2" value="">
								<button type="button" class="btn btn-danger ml-5 mt-0 py-2"  onclick="removeNewEmails(${"email_row"+email_row_id})"><i class="fa fa-trash"></i></button>
							</div>
						</div>`;
			$("#new_hotel_email_ids").append(row_data);
			email_row_id++;
		}

		function removeNewEmails(id){
			$(id).remove();
		}

		let contact_names_id = 1;
		function addNewContactNames(){
			let row_data = `<div class="row form-group mb-3" id="contact_names${contact_names_id}">
							<label class="col-md-2 control-label text-left"></label>
							<div class="col-md-12 d-flex">
								<input required name="contact_person[]" type="text"  placeholder="Contact Person Name" class="form-control mr-2" value="">
								<button type="button" class="btn btn-danger ml-5 mt-0 py-2"  onclick="removeNewEmails(${"contact_names"+contact_names_id})"  onClick="return  removeHotel(this);"><i class="fa fa-trash"></i></button>
							</div>
						</div>`;
			$("#new_contact_person_names").append(row_data);
			contact_names_id++;
		}

		let new_phone_id = 1;
		function addNewPhones(){
			let row_data = `<div class="row form-group mb-3" id="new_phone${new_phone_id}">
							<label class="col-md-2 control-label text-left"></label>
							<div class="col-md-12 d-flex">
								<input required name="phone[]" type="text"  placeholder="Phone" class="form-control mr-2" value="">
								<button type="button" class="btn btn-danger ml-5 mt-0 py-2"  onclick="removeNewEmails(${"new_phone"+new_phone_id})"  onClick="return  removeHotel(this);"><i class="fa fa-trash"></i></button>
							</div>
						</div>`;
			$("#new_phone").append(row_data);
			new_phone_id++;
		}

	</script>