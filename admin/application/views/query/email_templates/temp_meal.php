<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Software</title>
    <link rel="stylesheet" href="Software.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css  "
    />
    <style>
    html,
    body {
      margin: 0;
      padding: 0;
    }

    html {
      height: 100%;
    }

    .items {
      width: 100%;
      text-align: left;
    }

    .items td,
    th {
      padding: 3px;
      border-collapse: collapse;
      border: double !important;
      white-space: nowrap;
    }

    .ck_data ul {
      list-style: none;
    }

    .ck_data li:before {
      content: '➢ ';
      margin: 8px 0 0 -12px;
    }

    * {
      box-sizing: border-box;
    }

    body {
      font-size: 15px;
      font-family: "Times New Roman", Times, serif !important;
      position: relative;
      min-height: 100%;
    }

    .res-img {
      width: 100%;
      height: auto;
    }

    #main-header {
      background: #E35C14;
      padding: 10px 20px;
      width: 100%;

      position: fixed;
      top: 0;
      left: 0;
      z-index: 8;
    }

    .logo-holder {
      width: 64px;
    }

    #pg-footer {
      background: #131919;
      color: #fff;
      padding: 10px 20px;
      width: 100%;

      position: absolute;
      bottom: 0;
      left: 0;
    }

    #pg-footer>p {
      font-size: 0.8em;
      text-align: center;
    }

    #body {
      padding-top: 100px;
      padding-bottom: 65px;
    }

    .container {
      position: relative;
    }

    .content {
      /* background: #C1E1ED; */
      margin: 20px 220px 20px 20px;
      padding: 20px;
      min-height: 480px;
    }

    .banner {
      background: #76C7C6;
      padding: 20px;
      height: 200px;
      width: 180px;
      position: absolute;
    }

    .banner.top {
      top: 0;
      right: 20px;
    }

    .banner.bottom {
      top: 220px;
      right: 20px;
    }

    /*** Media Queries ***/
    @media screen and (min-width: 1367px) {
      .threshold {
        margin: 0 auto;
        width: 1366px;
      }

      .content {
        margin-left: 200px;
        margin-right: 200px;
      }

      .banner {
        height: 300px;
        width: 180px;
      }

      .banner.top {
        top: 0;
        left: 0;
      }

      .banner.bottom {
        top: 0;
        right: 0;
      }
    }

    @media screen and (max-width: 720px) {
      .content {
        margin: auto;
      }

      .banner {
        margin: 20px;
        width: auto;
        height: auto;

        position: static;
        top: auto;
        right: auto;
        left: auto;
      }
    }

    .ck_data ul{
      margin-left: -2rem;
    }
  </style>

  </head>

  <body>
  <div id="body">
    <div class="threshold">
      <div class="container">
        <div class="content">
    <div class="maindiv">
      <div class="head">
        <div class="head1">Dear Sir/Ma’am,</div>
        <br></br>
        <div class="head2">
          <b>Warm Greetings from Diamond Tours LLC!!!</b>
        </div>

        <div class="head3">
          We are pleased to quote the best rate as per your below request:
        
          <br></br>
          <div></div>
          <!-- <b>**Any amendments in the dates of travel or number of passengers will attract a requote.**</b> -->
          <table class="items" border="1" cellspacing="0">
            <tr>
              <th rowspan="3" colspan="3">
                <h2>Meals Rates</h2>
              </th>
              <td><span style="color: red;">AED <?php echo $details->per_pax_adult ?></span> Per Adult </td>
            </tr>
            <?php if($details->per_pax_child > 0) : ?>
            <tr>
              <td><span style="color: red;">AED <?php echo $details->per_pax_child ?></span> Per Child</td>
            </tr>
            <?php endif ?>
          </table>
          <br />
          <br />

                <?php 
                    
                    $transfer_types = explode(",",$details->meals_data->transfer_type);
                    $meal = explode(",",$details->meals_data->meal);
                    $meal_type = explode(",",$details->meals_data->meal_type);
                    $no_of_meals = explode(",",$details->meals_data->no_of_meals);
                    $resturant_name = explode(",",$details->meals_data->resturant_name);
                    $resturant_type = explode(",",$details->meals_data->resturant_type);
                    
                    $lunch_count = 0;
                    $dinner_count = 0;
                    foreach ($meal as $key => $val) {
                        if($val == "Dinner"){
                            $dinner_count += $no_of_meals[$key];
                        } else {
                            $lunch_count += $no_of_meals[$key];
                        }
                    }
                    // meal
                    if(in_array("Dinner" ,$meal) && in_array("Lunch" ,$meal) )
                    {
                        $meal_final = "Dinner and Lunch";
                    }
                    else if(!in_array("Dinner" ,$meal) && in_array("Lunch" ,$meal) )
                    {
                        $meal_final = "Lunch";
                    }
                    else if(in_array("Dinner" ,$meal) && !in_array("Lunch" ,$meal) )
                    {
                        $meal_final = "Dinner";
                    }

                    // transfer type
                    if(in_array("without_transfer" ,$transfer_types) && in_array("with_transfer" ,$transfer_types) )
                    {
                        $transfer_types_final = "without_transfer and with_transfer";
                    }
                    else if(!in_array("without_transfer" ,$transfer_types) && in_array("with_transfer" ,$transfer_types) )
                    {
                        $transfer_types_final = "with_transfer";
                    }
                    else if(in_array("without_transfer" ,$transfer_types) && !in_array("with_transfer" ,$transfer_types) )
                    {
                        $transfer_types_final = "without_transfer";
                    }

                    // Meal Preference
                    if(in_array("Veg" ,$meal_type) && in_array("Non-Veg" ,$meal_type) && in_array("Jain" ,$meal_type) )
                    {
                        $meal_type_final = "Veg, Non-Veg and Jain";
                    }
                    else if(!in_array("Veg" ,$meal_type) && in_array("Non-Veg" ,$meal_type) && in_array("Jain" ,$meal_type) )
                    {
                        $meal_type_final = "Non-Veg and Jain";
                    }

                    else if(in_array("Veg" ,$meal_type) && !in_array("Non-Veg" ,$meal_type) && in_array("Jain" ,$meal_type) )
                    {
                        $meal_type_final = "Veg and Jain";
                    }

                    else if(in_array("Veg" ,$meal_type) && in_array("Non-Veg" ,$meal_type) && !in_array("Jain" ,$meal_type) )
                    {
                        $meal_type_final = "Veg and Non-Veg";
                    }

                    else if(in_array("Veg" ,$meal_type) && !in_array("Non-Veg" ,$meal_type) && !in_array("Jain" ,$meal_type) )
                    {
                        $meal_type_final = "Veg";
                    }
                    else if(!in_array("Veg" ,$meal_type) && in_array("Non-Veg" ,$meal_type) && !in_array("Jain" ,$meal_type) )
                    {
                        $meal_type_final = "Non-Veg";
                    }
                    else if(!in_array("Veg" ,$meal_type) && !in_array("Non-Veg" ,$meal_type) && in_array("Jain" ,$meal_type) )
                    {
                        $meal_type_final = "Jain";
                    }

                    // resturant_type
                    if(in_array("Standard" ,$resturant_type) && in_array("Premium" ,$resturant_type) )
                    {
                        $resturant_type_final = "Standard and Premium";
                    }
                    else if(!in_array("Standard" ,$resturant_type) && in_array("Premium" ,$resturant_type) )
                    {
                        $resturant_type_final = "Premium";
                    }
                    else if(in_array("Standard" ,$resturant_type) && !in_array("Premium" ,$resturant_type) )
                    {
                        $resturant_type_final = "Standard";
                    }
                
                ?>

                <table style="text-align:center" class="items" border="1" cellspacing="0">
                    <tr>
                        <th>Date</th>
                        <td colspan="3"><?php echo $details->date; ?></td>
                    </tr>
                    <tr>
                        <th>Meal Type</th>
                        <td colspan="3"><?php echo $meal_final ?></td>
                    </tr>
                    
                    <tr>
                        <th>Meal Preference</th>
                        <td colspan="3"><?php echo $meal_type_final ?></td>
                    </tr>
                    <tr>
                        <th rowspan="2">No Of Meal</th>
                        <th>Breakfast</th>
                        <th>Lunch</th>
                        <th>Dinner</th>
                    </tr>
                    <tr>
                        <td><?php echo '0' ?></td>
                        <td><?php echo $lunch_count ?></td>
                        <td><?php echo $dinner_count ?></td>
                    </tr>
                    <tr>
                        <th>Restaurant Type</th>
                        <td colspan="3"><?php echo $resturant_type_final ?></td>
                    </tr>
                    <tr>
                        <th rowspan="2">No. of Pax.</th>
                        <th style="text-align:center">Adults</th>
                        <th style="text-align:center" colspan="2">Child</th>
                    </tr>
                    <tr>
                        <td style="text-align:center"><?php echo $details->pax_adult ?></td>
                        <td style="text-align:center"colspan="2"><?php echo $details->pax_child ?></td>
                    </tr>
                </table>
        </div>

        <div class="head5 ck_data">
          <br />
          <br />
          <b><u>Above Rate Inclusive of:</u></b>
          <p><?php echo $details->inclusions ?></p>
        </div>
        <div class="head7">
          Kindly note that the above rates are only a quote, no rooms or
          services are booked or blocked and will be subject to availability at
          the time of booking.
        </div>
          <br />
        <div class="head8 ck_data">
          <b
            >Thanks & Regards<br />
            <?php echo $this->session->userdata('admin_username'); ?>
          </b>
        </div>
          <br />
        <div class="head9 ck_data">
          <span
            ><b><u>GENERAL TERMS AND CONDITIONS :</u></b></span> <br>
            <p><?php echo $details->conditions ?></p>
        </div>
        <div class="head10"> </div>
          <div class="left ck_data">
            <p>
              <u><b>Cancellation Terms: FIT</b> <br></u>
            </p>
            <p><?php echo $details->FIT ?></p>
          </div>
         <br>
          <div class="head11">
          <div class="right ck_data">
            <u><b>Cancellation Terms:  Groups (MICE)</b><br></u>
            <p><?php echo $details->MICE ?></p>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  </body>
</html>
