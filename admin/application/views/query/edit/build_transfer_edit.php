<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"

  rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <?php $this->load->view('header');?>
  <!-- start page container -->
  <div class="page-container">
   <!-- start sidebar menu -->
   <?php $this->load->view('side_bar');?>
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
       &nbsp;<a class="parent-item" href="#">Queries</a>

      </li>

     </ol>
    </div>
   </div>

   <!-- <div class="page-bar ">
   <button type="button" id="del_query" onclick="delQuery()" class="new_btn px-5 float-right">Cancel</button>
   </div> -->

   <form id="proposal-form" action="<?php echo site_url();?>query/CreateProposalTransfer" method="post"> 
   <input type="hidden" id="hotel_name_in" name="hotel_name_in" value="" />
   <input type="hidden" id="totalprice_transfer" name="totalprice_transfer" value="0" />


   <div class="row mt-5">
    <div class="col-md-12">
     <div class="card-box ">
      <div class=" d-flex justify-content-center align-itom-center">

       <table class="table table-bordered mt-5">
        <tbody>
        <tr>
          <th><b>Enquiry For</b></th>
          <td colspan="3"><b>Transfer</b></td>
          </tr>
         <tr>
          <th scope="row"><b>Company Name</b> </th>
          <td><?php echo $view->b2bcompanyName;?></td>
          <th><b>Enquiry Id</b></th>
          <td><?php echo $view->query_id;?></td>
          
         </tr>
         <tr>
          <th><b>Service Date</b></th>
          <td><?php echo date('d M Y', strtotime($view->specificDate)) ;?></td>
          <th ><b>City</b></th>
          <td> <?php echo $buildpackage->goingFrom ?></td>
         </tr>
         <tr>
          <th><b>No of Pax</b></th>
          <th><b>Adult</b>: <?php echo $view->Packagetravelers;?>  </th>
          <th><b>Child: </b><?php echo $buildpackage->child;?></th>
          <th><b>Infant :</b> <?php echo $buildpackage->infant;?></th>
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
             <p>Transfer</p>
            </div>
            <div class="row mt-4 mr-3 ml-3 mb-3">
             <div class="col">
              <label for="" class="transport-lable"><b>Transport Type</b>
              :</label>
              <input type="checkbox" <?php echo count($internal_query) > 0 ? 'checked' : "" ?> name="TransType" id="TrasportTypeCab" class="mr-3 ml-2 " value="Internal Transfer"><span
              class="transport-lable-ckeck">Internal Transfer</span><span class="checkmark"></span>
              <input type="checkbox" <?php echo count($return_query) > 0 ? 'checked' : "" ?> name="TransType" id="TrasportTypeSic" class="mr-3 ml-2 " value="Point to Point Transfer"><span
              class="transport-lable-ckeck">Return Transfer</span><span class="checkmark"></span>
             </div>

            </div>
            <div>
             <table class="table">
              <thead>
               <tr>
                <th scope="col">Transport type</th>
                <th scope="col">Pax</th>
                <th scope="col">Form Date</th>
             
                <th scope="col">Pickup Location</th>
                <th scope="col">Drop Off Location</th>
                <th scope="col">Route Name</th>



               </tr>
              </thead>

              <tbody id="transfer_body">
              
              <?php if(!empty($internal_query)) : ?>
               <?php foreach(explode(",",$internal_query[0]->transfer_date) as $key => $value) : ?> 
               <tr id="PvtCab1<?php echo $key ?>" >
                <th>Internal Transfer</th>
               
                <td><input class="form-control" type="number" id="pax_internal" placeholder="Pax" value="<?php echo $view->Packagetravelers+$buildpackage->child;?>" name="buildTravelFromCityCab[]" disabled></td>
                <td><input class="form-control internal_transfer_date" type="date" value="<?php echo (explode(",",$internal_query[0]->transfer_date)[$key]);?>" id="buildTravelFromdateCab" name="buildTravelFromdateCab[]"></td>
               
                <td>
                <select id="pickupinternal_<?php echo $key ?>" name="buildTravelToDateCab[]"  class="internal_transfer_pickup js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                  <option value="<?php echo (explode(",",$internal_query[0]->pickup)[$key]);?>" ><?php echo (explode(",",$internal_query[0]->pickup)[$key]);?></option>
                </select>
               </td>

                <td>
                <select id="dropoffinternal_<?php echo $key ?>" name="buildTravelToCityCabDrop[]"  class="internal_transfer_dropoff js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                <option value="<?php echo (explode(",",$internal_query[0]->dropoff)[$key]);?>" ><?php echo (explode(",",$internal_query[0]->dropoff)[$key]);?></option>
                </select>
                </td>

                <td>
                    <input id="price_internal" type="hidden" name="price_internal[]" />
                    <input id="pax_count_internal" type="hidden" name="pax_count_internal[]" />
                    <input id="total_price_internal" type="hidden" value="0" name="total_price_internal[]" />
                    <input id="route_nameinternal" class="form-control internal_transfer_route" type="text" value="<?php echo (explode(",",$internal_query[0]->transfer_route)[$key]);?>" placeholder="Route Name" name="buildTravelTypeCab[]">
                </td>

                <?php if($key == 0) : ?>
                  <td><a class="new_btn px-3" onclick="transRow()">add</a></td>
                <?php else : ?>
                  <td><button class="btn btn-danger btn-xs" type="button" onclick="removeRow('PvtCab1<?php echo $key ?>')"><i class="fa fa-trash"></i></button> </td>
                <?php endif ?>

               </tr>
                <?php endforeach ;?>
                <?php endif ?>

                <?php if(!empty($return_query)) : ?>

                <?php foreach(explode(",",$return_query[0]->transfer_date) as $key => $value) : ?> 
                <tr id="Sic1<?php echo $key ?>">
                <th>Return Transfer</th>
              <td><input class="form-control" id="pax_point" type="text" placeholder="Pax" value="<?php echo $view->Packagetravelers+$buildpackage->child;?>" name="buildTravelFromCitySIC[]" disabled></td>
              <td><input class="form-control return_transfer_date" id="buildTravelFromdatePVT" type="date" value="<?php echo (explode(",",$return_query[0]->transfer_date)[$key]);?>" name="buildTravelFromdatePVT[]"></td>
               
              <td>
                <select id="pickuppoint_<?php echo $key ?>"  required  name="buildTravelToDateSIC[]"  class="return_transfer_pickup js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                <option value="<?php echo (explode(",",$return_query[0]->pickup)[$key]);?>"><?php echo (explode(",",$return_query[0]->pickup)[$key]);?></option>
              </select></td>
                <td>
                <select   id="dropoffpoint_<?php echo $key ?>" name="buildTravelToCitySIC[]"  class="return_transfer_dropoff js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                <option value="<?php echo (explode(",",$return_query[0]->dropoff)[$key]);?>"><?php echo (explode(",",$return_query[0]->dropoff)[$key]);?></option>
              </select>
                  </td>
                <td><input id="route_namepoint" class="form-control return_transfer_route" value="<?php echo (explode(",",$return_query[0]->transfer_route)[$key]);?>" type="text" placeholder="Route Name" name="buildTravelTypeSIC[]"></td>
                
                <input id="price_point" type="hidden" name="price_point[]" />
                <input id="pax_count_point" type="hidden" name="pax_count_point[]" />
                <input id="total_price_point" type="hidden" value="0" name="total_price_point[]" />

                <?php if($key == 0) : ?>
                  <td><a class="new_btn px-3" onclick="transReturnRow()">add</a></td>
                <?php else : ?>
                  <td><button class="btn btn-danger btn-xs" type="button" onclick="removeRow('Sic1<?php echo $key ?>')"><i class="fa fa-trash"></i></button> </td>
                <?php endif ?>

               </tr>
               <?php endforeach ;?>
               <?php endif ?>


                 <tr id="Train" style="display: none;">
                <th>Train</th>
                <td><input class="form-control" type="date" value="<?php echo $view->specificDate;?>" name="buildTravelFromdateTrain"></td>
                <td><input class="form-control" type="text" placeholder="From City" name="buildTravelFromCityTrain"></td>
                <td><input class="form-control" type="date" placeholder="To Date" name="buildTravelToDateTrain"></td>
                <td><input class="form-control" type="text" placeholder="To City" name="buildTravelToCityTrain"></td>
                <td><input class="form-control" type="text" placeholder="Type" name="buildTravelTypeTrain"></td>
                <td><button type="button" class="new_btn px-3">Add</button>
                </td>

               </tr>
              </tbody>
             </table>
             <div class="d-flex justify-content-end">
              <button type="button" id="transferSave" class="new_btn px-5">Save</button>
              </div>
            </div>
            
            </div>
             <hr>

             <br/> <br/>
             </div>
                <!-- <div style="float:right;">
              <button type="button" onclick="mealcalculation()" class="btn btn-success">Save</button></div>
            </div> -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
        <script src="<?php echo base_url();?>public/js/validate.js"></script>

        <script>
         
        </script>
                          <script>

                            function removeRow(id){
                              console.log("🚩 ~ file: build_transfer.php ~ line 279 ~ removeRow ~ id", id)
                              document.getElementById(id).remove()
                            }
                
                           $(document).ready(function(){
                            $("#view-proposal-btn").click(function(){
                              $("#proposal-form").submit();
                              // sessionStorage.setItem("href",location.href); 
                            });
                           
                            

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

                          
                        let itrnl_total = 0;
                        var total_price_internal_arr = $("input[name='total_price_internal[]']")
                        .map(function(){ 
                          itrnl_total += parseInt($(this).val());
                        }).get();
                        var total_price_internal = itrnl_total;
                        console.log("🚩 ~ file: build_transfer_edit.php ~ line 285 ~ $ ~ total_price_internal", total_price_internal)

                        let price_total = 0;
                        var total_price_point_arr = $("input[name='total_price_point[]']")
                        .map(function(){ 
                          price_total += parseInt($(this).val());
                        }).get();
                        var total_price_point = price_total;
                        console.log("🚩 ~ file: build_transfer_edit.php ~ line 292 ~ $ ~ total_price_point", total_price_point)



                        var pax_adult_count = <?php  echo $buildpackage->adult; ?>;
                        var pax_child_count = <?php  echo $buildpackage->child; ?>;
                        var pax_infant_count = <?php echo $buildpackage->infant;?>;
                        
                        var intrnal_transfer_avg = parseInt(total_price_internal) / (parseInt(pax_adult_count) + parseInt(pax_child_count));
                        var point_transfer_avg = parseInt(total_price_point) / (parseInt(pax_adult_count) + parseInt(pax_child_count));
                        
                        // var hotel_rate_adult = $("#hotel_rate_adult").val();
                        // var total_price_internal = $("#total_price_internal").val();
                        // var total_price_point = $("#total_price_point").val();
                        // var total_pax_visa_price_adult = $("#total_pax_visa_price_adult").val(); 
                        // var total_pax_meal_adult = $("#total_pax_meal_adult").val(); 
                        // var total_pax_pvt_adult = $("#total_pax_pvt_adult").val();
                        // var total_pax_sic_adult = $("#total_pax_sic_adult").val();
                        
                        var sub_total_adult = 
                          parseInt(intrnal_transfer_avg * (parseInt(pax_adult_count))) + 
                          parseInt(point_transfer_avg * (parseInt(pax_adult_count)));
                          // parseInt(total_price_point);

                        // var hotel_rate_child = $("#hotel_rate_child").val();
                        // var total_pax_pvt_hild = $("#total_pax_pvt_hild").val();
                        // var total_pax_sic_hild = $("#total_pax_sic_hild").val();
                        // var total_pax_meal_child = $("#total_pax_meal_child").val();
                        // var total_pax_visa_price_child = $("#total_pax_visa_price_child").val();

                        var sub_total_child = 
                          parseInt(intrnal_transfer_avg * (parseInt(pax_child_count))) + 
                          parseInt(point_transfer_avg * (parseInt(pax_child_count)));
                        //   parseInt(total_pax_sic_hild)+ 
                        //   parseInt(total_pax_pvt_hild) + 
                        //   parseInt(total_pax_meal_child) + 
                        //   parseInt(total_pax_visa_price_child);

                        // var total_pax_visa_price_infant = $("#total_pax_visa_price_infant").val(); 
                        // var total_pax_pvt_infant = $("#total_pax_pvt_infant").val();
                        // var total_pax_sic_infant = $("#total_pax_sic_infant").val();

                        // var sub_total_infant = parseInt(total_pax_visa_price_infant) +
                        //   parseInt(total_pax_pvt_infant)+ 
                        //   parseInt(total_pax_sic_infant);

                          
                        let c_type = document.getElementById('currencyOption').value;
                        var usd_aed = <?php echo $usd_to_aed->usd_to_aed;?>;

                          // $("#subtotal_adults").html( sub_total_adult );                      
                          // $("#subtotal_childs").html( sub_total_child ); 
                          $("#subtotal_adults").html( c_type == 'USD' ? (sub_total_adult / usd_aed).toFixed(2)  : sub_total_adult );                      
                          $("#subtotal_childs").html( c_type == 'USD' ? (sub_total_child / usd_aed).toFixed(2) : sub_total_child );                                 
                          $("#subtotal_infants").html( 0 ); 

                          var PackageMarkup = $("#PackageMarkup").val();
                          var Mark_up =$("#Mark_up").val();

                          var total_adult =0;
                          var total_child = 0;
                          var total_infant = 0;
                          if(Mark_up == "precentage"){

                             total_adult = (parseInt(sub_total_adult) + (parseInt(sub_total_adult) * parseInt(PackageMarkup) / 100));
                             total_child = (parseInt(sub_total_child) + (parseInt(sub_total_child) * parseInt(PackageMarkup) / 100));
                            //  total_infant = (parseInt(sub_total_infant) + (parseInt(sub_total_infant) * parseInt(PackageMarkup) / 100));

                          }
                          if(Mark_up == "values"){

                            total_adult = (parseInt(sub_total_adult) + parseInt(PackageMarkup));
                            total_child = (parseInt(sub_total_child) + parseInt(PackageMarkup));
                            // total_infant = (parseInt(sub_total_infant) + parseInt(PackageMarkup));

                            
                          }
                        
                          // $("#totalprice_adult").html( total_adult );
                          // $("#totalprice_childs").html( total_child );
                          $("#totalprice_adult").html(  c_type == 'USD' ? ( total_adult / usd_aed).toFixed(2)  : total_adult  );
                          $("#totalprice_childs").html(  c_type == 'USD' ? ( total_child / usd_aed).toFixed(2)  : total_child  );
                          $("#totalprice_infants").html( 0 );

                          var per_pax_adult = (pax_adult_count > 1 ? parseInt(total_adult) / 2 : parseInt(total_adult));
                          var per_pax_child = (pax_child_count > 1 ? parseInt(total_child) / 2 : parseInt(total_child));
                        //   var per_pax_infant = (parseInt(total_infant) / 2);
                          
                          // $("#perpax_adult").html(per_pax_adult);
                          // $("#perpax_childs").html( per_pax_child );
                          $("#perpax_adult").html( c_type == 'USD' ?  ( per_pax_adult / usd_aed).toFixed(2)  : per_pax_adult  );
                          $("#perpax_childs").html(  c_type == 'USD' ?  ( per_pax_child / usd_aed).toFixed(2)  : per_pax_child   );
                          $("#perpax_infants").html( 0 );

                          $("#perpax_adult_input").val(per_pax_adult);
                          $("#perpax_childs_input").val(per_pax_child );
                          $("#perpax_adult_input").val( c_type == 'USD' ? ( per_pax_adult / usd_aed).toFixed(2)  : per_pax_adult  );
                          $("#perpax_childs_input").val( c_type == 'USD' ?   ( per_pax_child / usd_aed).toFixed(2)  : per_pax_child  );
                          $("#perpax_infants_input").val( 0 );

                          $('#totalprice_transfer').val(c_type == 'USD' ?  ( total_adult / usd_aed).toFixed(2) : total_adult);

                        
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

                        var trans_rows= 0;                    
                        function transRow(){
                          var cnt = $('#rows_count').val();
                          $('#rows_count').val(parseInt(cnt) + parseInt(1));
                          var adds=' <tr  id="PvtCab'+trans_rows + '"> <th>Internal Transfer</th>';
                          adds += '<td><input class="form-control" type="number" id="pax_internal'+trans_rows + '" placeholder="Pax" value="<?php echo $view->Packagetravelers+$buildpackage->child;?>" name="buildTravelFromCityCab[]" disabled></td>';
                          adds += '<td><input class="form-control internal_transfer_date" type="date" value="<?php echo $view->specificDate;?>" id="buildTravelFromdateCab" name="buildTravelFromdateCab[]"></td>';
                          adds += `<td>
                                    <select id="pickupinternal${trans_rows}"  required  name="buildTravelToDateCab[]"  class="internal_transfer_pickup js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                      <option value="Pickup">Pickup</option>
                                      <?php foreach($transfer_route as $value){ ?>
                                      <option value="<?php echo $value->start_city ?>"><?php echo $value->start_city ?></option>
                                      <?php } ?>
                                    </select>
                                  </td>`;

                          adds += `
                                <td>
                                  <select id="dropoffinternal${trans_rows}" name="buildTravelToCityCabDrop[]"   class="internal_transfer_dropoff js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                  <option value="Drop Off">Drop Off</option>
                                  </select>
                                </td>
                                `;

                          adds += `
                                <td>
                                  <input id="price_internal${trans_rows}" type="hidden" name="price_internal[]" />
                                  <input id="pax_count_internal${trans_rows}" type="hidden" name="pax_count_internal[]" />
                                  <input id="total_price_internal${trans_rows}" type="hidden" value="0" name="total_price_internal[]" />
                                  <input id="route_nameinternal${trans_rows}" class="form-control internal_transfer_route" type="text" placeholder="Route Name" name="buildTravelTypeCab[]">
                                </td>
                                `;

                          adds += '</td> <td><button class="btn btn-danger btn-xs" onClick="$(\'#PvtCab' + trans_rows + '\').remove();"><i class="fa fa-trash"></i></button> </td>';
                          adds += '</tr>';
                            $('#transfer_body').append(adds);
                            pickupFromTransfer(trans_rows);
                            trans_rows++;
                        }


                        var trans_retrun_rows= 0;                    
                        function transReturnRow(){
                          var cnt = $('#rows_count').val();
                          $('#rows_count').val(parseInt(cnt) + parseInt(1));
                          var adds=' <tr  id="Sic'+trans_retrun_rows + '"> <th>Return Transfer</th>';

                          adds += '<td><input class="form-control" id="pax_point'+trans_retrun_rows + '" type="text" placeholder="Pax" value="<?php echo $view->Packagetravelers+$buildpackage->child;?>" name="buildTravelFromCitySIC[]" disabled></td>';
                          adds += '<td><input class="form-control return_transfer_date" id="buildTravelFromdatePVT'+trans_retrun_rows + '" type="date" value="<?php echo $view->specificDate;?>" name="buildTravelFromdatePVT[]"></td>';

                          adds += `<td> 
                                    <select id="pickuppoint${trans_retrun_rows}"  required  name="buildTravelToDateSIC[]"  class="return_transfer_pickup js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                      <option value="Pickup">Pickup</option>
                                    </select>
                                  </td>`;
                                  
                          adds += `
                                <td>
                                  <select id="dropoffpoint${trans_retrun_rows}" name="buildTravelToCitySIC[]"  class="return_transfer_dropoff js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                  <option value="Drop Off">Drop Off</option>
                                  </select>
                                </td>
                                `;

                          adds += '<td><input id="route_namepoint'+trans_retrun_rows+'" class="form-control return_transfer_route" type="text" placeholder="Route Name" name="buildTravelTypeSIC[]"></td>';

                          adds += `
                                
                                  <input id="price_point${trans_retrun_rows}" type="hidden" name="price_point[]" />
                                  <input id="pax_count_point${trans_retrun_rows}" type="hidden" name="pax_count_point[]" />
                                  <input id="total_price_point${trans_retrun_rows}" type="hidden" value="0" name="total_price_point[]" />
                               
                                `;

                          adds += '</td> <td><button class="btn btn-danger btn-xs" onClick="$(\'#Sic' + trans_retrun_rows + '\').remove();"><i class="fa fa-trash"></i></button> </td>';
                          adds += '</tr>';
                            $('#transfer_body').append(adds);
                          pickupFromReturn(trans_retrun_rows);

                            trans_retrun_rows++;
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
                    <td type="" name="totalprice_adult" id="totalprice_adult" value=""></td>
                    <td type="" name="totalprice_childs" id="totalprice_childs" value=""></td>
                    <td type="" name="totalprice_infants" id="totalprice_infants" value=""></td>
                   </tr>
                   <tr  align="center">
                    <td><b>Per PAX</b></td>
                    <td type="" name="perpax_adult" id="perpax_adult" value=""></td>
                    <td type="" name="perpax_childs" id="perpax_childs" value=""></td>
                    <td type="" name="perpax_infants" id="perpax_infants" value=""></td>   
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
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse"
      aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
       <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here"
        id="buildPackageInclusions" name="buildPackageInclusions" style="height: 100px"></textarea>
        <!-- <label for="floatingTextarea2">Comments</label> -->
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
      <!-- <label for="floatingTextarea2">Comments</label> -->
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
 <div id="collapseOne" class="accordion-collapse collapse"
 aria-labelledby="headingOne" data-bs-parent="#accordionExample">
 <div class="accordion-body">
  <div class="form-floating">
   <textarea class="form-control" placeholder="Leave a comment here"
   id="buildPackageCancellations" name="buildPackageCancellations" style="height: 100px">
        Cancellation Terms: FIT
  </textarea>
   <!-- <label for="floatingTextarea2">Comments</label> -->
  </div>
 </div>
</div>
</div>
<!-- <div class="accordion-item ">
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
</div> -->
</div>
</div>
</div>








<input  type="hidden" id="QueryId" name="QueryId" value="<?php echo $view->query_id;?>">
<div class="last-btn mt-4 mb-4">

 <button id="view-proposal-btn" type="button" class="new_btn px-5 mr-4">View Proposal</button> 
 <!-- <a id="view-proposal" type="button" class="new_btn px-5 mr-4" href="<?php// echo base_url();?>/proposal.html">View Proposal</a>  -->

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

<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
 
<script>
  function delQuery(){
    var QueryId = $('#QueryId').val();
    $.ajax({ 
            type: "POST",
            url: "<?php echo base_url()?>Query/deleteQueryData",
            data : {'query_id' : QueryId},
            cache: false,
            dataType: "json",
            success: function(response)
            {
              toastr.success("Cancelled Successfully");
              location.href =  "<?php echo site_url();?>Query/view_query";
            }
        });
  }

$('#transferSave').on('click', function() {

  
console.log("save clicked ")

var pax_adult = <?php  echo $view->Packagetravelers; ?>;
var pax_child = <?php  echo $buildpackage->child; ?>;
var pax_infants = <?php  echo $buildpackage->infant; ?>;
// var total_pax = pax_adult + pax_child + pax_infants;
var total_pax = pax_adult + pax_child;

var QueryId = $('#QueryId').val();

                var internal_transfer_pickup = [];
                  $(".internal_transfer_pickup").each(function() {
                    var cat = $(this).val();
                    if(cat != "" && cat != 'Pickup'){
                      internal_transfer_pickup.push($.trim(cat));
                    }
                  });

                  var internal_transfer_dropoff = [];
                  $(".internal_transfer_dropoff").each(function() {
                    var cat = $(this).val();
                    if(cat != "" && cat != 'Drop Off'){
                      internal_transfer_dropoff.push($.trim(cat));
                     }
                  });

                  var internal_transfer_route = [];
                  $(".internal_transfer_route").each(function() {
                    var cat = $(this).val();
                    if(cat != "" ){
                      internal_transfer_route.push($.trim(cat));
                    }
                  });

                  var internal_transfer_date = [];
                  $(".internal_transfer_date").each(function() {
                    var cat = $(this).val();
                    if(cat != "" ){
                      internal_transfer_date.push($.trim(cat));
                    }
                  });
                  // return transfer ---------------------------------

                  var return_transfer_pickup = [];
                  $(".return_transfer_pickup").each(function() {
                    var cat = $(this).val();
                    if(cat != "" && cat != 'Pickup'){
                      return_transfer_pickup.push($.trim(cat));
                     }
                  });

                  var return_transfer_dropoff = [];
                  $(".return_transfer_dropoff").each(function() {
                    var cat = $(this).val();
                     if(cat != "" && cat != 'Drop Off'){
                      return_transfer_dropoff.push($.trim(cat));
                     }
                  });

                  var return_transfer_route = [];
                  $(".return_transfer_route").each(function() {
                    var cat = $(this).val();
                    if(cat != "" ){
                      return_transfer_route.push($.trim(cat));
                    }
                  });
                  
                  var return_transfer_date = [];
                  $(".return_transfer_date").each(function() {
                    var cat = $(this).val();
                    if(cat != "" ){
                      return_transfer_date.push($.trim(cat));
                    }
                  });

                  var data= [{
                      'internal_transfer_pickup' : internal_transfer_pickup,
                      'internal_transfer_dropoff' : internal_transfer_dropoff,
                      'internal_transfer_route' : internal_transfer_route,
                      'internal_transfer_date' : internal_transfer_date,

                      'return_transfer_pickup' : return_transfer_pickup,
                      'return_transfer_dropoff' : return_transfer_dropoff,
                      'return_transfer_route' : return_transfer_route,
                      'return_transfer_date' : return_transfer_date,

                    }];
                   console.log("🚩 ~ file: build_transfer.php ~ line 932 ~ $ ~ data", data)
                   
                  
                    $.ajax({ 
                        type: "POST",
                        url: "<?php echo base_url()?>Query/saveTransferDataEdit",
                        data : {data : data,'pax_adult':pax_adult,'pax_child':pax_child,'pax_infants':pax_infants,'query_id' : QueryId,'query_type' : 'transfer' },
                        cache: false,
                        dataType: "json",
                        success: function(response)
                        {
                        console.log("🚩 ~ file: build_transfer_edit.php ~ line 885 ~ $ ~ response", typeof(response.internal_price))

                          $("#price_internal").val(response.internal_price);
                          var total_price_internal = response.internal_price * total_pax;
                          $("#total_price_internal").val(total_price_internal);

                        console.log("🚩 ~ file: build_transfer_edit.php ~ line 885 ~ $ ~ response", (total_price_internal))
                          
                          $("#price_point").val(response.return_price);
                          var total_price_return = response.return_price * total_pax;
                          $("#total_price_point").val(total_price_return);

                        console.log("🚩 ~ file: build_transfer_edit.php ~ line 885 ~ $ ~ response", (total_price_return))

                          
                          toastr.success("Transfer Details Saved Successfully");

                        }
                    });
});

function saveTransferDefault(){
  
var pax_adult = <?php  echo $view->Packagetravelers; ?>;
var pax_child = <?php  echo $buildpackage->child; ?>;
var pax_infants = <?php  echo $buildpackage->infant; ?>;
// var total_pax = pax_adult + pax_child + pax_infants;
var total_pax = pax_adult + pax_child;

var QueryId = $('#QueryId').val();

                var internal_transfer_pickup = [];
                  $(".internal_transfer_pickup").each(function() {
                    var cat = $(this).val();
                    if(cat != "" && cat != 'Pickup'){
                      internal_transfer_pickup.push($.trim(cat));
                    }
                  });

                  var internal_transfer_dropoff = [];
                  $(".internal_transfer_dropoff").each(function() {
                    var cat = $(this).val();
                    if(cat != "" && cat != 'Drop Off'){
                      internal_transfer_dropoff.push($.trim(cat));
                     }
                  });

                  var internal_transfer_route = [];
                  $(".internal_transfer_route").each(function() {
                    var cat = $(this).val();
                    if(cat != "" ){
                      internal_transfer_route.push($.trim(cat));
                    }
                  });

                  var internal_transfer_date = [];
                  $(".internal_transfer_date").each(function() {
                    var cat = $(this).val();
                    if(cat != "" ){
                      internal_transfer_date.push($.trim(cat));
                    }
                  });
                  // return transfer ---------------------------------

                  var return_transfer_pickup = [];
                  $(".return_transfer_pickup").each(function() {
                    var cat = $(this).val();
                    if(cat != "" && cat != 'Pickup'){
                      return_transfer_pickup.push($.trim(cat));
                     }
                  });

                  var return_transfer_dropoff = [];
                  $(".return_transfer_dropoff").each(function() {
                    var cat = $(this).val();
                     if(cat != "" && cat != 'Drop Off'){
                      return_transfer_dropoff.push($.trim(cat));
                     }
                  });

                  var return_transfer_route = [];
                  $(".return_transfer_route").each(function() {
                    var cat = $(this).val();
                    if(cat != "" ){
                      return_transfer_route.push($.trim(cat));
                    }
                  });
                  
                  var return_transfer_date = [];
                  $(".return_transfer_date").each(function() {
                    var cat = $(this).val();
                    if(cat != "" ){
                      return_transfer_date.push($.trim(cat));
                    }
                  });

                  var data= [{
                      'internal_transfer_pickup' : internal_transfer_pickup,
                      'internal_transfer_dropoff' : internal_transfer_dropoff,
                      'internal_transfer_route' : internal_transfer_route,
                      'internal_transfer_date' : internal_transfer_date,

                      'return_transfer_pickup' : return_transfer_pickup,
                      'return_transfer_dropoff' : return_transfer_dropoff,
                      'return_transfer_route' : return_transfer_route,
                      'return_transfer_date' : return_transfer_date,

                    }];
                   console.log("🚩 ~ file: build_transfer.php ~ line 932 ~ $ ~ data", data)
                   
                  
                    $.ajax({ 
                        type: "POST",
                        url: "<?php echo base_url()?>Query/saveTransferDataEdit",
                        data : {data : data,'pax_adult':pax_adult,'pax_child':pax_child,'pax_infants':pax_infants,'query_id' : QueryId,'query_type' : 'transfer' },
                        cache: false,
                        dataType: "json",
                        success: function(response)
                        {
                          $("#price_internal").val(response.internal_price);
                          var total_price_internal = response.internal_price * total_pax;
                          $("#total_price_internal").val(total_price_internal);
                          $("#price_point").val(response.return_price);
                          var total_price_return = response.return_price * total_pax;
                          $("#total_price_point").val(total_price_return);
                        cardClick();
                        }
                    });
}

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
              var newOption = $('#buildHotelName')
                    .append($("<option></option>")
                                .attr("value", response[i].id)
                                .text(response[i].hotelname));

                // $('#buildHotelName')
                //     .append("<option value='"+response[i].id+"' selected=selected >"+response[i].hotelname+"</option>");

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


      <input type="hidden" id="hotel_name_backup" name="hotel_name_backup" value="" />

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
        // var hotel_name_backup =  $("#buildHotelName").val();
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
        // $('#hotel_name_backup').val( hotel_name_backup);

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

      var pax_adult_count1 = <?php  echo $buildpackage->adult; ?>;
      var pax_child_count1 = <?php  echo $buildpackage->child; ?>;
      var pax_infant_count1 = <?php echo $buildpackage->infant;?>;
      var total_pax1 = pax_adult_count1 + pax_child_count1 + 0;
       $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/query/fetchPickup',
          data:{'pax': total_pax1},
          success:function(response){
            $("#pickupinternal").html('<option value="Pickup">Pickup</option>');
            console.log(response.data.length);
            if(response.data.length > 0){
            var options=""
            for(var i=0;i<response.data.length;i++){
                console.log(response.data[i].start_city);
                options+='<option value="'+response.data[i].start_city+'">'+response.data[i].start_city+'</option>';
            }
            } else {
              var options="<option value=''>No Data Found</option>"
            }
          $("#pickupinternal").append(options);
          }
         });

         
         $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/query/fetchPickup1',
          data:{'pax': total_pax1},
          success:function(response){
            $("#pickuppoint").html('<option value="Pickup">Pickup</option>');
            if(response.data.length > 0){
            var options=""
            for(var i=0;i<response.data.length;i++){
                console.log(response.data[i].start_city);
                options+='<option value="'+response.data[i].start_city+'">'+response.data[i].start_city+'</option>';
            }
          } else {
            var options="<option value=''>No Data Found</option>"
          }
          $("#pickuppoint").append(options);
          }
         });

         function pickupFromReturn(id){
          $.ajax({
            type:"POST",
            dataType: "json",
            url:'<?php echo site_url();?>/query/fetchPickup1',
            data:{'pax': total_pax1},
            success:function(response){
              $("#pickuppoint"+id).html('<option value="Pickup">Pickup</option>');
              if(response.data.length > 0){
              var options=""
              for(var i=0;i<response.data.length;i++){
                  console.log(response.data[i].start_city);
                  options+='<option value="'+response.data[i].start_city+'">'+response.data[i].start_city+'</option>';
              }
              } else {
            var options="<option value=''>No Data Found</option>"
          }
            $("#pickuppoint"+id).append(options);
            }
          });
       }
     
       function pickupFromTransfer(id){
       $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/query/fetchPickup',
          data:{'pax': total_pax1},
          success:function(response){
            $("#pickupinternal"+id).html('<option value="Pickup">Pickup</option>');
            if(response.data.length > 0){
            var options=""
            for(var i=0;i<response.data.length;i++){
                console.log(response.data[i].start_city);
                options+='<option value="'+response.data[i].start_city+'">'+response.data[i].start_city+'</option>';
            }
          } else {
            var options="<option value=''>No Data Found</option>"
          }
          $("#pickupinternal"+id).append(options);
          }
         });
        }

       function pickupInternal(id) {
          let value = document.getElementById('pickupinternal'+id).value;
            $.ajax({
                type: "POST",
                dataType: "json",
                url: '<?php echo site_url(); ?>/query/fetchdropoff',
                data: {
                    'pickup': document.getElementById('pickupinternal'+id).value,
                },
                
                success: function(response) {
                    $("#dropoffinternal"+id).html('<option value="dropoff">dropoff</option>');
                    console.log(response.data.length);

                    var options = ""
                    for (var i = 0; i < response.data.length; i++) {
                        console.log(response.data[i].dest_city);
                        options += '<option value="' + response.data[i].dest_city + '">' + response.data[i].dest_city + '</option>';

                    }
                    $("#dropoffinternal"+id).append(options);
                }

            });
    }

    function dropInternal(id) {
        let dropValue = document.getElementById('dropoffinternal'+id).value;
        var value=$("#pickupinternal"+id).val();
        var pax_internal=$("#pax_internal"+id).val();
        
        $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/query/fetchprice',
          data:{'dropoff':dropValue ,'pickup':value,'person':pax_internal},
          success:function(response){
            $("#route_nameinternal"+id).val(response.route_name);
           // $("#pax_count_internal").val(response.data[0].seat_capacity);
             $("#price_internal"+id).val(response.data);
               var total_price=response.data*pax_internal;
             $("#total_price_internal"+id).val(total_price);
           }
        });

      }





      function pickupReturn(id){
        let value = document.getElementById('pickuppoint'+id).value;
        $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/query/fetchdropoff1',
          data:{'pickup': value },
          success:function(response){
            $("#dropoffpoint"+id).html('<option value="dropoff">dropoff</option>');
            var options=""
            for(var i=0;i<response.data.length;i++){
            options+='<option value="'+response.data[i].dest_city+'">'+response.data[i].dest_city+'</option>';
            }


        $("#dropoffpoint"+id).append(options);
            // $("#ProposalPage").html(response);
            // $("#FullPage").hide();
          }


        });
       }


       function dropReturn(id) {
        let dropValue = document.getElementById('dropoffpoint'+id).value;
        var value=$("#pickuppoint"+id).val();
        var pax_internal=$("#pax_point"+id).val();
        console.log("🚩 ~ file: build_package.php ~ line 2448 ~ dropReturn ~ pax_internal", pax_internal)
        
        $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/query/fetchprice1',
          data:{'dropoff':dropValue ,'pickup':value,'person':pax_internal},
          success:function(response){
            console.log("🚩 ~ file: build_package.php ~ line 2455 ~ dropReturn ~ response", response)
             $("#route_namepoint"+id).val(response.route_name);
             $("#price_point"+id).val(response.data);
               var total_price=response.data*pax_internal;
             $("#total_price_point"+id).val(total_price);

           }
        });

      }

    

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

             $("#pickuppoint1").val(response.row_data.start_city1);
             $("#dropoffpoint1").val(response.row_data.dest_city1);
             $("#route_namepoint1").val(response.row_data.route_name1);
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
    

       if($('#TrasportTypeCab').is(':checked'))
        {
          
         $('#PvtCab').show();
        }
        else
        {
          $("#pickupinternal").val('Pickup').trigger("change"); 
          $("#dropoffinternal").val('dropoff').trigger("change");
          $("#route_nameinternal").val('');
          $("#price_internal").val(0);
          $("#total_price_internal").val(0);
         $('#PvtCab').hide();
        }

        if($('#TrasportTypeSic').is(':checked'))
        {

         
         $('#Sic1').show();
         $('#Sic').show();
        }
        else
        {
          $("#pickuppoint").val('Pickup').trigger("change"); 
          $("#dropoffpoint").val('dropoff').trigger("change"); 
          $("#route_namepoint").val('');
          $("#pickuppoint1").val('');
          $("#dropoffpoint1").val('');
          $("#route_namepoint1").val('');

          $("#price_point").val(0);
          $("#total_price_point").val(0);
         $('#Sic').hide();
         $('#Sic').hide();
        }


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
          $("#pickupinternal").val('Pickup').trigger("change"); 
          $("#dropoffinternal").val('dropoff').trigger("change");
          $("#route_nameinternal").val('');
          $("#price_internal").val(0);
          $("#total_price_internal").val(0);
         $('#PvtCab').hide();
        }
       }
        if(name == "Point to Point Transfer")
       {
        if($('#TrasportTypeSic').is(':checked'))
        {

         
         $('#Sic1').show();
         $('#Sic').show();
        }
        else
        {
          $("#pickuppoint").val('Pickup').trigger("change"); 
          $("#dropoffpoint").val('dropoff').trigger("change"); 
          $("#route_namepoint").val('');
          $("#pickuppoint1").val('');
          $("#dropoffpoint1").val('');
          $("#route_namepoint1").val('');

          $("#price_point").val(0);
          $("#total_price_point").val(0);
         $('#Sic').hide();
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
  //        $("#ViewProposal").click(function() {

  //         var q_id = $("#QueryId").val();          
  //         var currencyOption = $("#currencyOption").val();
  //         var perpax_adult = $("#perpax_adult").val();
  //         var perpax_childs = $("#perpax_childs").val();
  //         var perpax_infants =$("#perpax_infants").val();

  //         var hotelName = $("#buildHotelName").val();
  //         var noOfNights = $("#buildNoNights").val();
  //         var roomType = $("#buildRoomType").val();

  //         var excursion_name_SIC = $("#excursion_name_SIC").val();
  //         var excursion_name_PVT = $("#excursion_name_PVT").val();
  //         var buildPackageInclusions = $("#buildPackageInclusions").val();
  //         var buildPackageExclusions = $("#buildPackageExclusions").val();
  //         var buildPackageConditions = $("#buildPackageConditions").val();
  //         var buildPackageCancellations = $("#buildPackageCancellations").val();
  //         var buildPackageRefund = $("#buildPackageRefund").val();

  //         var pickupinternal = $("#pickupinternal").val();
  //         var dropoffinternal = $("#dropoffinternal").val();
  //         var buildTravelFromdateCab = $("#buildTravelFromdateCab").val();

  //         var buildTravelFromdatePPT = $("#buildTravelFromdatePPT").val();
  //         var pickuppoint = $("#pickuppoint").val();
  //         var dropoffpoint = $("#dropoffpoint").val();
  // //  console.log(q_id + perpax_adult + perpax_childs +  perpax_infants);
          

  //         $.ajax({
  //         type:"POST",
  //         dataType: "json",
  //         url:'<?php echo site_url();?>/query/CreateProposal',
  //         data:{'q_id':q_id,'currencyOption':currencyOption,'perpax_adult':perpax_adult,
  //           'perpax_childs':perpax_childs,'perpax_infants':perpax_infants,
  //           'hotelName':hotelName,'noOfNights':noOfNights,'roomType':roomType,'excursion_name_SIC':excursion_name_SIC,
  //         'excursion_name_PVT': excursion_name_PVT,'buildPackageInclusions':buildPackageInclusions,'buildPackageExclusions':buildPackageExclusions,
  //       'buildPackageConditions':buildPackageConditions,'buildPackageCancellations':buildPackageCancellations,'buildPackageRefund':buildPackageRefund,
  //     'buildTravelFromdateCab':buildTravelFromdateCab,'dropoffinternal':dropoffinternal,'pickupinternal':pickupinternal,
  //   'buildTravelFromdatePPT':buildTravelFromdatePPT,'pickuppoint':pickuppoint,'dropoffpoint':dropoffpoint},
  //         success:function(response){

  //           $("#ProposalPage").html(response);
  //           $("#FullPage").hide();
  //         }


  //       });
  //     });

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
                    // var temp = $('#hotel_name_backup').val();

                    // if(temp.length != 0 ){
                    //   alert("hi");
                    //        $("#buildHotelName > [value=" + temp + "]").attr("selected", "true");
                    // }
                    
                          
                  

                   
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
                          // var bet_sum = 0;
                          
                            $('.bnights').each(function () {
                                sum += Number($(this).val());
                            });

                            $('#allocated_days').val(sum);


                        });


                        
                   
                        var faqs_row = 0;  
                       
                        function addrows(){
                          
                          setTimeout(function(){ $('.noOfDaysAlertcls').attr("style","display:none;") }, 2000);
                          var initaldays = parseInt($('#buildNoNights').val());
                          // alert(initaldays);

                          if(isNaN(initaldays) || initaldays == ""){
                            $('#buildNoNights').attr('style',"border-color:red");
                          }else{
                            $('#buildNoNights').removeAttr('style',"border-color:red");

                          
                          var totalNoOfDays = <?php echo $buildpackage->night?> ;
                          var allocated_days = parseInt($('#allocated_days').val());
                          // var allocated_days = parseInt(allocated_day); 
                          alert(allocated_days);
                          var d = "<?php echo $view->specificDate;?>";                         
                          var f = moment(d).add(allocated_days, 'days');

                         if( totalNoOfDays > allocated_days){
                          $('#buildNoNights').attr('disabled',true);
                          var template = '';
                          var city = '<td><select class="form-control get-hotel" name="buildHotelCity'+faqs_row+'" id="buildHotelCity'+faqs_row+'"><option>Select City</option><option value="Dubai">Dubai</option><option value="AbuDhabi">Abu Dhabi</option><option value="Sharjah">Sharjah</option><option value="Ajman">Ajman</option><option value="Sir Baniyas">Sir Baniyas</option><option value="Umm Al-Quwain">Umm Al-Quwain</option><option value="Fujairah">Fujairah</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Al Ain">Al Ain</option></select></td>';
                          var bnight = '<td><select class="form-control bnights" id="buildNoNights'+faqs_row+'"  name="buildNoNights'+faqs_row+'" required>';
                                          for (let i = 1; i <= (totalNoOfDays-allocated_days); i++) {
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
                          $('#allocated_days').val(parseInt($('#buildNoNights'+faqs_row).val()) + parseInt($('#allocated_days').val()) );
                          
                          $("[type='number']").keypress(function (evt) {
                              evt.preventDefault();
                          });

                          if($("#faqs-row"+faqs_row).length == 0) {
                            $('#buildNoNights').attr('disabled',false);
                          }
                         

                        }else{
                          $('#noOfDaysAlert').html(totalNoOfDays);
                          $('.noOfDaysAlertcls').attr("style","display:block;");
                        }
                         
                       

                          // var allocated_days = $('#allocated_days').val();
                          // if( ($('#allocated_days').val() == "")) allocated_days = parseInt($('#buildNoNights').val());
                          // // alert(allocated_days);
                          // var d = "<?php echo $view->specificDate;?>";                         
                          // var totalNoOfDays = <?php echo $buildpackage->night?> ;
                          // var f = moment(d).add(allocated_days, 'days');
                          // if( allocated_days < totalNoOfDays ){
                          //   // var add=' <tr  id="faqs-row' + faqs_row + '"> <td><input class="form-control" type="text" value="<?php echo $view->goingTo;?>" name="buildHotelCity" id="buildHotelCity"></td> <td><input class="form-control" type="date" value="<?php echo $view->specificDate;?>" name="buildCheckIn" id="buildCheckIn"></td> <td><input class="form-control" type="text" value="1" name="buildNoNights" id="buildNoNights'+ faqs_row +'"></td> <td> <div> <select data-mdl-for="sample2" class="form-control" value="" tabIndex="-1" name="Category"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> </select> </div> </td> <td><input class="form-control" type="text" placeholder="Hotel Name" name="buildHotelName" id="buildHotelName" required=""></td> <td><input class="form-control" type="text" placeholder="Room Type" name="buildRoomType" id="buildRoomType" required=""></td> <td><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove();"><i class="fa fa-trash"></i></button> </td> </tr>';
                          //   // $('#addrows').append(add);  $(\'buildNoNights'+faqs_row+ '\').val();
                          //   var add=' <tr  id="faqs-row' + faqs_row + '">  <td><input class="form-control" type="date" value="'+f.format("YYYY-MM-DD")+'" name="buildCheckIn'+faqs_row+'" id="buildCheckIn'+faqs_row+'" disabled></td><td><input class="form-control" type="text" value="2" name="buildNoNights'+faqs_row+'" id="buildNoNights'+ faqs_row +'"></td><td><button class="btn btn-danger btn-xs" onClick="$(\'#faqs-row' + faqs_row + '\').remove()"><i class="fa fa-trash"></i></button> </td> </tr>';
                          //   $('#addrows').append(add);
                          //   var Selectedvalue =  $( "#buildNoNights"+faqs_row).val(); 
                          //   $('#allocated_days').val(parseInt(allocated_days) + parseInt(Selectedvalue) );
                          //   faqs_row++;   
                          // }else{
                          //   alert("Cannot Add more than "+totalNoOfDays+" days");
                          // }


                        }
                      }
                      
                      removeHotel =function  removeHotel(data){
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
  function cardClick() {
    let itrnl_total = 0;
                        var total_price_internal_arr = $("input[name='total_price_internal[]']")
                        .map(function(){ 
                          itrnl_total += parseInt($(this).val());
                        }).get();
                        var total_price_internal = itrnl_total;
                        console.log("🚩 ~ file: build_transfer_edit.php ~ line 285 ~ $ ~ total_price_internal", total_price_internal)

                        let price_total = 0;
                        var total_price_point_arr = $("input[name='total_price_point[]']")
                        .map(function(){ 
                          price_total += parseInt($(this).val());
                        }).get();
                        var total_price_point = price_total;
                        console.log("🚩 ~ file: build_transfer_edit.php ~ line 292 ~ $ ~ total_price_point", total_price_point)



                        var pax_adult_count = <?php  echo $buildpackage->adult; ?>;
                        var pax_child_count = <?php  echo $buildpackage->child; ?>;
                        var pax_infant_count = <?php echo $buildpackage->infant;?>;
                        
                        var intrnal_transfer_avg = parseInt(total_price_internal) / (parseInt(pax_adult_count) + parseInt(pax_child_count));
                        var point_transfer_avg = parseInt(total_price_point) / (parseInt(pax_adult_count) + parseInt(pax_child_count));
                        
                        // var hotel_rate_adult = $("#hotel_rate_adult").val();
                        // var total_price_internal = $("#total_price_internal").val();
                        // var total_price_point = $("#total_price_point").val();
                        // var total_pax_visa_price_adult = $("#total_pax_visa_price_adult").val(); 
                        // var total_pax_meal_adult = $("#total_pax_meal_adult").val(); 
                        // var total_pax_pvt_adult = $("#total_pax_pvt_adult").val();
                        // var total_pax_sic_adult = $("#total_pax_sic_adult").val();
                        
                        var sub_total_adult = 
                          parseInt(intrnal_transfer_avg * (parseInt(pax_adult_count))) + 
                          parseInt(point_transfer_avg * (parseInt(pax_adult_count)));
                          // parseInt(total_price_point);

                        // var hotel_rate_child = $("#hotel_rate_child").val();
                        // var total_pax_pvt_hild = $("#total_pax_pvt_hild").val();
                        // var total_pax_sic_hild = $("#total_pax_sic_hild").val();
                        // var total_pax_meal_child = $("#total_pax_meal_child").val();
                        // var total_pax_visa_price_child = $("#total_pax_visa_price_child").val();

                        var sub_total_child = 
                          parseInt(intrnal_transfer_avg * (parseInt(pax_child_count))) + 
                          parseInt(point_transfer_avg * (parseInt(pax_child_count)));
                        //   parseInt(total_pax_sic_hild)+ 
                        //   parseInt(total_pax_pvt_hild) + 
                        //   parseInt(total_pax_meal_child) + 
                        //   parseInt(total_pax_visa_price_child);

                        // var total_pax_visa_price_infant = $("#total_pax_visa_price_infant").val(); 
                        // var total_pax_pvt_infant = $("#total_pax_pvt_infant").val();
                        // var total_pax_sic_infant = $("#total_pax_sic_infant").val();

                        // var sub_total_infant = parseInt(total_pax_visa_price_infant) +
                        //   parseInt(total_pax_pvt_infant)+ 
                        //   parseInt(total_pax_sic_infant);

                          
                        let c_type = document.getElementById('currencyOption').value;
                        var usd_aed = <?php echo $usd_to_aed->usd_to_aed;?>;

                          // $("#subtotal_adults").html( sub_total_adult );                      
                          // $("#subtotal_childs").html( sub_total_child ); 
                          $("#subtotal_adults").html( c_type == 'USD' ? (sub_total_adult / usd_aed).toFixed(2)  : sub_total_adult );                      
                          $("#subtotal_childs").html( c_type == 'USD' ? (sub_total_child / usd_aed).toFixed(2) : sub_total_child );                                 
                          $("#subtotal_infants").html( 0 ); 

                          var PackageMarkup = $("#PackageMarkup").val();
                          var Mark_up =$("#Mark_up").val();

                          var total_adult =0;
                          var total_child = 0;
                          var total_infant = 0;
                          if(Mark_up == "precentage"){

                             total_adult = (parseInt(sub_total_adult) + (parseInt(sub_total_adult) * parseInt(PackageMarkup) / 100));
                             total_child = (parseInt(sub_total_child) + (parseInt(sub_total_child) * parseInt(PackageMarkup) / 100));
                            //  total_infant = (parseInt(sub_total_infant) + (parseInt(sub_total_infant) * parseInt(PackageMarkup) / 100));

                          }
                          if(Mark_up == "values"){

                            total_adult = (parseInt(sub_total_adult) + parseInt(PackageMarkup));
                            total_child = (parseInt(sub_total_child) + parseInt(PackageMarkup));
                            // total_infant = (parseInt(sub_total_infant) + parseInt(PackageMarkup));

                            
                          }
                        
                          // $("#totalprice_adult").html( total_adult );
                          // $("#totalprice_childs").html( total_child );
                          $("#totalprice_adult").html(  c_type == 'USD' ? ( total_adult / usd_aed).toFixed(2)  : total_adult  );
                          $("#totalprice_childs").html(  c_type == 'USD' ? ( total_child / usd_aed).toFixed(2)  : total_child  );
                          $("#totalprice_infants").html( 0 );

                          var per_pax_adult = (pax_adult_count > 1 ? parseInt(total_adult) / 2 : parseInt(total_adult));
                          var per_pax_child = (pax_child_count > 1 ? parseInt(total_child) / 2 : parseInt(total_child));
                        //   var per_pax_infant = (parseInt(total_infant) / 2);
                          
                          // $("#perpax_adult").html(per_pax_adult);
                          // $("#perpax_childs").html( per_pax_child );
                          $("#perpax_adult").html( c_type == 'USD' ?  ( per_pax_adult / usd_aed).toFixed(2)  : per_pax_adult  );
                          $("#perpax_childs").html(  c_type == 'USD' ?  ( per_pax_child / usd_aed).toFixed(2)  : per_pax_child   );
                          $("#perpax_infants").html( 0 );

                          $("#perpax_adult_input").val(per_pax_adult);
                          $("#perpax_childs_input").val(per_pax_child );
                          $("#perpax_adult_input").val( c_type == 'USD' ? ( per_pax_adult / usd_aed).toFixed(2)  : per_pax_adult  );
                          $("#perpax_childs_input").val( c_type == 'USD' ?   ( per_pax_child / usd_aed).toFixed(2)  : per_pax_child  );
                          $("#perpax_infants_input").val( 0 );

                          $('#totalprice_transfer').val(c_type == 'USD' ?  ( total_adult / usd_aed).toFixed(2) : total_adult);

                        
  }
saveTransferDefault();

	CKEDITOR.replace('buildPackageInclusions');
	CKEDITOR.replace('buildPackageExclusions');
	CKEDITOR.replace('buildPackageConditions');
	CKEDITOR.replace('buildPackageCancellations');
	CKEDITOR.replace('buildPackageRefund');
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
    transition: transform .2s ease-in-out,-webkit-transform .2s ease-in-out;
}
</style>




    
    

