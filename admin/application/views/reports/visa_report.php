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
                                <div class="page-title">Visa Report</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="querie-report.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Visa Report</li>

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
                                                        <button type="button" class="new_btn px-3 ml-2">Clear</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tools">
                                            <div class="dropdown">
                                                <!-- <a href="Add-invoice.html" type="button"
                                                    class="btn btn-primary invoice-add">ADD</a> -->
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
                                            class="table table-hover table-checkable order-column full-width text-center"
                                            id="example4">

                                            <thead>
                                                <tr>
                                                    <th class="center"> ID</th>
                                                    <th class="center">Booking Date </th>
                                                    <th class="center">Travel-Date </th>
                                                    <!-- <th class="center">Visa Name </th>
                                                    <th class="center">Visa Details </th> -->
                                                    <th class="center">Net Price (INR)</th>
                                                    <th class="center">Vat (INR)</th>
                                                    <th class="center">Discount(INR)</th>
                                                    <th class="center"> Selling Price(INR)</th>
                                                    <th class="center">Received(INR) </th>
                                                    <th class="center">Balance(INR)</th>
                                                    <th class="center">Customer</th>
                                                    <!-- <th class="center">Owner</th>
                                                    <th class="center">Status</th>
                                                    <th class="center">Actions</th> -->

                                                </tr>
                                                <!-- <tr>
                                                    <th class="center"> </th>
                                                    <th class="center"> </th>
                                                    <th class="center"> </th>
                                                    <th class="center"> </th>
                                                    <th class="center">PAX</th>
                                                    <th class="center">Destination</th>
                                                    <th class="center"></th>
                                                    <th class="center"></th>
                                                    <th class="center"></th>
                                                    <th class="center"> </th>                                                    
                                                    <th class="center"></th>
                                                    <th class="center"></th>
                                                    <th class="center">Name</th>
                                                    <th class="center">Email</th>
                                                    <th class="center">Mobile</th>
                                                    <th class="center"> </th>
                                                    <th class="center"></th>
                                                    <th class="center"></th>
                                                 

                                                </tr> -->
                                            </thead>
                                            <tbody>
                                                    <?php foreach($visa_report as $key) { 
                                                           $visadetails = $this->db->where('queryId',$key->QueryId)->get('querypackage')->row();
                                                           $customer_details = $this->db->where('query_id',$key->QueryId)->get('b2bcustomerquery')->row();
                                                        ?>
                                                <tr>
                                                    <td><?php echo $key->id;?></td>
                                                    <td><?php echo $key->created_at;?></td>
                                                    <td><?php echo $visadetails->specificDate;?></td>
                                                    <!-- <td><?php echo $key->visa_name;?></td>
                                                    <td><?php echo $key->adult;?></td> -->
                                                    <td><?php echo $key->total;?></td>
                                                    <td><?php echo $key->vat;?></td>
                                                    <td>0</td>
                                                    <td><?php echo $key->total_price;?></td>
                                                    <td><?php echo $key->advance_amount ?></td>
                                                    <td><?php echo  $key->total_price-$key->advance_amount ?></td>
                                                    <td><?php echo $customer_details->b2bfirstName?> <?php echo $customer_details->b2blastName?><br>  <?php echo $customer_details->b2bEmail ?> <br> <?php echo $customer_details->b2bmobileNumber ?><td>
                                                    <!-- <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td> <button class="btn btn-primary btn-xs">
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