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
						<div class="page-title">Add Transfer</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li>&nbsp;<a class="parent-item" href="<?php echo site_url(); ?>transfer/view_transfers">Transfer</a>&nbsp;<i class="fa fa-angle-right"></i></li>
						<li class="active">Add Transfer</li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="card-box">
						<div class="card-head">
							<header>Add Transfer </header>
						</div>
						<div style="margin-top: 30px;">


						</div>
						<form action="<?php echo site_url(); ?>transfer/addTransferroute" method="post">
							<div class="card-body ">

							<div class="card-body row text-capitalize">
							<label style="font-weight: bold;">Transport Type</label>
							<input  type="radio" id="option1" name="transport_type" class="mdl-radio__button ml-4" value="oneway" checked /> internal city/hotel transfer
							<input  type="radio" id="option2" name="transport_type" class="mdl-radio__button" value="round"/> airport return transfer
						</div>
						<div class="card-body row" id="trans_main">

						

							<div class="col-lg-3 p-t-20">
									<div>
										<label for="sample2"><b>Pickup Location</b></label>

										<input class="form-control" name="start_city" placeholder=" " id="billTo" autocomplete="off">

									</div>
								</div>

								<div class="col-lg-3 p-t-20">
									<div>
										<label for="sample2"><b>Drop Off Location</b></label>
										<input class="form-control"  name="dest_city" placeholder=" " id="billTo" autocomplete="off">

									</div>
								</div>

								
								<div class="col-lg-6 p-t-20">
									<div>
										<label for="sample2"><b>Display Name</b></label>
										<input class="form-control"type="text" name="route_name" placeholder=" " id="billTo" autocomplete="off">

									</div>
								</div>

								<div class="col-12 mt-4 ">
									<label style="font-weight: bold;">Vehicle Cost</label>
								</div>

								<div class="col-12 d-flex">

								<div class="col-4 p-t-20">
								<label for="text1"><b>Currency</b></label>

								<select class="form-control" name="currency[]">
									<option value="AED">AED</option>
									<option value="USD">USD</option>
								</select>
								</div>

								<div class="col-4 p-t-20">
									<div class="">
										<label class="" for="text1"><b>Upto Pax</b></label>

										<input type="number" placeholder="PAX" class="form-control" name="seat_capacity[]">
									</div>
								</div>

								<div class="col-4 p-t-20">
									<div class="">
										<label class="" for="text1"><b>Cost</b></label>
										<div class="d-flex">
											<input type="number" step="any" placeholder="Cost" class="form-control" name="cost[]">
											<input type="button" value="Add" onclick="addNewRow()" id="" class="new_btn px-3 ml-5" />
										</div>
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
	</div>
	<div style="padding: 3rem; background-color: #222c3c;">
		<?php $this->load->view('footer'); ?>
	</div>

	<script>
		// let new_row_id = 1;

		// function addNewRow() {
		// 	let row_data = `<tr id="tr_id${new_row_id}">
		// 					<td><select class="form-control" name="currency[]" id="tr_sel${new_row_id}">
		// 							<option value="AED">AED</option>
		// 							<option value="USD">USD</option>
		// 						</select></td>

		// 					<td><input type="number" placeholder="PAX" class="form-control" name="seat_capacity[]" id="tr_cap${new_row_id}"></td>

		// 					<td class="d-flex">
		// 						<input type="number" step="any" placeholder="Cost" class="form-control" name="cost[]">
		// 						<button type="button" class="btn btn-danger ml-5 mt-0 py-2"  onclick="removeNewRow(${"tr_id"+new_row_id})"><i class="fa fa-trash"></i></button>
		// 					</td>

		// 					</tr>`;
		// 	$("#tbody_id").append(row_data);
		// 	new_row_id++;
		// }
		let new_row_id = 1;
		function addNewRow() {
			let row_data = 	`<div class="d-flex col-12" id="tr_id${new_row_id}">
								<div class="col-4 p-t-20">
								<select class="form-control" name="currency[]" id="tr_sel${new_row_id}">
									<option value="AED">AED</option>
									<option value="USD">USD</option>
								</select>
								</div>

								<div class="col-4 p-t-20">
									<div class="">
										<input type="number" placeholder="PAX" class="form-control" name="seat_capacity[]" id="tr_cap${new_row_id}">
									</div>
								</div>

								
								<div class="col-4 p-t-20">
									<div class="">
										<div class="d-flex">
											<input type="number" step="any" placeholder="Cost" class="form-control" name="cost[]">
											<button type="button" class="btn btn-danger ml-5 mt-0 py-2"  onclick="removeNewRow(${"tr_id"+new_row_id})"><i class="fa fa-trash"></i></button>
										</div>
									</div>
								</div>
								</div>`;
			$("#trans_main").append(row_data);
			new_row_id++;
		}


		function removeNewRow(id) {
			// document.getElementById()
			// var values = $("input[name='seat_capacity[]']")
			//   .map(function(){return $(this).val();}).get();

			//   console.log("🚩 ~ file: add_transfer_route.php ~ line 262 ~ removeNewRow ~ values", values)

			$(id).remove();
		}
	</script>