<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel-CRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url();?>public/css/style2.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/index.css">
</head>

<body>

    <div class="container">
        <div class="d-flex justify-content-between">
          <img src="<?php echo base_url();?>public/image/proposalLogo.png" width="100px" height="100px">
            <p>
                Name <br>
                Mob <br>
                Proposal No <br>
            </p>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <p>Dubai Trip <br>
                (Dubai) <br>
                2 Adults
            </p>
            <p>
                <b>Total Cost</b> <br>
                INR 122
            </p>
            <p>
                <b>Grand Total </b> <br>
                INR 122 <br>
                cost GST
            </p>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <h4>Inclusions</h4>
        </div>
        <hr>
        <div class="bg-primary d-flex justify-content-center">
            <h3>Proposal No INR 122</h3>
        </div>
    </div>



    <div class="container mt-5 section">
        <div class="hotel ">
            <a type="button" href="#hotel" class="btn btn-light">Hotels</a>
            <button type="button" class="btn btn-light">Price</button>
        </div>

        <div class=" second">
            <div class=" bg-primary">
                <h3>Hotel</h3>
                <div class="head">
                    <h5>Dubai 10.05.2022 - 15.05.2022</h5>
                </div>
            </div>
            <div>
                <img src="image/4.jpg" alt="">
                <h5>Hotel Name</h5>
            </div>
            <div class="head">
                <h5>Dubai 10.05.2022 - 15.05.2022</h5>
            </div>
            <div>
                <img src="image/2.jpg" alt="">
                <h5>Hotel Name</h5>
            </div>
        </div>


        <div class="sidebar">
            <div class="">
                <div class="">
                    <div class="d-flex justify-content-around">
                        <a type="button" href="package.html" class="btn btn-success ">Edit Package</a>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Share
                        </button>
                    </div>
                    <hr>
                    <div class="bg-secondary  text-white text-center ">
                        <p>Message chat with agent</p>
                    </div>

                    <p>Agent : XYZ(1234567890)</p>

                    <div class="mb-3">
                        <label for="" class="form-label"><b>Inroduce Your Self*</b></label><br>
                        <div>
                            <label class="input">
                                <input class="input__field " style="width: 170%;" type="email" placeholder=" "
                                    autocomplete="off" />
                                <span class="input__label">Name </span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <div class="mt-3">
                            <label class="input">
                                <input class="input__field " style="width: 170%;" type="email" placeholder=" "
                                    autocomplete="off" />
                                <span class="input__label">Email </span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <label for="" class="mt-2 mb-2">Message To agent</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                                style="height: 100px;"></textarea>
                        </div>
                    </div>


                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary  ">Send Message</button>
                    </div>
                </div>
            </div>
        </div>










        <div class="accordion accordion-flush mt-5">
            <div class="accordion-item border">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Inclusions
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion</div>
                </div>
            </div>
            <div class="accordion-item mt-3 border">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Exclusion
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion</div>
                </div>
            </div>
            <div class="accordion-item  mt-3 border">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Booking Options
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion</div>
                </div>
            </div>
        </div>







        <div class="accordion" id="accordionExample">
            <div class="accordion-item  mt-3">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Payment Terms
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item  mt-3 border">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Travel Basics
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item  mt-3 border">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Why Use Demo Agency?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong>
                    </div>
                </div>
            </div>
        </div>


        <div class="accordion" id="accordionPanelsStayOpenExample">

            <div class="accordion-item  mt-3">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        Term & Conditions
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item  mt-3 border">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        Cancellation Policy
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong>
                    </div>
                </div>
            </div>
        </div>







    </div>














    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send Proposal To Customer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table border ">
                        <thead class="bg-primary">
                            <tr>
                                <th scope="col">Package Title</th>
                                <th scope="col">Destination</th>
                                <th scope="col">Night/ Day</th>
                                <th scope="col">Pax Details</th>
                                <th scope="col">Travel Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dubai Trip</td>
                                <td>Dubai</td>
                                <td>2Night/3days</td>
                                <td>2 Adult</td>
                                <td>16/may/2022</td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="row">
                        <div class="col">
                            <label class="input">
                                <input class="input__field  width-input" type="text" placeholder=" "
                                    autocomplete="off" />
                                <span class="input__label">Email Subject</span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <div class="col">
                            <label class="input">
                                <input class="input__field width-input" type="text" placeholder=" "
                                    autocomplete="off" />
                                <span class="input__label">CC</span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                    </div>


                    <div class="row mt-3">
                        <div class="col">
                            <label class="input">
                                <input class="input__field " type="email" placeholder=" " autocomplete="off" />
                                <span class="input__label">Email </span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <div class="col">
                            <label class="input">
                                <input class="input__field " type="text" placeholder=" " autocomplete="off" />
                                <span class="input__label">First Name</span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <div class="col">
                            <label class="input">
                                <input class="input__field " type="text" placeholder=" " autocomplete="off" />
                                <span class="input__label">Last Name</span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <div class="col">
                            <label class="input">
                                <input class="input__field " type="number" placeholder=" " autocomplete="off" />
                                <span class="input__label">Mobile</span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>





                        <div class="row mt-3">
                            <div class="col">
                               
                                <div class="mt-2"> <b>Cheak In/Out</b> : 16/may/2022</div>
                                <div class="mt-2"> <b>Destinations</b> : Dubai</div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <textarea class="form-control" style="height: 100px;"
                                        placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Message</label>
                                </div>
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
                        <input type="checkbox">
                        <label>Mail</label>
                    </div>
                    <div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="modal-submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

    <script>

        const btn = document.getElementById("modal-submit");
        btn.addEventListener("click", () => {
            // console.log("click")
            const pdf = document.getElementById("pdf");



            // const crtBtn = document.createElement("button");
            // console.log(crtBtn);
            // crtBtn.className = "newclass";

            let html = `<button type="button" class="btn btn-primary ">PDF</button>
                          <button type="button" class="btn btn-primary  ">Word</button>`;

            pdf.insertAdjacentHTML('afterbegin', html);
        })


    </script>







</body>

</html>