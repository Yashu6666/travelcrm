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
                  href="<?php echo base_url();?>supplier/view_supplier">Supplier</a>&nbsp;<i class="fa fa-angle-right"></i>
                  
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
                    <h3 class="ml-4">Supplier Details</h3>
                </div>

            </div>
            <div class="card-body">
                <form action="<?php echo site_url();?>supplier/updateSupplier/<?php echo $edit->id;?>" method="post">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-md-6">
                        <div class="ml-2"><label style="font-size: small;"><b>Company Name*</b></label></div>
                             <input type="text" class="form-control" id="company_name"
                            placeholder=""   value="<?php echo $edit->company_name;?>"  name="company_name" required="">
                        </div>
                        <div class="col-md-6">
                        <div class="ml-2"><label style="font-size: small;"><b>Select Category</b></label></div>
                        <select class="form-control" id="category"  required="" name="category">
                      
                        <option value="<?php echo $edit->category;?>"><?php echo $edit->category;?></option>
                       
                        <!-- <option  value="Hotel and Rooms">Hotel and Rooms</option>
                        <option value="Transfer">Transfer</option>
                        <option value="Visa">Visa</option>
                        <option value="Packages">Packages</option>
                        <option value="Meals">Meals</option>
                        <option value="Excursion">Excursion</option> -->
                    </select>
                        </div>                                        

                    </div>

                    <div class="row mt-3">
                         <div class="col-md-4">
                         <div class="ml-2"><label style="font-size: small;"><b>Select Salutation</b></label></div>

                         <select class="form-control" id="country"  required="" name="salulation">
                        <option>Select Salutation</option>
                        <option value="<?php echo $edit->salulation;?>"><?php echo $edit->salulation;?></option>
                        
                        <option value="Miss">Miss</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                    </select>
                        </div>
                        <div class="col-md-4">
                        <div class="ml-2"><label style="font-size: small;"><b>First Name*</b></label></div>

                            <input type="text" class="form-control" id="firstName"
                            placeholder="" value="<?php echo $edit->firstName;?>"  required="" name="firstName">
                        </div>
                        <div class="col-md-4">
                        <div class="ml-2"><label style="font-size: small;"><b>Last Name*</b></label></div>

                            <input type="text" class="form-control" id="lastName"
                            placeholder="" value="<?php echo $edit->lastName;?>"  required="" name="lastName">
                        </div>


                    </div>


                    <div class="row mt-3">
                        <div class="col">
                        <div class="ml-2"><label style="font-size: small;"><b>Email*</b></label></div>

                        <input type="text" class="form-control" id=""
                            placeholder=""  value="<?php echo $edit->email;?>"  required="" name="email">
                        </div>
                        <div class="col">
                        <div class="ml-2"><label style="font-size: small;"><b>Mobile No.*</b></label></div>

                         <input type="text" class="form-control" id=""
                            placeholder="" value="<?php echo $edit->mobile_no;?>" required="" name="mobile_no">
                        </div>
                        <div class="col">
                        <div class="ml-2"><label style="font-size: small;"><b>Designation*</b></label></div>

                        <input type="text" class="form-control" id=""
                            placeholder=""  value="<?php echo $edit->designation;?>" required="" name="designation">
                        </div>
                    
                    </div>

                    <div class="row mt-3">
                        <!-- <div class="col">
                        <input type="text" class="form-control" id=""
                            placeholder="State*" value="" required="" name="state">
                        </div> -->
                        <div class="col">
                        <div class="ml-2"><label style="font-size: small;"><b>Address</b></label></div>

                        <input type="text" class="form-control" id=""
                            placeholder="" value="<?php echo $edit->address;?>" required="" name="address">
                        </div>
                        <div class="col">
                        <div class="ml-2"><label style="font-size: small;"><b>Country*</b></label></div>
                        <input type="text" class="form-control" id=""
                            placeholder="" value="<?php echo $edit->country;?>"required="" name="country">
                      
                        </div>
                        <div class="col">
                        <div class="ml-2"><label style="font-size: small;"><b>City*</b></label></div>
                        <select class="form-control" id="category"  required="" name="city">
                        <option>Select City</option>
                      
                        <option <?php echo $edit->city=="Dubai"?"Selected":"" ?>  value="Dubai">Dubai</option>
                        <option <?php echo $edit->city=="AbuDhabi"?"Selected":"" ?> value="AbuDhabi">Abu Dhabi</option>
                        <option <?php echo $edit->city=="Sharjah"?"Selected":"" ?> value="Sharjah">Sharjah</option>
                        <option <?php echo $edit->city=="Ajman"?"Selected":"" ?> value="Ajman">Ajman</option>
                        <option <?php echo $edit->city=="Sir Baniyas"?"Selected":"" ?> value="Sir Baniyas">Sir Baniyas</option>
                        <option <?php echo $edit->city=="Umm Al-Quwain"?"Selected":"" ?> value="Umm Al-Quwain">Umm Al-Quwain</option>
                        <option <?php echo $edit->city=="Fujairah"?"Selected":"" ?> value="Fujairah">Fujairah</option>
                        <option <?php echo $edit->city=="Ras Al Khaimah"?"Selected":"" ?> value="Ras Al Khaimah">Ras Al Khaimah</option>
                        <option  <?php echo $edit->city=="Al Ain"?"Selected":"" ?>value="Al Ain">Al Ain</option>
                    </select>
                       
                        </div>
                       
                        </div>

                          <div class="row mt-3">
                        <!-- <div class="col">
                        <input type="text" class="form-control" id=""
                            placeholder="Services*" value="" required="" name="services">
                        </div>
                        -->
                        </div>
                    </div>



                    <div class="row">
    <div class="col-sm-12">
                    <div class="card-head">
            <div class="">
                <h3  class="ml-4"> Bank Details</h3>
            </div>

        </div>
        
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                <div class="ml-2"><label style="font-size: small;"><b>Account Name*</b></label></div>

                    <input type="text" class="form-control" id=""
                    placeholder="" value="<?php echo $edit->acc_name;?>" required="" name="acc_name">
                </div>
                <div class="col">
                <div class="ml-2"><label style="font-size: small;"><b>Account Number*</b></label></div>

                    <input type="text" class="form-control" id=""
                    placeholder="" value="<?php echo $edit->acc_num;?>"  required="" name="acc_num">
                </div>

            </div>
            <div class="row mt-3">
                <div class="col">
                <div class="ml-2"><label style="font-size: small;"><b>Bank Name*</b></label></div>

                    <input type="text" class="form-control" id=""
                    placeholder=""  value="<?php echo $edit->bank_name;?>" required="" name="bank_name">
                </div>
                <div class="col">
                <div class="ml-2"><label style="font-size: small;"><b>Swift Code*</b></label></div>

                    <input type="text" class="form-control" id=""
                    placeholder="" value="<?php echo $edit->swift_code;?>"  required="" name="swift_code">
                </div>

            </div>



            <div class="row mt-3">
                <div class="col">
                <div class="ml-2"><label style="font-size: small;"><b>IBAN Code*</b></label></div>

                    <input type="text" class="form-control" id=""
                    placeholder="" value="<?php echo isset($edit->iban) ?  $edit->iban : "" ;?>" required="" name="iban">
                </div>

                <div class="col">
                <div class="ml-2"><label style="font-size: small;"><b>Bank Branch Name*</b></label></div>
                    <input type="text" class="form-control" id=""
                    placeholder="" value="<?php echo isset($edit->bank_branch_name) ?  $edit->bank_branch_name : "" ;?>" required="" name="branch">
                </div>
                </div>
                <!-- <div class="col">
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

                </div> -->
                <!-- <div class="col">
                <div class="ml-2"><label style="font-size: small;">Comments*</label></div>

                    <input type="text" class="form-control" id=""
                    placeholder="" value="" required="" name="comments">
                </div>
             
            </div> -->


            <div class="row mt-3">

              
            </div>


            <div class="col-lg-12 p-t-20 mt-4 " style="margin-left:500px">
                <button href="add.php"
                class="new_btn px-3">
                Cancel
            </button>

            <button type="submit" 
            class="new_btn px-3">
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