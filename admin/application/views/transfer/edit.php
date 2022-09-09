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
						<div class="page-title">Vehicle</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
							href="<?php echo site_url();?>transfer/vehicle">Vehicle</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">Edit Vehicle</li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="card-box">
						<div class="card-head">
							<header>Edit Vehicle</header>
						</div>
						<form action="<?php echo site_url();?>transfer/updateVehicledetails/<?php echo $edit->id;?>" method="post" enctype="multipart/form-data">
						<div class="card-body row">

							<div class="col-lg-4 p-t-20">
								<div
								class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
								<label for="sample2" class="mdl-textfield__label">Car Type											</label>


								<select data-mdl-for="sample2" class="mdl-textfield__input" value="" readonly tabIndex="-1" name="car_type">
									<option value="<?php echo $edit->car_type;?>"><?php echo $edit->car_type;?></option>
									<option value="SUV">SUV</option>
									<option value="Luxury">Luxury</option>
								</select>
							</div>
						</div>

						<div class="col-lg-4 p-t-20">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="text" id="text1" name="car_name" value="<?php echo $edit->car_name;?>">
								<label class="mdl-textfield__label" for="text1">Car Name</label>
							</div>
						</div>
						<div class="col-lg-4 p-t-20">
							<div class="mdl-textfield mdl-js-textfield">
								<input class="mdl-textfield__input" type="text" id="text2" name="seat_capacity" value="<?php echo $edit->seat_capacity;?>">
								<label class="mdl-textfield__label" for="text2">Seating Capacity</label>
							</div>
						</div>

						<div class="col-lg-4 p-t-20">
							<div
							class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
							<label for="sample2" class="mdl-textfield__label">AC</label>

							<select data-mdl-for="sample2" class="mdl-textfield__input" name="ac" value="" readonly tabIndex="-1">
								<option value="<?php echo $edit->ac;?>"><?php echo $edit->ac;?></option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>

						</div>
					</div>
					<div class="col-lg-6 p-t-20">
					<img src="<?php echo base_url().$edit->files;?>" width="100">
					<img src="<?php echo base_url().$edit->files1;?>" width="100">
				
						<div class="mdl-textfield mdl-js-textfield">
							
								<div class="form-group">
									<input type="file" class="form-control-file" id="exampleFormControlFile1" name="files"> 
									<input type="hidden" name="old_path" value="<?php echo $edit->files;?>">
								</div>
						
						</div>

						<div class="mdl-textfield mdl-js-textfield">
							
							<div class="form-group">
								<input type="file" class="form-control-file" id="exampleFormControlFile1" name="files1"> 
								<input type="hidden" name="old_path1" value="<?php echo $edit->files1;?>">
							</div>
					
					</div> 
						</div>
						<div class="col-lg-12 p-t-20 center">
							<button type="submit" 
							class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
							Update
						</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>					<!-- start widget -->
	<div class="state-overview">
	</div>
	<!-- end widget -->
	<!-- chart start -->
	<!-- Chart end -->

	<!-- start Payment Details -->

	<!-- end Payment Details -->

</div>
</div>

<!-- end chat sidebar -->
</div>
<!-- end page container -->

<?php $this->load->view('footer');?>