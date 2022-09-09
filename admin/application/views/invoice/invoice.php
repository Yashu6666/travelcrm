<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<link rel="shortcut icon" href="<?php echo base_url();?>public/assets/img/favicon.ico" />

 <link rel="stylesheet" href="<?php echo base_url();?>public/css/invoice.css"> 
<script src="<?php echo base_url();?>public/js/html2pdf.bundle.js"></script>



<body id="body">
    <div class="body-height">
        <div class="container mb-2 d-flex justify-content-end d-grid gap-3">
            <button type="button" class="btn btn-primary" onclick=" return generateToPdf();">Download</button>
            <!-- <button type="button" class="btn btn-primary" onclick="return printData();">Print</button> -->
        </div>
        <div id="contenet">


            <div class="container border p-2" id="data">
                <div class="header d-flex justify-content-between">
                    <div><img src="<?php echo base_url();?>public/image/proposalLogo.png" class="logo "  style="width:20% !important;" alt="logo"></div>
                    <div class="mr-5">
                        <h5 class="custmo-head ">Demo Agency</h5>
                        <p class="custmo-para"> 55 Sector 8 <br>
                            india delhi <br>
                            contact : 1234567890,1234567890
                        </p>
                    </div>
                </div>


                <div class="container border">

                    <div class="row">
                        <div class="col p-2">
                            <h5 class="custmo-head">Customer Name</h5>
                            <p class="custmo-para">
                               <?php echo $printInvoice->clientName;?><br>
                                 <?php echo $printInvoice->invoiceClientAddress;?> <br>
                                <?php echo $printInvoice->invoicePhoneNumber;?> <br>
                              <?php echo $printInvoice->ClientCity;?>
                            </p>
                        </div>
                        <div class="col-md-auto mt-2 ">
                            <table class="table table-bordered mr-2  d-flex justify-content-center">
                                <tbody>
                                    <tr>

                                        <td class="Descripton-text" colspan="3">Invoice No</td>
                                        <td><?php echo $printInvoice->invoiceNumber;?></td>
                                    </tr>
                                    <tr>

                                        <td class="Descripton-text" colspan="3">Invoice /Due Date</td>
                                        <td><?php echo $printInvoice->invoiceDate;?></td>
                                    </tr>
                                 <!--    <tr>

                                        <td class="Descripton-text" colspan="3">Pan No</td>
                                        <td>SVSJYFTH14324</td>
                                    </tr> -->
                                    <tr>

                                        <td class="Descripton-text" colspan="3">VAT Number</td>
                                        <td>SVSJYFTH14324JDBDB</td>
                                    </tr>
                                    <!-- <tr>

                                        <td class="Descripton-text" colspan="3">Client VAT</td>
                                        <td><?php echo $printInvoice->ClientVat;?></td>
                                    </tr> -->
                                   <!--  <tr>

                                        <td class="Descripton-text" colspan="3">Proposal Id</td>
                                        <td></td>
                                    </tr> -->

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>



                <div class="container border ">
                    <div class="row  ">
                        <div
                            class="col-4 border-end  d-flex justify-content-center align-items-center Descripton-text p-1">
                            Descripton </div>
                        <div class="col-8 row ">
                            <!-- <div
                                class=" p-1 col-sm border-end d-flex justify-content-center  Descripton-text align-items-center">
                                HSN</div> -->
                            <!-- <div
                                class=" p-1 col-sm border-end d-flex justify-content-center align-items-center Descripton-text">
                                Qty</div> -->
                            <div
                                class="p-1 col-sm border-end d-flex justify-content-center align-items-center Descripton-text">
                                Rate</div>
                            <div
                                class="p-1 col-sm border-end d-flex justify-content-center align-items-center Descripton-text">
                                Pax</div>
                            <div
                                class="p-1 col-sm border-end d-flex justify-content-center align-items-center Descripton-text">
                                Taxable Amount</div>
                            
                            <div
                                class=" p-1 col-sm border-end d-flex justify-content-center align-items-center Descripton-text">
                                Vat (5%)</div>
                            <div
                                class=" p-1 col-sm border-end d-flex justify-content-center align-items-center Descripton-text">
                                Vat Amount</div>
                            <div class="p-1 col-sm d-flex justify-content-end align-items-center Descripton-text">Total
                            </div>
                        </div>
                    </div>
                    <div class="row border-top ">
                        <div class="col-4 border-end d-flex justify-content-center p-1 align-items-center "><?php echo $printInvoice->invoiceCategory;?></div>
                        <div class="col-8 row">
                            <!-- <div class="col-sm border-end d-flex justify-content-center p-1 align-items-center "></div> -->
                            <!-- <div class="col-sm border-end d-flex justify-content-center p-1 align-items-center "><?php echo $printInvoice->invoiceQty;?></div> -->
                            <div class="col-sm border-end d-flex justify-content-center p-1 align-items-center "><?php echo $printInvoice->invoiceRate;?>                        
                            </div>
                            <div class="col-sm border-end d-flex justify-content-center p-1 align-items-center "><?php echo $printInvoice->invoiceQty;?></div>
                            
                            <div class="col-sm border-end d-flex justify-content-center p-1 align-items-center "><?php echo $printInvoice->invoiceSubtotal;?></div>
                            <div class="col-sm border-end d-flex justify-content-center p-1 align-items-center "><?php echo $printInvoice->invoiceVat;?>
                            </div>
                            
                            <div class="col-sm border-end d-flex justify-content-center p-1 align-items-center "><?php echo $printInvoice->invoiceVatChoice;?>
                            </div>
                           
                            <div class="col-sm d-flex justify-content-end p-1 align-items-center "><?php echo $printInvoice->finalTotalInvoice;?></div>
                        </div>
                    </div>
                </div>
                <div class="container border-start border-bottom  ">
                    <div class="row ">
                        <div class="col border-bottom">

                        </div>
                        <div
                            class="col-md-auto border-end border-bottom Descripton-text p-1 align-items-center  d-flex justify-content-center">
                            Sub Total
                        </div>
                        <div
                            class="col col-lg-2 border-end border-bottom d-flex p-1 justify-content-end align-items-center">
                            <?php echo $printInvoice->invoiceSubtotal;?>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col border-bottom">

                        </div>
                        <div
                            class="col-md-auto border-bottom border-end Descripton-text p-1 align-items-center  d-flex justify-content-center">
                            VAT(5%)
                        </div>
                        <div
                            class="col col-lg-2 border-bottom border-end d-flex p-1 justify-content-end align-items-center">
                            <?php echo $printInvoice->finalVAT;?>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col border-bottom">

                        </div>
                        <div
                            class="col-md-auto border-bottom border-end Descripton-text p-1 align-items-center  d-flex justify-content-center">
                            Total Invoice Value
                        </div>
                        <div
                            class="col col-lg-2 border-bottom border-end d-flex p-1 justify-content-end align-items-center">
                            <?php echo $printInvoice->finalTotalInvoice;?>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col border-bottom">

                        </div>
                        <div
                            class="col-md-auto border-bottom border-end Descripton-text p-1 align-items-center  d-flex justify-content-center">
                            Amount Paid
                        </div>
                        <div
                            class="col col-lg-2 border-bottom border-end d-flex p-1 justify-content-end align-items-center">
                          <?php echo $printInvoice->finalAdvance;?>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col border-bottom">

                        </div>
                        <div
                            class="col-md-auto border-bottom border-end Descripton-text p-1 align-items-center  d-flex justify-content-center">
                            Balance to be paid
                        </div>
                        <div
                            class="col col-lg-2 border-bottom border-end d-flex p-1 justify-content-end align-items-center">
                            <?php echo $printInvoice->finalBalance;?>
                        </div>
                    </div>
                </div>

                <div class="container border-start border-bottom border-end Descripton-text p-1">
                    <div class="row">
                        <div class="col">
                            Amount in Words
                        </div>
                        <div class="col d-flex justify-content-end">
                        <?php 
                         $get_amount= AmountInWords($printInvoice->finalTotalInvoice);
                         echo $get_amount.'Only';
                        ?>
                        </div>
                    </div>
                </div>
                <div class="container border-bottom border-top Descripton-text p-2">
                    Notes: <?php echo $printInvoice->notes;?>
                </div>
                <div class="container border-bottom border-top Descripton-text p-2">
                    Payment Terms: <?php echo $printInvoice->TrmsCond;?>
                </div>
                <div class="container border-bottom border-top Descripton-text p-2">
                  
                    
                    Bank Details<br/>
                    Diamond tours L.L.C.<br/>
                    Bank        : Emirates NBD<br/>
                    Bank Branch : -Al faheedi Branch<br/>
                    a/c         : 1012432644501<br/>
                    Swift       : EBILAEAD<br/>
                    Iban        : AE58 0260 0010 1243 2644 501<br/>
                    Bur Dubai, UAE<br/>
                   
                </div>
                <div class="container mb-3 border-top Descripton-text p-2 d-flex justify-content-end">

                    <img src="<?php echo base_url();?>public/img/stamp.jpeg" class="logo "  style="width:20% !important;" alt="logo">

                </div>

                <div class="container border-bottom  Descripton-text p-2 d-flex justify-content-end">
                    Authorised Signatory
                </div>
            </div>
        </div>
    </div>


<?php
// Create a function for converting the amount in words
function AmountInWords(float $amount)
{
   $amount_after_decimal = round($amount - ($num = floor($amount)), 2) * 100;
   // Check if there is any number after decimal
   $amt_hundred = null;
   $count_length = strlen($num);
   $x = 0;
   $string = array();
   $change_words = array(0 => '', 1 => 'One', 2 => 'Two',
     3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
     7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
     10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
     13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
     16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
     19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
     40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
     70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
    $here_digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
    while( $x < $count_length ) {
      $get_divider = ($x == 2) ? 10 : 100;
      $amount = floor($num % $get_divider);
      $num = floor($num / $get_divider);
      $x += $get_divider == 10 ? 1 : 2;
      if ($amount) {
       $add_plural = (($counter = count($string)) && $amount > 9) ? 's' : null;
       $amt_hundred = ($counter == 1 && $string[0]) ? ' and ' : null;
       $string [] = ($amount < 21) ? $change_words[$amount].' '. $here_digits[$counter]. $add_plural.' 
       '.$amt_hundred:$change_words[floor($amount / 10) * 10].' '.$change_words[$amount % 10]. ' 
       '.$here_digits[$counter].$add_plural.' '.$amt_hundred;
        }
   else $string[] = null;
   }
   $implode_to_Rupees = implode('', array_reverse($string));
   $get_paise = ($amount_after_decimal > 0) ? "And " . ($change_words[$amount_after_decimal / 10] . " 
   " . $change_words[$amount_after_decimal % 10]) . ' Paise' : '';
   return ($implode_to_Rupees ? $implode_to_Rupees . 'Rupees ' : '') . $get_paise;
}
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>


    <script>

        function generateToPdf() {


            const element = document.getElementById("data");

            html2pdf()
                .from(element)
                .save();
        }



        function printData() {
            const body = document.getElementById("body").innerHTML;
            const contenet = document.getElementById("contenet").innerHTML;
            console.log(body)
            console.log(contenet)
            document.getElementById("body").innerHTML = contenet;
            window.print();
            document.getElementById("body").innerHTML = body;

        }







    </script>

</body>

</html>