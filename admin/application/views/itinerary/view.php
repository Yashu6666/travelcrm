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
                            href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Itinerary</li>

                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
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

                            <div class="card-body row ">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Guest Name</th>
                                        <th scope="col">Start Destination</th>
                                        <th scope="col">End Destination</th>
                                        <th scope="col">Travel Start Date</th>
                                        <th scope="col">No of nights </th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                           <!--          <tbody>
                                        <?php foreach ($view as $key) {?>
                                           
                                        <tr>
                                            <td><?php echo $key->company_name;?></td>
                                            <td><?php echo $key->firstName;?> <?php echo $key->lastName;?></td>
                                            <td><?php echo $key->designation;?></td>
                                            <td><?php echo $key->email;?></td>
                                            <td><?php echo $key->mobile_no;?></td>
                                            <td><?php echo $key->city;?></td>
                                            <td><?php echo $key->country;?></td>
                                            <td><?php echo $key->category;?></td>
                                            <td><?php echo $key->services;?></td>
                                            <td><a href="<?php echo site_url();?>supplier/editSupplierDetails/<?php echo $key->id;?>" class="btn btn-primary btn-xs">
                                                <i class="fa fa-pencil"></i>
                                            </a> <a href="<?php echo site_url();?>supplier/deleteSupplierDetails/<?php echo $key->id;?>" onclick='return confirm("Are you sure you want to delete?")' class="btn btn-danger btn-xs">
                        <i class="fa fa-trash-o"></i>
                    </a>
                                        </td>
                                        </tr>
                            <?php } ?>
                    </tbody> -->
                </table>

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