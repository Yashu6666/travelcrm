<?php $this->load->view('header'); ?>
<link href="<?php echo base_url(); ?>public/css/new.css" rel="stylesheet">
<script src="<?php echo base_url();?>public/assets/js/hotelVoucher.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<style>
	.new_bg_header {
    background: #d9a927 !important;
	}

	.new_btn {
		color: white !important;
		font-size: 1rem;
		font-weight: 500;
		border-radius: 2px;
		/* border: 1px solid #102158; */
		background: #595d60;
		text-align: center;
		padding: 6px;
	}

	.new_btn:hover {
		color: white !important;
		font-size: 1rem;
		font-weight: 500;
		border-radius: 2px;
		/* border: 1px solid #102158; */
		background: #d9a927;
		text-align: center;
		padding: 6px;
	}


</style>
<div class="page-container">
	<!-- start sidebar menu -->
	<?php $this->load->view('side_bar'); ?>
	<!-- end sidebar menu -->
	<!-- start page content -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-bar">
				<div class="page-title-breadcrumb">
					<div class=" pull-left">
						<div class="page-title">Add Hotel Voucher</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url(); ?>HotelVoucher/view_hotels_voucher">Hotel Voucher</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">Add Hotel Voucher</li>
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

							<form action="<?php echo site_url(); ?>HotelVoucher/searchDetails" method="post">
								<label style="font-size: 20px;" class="input">Query Id : 
									<?php if (isset($query_id)) : ?>
										<input style="height: 36px;" class="input__field" value="<?php echo $query_id ?>" type="text" name="query_id" placeholder="Query ID " id="billTo" autocomplete="off" />
									<?php else : ?>
										<input style="height: 36px;" class="input__field" type="text" name="query_id" placeholder="Query ID " id="billTo" autocomplete="off" />
									<?php endif ?>

								</label>
								<button type="submit" style="margin-left: 5px;" class="new_btn px-3">Search</button>
							</form>
							<?php  if($this->session->flashdata('error'))
							{?><center>
								<div class="alert alert-danger" style="font-size: 12px;">
									<?php echo $this->session->flashdata('error')?>
								</div>
							</center>

							<?php } ?>
						</div>
						<?php if (isset($details)) : ?>
							<div id="print_content" class="card">
								<form id="submtVoucherbtn">
									<!-- <form action="<php echo site_url(); ?>HotelVoucher/submitVoucherDetails" method="post"> -->
									<div class="card-body">
										<div class="container mb-5 mt-3">
											<!-- <div class="row d-flex align-items-baseline new_bg_header">
												<hr>
												<div class="col-xl-12">
													<h4 class="text-white text-center ">Voucher / Accommodation</h4>
												</div>
											</div> -->
											<div class="mt-3 row d-flex align-items-baseline new_bg_header">
												<div class="col-xl-12">
													<h4 class="text-white text-center"><i class="fa-solid fa-receipt"></i> Accommodation Voucher</h4>
												</div>
											</div>

											<!-- <div class="mt-3 row d-flex align-items-baseline new_bg_header">
												<div class="col-xl-12">
													<h4 class="text-white">Hotel Details</h4>
												</div>
											</div> -->

											<?php
												$created_date = new DateTime($guest->created_at);
												$booking_date = $created_date->format('d-M-Y');
												?>


											<?php foreach($final_hotel_details as $key => $value) : ?>
												<div class="mt-3 row d-flex align-items-baseline ">
													<div class="bg-dark col-xl-12">
														<div id="HD_header" class="form-row p-3 rounded-lg">
															<div class="col d-flex just">
																<label for="" class="col-form-label text-white">Hotel Name:</label>
																<label style="flex: 0 0 50%; max-width: 50%;white-space: nowrap;" class="col-form-label col-xl-6 mx-3 text-white"><?php echo $value->hotel_name ?>
																	<?php echo str_repeat("⭐",$value->hotel_category); ?>
															</label>
															</div>

															<div>
															<div class="col d-flex justify-content-end">
																<label for="" class=" col-form-label text-white">Confirmation Number:</label>
																<input style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" id="conf_number_<?php echo $key; ?>" value="#" name="conf_number[<?php echo $key; ?>]" placeholder="Enter Confirmatin Number Here">
																<input type="hidden" name="hotel_id[<?php echo $key; ?>]" value=<?php echo $value->hotel_id ?>>
																<input type="hidden" name="hotel_name[<?php echo $key; ?>]" value='<?php echo $value->hotel_name ?>'>
																<input type="hidden" name="booking_date[<?php echo $key; ?>]" value=<?php echo $booking_date; ?>>
															</div>
															</div>
														</div>
													</div>
													<div class="border border-bottom-0 border-top-0 col-xl-12">
														<div class=" form-row p-3 rounded-lg">
															<?php
															$date = new DateTime(explode(',',$hotel[0]->checkin)[$key]);
															$check_in = $date->format('d-M-Y');
															$date->modify('+' . explode(',',$hotel[0]->nights)[$key] . ' day');
															$checkout =  $date->format('d-M-Y');

															?>
															<div class="col d-flex">
																<label for="" class=" col-form-label">Booking Date</label>
																<input style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" value="<?php echo $booking_date ?>">
															</div>
															
															<div class="col d-flex just">
																<label for="" class=" col-form-label">Check-in</label>
																<input style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" placeholder=<?php echo $check_in; ?>>
																<input type="hidden" name="check_in[<?php echo $key; ?>]" value=<?php echo $value->check_in; ?>>
															
															</div>
															<input type="hidden" name="check_out[<?php echo $key; ?>]" value=<?php echo $value->check_out; ?>>


															<div class="col d-flex">
																<label for="" class=" col-form-label">No of Nights</label>
																<input style="flex: 0 0 50%; max-width: 50%;"  aria-describedby="basic-addon1"  class="mx-3 form-control col-xl-6" placeholder='🌙 <?php echo $value->no_of_nights; ?>'>
															</div>

															

															<div class="col d-flex">
																<label for="" class=" col-form-label">Check-out</label>
																<input  style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" placeholder=<?php echo $value->check_out; ?>>
															</div>
														</div>

													</div>
													<div class="w-100">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th scope="col">Room Type</th>
																	<th scope="col">No of Rooms</th>
																	<th scope="col">Adults</th>
																	<th scope="col">Children</th>
																	<th scope="col">Meals Board</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><?php echo $value->room_type; ?></td>
																	<td><?php echo $value->no_of_rooms ?></td>
																	<td><?php echo $value->adult_per_pax ?></td>
																	<td><?php echo $value->child_per_pax ?></td>
																	<td><input type="text" class="form-control" value="<?php  echo $value->type ?>" name="board[<?php echo $key; ?>]"></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											<?php endforeach; ?>
											<div class="mt-3 row d-flex align-items-baseline new_bg_header">
												<div class="col-xl-12">
													<h4 class="text-white">Guest Details</strong></h4>
												</div>
											</div>

											<div class="mt-3 row d-flex align-items-baseline">
												<table class="table table-bordered col-xl-12 mt-3">
													<thead>
														<tr>
															<th scope="col">Guest Name:</th>
															<th scope="col">Agent Name: </th>
															<th scope="col">Agent Email Id:</th>
															<th scope="col">Agent Mobile No:</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><input type="text" id="guest_name" class="form-control" name="guest_name" ></td>
															<td><?php echo $guest->b2bcompanyName ?></td>
															<td><?php echo $guest->b2bEmail ?></td>
															<td><?php echo $guest->b2bmobileNumber ?></td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="mt-3 row d-flex align-items-baseline new_bg_header">
												<div class="col-xl-12">
													<h4 style="color: white;" class="text-white">Note </strong></h4>
												</div>
											</div>

											<div class="mt-3 row d-flex">
												<div class="col-xl-12">
												<input type="hidden" id="query_id" name="query_id" value=<?php echo $query_id; ?>>
												<input type="hidden" id="email_id" name="email_id" value=<?php echo $guest->b2bEmail; ?>>
												<input type="hidden" id="base_url_id" name="base_url" value=<?php echo site_url(); ?>>
												<textarea id="impInfo" name="impInfo">
												<ul>
												<?php foreach ($hotel_details as $key => $value) : ?>
												<li>
												<?php if(isset($hotel_details[$key]->hotelname) && !empty($hotel_details[$key]->hotelname)) : ?>	
													<?php print_r($hotel_details[$key]->hotelname); ?>, 
												<?php endif ?>
													
												<?php if(isset($hotel_details[$key]->hotel_full_address)  && !empty($hotel_details[$key]->hotel_full_address)) : ?>	
													<?php print_r($hotel_details[$key]->hotel_full_address); ?>, 
												<?php endif ?>
												
												<?php if(isset($hotel_details[$key]->hotelphone)  && !empty($hotel_details[$key]->hotelphone)) : ?>	
												<?php print_r($hotel_details[$key]->hotelphone); ?>
												<?php endif ?>
												</li><br/> 
												<?php endforeach ?>	

												<li>Guest Relation Contact Number (24x7):- +971 50 351 5408 , +971 4 355 9218</li> <br/>

<li>Kindly note that Hotel Check- in time is 14:00 hrs. Check-out time is 12:00 hrs. In case of an early arrival before the check in time, rooms must be booked from the previous night with the corresponding charges in order to guarantee an early check in.</li> <br/>

<li>Late checkout is subject to availability and Hotel Policy and Charges may apply. Hotel Reserves the Rights to Cancel the Rooms Booking Automatically After18:00 Hours, If Hotel is not Informed about the late arrivals </li> <br/>

<li>In case of late check in, kindly inform us on info@diamondtoursdubai.com with the flight details, so as to further inform the hotels. Failure to do so will lead to No show and further cancellation of the booking and Diamond Tours LLC Tourism will not be responsible for the same. </li> <br/>

<li>Kindly note Tourism Dirham is to be paid by the guest on check out, If it is not included in the booking amount.  </li> <br/>

<li>As per the new taxation rules of UAE, 5% VAT will be implemented for all hospitality related services from 1st Jan 2018. In case of any Cancellation, No Show, Diamond Tours LLC Cancellation Policy will be apply. Even in case where the hotel has agreed for refund, the cancellation charges will be decided upon Diamond Tours LLC Cancellation Policy It has nothing to do with Hotel and Supplier. Agent are not authorized to speak to the Hotel or Supplier directly.  </li> <br/>

<li>Kindly note few hotels may charge a refundable security deposit at the time of check in, this may be the respective hotel policy, Diamond Tours LLC is not responsible for the same.  </li> <br/>

<li>The extra bed depends on hotel to hotel policy as per the hotel standards. It can be Sofa cum bed / Rollaway Bed / Mattress subject to availability.  </li> <br/>

<li>All rooms are guaranteed on the day of arrival. In case of a no-show, your room(s) will be released and you will be subject to the terms and conditions of the Cancellation/No-Show Policy specified at the time you made the booking.  </li> <br/>

<li>The total price for this booking does not include mini-bar items, telephone usage, laundry service. etc.</li> <br/>
												</ul>
												</textarea>
												</div>
											</div>

										</div>
										<div id="action_btns" class="mt-3 d-flex align-items-baseline">
											<div class="col-xl-12">
												<!-- <button id="submtVoucherbtn" type="button" class="float-right new_btn px-3">Submit</button> -->
												<button onclick="subVoucherAjax()" id="submtVoucherBTN" type="button" class="float-right new_btn px-3">Submit</button>
												<!-- <button onclick="download_pdf()"  id="submtVoucherPrint" type="button" class="mr-3 float-right new_btn px-3">Download</button> -->
												<button onclick="sendEmail()"  id="submtVoucherEmail" type="button" class="mr-3 float-right new_btn px-3">Send Mail</button>
												<a href="<?php echo base_url(); ?>HotelVoucher/view_hotels_voucher" class="mr-3 float-right new_btn px-3">Back</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						<?php endif ?>
					</div>
				</div>
			</div>

		</div>

		<div class="state-overview">
		</div>
	</div>
</div>

</div>


<?php $this->load->view('footer'); ?>

<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
	CKEDITOR.replace('impInfo');
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<style>

input {
    outline: auto;
    padding: 1rem;
}

</style>