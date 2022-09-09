<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer</title>
    <style>
        * {
    margin: 0;
    margin: 0;
}

body {
    background-color: rgb(190, 190, 190);
}

.card {
    background-color: white;
    font-family: 'Roboto', sans-serif;
    width: 80%;
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
    width: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid black;
    font-weight: 600;

}

.card2_right {
    /* background-color: yellowgreen; */
    width: auto;
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
.card4 p i{
   font-size: .8rem;

}

.card5 p {
    padding: 1.5rem 0;
}

.card6 p {
    margin: .5rem;
   
}

h1 {
    font-size: 1.5rem;
}

.card7 {
    display: flex;
}

.card7_left {
    /* background-color: yellow; */
    width: 80%;
}

.card7_left p {
    padding: .5rem;
    height: 2rem;

}

.card7_right {
    /* background-color: yellowgreen; */
    width: 20%;
}

.card7_right p {
    padding: .5rem;
    height: 2rem;

}

th, td {
         text-align: left;
         padding: 8px;
         }

@media only screen and (max-width: 700px) and (min-width: 200px) {
    .card2_left {
    width: 50% !important;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid black;
    font-weight: 600;
    }

    .card2_right {
        width: 50% !important;
    }

    .card3_left {
        width: 50% !important;
    }

    .card3_right {
        width: 50% !important;
    }

}

@media only screen and (max-width: 1200px){
    /*Tablets [601px -> 1200px]*/
}

.txt_red {
    color: rgb(184, 4, 4);
    font-weight: 600;
}
    </style>
</head>

<body>
    <div class="card">
        <div class="card1">
            <p>Dear Sir/Ma'am</p>
            <p>Greetings From Diamond Tours LLC!!!</p>
            <p>We are Pleased to quote the best rate as per your below request:</p>
        </div>
        <!-- <div class="card2">
            <div class="card2_left">
                Transfer Rates
            </div>
            <div class="card2_right">
                <p>AED <?php echo $details->perpax_adult ?> Per Adult</p>
                <p>AED <?php echo $details->perpax_childs ?> Per Child</p>
                <p>AED <?php echo $details->perpax_infants ?> Per Infant</p>
            </div>
        </div> -->

        <table border="1" class="table">
        <tr>
            <th rowspan="4">Transfer Rates</th>
        </tr>
        <tr><td class="txt_red">AED <?php echo $details->perpax_adult ?> Per Adult</td></tr>
        <tr><td class="txt_red">AED <?php echo $details->perpax_childs ?> Per Child</td></tr>
        <tr><td class="txt_red">AED <?php echo $details->perpax_infants ?> Per Infant</td></tr>
        </table>

        <!-- <div class="card3">
            <div class="card3_left">
                <p>Check In Date</p>
                <p>Check Out Date</p>
                <p>No of Nights</p>

                <?php if($details->in_transfer_pickup[0] != 'Pickup' ) : ?>
                    <p>Pick Up Point (Internal Transfer)</p>
                    <p>Drop Of Point (Internal Transfer)</p>
                <?php endif ?>

                <?php if($details->pp_transfer_pickup[0] != 'Pickup' ) : ?>
                    <p>Pick Up Point (Return Transfer)</p>
                    <p>Drop Of Point (Return Transfer)</p>
                <?php endif ?>

                <span style="height: 60px;">No of Pax</span>
                <p>Transfer Type</p>
            </div>
            <div class="card3_right">
                <p><?php echo $details->checkin ?></p>
                <p><?php echo $details->checkout ?></p>
                <p><?php echo $details->nights ?> Nights</p>

                <?php if($details->in_transfer_pickup[0] != 'Pickup' ) : ?>
                <p>
                <?php foreach($details->in_transfer_pickup as $key => $val) : ?>
                    <?php if($val != 'Pickup') : ?>
                        <?php echo $details->in_transfer_pickup[$key] ?> ( <?php echo $details->in_transfer_date[$key] ?> )  <?php echo array_key_last($details->in_transfer_pickup) != $key ?  ',' : '' ?>
                    <?php endif ?>
                <?php endforeach ?>
                </p>
                <p>
                <?php foreach($details->in_transfer_pickup as $key => $val) : ?>
                    <?php if($val != 'Pickup') : ?>
                        <?php echo $details->in_transfer_dropoff[$key] ?> ( <?php echo $details->in_transfer_date[$key] ?> ) <?php echo array_key_last($details->in_transfer_pickup) != $key ?  ',' : '' ?>
                    <?php endif ?>
                <?php endforeach ?>
                </p>
                <?php endif ?>

                <?php if($details->pp_transfer_pickup[0] != 'Pickup' ) : ?>
                <p>
                <?php foreach($details->pp_transfer_pickup as $key => $val) : ?>
                    <?php if($val != 'Pickup') : ?>
                        <?php echo $details->pp_transfer_pickup[$key] ?> ( <?php echo $details->in_transfer_date[$key] ?> )  <?php echo array_key_last($details->pp_transfer_pickup) != $key ?  ',' : '' ?>
                    <?php endif ?>
                <?php endforeach ?>
                </p>
                <p>
                <?php foreach($details->pp_transfer_pickup as $key => $val) : ?>
                    <?php if($val != 'Pickup') : ?>
                        <?php echo $details->pp_transfer_dropoff[$key] ?> ( <?php echo $details->in_transfer_date[$key] ?> ) <?php echo array_key_last($details->pp_transfer_pickup) != $key ?  ',' : '' ?>
                    <?php endif ?>
                <?php endforeach ?>
                </p>
                <?php endif ?>

                <div class="card3_right1" style="height: 60px;">
                    <div class="card3_right_2">
                        <p>Adult</p>
                        <p><?php echo $details->pax_adult ?></p>
                    </div>
                    <div class="card3_right_2">
                        <p>Child</p>
                        <p><?php echo $details->pax_child ?></p>
                    </div>
                    <div class="card3_right_2">
                        <p>Infant</p>
                        <p><?php echo $details->pax_infant ?></p>
                    </div>
                </div>


                <p>SIC/PVT Or Both-Which is we select</p>
            </div>
        </div> -->
       
<div style="margin-top: 18px;">
<table border="1" class="table">
  <tbody>
    <tr>
      <th>Check In Date</th>
      <td><?php echo $details->checkin ?></td>
    </tr>
    <tr>
      <th>Check Out Date</th>
      <td><?php echo $details->checkout ?></td>
    </tr>
    <tr>
      <th>No of Nights</th>
      <td><?php echo $details->nights ?> Nights</td>
    </tr>
    <?php if($details->in_transfer_pickup[0] != 'Pickup' ) : ?>
    <tr>
      <th>Pick Up Point (Internal Transfer)</th>
      <td>
            <?php foreach($details->in_transfer_pickup as $key => $val) : ?>
                <?php if($val != 'Pickup') : ?>
                    <?php echo $details->in_transfer_pickup[$key] ?> ( <?php echo $details->in_transfer_date[$key] ?> )  <?php echo array_key_last($details->in_transfer_pickup) != $key ?  ',' : '' ?>
                <?php endif ?>
            <?php endforeach ?>
      </td>
    </tr>
    <tr>
      <th>Drop Of Point (Internal Transfer)</th>
      <td>
            <?php foreach($details->in_transfer_pickup as $key => $val) : ?>
                <?php if($val != 'Pickup') : ?>
                    <?php echo $details->in_transfer_dropoff[$key] ?> ( <?php echo $details->in_transfer_date[$key] ?> ) <?php echo array_key_last($details->in_transfer_pickup) != $key ?  ',' : '' ?>
                <?php endif ?>
            <?php endforeach ?>
      </td>
    </tr>
    <?php endif ?>

    <?php if($details->pp_transfer_pickup[0] != 'Pickup' ) : ?>
    <tr>
      <th>Pick Up Point (Return Transfer)</th>
      <td>
        <?php foreach($details->pp_transfer_pickup as $key => $val) : ?>
            <?php if($val != 'Pickup') : ?>
                <?php echo $details->pp_transfer_pickup[$key] ?> ( <?php echo $details->in_transfer_date[$key] ?> )  <?php echo array_key_last($details->pp_transfer_pickup) != $key ?  ',' : '' ?>
            <?php endif ?>
        <?php endforeach ?>
      </td>
    </tr>
    <tr>
      <th>Drop Of Point (Return Transfer)</th>
      <td>
        <?php foreach($details->pp_transfer_pickup as $key => $val) : ?>
            <?php if($val != 'Pickup') : ?>
                <?php echo $details->pp_transfer_dropoff[$key] ?> ( <?php echo $details->in_transfer_date[$key] ?> ) <?php echo array_key_last($details->pp_transfer_pickup) != $key ?  ',' : '' ?>
            <?php endif ?>
        <?php endforeach ?>
      </td>
    </tr>
    <?php endif ?>

    <tr>
      <th>No of Pax</th>
      <td> 
        <table border="1">
                        <tr>
                        <td>Adult</td>
                        <td>Child</td>
                        <td>Infant</td>
                        </tr>
                        <tr>
                        <td><?php echo $details->pax_adult ?></td>
                        <td><?php echo $details->pax_child ?></td>
                        <td><?php echo $details->pax_infant ?></td>
                        </tr>
        </table>
     </td>
    </tr>
    <tr>
      <th>Transfer Type</th>
      <td>SIC/PVT Or Both-Which is we select</td>
    </tr>
  </tbody>
</table>
</div>

        <div class="card4">
            <h4>
                <u>Inclusion</u>
            </h4>
            <?php foreach($details->in_transfer_pickup as $key => $val) : ?>
            <?php if($val != 'Pickup') : ?>
                <p><i class="fas fa-dot-circle"></i> Internal Transfer on <?php echo $details->in_transfer_date[$key] ?> Pick up from <?php echo $details->in_transfer_pickup[$key] ?> Drop to <?php echo $details->in_transfer_dropoff[$key] ?> </p>
            <?php endif ?>
            <?php endforeach ?>

            <?php foreach($details->pp_transfer_pickup as $key => $val) : ?>
            <?php if($val != 'Pickup') : ?>
                <p><i class="fas fa-dot-circle"></i> Point to Point Transfer on <?php echo $details->pp_transfer_date[$key] ?> Pick up from <?php echo $details->pp_transfer_pickup[$key] ?> Drop to <?php echo $details->pp_transfer_dropoff[$key] ?></p>
            <?php endif ?>
            <?php endforeach ?>
            <p><i class="fas fa-dot-circle"></i> 5% Vat</p>
            <p><i class="fas fa-dot-circle"></i> All Applicable Tax</p>
            <p><i class="fas fa-dot-circle"></i> All of the above services with the hotel to hotel transfer and ticket</p>
            <p><i class="fas fa-dot-circle"></i> All Tours & Transfers on sharing Basis except airport transfer</p>
        </div>
        <div class="card5">
            <p>Kindly note that the above rates are only a quote, no rooms or services are booked or blocked and will be
                subject to availability at the time of booking.</p>
            <p><b>Thanks & Regards</b></p>
            <p><b>Dhiren 21 Nov Email with TRN</b></p>
        </div>
        <div class="card6">
            <h2>GENERAL TERMS AND CONDITIONS :</h2>
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
        <h1><u>Cancellation Terms: FIT <br> Cancellation Terms: Groups (MICE)</u></h1>
        <!-- <div class="card7">
            <div class="card7_left">
                <p>25% cancellation within 30 days before travel. <br>
                    cancellation within 30 days before travel.
                </p>
                <p>50% cancellation within 10 days before Travel. <br>
                    cancellation within 15 days before Travel.
                </p>
                <p>75% cancellation within 07 days before Travel. <br>
                    cancellation within 07 days before Travel.
                </p>
                <p>Any cancellation within 04 days will lead to 100% cancellation charge. <br>
                    cancellation within 04 days will lead to 100% cancellation charge.
                </p>
            </div>
            <div class="card7_right">
                <p>25%</p>
                <p>50%</p>
                <p>100%</p>
                <p>Any</p>
            </div>
        </div> -->

        <div>
        <table style="width: 100%">
            <tr>
                <td>25% cancellation within 30 days before travel.<br>
                cancellation within 30 days before travel.</td>
                <td>25%</td>
            </tr>

            <tr>
                <td>50% cancellation within 10 days before Travel. <br>
                    cancellation within 15 days before Travel.</td>
                <td>50%</td>
            </tr>

            <tr>
                <td>75% cancellation within 07 days before Travel. <br>
                    cancellation within 07 days before Travel.</td>
                <td>100%</td>
            </tr>

            <tr>
                <td>Any cancellation within 04 days will lead to 100% cancellation charge. <br>
                    cancellation within 04 days will lead to 100% cancellation charge.</td>
                <td>Any</td>
            </tr>
        </table>
        </div>
    </div>


</body>

</html>