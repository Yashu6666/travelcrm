 <link rel="stylesheet" href="<?php echo base_url();?>public/css/index.css">
 <link rel="stylesheet" href="<?php echo base_url();?>public/css/index1.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo base_url();?>public/css/invoice.css">
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
                                <div class="page-title">To Do</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">To Do </li>

                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                   
                                </div>

                                <div class="card-body ">

                                    <div class="d-flex justify-content-between ">
                                        <h4>To Do List</h4>
                                        <div>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Add To Do
                                            </button>
                                        </div>
                                    </div>


                                     <!-- <todo> -->

                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Create Date</th>
                                                <th>Due Date</th>
                                                <th>Created By</th>
                                                <th>Assigned To</th>
                                                <th>Contact</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($listAll as $key) { ?>
                                               <tr>
                                                <td><?php echo $key->created_date;?></td>
                                                <td><?php echo $key->Tododay;?></td>
                                                <td><?php echo $key->created_by;?></td>
                                                <td><?php echo $key->TodoAssigned;?></td>
                                                <td><?php echo $key->TodoCustomer;?> 
                                                </td>
                                               <td><?php echo $key->status;?></td>
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
            <!-- end page content -->
            <!-- start chat sidebar -->

            <!-- end chat sidebar -->
        </div>


<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <form action="<?php echo site_url();?>todo/addTodoDetails" method="post">
                    <?php $created_by = $this->session->userdata('admin_username');?>
                  <input type="hidden" name="created_by" value="<?php echo $created_by; ?>">  


                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="exampleModalLabel">Add To Do/Follow Up</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div>
                        <input type="radio" name="Todotype"  value="call" checked="">Call
                        <input type="radio"  name="Todotype" value="meeting">Meeting
                        <input type="radio" name="Todotype" value="todo">To Do
                        <p class="inline">Remind in <b>15mins</b></p>
                    </div>
                    <div class="mt-2">
                        <input type="radio" name="Tododay" checked=""  value="today">Today
                        <input type="radio" name="Tododay" value="tomorrow">Tomorrow
                        <input type="radio" name="Tododay" value="2days">in 2 Days
                        <input type="radio" name="Tododay" value="3days">in 3 Days
                    </div>


                        <div class="row mb-3 mt-2 ">

                            <div class="col">
                                <label class="input">
                                    <input class="input__field" name="TodoTime" type="time" placeholder=" " autocomplete="off" />
                                    <span class="input__label">Time</span>
                                </label>
                            </div>
                        </div>


                        <div class="row mt-2 mb-3">
                            <div class="col">
                                <label class="input">
                                    <input class="input__field " type="text" name="TodoCustomer" placeholder=" " id="" autocomplete="off" />
                                    <span class="input__label">Select Customer<span class="colorRed">*</span></span>
                                </label><br>
                            </div>
                            <div class="col">
                                <label for="">Assigned To</label>
                                <Select class="todo-select" name="TodoAssigned">
                                    <option value="ABC">ABC</option>
                                    <option value="XYZ">XYZ</option>
                                  
                                </Select>

                            </div>
                        </div>



                        <div class="row mt-2 mb-2">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label"> Details</label>
                                <textarea class="form-control" name="TodoDetails" id="exampleFormControlTextarea1" rows="2"></textarea>
                            </div>
                        </div>

                       <div class="row mt-2 mb-2">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Status</label>

                             <select name="status" id="" class="todo-status">
                          <option value="Active">Active</option>
                            <option value="Pending">Pending</option>
                        </select>
                                </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
<?php $this->load->view('footer');?>
<script src="   https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
