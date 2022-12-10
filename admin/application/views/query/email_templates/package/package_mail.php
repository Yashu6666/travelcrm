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
      padding: 5px 10px;
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
      <div class="head" style="width: fit-content;">
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
              <th rowspan="5">
                <h2>Package Rates</h2>
              </th>
              <td style="white-space: initial;">
                <?php if($details->perpax_adult > 0) : ?>
                  <span style="color: red;">AED <?php echo $details->perpax_adult ?></span> Per Adult<br/>
                <?php endif ?>
                <?php if($details->perpax_adult_single > 0) : ?>
                  <span style="color: red;">AED <?php echo $details->perpax_adult_single ?></span> Per Person on Single Sharing Basis<br/>
                <?php endif ?>
                <?php if($details->perpax_adult_double > 0) : ?>
                  <span style="color: red;">AED <?php echo $details->perpax_adult_double ?></span> Per Person on Double Sharing Basis<br/>
                <?php endif ?>
                <?php if($details->perpax_adult_triple > 0) : ?>
                  <span style="color: red;">AED <?php echo $details->perpax_adult_triple ?></span> Per Person on Triple Sharing Basis<br/>
                <?php endif ?>
                <!-- <span style="color: red;">AED ?php echo $details->perpax_adult ?></span> Per Adult ?php echo $details->room_sharing_types[0] != "" ? ($details->room_sharing_types[0] == "triple_sharing" ? "Per Person on Triple Sharing Basis" : "Per Person on Double Sharing Basis") : "" ?>  -->
              </td>
            </tr>
            <?php if($details->perpax_childs > 0) : ?>
            <tr>
              <td  style="white-space: initial;"><span style="color: red;">AED <?php echo $details->perpax_childs ?></span> Per Child With Bed</td>
            </tr>
            <?php endif ?>
            <?php if(isset($details->perpax_cnb) && $details->perpax_cnb > 0 ) : ?>
            <tr>
            <td style="white-space: initial;"><span style="color: red;">AED <?php echo $details->perpax_cnb ?></span> Per Child With Not Bed</td>
            </tr>
            <?php endif ?>
            <?php if($details->perpax_infants > 0) : ?>
            <tr>
              <td style="white-space: initial;"><span style="color: red;">AED <?php echo $details->perpax_infants ?></span> Per Infant</td>
            </tr>
            <?php endif ?>

          </table>
          <br />
          <br />

          <table class="items" border="1" cellspacing="0">
            <tr>
              <th>Hotel Name</th>
              <td colspan="3" style="white-space: normal;">
                  <?php foreach ($details->hotels as $key => $val) : ?>
                        <?php print_r($details->hotels[$key]->hotelname) ?> - <?php echo $details->hotelPrefrence ?>* - <?php print_r($details->build_room_types[$key]) ?> - <?php print_r($details->buildRoomType[$key]) ?><?php echo array_key_last($details->hotels) != $key ?  ', <br/>' : '' ?>
                    <?php endforeach ?>
              </td>
            </tr>

            <tr>
              <th>Check In Date</th>
              <td colspan="3"><?php echo $details->checkin ?></td>
            </tr>

            <tr>
              <th>Check Out Date</th>
              <td colspan="3"><?php echo $details->checkout ?></td>
            </tr>

            <tr>
              <th>No. of Nights</th>
              <td colspan="3"><?php echo $details->nights ?> Nights</td>
            </tr>

            <tr>
              <th rowspan="2">No. of Pax.</th>
              <th style="text-align:center">Adults</th>
              <th style="text-align:center">Child</th>
              <th style="text-align:center">Infant</th>
            </tr>

            <tr>
              <td style="text-align:center"><?php echo $details->pax_adult ?></td>
              <td style="text-align:center"><?php echo $details->pax_child ?></td>
              <td style="text-align:center"><?php echo $details->pax_infant ?></td>
            </tr>

            <tr>
              <th>No. of Rooms</th>
              <td colspan="3"><?php echo $details->no_of_room ?> Room(s)</td>
            </tr>
          </table>
        </div>

        <div class="head5 ck_data">
          <br />
          <b><u>Above Rate Inclusive of:</u></b>
          <p><?php echo $details->inclusions ?></p>
        </div>
        <div class="head7">
          Kindly note that the above rates are only a quote, no rooms or
          services are booked or blocked and will be subject to availability at
          the time of booking.
        </div>
        <br/>
        <div class="head8 ck_data">
          <b
            >Thanks & Regards<br />
            <?php echo $details->admin_name ?>
          </b>
        </div>
        <br/>

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
