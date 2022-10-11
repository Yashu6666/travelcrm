<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Invoice</title>
    <link rel="stylesheet" type="text/css" href="invoice.css" />
    <style>
      * {
  font-family: arial;
}
.invoice_container {
  padding: 10px 10px;
}

.in_details {
  margin-top: auto;
  margin-bottom: auto;
}
.product_container {
  padding: 0 10px;
  margin-top: 10px;
}
.item_table {
  width: 100%;
  text-align: left;
}
.item_table h2 {
  text-align: left;
}
.item_table td,
th {
  padding: 5px 10px;
}
.invoice_footer {
  padding: 0 10px;
  display: flex;
  justify-content: space-between;
}

th {
  font-size: 14px;
}
  .tx_cntr {
  text-align: center;
  }
    </style>
  </head>
  <body>
    <?php function numtowords($num){ 
            $decones = array( 
                        '01' => "One", 
                        '02' => "Two", 
                        '03' => "Three", 
                        '04' => "Four", 
                        '05' => "Five", 
                        '06' => "Six", 
                        '07' => "Seven", 
                        '08' => "Eight", 
                        '09' => "Nine", 
                        10 => "Ten", 
                        11 => "Eleven", 
                        12 => "Twelve", 
                        13 => "Thirteen", 
                        14 => "Fourteen", 
                        15 => "Fifteen", 
                        16 => "Sixteen", 
                        17 => "Seventeen", 
                        18 => "Eighteen", 
                        19 => "Nineteen" 
                        );
            $ones = array( 
                        0 => " ",
                        1 => "One",     
                        2 => "Two", 
                        3 => "Three", 
                        4 => "Four", 
                        5 => "Five", 
                        6 => "Six", 
                        7 => "Seven", 
                        8 => "Eight", 
                        9 => "Nine", 
                        10 => "Ten", 
                        11 => "Eleven", 
                        12 => "Twelve", 
                        13 => "Thirteen", 
                        14 => "Fourteen", 
                        15 => "Fifteen", 
                        16 => "Sixteen", 
                        17 => "Seventeen", 
                        18 => "Eighteen", 
                        19 => "Nineteen" 
                        ); 
            $tens = array( 
                        0 => "",
                        2 => "Twenty", 
                        3 => "Thirty", 
                        4 => "Forty", 
                        5 => "Fifty", 
                        6 => "Sixty", 
                        7 => "Seventy", 
                        8 => "Eighty", 
                        9 => "Ninety" 
                        ); 
            $hundreds = array( 
                        "Hundred", 
                        "Thousand", 
                        "Million", 
                        "Billion", 
                        "Trillion", 
                        "Quadrillion" 
                        ); //limit t quadrillion 
            $num = number_format($num,2,".",","); 
            $num_arr = explode(".",$num); 
            $wholenum = $num_arr[0]; 
            $decnum = $num_arr[1]; 
            $whole_arr = array_reverse(explode(",",$wholenum)); 
            krsort($whole_arr); 
            $rettxt = ""; 
            foreach($whole_arr as $key => $i){ 
                if($i < 20){ 
                    $rettxt .= $ones[$i]; 
                }
                elseif($i < 100){ 
                    $rettxt .= $tens[substr($i,0,1)]; 
                    $rettxt .= " ".$ones[substr($i,1,1)]; 
                }
                else{ 
                    $rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
                    $rettxt .= " ".$tens[substr($i,1,1)]; 
                    $rettxt .= " ".$ones[substr($i,2,1)]; 
                } 
                if($key > 0){ 
                    $rettxt .= " ".$hundreds[$key]." "; 
                } 

            } 
            $rettxt = $rettxt;

            // if($decnum > 0){ 
            //     $rettxt .= " and "; 
            //     if($decnum < 20){ 
            //         $rettxt .= $decones[$decnum]; 
            //     }
            //     elseif($decnum < 100){ 
            //         $rettxt .= $tens[substr($decnum,0,1)]; 
            //         $rettxt .= " ".$ones[substr($decnum,1,1)]; 
            //     }
            //     $rettxt = $rettxt.""; 
            // } 
            return $rettxt;} 
    ?>
    <div class="invoice_container">
        <div class="in_details">
          <table class="item_table" border="1" cellspacing="0">
            <tr>
              <th rowspan="2" colspan="2">
                <img src="<?php echo base_url();?>public/image/proposalLogo.png" style="width: 250px !important;" alt="" />
              </th>
              <th colspan="2">
                <h2>PROFORMA INVOICE</h2>
              </th>
            </tr>
            <tr>
              <th>QUERY ID/REFF. NO.</th>
              <td><?php echo $invoice->query_id ?></td>
            </tr>

            <tr>
              <?php $date = new DateTime($invoice->invoiceDate);
              $invoiceDate = $date->format('d-M-Y'); ?>
              <th>INVOICE DATE :</th>
              <td><?php echo $invoiceDate ?></td>
              <?php $date = new DateTime($query_package->specificDate);
              $specificDate = $date->format('d-M-Y'); ?>
              <th>CHECK IN DATE :</th>
              <td><?php echo $specificDate ?></td>
          </tr>
          <!-- <tr>
              <th>HOTEL CONFIRMATION NUMBER :</th>
              <td><?php echo $query_hotel_voucher->confirmation_id ?></td>

              <th>CHECK OUT DATE :</th>
              <?php $date = new DateTime($query_package->noDaysFrom);
              $checkout = $date->format('d-M-Y'); ?>
              <td><?php echo $checkout ?></td>
          </tr>
            <tr>
              <th>CUSTOMER/AGENT NAME :</th>
              <td><?php echo $b2b->b2bcompanyName ?></td>
              <th>No. OF NIGHTS :</th>
              <td><?php echo $query_package->night ?></td>
            </tr>
            <tr>
              <th>CUSTOMER/AGENT ADDRESS :</th>
              <td><?php echo isset($b2b->b2bCompanyAddress) ? $b2b->b2bCompanyAddress : "" ?></td>
              <th>HOTEL NAME :</th>
              <td><?php echo isset($query_hotel->hotel_name) ? $query_hotel->hotel_name : "" ?>
              <?php if(isset($query_package->hotelPrefrence)) : ?>	
                <?php echo str_repeat("*",$query_package->hotelPrefrence); ?>
              <?php endif ?>
            </td>
            </tr>
            <tr>
              <th>MODES OF PAYMENT :</th>
              <td>cash</td>
              <th>No. OF ROOMS:</th>
              <td><?php echo $query_package->room ?></td>
            </tr>
          </table> -->
          <tr>
                        <th>MODES OF PAYMENT :</th>
                        <td>cash</td>

                        <th>CHECK OUT DATE :</th>
                        <?php $date = new DateTime($query_package->noDaysFrom);
                        $checkout = $date->format('d-M-Y'); ?>
                        <td><?php echo $checkout ?></td>
                    </tr>
                    <tr>
                        <th>CUSTOMER/AGENT NAME :</th>
                        <td><?php echo $b2b->b2bcompanyName ?></td>
                        <th>No. OF NIGHTS :</th>
                        <td><?php echo $query_package->night ?></td>
                    </tr>
                    <tr>
                        <th>CUSTOMER/AGENT ADDRESS :</th>
                        <td><?php echo isset($b2b->b2bCompanyAddress) ? $b2b->b2bCompanyAddress : "" ?></td>
                        <th>No. OF ROOMS:</th>
                        <td><?php echo $query_package->room ?></td>
                    </tr>

                    <?php foreach($hotel_details as $key => $val) : ?>
                       
                    <tr>
                        <th>HOTEL CONFIRMATION NUMBER <?php echo $key + 1 ?> :</th>
                        <td><?php echo $query_hotel_voucher[$key]->confirmation_id ?></td>
                        <th>HOTEL NAME <?php echo $key + 1 ?> :</th>
                        <td> <?php echo $val->hotelname; ?> 
                            <!-- ?php echo str_repeat("*", $val->hotelstars); ?> -->
                            <span style="color: #fae937;">
                            <?php for($i=0;$i<$val->hotelstars;$i++) : ?>
                              *
                            <?php endfor ?>
                            </span>

                        </td>
                    </tr>
                    <?php endforeach ?>

                    
                </table>
        </div>
      </div>
    <div class="invoice_container">

      <div class="in_details">
        
        <table class="item_table" border="1" cellspacing="0">
          <tr>
            <th>Services</th>
            <th>Qty</th>
            <th>Rate</th>
            <th>AMT</th>
          </tr>
          <tr>
            <td class="tx_cntr"><?php echo $query_package->type ?></td>
            <td class="tx_cntr"><?php echo $invoice->invoiceQty ?></td>
            <td class="tx_cntr"><?php echo ceil($invoice->finalTotalInvoice - $invoice->bank_charges) ?></td>
            <td class="tx_cntr"><?php echo ceil($invoice->finalTotalInvoice - $invoice->bank_charges) ?></td>
          </tr>
          <tr>
            <th></th>
            <th colspan="2">Sub Total</th>
            <th ><?php echo ceil($invoice->finalTotalInvoice - $invoice->bank_charges) ?></th>
          </tr>
          <tr>
            <th></th>

            <th colspan="2">BANK TRANSFER CHARGES</th>
            <th><?php echo ceil($invoice->bank_charges) ?></th>
          </tr>
          <tr>
            <th></th>
            <th colspan="2">ADVANCE RECEIVED</th>
            <th><?php echo ceil($invoice->finalAdvance) ?></th>
          </tr>
          <tr>
            <th colspan="2">ABOVE COST INCLUSIVE OF 5% VAT</th>
            <th >TOTAL</th>
            <th ><?php echo ceil( $invoice->finalTotalInvoice)?></th>
          </tr>
         
          <tr>
            <th>AMOUNT IN WORDS :</th>
            <th>AED</th>
            <th colspan="2"><?php echo numtowords($invoice->finalTotalInvoice) ?></th>
          </tr>
        </table>
      </div>
      </div>
      <div class="invoice_footer">
        <table class="item_table" border="1" cellspacing="0">
          <tr>
            <th colspan="2">Bank Details :</th>
          </tr>
            
          <tr>
            <th>Account name:</th>
            <td>DIAMOND TOURS L.L.C</td>
          </tr>
          <tr>
            <th>Current Account No.:</th>
            <td>1012432644501</td>
          </tr>
          <tr>
            <th>IBAN</th>
            <td>AE58 0260 0010 1243 2644 501
            </td>
          </tr>
          <tr>
            <th>
              Name of Bank:
            </th>
            <td>EMIRATES NBD</td>
          </tr>
          <tr>
            <th>Branch:</th>
            <td>AL FAHEEDI BRANCH BUR DUBAI UAE</td>
          </tr>
          <tr>
            <th>Swift Code:</th>
            <td>EBILAEAD</td>
          </tr>
          <tr>
            <td colspan="2"></td>
          </tr>
          <tr>
            <td colspan="2">FOR DIAMOND TOURS L.L.C <br>50-B STREET COSMOS LANE, OPPOSITE COSMOS STORE,MEENA BAZAR P.O.BOX:-241685,DUBAI,UAE
          <br>Tel: <b>+971 4 355 9218</b></td>
        </tr>
          <!-- <tr>
            <td colspan="2">Tel: <b>+971 4 355 9218</b></td>
          </tr> -->
          <tr>
            <td colspan="2" style="text-align: center;"><b>THIS IS COMPUTER GENERATED INVOICE, HENCE NO SIGNATURE IS REQUIRED.</b></td>
          </tr>
        </table>
      </div>
      
        </div>
      </div>
    </div>
  </body>
</html>
