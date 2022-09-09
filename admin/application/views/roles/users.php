   <?php $this->load->view('header');?>
   <link rel="shortcut icon" href="<?php echo base_url();?>public/assets/img/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/invoice.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/index.css">
        <div class="page-container">
            <!-- start sidebar menu -->
            <?php $this->load->view('side_bar');?>
  <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Setting</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="dashboard.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Setting </li>

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
                                    <div class="px-3 m-2">
                                        <button type="button" class="new_btn px-2 p-0" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            Add New +
                                        </button>
                                    </div>
                                    <div id="msg"></div>
                                    
                                </div>

                                <div class="card-body ">

                                         <!-- <add settings> -->
                                <div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width"
											id="example4">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Photo</th>
                                                <th>Username</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Contact No.</th>
                                                <th>Email</th>
                                                <th>Type</th>
                                                <!-- <th>Module</th> -->
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i=0;$i<count($view);$i++)
                                            {?>
                                            <tr>
                                                <th><?php echo $i+1;?></th>
                                                <td><img src="<?php echo base_url().$view[$i]->userPhoto;?>" width="100px" height="100px"></td>
                                                <td><?php echo $view[$i]->UserName;?></td>
                                                <td><?php echo $view[$i]->firstName;?></td>
                                                <td><?php echo $view[$i]->Address;?></td>
                                                <td><?php echo $view[$i]->phoneNumber;?></td>
                                                <td><?php echo $view[$i]->emialId;?></td>
                                                <td><?php echo $view[$i]->userType;?></td>
                                                <!-- <td><?php //echo $view[$i]->modules;?></td> -->
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-id = "<?php echo $view[$i]->id;?>"
                                                        class="edit btn btn-tbl-edit btn-xs">
                                                        <i class="fa fa-edit "></i>
                                                    </button>
                                                    <button class="delete btn btn-tbl-delete btn-xs" data-id = "<?php echo $view[$i]->id;?>" onclick="confirm('Are you sure,you want to delete?');">
                                                        <i class="fa fa-trash-o "></i>
                                                    </button>

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





    <!-- edit Modal 1 -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
 <form action="<?php echo site_url();?>roles/updateUsers" method="post" enctype='multipart/form-data'>
    <input type="hidden" name="userId" id="userId">

            <div class="modal-content">
                <div class="modal-header" style="background: #d9a927 !important;">
                    <h3 class="modal-title" id="exampleModalLabel">Edit </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                   <div class="modal-body">

                        <div class="col">
                            <label class="input">
                                <input class="input__field setting-width " type="text" placeholder=" " id="UserName" name="UserName" 
                                    autocomplete="off" />
                                <span class="input__label">Username<span class="colorRed">*</span></span>


                            </label><br>
                            <!-- <span id="spanUserName" class="spanCompany"></span> -->
                        </div>

                        <div class="col">
                            <label class="input">
                                <input class="input__field setting-width mb-2" type="password" placeholder="" name="password" 
                                    id="password" autocomplete="off" />
                                <span class="input__label">Password<span class="colorRed">*</span></span>
                            </label><br>
                            <!-- <span id="spanPassword" class="spanCompany"></span> -->
                        </div>

                        <div class="col">
                            <label class="input">
                                <input class="input__field setting-width mb-2" type="text" placeholder="" name="firstName" 
                                    id="firstName" autocomplete="off" />
                                <span class="input__label">First Name<span class="colorRed">*</span></span>
                                <span id="" class=""></span>
                            </label><br>
                            <span id="spanFirstName" class="spanCompany"></span>
                        </div>



                        <div class="col">
                            <label class="input">
                                <input class="input__field setting-width mb-2" type="text" placeholder=" " id="LastName" name="LastName" 
                                    autocomplete="off" />
                                <span class="input__label">Last Name<span class="colorRed">*</span></span>
                            </label><br>
                            <!-- <span id="spanLastName" class="spanCompany"></span> -->
                        </div>





                        <div class="col">
                            <label class="input">
                                <input class="input__field setting-width mb-2" type="text" placeholder=" " id="Address" name="Address" 
                                    autocomplete="off" />
                                <span class="input__label">Address<span class="colorRed">*</span></span>
                            </label><br>
                            <!-- <span id="spanAddress" class="spanCompany"></span> -->
                        </div>



                        <div class="col">
                            <label class="input">
                                <input class="input__field setting-width mb-2" type="number" placeholder=" " name="phoneNumber" 
                                    id="phoenVal" autocomplete="off" />
                                <span class="input__label">Contact Number<span class="colorRed">*</span></span>
                            </label><br>
                            <!-- <span id="spanPhone" class="spanCompany"></span> -->
                        </div>




                        <div class="col">
                            <label class="input">
                                <input class="input__field setting-width mb-2" type="email" placeholder=" " id="email" name="emialId" 
                                    autocomplete="off" />
                                <span class="input__label">Email<span class="colorRed">*</span></span>
                            </label><br>
                            <!-- <span id="spanEmail" class="spanCompany"></span> -->
                        </div>


                        <div class="input-group  mb-3">
                            <img src="" id="current_photo" width="100px" height="100px">
                            <input type="hidden" name="old_path" id="old_image">
                            <input type="file" class="form-control" id="photo" name="userPhoto">
                            <!-- <span id="spanPhoto" class="spanCompany"></span> -->
                        </div>




                        <div class="col">
                            <label for="">Module<span class="colorRed">*</span></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Inventory2" name="checkContainer[]" value="Inventory">
                                <label class="form-check-label" for="inlineCheckbox1">Inventory</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Query2" name="checkContainer[]"  value="Query">
                                <label class="form-check-label" for="inlineCheckbox2">Query</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="HotelVoucher2" name="checkContainer[]"  value="HotelVoucher">
                                <label class="form-check-label" for="inlineCheckbox2">HotelVoucher</label>
                            </div>
                             <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Invoice2" name="checkContainer[]"  value="Invoice">
                                <label class="form-check-label" for="inlineCheckbox2">Invoice</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Itinerary2" name="checkContainer[]"  value="Itinerary">
                                <label class="form-check-label" for="inlineCheckbox2">Itinerary</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Todo2" name="checkContainer[]"  value="Todo">
                                <label class="form-check-label" for="inlineCheckbox2">Todo</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="ReportName2" name="checkContainer[]"  value="ReportName">
                                <label class="form-check-label" for="inlineCheckbox2">Report Name</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Stocks2" name="checkContainer[]"  value="Stocks">
                                <label class="form-check-label" for="inlineCheckbox2">Stocks</label>
                            </div>
                        </div>

                        <div class="col">
                            <label for="">Type<span class="colorRed">*</span></label>
                            <select name="userType" id="vCategory" class="setting-select mt-2 mb-2">
                                <option value="Admin">Admin</option>
                                <option value="Super Admin">Super Admin</option>
                                <!-- <option value="Stocks Admin">Stocks Admin</option> -->
                            </select>
                            <!-- <span id="spanAdmin" class="spanCompany"></span> -->
                        </div>

                    </div>
                <div class="modal-footer">
                    <button type="button" class="new_btn px-3" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="new_btn px-3">Update</button>
                </div>
            </div>
        </form>
        </div>
    </div>




    <!-- new Modal 2 -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <form action="<?php echo site_url();?>roles/addUsers" method="post" name="forms" onsubmit="return validatesetting();" enctype='multipart/form-data'>
                <div class="modal-content">
                    <div class="modal-header" style="background: #d9a927 !important;">
                        <h3 class="modal-title" id="staticBackdropLabel">Add New User</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="col">
                            <label class="input">
                                <input class="input__field setting-width " type="text" placeholder=" " id="UserName" name="UserName" 
                                    autocomplete="off" />
                                <span class="input__label">Username<span class="colorRed">*</span></span>


                            </label><br>
                            <!-- <span id="spanUserName" class="spanCompany"></span> -->
                        </div>

                        <div class="col">
                            <label class="input">
                                <input class="input__field setting-width mb-2" type="password" placeholder="" name="password" 
                                    id="password" autocomplete="off" />
                                <span class="input__label">Password<span class="colorRed">*</span></span>
                            </label><br>
                            <!-- <span id="spanPassword" class="spanCompany"></span> -->
                        </div>

                        <div class="col">
                            <label class="input">
                                <input class="input__field setting-width mb-2" type="text" placeholder="" name="firstName" 
                                    id="firstName" autocomplete="off" />
                                <span class="input__label">First Name<span class="colorRed">*</span></span>
                                <span id="" class=""></span>
                            </label><br>
                            <span id="spanFirstName" class="spanCompany"></span>
                        </div>



                        <div class="col">
                            <label class="input">
                                <input class="input__field setting-width mb-2" type="text" placeholder=" " id="LastName" name="LastName" 
                                    autocomplete="off" />
                                <span class="input__label">Last Name<span class="colorRed">*</span></span>
                            </label><br>
                            <!-- <span id="spanLastName" class="spanCompany"></span> -->
                        </div>





                        <div class="col">
                            <label class="input">
                                <input class="input__field setting-width mb-2" type="text" placeholder=" " id="Address" name="Address" 
                                    autocomplete="off" />
                                <span class="input__label">Address<span class="colorRed">*</span></span>
                            </label><br>
                            <!-- <span id="spanAddress" class="spanCompany"></span> -->
                        </div>



                        <div class="col">
                            <label class="input">
                                <input class="input__field setting-width mb-2" type="number" placeholder=" " name="phoneNumber" 
                                    id="phoenVal" autocomplete="off" />
                                <span class="input__label">Contact Number<span class="colorRed">*</span></span>
                            </label><br>
                            <!-- <span id="spanPhone" class="spanCompany"></span> -->
                        </div>




                        <div class="col">
                            <label class="input">
                                <input class="input__field setting-width mb-2" type="email" placeholder=" " id="email" name="emialId" 
                                    autocomplete="off" />
                                <span class="input__label">Email<span class="colorRed">*</span></span>
                            </label><br>
                            <!-- <span id="spanEmail" class="spanCompany"></span> -->
                        </div>


                        <div class="input-group  mb-3">
                            <input type="file" class="form-control" id="photo" name="userPhoto">
                            <!-- <span id="spanPhoto" class="spanCompany"></span> -->
                        </div>




                        <!-- <div class="col">
                            <label for="">Module<span class="colorRed">*</span></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]" value="Excursion">
                                <label class="form-check-label" for="inlineCheckbox1">Excursion</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="Hotel">
                                <label class="form-check-label" for="inlineCheckbox2">Hotel</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="Query">
                                <label class="form-check-label" for="inlineCheckbox2">Query</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="Rooms">
                                <label class="form-check-label" for="inlineCheckbox2">Rooms</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="Transfer">
                                <label class="form-check-label" for="inlineCheckbox2">Transfer</label>
                            </div>
                             <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="Invoice">
                                <label class="form-check-label" for="inlineCheckbox2">Invoice</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="Itinerary">
                                <label class="form-check-label" for="inlineCheckbox2">Itinerary</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="Todo">
                                <label class="form-check-label" for="inlineCheckbox2">Todo</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="ReportName">
                                <label class="form-check-label" for="inlineCheckbox2">Report Name</label>
                            </div>

                        </div> -->


                        <div class="col">
                            <label for="">Module<span class="colorRed">*</span></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]" value="Inventory">
                                <label class="form-check-label" for="inlineCheckbox1">Inventory</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="Query">
                                <label class="form-check-label" for="inlineCheckbox2">Query</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="HotelVoucher">
                                <label class="form-check-label" for="inlineCheckbox2">HotelVoucher</label>
                            </div>
                             <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="Invoice">
                                <label class="form-check-label" for="inlineCheckbox2">Invoice</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="Itinerary">
                                <label class="form-check-label" for="inlineCheckbox2">Itinerary</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="Todo">
                                <label class="form-check-label" for="inlineCheckbox2">Todo</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="ReportName">
                                <label class="form-check-label" for="inlineCheckbox2">Report Name</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="" name="checkContainer[]"  value="Stocks">
                                <label class="form-check-label" for="inlineCheckbox2">Stocks</label>
                            </div>
                        </div>
                        
                        <div class="col">
                            <label for="">Type<span class="colorRed">*</span></label>
                            <select name="userType" id="vCategory1" onchange="checkAllBoxes()" class="setting-select mt-2 mb-2">
                                <option value="Admin">Admin</option>
                                <!-- <option value="HR">HR</option> -->
                                <option value="Super Admin">Super Admin</option>
                            </select>
                            <!-- <span id="spanAdmin" class="spanCompany"></span> -->
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="new_btn px-3" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="new_btn px-3">Save</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>






            </div>
        </div>
        <!-- end page content -->
        <!-- start chat sidebar -->

        <!-- end chat sidebar -->
    </div>

    <?php $this->load->view('footer');?>

    <script type="text/javascript">  

            function checkAllBoxes(){  
                var userType = document.getElementById("vCategory1").value;
                if(userType == 'Super Admin'){
                var ele=document.getElementsByName('checkContainer[]');  
                    for(var i=0; i<ele.length; i++){  
                        if(ele[i].type=='checkbox')  
                            ele[i].checked=true;  
                    }
                }  
            }  
        </script> 

    <script type="text/javascript">
        $(".edit").click(function(){

            var id = $(this).attr('data-id');
           // alert(id);
           $url = '<?php echo base_url()?>';
           $.ajax({

            type:'POST',
            url:'<?php echo site_url();?>/roles/edit_users',
            data:{'id':id},
            dataType: "json",
            success:function(response)
            {
            console.log("🚩 ~ file: users.php ~ line 516 ~ $ ~ response", response)
                $("#userId").val(response.id);
                $("#UserName").val(response.UserName);
                $("#password").val(response.password);
                $("#firstName").val(response.firstName);
                $("#LastName").val(response.LastName);
                $("#Address").val(response.Address);
                $("#phoenVal").val(response.phoneNumber);
                $("#email").val(response.emialId);
                $("#old_image").val(response.userPhoto);
                $("#current_photo").attr('src',$url+response.userPhoto);
                $("#vCategory").val(response.userType);
                var strh = response.modules;
                var modules = strh.split(",");

                $('#Inventory2').prop('checked', false);
                $('#Query2').prop('checked', false);
                $('#HotelVoucher2').prop('checked', false);
                $('#Invoice2').prop('checked', false);
                $('#Itinerary2').prop('checked', false);
                $('#Todo2').prop('checked', false);
                $('#ReportName2').prop('checked', false);
                $('#Stocks2').prop('checked', false);

                for(var i=0;i< modules.length;i++)
                {
                      if(modules[i] == 'Inventory')
                    {
                        $('#Inventory2').prop('checked', true);
                    }  
                          if(modules[i] == 'Query')
                    {
                        
                        $('#Query2').prop('checked', true);
                    }
                   if(modules[i] == 'HotelVoucher')
                    {
                        
                        $('#HotelVoucher2').prop('checked', true);
                    }
                     if(modules[i] == 'Invoice')
                    {
                        
                         $('#Invoice2').prop('checked', true);
                    }
                        
                          if(modules[i] == 'Itinerary')
                    {
                        
                         $('#Itinerary2').prop('checked', true);
                    }
                      if(modules[i] == 'Todo')
                    {
                        
                        $('#Todo2').prop('checked', true);
                    }
                    if(modules[i] == 'ReportName')
                    {
                        
                        $('#ReportName2').prop('checked', true);
                    }

                    if(modules[i] == 'Stocks')
                    {
                        
                        $('#Stocks2').prop('checked', true);
                    }
                    
                 }
            }
        

           });        
        });
    </script>

     <script type="text/javascript">
        $(".delete").click(function(){

            var id = $(this).attr('data-id');
           // alert(id);
           $url = '<?php echo base_url()?>';
           $.ajax({

            type:'POST',
            url:'<?php echo site_url();?>/roles/delete_user',
            data:{'id':id},
            dataType:"json",
            success:function(response)
            {
                alert(response);
                window.location.reload();
            }
        

           });        
        });
    </script>