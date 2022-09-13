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
								<div class="page-title">Invoice Report</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Invoice Report</li>

							</ol>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									
								</div>

								<div class="card-body ">
									<div class="d-flex justify-content-between">

										<div class="ml-4">
											<div class="row ">
												<div class="col-md-12  ">
													<input type="date" class="border invoice-input p-1">
													<input type="date" class="border invoice-input p-1">
													<div class="btn-group">
														<button type="button" class="ml-3 new_btn px-3">Clear</button>
													</div>
												</div>

											</div>
										</div>

										<div class="tools">
											<div class="dropdown">
												
												<label for="" class="ml-4"><b>Export</b></label>
												<select class="pdf">
													<option value="">PDF</option>
													<option value="">Word</option>
												</select>
											</div>
										</div>
									</div>
									
									<div class="table-scrollable">
										<table
											class="full-width no-footer order-column table table-hover text-center"
											id="example4">
										
											<thead>
												<tr>
													<th class="center">Name </th>
													<th class="center">Total Invoice </th>
													<th class="center">Received Amount </th>
													<th class="center">Due Amount</th>
													<th class="center">Total Amount</th>
													<th class="center">Completed</th>
													<th class="center"> Pending </th>
													<!-- <th class="center"> Cold </th>
													<th class="center"> Verbal Confirmed </th>
													<th class="center"> Confirmed Payment Failed </th>
													<th class="center"> Own </th>
													<th class="center"> Rejected Lost </th>
													<th class="center"> Verbal Confirmed </th>
													<th class="center"> Confirmed Payment Failed </th>  -->
													
												</tr>
											</thead>
											<tbody>
										<?php foreach($query_report as $key){ 
											$reportsTo=$key->reportsTo;
											$countsent= $this->db->query("SELECT * FROM b2bcustomerquery WHERE status='Sent' AND reportsTo='$reportsTo'")->result();
											$countnotsent= $this->db->query("SELECT * FROM b2bcustomerquery WHERE status='pending' AND reportsTo='$reportsTo'")->result();
											$total=count($countsent)+count($countnotsent);
											?>			
												<tr>
													<td><?php echo $key->reportsTo;?></td>
													<td><?php echo $total;?></td>
													<td><?php echo count($countsent);?></td>
													<td><?php echo count($countnotsent);?></td>
													<td>0</td>
													<td>0</td>
													<td>0</td>
													
													<!-- <td>0</td>
													<td>0</td>
													<td>0</td>
													<td>0</td>
													<td>0</td>
													<td>0</td>
													<td>0</td>
													<td>0</td>
													<td>0</td> -->
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
		</div>

		<!-- end page container -->
		<?php $this->load->view('footer');?>