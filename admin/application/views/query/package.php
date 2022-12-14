    <?php $this->load->view('header'); ?>
    <style>
        .roomBoxMain {
            width: 100%;
            display: inline-block;
            width: 100%;
            position: absolute;
            border: 1px solid #cccccc;
            background: #ffffff;
            left: 0px;
            top: -430px;
            display: none;
        }

        .roomBoxMain .roomBoxMainIn {
            padding: 10px;
        }

        .travelerboxMain {
            width: 80%;
            position: relative;
            display: inline-block;
        }

        .selectdropdown_border {
            border: 1px solid #0069ff !important;
            padding: 8px 12px;
            display: inline-block;
            width: 80%;
            overflow: hidden;
            position: relative;
            z-index: 1;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-shadow: 0 0px 0px 0 #0069ff;
            box-shadow: 0 0px 0px 0 #0069ff;
            -webkit-border-radius: 5px !important;
            -moz-border-radius: 5px !important;
            border-radius: 4px !important;
            color: #000;
            font-size: 14px !important;
            line-height: 20px !important;
            font-weight: normal;
        }

        .travelerbox {
            border: 1px solid #0085DF;
            padding: 7px 12px;
            display: inline-block;
            width: 85%;
            position: relative;
            z-index: 1;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            background: #ffffff;
            cursor: pointer;
            margin-bottom: 5px;
            height: 38px;
        }

        .travelerbox:after {
            content: ' ';
            display: block;
            position: absolute;
            top: 50%;
            right: 17px;
            margin-top: -3px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 5px 5px 0 5px;
            border-color: #333333 transparent transparent transparent;
        }

        .roomBoxMainHotel {
            width: 100%;
            display: inline-block;
            width: 100%;
            position: absolute;
            border: 1px solid #cccccc;
            background: #ffffff;
            left: 0px;
            top: 35px;
            z-index: 9999;
            display: none;
        }

        .roomBoxMainHotel .roomBoxMainIn {
            padding: 10px;
        }

        .roomBoxMainHotel .roomBoxMainIn .roomLoop {
            width: 100%;
            position: relative;
        }

        .roomBoxMainHotel .roomBoxMainIn h1 {
            padding: 5px 0px;
            margin: 0 0px;
            display: block;
            border-bottom: 1px solid #eeeeee;
            font-size: 13px;
            font-weight: bold;
            background: #f3f3f3;
        }

        .roomBoxMainHotel .roomBoxMainIn .travelerInChild {
            padding: 0px 0px;
            margin: 0 0 5px 0px;
            width: 100%;
            background: #f9f9f9;
        }

        .roomBoxMainHotel .roomBoxMainIn .travelerIn {
            padding: 5px 0px;
            margin: 0 0px;
            width: 100%;
        }

        .travelerboxMain {
            width: 100%;
            position: relative;
            display: inline-block;
            font-weight: 300;
            margin-bottom: 3%;
        }

        #main-container .form-group {
            position: relative;
            margin: 0;
            /* min-height: 64px; */
            min-height: 70px;
        }

        .selectdropdown_border {
            border: 1px solid #0069ff !important;
            padding: 8px 12px;
            display: inline-block;
            width: 100%;
            overflow: hidden;
            position: relative;
            z-index: 1;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-shadow: 0 0px 0px 0 #0069ff;
            box-shadow: 0 0px 0px 0 #0069ff;
            -webkit-border-radius: 5px !important;
            -moz-border-radius: 5px !important;
            border-radius: 4px !important;
            color: #000;
            font-size: 14px !important;
            line-height: 20px !important;
            font-weight: normal;
        }

        .travelerboxHotel {
            border: 1px solid #0085DF;
            padding: 7px 12px;
            display: inline-block;
            width: 100%;
            position: relative;
            z-index: 1;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-box-shadow: none;
            box-shadow: none;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            background: #ffffff;
            cursor: pointer;
            margin-bottom: 5px;
            height: 38px;
        }
    </style>

    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/index.css">

    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        <?php $this->load->view('side_bar'); ?>
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">Build Package</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="dashboard.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li>&nbsp;Inventory&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Package</li>
                        </ol>
                    </div>
                </div>

                <div class="row center">
                    <div class="col-md-12">
                        <!-- <div class="card card-box p-2">
                            <div class="d-flex justify-content-center p-5 align-item-center">
                                <div class="bg-red mt-4 center w-50">
                                    <p><b> Company Name</b> : <?php echo $b2bDetails->b2bcompanyName ?> <br><br>
                                        <b>RM </b>: <?php echo $this->session->userdata('admin_username'); ?>
                                    </p>
                                </div>
                                <div class="bg-red mt-4">
                                    <p> <b>Contact Number </b>: <?php echo $b2bDetails->b2bmobileNumber; ?> <br><br>
                                        <b> Customer Type</b> : B2B
                                    </p>
                                </div>
                                <div class="bg-red mt-4 w-50">
                                    <p><b>Email Id</b> : <?php echo $b2bDetails->b2bEmail; ?> <br /><br />
                                        <b> Active Since </b>: <?php echo date('d M Y'); ?>
                                    </p>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between align-itoms-center mr-5 ml-5">
                                <div class="btn-group mr-5">

                                </div>


                            </div>

                        </div> -->
                        <div class="card card-box">
                            <div class="card-head card-head-new">
                                <p>New Query</p>

                            </div>
                            <div class="card-body row ">
                                <div class="card-body-head">

                                    <div class="Package box">

                                        <?php if ($this->session->flashdata('error')) { ?><center>
                                                <div class="alert alert-danger" style="font-size: 12px;">
                                                    <?php echo $this->session->flashdata('error') ?>
                                                </div>
                                            </center>

                                        <?php } ?>
                                        <?php if ($this->session->flashdata('successPackage')) { ?><center>
                                                <div class="alert alert-success" style="font-size: 12px;">
                                                    <?php echo $this->session->flashdata('successPackage');
                                                    $this->session->unset_userdata('successPackage');
                                                    ?>
                                                </div>
                                            </center>
                                        <?php } ?>

                                        <div class="first">
                                            <label><input type="radio" name="colorRadio1" value="Package" checked=""><img src="<?php echo base_url(); ?>public/image/package.png" style="width: 35px;" />Build Package</label>
                                            <label><input type="radio" name="colorRadio1" value="Hotel"><img src="<?php echo base_url(); ?>public/image/hotel.png" style="width: 35px;" /> Hotel</label>
                                            <label><input type="radio" name="colorRadio1" value="Transfer"><img src="<?php echo base_url(); ?>public/image/transfer.png" style="width: 35px;" /> Transfer</label>
                                            <label><input type="radio" name="colorRadio1" value="Excursion"><img src="<?php echo base_url(); ?>public/image/excursions.png" style="width: 35px;" /> Activity</label>
                                            <label><input type="radio" name="colorRadio1" value="Visa"> <img src="<?php echo base_url(); ?>public/image/visa.png" style="width: 35px;" /> Visa</label>
                                            <label><input type="radio" name="colorRadio1" value="Meals"><img src="<?php echo base_url(); ?>public/image/meals.png" style="width: 35px;" /> Meals</label>

                                        </div>

                                    </div>

                                    <style>
                                        .package_input_date {
                                            height: 5vh;
                                            color: gray;
                                            border-radius: 4px;
                                            padding: 5px;
                                        }

                                        input::-webkit-outer-spin-button,
                                        input::-webkit-inner-spin-button {
                                            -webkit-appearance: none;
                                            margin: 0;
                                        }

                                        .input-container input {
                                            border: none;
                                            box-sizing: border-box;
                                            outline: 0;
                                            padding: .75rem;
                                            position: relative;
                                            width: 100%;
                                        }

                                        input[type="date"]::-webkit-calendar-picker-indicator {
                                            background: transparent;
                                            bottom: 0;
                                            color: transparent;
                                            cursor: pointer;
                                            height: auto;
                                            left: 0;
                                            position: absolute;
                                            right: 0;
                                            top: 0;
                                            width: auto;
                                        }
                                    </style>

                                    <!-- for package -->
                                    <div id="forPackage" style="display:block;">

                                        <form onsubmit="return validatePackage();" action="<?php echo site_url(); ?>query/addQueryPackage" method="post">

                                            <input type="hidden" name="queryId" value="<?php echo $b2bDetails->query_id; ?>">
                                            <input type="hidden" name="created_date" value="<?php echo date('Y-m-d'); ?>">
                                            <input type="hidden" name="colorRadio" id="service_type" value="Package">
                                            <div class="row mt-4 mr-3 ml-3 mt-3">
                                                <div class="col">
                                                    <div class="d-flex justify-content-around">
                                                        <label for="">Check In</label>
                                                        <label for="">Check Out</label>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <div class="datepicker date input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                            <input type="date" min="<?php echo date("Y-m-d") ?>" placeholder="Choose Date" class="form-control" id="specificDate1" name="specificDate">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="fa fa-moon"></i>
                                                                    <input type="number" min="1" style="width: 18px;text-align: center;" placeholder=" " id="goingFrom1" name="night" required autocomplete="off" />
                                                                </span>
                                                            </div>
                                                            <input type="date" min="<?php echo date("Y-m-d") ?>" placeholder="Choose Date" class="form-control" id="endDate1" name="noDaysFrom">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col">
                                                    <label for="">Country</label> <br />

                                                    <input class="package_inputs" type="text" placeholder=" " name="country[]" id="country" value="United Arab Emirates" required autocomplete="off" />
                                                </div>
                                                <div class="col">
                                                    <label for="">City</label> <br />
                                                    <select style="padding: 0px;" class="package_inputs" id="city" required name="goingFrom[]">
                                                        <option value="">Select City</option>
                                                        <option selected value="Dubai">Dubai</option>
                                                        <option value="AbuDhabi">Abu Dhabi</option>
                                                        <option value="Sharjah">Sharjah</option>
                                                        <option value="Ajman">Ajman</option>

                                                        <option value="Umm Al-Quwain">Umm Al-Quwain</option>
                                                        <option value="Fujairah">Fujairah</option>
                                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                        <option value="Al Ain">Al Ain</option>
                                                    </select>
                                                </div>

                                            </div>

                                            

                                            <div class="row mt-4 mr-3 ml-3 mt-3">

                                                <div class="col">
                                                    <label for="">Hotel Rating</label> <br />
                                                    <select style="padding: 0px;" class="package_inputs" id="rating" required name="hotelPrefrence[]">
                                                        <option value="">Select Rating</option>
                                                        <option value="1">??? 1</option>
                                                        <option value="2">?????? 2</option>
                                                        <option selected value="3">????????? 3</option>
                                                        <option value="4">???????????? 4</option>
                                                        <option value="5">??????????????? 5</option>
                                                    </select>
                                                </div>


                                                <div class="col">
                                                    <label for="">Quotation Currency</label><br />

                                                    <select name="invoice_currency" id="currency" class="Travelers-select-package-values">
                                                        <option value="AED">AED</option>
                                                        <option value="USD">USD</option>

                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="">No. of Room</label><br />

                                                    <input type="text" readonly id="room_txt_data" class="package_inputs" value="0 Room (0 Adults, 0 Children )">

                                                    <div class="border-1 form-group mx-auto rounded-lg row w-75" id="select_no_of_rooms" style="display: none;">
                                                        <div class="form-group row">
                                                            <div class="col d-flex mt-2">
                                                                <label class="col-form-label text-nowrap mx-2">No. of Room</label>
                                                                <input type="number" name="rooms" id="no_of_rooms" onchange="showRoomData(this.value)" value="1" required class=" form-control" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mx-auto" id="no_of_room_for" style="display: none;">
                                                        </div>

                                                    </div>


                                                </div>

                                                <input type="hidden" name="adult" id="adult_total_count">
                                                <input type="hidden" name="child" id="child_total_count">
                                                <input type="hidden" name="infant" id="infant_total_count">

                                                

                                            </div>

                                            <div id="addrows"></div>

                                                <div class="btn-group mt-4">
                                                    <a class="new_btn ml-0 px-4" onclick="addrows()">
                                                        Add City/Hotel
                                                    </a>
                                                </div>

                                            <div class="d-flex  justify-content-end mt-4 mb-4" style="margin-bottom:50px !important;margin-top:50px !important">
                                                <?php if (isset($buildpackage->queryId)) {
                                                    if ($buildpackage->type == 'Package') {
                                                    ?>
                                                        <a href="<?php echo site_url(); ?>query/buildPackage/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Transfer') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildTransfer/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Visa') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildVisa/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Hotel') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildHotel/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Excursion') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildExcursion/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Meals') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildMeals/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                <?php }
                                                }

                                                ?>

                                                <button type="submit" onclick="checkBoxRequired()" class="new_btn px-5 mr-4 ml-5">Submit</button>
                                            </div>
                                        </form>

                                    </div>

                                    <!-- for excursion -->

                                    <div id="forExcursion" style="display:none;">

                                        <form onsubmit="return validatePackage();" action="<?php echo site_url(); ?>query/addQueryPackage" method="post">

                                            <input type="hidden" name="queryId" value="<?php echo $b2bDetails->query_id; ?>">
                                            <input type="hidden" name="created_date" value="<?php echo date('Y-m-d'); ?>">
                                            <input type="hidden" name="colorRadio" id="service_type22" value="">

                                            <div class="row mt-4 mr-3 ml-3 mt-3">

                                                <div class="col">
                                                    <div class="d-flex justify-content-around">
                                                        <label for="">Tour Date</label>
                                                        <label for="">End Date</label>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <div class="datepicker date input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                            <input type="date" min="<?php echo date("Y-m-d") ?>" placeholder="Choose Date" class="form-control" id="specificDate22" name="specificDate">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="fa fa-moon"></i>
                                                                    <input type="number" min="1" style="width: 18px;text-align: center;" placeholder=" " id="goingFrom22" name="night" required autocomplete="off" />
                                                                </span>
                                                            </div>
                                                            <input type="date" min="<?php echo date("Y-m-d") ?>" placeholder="Choose Date" class="form-control" id="endDate22" name="noDaysFrom">
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col">
                                                    <label for="">Country</label> <br />

                                                    <input class="package_inputs" type="text" placeholder=" " name="country[]" value="United Arab Emirates" required autocomplete="off" />
                                                </div>
                                                <div class="col">
                                                    <label for="">City</label> <br />
                                                    <select style="padding: 0px;" class="package_inputs" required name="goingFrom[]">
                                                        <option value="">Select City</option>
                                                        <option selected value="Dubai">Dubai</option>
                                                        <option value="AbuDhabi">Abu Dhabi</option>
                                                        <option value="Sharjah">Sharjah</option>
                                                        <option value="Ajman">Ajman</option>

                                                        <option value="Umm Al-Quwain">Umm Al-Quwain</option>
                                                        <option value="Fujairah">Fujairah</option>
                                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                        <option value="Al Ain">Al Ain</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div id="addrows"></div>

                                            <div class="row mt-4 mr-3 ml-3 mt-3">
                                                <div class="col">
                                                    <label for="">Quotation Currency</label>

                                                    <select name="invoice_currency" id="" class="Travelers-select-package-values">
                                                        <option value="AED">AED</option>
                                                        <option value="USD">USD</option>

                                                    </select>
                                                </div>

                                                <div class="col">
                                                    <label for="">No. Adult</label><br>
                                                    <input class="package_inputs" type="number" value="2" placeholder="" name="adult" required autocomplete="off" />
                                                </div>

                                                <div class="col">
                                                    <label for="">No. Child</label><br>
                                                    <input class="package_inputs" type="number" onchange="childAgeDivEx('#child22')" value="0" placeholder="" name="child" id="child22" required autocomplete="off" />
                                                    <div id="child_ages_ex_div_main" style="margin: 0px 2rem 0px 2rem;" class="px-3">
                                                    <div id="child_ages_ex_div"  class="border d-flex flex-column rounded-lg" style="display:none"></div>
                                                    </div>
                                                </div>

                                                <input id="child_age22" name="child_age" class="Travelers-select-package-values" type="hidden" value="0" />

                                                <div class="col">
                                                    <label for="">No. Infant</label><br>
                                                    <input class="package_inputs" type="number" value="0" placeholder="" name="infant" required autocomplete="off" />
                                                </div>


                                            </div>

                                            <div class="d-flex  justify-content-end mt-4 mb-4" style="margin-bottom:50px !important;margin-top:50px !important">
                                                <?php if (isset($buildpackage->queryId)) {
                                                    if ($buildpackage->type == 'Package') {
                                                ?>
                                                        <a href="<?php echo site_url(); ?>query/buildPackage/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Transfer') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildTransfer/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Visa') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildVisa/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Hotel') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildHotel/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Excursion') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildExcursion/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Meals') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildMeals/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                <?php }
                                                }

                                                ?>

                                                <button type="submit" onclick="checkBoxRequired()" class="new_btn px-5 mr-4 ml-5">Submit</button>
                                            </div>
                                        </form>
                                    </div>



                                    <!-- for transfer -->


                                    <div id="forTransEx" style="display:none;">


                                        <form onsubmit="return validatePackage();" action="<?php echo site_url(); ?>query/addQueryPackage" method="post">

                                            <input type="hidden" name="queryId" value="<?php echo $b2bDetails->query_id; ?>">
                                            <input type="hidden" name="created_date" value="<?php echo date('Y-m-d'); ?>">
                                            <input type="hidden" name="colorRadio" id="service_type2" value="">

                                            <div class="row mt-4 mr-3 ml-3 mt-3">
                                                <div class="col">
                                                    <label for="">Service Date</label> <br />
                                                    <input class="package_inputs" type="date" min="<?php echo date("Y-m-d") ?>" placeholder=" " id="specificDate11" name="specificDate" autocomplete="off" required />
                                                </div>
                                                <!-- <div class="col">
                                                        <label for="">Nights</label> <br /> -->

                                                <input class="package_inputs" type="hidden" value="1" id="goingFrom11" name="night" required autocomplete="off" />
                                                <!-- </div> -->
                                                <div class="col" hidden>
                                                    <label for="">Check Out</label> <br />

                                                    <input class=" package_inputs" type="hidden" placeholder=" " id="endDate11" name="noDaysFrom" autocomplete="off" />
                                                </div>


                                                <div class="col">
                                                    <label for="">Country</label> <br />

                                                    <input class="package_inputs" type="text" placeholder=" " name="country[]" value="United Arab Emirates" required autocomplete="off" />
                                                </div>
                                                <div class="col">
                                                    <label for="">City</label> <br />
                                                    <select style="padding: 0px;" class="package_inputs" required name="goingFrom[]">
                                                        <option value="">Select City</option>
                                                        <option selected value="Dubai">Dubai</option>
                                                        <option value="AbuDhabi">Abu Dhabi</option>
                                                        <option value="Sharjah">Sharjah</option>
                                                        <option value="Ajman">Ajman</option>

                                                        <option value="Umm Al-Quwain">Umm Al-Quwain</option>
                                                        <option value="Fujairah">Fujairah</option>
                                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                        <option value="Al Ain">Al Ain</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div id="addrows"></div>

                                            <div class="row mt-4 mr-3 ml-3 mt-3">
                                                <div class="col">
                                                    <label for="">Quotation Currency</label>

                                                    <select name="invoice_currency" id="" class="Travelers-select-package-values">
                                                        <option value="AED">AED</option>
                                                        <option value="USD">USD</option>

                                                    </select>
                                                </div>

                                                <div class="col">
                                                    <label for="">No. Adult</label><br>
                                                    <input class="package_inputs" type="number" placeholder="" name="adult" required autocomplete="off" />
                                                </div>

                                                <div class="col">
                                                    <label for="">No. Child</label><br>
                                                    <input class="package_inputs" type="number" placeholder="" value="0" name="child" id="child11" required autocomplete="off" />
                                                </div>

                                                <input id="child_age" name="child_age" class="Travelers-select-package-values" type="hidden" value="0" />
                                                <input class="package_inputs" type="hidden" placeholder="" value="0" name="infant" required autocomplete="off" />

                                            </div>

                                            <div class="d-flex  justify-content-end mt-4 mb-4" style="margin-bottom:50px !important;margin-top:50px !important">
                                                <?php if (isset($buildpackage->queryId)) {
                                                    if ($buildpackage->type == 'Package') {
                                                ?>
                                                        <a href="<?php echo site_url(); ?>query/buildPackage/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Transfer') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildTransfer/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Visa') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildVisa/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Hotel') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildHotel/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Excursion') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildExcursion/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Meals') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildMeals/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                <?php }
                                                }

                                                ?>

                                                <button type="submit" onclick="checkBoxRequired()" class="new_btn px-5 mr-4 ml-5">Submit</button>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- for visa -->

                                    <div id="forVisa" style="display:none;">

                                        <form onsubmit="return validatePackage();" action="<?php echo site_url(); ?>query/addQueryPackage" method="post">

                                            <input type="hidden" name="queryId" value="<?php echo $b2bDetails->query_id; ?>">
                                            <input type="hidden" name="created_date" value="<?php echo date('Y-m-d'); ?>">
                                            <input type="hidden" name="colorRadio" id="service_type3" value="">

                                            <div class="row mt-4 mr-3 ml-3 mt-3">
                                                <div class="col">
                                                    <label for="">Date of Arrival</label> <br />
                                                    <input class="package_inputs" type="date" min="<?php echo date("Y-m-d") ?>" placeholder=" " id="doa_id" name="doa" autocomplete="off" required />
                                                </div>

                                                <div class="col">
                                                    <label for="">No of Stay</label> <br />
                                                    <input class="package_inputs" type="number" min="1" placeholder=" " id="no_of_stay" name="no_of_stay" required autocomplete="off" />
                                                </div>

                                                <div class="col">
                                                    <label for="">Date of Departure</label> <br />
                                                    <input class=" package_inputs" type="date" min="<?php echo date("Y-m-d") ?>" placeholder=" " id="dod_id" name="dod" autocomplete="off" />
                                                </div>


                                                <div class="col">
                                                    <label for="">Purpose</label> <br />
                                                    <select style="padding: 0px;" class="package_inputs" required name="visa_purpose">
                                                        <option value="Leisure">Leisure</option>
                                                        <option value="Business Meetings">Business Meetings</option>
                                                        <option value="Business Set Up">Business Set Up</option>
                                                        <option value="Employment">Employment</option>
                                                    </select>
                                                    </select>
                                                </div>

                                                <div class="col">
                                                    <label for="">Country</label> <br />
                                                    <input class="package_inputs" type="text" placeholder=" " name="country[]" value="United Arab Emirates" required autocomplete="off" />
                                                </div>
                                                <div class="col">
                                                    <label for="">City</label> <br />
                                                    <select style="padding: 0px;" class="package_inputs" required name="goingFrom[]">
                                                        <option value="">Select City</option>
                                                        <option selected value="Dubai">Dubai</option>
                                                        <option value="AbuDhabi">Abu Dhabi</option>
                                                        <option value="Sharjah">Sharjah</option>
                                                        <option value="Ajman">Ajman</option>

                                                        <option value="Umm Al-Quwain">Umm Al-Quwain</option>
                                                        <option value="Fujairah">Fujairah</option>
                                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                        <option value="Al Ain">Al Ain</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div id="addrows"></div>

                                            <div class="row mt-4 mr-3 ml-3 mt-3">
                                                <div class="col">
                                                    <label for="">Quotation Currency</label>

                                                    <select name="invoice_currency" id="" class="Travelers-select-package-values">
                                                        <!-- <option value="">Select Currency</option> -->
                                                        <option value="AED">AED</option>
                                                        <option value="USD">USD</option>

                                                    </select>
                                                </div>

                                                <div class="col">
                                                    <label for="">No. Adult</label><br>
                                                    <input class="package_inputs" type="number" placeholder="" value="2" name="adult" required autocomplete="off" />
                                                </div>

                                                <div class="col">
                                                    <label for="">No. Child</label><br>
                                                    <input class="package_inputs" type="number" placeholder="" value="0" name="child" id="child2" required autocomplete="off" />
                                                </div>

                                                <input id="child_age" name="child_age" class="Travelers-select-package-values" type="hidden" value="0" />

                                                <div class="col">
                                                    <label for="">No. Infant</label><br>
                                                    <input class="package_inputs" type="number" placeholder="" value="0" name="infant" required autocomplete="off" />
                                                </div>


                                            </div>

                                            <div class="d-flex  justify-content-end mt-4 mb-4" style="margin-bottom:50px !important;margin-top:50px !important">
                                                <?php if (isset($buildpackage->queryId)) {
                                                    if ($buildpackage->type == 'Package') {
                                                ?>
                                                        <a href="<?php echo site_url(); ?>query/buildPackage/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Transfer') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildTransfer/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Visa') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildVisa/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Hotel') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildHotel/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Excursion') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildExcursion/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Meals') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildMeals/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                <?php }
                                                }

                                                ?>

                                                <button type="submit" onclick="checkBoxRequired()" class="new_btn px-5 mr-4 ml-5">Submit</button>
                                            </div>
                                        </form>


                                    </div>

                                    <!-- for meals -->
                                    <div id="forMeals" style="display:none;">

                                        <form onsubmit="return validatePackage();" action="<?php echo site_url(); ?>query/addQueryPackage" method="post">

                                            <input type="hidden" name="queryId" value="<?php echo $b2bDetails->query_id; ?>">
                                            <input type="hidden" name="created_date" value="<?php echo date('Y-m-d'); ?>">
                                            <input type="hidden" name="colorRadio" id="service_type4" value="">

                                            <div class="row mt-4 mr-3 ml-3 mt-3">
                                                <div class="col">
                                                    <label for="">From Date</label> <br />

                                                    <input class="package_inputs" type="date" min="<?php echo date("Y-m-d") ?>" placeholder=" " id="specificDate12" name="specificDate" autocomplete="off" required />
                                                </div>

                                                <input class="package_inputs" type="hidden" value="0" min="1" placeholder=" " value="0" id="goingFrom12" name="night" required autocomplete="off" />

                                                <div class="col">
                                                    <label for="">To Date</label> <br />

                                                    <input class=" package_inputs" type="date" min="<?php echo date("Y-m-d") ?>" placeholder=" " id="endDate12" name="noDaysFrom" autocomplete="off" />
                                                </div>
                                                <div class="col">
                                                    <label for="">Country</label> <br />

                                                    <input class="package_inputs" type="text" placeholder=" " name="country[]" value="United Arab Emirates" required autocomplete="off" />
                                                </div>
                                                <div class="col">
                                                    <label for="">City</label> <br />
                                                    <select style="padding: 0px;" class="package_inputs" required name="goingFrom[]">
                                                        <option value="">Select City</option>
                                                        <option selected value="Dubai">Dubai</option>
                                                        <option value="AbuDhabi">Abu Dhabi</option>
                                                        <option value="Sharjah">Sharjah</option>
                                                        <option value="Ajman">Ajman</option>

                                                        <option value="Umm Al-Quwain">Umm Al-Quwain</option>
                                                        <option value="Fujairah">Fujairah</option>
                                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                        <option value="Al Ain">Al Ain</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="row mt-4 mr-3 ml-3 mt-3">
                                                <div class="col">
                                                    <label for="">Quotation Currency</label>

                                                    <select name="invoice_currency" id="" class="Travelers-select-package-values">
                                                        <option value="AED">AED</option>
                                                        <option value="USD">USD</option>

                                                    </select>
                                                </div>
                                                <input class="rooms" type="hidden" placeholder=" " name="rooms" />

                                                <div class="col">
                                                    <label for="">No. Adult</label><br>
                                                    <input class="package_inputs" type="number" placeholder="" name="adult" required autocomplete="off" />
                                                </div>

                                                <div class="col">
                                                    <label for="">No. Child</label><br>
                                                    <input class="package_inputs" type="number" placeholder="" name="child" id="child3" required autocomplete="off" />
                                                </div>

                                                <div hidden id="child_age_div3" class="col" style="display:none;">
                                                    <label for="">Child Age</label><br>

                                                    <input id="child_age12" name="child_age" class="Travelers-select-package-values" type="text" value="0" />
                                                </div>

                                                <input id="infant" name="infant" class="Travelers-select-package-values" type="hidden" value="0" />

                                            </div>


                                            <div class="d-flex  justify-content-end mt-4 mb-4" style="margin-bottom:50px !important;margin-top:50px !important">
                                                <?php if (isset($buildpackage->queryId)) {
                                                    if ($buildpackage->type == 'Package') {
                                                ?>
                                                        <a href="<?php echo site_url(); ?>query/buildPackage/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Transfer') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildTransfer/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Visa') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildVisa/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Hotel') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildHotel/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Excursion') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildExcursion/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                    <?php } else if ($buildpackage->type == 'Meals') { ?>
                                                        <a href="<?php echo site_url(); ?>query/buildMeals/<?php echo $b2bDetails->query_id; ?>">

                                                            <button type="button" id="disabled-btn" class="blink_btn new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                        </a>
                                                <?php }
                                                }

                                                ?>

                                                <button type="submit" onclick="checkBoxRequired()" class="new_btn px-5 mr-4 ml-5">Submit</button>
                                            </div>
                                        </form>

                                    </div>



                                </div>







                            </div>

                        </div>

                    </div>

                    <?php $this->load->view('footer'); ?>

                    <script>
                        $('input[name="colorRadio1"]').change(function(e) {
                            const valueType = $(this).attr("value");
                            console.log("???? ~ file: package.php ~ line 834 ~ $ ~ valueType", valueType)
                            if (valueType == "Excursion") {
                                document.getElementById("forExcursion").style.display = "block";
                                document.getElementById("forTransEx").style.display = "none";
                                document.getElementById("forPackage").style.display = "none";
                                document.getElementById("forVisa").style.display = "none";
                                document.getElementById("forMeals").style.display = "none";
                                document.getElementById("service_type22").value = valueType;

                            } else if (valueType == "Transfer") {
                                document.getElementById("forPackage").style.display = "none";
                                document.getElementById("forExcursion").style.display = "none";
                                document.getElementById("forTransEx").style.display = "block";
                                document.getElementById("forVisa").style.display = "none";
                                document.getElementById("forMeals").style.display = "none";
                                document.getElementById("service_type2").value = valueType;

                            } else if (valueType == "Package" || valueType == "Hotel") {
                                document.getElementById("forPackage").style.display = "block";
                                document.getElementById("forTransEx").style.display = "none";
                                document.getElementById("forExcursion").style.display = "none";
                                document.getElementById("forVisa").style.display = "none";
                                document.getElementById("forMeals").style.display = "none";
                                document.getElementById("service_type").value = valueType;


                            } else if (valueType == "Visa") {
                                document.getElementById("forVisa").style.display = "block";
                                document.getElementById("forTransEx").style.display = "none";
                                document.getElementById("forExcursion").style.display = "none";
                                document.getElementById("forPackage").style.display = "none";
                                document.getElementById("forMeals").style.display = "none";
                                document.getElementById("service_type3").value = valueType;


                            } else if (valueType == "Meals") {
                                document.getElementById("forMeals").style.display = "block";
                                document.getElementById("forVisa").style.display = "none";
                                document.getElementById("forExcursion").style.display = "none";
                                document.getElementById("forTransEx").style.display = "none";
                                document.getElementById("forPackage").style.display = "none";
                                document.getElementById("service_type4").value = valueType;

                            }
                        });

                        function checkBoxRequired() {


                            if ($('.hotelRating').filter(':checked').length < 1) {

                                let conf_number = $('input[name^="hotelPrefrence"]').each(function() {
                                    $(this).attr('required', 'required');
                                });
                                return false;
                            } else {
                                let conf_number = $('input[name^="hotelPrefrence"]').each(function() {
                                    $(this).removeAttr('required');
                                });
                            }
                        }
                    </script>

                    <script src="<?php echo base_url(); ?>public/js/validate.js"></script>
                    <script>
                        $(document).ready(function() {

                            // child_age
                            $("#child").change(function() {
                                var child = $("#child").val();
                                if (child > 0) {
                                    $("#child_age_div").attr('style', 'display:block');
                                } else {
                                    $("#child_age_div").attr('style', 'display:none');
                                }

                            });

                            $("#child1").change(function() {
                                var child = $("#child1").val();
                                if (child > 0) {
                                    $("#child_age_div1").attr('style', 'display:block');
                                } else {
                                    $("#child_age_div1").attr('style', 'display:none');
                                }

                            });

                            $("#child2").change(function() {
                                var child = $("#child2").val();
                                if (child > 0) {
                                    $("#child_age_div2").attr('style', 'display:block');
                                } else {
                                    $("#child_age_div2").attr('style', 'display:none');
                                }

                            });


                            $("#child3").change(function() {
                                var child = $("#child3").val();
                                if (child > 0) {
                                    $("#child_age_div3").attr('style', 'display:block');
                                } else {
                                    $("#child_age_div3").attr('style', 'display:none');
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

                            });

                            $("#goingFrom22").change(function() {

                                var checkindate = $("#specificDate22").val();

                                var someDate = new Date(checkindate);
                                var numberOfDaysToAdd = $("#goingFrom22").val();

                                someDate.setDate(someDate.getDate() + parseInt(numberOfDaysToAdd));
                                var dateFormated = someDate.toISOString().substr(0, 10);
                                $("#endDate22").val(dateFormated);

                            });

                            $("#goingFrom11").change(function() {

                                var checkindate = $("#specificDate11").val();

                                var someDate = new Date(checkindate);
                                var numberOfDaysToAdd = $("#goingFrom11").val();

                                someDate.setDate(someDate.getDate() + parseInt(numberOfDaysToAdd));
                                var dateFormated = someDate.toISOString().substr(0, 10);
                                $("#endDate11").val(dateFormated);

                            });

                            $("#no_of_stay").change(function() {

                                var checkindate = $("#doa_id").val();

                                var someDate = new Date(checkindate);
                                var numberOfDaysToAdd = $("#no_of_stay").val();

                                someDate.setDate(someDate.getDate() + parseInt(numberOfDaysToAdd)); //number  of days to add, e.x. 15 days
                                var dateFormated = someDate.toISOString().substr(0, 10);
                                $("#dod_id").val(dateFormated);

                            });



                        })


                        var faqs_row = 0;

                        function addrows() {
                            // var add = ' <div id="faqs-row' + faqs_row + '" class="row mt-4 mr-3 ml-3"> <div class="col"> <label class="input"> <input class="input__field fname all-width" type="text" placeholder=" "  name="country[]" value="United Arab Emirates" autocomplete="off" /> <span class="input__label">Country</span> </label> <span id="spanGoingFrom" class="spanCompany"></span> </div> <div class="col"> <select class="form-control" id="goingFrom"  name="goingFrom[]"> <option>Select City</option> <option selected value="Dubai">Dubai</option> <option value="AbuDhabi">Abu Dhabi</option> <option value="Sharjah">Sharjah</option> <option value="Ajman">Ajman</option>  <option value="Umm Al-Quwain">Umm Al-Quwain</option> <option value="Fujairah">Fujairah</option> <option value="Ras Al Khaimah">Ras Al Khaimah</option> <option value="Al Ain">Al Ain</option> </select> </div> <div class="col"> <label for="">Hotel Ratings :</label> <input type="checkbox" value="1" name="hotelPrefrence[]" class="mr-2 ml-3">1 <input type="checkbox" value="2" name="hotelPrefrence[]" class="mr-2 ml-3">2 <input type="checkbox" value="3" name="hotelPrefrence[]" class="mr-2 ml-3">3 <input type="checkbox" value="4" name="hotelPrefrence[]" class="mr-2 ml-3">4 <input type="checkbox"value="5" name="hotelPrefrence[]" class="mr-2 ml-3">5 </div> <button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i></button></div></div>';

                            var temp = `
                           
                            <div id="${'faqs_row'+faqs_row}"> 
                            <hr class="bg-b-black" />
                            <div class="row mt-4 mr-3 ml-3 mt-3">
                                                <div class="col">
                                                    <div class="d-flex justify-content-around">
                                                        <label for="">Check In</label>
                                                        <label for="">Check Out</label>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <div class="datepicker date input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                            <input type="date" min="<?php echo date("Y-m-d") ?>" placeholder="Choose Date" class="form-control" id="specificDate1${'faqs_row'+faqs_row}" name="specificDate">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text"><i class="fa fa-moon"></i>
                                                                    <input type="number" min="1" style="width: 18px;text-align: center;" placeholder=" " id="goingFrom1${'faqs_row'+faqs_row}" name="night" required autocomplete="off" />
                                                                </span>
                                                            </div>
                                                            <input type="date" min="<?php echo date("Y-m-d") ?>" placeholder="Choose Date" class="form-control" id="endDate1${'faqs_row'+faqs_row}" name="noDaysFrom">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col">
                                                    <label for="">Country</label> <br />

                                                    <input class="package_inputs" type="text" placeholder=" " name="country[]" id="country${'faqs_row'+faqs_row}" value="United Arab Emirates" required autocomplete="off" />
                                                </div>
                                                <div class="col">
                                                    <label for="">City</label> <br />
                                                    <select style="padding: 0px;" class="package_inputs" id="city${'faqs_row'+faqs_row}" required name="goingFrom[]">
                                                        <option value="">Select City</option>
                                                        <option selected value="Dubai">Dubai</option>
                                                        <option value="AbuDhabi">Abu Dhabi</option>
                                                        <option value="Sharjah">Sharjah</option>
                                                        <option value="Ajman">Ajman</option>

                                                        <option value="Umm Al-Quwain">Umm Al-Quwain</option>
                                                        <option value="Fujairah">Fujairah</option>
                                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                        <option value="Al Ain">Al Ain</option>
                                                    </select>
                                                </div>

                                            </div>

                                            

                                            <div class="row mt-4 mr-3 ml-3 mt-3">

                                                <div class="col">
                                                    <label for="">Hotel Rating</label> <br />
                                                    <select style="padding: 0px;" class="package_inputs" id="rating${'faqs_row'+faqs_row}${'faqs_row'+faqs_row}" required name="hotelPrefrence[]">
                                                        <option value="">Select Rating</option>
                                                        <option value="1">??? 1</option>
                                                        <option value="2">?????? 2</option>
                                                        <option selected value="3">????????? 3</option>
                                                        <option value="4">???????????? 4</option>
                                                        <option value="5">??????????????? 5</option>
                                                    </select>
                                                </div>


                                                <div class="col">
                                                    <label for="">Quotation Currency</label><br />

                                                    <select name="invoice_currency" id="currency${'faqs_row'+faqs_row}" class="Travelers-select-package-values">
                                                        <option value="AED">AED</option>
                                                        <option value="USD">USD</option>

                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="">No. of Room</label><br />

                                                    <input type="text" readonly id="room_txt_data${'faqs_row'+faqs_row}" class="package_inputs" value="0 Room (0 Adults, 0 Children )">

                                                    <div class="border-1 form-group mx-auto rounded-lg row w-75" id="select_no_of_rooms${'faqs_row'+faqs_row}" style="display: none;">
                                                        <div class="form-group row">
                                                            <div class="col d-flex mt-2">
                                                                <label class="col-form-label text-nowrap mx-2">No. of Room</label>
                                                                <input type="number" name="rooms" id="no_of_rooms${'faqs_row'+faqs_row}" value="1" required class=" form-control" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mx-auto" id="no_of_room_for${'faqs_row'+faqs_row}" style="display: none;">
                                                        </div>

                                                    </div>

                                                    <button class="btn btn-danger btn-xs" onclick="removeElement(${'faqs_row'+faqs_row})"><i class="fa fa-trash"></i></button>

                                                </div>
                                                </div>
                                                `;

                            var add = `<div class="d-flex" id="${'faqs_row'+faqs_row}"> 
                                            <div class="col">
                                            <label for="">Country</label> <br/>
                                                        <input class="package_inputs" type="text" placeholder=" " name="country[]" value="United Arab Emirates" required autocomplete="off" />
                                                </div>
                                                <div class="col">
                                            <label for="">City</label> <br/>
                                                    <select style="padding: 0px;" class="package_inputs" required name="goingFrom[]">
                                                        <option value="">Select City</option>
                                                        <option selected value="Dubai">Dubai</option>
                                                        <option value="AbuDhabi">Abu Dhabi</option>
                                                        <option value="Sharjah">Sharjah</option>
                                                        <option value="Ajman">Ajman</option>
                                                        
                                                        <option value="Umm Al-Quwain">Umm Al-Quwain</option>
                                                        <option value="Fujairah">Fujairah</option>
                                                        <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                        <option value="Al Ain">Al Ain</option>
                                                    </select>
                                                </div>

                                                <div class="col">
                                                <label for="">Rating</label> <br/>
                                                    <select style="padding: 0px;" class="package_inputs" required name="hotelPrefrence[]">
                                                        <option value="">Select Rating</option>
                                                        <option value="1">??? 1</option>
                                                        <option value="2">?????? 2</option>
                                                        <option selected value="3">????????? 3</option>
                                                        <option value="4">???????????? 4</option>
                                                        <option value="5">??????????????? 5</option>
                                                    </select>
                                                    <button class="btn btn-danger btn-xs" onclick="removeElement(${'faqs_row'+faqs_row})"><i class="fa fa-trash"></i></button>
                                                    </div>
                                               
                                                </div>`;

                            // $('#addrows').append(add);
                            $('#addrows').append(temp);
                            faqs_row++;
                        }


                        //     $('input[type="radio"]').click(function(){
                        //      var inputValue = $(this).attr("value");
                        //      var targetBox = $("." + inputValue);
                        //      $(".box").not(targetBox).hide();
                        //      $(targetBox).show();
                        //     });
                        //     $('input[name="colorRadio"]:checked').chnge(function(){
                        //      var inputValue = $(this).attr("value");    
                        //      console.log("???? ~ file: package.php ~ line 624 ~ $ ~ inputValue", inputValue)
                        //    });
                        // $(document).ready(function(){
                        //    if (!$("input[name='colorRadio']:checked").val()) {
                        //         return false;
                        //     }
                        //     else {
                        //         $("input[name='colorRadio']:checked").addClass('sidebar-toggler');
                        //         $('.sidebar-toggler').prop('checked', true);
                        //     alert('One of the radio buttons is checked!');
                        //     }
                        // });

                        function removeElement(id) {
                            id.remove();
                        }
                    </script>

                    <style>
                        textarea:focus,
                        input:focus {
                            border-color: #80bdff !important;
                        }

                        .package_inputs {
                            width: 75%;
                            height: 5vh;
                            border: 1px solid gray;
                            color: gray;
                            border-radius: 4px;
                            padding: 5px;
                        }

                        .blink_btn {
                            animation-name: blinker;
                            animation-duration: 1s;
                            animation-timing-function: linear;
                            animation-iteration-count: infinite;
                        }

                        @keyframes blinker {
                            0% {
                                opacity: 1.0;
                            }

                            50% {
                                opacity: 0.0;
                            }

                            100% {
                                opacity: 1.0;
                            }
                        }
                    </style>

                    <script>
                        $(document).mouseup(function(e) {
                            var container = $("#select_no_of_rooms");

                            if (!container.is(e.target) && container.has(e.target).length === 0) {
                                container.hide();
                            }
                        });

                        function showRoomData(no_room) {
                            var adult_pax_count = 0;
                            var child_pax_count = 0;
                            var infant_pax_count = 0;

                            // $(".adult_count").each(function() {
                            //     var val = $(this).val();
                            //     adult_pax_count += parseInt($.trim(val));
                            // });

                            // $(".child_count").each(function() {
                            //     var val = $(this).val();
                            //     child_pax_count += parseInt($.trim(val));
                            // });

                            // $(".infant_count").each(function() {
                            //     var val = $(this).val();
                            //     infant_pax_count += parseInt($.trim(val));
                            // });

                            for (let index = 1; index <= no_room; index++) {
                                adult_pax_count += parseInt($('#adult_count'+index).val() == null ? 0 : $('#adult_count'+index).val());
                                child_pax_count += parseInt($('#child_count'+index).val() == null ? 0 : $('#child_count'+index).val());
                                infant_pax_count += parseInt($('#infant_count'+index).val() == null ? 0 : $('#infant_count'+index).val());
                            }

                            document.getElementById("adult_total_count").value = adult_pax_count;
                            document.getElementById("child_total_count").value = child_pax_count;
                            document.getElementById("infant_total_count").value = infant_pax_count;

                            document.getElementById("room_txt_data").value = `${no_room} Room (${adult_pax_count} Adults, ${child_pax_count} Children , ${infant_pax_count} Infant)`;

                        }
                        
                        function calPaxTotalCount() {
                            var adult_pax_count = 0;
                            $(".adult_count").each(function() {
                                var val = $(this).val();
                                adult_pax_count += parseInt($.trim(val));
                            });

                            var child_pax_count = 0;
                            $(".child_count").each(function() {
                                var val = $(this).val();
                                child_pax_count += parseInt($.trim(val));
                            });

                            var infant_pax_count = 0;
                            $(".infant_count").each(function() {
                                var val = $(this).val();
                                infant_pax_count += parseInt($.trim(val));
                            });

                            document.getElementById("adult_total_count").value = adult_pax_count;
                            document.getElementById("child_total_count").value = child_pax_count;
                            document.getElementById("infant_total_count").value = infant_pax_count;
                        }

                        $("#room_txt_data").click(function() {
                            $("#select_no_of_rooms").attr('style', 'display:block;border: 1px solid;');
                        });

                        $("#no_of_rooms").change(function() {
                            var no_of_rooms = $("#no_of_rooms").val();

                            if (no_of_rooms > 0) {
                                $("#no_of_room_for").attr('style', 'display:flex');


                                let data = '';
                                let ad_val;
                                for (let i = 1; i <= no_of_rooms; i++) {
                                    data += `
                                        <div class="form-group">
                                        <div class="col d-flex mt-2">
                                            <label class="border-0 mx-4 w-25"></label>
                                            <label class="form-control px-2 border-0 h6">Adult</label>
                                            <label class="form-control px-2 border-0 h6">Child</label>
                                            <label class="form-control px-2 border-0 h6">Infant</label>
                                        </div>
                                        <div class="col d-flex mt-2">
                                            
                                        <label class="col-form-label text-nowrap mx-2">Room ${i}</label>
                                            <input type="number" min=0 value="${i > 1 ? 0 : 2}" class=" form-control mx-2 adult_count" onchange="showRoomData(${no_of_rooms})" value="2" name="adult_count[]" id="adult_count${i}" />
                                            <input type="number" min=0 value="0" class=" form-control mx-1 child_count" name="child_count[]" onchange="childAgeDiv(child_ages_div${i},child_count${i})" id="child_count${i}" />
                                            <input type="number" min=0 value="0" class=" form-control mx-1 infant_count" name="infant_count[]" onchange="showRoomData(${no_of_rooms})" id="infant_count${i}" />
                                        </div>
                                        </div>
                                        <div class="form-group row w-100" id="child_ages_div${i}" style="display: none;"></div>
                                        `;
                                }
                                $("#no_of_room_for").empty().append(data);

                            } else {
                                $("#no_of_room_for").attr('style', 'display:none');
                            }

                        });

                        function addRoomDefualt(){
                            var no_of_rooms = $("#no_of_rooms").val();

                            if (no_of_rooms > 0) {
                                $("#no_of_room_for").attr('style', 'display:flex');


                                let data = '';
                                let ad_val;
                                for (let i = 1; i <= no_of_rooms; i++) {
                                    data += `
                                        <div class="form-group">
                                        <div class="col d-flex mt-2">
                                            <label class="border-0 mx-4 w-25"></label>
                                            <label class="form-control px-2 border-0 h6">Adult</label>
                                            <label class="form-control px-2 border-0 h6">Child</label>
                                            <label class="form-control px-2 border-0 h6">Infant</label>
                                        </div>
                                        <div class="col d-flex mt-2">
                                            
                                        <label class="col-form-label text-nowrap mx-2">Room ${i}</label>
                                            <input type="number" min=0 value="${i > 1 ? 0 : 2}" class=" form-control mx-2 adult_count" onchange="showRoomData(${no_of_rooms})" name="adult_count[]" id="adult_count${i}" />
                                            <input type="number" min=0 value="0" class=" form-control mx-1 child_count" name="child_count[]" onchange="childAgeDiv(child_ages_div${i},child_count${i})" id="child_count${i}" />
                                            <input type="number" min=0 value="0" class=" form-control mx-1 infant_count" name="infant_count[]" onchange="showRoomData(${no_of_rooms})" id="infant_count${i}" />
                                        </div>
                                        </div>
                                        <div class="form-group row w-100" id="child_ages_div${i}" style="display: none;"></div>
                                        `;
                                }
                                $("#no_of_room_for").empty().append(data);

                            } else {
                                $("#no_of_room_for").attr('style', 'display:none');
                            }
                        }
                        addRoomDefualt();
                        showRoomData(1);

                        function childAgeDiv(childDiv, childNo) {
                            let div_id = $(childDiv).attr('id').replace('child_ages_div', '');
                            var no_of_rooms = $("#no_of_rooms").val();
                            showRoomData(no_of_rooms);

                            var child = $(childNo).val();
                            $(childDiv).attr('style', 'display:block');

                            if (child > 0) {
                                $(childDiv).attr('style', 'display:block');


                                let data = '';
                                for (let i = 1; i <= child; i++) {
                                    data += `
                  <div class="d-flex col mx-3"> 
                            <div class="col d-flex ">
                                <label class="col-1 col-form-label text-nowrap">child ${i}</label>
                                <input type="text" class="form-control ml-5" placeholder="Age ${i} Age" name="child_age_count[]" id="child_age">
                                <input type="radio" class="form-control" id="child_with_bed${i}" name="child_with_or_wo_count[${div_id}][${i}]" value="1" checked><label for="html">CWB</label>
                                <input type="radio" class="form-control" id="child_with_out_bed${i}" name="child_with_or_wo_count[${div_id}][${i}]" value="0"><label for="html">CNB</label>
                            </div></div>`;
                                }
                                $(childDiv).empty().append(data);
                            } else {
                                $(childDiv).attr('style', 'display:none');
                            }
                        }

                        function childAgeDivEx(childNo) {
                            let childDiv = $('#child_ages_ex_div');
                            var child = $(child22).val();
                            
                            if (child > 0) {
                                $(childDiv).attr('style', 'display:block');
                                $('#child_ages_ex_div_main').attr('style', 'display:flex');
                                let data = '';
                                for (let i = 1; i <= child; i++) {
                                    data += `
                                    <div class=""> 
                                        <div class="col d-flex ">
                                        <label class="col-1 col-form-label text-nowrap">child ${i}</label>
                                        <input type="text" class="form-control ml-5" placeholder="Child ${i} Age" name="child_age_count[]" id="child_age">
                                    </div></div>`;
                                }
                                $(childDiv).empty().append(data);
                            } else {
                                $('#child_ages_ex_div_main').attr('style', 'display:none');
                                $('#child_ages_ex_div').attr('style', 'display:none');
                            }
                        }


                        $("#child_no").change(function() {
                            var child = $("#child_no").val();
                            if (child > 0) {
                                $("#child_ages_div").attr('style', 'display:block');


                                let data = '';
                                for (let i = 1; i <= child; i++) {
                                    data += `
                  <div class="d-flex mx-5"> 
                            <div class="col d-flex ">
                                <label class="col-1 col-form-label text-nowrap">child ${i} </label>
                                <input type="text" class="form-control ml-5" name="child_age_count[]" id="child_age">
                            </div></div>`;
                                }

                                $("#child_ages_div").empty().append(data);
                            } else {
                                $("#child_age_div").attr('style', 'display:none');
                            }

                        });
                    </script>