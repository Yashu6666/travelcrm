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
                            <div class="page-title">Package</div>
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
                        <div class="card card-box p-2">
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



                        </div>
                        <div class="card card-box">
                            <div class="card-head card-head-new">
                                <p>New Query</p>

                            </div>
                            <div class="card-body row ">
                                <div class="card-body-head">
                                    <!-- <div class="first">
              <label><input type="radio" name="colorRadio" value="Package" checked=""> Package</label>
              <label><input type="radio" name="colorRadio" value="Transfer"> Transfer</label>
              <label><input type="radio" name="colorRadio" value="Visa"> Visa</label> 

              <label><input type="radio" name="colorRadio" value="Hotel">Hotel</label> 
              <label><input type="radio" name="colorRadio" value="Excursion">Excursion</label> 
            </div> -->


                                    <!-- <div class="second mt-4 mb-3 ml-4">
              <b>Lead Info :</b>
              <div class="second-box d-flex justify-content-center align-items-center" style="margin-left: 100px;">
               <div class="second-box-innerDiv">Going To : <br> Going From :</div>
               <div class="second-box-innerDiv">No Of Day(s) : <br> Travel Date :</div>
               <div class="second-box-innerDiv">PAX : NA</div>
              </div>
             </div> -->


                                    <!-- ===================PACKAGE ============================= -->

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
                                        <form onsubmit="return validatePackage();" action="<?php echo site_url(); ?>query/addQueryPackage" method="post">

                                            <input type="hidden" name="queryId" value="<?php echo $b2bDetails->query_id; ?>">
                                            <input type="hidden" name="created_date" value="<?php echo date('Y-m-d'); ?>">
                                            <div class="first">
                                                <label><input type="radio" name="colorRadio" value="Package" checked=""><img src="<?php echo base_url(); ?>public/image/package.png" style="width: 35px;" /> Package</label>
                                                <label><input type="radio" name="colorRadio" value="Hotel"><img src="<?php echo base_url(); ?>public/image/hotel.png" style="width: 32px;" /> Hotel</label>
                                                <label><input type="radio" name="colorRadio" value="Transfer"><img src="<?php echo base_url(); ?>public/image/transfer.png" style="width: 50px;" /> Transfer</label>
                                                <label><input type="radio" name="colorRadio" value="Excursion"><img src="<?php echo base_url(); ?>public/image/excursions.png" style="width: 35px;" />Excursion</label>
                                                <label><input type="radio" name="colorRadio" value="Visa"> <img src="<?php echo base_url(); ?>public/image/visa.png" style="width: 50px;" /> Visa</label>
                                                <label><input type="radio" name="colorRadio" value="Meals"><img src="<?php echo base_url(); ?>public/image/meals.png" style="width: 35px;" /> Meals</label>

                                                <!-- <a href=""><button class="first-btn">Miscellaneous</button></a> -->
                                            </div>
                                            <!-- <div class="row mt-4 mr-3 ml-3">
                <div class="col">
                 <label for="">Query Type
                 :</label>
                 <input checked type="radio" name="QueryType" value="FIT(Normal)"><label
                 for="">FIT(Normal)</label>
                 <input type="radio" name="QueryType" value="GIT(Group)"><label
                 for="">GIT(Group)</label>
                </div>
               </div> -->
                                            <div class="row mt-5 ">
                                                <div class="col">
                                                    <label class="input">
                                                        <input class="input__field fname all-width" type="date" placeholder=" " id="specificDate1" name="specificDate" autocomplete="off" required />
                                                        <span class="input__label">Check IN<span class="colorRed">*</span></span>


                                                    </label><br>
                                                    <span id="spanSpecificDate" class="spanCompany"></span>
                                                </div>
                                                <div class="col">
                                                    <label class="input">
                                                        <input class="input__field fname all-width" type="number" min="1" placeholder=" " id="goingFrom1" name="night" required autocomplete="off" />
                                                        <span class="input__label">Nights</span>


                                                    </label>
                                                </div>
                                                <div class="col">

                                                    <label class="input">
                                                        <input class="input__field  all-width" type="date" placeholder=" " id="endDate1" name="noDaysFrom" autocomplete="off" />
                                                        <span class="input__label">Check Out<span class="colorRed">*</span></span>


                                                    </label>
                                                    <span id="spanSpecificDate" class="spanCompany"></span>

                                                </div>
                                            <!-- </div>

                                            <div class="row mt-4 mr-3 ml-3"> -->
                                                <div class="col">
                                                    <label class="input">
                                                        <input class="input__field fname all-width" type="text" placeholder=" " name="country[]" value="United Arab Emirates" required autocomplete="off" />
                                                        <span class="input__label">Country</span>


                                                    </label>
                                                    <span id="spanGoingFrom" class="spanCompany"></span>
                                                </div>
                                                <div class="col">
                                                    <select class="form-control" required name="goingFrom[]">
                                                        <option value="">Select City</option>

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

                                                </div>

                                                <div class="col">
                                                    <label for="">Hotel Ratings
                                                        :</label>
                                                    <div class="cb_options">
                                                        <input type="checkbox" value="1" name="hotelPrefrence[]" class="hotelRating mr-2 ml-3">1
                                                        <input type="checkbox" value="2" name="hotelPrefrence[]" class="hotelRating mr-2 ml-3">2
                                                        <input type="checkbox" value="3" name="hotelPrefrence[]" class="hotelRating mr-2 ml-3">3
                                                        <input type="checkbox" value="4" name="hotelPrefrence[]" class="hotelRating mr-2 ml-3">4
                                                        <input type="checkbox" value="5" name="hotelPrefrence[]" class="hotelRating mr-2 ml-3">5
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                    <div id="addrows"></div>

                                    <div class="btn-group mt-4">
                                        <a class="new_btn ml-0 px-4" onclick="addrows()">
                                            add
                                        </a>
                                    </div>

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
                                            <label for="">No. of Room</label>

                                            <select name="rooms" id="" required class="Travelers-select-package-values">
                                                <option value="">Select Rooms</option>
                                                <?php $i = 1;
                                                while ($i <= 10) {
                                                ?>
                                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                <?php $i++;
                                                } ?>

                                            </select>
                                        </div>

                                        <div class="col">
                                            <label for="">No. Adult</label><br>

                                            <select name="adult" id="" required class="Travelers-select-package-values">
                                                <option value="">Select Adult</option>
                                                <?php $i = 1;
                                                while ($i <= 10) {
                                                ?>
                                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                <?php $i++;
                                                } ?>

                                            </select>
                                        </div>

                                        <div class="col">
                                            <label for="">No. Child</label><br>

                                            <select name="child" id="child" required class="Travelers-select-package-values">
                                                <option value="0">0</option>
                                                <?php $i = 1;
                                                while ($i <= 10) {
                                                ?>
                                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                <?php $i++;
                                                } ?>

                                            </select>
                                        </div>

                                        <div id="child_age_div" class="col" style="display:none;">
                                            <label for="">Child Age</label>

                                            <input id="child_age" name="child_age" class="Travelers-select-package-values" type="text" value="0" />
                                        </div>

                                        <div class="col">
                                            <label for="">No. Infant</label>

                                            <select name="infant" id="" required class="Travelers-select-package-values">
                                                <option value="0">0</option>
                                                <?php $i = 1;
                                                while ($i <= 10) {
                                                ?>
                                                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                <?php $i++;
                                                } ?>

                                            </select>

                                        </div>


                                    </div>










                                    <div class="d-flex  justify-content-end mt-4 mb-4" style="margin-bottom:50px !important;margin-top:50px !important">
                                        <?php if (isset($buildpackage->queryId)) {
                                            if ($buildpackage->type == 'Package') {
                                        ?>
                                                <a href="<?php echo site_url(); ?>query/buildPackage/<?php echo $b2bDetails->query_id; ?>">

                                                    <button type="button" id="disabled-btn" class="new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                </a>
                                            <?php } else if ($buildpackage->type == 'Transfer') { ?>
                                                <a href="<?php echo site_url(); ?>query/buildTransfer/<?php echo $b2bDetails->query_id; ?>">

                                                    <button type="button" id="disabled-btn" class="new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                </a>
                                            <?php } else if ($buildpackage->type == 'Visa') { ?>
                                                <a href="<?php echo site_url(); ?>query/buildVisa/<?php echo $b2bDetails->query_id; ?>">

                                                    <button type="button" id="disabled-btn" class="new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                </a>
                                            <?php } else if ($buildpackage->type == 'Hotel') { ?>
                                                <a href="<?php echo site_url(); ?>query/buildHotel/<?php echo $b2bDetails->query_id; ?>">

                                                    <button type="button" id="disabled-btn" class="new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                </a>
                                            <?php } else if ($buildpackage->type == 'Excursion') { ?>
                                                <a href="<?php echo site_url(); ?>query/buildExcursion/<?php echo $b2bDetails->query_id; ?>">

                                                    <button type="button" id="disabled-btn" class="new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                </a>
                                            <?php } else if ($buildpackage->type == 'Meals') { ?>
                                                <a href="<?php echo site_url(); ?>query/buildMeals/<?php echo $b2bDetails->query_id; ?>">

                                                    <button type="button" id="disabled-btn" class="new_btn px-5 mr-2">Build Quick <?php echo $buildpackage->type ?></button>
                                                </a>
                                        <?php }
                                        }


                                        ?>

                                        <button type="submit" onclick="checkBoxRequired()" class="new_btn px-5 mr-4 ml-5">Save</button>
                                    </div>



                                </div>

                                </form>
                            </div>

                        </div>



                        <!-- ===================Excursion ============================= -->



                        <?php $this->load->view('footer'); ?>

                        <script>
                            function checkBoxRequired() {

                                //   let conf_number = $('input[name^="hotelPrefrence"]').each(function () {
                                //     console.log("🚩 ~ file: package.php ~ line 540 ~ $(this).val()", $(this).attr('required', 'required'))
                                //   });
                                if ($('.hotelRating').filter(':checked').length < 1) {

                                    let conf_number = $('input[name^="hotelPrefrence"]').each(function() {
                                        $(this).attr('required', 'required');
                                    });
                                    return false;
                                } else {
                                    let conf_number = $('input[name^="hotelPrefrence"]').each(function() {
                                        $(this).removeAttr('required');
                                    });
                                    //  requiredCheckboxes.removeAttr('required');
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


                            var faqs_row = 0;

                            function addrows() {
                                var add = ' <div id="faqs-row' + faqs_row + '" class="row mt-4 mr-3 ml-3"> <div class="col"> <label class="input"> <input class="input__field fname all-width" type="text" placeholder=" "  name="country[]" value="United Arab Emirates" autocomplete="off" /> <span class="input__label">Country</span> </label> <span id="spanGoingFrom" class="spanCompany"></span> </div> <div class="col"> <select class="form-control" id="goingFrom"  name="goingFrom[]"> <option>Select City</option> <option value="Dubai">Dubai</option> <option value="AbuDhabi">Abu Dhabi</option> <option value="Sharjah">Sharjah</option> <option value="Ajman">Ajman</option> <option value="Sir Baniyas">Sir Baniyas</option> <option value="Umm Al-Quwain">Umm Al-Quwain</option> <option value="Fujairah">Fujairah</option> <option value="Ras Al Khaimah">Ras Al Khaimah</option> <option value="Al Ain">Al Ain</option> </select> </div> <div class="col"> <label for="">Hotel Ratings :</label> <input type="checkbox" value="1" name="hotelPrefrence[]" class="mr-2 ml-3">1 <input type="checkbox" value="2" name="hotelPrefrence[]" class="mr-2 ml-3">2 <input type="checkbox" value="3" name="hotelPrefrence[]" class="mr-2 ml-3">3 <input type="checkbox" value="4" name="hotelPrefrence[]" class="mr-2 ml-3">4 <input type="checkbox"value="5" name="hotelPrefrence[]" class="mr-2 ml-3">5 </div> <button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i></button></div></div>';
                                $('#addrows').append(add);
                                faqs_row++;
                            }


                            //     $('input[type="radio"]').click(function(){
                            //      var inputValue = $(this).attr("value");
                            //      var targetBox = $("." + inputValue);
                            //      $(".box").not(targetBox).hide();
                            //      $(targetBox).show();
                            //     });
                            //     $('input[name="colorRadio"]:checked').trigger('click');
                            //    });
                        </script>

                        <style>
                            textarea:focus,
                            input:focus {
                                border-color: #80bdff !important;
                            }
                        </style>