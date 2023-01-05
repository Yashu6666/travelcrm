<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php $this->load->view('header'); ?>
<!-- start page container -->
<div class="page-container">
  <!-- start sidebar menu -->
  <?php $this->load->view('side_bar'); ?>
  <!-- end sidebar menu -->
  <!-- start page content -->
  <div class="page-content-wrapper" id="FullPage">
    <div class="page-content">
      <div class="page-bar">
        <div class="page-title-breadcrumb">
          <div class=" pull-left">
            <div class="page-title">Queries</div>
          </div>
          <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa-solid fa-gauge"></i>&nbsp;<a class="parent-item" href="<?php echo site_url(); ?>login/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
              &nbsp;<a class="parent-item" href="<?php echo site_url(); ?>query/view_query/Overall">Queries</a>

            </li>

          </ol>
        </div>
      </div>

      <div class="page-bar ">
        <button type="button" id="del_query" onclick="delQuery()" class="new_btn px-5 float-right">Cancel</button>
      </div>


      <form id="proposal-form" action="<?php echo site_url(); ?>query/CreateProposal" method="post">
        <input type="hidden" id="totalprice_package" name="totalprice_package" value="0" />

        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card-box ">
              <div class=" d-flex justify-content-center align-itom-center">

                <table class="table table-bordered mt-5">
                  <input type="hidden" id="rows_count" value="0" />

                  <tbody>
                    <tr>
                      <th scope="row"><b>Company Name</b> </th>
                      <td><?php echo $view->b2bcompanyName; ?></td>
                      <th><b>Enquiry Id</b></th>
                      <td><?php echo $view->query_id; ?></td>
                      <th><b>Enquiry For</b></th>
                      <td><b>Package</b></td>
                    </tr>
                    <tr>
                      <th><b>Check In</b></th>
                      <td><?php echo date('d M Y', strtotime($view->specificDate)); ?></td>
                      <th><b>Check Out</b></th>
                      <td><?php echo date('d M Y', strtotime($buildpackage->noDaysFrom))  ?></td>
                      <th><b>No of Nights</b></th>
                      <td><?php echo $buildpackage->night ?></td>
                    </tr>
                    <tr>
                      <th><b>City</b></th>
                      <td> <?php echo $buildpackage->goingFrom ?></td>
                      <th><b>No of Pax</b></th>
                      <th><b>Adult</b>: <?php echo $view->Packagetravelers; ?> </th>
                      <th><b>Child: </b><?php echo $buildpackage->child; ?></th>
                      <th> <b>Infant :</b> <?php echo $buildpackage->infant; ?></th>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="mt-5">
                <div>
                  <div class="card-body ">
                    <div class="mt-5">
                      <div>
                        <div class="card-head card-head-new">
                          <p><i class="fa-solid fa-hotel"></i> Hotel
                            <input type="radio" id="hotel_status" name="hotel_status" value="Yes"><label for="html">Yes</label>
                            <input type="radio" id="hotel_status1" name="hotel_status" checked value="No"><label for="html">No</label>
                          </p>
                        </div>
                        <div class="row mt-5 mr-3 ml-3 mb-3" style="display:none" id="hoteldisplay">
                          <div id="addrows">
                            <table class="table">
                              <div class="alert alert-danger noOfDaysAlertcls" style="display:none;">
                                <strong>Exceed !</strong> You cannot add more than <b id="noOfDaysAlert"></b> days.
                              </div>
                              <div class="alert alert-danger noOfDaysAlertcls2" id="hotelNoOfDays" style="display:none;">
                                <strong>You Should add Hotels for <b id="noOfDaysAlert"><?php echo $buildpackage->night ?></b> days.
                              </div>
                              <div style="float:right;">
                                <a id="" class="new_btn px-3 ml-0 add-rows" onclick="addrows()">add</a>
                              </div>

                              <?php
                              $no_childs_room = explode(",", $package_details->child_per_room);
                              $child_with_or_wo_bed_arr = explode(",", $package_details->child_with_or_wo_bed);
                              $no_child_room_wo_new = [];

                              for ($i = 0; $i < $view->room; $i++) {
                                $child_count_per_room = $no_childs_room[$i];
                                for ($j = 0; $j < ($child_count_per_room); $j++) {
                                  $updated_arr = array_splice($child_with_or_wo_bed_arr, 0, $child_count_per_room);
                                  if (!empty(implode(",", $updated_arr))) {
                                    array_push($no_child_room_wo_new, implode(",", $updated_arr));
                                  }
                                }
                              }

                              ?>

                              <?php for ($i = 1; $i <= $view->room; $i++) : ?>

                                <thead>
                                  <tr>
                                    <th></th>
                                    <th>Hotel City</th>
                                    <th>Check In</th>
                                    <th>Nights</th>
                                    <th>Category</th>
                                    <th>Hotel Name</th>
                                    <th>Room Type </th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td class="text-nowrap">Room <?php echo $i ?></td>
                                    <td>
                                      <select class="form-control get-hotel get_all_city" required="" name="buildHotelCity[]" id="buildHotelCity<?php echo "_" . $i ?>" onchange="get_hotel_name_new('buildHotelCity','<?php echo '_' . $i ?>');">
                                        <option value="Dubai">Dubai</option>
                                        <option value="AbuDhabi">Abu Dhabi</option>
                                        <option value="Sharjah">Sharjah</option>
                                        <option value="Ajman">Ajman</option>
                                        <option value="Sir Baniyas">Sir Baniyas</option>
                                        <option value="Umm Al-Quwain">Umm Al-Quwain</option>
                                        <option value="Fujairah">Fujairah</option>
                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                        <option value="Al Ain">Al Ain</option>
                                      </select>
                                    </td>
                                    <td>
                                      <input class="form-control get_CheckIn" type="date" value="<?php echo $view->specificDate; ?>" name="buildCheckIns[]" id="buildCheckIn<?php echo "_" . $i ?>">
                                      <input type="hidden" value="<?php echo $view->room; ?>" name="no_of_room" id="no_of_room">
                                    </td>
                                    <td>
                                      <!-- <select class="form-control bnights get_no_nights" id="buildNoNights<?php echo "_" . $i ?>" onchange="checkRoomAvailability(<?php echo 'buildHotelCity_' . $i ?>,<?php echo 'buildCheckIn_' . $i ?>,<?php echo 'buildNoNights_' . $i ?>,<?php echo 'buildHotelName_' . $i ?>,)" name="buildNoNight[]" required=""> -->
                                      <select class="form-control bnights get_no_nights" id="buildNoNights<?php echo "_" . $i ?>" onchange="get_hotel_name_new('Category','<?php echo '_' . $i ?>');" name="buildNoNight[]" required="">
                                        <option value="0">Select</option>
                                        <?php $count_days = 1;
                                        for ($count_days = 1; $count_days <= $buildpackage->night; $count_days++) {
                                          echo "<option value='" . $count_days . "'>" . $count_days . "</option>";
                                        } ?>
                                      </select>
                                    </td>
                                    <td>
                                      <div>
                                        <!-- <input class="form-control get_category" type="number" disabled value="<?php echo $buildpackage->hotelPrefrence ?>" name="Category[]" id="Category<?php echo "_" . $i ?>"> -->
                                        <select data-mdl-for="sample2" class="form-control get_category" value="" id="Category<?php echo '_' . $i ?>" tabIndex="-1" name="Category[]" onchange="get_hotel_name_new('Category','<?php echo '_' . $i ?>');">
                                          <option <?php echo $buildpackage->hotelPrefrence == 1 ? "selected" : ""; ?> value="1">1</option>
                                          <option <?php echo $buildpackage->hotelPrefrence == 2 ? "selected" : ""; ?> value="2">2</option>
                                          <option <?php echo $buildpackage->hotelPrefrence == 3 ? "selected" : ""; ?> value="3">3</option>
                                          <option <?php echo $buildpackage->hotelPrefrence == 4 ? "selected" : ""; ?> value="4">4</option>
                                          <option <?php echo $buildpackage->hotelPrefrence == 5 ? "selected" : ""; ?> value="5">5</option>
                                          <!-- <option  value="?php echo $buildpackage->hotelPrefrence ?>"><?php echo $buildpackage->hotelPrefrence ?></option> -->
                                        </select>
                                      </div>
                                    </td>
                                    <td>
                                      <!-- <select class="form-control get_buildHotelName" id="buildHotelName<?php echo '_' . $i ?>" required="" name="buildHotelName[]" onchange="get_route_name_new('buildHotelName','<?php echo '_' . $i ?>');" required> -->
                                      <select class="form-control get_buildHotelName" id="buildHotelName<?php echo '_' . $i ?>" required="" name="buildHotelName[]" onchange="checkRoomAvailability(<?php echo 'buildHotelCity_' . $i ?>,<?php echo 'buildCheckIn_' . $i ?>,<?php echo 'buildNoNights_' . $i ?>,<?php echo 'buildHotelName_' . $i ?>,<?php echo 'buildRoomType_' . $i ?>,)" required>
                                      </select>
                                    </td>
                                    <td>
                                      <select class="form-control get_buildRoomType" id="buildRoomType<?php echo '_' . $i ?>" onchange="updateRemainingRoom('buildHotelCity_','buildCheckIn_','buildNoNights_','buildHotelName_','buildRoomType_','Category_',<?php echo $i ?>)" name="buildRoomType[]" required>
                                        <option>Select</option>
                                      </select>
                                    </td>
                                  </tr>


                                </tbody>

                                <thead>
                                  <tr>
                                    <th></th>
                                    <th>Group Type </th>
                                    <th>Bed Type </th>
                                    <th>Meal Type </th>
                                    <th>Adult </th>
                                    <th>Child </th>
                                    <th colspan="2">Extra </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td></td>
                                    <td>
                                      <select class="form-control get_room_group_type" id="buildRoomGroupType" name="buildRoomGroupType[]" required>
                                        <option value="FIT">FIT</option>
                                        <option value="GIT">GIT</option>
                                      </select>
                                    </td>

                                    <td>
                                      <select class="form-control get_bed_type" id="buildBedType" name="buildBedType[]" required>
                                        <option <?php echo explode(",", $package_details->adult_per_room)[$i - 1] == 2 ? "selected" : ""; ?> value="Double">Double</option>
                                        <option <?php echo explode(",", $package_details->adult_per_room)[$i - 1] == 1 ? "selected" : ""; ?> value="Single">Single</option>
                                        <option <?php echo explode(",", $package_details->adult_per_room)[$i - 1] == 3 ? "selected" : ""; ?> value="Triple">Triple</option>
                                      </select>

                                    </td>
                                    <td>
                                      <select class="form-control get_room_types" id="room_types" name="build_room_types[]" required>
                                        <option value="BB">BB</option>
                                        <option value="Room Only">Room Only</option>
                                        <option value="HB">HB</option>
                                        <option value="FB">FB</option>
                                      </select>
                                    </td>
                                    <td>
                                      <input class="form-control adult_per_room" type="text" value="<?php echo explode(",", $package_details->adult_per_room)[$i - 1]; ?>" name="adult_per_room[]" id="adult_per_room">
                                      <select hidden class="form-control room_sharing_types" id="room_sharing_types" name="room_sharing_types[]">
                                        <option value=""></option>
                                      </select>
                                    </td>
                                    <td>
                                      <input class="form-control child_per_room" type="text" value="<?php echo explode(",", $package_details->child_per_room)[$i - 1]; ?>" name="child_per_room[]" id="child_per_room">
                                      <input class="form-control child_per_room_wo_bed" type="hidden" value="<?php echo isset($no_child_room_wo_new[$i - 1]) &&
                                                                                                                !empty($no_child_room_wo_new[$i - 1]) ? ($no_child_room_wo_new[$i - 1]) : 0; ?>" name="child_per_room_wo_bed[]" id="child_per_room_wo_bed<?php echo $i ?>">
                                    </td>
                                    <td colspan="2">
                                      <div class="d-flex justify-content-around">
                                        <p><input type="checkbox" id="extra_with_adult" name="extra_check[]" value="extra_with_adult" class="check-extra extra_with_adult"> Ex. adult</p>
                                        <p><input type="hidden" <?php echo $buildpackage->child > 0 ? 'checked' : ''; ?> id="extra_with_child" name="extra_check[]" value="extra_with_child" class="check-extra extra_with_child"></p>
                                        <p><input type="hidden" <?php echo $buildpackage->infant > 0 ? 'checked' : ''; ?> id="extra_without_bed" name="extra_check[]" value="extra_without_bed" class="check-extra extra_without_bed"></p>
                                      </div>

                                    </td>


                                  </tr>
                                </tbody>
                              <?php endfor ?>

                            </table>



                          </div>

                          <div style="float:right;">
                            <button type="button" onclick="hotelcalculation()" class="new_btn px-3">Save</button>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="mt-5">
                      <div>
                        <div class="card-head card-head-new">
                          <p><i class="fa-solid fa-car"></i> Transfer
                            <input type="radio" id="trans_status" name="trans_status" value="Yes"><label for="html">Yes</label>
                            <input type="radio" id="trans_status1" checked name="trans_status" value="No"><label for="html">No</label>
                          </p>
                        </div>
                      </div>
                      <div class="row mt-4 mr-3 ml-3 mb-3" style="display:none" id="transdisplay">
                        <div class="col">
                          <label for="" class="transport-lable"><b>Transport Type</b>
                            :</label>
                          <input type="checkbox" name="TransType" id="TrasportTypeCab" class="mr-3 ml-2 " value="Internal Transfer"><span class="transport-lable-ckeck">Internal City/Hotel Transfer</span><span class="checkmark"></span>
                          <input type="checkbox" name="TransType" id="TrasportTypeSic" checked class="mr-3 ml-2 " value="Point to Point Transfer"><span class="transport-lable-ckeck">Airport Return Transfer</span><span class="checkmark"></span>
                        </div>

                        <div>
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Transport type</th>
                                <th scope="col">Pax</th>
                                <th scope="col">Form Date</th>

                                <th scope="col">Pickup Location</th>
                                <th scope="col">Drop Off Location </th>
                                <th scope="col">Route Name</th>



                              </tr>
                            </thead>
                            <tbody id="transfer_body">
                              <tr id="PvtCab" style="display: none;">
                                <th>Internal City/Hotel Transfer</th>

                                <td><input class="form-control" type="number" id="pax_internal" placeholder="Pax" value="<?php echo $view->Packagetravelers + $buildpackage->child; ?>" name="buildTravelFromCityCab[]" disabled></td>

                                <td><input class="form-control internal_transfer_date" type="date" value="<?php echo $view->specificDate; ?>" id="buildTravelFromdateCab" name="buildTravelFromdateCab[]"></td>
                                <td>

                                  <select id="pickupinternal" name="buildTravelToDateCab[]" class="js-example-basic-multiple internal_transfer_pickup w-100 bg-white form-control form-control-lg">
                                    <option value="Pickup">Pickup</option>
                                  </select>

                                </td>
                                <td>
                                  <select id="dropoffinternal" name="buildTravelToCityCabDrop[]" class="js-example-basic-multiple internal_transfer_dropoff w-100 bg-white form-control form-control-lg">
                                    <option value="Drop Off">Drop Off</option>

                                  </select>
                                </td>
                                <td>
                                  <input id="price_internal" type="hidden" name="price_internal[]" />
                                  <input id="pax_count_internal" type="hidden" name="pax_count_internal[]" />
                                  <input id="total_price_internal" type="hidden" value="0" name="total_price_internal[]" />
                                  <input id="route_nameinternal" class="form-control internal_transfer_route" type="text" placeholder="Route Name" name="buildTravelTypeCab[]">
                                </td>
                                <td><a class="new_btn px-3" onclick="transRow()">add</a></td>
                              </tr>


                              <tr id="Sic" style="display: none;">
                                <th>Airport Return Transfer</th>
                                <td><input class="form-control" id="pax_point" type="text" placeholder="Pax" value="<?php echo $view->Packagetravelers + $buildpackage->child; ?>" name="buildTravelFromCitySIC[]" disabled></td>
                                <td><input class="form-control return_transfer_date" id="buildTravelFromdatePVT" type="date" value="<?php echo $view->specificDate; ?>" name="buildTravelFromdatePVT[]"></td>

                                <td>
                                  <select id="pickuppoint" required name="buildTravelToDateSIC[]" class="js-example-basic-multiple return_transfer_pickup w-100 bg-white form-control form-control-lg">
                                    <option value="Pickup">Pickup</option>
                                  </select>
                                </td>
                                <td>
                                  <select id="dropoffpoint" name="buildTravelToCitySIC[]" class="js-example-basic-multiple return_transfer_dropoff w-100 bg-white form-control form-control-lg">
                                    <option value="BUR DUBAI HOTEL">BUR DUBAI HOTEL</option>
                                    <option value="Drop Off">Drop Off</option>

                                  </select>
                                </td>
                                <td><input id="route_namepoint" class="form-control return_transfer_route" value="Pick up and Drop from Dubai Airport" type="text" placeholder="Route Name" name="buildTravelTypeSIC[]"></td>
                                <input id="price_point" type="hidden" name="price_point[]" />
                                <input id="pax_count_point" type="hidden" name="pax_count_point[]" />
                                <input id="total_price_point" type="hidden" value="0" name="total_price_point[]" />
                                <td><a class="new_btn px-3" onclick="transReturnRow()">add</a></td>

                              </tr>

                              <tr id="Train" style="display: none;">
                                <th>Train</th>
                                <td><input class="form-control" type="date" value="<?php echo $view->specificDate; ?>" name="buildTravelFromdateTrain"></td>
                                <td><input class="form-control" type="text" placeholder="From City" name="buildTravelFromCityTrain"></td>
                                <td><input class="form-control" type="date" placeholder="To Date" name="buildTravelToDateTrain"></td>
                                <td><input class="form-control" type="text" placeholder="To City" name="buildTravelToCityTrain"></td>
                                <td><input class="form-control" type="text" placeholder="Type" name="buildTravelTypeTrain"></td>
                                <td><button type="button" class="btn btn-primary">Add</button>
                                </td>

                              </tr>
                            </tbody>
                          </table>
                          <div class="d-flex justify-content-end">
                            <button type="button" id="transferSave" class="new_btn px-5">Save</button>
                          </div>
                        </div>

                      </div>
                      <div class="mt-5">
                        <div class="card-head card-head-new m">
                          <p style="margin-top:20px"><i class="fa-brands fa-cc-visa"></i> Visa

                            <input type="radio" id="visa_status" name="visa_status" value="Yes"><label for="html">Yes</label>
                            <input type="radio" id="visa_status1" name="visa_status" checked value="No"><label for="html">No</label>
                          </p>
                        </div>
                        <br>
                        <div class="row mt-4 mr-3 ml-3 mb-3 " style="display:none" id="visadisplay">
                          <div>
                            <table id="faqs" class="table table-borderless">
                              <thead>
                                <tr>
                                  <th>Visa Category</th>
                                  <th>Entry Type</th>
                                  <th>Validity</th>
                                  <th>Adult</th>
                                  <th>Child</th>
                                  <th>Infant</th>
                                </tr>
                              </thead>
                              <tbody>
                              <tbody>
                                <tr id="myTableRow">
                                  <td>
                                    <div>
                                      <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" id="visa_category_drop_down" name="visa_category_drop_down">
                                        <option value="">Select Category</option>
                                        <option value="30_days_tourist">30 Days Tourist</option>
                                        <option value="48_hrs">48 hrs Transit</option>
                                        <option value="96_hrs">96 hrs Transit</option>
                                        <option value="90_days_single">90 Days Single entry</option>
                                        <option value="90_days_multi">90 Days Multi Entry</option>
                                      </select>
                                    </div>
                                  </td>
                                  <td>
                                    <div>
                                      <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" id='entry_type' name="entry_type">
                                        <option value="">Select Entry Type</option>
                                        <option value="Single Entry">Single Entry</option>
                                        <option value="Double Entry">Double Entry</option>
                                        <option value="Multi Entry">Multi Entry</option>
                                      </select>

                                    </div>
                                  </td>
                                  <td>
                                    <div>
                                      <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" id="visa_validity" name="visa_validity">
                                        <option value="">Select Validity</option>
                                        <option value="1 Month">1 Month</option>
                                        <option value="3 Month">3 Month</option>
                                        <option value="5 Years">5 Years</option>
                                      </select>
                                    </div>
                                  </td>

                                  <td><input type="text" placeholder="0" class="form-control" name="adult" value="<?php echo $view->Packagetravelers; ?>">
                                  </td>
                                  <td><input type="text" placeholder="0" class="form-control" name="child" value="<?php echo $buildpackage->child; ?>">
                                  </td>
                                  <td><input type="text" placeholder="0" class="form-control" name="infant" value="<?php echo $buildpackage->infant; ?>">
                                  </td>
                                  <td><button type="button" onclick="getvisaprice()" class="new_btn px-3">Save</button>
                                  </td>
                                </tr>

                              </tbody>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="card-head card-head-new m">
                          <p style="margin-top:20px"><i class="fa-brands fa-cc-visa"></i> OTB

                            <input type="radio" id="otb_status" name="otb_status" value="Yes"><label for="html">Yes</label>
                            <input type="radio" id="otb_status1" checked name="otb_status" value="No"><label for="html">No</label>
                          </p>
                        </div>
                        <br>
                        <div class="row mt-4 mr-3 ml-3 mb-3 " style="display:none" id="otbdisplay">
                          <div>
                            <table id="faqs" class="table table-borderless">
                              <thead>
                                <tr>
                                  <th>Category</th>
                                  <th>Adult</th>
                                  <th>Child</th>
                                  <th>Infant</th>
                                </tr>
                              </thead>
                              <tbody>
                              <tbody>
                                <tr id="myTableRow">
                                  <td>
                                    <input type="text" placeholder="0" class="form-control" name="OTB" value="OTB" >
                                  </td>
                                  <td><input type="text" placeholder="0" class="form-control" name="otb_adult" id="otb_adult" value="<?php echo $view->Packagetravelers; ?>">
                                  </td>
                                  <td><input type="text" placeholder="0" class="form-control" name="otb_child" id="otb_child" value="<?php echo $buildpackage->child; ?>">
                                  </td>
                                  <td><input type="text" placeholder="0" class="form-control" name="otb_infant" id="otb_infant" value="<?php echo $buildpackage->infant; ?>">
                                  </td>
                                  <td><button type="button" onclick="getOTBprice()" class="new_btn px-3">Save</button>
                                  </td>
                                </tr>
                              </tbody>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>


                      <div class="card-head card-head-new">
                        <p style="margin-top:20px"><i class="fa-solid fa-place-of-worship"></i> Excursion
                          <input type="radio" id="excursion_status" name="excursion_status" value="Yes"><label for="html">Yes</label>
                          <input type="radio" id="excursion_status1" checked name="excursion_status" value="No"><label for="html">No</label>
                        </p>
                      </div>
                      <div class="row mt-4 mr-3 ml-3 mb-3 " style="display:none" id="excursiondisplay">
                        <div>
                          <div class="d-flex">
                            <label for="" class="">Hotel Pickup</label>
                            <input type="text" class="form-control ml-4 w-25" id="ex_hotel_pickup" name="ex_hotel_pickup" value="" />
                          </div>
                          <td><input type="hidden" id="hidden_total_pax" value="<?php echo $view->Packagetravelers + $buildpackage->child; ?>" />

                            <table id="faqs" class="table table-borderless">
                              <thead>
                                <tr>

                                  <th>Excursion Type</th>
                                  <th>Excursion Name</th>
                                  <th>Adult</th>
                                  <th>Child</th>
                                  <th>Infant</th>
                                  <th>Action</th>
                                </tr>

                              </thead>
                              <tbody>
                              <tbody>
                                <tr id="myTableRow">
                                  <td>
                                    <div>
                                      <select id="excursion_type_SIC" data-mdl-for="sample2" class="form-control" value="SIC" tabIndex="-1" name="excursion_type">
                                        <option value="SIC">SIC</option>
                                      </select>

                                    </div>
                                  </td>

                                  <td>
                                    <div>
                                      <select required multiple="" id="excursion_name_SIC" name="excursion_name_SIC[]" class="w-100 bg-white form-control form-control-lg">
                                        <?php foreach ($excursion_sic as $value) { ?>
                                          <option value="<?php echo $value->tourname ?>"><?php echo $value->tourname ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                  </td>

                                  <td><input id="excursion_adult_SIC" type="text" placeholder="0" class="form-control" name="adult" value="<?php echo $view->Packagetravelers; ?>" disabled>
                                  </td>
                                  <td><input id="excursion_child_SIC" type="text" placeholder="0" class="form-control" name="child" value="<?php echo $buildpackage->child; ?>" disabled>
                                  </td>
                                  <td><input id="excursion_infant_SIC" type="text" placeholder="0" class="form-control" name="infant" value="<?php echo $buildpackage->infant; ?>" disabled>
                                  </td>
                                  <td><button type="button" onclick="excursionSICcalculations()" class="new_btn px-3">Save</button>
                                  </td>
                                </tr>

                              </tbody>
                              <tbody>
                                <tr id="myTableRow">
                                  <td>
                                    <div>
                                      <select id="excursion_type_PVT" data-mdl-for="sample2" class="form-control" value="PVT" tabIndex="-1" name="excursion_type">
                                        <option value="PVT">PVT</option>
                                      </select>
                                    </div>
                                  </td>

                                  <td>
                                    <div>
                                      <select required multiple="multiple" id="excursion_name_PVT" name="excursion_name_PVT[]" class="w-100 bg-white form-control form-control-lg">
                                        <?php
                                        $filter = array();
                                        foreach ($excursion_pvt as $k => $value) {
                                          $filter[$value->tourname] = $value;
                                        }
                                        ?>
                                        <?php
                                        foreach ($filter as  $values) {

                                          echo '<option value="' . $values->tourname . '">' . $values->tourname . '</option>';
                                        } ?>
                                      </select>
                                    </div>
                                  </td>

                                  <td><input id="excursion_adult_PVT" type="text" placeholder="0" class="form-control" name="adult" value="<?php echo $view->Packagetravelers; ?>" disabled>
                                  </td>
                                  <td><input id="excursion_child_PVT" type="text" placeholder="0" class="form-control" name="child" value="<?php echo $buildpackage->child; ?>" disabled>
                                  </td>
                                  <td><input id="excursion_infant_PVT" type="text" placeholder="0" class="form-control" name="infant" value="<?php echo $buildpackage->infant; ?>" disabled>
                                  </td>
                                  <td><button type="button" onclick="excursionPVTcalculations()" class="new_btn px-3">Save</button>
                                  </td>
                                </tr>

                              </tbody>



                              <tbody>
                                <tr id="myTableRow">
                                  <td>
                                    <div>
                                      <select id="excursion_type_TKT" data-mdl-for="sample2" class="form-control" value="TKT" tabIndex="-1" name="excursion_type">
                                        <option value="TKT">TKT</option>
                                      </select>

                                    </div>
                                  </td>

                                  <td>
                                    <div>
                                      <select required multiple="" id="excursion_name_TKT" name="excursion_name_TKT[]" class="w-100 bg-white form-control form-control-lg">
                                        <?php foreach ($excursion_TKT as $value) { ?>
                                          <option value="<?php echo $value->tourname ?>"><?php echo $value->tourname ?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                  </td>

                                  <td><input id="excursion_adult_TKT" type="text" placeholder="0" class="form-control" name="adult" value="<?php echo $view->Packagetravelers; ?>" disabled>
                                  </td>
                                  <td><input id="excursion_child_TKT" type="text" placeholder="0" class="form-control" name="child" value="<?php echo $buildpackage->child; ?>" disabled>
                                  </td>
                                  <td><input id="excursion_infant_TKT" type="text" placeholder="0" class="form-control" name="infant" value="<?php echo $buildpackage->infant; ?>" disabled>
                                  </td>
                                  <td><button id="TKT_cal" type="button" onclick="excursionTKTcalculations()" class="new_btn px-3">Save</button>
                                  </td>
                                </tr>
                              </tbody>
                              </tbody>
                            </table>

                            <div class="card-head card-head-new mt-5">
                              <p style="margin-top:20px"><i class="fa-solid fa-bowl-rice"></i> Meal
                                <input type="radio" id="ex_meals_status" name="ex_meals_status" value="Yes"><label for="html">Yes</label>
                                <input type="radio" id="ex_meals_status1" checked name="ex_meals_status" value="No"><label for="html">No</label>
                              </p>
                            </div>
                            <div id="ex_addrowss" style="display:none">
                              <table id="meals_table" class="table table-borderless">
                                <thead>
                                  <tr>
                                    <th>Date</th>
                                    <th>Resturant Type</th>
                                    <th>Resturant Name</th>
                                    <th>Meal</th>
                                    <th>Meal Type</th>
                                    <th>No. of Meals</th>
                                    <th style="width:100">Adult</th>
                                    <th style="width:100">Child</th>
                                    <th>Action</th>
                                  </tr>

                                </thead>
                                <tbody id="ex_mealsRow">
                                  <tr id="ex_myTableRow">

                                    <td><input class="form-control ex_meals_date" min="<?php echo date("Y-m-d") ?>" type="date" value="<?php echo $view->specificDate; ?>" min="<?php echo $view->specificDate; ?>" max="<?php echo date('Y-m-d', strtotime($view->specificDate . ' + ' . (($buildpackage->night) - (1)) . ' days')); ?>" name="ex_meals_date[]" id="ex_meals_date"></td>

                                    <td>
                                      <div>
                                        <select data-mdl-for="sample2" class="form-control ex_res_type" value="" tabIndex="-1" id="ex_res_type" name="ex_res_type[]" onchange="get_resturant_name_ex('ex_res_type','');">
                                          <option value="">Select Option</option>
                                          <option selected value="Standard">Standard</option>
                                          <option value="Premium">Premium</option>
                                        </select>

                                      </div>
                                    </td>
                                    <td>
                                      <select data-mdl-for="sample2" class="js-example-basic-multiple form-control ex_res_name" value="" tabIndex="-1" name="ex_res_name[]" id="ex_res_name">
                                        <option>select</option>
                                      </select>
                                    <td>
                                      <div>
                                        <select data-mdl-for="sample2" class="form-control ex_meal" value="" tabIndex="-1" id="ex_meal_cal" name="ex_meal[]">
                                          <option value="Dinner">Dinner</option>
                                          <option value="Breakfast">Breakfast</option>
                                          <option value="Lunch">Lunch</option>
                                        </select>
                                      </div>
                                    </td>
                                    <td>
                                      <div>
                                        <select data-mdl-for="sample2" class="form-control ex_meal_type" value="" tabIndex="-1" id="ex_meal_type_cal" name="ex_meal_type[]">
                                          <option value="Veg">Veg</option>
                                          <option value="Non-Veg">Non-Veg</option>
                                          <option value="Veg & Non-Veg">Veg & Non-Veg</option>
                                          <option value="Jain">Jain</option>
                                        </select>
                                      </div>
                                    </td>
                                    <td><input type="number" min="1" id="ex_no_of_meals" class="form-control  ex_no_of_meals" name="ex_no_of_meals[]">



                                    <td><input type="text" value="<?php echo $view->Packagetravelers; ?>" placeholder="0" id="ex_adult_meal_cal" class="form-control check-adult ex_meal_adult" name="ex_meal_adult[]">
                                    </td>
                                    <td><input type="text" value="<?php echo $buildpackage->child; ?>" placeholder="0" id="ex_child_meal_cal" class="form-control check-child ex_meal_child" name="ex_meal_child[]" <?php if ($buildpackage->child == 0) echo "disabled"; ?>>
                                    </td>

                                    <td>
                                      <a class="new_btn px-3 ml-0" onclick="ex_addrowss()">
                                        add
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <div>
                                <button type="button" onclick="excursionMeal()" class="new_btn px-3 float-end">Save</button>
                              </div>
                            </div>

                        </div>
                      </div>
                      <div class="card-head card-head-new mt-5">
                        <p style="margin-top:20px"><i class="fa-solid fa-bowl-rice"></i> Meal
                          <input type="radio" id="meals_status" name="meals_status" value="Yes"><label for="html">Yes</label>
                          <input type="radio" id="meals_status1" name="meals_status" checked value="No"><label for="html">No</label>
                        </p>

                      </div>
                      <div class="row mt-4 mr-3 ml-3 mb-3 " style="display:none" id="mealsdisplay">

                        <div id="addrowss">
                          <div>
                            <table id="faqs" class="table table-borderless">
                              <thead>
                                <tr>
                                  <th style="width: 200;">Transfer Type</th>
                                  <th>Date</th>
                                  <th>Resturant Type</th>
                                  <th>Resturant Name</th>
                                  <th>Meal</th>
                                  <th>Meal Type</th>
                                  <th>No. of Meals</th>
                                  <th style="width:100">Adult</th>
                                  <th style="width:100">Child</th>
                                  <th>Action</th>
                                </tr>

                              </thead>
                              <tbody>
                                <tr id="myTableRow">

                                  <td>
                                    <input type="radio" class="transfer_with_or_without" id="with_transfer" name="transfer_with_or_without[]" value="with_transfer" onclick="get_resturant_name('with_transfer','');" /> With Transfer<br />
                                    <input type="radio" checked="checked" class="transfer_with_or_without" id="without_transfer" name="transfer_with_or_without[]" value="without_transfer" onclick="get_resturant_name('without_transfer','');" /> Without Transfer
                                  </td>

                                  <td><input class="form-control checkIn_date" type="date" value="<?php echo $view->specificDate; ?>" min="<?php echo $view->specificDate; ?>" max="<?php echo date('Y-m-d', strtotime($view->specificDate . ' + ' . (($buildpackage->night) - (1)) . ' days')); ?>" name="buildCheckIn[]" id="buildCheckIn"></td>


                                  <td>
                                    <div>
                                      <select data-mdl-for="sample2" class="form-control rest_type" value="" tabIndex="-1" id="res_type" name="res_type[]" onchange="get_resturant_name('res_type','');">
                                        <option value="">Select Option</option>
                                        <option selected value="Standard">Standard</option>
                                        <option value="Premium">Premium</option>
                                      </select>

                                    </div>
                                  </td>
                                  <td>
                                    <select data-mdl-for="sample2" class="js-example-basic-multiple form-control res_name" value="" tabIndex="-1" name="res_name[]" id="res_name">
                                      <option>select</option>
                                    </select>
                                  <td>
                                    <div>
                                      <select data-mdl-for="sample2" class="form-control meal" value="" tabIndex="-1" id="meal_cal" name="Meal[]">
                                        <option value="Dinner">Dinner</option>
                                        <option value="Breakfast">Breakfast</option>
                                        <option value="Lunch">Lunch</option>
                                      </select>
                                    </div>
                                  </td>
                                  <td>
                                    <div>
                                      <select data-mdl-for="sample2" class="form-control meal_type" value="" tabIndex="-1" id="meal_type_cal" name="Meal_Type[]">
                                        <option value="Veg">Veg</option>
                                        <option value="Non-Veg">Non-Veg</option>
                                          <option value="Veg & Non-Veg">Veg & Non-Veg</option>
                                        <option value="Jain">Jain</option>
                                      </select>
                                    </div>
                                  </td>
                                  <td><input type="number" min="1" id="no_of_meals" class="form-control  no_of_meals" name="no_of_meals[]">



                                  <td><input type="text" value="<?php echo $view->Packagetravelers; ?>" placeholder="0" id="adult_meal_cal" class="form-control check-adult meal_adult" name="adult[]">
                                  </td>
                                  <td><input type="text" value="<?php echo $buildpackage->child; ?>" placeholder="0" id="child_meal_cal" class="form-control check-child meal_child" name="child[]" <?php if ($buildpackage->child == 0) echo "disabled"; ?>>
                                  </td>

                                  <td>
                                    <a class="new_btn px-3 ml-0" onclick="addrowss()">
                                      add
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>

                            <!-- __________________________________________________________________________________________________ -->

                            <div class="">
                              <div class="" id="mealTransferMain" style="display: none;">
                                <div class="">
                                  <label for="" class="transport-lable"><b>Transport Type</b>:</label>
                                  <input type="checkbox" name="mealTransTypeInt" id="mealTransTypeInt" class="mr-3 ml-2 " value="Internal Transfer"><span class="transport-lable-ckeck">Internal City/Hotel Transfer</span><span class="checkmark"></span>
                                  <input type="checkbox" name="mealTransTypeRet" id="mealTransTypeRet" checked class="mr-3 ml-2 " value="Point to Point Transfer"><span class="transport-lable-ckeck">Airport Return Transfer</span><span class="checkmark"></span>
                                </div>
                                <div>
                                  <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col">Transport type</th>
                                        <th scope="col">Pax</th>
                                        <th scope="col">Form Date</th>
                                        <th scope="col">Pickup Location</th>
                                        <th scope="col">Drop Off Location </th>
                                        <th scope="col">Route Name</th>
                                      </tr>
                                    </thead>
                                    <tbody id="transfer_body" style="border-bottom: #ff000000;">
                                      <tr id="mealInternalTransfer" style="display: none;">
                                        <th>Internal City/Hotel Transfer</th>
                                        <td><input class="form-control" type="number" id="pax_internal_meal" placeholder="Pax" value="<?php echo $view->Packagetravelers + $buildpackage->child; ?>" name="buildTravelFromCityCab[]" disabled></td>
                                        <td><input class="form-control internal_transfer_date" type="date" value="<?php echo $view->specificDate; ?>" id="internal_meal_date" name="internal_meal_date[]"></td>
                                        <td>
                                          <select id="pickup_internal_meal" required name="pickup_internal_meal[]" class="pickup_internal_meal js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                            <option value="">Pickup</option>
                                          </select>
                                        </td>
                                        <td>
                                          <select id="dropoff_internal_meal" name="dropoff_internal_meal[]" class="dropoff_internal_meal js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                            <option value="">Drop Off</option>
                                          </select>
                                        </td>
                                        <td>
                                          <input id="route_name_internal_meal" name="route_name_internal_meal[]" class="form-control route_name_internal_meal" type="text" placeholder="Route Name">
                                        </td>
                                      </tr>

                                      <tr id="mealReturnTransfer">
                                        <th>Airport Return Transfer</th>
                                        <td><input class="form-control" id="pax_return_meal" type="text" placeholder="Pax" value="<?php echo $view->Packagetravelers + $buildpackage->child; ?>" name="pax_return_meal[]" disabled></td>
                                        <td><input class="form-control return_transfer_date" id="return_meal_date" type="date" value="<?php echo $view->specificDate; ?>" name="return_meal_date[]"></td>
                                        <td>
                                          <select id="pickup_return_meal" required name="pickup_return_meal[]" class="pickup_return_meal js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                            <option value="">Pickup</option>
                                          </select>
                                        </td>
                                        <td>
                                          <select id="dropoff_return_meal" name="dropoff_return_meal[]" class="dropoff_return_meal js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                            <option value="">Drop Off</option>
                                          </select>
                                        </td>
                                        <td><input id="route_name_return_meal" class="form-control route_name_return_meal" type="text" placeholder="Route Name" name="route_name_return_meal[]"></td>
                                      </tr>
                                    </tbody>
                                  </table>

                                </div>
                              </div>
                            </div>
                            <!-- ___________________________________________________________________________________________________________ -->
                          </div>


                        </div>

                        <div>
                          <button type="button" onclick="mealcalculation()" class="new_btn px-3 float-end">Save</button>
                        </div>
                      </div>


                      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
                      <script src="<?php echo base_url(); ?>public/js/validate.js"></script>
                      <script>
                        $(document).ready(function() {



                          $("#view-proposal-btn").click(function() {
                            $(':disabled').each(function(e) {
                                $(this).removeAttr('disabled');
                            })
                            $("#proposal-form").submit();
                          });

                          var cities = [];
                          $(".get_all_city").each(function() {
                            var city = $(this).val();
                            cities.push($.trim(city));

                          });

                          var checkIn = [];
                          $(".get_CheckIn").each(function() {
                            var checkInDate = $(this).val();
                            checkIn.push($.trim(checkInDate));

                          });


                          var noOfNights = [];
                          $(".get_no_nights").each(function() {
                            var nights = $(this).val();
                            noOfNights.push($.trim(nights));

                          });

                          var category = [];
                          $(".get_category").each(function() {
                            var star = $(this).val();
                            category.push($.trim(star));

                          });

                          var hotelName = [];
                          $(".get_buildHotelName").each(function() {
                            var hotel_name = $(this).val();
                            hotelName.push($.trim(hotel_name));

                          });

                          var roomType = [];
                          $(".get_buildRoomType").each(function() {
                            var room = $(this).val();
                            roomType.push($.trim(room));

                          });

                          var bedType = [];
                          $(".get_bed_type").each(function() {
                            var bed = $(this).val();
                            bedType.push($.trim(bed));

                          });

                          var data = [{
                            'cities': cities,
                            'checkIn': checkIn,
                            'nights': noOfNights,
                            'category': category,
                            'hotelName': hotelName,
                            'roomType': roomType,
                            'bedType': bedType,
                          }];



                          var total_rows = $('#rows_count').val();
                          var QueryId = $('#QueryId').val();

                          var buildPackageInclusions = $('#buildPackageInclusions').val();
                          var buildPackageExclusions = $('#buildPackageExclusions').val();
                          var buildPackageConditions = $('#buildPackageConditions').val();
                          var buildPackageCancellations = $('#buildPackageCancellations').val();

                          $.ajax({
                            type: "POST",
                            url: "<?php echo base_url() ?>Query/CreateProposalHotelSave",
                            data: {
                              data: data,
                              total_rows: total_rows,
                              QueryId: QueryId,
                              buildPackageInclusions: buildPackageInclusions,
                              buildPackageExclusions: buildPackageExclusions,
                              buildPackageConditions: buildPackageConditions,
                              buildPackageCancellations: buildPackageCancellations
                            },
                            cache: false,
                            success: function(response) {
                              // console.log('success');
                            }
                          });


                          var total_rows = $('#faqs tbody#addrowss tr').length;

                          var resturants_name = [];
                          $(".res_name").each(function() {
                            var resturant_name = $(this).val();
                            resturants_name.push($.trim(resturant_name));

                          });

                          var resturants_transfer = [];
                          $("input[class='transfer_with_or_without']:checked").each(function() {
                            var resturant_type = $(this).val();
                            resturants_transfer.push($.trim(resturant_type));

                          });

                          var resturants = [];
                          $(".rest_type").each(function() {
                            var resturant = $(this).val();
                            resturants.push($.trim(resturant));

                          });

                          var dates = [];
                          $(".checkIn_date").each(function() {
                            var date = $(this).val();
                            dates.push($.trim(date));

                          });

                          var meals = [];
                          $(".meal").each(function() {
                            var meal = $(this).val();
                            meals.push($.trim(meal));

                          });


                          var meal_types = [];
                          $(".meal_type").each(function() {
                            var meal_type = $(this).val();
                            meal_types.push($.trim(meal_type));

                          });

                          var meal_adults = [];
                          $(".meal_adult").each(function() {
                            var meal_adult = $(this).val();
                            if (!meal_adult) meal_adult = 0;
                            meal_adults.push($.trim(meal_adult));

                          });

                          var meal_childs = [];
                          $(".meal_child").each(function() {
                            var meal_child = $(this).val();
                            if (!meal_child) meal_child = 0;
                            meal_childs.push($.trim(meal_child));

                          });

                          var QueryId = $('#QueryId').val();

                          var buildPackageInclusions = $('#buildPackageInclusions').val();
                          var buildPackageExclusions = $('#buildPackageExclusions').val();
                          var buildPackageConditions = $('#buildPackageConditions').val();
                          var buildPackageCancellations = $('#buildPackageCancellations').val();
                          var buildPackageRefund = $('#buildPackageRefund').val();

                          var data = [{
                            'resturants': resturants,
                            'meals': meals,
                            'dates': dates,
                            'meal_types': meal_types,
                            'meal_adults': meal_adults,
                            'meal_childs': meal_childs,
                            'resturants_name': resturants_name,
                            'resturants_transfer': resturants_transfer

                          }];


                          $.ajax({
                            type: "POST",
                            dataType: "json",
                            url: '<?php echo site_url(); ?>/Query/CreateProposalMealsSave',
                            data: {
                              data: data,
                              total_rows: total_rows,
                              QueryId: QueryId,
                              buildPackageInclusions: buildPackageInclusions,
                              buildPackageExclusions: buildPackageExclusions,
                              buildPackageConditions: buildPackageConditions,
                              buildPackageCancellations: buildPackageCancellations,
                              buildPackageRefund: buildPackageRefund
                            },
                            success: function(response) {
                              // console.log(response);
                            }
                          });

                          var open = true;
                          $("#travelers").click(function() {
                            if (open) {

                              $("#selecttraveler").show();
                              open = false;
                            } else {

                              $("#selecttraveler").hide();
                              open = true;
                            }
                          })

                          $("#closetraveller").click(function() {
                            $("#selecttraveler").hide();
                          })

                          $("#goingFrom1").change(function() {

                            var checkindate = $("#specificDate1").val();

                            var someDate = new Date(checkindate);
                            var numberOfDaysToAdd = $("#goingFrom1").val();

                            someDate.setDate(someDate.getDate() + parseInt(numberOfDaysToAdd));
                            var dateFormated = someDate.toISOString().substr(0, 10);
                            $("#endDate1").val(dateFormated);

                          })

                          $(".card-box").click(function(e) {
                            e.stopPropagation();
                            // console.clear();
                            // let hstats= $('.hotel_status').val();
                            let hstats = $("input[name=hotel_status]:checked").val();
                            console.log("🚩 ~ file: build_package.php:1108 ~ $ ~ hstats", hstats)
                            // adult_per_room
                            var no_room_count = <?php echo $buildpackage->room; ?>;
                            var child_with_or_wo_bed = <?php echo json_encode(explode(",",$buildpackage->child_with_or_wo_bed)); ?>;
                            
                            let childWithBedCount = 0;
                            let childWithNotBedCount = 0;
                             
                            if(child_with_or_wo_bed.length > 0) {
                              child_with_or_wo_bed.forEach(element => {
                                if(element == 1){
                                  childWithBedCount += 1;
                                } else if(element != "" && element == 0) {
                                  childWithNotBedCount += 1;
                                }
                            });}

                            var buildBedType_arr = [];
                            $(".get_bed_type").each(function(i, obj) {
                              if(i < no_room_count){
                                buildBedType_arr.push(obj.value);
                              }
                            });

                            var adult_per_room_arr = [];
                            $(".adult_per_room").each(function(i, obj) {
                              if(i < no_room_count){
                                adult_per_room_arr.push(obj.value);
                              }
                            });

                            let adult_pax_total_arr = [];

                            let single_share_adult_count = 0;
                            let double_share_adult_count = 0;
                            let triple_share_adult_count = 0;

                            buildBedType_arr.map((val,index) =>
                            {
                              if(buildBedType_arr[index] == "Single"){
                                single_share_adult_count += parseInt(adult_per_room_arr[index]);
                                console.log("in single");
                              } else if(buildBedType_arr[index] == "Double"){
                                double_share_adult_count += parseInt(adult_per_room_arr[index]);
                                console.log("in double");
                              } else if(buildBedType_arr[index] == "Triple"){
                                triple_share_adult_count += parseInt(adult_per_room_arr[index]);
                                console.log("in triple");
                              }
                            });
                            
                            let hotel_radio = $("input[name=hotel_status]");
                            let hotel_checked_val = hotel_radio.filter(":checked").val();

                            if(hotel_checked_val != "Yes"){
                              single_share_adult_count = <?php echo (int)$buildpackage->adult; ?>;;
                              double_share_adult_count = 0;
                              triple_share_adult_count = 0;
                            }
                            
                            let itrnl_total = 0;
                            var hotel_rate_adult = $("#hotel_rate_adult").val();

                            var hotel_pax_adult_single = $("#hotel_pax_adult_single").val();
                            var hotel_pax_adult_double = $("#hotel_pax_adult_double").val();
                            var hotel_pax_adult_triple = $("#hotel_pax_adult_triple").val();

                            var hotel_rate_adult_single = $("#hotel_rate_adult_single").val();
                            var hotel_rate_adult_double = $("#hotel_rate_adult_double").val();
                            var hotel_rate_adult_triple = $("#hotel_rate_adult_triple").val();

                            var total_price_internal_arr = $("input[name='total_price_internal[]']")
                              .map(function() {
                                itrnl_total += parseInt($ (this).val());
                              }).get();
                            var total_price_internal = itrnl_total;

                            let price_total = 0;
                            var total_price_point_arr = $("input[name='total_price_point[]']")
                              .map(function() {
                                price_total += parseInt($(this).val());
                              }).get();
                            var total_price_point = price_total;

                            var pax_adult_count = <?php echo $buildpackage->adult; ?>;
                            var pax_child_count = <?php echo $buildpackage->child; ?>;
                            var pax_infant_count = <?php echo $buildpackage->infant; ?>;

                            var pax_cnb_count_data = <?php print_r(json_encode($buildpackage->cnb_per_room)); ?>;
                            // var pax_cnb_count = ?php echo $buildpackage->cnb_per_room; ?>;
                            let cnb_arr = pax_cnb_count_data.split(",");
                            var pax_cnb_count = 0;
                            cnb_arr.forEach(x => {
                              pax_cnb_count += parseInt(x);
                            });

                            var total_pax_visa_price_adult = $("#total_pax_visa_price_adult").val();
                            var total_pax_otb_price_adult = $("#total_pax_otb_price_adult").val();
                            var total_pax_meal_adult = $("#total_pax_meal_adult").val();
                            var total_pax_pvt_adult = $("#total_pax_pvt_adult").val();
                            var total_pax_sic_adult = $("#total_pax_sic_adult").val();
                            var total_pax_TKT_adult = $("#total_pax_TKT_adult").val();
                            var total_pax_meals_adult = $("#total_pax_meals_adult").val();
                            var intrnal_transfer_avg = parseInt(total_price_internal) / (parseInt(pax_adult_count) + parseInt(pax_child_count));
                            var point_transfer_avg = parseInt(total_price_point) / (parseInt(pax_adult_count) + parseInt(pax_child_count));

                            var sub_total_adult_single = parseInt(hotel_rate_adult_single);

                            var sub_total_adult = parseInt(sub_total_adult_single) +
                              parseInt(intrnal_transfer_avg * (parseInt(single_share_adult_count))) +
                              parseInt(point_transfer_avg * (parseInt(single_share_adult_count))) +

                              ((parseInt(total_pax_TKT_adult) / pax_adult_count) * single_share_adult_count) +
                              ((parseInt(total_pax_visa_price_adult) / pax_adult_count) * single_share_adult_count) +
                              ((parseInt(total_pax_otb_price_adult) / pax_adult_count) * single_share_adult_count) +
                              ((parseInt(total_pax_meal_adult) / pax_adult_count) * single_share_adult_count) +
                              ((parseInt(total_pax_pvt_adult) / pax_adult_count) * single_share_adult_count) +
                              ((parseInt(total_pax_meals_adult) / pax_adult_count) * single_share_adult_count) +
                              ((parseInt(total_pax_sic_adult) / pax_adult_count) * single_share_adult_count) ;

                            
                            var sub_total_adult_double = parseInt(hotel_rate_adult_double) +
                              parseInt(intrnal_transfer_avg * (parseInt(double_share_adult_count))) +
                              parseInt(point_transfer_avg * (parseInt(double_share_adult_count))) +
                              ((parseInt(total_pax_TKT_adult) / pax_adult_count) * double_share_adult_count) +
                              ((parseInt(total_pax_visa_price_adult) / pax_adult_count) * double_share_adult_count) +
                              ((parseInt(total_pax_otb_price_adult) / pax_adult_count) * double_share_adult_count) +
                              ((parseInt(total_pax_meal_adult) / pax_adult_count) * double_share_adult_count) +
                              ((parseInt(total_pax_pvt_adult) / pax_adult_count) * double_share_adult_count) +
                              ((parseInt(total_pax_meals_adult) / pax_adult_count) * double_share_adult_count) +
                              ((parseInt(total_pax_sic_adult) / pax_adult_count) * double_share_adult_count) ;

                            var sub_total_adult_triple = parseInt(hotel_rate_adult_triple) +
                              parseInt(intrnal_transfer_avg * (parseInt(triple_share_adult_count))) +
                              parseInt(point_transfer_avg * (parseInt(triple_share_adult_count))) +
                              ((parseInt(total_pax_TKT_adult) / pax_adult_count) * triple_share_adult_count) +
                              ((parseInt(total_pax_visa_price_adult) / pax_adult_count) * triple_share_adult_count) +
                              ((parseInt(total_pax_otb_price_adult) / pax_adult_count) * triple_share_adult_count) +
                              ((parseInt(total_pax_meal_adult) / pax_adult_count) * triple_share_adult_count) +
                              ((parseInt(total_pax_pvt_adult) / pax_adult_count) * triple_share_adult_count) +
                              ((parseInt(total_pax_meals_adult) / pax_adult_count) * triple_share_adult_count) +
                              ((parseInt(total_pax_sic_adult) / pax_adult_count) * triple_share_adult_count) ;

                            var hotel_rate_child = $("#hotel_rate_child").val();
                            var total_pax_pvt_hild = $("#total_pax_pvt_hild").val();
                            var total_pax_sic_hild = $("#total_pax_sic_hild").val();
                            var total_pax_meal_child = $("#total_pax_meal_child").val();
                            var total_pax_visa_price_child = $("#total_pax_visa_price_child").val();
                            var total_pax_otb_price_child = $("#total_pax_otb_price_child").val();
                            var total_pax_TKT_child = $("#total_pax_TKT_child").val();
                            var total_pax_meals_child = $("#total_pax_meals_child").val();

                            var sub_total_child = parseInt(hotel_rate_child) +
                              parseInt(intrnal_transfer_avg * (parseInt(childWithBedCount))) +
                              parseInt(point_transfer_avg * (parseInt(childWithBedCount))) +
                              ((parseInt(total_pax_sic_hild) / (pax_child_count > 0 ? pax_child_count : 1)) * childWithBedCount ) +
                              ((parseInt(total_pax_pvt_hild) / (pax_child_count > 0 ? pax_child_count : 1)) * childWithBedCount ) +
                              ((parseInt(total_pax_meal_child)  / (pax_child_count > 0 ? pax_child_count : 1)) * childWithBedCount ) +
                              ((parseInt(total_pax_TKT_child) / (pax_child_count > 0 ? pax_child_count : 1)) * childWithBedCount ) +
                              ((parseInt(total_pax_otb_price_child) / (pax_child_count > 0 ? pax_child_count : 1)) * childWithBedCount )+
                              ((parseInt(total_pax_meals_child) / (pax_child_count > 0 ? pax_child_count : 1)) * childWithBedCount ) +
                              ((parseInt(total_pax_visa_price_child) / (pax_child_count > 0 ? pax_child_count : 1))* childWithBedCount );

                            var hotel_rate_infant = $("#hotel_rate_infant").val();
                            var total_pax_visa_price_infant = $("#total_pax_visa_price_infant").val();
                            var total_pax_otb_price_infant = $("#total_pax_otb_price_infant").val();
                            var total_pax_pvt_infant = $("#total_pax_pvt_infant").val();
                            var total_pax_sic_infant = $("#total_pax_sic_infant").val();
                            var total_pax_TKT_infant = $("#total_pax_TKT_infant").val();

                            var sub_total_infant = parseInt(total_pax_visa_price_infant) + parseInt(total_pax_otb_price_infant) +
                              // parseInt(hotel_rate_infant) +
                              parseInt(total_pax_TKT_infant) +
                              parseInt(total_pax_pvt_infant) +
                              parseInt(total_pax_sic_infant);

                            var sub_total_cnb = parseInt(hotel_rate_infant) +
                              parseInt(intrnal_transfer_avg * (parseInt(childWithNotBedCount))) +
                              parseInt(point_transfer_avg * (parseInt(childWithNotBedCount))) +
                              ((parseInt(total_pax_sic_hild) / (pax_child_count > 0 ? pax_child_count : 1)) * childWithNotBedCount ) +
                              ((parseInt(total_pax_pvt_hild) / (pax_child_count > 0 ? pax_child_count : 1)) * childWithNotBedCount ) +
                              ((parseInt(total_pax_meal_child)  / (pax_child_count > 0 ? pax_child_count : 1)) * childWithNotBedCount ) +
                              ((parseInt(total_pax_TKT_child) / (pax_child_count > 0 ? pax_child_count : 1)) * childWithNotBedCount ) +
                              ((parseInt(total_pax_otb_price_child) / (pax_child_count > 0 ? pax_child_count : 1)) * childWithNotBedCount )+
                              ((parseInt(total_pax_meals_child) / (pax_child_count > 0 ? pax_child_count : 1)) * childWithNotBedCount ) +
                              ((parseInt(total_pax_visa_price_child) / (pax_child_count > 0 ? pax_child_count : 1))* childWithNotBedCount );

                            let c_type = document.getElementById('currencyOption').value;
                            var usd_aed = <?php echo $usd_to_aed->usd_to_aed; ?>;

                            // $("#subtotal_adults_single").val(c_type == 'USD' ? (sub_total_adult_single / usd_aed).toFixed(2) : sub_total_adult_single);
                            $("#subtotal_adults_double").val(c_type == 'USD' ? (sub_total_adult_double / usd_aed).toFixed(2) : sub_total_adult_double);
                            $("#subtotal_adults_triple").val(c_type == 'USD' ? (sub_total_adult_triple / usd_aed).toFixed(2) : sub_total_adult_triple);

                            $("#subtotal_adults").val(c_type == 'USD' ? (sub_total_adult / usd_aed).toFixed(2) : sub_total_adult);
                            $("#subtotal_childs").val(c_type == 'USD' ? (sub_total_child / usd_aed).toFixed(2) : sub_total_child);
                            $("#subtotal_infants").val(c_type == 'USD' ? (sub_total_infant / usd_aed).toFixed(2) : sub_total_infant);
                            $("#subtotal_cnb").val(c_type == 'USD' ? (sub_total_cnb / usd_aed).toFixed(2) : sub_total_cnb);

                            var PackageMarkup = $("#PackageMarkup").val();
                            var Mark_up = $("#Mark_up").val();

                            var total_adult_single = 0;
                            var total_adult_double = 0;
                            var total_adult_triple = 0;

                            var total_adult = 0;
                            var total_child = 0;
                            var total_infant = 0;
                            if (Mark_up == "precentage") {

                              total_adult_single = (parseInt(sub_total_adult_single) + (parseInt(sub_total_adult_single) * parseInt(PackageMarkup) / 100));
                              total_adult_double = (parseInt(sub_total_adult_double) + (parseInt(sub_total_adult_double) * parseInt(PackageMarkup) / 100));
                              total_adult_triple = (parseInt(sub_total_adult_triple) + (parseInt(sub_total_adult_triple) * parseInt(PackageMarkup) / 100));

                              total_adult = (parseInt(sub_total_adult) + (parseInt(sub_total_adult) * parseInt(PackageMarkup) / 100));
                              total_child = (parseInt(sub_total_child) + (parseInt(sub_total_child) * parseInt(PackageMarkup) / 100));
                              total_infant = (parseInt(sub_total_infant) + (parseInt(sub_total_infant) * parseInt(PackageMarkup) / 100));
                              total_cnb = (parseInt(sub_total_cnb) + (parseInt(sub_total_cnb) * parseInt(PackageMarkup) / 100));

                            }

                            markup_per = parseInt(PackageMarkup) / parseInt(pax_adult_count + pax_child_count + pax_infant_count);

                            if (Mark_up == "values") {

                              // total_adult_single = (parseInt(sub_total_adult_single) + parseInt(PackageMarkup));
                              total_adult_double = (parseInt(sub_total_adult_double) + parseInt(PackageMarkup));
                              total_adult_triple = (parseInt(sub_total_adult_triple) + parseInt(PackageMarkup));

                              total_adult = pax_adult_count > 0 ? (parseInt(sub_total_adult) + parseInt(markup_per * pax_adult_count)) : 0;
                              total_child = childWithBedCount > 0 ? (parseInt(sub_total_child) + parseInt(markup_per * childWithBedCount)) : 0;
                              total_infant = pax_infant_count > 0 ? (parseInt(sub_total_infant) + parseInt(markup_per * pax_infant_count)) : 0;
                              total_cnb = pax_cnb_count > 0 ? (parseInt(sub_total_cnb) + parseInt(markup_per * pax_cnb_count)) : 0;

                            }

                            // $("#totalprice_adult_single").val(c_type == 'USD' ? (total_adult_single / usd_aed).toFixed(2) : total_adult_single);
                            $("#totalprice_adult_double").val(c_type == 'USD' ? (total_adult_double / usd_aed).toFixed(2) : total_adult_double);
                            $("#totalprice_adult_triple").val(c_type == 'USD' ? (total_adult_triple / usd_aed).toFixed(2) : total_adult_triple);

                            $("#totalprice_adult").val(c_type == 'USD' ? (total_adult / usd_aed).toFixed(2) : total_adult);
                            $("#totalprice_childs").val(c_type == 'USD' ? (total_child / usd_aed).toFixed(2) : total_child);
                            $("#totalprice_infants").val(c_type == 'USD' ? (total_infant / usd_aed).toFixed(2) : total_infant);
                            $("#totalprice_cnb").val(c_type == 'USD' ? (total_cnb / usd_aed).toFixed(2) : total_cnb);

                            // var per_pax_adult_single = Math.ceil(hotel_pax_adult_single > 1 ? parseInt(total_adult_single) / hotel_pax_adult_single : parseInt(total_adult_single));
                            var per_pax_adult_double = Math.ceil(double_share_adult_count > 1 ? parseInt(total_adult_double) / double_share_adult_count : parseInt(total_adult_double));
                            var per_pax_adult_triple = Math.ceil(triple_share_adult_count > 1 ? parseInt(total_adult_triple) / triple_share_adult_count : parseInt(total_adult_triple));

                            var per_pax_adult = (single_share_adult_count > 1 ? parseInt(total_adult) / single_share_adult_count : parseInt(total_adult));

                            var per_pax_child = (childWithBedCount > 1 ? parseInt(total_child) / childWithBedCount : parseInt(total_child));

                            var per_pax_infant = (pax_infant_count > 1 ? (parseInt(total_infant) / pax_infant_count) : parseInt(total_infant));

                            var per_pax_cnb = (pax_cnb_count > 1 ? (parseInt(total_cnb) / pax_cnb_count) : parseInt(total_cnb));

                            // $("#perpax_adult_single").val(c_type == 'USD' ? (per_pax_adult_single / usd_aed).toFixed(2) : per_pax_adult_single);
                            $("#perpax_adult_double").val(c_type == 'USD' ? (per_pax_adult_double / usd_aed).toFixed(2) : per_pax_adult_double);
                            $("#perpax_adult_triple").val(c_type == 'USD' ? (per_pax_adult_triple / usd_aed).toFixed(2) : per_pax_adult_triple);

                            $("#perpax_adult").val(c_type == 'USD' ? Math.floor(per_pax_adult / usd_aed) : Math.floor(per_pax_adult));
                            $("#perpax_childs").val(c_type == 'USD' ? Math.floor(per_pax_child / usd_aed) : Math.floor(per_pax_child));
                            $("#perpax_infants").val(c_type == 'USD' ? Math.floor(per_pax_infant / usd_aed) : Math.floor(per_pax_infant));
                            $("#perpax_cnb").val(c_type == 'USD' ? Math.floor(per_pax_cnb / usd_aed) : Math.floor(per_pax_cnb));

                            $("#perpax_adult_input").val(c_type == 'USD' ? Math.floor(per_pax_adult / usd_aed) : Math.floor(per_pax_adult));
                            // $("#perpax_adult_input_single").val(c_type == 'USD' ? (per_pax_adult_single / usd_aed).toFixed(2) : per_pax_adult_single);
                            $("#perpax_adult_input_double").val(c_type == 'USD' ? (per_pax_adult_double / usd_aed).toFixed(2) : per_pax_adult_double);
                            $("#perpax_adult_input_triple").val(c_type == 'USD' ? (per_pax_adult_triple / usd_aed).toFixed(2) : per_pax_adult_triple);
                            $("#perpax_childs_input").val(c_type == 'USD' ? Math.floor(per_pax_child / usd_aed) : Math.floor(per_pax_child));
                            $("#perpax_infants_input").val(c_type == 'USD' ? Math.floor(per_pax_infant / usd_aed) : Math.floor(per_pax_infant));
                            $("#perpax_cnb_input").val(c_type == 'USD' ? Math.floor(per_pax_cnb / usd_aed) : Math.floor(per_pax_cnb));
                            var totalprice_package = total_adult + total_child + total_infant + total_cnb + total_adult_double + total_adult_triple;
                            $("#totalprice_package").val(totalprice_package);

                          })

                        })

                        var ex_faqs_row2 = 1;
                        var meal_adult_count = <?php echo $view->Packagetravelers; ?>;
                        var meal_child_count = <?php echo $buildpackage->child; ?>;

                        function ex_addrowss() {
                          var cnt = $('#ex_rows_count').val();
                          $('#ex_rows_count').val(parseInt(cnt) + parseInt(1));                                        
                                          

                          var adds = '';
                          adds += '<tr id="ex_faqs-row' + ex_faqs_row2 + '"><td><input class="form-control ex_meals_date" type="date" value="<?php echo $view->specificDate; ?>" min="<?php echo $view->specificDate; ?>" max="<?php echo date('Y-m-d', strtotime($view->specificDate . ' + ' . (($buildpackage->night) - (1)) . ' days')); ?>" name="ex_meals_date[]" id="meals_date' + ex_faqs_row2 + '"></td>';
                          adds += '<td> <div> <select data-mdl-for="sample2" class="form-control ex_res_type" value="" tabIndex="-1" id="ex_res_type' + ex_faqs_row2 + '" name="ex_res_type[]" onchange="get_resturant_name_ex(this.id,' + ex_faqs_row2 + ');"> <option value="">Select Option</option> <option selected value="Standard">Standard</option> <option value="Premium">Premium</option> </select> </div> </td>';
                          adds += '<td><select data-mdl-for="sample2" class="form-control ex_res_name" value=""  tabIndex="-1" name="ex_res_name[]" id="ex_res_name' + ex_faqs_row2 + '"  ><option>select</option></select></td>'
                          adds += '<td> <div> <select data-mdl-for="sample2" class="form-control ex_meal" value="" tabIndex="-1" id="ex_meal_cal' + ex_faqs_row2 + '" name="ex_meal[]"> <option value="Dinner">Dinner</option><option value="Breakfast">Breakfast</option> <option value="Lunch">Lunch</option>  </select> </div> </td>';
                          adds += '<td> <div> <select data-mdl-for="sample2" class="form-control ex_meal_type" value="" tabIndex="-1" id="ex_meal_type_cal' + ex_faqs_row2 + '" name="ex_meal_type[]"> <option value="Veg">Veg</option> <option value="Non-Veg">Non-Veg</option> <option value="Veg & Non-Veg">Veg & Non-Veg</option> <option value="Jain">Jain</option> </select> </div> </td>';
                          adds += '<td><input type="number" id="ex_no_of_meals' + ex_faqs_row2 + '" class="form-control ex_no_of_meals" name="ex_no_of_meals[]" >';
                          adds += ' <td><input type="text" placeholder="0" value="' + meal_adult_count + '" class="form-control ex_meal_adult" id="adult_meal_cal' + ex_faqs_row2 + '" name="ex_meal_adult[]" > </td>';
                          adds += '<td><input type="text" placeholder="0"  value="' + meal_child_count + '" class="form-control ex_meal_child" id="child_meal_cal' + ex_faqs_row2 + '" name="ex_meal_child[]" <?php if ($buildpackage->child == 0) echo "disabled"; ?>>';
                          adds += '</td> <td><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + ex_faqs_row2 + '\').remove();"><i class="fa fa-trash"></i></button> </td>';
                          adds += '</tr>';

                          $('#ex_mealsRow').append(adds);
                          // mealsReturnTransferShowHide(ex_faqs_row2);
                          // $('#total_rows_meal').val(parseInt(ex_faqs_row2));

                          ex_faqs_row2++;
                        }

                        $("#ex_meals_status").on("change", function() {
                          $("#ex_addrowss").show();
                        })

                        $("#ex_meals_status1").on("change", function() {
                          $("#ex_addrowss").hide();
                        })

                        function excursionMeal() {
                          var total_rows = $('#meals_table tbody#ex_mealsRow tr').length;
                          var QueryId = $('#QueryId').val();

                          var resturants_name = [];
                          $(".ex_res_name").each(function() {
                            var resturant_name = $(this).val();
                            resturants_name.push($.trim(resturant_name));

                          });

                          var resturants = [];
                          $(".ex_res_type").each(function() {
                            var resturant = $(this).val();
                            resturants.push($.trim(resturant));

                          });

                          var meals = [];
                          $(".ex_meal").each(function() {
                            var meal = $(this).val();
                            meals.push($.trim(meal));

                          });


                          var meal_types = [];
                          $(".ex_meal_type").each(function() {
                            var meal_type = $(this).val();
                            meal_types.push($.trim(meal_type));

                          });

                          var meal_adults = [];
                          $(".ex_meal_adult").each(function() {
                            var meal_adult = $(this).val();
                            if (!meal_adult) meal_adult = 0;
                            meal_adults.push($.trim(meal_adult));

                          });

                          var meal_childs = [];
                          $(".ex_meal_child").each(function() {
                            var meal_child = $(this).val();
                            if (!meal_child) meal_child = 0;
                            meal_childs.push($.trim(meal_child));

                          });

                          var no_of_meals = [];
                          $(".ex_no_of_meals").each(function() {
                            var no_of_meal = $(this).val();
                            if (!no_of_meal) no_of_meal = 0;
                            no_of_meals.push($.trim(no_of_meal));

                          });

                          var meals_date = [];
                          $(".ex_meals_date").each(function() {
                            var meals = $(this).val();
                            meals_date.push($.trim(meals));

                          });

                          var data = [{
                            'resturants': resturants,
                            'meals': meals,
                            'meal_types': meal_types,
                            'meal_adults': meal_adults,
                            'meal_childs': meal_childs,
                            'resturants_name': resturants_name,
                            'no_of_meals': no_of_meals,
                            'meals_date': meals_date,

                          }];

                          $.ajax({
                            type: "POST",
                            dataType: "json",
                            url: '<?php echo site_url(); ?>/Query/getExcursionMealCalc',
                            data: {
                              data: data,
                              total_rows: total_rows,
                              query_id: QueryId,

                            },
                            success: function(response) {
                              $("#total_pax_meals_adult").val(response.adult_prices);
                              $("#total_pax_meals_child").val(response.child_prices);
                              $(".card-box").click();
                              toastr.success("Meals Saved Successfully");
                            }
                          })

                        }

                        var faqs_row2 = 1;

                        function addrowss() {
                          var cnt = $('#rows_count').val();
                          $('#rows_count').val(parseInt(cnt) + parseInt(1));
                          var adds = '<div class="row mb-3" style="border-top: 1px solid;" id="faqs-row' + faqs_row2 + '"> <table style="border-spacing: 10px;border-collapse: separate;"> <thead><tr><th style="width: 200;">Transfer Type</th><th>Date</th><th>Resturant Type</th><th>Resturant Name</th><th>Meal</th><th>Meal Type</th><th>No. of Meals</th><th style="width:100">Adult</th><th style="width:100">Child</th><th>Action</th></tr></thead><tbody style="border-bottom: #ff000000;"> <tr>';
                          adds += '<td><input type="radio"   id="with_transfer' + faqs_row2 + '" onchange="mealsTransferTypeChange(' + faqs_row2 + ')" class="transfer_with_or_without" name="transfer_with_or_without' + faqs_row2 + '[]" value="with_transfer" onclick="get_resturant_name(this.id,' + faqs_row2 + ');"/> With Transfer<br/><input type="radio" class="transfer_with_or_without" checked="checked" onchange="mealsTransferTypeHide(' + faqs_row2 + ')" id="without_transfer' + faqs_row2 + '" name="transfer_with_or_without' + faqs_row2 + '[]" value="without_transfer" onclick="get_resturant_name(this.id,' + faqs_row2 + ');"/> Without Transfer </td>';
                          adds += '<td><input class="form-control checkIn_date" type="date" value="<?php echo $view->specificDate; ?>" min="<?php echo $view->specificDate; ?>" max="<?php echo date('Y-m-d', strtotime($view->specificDate . ' + ' . (($buildpackage->night) - (1)) . ' days')); ?>" name="buildCheckIn[]" id="buildCheckIn' + faqs_row2 + '"></td>';
                          adds += '<td> <div> <select data-mdl-for="sample2" class="form-control rest_type" value="" tabIndex="-1" id="res_type' + faqs_row2 + '" name="res_type[]" onchange="get_resturant_name(this.id,' + faqs_row2 + ');"> <option selected value="Standard">Standard</option> <option value="Premium">Premium</option> </select> </div> </td>';
                          // adds += '<td><input class="form-control " type="text" value="" name="res_name[]" id="res_name'+faqs_row2 + '"></td>';
                          adds += '<td><select data-mdl-for="sample2" class="js-example-basic-multiple form-control res_name" value=""  tabIndex="-1" name="res_name[]" id="res_name' + faqs_row2 + '"  ><option>select</option></select></td>'
                          adds += '<td> <div> <select data-mdl-for="sample2" class="form-control meal" value="" tabIndex="-1" id="meal_cal' + faqs_row2 + '" name="Meal[]"> <option value="Dinner">Dinner</option> <option value="Breakfast">Breakfast</option> <option value="Lunch">Lunch</option>  </select> </div> </td>';
                          adds += '<td> <div> <select data-mdl-for="sample2" class="form-control meal_type" value="" tabIndex="-1" id="meal_type_cal' + faqs_row2 + '" name="Meal_Type[]"> <option value="Veg">Veg</option> <option value="Non-Veg">Non-Veg</option> <option value="Veg & Non-Veg">Veg & Non-Veg</option> <option value="Jain">Jain</option> </select> </div> </td>';
                          adds += '<td><input type="number" id="no_of_meals' + faqs_row2 + '" class="form-control no_of_meals" name="no_of_meals[]" >';
                          adds += ' <td><input type="text" placeholder="0" class="form-control meal_adult" id="adult_meal_cal' + faqs_row2 + '" name="adult[]" > </td>';
                          adds += '<td><input type="text" placeholder="0" class="form-control meal_child" id="child_meal_cal' + faqs_row2 + '" name="child[]" <?php if ($buildpackage->child == 0) echo "disabled"; ?>>';
                          adds += '</td> <td><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row2 + '\').remove();"><i class="fa fa-trash"></i></button> </td>';
                          // adds += '</td> <td><button class="btn btn-danger btn-xs" onClick="return removeMeals(this)"><i class="fa fa-trash"></i></button> </td>';
                          adds += '</tr> </tbody> </table>';

                          adds += `<div class="">
                                <div class="row mt-4 mr-3 ml-3 mb-3" id="mealTransferMain${faqs_row2}" style="display: none;">
                                  <div class="col">
                                    <label for="" class="transport-lable"><b>Transport Type</b>:</label>
                                    <input type="checkbox" name="mealTransTypeInt" id="mealTransTypeInt${faqs_row2}" onchange="mealsInterTransferShowHide(${faqs_row2})" class="mr-3 ml-2 " value="Internal Transfer"><span class="transport-lable-ckeck">Internal City/Hotel Transfer</span><span class="checkmark"></span>
                                    <input type="checkbox" name="mealTransTypeRet" id="mealTransTypeRet${faqs_row2}" onchange="mealsReturnTransferShowHide(${faqs_row2})" checked class="mr-3 ml-2 " value="Point to Point Transfer"><span class="transport-lable-ckeck">Airport Return Transfer</span><span class="checkmark"></span>
                                  </div>
                                  <div>
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th scope="col">Transport type</th>
                                          <th scope="col">Pax</th>
                                          <th scope="col">Form Date</th>
                                          <th scope="col">Pickup Location</th>
                                          <th scope="col">Drop Off Location </th>
                                          <th scope="col">Route Name</th>
                                        </tr>
                                      </thead>
                                      <tbody id="transfer_body${faqs_row2}">
                                        <tr id="mealInternalTransfer${faqs_row2}" style="display: none;">
                                          <th>Internal City/Hotel Transfer</th>
                                          <td><input class="form-control" type="number" id="pax_internal_meal${faqs_row2}" placeholder="Pax" value="<?php echo $view->Packagetravelers + $buildpackage->child; ?>" name="buildTravelFromCityCab[]" disabled></td>
                                          <td><input class="form-control internal_transfer_date" type="date" value="<?php echo $view->specificDate; ?>" id="internal_meal_date${faqs_row2}" name="internal_meal_date[]"></td>
                                          <td>
                                            <select id="pickup_internal_meal${faqs_row2}" onchange="fetchMealInternalTransferDropoff(${faqs_row2})" required name="pickup_internal_meal[]" class="pickup_internal_meal js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                              <option value="">Pickup</option>
                                            </select>
                                          </td>
                                          <td>
                                            <select id="dropoff_internal_meal${faqs_row2}" onchange="fetchMealInternalTransferPrice(${faqs_row2})" name="dropoff_internal_meal[]" class="dropoff_internal_meal js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                              <option value="">Drop Off</option>
                                            </select>
                                          </td>
                                          <td>
                                            <input id="route_name_internal_meal${faqs_row2}" name="route_name_internal_meal[]" class="form-control route_name_internal_meal" type="text" placeholder="Route Name">
                                          </td>
                                        </tr>

                                        <tr id="mealReturnTransfer${faqs_row2}">
                                          <th>Airport Return Transfer</th>
                                          <td><input class="form-control" id="pax_return_meal${faqs_row2}" type="text" placeholder="Pax" value="<?php echo $view->Packagetravelers + $buildpackage->child; ?>" name="pax_return_meal[]" disabled></td>
                                          <td><input class="form-control return_transfer_date" id="return_meal_date${faqs_row2}" type="date" value="<?php echo $view->specificDate; ?>" name="return_meal_date[]"></td>
                                          <td>
                                            <select id="pickup_return_meal${faqs_row2}" onchange="fetchMealReturnTransferDropoff(${faqs_row2})" required name="pickup_return_meal[]" class="pickup_return_meal js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                              <option value="">Pickup</option>
                                            </select>
                                          </td>
                                          <td>
                                            <select id="dropoff_return_meal${faqs_row2}" onchange="fetchMealReturnTransferPrice(${faqs_row2})"  name="dropoff_return_meal[]" class="dropoff_return_meal js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                              <option value="">Drop Off</option>
                                            </select>
                                          </td>
                                          <td><input id="route_name_return_meal${faqs_row2}" class="form-control route_name_return_meal" type="text" placeholder="Route Name" name="route_name_return_meal[]"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    
                                  </div>
                                  </div>
                                  </div> </div>`;

                          $('#addrowss').append(adds);
                          mealsReturnTransferShowHide(faqs_row2);
                          $('#total_rows_meal').val(parseInt(faqs_row2));

                          faqs_row2++;
                        }

                        var trans_rows = 0;

                        function transRow() {
                          var cnt = $('#rows_count').val();
                          $('#rows_count').val(parseInt(cnt) + parseInt(1));
                          var adds = ' <tr  id="PvtCab' + trans_rows + '"> <th>Internal City/Hotel Transfer</th>';
                          adds += '<td><input class="form-control" type="number" id="pax_internal' + trans_rows + '" placeholder="Pax" value="<?php echo $view->Packagetravelers + $buildpackage->child; ?>" name="buildTravelFromCityCab[]" disabled></td>';
                          adds += '<td><input class="form-control internal_transfer_date" type="date" value="<?php echo $view->specificDate; ?>" id="buildTravelFromdateCab" name="buildTravelFromdateCab[]"></td>';
                          adds += `<td>
                                    <select id="pickupinternal${trans_rows}"  onchange="pickupInternal(${trans_rows})" required  name="buildTravelToDateCab[]"  class="internal_transfer_pickup js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                      <option value="Pickup">Pickup</option>
                                      <?php foreach ($transfer_route as $value) { ?>
                                      <option value="<?php echo $value->start_city ?>"><?php echo $value->start_city ?></option>
                                      <?php } ?>
                                    </select>
                                  </td>`;

                          adds += `
                                <td>
                                  <select id="dropoffinternal${trans_rows}" name="buildTravelToCityCabDrop[]"  onchange="dropInternal(${trans_rows})" class="internal_transfer_dropoff js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                  <option value="Drop Off">Drop Off</option>
                                  </select>
                                </td>
                                `;

                          adds += `
                                <td>
                                  <input id="price_internal${trans_rows}" type="hidden" name="price_internal[]" />
                                  <input id="pax_count_internal${trans_rows}" type="hidden" name="pax_count_internal[]" />
                                  <input id="total_price_internal${trans_rows}" type="hidden" value="0" name="total_price_internal[]" />
                                  <input id="route_nameinternal${trans_rows}" class="form-control internal_transfer_route" type="text" placeholder="Route Name" name="buildTravelTypeCab[]">
                                </td>
                                `;

                          adds += '</td> <td><button class="btn btn-danger btn-xs" onClick="$(\'#PvtCab' + trans_rows + '\').remove();"><i class="fa fa-trash"></i></button> </td>';
                          adds += '</tr>';
                          $('#transfer_body').append(adds);
                          pickupFromTransfer(trans_rows);
                          trans_rows++;
                        }


                        var trans_retrun_rows = 0;

                        function transReturnRow() {
                          var cnt = $('#rows_count').val();
                          $('#rows_count').val(parseInt(cnt) + parseInt(1));
                          var adds = ' <tr  id="Sic' + trans_retrun_rows + '"> <th>Airport Return Transfer</th>';

                          adds += '<td><input class="form-control" id="pax_point' + trans_retrun_rows + '" type="text" placeholder="Pax" value="<?php echo $view->Packagetravelers + $buildpackage->child; ?>" name="buildTravelFromCitySIC[]" disabled></td>';
                          adds += '<td><input class="form-control return_transfer_date" id="buildTravelFromdatePVT' + trans_retrun_rows + '" type="date" value="<?php echo $view->specificDate; ?>" name="buildTravelFromdatePVT[]"></td>';

                          adds += `<td> 
                                    <select id="pickuppoint${trans_retrun_rows}" onchange="pickupReturn(${trans_retrun_rows})" required  name="buildTravelToDateSIC[]"  class="return_transfer_pickup js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                      <option value="Pickup">Pickup</option>
                                    </select>
                                  </td>`;

                          adds += `
                                <td>
                                  <select id="dropoffpoint${trans_retrun_rows}" name="buildTravelToCitySIC[]"  onchange="dropReturn(${trans_retrun_rows})" class="return_transfer_dropoff js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                  <option value="Drop Off">Drop Off</option>
                                  </select>
                                </td>
                                `;

                          adds += '<td><input id="route_namepoint' + trans_retrun_rows + '" class="form-control return_transfer_route" type="text" placeholder="Route Name" name="buildTravelTypeSIC[]"></td>';

                          adds += `
                                
                                  <input id="price_point${trans_retrun_rows}" type="hidden" name="price_point[]" />
                                  <input id="pax_count_point${trans_retrun_rows}" type="hidden" name="pax_count_point[]" />
                                  <input id="total_price_point${trans_retrun_rows}" type="hidden" value="0" name="total_price_point[]" />
                               
                                `;

                          adds += '</td> <td><button class="btn btn-danger btn-xs" onClick="$(\'#Sic' + trans_retrun_rows + '\').remove();"><i class="fa fa-trash"></i></button> </td>';
                          adds += '</tr>';
                          $('#transfer_body').append(adds);
                          pickupFromReturn(trans_retrun_rows);

                          trans_retrun_rows++;
                        }
                      </script>

                      </table>

                    </div>
                  </div>
                  <div>
                    <div class="mt-5">
                      <div>
                        <div class="card-head card-head-new ">
                          <p>Pricing Info</p>
                        </div>
                        <div class="row mt-4 mr-3 ml-3 mb-3" <table class="table table-bordered">
                          <tbody>
                          </tbody>
                          </table>
                          <table>
                            <tr>
                              <td><b>Currency</b></td>
                              <td><select class="form-control" id="currencyOption" name="currencyOption">

                                  <option value="AED">AED</option>
                                  <option value="USD">USD</option>
                                </select></td>
                            </tr>
                            </tbody>
                          </table>
                          <div></div>
                          </br>
                          <table>
                            <tr>
                              <td><b>Mark Up</b></td>
                              <td><select class="form-control" id="Mark_up" name="Mark_up">
                                  <option value="precentage">%</option>
                                  <option value="values">Value</option>
                                </select></td>
                              <td><input type="text" class="form-control" name="PackageMarkup" id="PackageMarkup" value="0"></td>
                            </tr>
                          </table>
                          </br>
                          </br>
                          <table class="table table-bordered card-box" style="font-size:16px;">
                            <tr class="text-center">
                              <td></td>
                              <td>Single Sharing</td>
                              <td>Double Sharing</td>
                              <td>Triple Sharing</td>
                              <td>CWB</td>
                              <td>CNB</td>
                              <td>Infant</td>
                            </tr>

                            <tr class="text-center">
                              <td><b>Sub Total</b></td>
                              <td> <input type="text"  class="text-center w-50" id="subtotal_adults" name="subtotal_adults" value="0"></td>
                              <!-- <td> <input type="text"  class="text-center" id="subtotal_adults_single" name="subtotal_adults_single" value="0"></td> -->
                              <td> <input type="text"  class="text-center w-50" id="subtotal_adults_double" name="subtotal_adults_double" value="0"></td>
                              <td> <input type="text"  class="text-center w-50" id="subtotal_adults_triple" name="subtotal_adults_triple" value="0"></td>
                              <td> <input type="text"  class="text-center w-50" id="subtotal_childs" name="subtotal_childs" value="0"></td>
                              <td> <input type="text"  class="text-center w-50" id="subtotal_cnb" name="subtotal_cnb" value="0"></td>
                              <td> <input type="text"  class="text-center w-50" id="subtotal_infants" name="subtotal_infants" value="0"></td>
                            </tr>
                            <tr class="text-center">
                              <td><b>Total Price</b></td>
                              <td> <input type="text"  class="text-center w-50" name="totalprice_adult" id="totalprice_adult" value="0"></td>
                              <!-- <td> <input type="text"  class="text-center" name="totalprice_adult_single" id="totalprice_adult_single" value="0"></td> -->
                              <td> <input type="text"  class="text-center w-50" name="totalprice_adult_double" id="totalprice_adult_double" value="0"></td>
                              <td> <input type="text"  class="text-center w-50" name="totalprice_adult_triple" id="totalprice_adult_triple" value="0"></td>
                              <td> <input type="text"  class="text-center w-50" name="totalprice_childs" id="totalprice_childs" value="0"></td>
                              <td> <input type="text"  class="text-center w-50" name="totalprice_cnb" id="totalprice_cnb" value="0"></td>
                              <td> <input type="text"  class="text-center w-50" name="totalprice_infants" id="totalprice_infants" value="0"></td>
                            </tr>
                            <tr class="text-center">
                              <td><b>Per PAX</b></td>
                              <td> <input type="text"  class="text-center w-50" name="perpax_adult" id="perpax_adult" value="0"></td>
                              <!-- <td> <input type="text"  class="text-center" name="perpax_adult_single" id="perpax_adult_single" value="0"></td> -->
                              <td> <input type="text"  class="text-center w-50" name="perpax_adult_double" id="perpax_adult_double" value="0"></td>
                              <td> <input type="text"  class="text-center w-50" name="perpax_adult_triple" id="perpax_adult_triple" value="0"></td>
                              <td> <input type="text"  class="text-center w-50" name="perpax_childs" id="perpax_childs" value="0"></td>
                              <td> <input type="text"  class="text-center w-50" name="perpax_cnb" id="perpax_cnb" value="0"></td>
                              <td> <input type="text"  class="text-center w-50" name="perpax_infants" id="perpax_infants" value="0"></td>
                            </tr>
                          </table>
                          <input type="hidden" id="perpax_adult_input" name="perpax_adult_input" value="0" />
                          <input type="hidden" id="perpax_adult_input_single" name="perpax_adult_input_single" value="" />
                          <input type="hidden" id="perpax_adult_input_double" name="perpax_adult_input_double" value="" />
                          <input type="hidden" id="perpax_adult_input_triple" name="perpax_adult_input_triple" value="" />
                          <input type="hidden" id="perpax_childs_input" name="perpax_childs_input" value="0" />
                          <input type="hidden" id="perpax_cnb_input" name="perpax_cnb_input" value="0" />
                          <input type="hidden" id="perpax_infants_input" name="perpax_infants_input" value="0" />

                        </div>
                      </div>
                    </div>
                    <input type="hidden" id="QueryId" name="QueryId" value="<?php echo $view->query_id; ?>">
                    <div class="last-btn mt-4 mb-4">
                      <button id="view-proposal-btn" type="button" class="new_btn px-5 mr-4">View Proposal</button>
                    </div>

                    <input type="hidden" id="hotel_rate_adult" name="hotel_rate_adult" value="0" />
                    <input type="hidden" id="hotel_rate_adult_single" name="hotel_rate_adult_single" value="0" />
                    <input type="hidden" id="hotel_rate_adult_double" name="hotel_rate_adult_double" value="0" />
                    <input type="hidden" id="hotel_rate_adult_triple" name="hotel_rate_adult_triple" value="0" />

                    <input type="hidden" id="hotel_pax_adult" name="hotel_pax_adult" value="0" />
                    <input type="hidden" id="hotel_pax_adult_single" name="hotel_pax_adult_single" value="0" />
                    <input type="hidden" id="hotel_pax_adult_double" name="hotel_pax_adult_double" value="0" />
                    <input type="hidden" id="hotel_pax_adult_triple" name="hotel_pax_adult_triple" value="0" />

                    <input type="hidden" id="hotel_rate_child" name="hotel_rate_child" value="0" />
                    <input type="hidden" id="hotel_rate_infant" name="hotel_rate_infant" value="0" />

      </form>
    </div>
  </div>
</div>
</div>




</div>
</div>

<!-- end chat sidebar -->
</div>

<div id="ProposalPage"></div>
<input type="hidden" name="allocated_days" id="allocated_days" value="0" />

<?php $this->load->view('footer'); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment-with-locales.min.js"></script>

<script>
  function get_resturant_name_ex(id, row) {
    // var transfer = $('#'+id).val();

    var transfer = $('input[name="transfer_with_or_without' + row + '[]"]:checked').val();
    var rest_type = $('#ex_res_type' + row).val();
    $("#ex_res_name" + row).empty();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/get_resturant_name',
      data: {
        'transfer': transfer,
        'rest_type': rest_type
      },

      success: function(response) {
        var i;
        $('#ex_res_name' + row).append($("<option>Select</option>"));
        for (i = 0; i < response.length; ++i) {
          var newOption = $('#ex_res_name' + row)
            .append($("<option></option>")
              .attr("value", response[i].resturant_name)
              .text(response[i].resturant_name));


        }
      }

    })

  }

  function get_resturant_name(id, row) {
    // var transfer = $('#'+id).val();

    var transfer = $('input[name="transfer_with_or_without' + row + '[]"]:checked').val();
    var rest_type = $('#res_type' + row).val();
    $("#res_name" + row).empty();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/get_resturant_name',
      data: {
        'transfer': transfer,
        'rest_type': rest_type
      },

      success: function(response) {
        var i;
        $('#res_name' + row).append($("<option>Select</option>"));
        for (i = 0; i < response.length; ++i) {
          var newOption = $('#res_name' + row)
            .append($("<option></option>")
              .attr("value", response[i].resturant_name)
              .text(response[i].resturant_name));


        }
      }

    })

  }

  function defaultResName() {

    $("#res_name").empty();
    $("#ex_res_name").empty();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/get_resturant_name',
      data: {
        'transfer': 'without_transfer',
        'rest_type': 'Standard'
      },

      success: function(response) {
        var i;
        $('#res_name').append($("<option>Select</option>"));
        $('#ex_res_name').append($("<option>Select</option>"));
        for (i = 0; i < response.length; ++i) {
          if(response[i].resturant_name == 'kamat') {
            var newOption = $('#res_name').append($("<option selected ></option>").attr("value", response[i].resturant_name).text(response[i].resturant_name));
            var newOption = $('#ex_res_name').append($("<option selected ></option>").attr("value", response[i].resturant_name).text(response[i].resturant_name));
          } else {
            var newOption = $('#res_name').append($("<option></option>").attr("value", response[i].resturant_name).text(response[i].resturant_name));
            var newOption = $('#ex_res_name').append($("<option></option>").attr("value", response[i].resturant_name).text(response[i].resturant_name));
        }
      }
    }})
  }
  defaultResName()
  

  function get_hotel_name_new(id, row) {
    var city = $('#buildHotelCity' + row).val();
    var Category = $('#Category' + row).val();
    $("#buildHotelName" + row).empty();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/get_hotels',
      data: {
        'city': city,
        'category': Category
      },
      // data:{'city':city},

      success: function(response) {
        var i;
        $('#buildHotelName' + row).append($("<option>Select</option>"));
        for (i = 0; i < response.length; ++i) {
          var newOption = $('#buildHotelName' + row)
            .append($("<option></option>")
              .attr("value", response[i].id)
              .text(response[i].hotelname));

          // $('#buildHotelName')
          //     .append("<option value='"+response[i].id+"' selected=selected >"+response[i].hotelname+"</option>");

        }
        // response ='';
      }

    })
    // });

  }

  function get_hotel_name(id, row) {
    // $('#buildHotelCity,#Category').on('change', function() {
    var city = $('#buildHotelCity' + row).val();
    var Category = $('#Category' + row).val();
    $("#buildHotelName" + row).empty();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/get_hotels',
      data: {
        'city': city,
        'category': Category
      },
      // data:{'city':city},

      success: function(response) {
        var i;
        $('#buildHotelName' + row).append($("<option>Select</option>"));
        for (i = 0; i < response.length; ++i) {
          var newOption = $('#buildHotelName' + row)
            .append($("<option></option>")
              .attr("value", response[i].id)
              .text(response[i].hotelname));

          // $('#buildHotelName')
          //     .append("<option value='"+response[i].id+"' selected=selected >"+response[i].hotelname+"</option>");

        }
        // response ='';
      }

    })
    // });

  }

  function get_route_name_new(id, row) {
    var hotel_id = $('#buildHotelName' + row).val();
    $("#buildRoomType" + row).empty();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/get_room_type',
      data: {
        'hotel_id': hotel_id
      },
      success: function(response) {
        var j;
        $('#buildRoomType' + row).append($("<option>Select Room Type</option>"));
        for (j = 0; j < response.length; ++j) {
          // do something with `substr[i]`
          $('#buildRoomType' + row)
            .append($("<option></option>")
              .attr("value", response[j].roomtype)
              .text(response[j].roomtype));

        }

      }
    })
  }


  function get_route_name(id, row) {
    var hotel_id = $('#buildHotelName' + row).val();
    $("#buildRoomType" + row).empty();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/get_room_type',
      data: {
        'hotel_id': hotel_id
      },
      success: function(response) {
        var j;
        $('#buildRoomType' + row).append($("<option>Select Room Type</option>"));
        for (j = 0; j < response.length; ++j) {
          // do something with `substr[i]`
          $('#buildRoomType' + row)
            .append($("<option></option>")
              .attr("value", response[j].roomtype)
              .text(response[j].roomtype));

        }

      }
    })




  }
</script>

<script>
  initSample();
  $('.js-example-basic-multiple').select2();
</script>

<script>
  function getvisaprice() {
    var visa_category_drop_down = $("#visa_category_drop_down").val();
    var entry_type = $("#entry_type").val();
    var pax_adult = <?php echo $view->Packagetravelers; ?>;
    var pax_child = <?php echo $buildpackage->child; ?>;
    var pax_infant = <?php echo $buildpackage->infant; ?>;
    var visa_validity = $("#visa_validity").val();
    var QueryId = $('#QueryId').val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/getVisaPrice',
      data: {
        'pax_adult': pax_adult,
        'query_type': 'package',
        'pax_child': pax_child,
        'pax_infant': pax_infant,
        'visa_category_drop_down': visa_category_drop_down,
        'visa_validity': visa_validity,
        'entry_type': entry_type,
        'query_id': QueryId
      },
      success: function(response) {

        $("#total_pax_visa_price_adult").val(response.per_pax_adult_amt);
        $("#total_pax_visa_price_child").val(response.per_pax_child_amt);
        $("#total_pax_visa_price_infant").val(response.per_pax_infant_amt);
        $('.card-box').click();

        toastr.success("Visa Saved Successfully");

      }
    });

  }

  function getOTBprice() {

    var category = "OTB";
    var pax_adult = $("#otb_adult").val();
    var pax_child = $("#otb_child").val();
    var pax_infant = $("#otb_infant").val();
    var QueryId = $('#QueryId').val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/getOTBPrice',
      data: {
        'query_type': 'package',
        'pax_adult': pax_adult,
        'pax_child': pax_child,
        'pax_infant': pax_infant,
        'category': category,
        'query_id': QueryId
      },
      success: function(response) {
        $("#total_pax_otb_price_adult").val(response.per_pax_adult_amt);
        $("#total_pax_otb_price_child").val(response.per_pax_child_amt);
        $("#total_pax_otb_price_infant").val(response.per_pax_infant_amt);
        $('.card-box').click();

        toastr.success("OTB Saved Successfully");

      }
    });

  }
</script>

<input type="hidden" id="total_pax_visa_price_adult" name="total_pax_visa_price_adult" value="0" />
<input type="hidden" id="total_pax_visa_price_child" name="total_pax_visa_price_child" value="0" />
<input type="hidden" id="total_pax_visa_price_infant" name="total_pax_visa_price_infant" value="0" />

<input type="hidden" id="total_pax_otb_price_adult" name="total_pax_otb_price_adult" value="0" />
<input type="hidden" id="total_pax_otb_price_child" name="total_pax_otb_price_child" value="0" />
<input type="hidden" id="total_pax_otb_price_infant" name="total_pax_otb_price_infant" value="0" />

<input type="hidden" id="total_rows_meal" name="total_rows_meal" value="0" />




<script>
  function mealcalculation() {
    var total_rows = $('#faqs tbody#addrowss tr').length;
    var QueryId = $('#QueryId').val();

    var resturants_name_meals = [];
    $(".res_name").each(function() {
      var resturant_name = $(this).val();
      if(resturant_name != ""){
      resturants_name_meals.push($.trim(resturant_name));
    }
    });

    var resturants_transfer = [];
    $("input[class='transfer_with_or_without']:checked").each(function() {
      var resturant_type = $(this).val();
      resturants_transfer.push($.trim(resturant_type));
    });

    var resturants = [];
    $(".rest_type").each(function() {
      var resturant = $(this).val();
      resturants.push($.trim(resturant));
    });

    var meals = [];
    $(".meal").each(function() {
      var meal = $(this).val();
      meals.push($.trim(meal));

    });


    var meal_types = [];
    $(".meal_type").each(function() {
      var meal_type = $(this).val();
      meal_types.push($.trim(meal_type));

    });

    var meal_adults = [];
    $(".meal_adult").each(function() {
      var meal_adult = $(this).val();
      if (!meal_adult) meal_adult = 0;
      meal_adults.push($.trim(meal_adult));

    });

    var meal_childs = [];
    $(".meal_child").each(function() {
      var meal_child = $(this).val();
      if (!meal_child) meal_child = 0;
      meal_childs.push($.trim(meal_child));

    });

    var no_of_meals = [];
    $(".no_of_meals").each(function() {
      var no_of_meal = $(this).val();
      if (!no_of_meal) no_of_meal = 0;
      no_of_meals.push($.trim(no_of_meal));

    });

    var transfer_with_or_without = [];
    $(".transfer_with_or_without").each(function() {
      var transfer_wo = $(this).val();
      if (!transfer_wo) transfer_wo = 0;
      transfer_with_or_without.push($.trim(transfer_wo));
    });

    var checkIn_date = [];
    $(".checkIn_date").each(function() {
      var checkIn = $(this).val();
      if (!checkIn) checkIn = 0;
      checkIn_date.push($.trim(checkIn));
    });

    // -------------------------------------------------- //

    var pickup_internal_meal = [];
    $(".pickup_internal_meal").each(function() {
      var val = $(this).val();
      if (val != '') {
        pickup_internal_meal.push($.trim(val));
      }
    });

    var dropoff_internal_meal = [];
    $(".dropoff_internal_meal").each(function() {
      var val = $(this).val();
      if (val != '') {
        dropoff_internal_meal.push($.trim(val));
      }
    });

    var route_name_internal_meal = [];
    $(".route_name_internal_meal").each(function() {
      var val = $(this).val();
      if (val != '') {
        route_name_internal_meal.push($.trim(val));
      }
    });


    var pickup_return_meal = [];
    $(".pickup_return_meal").each(function() {
      var val = $(this).val();
      if (val != '') {
        pickup_return_meal.push($.trim(val));
      }
    });

    var dropoff_return_meal = [];
    $(".dropoff_return_meal").each(function() {
      var val = $(this).val();
      if (val != '') {
        dropoff_return_meal.push($.trim(val));
      }
    });

    var route_name_return_meal = [];
    $(".route_name_return_meal").each(function() {
      var val = $(this).val();
      if (val != '') {
        route_name_return_meal.push($.trim(val));
      }
    });

    var pax_adult = <?php echo $view->Packagetravelers; ?>;
    var pax_child = <?php echo $buildpackage->child; ?>;
    var pax_infants = <?php echo $buildpackage->infant; ?>;
    var total_pax = pax_adult + pax_child + pax_infants;


    var data = [{
      'resturants': resturants,
      'meals': meals,
      'meal_types': meal_types,
      'meal_adults': meal_adults,
      'meal_childs': meal_childs,
      'resturants_name': resturants_name_meals,
      'resturants_transfer': resturants_transfer,
      'no_of_meals': no_of_meals,
      'checkIn_date': checkIn_date,

      "internal_transfer_pickup": pickup_internal_meal,
      "internal_transfer_dropoff": dropoff_internal_meal,
      "internal_transfer_route": route_name_internal_meal,

      "return_transfer_pickup": pickup_return_meal,
      "return_transfer_dropoff": dropoff_return_meal,
      "return_transfer_route": route_name_return_meal,

      'pax_adult': pax_adult,
      'pax_child': pax_child,
      'pax_infants': pax_infants,
    }];

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/getMealcalculationNew',
      data: {
        data: data,
        total_rows: $('#total_rows_meal').val(),
        'query_id': QueryId,
        'query_type': "package"
      },
      success: function(response) {
        $("#total_pax_meal_adult").val(response.adult_prices);
        $("#total_pax_meal_child").val(response.child_prices);
        $('.card-box').click();
        toastr.success("Meals Saved Successfully");


      }
    })


  }
</script>
<input type="hidden" id="total_pax_meal_adult" name="total_pax_meal_adult" value="0" />
<input type="hidden" id="total_pax_meal_child" name="total_pax_meal_child" value="0" />

<script>
  function excursionSICcalculation() {

    var excursion_types_SIC = $('select#excursion_type_SIC').val(); //$("#excursion_type_SIC").val();
    var excursion_name_SIC = $('select#excursion_name_SIC').val();
    var excursion_adults_SIC = $("#excursion_adult_SIC").val();
    var excursion_childs_SIC = $("#excursion_child_SIC").val();
    var excursion_infants_SIC = $("#excursion_infant_SIC").val();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/getExcursionSICCalculation',
      data: {
        'excursion_types_SIC': excursion_types_SIC,
        'excursion_adults_SIC': excursion_adults_SIC,
        'excursion_childs_SIC': excursion_childs_SIC,
        'excursion_infants_SIC': excursion_infants_SIC,
        'excursion_name_SIC': excursion_name_SIC
      },
      success: function(response) {
        $("#total_pax_sic_adult").val(response.total_adultprice);
        $("#total_pax_sic_hild").val(response.total_childprice);
        $("#total_pax_sic_infant").val(response.total_infantprice);
      }
    })

  }


  function excursionTKTcalculations() {

    var excursion_types_TKT = $('select#excursion_type_TKT').val();
    var excursion_name_TKT = $('select#excursion_name_TKT').val();
    var excursion_adults_TKT = $("#excursion_adult_TKT").val();
    var excursion_childs_TKT = $("#excursion_child_TKT").val();
    var excursion_infants_TKT = $("#excursion_infant_TKT").val();
    var QueryId = $('#QueryId').val();

    var ex_hotel_pickup = $("#ex_hotel_pickup").val();


    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/getExcursionTKTCalculations',
      data: {
        'hotel_pickup': ex_hotel_pickup,
        'query_id': QueryId,
        'query_type': 'excursion',
        'excursion_types_TKT': excursion_types_TKT,
        'excursion_adults_TKT': excursion_adults_TKT,
        'excursion_childs_TKT': excursion_childs_TKT,
        'excursion_infants_TKT': excursion_infants_TKT,
        'excursion_name_TKT': excursion_name_TKT
      },
      success: function(response) {
        $("#total_pax_TKT_adult").val(response.total_adultprice);
        $("#total_pax_TKT_child").val(response.total_childprice);
        $("#total_pax_TKT_infant").val(response.total_infantprice);
        $('.card-box').click();
        toastr.success("Excursion TKT Saved Successfully");

      }
    })

  }
</script>
<input type="hidden" id="total_pax_sic_adult" name="total_pax_sic_adult" value="0" />
<input type="hidden" id="total_pax_sic_hild" name="total_pax_sic_hild" value="0" />
<input type="hidden" id="total_pax_sic_infant" name="total_pax_sic_infant" value="0" />


<input type="hidden" id="total_pax_TKT_adult" name="total_pax_TKT_adult" value="0" />
<input type="hidden" id="total_pax_TKT_child" name="total_pax_TKT_child" value="0" />
<input type="hidden" id="total_pax_TKT_infant" name="total_pax_TKT_infant" value="0" />

<input type="hidden" id="total_pax_meals_adult" name="total_pax_meals_adult" value="0" />
<input type="hidden" id="total_pax_meals_child" name="total_pax_meals_child" value="0" />

<script>
  function excursionPVTcalculation() {


    var hidden_total_pax = $('#hidden_total_pax').val();
    var excursion_type_PVT = $("#excursion_type_PVT").val();
    var excursion_name_PVT = $('select#excursion_name_PVT').val();
    var excursion_adult_PVT = $("#excursion_adult_PVT").val();
    var excursion_child_PVT = $("#excursion_child_PVT").val();
    var excursion_infant_PVT = $("#excursion_infant_PVT").val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/getExcursionPVTCalculation',
      data: {
        'excursion_type_PVT': excursion_type_PVT,
        'excursion_adult_PVT': excursion_adult_PVT,
        'excursion_child_PVT': excursion_child_PVT,
        'excursion_infant_PVT': excursion_infant_PVT,
        'excursion_name_PVT': excursion_name_PVT,
        'total_pax': hidden_total_pax
      },
      success: function(response) {
        $("#total_pax_pvt_adult").val(response.total_adultprice);
        $("#total_pax_pvt_hild").val(response.total_childprice);
        $("#total_pax_pvt_infant").val(response.total_infantprice);
      }
    })



  }

  function excursionSICcalculations() {

    var excursion_types_SIC = $('select#excursion_type_SIC').val(); //$("#excursion_type_SIC").val();
    var excursion_name_SIC = $('select#excursion_name_SIC').val();
    var excursion_adults_SIC = $("#excursion_adult_SIC").val();
    var excursion_childs_SIC = $("#excursion_child_SIC").val();
    var excursion_infants_SIC = $("#excursion_infant_SIC").val();
    var QueryId = $('#QueryId').val();

    var ex_hotel_pickup = $("#ex_hotel_pickup").val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/getExcursionSICCalculations',
      data: {
        'hotel_pickup': ex_hotel_pickup,
        'query_id': QueryId,
        'query_type': 'package',
        'excursion_types_SIC': excursion_types_SIC,
        'excursion_adults_SIC': excursion_adults_SIC,
        'excursion_childs_SIC': excursion_childs_SIC,
        'excursion_infants_SIC': excursion_infants_SIC,
        'excursion_name_SIC': excursion_name_SIC
      },
      success: function(response) {
        $("#total_pax_sic_adult").val(response.total_adultprice);
        $("#total_pax_sic_hild").val(response.total_childprice);
        $("#total_pax_sic_infant").val(response.total_infantprice);
        $('.card-box').click();
        toastr.success("Excursion SIC Saved Successfully");
      }
    })

  }

  function excursionPVTcalculations() {

    var hidden_total_pax = $('#hidden_total_pax').val();
    var excursion_type_PVT = $("#excursion_type_PVT").val();
    var excursion_name_PVT = $('select#excursion_name_PVT').val();
    var excursion_adult_PVT = $("#excursion_adult_PVT").val();
    var excursion_child_PVT = $("#excursion_child_PVT").val();
    var excursion_infant_PVT = $("#excursion_infant_PVT").val();
    var QueryId = $('#QueryId').val();

    var ex_hotel_pickup = $("#ex_hotel_pickup").val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/getExcursionPVTCalculations',
      data: {
        'hotel_pickup': ex_hotel_pickup,
        'query_id': QueryId,
        'query_type': 'package',
        'excursion_type_PVT': excursion_type_PVT,
        'excursion_adult_PVT': excursion_adult_PVT,
        'excursion_child_PVT': excursion_child_PVT,
        'excursion_infant_PVT': excursion_infant_PVT,
        'excursion_name_PVT': excursion_name_PVT,
        'total_pax': hidden_total_pax
      },
      success: function(response) {

        if (response.status == 0) {
          toastr.error("Selected PVT allowed " + response.pax + " pax only");
        } else {
          $("#total_pax_pvt_adult").val(response.total_adultprice);
          $("#total_pax_pvt_hild").val(response.total_childprice);
          $("#total_pax_pvt_infant").val(response.total_infantprice);
          $('.card-box').click();
          toastr.success("Excursion PVT Saved Successfully");
        }

      }
    })



  }
</script>

<input type="hidden" id="total_pax_pvt_adult" name="total_pax_pvt_adult" value="0" />
<input type="hidden" id="total_pax_pvt_hild" name="total_pax_pvt_hild" value="0" />
<input type="hidden" id="total_pax_pvt_infant" name="total_pax_pvt_infant" value="0" />


<input type="hidden" id="hotel_name_backup" name="hotel_name_backup" value="" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<script>
  function delQuery() {
    var QueryId = $('#QueryId').val();
    $.ajax({
      type: "POST",
      url: "<?php echo base_url() ?>Query/deleteQueryData",
      data: {
        'query_id': QueryId
      },
      cache: false,
      dataType: "json",
      success: function(response) {
        toastr.success("Cancelled Successfully");
        location.href = "<?php echo site_url(); ?>Query/view_query";
      }
    });
  }

  function hotelcalculation() {


    var total_rows = $('#rows_count').val();
    var pax_adult = <?php echo $view->Packagetravelers; ?>;
    var pax_child = <?php echo $buildpackage->child; ?>;
    var pax_infants = <?php echo $buildpackage->infant; ?>;
    var total_pax = pax_adult + pax_child + pax_infants;
    var QueryId = $('#QueryId').val();

    setTimeout(function() {
      $('.noOfDaysAlertcls2').attr("style", "display:none;")
    }, 2000);

    var extra_with_adult = [];
    $(".extra_with_adult").each(function() {
      if ($(this).is(":checked")) {
        var with_adult = $(this).val();
        extra_with_adult.push($.trim(with_adult));
      } else {
        var with_adult = "";
        extra_with_adult.push($.trim(with_adult));
      }
    });

    var extra_with_child = [];
    $(".extra_with_child").each(function() {
      if ($(this).is(":checked")) {
        var with_child = $(this).val();
        extra_with_child.push($.trim(with_child));
      } else {
        var with_child = "";
        extra_with_child.push("");
      }

    });
    var extra_without_bed = [];
    $(".extra_without_bed").each(function() {
      if ($(this).is(":checked")) {
        var without_bed = $(this).val();
        extra_without_bed.push($.trim(without_bed));
      } else {
        var without_bed = "";
        extra_without_bed.push("");
      }
    });


    var noOfNights = [];
    $(".get_no_nights").each(function() {
      var nights = $(this).val();
      noOfNights.push($.trim(nights));

    });

    var hotelName = [];
    $(".get_buildHotelName").each(function() {
      var hotel_name = $(this).val();
      hotelName.push($.trim(hotel_name));

    });

    var roomType = [];
    $(".get_buildRoomType").each(function() {
      var room = $(this).val();
      roomType.push($.trim(room));

    });

    var bedType = [];
    $(".get_bed_type").each(function() {
      var bed = $(this).val();
      bedType.push($.trim(bed));

    });

    var groupType = [];
    $(".get_room_group_type").each(function() {
      var bed = $(this).val();
      groupType.push($.trim(bed));

    });


    var buildHotelCity = [];
    $(".get_all_city").each(function() {
      var val = $(this).val();
      buildHotelCity.push($.trim(val));

    });

    var buildCheckIns = [];
    $(".get_CheckIn").each(function() {
      var val = $(this).val();
      buildCheckIns.push($.trim(val));
    });


    var Category = [];
    $(".get_category").each(function() {
      var cat = $(this).val();
      Category.push($.trim(cat));

    });

    var get_room_types = [];
    $(".get_room_types").each(function() {
      var cat = $(this).val();
      get_room_types.push($.trim(cat));
    });

    var sharing_types = [];
    $(".room_sharing_types").each(function() {
      var cat = $(this).val();
      sharing_types.push($.trim(cat));
    });

    var child_per_room_wo_bed = [];
    $(".child_per_room_wo_bed").each(function() {
      var cat = $(this).val();
      child_per_room_wo_bed.push($.trim(cat));
    });

    var adult_per_room = [];
    $(".adult_per_room").each(function() {
      var cat = $(this).val();
      adult_per_room.push($.trim(cat));
    });

    var child_per_room = [];
    $(".child_per_room").each(function() {
      var cat = $(this).val();
      child_per_room.push($.trim(cat));
    });


    let total_no_of_days = <?php echo $buildpackage->night ?>;

    // if (noOfNights < total_no_of_days) {
    //   $('.noOfDaysAlertcls2').attr("style", "display:block;");
    // } else {
    var data = [{
      'group_type': groupType,
      'nights': noOfNights,
      'hotelName': hotelName,
      'roomType': roomType,
      'bedType': bedType,
      'extra_with_adult': extra_with_adult,
      'extra_with_child': extra_with_child,
      'extra_without_bed': extra_without_bed,
      'buildHotelCity': buildHotelCity,
      'buildCheckIns': buildCheckIns,
      'Category': Category,
      'get_room_types': get_room_types,
      'sharing_types': sharing_types,
      'child_per_room_wo_bed': child_per_room_wo_bed,
      'adult_per_room': adult_per_room,
      'child_per_room': child_per_room,
      'query_type': 'hotel',
    }];



    $.ajax({
      type: "POST",
      url: "<?php echo base_url() ?>Query/getHotelCalculationNew",
      data: {
        data: data,
        total_rows: total_rows,
        'pax_adult': pax_adult,
        'pax_child': pax_child,
        'pax_infants': pax_infants,
        'query_id': QueryId
      },
      cache: false,
      dataType: "json",
      success: function(response) {
        $('#hotel_rate_adult_single').val(response.single_sharing_pax);
        $('#hotel_pax_adult_double').val(response.double_sharing_pax);
        $('#hotel_pax_adult_triple').val(response.triple_sharing_pax);

        $('#hotel_rate_adult_single').val(response.total_pax_adult_rate);
        $('#hotel_rate_adult_double').val(response.total_pax_adult_rate_double);
        $('#hotel_rate_adult_triple').val(response.total_pax_adult_rate_triple);
        $('#hotel_rate_child').val(response.total_pax_child_rate);
        $('#hotel_rate_infant').val(response.total_pax_wo_rate);
        // $('#hotel_rate_adult').val(100);
        // $('#hotel_rate_child').val(200);

        toastr.success("Hotel Saved Successfully");
        $('.card-box').click();


      }
    });
    // }


  }

  let trasnsSaveClicked = 0;

  $('#transferSave').on('click', function() {

    if (trasnsSaveClicked == 0) {

        trasnsSaveClicked = 1;
        var pickuppoint = $("#pickuppoint").val();
        var dropoffpoint = $("#dropoffpoint").val();
        var pax_internal = $("#pax_point").val();

        $.ajax({
          type: "POST",
          dataType: "json",
          url: '<?php echo site_url(); ?>/query/fetchprice1',
          data: {
            'dropoff': dropoffpoint,
            'pickup': pickuppoint,
            'person': pax_internal
          },
          success: function(response) {
            $("#route_namepoint").val(response.route_name);
            // $("#pax_count_internal").val(response.data[0].seat_capacity);
            $("#price_point").val(response.data);
            var total_price = response.data * pax_internal;
            $("#total_price_point").val(total_price);
            $("#pickuppoint1").val(response.row_data.start_city1);
            $("#dropoffpoint1").val(response.row_data.dest_city1);
            $("#route_namepoint1").val(response.row_data.route_name1);
          }
        });
    }

    var pax_adult = <?php echo $view->Packagetravelers; ?>;
    var pax_child = <?php echo $buildpackage->child; ?>;
    var pax_infants = <?php echo $buildpackage->infant; ?>;
    var total_pax = pax_adult + pax_child + pax_infants;
    var QueryId = $('#QueryId').val();

    var internal_transfer_pickup = [];
    $(".internal_transfer_pickup").each(function() {
      var cat = $(this).val();
      if (cat != "" && cat != 'Pickup') {
        internal_transfer_pickup.push($.trim(cat));
      }
    });

    var internal_transfer_dropoff = [];
    $(".internal_transfer_dropoff").each(function() {
      var cat = $(this).val();
      if (cat != "" && cat != 'Drop Off') {
        internal_transfer_dropoff.push($.trim(cat));
      }
    });

    var internal_transfer_route = [];
    $(".internal_transfer_route").each(function() {
      var cat = $(this).val();
      if (cat != "") {
        internal_transfer_route.push($.trim(cat));
      }
    });

    var internal_transfer_date = [];
    $(".internal_transfer_date").each(function() {
      var cat = $(this).val();
      if (cat != "") {
        internal_transfer_date.push($.trim(cat));
      }
    });

    // return transfer ---------------------------------

    var return_transfer_pickup = [];
    $(".return_transfer_pickup").each(function() {
      var cat = $(this).val();
      if (cat != "" && cat != 'Pickup') {
        return_transfer_pickup.push($.trim(cat));
      }
    });

    var return_transfer_dropoff = [];
    $(".return_transfer_dropoff").each(function() {
      var cat = $(this).val();
      if (cat != "" && cat != 'Drop Off') {
        return_transfer_dropoff.push($.trim(cat));
      }
    });

    var return_transfer_route = [];
    $(".return_transfer_route").each(function() {
      var cat = $(this).val();
      if (cat != "") {
        return_transfer_route.push($.trim(cat));
      }
    });

    var return_transfer_date = [];
    $(".return_transfer_date").each(function() {
      var cat = $(this).val();
      if (cat != "") {
        return_transfer_date.push($.trim(cat));
      }
    });

    var data = [{
      'internal_transfer_pickup': internal_transfer_pickup,
      'internal_transfer_dropoff': internal_transfer_dropoff,
      'internal_transfer_route': internal_transfer_route,
      'internal_transfer_date': internal_transfer_date,

      'return_transfer_pickup': return_transfer_pickup,
      'return_transfer_dropoff': return_transfer_dropoff,
      'return_transfer_route': return_transfer_route,
      'return_transfer_date': return_transfer_date,

    }];

    $.ajax({
      type: "POST",
      url: "<?php echo base_url() ?>Query/saveTransferData",
      data: {
        data: data,
        'pax_adult': pax_adult,
        'pax_child': pax_child,
        'pax_infants': pax_infants,
        'query_id': QueryId,
        'query_type': 'package'
      },
      cache: false,
      dataType: "json",
      success: function(response) {
        toastr.success("Transfer Details Saved Successfully");
      }
    });
  });

  function transfer_cal() {
    var pax_adult = <?php echo $view->Packagetravelers; ?>;
    var pax_child = <?php echo $buildpackage->child; ?>;
    var pax_infants = <?php echo $buildpackage->infant; ?>;
    var total_pax = pax_adult + pax_child + pax_infants;
    var QueryId = $('#QueryId').val();

    var internal_transfer_pickup = [];
    $(".internal_transfer_pickup").each(function() {
      var cat = $(this).val();
      if (cat != "" && cat != 'Pickup') {
        internal_transfer_pickup.push($.trim(cat));
      }
    });

    var internal_transfer_dropoff = [];
    $(".internal_transfer_dropoff").each(function() {
      var cat = $(this).val();
      if (cat != "" && cat != 'Drop Off') {
        internal_transfer_dropoff.push($.trim(cat));
      }
    });

    var internal_transfer_route = [];
    $(".internal_transfer_route").each(function() {
      var cat = $(this).val();
      if (cat != "") {
        internal_transfer_route.push($.trim(cat));
      }
    });

    var internal_transfer_date = [];
    $(".internal_transfer_date").each(function() {
      var cat = $(this).val();
      if (cat != "") {
        internal_transfer_date.push($.trim(cat));
      }
    });

    // return transfer ---------------------------------

    var return_transfer_pickup = [];
    $(".return_transfer_pickup").each(function() {
      var cat = $(this).val();
      if (cat != "" && cat != 'Pickup') {
        return_transfer_pickup.push($.trim(cat));
      }
    });

    var return_transfer_dropoff = [];
    $(".return_transfer_dropoff").each(function() {
      var cat = $(this).val();
      if (cat != "" && cat != 'Drop Off') {
        return_transfer_dropoff.push($.trim(cat));
      }
    });

    var return_transfer_route = [];
    $(".return_transfer_route").each(function() {
      var cat = $(this).val();
      if (cat != "") {
        return_transfer_route.push($.trim(cat));
      }
    });

    var return_transfer_date = [];
    $(".return_transfer_date").each(function() {
      var cat = $(this).val();
      if (cat != "") {
        return_transfer_date.push($.trim(cat));
      }
    });

    var data = [{
      'internal_transfer_pickup': internal_transfer_pickup,
      'internal_transfer_dropoff': internal_transfer_dropoff,
      'internal_transfer_route': internal_transfer_route,
      'internal_transfer_date': internal_transfer_date,

      'return_transfer_pickup': return_transfer_pickup,
      'return_transfer_dropoff': return_transfer_dropoff,
      'return_transfer_route': return_transfer_route,
      'return_transfer_date': return_transfer_date,

    }];

    $.ajax({
      type: "POST",
      url: "<?php echo base_url() ?>Query/saveTransferData",
      data: {
        data: data,
        'pax_adult': pax_adult,
        'pax_child': pax_child,
        'pax_infants': pax_infants,
        'query_id': QueryId,
        'query_type': 'package'
      },
      cache: false,
      dataType: "json",
      success: function(response) {
        toastr.success("Transfer Details Saved Successfully");
      }
    });
    transfer_cal();
  }
</script>

<script>
  function fetchexcursion() {
    // alert("work");
    var excursion_type = $("#excursion_type").val();
    var excursion_name = $("#excursion_name").val();

    var excursion_adult = $("#excursion_adult").val();
    var excursion_child = $("#excursion_child").val();

    var excursion_infant = $("#excursion_infant").val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchexcursion',
      data: {
        'excursion_type': excursion_type,
        'excursion_name': excursion_name,
        'excursion_adult': parseInt(excursion_adult),
        'excursion_child': parseInt(excursion_child),
        'excursion_infant': parseInt(excursion_infant)
      },
      success: function(response) {
        // console.log(response);
      }
    })
  }
  // Listen for click on toggle checkbox
  $('#select_all').click(function(event) {
    if (this.checked) {
      // Iterate each checkbox
      $(':checkbox').each(function() {
        this.checked = true;
      });
    } else {
      $(':checkbox').each(function() {
        this.checked = false;
      });
    }
  });

  function select_all_data(e) {
    if ($("#select_all").prop("checked")) {
      $("[class=checkboxcls]").prop("checked", true);
    } else {
      $("[class=checkboxcls]").prop("checked", false);
    }
  }
</script>
<!-- icheck -->
<script src="<?php echo base_url(); ?>public/js/icheck.min.js"></script>
<link href="<?php echo base_url(); ?>public/css/grey.css" rel="stylesheet">
<script>
  var cb, optionSet1;

  $(function() {
    var checkAll = $('input.all');
    var checkboxes = $('input.checkboxcls');

    $('.tab-pane input').iCheck({
      checkboxClass: "icheckbox_square-grey",
    });

    checkAll.on('ifChecked ifUnchecked', function(event) {
      if (event.type == 'ifChecked') {
        checkboxes.iCheck('check');
      } else {
        checkboxes.iCheck('uncheck');
      }
    });

    checkboxes.on('ifChanged', function(event) {
      if (checkboxes.filter(':checked').length == checkboxes.length) {
        checkAll.prop('checked', 'checked');
      } else {
        checkAll.removeProp('checked');
      }
      checkAll.iCheck('update');
    });
  });

  $("radio").iCheck({
    checkboxClass: "icheckbox_square-grey",
    radioClass: "iradio_square-grey"
  });
</script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>public/js/datepicker.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/datepicker.css">
<script>
  var fmt = "dd/mm/yyyy";
  if (top.location != location) {
    top.location.href = document.location.href;
  }
  $(function() {
    window.prettyPrint && prettyPrint();
    $('.dob').datepicker({
      format: fmt,
      autoclose: true
    }).on('changeDate', function(ev) {
      $(this).datepicker('hide');
    });
    $('#dp1').datepicker();
    $('#dp2').datepicker();
    $('#dp3').datepicker();
    $('#dp5').datepicker();

    // disabling dates
    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    var date = $('.dpd3').datepicker({
        format: fmt,
        onRender: function(date) {
          return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
      })
      .on('changeDate', function(ev) {
        date.hide();
      })
      .data('datepicker');

    var date12 = $('.dpd5').datepicker({
        format: fmt,
        onRender: function(date) {
          return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
      })
      .on('changeDate', function(ev) {
        date12.hide();
      })
      .data('datepicker');
    var date13 = $('.dpd6').datepicker({
        format: fmt,
        onRender: function(date) {
          return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
      })
      .on('changeDate', function(ev) {
        date13.hide();
      })
      .data('datepicker');

    var checkin = $('.dpd1').datepicker({
        format: fmt,
        onRender: function(date) {
          return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
      })
      .on('changeDate', function(ev) {
        if (ev.date.valueOf() > checkout.date.valueOf()) {
          var newDate = new Date(ev.date)
          newDate.setDate(newDate.getDate() + 1);
          checkout.setValue(newDate);
        }
        checkin.hide();
        $('.dpd2')[0].focus();
      })
      .data('datepicker');
    var checkout = $('.dpd2').datepicker({
        format: fmt,
        onRender: function(date) {
          return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
        }
      })
      .on('changeDate', function(ev) {
        checkout.hide();
      })
      .data('datepicker');

  });
</script>
<!-- timepicker -->
<script src="<?php echo base_url(); ?>public/js/timepicker.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/timepicker.css">
<script>
  $(function() {
    $('.timepicker').clockface();
  });
</script>

<script type="text/javascript">
  function mealsTransferTypeChange(row) {
    $("#mealTransferMain" + row).show();
    var pax_adult1 = <?php echo $view->Packagetravelers; ?>;
    var pax_child1 = <?php echo $buildpackage->child; ?>;
    var pax_infants1 = <?php echo $buildpackage->infant; ?>;
    var total_pax1 = pax_adult1 + pax_child1 + 0;

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchPickup',
      data: {
        'pax': total_pax1
      },
      success: function(response) {
        $("#pickup_internal_meal" + row).html('<option value="">Pickup</option>');
        if (response.data.length > 0) {
          var options = ""
          for (var i = 0; i < response.data.length; i++) {
            options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
          }
        } else {
          var options = "<option value=''>No Data Found</option>"
        }
        $("#pickup_internal_meal" + row).append(options);

      }
    });
  }

  function mealsTransferTypeHide(row) {
    $("#mealTransferMain" + row).hide();
  }



  // meals transfer start
  $("#with_transfer").on("change", function() {
    $("#mealTransferMain").show();

    var pax_adult1 = <?php echo $view->Packagetravelers; ?>;
    var pax_child1 = <?php echo $buildpackage->child; ?>;
    var pax_infants1 = <?php echo $buildpackage->infant; ?>;
    var total_pax1 = pax_adult1 + pax_child1 + 0;

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchPickup',
      data: {
        'pax': total_pax1
      },
      success: function(response) {
        $("#pickup_internal_meal").html('<option value="">Pickup</option>');
        if (response.data.length > 0) {
          var options = ""
          for (var i = 0; i < response.data.length; i++) {
            options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
          }
        } else {
          var options = "<option value=''>No Data Found</option>"
        }
        $("#pickup_internal_meal").append(options);

      }
    });

  })

  $('#pickup_internal_meal').on('change', function() {
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchdropoff',
      data: {
        'pickup': this.value
      },
      success: function(response) {
        $("#dropoff_internal_meal").html('<option value="">dropoff</option>');
        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          options += '<option value="' + response.data[i].dest_city + '">' + response.data[i].dest_city + '</option>';
        }
        $("#dropoff_internal_meal").append(options);
      }
    });
  });

  $('#dropoff_internal_meal').on('change', function() {
    var value = $("#pickup_internal_meal").val();
    // var pax_internal = $("#pax_internal").val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchprice',
      data: {
        'pickup': value,
        'dropoff': this.value,
        'person': total_pax1
      },
      success: function(response) {
        $("#route_name_internal_meal").val(response.route_name);
        // $("#price_internal").val(response.data);
        // var total_price = response.data * pax_internal;
        // $("#total_price_internal").val(total_price);
      }
    });
  });

  $("#without_transfer").on("change", function() {
    $("#mealTransferMain").hide();
  })

  $("#mealTransTypeInt").on("change", function() {
    if ($('#mealTransTypeInt').is(":checked")) {
      document.getElementById('mealInternalTransfer').style.display = "";
    } else {
      document.getElementById('mealInternalTransfer').style.display = "none";
    }
  });

  $("#mealTransTypeRet").on("change", function() {
    if ($('#mealTransTypeRet').is(":checked")) {
      document.getElementById('mealReturnTransfer').style.display = "";
    } else {
      document.getElementById('mealReturnTransfer').style.display = "none";
    }
  })

  function fetchMealInternalTransferPickup(id) {
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchPickup',
      data: {
        'pax': total_pax1
      },
      success: function(response) {
        $("#pickupinternal" + id).html('<option value="">Pickup</option>');
        if (response.data.length > 0) {
          var options = ""
          for (var i = 0; i < response.data.length; i++) {
            options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
          }
        } else {
          var options = "<option value=''>No Data Found</option>"
        }
        $("#pickupinternal" + id).append(options);
      }
    });
  }


  function fetchMealInternalTransferDropoff(id) {
    let value = document.getElementById('pickup_internal_meal' + id).value;
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchdropoff',
      data: {
        'pickup': document.getElementById('pickup_internal_meal' + id).value,
      },

      success: function(response) {
        $("#dropoff_internal_meal" + id).html('<option value="">dropoff</option>');

        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          options += '<option value="' + response.data[i].dest_city + '">' + response.data[i].dest_city + '</option>';

        }
        $("#dropoff_internal_meal" + id).append(options);
      }

    });
  }

  function fetchMealInternalTransferPrice(id) {
    var total_pax1 = pax_adult1 + pax_child1 + 0;
    let dropValue = document.getElementById('dropoff_internal_meal' + id).value;
    var value = $("#pickup_internal_meal" + id).val();
    var pax_internal = total_pax1;

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchprice',
      data: {
        'dropoff': dropValue,
        'pickup': value,
        'person': pax_internal
      },
      success: function(response) {
        $("#route_name_internal_meal" + id).val(response.route_name);
        // $("#pax_count_internal").val(response.data[0].seat_capacity);
        // $("#price_internal" + id).val(response.data);
        // var total_price = response.data * pax_internal;
        // $("#total_price_internal" + id).val(total_price);
      }
    });

  }

  function mealsInterTransferShowHide(row) {
    if ($("#mealTransTypeInt" + row).is(":checked")) {
      document.getElementById('mealInternalTransfer' + row).style.display = "";

      var pax_adult1 = <?php echo $view->Packagetravelers; ?>;
      var pax_child1 = <?php echo $buildpackage->child; ?>;
      var pax_infants1 = <?php echo $buildpackage->infant; ?>;
      var total_pax1 = pax_adult1 + pax_child1 + 0;

      $.ajax({
        type: "POST",
        dataType: "json",
        url: '<?php echo site_url(); ?>/query/fetchPickup',
        data: {
          'pax': total_pax1
        },
        success: function(response) {
          $("#pickup_internal_meal" + row).html('<option value="">Pickup</option>');
          if (response.data.length > 0) {
            var options = ""
            for (var i = 0; i < response.data.length; i++) {
              options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
            }
          } else {
            var options = "<option value=''>No Data Found</option>"
          }
          $("#pickup_internal_meal" + row).append(options);

        }
      });

    } else {
      document.getElementById('mealInternalTransfer' + row).style.display = "none";
    }
  }





  // return meal transfer 

  var pax_adult1 = <?php echo $view->Packagetravelers; ?>;
  var pax_child1 = <?php echo $buildpackage->child; ?>;
  var pax_infants1 = <?php echo $buildpackage->infant; ?>;
  var total_pax1 = pax_adult1 + pax_child1 + 0;

  $.ajax({
    type: "POST",
    dataType: "json",
    url: '<?php echo site_url(); ?>/query/fetchPickup1',
    data: {
      'pax': total_pax1
    },
    success: function(response) {
      $("#pickup_return_meal").html('<option value="">Pickup</option>');
      if (response.data.length > 0) {
        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
        }
      } else {
        var options = "<option value=''>No Data Found</option>"
      }
      $("#pickup_return_meal").append(options);

    }
  });

  $('#pickup_return_meal').on('change', function() {
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchdropoff1',
      data: {
        'pickup': this.value
      },
      success: function(response) {
        $("#dropoff_return_meal").html('<option value="">dropoff</option>');
        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          options += '<option value="' + response.data[i].dest_city + '">' + response.data[i].dest_city + '</option>';
        }
        $("#dropoff_return_meal").append(options);
      }
    });
  });

  $('#dropoff_return_meal').on('change', function() {
    var value = $("#pickup_return_meal").val();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchprice1',
      data: {
        'pickup': value,
        'dropoff': this.value,
        'person': total_pax1
      },
      success: function(response) {
        $("#route_name_return_meal").val(response.route_name);
      }
    });
  });


  function mealsReturnTransferShowHide(row) {
    if ($("#mealTransTypeRet" + row).is(":checked")) {
      document.getElementById("mealReturnTransfer" + row).style.display = "";

      var pax_adult1 = <?php echo $view->Packagetravelers; ?>;
      var pax_child1 = <?php echo $buildpackage->child; ?>;
      var pax_infants1 = <?php echo $buildpackage->infant; ?>;
      var total_pax1 = pax_adult1 + pax_child1 + 0;

      $.ajax({
        type: "POST",
        dataType: "json",
        url: '<?php echo site_url(); ?>/query/fetchPickup1',
        data: {
          'pax': total_pax1
        },
        success: function(response) {
          $("#pickup_return_meal" + row).html('<option value="">Pickup</option>');
          if (response.data.length > 0) {
            var options = ""
            for (var i = 0; i < response.data.length; i++) {
              options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
            }
          } else {
            var options = "<option value=''>No Data Found</option>"
          }
          $("#pickup_return_meal" + row).append(options);

        }
      });

    } else {
      document.getElementById("mealReturnTransfer" + row).style.display = "none";
    }
  }


  function fetchMealReturnTransferDropoff(id) {
    let value = document.getElementById('pickup_return_meal' + id).value;
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchdropoff1',
      data: {
        'pickup': document.getElementById('pickup_return_meal' + id).value,
      },

      success: function(response) {
        $("#dropoff_return_meal" + id).html('<option value="">dropoff</option>');

        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          options += '<option value="' + response.data[i].dest_city + '">' + response.data[i].dest_city + '</option>';

        }
        $("#dropoff_return_meal" + id).append(options);
      }

    });
  }

  function fetchMealReturnTransferPrice(id) {
    var total_pax1 = pax_adult1 + pax_child1 + 0;
    let dropValue = document.getElementById('dropoff_return_meal' + id).value;
    var value = $("#pickup_return_meal" + id).val();
    var pax_internal = total_pax1;

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchprice1',
      data: {
        'dropoff': dropValue,
        'pickup': value,
        'person': pax_internal
      },
      success: function(response) {
        $("#route_name_return_meal" + id).val(response.route_name);
        // $("#pax_count_internal").val(response.data[0].seat_capacity);
        // $("#price_internal" + id).val(response.data);
        // var total_price = response.data * pax_internal;
        // $("#total_price_internal" + id).val(total_price);
      }
    });

  }

  // meals transfer end


  $("#hotel_status").on("change", function() {
    $("#hoteldisplay").show();

  })
  $("#hotel_status1").on("change", function() {
    $("#hoteldisplay").hide();
    $('#hotel_rate_adult_single').val(0);
    $('#hotel_pax_adult_double').val(0);
    $('#hotel_pax_adult_triple').val(0);
    $('#hotel_rate_adult_single').val(0);
    $('#hotel_rate_adult_double').val(0);
    $('#hotel_rate_adult_triple').val(0);
    $('#hotel_rate_child').val(0);
    $('#hotel_rate_infant').val(0);
    $('.card-box').click();
    delete_query_data('query_hotel');
  })

  $("#trans_status").on("change", function() {
    $("#transdisplay").show();
    $.ajax({
    type: "POST",
    dataType: "json",
    url: '<?php echo site_url(); ?>/query/fetchPickup1',
    data: {
      'pax': total_pax1
    },
    success: function(response) {
      $("#pickuppoint").html('<option value="Pickup">Pickup</option>');
      if (response.data.length > 0) {
        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          if(response.data[i].start_city == 'DXB AIRPORT') {
              options += '<option selected value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
              } else {
                options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
            }
        }
      } else {
        var options = "<option value=''>No Data Found</option>"
      }
      $("#pickuppoint").append(options);
    }
  });

  })
  $("#trans_status1").on("change", function() {
    $("#transdisplay").hide();
    $("input[name='total_price_point[]']").map(function() { $(this).val(0); });
    $("input[name='total_price_internal[]']").map(function() { $(this).val(0); });
    $('.card-box').click();
    delete_query_data('query_transfer');
  })

  $("#excursion_status").on("change", function() {
    $("#excursiondisplay").show();

  })
  $("#excursion_status1").on("change", function() {
    $("#excursiondisplay").hide();
  })

  $("#meals_status").on("change", function() {
    $("#mealsdisplay").show();
  })

  $("#meals_status1").on("change", function() {
    $("#mealsdisplay").hide();
    $("#total_pax_meal_adult").val(0);
    $("#total_pax_meal_child").val(0);
    $('.card-box').click();
    delete_query_data('query_meal');
  })

  $("#visa_status").on("change", function() {
    $("#visadisplay").show();
    $("#visa_category_drop_down").val('30_days_tourist');
    $("#entry_type").val('Single Entry');
    $("#visa_validity").val('1 Month');
  })
  $("#visa_status1").on("change", function() {
    $("#visadisplay").hide();
    $("#visa_category_drop_down").val('');
    $("#entry_type").val('');
    $("#visa_validity").val('');
    $("#total_pax_visa_price_adult").val(0);
    $("#total_pax_visa_price_child").val(0);
    $("#total_pax_visa_price_infant").val(0);
    $('.card-box').click();
    delete_query_data('query_visa');
  })

  $("#otb_status").on("change", function() {
    $("#otbdisplay").show();
  })
  $("#otb_status1").on("change", function() {
    $("#otbdisplay").hide();
    $("#total_pax_otb_price_adult").val(0);
    $("#total_pax_otb_price_child").val(0);
    $("#total_pax_otb_price_infant").val(0);
    $('.card-box').click();
    delete_query_data('query_visa');
  })

  $("#excursion_status").on("change", function() {
    $("#excursiondisplay").show();
  })
  $("#excursion_status1").on("change", function() {
    $("#excursiondisplay").hide();
    $("#total_pax_sic_adult").val(0);
    $("#total_pax_sic_hild").val(0);
    $("#total_pax_sic_infant").val(0);

    $("#total_pax_TKT_adult").val(0);
    $("#total_pax_TKT_child").val(0);
    $("#total_pax_TKT_infant").val(0);

    $("#total_pax_pvt_adult").val(0);
    $("#total_pax_pvt_hild").val(0);
    $("#total_pax_pvt_infant").val(0);
    $('.card-box').click();
    delete_query_data('query_excursion');
  })

  function delete_query_data(type){
    query_id = <?php echo $view->query_id; ?>;
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/delete_query_data',
      data: {
        'query_id': query_id,
        'query_type': type,
      },
      success: function(response) {
        console.log("🚩 ~ file: build_package.php:3516 ~ delete_query_data ~ response", response)
      }
    });
  }

  $('#pickupinternal').on('change', function() {
    // alert(this.value);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchdropoff',
      data: {
        'pickup': this.value
      },
      success: function(response) {
        $("#dropoffinternal").html('<option value="dropoff">dropoff</option>');

        //$('#bus_type').html("<option value='"+ data.type +"'>"+ data.type +"</option>");
        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          options += '<option value="' + response.data[i].dest_city + '">' + response.data[i].dest_city + '</option>';

        }


        $("#dropoffinternal").append(options);
        // $("#ProposalPage").html(response);
        // $("#FullPage").hide();
      }


    });
  });

  $('#pickuppoint').on('change', function() {
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchdropoff1',
      data: {
        'pickup': this.value
      },
      success: function(response) {
        $("#dropoffpoint").html('<option value="dropoff">dropoff</option>');

        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          // if(response.data[i].dest_city == 'DXB AIRPORT') {
          //     options += '<option selected value="' + response.data[i].dest_city + '">' + response.data[i].dest_city + '</option>';
          //     } else {
          //       options += '<option value="' + response.data[i].dest_city + '">' + response.data[i].dest_city + '</option>';
          //   }
            options += '<option value="' + response.data[i].dest_city + '">' + response.data[i].dest_city + '</option>';
        }
        $("#dropoffpoint").append(options);
      }
    });
  });

  var pax_adult1 = <?php echo $view->Packagetravelers; ?>;
  var pax_child1 = <?php echo $buildpackage->child; ?>;
  var pax_infants1 = <?php echo $buildpackage->infant; ?>;
  var total_pax1 = pax_adult1 + pax_child1 + 0;

  $.ajax({
    type: "POST",
    dataType: "json",
    url: '<?php echo site_url(); ?>/query/fetchPickup',
    data: {
      'pax': total_pax1
    },
    success: function(response) {
      $("#pickupinternal").html('<option value="Pickup">Pickup</option>');

      if (response.data.length > 0) {
        var options = ""
        for (var i = 0; i < response.data.length; i++) {

          options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
        }
      } else {
        var options = "<option value=''>No Data Found</option>"
      }
      $("#pickupinternal").append(options);
    }
  });


  // $.ajax({
  //   type: "POST",
  //   dataType: "json",
  //   url: '<?php echo site_url(); ?>/query/fetchPickup1',
  //   data: {
  //     'pax': total_pax1
  //   },
  //   success: function(response) {
  //     $("#pickuppoint").html('<option value="Pickup">Pickup</option>');
  //     if (response.data.length > 0) {
  //       var options = ""
  //       for (var i = 0; i < response.data.length; i++) {
  //         if(response.data[i].start_city == 'DXB AIRPORT') {
  //             options += '<option selected value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
  //             } else {
  //               options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
  //           }
  //       }
  //     } else {
  //       var options = "<option value=''>No Data Found</option>"
  //     }
  //     $("#pickuppoint").append(options);
  //   }
  // });

  function pickupInternal(id) {
    let value = document.getElementById('pickupinternal' + id).value;
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchdropoff',
      data: {
        'pickup': document.getElementById('pickupinternal' + id).value,
      },

      success: function(response) {
        $("#dropoffinternal" + id).html('<option value="dropoff">dropoff</option>');


        var options = ""
        for (var i = 0; i < response.data.length; i++) {

          options += '<option value="' + response.data[i].dest_city + '">' + response.data[i].dest_city + '</option>';

        }
        $("#dropoffinternal" + id).append(options);
      }

    });
  }

  function dropInternal(id) {
    let dropValue = document.getElementById('dropoffinternal' + id).value;
    var value = $("#pickupinternal" + id).val();
    var pax_internal = $("#pax_internal" + id).val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchprice',
      data: {
        'dropoff': dropValue,
        'pickup': value,
        'person': pax_internal
      },
      success: function(response) {
        $("#route_nameinternal" + id).val(response.route_name);
        // $("#pax_count_internal").val(response.data[0].seat_capacity);
        $("#price_internal" + id).val(response.data);
        var total_price = response.data * pax_internal;
        $("#total_price_internal" + id).val(total_price);
      }
    });

  }

  $('#dropoffinternal').on('change', function() {
    var value = $("#pickupinternal").val();
    var pax_internal = $("#pax_internal").val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchprice',
      data: {
        'dropoff': this.value,
        'pickup': value,
        'person': pax_internal
      },
      success: function(response) {
        $("#route_nameinternal").val(response.route_name);
        // $("#pax_count_internal").val(response.data[0].seat_capacity);
        $("#price_internal").val(response.data);
        var total_price = response.data * pax_internal;
        $("#total_price_internal").val(total_price);
      }


    });
  });

  function pickupFromReturn(id) {
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchPickup1',
      data: {
        'pax': total_pax1
      },
      success: function(response) {
        $("#pickuppoint" + id).html('<option value="Pickup">Pickup</option>');
        if (response.data.length > 0) {
          var options = ""
          for (var i = 0; i < response.data.length; i++) {

            options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
          }
        } else {
          var options = "<option value=''>No Data Found</option>"
        }
        $("#pickuppoint" + id).append(options);
      }
    });
  }

  function pickupFromTransfer(id) {
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchPickup',
      data: {
        'pax': total_pax1
      },
      success: function(response) {
        $("#pickupinternal" + id).html('<option value="Pickup">Pickup</option>');
        if (response.data.length > 0) {
          var options = ""
          for (var i = 0; i < response.data.length; i++) {

            options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
          }
        } else {
          var options = "<option value=''>No Data Found</option>"
        }
        $("#pickupinternal" + id).append(options);
      }
    });
  }

  function pickupReturn(id) {

    let value = document.getElementById('pickuppoint' + id).value;
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchdropoff1',
      data: {
        'pickup': value
      },
      success: function(response) {
        $("#dropoffpoint" + id).html('<option value="dropoff">dropoff</option>');
        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          options += '<option value="' + response.data[i].dest_city + '">' + response.data[i].dest_city + '</option>';
        }


        $("#dropoffpoint" + id).append(options);
        // $("#ProposalPage").html(response);
        // $("#FullPage").hide();
      }


    });
  }


  function dropReturn(id) {
    let dropValue = document.getElementById('dropoffpoint' + id).value;
    var value = $("#pickuppoint" + id).val();
    var pax_internal = $("#pax_point" + id).val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchprice1',
      data: {
        'dropoff': dropValue,
        'pickup': value,
        'person': pax_internal
      },
      success: function(response) {
        $("#route_namepoint" + id).val(response.route_name);
        $("#price_point" + id).val(response.data);
        var total_price = response.data * pax_internal;
        $("#total_price_point" + id).val(total_price);

      }
    });

  }

  $('#dropoffpoint').on('change', function() {
    var value = $("#pickuppoint").val();
    var pax_internal = $("#pax_point").val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchprice1',
      data: {
        'dropoff': this.value,
        'pickup': value,
        'person': pax_internal
      },
      success: function(response) {
        $("#route_namepoint").val(response.route_name);
        // $("#pax_count_internal").val(response.data[0].seat_capacity);
        $("#price_point").val(response.data);
        var total_price = response.data * pax_internal;
        $("#total_price_point").val(total_price);
        $("#pickuppoint1").val(response.row_data.start_city1);
        $("#dropoffpoint1").val(response.row_data.dest_city1);
        $("#route_namepoint1").val(response.row_data.route_name1);
      }
    });
  });

  function defaultTransfer() {
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/query/fetchPickup1',
      data: {
        'pax': total_pax1
      },
      success: function(response) {
        $("#pickuppoint").html('<option value="Pickup">Pickup</option>');
        if (response.data.length > 0) {
          var options = ""
          for (var i = 0; i < response.data.length; i++) {
            if(response.data[i].start_city == 'kamat') {
              options += '<option selected value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
              } else {
                options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
            }
          }
        } else {
          var options = "<option value=''>No Data Found</option>"
        }
        $("#pickuppoint").append(options);
      }
    });
  }

  $('#Sic').show();

  $("input[name='TransType']").change(function() {

    var name = $(this).val();
    if (name == "Internal Transfer") {
      if ($('#TrasportTypeCab').is(':checked')) {
        $('#PvtCab').show();
      } else {
        $("#pickupinternal").val('Pickup').trigger("change");
        $("#dropoffinternal").val('dropoff').trigger("change");
        $("#route_nameinternal").val('');
        $("#price_internal").val(0);
        $("#total_price_internal").val(0);
        $('#PvtCab').hide();
      }
    }
    if (name == "Point to Point Transfer") {
      if ($('#TrasportTypeSic').is(':checked')) {
        $('#Sic').show();
        $('#Sic1').show();
      } else {
        $("#pickuppoint").val('Pickup').trigger("change");
        $("#dropoffpoint").val('dropoff').trigger("change");
        $("#route_namepoint").val('');
        $("#pickuppoint1").val('');
        $("#dropoffpoint1").val('');
        $("#route_namepoint1").val('');

        $("#price_point").val(0);
        $("#total_price_point").val(0);
        $('#Sic').hide();
        $('#Sic1').hide();
      }
    }

    //   if(name == "Hourly")
    //  {
    //   if($('#TrasportTypeBus').is(':checked'))
    //   {
    //    $('#Bus').show();
    //   }
    //   else
    //   {
    //    $('#Bus').hide();
    //   }
    //  }
    if (name == "train") {
      if ($('#TrasportTypeTrain').is(':checked')) {
        $('#Train').show();
      } else {
        $('#Train').hide();
      }
    }



  });
</script>


<script type="text/javascript">
  $("input[name='pricingInfo']").change(function() {
    var selected = $(this).val();
    if (selected == "PPpricing") {
      $("#NoPAX").show();
      $("#noPAX").show();
      $("#visaCost").show();
      $("#packageOccupancy").show();
    } else {
      $("#NoPAX").hide();
      $("#noPAX").hide();
      $("#visaCost").hide();
      $("#packageOccupancy").hide();
    }
  });
</script>

<script type="text/javascript">
  $("#pricingTotalCost,#pricingTotalMarkup").on("input", function() {
    var total_vat = 0;

    var total_cost = $("#pricingTotalCost").val();
    var total_markup = $("#pricingTotalMarkup").val();
    var total_vat = parseInt(total_cost) + parseInt(total_markup);
    $("#totalCostonVAt").val(total_vat);
  });
</script>

<script type="text/javascript">
  $("#costPerAdult").on("input", function() {
    var total_vat = 0;
    var TotalCost = 0;
    var costPerAdult = $("#costPerAdult").val();
    var AdultCost = $("#AdultCost").val();
    var totalPax = $("$noPax").val();
    var total_cost = $("#pricingTotalCost").val();
    var total_markup = $("#pricingTotalMarkup").val();

    var TotalCost = parseInt(costPerAdult) * parseInt(AdultCost);
    var total_vat = parseInt(total_cost) + parseInt(total_markup) + parseInt(costPerAdult);
    $("#pricingTotalCost").val(TotalCost);
    $("#totalCostonVAt").val(total_vat);
  });
</script>


<script type="text/javascript">
  $("#noOfPax").on("input", function() {
    var noPax = $(this).val();
    //alert(noPax);
    $("#costPerAdult").val(noPax);
    $("#noOfOccupancy").val(noPax);
  });
</script>




<!-- Package Script -->

<script type="text/javascript">
  $("#totalCostPackage,#PackageMarkup").on("input", function() {
    var total_vat = 0;

    var total_cost = $("#totalCostPackage").val();
    var total_markup = $("#PackageMarkup").val();
    var totalCostonVAt = parseInt($("#totalCostonVAt").val());
    var total_vat = parseInt(total_cost) + parseInt(total_markup);
    $("#TotalPackageVAT").val(total_vat);

    $("#TotalSales").val(total_vat + totalCostonVAt);
    $("#GrandTotal").val(total_vat + totalCostonVAt);
  });
</script>

<script src="<?php echo base_url(); ?>public/js/validate.js"></script>
<script>
  $(document).ready(function() {
    var open = true;
    $("#travelers").click(function() {
      if (open) {

        $("#selecttraveler").show();
        open = false;
      } else {

        $("#selecttraveler").hide();
        open = true;
      }

    })

    $("#closetraveller").click(function() {
      $("#selecttraveler").hide();
    })

    $("#goingFrom1").change(function() {

      var checkindate = $("#specificDate1").val();

      var someDate = new Date(checkindate);
      var numberOfDaysToAdd = $("#goingFrom1").val();

      someDate.setDate(someDate.getDate() + parseInt(numberOfDaysToAdd)); //number  of days to add, e.x. 15 days
      var dateFormated = someDate.toISOString().substr(0, 10);
      $("#endDate1").val(dateFormated);

    });

  })

  function addrows() {
    var cnt = $('#rows_count').val();
    var allocated_days = 0;

    $('.bnights').each(function() {
      allocated_days += Number($(this).val());
    });
    
    var totalNoRoom = <?php echo $buildpackage->room ?>;
    var noOfNightsR = 0;
    $(".get_no_nights").each(function(index) {
      if(((index+1) % parseInt(totalNoRoom)) == 0) {
        noOfNightsR += Number($(this).val());
      }
    });

    setTimeout(function() {
      $('.noOfDaysAlertcls').attr("style", "display:none;")
    }, 2000);
    // var initaldays = parseInt($('#buildNoNights').val());
    var initaldays = 1;

    if (isNaN(initaldays) || initaldays == "") {
      $('#buildNoNights').attr('style', "border-color:red");
    } else {
      $('#buildNoNights').removeAttr('style', "border-color:red");


      var totalNoOfDays = <?php echo $buildpackage->night ?>;
      var total_rooms = <?php echo $view->room ?>;

      let adult_pax_room1_arr = [];
      let child_pax_room1_arr = [];

      let adult_pax_room1 = <?php echo json_encode(explode(",", $package_details->adult_per_room)) ?>;
      let child_pax_room1 = <?php echo json_encode(explode(",", $package_details->child_per_room)) ?>;

      let no_child_room_wo_new = <?php echo json_encode($no_child_room_wo_new) ?>;

      for (let noRooms = 0; noRooms < total_rooms; noRooms++) {
        adult_pax_room1_arr.push(adult_pax_room1[noRooms]);
        child_pax_room1_arr.push(child_pax_room1[noRooms]);
      }


      var d = "<?php echo $view->specificDate; ?>";
      var f = moment(d).add((allocated_days / total_rooms), 'days');
      $('.bnights').attr('readonly', true);
      if (noOfNightsR < totalNoOfDays) {

      // if (allocated_days) {
        $('#rows_count').val(parseInt(cnt) + parseInt(1));
        faqs_row = parseInt(cnt) + parseInt(1);
        var template = '';
        var no_of_night = '';
        for (let i = 1; i <= ((totalNoOfDays - noOfNightsR)); i++) {
          no_of_night += '<option value="' + i + '">' + i + '</option>';
        }
        for (let room_no = 1; room_no <= total_rooms; room_no++) {

          template += `
        <table class="table">
        <tbody id="faqs-row${faqs_row}${room_no}">
        <thead>
          <tr>
          <th></th>
          <th>Hotel City</th>
          <th>Check In</th>
          <th>Nights</th>
          <th>Category</th>
          <th>Hotel Name</th>
          <th>Room Type </th>
          </tr>
        </thead>
        <tr>
          <td>Room${room_no}</td>
          <td>
              <select class="form-control get-hotel get_all_city" name="buildHotelCity[]" id="buildHotelCity${faqs_row}${room_no}" onchange="get_hotel_name(this.id,${faqs_row}${room_no});">
                <option value="Dubai">Dubai</option>
                <option value="AbuDhabi">Abu Dhabi</option>
                <option value="Sharjah">Sharjah</option>
                <option value="Ajman">Ajman</option>
                <option value="Sir Baniyas">Sir Baniyas</option>
                <option value="Umm Al-Quwain">Umm Al-Quwain</option>
                <option value="Fujairah">Fujairah</option>
                <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                <option value="Al Ain">Al Ain</option>
              </select>
          </td>
          <td><input class="form-control get_CheckIn" type="date" value="${f.format("YYYY-MM-DD")}" name="buildCheckIns[]" id="buildCheckIn${faqs_row}${room_no}"></td>
          <td>
          
              <select class="form-control bnights get_no_nights" id="buildNoNights${faqs_row}${room_no}" onchange="get_hotel_name_new('Category',${faqs_row}${room_no});" name="buildNoNight[]" required="">
                <option value="">Select</option>
                ${no_of_night}
              </select>
          </td>
          <td>
              <div>
                <select data-mdl-for="sample2" class="form-control get_category" value="" id="Category${faqs_row}${room_no}" tabIndex="-1" name="Category[]" onchange="get_hotel_name_new('Category','${faqs_row}${room_no}');">
                                                <option <?php echo $buildpackage->hotelPrefrence == 1 ? "selected" : ""; ?>  value="1">1</option>
                                                <option <?php echo $buildpackage->hotelPrefrence == 2 ? "selected" : ""; ?>  value="2">2</option>
                                                <option <?php echo $buildpackage->hotelPrefrence == 3 ? "selected" : ""; ?>  value="3">3</option>
                                                <option <?php echo $buildpackage->hotelPrefrence == 4 ? "selected" : ""; ?>  value="4">4</option>
                                                <option <?php echo $buildpackage->hotelPrefrence == 5 ? "selected" : ""; ?>  value="5">5</option>
                                              </select>
              </div>
          </td>
          <td>
              <select class="form-control get_buildHotelName" id="buildHotelName${faqs_row}${room_no}"  required="" name="buildHotelName[]"  
              onchange="checkRoomAvailability(buildHotelCity${faqs_row}${room_no},buildCheckIn${faqs_row}${room_no},buildNoNights${faqs_row}${room_no},buildHotelName${faqs_row}${room_no},buildRoomType${faqs_row}${room_no})"
              required>
                <option>Select</option>
              </select>
          </td>
          <td><select class="form-control get-hotel-room get_buildRoomType" onchange="updateRemainingRoom('buildHotelCity','buildCheckIn','buildNoNights','buildHotelName','buildRoomType','Category',${faqs_row}${room_no})" name="buildRoomType[]" id="buildRoomType${faqs_row}${room_no}" required></select></td>
          </tr>

          <thead>
            <tr>
            <th></th>
            <th>Group Type </th>
            <th>Bed Type </th>
            <th>Meal Type </th>
            <th>Adult </th>
            <th>Child </th>
            <th colspan="2">Extra </th>
            </tr>
          </thead>
          <tr>
          <td></td>
          <td>
              <select class="form-control get_room_group_type" id="buildRoomGroupType${faqs_row}${room_no}" name="buildRoomGroupType[]" >
                <option value="FIT" >FIT</option>
                <option value="GIT" >GIT</option>
              </select>
          </td>
          <td>
              <select class="form-control get_bed_type" id="buildBedType${faqs_row}${room_no}"  required="" name="buildBedType[]" required>
                <option ${adult_pax_room1_arr[room_no - 1] == 2 ? "selected" : ""} value="Double" >Double</option>
                <option ${adult_pax_room1_arr[room_no - 1] == 1 ? "selected" : ""} value = "Single">Single</option>
                <option ${adult_pax_room1_arr[room_no - 1] == 3 ? "selected" : ""} value = "Triple">Triple</option>
              </select>
          </td>
          <td>
              <select class="form-control get_room_types" id="room_types${faqs_row}${room_no}" name="build_room_types[]" required>
                <option value ="BB">BB</option>
                <option value ="Room Only">Room Only</option>
                <option value="HB" >HB</option>
                <option value="FB" >FB</option>
              </select>
          </td>
          <td>
              <input class="form-control adult_per_room" type="text"  value="${adult_pax_room1_arr[room_no - 1]}" name="adult_per_room[]" id="adult_per_room${faqs_row}${room_no}">
            </td>
            <td>
              <input class="form-control child_per_room" type="text"  value="${child_pax_room1_arr[room_no - 1]}" name="child_per_room[]" id="child_per_room${faqs_row}${room_no}">
              <input class="form-control child_per_room_wo_bed" type="hidden" value="${no_child_room_wo_new[room_no - 1] != null ? no_child_room_wo_new[room_no - 1] : 0 }" name="child_per_room_wo_bed[]" id="child_per_room_wo_bed${faqs_row}${room_no}">
              </td>
          
          <td colspan="2">
              <div class="d-flex justify-content-around">
                <p><input type="checkbox" id="extra_with_adult${faqs_row}${room_no}" name="extra_check[]" value="extra_with_adult" class="check-extra extra_with_adult"> Ex. adult</p>
                <button type="button" class="btn btn-danger btn-xs cls-btn"  id="del_btn${faqs_row}${room_no}"  onClick="return  removeHotel2(this);"><i class="fa fa-trash"></i></button>
              </div>
          </td>
        </tr>

        </tbody>
        </table>

        `
        }

        $("#addrows").append(template);
        $('#allocated_days').val(parseInt($('#buildNoNights' + faqs_row + room_no).val()) + parseInt(allocated_days));

        $("[type='number']").keypress(function(evt) {
          evt.preventDefault();
        });

      } else {
        $('#noOfDaysAlert').html(totalNoOfDays);
        $('.noOfDaysAlertcls').attr("style", "display:block;");
      }


    }
  }

  removeHotel = function removeHotel(data) {

    var allocateddays = parseInt($('#allocated_days').val());

    var tr = data.closest('tr');
    data.closest('tr').remove();

    if ($("#faqs-row0").length == 0) {
      $('#buildNoNights').attr('readonly', false);
    }


  }

  removeHotel2 = function removeHotel2(data) {
    var allocateddays = parseInt($('#allocated_days').val());
    var tr = data.closest('table');
    data.closest('table').remove();
    tr.remove();
    if ($("#faqs-row0").length == 0) {
      $('#buildNoNights').attr('readonly', false);
    }


  }
</script>

<script>
  function updateRemainingRoom(city, checkin, nights, hotel, bedtype, cat, row) {
    let city_val = $('#' + city + row).val();
    let checkin_val = $('#' + checkin + row).val();
    let nights_val = $('#' + nights + row).val();
    let hotel_id = $('#' + hotel + row).val();
    let hotel_name = $('#' + hotel + row).find(":selected").text();
    let bedtype_val = $('#' + bedtype + row).find(":selected").text();
    let cat_val = $('#' + cat + row).find(":selected").text();
    let no_of_rooms = '<?php echo $view->room ?>';

    if (no_of_rooms > 1) {
      for (let i = 1; i < no_of_rooms; i++) {
        $('#' + city + (row + i)).val(city_val);
        $('#' + checkin + (row + i)).val(checkin_val);
        $('#' + nights + (row + i)).val(nights_val);
        $('#' + hotel + (row + i)).append($("<option selected></option>").attr("value", hotel_id).text(hotel_name));
        $('#' + bedtype + (row + i)).append($("<option selected></option>").attr("value", bedtype_val).text(bedtype_val));
        $('#' + cat + (row + i)).val(cat_val);

      }
    }

  }

  function checkRoomAvailability(city, date, nights, hotel, room_type) {
    let rating = <?php echo $buildpackage->hotelPrefrence ?>;
    // console.clear();
    let city_val = $(city).val();
    let date_val = $(date).val();
    let nights_val = $(nights).val();
    let hotel_val = $(hotel).val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/get_hotels_by_availability',
      data: {
        'city': city_val,
        'date': date_val,
        'nights': nights_val,
        'category': rating,
        'hotel_id': hotel_val,
      },
      success: function(response) {
        // console.clear();

        $(room_type).empty();
        $(room_type).append($("<option>Select Room Type</option>"));
        for (let i = 0; i < response.length; ++i) {
          var newOption = $(room_type)
            .append($("<option></option>")
              .attr("value", response[i])
              .text(response[i]));
        }
      }
    })


  }
</script>


<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
  CKEDITOR.replace('buildPackageInclusions');
  CKEDITOR.replace('buildPackageExclusions');
  CKEDITOR.replace('buildPackageConditions');
  CKEDITOR.replace('buildPackageCancellations');
  CKEDITOR.replace('buildPackageRefund');
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<script>
  $("#excursion_name_SIC").select2({
  	width: "100%",
  });

  $("#excursion_name_SIC").on("select2:select", function (evt) {
    var elm = evt.params.data.element;
    $elm = $(elm);
    $t = $(this);
    $t.append($elm);
    $t.trigger('change.select2');
  });

  $("#excursion_name_PVT").select2({
  	width: "100%",
  });

  $("#excursion_name_PVT").on("select2:select", function (evt) {
    var elm = evt.params.data.element;
    $elm = $(elm);
    $t = $(this);
    $t.append($elm);
    $t.trigger('change.select2');
  });

  $("#excursion_name_TKT").select2({
  	width: "100%",
  });

  $("#excursion_name_TKT").on("select2:select", function (evt) {
    var elm = evt.params.data.element;
    $elm = $(elm);
    $t = $(this);
    $t.append($elm);
    $t.trigger('change.select2');
  });

// var selectedValuesTest = ?php print_r(explode(",",$sic_query[0]->excursion_name)) ;?>;
// console.log("🚩 ~ file: build_package_edit.php:4960 ~ selectedValuesTest", selectedValuesTest)
// $(document).ready(function() {
//   $("#excursion_name_SIC").select2({
//     multiple: true,
//   });
//   $('#excursion_name_SIC').val(selectedValuesTest).trigger('change');
// });
</script>

<style>
  .accordion-button:after {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    width: auto !important;
    height: auto !important;
    margin-left: auto;
    content: "▲" !important;
    background-image: none;
    background-repeat: no-repeat;
    background-size: 1.25rem;
    -webkit-transition: -webkit-transform .2s ease-in-out;
    transition: -webkit-transform .2s ease-in-out;
    transition: transform .2s ease-in-out;
    transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out;
  }

  .form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff !important;
    outline: 0;
    box-shadow: 0 0 0 .2remrgba(0, 123, 255, .25);
  }

  input[type="text"]:disabled{background-color:white;}
  
  /* .select2-search{
    display: none !important;
  } */

</style>