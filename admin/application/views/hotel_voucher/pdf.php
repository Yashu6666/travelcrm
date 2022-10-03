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
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <img src="<?php echo base_url('/public/image/logo.png'); ?>" alt="logo" style="margin-bottom: 15px;" width="100" class="my-3 ms-4">
</div>

<div class="mainDiv" style="background-color: #d9a927;text-align: center;">
        <h4 style="padding: 8px;"><i class="fa-solid fa-receipt"></i> Accommodation Voucher</h4>
    </div>
    <div class="mainDiv" style="background-color: #d9a927;">
        <h4 style="text-align: start;margin-left: 20px;padding:2px;align-items: center;display: flex;font-size: 20px;"><img src="<?php echo base_url('/public/image/page_icon.png'); ?>" style="width: 12px;"> Hotel Details</h4>
    </div>

<?php foreach (explode(',',$hotel[0]->nights) as $key => $value) : ?>

<table style="width: 100%; margin-top:20px">
  <tr>
    <th>Hotel Name</th>
    <th style="white-space: nowrap;"><?php print_r(explode(',',$hotel[0]->hotel_name)[$key]) ?> 
        <?php if(isset($hotel_details[$key]->hotelstars)) : ?>	
	    <?php echo str_repeat("⭐",$hotel_details[$key]->hotelstars); ?>
	    <?php endif ?>
    </th>
    <th>Confirmation Number</th>
    <th><?php print_r($hotel_confirmation[$key]->confirmation_id) ?></th>
    <th>Booking Date</th>
    <?php
        $created_date = new DateTime($guest->created_at);
        $booking_date = $created_date->format('d-M-Y');
        ?>
    <th><?php echo $booking_date ?></th>
  </tr>
</table>

<table style="width: 100%; margin-top:20px">
            <tr>
                <th>Check-in</th>
                <?php
                    $date = new DateTime(explode(',',$hotel[0]->checkin)[$key]);
					$check_in = $date->format('d-M-Y');

                    $date->modify('+' . explode(',',$hotel[0]->nights)[$key] . ' day');
                    $checkout =  $date->format('d-M-Y');
                ?>
                 <th><?php echo $check_in; ?></th>

                <th>No of Nights </th>
                <th><?php print_r(explode(',',$hotel[0]->nights)[$key]); ?></th>		
                				
                <th>Check-out </th>
                <th><?php echo $checkout; ?></th>
            </tr>
    </table>

    <table style="width:100%; margin-top:20px">
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
                        <td><?php print_r(explode(',',$hotel[0]->room_type)[$key]); ?></td>
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
            </table>
    <?php endforeach; ?>


    <div  style="background-color: #d9a927;">
    <h4 style="text-align: start;margin-left: 20px;padding:2px;align-items: center;display: flex;font-size: 20px;"><img src="<?php echo base_url('/public/image/user_icon.png'); ?>"style="width: 12px;"> Guest Details</h4>
    </div>

    <table style="width:100%;margin-top:20px">
            <thead>
                <tr>
                    <th>Guest Name:</th>
                    <th>Agent Name: </th>
                    <th>Agent Email Id:</th>
                    <th>Agent Mobile No:</th>

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
    <h4 style="text-align: start;margin-left: 20px;padding:4px;align-items: center;display: flex;font-size: 20px;"><img src="<?php echo base_url('/public/image/question_icon.png'); ?>"style="width: 12px;"> Note </h4>
    </div>
    <?php echo $impInfo ?>
</body>
</html>