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
                    <div class="page-title">Edit Stocks</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                      href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                  </i>&nbsp;<a class="parent-item"
                  href="#">Stocks</a>&nbsp;<i class="fa fa-angle-right"></i>
                  
              </li>
              <li class="active">Edit Stocks</li>
          </ol>
      </div>
  </div>


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-head">
              

            </div>
            <div class="card-body row">
                <form action="<?php echo site_url();?>stocks/updateStockDetails" method="post" >
                <div class="container">
                    <div class="row">
                       
                    <input type="hidden" value="<?php print_r($edit->remaining_ticket) ?>"  name="remaining_ticket"/>
                    <input type="hidden" value="<?php print_r($edit->id) ?>"  name="id" />
                    
                        <div class="col-md-12">
                            <input type="text" class="form-control" 
                            placeholder="Ticket Sold*" value="" required="" name="ticket_sold">
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
            Update
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