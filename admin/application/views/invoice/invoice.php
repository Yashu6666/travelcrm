<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Invoice</title>
    <link rel="stylesheet" type="text/css" href="invoice.css" />
    <script src="<?php echo base_url(); ?>public/js/html2pdf.bundle.js"></script>
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

        .new_btn {
            float: right;
            margin: 20px;
            color: white !important;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 2px;
            border: 1px solid #102158;
            background: #595d60;
            text-align: center;
            padding: 6px;
            cursor: pointer;
        }
    </style>
</head>

<body style="padding: 80px;">
    <?php function numtowords($num)
    {
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
        $num = number_format($num, 2, ".", ",");
        $num_arr = explode(".", $num);
        $wholenum = $num_arr[0];
        $decnum = $num_arr[1];
        $whole_arr = array_reverse(explode(",", $wholenum));
        krsort($whole_arr);
        $rettxt = "";
        foreach ($whole_arr as $key => $i) {
            if ($i < 20) {
                $rettxt .= $ones[$i];
            } elseif ($i < 100) {
                $rettxt .= $tens[substr($i, 0, 1)];
                $rettxt .= " " . $ones[substr($i, 1, 1)];
            } else {
                $rettxt .= $ones[substr($i, 0, 1)] . " " . $hundreds[0];
                $rettxt .= " " . $tens[substr($i, 1, 1)];
                $rettxt .= " " . $ones[substr($i, 2, 1)];
            }
            if ($key > 0) {
                $rettxt .= " " . $hundreds[$key] . " ";
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
        return $rettxt;
    }
    ?>
    <div class="container mb-2 d-flex justify-content-end d-grid gap-3">
    <a class="new_btn text-decoration-none" style="text-decoration: none;" href="<?php echo site_url(); ?>invoice/view_invoice">
      Back to Invoice
    </a>
        <button type="button" class="new_btn" onclick=" return generateToPdf();">Download</button>
    </div>

    <div id="data">
        <div class="invoice_container">
            <div class="in_details">
                <table class="item_table" border="1" cellspacing="0">
                    <tr>
                        <th rowspan="2" colspan="2">
                            <img src="<?php echo base_url(); ?>public/image/proposalLogo.png" style="width: 250px !important;" alt="" />
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
                    <tr>
                        <th>MODES OF PAYMENT :</th>
                        <td>cash</td>

                        <th>CHECK OUT DATE :</th>
                        <?php $date = new DateTime($query_package->noDaysFrom);
                        $checkout = $date->format('d-M-Y'); ?>
                        <td><?php echo $checkout ?></td>
                    </tr>
                    <tr>
                        <th>AGENT NAME :</th>
                        <td><?php echo $b2b->b2bcompanyName ?></td>
                        <th>No. OF NIGHTS :</th>
                        <td><?php echo $query_package->night ?></td>
                    </tr>
                    <tr>
                        <th>CUSTOMER NAME :</th>
                        <td><?php echo isset($query_hotel_voucher[0]->guest_name) ? $query_hotel_voucher[0]->guest_name : "" ?></td>
                        <th>No. OF ROOMS:</th>
                        <td><?php echo isset($query_package->room) ? $query_package->room : "N/A" ?></td>
                    </tr>

                    <?php foreach($hotel_details as $key => $val) : ?>
                       
                    <tr>
                        <th>HOTEL CONFIRMATION NUMBER <?php echo $key + 1 ?> :</th>
                        <td><?php echo $query_hotel_voucher[$key]->confirmation_id ?></td>
                        <th>HOTEL NAME <?php echo $key + 1 ?> :</th>
                        <td> <?php echo isset($val->hotelname) ? $val->hotelname : "N/A"; ?> 
                            <?php echo isset($val->hotelname) ? str_repeat("⭐", $val->hotelstars) : "N/A"; ?>
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
                        <th>Pax</th>
                        <th>Rate</th>
                        <th>AMT</th>
                    </tr>
                    <tr>
                        <td class=""><?php echo $query_package->type ?></td>
                        <td class=""><?php echo $invoice->invoiceQty ?></td>
                        <td class=""><?php echo ceil($invoice->finalTotalInvoice - $invoice->bank_charges) ?></td>
                        <td class=""><?php echo ceil($invoice->finalTotalInvoice - $invoice->bank_charges) ?></td>
                    </tr>
                    <tr>
                        <th></th>
                        <th colspan="2">Sub Total</th>
                        <th><?php echo ceil($invoice->finalTotalInvoice - $invoice->bank_charges) ?></th>
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
                        <th>TOTAL</th>
                        <th><?php echo ceil($invoice->finalTotalInvoice) ?></th>
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
                    <td colspan="2">FOR DIAMOND TOURS L.L.C <br>707 BMI Building, Khalid Bin Al Waleed Road, P.O.Box 241685, Bur Dubai, Dubai-United Arab Emirates
                        <br>Tel: <b>+971 4 355 9218</b>
                    </td>
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
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


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