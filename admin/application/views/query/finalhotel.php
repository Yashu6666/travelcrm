<?php ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel-CRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
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

        /* .section{
    height: 500vh;
} */

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
            /* padding: calc(var(--size-bezel) * 3); */
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

        /*# sourceMappingURL=index.css.map */

        .width-input {
            width: 190%;
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
            /* margin-left: 10px; */
            margin-bottom: 100px;
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
            border: none;
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
            border: none;
        }

        .bg-primary {
            background: #d9a927 !important;
        }
    </style>
    <link href="<?php echo base_url(); ?>public/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
</head>

<body>


    <div class="container">

        <div class="" style="float:right;margin-top: 1%">
            <button type="button" class="new_btn px-3" style="border: none" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Share
            </button>
            <a href="<?php echo base_url(); ?>query/view_query">
                <button type="button" class="new_btn px-3" style="border: none;">
                    Close
                </button>
            </a>
        </div>
        <br />
        <div class="d-flex justify-content-between" style="margin-top: 3%;">
            <img class="w-25" src="<?php echo base_url(); ?>public/image/logo.png" />
            <p>
                <b>Agency Name: </b><?php echo $b2bcustomerquery->b2bcompanyName ?> <br>
                <b>Email:</b> <?php echo $b2bcustomerquery->b2bEmail ?> <br>
                <b>Query ID :</b><?php echo $buildpackage->queryId ?>
            </p>
        </div>

        <hr>
        <div class="d-flex justify-content-between">
            <p><?php echo $buildpackage->goingTo ?> <br>
                (<?php echo $buildpackage->goingFrom ?>) <br>
                <?php echo $buildpackage->adult ?> Adult, <?php echo $buildpackage->child ?> Child , <?php echo $buildpackage->infant ?> Infant<br />
            </p>
        </div>
        <hr>

        <div class="bg-primary d-flex justify-content-around">
            <h3 class="text-light p-2">Check In: <?php echo (new DateTime($buildpackage->specificDate))->format('d-M-Y') ?> 
            <h3 class="text-light p-2">No of Nights: <?php echo $buildpackage->night ?> 
            <h3 class="text-light p-2">Check Out: <?php echo (new DateTime($buildpackage->noDaysFrom))->format('d-M-Y') ?> 
            </h3>
        </div>
    </div>
    <div class="container mt-5 section">

        <?php if (isset($proposalDetails['hotel_name'])) : ?>
            <div class=" second">
                <div class="bg-primary ">
                    <h3 class="text-light" style="padding: 7px;"><i class="fa fa-solid fa-hotel"></i> Hotel</h3>
                </div>
                <?php foreach ($proposalDetails['hotel_name'] as $key => $val) : ?>

                    <div class="head">
                        <h5 class="text-light" style="padding: 7px;"><?php print_r($proposalDetails['hotels'][$key]->hotelname) ?> - No of Nights <?php echo $proposalDetails['nights'][$key] ?> </h5>
                    </div>
                    <div>
                        <h5 class="text-capitalize"><b>Hotel Name : </b> <?php print_r($proposalDetails['hotels'][$key]->hotelname) ?></h5>
                        <h5 class="text-capitalize"><b>Room Type : </b> <?php echo $proposalDetails['roomType'][$key] ?></h5>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endif ?>
        <br /><br />
        <div class=" second">
            <div class=" bg-primary ">
                <h3 class="text-light" style="padding: 7px;">Price</h3>
            </div>
            <div>
                <table class="table table-bordered">
                <tr align="center">
                                  <td></td>
                                  <td>Single Sharing</td>
                                  <td>Double Sharing</td>
                                  <td>Triple Sharing</td>
                                  <td>CWB</td>
                                  <td>CNB</td>
                                </tr>

                                <tr align="center">
                                  <td><b>Sub Total</b></td>
                                  <td><?php echo $proposalDetails['subtotal_adults'] ?></td>
                                  <td><?php echo $proposalDetails['subtotal_adults_double'] ?></td>
                                  <td><?php echo $proposalDetails['subtotal_adults_triple'] ?></td>
                                  <td><?php echo $proposalDetails['subtotal_childs'] ?></td>
                                  <td><?php echo $proposalDetails['subtotal_infants'] ?></td>
                                </tr>
                                <tr align="center">
                                  <td><b>Total Price</b></td>
                                  <td><?php echo $proposalDetails['totalprice_adult'] ?></td>
                                  <td><?php echo $proposalDetails['totalprice_adult_double'] ?></td>
                                  <td><?php echo $proposalDetails['totalprice_adult_triple'] ?></td>
                                  <td><?php echo $proposalDetails['totalprice_childs'] ?></td>
                                  <td><?php echo $proposalDetails['totalprice_infants'] ?></td>
                                </tr>
                                <tr align="center">
                                  <td><b>Per PAX</b></td>
                                  <td><?php echo $proposalDetails['perpax_adult'] ?></td>
                                  <td><?php echo $proposalDetails['perpax_double'] ?></td>
                                  <td><?php echo $proposalDetails['perpax_triple'] ?></td>
                                  <td><?php echo $proposalDetails['perpax_childs'] ?></td>
                                  <td><?php echo $proposalDetails['perpax_infants'] ?></td>
                                </tr>
                </table>
            </div>
        </div>

        <br /><br />
        <div class=" second">
            <div class=" bg-primary ">
                <h3 class="text-light" style="padding: 7px;">Terms:</h3>
            </div>
            <div class="accordion accordion-flush mt-3">
            <div class="accordion-item border">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Above Rate Inclusive of
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div id="editor1">
                        <li><?php echo $buildpackage->night ?> Nights stay at the mentioned hotel</li>
                        <?php if($proposalDetails['build_room_types'][0] == 'BB') : ?>
                            <li><?php echo $buildpackage->night ?> Breakfast Buffet Breakfast in the Hotel</li>
                        <?php endif ?>

                    <li>Tourism Dirhams Fees</li>
                    <li>Vat 5% Inclusive</li>
                    <li>All Applicable Taxes</li>
                    <li>All of the above services with the hotel to hotel transfer and ticket</li>
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="accordion-item mt-3 border">
                    <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        General Terms and Conditions
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <div id="editor7">
                            <li>
                                Rooms and rates are subject
                                to availability at the time of actual booking.
                            </li>
                            <li>
                                Standard Check-In: 1500 hrs.
                                & Checkout: 1200 hrs.
                            </li>
                            <li>
                                Early Check-In and Late
                                Check-Out is subject to availability unless booked and confirmed in
                                advance
                            </li>
                            <li>
                                Normal timing for airport
                                pick-up & drop transfer is 6.00 am to 10.00 pm and extra charges
                                will be applicable except this timings and subject to available of
                                vehicles
                            </li>
                            <li>
                                Any change in the number of
                                passengers will lead to a revision of the quote.
                            </li>
                            <li>
                                Vehicle used in the above
                                quote is based on all guests arriving/ departing together in the
                                same flight. In case additional transfers are required, same will be
                                arranged at an additional cost.
                            </li>
                            <li>
                                Above quotes based on normal
                                ticket prices, rate will be subject to change if we receive any
                                revise rate at later stage
                            </li>
                            <li>
                                
                                Itinerary might get changed according to the availability of
                                tours & services and it will be informed and updated to the guest
                                once they reach Dubai
                            </li>
                            <li>
                                OK TO BOARD Message update as
                                per airline’s policy
                            </li>
                            <li>
                                Visa processing may take
                                anywhere between 3 – 5 working days to get approved
                            </li>
                            <li>
                                Issuance of visa will be
                                subject to approval from immigration however once visa is applied
                                charges will be applicable and NO refund will be granted.
                            </li>
                            <li>
                                In case of overstay – Travel
                                agent will be held accountable to settle the fine imposed by
                                immigration which is AED 100.00 Per day (Subject to revision from
                                immigration).
                            </li>
                            <li>
                                We need pre-payment for Dubai
                                Visa and Insurance and it’s nonrefundable.
                            </li>
                            <li>
                                If Excursion tickets are not
                                book then Cancellation policy for the ground services will 4 days
                                prior to arrival is free of charge.
                            </li>
                            <li>
                                Payment to be made in AED as per the rate of exchange applicable
                                on the day of final payment.
                            </li>
                            <li>
                                Bank Charges AED 80/- will be
                                Charged Mandatory on the total invoice.
                            </li>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item  mt-3">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Cancellation Terms: FIT
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div id="editor2">
                            <li>25% cancellation within 30 days before travel.</li>
                            <li>50% cancellation within 10 days before Travel.</li>
                            <li>75% cancellation within 07 days before Travel.</li>
                            <li>Any cancellation within 04 days will lead to 100% cancellation charge. </li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item  mt-3 border">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Cancellation Terms:  Groups (MICE)
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <div id="editor8">
                            <li>25% cancellation within 30 days before travel.</li>
                            <li>50% cancellation within 15 days before Travel.</li>
                            <li>100% cancellation within 07 days before Travel.</li>
                            <li>Any cancellation within 04 days will lead to 100% cancellation charge.</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br>
    <br><br>
    <br><br>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send Proposal To Travel Agent</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table border ">
                        <thead class="bg-primary text-light">
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
                                <td><?php echo $buildpackage->type ?></td>
                                <td><?php echo $buildpackage->goingTo ?>, <?php echo $buildpackage->goingFrom ?></td>
                                <td><?php echo $buildpackage->night ?></td>
                                <td><?php echo $buildpackage->adult ?> Adult,<?php echo $buildpackage->child ?> Child,<?php echo $buildpackage->infant ?> Infant</td>
                                <td><?php echo (new DateTime($buildpackage->specificDate))->format('d-M-Y') ?></td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col">
                            <label class="input">
                                <?php $date = new DateTime($buildpackage->specificDate);
                                $new_df = $date->format('d-M-Y'); ?>
                                <input class="input__field   width-input" id="pro_sub" value="<?php echo $buildpackage->queryId ?> - Diamond Tours LLC Dubai / Pax:<?php echo ($buildpackage->adult + $buildpackage->child + $buildpackage->infant)  ?>/ 
                                <?php echo $new_df ?> / <?php echo $buildpackage->goingTo ?> /  <?php print_r($admin_user_data->firstName . ' ' . $admin_user_data->LastName); ?> " type="text" placeholder=" " autocomplete="off" />
                                <span class="input__label">Email Subject</span></span>
                            </label>
                        </div>
                        <div class="col">
                            <label class="input">
                                <input class="input__field width-input" id="cus_email" value="<?php echo $b2bcustomerquery->b2bEmail ?>" type="email" placeholder=" " autocomplete="off" />
                                <span class="input__label">Email </span></span>
                            </label>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <label class="input">
                                <input class="input__field  width-input" type="text" placeholder=" " id="cc_email" value="" autocomplete="off" />
                                <span class="input__label">CC</span></span>
                            </label>
                        </div>
                        
                        <div class="col">
                            <label class="input">
                                <input class="input__field  width-input " value="<?php echo $b2bcustomerquery->b2bmobileNumber ?>" type="text" placeholder=" " autocomplete="off" />
                                <span class="input__label">Mobile</span></span>
                            </label>
                        </div>


                        <div class="row mt-3">
                            <div class="col">
                                <?php
                                $date = new DateTime($buildpackage->specificDate);
                                $date2 = new DateTime($buildpackage->noDaysFrom);
                                $check_in = $date->format('d-M-Y');
                                $check_out = $date2->format('d-M-Y');
                                ?>
                                <div class="mt-2"> <b>Check In/Out</b> : <?php echo $check_in ?>/<?php echo $check_out ?></div>
                                <div class="mt-2"> <b>Destinations</b> : <?php echo $buildpackage->goingTo ?>, <?php echo $buildpackage->goingFrom ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="pdf" class="ml-5">
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <div>
                    </div>
                    <div>
                        <button type="button" class="new_btn px-3" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="modal-submit" class="new_btn px-3">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script>
        var inclu = "";
        var exclu = "";
        var TnC = "";
        var canc_ply = "";
        var FIT = ""; 
        var MICE = ""; 

        ClassicEditor
            .create(document.querySelector('#editor1'))
            .then(editor => {
                inclu = editor.getData();
                editor.model.document.on('change:data', () => {
                    inclu = editor.getData();
                });
                console.error(editor);

            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor2'))
            .then(editor => {
                FIT = editor.getData();
                editor.model.document.on('change:data', () => {
                    FIT = editor.getData();
                });
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor3'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor4'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor5'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor6'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor7'))
            .then(editor => {
                TnC = editor.getData();
                editor.model.document.on('change:data', () => {
                    TnC = editor.getData();
                });
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor8'))
            .then(editor => {
                MICE = editor.getData();
                editor.model.document.on('change:data', () => {
                    MICE = editor.getData();
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script>
        const btn = document.getElementById("modal-submit");
        btn.addEventListener("click", () => {
            let data_arr = {
                "checkin": "<?php echo date("jS F Y", strtotime($buildpackage->specificDate)) ?>",
                "checkout": "<?php echo date("jS F Y", strtotime($buildpackage->noDaysFrom)) ?>",
                "nights": "<?php echo $buildpackage->night ?>",
                "pax_adult": "<?php echo $buildpackage->adult ?>",
                "pax_child": "<?php echo $buildpackage->child ?>",
                "pax_infant": "<?php echo $buildpackage->infant ?>",
                "per_pax_adult": "<?php echo $proposalDetails['perpax_adult']; ?>",
                "per_pax_double": "<?php echo $proposalDetails['perpax_double']; ?>",
                "per_pax_triple": "<?php echo $proposalDetails['perpax_triple']; ?>",
                "per_pax_child": "<?php echo $proposalDetails['perpax_childs']; ?>",
                "per_pax_infant": "<?php echo $proposalDetails['perpax_infants']; ?>",
                "room": "<?php echo $buildpackage->night  ?>",
                "hotel": "<?php echo $proposalDetails['hotel_name'][0] ?>",
                "type": 'hotel',
                "hotels": <?php echo json_encode($proposalDetails['hotels']) ?>,

                "room_type": "<?php echo $proposalDetails['room_type'][0] ?>",
                "user": "<?php echo $proposalDetails['loggedInUser']; ?>",
                "subject": document.getElementById("pro_sub").value,
                "cc_email": document.getElementById("cc_email").value,
                "cus_email": document.getElementById("cus_email").value,
                "admin_name" : "<?php echo $proposalDetails['admin_name']  ?>",
                
                "inclusions" :  inclu,
                // "exclusions" :  exclu,
                "conditions" :  TnC,
                "FIT" :  FIT,
                "MICE" :  MICE,

                // "buildRoomType" : ?php// echo $proposalDetails['roomType'][0] ?>,
                "room_sharing_types": <?php echo json_encode($proposalDetails['room_sharing_types']) ?>,
                "hotelPrefrence": "<?php echo $buildpackage->hotelPrefrence ?>",
                "build_room_types": <?php echo json_encode($proposalDetails['build_room_types']) ?>,
                "buildRoomType": <?php echo json_encode($proposalDetails['roomType']) ?>,

                "query_ID": <?php echo $buildpackage->queryId ?>
            };

            // console.log(data_arr);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('/query/sendMailProposalPackage') ?>",
                data: {
                    data_arr: JSON.stringify(data_arr)
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

</body>

</html>