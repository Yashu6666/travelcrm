<?php $this->load->view('header');?>
<link rel="stylesheet" href="<?php echo base_url();?>public/css/invoice.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/index.css">
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
							<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
								href="dashboard.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
							</li>
							<li>&nbsp;<a class="parent-item"
								href="<?php echo site_url();?>transfer/view_transfers">Transfer</a>&nbsp;<i class="fa fa-angle-right"></i></li>
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
								<form action="<?php echo site_url();?>transfer/updateTransferroute/<?php echo $edit->id;?>" method="post">
								<div class="card-body ">

							
									
										<div style="margin-top: 10px;">

											<div class="row ml-4 mt-4">
											<label style="font-weight: bold;">Transport Type</label>
												<tr>
													<td>
														<label class="mdl-radio mdl-js-radio ml-2" for="option1">
															<input type="radio" id="option1" name="transport_type"
															class="mdl-radio__button ml-4" <?php echo $edit->transport_type=="oneway"?"checked":""?> value="oneway" checked>
															<span class="mdl-radio__label">Iternal Transfer</span>
														</label>
													</td>
													<td>
														<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect ml-2"
														for="option2">
														<input type="radio" id="option2" name="transport_type"
														class="mdl-radio__button" value="round"  <?php echo $edit->transport_type=="round"?"checked":""?>>
														<span class="mdl-radio__label">Return Transfer</span>
													</label>

											<label class="input ml-4" >
                                                            <input class="input__field invoice-width" type="text"
                                                                name="start_city" placeholder=" " value="<?php echo $edit->start_city?>"
																 id="billTo"
                                                                autocomplete="off" />
                                                            <span class="input__label">Pickup Location<span
                                                                    class="colorRed">*</span></span>
                                                            <!-- <span id="spanBilledTo" class="colorRed"></span> -->
                                            </label>

											
											<label class="input ml-4">
                                                            <input class="input__field invoice-width" type="text"
                                                                name="dest_city" placeholder=" " value="<?php echo $edit->dest_city?>"  id="billTo"
                                                                autocomplete="off" />
                                                            <span class="input__label">Drop Off Location<span
                                                                    class="colorRed">*</span></span>
                                                            <!-- <span id="spanBilledTo" class="colorRed"></span> -->
                                            </label>

											<!-- <label class="input ml-4">
                                                            <input class="input__field invoice-width" type="text"
                                                                name="route_name" placeholder=" "  value="<?php echo $edit->route_name?>"  id="billTo"
                                                                autocomplete="off" />
                                                            <span class="input__label">Display Name<span
                                                                    class="colorRed">*</span></span>
                                            </label> -->


										</div>

										<div class="col d-flex justify-content-center">
									<label class="row input" style="width: 43%;">
										<input class="input__field invoice-width" type="text" name="route_name" placeholder=" "  value="<?php echo $edit->route_name?>" id="billTo" autocomplete="off" />
										<span class="input__label">Display Name<span class="colorRed">*</span></span>
									</label>
									</div>


											<div style="margin-top: 50px;">

											</div>
										

													
												</div>

												<!-- <div style="margin-top: 30px;">

													<table class="table table-hover">
														<thead>
															<tr>
																<th>Description(Shown to the client)</th>
																<th>Pick up Point Area</th>
																<th>Drop Point</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																	<td><input type="text" placeholder=""
															class="form-control " name="client_description"></td>
															<label class="ml-4"></label>
															<td><input type="text" placeholder=""
																class="form-control " name="pickup"></td>
																<td><input type="text" placeholder="" class=" form-control" name="droppoint">
																</td>
																	</tr>
																</tbody>
																
															</table>
														</div>
													</div>
												</div> -->
											</div>
										</div>
									

														<div class="table-scrollable">
															<div class="row">
																<div class="col-md-12 col-sm-12">
																	<div class="panel tab-border card-box">
																		<div class="row">															
																			<div class="ml-4 mt-4">
																				<label style="font-weight: bold;">Vehicle Cost</label>
																				
																			</div>
																			<div class="ml-4"></div>
																			

																			<div class="nav nav-tabs mt-4" role="tablist">
																				<div style="display:none;">
																					<input id="optDaily"  <?php echo $edit->cost_type=="Normal"?"checked":"disabled"?>  name="intervaltype" type="radio" data-target="#scheduleDaily" value="Normal">
																					<label for="optDaily">Normal</label>
																				</div>
																				<div class="ml-4" style="display:none;">
																					<input id="optWeekly"  <?php echo $edit->cost_type=="HourBased"?"checked":"disabled"?>  name="intervaltype" type="radio" data-target="#scheduleWeekly" value="HourBased">
																					<label for="optWeekly" >Hour Based</label>
																				</div>
																			</div>
																		</div>

																		<div style="margin-top: 30px;">

																		</div>
																		<div class="tab-content">
																			<div id="scheduleDaily" class="tab-pane active">
																				<table  class="table">
																					<thead>
																						<tr>
																						<th>Currency</th>													
																							<th>Upto PAX</th>
																						
																							<th>Cost</th>
																							
																						</tr>
																						
																					</thead>
																					<tbody id="tbody_id">
																					<td><select class="form-control" name="currency">
																						<option <?php echo $edit->currency=="AED"?"Selected":""?> value="AED">AED</option>
																								<option <?php echo $edit->currency=="USD"?"Selected":""?> value="USD">USD</option>
																					</select></td>
																				
																					<td><input type="text" placeholder="PAX" class="form-control" name="seat_capacity" value="<?php echo $edit->seat_capacity?>" id="seat_capacity"></td>
																				
																					<td class="d-flex"><input type="text" placeholder="Cost" class="form-control" value="<?php echo $edit->cost?>" name="cost">
																					<!-- <input type="button" value="Add" onclick="addNewRow()" id="" class="new_btn px-3 ml-5" /></td> -->
																				
																					<!-- <button class="btn btn-danger btn-xs">
																				<i class="fa fa-trash-o "></i>
																			</button> -->
																			
																			</tr>
																		</tbody>
																	</table>
																	
																</div>
																<div id="scheduleWeekly" class="tab-pane">
																	<table  class="table table-hover">
																		<thead>
																			<tr>
																			<th>Currency</th>
																				<th>Upto Pax</th>
																			
																				<th>Per Hour Cost</th>
																			</tr>
																			
																		</thead>
																		<tbody>
																			
																					</select></td>
																					<td><select class="form-control" name="currency_hour">
																						<option <?php echo $edit->currency_hour=="AED"?"Selected":""?>  value="AED">AED</option>
																								<option <?php echo $edit->currency_hour=="AED"?"Selected":""?>  value="USD">USD</option>
																					</select>
																			</td>
																				<td><input type="text" value="<?php echo $edit->seat_capacity_hour?>" placeholder="PAX" class="form-control" name="seat_capacity_hour" id="seat_capacity_hour"></td>
																			
																				<td><input type="text" value="<?php echo $edit->per_hour_cost?>" placeholder="Per Hour Cost" name="per_hour_cost" class="form-control"></td>
																			
																			
																			</tbody>
																		</table>
																		
																	</div>

																	<div class="form-group">
																		<div class="offset-md-5 col-md-9">
																			<button type="submit" class="new_btn px-3">Submit</button>
																			<button type="button" class="new_btn px-3">Cancel</button>
																		</div>
																	</div>
																</div>
																</from>
															</div>
															
															
														</div>

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

		<?php $this->load->view('transfer/footer');?>
		<script>
 $(document).ready(function () {
var type="<?php echo $edit->cost_type ?>";

if(type=="Normal"){
$("#scheduleDaily").show();	
$("#scheduleWeekly").hide();
}else{
	$("#scheduleWeekly").show();
	$("#scheduleDaily").hide();		
}

 })
		</script>

				
<!-- 
<script>
		let new_row_id = 1;
	function addNewRow(){
			let row_data = `<tr id="tr_id${new_row_id}">
							<td><select class="form-control" name="currency[]">
									<option value="AED">AED</option>
									<option value="USD">USD</option>
								</select></td>

							<td><input type="text" placeholder="PAX" class="form-control" name="seat_capacity[]" ></td>

							<td class="d-flex">
								<input type="text" placeholder="Cost" class="form-control" name="cost[]">
								<button type="button" class="btn btn-danger ml-5 mt-0 py-2"  onclick="removeNewRow(${"tr_id"+new_row_id})"><i class="fa fa-trash"></i></button>
							</td>

							</tr>`;
			$("#tbody_id").append(row_data);
			new_row_id++;
		}

		function removeNewRow(id){
			// document.getElementById()
			// var values = $("input[name='seat_capacity[]']")
            //   .map(function(){return $(this).val();}).get();
			  
            //   console.log("🚩 ~ file: add_transfer_route.php ~ line 262 ~ removeNewRow ~ values", values)

			$(id).remove();
		}
</script> -->