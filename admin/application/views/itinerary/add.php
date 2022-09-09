<?php

$this
  ->load
  ->view('header'); ?>
<?php $this
  ->load
  ->view('itinerary/modal'); ?>
<div class="page-container">
  <!-- start sidebar menu -->
  <?php $this
    ->load
    ->view('side_bar'); ?>
  <!-- end sidebar menu -->
  <style>
    .btn-close {
      box-sizing: content-box;
      width: 1em;
      height: 1em;
      padding: 0.25em 0.25em;
      color: #000;
      background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAjklEQVRIie2Vyw2AIBQER3uQaIlarhwsRy+Y4AfCPuTmnEx0dwg+FH4MzIAz5FzIZlmAHfCixIXMHjqSDMAaHtyAqaD8nhnVQE4ilysSc3mJpLo8J/ms/CSeEH+7tozzK/GqpZX3FdKuInuh6Ra9vVDLYSwuT92TJSWjaJYocy5LLIdIkjT/XEPjH87PgwNng1K28QMLlAAAAABJRU5ErkJggg==) center/1em auto no-repeat;
      border: 0;
      border-radius: 0.375rem;
      opacity: .5;
    }

    .modal-title {
      margin-bottom: 0;
      line-height: var(--bs-modal-title-line-height);
    }

    .h5,
    h5 {
      font-size: 1.25rem !important;
      font-weight: 700 !important;
      line-height: 1.2 !important;
      color: var(--bs-heading-color) !important;
    }

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

    .width-input {
      width: 178%;
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
      margin-bottom: 100px;
    }

    .input {
      position: relative;
    }

    .input__field:focus+.input__label,
    .input__field:not(:placeholder-shown)+.input__label {
      -webkit-transform: translate(0.25rem, -65%) scale(0.8);
      transform: translate(0.25rem, -65%) scale(0.8);
      color: var(--color-accent);
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

    .btn {
      display: inline-block;
      padding: 6px 12px;
      margin-bottom: 0;
      font-size: 14px;
      font-weight: 400;
      line-height: 1.42857143;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      -ms-touch-action: manipulation;
      touch-action: manipulation;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-image: none;
      border: 1px solid transparent;
      border-radius: 4px !important;
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

    .bg-primary{
            background: #d9a927 !important;
        }

  </style>
  <!-- start page content -->
  <div class="page-content-wrapper">
    <div class="page-content">
      <div class="page-bar">
        <div class="page-title-breadcrumb">
          <div class=" pull-left">
            <div class="page-title">Add Itinerary</div>
          </div>
          <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li>&nbsp;<a class="parent-item" href="#">Itinerary</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>

            <li class="active">Add Itinerary</li>
          </ol>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">

          <div class="card-box">
            <form action="<?php echo site_url(); ?>itinerary/searchDetails" method="post">

              <div class="row ml-2">
                <div class="col-2">
                  <p class="ml-2"><b>Query ID</b>
                    <input type="text" name="query_id" value="<?php if (!empty($details['query_id'])) {
                                                                echo $details['query_id'];
                                                              } else echo ""; ?> " class="form-control" placeholder="Query ID">
                  </p>
                </div>
                <div class="mt-4">
                  <button type="submit" class="new_btn px-3">Search</button>
                </div>
              </div>

            </form>
            <h4 class="ml-4"></h4>

            <div class="row ml-4">

              <p class="ml-2"><b>Company Name</b>
                <input type="text" name="packagename" value="<?php echo isset($query->b2bcompanyName) ? $query->b2bcompanyName : "" ?>" id="packagename" class="form-control" placeholder="Company Name">
              </p>

              <p class="ml-2"><b>Check In:</b>
                <input type="date" name="startfrom" <?php echo isset($details['checkindate']) ? "readonly" : "" ?> value="<?php echo isset($details['checkindate']) ? $details['checkindate'] : "" ?>" id="startfrom" class="form-control" placeholder="Check In">
              </p>

              <p class="ml-4"><b>Check Out:</b>
                <input type="date" name="goingto" <?php echo isset($details['checkindate']) ? "readonly" : "" ?> value="<?php echo isset($details['checkoutdate']) ? $details['checkoutdate'] : "" ?>" id="goingto" class="form-control" placeholder="Check Out">
              </p>

              <p class="ml-2"><b>Nights:</b>
                <input class="form-control" type="text" id="no_days" value="<?php echo isset($details['nights']) ? $details['nights'] : "" ?>" name="no_days" readonly="" style="border: none;">
              </p>

              <div class="col-4 mt-4">
                <button data-bs-toggle="modal" data-bs-target="#emailSendModal" id="email_btn" name="email_btn" class="new_btn px-3" style="display:none">Send Email</button>
              </div>
            </div>
          </div>

        </div>
      </div>

      <?php if (isset($details)) : ?>
        <div class="modal fade" id="emailSendModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Send Itinerary To Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <table class="table border ">
                  <thead class="bg-primary">
                    <tr>
                      <th scope="col">Type</th>
                      <th scope="col">Destination</th>
                      <th scope="col">Nights</th>
                      <th scope="col">Pax Details</th>
                      <th scope="col">Travel Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $package->type ?></td>
                      <td><?php echo $package->goingTo ?></td>
                      <td><?php echo $package->night ?></td>
                      <td><?php echo $package->adult . ' adult ' . $package->child . ' child ' . $package->infant . ' infant' ?></td>
                      <td><?php echo $package->specificDate ?></td>
                    </tr>

                  </tbody>
                </table>

                <div class="row">
                  <div class="col">
                    <label class="input">
                      <input class="input__field  width-input" type="text" value="Itinerary" placeholder=" " autocomplete="off" />
                      <span class="input__label">Email Subject</span></span>
                    </label>
                  </div>
                  <div class="col">
                    <label class="input">
                      <input class="input__field width-input" id="cc_email" value="" type="text" placeholder=" " autocomplete="off" />
                      <span class="input__label">CC</span></span>
                    </label>
                  </div>
                </div>


                <div class="row mt-3">
                  <div class="col">
                    <label class="input">
                      <input class="input__field " id="cus_email" value="<?php echo $query->b2bEmail ?>" type="email" placeholder=" " autocomplete="off" />
                      <span class="input__label">Email </span></span>
                    </label>
                  </div>
                  <div class="col">
                    <label class="input">
                      <input class="input__field " type="text" id="cus_fname" value="<?php echo $query->b2bfirstName ?>" placeholder=" " autocomplete="off" />
                      <span class="input__label">First Name</span></span>
                    </label>
                  </div>
                  <div class="col">
                    <label class="input">
                      <input class="input__field " type="text" id="cus_lname" value="<?php echo $query->b2blastName ?>" placeholder=" " autocomplete="off" />
                      <span class="input__label">Last Name</span></span>
                    </label>
                  </div>
                  <div class="col">
                    <label class="input">
                      <input class="input__field " type="number" id="cus_mobile" value="<?php echo $query->b2bmobileNumber ?>" placeholder=" " autocomplete="off" />
                      <span class="input__label">Mobile</span></span>
                    </label>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <label class="input">
                      <!-- <input class="input__field " type="text" placeholder=" " autocomplete="off" />
                      <span class="input__label">Sender Email </span></span>
                    </label><br> -->
                    <div class="mt-2"> <b>Cheak In/Out</b> : <?php echo $package->specificDate ?> / <?php echo $package->noDaysFrom ?></div>
                    <div class="mt-2"> <b>Destinations</b> : <?php echo $package->goingTo ?></div>
                  </div>
                </div>
              </div>
              <hr>
              <div style="    margin-top: -30px;" class="modal-footer d-flex ">
                <div>
                  <button type="button" class="new_btn px-3" data-bs-dismiss="modal">Close</button>
                  <button type="button" id="it-modal-submit" id="modal-submit" class="new_btn px-3">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>



      <!-- display:none; -->
      <?php
      if (isset($details)) { ?>
        <div class="card-content" style="overflow: hidden;overflow-y: auto;">
          <div>
            <div id="resultdayiten">
              <div id="resultdayiten1" class="col-md-12 no-padding" style="padding: 5px;">
                <div style="margin-bottom:5px; margin-top: 5px; " class="">
                  <?php $accids = uniqid(); ?>

                  <!-- bootstrap start -->
                  <!-- bootstrap end -->
                  <?php
                  for ($i = 0; $i < $details['nights']; $i++) { ?>
                    <div class="panel-heading row panel-defaultchange mt-2" style="background: #d9a927;" onclick="clickaccordion('2261_1<?php echo $i ?>')">
                      <p class="ml-4" style="font-weight: bold;font-size: medium;">Day <?php echo $i + 1 ?> - <?php
                                                                                                              echo date('d-m-Y', strtotime($details['checkindate'] . ' + ' . $i . ' days'))

                                                                                                              ?>
                      </p><span class="" id="itntxt_256346" style=" margin-left: 60%;font-size: 12px;">No Hotel&nbsp;,&nbsp;No Activity&nbsp;,&nbsp;No SightSeeing Added</span>

                      <a href="javascript:void(0)" class="minus active ml-4"><i class="fa fa-angle-down large"></i></a>


                      <input type="hidden" id="accdnid_2261_1<?php echo $i ?>" name="accdnid_2261_1<?php echo $i ?>" value="active">

                      <input type="hidden" name="itnid_35787_2261_1<?php echo $i ?>" id="itnid_35787_2261_1<?php echo $i ?>" value="256346">
                    </div>

                    <div class="panel-body no-padding" id="accdresid_2261_1<?php echo $i ?>" style="display: none;">
                      <div class="">
                        <div class="panel-body mobilepanelbody">
                          <div class="col-md-12 no-padding no-margin">
                            <div class="col-md-12 no-padding">
                              <div class="panel panel-danger">
                                <div class="text-white" style="padding: 5px; background-color: #d9a927;">
                                  <p class="">Day <?php echo $i + 1 ?> - <?php
                                                                          echo date('d-m-Y', strtotime($details['checkindate'] . ' + ' . $i . ' days'))
                                                                          ?></p>

                                </div>

                                <div class="panel-body">

                                  <!-- <div class="col-md-12 no-padding">

              <div class="col-md-12 no-padding">
                <div class="form-group active">
                <label>Title</label>

                <input onclick="autosuggest_title_program('30785','2261','35787_2261_1');" onchange=" updateitendata('35787','2261','1','256346')" type="text" class="form-control whbg" name="title_35787_2261_1" id="title_35787_2261_1" value="">                   
              </div>
              </div>  
            
            
            <div class="col-md-4 " style="display:none;">  
             <label class="checkbox_popup checkbox_width_100 align_margin_bottom_0">
              <input type="checkbox" name="saveasMaster_35787_2261_1" id="saveasMaster_35787_2261_1" value="1">
              Save as Itinerary Description Master
              <span class="checkmark"></span>
            </label>
          </div>    
        </div>

        <div class="col-md-12 no-padding">
          <div class="form-group form-group1 active">
           <label>Program Description</label>
           <textarea onchange=" updateitendata()" rows="3" class="form-control whbg" cols="45" id="detail_35787_2261_1" name="detail_35787_2261_1"></textarea>                     
          
          
       </div>
     </div> -->
                                  <!-- <script>
            CKEDITOR.replace('detail_35787_2261_1', {});
            var detName = 'detail_35787_2261_1';
            CKEDITOR.instances[detName].on('paste', function () {
             updateitendata('35787', '2261', '1', '256346');
           });
            CKEDITOR.instances[detName].on('blur', function () {
             updateitendata('35787', '2261', '1', '256346');
           }); -->
                                  </script>
                                  <input type="hidden" name="startCityId_35787_2261_1" id="startCityId_35787_2261_1" value="30785">
                                  <input type="hidden" name="endCityId_35787_2261_1" id="endCityId_35787_2261_1" value="2261">



                                  <div class="">
                                    <div class="col-md-12 no-padding">

                                    <div class="panel panel-light-green" style="">
                                      <div class="" style="padding: 5px; background-color: #d9a927;">

                                        <div class="">
                                          <p class="d-flex justify-content-between">Hotel<a style="text-decoration:underline; float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?php echo $i ?>" id="hotelmodal">Add +</a></p>

                                          <span style="margin-left:65px;display:none;">
                                            <input type="radio" name="packagecategory_256346" id="packagecategory_256346_3" value="3" checked="checked" onclick="return DisplayGrid('3','256346','2261')">
                                            <label class="white" for="packagecategory_256346_3">Deluxe&nbsp;&nbsp;</label>
                                          </span>
                                        </div>
                                      </div>

                                      <div class="panel-body">
                                        <div class="panel-body table-responsive no-padding">
                                          <table class="table tablestyle hotelresult_256346" id="hotelresult_256346_2261<?php echo $i ?>">

                                            <thead>
                                              <tr class="alert alert-graylight">
                                                <th class="small smallbold">Hotel Name</th>
                                                <th class="small smallbold">Category</th>
                                                <th class="small smallbold">Room Type</th>
                                                <th class="small smallbold">No of Pax</th>
                                                <th class="small smallbold">CheckIn Date</th>
                                                <th class="small smallbold">CheckOut Date</th>
                                                <th class="small smallbold"></th>
                                              </tr>
                                            </thead>
                                            <tbody id="hotelbody<?php echo $i ?>"></tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                      <div class="panel panel-light-green " style="">
                                        <div class="" style="padding: 5px; background-color: #d9a927;">

                                          <div class="">
                                            <p class="d-flex justify-content-between">Transfer<a style="text-decoration:underline; float: right;" data-bs-toggle="modal" data-bs-target="#transferModal" data-id="<?php echo $i ?>" id="transfermodal" onclick="ViewAllTransfersHotels()">Add +</a></p>


                                            <span style="margin-left:65px;display:none;">
                                              <input type="radio" name="packagecategory_256346" id="packagecategory_256346_3" value="3" checked="checked" onclick="return DisplayGrid('3','256346','2261')">
                                              <label class="white" for="packagecategory_256346_3">Deluxe&nbsp;&nbsp;</label>
                                            </span>
                                          </div>
                                        </div>

                                        <div class="panel-body">
                                          <div class="panel-body table-responsive no-padding">
                                            <table class="table tablestyle " id="transfer_result_256346_2261<?php echo $i ?>">

                                              <thead>
                                                <tr class="alert alert-graylight">
                                                  <!-- <th class="small smallbold">Selected</th> -->
                                                  <th class="small smallbold">Transport Type</th>
                                                  <th class="small smallbold">Pax</th>
                                                  <th class="small smallbold">Form Date</th>
                                                  <th class="small smallbold">Pickup</th>
                                                  <th class="small smallbold">Drop Off</th>
                                                  <th class="small smallbold">Route Name</th>
                                                  <th class="sma ll smallbold" style="visibility: hidden;">Transport</th>

                                                  <!-- <th class="small smallbold"></th> -->
                                                </tr>

                                              </thead>
                                              <tbody id="transfer_body<?php echo $i ?>"> </tbody>

                                            </table>
                                          </div>
                                        </div>
                                      </div>


                                        <div class="panel panel-light-green">
                                          <div class="" style="padding: 5px; background-color: #d9a927;">

                                            <div class="">
                                              <p class="d-flex justify-content-between">Meal<a style="text-decoration:underline; float: right;" data-bs-toggle="modal" data-bs-target="#mealsModal" id="mealsmodal" data-id="<?php echo $i ?>" onclick="meals_click();">Add +
                                                  </a></p>

                                              <!-- <span style="margin-left:65px;display:none;">
   <input type="radio" name="packagecategory_256346" id="packagecategory_256346_3" value="3" checked="checked"  onclick="return DisplayGrid('3','256346','2261')">
   <label class="white" for="packagecategory_256346_3">Deluxe&nbsp;&nbsp;</label>
 </span> -->
                                            </div>
                                          </div>

                                          <div class="panel-body">
                                            <div class="panel-body table-responsive no-padding">
                                              <table class="table tablestyle hotelresult_256346" id="meals_result_256346_2261<?php echo $i ?>">
                                                <thead>
                                                  <tr class="alert alert-graylight">
                                                    <!-- <th class="small smallbold">Selected</th> -->
                                                    <!-- <th class="small smallbold">Date</th> -->
                                                    <th class="small smallbold">Transfer Type</th>
                                                    <th class="small smallbold">Resturant Name</th>
                                                    <th class="small smallbold">Resturant Type</th>
                                                    <th class="small smallbold">Meal</th>
                                                    <th class="small smallbold">Meal Type</th>
                                                    <th class="small smallbold">Adult</th>
                                                    <th class="small smallbold">Child</th>
                                                  </tr>
                                                </thead>
                                                <tbody id="meals_body<?php echo $i ?>"></tbody>
                                              </table>
                                            </div>
                                          </div>
                                        </div>

                                      <!-- <div class="col-md-12 no-padding">
 <div class="panel panel-light-green">
  <div class="" style="padding: 5px; background-color: cadetblue;">

   <div class=""><p>Flight<a
    style="text-decoration:underline; float: right;"
    data-bs-toggle="modal"
    data-bs-target="#exampleModal"
    onclick="ViewAllHotels('35787','2261','4553','1','Bang Kapi(Thailand)','256346')">View
  All</a></p>

  <span style="margin-left:65px;display:none;">
   <input type="radio" name="packagecategory_256346" id="packagecategory_256346_3" value="3" checked="checked"  onclick="return DisplayGrid('3','256346','2261')">
   <label class="white" for="packagecategory_256346_3">Deluxe&nbsp;&nbsp;</label>
 </span>
</div>
</div>

<div class="panel-body">
 <div class="panel-body table-responsive no-padding">
  <table class="table tablestyle hotelresult_256346" id="hotelresult_256346_2261">
   <tbody>
    <tr class="alert alert-graylight">
       <th class="small smallbold">Selected</th> -->
                                      <!-- <th class="small smallbold">Flight Name</th>
      <th class="small smallbold">Travel Date</th>
      <th class="small smallbold">Origin City</th>
      <th class="small smallbold">Destination City</th>
      <th class="small smallbold"></th>
    </tr>  


  </tbody></table>
</div>
</div>
</div> 
</div> -->


                                      <!-- <div class="col-md-12 no-padding">
  <div class="panel panel-light-green">
   <div class="" style="padding: 5px; background-color: cadetblue;">
    <div class="panel-title"><p>Excursion <a style="text-decoration:underline;float: right;"  data-bs-toggle="modal"
     data-bs-target="#exampleModal1" data-target="#myModalSightseen" data-toggle="modal" href="javascript:void(0);" onclick="getAgentInternalSightseen('35787','2261','4553','1','256346','')">View all</a></p></div>
   </div>
   <div class="panel-body">

    <div class="panel-body table-responsive no-padding">
     <table class="table tablestyle" id="sightseenresult_256346">
      <tbody><tr class="alert alert-graylight">
         <th class="small smallbold">Selected</th> -->
                                      <!-- <th class="small smallbold"><strong>Excursion</strong></th> -->
                                      <!--  <th class="small smallbold"><strong>Source</strong></th> -->
                                      <!-- <th class="small smallbold"><strong>Supplier</strong></th> -->
                                      <!-- <th class="small smallbold"><strong>Duration</strong></th> -->
                                      <!-- <th class="small smallbold"><strong>Adult Price</strong></th> -->
                                      <!-- <th class="small smallbold"><strong>Per Person Cost</strong></th> -->

                                      <!-- <th class="small smallbold"></th> -->
                                      <!-- </tr>

    </tbody></table>
  </div>
</div>

</div>
</div>  -->


                                        <div class="panel panel-light-green">
                                          <div class="text-white" style="padding: 5px; background-color: #d9a927;">

                                            <div class="">
                                              <p class="d-flex justify-content-between">Excursion<a style="text-decoration:underline; float: right;" data-bs-toggle="modal" data-bs-target="#excursionModal" id="excursionmodal" data-id="<?php echo $i ?>" onclick="excursion_click();">Add +
                                                  </a></p>

                                              <!-- <span style="margin-left:65px;display:none;">
   <input type="radio" name="packagecategory_256346" id="packagecategory_256346_3" value="3" checked="checked"  onclick="return DisplayGrid('3','256346','2261')">
   <label class="white" for="packagecategory_256346_3">Deluxe&nbsp;&nbsp;</label>
 </span> -->
                                            </div>
                                          </div>

                                          <div class="panel-body">
                                            <div class="panel-body table-responsive no-padding">
                                              <table class="table tablestyle hotelresult_256346" id="excursion_result_256346_2261<?php echo $i ?>">
                                                <thead>
                                                  <tr class="alert alert-graylight">
                                                    <!-- <th class="small smallbold">Selected</th> -->
                                                    <th class="small smallbold">Excursion Type</th>
                                                    <th class="small smallbold">Excursion Name</th>
                                                    <th class="small smallbold">Adult</th>
                                                    <th class="small smallbold">Child</th>
                                                    <th class="small smallbold">Infant</th>
                                                  </tr>
                                                </thead>
                                                <tbody id="excursion_body<?php echo $i ?>"></tbody>
                                              </table>
                                            </div>
                                          </div>
                                        </div>


                                    </div>

                                  </div>
                                </div>


                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php

                  } ?>
                  <div class="justify-content-center mt-4">
                  <a id="save_itinerary" name="save_itinerary" onclick="saveItinerary();" class="new_btn px-3" style="color:white;margin-left: 50% !important;">Save</a>
                  </div>
                <?php
              } ?>
                <?php
                // if (isset($details))
                // {
                //     for ($i = 1;$i <= $details['nights'];$i++)
                //     { 
                ?>

                <?php
                //     }
                // } 
                ?>
                </div>

              </div>

            </div>

          </div>

          <!-- <div id="multiitnrys" style="margin-top: 20px;"></div> -->

          <!-- <a href="#" class="btn btn-info btnNext" style="color:white;margin-left: 50% !important;;margin-top: 0% !important;" id="firstNext">Save</a><br/> -->
        </div>

    </div>
  </div>
  <!-- new -->
  <!-- <a href="#" class="btn btn-info btnNext" style="color:white;" id="firstNext">Save</a> -->

</div>



<?php $this->load->view('footer'); ?>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
  const btn = document.getElementById("it-modal-submit");
  btn.addEventListener("click", () => {
    let q_id = '<?php echo $details['query_id'] ?>';
    console.log(q_id);
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('/itinerary/sendMailItinerary') ?>",
      data: {
        q_id: q_id
      },
      success: function(result) {
        toastr.success("Email Sent Successfully");
        console.log("email sent");
      },
      error: function() {
        console.log("Error");
        toastr.error("Error while sending email");
      },
    });


  })
</script>


<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/package.js"></script>

<script type="text/javascript">
  // $( document ).ready(function() {


  function saveItinerary() {

    $('#email_btn').attr('style', 'display:block;')
    var days = '<?php echo !empty($details['nights']) ? $details['nights'] : "0" ?>';


    var query_id = '<?php echo $details['query_id'] ?>';




    for (var i = 0; i < days; i++) {
      var day = parseInt(i) + parseInt(1);
      var hotel_data_hotelname = $.trim($(".hotel_data_hotelname" + i).text());
      var hotel_data_hotelstar = $.trim($(".hotel_data_hotelstar" + i).text());
      var hotel_data_roomtype = $.trim($(".hotel_data_roomtype" + i).text());
      var hotel_data_pax = $.trim($(".hotel_data_pax" + i).text());
      var hotel_data_checkin = $.trim($(".hotel_data_checkin" + i).text());
      var hotel_data_checkout = $.trim($(".hotel_data_checkout" + i).text());

      var transfer_data_type = $.trim($(".transfer_data_type" + i).text());
      var transfer_data_pax = $.trim($(".transfer_data_pax" + i).text());
      var transfer_data_fromdate = $.trim($(".transfer_data_fromdate" + i).text());
      var transfer_data_pickup = $.trim($(".transfer_data_pickup" + i).text());
      var transfer_data_dropoff = $.trim($(".transfer_data_dropoff" + i).text());
      var transfer_data_routename = $.trim($(".transfer_data_routename" + i).text());
      var transfer_data_type = $.trim($(".transfer_data_type" + i).text());

      
      var meals_transfer_type = $.trim($(".meals_transfer_type" + i).text());
      var meal_data_resturant_type = $.trim($(".meal_data_resturant_type" + i).text());
      var meal_data_resturant_name = $.trim($(".meal_data_resturant_name" + i).text());
      var meal_data_meal = $.trim($(".meal_data_meal" + i).text());
      var meal_data_type = $.trim($(".meal_data_type" + i).text());
      var meal_data_adult = $.trim($(".meal_data_adult" + i).text());
      var meal_data_child = $.trim($(".meal_data_child" + i).text());


      var excursion_data_excursion_type = $.trim($(".excursion_data_excursion_type" + i).text());
      var excursion_data_excursion_name = $.trim($(".excursion_data_excursion_name" + i).text());
      var excursion_data_excursion_adult = $.trim($(".excursion_data_excursion_adult" + i).text());
      var excursion_data_excursion_child = $.trim($(".excursion_data_excursion_child" + i).text());
      var excursion_data_excursion_infant = $.trim($(".excursion_data_excursion_infant" + i).text());


      $.ajax({
        type: "POST",
        url: '<?php echo site_url(); ?>/itinerary/saveItinerary',
        data: {
          'hotel_data_hotelname': hotel_data_hotelname,
          'hotel_data_hotelstar': hotel_data_hotelstar,
          'hotel_data_roomtype': hotel_data_roomtype,
          'hotel_data_pax': hotel_data_pax,
          'hotel_data_checkin': hotel_data_checkin,
          'hotel_data_checkout': hotel_data_checkout,
          'transfer_data_type': transfer_data_type,
          'transfer_data_pax': transfer_data_pax,
          'transfer_data_fromdate': transfer_data_fromdate,
          'transfer_data_pickup': transfer_data_pickup,
          'transfer_data_dropoff': transfer_data_dropoff,
          'transfer_data_routename': transfer_data_routename,
          'transfer_data_type': transfer_data_type,
          'meal_data_resturant_name': meal_data_resturant_name,
          'meal_data_resturant_type': meal_data_resturant_type,
          'meals_transfer_type': meals_transfer_type,
          'meal_data_meal': meal_data_meal,
          'meal_data_type': meal_data_type,
          'meal_data_adult': meal_data_adult,
          'meal_data_child': meal_data_child,
          'excursion_data_excursion_type': excursion_data_excursion_type,
          'excursion_data_excursion_name': excursion_data_excursion_name,
          'excursion_data_excursion_adult': excursion_data_excursion_adult,
          'excursion_data_excursion_child': excursion_data_excursion_child,
          'excursion_data_excursion_infant': excursion_data_excursion_infant,
          'query_id': query_id,
          'day': day
        },
        dataType: 'JSON',
        success: function(data) {
          console.log("success");
        }
      });

    }


    // alert(('#hotelresult_256346_22610 tbody#hotelbody0 .hotel_data_hotelname0').text());
  }

  function clickaccordion(accdnid) {

    // $("#accdresid_2261_11").hide();

    var accdval = $("#accdnid_" + accdnid).val();

    if (accdval == 'active') {
      $("#accdresid_" + accdnid).show();
      $("#accdnid_" + accdnid).val('minuscl');
    } else {
      $("#accdresid_" + accdnid).hide();
      $("#accdnid_" + accdnid).val('active');
    }


    var days = '<?php !empty($details['nights']) ? $details['nights'] : "0" ?>';

    for (var i = 1; i <= days; i++) {

      if (accdnid == "2261_1" + i) {

      } else {
        console.log("accdresid__2261_1" + i);
        $("#accdresid_2261_1" + i).hide();
      }

    }
  }
  $("#start_date").change(function() {
    // alert($(this).val()); 

    var s_date = $(this).val();
    var result = new Date(s_date);
    $("#s_date").val(result.toDateString());
  });

  // });
</script>

<script>
  $("#no_nights").change(function() {
    var no_nights = $("#no_nights").val();
    var s_date = $("#s_date").val();
    var result = new Date(s_date);
    result.setDate(result.getDate() + Number(no_nights));
    $("#e_date").val(result.toDateString());

    $("#from_day").val(s_date);
    $("#to_day").val(result.toDateString());

    $("#itn_count").val(1 + Number(no_nights));
    $("#itndays").val(1 + Number(no_nights));
    $("#nightcountres").text(no_nights);
    $("#daycountres").text(1 + Number(no_nights));
    $("#check_out_date").val(result.toDateString());
    $("#check_in_date").val(s_date);
    $("#no_days").val(1 + Number(no_nights));
  });
</script>





<script type="text/javascript">
  $(document).ready(function() {

    $(document).on('click', '#addCity', function() {

      var itncity_name = $("#itncity_name").val();
      var no_nights = $("#no_nights").val();
      var from_day = $("#s_date").val();
      $("#Hotel_name_city").val(itncity_name);


      //Calculating To Date
      // var s_date = new Date(from_day);
      // var result = new Date(s_date);
      // result.setDate(result.getDate() + Number(no_nights));
      // $("#e_date").val(result.toDateString());
      var to_day = $("#to_day").val();

      //$("#itn_count").val(1 + Number(no_nights));     

      $.ajax({
        type: "POST",
        url: '<?php echo site_url(); ?>/itinerary/add_cities',
        data: {
          'itncity_name': itncity_name,
          'no_nights': no_nights,
          'from_day': from_day,
          'to_day': to_day
        },
        dataType: 'JSON',
        success: function(data) {

          $("#itncity_name").val('');
          $("#no_nights").val('');
          $("#from_day").val('');
          $("#to_day").val('');

          $("#city_display td").remove();

          var html = "";
          $.each(data, function(i, item) {

            html = '<tr>';
            html += '<td class="center"><input type="text" class="form-control" name="finalCityName[]" id="finalCityName" style="border: none;" value="' + item.city_name + '"></td>';
            html += '<td class="center"><input type="number" class="form-control" id="finalNoNights" name="finalNoNights[]" style="border: none;" value="' + item.no_nights + '"></td>';
            html += '<td class="center"><input type="text"  class="form-control" id="finalFromDay" name="finalFromDay[]"  style="border: none;" value="' + item.start_date + '"></td>';
            html += '<td class="center"><input type="text" class="form-control" id="finalToDay" name="finalToDay[]" style="border: none;" value="' + item.to_date + '"></td>';
            html += '</tr>';

            $('#city_display tbody').append(html);
            $('#city_display tbody').show();


          });
        }


      });



    });
  });
</script>

<script type="text/javascript">
  // hotel modal script start //

    // let adult_pax = <?php echo ($package->adult) ?>
    // let child_pax = <?php echo ($package->child) ?>
    // let infant_pax = <?php echo ($package->child) ?>
    // let total_pax = <?php echo ((int)$package->adult + (int)$package->child) ?>

  $('#searchHotelButton').on('click', function() {
    // $(this).find('form').trigger('reset');
    var modalid = $("#modal_hotel").val();
    var Hotel_name_city_select = $("#Hotel_name_city_select").val();
    var selectStarRating = $("#selectStarRating").val();
    var buildHotelName = $("#buildHotelName").text();

    var buildRoomType = $("#buildRoomType").val();

    var check_in_date = $("#check_in_date").val();
    var check_out_date = $("#check_out_date").val();
    // var no_pax =  $("#no_pax").val();
    // var modalid= $("#modalid").val();


    var tabl = "";
    tabl = '<tr class="odd gradeX">';
    tabl += '<td class="hotel_data_hotelname' + modalid + '" >' + buildHotelName + '</td>';
    tabl += '<td class="hotel_data_hotelstar' + modalid + '">' + selectStarRating + '</td>';
    tabl += '<td class="hotel_data_roomtype' + modalid + '">' + buildRoomType + '</td>';
    tabl += '<td class="hotel_data_pax' + modalid + '">' + <?php echo ((int)$package->adult + (int)$package->child) ?> + '</td>';
    tabl += '<td class="hotel_data_checkin' + modalid + '">' + check_in_date + '</td>';
    tabl += '<td class="hotel_data_checkout' + modalid + '">' + check_out_date + '</td>';
    tabl += '</tr>';
    // $('#hotelbody').append(tabl);
    // $("#searchhotel").hide();
    $("#exampleModal").modal('hide');
    // $("#modalid1").val(modalid);
    // $('#allhotel').show();


    $("#hotelresult_256346_2261" + modalid + " tbody#hotelbody" + modalid).empty().append(tabl);
    // $("#hotelresult_256346_2261"+modalid+" tbody#hotelbody"+modalid).append(tabl);


    $("#exampleModal").modal('hide');
  });


  // hotel modal script end //

  // transfer modal script start //

  $('#searchTransferButton').on("click", function() {


    var transfertype = $("#transfertype").val();
    var type = '';
    if (transfertype == 'round') {
      type = "Point to Point Transfer";

    } else if (transfertype == 'oneway') {
      type = "Internal Transfer";
    }

    var transfer = $('input[name="colorRadio"]:checked').val();

    var transfer_from_date = $("#transfer_from_date").val();
    var pickupinternal = $("#pickupinternal").val();
    var dropoffinternal = $("#dropoffinternal").val();
    var route_nameinternal = $("#route_nameinternal").val();
    var modalid = $("#modal_transfer").val();
    var transfer_body = "";
    transfer_body = '<tr class="odd gradeX">';
    transfer_body += '<td class="transfer_data_type' + modalid + '">' + type + '</td>';
    transfer_body += '<td class="transfer_data_pax' + modalid + '">' + <?php echo ((int)$package->adult + (int)$package->child) ?> + '</td>';
    transfer_body += '<td class="transfer_data_fromdate' + modalid + '">' + transfer_from_date + '</td>';
    transfer_body += '<td class="transfer_data_pickup' + modalid + '">' + pickupinternal + '</td>';
    transfer_body += '<td class="transfer_data_dropoff' + modalid + '">' + dropoffinternal + '</td>';
    transfer_body += '<td class="transfer_data_routename' + modalid + '">' + route_nameinternal + '</td>';
    transfer_body += '<td class="transfer_data_type' + modalid + '" style="visibility: hidden;">' + transfer + '</td>';
    transfer_body += '</tr>';

    // $('#transfer_body').append(transfer_body);
    // alert("hi");

    // alert(modalid);
    $("#transfer_result_256346_2261" + modalid + " tbody#transfer_body" + modalid).empty().append(transfer_body);

    $("#transferModal").modal('hide');

  });
  // transfer modal script end //

  // meals modal script start //

  $('#searchMealsButton').on("click", function() {


    var modalid = $("#modal_meals").val();
    // var meals_date =  $("#meals_date").val();
    var resturant_name = $("#resturant_name").val();

    var resturant_type = $("#resturant_type").val();
    var meals_transfer_type = document.querySelector('input[name="transfer_with_or_without"]:checked').value;
    
    var meal = $("#meal").val();

    var meal_type = $("#meal_type").val();

    var meal_adult = $("#meal_adult").val();
    var meal_child = $("#meal_child").val();

    var meals_body = "";
    meals_body = '<tr class="odd gradeX">';
    // meals_body += '<td class="center">' + meals_date + '</td>';
    meals_body += '<td class="meals_transfer_type' + modalid + '" >' + meals_transfer_type + '</td>';
    meals_body += '<td class="meal_data_resturant_name' + modalid + '" >' + resturant_name + '</td>';
    meals_body += '<td class="meal_data_resturant_type' + modalid + '" >' + resturant_type + '</td>';
    meals_body += '<td class="meal_data_meal' + modalid + '">' + meal + '</td>';
    meals_body += '<td class="meal_data_type' + modalid + '">' + meal_type + '</td>';
    meals_body += '<td class="meal_data_adult' + modalid + '">' + meal_adult + '</td>';
    meals_body += '<td class="meal_data_child' + modalid + '">' + meal_child + '</td>';
    meals_body += '</tr>';

    // $('#meals_body').append(meals_body);


    $("#meals_result_256346_2261" + modalid + " tbody#meals_body" + modalid).empty().append(meals_body);

    $("#mealsModal").modal('hide');

  });
  // meals modal script end //


  // Excursion modal script start //

  $('#searchExcursionButton').on("click", function() {


    var modalid = $("#modal_excursion").val();
    var excursion_type = $("#excursion_type").val();
    var excursion_name = $("#excursion_name").val();
    var excursion_adult = $("#excursion_adult").val();
    var excursion_child = $("#excursion_child").val();
    var excursion_infant = $("#excursion_infant").val();

    var excursion_body = "";
    excursion_body = '<tr class="odd gradeX">';
    excursion_body += '<td class="excursion_data_excursion_type' + modalid + '">' + excursion_type + '</td>';
    excursion_body += '<td class="excursion_data_excursion_name' + modalid + '">' + excursion_name + '</td>';
    excursion_body += '<td class="excursion_data_excursion_adult' + modalid + '">' + excursion_adult + '</td>';
    excursion_body += '<td class="excursion_data_excursion_child' + modalid + '">' + excursion_child + '</td>';
    excursion_body += '<td class="excursion_data_excursion_infant' + modalid + '">' + excursion_infant + '</td>';
    excursion_body += '</tr>';



    $("#excursion_result_256346_2261" + modalid + " tbody#excursion_body" + modalid).empty().append(excursion_body);

    $("#excursionModal").modal('hide');

  });
  // Excursion modal script end //





  $(document).ready(function() {

    $(document).on('click', '#hotelmodal', function() {
      var modalid_hotel = $(this).data('id');
      $("#modal_hotel").val(modalid_hotel);

    });
    $(document).on('click', '#transfermodal', function() {
      var modalid_transfer = $(this).data('id');
      // alert(modalid_transfer);
      $("#modal_transfer").val(modalid_transfer);

    });
    $(document).on('click', '#mealsmodal', function() {
      var modalid_meals = $(this).data('id');
      // alert(modalid);
      $("#modal_meals").val(modalid_meals);

    });

    $(document).on('click', '#excursionmodal', function() {
      var modalid_excursion = $(this).data('id');
      // alert(modalid);
      $("#modal_excursion").val(modalid_excursion);

    });



    // $('#transfertype').on('change', function() {

    //     var transfer_type=$("#transfertype").val();
    //     var pickup=$("#pickupinternal").val();
    //     var dropoff=$("#dropoffinternal").val();
    //   $('#route_nameinternal').val();
    //     $.ajax({
    //       type:"POST",
    //       dataType: "json",
    //       url:'<?php echo site_url(); ?>/itinerary/getTransfer',
    //       data:{'dropoff':dropoff,'pickup':pickup,'transfer_type':transfer_type,'type':'get_transfer_type'},
    //       success:function(response){
    //         console.log(response.data.length);
    //         $('#pickupinternal').empty();
    //         $("#pickupinternal").html('<option value="dropup">dropup12</option>');

    //           var options=""
    //           for(var i=0;i<response.data.length;i++){
    //           options += '<option value="'+response.data[i].start_city+'">'+response.data[i].start_city+'</option>';

    //           }


    //         $("#pickupinternal").append(options);

    //           }
    //         });

    //     });

    $('#transfertype').on('change', function() {
      $('#pickupinternal').empty();
      $('#dropoffinternal').empty();
      $('#route_nameinternal').val();
      var transfer_type = $("#transfertype").val();
      var pickup = $("#pickupinternal").val();
      var dropoff = $("#dropoffinternal").val();
      $('#route_nameinternal').val();
      $.ajax({
        type: "POST",
        dataType: "json",
        url: '<?php echo site_url(); ?>/itinerary/getTransfer',
        data: {
          'dropoff': dropoff,
          'pickup': pickup,
          'transfer_type': transfer_type,
          'type': 'get_dropup'
        },
        success: function(response) {
          $("#pickupinternal").html('<option value="dropup">Pick up</option>');

          var options = ""
          for (var i = 0; i < response.length; i++) {
            options += '<option value="' + response[i].start_city + '">' + response[i].start_city + '</option>';

          }


          $("#pickupinternal").append(options);

        }
      });

    });


    $('#pickupinternal').on('change', function() {
      $('#dropoffinternal').empty();
      $('#route_nameinternal').val();
      var transfer_type = $("#transfertype").val();
      var pickup = $("#pickupinternal").val();
      var dropoff = $("#dropoffinternal").val();

      $.ajax({
        type: "POST",
        dataType: "json",
        url: '<?php echo site_url(); ?>/itinerary/getTransfer',
        data: {
          'dropoff': dropoff,
          'pickup': pickup,
          'transfer_type': transfer_type,
          'type': 'get_dropoff'
        },
        success: function(response) {
          $("#dropoffinternal").html('<option value="drop off">Pick up</option>');

          var options = ""
          for (var i = 0; i < response.length; i++) {
            options += '<option value="' + response[i].dest_city + '">' + response[i].dest_city + '</option>';

          }

          $("#dropoffinternal").append(options);

        }


      });


    });

    $('#dropoffinternal').on('change', function() {
      $('#route_nameinternal').val();
      var transfer_type = $("#transfertype").val();
      var pickup = $("#pickupinternal").val();
      var dropoff = $("#dropoffinternal").val();
      $.ajax({
        type: "POST",
        dataType: "json",
        url: '<?php echo site_url(); ?>/itinerary/getTransfer',
        data: {
          'dropoff': dropoff,
          'pickup': pickup,
          'transfer_type': transfer_type,
          'type': 'get_route_name'
        },
        success: function(response) {
          console.log(response);
          $("#route_nameinternal").val(response[0].route_name);
        }
      });
    });


    $('#excursion_type').on('change', function() {
      //  function fetchexcursion(){
      $('#excursion_name').empty();
      var excursion_type = $("#excursion_type").val();

      $.ajax({
        type: "POST",
        dataType: "json",
        url: '<?php echo site_url(); ?>/itinerary/get_excursion',
        data: {
          'excursion_type': excursion_type
        },
        success: function(response) {
          console.log(response.data);
          var options = ""
          for (var i = 0; i < response.data.length; i++) {
            options += '<option value="' + response.data[i].tourname + '">' + response.data[i].tourname + '</option>';

          }

          $("#excursion_name").append(options);

        }
      })

    });


    // $(document).on('click','#searchHotelButton', function() {


    // var fromdate =  $("#check_in_date").val();


    // if(fromdate == ''){
    //       alert('Please Enter Check In Date');
    //       $("#check_in_date").focus();
    //       return false;
    //   }
    //   var nights = $("#nights").val();
    //   if(nights == "0"){
    //       alert('Please Enter number of nights to stay');
    //       $("#nights").focus();
    //       return false;
    //   }  

    //   var todate = $("#check_out_date").val();
    //   var rating = $("#selectStarRating").val();

    //     $.ajax({
    //           type:"POST",
    //           url:'<?php echo site_url(); ?>/package/save_search_query',
    //           data:{'fromdate':fromdate,'nights':nights,'todate':todate,'rating':rating},
    //           dataType:'json',
    //           success:function(data)
    //           {

    //            if(data == "")
    //            {
    //             $("#norecords").append("No Records Found");
    //            }

    //       $.each(data, function(keyName, keyValue) {
    //         var modalid= $("#modalid").val();
    //       var tabl = "";
    //             tabl = '<tr class="odd gradeX">';
    //             tabl += '<td class="center"> <input type="checkbox"></td>';
    //             tabl += '<td class="center">' + keyValue.hotelname + '</td>';
    //             tabl += '<td class="center">' + keyValue.hotelstars + '</td>';
    //             tabl += '<td class="center">' + keyValue.supplier + '</td>';
    //             tabl += '<td class="center">' + keyValue.roomtype + '</td>';
    //             tabl += '<td class="center">' + keyValue.hotelstars + '</td>';
    //             tabl += '<td class="center">' +modalid+ '</td>';
    //             tabl += '</tr>';
    //                   $('#hotelsearchtablebody').append(tabl);
    //                   $("#searchhotel").hide();

    //                   $("#modalid1").val(modalid);
    //               $('#allhotel').show();

    //           });

    //           }

    //       });




    //   });

  });

  function ViewAllHotelsNew() {
    $("#exampleModal").show();
  }

  function ViewAllTransfersHotels() {
    $("#transferModal").show();
  }


  function meals_click() {
    $("#mealsModal").show();
  }

  function excursion_click() {
    $("#excursionModal").show();
  }
</script>

<script type="text/javascript">
  // $(function(){
  //   $(document).on("click","#searchTransferButton",function(){


  //       var transfertype =  $("#transfertype").val();
  //       var transfer_from_date =  $("#transfer_from_date").val();
  //       var pickupinternal =  $("#pickupinternal").text();

  //       var dropoffinternal =  $("#dropoffinternal").val();

  //       var route_nameinternal =  $("#route_nameinternal").val();

  //               var transfer_body = "";
  //               transfer_body = '<tr class="odd gradeX">';
  //               transfer_body += '<td class="center">' + transfertype + '</td>';
  //               transfer_body += '<td class="center">' + transfer_from_date + '</td>';
  //               transfer_body += '<td class="center">' + pickupinternal + '</td>';
  //               transfer_body += '<td class="center">' + 0 + '</td>';
  //               transfer_body += '<td class="center">' + dropoffinternal + '</td>';
  //               transfer_body += '<td class="center">' + route_nameinternal + '</td>';
  //               transfer_body += '</tr>';

  //           $('#transfer_body').append(transfer_body);

  //           var modalid= $("#modal_transfer").val();
  //           alert("#transfer_result_256346_2261"+modalid+" tbody");
  //           $("#transfer_result_256346_2261"+modalid+" tbody").append(transfer_body);

  //           $("#transferModal").modal('hide');

  //   });
  // });
</script>

<script type="text/javascript">
  $(function() {
    $(document).on("click", "#selectedHotels", function() {
      var getSelectedRows = $("#hotelsearchtable input:checked").parents("tr");
      console.log("🚩 ~ file: add.php ~ line 1538 ~ $ ~ getSelectedRows", getSelectedRows)
      var modalid1 = $("#modalid1").val();
      alert(modalid1);
      $("#hotelresult_256346_2261" + modalid1 + " tbody").append(getSelectedRows);
    });
  });
</script>

<script type="text/javascript">
  // $(function(){
  //   $(document).on("click","#selectedHotels",function(){
  //     var getSelectedRows = $("#hotelsearchtable input:checked").parents("tr");
  //     var modalid1= $("#modalid1").val();
  //     alert(modalid1);
  //     $("#hotelresult_256346_2261"+modalid1+" tbody").append(getSelectedRows);
  //   });
  // });
  // 
</script>


<script type="text/javascript">
  $(function() {
    $(document).on("click", "#selectedsight", function() {
      var getSelectedRows = $("#sightsearchtablebody input:checked").parents("tr");

      $("#sightseenresult_256346 tbody").append(getSelectedRows);
    });
  });
</script>

<script>
  $('#selectStarRating').on('change', function() {
    // $("#buildHotelName").empty();

    var category = $("#selectStarRating").val();
    var city = $('#Hotel_name_city_select').val();


    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/get_hotels',
      data: {
        'city': city,
        'category': category
      },
      success: function(response) {
        var i;
        $('#buildHotelName').empty().append($("<option></option>"));
        for (i = 0; i < response.length; ++i) {
          var newOption = $('#buildHotelName').append($("<option></option>").attr("value", response[i].id).text(response[i].hotelname));

        }
        // response ='';
      }

    })
  });

  $('#buildHotelName').on('change', function() {
    var hotel_id = $('#buildHotelName').val();
    // $("#buildRoomType").empty();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/get_room_type',
      data: {
        'hotel_id': hotel_id
      },
      success: function(response) {
        console.log("🚩 ~ file: add.php ~ line 1612 ~ $ ~ response", response)
        var j;
        // $('#buildRoomType').append($("<option>Select Room Type</option>"));
        for (j = 0; j < response.length; ++j) {
          // do something with `substr[i]`
          console.log(response[j]);
          // $('#buildRoomType').empty();
          $('#buildRoomType')
          .append($("<option></option>")
            .attr("value", response[j].roomtype)
            .text(response[j].roomtype));

        }

      }
    })


  });


  // $('#pickupinternal').on('change', function() {
  //         $.ajax({
  //           type:"POST",
  //           dataType: "json",
  //           url:'<?php echo site_url(); ?>/query/fetchdropoff',
  //           data:{'pickup':this.value },
  //           success:function(response){
  //             $("#dropoffinternal").html('<option value="dropoff">dropoff</option>');
  //             console.log(response.data.length);

  //               //$('#bus_type').html("<option value='"+ data.type +"'>"+ data.type +"</option>");
  //               var options=""
  //               for(var i=0;i<response.data.length;i++){
  //                   console.log(response.data[i].dest_city);
  //               options+='<option value="'+response.data[i].dest_city+'">'+response.data[i].dest_city+'</option>';

  //               }


  //             $("#dropoffinternal").append(options);

  //               }
  //             });

  //         });

  //         $('#dropoffinternal').on('change', function() {
  //         var transfer_type=$("#transfertype").val();
  //         var pickup=$("#pickupinternal").val();
  //         var dropoff=$("#dropoffinternal").val();
  //           $.ajax({
  //             type:"POST",
  //             dataType: "json",
  //             url:'<?php echo site_url(); ?>/itinerary/getRouteName',
  //             data:{'dropoff':dropoff,'pickup':pickup,'transfer_type':transfer_type},
  //             success:function(response){
  //               $("#route_nameinternal").val(response.route_name);

  //             }


  //           });
  //        });
</script>