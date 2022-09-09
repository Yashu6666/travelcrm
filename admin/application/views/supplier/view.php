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
                        <div class="page-title">Suppliers</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Suppliers</li>

                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <div class="d-flex justify-content-start m-4">
                                <a href="<?php echo site_url();?>supplier/add_supplier"><button type="button"
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

            <div class="table-scrollable">
								<table class="table table-hover table-checkable order-column full-width"
								id="example4">
								<thead>
                                        <tr>
                                        <th class="center"> S.No </th>
                                            <th scope="center">Company Name</th>
                                            <th scope="center">Name</th>
                                            <th scope="center">Category</th>
                                            <th scope="center">Email Id</th>
                                            <th scope="center">Contact No.</th>
                                            <th scope="center">City</th>
                                            <th scope="center">Country</th>
                                            <th scope="center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($view as $key => $val) : ?>
                                        <tr  class="odd gradeX">
                                        <td class=""><?php echo $key+1;?></td>
                                            <td class=""><?php echo $val->company_name;?></td>
                                            <td class=""><?php echo $val->firstName;?> <?php echo $val->lastName;?></td>
                                            <td class=""><?php echo $val->category;?></td>
                                            <td class=""><?php echo $val->email;?></td>
                                            <td class=""><?php echo $val->mobile_no;?></td>
                                            <td class=""><?php echo $val->city;?></td>
                                            <td class=""><?php echo $val->country;?></td>
                                            <td>
                                            
                                            <a  class="btn btn-tbl-edit btn-xs"  href="<?php echo site_url();?>supplier/editSupplierDetails/<?php echo $val->id;?>" >
															<i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-tbl-delete btn-xs"  href="<?php echo site_url();?>supplier/deleteSupplierDetails/<?php echo $val->id;?>"  onclick="return confirm('Are you sure you want to delete..?');">
                                                <i class="fa fa-trash-o "></i>
                                            </a>
                                        </td>
                                        </tr>
                                        <?php endforeach;?>
                    </tbody>
                </table>

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
<!-- start footer -->
<?php $this->load->view('footer');?>
        <!-- end page content -->