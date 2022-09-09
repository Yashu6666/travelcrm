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
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="#">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
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
								<label style="margin-left: 30px;" class="input">
									<?php if (isset($query_id)) : ?>
										<input style="height: 36px;" class="input__field" value="<?php echo $query_id ?>" type="text" name="query_id" placeholder="Query ID " id="billTo" autocomplete="off" />
									<?php else : ?>
										<input style="height: 36px;" class="input__field" type="text" name="query_id" placeholder="Query ID " id="billTo" autocomplete="off" />
									<?php endif ?>

								</label>
								<button type="submit" class="new_btn px-3">Search</button>
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
											<div class="row d-flex align-items-baseline new_bg_header">
												<hr>
												<div class="col-xl-12">
													<h4 class="text-white text-center ">Voucher / Accommodation</h4>
												</div>
											</div>
											<div class="mt-3 row d-flex align-items-baseline new_bg_header">
												<div class="col-xl-12">
													<h4 class="text-white text-center">Booking - Voucher - Hotel</h4>
												</div>
											</div>

											<div class="mt-3 row d-flex align-items-baseline new_bg_header">
												<div class="col-xl-12">
													<h4 class="text-white">Hotel Details</h4>
												</div>
											</div>

											<?php foreach (explode(',',$hotel[0]->nights) as $key => $value) : ?>

												<div class="mt-3 row d-flex align-items-baseline ">
													<div class="bg-dark col-xl-12">
														<div id="HD_header" class="form-row p-3 rounded-lg">
															<div class="col d-flex just">
																<label for="" class="col-form-label text-white">Hotel Name:</label>
																<label style="flex: 0 0 50%; max-width: 50%;" class="col-form-label col-xl-6 mx-3 text-white"><?php print_r(explode(',',$hotel[0]->hotel_name)[$key]) ?></label>
															</div>
															<div class="col d-flex">
																<label for="" class=" col-form-label text-white">Confirmation Number:</label>
																<input style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" id="conf_number_<?php echo $key; ?>" name="conf_number[<?php echo $key; ?>]" placeholder="Enter Confirmatin Number Here">
																<input type="hidden" name="hotel_id[<?php echo $key; ?>]" value=<?php print_r(explode(',',$hotel[0]->hotel_id)[$key]); ?>>
																<input type="hidden" name="hotel_name[<?php echo $key; ?>]" value='<?php print_r(explode(',',$hotel[0]->hotel_name)[$key]) ?>'>
																<input type="hidden" name="booking_date[<?php echo $key; ?>]" value=<?php echo $hotel[0]->created_at; ?>>
															</div>
														</div>
													</div>
													<div class="border border-bottom-0 border-top-0 col-xl-12">
														<div class=" form-row p-3 rounded-lg">
															<div class="col d-flex just">
																<label for="" class=" col-form-label">Check-in</label>
																<input style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" placeholder=<?php print_r(explode(',',$hotel[0]->checkin)[$key]); ?>>
																<input type="hidden" name="check_in[<?php echo $key; ?>]" value=<?php print_r(explode(',',$hotel[0]->checkin)[$key]); ?>>
															<!-- <change> -->
															</div>
															<?php
															$date = new DateTime(explode(',',$hotel[0]->checkin)[$key]);
															$date->modify('+' . explode(',',$hotel[0]->nights)[$key] . ' day');
															$checkout =  $date->format('Y-m-d');
															?>
															<input type="hidden" name="check_out[<?php echo $key; ?>]" value=<?php echo $checkout; ?>>

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
																	<th scope="col">Adults</th>
																	<th scope="col">Children</th>
																	<th scope="col">Children Ages</th>
																	<th scope="col">Board</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><?php print_r(explode(',',$hotel[0]->room_type)[$key]); ?></td>
																	<td><?php echo $details->adult; ?></td>
																	<td><?php echo $details->child; ?></td>
																	<td>--</td>
																	<td><input type="text" class="form-control" name="board[<?php echo $key; ?>]"></td>
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
															<th scope="col">Nationality: </th>
															<th scope="col">Guest Email Id:</th>
															<th scope="col">Guest Mobile No:</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><?php echo $guest->b2bfirstName . ' ' . $guest->b2blastName ?></td>
															<td>indian</td>
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
												<textarea id="impInfo" name="impInfo"></textarea>
												</div>
											</div>

										</div>
										<div id="action_btns" class="mt-3 d-flex align-items-baseline">
											<div class="col-xl-12">
												<!-- <button id="submtVoucherbtn" type="button" class="float-right new_btn px-3">Submit</button> -->
												<button onclick="subVoucherAjax()" id="submtVoucherBTN" type="button" class="float-right new_btn px-3">Submit</button>
												<button onclick="printVoucher()"  id="submtVoucherPrint" type="button" class="mr-3 float-right new_btn px-3">Print</button>
												<button onclick="sendEmail()"  id="submtVoucherEmail" type="button" class="mr-3 float-right new_btn px-3">Send Mail to Customer</button>
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