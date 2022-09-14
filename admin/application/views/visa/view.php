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
								<div class="page-title">Visa</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                    href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
							<li class="active">Visa</li>
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
									<header>Visa</header>
									
								</div>
                                <div class="card-body ">
									<div class="row p-b-20">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group">
												<a href="<?php echo site_url();?>visa/add_visa" id="addRow" class="new_btn px-3">
													Add Visa <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6">
											
										</div>
									</div>
								<div class="card-body ">
								<div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width"
											id="example4">	<thead>
												<tr>
													<th>S.No</th>
                                                    <th>Visa Category</th>
													<th>Visa Type</th>
                                                    <!-- <th>Processing Time</th>
													<th>Validity</th> -->
                                                    <th>Adult Rates </th>
													<th>Child  Rates</th>
                                                    <th>Infant Rates </th>
													
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												
									<?php $cnt=0;
									 foreach ($view as $key ) { $cnt++?>
										<tr>
													<td><?php echo $cnt;?> </td>
                                                    <td><?php echo $key->visa_category;?></td>
                                                    <td><?php echo $key->entry_type;?></td>
                                                    <!-- <td><?php echo $key->process_time;?></td>
                                                    <td><?php echo $key->visa_validity;?></td> -->
                                                    <td><?php echo $key->adult;?></td>
                                                    <td><?php echo $key->child;?></td>
                                                    <td><?php echo $key->infant;?></td>
													<td>
														<!-- <a class="btn btn-primary btn-xs" href="<?php echo site_url();?>visa/edit_visa/<?php echo $key->id;?>">
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-danger btn-xs" href="<?php echo site_url();?>visa/delete_visa/<?php echo $key->id;?>" onclick="return confirm('Are you sure you want to delete..?');">
															<i class="fa fa-trash-o "></i>
														</a> -->

														<a  class="btn btn-tbl-edit btn-xs"  href="<?php echo site_url();?>visa/edit_visa/<?php echo $key->id;?>" >
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-tbl-delete btn-xs"  href="<?php echo site_url();?>visa/delete_visa/<?php echo $key->id;?>"  onclick="return confirm('Are you sure you want to delete..?');">
															<i class="fa fa-trash-o "></i>
														</a>
														
													</td>
												</tr>

										<?php	}	?>		
												
												
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
