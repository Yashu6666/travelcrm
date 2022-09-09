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
                    <div class="page-title">Edit Supplier</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                      href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
                  </i>&nbsp;<a class="parent-item"
                  href="#">Supplier</a>&nbsp;<i class="fa fa-angle-right"></i>
                  
              </li>
              <li class="active">Edit Supplier</li>
          </ol>
      </div>
  </div>


<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-head">
                <div class="">
                    <h3 class="ml-4">Supplier Overview</h3>
                </div>

            </div>
            <div class="card-body row">
                <form action="<?php echo site_url();?>supplier/updateSupplier/<?php echo $edit->id;?>" method="post">
                <div class="container">
                    <div class="row">
                     <!-- echo  -->
                        <div class="col-md-6">
                             <input type="text" class="form-control" id="company_name"
                             value="<?php echo $edit->company_name;?>" name="company_name" required="">
                        </div>
                        <div class="col-md-6">
                        <select class="form-control" id="category"  required="" name="category">
                        <option value="<?php echo $edit->category;?>"><?php echo $edit->category;?></option>
                        <option  value="Hotel">Hotel</option>
                        <option value="Rooms">Rooms</option>
                        <option value="Transfer">Transfer</option>
                        <option value="Visa">Visa</option>
                        <option value="Packages">Packages</option>
                        <option value="Meals">Meals</option>
                        <option value="Sightseeings">Sightseeings</option>
                    </select>
                        </div>                                        

                    </div>

                    <div class="row mt-3">
                         <div class="col-md-4">
                         <select class="form-control" id="country"  required="" name="salulation">
                        <option value="<?php echo $edit->salulation;?>"><?php echo $edit->salulation;?></option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                    </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="firstName"
                            placeholder="First Name*" value="<?php echo $edit->firstName;?>" required="" name="firstName" >
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="lastName"
                            placeholder="Last Name*" value="<?php echo $edit->lastName;?>" required="" name="lastName">
                        </div>


                    </div>


                    <div class="row mt-3">
                        <div class="col">
                        <input type="text" class="form-control" id=""
                            placeholder="Email*" value="<?php echo $edit->email;?>" required="" name="email">
                        </div>
                        <div class="col">
                         <input type="text" class="form-control" id=""
                            placeholder="Mobile No.*" value="<?php echo $edit->mobile_no;?>" required="" name="mobile_no">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" id=""
                            placeholder="Designation*" value="<?php echo $edit->designation;?>" required="" name="designation">
                        </div>
                    
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                        <input type="text" class="form-control" id=""
                            placeholder="Country*" value="<?php echo $edit->country;?>" required="" name="country">
                        </div>
                        <!-- <div class="col">
                        <input type="text" class="form-control" id=""
                            placeholder="State*" value="<?php echo $edit->state;?>" required="" name="state">
                        </div> -->
                        <div class="col">
                        <input type="text" class="form-control" id=""
                            placeholder="Address Line 1*" value="<?php echo $edit->address;?>" required="" name="address">
                        </div>
                        </div>

                          <div class="row mt-3">
                        <div class="col">
                        <input type="text" class="form-control" id=""
                            placeholder="City*" value="<?php echo $edit->city;?>" required="" name="city">
                        </div>
                        <!-- <div class="col">
                        <input type="text" class="form-control" id=""
                            placeholder="Services*" value="<?php echo $edit->services;?>" required="" name="services">
                        </div> -->
                       
                        </div>
                    </div>



                    <div class="row">
    <div class="col-sm-12">
                    <div class="card-head">
            <div class="">
                <h3  class="ml-4">Add Supplier Bank</h3>
            </div>

        </div>
        
        <div class="conn">
            <div class="row mt-3">
                <div class="col">
                    <input type="text" class="form-control" id=""
                    placeholder="Account Name*" value="<?php echo $edit->acc_name;?>" required="" name="acc_name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" id=""
                    placeholder="Account Number*" value="<?php echo $edit->acc_num;?>" required="" name="acc_num">
                </div>

            </div>
            <div class="row mt-3">
                <div class="col">
                    <input type="text" class="form-control" id=""
                    placeholder="Bank Name*" value="<?php echo $edit->bank_name;?>" required="" name="bank_name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" id=""
                    placeholder="IFSC Code*" value="<?php echo $edit->ifsc_code;?>" required="" name="ifsc_code">
                </div>

            </div>



            <div class="row mt-3">
                <div class="col">
                    <input type="text" class="form-control" id=""
                    placeholder="Swift Code*" value="<?php echo $edit->swift_code;?>" required="" name="swift_code">
                </div>
                <div class="col">
                    <label for="">Is Primary</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                        name="isPrimary" id="inlineRadio1"
                        value="Yes" checked="">
                        <label class="form-check-label" for="inlineRadio1">YES</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"
                        name="isPrimary" id="inlineRadio2"
                        value="No">
                        <label class="form-check-label" for="inlineRadio2">NO</label>
                    </div>

                </div>

            </div>


            <div class="row mt-3">

                <div class="col">
                    <input type="text" class="form-control" id=""
                    placeholder="Comments*" value="<?php echo $edit->comments;?>" required="" name="comments">
                </div>
             
            </div>


            <div class="col-lg-12 p-t-20 mt-4 center">
                <button
                class="mdl-button mr-3 mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                Cancel
            </button>

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