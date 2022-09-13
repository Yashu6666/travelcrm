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
                                <div class="page-title">Hotel Report</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Hotel Report</li>

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
                                                        <button type="button" class="new_btn px-3 ml-3">Clear</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tools">
                                            <div class="dropdown">
                                              
                                                <label for="" class="ml-4"><b>Export</b></label>
                                                <select class="pdf">
                                                    <option value="">PDF</option>
                                                    <option value="">Word</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-scrollable">
                                        <table
                                            class="table table-hover  table-checkable order-column full-width text-center"
                                            id="example4">

                                            <thead>
                                                <tr>
                                                   
                                                    <th class="center">Booking Date </th>
                                                    <th class="center">Hotel Name </th>
                                                    <th class="center">Booking Id</th>
                                                    <th class="center">Customer Name </th>
                                                    <th class="center">Email</th>
                                                    <th class="center">Check In/Check Out</th>
                                                    <th class="center">City</th>
                                                    <th class="center">Paid Amount</th>
                                                    <th class="center">Total Amount</th>
                                                    <th class="center">Booked By</th>
                                                    <!-- <th class="center">Actions</th> -->

                                                </tr>
                                            </thead>
                                            <tbody>
                                             <?php foreach($hotel_report as $key) {      

        $customer_details = $this->db->where('query_id',$key->query_id)->get('b2bcustomerquery')->row();
        $hotel=$this->db->where('queryId',$key->query_id)->get('querypackage')->row();
       // echo '<pre>';print_r($customer_details);exit;
                                              ?>       
                                                <tr>
                                                    <td><?php echo $key->created_at;?></td>
                                                    <td><?php echo $key->hotel_name;?></td>
                                                    <td><?php echo $key->query_id;?></td>
                                                    <td><?php echo $customer_details->b2bfirstName;?></td>
                                                    <td><?php echo $customer_details->b2bEmail;?></td>
                                                    <td><?php echo $hotel->specificDate;?>/<?php echo $hotel->noDaysFrom;?></td>
                                                    <td><?php echo $hotel->goingFrom;?>,<?php echo $hotel->	goingTo;?></td>
                                                 
                                                    <td>0.00</td>
                                                    <td><?php echo $key->total_package_cost ?></td>
                                                    <td><?php echo $key->booked_by;?></td>

                                                    <!-- <td> <button class="btn btn-primary btn-xs">
                                                            <i class="fa fa-pencil"></i>
                                                        </button>
                                                        <button class="btn btn-tbl-delete btn-xs">
                                                            <i class="fa fa-trash-o "></i>
                                                        </button>
                                                    </td> -->
                                                </tr>
                                              <?php } ?>      



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