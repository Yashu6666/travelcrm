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
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="#">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
              &nbsp;<a class="parent-item" href="#">Queries</a>

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
                    <!-- <tr>
          <th><b>Enquiry Details</b></th>
          <td></td>
          <td></td>
          <td></td>
         </tr> -->
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
                            <input type="radio" id="hotel_status1" name="hotel_status" value="No"><label for="html">No</label>
                          </p>
                        </div>
                        <div class="row mt-5 mr-3 ml-3 mb-3" style="display:none" id="hoteldisplay">
                          <div>
                            <table class="table" id="addrows">
                              <div class="alert alert-danger noOfDaysAlertcls" style="display:none;">
                                <strong>Exceed !</strong> You cannot add more than <b id="noOfDaysAlert"></b> days.
                              </div>
                              <div class="alert alert-danger noOfDaysAlertcls2" id="hotelNoOfDays" style="display:none;">
                                <strong>You Should add Hotels for <b id="noOfDaysAlert"><?php echo $buildpackage->night ?></b> days.
                              </div>
                              <div style="float:right;">
                                <a class="new_btn px-3 ml-0" onclick="addrows()">add</a>
                              </div>
              <?php for($i=1; $i <= $view->room; $i++) : ?>

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
                                  <td class="text-nowrap">Room <?php echo $i?></td>
                                  <td>
                                    <select class="form-control get-hotel get_all_city" required="" name="buildHotelCity[]" id="buildHotelCity<?php echo "_".$i?>" onchange="get_hotel_name_new('buildHotelCity','<?php echo '_'.$i ?>');">
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
                                    <input class="form-control get_CheckIn" type="date" value="<?php echo $view->specificDate; ?>" name="buildCheckIns[]" id="buildCheckIn" readonly>
                                    <input type="hidden" value="<?php echo $view->room; ?>" name="no_of_room" id="no_of_room">
                                  </td>
                                  <td>
                                    <select class="form-control bnights get_no_nights" id="buildNoNights" name="buildNoNightss[]" required="">
                                      <option value="0">Select</option>
                                      <?php $count_days = 1;
                                      for ($count_days = 1; $count_days <= $buildpackage->night; $count_days++) {
                                        echo "<option value='" . $count_days . "'>" . $count_days . "</option>";
                                      } ?>
                                    </select>
                                  </td>
                                  <td>
                                    <div>
                                      <select data-mdl-for="sample2" class="form-control get_category" value="" id="Category<?php echo '_'.$i ?>" tabIndex="-1" name="Category[]" onchange="get_hotel_name_new('Category','<?php echo '_'.$i ?>');">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                      </select>
                                    </div>
                                  </td>
                                  <td>
                                    <select class="form-control get_buildHotelName" id="buildHotelName<?php echo '_'.$i ?>" required="" name="buildHotelName[]" onchange="get_route_name_new('buildHotelName','<?php echo '_'.$i ?>');" required>
                                    </select>
                                  </td>
                                  <td>
                                    <select class="form-control get_buildRoomType" id="buildRoomType<?php echo '_'.$i ?>" required="" name="buildRoomType[]" required>
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
                <th>Sharing Type </th>
                <th colspan="2">Extra </th>
                <!-- <th>Action</th> -->

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
                                      <option value="Double">Double</option>
                                      <option value="Single">Single</option>
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
                                    <select class="form-control room_sharing_types" id="room_sharing_types" name="room_sharing_types[]">
                                      <option value="double_sharing">Double Sharing</option>
                                      <option value="single_sharing">Single Sharing</option>
                                      <option value="triple_sharing">Triple Sharing</option>
                                    </select>
                                  </td>
                                  <td colspan="2">
                                    <div class="d-flex justify-content-around">
                                      <p><input type="checkbox" id="extra_with_adult" <?php echo $buildpackage->adult > 2 ? 'checked' : ''; ?> name="extra_check[]" value="extra_with_adult" class="check-extra extra_with_adult"> Ex. adult</p>
                                      <p><input type="checkbox" <?php echo $buildpackage->child > 0 ? 'checked' : ''; ?> id="extra_with_child" name="extra_check[]" value="extra_with_child" class="check-extra extra_with_child"> CWB</p>
                                      <p><input type="checkbox" <?php echo $buildpackage->infant > 0 ? 'checked' : ''; ?> id="extra_without_bed" name="extra_check[]" value="extra_without_bed" class="check-extra extra_without_bed"> CNB</p>
                                    </div>

                                  </td>


                                </tr>


              </tbody>
              <?php endfor ?>

                            </table>
                            <div style="float:right;">
                              <button type="button" onclick="hotelcalculation()" class="new_btn px-5">Save</button>
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="mt-5">
                        <div>
                          <div class="card-head card-head-new">
                            <p><i class="fa-solid fa-car"></i> Transfer
                              <input type="radio" id="trans_status" name="trans_status" value="Yes"><label for="html">Yes</label>
                              <input type="radio" id="trans_status1" name="trans_status" value="No"><label for="html">No</label>
                            </p>
                          </div>
                        </div>
                        <div class="row mt-4 mr-3 ml-3 mb-3" style="display:none" id="transdisplay">
                          <div class="col">
                            <label for="" class="transport-lable"><b>Transport Type</b>
                              :</label>
                            <input type="checkbox" name="TransType" id="TrasportTypeCab" class="mr-3 ml-2 " value="Internal Transfer"><span class="transport-lable-ckeck">Internal Transfer</span><span class="checkmark"></span>
                            <input type="checkbox" name="TransType" id="TrasportTypeSic" checked class="mr-3 ml-2 " value="Point to Point Transfer"><span class="transport-lable-ckeck">Return Transfer</span><span class="checkmark"></span>
                            <!-- <input type="checkbox" name="TransType" id="TrasportTypeBus" class="mr-3 ml-2 " value="Hourly"><span
              class="transport-lable-ckeck">Hourly</span><span class="checkmark"></span> -->
                            <!-- <input type="checkbox" name="TransType" id="TrasportTypeTrain" class="mr-3 ml-2 " value="train"><span
              class="transport-lable-ckeck">Train</span><span class="checkmark"></span> -->
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
                                  <th>Internal Transfer</th>

                                  <td><input class="form-control" type="number" id="pax_internal" placeholder="Pax" value="<?php echo $view->Packagetravelers + $buildpackage->child; ?>" name="buildTravelFromCityCab[]" disabled></td>

                                  <td><input class="form-control internal_transfer_date" type="date" value="<?php echo $view->specificDate; ?>" id="buildTravelFromdateCab" name="buildTravelFromdateCab[]"></td>
                                  <td>

                                    <select id="pickupinternal" required name="buildTravelToDateCab[]" class="internal_transfer_pickup js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                      <option value="Pickup">Pickup</option>
                                      <!-- <?php foreach ($transfer_route as $value) { ?>
                <option value="<?php echo $value->start_city ?>"><?php echo $value->start_city ?></option>
              <?php } ?> -->
                                    </select>

                                  </td>
                                  <td>
                                    <select id="dropoffinternal" name="buildTravelToCityCabDrop[]" class="internal_transfer_dropoff js-example-basic-multiple w-100 bg-white form-control form-control-lg">
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
                                  <th>Return Transfer</th>
                                  <td><input class="form-control" id="pax_point" type="text" placeholder="Pax" value="<?php echo $view->Packagetravelers + $buildpackage->child; ?>" name="buildTravelFromCitySIC[]" disabled></td>
                                  <td><input class="form-control return_transfer_date" id="buildTravelFromdatePVT" type="date" value="<?php echo $view->specificDate; ?>" name="buildTravelFromdatePVT[]"></td>

                                  <td>
                                    <select id="pickuppoint" required name="buildTravelToDateSIC[]" class="return_transfer_pickup js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                      <option value="Pickup">Pickup</option>
                                      <!-- ?php foreach($transfer_route1 as $value){ ?>
                <option value="?php echo $value->start_city ?>">?php echo $value->start_city ?></option>
              ?php } ?> -->
                                    </select>
                                  </td>
                                  <td>
                                    <select id="dropoffpoint" name="buildTravelToCitySIC[]" class="return_transfer_dropoff js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                      <option value="Drop Off">Drop Off</option>

                                    </select>
                                  </td>
                                  <td><input id="route_namepoint" class="form-control return_transfer_route" type="text" placeholder="Route Name" name="buildTravelTypeSIC[]"></td>
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
                              <input type="radio" id="visa_status1" name="visa_status" value="No"><label for="html">No</label>
                            </p>
                          </div>
                          <br>
                          <div class="row mt-4 mr-3 ml-3 mb-3 " style="display:none" id="visadisplay">
                            <div>
                              <!-- <table class="table table-borderless">
                 <thead>
                  <tr>
                   <th>Visa Category</th>
                   <th>Entry Type</th>
                   <th>Validity</th>
                   <th>Total Gst</th>
                   <th>Final Price</th>

                  </tr>
                 </thead>
                 <tbody>
                  <tr>
                   <td><input type="text" class="form-control" name="visaPerAdultCost"></td>
                   <td><input type="text" class="form-control" name="visaTotalCost"></td>
                   <td><input type="text" class="form-control" name="visaTotalMarkup"></td>
                   <td><input type="text" class="form-control" name="visaTotalGST"></td>
                   <td><input type="text" class="form-control" name="visaFinalPrice"></td>




                  </tr>

                 </tbody>
                </table> -->

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
                                          <option value="Single Entry">Single Entry</option>
                                          <option value="Double Entry">Double Entry</option>
                                          <option value="Multi Entry">Multi Entry</option>
                                        </select>

                                      </div>
                                    </td>
                                    <!-- <td><input type="text" placeholder="" class="form-control" name="process_time">
            </td> -->
                                    <td>
                                      <div>
                                        <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" id="visa_validity" name="visa_validity">
                                          <option value="1 Month">1 Month</option>
                                          <option value="3 Month">3 Month</option>
                                          <option value="5 Years">5 Years</option>
                                        </select>
                                      </div>
                                    </td>

                                    <td><input type="text" placeholder="0" class="form-control" name="adult" value="<?php echo $view->Packagetravelers; ?>" disabled>
                                    </td>
                                    <td><input type="text" placeholder="0" class="form-control" name="child" value="<?php echo $buildpackage->child; ?>" disabled>
                                    </td>
                                    <td><input type="text" placeholder="0" class="form-control" name="infant" value="<?php echo $buildpackage->infant; ?>" disabled>
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
                              <input type="radio" id="otb_status1" name="otb_status" value="No"><label for="html">No</label>
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
                                    <input type="text" placeholder="0" class="form-control" name="OTB" value="OTB" disabled>
                                    </td>
                                    <td><input type="text" placeholder="0" class="form-control" name="otb_adult"  id="otb_adult" value="<?php echo $view->Packagetravelers; ?>">
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
                            <input type="radio" id="excursion_status1" name="excursion_status" value="No"><label for="html">No</label>
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
                                        <select required multiple="" id="excursion_name_SIC" name="excursion_name_SIC[]" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                          <!-- <select id="excursion_name" data-mdl-for="sample2" class="form-control"
                value=""  tabIndex="-1" name="excursion"> -->
                                          <!-- <option>Select Excursion</option> -->
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
                                        <!-- <select required multiple="" id="excursion_type"  name="excursion_type[]"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg" value="PVT"> -->

                                        <select id="excursion_type_PVT" data-mdl-for="sample2" class="form-control" value="PVT" tabIndex="-1" name="excursion_type">
                                          <option value="PVT">PVT</option>
                                        </select>
                                      </div>
                                    </td>

                                    <td>
                                      <div>
                                        <select required multiple="multiple" id="excursion_name_PVT" name="excursion_name_PVT[]" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                          <!-- <select id="excursion_name" data-mdl-for="sample2" class="form-control"
                value=""  tabIndex="-1" name="excursion"> -->
                                          <!-- <option>Select Excursion</option> -->
                                          <?php
                                          // $total_pax = $view->Packagetravelers+$buildpackage->child;
                                          // echo"<pre>";print_r($excursion_pvt);
                                          $filter = array();
                                          foreach ($excursion_pvt as $k => $value) {
                                            $filter[$value->tourname] = $value;
                                          }
                                          ?>
                                          <!-- <option value="<?php //echo $values->tourname 
                                                              ?>"><? php // echo $values->tourname 
                                                                                                  ?></option> -->
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
                                        <select required multiple="" id="excursion_name_TKT" name="excursion_name_TKT[]" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
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

                          </div>
                        </div>
                        <div class="card-head card-head-new mt-5">
                          <p style="margin-top:20px"><i class="fa-solid fa-bowl-rice"></i> Meal
                            <input type="radio" id="meals_status" name="meals_status" value="Yes"><label for="html">Yes</label>
                            <input type="radio" id="meals_status1" name="meals_status" value="No"><label for="html">No</label>
                          </p>

                        </div>
                        <div class="row mt-4 mr-3 ml-3 mb-3 " style="display:none" id="mealsdisplay">
                          
                        <div  id="addrowss">
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
                                        <option value="Standard">Standard</option>
                                        <option value="Premium">Premium</option>
                                      </select>

                                    </div>
                                  </td>
                                  <td>
                                    <select data-mdl-for="sample2" class="form-control res_name" value="" tabIndex="-1" name="res_name[]" id="res_name">
                                      <option>select</option>
                                    </select>
                                    <!-- <input class="form-control " type="text" value="" name="res_name[]" id="res_name"></td> -->
                                  <td>
                                    <div>
                                      <select data-mdl-for="sample2" class="form-control meal" value="" tabIndex="-1" id="meal_cal" name="Meal[]">
                                        <option value="Dinner">Dinner</option>
                                        <option value="Lunch">Lunch</option>
                                      </select>
                                    </div>
                                  </td>
                                  <td>
                                    <div>
                                      <select data-mdl-for="sample2" class="form-control meal_type" value="" tabIndex="-1" id="meal_type_cal" name="Meal_Type[]">
                                        <option value="Veg">Veg</option>
                                        <option value="Non-Veg">Non-Veg</option>
                                        <option value="Jain">Jain</option>
                                      </select>
                                    </div>
                                  </td>
                                  <td><input type="number" min="1" id="no_of_meals" class="form-control  no_of_meals" name="no_of_meals[]">


                                  
                                  <td><input type="text" value="<?php echo $view->Packagetravelers;?>" placeholder="0" id="adult_meal_cal" class="form-control check-adult meal_adult" name="adult[]">
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
                            <input type="checkbox" name="mealTransTypeInt" id="mealTransTypeInt" class="mr-3 ml-2 " value="Internal Transfer"><span class="transport-lable-ckeck">Internal Transfer</span><span class="checkmark"></span>
                            <input type="checkbox" name="mealTransTypeRet" id="mealTransTypeRet" checked class="mr-3 ml-2 " value="Point to Point Transfer"><span class="transport-lable-ckeck">Return Transfer</span><span class="checkmark"></span>
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
                                  <th>Internal Transfer</th>
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
                                    <!-- <input id="price_internal" type="hidden" name="price_internal[]" />
                                    <input id="pax_count_internal" type="hidden" name="pax_count_internal[]" />
                                    <input id="total_price_internal" type="hidden" value="0" name="total_price_internal[]" /> -->
                                    <input id="route_name_internal_meal" name="route_name_internal_meal[]" class="form-control route_name_internal_meal" type="text" placeholder="Route Name">
                                  </td>
                                  <!-- <td><a class="new_btn px-3" onclick="transRow()">add</a></td> -->
                                </tr>

                                <tr id="mealReturnTransfer">
                                  <th>Return Transfer</th>
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
                                  <!-- <input id="price_point" type="hidden" name="price_point[]" />
                                  <input id="pax_count_point" type="hidden" name="pax_count_point[]" />
                                  <input id="total_price_point" type="hidden" value="0" name="total_price_point[]" /> -->
                                  <!-- <td><a class="new_btn px-3" onclick="transReturnRow()">add</a></td> -->
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
                                $("#proposal-form").submit();
                                // sessionStorage.setItem("href",location.href); 
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



                              // var extras = [];
                              // $(".check-extra").each(function() {
                              //   var bed = $(this).val();

                              // var with_adult ='';
                              // var with_child ='';
                              // var without_bed ='';
                              // if ($(this).is(":checked"))
                              // {
                              //   with_adult = $(this).val();
                              // }
                              // if ($(this).is(":checked"))
                              // {
                              //   with_child = $(this).val();
                              // }
                              // if ($(this).is(":checked"))
                              // {
                              //   without_bed = $(this).val();
                              // }

                              //   extras.push($.trim(with_adult));
                              //   extras.push($.trim(with_child));
                              //   extras.push($.trim(without_bed));

                              // });

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
                              //  var buildPackageRefund = $('#buildPackageRefund').val();

                              $.ajax({
                                type: "POST",
                                url: "<?php echo base_url() ?>Query/CreateProposalHotelSave",
                                // data: {cities : cities,checkIn:checkIn,noOfNights:noOfNights,category:category,hotelName:hotelName,roomType:roomType,bedType:bedType,extras:extras},
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
                                  console.log('success');
                                  // $("#proposal-form").submit();
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
                                  console.log(response);
                                  // $("#proposal-form").submit();
                                }
                              });


                              // sessionStorage.setItem("href",location.href); 




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

                              })

                              //  $(".card-box").click(function(e) {

                              // });


                              $(".card-box").click(function(e) {
                                e.stopPropagation();

                                let itrnl_total = 0;
                                var hotel_rate_adult = $("#hotel_rate_adult").val();

                                // var total_price_internal = $("#total_price_internal").val();
                                var total_price_internal_arr = $("input[name='total_price_internal[]']")
                                  .map(function() {
                                    itrnl_total += parseInt($(this).val());
                                  }).get();
                                var total_price_internal = itrnl_total;

                                let price_total = 0;
                                // var total_price_point = $("#total_price_point").val();
                                var total_price_point_arr = $("input[name='total_price_point[]']")
                                  .map(function() {
                                    price_total += parseInt($(this).val());
                                  }).get();
                                var total_price_point = price_total;

                                var pax_adult_count = <?php echo $buildpackage->adult; ?>;
                                var pax_child_count = <?php echo $buildpackage->child; ?>;
                                var pax_infant_count = <?php echo $buildpackage->infant; ?>;

                                var total_pax_visa_price_adult = $("#total_pax_visa_price_adult").val();
                                var total_pax_otb_price_adult = $("#total_pax_otb_price_adult").val();
                                var total_pax_meal_adult = $("#total_pax_meal_adult").val();
                                var total_pax_pvt_adult = $("#total_pax_pvt_adult").val();
                                var total_pax_sic_adult = $("#total_pax_sic_adult").val();

                                var total_pax_TKT_adult = $("#total_pax_TKT_adult").val();


                                var intrnal_transfer_avg = parseInt(total_price_internal) / (parseInt(pax_adult_count) + parseInt(pax_child_count));
                                var point_transfer_avg = parseInt(total_price_point) / (parseInt(pax_adult_count) + parseInt(pax_child_count));

                                var sub_total_adult = parseInt(hotel_rate_adult) +
                                  // parseInt(total_price_internal)+ 
                                  // parseInt(total_price_point) + 
                                  parseInt(intrnal_transfer_avg * (parseInt(pax_adult_count))) +
                                  parseInt(point_transfer_avg * (parseInt(pax_adult_count))) +

                                  parseInt(total_pax_TKT_adult) +
                                  parseInt(total_pax_visa_price_adult) +
                                  parseInt(total_pax_otb_price_adult) +
                                  parseInt(total_pax_meal_adult) +
                                  parseInt(total_pax_pvt_adult) +
                                  parseInt(total_pax_sic_adult);

                                var hotel_rate_child = $("#hotel_rate_child").val();
                                var total_pax_pvt_hild = $("#total_pax_pvt_hild").val();
                                var total_pax_sic_hild = $("#total_pax_sic_hild").val();
                                var total_pax_meal_child = $("#total_pax_meal_child").val();
                                var total_pax_visa_price_child = $("#total_pax_visa_price_child").val();
                                var total_pax_otb_price_child = $("#total_pax_otb_price_child").val();
                                var total_pax_TKT_child = $("#total_pax_TKT_child").val();

                                var sub_total_child = parseInt(hotel_rate_child) +
                                  parseInt(intrnal_transfer_avg * (parseInt(pax_child_count))) +
                                  parseInt(point_transfer_avg * (parseInt(pax_child_count))) +
                                  parseInt(total_pax_sic_hild) +
                                  parseInt(total_pax_pvt_hild) +
                                  parseInt(total_pax_meal_child) + parseInt(total_pax_TKT_child) +
                                  parseInt(total_pax_otb_price_child) +
                                  parseInt(total_pax_visa_price_child);

                                var hotel_rate_infant = $("#hotel_rate_infant").val();
                                var total_pax_visa_price_infant = $("#total_pax_visa_price_infant").val();
                                var total_pax_otb_price_infant = $("#total_pax_otb_price_infant").val();
                                var total_pax_pvt_infant = $("#total_pax_pvt_infant").val();
                                var total_pax_sic_infant = $("#total_pax_sic_infant").val();
                                var total_pax_TKT_infant = $("#total_pax_TKT_infant").val();

                                var sub_total_infant = parseInt(total_pax_visa_price_infant) + parseInt(total_pax_otb_price_infant) +
                                  parseInt(hotel_rate_infant) +
                                  parseInt(total_pax_TKT_infant) +
                                  parseInt(total_pax_pvt_infant) +
                                  parseInt(total_pax_sic_infant);


                                let c_type = document.getElementById('currencyOption').value;
                                var usd_aed = <?php echo $usd_to_aed->usd_to_aed; ?>;

                                $("#subtotal_adults").html(c_type == 'USD' ? (sub_total_adult / usd_aed).toFixed(2) : sub_total_adult);
                                $("#subtotal_childs").html(c_type == 'USD' ? (sub_total_child / usd_aed).toFixed(2) : sub_total_child);
                                $("#subtotal_infants").html(c_type == 'USD' ? (sub_total_infant / usd_aed).toFixed(2) : sub_total_infant);

                                var PackageMarkup = $("#PackageMarkup").val();
                                var Mark_up = $("#Mark_up").val();

                                var total_adult = 0;
                                var total_child = 0;
                                var total_infant = 0;
                                if (Mark_up == "precentage") {

                                  total_adult = (parseInt(sub_total_adult) + (parseInt(sub_total_adult) * parseInt(PackageMarkup) / 100));
                                  total_child = (parseInt(sub_total_child) + (parseInt(sub_total_child) * parseInt(PackageMarkup) / 100));
                                  total_infant = (parseInt(sub_total_infant) + (parseInt(sub_total_infant) * parseInt(PackageMarkup) / 100));

                                }

                                markup_per = parseInt(PackageMarkup) / parseInt(pax_adult_count + pax_child_count + pax_infant_count);

                                if (Mark_up == "values") {

                                  total_adult = pax_adult_count > 0 ? (parseInt(sub_total_adult) + parseInt(markup_per * pax_adult_count)) : 0;
                                  total_child = pax_child_count > 0 ? (parseInt(sub_total_child) + parseInt(markup_per * pax_child_count)) : 0;
                                  total_infant = pax_infant_count > 0 ? (parseInt(sub_total_infant) + parseInt(markup_per * pax_infant_count)) : 0;

                                }

                                $("#totalprice_adult").html(c_type == 'USD' ? (total_adult / usd_aed).toFixed(2) : total_adult);
                                $("#totalprice_childs").html(c_type == 'USD' ? (total_child / usd_aed).toFixed(2) : total_child);
                                $("#totalprice_infants").html(c_type == 'USD' ? (total_infant / usd_aed).toFixed(2) : total_infant);

                                var per_pax_adult = (pax_adult_count > 1 ? parseInt(total_adult) / pax_adult_count : parseInt(total_adult));

                                var per_pax_child = (pax_child_count > 1 ? parseInt(total_child) / pax_child_count : parseInt(total_child));

                                var per_pax_infant = (pax_infant_count > 1 ? (parseInt(total_infant) / pax_infant_count) : parseInt(total_infant));

                                $("#perpax_adult").html(c_type == 'USD' ? Math.floor(per_pax_adult / usd_aed) : Math.floor(per_pax_adult));
                                $("#perpax_childs").html(c_type == 'USD' ? Math.floor(per_pax_child / usd_aed) : Math.floor(per_pax_child));
                                $("#perpax_infants").html(c_type == 'USD' ? Math.floor(per_pax_infant / usd_aed) : Math.floor(per_pax_infant));

                                $("#perpax_adult_input").val(c_type == 'USD' ? Math.floor(per_pax_adult / usd_aed) : Math.floor(per_pax_adult));
                                $("#perpax_childs_input").val(c_type == 'USD' ? Math.floor(per_pax_child / usd_aed) : Math.floor(per_pax_child));
                                $("#perpax_infants_input").val(c_type == 'USD' ? Math.floor(per_pax_infant / usd_aed) : Math.floor(per_pax_infant));
                                var totalprice_package = total_adult + total_child + total_infant;
                                // var totalprice_package = c_type == 'USD' ?  Math.floor( totalprice_package / usd_aed)  : Math.floor(totalprice_package);

                                $("#totalprice_package").val(totalprice_package);

                              })


                            })


                            // var faqs_row2= 0;                    
                            // function addrowss(){
                            //   // alert("hi");
                            //   var adds=' <tr  id="faqs-row1'+faqs_row2 + '">  <td><input class="form-control" type="date" value="<?php echo $view->specificDate; ?>" name="buildCheckIn" id="buildCheckIn"></td> <td> <div> <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" name="visa_category"> <option value="Standard">Standard</option> <option value="Premium">Premium</option> </select> </div> </td> <td> <div> <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" name="Meal"> <option value="Lunch">Lunch</option> <option value="Dinner">Dinner</option> </select> </div> </td> <td> <div> <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" name="Meal_Type"> <option value="Veg">Veg</option> <option value="Non-Veg">Non-Veg</option> <option value="Jain">Jain</option> </select> </div> </td> <td><input type="text" placeholder="0" class="form-control" name="adult"> </td> <td><input type="text" placeholder="0" class="form-control" name="child"> </td> <td><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i></button> </td> </tr>';
                            //     $('#addrowss').append(adds);
                            //   faqs_row2++;
                            // }

                            var faqs_row2 = 1;
                            
                            function addrowss() {
                              var cnt = $('#rows_count').val();
                              $('#rows_count').val(parseInt(cnt) + parseInt(1));
                              var adds = '<div class="row mb-3" style="border-top: 1px solid;" id="faqs-row' + faqs_row2 + '"> <table style="border-spacing: 10px;border-collapse: separate;"> <thead><tr><th style="width: 200;">Transfer Type</th><th>Date</th><th>Resturant Type</th><th>Resturant Name</th><th>Meal</th><th>Meal Type</th><th>No. of Meals</th><th style="width:100">Adult</th><th style="width:100">Child</th><th>Action</th></tr></thead><tbody style="border-bottom: #ff000000;"> <tr>';
                              adds += '<td><input type="radio"   id="with_transfer' + faqs_row2 + '" onchange="mealsTransferTypeChange('+faqs_row2+')" class="transfer_with_or_without" name="transfer_with_or_without' + faqs_row2 + '[]" value="with_transfer" onclick="get_resturant_name(this.id,' + faqs_row2 + ');"/> With Transfer<br/><input type="radio" class="transfer_with_or_without" checked="checked" onchange="mealsTransferTypeHide('+faqs_row2+')" id="without_transfer' + faqs_row2 + '" name="transfer_with_or_without' + faqs_row2 + '[]" value="without_transfer" onclick="get_resturant_name(this.id,' + faqs_row2 + ');"/> Without Transfer </td>';
                              adds += '<td><input class="form-control checkIn_date" type="date" value="<?php echo $view->specificDate; ?>" min="<?php echo $view->specificDate; ?>" max="<?php echo date('Y-m-d', strtotime($view->specificDate . ' + ' . (($buildpackage->night) - (1)) . ' days')); ?>" name="buildCheckIn[]" id="buildCheckIn' + faqs_row2 + '"></td>';
                              adds += '<td> <div> <select data-mdl-for="sample2" class="form-control rest_type" value="" tabIndex="-1" id="res_type' + faqs_row2 + '" name="res_type[]" onchange="get_resturant_name(this.id,' + faqs_row2 + ');"> <option value="Standard">Standard</option> <option value="Premium">Premium</option> </select> </div> </td>';
                              // adds += '<td><input class="form-control " type="text" value="" name="res_name[]" id="res_name'+faqs_row2 + '"></td>';
                              adds += '<td><select data-mdl-for="sample2" class="form-control res_name" value=""  tabIndex="-1" name="res_name[]" id="res_name' + faqs_row2 + '"  ><option>select</option></select></td>'
                              adds += '<td> <div> <select data-mdl-for="sample2" class="form-control meal" value="" tabIndex="-1" id="meal_cal' + faqs_row2 + '" name="Meal[]"> <option value="Dinner">Dinner</option> <option value="Lunch">Lunch</option>  </select> </div> </td>';
                              adds += '<td> <div> <select data-mdl-for="sample2" class="form-control meal_type" value="" tabIndex="-1" id="meal_type_cal' + faqs_row2 + '" name="Meal_Type[]"> <option value="Veg">Veg</option> <option value="Non-Veg">Non-Veg</option> <option value="Jain">Jain</option> </select> </div> </td>';
                              adds += '<td><input type="number" id="no_of_meals' + faqs_row2 + '" class="form-control no_of_meals" name="no_of_meals[]" >';
                              adds += ' <td><input type="text" placeholder="0" class="form-control meal_adult" id="adult_meal_cal' + faqs_row2 + '" name="adult[]" > </td>';
                              adds += '<td><input type="text" placeholder="0" class="form-control meal_child" id="child_meal_cal' + faqs_row2 + '" name="child[]" <?php if ($buildpackage->child == 0) echo "disabled"; ?>>';
                              adds += '</td> <td><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row2 + '\').remove();"><i class="fa fa-trash"></i></button> </td>';
                              // adds += '</td> <td><button class="btn btn-danger btn-xs" onClick="return removeMeals(this)"><i class="fa fa-trash"></i></button> </td>';
                              adds += '</tr> </tbody> </table>';

                              adds +=  `<div class="">
                                <div class="row mt-4 mr-3 ml-3 mb-3" id="mealTransferMain${faqs_row2}" style="display: none;">
                                  <div class="col">
                                    <label for="" class="transport-lable"><b>Transport Type</b>:</label>
                                    <input type="checkbox" name="mealTransTypeInt" id="mealTransTypeInt${faqs_row2}" onchange="mealsInterTransferShowHide(${faqs_row2})" class="mr-3 ml-2 " value="Internal Transfer"><span class="transport-lable-ckeck">Internal Transfer</span><span class="checkmark"></span>
                                    <input type="checkbox" name="mealTransTypeRet" id="mealTransTypeRet${faqs_row2}" onchange="mealsReturnTransferShowHide(${faqs_row2})" checked class="mr-3 ml-2 " value="Point to Point Transfer"><span class="transport-lable-ckeck">Return Transfer</span><span class="checkmark"></span>
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
                                          <th>Internal Transfer</th>
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
                                          <th>Return Transfer</th>
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
                              var adds = ' <tr  id="PvtCab' + trans_rows + '"> <th>Internal Transfer</th>';
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
                              var adds = ' <tr  id="Sic' + trans_retrun_rows + '"> <th>Return Transfer</th>';

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
                              <div></div>
                              </br>
                              <table class="table table-bordered">
                                <tr align="center">
                                  <td type="" name="person" id="person" value=""><span></td>
                                  <td type="" name="AdultCost" id="AdultCost" value=""><span>Adult</td>
                                  <td type="" name="ChildCost" id="ChildCost" value=""><span>Child</td>
                                  <td type="" name="InfantCost" id="InfantCost" value=""><span>Infant</td>
                                </tr>
                                <tr align="center">
                                  <td><b>Sub Total</b></td>
                                  <td type="" id="subtotal_adults" name="subtotal_adults"></td>
                                  <td type="" id="subtotal_childs" name="subtotal_childs"></td>
                                  <td type="" id="subtotal_infants" name="subtotal_infants"></td>
                                </tr>
                                <tr align="center">
                                  <td><b>Total Price</b></td>
                                  <td type="" name="totalprice_adult" id="totalprice_adult" value=""></td>
                                  <td type="" name="totalprice_childs" id="totalprice_childs" value=""></td>
                                  <td type="" name="totalprice_infants" id="totalprice_infants" value=""></td>
                                </tr>
                                <tr align="center">
                                  <td><b>Per PAX</b></td>
                                  <td type="" name="perpax_adult" id="perpax_adult" value=""></td>
                                  <td type="" name="perpax_childs" id="perpax_childs" value=""></td>
                                  <td type="" name="perpax_infants" id="perpax_infants" value=""></td>
                                </tr>
                              </table>
                              <input type="hidden" id="perpax_adult_input" name="perpax_adult_input" value="" />
                              <input type="hidden" id="perpax_childs_input" name="perpax_childs_input" value="" />
                              <input type="hidden" id="perpax_infants_input" name="perpax_infants_input" value="" />

                            </div>
                          </div>
                        </div>
                        <div class="mt-5">
                          <div>
                            <div class="card-head card-head-new ">
                              <p>Terms :</p>
                            </div>

                            <div class="container">

                              <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button  width-refund" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                      Inclusions
                                    </button>
                                  </h2>
                                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                      <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="buildPackageInclusions" name="buildPackageInclusions" style="height: 100px"></textarea>
                                        <!-- <label for="floatingTextarea2">Comments</label> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed  width-refund" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                      Exclusions
                                    </button>
                                  </h2>
                                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                      <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="buildPackageExclusions" name="buildPackageExclusions" style="height: 100px"></textarea>
                                        <!-- <label for="floatingTextarea2">Comments</label> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed  width-refund" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                      Term & Condions
                                    </button>
                                  </h2>
                                  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                      <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="buildPackageConditions" name="buildPackageConditions" style="height: 100px">
    
  </textarea>
                                        <!-- <label for="floatingTextarea2">Comments</label> -->
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion mt-3" id="accordionExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                      <button class="accordion-button  width-refund" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Cancellations Policy
                                      </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <div class="form-floating">
                                          <textarea class="form-control" placeholder="Leave a comment here" id="buildPackageCancellations" name="buildPackageCancellations" style="height: 100px">
      
  </textarea>
                                          <!-- <label for="floatingTextarea2">Comments</label> -->
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- <div class="accordion-item ">
 <h2 class="accordion-header" id="flush-headingTwo">
  <button class="accordion-button collapsed  width-refund" type="button"
  data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
  aria-expanded="false" aria-controls="flush-collapseTwo">
  Refund Policy
 </button>
</h2>
<div id="flush-collapseTwo" class="accordion-collapse collapse"
aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
<div class="accordion-body">
 <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here"
  id="buildPackageRefund" name="buildPackageRefund" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Comments</label>
 </div>
</div>
</div>
</div> -->
                                </div>
                              </div>
                            </div>








                            <input type="hidden" id="QueryId" name="QueryId" value="<?php echo $view->query_id; ?>">
                            <div class="last-btn mt-4 mb-4">

                              <button id="view-proposal-btn" type="button" class="new_btn px-5 mr-4">View Proposal</button>
                              <!-- <a id="view-proposal" type="button" class="contact-next-btn mr-4" href="<?php echo base_url(); ?>/proposal.html">View Proposal</a>  -->

                            </div>







                          </div>
                        </div>


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
  function get_resturant_name(id, row) {
    // var transfer = $('#'+id).val();

    var transfer = $('input[name="transfer_with_or_without' + row + '[]"]:checked').val();
    var rest_type = $('#res_type' + row).val();
    // console.log(rest_type);
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
        console.log(response);
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
        console.log(response);
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
        console.log(response);
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
          console.log(response[j]);
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
          console.log(response[j]);
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
  //   $('#buildHotelCity,#Category').on('change', function() {
  //     var city = $('#buildHotelCity').val();
  //     var Category =  $('#Category').val();
  //     $("#buildHotelName").empty();
  //     $.ajax({
  //           type:"POST",
  //           dataType: "json",
  //           url:'<?php echo site_url(); ?>/Query/get_hotels',
  //           data:{'city':city,'category':Category},
  //           success:function(response){
  //             console.log(response);
  //           var i;
  //           $('#buildHotelName').append($("<option>Select</option>"));
  //             for (i = 0; i < response.length; ++i) {
  //               var newOption = $('#buildHotelName')
  //                     .append($("<option></option>")
  //                                 .attr("value", response[i].id)
  //                                 .text(response[i].hotelname));

  //                 // $('#buildHotelName')
  //                 //     .append("<option value='"+response[i].id+"' selected=selected >"+response[i].hotelname+"</option>");

  //             }
  //             // response ='';
  //           }

  //         })
  // });



  // $('.get-hotel').on('change', function() {

  //   alert($(this).val());
  //     var city = $('#buildHotelCity').val();
  //     $("#buildHotelName").empty();
  //     $.ajax({
  //           type:"POST",
  //           dataType: "json",
  //           url:'<?php echo site_url(); ?>/Query/get_hotels',
  //           data:{'city':city},
  //           success:function(response){

  //           var i;
  //           $('#buildHotelName').append($("<option>Select Hotel Name</option>"));
  //             for (i = 0; i < response.length; ++i) {
  //                 $('#buildHotelName')
  //                     .append($("<option></option>")
  //                                 .attr("value", response[i].id)
  //                                 .text(response[i].hotelname));
  //             }
  //             // response ='';
  //           }

  //         })
  // });



  // $('#buildHotelName').on('change', function() {
  //     var hotel_id = $('#buildHotelName').val();
  //     $("#buildRoomType").empty();
  //     $.ajax({
  //           type:"POST",
  //           dataType: "json",
  //           url:'<?php echo site_url(); ?>/Query/get_room_type',
  //           data:{'hotel_id':hotel_id},
  //           success:function(response){
  //           var j;
  //           $('#buildRoomType').append($("<option>Select Room Type</option>"));
  //           for (j = 0; j < response.length; ++j) {
  //               // do something with `substr[i]`
  //               console.log(response[j]);
  //               $('#buildRoomType')
  //                   .html($("<option></option>")
  //                               .attr("value", response[j].roomtype)
  //                               .text(response[j].roomtype));

  //           }

  //           }      
  //         })
  // });
</script>
<script>
  console.clear()
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

    console.log(pax_adult + "|" + entry_type + "|" + visa_validity);
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
      console.log("🚩 ~ file: build_package.php ~ line 1924 ~ getOTBprice ~ response", response)

        $("#total_pax_otb_price_adult").val(response.per_pax_adult_amt);
        $("#total_pax_otb_price_child").val(response.per_pax_child_amt);
        $("#total_pax_otb_price_infant").val(response.per_pax_infant_amt);

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
      if(val != ''){
        pickup_internal_meal.push($.trim(val));
      }
    });

    var dropoff_internal_meal = [];
    $(".dropoff_internal_meal").each(function() {
      var val = $(this).val();
      if(val != ''){
      dropoff_internal_meal.push($.trim(val));
      }
    });

    var route_name_internal_meal = [];
    $(".route_name_internal_meal").each(function() {
      var val = $(this).val();
      if(val != ''){
      route_name_internal_meal.push($.trim(val));
      }
    });


    var pickup_return_meal = [];
    $(".pickup_return_meal").each(function() {
      var val = $(this).val();
      if(val != ''){
      pickup_return_meal.push($.trim(val));
      }
    });

    var dropoff_return_meal = [];
    $(".dropoff_return_meal").each(function() {
      var val = $(this).val();
      if(val != ''){
      dropoff_return_meal.push($.trim(val));
      }
    });

    var route_name_return_meal = [];
    $(".route_name_return_meal").each(function() {
      var val = $(this).val();
      if(val != ''){
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
      'resturants_name': resturants_name,
      'resturants_transfer': resturants_transfer,
      'no_of_meals': no_of_meals,
      'checkIn_date': checkIn_date,

      "internal_transfer_pickup" : pickup_internal_meal,
      "internal_transfer_dropoff" : dropoff_internal_meal,
      "internal_transfer_route" : route_name_internal_meal,

      "return_transfer_pickup" : pickup_return_meal,
      "return_transfer_dropoff" : dropoff_return_meal,
      "return_transfer_route" : route_name_return_meal,

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
        console.log(response);
        $("#total_pax_meal_adult").val(response.adult_prices);
        $("#total_pax_meal_child").val(response.child_prices);

        toastr.success("Meals Saved Successfully");


      }
    })


  }
    console.log("🚩 ~ file: build_package.php ~ line 2133 ~ mealcalculation ~ resturants_transfer", resturants_transfer)
    console.log("🚩 ~ file: build_package.php ~ line 2133 ~ mealcalculation ~ resturants_transfer", resturants_transfer)
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
        console.log(response);
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
        console.log("🚩 ~ file: build_excursion.php ~ line 998 ~ excursionTKTcalculations ~ response", response)

        $("#total_pax_TKT_adult").val(response.total_adultprice);
        $("#total_pax_TKT_child").val(response.total_childprice);
        $("#total_pax_TKT_infant").val(response.total_infantprice);
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


<script>
  function excursionPVTcalculation() {


    var hidden_total_pax = $('#hidden_total_pax').val();
    var excursion_type_PVT = $("#excursion_type_PVT").val();
    var excursion_name_PVT = $('select#excursion_name_PVT').val();
    var excursion_adult_PVT = $("#excursion_adult_PVT").val();
    var excursion_child_PVT = $("#excursion_child_PVT").val();
    var excursion_infant_PVT = $("#excursion_infant_PVT").val();

    // console.log(excursion_name_SIC);

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
        console.log(response);
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
        console.log(response);


        $("#total_pax_sic_adult").val(response.total_adultprice);
        $("#total_pax_sic_hild").val(response.total_childprice);
        $("#total_pax_sic_infant").val(response.total_infantprice);

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

    // var with_adult ='';
    // var with_child ='';
    // var without_bed ='';
    // if ($('#extra_with_adult').is(":checked"))
    // {
    //   with_adult = $('#extra_with_adult').val();
    // }
    // if ($('#extra_with_child').is(":checked"))
    // {
    //   with_child = $('#extra_with_child').val();
    // }
    // if ($('#extra_without_bed').is(":checked"))
    // {
    //   without_bed = $('#extra_without_bed').val();
    // }

    // // console.log(extra_with_adult);
    // var extra_with_adult = with_adult;
    // var extra_with_child = with_child;
    // var extra_without_bed = without_bed;
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

    var groupType = [];
    $(".get_room_group_type").each(function() {
      var bed = $(this).val();
      groupType.push($.trim(bed));

    });

    var sharing_types = [];
    $(".room_sharing_types").each(function() {
      var cat = $(this).val();
      sharing_types.push($.trim(cat));
    });

    let total_no_of_days = <?php echo $buildpackage->night ?>;

    if (noOfNights < total_no_of_days) {
      $('.noOfDaysAlertcls2').attr("style", "display:block;");
    } else {
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
        'query_type': 'package',

      }];


      console.log(data);

      $.ajax({
        type: "POST",
        url: "<?php echo base_url() ?>Query/getHotelCalculation",
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
          $('#hotel_rate_adult').val(response.total_pax_adult_rate);
          $('#hotel_rate_child').val(response.total_pax_child_rate);
          $('#hotel_rate_infant').val(response.total_pax_wo_rate);
          toastr.success("Hotel Details Saved Successfully");
        }
      });
    }


  }

  $('#transferSave').on('click', function() {

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
    console.log("🚩 ~ file: build_package.php ~ line 2424 ~ $ ~ data", data)


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
        console.log("🚩 ~ file: build_package.php ~ line 2440 ~ $ ~ response", response)
        toastr.success("Transfer Details Saved Successfully");
      }
    });
  });
</script>
<input type="hidden" id="hotel_rate_adult" name="hotel_rate_adult" value="0" />
<input type="hidden" id="hotel_rate_child" name="hotel_rate_child" value="0" />
<input type="hidden" id="hotel_rate_infant" name="hotel_rate_infant" value="0" />
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
        console.log(response);
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
  
  function mealsTransferTypeChange(row){
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
        $("#pickup_internal_meal"+row).html('<option value="">Pickup</option>');
        console.log(response.data.length);
        if (response.data.length > 0) {
          var options = ""
          for (var i = 0; i < response.data.length; i++) {
            console.log(response.data[i].start_city);
            options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
          }
        } else {
          var options = "<option value=''>No Data Found</option>"
        }
        $("#pickup_internal_meal"+row).append(options);

      }
    });
  }

  function mealsTransferTypeHide(row){
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
        console.log(response.data.length);
        if (response.data.length > 0) {
          var options = ""
          for (var i = 0; i < response.data.length; i++) {
            console.log(response.data[i].start_city);
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
        console.log(response.data.length);
        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          console.log(response.data[i].dest_city);
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
     if($('#mealTransTypeInt').is(":checked")) {
        document.getElementById('mealInternalTransfer').style.display = "";
      } else {
        document.getElementById('mealInternalTransfer').style.display = "none";
      }
      });

 $("#mealTransTypeRet").on("change", function() {
    if($('#mealTransTypeRet').is(":checked")) {
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
            console.log(response.data[i].start_city);
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
        console.log(response.data.length);

        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          console.log(response.data[i].dest_city);
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
  function mealsInterTransferShowHide(row){
      if($("#mealTransTypeInt"+row).is(":checked")) {
          document.getElementById('mealInternalTransfer'+row).style.display = "";
    
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
          $("#pickup_internal_meal"+row).html('<option value="">Pickup</option>');
          console.log(response.data.length);
          if (response.data.length > 0) {
            var options = ""
            for (var i = 0; i < response.data.length; i++) {
              console.log(response.data[i].start_city);
              options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
            }
          } else {
            var options = "<option value=''>No Data Found</option>"
          }
          $("#pickup_internal_meal"+row).append(options);

        }
      });

        } else {
          document.getElementById('mealInternalTransfer'+row).style.display = "none";
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
        console.log(response.data.length);
        if (response.data.length > 0) {
          var options = ""
          for (var i = 0; i < response.data.length; i++) {
            console.log(response.data[i].start_city);
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
        console.log(response.data.length);
        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          console.log(response.data[i].dest_city);
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
        console.log("🚩 ~ file: build_package.php ~ line 2857 ~ $ ~ response", response)
        $("#route_name_return_meal").val(response.route_name);
        // $("#price_internal").val(response.data);
        // var total_price = response.data * pax_internal;
        // $("#total_price_internal").val(total_price);
      }
    });
  });


  function mealsReturnTransferShowHide(row){
    if($("#mealTransTypeRet"+row).is(":checked")) {
        document.getElementById("mealReturnTransfer"+row).style.display = "";

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
          $("#pickup_return_meal"+row).html('<option value="">Pickup</option>');
          console.log(response.data.length);
          if (response.data.length > 0) {
            var options = ""
            for (var i = 0; i < response.data.length; i++) {
              console.log(response.data[i].start_city);
              options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
            }
          } else {
            var options = "<option value=''>No Data Found</option>"
          }
          $("#pickup_return_meal"+row).append(options);

        }
      });

      } else {
        document.getElementById("mealReturnTransfer"+row).style.display = "none";
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
        console.log(response.data.length);

        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          console.log(response.data[i].dest_city);
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
  })

  $("#trans_status").on("change", function() {
    $("#transdisplay").show();

  })
  $("#trans_status1").on("change", function() {
    $("#transdisplay").hide();
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
  })

  $("#visa_status").on("change", function() {
    // alert(this.value);
    $("#visadisplay").show();
    $("#visa_category_drop_down").val('30_days_tourist');

  })
  $("#visa_status1").on("change", function() {
    $("#visadisplay").hide();
  })

  $("#otb_status").on("change", function() {
    $("#otbdisplay").show();
  })
  $("#otb_status1").on("change", function() {
    $("#otbdisplay").hide();
  })

  $("#excursion_status").on("change", function() {
    // alert(this.value);
    $("#excursiondisplay").show();
  })
  $("#excursion_status1").on("change", function() {
    $("#excursiondisplay").hide();
  })

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
        console.log(response.data.length);

        //$('#bus_type').html("<option value='"+ data.type +"'>"+ data.type +"</option>");
        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          console.log(response.data[i].dest_city);
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
        console.log(response.data.length);

        //$('#bus_type').html("<option value='"+ data.type +"'>"+ data.type +"</option>");
        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          console.log(response.data[i].dest_city);
          options += '<option value="' + response.data[i].dest_city + '">' + response.data[i].dest_city + '</option>';

        }


        $("#dropoffpoint").append(options);
        // $("#ProposalPage").html(response);
        // $("#FullPage").hide();
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
      console.log(response.data.length);
      if (response.data.length > 0) {
        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          console.log(response.data[i].start_city);
          options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
        }
      } else {
        var options = "<option value=''>No Data Found</option>"
      }
      $("#pickupinternal").append(options);
    }
  });


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
          console.log(response.data[i].start_city);
          options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
        }
      } else {
        var options = "<option value=''>No Data Found</option>"
      }
      $("#pickuppoint").append(options);
    }
  });

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
        console.log(response.data.length);

        var options = ""
        for (var i = 0; i < response.data.length; i++) {
          console.log(response.data[i].dest_city);
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
            console.log(response.data[i].start_city);
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
            console.log(response.data[i].start_city);
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

        //  response.row_data.start_city1
        //  response.row_data.dest_city1
        //  response.row_data.route_name1

        //var pax_internal=$("#pax_internal").val();
        // alert(pax_internal);
        // alert(response.data[0].seat_capacity);
        //  if(parseInt(pax_internal)<=parseInt(response.data[0].seat_capacity)){

        //     var perperson=response.data[0].cost/response.data[0].seat_capacity;
        //     $("#total_price_internal").val(perperson);
        //     // alert(perperson);
        //  }else{
        //     var extraperson=pax_internal-response.data[0].seat_capacity;

        //     if(extraperson<=parseInt(response.data[0].seat_capacity)){

        //     }
        //     // alert(extraperson);
        //     // alert(response.data[0].cost);
        //     var perperson=response.data[0].cost/extraperson;

        //     // alert(perperson);
        //     $("#total_price_internal").val(perperson);

        //  }



        // console.log(response.data[0].route_name); 
      }


    });
  });


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


<script type="text/javascript">
  //        $("#ViewProposal").click(function() {

  //         var q_id = $("#QueryId").val();          
  //         var currencyOption = $("#currencyOption").val();
  //         var perpax_adult = $("#perpax_adult").val();
  //         var perpax_childs = $("#perpax_childs").val();
  //         var perpax_infants =$("#perpax_infants").val();

  //         var hotelName = $("#buildHotelName").val();
  //         var noOfNights = $("#buildNoNights").val();
  //         var roomType = $("#buildRoomType").val();

  //         var excursion_name_SIC = $("#excursion_name_SIC").val();
  //         var excursion_name_PVT = $("#excursion_name_PVT").val();
  //         var buildPackageInclusions = $("#buildPackageInclusions").val();
  //         var buildPackageExclusions = $("#buildPackageExclusions").val();
  //         var buildPackageConditions = $("#buildPackageConditions").val();
  //         var buildPackageCancellations = $("#buildPackageCancellations").val();
  //         var buildPackageRefund = $("#buildPackageRefund").val();

  //         var pickupinternal = $("#pickupinternal").val();
  //         var dropoffinternal = $("#dropoffinternal").val();
  //         var buildTravelFromdateCab = $("#buildTravelFromdateCab").val();

  //         var buildTravelFromdatePPT = $("#buildTravelFromdatePPT").val();
  //         var pickuppoint = $("#pickuppoint").val();
  //         var dropoffpoint = $("#dropoffpoint").val();
  // //  console.log(q_id + perpax_adult + perpax_childs +  perpax_infants);


  //         $.ajax({
  //         type:"POST",
  //         dataType: "json",
  //         url:'<?php echo site_url(); ?>/query/CreateProposal',
  //         data:{'q_id':q_id,'currencyOption':currencyOption,'perpax_adult':perpax_adult,
  //           'perpax_childs':perpax_childs,'perpax_infants':perpax_infants,
  //           'hotelName':hotelName,'noOfNights':noOfNights,'roomType':roomType,'excursion_name_SIC':excursion_name_SIC,
  //         'excursion_name_PVT': excursion_name_PVT,'buildPackageInclusions':buildPackageInclusions,'buildPackageExclusions':buildPackageExclusions,
  //       'buildPackageConditions':buildPackageConditions,'buildPackageCancellations':buildPackageCancellations,'buildPackageRefund':buildPackageRefund,
  //     'buildTravelFromdateCab':buildTravelFromdateCab,'dropoffinternal':dropoffinternal,'pickupinternal':pickupinternal,
  //   'buildTravelFromdatePPT':buildTravelFromdatePPT,'pickuppoint':pickuppoint,'dropoffpoint':dropoffpoint},
  //         success:function(response){

  //           $("#ProposalPage").html(response);
  //           $("#FullPage").hide();
  //         }


  //       });
  //     });

  // $("#ViewProposal").click(function() {


  //   // var CityName = $("#buildHotelCity").val();
  //   // var travelDay = $("#buildCheckIn").val();
  //   // var Nodays = $("#buildNoNights").val();
  //   // var hotelName = $("#buildHotelName").val();
  //   // var roomType = $("#buildRoomType").val();
  //   // var mealType = $("#buildMealType").val();
  //   // var grandTotal = $("#TotalSales").val();
  //   // var q_id = $("#QueryId").val();

  //   // var buildPackageInclusions = $("#buildPackageInclusions").val();
  //   // var buildPackageExclusions = $("#buildPackageExclusions").val();
  //   // var buildPackageConditions = $("#buildPackageConditions").val();
  //   // var buildPackageCancellations = $("#buildPackageCancellations").val();
  //   // var buildPackageInformations = $("#buildPackageInformations").val();
  //   // var buildPackageBookingTerms = $("#buildPackageBookingTerms").val();
  //   // var buildPackageWhyUse = $("#buildPackageWhyUse").val();
  //   // var buildPackageRefund = $("#buildPackageRefund").val();

  //   // $.ajax({
  //   //   type:"POST",
  //   //   url:'<?php echo site_url(); ?>/query/CreateProposal',
  //   //   data:{'q_id':q_id,'CityName':CityName,'travelDay':travelDay,'Nodays':Nodays,'hotelName':hotelName,'roomType':roomType,'mealType':mealType,'grandTotal':grandTotal,'buildPackageInclusions':buildPackageInclusions,'buildPackageExclusions':buildPackageExclusions,'buildPackageConditions':buildPackageConditions,'buildPackageCancellations':buildPackageCancellations,'buildPackageInformations':buildPackageInformations,'buildPackageBookingTerms':buildPackageBookingTerms,'buildPackageWhyUse':buildPackageWhyUse,'buildPackageRefund':buildPackageRefund},
  //   //   success:function(response){

  //   //     $("#ProposalPage").html(response);
  //   //     $("#FullPage").hide();
  //   //   }


  //   // });
  // });
</script>
<script src="<?php echo base_url(); ?>public/js/validate.js"></script>
<script>
  $(document).ready(function() {
    // var temp = $('#hotel_name_backup').val();

    // if(temp.length != 0 ){
    //   alert("hi");
    //        $("#buildHotelName > [value=" + temp + "]").attr("selected", "true");
    // }
    // if($("#TrasportTypeCab").is(':checked'))
    //         {
    // if(!$('#TrasportTypeCab').is(':checked')) {
    //   alert('not')
    //   }
    // }

    // var type_transfer = $('input[class="transfer_with_or_without"]:checked').val();
    // var type_resturant = $('.rest_type').val();
    // // console.log(type_transfer);
    // // console.log(type_resturant);
    //   $.ajax({ 
    //     type: "POST",
    //     url: "<?php echo base_url() ?>Query/get_hotel_name",
    //     data : {type_transfer : type_transfer, type_resturant : type_resturant},
    //     cache: false,
    //     success: function(response)
    //     {
    //         console.log(response);

    //     }
    // });




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


  // $('.bnights').on("change", function () {
  //   var sum = 0;
  //   // var bet_sum = 0;

  //     $('.bnights').each(function () {
  //         sum += Number($(this).val());
  //     });

  //     $('#allocated_days').val(sum);


  // });




  // var faqs_row = 0;  

  /*function addrows(){
                          var cnt = $('#rows_count').val();

                          setTimeout(function(){ $('.noOfDaysAlertcls').attr("style","display:none;") }, 2000);
                          var initaldays = parseInt($('#buildNoNights').val());
                          // alert(initaldays);

                          if(isNaN(initaldays) || initaldays == ""){
                            $('#buildNoNights').attr('style',"border-color:red");
                          }else{
                            $('#buildNoNights').removeAttr('style',"border-color:red");

                          
                          var totalNoOfDays = <?php echo $buildpackage->night ?> ;
                          var allocated_days = parseInt($('#allocated_days').val());
                          // var allocated_days = parseInt(allocated_day); 
                          alert(allocated_days);
                          var d = "<?php echo $view->specificDate; ?>";                         
                          var f = moment(d).add(allocated_days, 'days');

                         if( totalNoOfDays > allocated_days){
                          $('#rows_count').val(parseInt(cnt) + parseInt(1));
                          faqs_row=parseInt(cnt) + parseInt(1);

                          $('#buildNoNights').attr('disabled',true);
                          var template = '';
                          var city = '<td><select class="form-control get-hotel" name="buildHotelCity'+faqs_row+'" id="buildHotelCity'+faqs_row+'" onchange="get_hotel_name(this.id,'+faqs_row+');"><option>Select City</option><option value="Dubai">Dubai</option><option value="AbuDhabi">Abu Dhabi</option><option value="Sharjah">Sharjah</option><option value="Ajman">Ajman</option><option value="Sir Baniyas">Sir Baniyas</option><option value="Umm Al-Quwain">Umm Al-Quwain</option><option value="Fujairah">Fujairah</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Al Ain">Al Ain</option></select></td>';
                          var bnight = '<td><select class="form-control bnights" id="buildNoNights'+faqs_row+'"  name="buildNoNights'+faqs_row+'" required>';
                                          for (let i = 1; i <= (totalNoOfDays-allocated_days); i++) {
                                            bnight += '<option>'+i+'</option>';
                                          }
                              bnight += '</select></td>';
                          var room ='<td><select class="form-control get-hotel-room" name="buildRoomType'+faqs_row+'" id="buildRoomType'+faqs_row+'" required></select></td>';
                          template += '<tr id="faqs-row' + faqs_row + '">';
                          // template += '<td><input class="form-control" type="text" value="" name="buildHotelCity'+faqs_row+'" id="buildHotelCity'+faqs_row+'"></td>';
                          template += city;
                          template += '<td><input class="form-control" type="date" value="'+f.format("YYYY-MM-DD")+'" name="buildCheckIn'+faqs_row+'" id="buildCheckIn'+faqs_row+'" disabled></td>';
                          template += bnight;
                          template += ' <td> <div> <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" name="Category'+faqs_row+'" onchange="get_hotel_name(this.id,'+faqs_row+');"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> </select> </div> </td>';
                          // template += '<td><input class="form-control" type="text" placeholder="Room Type" name="buildRoomType'+faqs_row+'" id="buildRoomType'+faqs_row+'" required=""></td> ';
                          template +=  room;
                          template += '<td><button type="button" class="btn btn-danger btn-xs cls-btn"  id="del_btn'+faqs_row+'"  onClick="return  removeHotel(this);"><i class="fa fa-trash"></i></button> </td>';
                          template += '</tr>';

                          $("#addrows").append(template);
                          $('#allocated_days').val(parseInt($('#buildNoNights'+faqs_row).val()) + parseInt($('#allocated_days').val()) );
                          
                          $("[type='number']").keypress(function (evt) {
                              evt.preventDefault();
                          });

                          if($("#faqs-row"+faqs_row).length == 0) {
                            $('#buildNoNights').attr('disabled',false);
                          }
                         

                        }else{
                          $('#noOfDaysAlert').html(totalNoOfDays);
                          $('.noOfDaysAlertcls').attr("style","display:block;");
                        }
                         
                       

                          // var allocated_days = $('#allocated_days').val();
                          // if( ($('#allocated_days').val() == "")) allocated_days = parseInt($('#buildNoNights').val());
                          // // alert(allocated_days);
                          // var d = "<?php echo $view->specificDate; ?>";                         
                          // var totalNoOfDays = <?php echo $buildpackage->night ?> ;
                          // var f = moment(d).add(allocated_days, 'days');
                          // if( allocated_days < totalNoOfDays ){
                          //   // var add=' <tr  id="faqs-row' + faqs_row + '"> <td><input class="form-control" type="text" value="<?php echo $view->goingTo; ?>" name="buildHotelCity" id="buildHotelCity"></td> <td><input class="form-control" type="date" value="<?php echo $view->specificDate; ?>" name="buildCheckIn" id="buildCheckIn"></td> <td><input class="form-control" type="text" value="1" name="buildNoNights" id="buildNoNights'+ faqs_row +'"></td> <td> <div> <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" name="Category"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> </select> </div> </td> <td><input class="form-control" type="text" placeholder="Hotel Name" name="buildHotelName" id="buildHotelName" required=""></td> <td><input class="form-control" type="text" placeholder="Room Type" name="buildRoomType" id="buildRoomType" required=""></td> <td><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i></button> </td> </tr>';
                          //   // $('#addrows').append(add);  $(\'buildNoNights'+faqs_row+ '\').val();
                          //   var add=' <tr  id="faqs-row' + faqs_row + '">  <td><input class="form-control" type="date" value="'+f.format("YYYY-MM-DD")+'" name="buildCheckIn'+faqs_row+'" id="buildCheckIn'+faqs_row+'" disabled></td><td><input class="form-control" type="text" value="2" name="buildNoNights'+faqs_row+'" id="buildNoNights'+ faqs_row +'"></td><td><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove()"><i class="fa fa-trash"></i></button> </td> </tr>';
                          //   $('#addrows').append(add);
                          //   var Selectedvalue =  $( "#buildNoNights"+faqs_row).val(); 
                          //   $('#allocated_days').val(parseInt(allocated_days) + parseInt(Selectedvalue) );
                          //   faqs_row++;   
                          // }else{
                          //   alert("Cannot Add more than "+totalNoOfDays+" days");
                          // }


                        }
                      }
                      
                      removeHotel =function  removeHotel(data){
                            // console.log(data.closest('tr'));
                            var allocateddays = parseInt($('#allocated_days').val());                           
                            var tr = data.closest('tr');
                            // var lessdays = tr.('select.bnights').val();
                            // var lessdays =  data.closest('.bnights');
                            // console.log(lessdays);
                            var deleted_days = (Number(allocateddays) - Number(lessdays));
                            $('#allocated_days').val(deleted_days);
                            data.closest('tr').remove();
                            
                        } */

  function addrows() {
    var cnt = $('#rows_count').val();
    var allocated_days = 0;

    $('.bnights').each(function() {
      allocated_days += Number($(this).val());
    });
    setTimeout(function() {
      $('.noOfDaysAlertcls').attr("style", "display:none;")
    }, 2000);
    var initaldays = parseInt($('#buildNoNights').val());

    if (isNaN(initaldays) || initaldays == "") {
      $('#buildNoNights').attr('style', "border-color:red");
    } else {
      $('#buildNoNights').removeAttr('style', "border-color:red");


      var totalNoOfDays = <?php echo $buildpackage->night ?>;
      var total_rooms = <?php echo $view->room ?>;
      var d = "<?php echo $view->specificDate; ?>";
      var f = moment(d).add(allocated_days, 'days');
      $('.bnights').attr('readonly', true);
      // if (allocated_days < totalNoOfDays) {
      if (allocated_days) {
        $('#rows_count').val(parseInt(cnt) + parseInt(1));
        faqs_row = parseInt(cnt) + parseInt(1);
        var template = '';
        var no_of_night = '';
        for (let i = 1; i <= (totalNoOfDays); i++) {
          no_of_night += '<option value="' + i + '">' + i + '</option>';
        }
        for(let room_no=1; room_no <= total_rooms ; room_no++){
        // var city = '<td>Room '+room_no+'</td><td><select class="form-control get-hotel get_all_city" name="buildHotelCity[]" id="buildHotelCity' + faqs_row + room_no + '" onchange="get_hotel_name(this.id,' + faqs_row + room_no + ');"><option value="Dubai">Dubai</option><option value="AbuDhabi">Abu Dhabi</option><option value="Sharjah">Sharjah</option><option value="Ajman">Ajman</option><option value="Sir Baniyas">Sir Baniyas</option><option value="Umm Al-Quwain">Umm Al-Quwain</option><option value="Fujairah">Fujairah</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Al Ain">Al Ain</option></select></td>';
        // var bnight = '<td><select class="form-control bnights get_no_nights" id="buildNoNights' + faqs_row + room_no + '"  name="buildNoNightss[]" required="">';
        // bnight += '<option value="0">Select</option>';
        // for (let i = 1; i <= (totalNoOfDays); i++) {
        //   bnight += '<option value="' + i + '">' + i + '</option>';
        // }
        // bnight += '</select></td>';
        // var room = '<td><select class="form-control get-hotel-room get_buildRoomType" name="buildRoomType[]" id="buildRoomType' + faqs_row + room_no + '" required></select></td>';
        // template += '<tr id="faqs-row' + faqs_row + room_no + '">';
        // template += city;
        // template += '<td><input class="form-control get_CheckIn" type="date" value="' + f.format("YYYY-MM-DD") + '" name="buildCheckIns[]" id="buildCheckIn' + faqs_row + room_no + '" readonly></td>';
        // template += bnight;
        // template += ' <td> <div> <select data-mdl-for="sample2" class="form-control get_category" value="" tabIndex="-1" id="Category' + faqs_row + room_no + '" name="Category[]" onchange="get_hotel_name(this.id,' + faqs_row + room_no + ');"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> </select> </div> </td>';
        // template += '<td><select class="form-control get_buildHotelName" id="buildHotelName' + faqs_row + room_no + '"  required="" name="buildHotelName[]"  onchange="get_route_name(this.id,' + faqs_row + room_no + ');" required><option>Select</option></select></td>';
        // template += room;

        // template += '<td><select class="form-control get_room_group_type" id="buildRoomGroupType' + faqs_row + room_no + '" name="buildRoomGroupType[]" ><option value="FIT" >FIT</option><option value="GIT" >GIT</option></select></td>';
        // template += '<td><select class="form-control get_bed_type" id="buildBedType' + faqs_row + room_no + '"  required="" name="buildBedType[]" required><option value="Double" >Double</option><option value = "Single">Single</option></select></td>';


        // template += '<td><select class="form-control get_room_types" id="room_types' + faqs_row + room_no + '" name="build_room_types[]" required><option value ="BB">BB</option><option value ="Room Only">Room Only</option><option value="HB" >HB</option><option value="FB" >FB</option></select></td>';
        // template += '<td><select class="form-control room_sharing_types" id="room_sharing_types' + faqs_row + room_no + '" name="room_sharing_types[]" ><option value="double_sharing" >Double Sharing</option><option value ="triple_sharing">Triple Sharing</option> </select></td>';
        // template += '<td><div class=""><p><input type="checkbox" id="extra_with_adult' + faqs_row + room_no + '" <?php echo $buildpackage->adult > 2 ? 'checked' : ''; ?> name="extra_check[]" value="extra_with_adult" class="check-extra extra_with_adult"> Ex. adult</p><p><input type="checkbox" <?php echo $buildpackage->child > 0 ? 'checked' : ''; ?> id="extra_with_child' + faqs_row + room_no + '" name="extra_check[]" value="extra_with_child" class="check-extra extra_with_child"> CWB</p><p><input type="checkbox" <?php echo $buildpackage->infant > 0 ? 'checked' : ''; ?> id="extra_without_bed' + faqs_row + room_no + '" name="extra_check[]" value="extra_without_bed" class="check-extra extra_without_bed"> CNB</p></div></td>';

        // template += '<td><button type="button" class="btn btn-danger btn-xs cls-btn"  id="del_btn' + faqs_row + room_no + '"  onClick="return  removeHotel(this);"><i class="fa fa-trash"></i></button> </td>';
        // template += '</tr>';
        // }

        
template += `
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
<tbody>
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
   <td><input class="form-control get_CheckIn" type="date" value="${f.format("YYYY-MM-DD")}" name="buildCheckIns[]" id="buildCheckIn${faqs_row}${room_no}" readonly></td>
   <td>
      <select class="form-control bnights get_no_nights" id="buildNoNights${faqs_row}${room_no}"  name="buildNoNightss[]" required="">
        ${no_of_night}
      </select>
   </td>
   <td>
      <div>
         <select data-mdl-for="sample2" class="form-control get_category" value="" tabIndex="-1" id="Category${faqs_row}${room_no}" name="Category[]" onchange="get_hotel_name(this.id,${faqs_row}${room_no});">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
         </select>
      </div>
   </td>
   <td>
      <select class="form-control get_buildHotelName" id="buildHotelName${faqs_row}${room_no}"  required="" name="buildHotelName[]"  onchange="get_route_name(this.id,${faqs_row}${room_no});" required>
         <option>Select</option>
      </select>
   </td>
   <td><select class="form-control get-hotel-room get_buildRoomType" name="buildRoomType[]" id="buildRoomType${faqs_row}${room_no}" required></select></td>
   </tr>

   <thead>
    <tr>
    <th></th>
    <th>Group Type </th>
    <th>Bed Type </th>
    <th>Meal Type </th>
    <th>Sharing Type </th>
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
         <option value="Double" >Double</option>
         <option value = "Single">Single</option>
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
      <select class="form-control room_sharing_types" id="room_sharing_types${faqs_row}${room_no}" name="room_sharing_types[]" >
         <option value="double_sharing" >Double Sharing</option>
         <option value="single_sharing">Single Sharing</option>
         <option value ="triple_sharing">Triple Sharing</option>
      </select>
   </td>
   <td colspan="2">
      <div class="d-flex justify-content-around">
         <p><input type="checkbox" id="extra_with_adult${faqs_row}${room_no}" <?php echo $buildpackage->adult > 2 ? 'checked' : ''; ?> name="extra_check[]" value="extra_with_adult" class="check-extra extra_with_adult"> Ex. adult</p>
         <p><input type="checkbox" <?php echo $buildpackage->child > 0 ? 'checked' : ''; ?> id="extra_with_child${faqs_row}${room_no}" name="extra_check[]" value="extra_with_child" class="check-extra extra_with_child"> CWB</p>
         <p><input type="checkbox" <?php echo $buildpackage->infant > 0 ? 'checked' : ''; ?> id="extra_without_bed${faqs_row}${room_no}" name="extra_check[]" value="extra_without_bed" class="check-extra extra_without_bed"> CNB</p>
      </div>
   </td>
   <td><button type="button" class="btn btn-danger btn-xs cls-btn"  id="del_btn${faqs_row}${room_no}"  onClick="return  removeHotel2(this);"><i class="fa fa-trash"></i></button> </td>
</tr>

</tbody>` }

        $("#addrows").append(template);
        $('#allocated_days').val(parseInt($('#buildNoNights' + faqs_row + room_no).val()) + parseInt(allocated_days));

        $("[type='number']").keypress(function(evt) {
          evt.preventDefault();
        });

      } else {
        $('#noOfDaysAlert').html(totalNoOfDays);
        $('.noOfDaysAlertcls').attr("style", "display:block;");
      }



      //     // var allocated_days = $('#allocated_days').val();
      //     // if( ($('#allocated_days').val() == "")) allocated_days = parseInt($('#buildNoNights').val());
      //     // // alert(allocated_days);
      //     // var d = "<?php //echo $view->specificDate;
                          ?>";                         
      //     // var totalNoOfDays = <?php //echo $buildpackage->night
                                    ?> ;
      //     // var f = moment(d).add(allocated_days, 'days');
      //     // if( allocated_days < totalNoOfDays ){
      //     //   // var add=' <tr  id="faqs-row' + faqs_row + '"> <td><input class="form-control" type="text" value="<?php echo $view->goingTo; ?>" name="buildHotelCity" id="buildHotelCity"></td> <td><input class="form-control" type="date" value="<?php echo $view->specificDate; ?>" name="buildCheckIn" id="buildCheckIn"></td> <td><input class="form-control" type="text" value="1" name="buildNoNights" id="buildNoNights'+ faqs_row +'"></td> <td> <div> <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" name="Category"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> </select> </div> </td> <td><input class="form-control" type="text" placeholder="Hotel Name" name="buildHotelName" id="buildHotelName" required=""></td> <td><input class="form-control" type="text" placeholder="Room Type" name="buildRoomType" id="buildRoomType" required=""></td> <td><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i></button> </td> </tr>';
      //     //   // $('#addrows').append(add);  $(\'buildNoNights'+faqs_row+ '\').val();
      //     //   var add=' <tr  id="faqs-row' + faqs_row + '">  <td><input class="form-control" type="date" value="'+f.format("YYYY-MM-DD")+'" name="buildCheckIn'+faqs_row+'" id="buildCheckIn'+faqs_row+'" disabled></td><td><input class="form-control" type="text" value="2" name="buildNoNights'+faqs_row+'" id="buildNoNights'+ faqs_row +'"></td><td><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove()"><i class="fa fa-trash"></i></button> </td> </tr>';
      //     //   $('#addrows').append(add);
      //     //   var Selectedvalue =  $( "#buildNoNights"+faqs_row).val(); 
      //     //   $('#allocated_days').val(parseInt(allocated_days) + parseInt(Selectedvalue) );
      //     //   faqs_row++;   
      //     // }else{
      //     //   alert("Cannot Add more than "+totalNoOfDays+" days");
      //     // }


    }
  }

  removeHotel = function removeHotel(data) {

    // var rowCount = $('#addrows tbody tr').length;
    // if(rowCount != 0){
    //   $('#buildNoNights').attr('disabled',true);
    // }else{
    //   $('#buildNoNights').attr('disabled',true);
    // }


    // console.log(data.closest('tr'));
    var allocateddays = parseInt($('#allocated_days').val());

    var tr = data.closest('tr');

    // tr.($('#buildNoNights')).attr('disabled',false);
    // // console.log(tr.($('td:eq(3)')));
    // var lessdays = tr.('select.bnights').val();
    // // // var lessdays =  data.closest('.bnights');
    // alert(lessdays);
    // // var deleted_days = (Number(allocateddays) - Number(lessdays));
    // // $('#allocated_days').val(deleted_days);
    data.closest('tr').remove();

    if ($("#faqs-row0").length == 0) {
      $('#buildNoNights').attr('readonly', false);
    }


  }

  removeHotel2 = function  removeHotel2(data){
                     var allocateddays = parseInt($('#allocated_days').val());   
                     var tr = data.closest('tbody');
                      data.closest('tbody').remove();
                   if($("#faqs-row0").length == 0) {
                     $('#buildNoNights').attr('readonly', false);
                   }
                      
                 }

</script>
</script>


<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
  CKEDITOR.replace('buildPackageInclusions');
  CKEDITOR.replace('buildPackageExclusions');
  CKEDITOR.replace('buildPackageConditions');
  CKEDITOR.replace('buildPackageCancellations');
  CKEDITOR.replace('buildPackageRefund');
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
</style>