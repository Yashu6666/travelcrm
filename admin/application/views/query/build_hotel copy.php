<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet">
  <?php $this->load->view('header');?>
  <!-- start page container -->
  <div class="page-container">
   <!-- start sidebar menu -->
   <?php $this->load->view('side_bar');?>>
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
       <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="#">Home</a>&nbsp;<i
        class="fa fa-angle-right"></i>
       </i>&nbsp;<a class="parent-item" href="#">Queries</a>

      </li>

     </ol>
    </div>
   </div>
   <form action="<?php echo site_url();?>query/CreateProposalHotel" method="post"> 
   <div class="row mt-5">
    <div class="col-md-12">
     <div class="card-box ">
      <div class=" d-flex justify-content-center align-itom-center">

       <table class="table table-bordered mt-5">

        <tbody>
         <tr>
          <th scope="row">Customer Name </th>
          <td><?php echo $view->b2bfirstName;?></td>
          <th>Enquiry Id</th>
          <td><?php echo $view->query_id;?></td>
          <th>Enquiry For</th>
          <td>Hotel</td>
         </tr>
         <tr>
          <th>Enquiry Details</th>
          <td></td>
          <td></td>
          <td></td>
         </tr>
         <tr>
          <th>Check In</th>
          <td><?php echo $view->specificDate;?></td>
          <th>Check Out</th>
          <td><?php echo $buildpackage->noDaysFrom ?></td>
          <th>No of Nights</th>
          <td><?php echo $buildpackage->night?></td>


         </tr>
         <tr>
          <th>Destination</th>
          <td> <?php echo $view->goingTo;?>, <?php echo $buildpackage->goingFrom ?></td>
          <th>No of Pax</th>
          <td>Adult: <?php echo $view->Packagetravelers;?> Child: <?php echo $buildpackage->child;?></td>
          <th></th>
          <td> </td>

         </tr>
        </tbody>
       </table>


      </div>
      <div class="mt-5">

       <div>
        <div class="card-head card-head-new">
         <p>Package Type</p>
        </div>
        <div>
         <input type="radio" name="packageType" value="Quick Package" class="mt-3 ml-4">
         <label for="">Quick Package</label>
        </div>

       </div>

       <div class="card-body ">
        <div class="col-md-12">
         <div class="tab-pane wow fadeIn animated active in" id="general">
          <div id="editor">

          </div>
         </div>
        </div>
        <div class="mt-5">
         <div>
          <div class="card-head card-head-new">
           <p>Supplier / Inclusion Type</p>
          </div>
          <div class="row mt-4 mr-3 ml-3 mb-3">
           <div class="col">
            <label for="">Inclusion</label>
            <select class="form-control" name="packageInclusion" id="" class="Inclusion-select">
             <option value="Hotel">Hotel</option>
             <option value="Meals/Breakfast">Meals/Breakfast</option>
             <option value="Transfer">Transfer</option>
             <option value="Flight">Flight</option>

            </select>
           </div>
           <div class="col">
            <label for="">Supplier</label>
            <select class="form-control"  name="supplier" id="" class="Inclusion-select">
             <?php foreach ($listSuppliers as $key) {?>
             <option value="<?php echo $key->company_name;?>"><?php echo $key->company_name;?></option>
            <?php } ?>

            </select>
           </div>
          </div>
         </div>
         <div class="mt-5">
          <div>
           <div class="card-head card-head-new ">
            <p>Destination Covered</p>
           </div>
           <div class="row mt-4 mr-3 ml-3 mb-3">
            <div class="col">
             <label for="">Destination Covered</label>
             <input class="form-control"  type="text" name="destinationCovered">
            </div>

           </div>
          </div>
         </div>
         <div class="mt-5">
          <div>
           <div class="card-head card-head-new">
            <p>Options 1</p>
           </div>
           <div class="row mt-5 mr-3 ml-3 mb-3">
            <div>
             <table class="table">
              <thead>
               <tr>
                <th>Hotel City</th>
                <th>Check In</th>
                <th>No Of Nights</th>
                <th>Hotel Name</th>
                <th>Hotel Room Type </th>
                <th>Meal Plan Type</th>
               </tr>
              </thead>
              <tbody>
               <tr>
                <td><input class="form-control" type="text" value="<?php echo $view->goingTo;?>" name="buildHotelCity" id="buildHotelCity"></td>
                <td><input class="form-control" type="date" value="<?php echo $view->specificDate;?>" name="buildCheckIn" id="buildCheckIn"></td>
                <td><input class="form-control" type="text" value="1" name="buildNoNights" id="buildNoNights"></td>
                <td><input class="form-control" type="text" placeholder="Hotel Name" name="buildHotelName" id="buildHotelName" required=""></td>
                <td><input class="form-control" type="text" placeholder="Hotel Room Type" name="buildRoomType" id="buildRoomType" required=""></td>
                <td><select class="form-control" name="buildMealType" id="buildMealType" required="">
                 <option value="">Select meal type
                 </option>
                 <option value="HB">HB</option>
                 <option value="FB">FB</option>
                 <option value="AI">AI</option>
                 <option value="RO">RO</option>
                 <option value="BB">BB</option>
                 <option value="CP">CP</option>
                 <option value="MAP">MAP</option>
                 <option value="AP">AP</option>
                 <option value="EP">EP</option>

                </select></td>

               </tr>

              </tbody>
             </table>
            </div>

           </div>
          </div>
          <div class="mt-5">
           <div>
            <div class="card-head card-head-new">
             <p>Trasport Details</p>
            </div>
            <div class="row mt-4 mr-3 ml-3 mb-3">
             <div class="col">
              <label for="" class="transport-lable">Trasport Type
              :</label>
              <input type="checkbox" name="TransType" id="TrasportTypeCab" class="mr-3 ml-2 " value="Cab"><span
              class="transport-lable-ckeck">Pvt Cab</span><span class="checkmark"></span>
              <input type="checkbox" name="TransType" id="TrasportTypeSic" class="mr-3 ml-2 " value="sic"><span
              class="transport-lable-ckeck">Sic</span><span class="checkmark"></span>
              <input type="checkbox" name="TransType" id="TrasportTypeBus" class="mr-3 ml-2 " value="bus"><span
              class="transport-lable-ckeck">Bus</span><span class="checkmark"></span>
              <input type="checkbox" name="TransType" id="TrasportTypeTrain" class="mr-3 ml-2 " value="train"><span
              class="transport-lable-ckeck">Train</span><span class="checkmark"></span>
             </div>

            </div>
            <div>
             <table class="table">
              <thead>
               <tr>
                <th scope="col">Trasport type</th>
                <th scope="col">Form Date</th>
                <th scope="col">Form City</th>
                <th scope="col">To Date </th>
                <th scope="col">To City </th>
                <th scope="col">Description</th>



               </tr>
              </thead>
              <tbody>
               <tr id="PvtCab" style="display: none;">
                <th>Pvt Cab</th>
                <td><input class="form-control" type="date" value="<?php echo $view->specificDate;?>" name="buildTravelFromdateCab"></td>
                <td><input class="form-control" type="text" placeholder="From City" name="buildTravelFromCityCab"></td>
                <td><input class="form-control" type="date" placeholder="To Date" name="buildTravelToDateCab"></td>
                <td><input class="form-control" type="text" placeholder="To City" name="buildTravelToCityCab"></td>
                <td><input class="form-control" type="text" placeholder="Type" name="buildTravelTypeCab"></td>
                <td><button type="button" class="btn btn-primary">Add</button>
                </td>

               </tr>


                <tr id="Sic" style="display: none;">
                <th>Sic</th>
                <td><input class="form-control" type="date" value="<?php echo $view->specificDate;?>" name="buildTravelFromdateSIC"></td>
                <td><input class="form-control" type="text" placeholder="From City" name="buildTravelFromCitySIC"></td>
                <td><input class="form-control" type="date" placeholder="To Date" name="buildTravelToDateSIC"></td>
                <td><input class="form-control" type="text" placeholder="To City" name="buildTravelToCitySIC"></td>
                <td><input class="form-control" type="text" placeholder="Type" name="buildTravelTypeSIC"></td>
                <td><button type="button" class="btn btn-primary">Add</button>
                </td>

               </tr>

                 <tr id="Bus" style="display: none;">
                <th>Bus</th>
                <td><input class="form-control" type="date" value="<?php echo $view->specificDate;?>" name="buildTravelFromdateBus"></td>
                <td><input class="form-control" type="text" placeholder="From City" name="buildTravelFromCityBus"></td>
                <td><input class="form-control" type="date" placeholder="To Date" name="buildTravelToDateBus"></td>
                <td><input class="form-control" type="text" placeholder="To City" name="buildTravelToCityBus"></td>
                <td><input class="form-control" type="text" placeholder="Type" name="buildTravelTypeBus"></td>
                <td><button type="button" class="btn btn-primary">Add</button>
                </td>

               </tr>

                 <tr id="Train" style="display: none;">
                <th>Train</th>
                <td><input class="form-control" type="date" value="<?php echo $view->specificDate;?>" name="buildTravelFromdateTrain"></td>
                <td><input class="form-control" type="text" placeholder="From City" name="buildTravelFromCityTrain"></td>
                <td><input class="form-control" type="date" placeholder="To Date" name="buildTravelToDateTrain"></td>
                <td><input class="form-control" type="text" placeholder="To City" name="buildTravelToCityTrain"></td>
                <td><input class="form-control" type="text" placeholder="Type" name="buildTravelTypeTrain"></td>
                <td><button type="button" class="btn btn-primary">Add</button>
                </td>

               </tr>
              </tbody>
             </table>

             <hr>

             <div>
              <h4>Visa Details/Cost</h4>
              <hr>

              <textarea name="visaDetails" id="" cols="125" rows="10"></textarea>

              <div class="row mt-4 mr-3 ml-3 mb-3 ">
               <div>
                <table class="table table-borderless">
                 <thead>
                  <tr>
                   <th>Per Adult Cost(Adults
                   2)</th>
                   <th>Total Cost</th>
                   <th>Total Mark Up</th>
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
                </table>
               </div>

              </div>





             </div>


         

            </div>
            <div>
             <div class="mt-5">
              <div>
               <div class="card-head card-head-new ">
                <p>Pricing Info</p>
               </div>
               <div class="row mt-4 mr-3 ml-3 mb-3">
                <table class="table table-bordered">
                 <tbody>
                  <tr>
                   <td><input type="radio" name="pricingInfo" id="pricingInfo" value="onlyPrice"  checked="" > Share Only
                   Total Pricing</td>

                   <td><input type="radio" name="pricingInfo" id="pricingInfo" value="PPpricing"><span>Share
                   with PP Pricing</td>


                  </tr>
                </tbody>
              </table>
              <table>
                <tbody>
                  <tr>
                    <th></th>
                    <th id="noPAX" style="display: none;">No of Pax</th>
                    <th>Option 1</th>
                   </tr>
                 </tbody>
                 <tbody>
                   <tr>
                    <td>Currency</td>
                    <td id="NoPAX" style="display: none;"><input type="number" name="noOfPax" id="noOfPax" class="form-control"></td>
                    <td><select class="form-control" name="currencyOption">
                   
                     <option value="AED">AED</option>
                     <option value="USD">USD</option>
                    </select></td>
                   </tr>
                 </tbody>
               </table>
                   
               </div>
              </div>
             </div>





             <div class="mt-5">
              <div>
               <div class="card-head card-head-new ">
                <p>Visa Cost</p>
               </div>
               <div class="row mt-4 mr-3 ml-3 mb-3">
                <table class="table table-borderless">

                 <tbody>
                  <tr id="visaCost" style="display: none;">
                   <td>Cost Per Adult</td>
                   <td ><input type="text" name="costPerAdult" id="costPerAdult" class="form-control" readonly=""></td>
                   <td><input type="text" class="form-control" value="0" id="AdultCost" name="AdultCost">
                   </td>

                  </tr>
                  <tr>
                   <td>Total Cost</td>
                   <td></td>
                   <td><input type="text" class="form-control" value="0" name="pricingTotalCost" id="pricingTotalCost">
                   </td>

                  </tr>
                  <tr>
                   <td>Total Mark Up</td>
                   <td></td>
                   <td><input type="text" class="form-control" value="0" name="pricingTotalMarkup" id="pricingTotalMarkup">
                   </td>
                  
                  </tr>
                  <tr>
                   <td>Applicable VAT</td>
                   <td></td>
                   <td><select class="form-control"><option value="VAT on Total">VAT on Total</option></select>
                   </td>
                  </tr>
                  <tr>
                   <th>Total Cost With Vat</th>
                   <td></td>
                   <td><input type="text" class="form-control" value="0" id="totalCostonVAt" id="totalCostonVAt" value="0" readonly="" required="">
                   </td>
                  </tr>
                 </tbody>
                </table>
               </div>
              </div>
             </div>

             <div class="mt-5">
              <div>
               <div class="card-head card-head-new ">
                <p>Package Cost</p>
               </div>
               <div class="row mt-4 mr-3 ml-3 mb-3">
                <table class="table table-borderless">

                 <tbody>
                  <tr id="packageOccupancy" style="display: none;">
                   <td>Double/Twin Occupancy per Adult
                   </td>
                   <td><input type="text" class="form-control" name="noOfOccupancy" id="noOfOccupancy" readonly=""></td>
                   <td><input type="text" class="form-control" name="packageOccupancyPerAdult" id="packageOccupancyPerAdult" value="0">
                   </td>

                  </tr>
                  <tr>
                   <td>Total Cost</td>
                   <td></td>
                   <td><input type="text" class="form-control" name="totalCostPackage" id="totalCostPackage" value="0">
                   </td>

                  </tr>
                  <tr>
                   <td>
                    Mark Up (Fixed
                    Amount) 
                   </td>
                   <td></td>
                   <td><input type="text" class="form-control" name="PackageMarkup" id="PackageMarkup" value="0">
                   </td>
                  </tr>
                  <tr>
                   <td>Applicable VAT</td>
                   <td></td>
                   <td><select class="form-control" name="PackageVAT" id="PackageVAT">
                    <option>VAT on Total</option>
                  </select>
                   </td>
                  </tr>
                  <tr>
                   <th>Total Cost With Vat
                   </th>
                   <td></td>
                   <td><input type="text" class="form-control" name="TotalPackageVAT" id="TotalPackageVAT" value="0" readonly="" required="">
                   </td>
                  </tr>
                 </tbody>
                </table>
               </div>
              </div>
             </div>

             <div class="mt-5">
              <div>
               <div class="card-head card-head-new ">
                <p>Total Package Cost : </p>
               </div>
               <div class="row mt-4 mr-3 ml-3 mb-3">
                <table class="table table-borderless">

                 <tbody>
                  <tr>
                   <td>Total Sales Price
                   </td>
                   <td></td>
                   <td><input type="text" class="form-control" name="TotalSales" id="TotalSales"  required="" readonly ="">
                   </td>
                  </tr>
                  <tr>
                   <td>Advance Required to Book *</td>
                   <td></td>
                   <td><input type="text" class="form-control" name="AdvanceBook" id="AdvanceBook" value="10%">
                   </td>

                  </tr>

                 </tbody>
                </table>

               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>

    </div>


    <div class="container">

     <div class="accordion" id="accordionPanelsStayOpenExample">
      <div class="accordion-item">
       <h2 class="accordion-header" id="panelsStayOpen-headingOne">
        <button class="accordion-button  width-refund" type="button"
        data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne"
        aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Inclusions
       </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
      aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
       <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here"
        id="buildPackageInclusions" name="buildPackageInclusions" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Comments</label>
       </div>
      </div>
     </div>
    </div>
    <div class="accordion-item">
     <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed  width-refund" type="button"
      data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
      aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
      Exclusions
     </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
    aria-labelledby="panelsStayOpen-headingTwo">
    <div class="accordion-body">
     <div class="form-floating">
      <textarea class="form-control" placeholder="Leave a comment here"
      id="buildPackageExclusions" name="buildPackageExclusions" style="height: 100px"></textarea>
      <label for="floatingTextarea2">Comments</label>
     </div>
    </div>
   </div>
  </div>
  <div class="accordion-item">
   <h2 class="accordion-header" id="panelsStayOpen-headingThree">
    <button class="accordion-button collapsed  width-refund" type="button"
    data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
    aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
    Term & Condions
   </button>
  </h2>
  <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
  aria-labelledby="panelsStayOpen-headingThree">
  <div class="accordion-body">
   <div class="form-floating">
    <textarea class="form-control" placeholder="Leave a comment here"
    id="buildPackageConditions" name="buildPackageConditions" style="height: 100px"></textarea>
    <label for="floatingTextarea2">Comments</label>
   </div>
  </div>
 </div>
</div>
<div class="accordion mt-3" id="accordionExample">
 <div class="accordion-item">
  <h2 class="accordion-header" id="headingOne">
   <button class="accordion-button  width-refund" type="button"
   data-bs-toggle="collapse" data-bs-target="#collapseOne"
   aria-expanded="true" aria-controls="collapseOne">
   Cancellations Policy
  </button>
 </h2>
 <div id="collapseOne" class="accordion-collapse collapse show"
 aria-labelledby="headingOne" data-bs-parent="#accordionExample">
 <div class="accordion-body">
  <div class="form-floating">
   <textarea class="form-control" placeholder="Leave a comment here"
   id="buildPackageCancellations" name="buildPackageCancellations" style="height: 100px"></textarea>
   <label for="floatingTextarea2">Comments</label>
  </div>
 </div>
</div>
</div>
<div class="accordion-item">
 <h2 class="accordion-header" id="headingTwo">
  <button class="accordion-button collapsed  width-refund" type="button"
  data-bs-toggle="collapse" data-bs-target="#collapseTwo"
  aria-expanded="false" aria-controls="collapseTwo">
  General Information
 </button>
</h2>
<div id="collapseTwo" class="accordion-collapse collapse"
aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
<div class="accordion-body">
 <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here"
  id="buildPackageInformations" name="buildPackageInformations" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Comments</label>
 </div>
</div>
</div>
</div>
<div class="accordion-item">
 <h2 class="accordion-header" id="headingThree">
  <button class="accordion-button collapsed  width-refund" type="button"
  data-bs-toggle="collapse" data-bs-target="#collapseThree"
  aria-expanded="false" aria-controls="collapseThree">
  Booking Terms
 </button>
</h2>
<div id="collapseThree" class="accordion-collapse collapse"
aria-labelledby="headingThree" data-bs-parent="#accordionExample">
<div class="accordion-body">
 <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here"
  id="buildPackageBookingTerms" name="buildPackageBookingTerms" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Comments</label>
 </div>
</div>
</div>
</div>
</div>
<div class="accordion accordion-flush" id="accordionFlushExample">
 <div class="accordion-item">
  <h2 class="accordion-header" id="flush-headingOne">
   <button class="accordion-button collapsed  width-refund" type="button"
   data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
   aria-expanded="false" aria-controls="flush-collapseOne">
   Why Use Us
  </button>
 </h2>
 <div id="flush-collapseOne" class="accordion-collapse collapse"
 aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
 <div class="accordion-body">
  <div class="form-floating">
   <textarea class="form-control" placeholder="Leave a comment here"
   id="buildPackageWhyUse" name="buildPackageWhyUse" style="height: 100px"></textarea>
   <label for="floatingTextarea2">Comments</label>
  </div>
 </div>
</div>
</div>
<div class="accordion-item ">
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
</div>

</div>
</div>

</div>







<input  type="hidden" id="QueryId" name="QueryId" value="<?php echo $view->query_id;?>">
<div class="last-btn mt-4 mb-4">
 <!-- <button type="submit" class="contact-next-btn mr-2">Save as
 Draft</button> -->
 <!-- <form action="<?php echo site_url();?>query/CreateProposal" method="post"> 
  
  <input  type="hidden" id="travelDate" name="travelDate">
  <input  type="hidden" id="NoOfNights" name="NoOfNights">
  <input  type="hidden" id="HotelName" name="HotelName">
  <input  type="hidden" id="RoomType" name="RoomType">
   <input  type="hidden" id="MealType" name="MealType">
  <input  type="hidden" id="Total" name="Total">
   <input  type="hidden" id="GrandTotal" name="GrandTotal">

  <input  type="hidden" id="inclusions" name="inclusions">
  <input  type="hidden" id="exclusions" name="exclusions">
  <input  type="hidden" id="termcond" name="termcond">
  <input  type="hidden" id="cancelpolicy" name="cancelpolicy">
  <input  type="hidden" id="genInfo" name="genInfo">
  <input  type="hidden" id="bookTerms" name="bookTerms">
  <input  type="hidden" id="WhyUs" name="WhyUs">
  <input  type="hidden" id="refund" name="refund"> -->
 <button type="submit" class="contact-next-btn mr-4">View & Share
 Proposal</button> 

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

<?php $this->load->view('footer');?>
<script type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
  <script>
        console.clear()
        initSample();
        $('.js-example-basic-multiple').select2();
    </script>
    <script>
        // Listen for click on toggle checkbox
        $('#select_all').click(function (event) {
            if (this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $(':checkbox').each(function () {
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
    <script src="<?php echo base_url();?>public/js/icheck.min.js"></script>
    <link href="<?php echo base_url();?>public/css/grey.css" rel="stylesheet">
    <script>
        var cb, optionSet1;

        $(function () {
            var checkAll = $('input.all');
            var checkboxes = $('input.checkboxcls');

            $('.tab-pane input').iCheck({
                checkboxClass: "icheckbox_square-grey",
            });

            checkAll.on('ifChecked ifUnchecked', function (event) {
                if (event.type == 'ifChecked') {
                    checkboxes.iCheck('check');
                } else {
                    checkboxes.iCheck('uncheck');
                }
            });

            checkboxes.on('ifChanged', function (event) {
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
    <script src="<?php echo base_url();?>public/js/datepicker.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/datepicker.css">
    <script>
        var fmt = "dd/mm/yyyy";
        if (top.location != location) { top.location.href = document.location.href; }
        $(function () {
            window.prettyPrint && prettyPrint(); $('.dob').datepicker({ format: fmt, autoclose: true }).on('changeDate', function (ev) {
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
                onRender: function (date) {
                    return date.valueOf() < now.valueOf() ? 'disabled' : '';
                }
            })
                .on('changeDate', function (ev) {
                    date.hide();
                })
                .data('datepicker');

            var date12 = $('.dpd5').datepicker({
                format: fmt,
                onRender: function (date) {
                    return date.valueOf() < now.valueOf() ? 'disabled' : '';
                }
            })
                .on('changeDate', function (ev) {
                    date12.hide();
                })
                .data('datepicker');
            var date13 = $('.dpd6').datepicker({
                format: fmt,
                onRender: function (date) {
                    return date.valueOf() < now.valueOf() ? 'disabled' : '';
                }
            })
                .on('changeDate', function (ev) {
                    date13.hide();
                })
                .data('datepicker');

            var checkin = $('.dpd1').datepicker({
                format: fmt,
                onRender: function (date) {
                    return date.valueOf() < now.valueOf() ? 'disabled' : '';
                }
            })
                .on('changeDate', function (ev) {
                    if (ev.date.valueOf() > checkout.date.valueOf()) {
                        var newDate = new Date(ev.date)
                        newDate.setDate(newDate.getDate() + 1); checkout.setValue(newDate);
                    }
                    checkin.hide();
                    $('.dpd2')[0].focus();
                })
                .data('datepicker');
            var checkout = $('.dpd2').datepicker({
                format: fmt,
                onRender: function (date) {
                    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                }
            })
                .on('changeDate', function (ev) {
                    checkout.hide();
                })
                .data('datepicker');

        });
    </script>
    <!-- timepicker -->
    <script src="<?php echo base_url();?>public/js/timepicker.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/timepicker.css">
    <script>
        $(function () {
            $('.timepicker').clockface();
        });
    </script>

    <script type="text/javascript">
     $("input[name='TransType']").change(function() {
    
        var name = $(this).val();
       if(name == "Cab")
       {
        if($('#TrasportTypeCab').is(':checked'))
        {
         $('#PvtCab').show();
        }
        else
        {
         $('#PvtCab').hide();
        }
       }
        if(name == "sic")
       {
        if($('#TrasportTypeSic').is(':checked'))
        {
         $('#Sic').show();
        }
        else
        {
         $('#Sic').hide();
        }
       }

        if(name == "bus")
       {
        if($('#TrasportTypeBus').is(':checked'))
        {
         $('#Bus').show();
        }
        else
        {
         $('#Bus').hide();
        }
       }
       if(name == "train")
       {
        if($('#TrasportTypeTrain').is(':checked'))
        {
         $('#Train').show();
        }
        else
        {
         $('#Train').hide();
        }
       }

     
    
});
    </script>


    <script type="text/javascript">
      $("input[name='pricingInfo']").change(function(){
        var selected = $(this).val();
        if(selected == "PPpricing")
        {
          $("#NoPAX").show();
           $("#noPAX").show();
          $("#visaCost").show();
          $("#packageOccupancy").show();
        }
        else
        {
          $("#NoPAX").hide();
           $("#noPAX").hide();
           $("#visaCost").hide();
           $("#packageOccupancy").hide();
        }
      });
    </script>

    <script type="text/javascript">
      $("#pricingTotalCost,#pricingTotalMarkup").on("input",function(){
        var total_vat = 0;
       
        var total_cost = $("#pricingTotalCost").val();
        var total_markup = $("#pricingTotalMarkup").val();
        var total_vat =parseInt(total_cost) + parseInt(total_markup);
        $("#totalCostonVAt").val(total_vat);
      });
    </script>

<script type="text/javascript">
      $("#costPerAdult").on("input",function(){
        var total_vat = 0;
         var TotalCost = 0;
        var costPerAdult = $("#costPerAdult").val();
        var  AdultCost = $("#AdultCost").val();
        var totalPax = $("$noPax").val();
        var total_cost = $("#pricingTotalCost").val();
        var total_markup = $("#pricingTotalMarkup").val();
        
        var TotalCost = parseInt(costPerAdult) * parseInt(AdultCost);
        var total_vat =parseInt(total_cost) + parseInt(total_markup) + parseInt(costPerAdult); 
        $("#pricingTotalCost").val(TotalCost);
        $("#totalCostonVAt").val(total_vat);
      });
    </script>


<script type="text/javascript">
  $("#noOfPax").on("input",function(){
      var noPax = $(this).val();
      //alert(noPax);
      $("#costPerAdult").val(noPax);
      $("#noOfOccupancy").val(noPax);
  });
</script>




    <!-- Package Script -->

    <script type="text/javascript">
      $("#totalCostPackage,#PackageMarkup").on("input",function(){
        var total_vat = 0;
       
        var total_cost = $("#totalCostPackage").val();
        var total_markup = $("#PackageMarkup").val();
        var totalCostonVAt = parseInt($("#totalCostonVAt").val());
        var total_vat =parseInt(total_cost) + parseInt(total_markup);
        $("#TotalPackageVAT").val(total_vat);

        $("#TotalSales").val(total_vat + totalCostonVAt);
        $("#GrandTotal").val(total_vat + totalCostonVAt);
      });
    </script>


    <script type="text/javascript">
      $("#ViewProposal").click(function() {

        var CityName = $("#buildHotelCity").val();
        var travelDay = $("#buildCheckIn").val();
        var Nodays = $("#buildNoNights").val();
        var hotelName = $("#buildHotelName").val();
        var roomType = $("#buildRoomType").val();
        var mealType = $("#buildMealType").val();
        var grandTotal = $("#TotalSales").val();
        var q_id = $("#QueryId").val();

        var buildPackageInclusions = $("#buildPackageInclusions").val();
        var buildPackageExclusions = $("#buildPackageExclusions").val();
        var buildPackageConditions = $("#buildPackageConditions").val();
        var buildPackageCancellations = $("#buildPackageCancellations").val();
        var buildPackageInformations = $("#buildPackageInformations").val();
        var buildPackageBookingTerms = $("#buildPackageBookingTerms").val();
        var buildPackageWhyUse = $("#buildPackageWhyUse").val();
        var buildPackageRefund = $("#buildPackageRefund").val();

        $.ajax({
          type:"POST",
          url:'<?php echo site_url();?>/query/CreateProposal',
          data:{'q_id':q_id,'CityName':CityName,'travelDay':travelDay,'Nodays':Nodays,'hotelName':hotelName,'roomType':roomType,'mealType':mealType,'grandTotal':grandTotal,'buildPackageInclusions':buildPackageInclusions,'buildPackageExclusions':buildPackageExclusions,'buildPackageConditions':buildPackageConditions,'buildPackageCancellations':buildPackageCancellations,'buildPackageInformations':buildPackageInformations,'buildPackageBookingTerms':buildPackageBookingTerms,'buildPackageWhyUse':buildPackageWhyUse,'buildPackageRefund':buildPackageRefund},
          success:function(response){

            $("#ProposalPage").html(response);
            $("#FullPage").hide();
          }


        });

        // $("#CityName").val(CityName);
        // $("#travelDate").val(travelDay);
        // $("#NoOfNights").val(Nodays);
        // $("#HotelName").val(hotelName);
        // $("#RoomType").val(roomType);
        // $("#MealType").val(mealType);
        // // $("#GrandTotal").val(grandTotal);
        
      });
    </script>


    
    

