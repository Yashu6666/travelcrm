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
                        <div class="page-title">Sell Stocks</div>
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
                                <a href="#" data-toggle="modal" data-target="#sellModal"><button type="button" class="btn btn-outline-primary ">Sell Stocks</button></a>
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
                                        <th scope="col">Travel Agent Name</th>
                                        <th scope="col">Guest Name</th>
                                        <th scope="col">Ticket Name</th>
                                        <th scope="col">No.of tickets</th>
                                        <th scope="col">Sold Date</th>
                                        <th scope="col">Sold By</th>
                                        <th scope="col">Download Ticket Adult</th>
                                        <th scope="col">Download Ticket Child</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // echo '<pre>';
                                    // print_r($view);
                                    // die;
                                    $i = 0;
                                    foreach ($view as $key) {
                                        $html_adult = '';
                                        $html_child = '';
                                        if(!empty($key->uploaded_files_adult)){
                                            $uploaded_files_adult = explode(',',$key->uploaded_files_adult);
                                            if(!empty($uploaded_files_adult)){
                                                foreach ($uploaded_files_adult as $k => $v) {
                                                    $url = base_url('public/uploads/soldstocks/').$v;
                                                    $html_adult .= '<a href="'.$url.'" title="'.$v.'" download><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;';
                                                }
                                            }
                                        }
                                        if(!empty($key->uploaded_files_child)){
                                            $uploaded_files_child = explode(',',$key->uploaded_files_child);
                                            if(!empty($uploaded_files_child)){
                                                foreach ($uploaded_files_child as $k => $v) {
                                                    $url = base_url('public/uploads/soldstocks/').$v;
                                                    $html_child .= '<a href="'.$url.'" title="'.$v.'" download><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;';
                                                }
                                            }
                                        }
                                        $i = $i + 1;
                                    ?>

                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $key->travel_agent_name; ?></td>
                                            <td><?php echo $key->guest_name; ?></td>
                                            <!-- <td><?php //echo $key->company_first_name.' '.$key->company_last_name; ?></td> -->
                                            <td><?php echo $key->ticket_name; ?></td>
                                            <td><?php echo $key->no_of_tickets_adults + $key->no_of_tickets_childs; ?></td>
                                            <td><?php echo date('d-m-y',strtotime($key->sold_date)); ?></td>
                                            <td><?php echo $key->sold_by; ?></td>
                                            <td><?=$html_adult?></td>
                                            <td><?=$html_child?></td>
                                            <td><a href="<?php echo site_url(); ?>stocks/delete_stock2/<?php echo $key->id; ?>" class="btn btn-danger btn-xs">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> 
    <div class="modal fade" id="sellModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sell Stocks</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?php echo site_url();?>stocks/sellStocks" method="post" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="d-flex form-group ">
                        <label for="" class="col-sm-4 col-form-label">Travel Agent</label>
                        <div class="col-sm-8">
                            <input type="text" name="f_name" class="form-control" required class="form-control" placeholder="Travel Agent">
                        </div>
                    </div>

                    <div class="d-flex form-group ">
                        <label for="" class="col-sm-4 col-form-label">Guest Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="l_name" class="form-control" required class="form-control" placeholder="Guest Name">
                        </div>
                    </div>
                    <div class="d-flex form-group ">
                        <label for="" class="col-sm-4 col-form-label">Booking Date</label>
                        <div class="col-sm-8">
                            <input type="date" name="b_date" class="form-control" required class="form-control">
                        </div>
                    </div>
                    
                    <!-- <div class="d-flex form-group ">
                        <label for="" class="col-sm-4 col-form-label">Sold Date</label>
                        <div class="col-sm-8">
                            <input disabled value="<?php// echo date('d-m-Y') ?>" name="sell_date"  class="form-control" placeholder="Added Date">
                        </div>
                    </div> -->

                    <div class="d-flex form-group ">
                        <label for="" class="col-sm-4 col-form-label">Ticket Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="ticket_name" class="typeahead form-control" required class="form-control" placeholder="Ticket Name">
                        </div>
                    </div>
                    <div class="d-flex form-group ">
                        <label for="" class="col-sm-4 col-form-label">Type of Pax</label>
                        <div class="col-sm-8">
                            <select id="pax_type_select" name="pax_type_select" class="form-control form-control-sm">
                                <option value="Both">Both</option>
                                <option value="Adult">Adult</option>
                                <option value="Child">Child</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex form-group ">
                        <label for="" class="col-sm-4 col-form-label">Ticket Type</label>
                        <div class="col-sm-8">
                            <select id="tkt_type" name="tkt_type" class="form-control form-control-sm">
                                <option value="Bronze">Bronze</option>
                                <option value="Silver">Silver</option>
                                <option value="Gold">Gold</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="d-flex form-group" id="no_of_tickets_div">
                        <label for="" class="col-sm-4 col-form-label">No of Ticket(s)</label>
                        <div class="col-sm-8">
                            <input type="number" min='1' required name="no_of_tickets" class="form-control">
                        </div>
                    </div> -->
                    <div class="d-flex form-group " id="no_of_tickets_adults_div" style="flex !important">
                        <label for="" class="col-sm-4 col-form-label">No of Ticket(s)<br>(Adults)</label>
                        <div class="col-sm-8">
                            <input type="number" min='1'  name="no_of_tickets_adults" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex form-group " id="no_of_tickets_childs_div" style="flex !important;">
                        <label for="" class="col-sm-4 col-form-label">No of Ticket(s)<br>(Child)</label>
                        <div class="col-sm-8">
                            <input type="number" min='1'  name="no_of_tickets_childs" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex form-group ">
                        <label for="" class="col-sm-4 col-form-label">Sold By</label>
                        <div class="col-sm-8">
                         <input type="text" class="form-control"  disabled value="<?php echo $this->session->userdata('admin_username');?>" required="" name="uploaded_by" >
                        </div>
                    </div>
                    <!-- <input type="text" id="autouser"> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript">
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get('<?php echo base_url('stocks/searchStockName');?>', { query: query}, function (data) {
                data = $.parseJSON(data);
                return process(data);
            });
        }
    });


    $( "#pax_type_select" ).change(function() {
        var pax_type = $(this).val();
        if(pax_type == "Adult"){
            $('#no_of_tickets_adults_div').attr('style','flex !important');
            $('#no_of_tickets_childs_div').attr('style','display:none !important;');
            // $('#no_of_tickets_div').attr('style','display:none !important;');
        }else if(pax_type == "Child"){
            $('#no_of_tickets_adults_div').attr('style','display:none !important;');
            // $('#no_of_tickets_div').attr('style','display:none !important;');
            $('#no_of_tickets_childs_div').attr('style','flex !important');
        }else if(pax_type == "Both"){
            // $('#no_of_tickets_div').attr('style','display:block !important;');
            $('#no_of_tickets_adults_div').attr('style','flex !important');
            $('#no_of_tickets_childs_div').attr('style','flex !important');
        }

    });

    
</script>

