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

        /* body {
    background-color: rgb(190, 190, 190);
} */

        .card {
            background-color: white;
            font-family: 'Roboto', sans-serif;
            width: 80%;
            margin: auto;
            padding: 1rem;
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

        .card4 p i {
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

        th,
        td {
            /* text-align: left; */
            padding: 8px;
        }

        .txt_red {
            color: rgb(184, 4, 4);
            font-weight: 600;
        }

        .notes {
            text-align: justify;
            font-size: 16px;
            margin-top: 10px;
            width: 100%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        .mt_2 {
            margin-top: 2rem;
        }
        .bg_y{
            background: #fabd02;
        }
        
        .txt_center {
            text-align: center;
        }
        .txt_left {
            text-align: left;
        }

        .flex{
            display: flex;
            justify-content:space-between;
            align-items: center;
        }
        .new_btn {
            color: white !important;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 2px;
            background: #595d60;
            text-align: center;
            padding: 10px;
        }

        .bg_blue {
            background: darkblue;
            color: white;
        }

        .bg_r{
            background: darkred;
            color: white;
        }
        .double_border {
            border: 1px solid black;
            outline: 1px solid black;
        }
        .bg_grey {
            background: lightgray;
        }
        .table{
            border: double !important;
        }
        .table td,
        th {
            border: double !important;
        }
        * {
      font-family: Arial, Helvetica, sans-serif !important;
    }
    </style>
</head>

<body>
    <div class="card">
        <div class="txt_center">
        
    </div>

    <div class="flex">
        <img src="<?php echo base_url();?>public/image/proposalLogo.png" style="width: 162px !important;" alt="" />
        <h3 class="txt_center">ITINERARY DETAILS</h3>
    <div class="container mb-2 d-flex justify-content-end d-grid gap-3">
        <a class="new_btn text-decoration-none" style="text-decoration: none;" href="<?php echo site_url(); ?>itinerary/view">
        Back to Itinerary
        </a>
    </div>
    </div>    
        <table border="1" class="table mt_2">
            <tr>
            <?php $date = new DateTime($itinery[0]->created_at);
                        $new_df = $date->format('d-M-Y'); ?>
                <th class="txt_left">ITINERARY Date: <?php echo $new_df ?></th>
                <th class="txt_left" colspan="3">Agent Details: <?php echo $query->b2bcompanyName ?></th>
            </tr>
            <tr>
                        <?php $date = new DateTime(explode(",",$itinery[0]->arrival_transfer)[5]);
                        $new_df = $date->format('d-M-Y'); ?>
                <th class="txt_left">Guest Name: <?php echo !empty($query_hotel_voucher) ? $query_hotel_voucher[0]->guest_name : "N/A" ?></th>
                <th class="txt_left" colspan="3">Date of Arrival: <?php echo $new_df ;?></th>
            </tr>

            <tr>
                <th class="txt_left"> Total No of Guest:</th>
                <td><table>
                        <tr>
                            <td class="bg_blue double_border">Adult</td>
                            <td class="bg_blue double_border">Child</td>
                            <td class="bg_blue double_border">Infant</td>
                        </tr>
                        <tr>
                            <td class="double_border"><?php echo $query_package->adult ?></td>
                            <td class="double_border"><?php echo $query_package->child ?></td>
                            <td class="double_border"><?php echo $query_package->infant ?></td>
                        </tr>
                    </table></td>
            </tr>

        </table>
            <?php 
        //   $room_nights_arr = explode(",",$hotel_query_details->nights);
        //   $room_hotel_name_arr = explode(",",$hotel_query_details->hotel_name);
        //   $room_room_type_arr = explode(",",$hotel_query_details->room_type);
        //   $room_checkin_arr = explode(",",$hotel_query_details->checkin);

        //   foreach ($room_nights_arr as $key => $value) {
        //         $result_nights_arr[$key] = array_splice($room_nights_arr,0,3);
        //         $result_rooms_arr[$key] = array_splice($room_hotel_name_arr,0,3);
        //         $result_bed_arr[$key] = array_splice($room_room_type_arr,0,3);
        //         $result_checkin_arr[$key] = array_splice($room_checkin_arr,0,3);

        //         if(count($room_nights_arr) == 0){ break; }
        //     }
          
        //     $out = array();
        //     $final_hotel_names_details = [];
        //     $final_hotel_nights_details = [];
        //     $final_room_bed_details = [];
        //     $final_checkin_details = [];

        //     foreach ($result_nights_arr as $key2 => $value2){
        //         $dup_key = '';
        //         foreach ($value2 as $k2 => $val2) {
        //             if (in_array($result_rooms_arr[$key2][$k2], $final_hotel_names_details))
        //             {
        //               $find_key = array_search($result_rooms_arr[$key2][$k2], $final_hotel_names_details); 

        //               if($dup_key != $key2){ 
        //                 $final_hotel_nights_details[$find_key] += (int)$val2;
        //               }
        //               $dup_key = $key2;
        //             }
        //             else
        //             {
        //               array_push($final_hotel_names_details,$result_rooms_arr[$key2][$k2]);
        //               array_push($final_hotel_nights_details,(int)$val2);
        //               array_push($final_room_bed_details,$result_bed_arr[$key2][$k2]);
        //               array_push($final_checkin_details,$result_checkin_arr[$key2][$k2]);
        //             }
        //         }
        //     }

        //     print_r($final_hotel_names_details);
        //     print_r($final_hotel_nights_details);
        //     print_r($final_room_bed_details);
        //     print_r($final_checkin_details);
    ?>
    <?php foreach(($itinery) as $key => $val) : ?>
        <?php if(isset($query_hotel_voucher[$key])) :?>
        <table border="1" class="table mt_2">
            <tbody>
            <tr class="bg_blue txt_center">
                <th colspan="2">HOTEL DETAILS</th>
            </tr>
            <tr>
                <td style="width: 40%;">Hotel/Residense Booked:</td>
                <td> <?php echo $val->hotel_name ;?> <span style="font-size:20px;color: #fcd53f;">
                            <?php for($i=0;$i<$val->hotel_category;$i++) : ?>
                                &#9733;
                            <?php endfor ?>
                            </span></td>
            </tr>
            <tr>
                <td style="width: 40%;">Check in Date</td>
                <td> <?php echo (new DateTime($val->hotel_check_in_date))->format('d-M-Y') ;?> </td>
            </tr>
            <tr>
                <td style="width: 40%;">Check out Date </td>
                <td><?php echo (new DateTime($val->hotel_checkout_date))->format('d-M-Y')  ;?> </td>
            </tr>
            <tr>
                <td style="width: 40%;">No of Nights </td>
                <td><?php $date1 = new DateTime($val->hotel_check_in_date); $date2 = new DateTime($val->hotel_checkout_date); 
                echo $date2->diff($date1)->format("%a") ;?> </td>
            </tr>
            <tr>
                <td style="width: 40%;">Hotel Confirmation</td>
                <td><p class="txt_red"><?php echo $query_hotel_voucher[$key]->confirmation_id ?></p> </td>
            </tr>
            <tr>
                <td style="width: 40%;">Hotel Rooms </td>
                <td><?php echo explode(",",$query_package->room)[0]  ;?> </td>
            </tr>
            <tr>
                <td style="width: 40%;">Hotel Landline Number </td>
                <td><?php echo $query_hotel_voucher[$key]->hotel_phone  ;?> </td>
            </tr>
            
            </tbody>
        </table>
        <?php endif ?>
        <?php endforeach ?>

        <table  border="1" class="table mt_2">
            <tr class="bg_blue txt_center">
                <th colspan="7">FLIGHT DETAILS</th>
            </tr>
            <tr class="bg_r">
                <td style="white-space: nowrap;">ARRIVAL DATE</td>
                <td style="white-space: nowrap;">FLIGHT NO</b></td>
                <!-- <td style="white-space: nowrap;">ARRIVAL FROM</b></td> -->
                <td style="white-space: nowrap;">ETA</b></td>
                <!-- <td style="white-space: nowrap;">AIRPORT</b></td> -->
                <td style="white-space: nowrap;">DROP OFF HOTEL</b></td>
                <td style="white-space: nowrap;">TRANSFER TYPE</b></td>
                <td style="white-space: nowrap;">TPT</b></td>
            </tr>
            <tr>
            <?php $date = new DateTime(explode(",",$val->arrival_transfer)[5]);
                        $new_df = $date->format('d-M-Y'); ?>
                <td><?php echo $new_df ;?> </td>
                <td><?php echo explode(",",$val->arrival_transfer)[0] ;?></td>
                <!-- <td><?php echo explode(",",$val->arrival_transfer)[2] ;?></td> -->
                <td><?php echo explode(",",$val->arrival_transfer)[1] ;?></td>
                <!-- <td><?php echo explode(",",$val->arrival_transfer)[3] ;?></td> -->
                <td><?php echo explode(",",$val->arrival_transfer)[4] ;?> </td>
                <td><?php echo explode(",",$val->arrival_transfer)[6] ;?> </td>
                <td><?php echo explode(",",$val->arrival_transfer)[7] ;?> </td>
            </tr>

            <tr class="bg_r">
                <td style="white-space: nowrap;">DEPARTURE DATE</td>
                <td style="white-space: nowrap;">FLIGHT NO</b></td>
                <!-- <td style="white-space: nowrap;">DEPARTURE TO</b></td> -->
                <td style="white-space: nowrap;">ETD</b></td>
                <!-- <td style="white-space: nowrap;">AIRPORT</b></td> -->
                <td style="white-space: nowrap;">PICK UP HOTEL</b></td>
                <td style="white-space: nowrap;">TRANSFER TYPE</b></td>
                <td style="white-space: nowrap;">TPT</b></td>
            </tr>
            <tr>
            <?php $date = new DateTime(explode(",",$val->return_transfer)[5]);
                        $new_df = $date->format('d-M-Y'); ?>
                <td><?php echo $new_df ;?> </td>
                <td><?php echo explode(",",$val->return_transfer)[0] ;?></td>
                <!-- <td><?php echo explode(",",$val->return_transfer)[2] ;?></td> -->
                <td><?php echo explode(",",$val->return_transfer)[1] ;?></td>
                <!-- <td><?php echo explode(",",$val->return_transfer)[3] ;?></td> -->
                <td><?php echo explode(",",$val->return_transfer)[4] ;?> </td>
                <td><?php echo explode(",",$val->return_transfer)[6] ;?> </td>
                <td><?php echo explode(",",$val->return_transfer)[7] ;?> </td>
            </tr>
        </table>
        <table  border="1" class="table mt_2">
            <tr class="bg_r txt_center">
                <th colspan="2">DAY WISE ITINERARY</th>
            </tr>
        <?php foreach(($itinery) as $key => $val) : ?>
            
            <tr class="bg_blue txt_left">
            <!-- ?php $date = new DateTime($val->hotel_check_in_date);
                        $new_df = $date->format('d-M-Y'); ?>
                <th colspan="2">Day <?php echo $val->day ?> :  <?php echo $new_df ?> (<?php echo date('l', strtotime($val->hotel_check_in_date)) ?>)</th> -->
            <?php $day_date = (new DateTime($itinery[0]->created_at))->format('d-M-Y');
                $next_day_date= date('d-M-Y', strtotime($day_date. ' + '.$key.' days'));  ?>
                <th class="bg_blue txt_left" colspan="2">Day <?php echo $val->day ?> :  <?php echo $next_day_date ?> (<?php echo date('l', strtotime($next_day_date)) ?>)</th>

            </tr>
            <tr>
                <td>Service</td>
                <!-- <td><?php echo $val->excursion_name.' ('.$val->excursion_type.')' ?></td> -->
                <td><?php echo explode(',',$val->excursion_name)[0] ?></td>
            </tr>
            <tr>
                <td>Transfer Type</td>
                <!-- <td><?php echo $val->transfer_type ?></td> -->
                <td><?php echo explode(',',$val->excursion_type)[0] ?></td>
            </tr>
            <tr>
                <td>No Of Pax</td>
                <!-- <td><?php echo 'Adult '.$query_package->adult.' Child'.$query_package->child.' Infant'.$query_package->child ?></td> -->
                <td>
                    <table>
                        <tr>
                            <td class="bg_blue double_border">Adult</td>
                            <td class="bg_blue double_border">Child</td>
                            <td class="bg_blue double_border">Infant</td>
                        </tr>
                        <tr>
                            <td class="double_border"><?php echo $query_package->adult ?></td>
                            <td class="double_border"><?php echo $query_package->child ?></td>
                            <td class="double_border"><?php echo $query_package->infant ?></td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="bg_grey">To Transfer</td>
            </tr>

            <tr>
                <td>Pick up Location</td>
                <td><?php echo $val->hotel_name ?></td>
            </tr>
            <tr>
                <td>Pick up Time</td>
                <td><?php echo explode(',',$val->excursion_to_tpt)[0] ?></td>
            </tr>
            <tr>
                <td>Drop off Location</td>
                <td><?php echo explode(',',$val->excursion_to_transfer_dropoff)[0] ?></td>
            </tr>

            <tr>
                <td colspan="2" class="bg_grey">Return Transfer</td>
            </tr>

            <tr>
                <td>Pick up Location</td>
                <td><?php echo explode(',',$val->excursion_return_transfer_pickup)[0] ?></td>
            </tr>
            <tr>
                <td>Pick up Time</td>
                <td><?php echo explode(',',$val->excursion_return_tpt)[0] ?></td>
            </tr>
            <tr>
                <td>Drop off Location</td>
                <td><?php echo $val->hotel_name ?></td>
            </tr>
            <?php if(!empty(explode(',',$val->meal_resturant_type)[0])) : ?>

            <tr>
                <td>Restaurant Type</td>
                <td><?php echo !empty(explode(',',$val->meal_resturant_type)[0]) ? explode(',',$val->meal_resturant_type)[0] : "N/A" ?></td>
            </tr>
            <tr>
                <td>Meal Type </td>
                <td><?php echo !empty(explode(',',$val->meal_type)[0]) ? explode(',',$val->meal_type)[0] : "N/A" ?></td>
            </tr>
            <tr>
                <td>Meal</td>
                <td><?php echo !empty(explode(',',$val->meal)[0]) ? explode(',',$val->meal)[0] : "N/A" ?></td>
            </tr>
            <tr>
                <td>Meal Transfer Type </td>
                <td><?php echo !empty(explode(',',$val->meal_transfer_type)[0]) ? explode(',',$val->meal_transfer_type)[0] : "N/A" ?></td>
            </tr>
            <?php endif ?>

            <tr>
                <td>Description</td>
                <td><?php echo $val->description ?></td>
            </tr>
           

            <!-- --------------------  Followed By --------------------- -->
            <?php if(count(explode(',',$val->excursion_name)) > 1) : ?>
            <?php foreach(explode(',',$val->excursion_name) as $k => $v) : ?>
            <?php if(isset(explode(',',$val->excursion_name)[$k + 1])) : ?>
            <tr>
                <td colspan="2" class="bg_blue txt_center">Followed By</td>
            </tr>

            <tr>
                <td>Service</td>
                <td><?php echo explode(',',$val->excursion_name)[$k + 1] ?></td>
            </tr>
            <tr>
                <td>Transfer Type</td>
                <td><?php echo explode(',',$val->excursion_type)[$k + 1] ?></td>
            </tr>
            <tr>
                <td>No Of Pax</td>
                <td>
                    <table>
                        <tr>
                            <td class="bg_blue double_border">Adult</td>
                            <td class="bg_blue double_border">Child</td>
                            <td class="bg_blue double_border">Infant</td>
                        </tr>
                        <tr>
                            <td class="double_border"><?php echo $query_package->adult ?></td>
                            <td class="double_border"><?php echo $query_package->child ?></td>
                            <td class="double_border"><?php echo $query_package->infant ?></td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2" class="bg_grey">To Transfer</td>
            </tr>

            <tr>
                <td>Pick up Location</td>
                <td><?php echo $val->hotel_name ?></td>
            </tr>
            <tr>
                <td>Pick up Time</td>
                <td><?php echo explode(',',$val->excursion_to_tpt)[$k + 1] ?></td>
            </tr>
            <tr>
                <td>Drop off Location</td>
                <td><?php echo explode(',',$val->excursion_to_transfer_dropoff)[$k + 1] ?></td>
            </tr>

            <tr>
                <td colspan="2" class="bg_grey">Return Transfer</td>
            </tr>

            <tr>
                <td>Pick up Location</td>
                <td><?php echo explode(',',$val->excursion_return_transfer_pickup)[$k + 1] ?></td>
            </tr>
            <tr>
                <td>Pick up Time</td>
                <td><?php echo explode(',',$val->excursion_return_tpt)[$k + 1] ?></td>
            </tr>
            <tr>
                <td>Drop off Location</td>
                <td><?php echo $val->hotel_name ?></td>
            </tr>

            <tr>
                <td>Description</td>
                <td><?php echo $val->description ?></td>
            </tr>
            
            <?php if(!empty(explode(',',$val->meal_resturant_type)[$k + 1])) : ?>
            <tr>
                <td>Restaurant Type</td>
                <td><?php echo !empty(explode(',',$val->meal_resturant_type)[$k + 1]) ? explode(',',$val->meal_resturant_type)[$k + 1] : "N/A" ?></td>
            </tr>

            <tr>
                <td>Meal Type </td>
                <td><?php echo !empty(explode(',',$val->meal_type)[$k + 1]) ? explode(',',$val->meal_type)[$k + 1] : "N/A" ?></td>
            </tr>
            <tr>
                <td>Meal</td>
                <td><?php echo !empty(explode(',',$val->meal)[$k + 1]) ? explode(',',$val->meal)[$k + 1] : "N/A" ?></td>
            </tr>
            <tr>
                <td>Meal Transfer Type </td>
                <td><?php echo !empty(explode(',',$val->meal_transfer_type)[$k + 1]) ? explode(',',$val->meal_transfer_type)[$k + 1] : "N/A" ?></td>
            </tr>
            <?php endif ?>

            <?php endif ?>
            <?php endforeach ?>
            <?php endif ?>

        <?php endforeach ?>
            
        </table>
        
        <div class="mt_2">
        <ul>
            <li class="notes">For all SIC tours, waiting period is maximum 05 minutes and for PVT tours, waiting period is maximum 15 minutes</li>
            <li class="notes">There will be no refund for partly utilized services and in case if the guest doesn't show up at the start time mentioned in the tour itinerary, the service provider reserves the right to charge 100% no-show fee.The service provider holds no responsibility if any component of an attraction is non-operational due to technical reasons or weather conditions.</li>
            <li class="notes">You will have to be present in the hotel lobby according to whatever time we have given you in itinerary.  We may also be late Because of the traffic, but it is important to be your present according to the time we have given you.</li>
            <li class="notes">If you are not available for tours on given time, then that tour will be as No show and no refund will be possible. If you want to rebook, then you have to pay again.</li>
            <li class="notes">Would request you to kindly reconfirm the itinerary and if you want to make any changes in the itinerary please advise us within 24 Hours from the time you receive the itinerary, if we do not get any update, then we will assume and confirm the same itinerary and later no changes will be accepted(WOULD REQUEST TO AVOID LAST MINUTE CHANGES IN THE ITINERARY, FOR BETTER DELIVERY OF THE SERVICES)</li>
            <li class="notes">The cut-off date to receive final itinerary is 4 days prior to arrival. We regret to inform you that we will not be able to make any changes to the itinerary after the cut-off date. We request your cooperation to support us in ensuring that your guests have a memorable experience and pleasant stay in U.A.E.</li>
        </ul>
        </div>
    </div>
</body>

</html>