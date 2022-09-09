<?php ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel-CRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <style>
    * {
    margin: 0;
    padding: 0;
   
}
body{
    min-height: 100vh;
}

.second {
    position: relative;
    width: 70%;
    border: 2px solid gray;
}

.second img {
    padding: 0;
    margin: 10px;
    width: 30%;
    height: 10%;
    border-radius: 15px;
}

.second h5, p{
    display: inline-block;
}


.head{
    background-color: gray;
}

.sidebar{
    position: absolute;
    top: 63%;
    right: 3%;
    width: 28%;
    height: 80%;
    border: 1px solid rgba(0, 0, 0, 0.253);
    padding: 20px;
    border-radius: 5px;
}
textarea{
    resize: none;
}
.section{
    height: 500vh;
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

.input__field:focus + .input__label, .input__field:not(:placeholder-shown) + .input__label {
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

.width-input{
  width: 190%;
}

.width-dest{
  width: 376%;
}

.width-check{
  width: 350%;
}


.input-time{
  width: 422%;
}

.Subject-width{
  width: 350%;
  margin-bottom: 15px;
}

.invoice-email{
  width: 110%;
}
.setting-width{
  width: 210%;
}
.setting-select{
  width: 87%;
  height: 5vh;
  border: 1px solid black;
  border-radius: 4px;
  margin-left: 4px;

}
.setting-select-module{
  width: 100%;
  height: 5vh;
  border: 1px solid black;
  border-radius: 4px;
  /* margin-left: 10px; */
  margin-bottom: 100px;
}

    </style>
   
</head>

<body>




    <div class="container">
        <div class="d-flex justify-content-between">
            <h3>LOGO</h3>
            <p>
                Name: <?php echo $b2bcustomerquery->b2bfirstName ?> <?php echo $b2bcustomerquery->b2blastName ?>  <br>
                Mob: <?php echo $b2bcustomerquery->b2bmobileNumber ?>  <br>
                Proposal No :<?php echo $buildpackage->queryId ?>
            </p>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <p><?php echo $buildpackage->goingTo ?> <br>
                (<?php echo $buildpackage->goingFrom ?>) <br>
                <?php echo $buildpackage->adult ?> Adults,  <?php echo $buildpackage->child ?> Childs
            </p>
            <p>
                <b>Total Cost</b> <br>
                <?php echo $proposalDetails['pricing_info_curreny'] ?>  <?php echo $proposalDetails['total_package_cost']?>
            </p>
            <p>
                <b>Grand Total </b> <br>
                <?php echo $proposalDetails['pricing_info_curreny'] ?>  <?php echo $proposalDetails['total_package_cost'] ?>
          <br>
               
            </p>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <h4>Inclusions</h4>
        </div>
        <hr>
        <div class="bg-primary d-flex justify-content-center">
            <h3 class="text-light p-2">Proposal No:<?php echo $buildpackage->queryId ?>,  <?php echo $proposalDetails['pricing_info_curreny'] ?>  <?php echo $proposalDetails['total_package_cost'] ?>
      </h3>
        </div>
    </div>




    <div class="container mt-5 section">

        <div class=" second">
            <div class=" bg-primary ">
                <h3 class="text-light" style="padding: 7px;">Hotel</h3>
                <div class="head">
                    <h5 class="text-light" style="padding: 7px;"><?php echo $buildpackage->goingFrom ?>   <?php echo $buildpackage->specificDate ?> -  <?php echo $buildpackage->noDaysFrom ?></h5>
                </div>
            </div>
            <div>
                <img src="<?php echo base_url();?>public/image/4.jpg" alt="">
                <h5><?php echo $proposalDetails['hotel_name'] ?></h5>
            </div>
            <!-- <div class="head">
                <h5 class="text-light" style="padding: 7px;">Dubai 10.05.2022 - 15.05.2022</h5>
            </div>
            <div>
                <img src="<?php echo base_url();?>public/image/2.jpg" alt="">
                <h5>Hotel Name</h5>
            </div> -->
        </div>





        <!-- <div class=" second mt-4"> -->
            <!-- <div class=" bg-primary">
                <h3 class="text-light" style="padding: 7px;">Excursion</h3>
                <div class="head">
                    <h5 class="text-light" style="padding: 7px;">Dubai 10.05.2022 - 15.05.2022</h5>
                </div>
            </div>
            <div>
                <img src="<?php echo base_url();?>public/image/2.jpg" alt="">
                <h5>Hotel Name</h5>
                <p class="p-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis enim est accusamus
                    deserunt quia
                    cupiditate officiis eveniet sequi consequuntur vel voluptate voluptatibus, quaerat natus nihil,
                    harum soluta qui, fugiat iusto?</p>
            </div>
            <div class="head">
                <h5 class="text-light" style="padding: 7px;">Dubai 10.05.2022 - 15.05.2022</h5>
            </div>
            <div>
                <img src="<?php echo base_url();?>public/image/2.jpg" alt="">
                <h5>Hotel Name</h5>
                <p class="p-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis enim est accusamus
                    deserunt quia
                    cupiditate officiis eveniet sequi consequuntur vel voluptate voluptatibus, quaerat natus nihil,
                    harum soluta qui, fugiat iusto?</p>
            </div> -->
            <!-- <br><br>
            <br><br>
            <br><br>
        </div> -->
        <br><br>
            <br><br>
            <br><br>
        <div class="sidebar">
            <div class="">
                <div class="">
                    <div class="d-flex justify-content-around">
                        <a type="button" href="javascript:history.back()" class="btn btn-success ">Edit Package</a>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Share
                        </button>
                    </div>
                    <hr>
                    <div class="bg-secondary  text-white" >
                        <p class="p-2" style="display: grid; place-items: center;">Message chat with agent</p>
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
                    <div class="accordion-body">
                        <div id="editor1"><?php echo  $proposalDetails['exclusions']  ?></div>
                    </div>
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
                    <div class="accordion-body">
                        <div id="editor2"><?php echo  $proposalDetails['inclusions']  ?></div>
                    </div>
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
                    <div class="accordion-body">
                        <div id="editor3"><?php echo  $proposalDetails['booking_terms']  ?></div>
                    </div>
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
                        <div id="editor4"><?php echo  $proposalDetails['refund']  ?></div>
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
                        <div id="editor5"><?php echo  $proposalDetails['general_info']  ?></div>
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
                        <div id="editor6"><?php echo  $proposalDetails['whyuseus']  ?></div>
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
                        <div id="editor7"><?php echo  $proposalDetails['booking_terms']  ?></div>
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
                        <div id="editor8"><?php echo  $proposalDetails['cancelation_policy']  ?></div>
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
                        <thead class="bg-primary text-light">
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
                                <td><?php echo $proposalDetails['package_title'] ?></td>
                                <td><?php echo $buildpackage->goingTo ?>,  <?php echo $buildpackage->goingFrom ?></td>
                                <td><?php echo $buildpackage->night ?></td>
                                <td><?php echo $buildpackage->adult ?> Adult,<?php echo $buildpackage->child ?> Child</td>
                                <td><?php echo $buildpackage->specificDate ?></td>
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
                                <input class="input__field " value="<?php echo $b2bcustomerquery->b2bEmail ?>" type="email" placeholder=" " autocomplete="off" />
                                <span class="input__label">Email </span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <div class="col">
                            <label class="input">
                                <input class="input__field "  value="<?php echo $b2bcustomerquery->b2bfirstName ?>"  type="text" placeholder=" " autocomplete="off" />
                                <span class="input__label">First Name</span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <div class="col">
                            <label class="input">
                                <input class="input__field "  value="<?php echo $b2bcustomerquery->b2blastName ?>" type="text" placeholder=" " autocomplete="off" />
                                <span class="input__label">Last Name</span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>
                        <div class="col">
                            <label class="input">
                                <input class="input__field "  value="<?php echo $b2bcustomerquery->b2bmobileNumber ?>" type="number" placeholder=" " autocomplete="off" />
                                <span class="input__label">Mobile</span></span>
                                <!-- <span id="spanFname" class="spanCompany"></span> -->
                            </label>
                        </div>





                        <div class="row mt-3">
                            <div class="col">
                               
                                <div class="mt-2"> <b>Cheak In/Out</b> : <?php echo $buildpackage->specificDate ?>/<?php echo $buildpackage->noDaysFrom ?></div>
                                <div class="mt-2"> <b>Destinations</b> :  <?php echo $buildpackage->goingTo ?>,  <?php echo $buildpackage->goingFrom ?></div>
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

            let html = ` <button type="button" class="btn btn-primary ">PDF</button>
                          <button type="button" class="btn btn-primary  ">Word</button>`;

            pdf.insertAdjacentHTML('afterbegin', html);
        })


    </script>




    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor1'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor2'))
            .then(editor => {
                console.log(editor);
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
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor8'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>