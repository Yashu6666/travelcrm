<!DOCTYPE html>
<html>

<head>
    <title>PDF Create</title>
    <style type="text/css">

    </style>
    <style>
        table {
            caption-side: bottom;
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
            padding: 10px;
        }

        th,
        td {
            padding: 10px;
            white-space: nowrap;
        }
        .div_flex {
            display: flex;
        }

    </style>
</head>

<body>

    <div class="container-fluid">
        <img src="<?php echo base_url('/public/image/logo.png'); ?>" alt="logo" style="margin-bottom: 15px;" width="100" class="my-3 ms-4">
    </div>

    <div class="mainDiv" style="background-color: #d9a927;text-align: center;font-size: 20px;">
        <h4 style="padding: 20px;color:white"><i class="fa-solid fa-receipt"></i> Accommodation Voucher</h4>
    </div>
    <!-- <div class="mainDiv" style="background-color: #d9a927;">
        <h4 style="text-align: start; color:white; margin-left: 20px;padding:2px;align-items: center;display: flex;font-size: 20px;"><img src="<?php echo base_url('/public/image/page_icon.png'); ?>" style="width: 12px;"> Hotel Details</h4>
    </div> -->

    <div>
</div>
    <?php foreach (explode(',', $hotel[0]->hotel_name) as $key => $value) : ?>

        <div class="div_flex" style="height:auto;width:100%;background-color: #d9a927;margin-top:0px;font-size: 18px;">
        <h4 style="margin-left:20px;float: left;color:white; padding-top: 0px;padding-bottom:16px; width: 55%;">Hotel Name :
        <?php print_r(explode(',', $hotel[0]->hotel_name)[$key]) ?>
                        <?php if (isset($hotel_details[$key]->hotelstars)) : ?>
                            <span style="color: #efe717;">
                            <?php for($i=0;$i<$hotel_details[$key]->hotelstars;$i++) : ?>
                              *
                            <?php endfor ?>
                            </span>
                        <?php endif ?>      
        </h4>
    <h4 style="text-align:right;color:white;margin-left: auto; padding-top: 0px;padding-bottom:16px; width: 45%;">Confirmation Number : <?php print_r($hotel_confirmation[$key]->confirmation_id) ?>
    &nbsp;&nbsp;</h4>
    </div>
        <table style="width: 100%; margin-top:20px">
            <thead>
                <tr>
                    <!-- <th>Hotel Name</th> -->
                    <th>Check-in</th>
                    <th>No of Nights </th>
                    <!-- <th>Confirmation Number</th> -->
                    <th>Check-out </th>
                    <th colspan="2">Booking Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- <td><?php print_r(explode(',', $hotel[0]->hotel_name)[$key]) ?>
                        <?php if (isset($hotel_details[$key]->hotelstars)) : ?>
                            <span style="color: #efe717;">
                            <?php for($i=0;$i<$hotel_details[$key]->hotelstars;$i++) : ?>
                              *
                            <?php endfor ?>
                            </span>
                        <?php endif ?>
                    </td> -->
                    <?php
                    $date = new DateTime(explode(',', $hotel[0]->checkin)[$key]);
                    $check_in = $date->format('d-M-Y');
                    $date->modify('+' . explode(',', $hotel[0]->nights)[$key] . ' day');
                    $checkout =  $date->format('d-M-Y');
                    ?>
                    <td><?php echo $check_in; ?></td>
                    <?php
                    $created_date = new DateTime($guest->created_at);
                    $booking_date = $created_date->format('d-M-Y');
                    ?>
                    <td><?php print_r(explode(',', $hotel[0]->nights)[$key]); ?></td>
                    <!-- <td><?php print_r($hotel_confirmation[$key]->confirmation_id) ?></td> -->
                    <td><?php echo $checkout; ?></td>
                    <td colspan="2"><?php echo $booking_date ?></td>
                </tr>
            </tbody>

            <tr>
                <th>Room Type</th>
                <th>No of Rooms</th>
                <th>Adults</th>
                <th>Children</th>
                <th >Meals Board</th>
            </tr>
            <tbody>
                <tr>
                    <td><?php print_r(explode(',', $hotel[0]->room_type)[$key]); ?></td>
                    <td><?php echo $details->room; ?></td>
                    <td><?php echo $details->adult; ?></td>
                    <td><?php echo $details->child; ?></td>
                    <?php if ($board_arr[$key] == '') : ?>
                        <td>----</td>
                    <?php else : ?>
                        <td     >
                            <?php print_r($hotel_confirmation[$key]->board) ?>
                        </td>
                    <?php endif ?>
                </tr>
            </tbody>
        </table>

        <!-- <table style="width:100%; margin-top:20px">
            <tr>
                <th>Room Type</th>
                <th>No of Rooms</th>
                <th>Adults</th>
                <th>Children</th>
                <th>Children Ages</th>
                <th>Meals Board</th>
            </tr>
            <tbody>
                <tr>
                    <td><?php print_r(explode(',', $hotel[0]->room_type)[$key]); ?></td>
                    <td><?php echo $details->room; ?></td>
                    <td><?php echo $details->adult; ?></td>
                    <td><?php echo $details->child; ?></td>
                    <td>--</td>
                    <?php if ($board_arr[$key] == '') : ?>
                        <td>----</td>
                    <?php else : ?>
                        <td>
                            <?php print_r($hotel_confirmation[$key]->board) ?>
                        </td>
                    <?php endif ?>
                </tr>
            </tbody>
        </table> -->
    <?php endforeach; ?>


    <div style="background-color: #d9a927;">
        <h4 style="color:white;text-align: start;padding:20px;align-items: center;display: flex;font-size: 20px;">Guest Details</h4>
    </div>

    <table style="width:100%;margin-top:20px">
        <thead>
            <tr>
                <th>Guest Name</th>
                <th>Agent Name </th>
                <th>Agent Email Id</th>
                <th>Agent Mobile No</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php print_r($hotel_confirmation[0]->guest_name) ?></td>
                <td><?php echo $guest->b2bcompanyName ?></td>
                <td><?php echo $guest->b2bEmail ?></td>
                <td><?php echo $guest->b2bmobileNumber ?></td>
            </tr>
        </tbody>
    </table>

    <div style="background-color: #d9a927;">
        <h4 style="color:white;text-align: start;padding:20px;align-items: center;display: flex;font-size: 20px;"> Note </h4>
    </div>
    <?php echo $impInfo ?>
</body>

</html>