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
						<div class="page-title">Rooms</div>
					</div>
					<ol class="breadcrumb page-breadcrumb pull-right">
						<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
							href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
						</li>
						<li class="active">Rooms</li>

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
							<header>All Rooms</header>
							</div>
						<div class="card-body ">
							<div class="row p-b-20">
								<div class="col-md-6 col-sm-6 col-6">
									<div class="btn-group">
										<a href="<?php echo site_url();?>room/add_room" id="addRow" class="new_btn px-3">
											Add New <i class="fa fa-plus"></i>
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
									<tr><th class="center"> S.No </th>
									<th class="center"> Hotel </th>
										<th class="center"> Room Type </th>
									
										<th class="center"> City </th>
										<th class="center"> From Date </th>
										<th class="center"> To Date </th>
										<th class="center"> Action </th>
									</tr>
								</thead>
								<tbody>
									<?php for($i=0;$i<count($view);$i++)
									{ 
										$hotel=$this->db->where('id', $view[$i]->hotelname)->get('hotel')->row();
										
										?>
									<tr class="odd gradeX">
										<td class="center"><?php echo $i+1;?></td>
										<td class="center"> <?php echo $hotel->hotelname;?> </td>
										<td class="center"> <?php echo $view[$i]->roomtype;?> </td>
									
										<td class="center"><?php echo $hotel->hotelmapaddress;?> </td>
										<td class="center"> <?php
										$date=date_create($view[$i]->from_date);
										echo date_format($date,"d-m-Y");
										?> </td>
										<td class="center"> <?php 
											$date=date_create($view[$i]->to_date);
											echo date_format($date,"d-m-Y");?> </td>
										<td class="center">
											
											<a class="btn btn-tbl-edit btn-xs" href="<?php echo site_url();?>room/edit_room/<?php echo $view[$i]->id;?>">
												<i class="fa fa-edit "></i>
											</a>
											<a class="btn btn-tbl-delete btn-xs" href="<?php echo site_url();?>room/delete_room/<?php echo $view[$i]->id;?>" onclick="return confirm('Are you sure you want to delete..?');">
												<i class="fa fa-trash-o "></i>
											</a>
										</td>
									</tr>
								<?php }?>
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

					<?php $this->load->view('footer');?>