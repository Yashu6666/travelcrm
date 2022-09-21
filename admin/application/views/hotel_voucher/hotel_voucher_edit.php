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
						<div class="page-title">Edit Hotel Voucher</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="<?php echo base_url(); ?>HotelVoucher/view_hotels_voucher">Hotel Voucher</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">Edit Hotel Voucher</li>
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
											<?php foreach (explode(',',$hotel[0]->nights) as $key => $value) : ?>

												<div class="mt-3 row d-flex align-items-baseline ">
													<div class="bg-dark col-xl-12">
														<div id="HD_header" class="form-row p-3 rounded-lg">
															<div class="col d-flex just">
																<label for="" class="col-form-label text-white">Hotel Name:</label>
																<label style="flex: 0 0 50%; max-width: 50%;white-space: nowrap;" class="col-form-label col-xl-6 mx-3 text-white"><?php print_r(explode(',',$hotel[0]->hotel_name)[$key]) ?>
																<?php if(isset($hotel_details[$key]->hotelstars)) : ?>	
																	<?php echo str_repeat("⭐",$hotel_details[$key]->hotelstars); ?>
																<?php endif ?>
																</label>
															</div>

															<div>
															<div class="col text-center ">
															<label for="" class="col-form-label text-white d-flex ml-4">Booking Date: 
															<input style="flex: 0 0 50%;max-width: 49%;margin-left: 77px !important;" class="col-xl-6 form-control" value="<?php echo $booking_date ?>">
															</label>
															<div class="col d-flex justify-content-end">
																<label for="" class=" col-form-label text-white">Confirmation Number:</label>
																<input style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" id="conf_number_<?php echo $key; ?>" value=<?php print_r(explode(',',$hotel[0]->hotel_id)[$key]); ?> name="conf_number[<?php echo $key; ?>]" placeholder="Enter Confirmatin Number Here">
																<input type="hidden" name="hotel_id[<?php echo $key; ?>]" value=<?php print_r(explode(',',$hotel[0]->hotel_id)[$key]); ?>>
																<input type="hidden" name="hotel_name[<?php echo $key; ?>]" value='<?php print_r(explode(',',$hotel[0]->hotel_name)[$key]) ?>'>
																<input type="hidden" name="booking_date[<?php echo $key; ?>]" value=<?php echo $hotel[0]->created_at; ?>>
															</div>
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
															<div class="col d-flex just">
																<label for="" class=" col-form-label">Check-in</label>
																<input style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" placeholder=<?php echo $check_in; ?>>
																<input type="hidden" name="check_in[<?php echo $key; ?>]" value=<?php print_r(explode(',',$hotel[0]->checkin)[$key]); ?>>
															
															</div>
															<!-- <?php
															$date = new DateTime(explode(',',$hotel[0]->checkin)[$key]);
															$date->modify('+' . explode(',',$hotel[0]->nights)[$key] . ' day');
															$checkout =  $date->format('d-M-Y');
															?>

															<div class="col d-flex just">
																<label for="" class=" col-form-label">Check-in</label>
																<input style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" placeholder=<?php echo $date->format('d-m-Y'); ?>>
																<input type="hidden" name="check_in[<?php echo $key; ?>]" value=<?php print_r(explode(',',$hotel[0]->checkin)[$key]); ?>>
															</div> -->
															<input type="hidden" name="check_out[<?php echo $key; ?>]" value=<?php echo $checkout; ?>>

															<div class="col d-flex">
																<label for="" class=" col-form-label">No of Nights</label>
																<span class="input-group-text ml-3" style="height: 34px;" id="basic-addon1"><i class="fa-solid fa-moon"></i></span>
																<input style="flex: 0 0 50%; max-width: 50%;"  aria-describedby="basic-addon1" class="form-control col-xl-6" placeholder="<?php print_r(explode(',',$hotel[0]->nights)[$key]); ?>">
															</div>
															
															<div class="col d-flex">
																<label for="" class=" col-form-label">Check-out</label>
																<input style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" placeholder=<?php echo $checkout; ?>>
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
																	<th scope="col">Children Ages</th>
																	<th scope="col">Meals Board</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><?php print_r(explode(',',$hotel[0]->room_type)[$key]); ?></td>
																	<td><?php echo $details->room; ?></td>
																	<td><?php echo $details->adult; ?></td>
																	<td><?php echo $details->child; ?></td>
																	<td>--</td>
																	<td><input type="text" class="form-control" id="board_<?php echo $key; ?>" name="board[<?php echo $key; ?>]"></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											<?php endforeach; ?>
											<!-- endforech -->
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
															<td><input type="text" id="guest_name" class="form-control" name="guest_name[<?php echo $key; ?>]"></td>
															<td><?php echo $guest->b2bfirstName." ".$guest->b2blastName ?></td>
															<td><?php echo $guest->b2bEmail ?></td>
															<td><?php echo $guest->b2bmobileNumber ?></td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="mt-3 row d-flex align-items-baseline new_bg_header">
												<div class="col-xl-12">
													<h4 style="color: white;" class="text-white">Important Information : Hotel</strong></h4>
												</div>
											</div>

											<div class="mt-3 row d-flex">
												<div class="col-xl-12">
												<input type="hidden" id="query_id" name="query_id" value=<?php echo $query_id; ?>>
												<input type="hidden" id="email_id" name="email_id" value=<?php echo $guest->b2bEmail; ?>>
												<input type="hidden" id="base_url_id" name="base_url" value=<?php echo site_url(); ?>>
												<textarea id="impInfo" name="impInfo">
												<?php foreach (explode(',',$hotel[0]->room_type) as $key => $value) : ?>
												<p>
												<?php print_r($hotel_details[$key]->hotelname); ?>, 
													
												<?php print_r(explode(',',$hotel[0]->room_type)[$key]); ?>, 
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152c22.1 0 40-17.9 40-40s-17.9-40-40-40s-40 17.9-40 40s17.9 40 40 40z"/></svg>
												
												
												<?php if(isset($hotel_details[$key]->hotelmapaddress)) : ?>	
													<?php print_r($hotel_details[$key]->hotelmapaddress); ?>, 
												<?php endif ?>

												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
												
												<?php if(isset($hotel_details[$key]->hotelphone)) : ?>	
													<?php print_r($hotel_details[$key]->hotelphone); ?></p> 
												<?php endif ?>
												
												<?php endforeach ?>
												</textarea>
												</div>
											</div>

										</div>
										<div id="action_btns" class="mt-3 d-flex align-items-baseline">
											<div class="col-xl-12">
												<!-- <button id="submtVoucherbtn" type="button" class="float-right new_btn px-3">Submit</button> -->
												<button onclick="subVoucherAjax()" id="submtVoucherBTN" type="button" class="float-right new_btn px-3">Update</button>
												<button onclick="download_pdf()"  id="submtVoucherPrint" type="button" class="mr-3 float-right new_btn px-3">Download</button>
												<button onclick="sendEmail()"  id="submtVoucherEmail" type="button" class="mr-3 float-right new_btn px-3">Send Mail </button>
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

<script>
    let hotel_ids = '<?php echo json_encode(explode(',',$hotel[0]->hotel_id)); ?>';
    let query_id = '<?php print_r($hotel[0]->query_id); ?>';
    
    JSON.parse(hotel_ids).forEach((id,index) => {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url()?>HotelVoucher/getConfirmation",
      data: {
        query_id: query_id,
        hotel_id: id,
      },
      success: function (result) {
        console.log("🚩 ~ file: hotel_voucher_edit.php ~ line 256 ~ JSON.parse ~ result", result)
        document.getElementById('conf_number_'+index).value = JSON.parse(result).confirmation_id;
        document.getElementById('board_'+index).value = JSON.parse(result).board;
        document.getElementById('guest_name').value = JSON.parse(result).guest_name;
      },
      error: function () {
        console.log("Error");
      },
    });
    });
</script>