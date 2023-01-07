<?php ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel-CRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        * {
            margin: 0;
            padding: 0;

        }

        body {
            min-height: 100vh;
        }

        .second {
            position: relative;
            width: 100%;
            border: 2px solid gray;
        }

        .second img {
            padding: 0;
            margin: 10px;
            width: 30%;
            height: 10%;
            border-radius: 15px;
        }

        .second h5,
        p {
            display: inline-block;
        }


        .head {
            background-color: gray;
        }

        .sidebar {
            position: absolute;
            top: 63%;
            right: 3%;
            width: 28%;
            height: 80%;
            border: 1px solid rgba(0, 0, 0, 0.253);
            padding: 20px;
            border-radius: 5px;
        }

        textarea {
            resize: none;
        }


        @import url("https://rsms.me/inter/inter.css");

        :root {
            --color-light: white;
            --color-signal: #2CA8FF;
            --color-background: var(--color-light);
            --color-text: var(--color-dark);
            --color-accent: var(--color-signal);
            --size-bezel: .3rem;
            --size-radius: 4px;
            color: var(--color-text);
            background: var(--color-background);
            font-weight: 300;

        }

        .input {
            position: relative;
            /* padding: calc(var(--size-bezel) * 3); */
        }

        .input__label {
            position: absolute;
            left: 0;
            top: 0;
            padding: calc(var(--size-bezel) * 0.65) calc(var(--size-bezel) * .2);
            margin: calc(var(--size-bezel) * 0.65 + 3px) calc(var(--size-bezel) * .3);
            background: pink;
            white-space: nowrap;
            -webkit-transform: translate(0, 0);
            transform: translate(0, 0);
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            background: var(--color-background);
            -webkit-transition: -webkit-transform 120ms ease-in;
            transition: -webkit-transform 120ms ease-in;
            transition: transform 120ms ease-in;
            transition: transform 120ms ease-in, -webkit-transform 120ms ease-in;
            font-weight: 500;
            line-height: .5;
        }

        .input__field {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            display: block;
            width: 100%;
            border: 1px solid black;
            padding: calc(var(--size-bezel) * 1) var(--size-bezel);
            color: black;
            background: transparent;
            border-radius: var(--size-radius);
        }

        .input__field:focus+.input__label,
        .input__field:not(:placeholder-shown)+.input__label {
            -webkit-transform: translate(0.25rem, -65%) scale(0.8);
            transform: translate(0.25rem, -65%) scale(0.8);
            color: var(--color-accent);
        }

        .fname {
            width: 170%;
        }

        .colorRed {
            color: red;
        }

        .spanCompany {
            color: red;
            font-size: .7rem;
            font-weight: bold;
        }

        .all-width {
            width: 120%;
        }

        .visa-input-width {
            width: 80%;
        }

        .hotel-input-width {
            width: 125%;
        }

        .hotel-input-width-time {
            width: 185%;
        }

        .shightseeing-wid {
            width: 120%;
        }

        .shightseeing-wid-date {
            width: 165%;
        }

        /*# sourceMappingURL=index.css.map */

        .width-input {
            width: 190%;
        }

        .width-dest {
            width: 376%;
        }

        .width-check {
            width: 350%;
        }


        .input-time {
            width: 422%;
        }

        .Subject-width {
            width: 350%;
            margin-bottom: 15px;
        }

        .invoice-email {
            width: 110%;
        }

        .setting-width {
            width: 210%;
        }

        .setting-select {
            width: 87%;
            height: 5vh;
            border: 1px solid black;
            border-radius: 4px;
            margin-left: 4px;

        }

        .setting-select-module {
            width: 100%;
            height: 5vh;
            border: 1px solid black;
            border-radius: 4px;
            /* margin-left: 10px; */
            margin-bottom: 100px;
        }

        .new_btn {
            color: white !important;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 2px;
            /* border: 1px solid #102158; */
            background: #595d60;
            text-align: center;
            padding: 6px;
        }

        .new_btn:hover {
            color: white !important;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 2px;
            /* border: 1px solid #102158; */
            background: #d9a927;
            text-align: center;
            padding: 6px;
        }

        .bg-primary {
            background: #d9a927 !important;
        }
    </style>

</head>

<body>


    <div class="container">

        <div class="" style="float:right;margin-top: 1%">
            <a href="<?php echo base_url(); ?>query/view_query">
                <button type="button" class="new_btn px-3" style="border: none;">
                    Close
                </button>
            </a>
        </div>
        <br />
        <div class="d-flex justify-content-between" style="margin-top: 3%;">

            <img class="w-25" src="<?php echo base_url(); ?>public/image/logo.png" />
            <p>
                <b>Name: </b><?php echo $b2bcustomerquery->b2bfirstName ?> <?php echo $b2bcustomerquery->b2blastName ?> <br>
                <b>Email:</b> <?php echo $b2bcustomerquery->b2bEmail ?> <br>
                <b>Query ID :</b><?php echo $buildpackage->queryId ?>
            </p>
        </div>

        <hr>
        <div class="d-flex justify-content-between">
            <p><?php echo $buildpackage->goingTo ?> <br>
                (<?php echo $buildpackage->goingFrom ?>) <br>
                <?php echo $buildpackage->adult ?> Adult, <?php echo $buildpackage->child ?> Child , <?php echo $buildpackage->infant ?> Infant<br />
                Currency :<?php echo $package_query[0]->currency ?><br />
            </p>
        </div>
        <hr>

        <div class="bg-primary d-flex justify-content-around">
            <h3 class="text-light p-2">Check In: <?php echo (new DateTime($buildpackage->specificDate))->format('d-M-Y') ?> </h3>
            <h3 class="text-light p-2">No of Nights: <?php echo $buildpackage->night ?> </h3>
            <h3 class="text-light p-2">Check Out: <?php echo (new DateTime($buildpackage->noDaysFrom))->format('d-M-Y') ?></h3>
        </div>
    </div>

    <?php if (isset($hotel_query[0]->hotel_id)) : ?>

    <?php 
          $room_nights_arr = explode(",",$hotel_query[0]->nights);
          $room_hotel_name_arr = explode(",",$hotel_query[0]->hotel_name);
          $room_room_type_arr = explode(",",$hotel_query[0]->room_type);

          foreach ($room_nights_arr as $key => $value) {
                $result_nights_arr[$key] = array_splice($room_nights_arr,0,$buildpackage->room);
                $result_rooms_arr[$key] = array_splice($room_hotel_name_arr,0,$buildpackage->room);
                $result_bed_arr[$key] = array_splice($room_room_type_arr,0,$buildpackage->room);

                if(count($room_nights_arr) == 0){ break; }
            }
          
            $out = array();
            $final_hotel_names_details = [];
            $final_hotel_nights_details = [];
            $final_room_bed_details = [];

            foreach ($result_nights_arr as $key2 => $value2){
                $dup_key = [];
                foreach ($value2 as $k2 => $val2) {
                    if (in_array($result_rooms_arr[$key2][$k2], $final_hotel_names_details))
                    {
                      $find_key = array_search($result_rooms_arr[$key2][$k2], $final_hotel_names_details); 

                      if($dup_key != $key2){ 
                        $final_hotel_nights_details[$find_key] += (int)$val2;
                    }
                      $dup_key = $key2;
                    }
                    else
                    {
                      array_push($final_hotel_names_details,$result_rooms_arr[$key2][$k2]);
                      array_push($final_hotel_nights_details,$buildpackage->room > 1 ? 0 : (int)$val2);
                      array_push($final_room_bed_details,$result_bed_arr[$key2][$k2]);
                    }

                }
            }
    ?>
    <?php endif ?>

    

    <div class="container mt-5 section">
        <?php if (isset($hotel_query[0]->hotel_id)) : ?>
            <div class=" second">
                <div class="bg-primary ">
                    <h3 class="text-light" style="padding: 7px;"><i class="fa fa-solid fa-hotel"></i> Hotel</h3>
                </div>
                <?php foreach ($final_hotel_names_details as $key => $val) : ?>

                    <div class="head">
                        <h5 class="text-capitalize text-light p-2">Hotel Name : <?php print_r($final_hotel_names_details[$key]) ?> - No of Nights <?php echo $final_hotel_nights_details[$key] ?> </h5>
                    </div>
                    <div>
                        <h5 class="text-capitalize p-2"><b> Room Type : </b> <?php echo $final_room_bed_details[$key] ?></h5>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endif ?>

    <!-- <div class="container mt-4 section">
        <?php if (isset($hotel_query[0]->hotel_id)) : ?>
            <?php foreach (explode(",", $hotel_query[0]->hotel_id) as $key => $val) : ?>
                <div class=" second">
                    <div class=" bg-primary ">
                        <h3 class="text-light" style="padding: 7px;">Hotel</h3>
                        <div class="head">
                            <h5 class="text-capitalize text-light" style="padding: 7px;"><?php echo explode(",", $hotel_query[0]->hotel_name)[$key]; ?> - No of Nights <?php echo explode(",", $hotel_query[0]->nights)[$key]; ?> </h5>
                        </div>
                    </div>
                    <div>
                        <h5 class="text-capitalize"><b>Hotel Name : </b> <?php echo explode(",", $hotel_query[0]->hotel_name)[$key]; ?></h5>
                        <h5 class="text-capitalize"><b>Room Type : </b> <?php echo explode(",", $hotel_query[0]->room_type)[$key]; ?></h5>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endif ?> -->


        <?php if (isset($sic_query[0]->excursion_name) || isset($pvt_query[0]->excursion_name) || isset($tkt_query[0]->excursion_name)) : ?>
            <div class="mt-4 second">
                <div class=" bg-primary ">
                    <h3 class="text-light" style="padding: 7px;">Sightseeing</h3>
                </div>
                <div>
                    <?php if (isset($sic_query[0]->excursion_name)) : ?>
                        <div class="head">
                            <h5 class="text-light" style="padding: 7px;"> SIC </h5>
                        </div>
                        <?php foreach (explode(",", $sic_query[0]->excursion_name) as $key => $value) : ?>
                            <h5><?php echo $value ?></h5><br />
                        <?php endforeach ?>
                </div>
                <div>
                <?php endif ?>

                <?php if (isset($pvt_query[0]->excursion_name)) : ?>
                    <div class="head">
                        <h5 class="text-light" style="padding: 7px;"> PVT</h5>
                    </div>
                    <?php foreach (explode(",", $pvt_query[0]->excursion_name) as $k => $v) : ?>
                        <h5><?php echo $v ?></h5>
                    <?php endforeach ?>
                </div>
            <?php endif ?>


            <?php if (isset($tkt_query[0]->excursion_name)) : ?>
                <div>
                    <div class="head">
                        <h5 class="text-light" style="padding: 7px;"> TKT </h5>
                    </div>
                    <?php foreach (explode(",", $tkt_query[0]->excursion_name) as $key => $value) : ?>
                        <h5><?php echo $value ?></h5><br />
                    <?php endforeach ?>
                </div>
            <?php endif ?>

            </div>

        <?php endif ?>

        <?php if ( isset($internal_query[0]->transfer_date) || isset($return_query[0]->transfer_date)) : ?>

            <div class="mt-4 second">
                <div class=" bg-primary ">
                    <h3 class="text-light" style="padding: 7px;">Transfer</h3>
                </div>
                <div>
                    <table class="table table-bordered">
                        <thead align="center" style="background: #dbd5d5;">
                            <th> Transport type</th>
                            <th> Date</th>
                            <th> Pick Up</th>
                            <th> Drop Off </th>
                        </thead>

                        <?php if (!empty($internal_query)) : ?>
                        <?php foreach (explode(",", $internal_query[0]->transfer_date) as $key => $value) : ?>

                            <tbody>
                                <tr align="center">
                                    <td>Internal City/Hotel Transfer</td>
                                    <td> <?php echo explode(",", $internal_query[0]->transfer_date)[$key] ?></td>
                                    <td> <?php echo explode(",", $internal_query[0]->pickup)[$key] ?></td>
                                    <td> <?php echo explode(",", $internal_query[0]->dropoff)[$key] ?></td>

                                </tr>
                            </tbody>
                        <?php endforeach ?>
                        <?php endif ?>

                        <?php if (!empty($return_query)) : ?>
                        <?php foreach (explode(",", $return_query[0]->transfer_date) as $key_rt => $value_rt) : ?>
                            <?php if (isset(explode(",", $return_query[0]->pickup)[$key_rt])) : ?>
                            <tbody>
                                <tr align="center">
                                    <td>Airport Return Transfer</td>
                                    <td> <?php echo explode(",", $return_query[0]->transfer_date)[$key_rt] ?></td>
                                    <td> <?php echo explode(",", $return_query[0]->pickup)[$key_rt] ?></td>
                                    <td> <?php echo explode(",", $return_query[0]->dropoff)[$key_rt] ?></td>

                                </tr>
                            </tbody>
                        <?php endif ?>
                        <?php endforeach ?>
                        <?php endif ?>
                    </table>
                </div>
            </div>
            <br /><br />

        <?php endif ?>

        <?php if (isset($meal_query[0]->resturant_name) && $meal_query[0]->no_of_meals > 0) : ?>

            <div class="mt-4 second">
                <div class=" bg-primary ">
                    <h3 class="text-light" style="padding: 7px;">Meals Details</h3>
                </div>
                <div>
                    <table class="table table-bordered">
                        <thead align="center" style="background: #dbd5d5;">
                            <th> Resturant Name</th>
                            <th> Meal</th>
                            <th> Meal Type</th>
                        </thead>

                        <?php foreach (explode(",", $meal_query[0]->resturant_name) as $key => $value) : ?>
                            <tbody>
                                <tr align="center">
                                    <td><?php echo explode(",", $meal_query[0]->resturant_name)[$key] ?></td>
                                    <td><?php echo explode(",", $meal_query[0]->meal)[$key] ?></td>
                                    <td><?php echo explode(",", $meal_query[0]->meal_type)[$key] ?></td>
                                </tr>
                            </tbody>
                        <?php endforeach ?>

                    </table>
                </div>
            </div>
        <?php endif ?>

        
    </div>

    <div class="container">
    <div class="mt-4 second">
            <div class=" bg-primary ">
                <h3 class="text-light" style="padding: 7px;">Price</h3>
            </div>
            <div>
            <!-- <table class="table table-bordered">
                <tr align="center">
                                  <td></td>
                                  <td>Single Sharing</td>
                                  <td>Double Sharing</td>
                                  <td>Triple Sharing</td>
                                  <td>CWB</td>
                                  <td>CNB</td>
                                  <td>Infant</td>
                                </tr>

                                <tr align="center">
                                  <td><b>Sub Total</b></td>
                                  <td><?php echo explode(',',$price_info->adult_single_sharing)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->double_sharing)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->triple_sharing)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->child_cwb)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->cnb)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->cnb)[0] ?></td>
                                </tr>
                                <tr align="center">
                                  <td><b>Total Price</b></td>
                                  <td><?php echo explode(',',$price_info->adult_single_sharing)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->double_sharing)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->triple_sharing)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->child_cwb)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->cnb)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->cnb)[1] ?></td>
                                </tr>
                                <tr align="center">
                                  <td><b>Per PAX</b></td>
                                  <td><?php echo explode(',',$price_info->adult_single_sharing)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->double_sharing)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->triple_sharing)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->child_cwb)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->cnb)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->cnb)[2] ?></td>
                                </tr>
            </table> -->
            <?php if($package_query[0]->type == 'Package') : ?>
                <table class="table table-bordered">
                <tr align="center">
                                  <td></td>
                                  <td>Single Sharing</td>
                                  <td>Double Sharing</td>
                                  <td>Triple Sharing</td>
                                  <td>CWB</td>
                                  <td>CNB</td>
                                  <td>Infant</td>
                                </tr>

                                <tr align="center">
                                  <td><b>Sub Total</b></td>
                                  <td><?php echo explode(',',$price_info->adult_single_sharing)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->double_sharing)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->triple_sharing)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->child_cwb)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->cnb)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->infants)[0] ?></td>
                                </tr>
                                <tr align="center">
                                  <td><b>Total Price</b></td>
                                  <td><?php echo explode(',',$price_info->adult_single_sharing)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->double_sharing)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->triple_sharing)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->child_cwb)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->cnb)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->infants)[1] ?></td>
                                </tr>
                                <tr align="center">
                                  <td><b>Per PAX</b></td>
                                  <td><?php echo explode(',',$price_info->adult_single_sharing)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->double_sharing)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->triple_sharing)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->child_cwb)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->cnb)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->infants)[2] ?></td>
                                </tr>
                </table>
                <?php elseif($package_query[0]->type == 'Hotel') : ?>
                    <table class="table table-bordered">
                        <tr align="center">
                                  <td></td>
                                  <td>Single Sharing</td>
                                  <td>Double Sharing</td>
                                  <td>Triple Sharing</td>
                                  <td>CWB</td>
                                  <td>CNB</td>
                                </tr>

                                <tr align="center">
                                  <td><b>Sub Total</b></td>
                                  <td><?php echo explode(',',$price_info->adult_single_sharing)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->double_sharing)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->triple_sharing)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->child_cwb)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->cnb)[0] ?></td>
                                </tr>
                                <tr align="center">
                                  <td><b>Total Price</b></td>
                                  <td><?php echo explode(',',$price_info->adult_single_sharing)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->double_sharing)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->triple_sharing)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->child_cwb)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->cnb)[1] ?></td>
                                </tr>
                                <tr align="center">
                                  <td><b>Per PAX</b></td>
                                  <td><?php echo explode(',',$price_info->adult_single_sharing)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->double_sharing)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->triple_sharing)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->child_cwb)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->cnb)[2] ?></td>
                                </tr>
                </table>

                <?php else : ?>
                
                    <table class="table table-bordered">
                        <tr align="center">
                                  <td></td>
                                  <td>Adult</td>
                                  <td>Child</td>
                                  <td>Infant</td>
                                </tr>

                                <tr align="center">
                                  <td><b>Sub Total</b></td>
                                  <td><?php echo explode(',',$price_info->adult_single_sharing)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->child_cwb)[0] ?></td>
                                  <td><?php echo explode(',',$price_info->infants)[0] ?></td>
                                </tr>
                                <tr align="center">
                                  <td><b>Total Price</b></td>
                                  <td><?php echo explode(',',$price_info->adult_single_sharing)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->child_cwb)[1] ?></td>
                                  <td><?php echo explode(',',$price_info->infants)[1] ?></td>
                                </tr>
                                <tr align="center">
                                  <td><b>Per PAX</b></td>
                                  <td><?php echo explode(',',$price_info->adult_single_sharing)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->child_cwb)[2] ?></td>
                                  <td><?php echo explode(',',$price_info->infants)[2] ?></td>
                                </tr>
                </table>

                <?php endif ?>

            </div>
        </div>

        <!-- <div class="mt-4 second">
            <div class=" bg-primary ">
                <h3 class="text-light" style="padding: 7px;">Price</h3>
            </div>
            <div>
                <table class="table table-bordered">
                <tr align="center">
                                  <td></td>
                                  <td>Single Sharing</td>
                                  <td>Double Sharing</td>
                                  <td>Triple Sharing</td>
                                  <td>CWB</td>
                                  <td>CNB</td>
                                </tr>

                                <tr align="center">
                                  <td><b>Sub Total</b></td>
                                  <td><?php echo $proposalDetails['subtotal_adults'] ?></td>
                                  <td><?php echo $proposalDetails['subtotal_adults_double'] ?></td>
                                  <td><?php echo $proposalDetails['subtotal_adults_triple'] ?></td>
                                  <td><?php echo $proposalDetails['subtotal_childs'] ?></td>
                                  <td><?php echo $proposalDetails['subtotal_infants'] ?></td>
                                </tr>
                                <tr align="center">
                                  <td><b>Total Price</b></td>
                                  <td><?php echo $proposalDetails['totalprice_adult'] ?></td>
                                  <td><?php echo $proposalDetails['totalprice_adult_double'] ?></td>
                                  <td><?php echo $proposalDetails['totalprice_adult_triple'] ?></td>
                                  <td><?php echo $proposalDetails['totalprice_childs'] ?></td>
                                  <td><?php echo $proposalDetails['totalprice_infants'] ?></td>
                                </tr>
                                <tr align="center">
                                  <td><b>Per PAX</b></td>
                                  <td><?php echo $proposalDetails['perpax_adult'] ?></td>
                                  <td><?php echo $proposalDetails['perpax_double'] ?></td>
                                  <td><?php echo $proposalDetails['perpax_triple'] ?></td>
                                  <td><?php echo $proposalDetails['perpax_childs'] ?></td>
                                  <td><?php echo $proposalDetails['perpax_infants'] ?></td>
                                </tr>
                </table>
            </div>
        </div> -->
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('#editor8');
    </script>
    <script>
        var inclu = "";
        var exclu = "";
        var TnC = "";
        var canc_ply = "";

        ClassicEditor
            .create(document.querySelector('#editor1'))
            .then(editor => {
                inclu = editor.getData();
                editor.model.document.on('change:data', () => {
                    inclu = editor.getData();
                    // $('<input>').attr({type: 'hidden',id: 'Incl',name: 'Incl',value: editor}).appendTo('#hid_div');
                });
                console.error(editor);

            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor2'))
            .then(editor => {
                exclu = editor.getData();
                editor.model.document.on('change:data', () => {
                    exclu = editor.getData();
                    // $('<input>').attr({type: 'hidden',id: 'Incl',name: 'Incl',value: editor}).appendTo('#hid_div');
                });
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor3'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor4'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor5'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor6'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor7'))
            .then(editor => {
                TnC = editor.getData();
                editor.model.document.on('change:data', () => {
                    TnC = editor.getData();
                    // $('<input>').attr({type: 'hidden',id: 'tNc',name: 'tNc',value: editor}).appendTo('#hid_div1');
                });
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor8'))
            .then(editor => {
                canc_ply = editor.getData();
                editor.model.document.on('change:data', () => {
                    canc_ply = editor.getData();
                    // $('<input>').attr({type: 'hidden',id: 'canc_ply',name: 'canc_ply',value: editor8}).appendTo('#hid_div2');
                    // console.log("e.value",);
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</body>

</html>
