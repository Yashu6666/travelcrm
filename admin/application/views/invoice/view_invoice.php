<?php $this->load->view('header');?>
    <!-- <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script> -->
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/invoice.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/index.css">
<style>
#modal-trigger {
  display: none;
}
</style>
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
                                <div class="page-title">Proforma Invoice</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Proforma Invoice</li>
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
                                    <header>Proforma Invoice</header>
                                </div>
                                <div class="card-body ">
                                    <div class="row p-b-20">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                            <a href="<?php echo site_url();?>invoice/add_invoice" type="button"
                                                class="new_btn px-3">Add New Proforma Invoice <i class="fa fa-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6">
                                        </div>
                                    </div>
                                    <div class="table-scrollable">
                                        <table class="table table-hover table-checkable order-column full-width"
                                            id="exampleReport2">
                                            <thead>
                                                <tr><th class="center">Sl No.</th>
                                                    <th class="center"> Proforma Invoice Date </th>
                                                    <th class="center"> Proforma Invoice No </th>
                                                    <th class="center"> Travel Agency Name </th>
                                                    <th class="center"> Invoice value </th>
                                                    <th class="center">VAT</th>
                                                    <th class="center"> Received </th>
                                                    <th class="center"> Balance </th>
                                                    <th class="center"> Due date </th>
                                                    <?php if ($this->session->userdata('reg_type') == 'Super Admin') : ?>
                                                        <th class="center"> Created By </th>
                                                    <?php endif ?>
                                                    <th class="center"> Status </th>
                                                    <th class="center"> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            for($i=0;$i<count($listInvoice);$i++){
                                                 $email_client = $listInvoice[$i]->invoiceClientAddress;
                                                 ?>
                                                <tr class="odd gradeX text-center">
                                                    <td><?php echo $i+1;?></td>
                                                    <td><?php echo $listInvoice[$i]->invoiceDate;?></td>
                                                    <td><?php echo $listInvoice[$i]->invoiceNumber;?></td>
                                                    <td><?php echo $company_names[$i];?></td>
                                                    <td><?php echo $listInvoice[$i]->finalTotalInvoice;?></td>
                                                    <td><?php echo $listInvoice[$i]->finalVAT;?></td>
                                                    <td><?php echo $listInvoice[$i]->finalAdvance;?></td>
                                                    <td class="text-danger"><?php echo $listInvoice[$i]->finalBalance;?></td>
                                                    <td><?php echo $listInvoice[$i]->invoicePayment;?></td>
                                                    <?php if ($this->session->userdata('reg_type') == 'Super Admin') : ?>
                                                        <td><?php echo $admin_names[$i]?></td>
                                                    <?php endif ?>
                                                    <?php if($listInvoice[$i]->finalBalance == 0)
                                                    {?>
                                                        <td>Completed</td>
                                                    <?php } elseif ($listInvoice[$i]->finalBalance > 0) { ?>
                                                        <td>Pending</td>
                                                    <?php   } 
                                                    ?>
                                                    <td class="center">
                                                         <div class="dropdown-center ">
                                                            <button class="new_btn px-3" type="button" id=""
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                Select
                                                            </button>
                                                            <ul class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton1" style="inset: -18px auto auto 900px; !important ">
                                                                <li>
                                                                    <a onclick="checkamount(<?php echo $listInvoice[$i]->id;?>)" class="dropdown-item" data-id="<?php echo $listInvoice[$i]->id;?>"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModal">
                                                                        Add a Payment
                                                                </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" style="color:#212529 !important;"
                                                                        href="<?php echo site_url();?>invoice/modify_invoice/<?php echo $listInvoice[$i]->id;?>">Modify Invoice</a>
                                                                </li>
                                                                <li>
                                                                    <!-- <a class="dropdown-item" onclick="sendmail(<?php echo $listInvoice[$i]->id;?>)" id="show-modal-btn9" data-id="<?php echo $listInvoice[$i]->id;?>">
                                                                        Send Email
                                                                    </a> -->
                                                                    <a type="button" class="dropdown-item get-client-mail"  onclick="sendInvoiceMail(<?php echo $listInvoice[$i]->id;?>)" data-id="<?php echo $listInvoice[$i]->id;?>" data-bs-toggle="modal" data-bs-target="#sendMail">Send Email</a>
                                                                </li>
                                                                <a  class="dropdown-item get-client-mail" onclick="remainderEmail(<?php echo $listInvoice[$i]->query_id ?>,<?php echo $i ?>)" data-id="<?php echo $listInvoice[$i]->id;?>" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="margin-left:-3% !important;">
                                                                    Send Reminder Email
                                                                </a>
                                                                <li>
                                                                    <a class="dropdown-item"  style="color:#212529 !important;" href="<?php echo site_url();?>invoice/printInvoice/<?php echo $listInvoice[$i]->id;?>">View
                                                                        Invoice</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                             <?php }?>
                                            </tbody>
                                        </table>
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
    <!-- Modal 1-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content" style="width: 600px;">
                        <div class="modal-header" style="height: 70px;">
                            <h5 class="modal-title" id="exampleModalLabel">Add a Payment AED <span id="balanceAmt"></span> Outstanding</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                        </div>
                        <form action="<?php echo site_url();?>invoice/makePayment" method="post">
                            <input type="hidden" name="payId" id="payId">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Amount</span>
                                    </div>
                                    <input type="text" name="payAmount" required class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Payment Date</span>
                                    </div>
                                    <input type="date" name="payDate" required class="form-control">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Payment Type</label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01" name="payType">
                                                <option value="Remittance">Remittance</option>
                                                <option value="By Angadia">By Angadia</option>
                                                <option value="On Arrival AED">On Arrival AED</option>
                                                <option value="On Arrival USD">On Arrival USD</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                               

                                        <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Payment Notes(optional)</span>
                                    </div>
                                    <input type="text" name="payNotes" id="vDateOf" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Payment</button>
                        </div>
                        
                    </div>
                    </form>
                </div>
            </div>
            </div>

        <div class="modal fade" id="sendMail" tabindex="-1" aria-labelledby="sendMailModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sendMailModalLabel">Send Invoice Email</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        <label class="input">
        <!-- value="<?php //echo $email_client;?>" -->
            <input class="input__field invoice-email" type="text" placeholder=" " id="invoiceEmailId" 
                autocomplete="off" />
            <span class="input__label">Email</span>
        </label>
        <input type="hidden" id="pay_id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button"  id="send_invoice_mail" class="btn btn-primary">Send</button>
      </div>
    </div>
  </div>
</div>
            <!-- Modal 2-->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Send Reminder Email</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                        </div>
                        <div class="modal-body">
                            <div class="ml-3">
                                <label class="input">
                                    <input class="input__field Subject-width" type="text" placeholder=" " id="remaindEmailID"
                                        autocomplete="off" />
                                    <span class="input__label">Email</span></span>
                                </label>
                            </div>
                            <div class="ml-3">
                                <label class="input">
                                    <input class="input__field Subject-width" id="subj_id" type="text"  placeholder=" " id=""
                                        autocomplete="off" />
                                    <span class="input__label">Subject</span></span>
                                </label>
                            </div>
                            <div class="col-md-12">
                                <textarea name="editor3">
                                </textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="remainder_email_submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </div>
            </div>
                <!-- end page content -->
        <?php $this->load->view('footer');?>
        <script src="<?php echo base_url();?>public/js/scripts.js"></script>
    <script src="<?php echo base_url();?>public/js/validate.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
    CKEDITOR.replace('editor3');
    // function remainderEmail(id,total,paid,bal,c_type){
        function remainderEmail(id,index){
        let data = <?php echo json_encode($listInvoice) ?>;
        let admin_names = <?php echo json_encode($admin_names) ?>;
        let package_data = <?php echo json_encode($package_data) ?>;
        let obj = data.find(o => o.query_id == id);
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); 
        var yyyy = today.getFullYear();
        today = dd+mm+yyyy;
        document.getElementById('subj_id').value = "Balance Payment for Invoice No "+
        `${obj.invoiceNumber}(DT/${admin_names[index] != null || admin_names[index] != 'N/A' ? admin_names[index] : "" }/${obj.invoiceNumber}/ ${admin_names[index] != null || package_data[index] != 'null' ? (parseInt(package_data[index].adult) + parseInt(package_data[index].child) + parseInt(package_data[index].infant)) : '' } Pax /${obj.query_id} /${today}) `
        let table_data = `<table border='1' cellspacing="1" width='100%'>
                                    <tr>
                                        <td style='padding: 15px;'>Currency</td>
                                        <td style='padding: 15px;'>Total Amount</td>
                                        <td class="text-center">Recived Amount</td>
                                        <td class="text-center">Balance Amount</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">${obj.invoiceCurrency}</td>
                                        <td class="text-center">${obj.finalTotalInvoice}</td>
                                        <td class="text-center">${obj.finalAdvance}</td>
                                        <td class="text-center">${obj.finalBalance}</td>
                                    </tr>
                                </table>`;
        CKEDITOR.instances.editor3.setData(table_data);
    }
    $("#remainder_email_submit").click(function(){
        var email = document.getElementById('remaindEmailID').value;
        var subject = document.getElementById('subj_id').value;
        var editorText = CKEDITOR.instances.editor3.getData();
        $.ajax({
            type:"POST",
            url:'<?php echo site_url();?>/invoice/sendMailRemainder',
            data:{'email':email, 'subject':subject, 'body':editorText},
            success:function(response)
            {
                console.log(response);
                toastr.success("Resend Invoice Mail Sent Successfully");
            }
        });
    });
</script>
                <script>
                    //      $(document).ready(function () {
                    // $('body').on('click', '#openpayment',function(){
                    //  alert($(this).attr('data-id'));
                    //     document.getElementById("payId").value = $(this).attr('data-id');
                    //      console.log($(this).attr('data-id'));
                    //     });
                    // });
                    // CKEDITOR.replace('editor3');
                    // const overlay9 = document.getElementById("overlay9");
                    // document.querySelector("#show-modal-btn9").addEventListener("click", () => {
                    //  overlay9.style.display = "block";
                    // });
                    // document.querySelector(".close_modal_btn9").addEventListener("click", () => {
                    //  overlay9.style.display = "none";
                    // });
                </script>
                <script type="text/javascript">
                    // function sendmail(id){
                    //  // alert('hi');
                    //  const overlay9 = document.getElementById("overlay9");
                    //  overlay9.style.display = "block";
                    // }
                    // function closemail(){
                    //  const overlay9 = document.getElementById("overlay9");
                    //  overlay9.style.display = "none";
                    // }
                    function checkamount(id){
                        $("#balanceAmt").empty();
                        $("#payId").val(id);
                        $.ajax({
                            type:"POST",
                            url:'<?php echo site_url();?>/invoice/getBalanceAmount',
                            data:{'payId':id},
                            dataType:"JSON",
                            success:function(response)
                            {
                                $("#balanceAmt").append(response.finalBalance);
                            }
                        });
                    }
                </script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
                <script type="text/javascript">
                    $(".get-client-mail").click(function(){
                    var id = $(this).attr('data-id');
                    $.ajax({
                        type:"POST",
                        url:'<?php echo site_url();?>/invoice/getClientEmail',
                        data:{'id':id},
                        dataType:"JSON",
                        success:function(response)
                        {
                            console.log(response);
                            $("#invoiceEmailId").val(response.invoiceClientAddress);
                            $("#remaindEmailID").val(response.invoiceClientAddress);
                        }
                    });
                });
                    $(".invoiceEmail").click(function(){
                        var id = $(this).attr('data-id');
                        $.ajax({
                            type:"POST",
                            url:'<?php echo site_url();?>/invoice/getClientEmail',
                            data:{'id':id},
                            dataType:"JSON",
                            success:function(response)
                            {
                                console.log(response);
                                $("#invoiceEmailId").val(response.invoiceClientAddress);
                                $("#remaindEmailID").val(response.invoiceClientAddress);
                            }
                        });
                    });
                    function sendInvoiceMail(id){
                        document.getElementById("pay_id").value = id;
                    }
                const btn = document.getElementById("send_invoice_mail");
                btn.addEventListener("click", () => {
                    let email = document.getElementById("invoiceEmailId").value;
                    let pay_id = document.getElementById("pay_id").value;
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url('/invoice/sendMailInvoice')?>" ,
                        data: {email: email,pay_id: pay_id},
                        success: function(result) {
                        toastr.success("Email Sent Successfully");
                        console.log("email sent");
                        },
                        error: function() {
                        console.log("Error");
                        toastr.error("Error while sending email");
                        },
                    });
                    })
                </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js" defer></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
<script>
$(document).ready(function() {
  $('#exampleReport2').DataTable( {
      dom: 'Bfrtip',
      buttons: [
              {
                  extend: 'pdfHtml5',
                  text: '<i class="fa-solid fa-file-pdf fa-2x"></i>',
                  title: 'Hotel Voucher Data',
              },
              {
                  extend: 'excelHtml5',
                  text: '<i class="fa-solid fa-file-excel fa-2x"></i>',
                  title: 'Hotel Voucher Data',
              },
      ]
  } );
} );
</script>
<style>
  .dataTables_filter {
  float: left !important;
  }
  .dataTables_wrapper .dt-buttons {
      float: right;
      font-size: 2.5rem !important;
  }
</style>