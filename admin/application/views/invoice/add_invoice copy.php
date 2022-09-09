 <?php $this->load->view('header');?>
  <link rel="stylesheet" href="<?php echo base_url();?>public/css/invoice.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/index.css">
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
                                <div class="page-title">Add Invoice</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </i>&nbsp;<a class="parent-item" href="Invoice.html">Invoice</a>&nbsp;<i
                                        class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Invoice</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    
                                    <div class="tools">
                                  

                                                                                           

                                    </div>
                                    <form  action="<?php echo site_url();?>invoice/searchDetails" method="post">
                                 
                                    <label style="
    margin-left: 30px;
" class="input">
                                                            <input style="
    height: 36px;
" class="input__field" type="text"
                                                                name="query_id" placeholder=" " id="billTo"
                                                                autocomplete="off" />
                                                            <span class="input__label">Query ID<span
                                                                    class="colorRed">*</span></span>
                                                            <!-- <span id="spanBilledTo" class="colorRed"></span> -->
                                                        </label>
                                    <button type="submit" class="btn btn-success" >Search</button>
                               </form>
                                </div>
                                <form onsubmit="return validateInvoice();" action="<?php echo site_url();?>invoice/addInvoiceDetails" method="post">
                                    <div class="card-body ">

                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <!-- <td> -->
                                                        <!-- <label class="input">
                                                            <input class="input__field invoice-width" type="text"
                                                                name="billTo" placeholder=" " id="billTo"
                                                                autocomplete="off" />
                                                            <span class="input__label">Billed To<span
                                                                    class="colorRed">*</span></span>
                                                        </label><br>
                                                        <b><span id="spanBilledTo" class="colorRed"></span></b> -->
                                                    <!-- </td> -->
                                                    <td>
                                                        <label class="input">
                                                            <input class="input__field invoice-width" type="text"
                                                                name="clientName" placeholder=" "  id="clientName" value="<?php echo isset($details->b2bfirstName)?$details->b2bfirstName:"" ?>" required="" autocomplete="off"/>
                                                            <span class="input__label">Agency Name<span
                                                                    class="colorRed">*</span></span>
                                                           
                                                        </label><br>
                                                    </td>


                                                    <td>
                                                        <select class="invoice-INR" style="width:70% !important;height:38px !important;" name="invoiceCurrency">
                                                          <option value="AED">AED</option>
                                                          <option value="USD">USD</option>
                                                        </select>
                                                    </td>
                                                    <td><label class="input">
                                                            <input class="input__field invoice-width" type="date"
                                                                name="invoiceDate" placeholder=" " id="invoiceDate"
                                                                autocomplete="off"  readonly="" value="<?php echo $presentdate ?>" />
                                                            <span class="input__label">Invoice Date<span
                                                                    class="colorRed">*</span></span>

                                                        </label><br>
                                                        <b><span id="spanInvoiceDate" class="colorRed"></span></b>
                                                    </td>
                                                    <td><label class="input">
                                                            <input class="input__field invoice-width" type="date"
                                                                name="invoicePayment" placeholder=" "
                                                                id="invoicePayment"   readonly="" autocomplete="off"  value="<?php echo $duedate ?>" />
                                                            <span class="input__label">Payment Due Date<span
                                                                    class="colorRed">*</span></span>

                                                        </label><br>
                                                        <b><span id="spaninvoicePayment" class="colorRed"></span></b>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td><label class="input">
                                                            <input class="input__field invoice-width" type="number"
                                                                name="invoiceNumber" placeholder=" " id="invoiceNumber" value="<?php echo $invoicenumber ?>" disbled
                                                                autocomplete="off"  readonly=""/>
                                                            <span class="input__label">Invoice Number<span
                                                                    class="colorRed">*</span></span>

                                                        </label><br>
                                                        <b><span id="spanInvoiceNumber" class="colorRed"></span></b>
                                                    </td>
                                                    <td><label class="input">
                                                            <input class="input__field invoice-second" type="text"
                                                                name="invoiceClientAddress" placeholder=" " value="<?php echo isset($details->b2bEmail)?$details->b2bEmail:"" ?>" id="" autocomplete="off" />
                                                            <span class="input__label">Agency Email</span>

                                                        </label>

                                                    </td>
                                                     <td><label class="input">
                                                            <input class="input__field invoice-second" type="text"
                                                                name="invoicePhoneNumber" placeholder=" " id="" value="<?php echo isset($details->b2bmobileNumber)?$details->b2bmobileNumber:"" ?>" autocomplete="off" />
                                                            <span class="input__label">Agency Contact Number</span>

                                                        </label>

                                                    </td>
                                                    <!-- <td>
                                                        <label class="input">
                                                            <input class="input__field invoice-second" type="text"
                                                                name="ClientCity" placeholder=" " id="ClientCity"
                                                                autocomplete="off" />
                                                            <span class="input__label">Client City<span
                                                                    class="colorRed">*</span></span>

                                                        </label><br>
                                                        <b><span id="spanClientCity" class="colorRed"></span></b>
                                                    </td> -->
                                                    <!-- <td><label class="input">
                                                            <input class="input__field invoice-second" type="text"
                                                                name="ClientVat" placeholder=" " id="" autocomplete="off" />
                                                            <span class="input__label">Client VAT</span>

                                                        </label><br>
                                                        <span id="" class=""></span>
                                                    </td> -->
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>



                                        <table class="table table-bordered text-center" id="addrows">
                                            <thead>
                                                <tr>
                                                    <th>Descripton<span class="colorRed">*</span></th>
                                                    <!-- <th>Qty</th> -->
                                                    <th>Rate</th>
                                                    <th>Pax</th>
                                                    <!-- <th>Discount</th> -->
                                                    <th>Taxable Amount</th>
                                                    <th>Vat (5%)</th>
                                                    <th>Vat Amount</th>
                                                    <!-- <th>VAT</th> -->
                                                    <!-- <th>Total VAT</th> -->
                                                    <th>Total Amount</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control " id="invoiceCategory"
                                                                name="invoiceCategory" aria-describedby="emailHelp"
                                                                placeholder="Eg: Flight, Hotel etc.." autocomplete="off">

                                                            <b><span id="spaninvoiceCate" class="colorRed"></span></b>

                                                        </div>
                                                        <!-- <div class="mb-3">
                                                            <input type="number" class="form-control" id="invoiceNum"
                                                                name="invoiceNum" aria-describedby="emailHelp"
                                                                placeholder="SAC Code like -12345" autocomplete="off">
                                                            <b><span id="spaninvoiceNum" class="colorRed"></span></b>
                                                        </div> -->
                                                        <!-- <div class="form-floating">
                                                            <textarea class="form-control"
                                                                placeholder="Leave a comment here"
                                                                id="floatingTextarea" name="invoiceComment"></textarea>
                                                        </div> -->
                                                    </td>
                                                    <!-- <td>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="invoiceQty" value="1" 
                                                                aria-describedby="emailHelp"  autocomplete="off" name="invoiceQty">
                                                            <b><span id="spanqty" class="colorRed"></span></b>
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control" id="invoiceRate"
                                                                name="invoiceRate" aria-describedby="emailHelp"
                                                                value="0" autocomplete="off">
                                                            <b><span id="spanRate" class="colorRed"></span></b>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="mb-3">
                                                            <input type="text" id="invoiceTotal" name="total"
                                                                class="form-control"  name="invoiceTotal"
                                                                aria-describedby="emailHelp" value="0.00" autocomplete="off" readonly="">
                                                            <b><span id="spantotal" class="colorRed"></span></b>
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="row align-items-center">
                                                               <div class="col">
                                                                <input type="text" class="form-control mt-2"
                                                                    id="invoiceDiscount" name="invoiceDiscount" aria-describedby="emailHelp"
                                                                    value="0" autocomplete="off">
                                                            </div>
                                                            <div class="col">
                                                                <select name="invoiceDiscountChoice" id="invoiceDiscountChoice">
                                                                    <option value="">Select</option>
                                                                    <option value="Fixed">Fixed</option>
                                                                    <option value="%">%</option>
                                                                </select>


                                                               <input class="form-control" value="0.00" type="text" name="discAmount" id="discAmount" style="display: none;">
                                                            </div>
                                                         
                                                        </div>

                                                    </td> -->
                                                    <td>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                id="invoiceAmount" name="invoiceAmount" aria-describedby="emailHelp"
                                                                value ="0.00" autocomplete="off">

                                                        </div>
                                                    </td>
                                                    <td>

                                                         <div class="mb-3">
                                                         <input type="text" class="form-control mt-2" id="invoiceMarkup" name="invoiceMarkup" 
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    value="0" autocomplete="off">
                                                        </div>
                                                        <!-- <div class="row align-items-center">
               
                                                            <div class="col">
                                                                <input type="text" class="form-control mt-2" id="invoiceMarkup" name="invoiceMarkup" 
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                                                    value="0" autocomplete="off">
                                                            </div> -->
<!-- 
                                                            <div class="col">

                                                        <select name="invoiceMarkupChoice" id="invoiceMarkupChoice">
                                                            <option value="">Select</option>
                                                            <option value="Fixed">Fixed</option>
                                                            <option value="%">%</option>
                                                        </select>
                                                        <input class="form-control" value="0.00" type="text" name="discMarkup" id="discMarkup" style="display: none;">

                                                        </div> -->

                                                        <!-- </div> -->

                                                    </td>
                                                    <td>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                 aria-describedby="emailHelp" id="invoiceSubtotal" name="invoiceSubtotal" 
                                                                value="0.00" autocomplete="off"> 
                                                        </div>
                                                    </td>
                                                    <!-- <td>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                id="exampleInputEmail1" aria-describedby="emailHelp" name="invoiceVatChoice"
                                                                placeholder="VAT" autocomplete="off" readonly="">
                                                        </div>
                                                    </td> -->
                                                    <td>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control"
                                                                id="invoiceVat" aria-describedby="emailHelp" name="invoiceVat" 
                                                                value="0" autocomplete="off">
                                                        </div>
                                                    </td>
                                                    <!-- <td><input type="text" class="form-control"
                                                                id="invoiceTotalAmount" aria-describedby="emailHelp" name="invoiceTotalAmount" 
                                                                value="0.00" autocomplete="off" readonly=""></td> -->
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="col-lg-12 row ">
                                        <div class="col-lg-6 p-t-20 ">

        <button type="button" class="btn btn-success" style="margin-left:50% !important;" onclick="addRows();" id="addRow">Add row</button>
</div>
<div class="col-lg-6 p-t-20 ">

        <button type="button" class="btn btn-success" style="margin-left:50% !important;" onclick="DeleteRows();" id="addRow">Delete </button>
</div>
</div>





                                        <div class="d-flex justify-content-end border">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label for="inputPassword6" class="col-form-label">Sub Total</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="text" id="finalSubtotal" class="form-control" name="finalSubtotal" 
                                                        aria-describedby="passwordHelpInline" autocomplete="off" readonly="">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-end border">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label for="inputPassword6"  class="col-form-label">VAT (5%)</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="text" name="finalVAT" id="finalVAT" class="form-control"
                                                        aria-describedby="passwordHelpInline" autocomplete="off" readonly="">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-end border">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label for="inputPassword6" class="col-form-label">Total Invoice
                                                        Value</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="text" name="finalTotalInvoice" id="finalTotalInvoice" class="form-control" value="0.00" 
                                                        readonly="">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-end border">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label for="inputPassword6" class="col-form-label">Advance</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="text" name="finalAdvance" id="finalAdvance" class="form-control"
                                                         value="" >
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-end border">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label for="inputPassword6" class="col-form-label">Balance to be
                                                        paid</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="text" name="finalBalance" id="finalBalance" class="form-control" value="0.00" readonly="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <label class="col-md-12 control-label text-left"><b>Details</b></label>
                                            <div class="col-md-12">
                                               <textarea name="editorNotes"></textarea>
                                            </div>

                                        </div>

                                        <div class="mt-4">

                                            <label class="col-md-12 control-label text-left"><b>Term &  Conditions</b></label>
                                            <div class="col-md-12">
                                                <textarea name="editorTrmsCond"></textarea>
                                            </div>
                                        </div>





                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                                        </div>





                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <?php $this->load->view('footer');?>
            <script src="<?php echo base_url();?>public/js/scripts.js"></script>
    <script src="<?php echo base_url();?>public/js/validate.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editorNotes');
         CKEDITOR.replace('editorTrmsCond');
    </script>

    <!-- <script src="js/sb-customizer.js"></script> -->
    <script>
        console.clear()
        initSample();
        $('.js-example-basic-multiple').select2();
    </script>
    
    <script>
          var faqs_row = 0;  
        function addRows(){
            var newRow  = '<tr><td><div class="mb-3"><input type="text" class="form-control" id="invoiceCategory" name="invoiceCategory" aria-describedby="emailHelp" placeholder="Eg: Flight, Hotel etc.." autocomplete="off"><b><span id="spaninvoiceCate" class="colorRed"></span></b></div></td>';
                newRow +='<td><div class="mb-3"><input type="text" class="form-control" id="invoiceRate" name="invoiceRate" aria-describedby="emailHelp" value="0" autocomplete="off"><b><span id="spanRate" class="colorRed"></span></b></div></td>';
                newRow +='<td><div class="mb-3"><input type="text" id="invoiceTotal" name="total" class="form-control" aria-describedby="emailHelp" value="0.00" autocomplete="off" readonly=""><b><span id="spantotal" class="colorRed"></span></b></div></td>';
                newRow +='<td><div class="mb-3"><input type="text" class="form-control" id="invoiceAmount" name="invoiceAmount" aria-describedby="emailHelp" value="0.00" autocomplete="off"></div></td>';
                newRow +='<td><div class="mb-3"><input type="text" class="form-control mt-2" id="invoiceMarkup" name="invoiceMarkup" aria-describedby="emailHelp" value="0" autocomplete="off"></div></td>';
                newRow +='<td><div class="mb-3"><input type="text" class="form-control" aria-describedby="emailHelp" id="invoiceSubtotal" name="invoiceSubtotal" value="0.00" autocomplete="off"></div></td>';
                newRow +='<td><div class="mb-3"><input type="text" class="form-control" id="invoiceVat" aria-describedby="emailHelp" name="invoiceVat" value="0" autocomplete="off"></div></td>';
                $('#addrows').append(newRow); 
            faqs_row++;   
        }

        function DeleteRows(){

            $("#addrows tr").last().remove();
        }
                  
    </script>

   
    <script>
        // Listen for click on toggle checkbox
        $('#select_all').click(function (event) {
            if (this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $(':checkbox').each(function () {
                    this.checked = false;
                });
            }
        });

        function select_all_data(e) {
            if ($("#select_all").prop("checked")) {
                $("[class=checkboxcls]").prop("checked", true);
            } else {
                $("[class=checkboxcls]").prop("checked", false);
            }
        }



    </script>

    <script type="text/javascript">
     
           $("#invoiceRate,#invoiceQty").change(function() {

            var qty = 1;
            var rate = $('#invoiceRate').val();
            var totalInvoice = qty * rate;
             $('#invoiceTotal').val(totalInvoice);
             $('#invoiceAmount').val(totalInvoice);

        });
    </script>
    <script type="text/javascript">
        $("#invoiceDiscountChoice").change(function(){
            var dis_ch = $('#invoiceDiscountChoice').val();
            //alert(dis_ch);
            if(dis_ch == 'Fixed')
            {
                var totalAmount = $('#invoiceTotal').val();
                var discount = $('#invoiceDiscount').val();
                var Amount = totalAmount - discount;
                $('#invoiceAmount').val(Amount);

            }

            if(dis_ch == '%')
            {
                $('#discAmount').show();
                var totalAmount = $('#invoiceTotal').val();
                var discount = $('#invoiceDiscount').val();
                var Amount = parseInt(totalAmount)/parseInt(discount);
                $('#discAmount').val(Amount);
                 var finalAmount = totalAmount - Amount; 
                $('#invoiceAmount').val(finalAmount);
            }
        });
    </script>

    <script type="text/javascript">
        $("#invoiceMarkupChoice").change(function(){
          
        var markup_ch = $('#invoiceMarkupChoice').val();
        alert(markup_ch);
        if(markup_ch == 'Fixed')
        {

                var markupValue = $('#invoiceMarkup').val();
                var Amount = $('#invoiceAmount').val();
                var MarkupAmount = parseInt(Amount) + parseInt(markupValue);
                $('#invoiceSubtotal').val(MarkupAmount);


                var SubTotal = parseInt(Amount) + parseInt(markupValue);
                 var TotalVAT = (SubTotal *5)/100;
                $('#invoiceVat').val(TotalVAT);
                $('#invoiceTotalAmount').val(parseInt(markupValue) + parseInt(Amount)+TotalVAT);
                $('#finalSubtotal').val(parseInt(markupValue) + parseInt(Amount));
                 $('#finalVAT').val(TotalVAT);
                 $('#finalTotalInvoice').val(SubTotal + TotalVAT)

        }
        
            if(markup_ch == '%')
            {
                $('#discMarkup').show();
                var markupValue = $('#invoiceMarkup').val();
                var Amount = $('#invoiceAmount').val();
                var MarkupAmount = (parseInt(Amount) * parseInt(markupValue))/100;
                $('#discMarkup').val(MarkupAmount);
                var SubTotal = parseInt(Amount) + parseInt(MarkupAmount);
                $('#invoiceSubtotal').val(SubTotal);
                var TotalVAT = (SubTotal * 5)/100;
                $('#invoiceVat').val(TotalVAT);
                $('#invoiceTotalAmount').val(SubTotal + TotalVAT);
                $('#finalSubtotal').val(SubTotal);
                $('#finalVAT').val(TotalVAT);
                $('#finalTotalInvoice').val(SubTotal + TotalVAT)

            }
       
    });
    </script>

    <script type="text/javascript">
        $("#finalAdvance").keyup(function(){
             var advance = $('#finalAdvance').val();
             var finalTotalInvoice = $("#finalTotalInvoice").val();
            // var finalBalance = advance;
             $("#finalBalance").val(finalTotalInvoice - advance);
        });
    </script>