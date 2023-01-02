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

      <form id="proposal-form" action="<?php echo site_url(); ?>query/CreateProposalExcursion" method="post">
        <input type="hidden" id="totalprice_excursion" name="totalprice_excursion" value="0" />

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
                      <td><b>Excursion</b></td>
                    </tr>
                    <tr>
                      <th><b>Tour Date</b></th>
                      <td><?php echo date('d-m-Y', strtotime($view->specificDate)); ?></td>
                      <th><b>End Date</b></th>
                      <td><?php echo date('d-m-Y', strtotime($buildpackage->noDaysFrom))  ?></td>
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

                      </div>
                    </div>

                    <div class="card-head card-head-new">
                      <p style="margin-top:20px">Excursion

                    </div>
                    <div class="row mt-4 mr-3 ml-3 mb-3 ">
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
                                <td><button id="sic_cal" type="button" onclick="excursionSICcalculations()" class="new_btn px-3">Save</button>
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
                              <input type="radio" id="meals_status" name="meals_status" value="Yes"><label for="html">Yes</label>
                              <input type="radio" id="meals_status1" name="meals_status" value="No"><label for="html">No</label>
                            </p>
                          </div>
                          <div id="addrowss" style="display:none">
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
                              <tbody id="mealsRow">
                                <tr id="myTableRow">

                                  <td><input class="form-control meals_date" min="<?php echo date("Y-m-d") ?>" type="date" value="<?php echo $view->specificDate; ?>" min="<?php echo $view->specificDate; ?>" max="<?php echo date('Y-m-d', strtotime($view->specificDate . ' + ' . (($buildpackage->night) - (1)) . ' days')); ?>" name="meals_date[]" id="meals_date"></td>

                                  <td>
                                    <div>
                                      <select data-mdl-for="sample2" class="form-control rest_type" value="" tabIndex="-1" id="res_type" name="res_type[]" onchange="get_resturant_name('res_type','');">
                                        <option value="">Select Option</option>
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
                            <div>
                              <button type="button" onclick="excursionMeal()" class="new_btn px-3 float-end">Save</button>
                            </div>
                          </div>


                          <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
                          <script src="<?php echo base_url(); ?>public/js/validate.js"></script>
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

                            function excursionMeal() {
                              var total_rows = $('#meals_table tbody#mealsRow tr').length;
                              var QueryId = $('#QueryId').val();

                              var resturants_name = [];
                              $(".res_name").each(function() {
                                var resturant_name = $(this).val();
                                resturants_name.push($.trim(resturant_name));

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

                              var meals_date = [];
                              $(".meals_date").each(function() {
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
                              console.log("🚩 ~ file: build_excursion.php ~ line 417 ~ excursionMeal ~ data", data)

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
                              console.log(response);
                              $("#total_pax_meals_adult").val(response.adult_prices);
                              $("#total_pax_meals_child").val(response.child_prices);
                              $(".card-box").click();
                              toastr.success("Meals Saved Successfully");
                              }
                              })

                            }

                            $(document).ready(function() {
                              $("#view-proposal-btn").click(function() {
                                $("#proposal-form").submit();
                                // sessionStorage.setItem("href",location.href); 
                              });

                              //   $('#s2id_excursion_name_SIC select2-search-choice-close').click(function(){
                              //   $( "#sic_cal" ).trigger( "click" );
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

                              })

                              $(".card-box").click(function(e) {
                                e.stopPropagation();

                                var total_pax_pvt_adult = $("#total_pax_pvt_adult").val();
                                var total_pax_TKT_adult = $("#total_pax_TKT_adult").val();
                                var total_pax_sic_adult = $("#total_pax_sic_adult").val();
                                var total_pax_meals_adult = $("#total_pax_meals_adult").val();

                                var sub_total_adult = parseInt(total_pax_pvt_adult) + parseInt(total_pax_TKT_adult) +
                                  parseInt(total_pax_sic_adult) + parseInt(total_pax_meals_adult);


                                var total_pax_pvt_hild = $("#total_pax_pvt_hild").val();
                                var total_pax_sic_hild = $("#total_pax_sic_hild").val();
                                var total_pax_TKT_child = $("#total_pax_TKT_child").val();
                                var total_pax_meals_child = $("#total_pax_meals_child").val();


                                var sub_total_child = parseInt(total_pax_sic_hild) + parseInt(total_pax_TKT_child) +
                                  parseInt(total_pax_pvt_hild) + parseInt(total_pax_meals_child);

                                var total_pax_pvt_infant = $("#total_pax_pvt_infant").val();
                                var total_pax_sic_infant = $("#total_pax_sic_infant").val();
                                var total_pax_TKT_infant = $("#total_pax_TKT_infant").val();

                                var sub_total_infant = parseInt(total_pax_pvt_infant) + parseInt(total_pax_TKT_infant) +
                                  parseInt(total_pax_sic_infant);

                                let c_type = document.getElementById('currencyOption').value;
                                var usd_aed = <?php echo $usd_to_aed->usd_to_aed; ?>;

                                $("#subtotal_adults").val(c_type == 'USD' ? (sub_total_adult / usd_aed).toFixed(2) : sub_total_adult);
                                $("#subtotal_childs").val(c_type == 'USD' ? (sub_total_child / usd_aed).toFixed(2) : sub_total_child);
                                $("#subtotal_infants").val(c_type == 'USD' ? (sub_total_infant / usd_aed).toFixed(2) : sub_total_infant);

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
                                if (Mark_up == "values") {
                                  total_adult = (parseInt(sub_total_adult) + parseInt(PackageMarkup));
                                  total_child = (parseInt(sub_total_child) + parseInt(PackageMarkup));
                                  total_infant = (parseInt(sub_total_infant) + parseInt(PackageMarkup));
                                }

                                $("#totalprice_adult").val(c_type == 'USD' ? (total_adult / usd_aed).toFixed(2) : total_adult);
                                $("#totalprice_childs").val(c_type == 'USD' ? (total_child / usd_aed).toFixed(2) : total_child);
                                $("#totalprice_infants").val(c_type == 'USD' ? (total_infant / usd_aed).toFixed(2) : total_infant);

                                var pax_adult_count = <?php echo $buildpackage->adult; ?>;
                                var pax_child_count = <?php echo $buildpackage->child; ?>;
                                var pax_infant_count = <?php echo $buildpackage->infant; ?>;

                                var per_pax_adult = (pax_adult_count > 1 ? parseInt(total_adult) / pax_adult_count : parseInt(total_adult));
                                var per_pax_child = (pax_child_count > 1 ? parseInt(total_child) / pax_child_count : parseInt(total_child));
                                var per_pax_infant = (pax_infant_count > 1 ? parseInt(total_infant) / pax_infant_count : parseInt(total_infant));

                                $("#perpax_adult").val(c_type == 'USD' ? (per_pax_adult / usd_aed).toFixed(2) : per_pax_adult);
                                $("#perpax_childs").val(c_type == 'USD' ? (per_pax_child / usd_aed).toFixed(2) : per_pax_child);
                                $("#perpax_infants").val(c_type == 'USD' ? (per_pax_infant / usd_aed).toFixed(2) : per_pax_infant);

                                $("#perpax_adult_input").val(c_type == 'USD' ? (per_pax_adult / usd_aed).toFixed(2) : per_pax_adult);
                                $("#perpax_childs_input").val(c_type == 'USD' ? (per_pax_child / usd_aed).toFixed(2) : per_pax_child);
                                $("#perpax_infants_input").val(c_type == 'USD' ? (per_pax_infant / usd_aed).toFixed(2) : per_pax_infant);

                                var totalprice_excursion = total_adult + total_child + total_infant;
                                $("#totalprice_excursion").val(c_type == 'USD' ? (totalprice_excursion / usd_aed).toFixed(2) : totalprice_excursion);

                              })


                              $(".check-adult").change(function() {
                                var old_adult = <?php echo $view->Packagetravelers; ?>;
                                var new_adult = $('.check-adult').val();
                                if (new_adult > old_adult) {
                                  $('.check-adult').val(old_adult);
                                } else {
                                  $('.check-adult').val(new_adult);
                                }
                              })

                              $(".check-child").change(function() {
                                var old_child = <?php echo $buildpackage->child; ?>;
                                var new_child = $('.check-child').val();

                                if (new_child > old_child) {
                                  $('.check-child').val(old_child);
                                } else {
                                  $('.check-child').val(new_child);
                                }
                              })
                            })

                            var faqs_row2 = 1;
                            var meal_adult_count = <?php echo $view->Packagetravelers; ?>;
                            var meal_child_count = <?php echo $buildpackage->child; ?>;
                            function addrowss() {
                              var cnt = $('#rows_count').val();
                              $('#rows_count').val(parseInt(cnt) + parseInt(1));
                              var adds = '';
                              adds += '<tr id="faqs-row' + faqs_row2 + '"><td><input class="form-control meals_date" type="date" value="<?php echo $view->specificDate; ?>" min="<?php echo $view->specificDate; ?>" max="<?php echo date('Y-m-d', strtotime($view->specificDate . ' + ' . (($buildpackage->night) - (1)) . ' days')); ?>" name="meals_date[]" id="meals_date' + faqs_row2 + '"></td>';
                              adds += '<td> <div> <select data-mdl-for="sample2" class="form-control rest_type" value="" tabIndex="-1" id="res_type' + faqs_row2 + '" name="res_type[]" onchange="get_resturant_name(this.id,' + faqs_row2 + ');"> <option value="">Select Option</option> <option value="Standard">Standard</option> <option value="Premium">Premium</option> </select> </div> </td>';
                              adds += '<td><select data-mdl-for="sample2" class="form-control res_name" value=""  tabIndex="-1" name="res_name[]" id="res_name' + faqs_row2 + '"  ><option>select</option></select></td>'
                              adds += '<td> <div> <select data-mdl-for="sample2" class="form-control meal" value="" tabIndex="-1" id="meal_cal' + faqs_row2 + '" name="Meal[]"> <option value="Dinner">Dinner</option> <option value="Lunch">Lunch</option>  </select> </div> </td>';
                              adds += '<td> <div> <select data-mdl-for="sample2" class="form-control meal_type" value="" tabIndex="-1" id="meal_type_cal' + faqs_row2 + '" name="Meal_Type[]"> <option value="Veg">Veg</option> <option value="Non-Veg">Non-Veg</option> <option value="Jain">Jain</option> </select> </div> </td>';
                              adds += '<td><input type="number" id="no_of_meals' + faqs_row2 + '" class="form-control no_of_meals" name="no_of_meals[]" >';
                              adds += ' <td><input type="text" placeholder="0" value="'+meal_adult_count+'" class="form-control meal_adult" id="adult_meal_cal' + faqs_row2 + '" name="adult[]" > </td>';
                              adds += '<td><input type="text" placeholder="0"  value="'+meal_child_count+'" class="form-control meal_child" id="child_meal_cal' + faqs_row2 + '" name="child[]" <?php if ($buildpackage->child == 0) echo "disabled"; ?>>';
                              adds += '</td> <td><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row2 + '\').remove();"><i class="fa fa-trash"></i></button> </td>';
                              adds += '</tr>';

                              $('#mealsRow').append(adds);
                                faqs_row2++;
                              }

                            $("#meals_status").on("change", function() {
                              $("#addrowss").show();
                            })

                            $("#meals_status1").on("change", function() {
                              $("#addrowss").hide();
                            })
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
                                <td type="" name="person" id="person" value=""></td>
                                <td type="" name="AdultCost" id="AdultCost" value="">Per Adult</td>
                                <td type="" name="ChildCost" id="ChildCost" value="">Per Child</td>
                                <td type="" name="InfantCost" id="InfantCost" value="">Per Infant</td>
                              </tr>
                              <tr align="center">
                                <td><b>Sub Total</b></td>
                                <td> <input type="text" readonly class="text-center" id="subtotal_adults" name="subtotal_adults"></td>
                                <td> <input type="text" readonly class="text-center" id="subtotal_childs" name="subtotal_childs"></td>
                                <td> <input type="text" readonly class="text-center" id="subtotal_infants" name="subtotal_infants"></td>
                              </tr>
                              <tr align="center">
                                <td><b>Total Price</b></td>
                                <td> <input type="text" readonly class="text-center" name="totalprice_adult" id="totalprice_adult" value=""></td>
                                <td> <input type="text" readonly class="text-center" name="totalprice_childs" id="totalprice_childs" value=""></td>
                                <td> <input type="text" readonly class="text-center" name="totalprice_infants" id="totalprice_infants" value=""></td>
                              </tr>
                              <tr align="center">
                                <td><b>Per PAX</b></td>
                                <td> <input type="text" readonly class="text-center" name="perpax_adult" id="perpax_adult" value=""></td>
                                <td> <input type="text" readonly class="text-center" name="perpax_childs" id="perpax_childs" value=""></td>
                                <td> <input type="text" readonly class="text-center" name="perpax_infants" id="perpax_infants" value=""></td>
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
                          <input type="hidden" id="QueryId" name="QueryId" value="<?php echo $view->query_id; ?>">
                          <div class="last-btn mt-4 mb-4">
                            <button id="view-proposal-btn" type="button" class="new_btn px-5 mr-4">View Proposal</button>
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
</div>

<div id="ProposalPage"></div>
<input type="hidden" name="allocated_days" id="allocated_days" value="0" />

<?php $this->load->view('footer'); ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment-with-locales.min.js"></script>

<script>
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
        }
      }
    })
  });

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

<script>
  function mealcalculation() {
    var res_name = $("#res_name").val();
    var meal_cal = $("#meal_cal").val();
    var adult_meal_cal = $("#adult_meal_cal").val();
    var child_meal_cal = $("#child_meal_cal").val();
    var meal_type_cal = $("#meal_type_cal").val();

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/getMealcalculation',
      data: {
        'res_name': res_name,
        'meal_cal': meal_cal,
        'adult_meal_cal': adult_meal_cal,
        'child_meal_cal': child_meal_cal,
        'meal_type_cal': meal_type_cal
      },
      success: function(response) {
        $("#total_pax_meal_adult").val(response.adult_price);
        $("#total_pax_meal_child").val(response.child_price);
      }
    })

  }
</script>
<input type="hidden" id="total_pax_meal_adult" name="total_pax_meal_adult" value="0" />
<input type="hidden" id="total_pax_meal_child" name="total_pax_meal_child" value="0" />
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
        'query_type': 'excursion',
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
        $(".card-box").click();

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
        toastr.success("Excursion TKT Saved Successfully");
        $(".card-box").click();

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
    var QueryId = $('#QueryId').val();

    console.log(excursion_name_PVT);

    $.ajax({
      type: "POST",
      dataType: "json",
      url: '<?php echo site_url(); ?>/Query/getExcursionPVTCalculation',
      data: {
        'query_id': QueryId,
        'query_type': 'excursion',
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
      url: '<?php echo site_url(); ?>Query/getExcursionPVTCalculations',
      data: {
        'hotel_pickup': ex_hotel_pickup,
        'query_id': QueryId,
        'query_type': 'excursion',
        'excursion_type_PVT': excursion_type_PVT,
        'excursion_adult_PVT': excursion_adult_PVT,
        'excursion_child_PVT': excursion_child_PVT,
        'excursion_infant_PVT': excursion_infant_PVT,
        'excursion_name_PVT': excursion_name_PVT,
        'total_pax': hidden_total_pax
      },
      success: function(response) {
        console.log(response);

        if (response.status == 0) {
          toastr.error("Selected PVT allowed " + response.pax + " pax only");
        } else {
          $("#total_pax_pvt_adult").val(response.total_adultprice);
          $("#total_pax_pvt_hild").val(response.total_childprice);
          $("#total_pax_pvt_infant").val(response.total_infantprice);
          toastr.success("Excursion PVT Saved Successfully");
          $(".card-box").click();
        }

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
    // var temp = $('#hotel_name_backup').val();

    // if(temp.length != 0 ){
    //   alert("hi");
    //        $("#buildHotelName > [value=" + temp + "]").attr("selected", "true");
    // }





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




  var faqs_row = 0;

  function addrows() {

    setTimeout(function() {
      $('.noOfDaysAlertcls').attr("style", "display:none;")
    }, 2000);
    var initaldays = parseInt($('#buildNoNights').val());
    // alert(initaldays);

    if (isNaN(initaldays) || initaldays == "") {
      $('#buildNoNights').attr('style', "border-color:red");
    } else {
      $('#buildNoNights').removeAttr('style', "border-color:red");


      var totalNoOfDays = <?php echo $buildpackage->night ?>;
      var allocated_days = parseInt($('#allocated_days').val());
      // var allocated_days = parseInt(allocated_day); 
      alert(allocated_days);
      var d = "<?php echo $view->specificDate; ?>";
      var f = moment(d).add(allocated_days, 'days');

      if (totalNoOfDays > allocated_days) {
        $('#buildNoNights').attr('disabled', true);
        var template = '';
        var city = '<td><select class="form-control get-hotel" name="buildHotelCity' + faqs_row + '" id="buildHotelCity' + faqs_row + '"><option>Select City</option><option value="Dubai">Dubai</option><option value="AbuDhabi">Abu Dhabi</option><option value="Sharjah">Sharjah</option><option value="Ajman">Ajman</option><option value="Sir Baniyas">Sir Baniyas</option><option value="Umm Al-Quwain">Umm Al-Quwain</option><option value="Fujairah">Fujairah</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Al Ain">Al Ain</option></select></td>';
        var bnight = '<td><select class="form-control bnights" id="buildNoNights' + faqs_row + '"  name="buildNoNights' + faqs_row + '" required>';
        for (let i = 1; i <= (totalNoOfDays - allocated_days); i++) {
          bnight += '<option>' + i + '</option>';
        }
        bnight += '</select></td>';
        var room = '<td><select class="form-control get-hotel-room" name="buildRoomType' + faqs_row + '" id="buildRoomType' + faqs_row + '" required></select></td>';
        template += '<tr id="faqs-row' + faqs_row + '">';
        // template += '<td><input class="form-control" type="text" value="" name="buildHotelCity'+faqs_row+'" id="buildHotelCity'+faqs_row+'"></td>';
        template += city;
        template += '<td><input class="form-control" type="date" value="' + f.format("YYYY-MM-DD") + '" name="buildCheckIn' + faqs_row + '" id="buildCheckIn' + faqs_row + '" disabled></td>';
        template += bnight;
        template += ' <td> <div> <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" name="Category' + faqs_row + '"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> </select> </div> </td>';
        // template += '<td><input class="form-control" type="text" placeholder="Room Type" name="buildRoomType'+faqs_row+'" id="buildRoomType'+faqs_row+'" required=""></td> ';
        template += room;
        template += '<td><button type="button" class="btn btn-danger btn-xs cls-btn"  id="del_btn' + faqs_row + '"  onClick="return  removeHotel(this);"><i class="fa fa-trash"></i></button> </td>';
        template += '</tr>';

        $("#addrows").append(template);
        $('#allocated_days').val(parseInt($('#buildNoNights' + faqs_row).val()) + parseInt($('#allocated_days').val()));

        $("[type='number']").keypress(function(evt) {
          evt.preventDefault();
        });

        if ($("#faqs-row" + faqs_row).length == 0) {
          $('#buildNoNights').attr('disabled', false);
        }


      } else {
        $('#noOfDaysAlert').html(totalNoOfDays);
        $('.noOfDaysAlertcls').attr("style", "display:block;");
      }

    }
  }

  removeHotel = function removeHotel(data) {
    // console.log(data.closest('tr'));
    var allocateddays = parseInt($('#allocated_days').val());
    var tr = data.closest('tr');
    // var lessdays = tr.('select.bnights').val();
    // var lessdays =  data.closest('.bnights');
    // console.log(lessdays);
    var deleted_days = (Number(allocateddays) - Number(lessdays));
    $('#allocated_days').val(deleted_days);
    data.closest('tr').remove();

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

  /* .select2-search{
    display: none !important;
  } */
</style>