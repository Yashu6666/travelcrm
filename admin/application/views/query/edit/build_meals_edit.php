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

      <!-- <div class="page-bar ">
   <button type="button" id="del_query" onclick="delQuery()" class="new_btn px-5 float-right">Cancel</button>
   </div> -->

      <form id="proposal-form" action="<?php echo site_url(); ?>query/CreateProposalMeals" method="post">
        <input type="hidden" id="rows_count" name="rows_count" value="0" />
        <input type="hidden" id="totalprice_meals" name="totalprice_meals" value="0" />
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card-box ">
              <div class=" d-flex justify-content-center align-itom-center">

                <table class="table table-bordered mt-5">
                  <tbody>
                    <tr>
                      <th scope="row"><b>Company Name</b> </th>
                      <td><?php echo $view->b2bcompanyName; ?></td>
                      <th><b>Enquiry Id</b></th>
                      <td><?php echo $view->query_id; ?></td>
                      <th><b>Enquiry For</b></th>
                      <td><b>Meals</b></td>
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
                      <th colspan="2"><b>Child: </b><?php echo $buildpackage->child; ?></th>
                      <!-- <th> <b>Infant :</b> <?php echo $buildpackage->infant; ?></th> -->

                    </tr>
                  </tbody>
                </table>


              </div>
              <div class="mt-5">

                <div>


                  <div class="card-body ">

                    <div class="mt-5">


                      <div class="card-head card-head-new">
                        <p style="margin-top:20px">Meal

                      </div>
                      <div class="row mt-4 mr-3 ml-3 mb-3 ">
                        <div class="row mt-4 mr-3 ml-3 mb-3 " id="mealsdisplay">

                          <div id="addrowss">
                          <?php foreach(explode(",",$meal_query[0]->transfer_type) as $key => $val) : ?>
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
                                  <tr id="myTableRow<?php echo $key ?>">

                                    <td>
                                      <input <?php echo explode(",",$meal_query[0]->transfer_type)[$key] == "with_transfer" ? "checked" : "" ?> type="radio" class="transfer_with_or_without" id="with_transfer<?php echo $key ?>" name="transfer_with_or_without<?php echo $key ?>[]" value="with_transfer" onclick="get_resturant_name('with_transfer<?php echo $key ?>','');" autocompleted /> With Transfer<br />
                                      <input <?php echo explode(",",$meal_query[0]->transfer_type)[$key] == "without_transfer" ? "checked" : "" ?> type="radio" class="transfer_with_or_without" id="without_transfer<?php echo $key ?>" name="transfer_with_or_without<?php echo $key ?>[]" value="without_transfer" onclick="get_resturant_name('without_transfer<?php echo $key ?>','');" autocompleted/> Without Transfer
                                    </td>

                                    <td><input class="form-control checkIn_date" type="date" value="<?php echo $view->specificDate; ?>" min="<?php echo $view->specificDate; ?>" max="<?php echo date('Y-m-d', strtotime($view->specificDate . ' + ' . (($buildpackage->night) - (1)) . ' days')); ?>" name="buildCheckIn[]" id="buildCheckIn<?php echo $key ?>"></td>


                                    <td>
                                      <div>
                                        <select data-mdl-for="sample2" class="form-control rest_type" value="" tabIndex="-1" id="res_type<?php echo $key ?>" name="res_type[]" onchange="get_resturant_name('res_type<?php echo $key ?>','');">
                                        <option <?php echo explode(",",$meal_query[0]->resturant_type)[$key] == "Standard" ? "selected" : "" ?> value="Standard">Standard</option>
                                        <option <?php echo explode(",",$meal_query[0]->resturant_type)[$key] == "Premium" ? "selected" : "" ?> value="Premium">Premium</option>
                                        </select>

                                      </div>
                                    </td>
                                    <td>
                                      <select data-mdl-for="sample2" class="form-control res_name" value="" tabIndex="-1" name="res_name[]" id="res_name<?php echo $key ?>">
                                      <option value="<?php echo explode(",",$meal_query[0]->resturant_name)[$key]?>" ><?php echo explode(",",$meal_query[0]->resturant_name)[$key]?></option>
                                      </select>
                                      <!-- <input class="form-control " type="text" value="" name="res_name[]" id="res_name"></td> -->
                                    <td>
                                      <div>
                                        <select data-mdl-for="sample2" class="form-control meal" value="" tabIndex="-1" id="meal_cal<?php echo $key ?>" name="Meal[]">
                                        <option <?php echo explode(",",$meal_query[0]->meal)[$key] == "Dinner" ? "selected" : "" ?>  value="Dinner">Dinner</option>
                                        <option <?php echo explode(",",$meal_query[0]->meal)[$key] == "Lunch" ? "selected" : "" ?> value="Lunch">Lunch</option>
                                        </select>
                                      </div>
                                    </td>
                                    <td>
                                      <div>
                                        <select data-mdl-for="sample2" class="form-control meal_type" value="" tabIndex="-1" id="meal_type_cal<?php echo $key ?>" name="Meal_Type[]">
                                        <option <?php echo explode(",",$meal_query[0]->meal_type)[$key] == "Veg" ? "selected" : "" ?> value="Veg">Veg</option>
                                        <option <?php echo explode(",",$meal_query[0]->meal_type)[$key] == "Non-Veg" ? "selected" : "" ?> value="Non-Veg">Non-Veg</option>
                                        <option <?php echo explode(",",$meal_query[0]->meal_type)[$key] == "Jain" ? "selected" : "" ?> value="Jain">Jain</option>
                                        </select>
                                      </div>
                                    </td>
                                    <td><input type="number" min="1" id="no_of_meals<?php echo $key ?>" value="<?php echo explode(",",$meal_query[0]->no_of_meals)[$key]?>" class="form-control  no_of_meals" name="no_of_meals[]">



                                    <td><input type="text" disabled value="<?php echo $view->Packagetravelers; ?>" placeholder="0" id="adult_meal_cal<?php echo $key ?>" class="form-control check-adult meal_adult" name="adult[]">
                                    </td>
                                    <td><input type="text" disabled value="<?php echo $buildpackage->child; ?>" placeholder="0" id="child_meal_cal<?php echo $key ?>" class="form-control check-child meal_child" name="child[]" <?php if ($buildpackage->child == 0) echo "disabled"; ?>>
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
                              <?php if(explode(",",$meal_query[0]->transfer_type)[$key] == "with_transfer") : ?>
                              <div class="">
                                <div class="" id="mealTransferMain">
                                  <div class="">
                                    <label for="" class="transport-lable"><b>Transport Type</b>:</label>
                                    <input type="checkbox" name="mealTransTypeInt" id="mealTransTypeInt" <?php echo !empty($internal_query) ? "checked" : "" ?> class="mr-3 ml-2 " value="Internal Transfer"><span class="transport-lable-ckeck">Internal City/Hotel Transfer</span><span class="checkmark"></span>
                                    <input type="checkbox" name="mealTransTypeRet" id="mealTransTypeRet" <?php echo !empty($return_query) ? "checked" : "" ?> class="mr-3 ml-2 " value="Point to Point Transfer"><span class="transport-lable-ckeck">Airport Return Transfer</span><span class="checkmark"></span>
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
                                        <?php if (!empty($internal_query)) : ?>
                                          <?php foreach (explode(",", $internal_query[0]->transfer_date) as $key => $value) : ?>
                                            <tr id="mealInternalTransfer">
                                              <th>Internal City/Hotel Transfer</th>
                                              <td><input class="form-control" type="number" id="pax_internal_meal" placeholder="Pax" value="<?php echo $view->Packagetravelers + $buildpackage->child; ?>" name="buildTravelFromCityCab[]" disabled></td>
                                              <td><input class="form-control internal_transfer_date" type="date" value="<?php echo $view->specificDate; ?>" id="internal_meal_date" name="internal_meal_date[]"></td>
                                              <td>
                                                <select id="pickup_internal_meal" required name="pickup_internal_meal[]" class="pickup_internal_meal js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                                  <option value="<?php echo (explode(",", $internal_query[0]->pickup)[$key]); ?>"><?php echo (explode(",", $internal_query[0]->pickup)[$key]); ?></option>
                                                </select>
                                              </td>
                                              <td>
                                                <select id="dropoff_internal_meal" name="dropoff_internal_meal[]" class="dropoff_internal_meal js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                                  <option value="<?php echo (explode(",", $internal_query[0]->dropoff)[$key]); ?>"><?php echo (explode(",", $internal_query[0]->dropoff)[$key]); ?></option>
                                                </select>
                                              </td>
                                              <td>
                                                <input id="route_name_internal_meal" value="<?php echo (explode(",", $internal_query[0]->transfer_route)[$key]); ?>" name="route_name_internal_meal[]" class="form-control route_name_internal_meal" type="text" placeholder="Route Name">
                                              </td>
                                            </tr>
                                          <?php endforeach; ?>
                                        <?php endif ?>

                                        <?php if (!empty($return_query)) : ?>
                                          <?php foreach (explode(",", $return_query[0]->transfer_date) as $key => $value) : ?>
                                            <tr id="mealReturnTransfer<?php echo $key  ?>">
                                              <th>Airport Return Transfer</th>
                                              <td><input class="form-control" id="pax_return_meal" type="text" placeholder="Pax" value="<?php echo $view->Packagetravelers + $buildpackage->child; ?>" name="pax_return_meal[]" disabled></td>
                                              <td><input class="form-control return_transfer_date" id="return_meal_date" type="date" value="<?php echo $view->specificDate; ?>" name="return_meal_date[]"></td>
                                              <td>
                                                <select id="pickup_return_meal" required name="pickup_return_meal[]" class="pickup_return_meal js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                                  <option value="<?php echo (explode(",", $return_query[0]->pickup)[$key]); ?>"><?php echo (explode(",", $return_query[0]->pickup)[$key]); ?></option>
                                                </select>
                                              </td>
                                              <td>
                                                <select id="dropoff_return_meal" name="dropoff_return_meal[]" class="dropoff_return_meal js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                                  <option value="<?php echo (explode(",", $return_query[0]->dropoff)[$key]); ?>"><?php echo (explode(",", $return_query[0]->dropoff)[$key]); ?></option>
                                                </select>
                                              </td>
                                              <td><input id="route_name_return_meal" value="<?php echo (explode(",", $return_query[0]->transfer_route)[$key]); ?>" class="form-control route_name_return_meal" type="text" placeholder="Route Name" name="route_name_return_meal[]"></td>
                                            </tr>

                                          <?php endforeach; ?>
                                        <?php endif ?>
                                      </tbody>
                                    </table>

                                  </div>
                                </div>
                              </div>
                              <?php endif ?>

                              <!-- ___________________________________________________________________________________________________________ -->
                            </div>
                            <?php endforeach; ?>


                          </div>

                          <div>
                            <button type="button" onclick="mealcalculation()" class="new_btn px-3 float-end">Save</button>
                          </div>
                        </div>


                        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
                        <script src="<?php echo base_url(); ?>public/js/validate.js"></script>
                        <script>
                          function removeRow(id) {
                            document.getElementById(id).remove()
                          }

                          $(document).ready(function() {
                            $("#view-proposal-btn").click(function() {

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
                              //  var buildPackageRefund = $('#buildPackageRefund').val();
                              var totalprice_adult = $('#totalprice_adult').text();
                              var totalprice_childs = $('#totalprice_childs').text();
                              var totalprice_infants = $('#totalprice_infants').text();
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
                                  totalprice_adult: totalprice_adult,
                                  totalprice_childs: totalprice_childs,
                                  totalprice_infants: totalprice_infants
                                },
                                cache: false,
                                success: function(response) {
                                  // console.log(response);
                                  $("#proposal-form").submit();
                                }
                              });


                              // sessionStorage.setItem("href",location.href); 
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

                              someDate.setDate(someDate.getDate() + parseInt(numberOfDaysToAdd)); //number  of days to add, e.x. 15 days
                              var dateFormated = someDate.toISOString().substr(0, 10);
                              $("#endDate1").val(dateFormated);

                            })

                            //  $(".card-box").click(function(e) {

                            // });

                            $(".card-box").click(function(e) {
                              e.stopPropagation();
                              // var hotel_rate_adult = $("#hotel_rate_adult").val();
                              // var total_price_internal = $("#total_price_internal").val();
                              // var total_price_point = $("#total_price_point").val();
                              // var total_pax_visa_price_adult = $("#total_pax_visa_price_adult").val(); 
                              var total_pax_meal_adult = $("#total_pax_meal_adult").val();
                              // var total_pax_pvt_adult = $("#total_pax_pvt_adult").val();
                              // var total_pax_sic_adult = $("#total_pax_sic_adult").val();

                              var sub_total_adult = parseInt(total_pax_meal_adult);
                              // parseInt(hotel_rate_adult) +
                              //   parseInt(total_price_internal)+ 
                              //   parseInt(total_price_point) + 
                              //   parseInt(total_pax_visa_price_adult) + 
                              //   parseInt(total_pax_meal_adult) + 
                              //   parseInt(total_pax_pvt_adult) + 
                              //   parseInt(total_pax_sic_adult);

                              // var hotel_rate_child = $("#hotel_rate_child").val();
                              // var total_pax_pvt_hild = $("#total_pax_pvt_hild").val();
                              // var total_pax_sic_hild = $("#total_pax_sic_hild").val();
                              var total_pax_meal_child = $("#total_pax_meal_child").val();
                              // var total_pax_visa_price_child = $("#total_pax_visa_price_child").val();

                              var sub_total_child = parseInt(total_pax_meal_child);

                              // var total_pax_visa_price_infant = $("#total_pax_visa_price_infant").val(); 
                              // var total_pax_pvt_infant = $("#total_pax_pvt_infant").val();
                              // var total_pax_sic_infant = $("#total_pax_sic_infant").val();

                              // var sub_total_infant = parseInt(total_pax_visa_price_infant) +
                              //   parseInt(total_pax_pvt_infant)+ 
                              //   parseInt(total_pax_sic_infant);



                              // $("#subtotal_adults").html( sub_total_adult );                      
                              // $("#subtotal_childs").html( sub_total_child );          
                              let c_type = document.getElementById('currencyOption').value;
                              var usd_aed = <?php echo $usd_to_aed->usd_to_aed; ?>;
                              $("#subtotal_adults").html(c_type == 'USD' ? (sub_total_adult / usd_aed).toFixed(2) : sub_total_adult);
                              $("#subtotal_childs").html(c_type == 'USD' ? (sub_total_child / usd_aed).toFixed(2) : sub_total_child);
                              $("#subtotal_infants").html(0);

                              var PackageMarkup = $("#PackageMarkup").val();
                              var Mark_up = $("#Mark_up").val();

                              var total_adult = 0;
                              var total_child = 0;
                              var total_infant = 0;
                              if (Mark_up == "precentage") {

                                total_adult = (parseInt(sub_total_adult) + (parseInt(sub_total_adult) * parseInt(PackageMarkup) / 100));
                                total_child = (parseInt(sub_total_child) + (parseInt(sub_total_child) * parseInt(PackageMarkup) / 100));
                                total_infant = 0;

                              }
                              if (Mark_up == "values") {

                                total_adult = (parseInt(sub_total_adult) + parseInt(PackageMarkup));
                                total_child = (parseInt(sub_total_child) + parseInt(PackageMarkup));
                                total_infant = 0;


                              }

                              // $("#totalprice_adult").html( total_adult );
                              // $("#totalprice_childs").html( total_child );
                              // $("#totalprice_infants").html( total_infant );

                              // var per_pax_adult = (parseInt(total_adult) / 2);
                              // var per_pax_child = (parseInt(total_child) / 2);
                              //   var per_pax_infant = (parseInt(total_infant) / 2);

                              $("#totalprice_adult").html(c_type == 'USD' ? (total_adult / usd_aed).toFixed(2) : total_adult);
                              $("#totalprice_childs").html(c_type == 'USD' ? (total_child / usd_aed).toFixed(2) : total_child);
                              $("#totalprice_infants").html(c_type == 'USD' ? (total_infant / usd_aed).toFixed(2) : total_infant);

                              var pax_adult_count = <?php echo $buildpackage->adult; ?>;
                              var pax_child_count = <?php echo $buildpackage->child; ?>;
                              var pax_infant_count = <?php echo $buildpackage->infant; ?>;

                              var per_pax_adult = (pax_adult_count > 1 ? parseInt(total_adult) / 2 : parseInt(total_adult));
                              var per_pax_child = (pax_child_count > 1 ? parseInt(total_child) / 2 : parseInt(total_child));
                              var per_pax_infant = (pax_infant_count > 1 ? parseInt(total_infant) / 2 : parseInt(total_infant));


                              // $("#perpax_adult").html(per_pax_adult);
                              // $("#perpax_childs").html( per_pax_child );
                              // $("#perpax_infants").html( 0 );

                              // $("#perpax_adult_input").val(per_pax_adult);
                              // $("#perpax_childs_input").val( per_pax_child );
                              // $("#perpax_infants_input").val( 0 );

                              $("#perpax_adult").html(c_type == 'USD' ? (per_pax_adult / usd_aed).toFixed(2) : per_pax_adult);
                              $("#perpax_childs").html(c_type == 'USD' ? (per_pax_child / usd_aed).toFixed(2) : per_pax_child);
                              $("#perpax_infants").html(0);

                              $("#perpax_adult_input").val(c_type == 'USD' ? (per_pax_adult / usd_aed).toFixed(2) : per_pax_adult);
                              $("#perpax_childs_input").val(c_type == 'USD' ? (per_pax_child / usd_aed).toFixed(2) : per_pax_child);
                              $("#perpax_infants_input").val(0);

                              var totalprice_meals = total_adult + total_child + total_infant;
                              $("#totalprice_meals").val(c_type == 'USD' ? (totalprice_meals / usd_aed).toFixed(2) : totalprice_meals);

                            })


                            //  $(".check-adult").change(function(){
                            //  var old_adult = <?php echo $view->Packagetravelers; ?>;
                            //  var new_adult = $('.check-adult').val();


                            //  if(new_adult > old_adult){
                            //   $('.check-adult').val(old_adult);
                            //  }else{
                            //   $('.check-adult').val(new_adult);
                            //  }


                            // })


                            // $(".check-child").change(function(){
                            //  var old_child = <?php echo $buildpackage->child; ?>;
                            //  var new_child = $('.check-child').val();


                            //  if(new_child > old_child){
                            //   $('.check-child').val(old_child);
                            //  }else{
                            //   $('.check-child').val(new_child);
                            //  }


                            // })



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
  adds += '<td><input type="radio"   id="with_transfer' + faqs_row2 + '" onchange="mealsTransferTypeChange(' + faqs_row2 + ')" class="transfer_with_or_without" name="transfer_with_or_without' + faqs_row2 + '[]" value="with_transfer" onclick="get_resturant_name(this.id,' + faqs_row2 + ');"/> With Transfer<br/><input type="radio" class="transfer_with_or_without" checked="checked" onchange="mealsTransferTypeHide(' + faqs_row2 + ')" id="without_transfer' + faqs_row2 + '" name="transfer_with_or_without' + faqs_row2 + '[]" value="without_transfer" onclick="get_resturant_name(this.id,' + faqs_row2 + ');"/> Without Transfer </td>';
  adds += '<td><input class="form-control checkIn_date" type="date" value="<?php echo $view->specificDate; ?>" min="<?php echo $view->specificDate; ?>" max="<?php echo date('Y-m-d', strtotime($view->specificDate . ' + ' . (($buildpackage->night) - (1)) . ' days')); ?>" name="buildCheckIn[]" id="buildCheckIn' + faqs_row2 + '"></td>';
  adds += '<td> <div> <select data-mdl-for="sample2" class="form-control rest_type" value="" tabIndex="-1" id="res_type' + faqs_row2 + '" name="res_type[]" onchange="get_resturant_name(this.id,' + faqs_row2 + ');"> <option value="">Select Option</option> <option value="Standard">Standard</option> <option value="Premium">Premium</option> </select> </div> </td>';
  // adds += '<td><input class="form-control " type="text" value="" name="res_name[]" id="res_name'+faqs_row2 + '"></td>';
  adds += '<td><select data-mdl-for="sample2" class="form-control res_name" value=""  tabIndex="-1" name="res_name[]" id="res_name' + faqs_row2 + '"  ><option>select</option></select></td>'
  adds += '<td> <div> <select data-mdl-for="sample2" class="form-control meal" value="" tabIndex="-1" id="meal_cal' + faqs_row2 + '" name="Meal[]"> <option value="Dinner">Dinner</option> <option value="Lunch">Lunch</option>  </select> </div> </td>';
  adds += '<td> <div> <select data-mdl-for="sample2" class="form-control meal_type" value="" tabIndex="-1" id="meal_type_cal' + faqs_row2 + '" name="Meal_Type[]"> <option value="Veg">Veg</option> <option value="Non-Veg">Non-Veg</option> <option value="Jain">Jain</option> </select> </div> </td>';
  adds += '<td><input type="number" id="no_of_meals' + faqs_row2 + '" class="form-control no_of_meals" name="no_of_meals[]" >';
  adds += ' <td><input type="text" placeholder="0" disabled value="<?php echo $view->Packagetravelers; ?>"  class="form-control meal_adult" id="adult_meal_cal' + faqs_row2 + '" name="adult[]" > </td>';
  adds += '<td><input type="text" placeholder="0" disabled value="<?php echo $buildpackage->child; ?>" class="form-control meal_child" id="child_meal_cal' + faqs_row2 + '" name="child[]" <?php if ($buildpackage->child == 0) echo "disabled"; ?>>';
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

                          // removeMeals =function  removeMeals(data){
                          //     var allocateddays = parseInt($('#allocated_days').val());                           
                          //     var tr = data.closest('tr');
                          //     // var lessdays = tr.('select.bnights').val();
                          //     // var lessdays =  data.closest('.bnights');
                          //     // console.log(lessdays);
                          //     var deleted_days = (Number(allocateddays) - Number(lessdays));
                          //     $('#allocated_days').val(deleted_days);
                          //     data.closest('tr').remove();

                          // }
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
                            <table class="table table-bordered" style="font-size:16px;">
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
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingOne">
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
    v  Rooms and rates are subject to availability at the time of actual booking.

    v  Standard Check-In: 1500 hrs. & Checkout: 1200 hrs.

    v  Early Check-In and Late Check-Out is subject to availability unless booked and confirmed in advance

    v  Normal timing for airport pick-up & drop transfer is 6.00 am to 10.00 pm and extra charges will be applicable except this timings and subject to available of vehicles

    v  Any change in the number of passengers will lead to a revision of the quote.

    v  Vehicle used in the above quote is based on all guests arriving/ departing together in the same flight. In case additional transfers are required, same will be arranged at an additional cost.

    v  Above quotes based on normal ticket prices, rate will be subject to change if we receive any revise rate at later stage

    v  Itinerary might get changed according to the availability of tours & services and it will be informed and updated to the guest once they reach Dubai

    v  OK TO BOARD Message update as per airline’s policy

    v  Visa processing may take anywhere between 3 – 5 working days to get approved

    v  Issuance of visa will be subject to approval from immigration however once visa is applied charges will be applicable and NO refund will be granted.

    v  In case of overstay – Travel agent will be held accountable to settle the fine imposed by immigration which is AED 100.00 Per day (Subject to revision from immigration).

    v  We need pre-payment for Dubai Visa and Insurance and it’s nonrefundable.

    v  if Excursion tickets are not book then Cancellation policy for the ground services will 4 days prior to arrival is free of charge.

    v  Payment to be made in AED as per the rate of exchange applicable on the day of final payment.

    v  Bank Charges AED 80/- will be Charged Mandatory on the total invoice.
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
                                  <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="buildPackageCancellations" name="buildPackageCancellations" style="height: 100px">
        Cancellation Terms: FIT
        Cancellation Terms:  Groups (MICE)

        25% cancellation within 30 days before travel.
        25% cancellation within 30 days before travel.

        50% cancellation within 10 days before Travel. 
        50% cancellation within 15 days before Travel.

        75% cancellation within 07 days before Travel.  
        100% cancellation within 07 days before Travel.
        
        Any cancellation within 04 days will lead to 100% cancellation charge. 
        Any cancellation within 04 days will lead to 100% cancellation charge.
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
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment-with-locales.min.js"></script> -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment-with-locales.min.js"></script>

<script>

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

  // $.ajax({
  //   type: "POST",
  //   dataType: "json",
  //   url: '<?php echo site_url(); ?>/query/fetchPickup1',
  //   data: {
  //     'pax': total_pax1
  //   },
  //   success: function(response) {
  //     $("#pickup_return_meal").html('<option value="">Pickup</option>');
  //     console.log(response.data.length);
  //     if (response.data.length > 0) {
  //       var options = ""
  //       for (var i = 0; i < response.data.length; i++) {
  //         console.log(response.data[i].start_city);
  //         options += '<option value="' + response.data[i].start_city + '">' + response.data[i].start_city + '</option>';
  //       }
  //     } else {
  //       var options = "<option value=''>No Data Found</option>"
  //     }
  //     $("#pickup_return_meal").append(options);

  //   }
  // });

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
        $("#route_name_return_meal").val(response.route_name);
        // $("#price_internal").val(response.data);
        // var total_price = response.data * pax_internal;
        // $("#total_price_internal").val(total_price);
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


  $('#buildHotelCity').on('change', function() {
    var city = $('#buildHotelCity').val();
    $("#buildHotelName").empty();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/get_hotels',
      data: {
        'city': city
      },
      success: function(response) {

        var i;
        $('#buildHotelName').append($("<option>Select</option>"));
        for (i = 0; i < response.length; ++i) {
          var newOption = $('#buildHotelName')
            .append($("<option></option>")
              .attr("value", response[i].id)
              .text(response[i].hotelname));

          // $('#buildHotelName')
          //     .append("<option value='"+response[i].id+"' selected=selected >"+response[i].hotelname+"</option>");

        }
        // response ='';
      }

    })
  });

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



  $('#buildHotelName').on('change', function() {
    var hotel_id = $('#buildHotelName').val();
    $("#buildRoomType").empty();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/get_room_type',
      data: {
        'hotel_id': hotel_id
      },
      success: function(response) {
        var j;
        $('#buildRoomType').append($("<option>Select Room Type</option>"));
        for (j = 0; j < response.length; ++j) {
          // do something with `substr[i]`
          console.log(response[j]);
          $('#buildRoomType')
            .html($("<option></option>")
              .attr("value", response[j].roomtype)
              .text(response[j].roomtype));

        }

      }
    })
  });
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
    console.log(pax_adult + "|" + entry_type + "|" + visa_validity);
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/getVisaPrice',
      data: {
        'pax_adult': pax_adult,
        'pax_child': pax_child,
        'pax_infant': pax_infant,
        'visa_category_drop_down': visa_category_drop_down,
        'visa_validity': visa_validity,
        'entry_type': entry_type
      },
      success: function(response) {
        console.log(response);

        $("#total_pax_visa_price_adult").val(response.per_pax_adult_amt);
        $("#total_pax_visa_price_child").val(response.per_pax_child_amt);
        $("#total_pax_visa_price_infant").val(response.per_pax_infant_amt);




      }
    });

  }
</script>

<input type="hidden" id="total_pax_visa_price_adult" name="total_pax_visa_price_adult" value="0" />
<input type="hidden" id="total_pax_visa_price_child" name="total_pax_visa_price_child" value="0" />
<input type="hidden" id="total_pax_visa_price_infant" name="total_pax_visa_price_infant" value="0" />

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

 function mealcalculation(param=0) {
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
      console.log("🚀 ~ file: build_meals_edit.php ~ line 1652 ~ $ ~ val", val)
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
      'resturants_name': resturants_name,
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
        'query_type': "meals"
      },
      success: function(response) {
        console.log(response);
        $("#total_pax_meal_adult").val(response.adult_prices);
        $("#total_pax_meal_child").val(response.child_prices);

        if(param != 1){
          toastr.success("Meals Saved Successfully");
        }
        $(".card-box").click();

      }
    })


  }
</script>
<input type="hidden" id="total_pax_meal_adult" name="total_pax_meal_adult" value="0" />
<input type="hidden" id="total_pax_meal_child" name="total_pax_meal_child" value="0" />
<input type="hidden" id="total_rows_meal" name="total_rows_meal" value="0" />

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
</script>
<input type="hidden" id="total_pax_sic_adult" name="total_pax_sic_adult" value="0" />
<input type="hidden" id="total_pax_sic_hild" name="total_pax_sic_hild" value="0" />
<input type="hidden" id="total_pax_sic_infant" name="total_pax_sic_infant" value="0" />



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
</script>

<input type="hidden" id="total_pax_pvt_adult" name="total_pax_pvt_adult" value="0" />
<input type="hidden" id="total_pax_pvt_hild" name="total_pax_pvt_hild" value="0" />
<input type="hidden" id="total_pax_pvt_infant" name="total_pax_pvt_infant" value="0" />


<input type="hidden" id="hotel_name_backup" name="hotel_name_backup" value="" />

<script>
  function hotelcalculation() {


    var with_adult = '';
    var with_child = '';
    var without_bed = '';
    if ($('#extra_with_adult').is(":checked")) {
      with_adult = $('#extra_with_adult').val();
    }
    if ($('#extra_with_child').is(":checked")) {
      with_child = $('#extra_with_child').val();
    }
    if ($('#extra_without_bed').is(":checked")) {
      without_bed = $('#extra_without_bed').val();
    }

    // console.log(extra_with_adult);
    var extra_with_adult = with_adult;
    var extra_with_child = with_child;
    var extra_without_bed = without_bed;

    var build_extra_bedtype = $("#buildExtraBedType").val();
    var pax_adult = <?php echo $view->Packagetravelers; ?>;
    var pax_child = <?php echo $buildpackage->child; ?>;
    var total_pax = pax_adult + pax_child;
    var build_hotel_name = $("#buildHotelName").val();
    var build_room_type = $("#buildRoomType").val();
    var no_of_nights = $("#buildNoNights").val();

    var build_bed_type = $("#buildBedType").val();
    // var hotel_name_backup =  $("#buildHotelName").val();
    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/getHotelCalculation',
      data: {
        'pax_adult': pax_adult,
        'pax_child': pax_child,
        'build_room_type': build_room_type,
        'no_of_nights': no_of_nights,
        'build_hotel_name': build_hotel_name,
        'build_bed_type': build_bed_type,
        'extra_with_adult': extra_with_adult,
        'extra_with_child': extra_with_child,
        'extra_without_bed': extra_without_bed
      },
      success: function(response) {
        $('#hotel_rate_adult').val(response.total_pax_adult_rate);
        $('#hotel_rate_child').val(response.total_pax_child_rate);

      }
    })
    // $('#hotel_name_backup').val( hotel_name_backup);

  }
</script>
<input type="hidden" id="hotel_rate_adult" name="hotel_rate_adult" value="0" />
<input type="hidden" id="hotel_rate_child" name="hotel_rate_child" value="0" />
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
  $("#visa_status").on("change", function() {
    // alert(this.value);
    $("#visadisplay").show();
  })
  $("#visa_status1").on("change", function() {
    $("#visadisplay").hide();
  })

  $("#excursion_status").on("change", function() {
    // alert(this.value);
    $("#excursiondisplay").show();
  })
  $("#excursion_status1").on("change", function() {
    $("#excursiondisplay").hide();
  })

  $('#pickupinternal').on('change', function() {
    alert(this.value);
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
    alert(this.value);
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



  $('#dropoffinternal').on('change', function() {
    var value = $("#pickupinternal").val();
    var pax_internal = $("#pax_internal").val();
    //alert(this.value);
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



  $('#dropoffpoint').on('change', function() {
    var value = $("#pickuppoint").val();
    var pax_internal = $("#pax_point").val();
    //alert(this.value);
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
        $("#route_namepoint").val("");
        $("#route_namepoint").val(response.route_name);
        // $("#pax_count_internal").val(response.data[0].seat_capacity);
        $("#price_point").val(response.data);
        var total_price = response.data * pax_internal;
        $("#total_price_point").val(total_price);
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


  $("input[name='TransType']").change(function() {

    var name = $(this).val();
    if (name == "Internal Transfer") {
      if ($('#TrasportTypeCab').is(':checked')) {
        $('#PvtCab').show();
      } else {
        $('#PvtCab').hide();
      }
    }
    if (name == "Point to Point Transfer") {
      if ($('#TrasportTypeSic').is(':checked')) {
        $('#Sic').show();
      } else {
        $('#Sic').hide();
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

    mealcalculation(1);

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


  $('.bnights').on("change", function() {
    var sum = 0;
    // var bet_sum = 0;

    $('.bnights').each(function() {
      sum += Number($(this).val());
    });

    $('#allocated_days').val(sum);


  });
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
</style>