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
							href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
							href="#">Transfer</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">Vehicle</li>
					</ol>
				</div>
			</div>

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



			<div class="row">
				<div class="col-md-12">
					<div class="card card-box">
						<div class="card-head">
							<header>Vehicle</header>
							
						</div>
						<div class="card-body ">
							<div class="row p-b-20">
								<div class="col-md-6 col-sm-6 col-6">
									<div class="btn-group">
										<a href="<?php echo site_url();?>transfer/add_vehicle" id="addRow" class="btn btn-info">
											Add Vehicle <i class="fa fa-plus"></i>
										</a>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-6">

								</div>
							</div>

							<div class="card-body ">
								<div class="table-scrollable">
									<table class="table table-hover table-checkable order-column full-width" id="example4">
										<thead>
											<tr>
												<th> Car Type</th>
												<th>Car</th>
												<th>AC</th>

												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($view as $key ) { ?>
											<tr> 
												<td><?php echo $key->car_type;?></td>
												<td><?php echo $key->car_name;?></td>
												<td><span class="label label-warning label-mini"><?php echo $key->ac;?></span>
												</td>
												<td>
													<a class="btn btn-primary btn-xs" href="<?php echo site_url();?>transfer/edit_vehicle/<?php echo $key->id;?>">
														<i class="fa fa-pencil"></i>
													</a>
													<a class="btn btn-danger btn-xs" onclick="return confirm('Are you sure, you want to delete?');" href="<?php echo site_url();?>transfer/delete_vehicle/<?php echo $key->id;?>">
														<i class="fa fa-trash-o "></i>
													</a>
												</td>
											</tr>
											<?php	} ?>
											
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- start widget -->
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