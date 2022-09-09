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
                                <div class="page-title">Edit Invoice</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
                                    </i>&nbsp;<a class="parent-item" href="Invoice.html">Invoice</a>&nbsp;<i
                                        class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Edit Invoice</li>
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
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                 <form onsubmit="return validateInvoice();" action="<?php echo site_url();?>invoice/updateInvoiceDetails/<?php echo $edit_invoice->id;?>" method="post">
                                <div class="card-body ">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="input">
                                                        <input class="input__field invoice-width" type="text"
                                                            name="billTo" placeholder=" " id="billTo"
                                                            autocomplete="off" value="<?php echo $edit_invoice->billTo;?>" />
                                                        <span class="input__label">Billed To</span>
                                                    </label><br>
                                                    <b><span id="spanBilledTo" class="colorRed"></span></b>
                                                </td>
                                                  <td>
                                                        <label class="input">
                                                            <input class="input__field invoice-width" type="text"
                                                                name="clientName" value="<?php echo $edit_invoice->clientName;?>"  id="clientName" required="" autocomplete="off"/>
                                                            <span class="input__label">Client Name<span
                                                                    class="colorRed">*</span></span>
                                                           
                                                        </label><br>
                                                    </td>
                                                <td>
                                                    <select class="invoice-INR">
                                                        <option value="<?php echo $edit_invoice->invoiceCurrency;?>" selected><?php echo $edit_invoice->invoiceCurrency;?></option>
                                                        <option value="INR">INR</option>
                                                        <option value="AED">AED</option>
                                                        <option value="EUR">EUR</option>
                                                        <option value="USD">USD</option>
                                                    </select>
                                                </td>
                                                <td><label class="input">
                                                        <input class="input__field invoice-width" type="date"
                                                            name="invoiceDate" placeholder=" " id="invoiceDate" value="<?php echo $edit_invoice->invoiceDate;?>" 
                                                            autocomplete="off" />
                                                        <span class="input__label">Invoice Date</span>

                                                    </label><br>
                                                    <b><span id="spanInvoiceDate" class="colorRed"></span></b>
                                                </td>
                                                <td><label class="input">
                                                        <input class="input__field invoice-width" type="date"
                                                            name="invoicePayment" placeholder=" " id="invoicePayment"  value="<?php echo $edit_invoice->invoicePayment;?>"
                                                            autocomplete="off" />
                                                        <span class="input__label">Payment Due Date</span>

                                                    </label><br>
                                                    <b><span id="spaninvoicePayment" class="colorRed"></span></b>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><label class="input">
                                                        <input class="input__field invoice-width" type="number"
                                                            name="invoiceNumber" placeholder=" " id="invoiceNumber"
                                                            autocomplete="off" value="<?php echo $edit_invoice->invoiceNumber;?>" />
                                                        <span class="input__label">Invoice Number</span>

                                                    </label><br>
                                                    <b><span id="spanInvoiceNumber" class="colorRed"></span></b>
                                                </td>
                                                <td><label class="input">
                                                        <input class="input__field invoice-second" type="text" name=""
                                                            placeholder=" " id="" value="<?php echo $edit_invoice->invoiceClientAddress;?>" autocomplete="off" />
                                                        <span class="input__label">Client Email</span>

                                                    </label>

                                                </td>
                                                 <td><label class="input">
                                                            <input class="input__field invoice-second" type="text"
                                                                name="invoicePhoneNumber" value="<?php echo $edit_invoice->invoicePhoneNumber;?>" id="" autocomplete="off" />
                                                            <span class="input__label">Client Contact Number</span>

                                                        </label>

                                                    </td>
                                                <td>
                                                    <label class="input">
                                                        <input class="input__field invoice-second" type="text"
                                                            name="ClientCity" placeholder=" " id="ClientCity" value="<?php echo $edit_invoice->ClientCity;?>"
                                                            autocomplete="off" />
                                                        <span class="input__label">Client City</span>

                                                    </label><br>
                                                    <b><span id="spanClientCity" class="colorRed"></span></b>
                                                </td>
                                                <!-- <td><label class="input">
                                                        <input class="input__field invoice-second" type="text" name=""
                                                            placeholder="" value="<?php echo $edit_invoice->ClientVat;?>" id="" autocomplete="off" />
                                                        <span class="input__label">Client VAT</span>

                                                    </label><br>
                                                    <span id="" class=""></span>
                                                </td> -->
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>



                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>Category/Descripton</th>
                                                <!-- <th>Qty</th> -->
                                                <th>Rate</th>
                                                <th>Total</th>
                                                <th>Discount</th>
                                                <th>Amount</th>
                                                <th>Markup</th>
                                                <th>Sub Total</th>
                                                <th>VAT</th>
                                                <!-- <th>Total VAT</th> -->
                                                <th>Total Amount</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" id="invoiceCate"
                                                            name="invoiceCate" aria-describedby="emailHelp"
                                                            placeholder="Eg: Flight, Hotel etc.." autocomplete="off" value="<?php echo $edit_invoice->invoiceCategory;?>">

                                                        <b><span id="spaninvoiceCate" class="colorRed"></span></b>

                                                    </div>
                                                    <!-- <div class="mb-3">
                                                        <input type="number" class="form-control" id="invoiceNum"
                                                            name="invoiceNum" aria-describedby="emailHelp" value="<?php echo $edit_invoice->invoiceNum;?>"
                                                            placeholder="SAC Code like -12345" autocomplete="off">
                                                        <b><span id="spaninvoiceNum" class="colorRed"></span></b>
                                                    </div>
                                                    <div class="form-floating">
                                                        <textarea class="form-control"
                                                            placeholder="Leave a comment here"
                                                            id="floatingTextarea" ><?php echo $edit_invoice->invoiceComment;?></textarea>
                                                    </div> -->
                                                </td>
                                                <!-- <td>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" id="qty"
                                                            aria-describedby="emailHelp" placeholder="1"
                                                            autocomplete="off" value="<?php echo $edit_invoice->invoiceQty;?>">
                                                        <b><span id="spanqty" class="colorRed"></span></b>
                                                    </div>
                                                </td> -->
                                                <td>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" id="rate" name="rate"
                                                            aria-describedby="emailHelp" placeholder="0"
                                                            autocomplete="off" value="<?php echo $edit_invoice->invoiceRate;?>">
                                                        <b><span id="spanRate" class="colorRed"></span></b>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="mb-3">
                                                        <input type="text" id="total" name="total" class="form-control"
                                                            id="total" name="total" aria-describedby="emailHelp" value="<?php echo $edit_invoice->total;?>"
                                                            placeholder="0" autocomplete="off">
                                                        <b><span id="spantotal" class="colorRed"></span></b>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="row align-items-center">
                                                      <div class="col">
                                                                <select name="invoiceDiscountChoice" id="invoiceDiscountChoice">
                                                                    <option value="<?php echo $edit_invoice->invoiceDiscountChoice;?>"><?php echo $edit_invoice->invoiceDiscountChoice;?></option>
                                                                    <option value="Fixed">Fixed</option>
                                                                    <option value="%">%</option>
                                                                </select>

                                                        <div class="col">
                                                            <input type="text" class="form-control mt-2" 
                                                               id="invoiceDiscount" name="invoiceDiscount" aria-describedby="emailHelp"
                                                                value="<?php echo $edit_invoice->invoiceDiscount;?>" autocomplete="off">
                                                        </div>

                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" id="invoiceAmount" name="invoiceAmount"
                                                            aria-describedby="emailHelp" placeholder="<?php echo $edit_invoice->invoiceAmount;?>"
                                                            autocomplete="off">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col">

                                                            <select  name="invoiceMarkupChoice" id="invoiceMarkupChoice">
                                                                <option value="<?php echo $edit_invoice->invoiceMarkupChoice;?>"><?php echo $edit_invoice->invoiceMarkupChoice;?></option>
                                                                <option value="Fixed">Fixed</option>
                                                                <option value="%">%</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" class="form-control mt-2"
                                                               id="invoiceMarkup" name="invoiceMarkup"  aria-describedby="emailHelp"
                                                                value="<?php echo $edit_invoice->invoiceMarkup;?>" autocomplete="off">
                                                        </div>

                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" id="invoiceSubtotal" name="invoiceSubtotal"
                                                            aria-describedby="emailHelp" placeholder="<?php echo $edit_invoice->invoiceSubtotal;?>"
                                                            autocomplete="off">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" name="invoiceVatChoice" 
                                                            aria-describedby="emailHelp" placeholder="VAT"
                                                            autocomplete="off" readonly="">
                                                    </div>
                                                </td>
                                                <!-- <td>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" id="invoiceVat" name="invoiceVat" 
                                                            aria-describedby="emailHelp" value="<?php echo $edit_invoice->invoiceVat;?>" 
                                                            autocomplete="off">
                                                    </div>
                                                </td> -->
                                            </tr>
                                        </tbody>
                                    </table>





                                    <div class="d-flex justify-content-end border">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-auto">
                                                <label for="inputPassword6" class="col-form-label">Sub Total</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="number" id="finalSubtotal"  name="finalSubtotal" class="form-control" value="<?php echo $edit_invoice->finalSubtotal;?>" 
                                                    aria-describedby="passwordHelpInline" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="d-flex justify-content-end border">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-auto">
                                                <label for="inputPassword6" class="col-form-label">VAT</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="number" name="finalVAT" id="finalVAT" class="form-control" value="<?php echo $edit_invoice->finalVAT;?>" 
                                                    aria-describedby="passwordHelpInline" autocomplete="off">
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
                                                <input type="number" name="finalTotalInvoice" id="finalTotalInvoice" value="<?php echo $edit_invoice->finalTotalInvoice;?>" class="form-control"
                                                    aria-describedby="passwordHelpInline" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="d-flex justify-content-end border">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-auto">
                                                <label for="inputPassword6" class="col-form-label">Advance</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="number" name="finalAdvance" id="finalAdvance" value="<?php echo $edit_invoice->finalAdvance;?>" class="form-control" 
                                                    aria-describedby="passwordHelpInline" autocomplete="off">
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
                                                <input type="number" name="finalBalance" id="finalBalance" value="<?php echo $edit_invoice->finalAdvance;?>" class="form-control" 
                                                    aria-describedby="passwordHelpInline" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <label class="col-md-12 control-label text-left"><b>Notes</b></label>
                                        <div class="col-md-12">
                                           <textarea name="editorNotes"><?php echo $edit_invoice->notes;?> </textarea>
                                        </div>

                                    </div>

                                    <div class="mt-4">

                                        <label class="col-md-12 control-label text-left"><b>Term &
                                                Conditions</b></label>
                                        <div class="col-md-12">
                                            <textarea name="editorTrmsCond"><?php echo $edit_invoice->TrmsCond;?></textarea>
                                        </div>
                                    </div>





                                    <div class="d-flex justify-content-end mt-4">
                                        <button type="submit" class="btn btn-outline-primary">Update</button>
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