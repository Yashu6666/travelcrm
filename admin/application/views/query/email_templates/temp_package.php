<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>template</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

       

        /* body {
            background-color: rgb(190, 190, 190);
        } */

        .card {
            background-color: white;
            font-family: 'Roboto', sans-serif;
            width: 100%;
            margin: auto;
            padding: 1rem;
            color: rgb(68, 58, 133);
        }

        .card1 p {
            margin-bottom: 2rem;
        }

        .card2 {
            /* background-color: aqua; */
            display: flex;
        }

        .card2_left {
            /* background-color: yellow; */
            width: 20%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid black;
            font-weight: 600;
        }

        .card2_right {
            /* background-color: yellowgreen; */
            width: 80%;
        }

        .card2_right p {
            border: 1px solid black;
            padding: .2rem;
            color: rgb(184, 4, 4);
            font-weight: 600;
        }

        .card3 {
            display: flex;
            margin-top: 2rem;
        }

        .card3_left p {
            border: 1px solid black;
            padding: .3rem;
            font-weight: 600;
        }

        .card3_left span {
            display: block;
            height: 2.7rem;
            border: 1px solid black;
            padding: .3rem;
            font-weight: 600;
        }

        .card3_right p {
            border: 1px solid black;
            padding: .3rem;
        }

        .card3_right1 {
            display: flex;
            margin-left: 1rem;
            border: 1px solid black;
        }

        .card3_right_2 p {
            padding: .2rem 1.5rem;
        }

        .card4 {
            margin-top: 2rem;
        }

        .card4 p {
            padding: .3rem;
        }
    </style>
</head>

<body>
    <div class="card" style="margin-left:10px;">
        <div class="card1">
            <p>Dear Sir/Ma'am</p>
            <p>Greetings From Diamond Tours LLC!!!</p>
            <p>We are Pleased to quote the best rate as per your below request:</p>
        </div>

            <div  style="width:100%;">
                <table class="table">
                    <tr>
                        <th rowspan="3">Hoter Rates</th>
                        <td style="color: rgb(184, 4, 4);"><b>AED &nbsp;<?php echo $details->perpax_adult;?>&nbsp; Per Adult </b></td>
                    </tr>
                    <tr>
                        <td style="color: rgb(184, 4, 4);"><b>AED &nbsp;<?php echo $details->perpax_childs;?>&nbsp; Per Child </b></td>
                    </tr>
                    <tr>
                        <td style="color: rgb(184, 4, 4);"><b>AED &nbsp;<?php echo $details->perpax_infants;?>&nbsp; Per Infant </b></td>
                    </tr>
                </table>
            </div>
            <br/>
            <div  style="width:100%;">
            
            <table class="table">
                <tr>
                    <th>Hotal Name</th>
                    <td colspan="3">
                    <?php if(!empty($details->hotels)) : ?>
                        <p><?php foreach ($details->hotels as $key => $val) : ?>
                                <?php print_r($details->hotels[$key]->hotelname) ?> - <?php echo $details->hotelPrefrence ?>* - <?php print_r($details->buildRoomType[$key]) ?><?php echo array_key_last($details->hotels) != $key ?  ',' : '' ?>
                            <?php endforeach ?>
                        </p>
                        <?php endif ?>    
                </tr>
                <tr>
                    <th>Check In Date</th>
                    <td colspan="3"><?php echo $details->checkin;?></td>
                </tr>
                <tr>
                    <th>Check Out Date</th>
                    <td colspan="3"><?php echo $details->checkout ?></td>
                </tr>
                <tr>
                    <th>No of Nights</th>
                    <td colspan="3"><?php echo $details->nights;?>&nbsp;Nights</td>
                </tr>
                
                <tr>
                <th rowspan="2">No of Pax</th>
                    <td>Adult</td>
                    <td>Child</td>
                    <td>Infant</td>
                    
                </tr>
                <tr>
                    <td><?php echo $details->pax_adult;?></td>
                    <td><?php echo $details->pax_child;?></td>
                    <td><?php echo $details->pax_infant;?></td>
                </tr>
               

                <tr>
                    <th>No of Room</th>
                    <td colspan="3"><?php echo $details->room;?>&nbsp; Room</td>
                </tr>
                
            </table>

        </div>

        

            <h4>
                <u>Package Price Inclusions:</u>
                   <p> <?php echo $details->inclusions ?></p>
                    <p>Tourism Dhiram Fees</p>
                    <p>Vat 5% Inclusive</p>
                    <p>All Applicable Taxes</p>

                    <?php if(isset($details->excursion_name_SIC) && isset($details->excursion_name_PVT)) : ?>
                        <p>All Tours and transfers on Private and SIC Basis</p>
                    <?php elseif(isset($details->excursion_name_SIC) && !isset($details->excursion_name_PVT)) : ?>
                        <p>All Tours and transfers on SIC Basis</p>
                    <?php elseif(!isset($details->excursion_name_SIC) && isset($details->excursion_name_PVT)) : ?>
                        <p>All Tours and transfers on Private Basis</p>
                    <?php endif ?>

                    <p>All of the above services with the hotel to hotel transfer and ticket</p>
                    <p>All Tours & Transfers on sharing Basis except airport transfer</p>

                <p>Kindly note that the above rates are only a quote, no rooms or services are booked or blocked and will be subject to availability at the time of booking.</p>
                <br>
                <b>Thanks & Regards</b>
                <br>
                <div>
                <br>
                <img src="<?php echo base_url();?>public/image/thanks_regards.jpg" class="logo "  style="width:50% !important;" alt="logo">
                </div>
                <div class="head9">
                    <!-- <span><b><u>GENERAL TERMS AND CONDITIONS :</u></b></span>
                    <?php echo $details->conditions ?> -->
                    
                    <div class="card6">
            <b>GENERAL TERMS AND CONDITIONS :</b>
            <ul>
                <li>
                    <p>Rooms and rates are subject to availability at the time of actual booking.</p>
                </li>
                <li>
                    <p>Standard Check-In: 1500 hrs. & Checkout: 1200 hrs.</p>

                </li>
                <li>
                    <p>Early Check-In and Late Check-Out is subject to availability unless booked and confirmed in
                        advance
                    </p>
                </li>
                <li>
                    <p style="background-color: yellow;">Normal timing for airport pick-up & drop transfer is 6.00 am to
                        10.00
                        pm and extra charges will be
                        applicable except this timings and subject to available of vehicles</p>
                </li>
                <li>
                    <p>Any change in the number of passengers will lead to a revision of the quote.</p>
                </li>
                <li>
                    <p>Vehicle used in the above quote is based on all guests arriving/ departing together in the same
                        flight.
                        In case additional transfers are required, same will be arranged at an additional cost.</p>
                </li>
                <li>
                    <p>Above quotes based on normal ticket prices, rate will be subject to change if we receive any
                        revise
                        rate
                        at later stage</p>
                </li>
                <li>
                    <p>OK TO BOARD Message update as per airline’s policy</p>
                </li>
                <li>
                    <p>Visa processing may take anywhere between 3 – 5 working days to get approved</p>

                </li>
                <li>
                    <p>Issuance of visa will be subject to approval from immigration however once visa is applied
                        charges
                        will
                        be applicable and NO refund will be granted.</p>
                </li>
                <li>
                    <p> In case of overstay – Travel agent will be held accountable to settle the fine imposed by
                        immigration
                        which is AED 100.00 Per day (Subject to revision from immigration).</p>
                </li>
                <li>
                    <p style="background-color: yellow;">We need pre-payment for Dubai Visa and Insurance and it’s
                        nonrefundable.</p>
                </li>
                <li>
                    <p style="background-color: yellow;"> if Excursion tickets are not book then Cancellation policy for
                        the
                        ground services will 4 days prior to
                        arrival is free of charge.</p>
                </li>
                <p><b> Payment to be made in AED as per the rate of exchange applicable on the day of final payment.</b>
                </p>
                <li>
                    <p>Bank Charges AED 80/- will be Charged Mandatory on the total invoice.</p>
                </li>
            </ul>
        </div>
                </div>
                

                <div class="head9">
                    <!-- <span><b><u>Cancellation Policy :</u></b></span> -->
                    <!-- <?php echo $details->cancelation_policy ?> -->

                    <div style="display:flex;justify-content: space-between;">
    <div>
    <b>Cancellation Terms: </b>
      <p>FIT 25% cancellation within 30 days before travel. </p> 
      <p>50% cancellation within 10 days before Travel. </p> 
      <p>75% cancellation within 07 days before Travel.</p> 
      <p>Any cancellation within 04 days will lead to 100% cancellation charge.</p> 
    </div>
       
      <div>
      <b>Cancellation Terms: Groups (MICE)</b> 
      <p>25% cancellation within 30 days before travel.</p> 
      <p>50% cancellation within 15 days before Travel.</p> 
      <p>100% cancellation within 07 days before Travel.</p> 
      <p>Any cancellation within 04 days will lead to 100% cancellation charge.</p> 
    </div>
    </div>
                </div>


</body>

</html>