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
                                <div class="page-title">Package Report</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Package Report</li>

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
                                                    <th class="center">Proposal ID</th>
                                                    <th class="center">Booking Date </th>
                                                    <th class="center">Travel-Date </th>
                                                    <th class="center">Perticulars</th>
                                                    <th class="center">Package Details </th>
                                                    <th class="center">Selling Price (INR)</th>
                                                    <th class="center">Received (INR)</th>
                                                    <th class="center">Balance(INR)</th>
                                                    <th class="center"> Customer Details</th>
                                                    <th class="center">Owner </th>
                                                    <th class="center"> Status</th>

                                                </tr>
                                      
                                            </thead>
                                            <tbody>
                                            <?php foreach ($package_report as $key ) {
                                                	$query= $this->db->where('query_id',$key->query_id)->get('b2bcustomerquery')->row();
                                                   
                                                ?>
                                                      
                                                <tr>
                                                    <td><?php echo $key->id;?></td>
                                                    <td><?php echo $key->checkin;?></td>
                                                    <td><?php echo $key->checkin;?></td>
                                                    <td><?php echo $key->distance_covered;?></td>
                                                    <td><?php echo $key->package_title;?></td>
                                                    <td><?php echo $key->total_package_cost;?></td>
                                                    <td>0</td>
                                                    <td><?php echo $key->total_package_cost;?></td>
                                                    <td><?php echo $query->b2bfirstName;?></td>
                                                    <td><?php echo $key->supplier;?></td>
                                                    <td>Pending</td>
                                                 
                                                </tr> 
                                                <?php
                                            } ?> 

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