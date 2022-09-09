<?php $this->load->view('header'); ?>
<!-- start page container -->
<div class="page-container">
    <!-- start sidebar menu -->
    <?php $this->load->view('side_bar'); ?>
    <!-- end sidebar menu -->
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Buy Stocks</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Stocks</li>

                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <div class="d-flex justify-content-end">
                                <a href="#" data-toggle="modal" data-target="#buyModal"><button type="button" class="btn btn-outline-primary ">Buy Stocks +</button></a>
                            </div>

                        </div>
                        <?php if ($this->session->flashdata('error')) { ?><center>
                                <div class="alert alert-danger" style="font-size: 12px;">
                                    <?php echo $this->session->flashdata('error') ?>
                                </div>
                            </center>

                        <?php } ?>
                        <?php if ($this->session->flashdata('success')) { ?><center>
                                <div class="alert alert-success" style="font-size: 12px;">
                                    <?php echo $this->session->flashdata('success');
                                    $this->session->unset_userdata('success');
                                    ?>
                                </div>
                            </center>
                        <?php } ?>

                        <div class="card-body row ">
                            <table class="table table-hover table-checkable order-column full-width" id="example4">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">SL.No</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Ticket Name</th>
                                        <th scope="col">No.of tickets</th>
                                        <th scope="col">Validity</th>
                                        <th scope="col">Uploaded By</th>
                                        <th scope="col">Remaining Tickets</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach ($view as $key) {
                                        $i = $i + 1;
                                    ?>

                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $key->created_at; ?></td>
                                            <td><?php echo $key->ticket_name; ?></td>
                                            <td><?php echo $key->no_ticket; ?></td>
                                            <td><?php echo $key->validity; ?></td>
                                            <td><?php echo $key->uploaded_by; ?></td>
                                            <td><?php echo $key->remaining_ticket; ?></td>
                                            <td><a href="<?php echo site_url(); ?>stocks/delete_stock/<?php echo $key->id; ?>" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash"></i>
                                                </a>

                                            </td>
                                        </tr>
                                    <?php } ?>
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
    <?php $this->load->view('footer'); ?>
    <!-- end page content -->


    <div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buy Stocks</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url();?>stocks/addstocks" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="d-flex form-group ">
                        <label for="" class="col-sm-4 col-form-label">Added Date</label>
                        <div class="col-sm-8">
                            <input disabled value="<?php echo date('d-m-Y') ?>" name="ticket_date"  class="form-control" placeholder="Added Date">
                        </div>
                    </div>

                    <div class="d-flex form-group ">
                        <label for="" class="col-sm-4 col-form-label">Ticket Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="ticket_name" required class="form-control" placeholder="Ticket Name">
                        </div>
                    </div>

                    <div class="d-flex form-group ">
                        <label for="" class="col-sm-4 col-form-label">Expiry Date</label>
                        <div class="col-sm-8">
                            <input type="date" required name="validity"      class="form-control">
                        </div>
                    </div>

                    <div class="d-flex form-group ">
                        <label for="" class="col-sm-4 col-form-label">Uploaded By</label>
                        <div class="col-sm-8">
                         <input type="text" class="form-control"  disabled value="<?php echo $this->session->userdata('admin_username');?>" required="" name="uploaded_by" >
                        </div>
                    </div>

                    <div class="d-flex form-group ">
                        <label for="" class="col-sm-4 col-form-label">Upload File</label>
                        <div class="col-sm-8">
                            <input type="file" required name="files" class="form-control" style="border: none;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>