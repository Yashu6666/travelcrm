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


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                   
                                </div>

                                <div class="card-body ">

                                    <form action="<?php echo site_url();?>todo/searchTodoList" method="post">
                                    <div class="row">
                                        <div class="col-auto">
                                            <label class="input">
                                                <input class="input__field " type="date" placeholder=" " name="s_fromdate" 
                                                    autocomplete="off" />
                                                <span class="input__label">From Date</span>
                                            </label>
                                        </div>


                                        <div class="col-auto">
                                            <label class="input">
                                                <input class="input__field" type="date" placeholder=" " name="s_todate"  autocomplete="off" />
                                                <span class="input__label">To Date</span>
                                            </label>

                                        </div>


                                        <div class="row">
                                        <div class="col-auto w-25">
                                            <label for="">Task To-Do/Follow-Up</label>
                                            <select name="task_status" class="input__field">
                                                <option value="Active">Active</option>
                                                <option value="Pending">Pending</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="d-flex mt-3">
                                        <button type="button" class="new_btn px-3">Reset</button>
                                        <button type="submit" class="ml-4 new_btn px-3">Filter</button>
                                    </div>
                                    <!-- <div class="d-flex justify-content-end mt-3">
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                    </div> -->

                                </div>
                            </form>
                            </div>
                        </div>
                    </div>






                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>

                                <div class="card-body ">

                                    <div class="d-flex justify-content-between ">
                                        <h4>To Do List</h4>
                                        <div>
                                            <button type="button" class="new_btn px-3" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Add New +
                                            </button>
                                        </div>
                                    </div>




                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Create Date</th>
                                                <th>Customer</th>
                                                <th>Followup Date</th>
                                                <th>Created By</th>
                                                <th>Assigned To</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($ListTodo as $key) { ?>
                                            <tr>
                                                <td><?php echo $key->created_date;?></td>
                                                <td><?php echo $key->TodoCustomer;?> 
                                                <td><?php echo $key->Tododay;?></td>
                                                <td><?php echo $key->created_by_name;?></td>
                                                <td><?php echo $key->todoAssigned;?></td>
                                                </td>
                                                <td>
                                                    <select id='task_status_dropdown' name='task_status_dropdown' class='input__field' onchange="changeStatus(this)" >
                                                        <option value="Active|<?php echo $key->id;?>" <?=($key->status=='Active') ? 'selected':'';?> >Active</option>
                                                        <option value="Pending|<?php echo $key->id;?>" <?=($key->status=='Pending') ? 'selected':'';?> >Pending</option>
                                                        <option value="Closed|<?php echo $key->id;?>" <?=($key->status=='Closed') ? 'selected':'';?> >Closed</option>

                                                    </select>
                                                    <?php // echo $key->status;?>
                                                </td>
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


       
<?php $this->load->view('footer');?>
<script src="   https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> 

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
            <div class="modal-body" >

                <div style="margin-left: 20%;">
                <input type="radio" name="Todotype"  value="call" checked="">Call
                <input type="radio"  name="Todotype" value="meeting">Meeting
                <input type="radio" name="Todotype" value="todo">To Do
                <p class="inline" style="display:none;">Remind in <b>15mins</b></p>
            </div>
            <div class="mt-2" style="display:none;">
                <input type="radio" name="Tododay" checked=""  value="today">Today
                <input type="radio" name="Tododay" value="tomorrow">Tomorrow
                <input type="radio" name="Tododay" value="2days">in 2 Days
                <input type="radio" name="Tododay" value="3days">in 3 Days
            </div>


                <div class="row mb-3 mt-2 ">

                    <div class="col">
                    <label for="">Time</label>
                        <input class="input__field w-50" name="TodoTime" type="time" placeholder=" " autocomplete="off" />
                    </div>
                </div>


                <div class="row mt-2 mb-3">
                    <div class="col-auto">
                        <label for="">Select Customer</label>
                            <input class="input__field  typeahead" type="text" name="TodoCustomer" placeholder="Search Here" id="" />
                    </div>

                   
                    <div class="col-auto">
                        <label for="">Assigned To</label>
                        <Select class="input__field  w-100" name="TodoAssigned">
                            <?php foreach($assign_to as $k => $val) :?>
                            <option value="<?php echo $k ?>"><?php echo $val ?></option>
                            <?php endforeach ?>
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

                     <select name="status" id="" class="todo-status" style="height: 100%;">
                  <option value="Active">Active</option>
                    <option value="Pending">Pending</option>
                </select>
                        </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="new_btn px-3" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="new_btn px-3">Submit</button>
            </div>
        </div>
    </form>
    </div>
</div>

<script type="text/javascript">
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get('<?php echo base_url('todo/searchCustomerName');?>', { query: query}, function (data) {
                data = $.parseJSON(data);
                return process(data);
            });
        }
    });
    function changeStatus(current_select){
        
        var data= current_select.value;
        var array = data.split('|');
        var id= array[1];
        var task_status = array[0];
        var base_url = '<?php echo base_url()?>';
        alert(task_status);
        $.ajax({
            url: base_url + "Todo/statusUpdate",
            dataType : 'json',
            type: "POST",
            data : { 'id':id,'task_status':task_status },
            success: function(result) {
            console.log(result);
        }});

    }
</script>
