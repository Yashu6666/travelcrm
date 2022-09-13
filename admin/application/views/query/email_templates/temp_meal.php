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

       

        body {
            background-color: rgb(190, 190, 190);

        }

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
                        <th rowspan="3">Meals Rates</th>
                        <td style="color: rgb(184, 4, 4);"><b>AED &nbsp;<?php echo $details->per_pax_adult;?>&nbsp; Per Adult </b></td>
                    </tr>
                    <tr>
                        <td style="color: rgb(184, 4, 4);"><b>AED &nbsp;<?php echo $details->per_pax_child;?>&nbsp; Per Child </b></td>
                    </tr>
                    <tr>
                        <td style="color: rgb(184, 4, 4);"><b>AED &nbsp;<?php echo $details->per_pax_infant;?>&nbsp; Per Infant </b></td>
                    </tr>
                </table>
            </div>
            <br/>
            <div  style="width:100%;">
            <table class="table">
                <tr>
                    <th>Date</th>
                    <td colspan="3"><?php echo $details->date ?></td>
                </tr>
                <tr>
                    <th>Meal Type</th>
                    <td colspan="3"><?php echo $details->Meal;?></td>
                </tr>
                <tr>
                    <th>Meal Preference</th>
                    <td colspan="3"><?php echo $details->Meal_Type;?></td>
                </tr>

                <!-- <tr>
                <th rowspan="2">No Of Meal</th>
                    <td>Breakfast</td>
                    <td>Lunch</td>
                    <td>Dinner</td>
                    
                </tr>
                <tr>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                </tr> -->

                <tr>
                    <th>Restaurant Type</th>
                    <td colspan="3"><?php echo isset($details->res_type) ? $details->res_type : ""?></td>
                </tr>
                <tr>
                    <th>Pick Up Point</th>
                    <td colspan="3"><?php $name = preg_split ("/\|/", $details->hotel);  echo $name[1]; ?> &nbsp;-&nbsp;<?php echo $details->hotel_city;?></td>
                </tr>
                <tr>
                    <th>Drop Of Point</th>
                    <td colspan="3"><?php $name = preg_split ("/\|/", $details->hotel);  echo $name[1]; ?>&nbsp;-&nbsp;<?php echo $details->hotel_city;?></td>
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
                    <th>Transfer Type</th>
                    <td colspan="3"><?php echo isset($details->transfer_type) ? str_replace("_"," ", $details->transfer_type) : ""?></td>
                </tr>
                
            </table>

        </div>

        

        <div class="card4">
            <h4>
                <u>Inclusion</u>
            </h4>
            <p><span style='font-size:15px;'>&#9673;&nbsp;</span>Dubai(DXB) Airpot Pick up and Drop Pvt Basis</p>
            <p><span style='font-size:15px;'>&#9673;&nbsp;</span>Half Day Dubai City tour with Oneway Mono rail</p>
            <p><span style='font-size:15px;'>&#9673;&nbsp;</span>Dhow Cruise with Dinner at Creek</p>
            <p><span style='font-size:15px;'>&#9673;&nbsp;</span>Burj Khalifa 124th Floor Entry tkt with Transfer</p>
            <p><span style='font-size:15px;'>&#9673;&nbsp;</span>5% Vat</p>
            <p><span style='font-size:15px;'>&#9673;&nbsp;</span>All Applicable Tax</p>
            <p><span style='font-size:15px;'>&#9673;&nbsp;</span>All of the above services with the hotel to hotel transfer and ticket</p>
            <p><span style='font-size:15px;'>&#9673;&nbsp;</span>All Tours & Transfers on sharing Basis except airport transfer</p>
            
        </div>

        <div class="card5">
            <p>Kindly note that the above rates are only a quote, no rooms or services are booked or blocked and will be subject to availability at the time of booking.</p>
            <p><b>Thanks & Regards</b></p>
            <p><b><?php echo $details->user;?> &nbsp; Email with TRN</b></p>
        </div>

        <div class="card6">
            <h2>GENERAL TERMS AND CONDITIONS :</h2>
            <br/>
            <p><?php echo $details->conditions;?></p>
        </div>
        <div class="card6">
            <h1><u>Cancellation Terms: FIT <br> Cancellation Terms: Groups (MICE)</u></h1>
            <br/>
            <p><?php echo $details->cancelation_policy;?></p>
        </div>
    </div>


</body>

</html>