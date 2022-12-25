<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 800px!important;">
            <div class="modal-header" style="background-color: #d9a927;">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-hotel"></i> Hotels</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="searchhotel" style="display:block;">
                    <input type="hidden" id="" name="" value="" />
                    <form method="post">
                        <div id="wrapping">
                            <input type="hidden" name="modal_hotel" id="modal_hotel" value="" />
                            <section id="" class="col-md-12">
                                <label>City</label>
                                <select class="form-control Hotel_name_city_select" id="Hotel_name_city_select" required="" name="Hotel_name_city_select">
                                    <option value="">Select City</option>
                                    <?php
                                    foreach (array_unique($hotel_city) as $city) {
                                        echo '<option value="' . $city . '">' . $city . '</option>';
                                    }
                                    ?>
                                </select>
                            </section>
                            <section id="recipientcase" class="col-md-12 mt-4">
                                <label>Category </label>
                                <select class="form-control selectStarRating" id="selectStarRating" name="selectStarRating" class="selmenu">
                                    <option value="">Select Category</option>
                                    <?php
                                    foreach (array_unique($category) as $name) {
                                        echo '<option value="' . $name . '">' . $name . '</option>';
                                    }
                                    ?>
                                </select>
                            </section>
                            <section id="" class="col-md-12 mt-4">
                                <label>Hotel Name</label>
                                <select class="form-control buildHotelName" id="buildHotelName" required="" name="buildHotelName" required style="display: flex;">
                                    <option value="">Select Hotel</option>
                                    <?php
                                    foreach (array_unique($hotel_name) as $name) {
                                        echo '<option value="' . $name . '">' . $name . '</option>';
                                    }
                                    ?>
                                </select>
                            </section>
                            <section id="" class="col-md-12 mt-4">
                                <label>Room Type</label>
                                <select class="form-control buildRoomType" id="buildRoomType" required="" name="buildRoomType" style="display: flex;">
                                    <option value="">Select Room Type</option>
                                    <?php
                                    foreach (array_unique($room_type) as $name) {
                                        echo '<option value="' . $name . '">' . $name . '</option>';
                                    }
                                    ?>
                                </select>
                            </section>
                            <section id="aside" class="mt-4" style="display: flex;">
                                <section id="recipientcase" class="col-md-6">
                                    <label>Check In </label>
                                    <input type="date" value="<?php echo $package->specificDate ?>" name="check_in_date" id="check_in_date" class="form-control check_in_date">
                                    <!-- <input type="date" name="check_in_date" id="check_in_date" class="form-control check_in_date" value="<?php echo isset($details['checkindate']) ? $details['checkindate'] : ""; ?>" readonly > -->
                                </section>

                                <section id="recipientcase" class="col-md-6">
                                    <label>Check Out</label>
                                    <input type="date" value="<?php echo $package->noDaysFrom ?>" name="check_out_date" id="check_out_date" class="form-control txtinput check_out_date">
                                    <!-- <input type="date" name="check_out_date" id="check_out_date" class="form-control txtinput check_out_date" min="<?php echo $details['checkindate']; ?>" max="<?php echo $details['checkoutdate']; ?>" value=""> -->
                                </section>
                            </section>

                            <div class="clear"></div>
                            <section id="aside" class="col-md-12" style="display: flex; margin-top: -44px;">
                            </section>
                            </section>
                            <br>


                            <section id="aside">
                                <section id="recipientcase">
                                    <label>&nbsp;</label>
                                    <div class="ls-group-input">
                                        <button type="button" class="new_btn px-3" id="searchHotelButton" aria-hidden="true"> Submit </button>
                                    </div>
                                    <span id="norecords" style="color: red;"></span>
                                </section>
                            </section>

                        </div>

                    </form>
                </div>
                <div class="table-scrollable" id="allhotel" style="display: none;">

                    <table class="table table-hover table-checkable order-column full-width" id="hotelsearchtable">
                        <thead>
                            <tr>
                                <th class="center"> Select</th>
                                <th class="center"> Hotel Name </th>
                                <th class="center"> Stars </th>
                                <th class="center"> Supplier </th>
                                <th class="center"> Room Type/Meal Plan </th>
                                <th class="center"> All Room per night </th>
                            </tr>
                        </thead>
                        <tbody id="hotelsearchtablebody">
                        </tbody>
                    </table>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="selectedHotels">Submit</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- transfer modal start -->
<div class="modal fade" id="transferModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 800px!important;">
            <div class="modal-header" style="background-color: #d9a927;">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-car"></i> Transfer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="searchtransfer" style="display:block;">

                    <form method="post">
                        <div id="wrapping">
                            <input type="hidden" name="modal_transfer" id="modal_transfer" value="" />
                            <section id="aligned" class="col-md-12 mt-4">
                                <label>Transfer Type</label>
                                <select id="transfertype" required name="transfertype" onchange="getTransfer(this)" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                    <option value="">Select Transfer</option>

                                    <?php foreach ($transfer_types as $value) : ?>
                                        <option value=<?php echo $value ?>><?php echo $value == "oneway" ? "Internal City/Hotel Transfer" : "Airport Return Transfer" ?></option>
                                    <?php endforeach ?>
                                </select>
                            </section>


                            <section id="" class="col-md-12 row mt-4">

                                <section id="" class="col-md-6">
                                    <label>From Date</label>
                                    <input id="transfer_from_date" class="form-control" type="date" value="<?php echo isset($details['checkindate']) ? $details['checkindate'] : "" ?>" name="transfer_from_date" />
                                </section>

                                <section id="" class="col-md-6">
                                    <label>Pickup Time</label>
                                    <input id="pickup_time" class="form-control" type="time" value="<?php echo isset($details['pickup_time']) ? $details['pickup_time'] : "" ?>" name="pickup_time" />
                                </section>

                            </section>


                            <br />
                            <section id="aside" class="col-md-12 row">
                                <section id="" class="col-md-6">
                                    <label>Pick up</label>
                                    <select id="pickupinternal" required onchange="getDropTransfer()" name="buildTravelToDateCab" class="select_trans js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                    </select>
                                </section>

                                <section id="" class="col-md-6">
                                    <label>Drop off</label>
                                    <select id="dropoffinternal" name="buildTravelToCityCabDrop" class="select_trans_drop js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                    </select>
                                </section>
                            </section>

                            <section id="" class="col-md-6 mt-4">
                                <label>Route Name</label>
                                <input id="route_nameinternal" class="form-control" type="text" placeholder="Route Name" name="buildTravelTypeCab">
                                </td>
                            </section>

                            <section id="aside">
                                <section id="recipientcase">
                                    <label>&nbsp;</label>
                                    <div class="ls-group-input">
                                        <button type="button" class="new_btn px-3" id="searchTransferButton" aria-hidden="true"> Submit </button>
                                    </div>
                                </section>
                            </section>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- transfer modal end -->

<!-- meals modal start -->
<div class="modal fade" id="mealsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 800px!important;">
            <div class="modal-header" style="background-color: #d9a927;">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-bowl-rice"></i> Meals</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="searchmeals" style="display:block;">

                    <form method="post">
                        <div id="wrapping">
                            <input type="hidden" name="modal_meals" id="modal_meals" value="" />
                            <section id="" class="col-md-12">
                                <!-- <section id="" class="col-md-6">
                                    <label>Date</label>                            
                                    <input class="form-control" type="date" value="<?php echo isset($details['checkindate']) ? $details['checkindate'] : ""; ?>" name="meals_date" id="meals_date">
                            </section> -->
                                <!-- <section id="" class="col-md-12 d-flex">
                 <input type="radio" class="transfer_with_or_without" id="with_transfer" name="transfer_with_or_without" value="with_transfer" onclick="get_resturant_name('with_transfer','');" autocompleted=""> With Transfer<br>
                    <input type="radio" class="transfer_with_or_without" id="without_transfer" name="transfer_with_or_without" value="without_transfer" onclick="get_resturant_name('without_transfer','');"> Without Transfer  
                    </section> -->

                                <section id="" class="col-md-12 mt-4">
                                    <label>Transfer Type</label>
                                    <select id="transfer_with_or_without" required name="transfer_with_or_without" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                        <option value="">Select Transfer</option>
                                        <?php foreach ($resturant_transfer_type as $value) : ?>
                                            <option value=<?php echo $value ?>><?php echo $value == "with_transfer" ? "With Transfer" : "Without Transfer" ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </section>



                                <section id="" class="col-md-12 mt-4">
                                    <label>Resturant Type</label>
                                    <select id="resturant_type" required name="resturant_type" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                        <!-- <select id="resturant_type"  required  name="resturant_type" onchange="get_resturant_name()" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg"> -->
                                        <?php
                                        foreach ($resturant_type as $name) {
                                            echo '<option value="' . $name . '">' . $name . '</option>';
                                        }
                                        ?>
                                    </select>
                                </section>

                                <section id="" class="col-md-12 mt-4">
                                    <label>Resturant Name</label>
                                    <select id="resturant_name" required name="resturant_name" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                        <?php
                                        foreach ($resturant_name as $name) {
                                            echo '<option value="' . $name . '">' . $name . '</option>';
                                        }
                                        ?>
                                    </select>
                                </section>

                                <section id="aligned" class="col-md-12 mt-4">
                                    <label>Meal </label>
                                    <select id="meal" required name="meal" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                        <?php
                                        foreach ($meal as $name) {
                                            echo '<option value="' . $name . '">' . $name . '</option>';
                                        }
                                        ?>

                                    </select>
                                </section>

                                <section id="aligned" class="col-md-12 mt-4">
                                    <label>Meal Type </label>
                                    <select id="meal_type" required name="meal_type" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                        <?php
                                        foreach ($meal_type as $name) {
                                            echo '<option value="' . $name . '">' . $name . '</option>';
                                        }
                                        ?>

                                    </select>
                                </section>

                                <section id="" class="col-md-12 mt-4">
                                    <label><i class="fa fa-male" aria-hidden="true"></i> Adult</label>
                                    <input id="meal_adult" value="<?php echo ((int)$package->adult) ?>" class="form-control" type="text" name="meal_adult"></td>

                                </section>

                                <section id="" class="col-md-12 mt-4">
                                    <label><i class="fa-solid fa-child"></i>Child</label>
                                    <input id="meal_child" value="<?php echo ((int)$package->child) ?>" class="form-control" type="text" name="meal_child"></td>

                                </section>



                            </section>



                            </section>

                            <section id="aside">
                                <section id="recipientcase">
                                    <label>&nbsp;</label>
                                    <div class="ls-group-input">
                                        <button type="button" class="new_btn px-3" id="searchMealsButton" aria-hidden="true"> Submit </button>
                                    </div>
                                    <!-- <span id="norecords" style="color: red;"></span> -->
                                </section>
                            </section>





                        </div>

                    </form>
                </div>



                <!-- <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="selectedHotels">Submit</button>
            </div> -->
            </div>
        </div>

    </div>
</div>

<!-- meals modal end -->

<!-- Excursion modal start -->
<div class="modal fade" id="excursionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 800px!important;">
            <div class="modal-header" style="background-color: #d9a927;">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-place-of-worship"></i> Activity</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="searchexcursion" style="display:block;">
                    <form method="post">
                        <div id="wrapping">
                            <input type="hidden" name="modal_excursion" id="modal_excursion" value="" />
                            <section id="" class="">
                                <section id="" class="col-md-12">
                                    <label>Activity Type</label>
                                    <select id="excursion_type" name="excursion_type" onchange="getExcursion(this)" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                        <option value="">Select Activity Type</option>
                                        <?php foreach ($excursion_types as $value) : ?>
                                            <option value=<?php echo $value ?>><?php echo $value ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </section>
                                <section id="" class="col-md-12 mt-4">
                                    <label>Activity Name</label>
                                    <!-- <select required multiple="" id="excursion_name"  name="excursion[]"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg" > -->
                                    <!-- <select  required multiple id="excursion_name" name="excursion" class="select2_exc select_exc w-100 bg-white form-control form-control-lg"> -->
                                    <select required id="excursion_name" name="excursion" class="select_exc w-100 bg-white form-control form-control-lg">
                                    </select>
                                </section>

                                <section id="" class="col-md-12 mt-4">
                                    <label><i class="fa fa-male" aria-hidden="true"></i> Adult</label>
                                    <input id="excursion_adult" value="<?php echo ((int)$package->adult) ?>" class="form-control" type="text" name="excursion_adult"></td>

                                </section>

                                <section id="" class="col-md-12 mt-4">
                                    <label><i class="fa-solid fa-child"></i> Child</label>
                                    <input id="excursion_child" value="<?php echo ((int)$package->child) ?>" class="form-control" type="text" name="excursion_child"></td>

                                </section>


                                <section id="" class="col-md-12 mt-4">
                                    <label><i class="fa-solid fa-baby"></i>Infant</label>
                                    <input id="excursion_infant" value="<?php echo ((int)$package->infant) ?>" class="form-control" type="text" name="excursion_infant"></td>

                                </section>
                            </section>

                            </section>

                            <section id="aside">
                                <section id="recipientcase">
                                    <label>&nbsp;</label>
                                    <div class="ls-group-input">
                                        <button type="button" class="new_btn px-3" id="searchExcursionButton" aria-hidden="true"> Submit </button>
                                    </div>
                                </section>
                            </section>





                        </div>

                    </form>
                </div>



                <!-- <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="selectedHotels">Submit</button>
            </div> -->
            </div>
        </div>

    </div>
</div>

<!-- Excursion modal end -->

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 1000px;left: -200px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">My Inventory</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="col-md-12 no-border-bottom">
                <div class="panel-body table-responsive no-padding overflowflight" id="internaldealssightseen">


                    <div id="pop-up-3" class="pop-up-display-content">
                        <div id="searchsight">
                            <table class="table tablestyle">
                                <thead>
                                    <tr class="alert alert-graylight">
                                        <th class="small smallbold">Sight Seeing Name</th>
                                        <th class="small smallbold text-center" colspan="2">Price</th>
                                        <th class="small smallbold">Supplier Name</th>
                                        <th class="small smallbold">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="alert alert-graylight">
                                        <th class="small smallbold small_bordertop"></th>
                                        <th class="small smallbold small_bordertop text-center">Adult</th>
                                        <th class="small smallbold small_bordertop text-center">Kid</th>
                                        <th class="small smallbold small_bordertop"></th>
                                        <th class="small smallbold small_bordertop"></th>
                                        <th class="small smallbold small_bordertop"></th>
                                    </tr>

                                    <?php foreach ($listSightseeings as $key) { ?>

                                        <tr id="sightsearchtablebody">
                                            <td><?php echo $key->tourname; ?> </td>
                                            <td class="text-center"><strong><?php echo $key->adultprice; ?> </strong>
                                                <input class="adults" type="hidden" name="costadult_2864" id="costadult_2864" value="0">

                                            </td>
                                            <td class="text-center"><strong><?php echo $key->childprice; ?></strong>
                                                <input class="child" type="hidden" name="costkid_2864" id="costkid_2864" value="0">

                                            </td>

                                            <td>Demo Agency</td>
                                            <td><input type="checkbox"></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="selectedsight">Submit</button>
                            </div>
                        </div>


                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function getExcursion(selectObject) {
        let value = selectObject.value;

        let options = '';
        let options_data = [];
        $('.select_exc').empty();
        $('.select_exc').append(`<option value="">Select Activity Name</option>`);
        if (value == "PVT") {
            options_data = <?php echo json_encode($excursion_pvt) ?>;
        } else if (value == "SIC") {
            options_data = <?php echo json_encode($excursion_sic) ?>;
        } else {
            options_data = <?php echo json_encode($excursion_tkt) ?>;
        }
        options_data.forEach(element => {
            if (excursion_names_added_arr.includes(element)) {
                return;
            }
            options += `<option value="${element}">${element}</option>`;
        });
        $('.select_exc').append(options);
        // var selectedOption = $('option:selected', this).text(); 
        // $(".select_exc option:contains('" + selectedOption + "'):not(:selected)").hide();
    }

    function getTransfer(selectObject) {
        let value = selectObject.value;

        let options = '';
        let options_data = [];
        $('.select_trans').empty();
        $('.select_trans').append('<option value="">Pickup</option>');
        if (value == "oneway") {
            options_data = <?php echo json_encode($transfer_internal_pickup) ?>;
        } else {
            options_data = <?php echo json_encode($transfer_return_pickup) ?>;
        }
        options_data.forEach(element => {
            console.log("🚩 ~ file: modal.php:863 ~ getTransfer ~ transfer_internal_pickup_added_arr", transfer_internal_pickup_added_arr)

            if (value == "oneway") {
                if (transfer_internal_pickup_added_arr.includes(element)) {
                    return;
                }
            } else {
                if (transfer_return_pickup_added_arr.includes(element)) {
                    return;
                }
            }

            options += `<option value="${element}">${element}</option>`;
        });
        $('.select_trans').append(options);

        // let options_drop = '';
        // let options_drop_data = [];
        // $('.select_trans_drop').empty();
        // $('.select_trans_drop').append('<option value="">Dropoff</option>');
        // if(value == "oneway"){options_drop_data = <?php echo json_encode($transfer_internal_drop) ?>; }
        //  else {options_drop_data = <?php echo json_encode($transfer_return_drop) ?>; }
        //     options_drop_data.forEach(element => {

        //     if(value == "oneway"){
        //         if (transfer_return_pickup_added_arr.includes(element)) { return;  }
        //     } else {
        //         if (transfer_return_drop_added_arr.includes(element)) { return;  }
        //     }

        //     options_drop +=`<option value="${element}">${element}</option>`;
        // });
        // $('.select_trans_drop').append(options_drop);
    }

    function getDropTransfer() {

        var value = $("#transfertype").val();

        let options_drop = '';
        let options_drop_data = [];
        $('.select_trans_drop').empty();
        $('.select_trans_drop').append('<option value="">Dropoff</option>');
        if (value == "oneway") {
            options_drop_data = <?php echo json_encode($transfer_internal_drop) ?>;
        } else {
            options_drop_data = <?php echo json_encode($transfer_return_drop) ?>;
        }
        options_drop_data.forEach(element => {

            if (value == "oneway") {
                if (transfer_internal_drop_added_arr.includes(element)) {
                    return;
                }
            } else {
                if (transfer_return_drop_added_arr.includes(element)) {
                    return;
                }
            }

            options_drop += `<option value="${element}">${element}</option>`;
        });
        $('.select_trans_drop').append(options_drop);
    }

    function get_resturant_name(id) {

        var transfer = $('input[name="transfer_with_or_without"]:checked').val();
        var rest_type = $('#resturant_type').val();

        $("#resturant_name").empty();
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
                $('#resturant_name').append($("<option>Select</option>"));
                for (i = 0; i < response.length; ++i) {
                    var newOption = $('#resturant_name')
                        .append($("<option></option>")
                            .attr("value", response[i].resturant_name)
                            .text(response[i].resturant_name));


                }
            }

        })

    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
    // $(document).ready(function() {
    // });
    document.addEventListener("DOMContentLoaded", function() {
        $('.select2_exc').select2();
    });
</script>