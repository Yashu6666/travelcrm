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
						<div class="page-title">Package</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
							href="<?php echo site_url();?>">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li>&nbsp;Inventory&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">Package</li>							
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
							<header>All Packages</header>
							</div>
						<div class="card-body ">
							<div class="row p-b-20">
								<div class="col-md-6 col-sm-6 col-6">
									<div class="btn-group">
										<a href="<?php echo site_url();?>package/add_package" id="addRow" class="btn btn-info">
											Add Inventory Package <i class="fa fa-plus"></i>
										</a>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-6">

								</div>
							</div>
							<div class="table-scrollable">
								<table class="table table-hover table-checkable order-column full-width"
								id="example4">
								<thead>
									<tr><th class="center"> Pkg.No</th>

										<th class="center ml-4"> Package Name </th>
										<th class="center"> Cities </th>
										<th class="center"> Supplier Name </th>
										<th class="center"> Created By </th>
										<th class="center"> Days </th>
										<th class="center"> Type </th>
										<th class="center"> Price PP (double Occupancy)</th>
										<th class="center"> Expiry Date</th>
										<th class="center"> Action </th>
									</tr>
								</thead>
								<tbody>
									<?php for($i=0;$i<count($view);$i++){?>
									<tr class="odd gradeX">
										<td class="center" style="font-size: small;"><?php echo $i+1;?></td>

										<td class="center" style="font-size: small;"><?php echo $view[$i]->package_name;?></td>
										<td class="center" style="font-size: small;"><?php echo $view[$i]->city_name;?> </td>
										<td class="center" style="font-size: small;"><?php echo $view[$i]->supplier;?></td>
										<td class="center" style="font-size: small;">Eric Marks</td>
										<td class="center" style="font-size: small;">8N/9D</td>
										<td class="center" style="font-size: small;">Standard</td>
										<td class="center" style="font-size: small;">NA</td>
										<td class="center" style="font-size: small;">19-Jul-22</td>
										<td class="center">
											<a href="<?php echo site_url();?>package/delete_package/<?php echo $edit->id;?>" class="btn btn-tbl-delete btn-xs">
												<i class="fa fa-trash-o "></i>
											</a>

											<a href="#"><button class="btn btn-tbl-edit btn-xs">
												<i class="fa fa-edit "></i>
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