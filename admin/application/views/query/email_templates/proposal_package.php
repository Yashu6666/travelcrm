<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }



    .head .head1,
    .head2 {
        margin-bottom: 1rem;

    }

    .head .head4 {
        /* background-color: red; */
        display: flex;
        /* height: 13rem; */
        height: 8rem;
        width: 40rem;
        margin-top: 1.5rem;

    }

    .head .head4 .left {
        /* background-color: thistle; */
        height: 12rem;
        width: 10rem;

    }

    .head .head4 .right {
        /* background-color: silver; */
        height: 12rem;
        width: 30rem;

    }

    .head .head4 .right p {
        padding: 1.5px;

    }

    .head .head4 .left p {
        padding: 1.5px;

    }


    .head .head5 p {
        padding: 1.5px;

    }

    .head .head6 {
        color: red;
        margin-top: 2rem;
        font-family: 'Roboto Condensed', sans-serif;

    }

    .head .head7,
    .head8,
    .head9 {
        margin-top: 2rem;
        font-family: 'Roboto Condensed', sans-serif;

    }

    .head .head9 p i {
        font-size: 10px;

    }

    .head .head10 {
        display: flex;
        margin-top: 2rem;


    }

    .head .head10 .left {
        /* background-color: wheat; */
        height: 16rem;
        width: 30rem;

    }

    .head .head10 .left p {
        padding: 3px;


    }

    .head .head10 .right {
        /* background-color: tan; */
        height: 16rem;
        width: 10rem;

    }

    .head .head10 .right p {
        padding: 3px;
        margin-left: 20px;

    }

    .head .head10 .right .point {
        visibility: hidden;

    }

    .head .head11 p i {
        font-size: 10px;

    }

    .head .head11 u {
        margin-bottom: 5px;

    }

    .head .head11 p {
        padding: 1.5px;

    }

    @media print {
        .head {
            font-size: 16.5px;
        }

        .head .head9>span {
            margin-top: 10px;
        }

        .head11 {
            margin-top: 2rem;
        }
    }


    @media only screen and (min-width: 320px) {
        .maindiv {
            background-color: aliceblue;
            height: 308vh;
            width: 100vw;
            display: flex;
            /* align-items: center; */
            justify-content: center;
            flex-direction: column;
            font-size: 15px;
            font-family: 'Roboto Condensed', sans-serif;
        }

        .head {
            background-color: white;
            height: 100%;
            /* width: 40rem; */
            padding: 1rem;
            box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.75);
            color: hsl(205, 86%, 27%);
        }


        .head4_inline {
            height: auto;
            width: auto;
            /* margin: 1.5rem 0rem 12rem 0rem; */
            margin-bottom: 200px;
        }
    }

    @media (min-width: 1200px) {
        .maindiv {
            background-color: aliceblue;
            height: 308vh;
            width: 100vw;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-size: 15px;
            font-family: 'Roboto Condensed', sans-serif;
        }

        .head {
            background-color: white;
            height: 100%;
            /* width: 40rem; */
            padding: 7rem;
            box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.75);
            color: hsl(205, 86%, 27%);
        }

        .head4_inline {
            height: auto;
            width: auto;
            margin: 1.5rem 0rem 12rem 0rem;
            /* margin-bottom: 200px; */
        }

    }

    @media only screen and (max-width: 300px) and (min-width: 220px) {
        .mt_inc {
            margin-top: 7rem;
        }
    }
</style>

<body>
    <div class="maindiv">
        <div class="head">
            <div class="head1">
                Dear Sir/Madam,

            </div>
            <div class="head2">
                <b>Warm Greetings from Diamond Tours LLC-Dubai...!!!</b>

            </div>
            <div class="head3">
                We are pleased to quote the best rate as per your below request:
                <!-- <b>**Any amendments in the dates of travel or number of passengers will attract a requote.**</b> -->
            </div>

            <?php if ($details->type == 'package') :  ?>

                <div class="head4 head4_inline">

                        

                    <div class="left">
                        <p>Total Pkg Rate :</p>
                        <br>
                        <br>
                        <p>Check-in : </p>
                        <p>Check-out : </p>
                        <p>No. of night : </p>
                        <p>No. of Pax :</p>
                        <p>Hotel Name(s) :</p>
                        <p>No. of Room(s) :</p>
                    </div>

                    <div class="right">
                        <p>AED <?php echo $details->perpax_adult ?> Adult</p>
                        <p>AED <?php echo $details->perpax_childs ?> Child</p>
                        <p>AED <?php echo $details->perpax_infants ?> Infant</p>
                        <p><?php echo $details->checkin ?></p>
                        <p><?php echo $details->checkout ?></p>
                        <p><?php echo $details->nights ?></p>
                        <p><?php echo 'Adult ' . $details->pax_adult . ' Child ' . $details->pax_child . ' Infant ' . $details->pax_infant ?></p>
                        <p><?php foreach ($details->hotels as $key => $val) : ?>
                                <?php print_r($details->hotels[$key]->hotelname) ?> - <?php echo $details->hotelPrefrence ?>* - <?php print_r($details->buildRoomType[$key]) ?><?php echo array_key_last($details->hotels) != $key ?  ',' : '' ?>
                            <?php endforeach ?>
                        </p>
                        <p><?php echo $details->no_of_room ?></p>
                    </div>


                </div>
                <div class="head5 mt_inc">
                    <b>Package Price Inclusions:</b>
                    <?php echo $details->inclusions ?>
                    <p> 5% Vat</p>
                    <p> All of the above services with the hotel to hotel transfer and ticket</p>
                    <p> All Tours & Transfers on sharing Basis except airport transfer</p>
                </div>



                <!-- <div class="head5" style="margin-top: 20px;">
                    <b>Package Price Exclusions:</b>
                    <?php echo $details->exclusions ?>
                    <p> 5% Vat</p>
                    <p> All of the above services with the hotel to hotel transfer and ticket</p>
                    <p> All Tours & Transfers on sharing Basis except airport transfer</p>
                </div> -->
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
                

            <?php endif  ?>

            <?php if ($details->type == 'package') :  ?>


            <?php endif  ?>

        </div>

    </div>

</body>

</html>