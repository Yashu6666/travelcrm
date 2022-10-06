<?php $this->load->view('header'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/invoice.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/index.css">
<!-- start page container -->
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
						<div class="page-title">Edit Transfer</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li>&nbsp;<a class="parent-item" href="<?php echo site_url(); ?>transfer/view_transfers">Transfer</a>&nbsp;<i class="fa fa-angle-right"></i></li>
						<li class="active">Edit Transfer</li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="card-box">
						<div class="card-head">
							<header>Edit Transfer</header>
						</div>
						<div style="margin-top: 30px;">


						</div>
						<form action="<?php echo site_url(); ?>transfer/updateTransferroute/<?php echo $edit->id; ?>" method="post">
							<div class="card-body ">

							<div class="card-body row text-capitalize">
							<label style="font-weight: bold;">Transport Type</label>
							<input  type="radio" id="option1" name="transport_type" class="mdl-radio__button ml-4" <?php echo $edit->transport_type == "oneway" ? "checked" : "" ?> value="oneway" checked /> internal city/hotel transfer
							<input  type="radio" id="option2" name="transport_type" class="mdl-radio__button" <?php echo $edit->transport_type == "round" ? "checked" : "" ?> value="round"/> airport return transfer
						</div>
						<div class="card-body row" id="trans_main">

						

							<div class="col-lg-3 p-t-20">
									<div>
										<label for="sample2"><b>Pickup Location</b></label>

										<input class="form-control" name="start_city" placeholder=" " value="<?php echo $edit->start_city ?>" id="billTo" autocomplete="off">

									</div>
								</div>

								<div class="col-lg-3 p-t-20">
									<div>
										<label for="sample2"><b>Drop Off Location</b></label>
										<input class="form-control"  name="dest_city" placeholder=" " value="<?php echo $edit->dest_city ?>" id="billTo" autocomplete="off">

									</div>
								</div>

								
								<div class="col-lg-6 p-t-20">
									<div>
										<label for="sample2"><b>Display Name</b></label>
										<input class="form-control"type="text" name="route_name" placeholder=" "  value="<?php echo $edit->route_name ?>" id="billTo" autocomplete="off">

									</div>
								</div>

								<div class="mt-4 ">
									<label style="font-weight: bold;">Vehicle Cost</label>
								</div>

								<div class="col-12 d-flex">

								<div class="col-4 p-t-20">
								<label for="text1"><b>Currency</b></label>

								<select class="form-control" name="currency">
									<option <?php echo $edit->currency == "AED" ? "Selected" : "" ?> value="AED">AED</option>
									<option <?php echo $edit->currency == "USD" ? "Selected" : "" ?> value="USD">USD</option>
								</select>
								</div>

								<div class="col-4 p-t-20">
									<div class="">
										<label class="" for="text1"><b>Upto Pax</b></label>

										<input type="number" value="<?php echo $edit->seat_capacity ?>" placeholder="PAX" class="form-control" name="seat_capacity">
									</div>
								</div>

								<div class="col-4 p-t-20">
									<div class="">
										<label class="" for="text1"><b>Cost</b></label>
										<input type="number" value="<?php echo $edit->cost ?>" step="any" placeholder="Cost" class="form-control" name="cost">
									</div>
								</div>
								</div>

								
							</div>

							<div class="form-group mb-4">
								<div class="offset-md-5 col-md-9">
									<button type="submit" class="new_btn px-3">Submit</button>
									<button type="button" class="new_btn px-3">Cancel</button>
								</div>
							</div>
						</from>
					</div>
					</div>

					<!-- end chat sidebar -->
				</div>
				<!-- end page container -->
				<!-- start footer -->
			</div>

			<!-- end page content -->
			<!-- start chat sidebar -->

		</div>
		<!-- end footer -->
	</div>

	<!-- start footer -->

</div>
<!-- end page content -->
<!-- start chat sidebar -->

</div>
<!-- end footer -->
</div>

<?php $this->load->view('transfer/footer'); ?>
<script>
	$(document).ready(function() {
		var type = "<?php echo $edit->cost_type ?>";

		if (type == "Normal") {
			$("#scheduleDaily").show();
			$("#scheduleWeekly").hide();
		} else {
			$("#scheduleWeekly").show();
			$("#scheduleDaily").hide();
		}

	})
</script>

