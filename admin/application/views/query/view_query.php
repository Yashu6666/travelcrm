
<?php $this->load->view('header');?>
	 <link rel="stylesheet" href="<?php echo base_url();?>public/css/index.css">  
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
								<div class="page-title">Queries</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Queries</li>

							</ol>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<div class="tools">
										<!-- <a href="#"><img src="xlsc.png" alt="noimg" srcset="" class="xlscImg"></a> -->
									</div>
									<div class="tools">
										<button class="new_btn show-modal-btn4 sidebar-toggler" id="show-modal-btn1">Add New +</button>
									</div>

								</div>
								<div class="card-body ">
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
									<div class="row ">
										<div class="col-md-12  ">
											<div class="btn-group">
												<a href="<?php echo site_url();?>query/view_query/Overall"  id="addRow" class="new_btn ml-0">
													Overall (<?php echo $overall ?>)
												</a>
											</div>
											<div class="btn-group">
												<a href="<?php echo site_url();?>query/view_query/Inprogress" id="addRow" class="new_btn " style="background: #3197ffd6;">
													In Progress (<?php echo $inprogress ?>)
												</a>
											</div>
											<!-- <div class="btn-group">
												<a href="<?php echo site_url();?>query/view_query/recent" id="addRow" class="new_btn">
													Recent (<?php echo $recent ?>)
												</a>
											</div> -->
											<div class="btn-group">
												<a href="<?php echo site_url();?>query/view_query/Confirmed"  id="addRow" class="new_btn" style="background: #08cd04;">
													Confirmed (<?php echo $confirmed ?>)
												</a>
											</div>
											<div class="btn-group">
												<a href="<?php echo site_url();?>query/view_query/Rejected"  id="addRow" class="new_btn" style="background: #ff023d;">
													Rejected (<?php echo $rejected ?>)
												</a>
											</div>
											<div class="btn-group">
												<a href="<?php echo site_url();?>query/view_query/Callback"  id="addRow" class="new_btn" style="background: #ff6d9c;">
													Call Back (<?php echo $callback ?>)
												</a>
											</div>
											

										</div>

									</div>

									<div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width"
											id="example4">
											<thead>
												<tr><th class="center"> S.No </th>
													<th class="center"> Query Date </th>
													<th class="center"> Query ID </th>

													<th class="center"> Name/Mobile </th>
													<th class="center"> Description </th>
													<th class="center"> Travel Date </th>
													<th class="center"> Pax </th>
												
													<th class="center"> Lead Stage </th>
													<!-- <th class="center">  </th> -->
													<th class="center"> Action </th>
												</tr>
											</thead>
											<tbody>
												<?php $cnt = 0;
												// echo '<pre>';print_r($result);exit;
												foreach($result as $val){ $cnt++;?>
												<tr class="odd gradeX" id="<?php echo $cnt ?>">
													<td class="center"><?php echo $cnt ?></td>
													<td class="center"><?php echo date('d M Y H:i:s' , strtotime($val['created_at'])) ?></td>
													<td class="center"><?php echo $val['query_id'] ?></td>
													<td class="center"><?php echo $val['name']?> <br> <?php echo $val['mobile'] ?></td>
													<td class="center"><?php echo $val['Description'] ?></td>
													<td class="center"><?php echo date('d M Y' , strtotime($val['traveldate'])) ?></td>
													<td class="center"><?php echo $val['nopax'] ?></td>
												
													<td class="center d-flex flex-column">
													
														<select  id="mySelect<?php echo $val['id'] ?>" onchange="myFunction(<?php echo $val['id'] ?>)"  <?php echo $val['lead_stage']=="Confirmed"?"disabled":""  ?> >
															<option <?php echo $val['lead_stage']=="Inprogress"?"selected":"" ?> value="Inprogress">Inprogress</option>
															<!-- <option <?php //echo $val['lead_stage']=="Recent"?"selected":""  ?>  value="Recent">Recent</option> -->
															<option  <?php echo $val['lead_stage']=="Confirmed"?"selected":""  ?> value="Confirmed">Confirmed</option>
															<option <?php echo $val['lead_stage']=="Rejected"?"selected":""  ?> value="Rejected">Rejected</option>
															<option <?php echo $val['lead_stage']=="Callback"?"selected":""  ?> value="Callback">Callback</option>
															<!-- <option <?php //echo $val['lead_stage']=="Overall"?"selected":""  ?> value="Overall">Overall</option> -->
														</select>
													
														<!-- <td class="center">
														<button class="btn btn-primary show-modal-btn8-cls" onclick="follow_up(<?php echo $val['query_id'] ?>)" id="show-modal-btn8">Follow Ups</button>
														</td> -->
														<button class="new_btn mt-2 show-modal-btn8-cls" onclick="follow_up(<?php echo $val['query_id'] ?>)" id="show-modal-btn8">Follow Ups</button>


												</td>
													<td class="center">
													<a href="#"><button class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-eye "></i>
														</button></a>
														
														<a href="#"><button class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-edit "></i>
														</button></a>

													<a href="<?php echo site_url();?>query/delete_query/<?php echo $val['id']?>"><button class="btn btn-tbl-delete btn-xs"  onclick="return confirm('Are you sure to Delete..?')">
															<i class="fa fa-trash-o "></i>
														</button></a>

													</td>
												</tr>
												<?php } ?>
											</tbody>
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
		
			<!-- end chat sidebar -->
		</div>

		
		<div id="overlay8">
			<div id="modal8" style="height:fit-content !important;">
				<div class="modal_head_bg8 modal-head8">
					<h4 class="  pl-4 ">Add To Do/Follow Up</h4>
				</div>
				<button class="close_btn8 close_modal_btn8-cls" id="close_modal_btn8">X</button>
				<form action="<?php echo site_url();?>query/addFollowUp" method="post">
				<div class="modal-body">
				
					<div>
						<input type="radio" name="followUptype"  value="call" checked="">Call
						<input type="radio"  name="followUptype" value="meeting">Meeting
						<input type="radio" name="followUptype" value="todo">To Do
						<input type="radio" name="followUptype" value="none">None
						<p class="inline">Remind in <b>15mins</b></p>
					</div>
					<div class="mt-2">
						<input type="radio" name="followUpday" checked=""  value="today">Today
						<input type="radio" name="followUpday" value="tomorrow">Tomorrow
						<input type="radio" name="followUpday" value="2days">in 2 Days
						<input type="radio" name="followUpday" value="3days">in 3 Days
					</div>


					<div class="row mb-3 mt-2 ">

						<div class="col">
							<label class="input">
								<input class="input__field input-time" type="time" placeholder="" name="followUpTime" autocomplete="off" />
								<span class="input__label">Time</span>
							</label>
							
						</div>
					</div>

					<div class="row  mb-3">
						<div class="col">
							<label class="input mr-3">
								<input class="input__field fname" type="text" placeholder="" id="followUpCustomerName" autocomplete="off" name="followUpCustomer" />
								<span class="input__label">Customer</span>
							</label><br>
							

						</div> 
						<div class="col ml-5">
							<label for="" class="ml-5" >Assign To</label>
							<select name="followUpAssignTo" id="" class="Travelers-select-visa-tour ml-3">
								<?php foreach($assign_to as $val) :?>
								<?php if($val == $this->session->userdata('admin_username')) :?>
									<option selected value="<?php echo $val ?>"><?php echo $val ?></option>
								<?php else :?>
									<option value="<?php echo $val ?>"><?php echo $val ?></option>
								<?php endif ?>
								<?php endforeach ?>
							</select>
						</div>
						
					</div>
					<input type="hidden" id="followUpQueryId" name="followUpQueryId">
					<div class="row  ">
						<div class="col">
							<label class="input mr-5" >
								<input class="input__field fname" type="text" placeholder="" autocomplete="off" name="followUpdetails" />
								<span class="input__label">Details</span>
							</label><br>
							

						</div>
						
					</div>


				</div>

				<div class="modal_head_bg8 modal-head8">
					<h4 class="  pl-4 ">Update Query Status and Lead Quality</h4>
				</div>

				<div class="modal-body">
					<div >
						<input type="radio" name="followUpQueryStatus" value="No Status">No Status
						<input type="radio" name="followUpQueryStatus" value="Hot" checked="">Hot
						<input type="radio" name="followUpQueryStatus" value="Warm">Warm
						<input type="radio" name="followUpQueryStatus" value="Cold">Cold
					</div>
					<label class="input mr-5 mt-2" >
						<input class="input__field fname" type="text" placeholder="" 
							autocomplete="off"  name="followUpRemarks" />
						<span class="input__label">Remarks</span>

					</label><br>
					<div class="d-flex justify-content-between mr-5 ml-5 mt-2" style="margin-bottom:10px !important">

						<a href="#" class="query-modal-btn mr-3 close-modal-btn">Cancel</a>
						<button type="submit" class="query-modal-btn">Submit</button>
					</div>
					</form>
				</div>
			</div>
		</div>










<?php $min = 8000; $max = 9000;  
					$number = rand($min, $max);
					 ?>
		<form action="<?php echo site_url();?>query/package/<?php echo $number ?>" method="post" onsubmit="return validation();">

			<div id="overlay1">
				<div id="modal1" style="height:fit-content !important;max-width:50vw !important;">

					<div class="modal_head_bg modal-head">
						<h3 class="pl-4 pt-3">Add B2B Agent</h3>
					</div>

					<button class="close_btn1  sidebar-toggler" id="close_modal_btn1">X</button>

			<div class="modal-body" id="material">
                    <div class="row">
                        <input type="hidden" name="query_id" value="<?php echo $number;?>">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                            <div class="form-group dropdown-menuWidth">
                                <label for="b2bagencyname"><b>Company Name</b> <span class="colorRed">*</span></label>
                                <input type="text" autocomplete="off" class="form-control whbg" name="b2bcompanyName" id="company" placeholder="Company Name" value="" required>

                                <br><span id="spanCompany" class="spanCompany"></span>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="b2bagency_emailid"><b>Email-Id</b> <span class="colorRed">*</span></label>
 								<input name="b2bEmail" id="email" maxlength="50" class="form-control" type="text" placeholder="Email-Id" value="" autocomplete="off" required>
                            </div>

                            <br> <span id="spanEmail" class="spanCompany"></span>
                        </div>
                       
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="form-group">
								<label for="b2bagent_firstname" class="form-control-placeholder"><b>First Name</b> <span class="colorRed">*</span></label>
                                <input type="text" class="form-control whbg" name="b2bfirstName" id="firstName" value="" placeholder="First Name" required> 

                                <br><span id="spanFname" class="spanCompany"></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                            	 <label for="b2bagent_lastname" class="form-control-placeholder"><b>Last Name</b></label>
                                <input type="text" class="form-control whbg" placeholder="Last Name" name="b2blastName" id="lastName" value=""> 
                                <br>
																												<span id="spanLname" class="spanCompany"></span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="form-group">

                                <div class="txtfieldMain textfieldMain_mobile form-group active" style="border: 0px solid #000;">
                                    <label for="b2bagent_mobilenum" class="mobilenumber_labelshow"><b>Mobile Number</b> <span class="colorRed">*</span> </label>
                                   <input type="tel" pattern="[0-9]{10}" minlength="10" maxlength="10" class="form-control whbg" name="b2bmobileNumber" id="phoenVal" value="" placeholder="Mobile Number" required>
	 <span id="spanPhone" class="spanCompany"></span>
                               
                            </div>
	</div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="form-group reportsToDropdown active">

							<div class="txtfieldMain textfieldMain_mobile form-group active" style="border: 0px solid #000;">
                                    <label for="b2bagent_mobilenum" class="mobilenumber_labelshow"><b>Staff</b> <span class="colorRed">*</span> </label>
                                   <input type="text" class="form-control whbg" name="reportsTo" value="<?php echo $this->session->userdata('admin_username');?>" readonly >
	 <span id="spanPhone" class="spanCompany"></span>
                               
                            </div>

                            
                            </div>
                        </div>

                        <!-- <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                            	<label for="b2bagent_remarks" class="form-control-placeholder"><b>Remarks</b></label>
                                <textarea type="textarea" class="form-control whbg" name="b2bagent_remarks" id="b2bagent_remarks"></textarea>
                                
                            </div>
                        </div> -->
                    </div>
                    <div class="clear"></div>
                </div>
					<div class="d-flex justify-content-center mr-5 ml-5 " style="margin-bottom:10px !important">

						<a href="" style="width:17%" class="new_btn mr-3  sidebar-toggler">Cancel</a>
						<!-- <a href="package.html" class=">Save</a>	 -->
						<button type="submit" style="width:17%" class="new_btn">Save</button>
					</div>
				</div>
			</div>
		</form>

<?php $this->load->view('footer');?>
<script src="<?php echo base_url();?>public/js/validate.js"></script>

<script>
	
	function follow_up(id){
		document.getElementById("overlay8").style.display = "block";
		document.getElementById("followUpQueryId").value = id;
		let result = <?php echo json_encode($result) ?>;
		let obj = result.find(o => o.query_id == id);
		document.getElementById("followUpCustomerName").value = obj.name;
		
	}

	$( document ).ready(function() {
		// $('.show-modal-btn8-cls').click(function(){
		// 	$( "#overlay8" ).attr( "style", "display:block" );				
		// });
		$('.close_modal_btn8-cls').click(function(){
			$( "#overlay8" ).attr( "style", "display:none" );				
		});
		$('.close-modal-btn').click(function(){
			$( "#overlay8" ).attr( "style", "display:none" );				
		});


		
		
	});
	function myFunction(id) {
		// alert(id);
		var x = document.getElementById("mySelect"+id).value;
		// var type = document.getElementById("mySelect"+type).value;
	
		$.ajax({
				type:'POST',
				dataType:'JSON',
				url:'<?php echo site_url();?>query/updatestatus',
				data:{
				'id': id,
				'status':x,
				// 'type':type
				},
				success:function(response)
				{
				window.location.reload();					
				}
			});

	}
		 const overlay1 = document.getElementById("overlay1");

		document.querySelector(".show-modal-btn4").addEventListener("click", () => {

			overlay1.style.display = "block";
		});

		document.querySelector("#close_modal_btn1").addEventListener("click", () => {

			overlay1.style.display = "none";


		});


		// const overlay8 = document.getElementById("overlay8");

		// document.querySelector("#show-modal-btn8").addEventListener("click", () => {

		// 	overlay8.style.display = "block";
		// });

		// document.querySelector("#close_modal_btn8").addEventListener("click", () => {

		// 	overlay8.style.display = "none";

		// });
		
	</script>

<style>
	.form-control:focus {
	color: #495057;
	background-color: #fff;
	border-color: #80bdff !important;
	outline: 0;
	box-shadow: 0 0 0 .2remrgba(0,123,255,.25);
	}
</style>