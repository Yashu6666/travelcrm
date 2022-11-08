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
                        <div class="page-title">Itinerary</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Itinerary</li>

                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box ">
                        <div class="card-head">
                            <div class="d-flex justify-content-start m-3">
                                <a href="<?php echo site_url();?>itinerary/add"><button type="button"
                                    class="new_btn px-3">Add New +</button></a>
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
                                <div class="p-4">
                                <div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width"
											id="exampleReport2">
                                    <thead>
                                        <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Guest Name</th>
                                        <th scope="col">Start Destination</th>
                                        <th scope="col">End Destination</th>
                                        <th scope="col">Travel Start Date</th>
                                        <th scope="col">No of nights </th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        <?php $i=1;foreach ($view as $key) {?>
                                           
                                        <tr>
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $key->transfer;?></td>
                                            <td><?php echo "Guest Name";?></td>
                                            <td><?php echo $key->transfer_pickup;?></td>
                                            <td><?php echo $key->transfer_dropoff;?></td>
                                            <td><?php echo $key->transfer_from_date;?></td>
                                            <td><?php echo $key->day;?></td>                                          
                                            <td>
                                                <a class="btn btn-tbl-edit btn-xs" href="#">
															<i class="fa fa-edit "></i>
												</a>
												<a class="btn btn-tbl-delete btn-xs" href="#" onclick="return confirm('Are you sure to Delete..?')">
															<i class="fa fa-trash-o "></i>
												</a>
                                            </td>
                                        </tr>
                            <?php } ?>
                    </tbody>
                </table>

            </div>
            </div>
        </div>
    </div>

</div> <!-- start widget -->
<div class="state-overview">
</div>

</div>

</div>

<?php $this->load->view('footer');?>
        <!-- end page content -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js" defer></script>
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
				  title: 'Hotel Voucher Data',
			  },
			  {
				  extend: 'excelHtml5',
				  text: '<i class="fa-solid fa-file-excel fa-2x"></i>',
				  title: 'Hotel Voucher Data',
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