
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
											id="exampleReport2">
											<thead>
												<tr><th class="center"> S.No </th>
													<th class="center"> Query Date </th>
													<th class="center"> Query ID </th>

													<th class="center"> TA Name </th>
													<th class="center"> Description </th>
													<th class="center"> Travel Date </th>
													<th class="center"> Pax </th>
												
													<th class="center"> Lead Stage </th>
													<!-- <th class="center">  </th> -->
													<th class="center"> Action </th>
												</tr>
											</thead>
											<tbody>
											<?php 
											// if($this->uri->segment(3) == 'Confirmed'){$styleColor = "background: #08cd04";}
											// elseif($this->uri->segment(3) == 'Inprogress'){$styleColor = "background: #3197ffd6";} 
											// elseif($this->uri->segment(3) == 'Rejected'){$styleColor = "background: #ff023d";} 
											// elseif($this->uri->segment(3) == 'Callback'){$styleColor = "background: #ff6d9c";} 
											// ?>
												<?php $cnt = 0;
												$styleColor ="";
												// echo '<pre>';print_r($result);exit;
												foreach($result as $key => $val){ $cnt++; $styleColor = ($key % 2 == 0) ? "background: #E6F5DA;" : "background: #E7E7E7;"   ?>

												<!-- ?php 
												
												if($val['lead_stage']=="Confirmed"){$styleColor = "background: #08cd04";}
												elseif($val['lead_stage']=="Inprogress"){$styleColor = "background: #3197ffd6";} 
												elseif($val['lead_stage']=="Rejected"){$styleColor = "background: #ff023d";} 
												elseif($val['lead_stage']=="Callback"){$styleColor = "background: #ff6d9c";}
												?> -->
												
												<tr class="odd gradeX" style="<?php echo $styleColor ?>" id="<?php echo $cnt ?>">
													<td class="center"><?php echo $cnt ?></td>
													<td class="center"><?php echo date('d M Y H:i:s' , strtotime($val['created_at'])) ?></td>
													<td class="center"><?php echo $val['query_id'] ?></td>
													<td class="center"><?php echo $val['company_name']?></td>
													<td class="center"><?php echo $val['Description'] ?></td>
													<td class="center"><?php echo date('d M Y' , strtotime($val['traveldate'])) ?></td>
													<td class="center"><?php echo $val['nopax'] ?></td>
												
													<td class="center d-flex flex-column">
														<select  id="mySelect<?php echo $val['id'] ?>" onchange="myFunction(<?php echo $val['qp_id'] ?>)"  <?php echo $val['lead_stage']=="Confirmed"?"disabled":""  ?> >
															<option <?php echo $val['lead_stage']=="Inprogress" ? "selected" : "" ?> value="Inprogress">Inprogress</option>
															<!-- <option <?php //echo $val['lead_stage']=="Recent"?"selected":""  ?>  value="Recent">Recent</option> -->
															<option  <?php echo $val['lead_stage']=="Confirmed" ? "selected" : ""  ?> value="Confirmed">Confirmed</option>
															<option <?php echo $val['lead_stage']=="Rejected" ? "selected" : ""  ?> value="Rejected">Rejected</option>
															<option <?php echo $val['lead_stage']=="Callback" ? "selected" : ""  ?> value="Callback">Callback</option>
															<!-- <option <?php //echo $val['lead_stage']=="Overall"?"selected":""  ?> value="Overall">Overall</option> -->
														</select>
													
														<!-- <td class="center">
														<button class="btn btn-primary show-modal-btn8-cls" onclick="follow_up(<?php echo $val['query_id'] ?>)" id="show-modal-btn8">Follow Ups</button>
														</td> -->
														<button class="new_btn mt-2 show-modal-btn8-cls" onclick="follow_up(<?php echo $val['query_id'] ?>)" id="show-modal-btn8">Follow Ups</button>


												</td>
												<?php if($val['Description'] == "Meals") : ?>
													<?php $build_type = "buildMealsEdit" ?>

												<?php elseif($val['Description'] == "Transfer") : ?>
													<?php $build_type = "buildTransferEdit" ?>

												<?php elseif($val['Description'] == "Excursion") : ?>
													<?php $build_type = "buildExcursionEdit" ?>

												<?php elseif($val['Description'] == "Package") : ?>
													<?php $build_type = "buildPackageEdit" ?>

												<?php elseif($val['Description'] == "Hotel") : ?>
													<?php $build_type = "buildHotelEdit" ?>

												<?php elseif($val['Description'] == "Visa") : ?>
													<?php $build_type = "buildVisaEdit" ?>
												<?php endif; ?>

													<td class="center">
													<a href="<?php echo site_url(); ?>query/<?php echo 'viewProposal/'.$val['query_id'] ?>"><button class="btn btn-tbl-edit btn-xs">
															<i class="fa fa-eye "></i>
														</button></a>
														
														<a href="<?php echo site_url(); ?>query/<?php echo $build_type.'/'.$val['query_id'] ?>"><button class="btn btn-tbl-edit btn-xs">
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
						<input type="radio" name="followUptype"  value="payment">Payment
						<input type="radio" name="followUptype"  value="call">Call
						<input type="radio"  name="followUptype" value="meeting">Meeting
						<input type="radio" name="followUptype" value="todo">To Do
						<input type="radio" name="followUptype" value="visa">Visa
					</div>
					<!-- <div class="mt-2">
						<input type="radio" name="followUpday" checked=""  value="today">Today
						<input type="radio" name="followUpday" value="tomorrow">Tomorrow
						<input type="radio" name="followUpday" value="2days">in 2 Days
						<input type="radio" name="followUpday" value="3days">in 3 Days
					</div> -->


					<div class="row mb-3 mt-2 ">

						<!-- <div class="col">
							<label class="input">
								<input class="input__field input-time" type="time" placeholder="" name="followUpTime" autocomplete="off" />
								<span class="input__label">Time</span>
							</label>
							
						</div> -->

					<div class="col">
                    	<label for="">Date</label>
                        <input class="input__field" type="date" name="followUpday" placeholder=" " autocomplete="off" />
                    </div>

                    <div class="col">
                    	<label for="">Time</label>
                        <input class="input__field" name="followUpTime" type="time" placeholder=" " autocomplete="off" />
                    </div>

					</div>

					<div class="row  mb-3">
						<div class="col">
							<label for="">Customer</label>
							<input class="input__field" type="text" id="followUpCustomerName" autocomplete="off" name="followUpCustomer" />
						</div>

						<div class="col">
							<label for="">Assign To</label>
							<select name="followUpAssignTo" id="" class="input__field">
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
						<!-- <div class="col">
							<label class="input mr-5" >
								<input class="input__field fname" type="text" placeholder="" autocomplete="off" name="followUpdetails" />
								<span class="input__label">Details</span>
							</label><br>
							

						</div> -->

						<div class="col">
							<label for="">Details</label>
							<textarea class="input__field" type="text" name="followUpdetails" autocomplete="off" name="followUpCustomer"></textarea>
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
					<div class="d-flex float-right mr-5 ml-5 mt-2" style="margin-bottom:10px !important">
						<a href="#" class="new_btn mr-3">Cancel</a>
						<button type="submit" class="new_btn mx-3">Submit</button>
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
                                <input type="text" autocomplete="off" class="form-control typeahead" name="b2bcompanyName" id="company" placeholder="Company Name" value="" required>

                                <br><span id="spanCompany" class="spanCompany"></span>

                            </div>
                        </div>

						<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                            <div class="form-group dropdown-menuWidth">
                                <label for="b2bagencyname"><b>Company Address</b> <span class="colorRed">*</span></label>
                                <input type="text" autocomplete="off" class="form-control whbg" name="b2bCompanyAddress" id="b2bCompanyAddress" placeholder="Company Address" value="" required>
                                <br><span id="spanCompany" class="spanCompany"></span>

                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="b2bagency_emailid"><b>Email-Id</b> <span class="colorRed">*</span></label>
 								<input name="b2bEmail" id="b2bemail" maxlength="50" class="form-control" type="text" placeholder="Email-Id" value="" autocomplete="off" required>
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
                                   <input type="tel" class="form-control whbg" name="b2bmobileNumber" id="phoenVal" value="" placeholder="Mobile Number" required>
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
<script src="   https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> 

<script>
	$('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get('<?php echo base_url('query/searchCompanyName');?>', { query: query}, function (data) {
                data = $.parseJSON(data);
                return process(data);
            });
			
        },
		afterSelect: function (data) {
			return $.get('<?php echo base_url('query/getCompanyDetails');?>', { name: data}, function (data) {
                data = $.parseJSON(data);
				$('#b2bCompanyAddress').val( data.b2bCompanyAddress);
				$('#b2bemail').val( data.b2bEmail);
				$('#firstName').val( data.b2bfirstName);
				$('#lastName').val( data.b2blastName);
				$('#phoenVal').val( data.b2bmobileNumber);
            });
		}
    });
</script>
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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
<script>

$(document).ready(function() {
  $('#exampleReport2').DataTable( {
	  dom: 'Bfrtip',
	  buttons: [
			  {
				  extend: 'pdfHtml5',
				  text: '<i class="fa-solid fa-file-pdf fa-2x"></i>',
				  title: 'Queries Data',
			  },
			  {
				  extend: 'excelHtml5',
				  text: '<i class="fa-solid fa-file-excel fa-2x"></i>',
				  title: 'Queries Data',
			  },
			 
	  ]
  } );
} );
</script>

<style>
  .dataTables_filter {
  float: left !important;
  }

  .dataTables_wrapper .dt-buttons {
	  float: right;
	  font-size: 2.5rem !important;
  }
</style>