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
                <div class="page-title">Query Report</div>
              </div>
              <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Query Report</li>

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
                      id="exampleReport1">
                      <thead>
                        <tr>
                          <th class="center">Name </th>
                          <th class="center">Total Queries </th>
                          <th class="center">Proposal Sent </th>
                          <th class="center">Proposal Not Sent</th>
                          <th class="center"> Confirmed </th>
                          <th class="center"> In Process </th>
                          <th class="center"> Rejected </th>
                          <th class="center">No status</th>
                          <th class="center"> Hot </th>
                          <th class="center"> Warm </th>
                          <th class="center"> Cold </th>
                        </tr>
                      </thead>
                      <tbody>
					 <?php foreach($result as $val) : ?>
                        <tr>
                          <td><?php echo $val['user'];?></td>
                          <td><?php echo $val['total_queries'];?></td>
                          <td><?php echo $val['proposal_sent_queries'];?></td>
                          <td><?php echo $val['proposal_not_sent_queries'];?></td>
                          <td><?php echo $val['lead_stage_Confirmed'];?></td>
                          <td><?php echo $val['lead_stage_Inprogress'];?></td>
                          <td><?php echo $val['lead_stage_Rejected'];?></td>
                          <td><?php echo $val['follow_up_status_No_Status'];?></td>
                          <td><?php echo $val['follow_up_status_Hot'];?></td>
                          <td><?php echo $val['follow_up_status_Cold'];?></td>
                          <td><?php echo $val['follow_up_status_Warm'];?></td>
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

    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script> -->

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
   $(document).ready(function(){

$('#exampleReport12').DataTable({
//  "processing" : true,
//  "serverSide" : true,
//  "ajax" : {
//   url:"fetch.php",
//   type:"POST"
//  },
 dom: 'lBfrtip',
 buttons: [
  'excel','pdf', 'excelHtml5', 
 ]
});

});

$(document).ready(function() {
    $('#exampleReport1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
				{
                    extend: 'pdfHtml5',
                    text: '<i class="fa-solid fa-file-pdf fa-2x"></i>',
                    title: 'Query Report',
                },
				{
                    extend: 'excelHtml5',
                    text: '<i class="fa-solid fa-file-excel fa-2x"></i>',
                    title: 'Query Report',
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
<!-- 
// css
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">  
// Js
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
// call jquey
$(document).ready( function () {
    $('#myTable').DataTable();
} );

// jquery Google cdn
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->