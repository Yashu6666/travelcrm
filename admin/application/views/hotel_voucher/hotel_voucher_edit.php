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
											<div class="mt-3 row d-flex align-items-baseline" style="background-color:#28166f">
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
																	<?php echo str_repeat("???",$value->hotel_category); ?>
															</label>
															</div>

															<div>
															<div class="col d-flex justify-content-end">
																<label for="" class=" col-form-label text-white">Confirmation Number:</label>
																<input style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" id="conf_number_<?php echo $key; ?>" value="#" name="conf_number[<?php echo $key; ?>]" placeholder="Enter Confirmatin Number Here">
																<input type="hidden" name="hotel_id[<?php echo $key; ?>]" value=<?php echo $value->hotel_name ?>>
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
																<input style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" placeholder=<?php echo (new DateTime($value->check_in))->format('d-M-Y'); ?>>
																<input type="hidden" name="check_in[<?php echo $key; ?>]" value=<?php echo $value->check_in; ?>>
															
															</div>
															<input type="hidden" name="check_out[<?php echo $key; ?>]" value=<?php echo $value->check_out; ?>>


															<div class="col d-flex">
																<label for="" class=" col-form-label">No of Nights</label>
																<input style="flex: 0 0 50%; max-width: 50%;"  aria-describedby="basic-addon1"  class="mx-3 form-control col-xl-6" placeholder='???? <?php echo $value->no_of_nights; ?>'>
															</div>

															

															<div class="col d-flex">
																<label for="" class=" col-form-label">Check-out</label>
																<input  style="flex: 0 0 50%; max-width: 50%;" class="form-control col-xl-6 mx-3" placeholder=<?php echo (new DateTime($value->check_out))->format('d-M-Y'); ?>>
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
																	<td><input type="text" class="form-control" id="board_<?php echo $key; ?>" name="board[<?php echo $key; ?>]"></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											<?php endforeach; ?>


											<div class="mt-3 row d-flex align-items-baseline" style="background-color:#28166f">
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
															<td><?php echo $guest->b2bcompanyName ?></td>
															<td><?php echo $guest->b2bEmail ?></td>
															<td><?php echo $guest->b2bmobileNumber ?></td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="mt-3 row d-flex align-items-baseline" style="background-color:#28166f">
												<div class="col-xl-12">
													<h4 style="color: white;" class="text-white">Notes</strong></h4>
												</div>
											</div>

											<div class="mt-3 row d-flex">
												<div class="col-xl-12">
												<input type="hidden" id="query_id" name="query_id" value=<?php echo $query_id; ?>>
												<input type="hidden" id="email_id" name="email_id" value=<?php echo $guest->b2bEmail; ?>>
												<input type="hidden" id="base_url_id" name="base_url" value=<?php echo site_url(); ?>>
												<textarea id="impInfo" name="impInfo">

												</textarea>
												</div>
											</div>

										</div>
										<div id="action_btns" class="mt-3 d-flex align-items-baseline">
											<div class="col-xl-12">
												<!-- <button id="submtVoucherbtn" type="button" class="float-right new_btn px-3">Submit</button> -->
												<button onclick="subVoucherAjax()" id="submtVoucherBTN" type="button" class="float-right new_btn px-3">Update</button>
												<!-- <button onclick="download_pdf()"  id="submtVoucherPrint" type="button" class="mr-3 float-right new_btn px-3">Download</button> -->
												<!-- <button onclick="sendEmail()"  id="submtVoucherEmail" type="button" class="mr-3 float-right new_btn px-3">Send Mail </button> -->
												<button  data-id="" data-bs-toggle="modal" data-bs-target="#sendMailHV" id="sendMail" type="button" class="mr-3 float-right new_btn px-3">Send Mail</button>
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

<div class="modal fade" id="sendMailHV" tabindex="-1" aria-labelledby="sendMailModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background: #d9a927;">
        <h5 class="modal-title" id="sendMailModalLabel">Send Email</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
			<input class="form-control w-75" type="text" placeholder=" " value="<?php echo $guest->b2bEmail; ?>" id="hv_email" 
				autocomplete="off" />
            <input type="hidden" placeholder="" value="<?php echo $query_id; ?>" id="hv_queryId"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" onclick="sendEmail()" id="send_hv_mail" class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>


<?php $this->load->view('footer'); ?>

<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
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
	$(document).ready(function() { 
	CKEDITOR.replace('impInfo');

    let hotel_data = '<?php echo json_encode($final_hotel_details); ?>';
	let	hotel_ids = [];
	JSON.parse(hotel_data).forEach(element => {
		hotel_ids.push(element.hotel_id);
	});
    let query_id = '<?php print_r($hotel[0]->query_id); ?>';
    
    (hotel_ids).forEach((id,index) => {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url()?>HotelVoucher/getConfirmation",
      data: {
        query_id: query_id,
        hotel_id: id,
        row: index,
      },
      success: function (result) {
        document.getElementById('impInfo').innerHTML = JSON.parse(result).notes;
        document.getElementById('conf_number_'+index).value = JSON.parse(result).data.confirmation_id;
        document.getElementById('board_'+index).value = JSON.parse(result).data.board;
        document.getElementById('guest_name').value = JSON.parse(result).data.guest_name;
        console.log("???? ~ file: hotel_voucher_edit.php:292 ~ JSON.parse(result).data.guest_name", JSON.parse(result).data.guest_name)
      },
      error: function () {
        console.log("Error");
      },
    });
    });

});
</script>