<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"

  rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
   <form action="<?php echo site_url();?>query/CreateProposal" method="post"> 
   <div class="row mt-5">
    <div class="col-md-12">
     <div class="card-box ">
      <div class=" d-flex justify-content-center align-itom-center">

       <table class="table table-bordered mt-5">
        <tbody>
         <tr>
          <th scope="row"><b>Company Name</b> </th>
          <td><?php echo $view->b2bcompanyName;?></td>
          <th><b>Enquiry Id</b></th>
          <td><?php echo $view->query_id;?></td>
          <th><b>Enquiry For</b></th>
          <td><b>Package</b></td>
         </tr>
         <!-- <tr>
          <th><b>Enquiry Details</b></th>
          <td></td>
          <td></td>
          <td></td>
         </tr> -->
         <tr>
          <th><b>Check In</b></th>
          <td><?php echo date('d-m-Y', strtotime($view->specificDate)) ;?></td>
          <th><b>Check Out</b></th>
          <td><?php echo date('d-m-Y', strtotime($buildpackage->noDaysFrom))  ?></td>
          <th><b>No of Nights</b></th>
          <td><?php echo $buildpackage->night?></td>
         </tr>
         <tr>
          <th><b>City</b></th>
          <td>  <?php echo $buildpackage->goingFrom ?></td>
          <th><b>No of Pax</b></th>
          <th><b>Adult</b>: <?php echo $view->Packagetravelers;?>  </th>
          <th><b>Child: </b><?php echo $buildpackage->child;?></th>
          <th> <b>Infant :</b> <?php echo $buildpackage->infant;?></th>

         </tr>
        </tbody>
       </table>


      </div>
      <div class="mt-5">

       <div>
      

       <div class="card-body ">
       
        <div class="mt-5">
          <div>
           <div class="card-head card-head-new">
            <p>Hotel</p>
           </div>
           <div class="row mt-5 mr-3 ml-3 mb-3">
            <div>
             <table class="table" id="addrows">
              <div class="alert alert-danger noOfDaysAlertcls" style="display:none;">
                <strong>Exceed !</strong> You cannot add more than <b id="noOfDaysAlert"></b> days.
              </div>
              <div style="float:right;">      
                  <a class="btn btn-info ml-0" onclick="addrows()">add</a>                  
              </div>
              <thead>
               <tr>
                <th>Hotel City</th>
                <th>Check In</th>
                <th>Nights</th>
                <th>Category</th>
                <th>Hotel Name</th>
                <th>Room Type </th>
                <th>Bed Type </th>
                <th>Extra </th>
                <!-- <th>Action</th> -->

               </tr>
              </thead>
            
             
              <tbody>
               <tr>
                <td>
                  <!-- <input class="form-control" type="text" value="<?php //echo $view->goingTo;?>" name="buildHotelCity" id="buildHotelCity"> -->
                  <select class="form-control"  required="" name="buildHotelCity" id="buildHotelCity">
                        <option>Select City</option>                      
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
                </td>
                <td>
                  <input class="form-control" type="date" value="<?php echo $view->specificDate;?>" name="buildCheckIn" id="buildCheckIn" disabled>
                 
                </td>
                <td>
                  <!-- <input class="form-control" type="number" value="1" max="<?php //echo $buildpackage->night?>" name="buildNoNights" id="buildNoNights"> -->
                   <select class="form-control bnights" id="buildNoNights"  name="buildNoNights" required>
                        <option>Select</option>  
                        <?php $count_days=1;
                        for($count_days=1;  $count_days<=$buildpackage->night; $count_days++){
                        echo "<option>".$count_days."</option>";
                        }?>                                           
                    </select>
                </td>
                <td>
             <div>
              <select data-mdl-for="sample2" class="form-control" 
              value=""  tabIndex="-1" name="Category">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
             </select>
            </div>
           </td>
              <td>
                <!-- <input class="form-control" type="text" placeholder="Hotel Name" name="buildHotelName" id="buildHotelName" required=""> -->
                <select class="form-control" id="buildHotelName"  required="" name="buildHotelName" required>
                      <option>Select</option>                                             
                  </select>
              </td>
              <td>
                <!-- <input class="form-control" type="text"  placeholder="Room Type" name="buildRoomType" id="buildRoomType" required="">-->
              <select class="form-control" id="buildRoomType"  required="" name="buildRoomType" required>
                      <option>Select</option>                                             
                  </select>
              </td>
              <td>
                <!-- <input class="form-control" type="text"  placeholder="Room Type" name="buildRoomType" id="buildRoomType" required="">-->
              <select class="form-control" id="buildBedType"  required="" name="buildBedType" required>
                      <option value = "Single">Single</option> 
                      <option value="Double" >Double</option>                                             
                  </select>
              </td> 
              <td>
                <!-- <input class="form-control" type="text"  placeholder="Room Type" name="buildRoomType" id="buildRoomType" required="">-->
                <!-- <select required multiple=""  name="buildExtraBedType[]" id="buildExtraBedType" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg" multiple="multiple"> -->
                <!-- <select class="form-control" id="buildExtraBedType"  required="" name="buildExtraBedType" required> -->
                      <!-- <option value="extra_with_adult">Extra Bed(Adult)</option> 
                      <option value="extra_with_child" >Extra Bed(CHild)</option>
                      <option value="extra_without_bed" >Extra W/O Bed</option>                                             
                  </select> -->
                  <input type="checkbox" id="extra_with_adult" name="extra_check" value="extra_with_adult" class="check-extra"><label for="html"> Extra Bed(Adult)</label><br/>
                  <input type="checkbox" id="extra_with_child" name="extra_check" value="extra_with_child" class="check-extra"><label for="html"> Extra Bed(CHild)</label><br/>
                  <input type="checkbox" id="extra_without_bed" name="extra_check" value="extra_without_bed" class="check-extra"><label for="html"> Extra W/O Bed</label>

                  
              </td>     
              
              
         </tr>

              </tbody>
              
             </table>
             <div style="float:right;">
              <button type="button" onclick="hotelcalculation()" class="btn btn-success">Save</button></div>
            </div>

           </div>
          </div>
          
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
        <script src="<?php echo base_url();?>public/js/validate.js"></script>
                          <script>
                
                           $(document).ready(function(){
                            
                       
                           var open=true;
                            $("#travelers").click(function(){
                              if(open){

                                $("#selecttraveler").show();
                                open=false;
                              }else{
                                
                    $("#selecttraveler").hide();
                            open=true;
                              }

                            })

                            $("#closetraveller").click(function(){
                               $("#selecttraveler").hide();
                            })

                            $("#goingFrom1").change(function(){
                        
                                var checkindate=$("#specificDate1").val();
                              
                                var someDate = new Date(checkindate);
                                var numberOfDaysToAdd = $("#goingFrom1").val();
                                
                                someDate.setDate(someDate.getDate() + parseInt(numberOfDaysToAdd)); //number  of days to add, e.x. 15 days
                                var dateFormated = someDate.toISOString().substr(0,10);
                                $("#endDate1").val(dateFormated);

                         })

                        //  $(".card-box").click(function(e) {
                           
                        // });

                        $(".card-box").click(function(e){
                          e.stopPropagation(); 
                        var hotel_rate_adult = $("#hotel_rate_adult").val();
                        var total_price_internal = $("#total_price_internal").val();
                        var total_price_point = $("#total_price_point").val();
                        var total_pax_visa_price_adult = $("#total_pax_visa_price_adult").val(); 
                        var total_pax_meal_adult = $("#total_pax_meal_adult").val(); 
                        var total_pax_pvt_adult = $("#total_pax_pvt_adult").val();
                        var total_pax_sic_adult = $("#total_pax_sic_adult").val();
                        
                        var sub_total_adult = parseInt(hotel_rate_adult) +
                          parseInt(total_price_internal)+ 
                          parseInt(total_price_point) + 
                          parseInt(total_pax_visa_price_adult) + 
                          parseInt(total_pax_meal_adult) + 
                          parseInt(total_pax_pvt_adult) + 
                          parseInt(total_pax_sic_adult);

                        var hotel_rate_child = $("#hotel_rate_child").val();
                        var total_pax_pvt_hild = $("#total_pax_pvt_hild").val();
                        var total_pax_sic_hild = $("#total_pax_sic_hild").val();
                        var total_pax_meal_child = $("#total_pax_meal_child").val();
                        var total_pax_visa_price_child = $("#total_pax_visa_price_child").val();

                        var sub_total_child = parseInt(hotel_rate_child) +
                          parseInt(total_pax_sic_hild)+ 
                          parseInt(total_pax_pvt_hild) + 
                          parseInt(total_pax_meal_child) + 
                          parseInt(total_pax_visa_price_child);

                        var total_pax_visa_price_infant = $("#total_pax_visa_price_infant").val(); 
                        var total_pax_pvt_infant = $("#total_pax_pvt_infant").val();
                        var total_pax_sic_infant = $("#total_pax_sic_infant").val();

                        var sub_total_infant = parseInt(total_pax_visa_price_infant) +
                          parseInt(total_pax_pvt_infant)+ 
                          parseInt(total_pax_sic_infant);

                          
                        
                          $("#subtotal_adults").html( sub_total_adult );                      
                          $("#subtotal_childs").html( sub_total_child );                               
                          $("#subtotal_infants").html( sub_total_infant ); 

                          var PackageMarkup = $("#PackageMarkup").val();
                          var Mark_up =$("#Mark_up").val();

                          var total_adult =0;
                          var total_child = 0;
                          var total_infant = 0;
                          if(Mark_up == "precentage"){

                             total_adult = (parseInt(sub_total_adult) + (parseInt(sub_total_adult) * parseInt(PackageMarkup) / 100));
                             total_child = (parseInt(sub_total_child) + (parseInt(sub_total_child) * parseInt(PackageMarkup) / 100));
                             total_infant = (parseInt(sub_total_infant) + (parseInt(sub_total_infant) * parseInt(PackageMarkup) / 100));

                          }
                          if(Mark_up == "values"){

                            total_adult = (parseInt(sub_total_adult) + parseInt(PackageMarkup));
                            total_child = (parseInt(sub_total_child) + parseInt(PackageMarkup));
                            total_infant = (parseInt(sub_total_infant) + parseInt(PackageMarkup));

                            
                          }
                        
                          $("#totalprice_adult").html( total_adult );
                          $("#totalprice_childs").html( total_child );
                          $("#totalprice_infants").html( total_infant );

                          var per_pax_adult = (parseInt(total_adult) / 2);
                          var per_pax_child = (parseInt(total_child) / 2);
                          var per_pax_infant = (parseInt(total_infant) / 2);
                          
                          $("#perpax_adult").html(per_pax_adult);
                          $("#perpax_childs").html( per_pax_child );
                          $("#perpax_infants").html( per_pax_infant );

                       
                        
                         })


                         $(".check-adult").change(function(){
                         var old_adult = <?php echo $view->Packagetravelers;?>;
                         var new_adult = $('.check-adult').val();
                        
                        
                         if(new_adult > old_adult){
                          $('.check-adult').val(old_adult);
                         }else{
                          $('.check-adult').val(new_adult);
                         }
                        

                        })


                        $(".check-child").change(function(){
                         var old_child = <?php echo $buildpackage->child;?>;
                         var new_child = $('.check-child').val();
                        
                        
                         if(new_child > old_child){
                          $('.check-child').val(old_child);
                         }else{
                          $('.check-child').val(new_child);
                         }
                        

                        })

    

                        })

                   
                        var faqs_row2= 0;                    
                        function addrowss(){
                          // alert("hi");
                          var adds=' <tr  id="faqs-row1'+faqs_row2 + '">  <td><input class="form-control" type="date" value="<?php echo $view->specificDate;?>" name="buildCheckIn" id="buildCheckIn"></td> <td> <div> <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" name="visa_category"> <option value="Standard">Standard</option> <option value="Premium">Premium</option> </select> </div> </td> <td> <div> <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" name="Meal"> <option value="Lunch">Lunch</option> <option value="Dinner">Dinner</option> </select> </div> </td> <td> <div> <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" name="Meal_Type"> <option value="Veg">Veg</option> <option value="Non-Veg">Non-Veg</option> <option value="Jain">Jain</option> </select> </div> </td> <td><input type="text" placeholder="0" class="form-control" name="adult"> </td> <td><input type="text" placeholder="0" class="form-control" name="child"> </td> <td><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i></button> </td> </tr>';
                            $('#addrowss').append(adds);
                          faqs_row2++;
                        }
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
               <div class="row mt-4 mr-3 ml-3 mb-3"
                <table class="table table-bordered">
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
                    <td><select class="form-control"  id ="Mark_up" name="Mark_up">
                   
                     <option value="precentage">%</option>
                     <option value="values">Value</option>
                    </select></td>
                    <td><input type="text" class="form-control" name="PackageMarkup" id="PackageMarkup" value="0"></td>
                   </tr>
                   </table>
               <div></div>
              </br>
               <table class="table table-bordered">
               <tr align="center">
                   <td type="" name="person" id="person" value=""><span></td>
                   <td type="" name="AdultCost" id="AdultCost" value=""><span>Adult</td>
                   <td type="" name="ChildCost" id="ChildCost" value=""><span>Child</td>
                   <td type="" name="InfantCost" id="InfantCost" value=""><span>Infant</td>
                  </tr>
                   <tr  align="center">
                    <td><b>Sub Total</b></td>
                    <td type="" id="subtotal_adults"  name="subtotal_adults"></td>
                    <td type="" id="subtotal_childs"  name="subtotal_childs"></td>
                    <td type="" id="subtotal_infants"  name="subtotal_infants"></td>
                   </tr>
                   <tr  align="center">
                    <td><b>Total Price</b></td>
                    <td type="" name="totalprice" id="totalprice_adult" value=""></td>
                    <td type="" name="totalprice1" id="totalprice_childs" value=""></td>
                    <td type="" name="totalprice2" id="totalprice_infants" value=""></td>
                   </tr>
                   <tr  align="center">
                    <td><b>Per PAX</b></td>
                    <td type="" name="perpax" id="perpax_adult" value=""></td>
                    <td type="" name="perpax1" id="perpax_childs" value=""></td>
                    <td type="" name="perpax2" id="perpax_infants" value=""></td>   
                   </tr>
               </table>
                   
               </div>
              </div>
             </div>
    <div class="mt-5">
              <div>
               <div class="card-head card-head-new ">
                <p>Terms  :</p>
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
    id="buildPackageConditions" name="buildPackageConditions" style="height: 100px">
    v  Rooms and rates are subject to availability at the time of actual booking.

    v  Standard Check-In: 1500 hrs. & Checkout: 1200 hrs.

    v  Early Check-In and Late Check-Out is subject to availability unless booked and confirmed in advance

    v  Normal timing for airport pick-up & drop transfer is 6.00 am to 10.00 pm and extra charges will be applicable except this timings and subject to available of vehicles

    v  Any change in the number of passengers will lead to a revision of the quote.

    v  Vehicle used in the above quote is based on all guests arriving/ departing together in the same flight. In case additional transfers are required, same will be arranged at an additional cost.

    v  Above quotes based on normal ticket prices, rate will be subject to change if we receive any revise rate at later stage

    v  Itinerary might get changed according to the availability of tours & services and it will be informed and updated to the guest once they reach Dubai

    v  OK TO BOARD Message update as per airline???s policy

    v  Visa processing may take anywhere between 3 ??? 5 working days to get approved

    v  Issuance of visa will be subject to approval from immigration however once visa is applied charges will be applicable and NO refund will be granted.

    v  In case of overstay ??? Travel agent will be held accountable to settle the fine imposed by immigration which is AED 100.00 Per day (Subject to revision from immigration).

    v  We need pre-payment for Dubai Visa and Insurance and it???s nonrefundable.

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
   id="buildPackageCancellations" name="buildPackageCancellations" style="height: 100px">
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

 <!-- <button type="submit" class="contact-next-btn mr-4">View Proposal</button>  -->
 <a id="view-proposal" type="button" class="contact-next-btn mr-4" href="<?php echo base_url();?>/proposal.html">View Proposal</a> 


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
<input type="hidden" name="allocated_days" id="allocated_days" value="0"/>

<?php $this->load->view('footer');?>
<script type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment-with-locales.min.js"></script>

<script>
  $('#buildHotelCity').on('change', function() {
    var city = $('#buildHotelCity').val();
    $("#buildHotelName").empty();
    $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/Query/get_hotels',
          data:{'city':city},
          success:function(response){

          var i;
          $('#buildHotelName').append($("<option>Select</option>"));
            for (i = 0; i < response.length; ++i) {
                $('#buildHotelName')
                    .append($("<option></option>")
                                .attr("value", response[i].id)
                                .text(response[i].hotelname));
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
//           url:'<?php echo site_url();?>/Query/get_hotels',
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
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/Query/get_room_type',
          data:{'hotel_id':hotel_id},
          success:function(response){
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
     function getvisaprice(){
      var visa_category_drop_down =  $("#visa_category_drop_down").val();
      var entry_type = $("#entry_type").val();
      var pax_adult = <?php  echo $view->Packagetravelers; ?>;
      var pax_child = <?php  echo $buildpackage->child; ?>;
      var pax_infant = <?php echo $buildpackage->infant;?>;
      var visa_validity =  $("#visa_validity").val();
      console.log(pax_adult + "|" + entry_type + "|" + visa_validity);
      $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/Query/getVisaPrice',
          data:{'pax_adult':pax_adult,'pax_child':pax_child,'pax_infant':pax_infant,'visa_category_drop_down':visa_category_drop_down,'visa_validity':visa_validity,'entry_type':entry_type},
          success:function(response){
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


      <script>
        function mealcalculation(){
          var res_name =  $("#res_name").val();
          var meal_cal =  $("#meal_cal").val();
          var adult_meal_cal =  $("#adult_meal_cal").val();
          var child_meal_cal =  $("#child_meal_cal").val();
          var meal_type_cal =  $("#meal_type_cal").val();

          $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/Query/getMealcalculation',
          data:{'res_name':res_name,'meal_cal':meal_cal,'adult_meal_cal':adult_meal_cal,'child_meal_cal':child_meal_cal,
            'meal_type_cal':meal_type_cal},
          success:function(response){
          console.log(response);
          $("#total_pax_meal_adult").val(response.adult_price);
            $("#total_pax_meal_child").val(response.child_price);



            
          }
        })

        }
         
      </script>
<input type="hidden" id="total_pax_meal_adult" name="total_pax_meal_adult" value="0" />
<input type="hidden" id="total_pax_meal_child" name="total_pax_meal_child" value="0" />
    
     <script>
      
      function excursionSICcalculation(){
        
        var excursion_types_SIC =  $('select#excursion_type_SIC').val(); //$("#excursion_type_SIC").val();
        var excursion_name_SIC = $('select#excursion_name_SIC').val();
        var excursion_adults_SIC =  $("#excursion_adult_SIC").val();
        var excursion_childs_SIC =  $("#excursion_child_SIC").val();
        var excursion_infants_SIC =  $("#excursion_infant_SIC").val();
           $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/Query/getExcursionSICCalculation',
          data:{'excursion_types_SIC':excursion_types_SIC,'excursion_adults_SIC':excursion_adults_SIC,'excursion_childs_SIC':excursion_childs_SIC,'excursion_infants_SIC':excursion_infants_SIC,
            'excursion_name_SIC':excursion_name_SIC},
          success:function(response){
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
      
      function excursionPVTcalculation(){
       

        var hidden_total_pax = $('#hidden_total_pax').val();
        var excursion_type_PVT =  $("#excursion_type_PVT").val();
        var excursion_name_PVT = $('select#excursion_name_PVT').val();
        var excursion_adult_PVT =  $("#excursion_adult_PVT").val();
        var excursion_child_PVT =  $("#excursion_child_PVT").val();
        var excursion_infant_PVT =  $("#excursion_infant_PVT").val();

        // console.log(excursion_name_SIC);
       
        $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/Query/getExcursionPVTCalculation',
          data:{
            'excursion_type_PVT':excursion_type_PVT,'excursion_adult_PVT':excursion_adult_PVT,
            'excursion_child_PVT':excursion_child_PVT,'excursion_infant_PVT':excursion_infant_PVT,'excursion_name_PVT':excursion_name_PVT,'total_pax':hidden_total_pax},
          success:function(response){
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

     <script>


      function hotelcalculation(){
       
     
        var with_adult ='';
        var with_child ='';
        var without_bed ='';
        if ($('#extra_with_adult').is(":checked"))
        {
          with_adult = $('#extra_with_adult').val();
        }
        if ($('#extra_with_child').is(":checked"))
        {
          with_child = $('#extra_with_child').val();
        }
        if ($('#extra_without_bed').is(":checked"))
        {
          without_bed = $('#extra_without_bed').val();
        }
       
        // console.log(extra_with_adult);
        var extra_with_adult = with_adult;
        var extra_with_child =with_child;
        var extra_without_bed =without_bed;

        var build_extra_bedtype =  $("#buildExtraBedType").val();
        var pax_adult = <?php  echo $view->Packagetravelers; ?>;
        var pax_child = <?php  echo $buildpackage->child; ?>;
        var total_pax = pax_adult + pax_child;
        var build_hotel_name =  $("#buildHotelName").val();
        var build_room_type = $("#buildRoomType").val();
        var no_of_nights = $("#buildNoNights").val();

        var build_bed_type = $("#buildBedType").val();

        $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/Query/getHotelCalculation',
          data:{'pax_adult':pax_adult,'pax_child':pax_child,'build_room_type':build_room_type,'no_of_nights':no_of_nights,'build_hotel_name':build_hotel_name,'build_bed_type':build_bed_type,'extra_with_adult':extra_with_adult,'extra_with_child':extra_with_child,'extra_without_bed':extra_without_bed},
          success:function(response){        
          $('#hotel_rate_adult').val(response.total_pax_adult_rate);
          $('#hotel_rate_child').val(response.total_pax_child_rate);
          
          }
        })

      }
</script>
<input type="hidden" id="hotel_rate_adult" name="hotel_rate_adult" value="0" />
<input type="hidden" id="hotel_rate_child" name="hotel_rate_child" value="0" />
    <script>
      function fetchexcursion(){
        // alert("work");
        var excursion_type=$("#excursion_type").val();
        var excursion_name=$("#excursion_name").val();

        var excursion_adult=$("#excursion_adult").val();
        var excursion_child=$("#excursion_child").val();

        var excursion_infant=$("#excursion_infant").val();

        $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/query/fetchexcursion',
          data:{'excursion_type':excursion_type,'excursion_name':excursion_name,'excursion_adult':parseInt(excursion_adult),'excursion_child':parseInt(excursion_child),'excursion_infant':parseInt(excursion_infant)},
          success:function(response){
console.log(response);
          }
        })
      }
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
        $("#visa_status").on("change",function(){
            // alert(this.value);
            $("#visadisplay").show();
        })
        $("#visa_status1").on("change",function(){
            $("#visadisplay").hide();
        })

        $("#excursion_status").on("change",function(){
            // alert(this.value);
            $("#excursiondisplay").show();
        })
        $("#excursion_status1").on("change",function(){
            $("#excursiondisplay").hide();
        })

       $('#pickupinternal').on('change', function() {
        alert(this.value);
        $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/query/fetchdropoff',
          data:{'pickup':this.value },
          success:function(response){
            $("#dropoffinternal").html('<option value="dropoff">dropoff</option>');
            console.log(response.data.length);

//$('#bus_type').html("<option value='"+ data.type +"'>"+ data.type +"</option>");
var options=""
for(var i=0;i<response.data.length;i++){
    console.log(response.data[i].dest_city);
options+='<option value="'+response.data[i].dest_city+'">'+response.data[i].dest_city+'</option>';

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
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/query/fetchdropoff1',
          data:{'pickup':this.value },
          success:function(response){
            $("#dropoffpoint").html('<option value="dropoff">dropoff</option>');
            console.log(response.data.length);

//$('#bus_type').html("<option value='"+ data.type +"'>"+ data.type +"</option>");
var options=""
for(var i=0;i<response.data.length;i++){
    console.log(response.data[i].dest_city);
options+='<option value="'+response.data[i].dest_city+'">'+response.data[i].dest_city+'</option>';

}


        $("#dropoffpoint").append(options);
            // $("#ProposalPage").html(response);
            // $("#FullPage").hide();
          }


        });
       });

    

       $('#dropoffinternal').on('change', function() {
        var value=$("#pickupinternal").val();
        var pax_internal=$("#pax_internal").val();
        //alert(this.value);
        $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/query/fetchprice',
          data:{'dropoff':this.value ,'pickup':value,'person':pax_internal},
          success:function(response){
            $("#route_nameinternal").val(response.route_name);
           // $("#pax_count_internal").val(response.data[0].seat_capacity);
             $("#price_internal").val(response.data);
               var total_price=response.data*pax_internal;
             $("#total_price_internal").val(total_price);
           }


        });
       });

     
       
       $('#dropoffpoint').on('change', function() {
        var value=$("#pickuppoint").val();
        var pax_internal=$("#pax_point").val();
        //alert(this.value);
        $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/query/fetchprice1',
          data:{'dropoff':this.value ,'pickup':value,'person':pax_internal},
          success:function(response){
            $("#route_namepoint").val("");
            $("#route_namepoint").val(response.route_name);
           // $("#pax_count_internal").val(response.data[0].seat_capacity);
             $("#price_point").val(response.data);
               var total_price=response.data*pax_internal;
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
       if(name == "Internal Transfer")
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
        if(name == "Point to Point Transfer")
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

          var q_id = $("#QueryId").val();          
          var currencyOption = $("#currencyOption").val();
          var perpax_adult = $("#perpax_adult").val();
          var perpax_childs = $("#perpax_childs").val();
          var perpax_infants =$("#perpax_infants").val();

          var hotelName = $("#buildHotelName").val();
          var noOfNights = $("#buildNoNights").val();
          var roomType = $("#buildRoomType").val();

          var excursion_name_SIC = $("#excursion_name_SIC").val();
          var excursion_name_PVT = $("#excursion_name_PVT").val();
          var buildPackageInclusions = $("#buildPackageInclusions").val();
          var buildPackageExclusions = $("#buildPackageExclusions").val();
          var buildPackageConditions = $("#buildPackageConditions").val();
          var buildPackageCancellations = $("#buildPackageCancellations").val();
          var buildPackageRefund = $("#buildPackageRefund").val();

          var pickupinternal = $("#pickupinternal").val();
          var dropoffinternal = $("#dropoffinternal").val();
          var buildTravelFromdateCab = $("#buildTravelFromdateCab").val();

          var buildTravelFromdatePPT = $("#buildTravelFromdatePPT").val();
          var pickuppoint = $("#pickuppoint").val();
          var dropoffpoint = $("#dropoffpoint").val();
          
          

          $.ajax({
          type:"POST",
          url:'<?php echo site_url();?>/query/CreateProposal',
          data:{'q_id':q_id,'currencyOption':currencyOption,'perpax_adult':perpax_adult,
            'perpax_childs':perpax_childs,'perpax_infants':perpax_infants,
            'hotelName':hotelName,'noOfNights':noOfNights,'roomType':roomType,'excursion_name_SIC':excursion_name_SIC,
          'excursion_name_PVT': excursion_name_PVT,'buildPackageInclusions':buildPackageInclusions,'buildPackageExclusions':buildPackageExclusions,
        'buildPackageConditions':buildPackageConditions,'buildPackageCancellations':buildPackageCancellations,'buildPackageRefund':buildPackageRefund,
      'buildTravelFromdateCab':buildTravelFromdateCab,'dropoffinternal':dropoffinternal,'pickupinternal':pickupinternal,
    'buildTravelFromdatePPT':buildTravelFromdatePPT,'pickuppoint':pickuppoint,'dropoffpoint':dropoffpoint},
          success:function(response){

            $("#ProposalPage").html(response);
            $("#FullPage").hide();
          }


        });
      });

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
      //   //   url:'<?php echo site_url();?>/query/CreateProposal',
      //   //   data:{'q_id':q_id,'CityName':CityName,'travelDay':travelDay,'Nodays':Nodays,'hotelName':hotelName,'roomType':roomType,'mealType':mealType,'grandTotal':grandTotal,'buildPackageInclusions':buildPackageInclusions,'buildPackageExclusions':buildPackageExclusions,'buildPackageConditions':buildPackageConditions,'buildPackageCancellations':buildPackageCancellations,'buildPackageInformations':buildPackageInformations,'buildPackageBookingTerms':buildPackageBookingTerms,'buildPackageWhyUse':buildPackageWhyUse,'buildPackageRefund':buildPackageRefund},
      //   //   success:function(response){

      //   //     $("#ProposalPage").html(response);
      //   //     $("#FullPage").hide();
      //   //   }


      //   // });
      // });
    </script>
     <script src="<?php echo base_url();?>public/js/validate.js"></script>
                <script>
               
                  $(document).ready(function(){

                   
                  

                   
                           var open=true;
                            $("#travelers").click(function(){
                              if(open){

                                $("#selecttraveler").show();
                                open=false;
                              }else{
                                
                    $("#selecttraveler").hide();
                            open=true;
                              }

                            })

                            $("#closetraveller").click(function(){
                               $("#selecttraveler").hide();
                            })

                            $("#goingFrom1").change(function(){
                        
                    var checkindate=$("#specificDate1").val();
                  
                    var someDate = new Date(checkindate);
                    var numberOfDaysToAdd = $("#goingFrom1").val();
                    
                    someDate.setDate(someDate.getDate() + parseInt(numberOfDaysToAdd)); //number  of days to add, e.x. 15 days
                    var dateFormated = someDate.toISOString().substr(0,10);
                    $("#endDate1").val(dateFormated);

                         });                      

                          
                            
                        })

                        
                        $('.bnights').on("change", function () {
                            var sum = 0;                          
                            $('.bnights').each(function () {
                                sum += Number($(this).val());
                            });

                            $('#allocated_days').val(sum);


                        });

                       
                        function addrows(){
                          var faqs_row = 0;  
                          var totalNoOfDays = <?php echo $buildpackage->night?> ;
                          var allocated_days = parseInt($('#allocated_days').val());
                          var remaining_days = parseInt(totalNoOfDays) - allocated_days;
 
                          var template = '';
                          var city = '<td><select class="form-control get-hotel" name="buildHotelCity'+faqs_row+'" id="buildHotelCity'+faqs_row+'"><option>Select City</option><option value="Dubai">Dubai</option><option value="AbuDhabi">Abu Dhabi</option><option value="Sharjah">Sharjah</option><option value="Ajman">Ajman</option><option value="Sir Baniyas">Sir Baniyas</option><option value="Umm Al-Quwain">Umm Al-Quwain</option><option value="Fujairah">Fujairah</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Al Ain">Al Ain</option></select></td>';
                          var bnight = '<td><select class="form-control bnights" id="buildNoNights'+faqs_row+'"  name="buildNoNights'+faqs_row+'" required>';
                                          for (let i = 1; i <= (remaining_days); i++) {
                                            bnight += '<option>'+i+'</option>';
                                          }
                              bnight += '</select></td>';
                          var room ='<td><select class="form-control get-hotel-room" name="buildRoomType'+faqs_row+'" id="buildRoomType'+faqs_row+'" required></select></td>';
                          template += '<tr id="faqs-row' + faqs_row + '">';
                          // template += '<td><input class="form-control" type="text" value="" name="buildHotelCity'+faqs_row+'" id="buildHotelCity'+faqs_row+'"></td>';
                          template += city;
                          template += '<td><input class="form-control" type="date" value="'+f.format("YYYY-MM-DD")+'" name="buildCheckIn'+faqs_row+'" id="buildCheckIn'+faqs_row+'" disabled></td>';
                          template += bnight;
                          template += ' <td> <div> <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" name="Category'+faqs_row+'"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> </select> </div> </td>';
                          // template += '<td><input class="form-control" type="text" placeholder="Room Type" name="buildRoomType'+faqs_row+'" id="buildRoomType'+faqs_row+'" required=""></td> ';
                          template +=  room;
                          template += '<td><button type="button" class="btn btn-danger btn-xs cls-btn"  id="del_btn'+faqs_row+'"  onClick="return  removeHotel(this);"><i class="fa fa-trash"></i></button> </td>';
                          template += '</tr>';

                          $("#addrows").append(template);

                          }
                        
                   
                      //   var faqs_row = 0;  
                       
                      //   function addrows(){
                          
                      //     setTimeout(function(){ $('.noOfDaysAlertcls').attr("style","display:none;") }, 2000);
                      //     var initaldays = parseInt($('#buildNoNights').val());
                      //     // alert(initaldays);

                      //     if(isNaN(initaldays) || initaldays == ""){
                      //       $('#buildNoNights').attr('style',"border-color:red");
                      //     }else{
                      //       $('#buildNoNights').removeAttr('style',"border-color:red");

                          
                      //     var totalNoOfDays = <?php echo $buildpackage->night?> ;
                      //     var allocated_days = parseInt($('#allocated_days').val());
                      //     // var allocated_days = parseInt(allocated_day); 
                      //     alert(allocated_days);
                      //     var d = "<?php echo $view->specificDate;?>";                         
                      //     var f = moment(d).add(allocated_days, 'days');

                      //    if( totalNoOfDays > allocated_days){
                      //     $('#buildNoNights').attr('disabled',true);
                      //     var template = '';
                      //     var city = '<td><select class="form-control get-hotel" name="buildHotelCity'+faqs_row+'" id="buildHotelCity'+faqs_row+'"><option>Select City</option><option value="Dubai">Dubai</option><option value="AbuDhabi">Abu Dhabi</option><option value="Sharjah">Sharjah</option><option value="Ajman">Ajman</option><option value="Sir Baniyas">Sir Baniyas</option><option value="Umm Al-Quwain">Umm Al-Quwain</option><option value="Fujairah">Fujairah</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Al Ain">Al Ain</option></select></td>';
                      //     var bnight = '<td><select class="form-control bnights" id="buildNoNights'+faqs_row+'"  name="buildNoNights'+faqs_row+'" required>';
                      //                     for (let i = 1; i <= (totalNoOfDays-allocated_days); i++) {
                      //                       bnight += '<option>'+i+'</option>';
                      //                     }
                      //         bnight += '</select></td>';
                      //     var room ='<td><select class="form-control get-hotel-room" name="buildRoomType'+faqs_row+'" id="buildRoomType'+faqs_row+'" required></select></td>';
                      //     template += '<tr id="faqs-row' + faqs_row + '">';
                      //     // template += '<td><input class="form-control" type="text" value="" name="buildHotelCity'+faqs_row+'" id="buildHotelCity'+faqs_row+'"></td>';
                      //     template += city;
                      //     template += '<td><input class="form-control" type="date" value="'+f.format("YYYY-MM-DD")+'" name="buildCheckIn'+faqs_row+'" id="buildCheckIn'+faqs_row+'" disabled></td>';
                      //     template += bnight;
                      //     template += ' <td> <div> <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" name="Category'+faqs_row+'"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> </select> </div> </td>';
                      //     // template += '<td><input class="form-control" type="text" placeholder="Room Type" name="buildRoomType'+faqs_row+'" id="buildRoomType'+faqs_row+'" required=""></td> ';
                      //     template +=  room;
                      //     template += '<td><button type="button" class="btn btn-danger btn-xs cls-btn"  id="del_btn'+faqs_row+'"  onClick="return  removeHotel(this);"><i class="fa fa-trash"></i></button> </td>';
                      //     template += '</tr>';

                      //     $("#addrows").append(template);
                      //     $('#allocated_days').val(parseInt($('#buildNoNights'+faqs_row).val()) + parseInt($('#allocated_days').val()) );
                          
                      //     $("[type='number']").keypress(function (evt) {
                      //         evt.preventDefault();
                      //     });

                      //     if($("#faqs-row"+faqs_row).length == 0) {
                      //       $('#buildNoNights').attr('disabled',false);
                      //     }
                         

                      //   }else{
                      //     $('#noOfDaysAlert').html(totalNoOfDays);
                      //     $('.noOfDaysAlertcls').attr("style","display:block;");
                      //   }
                         
                       

                      //     // var allocated_days = $('#allocated_days').val();
                      //     // if( ($('#allocated_days').val() == "")) allocated_days = parseInt($('#buildNoNights').val());
                      //     // // alert(allocated_days);
                      //     // var d = "<?php echo $view->specificDate;?>";                         
                      //     // var totalNoOfDays = <?php echo $buildpackage->night?> ;
                      //     // var f = moment(d).add(allocated_days, 'days');
                      //     // if( allocated_days < totalNoOfDays ){
                      //     //   // var add=' <tr  id="faqs-row' + faqs_row + '"> <td><input class="form-control" type="text" value="<?php echo $view->goingTo;?>" name="buildHotelCity" id="buildHotelCity"></td> <td><input class="form-control" type="date" value="<?php echo $view->specificDate;?>" name="buildCheckIn" id="buildCheckIn"></td> <td><input class="form-control" type="text" value="1" name="buildNoNights" id="buildNoNights'+ faqs_row +'"></td> <td> <div> <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" name="Category"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> </select> </div> </td> <td><input class="form-control" type="text" placeholder="Hotel Name" name="buildHotelName" id="buildHotelName" required=""></td> <td><input class="form-control" type="text" placeholder="Room Type" name="buildRoomType" id="buildRoomType" required=""></td> <td><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i></button> </td> </tr>';
                      //     //   // $('#addrows').append(add);  $(\'buildNoNights'+faqs_row+ '\').val();
                      //     //   var add=' <tr  id="faqs-row' + faqs_row + '">  <td><input class="form-control" type="date" value="'+f.format("YYYY-MM-DD")+'" name="buildCheckIn'+faqs_row+'" id="buildCheckIn'+faqs_row+'" disabled></td><td><input class="form-control" type="text" value="2" name="buildNoNights'+faqs_row+'" id="buildNoNights'+ faqs_row +'"></td><td><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove()"><i class="fa fa-trash"></i></button> </td> </tr>';
                      //     //   $('#addrows').append(add);
                      //     //   var Selectedvalue =  $( "#buildNoNights"+faqs_row).val(); 
                      //     //   $('#allocated_days').val(parseInt(allocated_days) + parseInt(Selectedvalue) );
                      //     //   faqs_row++;   
                      //     // }else{
                      //     //   alert("Cannot Add more than "+totalNoOfDays+" days");
                      //     // }


                      //   }
                      // }
                      
                      // removeHotel =function  removeHotel(data){
                      //       // console.log(data.closest('tr'));
                      //       var allocateddays = parseInt($('#allocated_days').val());                           
                      //       var tr = data.closest('tr');
                      //       // var lessdays = tr.('select.bnights').val();
                      //       // var lessdays =  data.closest('.bnights');
                      //       // console.log(lessdays);
                      //       var deleted_days = (Number(allocateddays) - Number(lessdays));
                      //       $('#allocated_days').val(deleted_days);
                      //       data.closest('tr').remove();
                            
                      //   }
                     
</script>

</script>
   




    
    

