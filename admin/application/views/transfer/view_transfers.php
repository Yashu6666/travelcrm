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
								<div class="page-title">Transfer Route</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                    href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="#">Transfer</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Transfer</li>
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
									<header>Transfer </header>
																	</div>
                                <div class="card-body ">
									<div class="row p-b-20">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group flex-column">
												<a href="<?php echo site_url();?>transfer/add_transfer_route" id="addRow" class="new_btn px-3">
													Add New <i class="fa fa-plus"></i>
												</a>
												<a id="multiDel" onclick="delMulti()" class="new_btn px-3 mt-2">
												Delete All <i class="fa fa-trash"></i>
											</a>
											</div>
										</div>
										<div class="col-md-6 col-sm-6 col-6">
											
										</div>
									</div>
								<div class="card-body ">
									<div class="table-responsive">
										<table class="table table-hover full-width" id="example4">
											<thead>
												<tr>
													<th></th>
													<th>S.No</th>
													<th>Transport Type</th></th>
													<th>Display Name</th>
													<th>Pickup</th></th>
													<th>Drop Off</th>
													<th>Upto Pax</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>

												<?php 
												$cnt=0;
												foreach ($view as $key) { $cnt++;

													$transport_type ="";
												if($key->transport_type == "round") $transport_type = "Return Transfer";
												else $transport_type = "Internal Transfer";
												?>
													<tr>
													<td><input type="checkbox" class="del_checkbox" value="<?php echo $key->id;?>"></td>
													<td><?php echo $cnt;?> </td>
													<td><?php echo $transport_type;?></td>
													<td><?php echo $key->route_name;?></td>
													 <td><?php echo $key->start_city;?></td>
													<td><?php echo $key->dest_city;?></td>
													<td><?php echo $key->seat_capacity;?></td>
												
													<td>
														<a  class="btn btn-tbl-edit btn-xs" href="<?php echo site_url();?>transfer/edit_route/<?php echo $key->id;?>"  >
															<i class="fa fa-pencil"></i>
														</a>
														<a class="btn btn-tbl-delete btn-xs" href="<?php echo site_url();?>transfer/delete_route/<?php echo $key->id;?>" onclick="return confirm('Are you sure you want to delete..?');">
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
<div style="padding: 5rem; background-color: #222c3c;">
	<?php $this->load->view('footer'); ?>
</div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
	function delMulti(){
		let del_ids = [];
		$(".del_checkbox").each(function() {
		let val = $(this).val();
		let isChecked = $(this).is(':checked');
		if(isChecked){
			del_ids.push($.trim(val));
		}
		});

		$.ajax({
			type: "POST",
			dataType: "json",
			url: '<?php echo site_url(); ?>/transfer/delete_multiple',
			data: {
			'data': del_ids,
			},
			success: function(response) {
				toastr.success("Deleted Successfully");
				setTimeout(function(){
					window.location.reload(1);
					}, 0500);
			}
			})
	}
</script>