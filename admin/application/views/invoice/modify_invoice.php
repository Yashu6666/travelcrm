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
                                <div class="page-title">Edit Invoice</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </i>&nbsp;<a class="parent-item" href="<?php echo base_url(); ?>invoice/view_invoice">Invoice</a>&nbsp;<i
                                        class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit Invoice</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    
                                    <div class="tools">
                                  

                                                                                           

                                    </div>
                                   
                                </div>
                        <form onsubmit="return validateInvoice();" action="<?php echo site_url();?>invoice/updateInvoiceDetails/<?php echo $edit_invoice->id;?>" method="post">
                                <input type="hidden" id="com_invoiceTaxableAmount" name="com_invoiceTaxableAmount" value=""/>  
                                <input type="hidden" id="com_invoiceRate" name="com_invoiceRate" value=""/>  
                                <input type="hidden" id="com_invoicePax" name="com_invoicePax" value=""/>  
                                <input type="hidden" id="com_invoiceVatAmount" name="com_invoiceVatAmount" value=""/>  
                                <input type="hidden" id="com_invoiceTotalAmount" name="com_invoiceTotalAmount" value=""/>  

                                
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
                                                                name="clientName" placeholder=" "  id="clientName" value="<?php echo $edit_invoice->billTo; ?>" required="" autocomplete="off"/>
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
                                                                autocomplete="off"  readonly="" value="<?php echo $edit_invoice->invoiceDate ?>" />
                                                            <span class="input__label">Invoice Date<span
                                                                    class="colorRed">*</span></span>

                                                        </label><br>
                                                        <b><span id="spanInvoiceDate" class="colorRed"></span></b>
                                                    </td>
                                                    <td><label class="input">
                                                            <input class="input__field invoice-width" type="date"
                                                                name="invoicePayment" placeholder=" "
                                                                id="invoicePayment"   readonly="" autocomplete="off"  value="<?php echo $edit_invoice->invoicePayment ?>" />
                                                            <span class="input__label">Payment Due Date<span
                                                                    class="colorRed">*</span></span>

                                                        </label><br>
                                                        <b><span id="spaninvoicePayment" class="colorRed"></span></b>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td><label class="input">
                                                            <input class="input__field invoice-width" type="number"
                                                                name="invoiceNumber" placeholder=" " id="invoiceNumber" value="<?php echo $edit_invoice->invoiceNumber ?>" disbled
                                                                autocomplete="off"  readonly=""/>
                                                            <span class="input__label">Invoice Number<span
                                                                    class="colorRed">*</span></span>

                                                        </label><br>
                                                        <b><span id="spanInvoiceNumber" class="colorRed"></span></b>
                                                    </td>
                                                    <td><label class="input">
                                                            <input class="input__field invoice-second" type="text"
                                                                name="invoiceClientAddress" placeholder=" " value="<?php echo $edit_invoice->invoiceClientAddress?>" id="" autocomplete="off" />
                                                            <span class="input__label">Agency Email</span>

                                                        </label>

                                                    </td>
                                                     <td><label class="input">
                                                            <input class="input__field invoice-second" type="text"
                                                                name="invoicePhoneNumber" placeholder=" " id="" value="<?php echo $edit_invoice->invoicePhoneNumber?>" autocomplete="off" />
                                                            <span class="input__label">Agency Contact Number</span>

                                                        </label>

                                                    </td>

                                                    <td><label class="input">
                                                            <input class="input__field invoice-second" type="text"
                                                                name="invoiceAgencyName" placeholder=" " id="" value="<?php echo isset($details->b2bmobileNumber)?$details->b2bcompanyName:"" ?>" autocomplete="off" />
                                                            <span class="input__label">Agency Name</span>

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
                                                <tr id="caluculation_tr " class="caluculation_table">
                                                    <td>
                                                        <div class="mb-3">
                                                            <input type="text" class="form-control invoiceDesc" id="invoiceDesc"
                                                                name="invoiceDesc[]" aria-describedby="emailHelp"
                                                                placeholder="Eg: Flight, Hotel etc.." autocomplete="off" value="<?php echo $edit_invoice->invoiceCategory?>">

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
                                                            <input type="number" class="form-control invoiceRate" id="invoiceRate"
                                                                name="invoiceRate[]" aria-describedby="emailHelp"
                                                                step="any"  value="<?php echo $edit_invoice->invoiceRate ?>" autocomplete="off">
                                                            <b><span id="spanRate" class="colorRed"></span></b>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="mb-3">
                                                            <input type="number" id="invoicePax" class="form-control invoicePax"  name="invoicePax[]"
                                                                aria-describedby="emailHelp" value="<?php echo $edit_invoice->invoiceQty?>" autocomplete="off" >
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
                                                            <input type="number" class="form-control Taxable invoiceTaxableAmount"
                                                                id="invoiceTaxableAmount" name="invoiceTaxableAmount[]" aria-describedby="emailHelp"
                                                                step="any"  value ="<?php echo $edit_invoice->invoiceAmount?>" autocomplete="off">

                                                        </div>
                                                    </td>
                                                    <td>

                                                         <div class="mb-3">
                                                         <input type="text" class="form-control mt-2 invoiceVatPercentage" id="invoiceVatPercentage" name="invoiceVatPercentage[]" 
                                                                    id="exampleInputEmail1" aria-describedby="emailHelp" readonly=""
                                                                    value="5" autocomplete="off"/>
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
                                                            <input type="number" class="form-control invoiceVatAmount"
                                                            step="any"  aria-describedby="emailHelp" id="invoiceVatAmount" name="invoiceVatAmount[]" 
                                                                value="<?php echo $edit_invoice->invoiceVatChoice?>" autocomplete="off"> 
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
                                                            <input type="number" class="form-control invoiceTotalAmount"
                                                                id="invoiceTotalAmount" aria-describedby="emailHelp" name="invoiceTotalAmount" 
                                                                step="any"  value="<?php echo $edit_invoice->invoiceTotalAmount?>" autocomplete="off">
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

                                                    <button type="button" class="new_btn px-3 m-2" style="margin-left:50% !important;"  id="addRows">Add row</button>
                                            </div>
                                            <div class="col-lg-6 p-t-20 ">

                                                    <button type="button" class="new_btn px-3 m-2" style="margin-left:50% !important;" onclick="DeleteRows();" id="deleteRow">Delete </button>
                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-end border">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label for="inputPassword6" class="col-form-label">Sub Total</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="text" id="finalSubtotal" class="form-control" name="finalSubtotal" 
                                                        aria-describedby="passwordHelpInline" value="<?php echo $edit_invoice->finalSubtotal?>" autocomplete="off" readonly="">
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
                                                        aria-describedby="passwordHelpInline" value="<?php echo $edit_invoice->finalSubtotal?>" autocomplete="off" readonly="">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-end border">
                                            <div class="row g-3 align-items-center">
                                                <div class="col-auto">
                                                    <label for="inputPassword6" class="col-form-label">Bank Charges</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input type="number" step="any" name="bank_charges" id="bank_charges" class="form-control" value="<?php echo $edit_invoice->bank_charges?>">
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
                                                    <input type="text" name="finalTotalInvoice" id="finalTotalInvoice" class="form-control" value="<?php echo $edit_invoice->finalTotalInvoice?>" 
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
                                                         value="<?php echo $edit_invoice->finalAdvance?>" >
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
                                                    <input type="text" name="finalBalance" id="finalBalance" class="form-control" value="<?php echo $edit_invoice->finalBalance?>" readonly="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <label class="col-md-12 control-label text-left"><b>Details</b></label>
                                            <div class="col-md-12">
                                               <textarea name="editorNotes"><?php echo $edit_invoice->notes?></textarea>
                                            </div>

                                        </div>

                                        <div class="mt-4">

                                            <label class="col-md-12 control-label text-left"><b>Term &  Conditions</b></label>
                                            <div class="col-md-12">
                                                <textarea name="editorTrmsCond"><?php echo $edit_invoice->TrmsCond?></textarea>
                                            </div>
                                        </div>





                                        <div class="d-flex justify-content-end mt-4">
                                            <button type="submit" class="new_btn px-3">Update</button>
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
         $('#addRows').click(function () {
            
            var newRow  = '<tr id="caluculation_tr'+faqs_row+'" class="caluculation_table">';
                newRow +='<td><div class="mb-3"><input type="text" class="form-control invoiceDesc" id="invoiceDesc'+faqs_row+'" name="invoiceDesc[]" aria-describedby="emailHelp" placeholder="Eg: Flight, Hotel etc.." autocomplete="off"><b><span id="spaninvoiceCate" class="colorRed"></span></b></div></td>';
                newRow +='<td><div class="mb-3"><input type="number" class="form-control invoiceRate" id="invoiceRate'+faqs_row+'" name="invoiceRate'+faqs_row+'" aria-describedby="emailHelp" value="0" autocomplete="off"><b><span id="spanRate" class="colorRed"></span></b></div></td>';
                newRow +='<td><div class="mb-3"><input type="number" id="invoicePax'+faqs_row+'" name="invoicePax'+faqs_row+'" class="form-control invoicePax" aria-describedby="emailHelp" value="0" autocomplete="off" ><b><span id="spantotal" class="colorRed"></span></b></div></td>';
                newRow +='<td><div class="mb-3"><input type="number" class="form-control invoiceTaxableAmount" id="invoiceTaxableAmount'+faqs_row+'" name="invoiceTaxableAmount'+faqs_row+'" aria-describedby="emailHelp" value="0.00" autocomplete="off"></div></td>';
                newRow +='<td><div class="mb-3"><input type="number" class="form-control mt-2 invoiceVatPercentage" id="invoiceVatPercentage'+faqs_row+'" name="invoiceVatPercentage'+faqs_row+'" aria-describedby="emailHelp" value="5" readonly="" autocomplete="off"></div></td>';
                newRow +='<td><div class="mb-3"><input type="number" class="form-control invoiceVatAmount" aria-describedby="emailHelp" id="invoiceVatAmount'+faqs_row+'" name="invoiceVatAmount'+faqs_row+'" value="0.00" autocomplete="off"></div></td>';
                newRow +='<td><div class="mb-3"><input type="number" class="form-control invoiceTotalAmount" id="invoiceTotalAmount'+faqs_row+'" aria-describedby="emailHelp" name="invoiceTotalAmount'+faqs_row+'" value="0" autocomplete="off"></div></td>';
                $('#addrows').append(newRow); 
            faqs_row++;   
        });

        function DeleteRows(){
            // $("#addrows tr").last().remove();
            if($("#addrows tr").length > 2){
                $("#addrows tr").last().remove();
            }
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

$(window).click(function() {

    

        var qty_s = $('#invoicePax').val();
        var rate_S = $('#invoiceRate').val();
        var vat_percentage_S  = $('#invoiceVatPercentage').val();
        var finalAdvance_S  = $('#finalAdvance').val();      
        var totalInvoice_S = (qty_s * rate_S);
        var vatAmount_S = (parseInt(totalInvoice_S) * parseInt(vat_percentage_S) / 100);
        var bank_charges = $('#bank_charges').val();

        var vatTotalAmount_s = Math.ceil(totalInvoice_S + vatAmount_S);
        $('#invoiceTaxableAmount').val(Math.ceil(totalInvoice_S));
        $('#invoiceVatAmount').val(Math.ceil(vatAmount_S));
        $('#invoiceTotalAmount').val(Math.ceil(vatTotalAmount_s));
        // $("#finalBalance").val(parseInt(vatTotalAmount_s) - parseInt(finalAdvance_S));
        $(".invoiceRate,.invoicePax").change(function(){
        var qty = $('.invoicePax').map(function(){  return  this.value }).get()

        $.each(qty, function(index, value){

            var pax = $('#invoicePax'+index).val();
            var rate = $('#invoiceRate'+index).val();
            var vat_percentage  = $('#invoiceVatPercentage'+index).val();
            var totalInvoice = (parseFloat(pax) * parseFloat(rate));
            var vatAmount = (parseInt(totalInvoice) * parseInt(vat_percentage) / 100);
            var vatTotalAmount = (totalInvoice + vatAmount);
            $('#invoiceTaxableAmount'+index).val(totalInvoice);
            $('#invoiceVatAmount'+index).val(vatAmount);
            $('#invoiceTotalAmount'+index).val(vatTotalAmount);

        })

    });

    var invoiceTaxableAmount = 0;
    var sum_vatAmount = 0;
    var sum_finalTotalAmount = 0;

    var sum_invoiceRate = 0;
    var sum_invoicePax = 0;

    $(".invoiceRate").each(function(){
        sum_invoiceRate += Math.ceil(parseFloat($(this).val()));
    });
    $(".invoicePax").each(function(){
        sum_invoicePax += Math.ceil(parseFloat($(this).val()));
    });

    $(".invoiceTaxableAmount").each(function(){
        invoiceTaxableAmount += Math.ceil(parseFloat($(this).val()));
    });
    $(".invoiceVatAmount").each(function(){
        sum_vatAmount += Math.ceil(parseFloat($(this).val()));
    });
    $(".invoiceTotalAmount").each(function(){
        sum_finalTotalAmount += Math.ceil(parseFloat($(this).val()));
    });


    $('#finalSubtotal').val( parseFloat(invoiceTaxableAmount) );

    $('#finalVAT').val( parseFloat(sum_vatAmount) );
    
    $('#finalTotalInvoice').val( sum_finalTotalAmount  + parseInt(bank_charges));
    // common
    $('#com_invoiceTaxableAmount').val(invoiceTaxableAmount);
    $('#com_invoiceRate').val(sum_invoiceRate);

    $('#com_invoicePax').val(sum_invoicePax);
    $('#com_invoiceVatAmount').val(sum_vatAmount);
    $('#com_invoiceTotalAmount').val( sum_finalTotalAmount );
    



});

</script>
<!-- 
<script type="text/javascript">
     
      $("#invoiceRate,#invoicePax").change(function() {
   
      var qty = $('#invoicePax').val();
      var rate = $('#invoiceRate').val();
      var vat_percentage  = $('#invoiceVatPercentage').val();
      var finalAdvance  = $('#finalAdvance').val();      
      var totalInvoice = (qty * rate);
      var vatAmount = (parseInt(totalInvoice) * parseInt(vat_percentage) / 100);
      var vatTotalAmount = (totalInvoice + vatAmount);
       $('#invoiceTaxableAmount').val(totalInvoice);
       $('#invoiceVatAmount').val(vatAmount);
       $('#invoiceTotalAmount').val(vatTotalAmount);

       $('#finalSubtotal').val( totalInvoice );
       $('#finalVAT').val( vatAmount );
       var finalTotalAmount = (totalInvoice + vatAmount);
       $('#finalTotalInvoice').val(finalTotalAmount);
       var finalBalance = (finalTotalAmount - finalAdvance);

  });
</script> -->

    
    <!-- <script type="text/javascript">
     
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
    </script> -->

    <script type="text/javascript">
        $("#finalAdvance").change(function(){
             var advance = $('#finalAdvance').val();
             var finalTotalInvoice = $("#finalTotalInvoice").val();
            // var finalBalance = advance;
             $("#finalBalance").val(finalTotalInvoice - advance);
        });
    </script>