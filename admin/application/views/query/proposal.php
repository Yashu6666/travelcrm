<?php define("DOMPDF_ENABLE_REMOTE", false);?>
 <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel-CRM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style type="text/css">
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
    top: 80%;
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

    </style>
    <style type="text/css">
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


    </style>
</head>

<body>


    <div class="container">
        <div class="d-flex justify-content-between">
          <img src="<?php echo base_url();?>public/logo/proposalLogo.png" width="100px" height="100px">
            <p>
                Name:XYZ <br>
                Mobile Number:88888888 <br>
                Proposal No:<?php echo $proposalDetails['q_id'];?> <br>
            </p>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <p><?php echo $proposalDetails['CityName'];?> Trip Details For <?php echo $proposalDetails['Nodays'];?>N/<?php echo $proposalDetails['Nodays']+1;?>D <br>
                (<?php echo $proposalDetails['CityName'];?>) <br>
            </p>
            <p>
                <b>Total Cost</b> <br>
                INR <?php echo $proposalDetails['grandTotal'];?></p>
            <p>
                <b>Grand Total </b> <br>
                INR <?php echo $proposalDetails['grandTotal'];?> <br>
                Cost Inclusive GST
            </p>
        </div>
        <hr>
        <!-- <div class="d-flex justify-content-between">
            <h4>Inclusions</h4>
        </div>
        <hr> -->
      
        <div class="bg-primary d-flex justify-content-center">
            <h3>Proposal No: <?php echo $proposalDetails['q_id'];?> INR <?php echo $proposalDetails['grandTotal'];?></h3>
        </div>
    </div>



    <div class="container mt-5 section">
        <div class="hotel ">
            <a type="button" href="#hotel" class="btn btn-light">Hotels</a>
            <a type="button" href="#price" class="btn btn-light">Price</a>
            <a type="button" href="#IncExcl" class="btn btn-light">Incl./Excl.</a>
        </div>

        <div class="second" id="hotel">
            <div class=" bg-primary">
                <h3>Hotel</h3>
                <div class="head">
                    <h5><?php echo $proposalDetails['Nodays'];?>N - <?php echo $proposalDetails['CityName'];?>(<?php echo $proposalDetails['travelDay'];?>) </h5>
                    
                </div>
                <div class="head">
                    <p><?php echo $proposalDetails['hotelName'];?></p> <br>
                    <p>Room Type: ac</p> <br>
                    <p>Meal Plan: HB</p>
                </div>
            </div>
        </div>

          <div class="second" id="price">
            <div class=" bg-primary">
                <h3>Price</h3>
                <div class="head">
                    <h5>Total Cost</h5>
                    
                </div>
                <div class="head">
                    <p>INR <?php echo $proposalDetails['grandTotal'];?> /- (Incl. GST) </p> 
                </div>
            </div>
        </div>

        <div class="mt-5" style="width: 65%" id="IncExcl">

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
                    <div class="accordion-body"><?php echo $proposalDetails['buildPackageInclusions']; ?></div>
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
                    <div class="accordion-body"><?php echo $proposalDetails['buildPackageExclusions']; ?></div>
                </div>
            </div>
            <div class="accordion-item  mt-3 border">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Terms and Conditions
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"><?php echo $proposalDetails['buildPackageConditions']; ?></div>
                </div>
            </div>
        </div>


        <div class="accordion" id="accordionExample">
            <div class="accordion-item  mt-3">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Cancellation Policy
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong><?php echo $proposalDetails['buildPackageCancellations']; ?></strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item  mt-3 border">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                       General Information
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong><?php echo $proposalDetails['buildPackageInformations']; ?></strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item  mt-3 border">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Booking Terms
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong><?php echo $proposalDetails['buildPackageBookingTerms']; ?></strong>
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
                       Why Use Us
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <strong><?php echo $proposalDetails['buildPackageWhyUse']; ?></strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item  mt-3 border">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        Refund Policy
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong><?php echo $proposalDetails['buildPackageRefund']; ?></strong>
                    </div>
                </div>
            </div>
        </div>
</div>

    </div>
</div>

      
</body>

</html> 