<!doctype html>
<html lang="en">

<head>
    <title>Invoice</title>

    <style>
			.invoice-box {
				max-width: 1000px;
				margin: auto;
				padding: 20px;
				border: 1px solid;
				/* box-shadow: 0 0 10px rgba(0, 0, 0, 0.15); */
			}

      *, ::after, ::before {
          box-sizing: content-box;
      }

      .flex_header {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .flex{
        display: flex;
        align-items: center;
      }

      .border-1 {
				border: 1px solid ;
      }

      .border-2 {
				border: 2px solid ;
      }

      .border_top {
				border-top: 1px solid ;
      }

      .border_bottom {
				border-bottom: 1px solid ;
      }

      .no_border_top {
				border-bottom: 1px solid ;
				border-left: 1px solid ;
				border-right: 1px solid ;
				border-top: 0px ;
      }

      .no_border_bottom {
				border-bottom: 0px solid ;
				border-left: 1px solid ;
				border-right: 1px solid ;
				border-top: 1px solid;
      }

      .p-1 {
        padding: 10px;
      }

      .p-2 {
        padding: 20px;
      }

     

      table {
        width: 100%;
        border-collapse: collapse;
      }

      .customer_details {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 150px;
        /* border: 1px solid; */
        padding: 6px;
      }

      .text_right {
        text-align: right;
      }

      .text_left {
        text-align: left;
      }

      .custmo-head {
        font-size: 1.1rem;
        font-weight: bold;
      }

      .bold_text {
        font-size: 14px;
        font-weight: bold;
      }

      .mt_mb_1 {
        margin-top: 10px;
        margin-bottom: 10px;
      }


      @media only screen and (min-width: 200px) and (max-width: 540px) {
      .pad-0 {
        padding: 0px !important;
      }

}

@media (min-width: 1200px) {
  table, td, th {
        border: 1px solid;
        padding: 8px;
      }
}

    table, td, th {
        border: 1px solid;
        padding: 8px;
      }
		</style>
</head>

<body>
    <div class="body-height">
        
        <div id="contenet" class="invoice-box">


            <div class="" id="data">
                <div class="flex_header">
                    <div><img src="<?php echo base_url();?>public/image/proposalLogo.png" class="logo "  style="width:30% !important;" alt="logo"></div>
                    <div class="mr-5">
                        <h5 class="custmo-head">Demo Agency</h5>
                        <p class="custmo-para"> 55 Sector 8 <br>
                            india delhi <br>
                            contact : 1234567890,1234567890
                        </p>
                    </div>
                </div>


                    <div class="customer_details no_border_bottom">
                        <div class="p-1">
                            <h5 class="custmo-head">Customer Name</h5>
                            <p class="custmo-para">
                              <?php echo $printInvoice->clientName;?><br>
                              <?php echo $printInvoice->invoiceClientAddress;?> <br>
                             <?php echo $printInvoice->invoicePhoneNumber;?> <br>
                           <?php echo $printInvoice->ClientCity;?>
                             </p>
                        </div>
                        <div class="col-md-auto mt-2 invoice_tbl" style="overflow-x:auto;">
                            <table style="height:120px" class="invoice_tbl">
                                <tbody>
                                    <tr>
                                        <td class="pad-0" colspan="3">Invoice No</td>
                                        <td class="pad-0" ><?php echo $printInvoice->invoiceNumber;?></td>
                                    </tr>
                                    <tr>

                                        <td class="pad-0"  colspan="3">Invoice /Due Date</td>
                                        <td class="pad-0" ><?php echo $printInvoice->invoiceDate;?></td>
                                    </tr>
                                
                                    <tr>

                                        <td class="pad-0"  colspan="3">VAT Number</td>
                                        <td class="pad-0" >SVSJYFTH14324JDBDB</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>



                <div class="container ">
                    <div class="flex_header" style="overflow-x:auto;">


                      <table class="border-1">
                        <tbody>

                          <thead>
                            <tr>
                              <th class="center"> Descripton </th>
                              <th class="center"> Rate </th>
                              <th class="center"> Pax </th>
                              <th class="center"> Taxable Amount </th>
                              <th class="center"> Vat (5%)</th>
                              <th class="center"> Vat Amount </th>
                              <th class="center"> Total </th>
                            </tr>
                          </thead>
                            <tr>
                              <td><?php echo $printInvoice->invoiceCategory;?></td>
                              <td><?php echo $printInvoice->invoiceRate;?></td>
                              <td><?php echo $printInvoice->invoiceQty;?></td>
                              <td><?php echo $printInvoice->invoiceSubtotal;?></td>
                              <td><?php echo $printInvoice->invoiceVat;?></td>
                              <td><?php echo $printInvoice->invoiceVatChoice;?></td>
                              <td><?php echo $printInvoice->finalTotalInvoice;?></td>
                            </tr>

                            <tr>
                              <td colspan="6" class="text_right bold_text">Sub Total </td>
                              <td><?php echo $printInvoice->invoiceSubtotal;?></td>
                            </tr>

                            <tr>
                              <td colspan="6" class="text_right bold_text">VAT(%) </td>
                              <td><?php echo $printInvoice->finalVAT;?></td>
                            </tr>

                            <tr>
                              <td colspan="6" class="text_right bold_text">Total Invoice Value</td>
                              <td><?php echo $printInvoice->finalTotalInvoice;?></td>
                            </tr>

                            <tr>
                              <td colspan="6" class="text_right bold_text">Amount Paid </td>
                              <td><?php echo $printInvoice->finalAdvance;?></td>
                            </tr>

                            <tr>
                              <td colspan="6" class="text_right bold_text">Balance to be paid </td>
                              <td><?php echo $printInvoice->finalBalance;?></td>
                            </tr>

                            <tr>
                              <td colspan="3" class="bold_text">Amount in Words </td>
                              <td colspan="4" class="text_right bold_text"><?php 
                                $get_amount= AmountInWords($printInvoice->finalTotalInvoice);
                                echo $get_amount.'Only';
                               ?></td>
                            </tr>

                        </tbody>
                    </table>

                    
                    </div>
                </div>

                <div class="border_bottom ">
                    <p class="bold_text">Notes: <span>dzgz</span></p>
                </div>
                <div class="border_bottom ">
                  <p class="bold_text">Payment Terms: <span>dzgz</span></p>
              </div>

                <div class="bold_text border_bottom mt_mb_1">
                  
                    
                    Bank Details<br/>
                    Diamond tours L.L.C.<br/>
                    Bank        : Emirates NBD<br/>
                    Bank Branch : -Al faheedi Branch<br/>
                    a/c         : 1012432644501<br/>
                    Swift       : EBILAEAD<br/>
                    Iban        : AE58 0260 0010 1243 2644 501<br/>
                    Bur Dubai, UAE<br/>
                   
                </div>
                <div class="text_right">

                    <img src="<?php echo base_url();?>public/img/stamp.jpeg" class="logo "  style="width:20% !important;" alt="logo">

                </div>

                <div class="text_right">
                    Authorized Signatory
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
</body>

</html>