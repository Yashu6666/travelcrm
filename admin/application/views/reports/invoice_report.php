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

										<!-- <div class="tools mt-2">
											<div class="d-flex mx-5">
											<a href="#"><i class="fa-solid fa-file-pdf fa-2x mx-4"></i></a>
											<a href="#"><i class="fa-solid fa-file-excel fa-2x"></i></a>
											</div>
										</div> -->
									</div>
									
									<div class="table-scrollable">
										<table
											class="full-width no-footer order-column table table-hover text-center"
											id="exampleReport2">
										
											<thead>
												<tr>
													<th class="center">Name </th>
													<th class="center">Total Invoice </th>
													<th class="center">Received Amount </th>
													<th class="center">Due Amount</th>
													<th class="center">Total Amount</th>
													<th class="center">Completed</th>
													<th class="center"> Pending </th>
												</tr>
											</thead>
											<tbody>
											<?php foreach($result as $val) : ?>
												<tr>
												<td><?php echo $val['user'];?></td>
												<td><?php echo $val['total_queries'];?></td>
												<td><?php echo $val['total_invoice_val'];?></td>
												<td><?php echo $val['bal_invoice_val'];?></td>
												<td><?php echo $val['received_invoice_val'];?></td>
												<td><?php echo $val['completed'];?></td>
												<td><?php echo $val['pending'];?></td>
												</tr>
											<?php endforeach ?>   	

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
				  title: 'Invoice Report',
			  },
			  {
				  extend: 'excelHtml5',
				  text: '<i class="fa-solid fa-file-excel fa-2x"></i>',
				  title: 'Invoice Report',
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