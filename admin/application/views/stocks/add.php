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
                    <div class="page-title">Add Stocks</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                      href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                  </i>&nbsp;<a class="parent-item"
                  href="#">Stocks</a>&nbsp;<i class="fa fa-angle-right"></i>
                  
              </li>
              <li class="active">Add Stocks</li>
          </ol>
      </div>
  </div>


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-head">
              

            </div>
            <div class="card-body row">
                <form action="<?php echo site_url();?>stocks/addstocks" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-md-6">
                             <input type="text" class="form-control" 
                         disabled value="<?php echo $ticket_date ?>" name="ticket_date" >
                        </div>
                      
                        <div class="col-md-6">
                            <input type="text" class="form-control" 
                            placeholder="Ticket Name*" value="" required="" name="ticket_name">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                       
                       <div class="col-md-6">
                            <input type="date" class="form-control" 
                            placeholder="Validity*" value="" required="" name="validity">
                        </div>
                      
                        <div class="col-md-6">
                            <input type="text" class="form-control" 
                            placeholder="Uploaded By*" disabled value="<?php echo $this->session->userdata('admin_username');?>" required="" name="uploaded_by">
                        </div>
                       <!-- <div class="col-md-6">
                            <input type="text" class="form-control" 
                            placeholder="Sold Tickets*" value="" required="" name="ticket_sold">
                        </div> -->
                       </div>
<br>
                       <div class="row">
                       
                         <div class="col-md-6">
                            <input type="file" value="" required="" name="files">
                        </div>

                      
                       </div>

                       </div>


                    <div class="row">
                   <div class="col-sm-12">
                    <div class="card-head">
          

        </div>
        
        <div class="conn">
         <div class="col-lg-12 p-t-20 mt-4 center">
             <button type="submit" 
            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            Submit
        </button>


    </div>
</div>
</form>
</div>

</div>
</div>

</div> 

</div> <!-- start widget -->
<div class="state-overview">
</div>
<!-- end widget -->
<!-- chart start -->
<!-- Chart end -->

<!-- start Payment Details -->

<!-- end Payment Details -->


</div>


<!-- end chat sidebar -->
</div>
<!-- end page container -->

</div>
<!-- end page content -->
<!-- start chat sidebar -->

</div>
<!-- end footer -->
</div>
<?php $this->load->view('footer');?>