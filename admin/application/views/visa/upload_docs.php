	<?php $this->load->view('header');?>
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
								<div class="page-title">Update Visa</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="dashboard.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li>&nbsp;<a class="parent-item"
									href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i></li>
									<li>&nbsp;<a class="parent-item"
										href="visa.html">Visa</a>&nbsp;<i class="fa fa-angle-right"></i></li>
									<li class="active">Update Visa</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-head">
									<header>Update Visa</header>
								</div>
														<div style="margin-top: 30px;">


															</div>

								<div class="card-body ">

								    <div class="table">
									<div class="row">
										<div class="ml-4">
										<label style="font-weight: bold;margin-left: 30px;">Document Submission</label>
										<tr>
											<td>
												<label class="mdl-radio mdl-js-radio ml-4" for="option1">
													<input type="radio" id="option1" name="gender"
														class="mdl-radio__button ml-4" checked>
													<span class="mdl-radio__label">Yes</span>
												</label>
											</td>
											<td>
												<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect"
													for="option2">
													<input type="radio" id="option2" name="gender"
														class="mdl-radio__button">
													<span class="mdl-radio__label">No</span>
												</label>
											</td>
											
									</tr>
									</div>
									<div style="margin-left: 40px;"></div>
									<div class=" row ml-4">
										<label style="font-weight: bold;margin-left: 5px;">Physical Interview</label>
										<div class="form-check ml-4">
											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
											<label class="form-check-label" for="exampleRadios1">
												Yes
											</label>
										  </div>
										  <div class="form-check ml-2">
											<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
											<label class="form-check-label" for="exampleRadios2">
												No
											</label>
										  </div>

										  </div>
										  <div style="margin-top: 30px;">
										<div class="row ml-4 mt-4">
											<div style="flex-direction: column;" class=" col ml-4 ">
												<div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
													Proof of Occupation</label></div>
											<div><input type="file" class="" placeholder=""></div>
										</div><div style="flex-direction: column;" class=" col ml-4 ">
											<div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
												One old Passport</label></div>
										<div><input type="file" class="" placeholder=""></div>
									</div>
											
								</div>
										  
										  <div class="row ml-4 mt-4">
											<div style="flex-direction: column;" class=" col ml-4 ">
												<div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
												Pan Card</label></div>
											<div><input type="file" class="" placeholder=""></div>
										</div>
										<div style="flex-direction: column;" class=" col ml-4 ">
											<div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
												Original Passport</label></div>
										<div><input type="file" class="" placeholder=""></div>
									</div>
										
										  </div>
										  <div class="row ml-4 mt-4">
											<div style="flex-direction: column;" class=" col ml-4 ">
												<div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
													Photo(51mm X 51mm)</label></div>
											<div><input type="file" class="" placeholder=""></div>
										</div>
										<div style="flex-direction: column;" class=" col ml-4 ">
											<div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
												Biometrics</label></div>
										<div><input type="file" class="" placeholder=""></div>
									</div>
											
										  </div>
										  <div class="row ml-4 mt-4">

										  <div style="flex-direction: column;" class=" col ml-4 ">
											<div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
												Basic Requirements</label></div>
										<div><input type="file" class="" placeholder=""></div>
									</div>
									<div style="flex-direction: column;" class=" col ml-4 ">
										<div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
											Photo</label></div>
									<div><input type="file" class="" placeholder=""></div>
								</div>
										 
										  </div>
										  <div class="row ml-4 mt-4">
											<div style="flex-direction: column;" class=" col ml-4 ">
												<div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
													Passport Scan</label></div>
											<div><input type="file" class="" placeholder=""></div>
										</div><div style="flex-direction: column;" class=" col ml-4 ">
											<div><label style="font-size: small;font-weight: bold;color: rgb(255, 174, 0);">
												Letters Addressed to the Embassy/Consulate</label></div>
										<div><input type="file" class="" placeholder=""></div>
									</div>
											
										  </div>
										  <div class="row ml-4 mt-4">
											
										<div style="flex-direction: column;" class=" col ml-4 ">
											<div><label style="font-size: small;font-weight: bold;color: rgb(255, 179, 0);">
												Photo(35mm X 45mm)</label></div>
										<div><input type="file" class="" placeholder=""></div>
									</div>
										  </div>
										  
									</div>
							</div>
							<div class="center mt-4"><div class="btn btn-primary"  id="update">
								Update</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('footer');?>
	   <script>
		$(document).ready(function () {
  $('input[name="intervaltype"]').click(function () {
      $(this).tab('show');
      $(this).removeClass('active');
  });
})

	</script>
	