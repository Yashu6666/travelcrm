<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 800px!important;">
            <div class="modal-header" style="background-color: #d9a927;">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-hotel"></i> Hotels</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="searchhotel" style="display:block;">
                  <input type="hidden" id="" name="" value=""/>
                    <form method="post" >
                      <div id="wrapping">
                      <input type="hidden" name="modal_hotel" id="modal_hotel" value=""/>
                        <section id="" class="col-md-12">
                            <label>City</label>
                            <select class="form-control Hotel_name_city_select" id="Hotel_name_city_select" required="" name="Hotel_name_city_select">
                                <!-- <option value="">Select</option> -->
                                <?php 
                                foreach($hotel_city as $city) { 
                                    echo '<option value="'.$city.'">'.$city.'</option>';
                                } 
                                ?>
                             </select>
                        </section>
                            <!-- <input type="text" class="form-control" autocomplete="off" name="Hotel_name_city" id="Hotel_name_city" value="">                                    			 -->
                        <section id="recipientcase" class="col-md-12 mt-4">
                            <label>Category </label>
                            <select class="form-control selectStarRating" id="selectStarRating" name="selectStarRating" class="selmenu">
                                <!-- <option value="0">Select</option> -->
                                <!-- <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option> -->
                                <?php 
                                foreach($category as $name) { 
                                    echo '<option value="'.$name.'">'.$name.'</option>';
                                } 
                                
                                ?>
                            </select>               
                        </section>
                        <section id="" class="col-md-12 mt-4" >
                            <label>Hotel Name</label>
                            <select class="form-control buildHotelName" id="buildHotelName"  required="" name="buildHotelName" required style="display: flex;">
                            <?php 
                                foreach($hotel_name as $name) { 
                                    echo '<option value="'.$name.'">'.$name.'</option>';
                                } 
                                ?>
                            </select>
                        </section>
                        <section id="" class="col-md-12 mt-4">
                        <label>Room Type</label>
                            <select class="form-control buildRoomType" id="buildRoomType" required="" name="buildRoomType" style="display: flex;">
                            <?php 
                                foreach($room_type as $name) { 
                                    echo '<option value="'.$name.'">'.$name.'</option>';
                                } 
                                ?>                                          -->
                            </select>
                        </section>
                        <section id="aside" class="mt-4" style="display: flex;">
                            <section id="recipientcase" class="col-md-6">
                                <label>Check In </label>
                                <input type="date" value="<?php echo $package->specificDate ?>" name="check_in_date" id="check_in_date" class="form-control check_in_date" >
                                <!-- <input type="date" name="check_in_date" id="check_in_date" class="form-control check_in_date" value="<?php echo isset($details['checkindate']) ? $details['checkindate'] : "" ;?>" readonly > -->
                            </section>

                            <section id="recipientcase" class="col-md-6">
                                <label>Check Out</label>
                                <input type="date"  value="<?php echo $package->noDaysFrom ?>" name="check_out_date" id="check_out_date" class="form-control txtinput check_out_date" >
                                <!-- <input type="date" name="check_out_date" id="check_out_date" class="form-control txtinput check_out_date" min="<?php echo $details['checkindate'];?>" max="<?php echo $details['checkoutdate'];?>" value=""> -->
                            </section>
                        </section>
                        <!-- <br>
                
                        <br> -->
                        <!-- <section id="aside" class="col-md-12" style="display: flex; margin-top: -44px;"> -->

                      
                            <!-- <section id="recipientcase"  class="col-md-6">
                                <label>Nights </label>
                                <select class="form-control" id="nights" name="nights" tabindex="6" class="selmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </section> -->
                             <!-- <section id="recipientcase"  class="col-md-6">
                               <label>Nationality </label>
                               <select class="form-control" id="selectNationality" name="selectNationality" class="selmenu">
                                <option value="">Select Nationality</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua &amp; Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="0">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="">Belarus</option>
                                <option value="BY">Belarus (Belorussia)</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BQ">Bonaire</option>
                                <option value="">Bosnia and Herzegovina</option>
                                <option value="BA">Bosnia and Herzegowina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Islands</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="VG">British Virgin Islands</option>
                                <option value="">Brunei</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CB">Canada Buffer</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="">Channel Islands</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Islands</option>
                                <option value="CC">Cocos (Keeling) Island</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo (Rep. Dem.)</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="">Côte d’Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">CuraÃ§ao</option>
                                <option value="">Curacao</option>
                                <option value="C0">CURAÇAO</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="DM">Dominicana</option>
                                <option value="TP">East Timor</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="">England</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="EU">European Monetary Union</option>
                                <option value="FK">Falkland Islands</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="">Fiji</option>
                                <option value="FJ">Fiji Islands</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibralter</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard &amp; Mcdonald Islands</option>
                                <option value="HN">Honduras</option>
                                <option value="">Hong Kong</option>
                                <option value="HK">Hongkong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN" selected="">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="CI">Ivory Coast</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea (Democratic People's Republic Of)</option>
                                <option value="">Kosovo</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="">Laos</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libyan Arab Jamahiriya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="QL">Lithuania (Dummy Code)</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macau</option>
                                <option value="MK">Macedonia</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="MB">Mexico Buffer</option>
                                <option value="FM">Micronesia</option>
                                <option value="MD">Moldova</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">MONTENEGRO</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Islands</option>
                                <option value="NY">NORTH CYPRUS</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="0">On Transit</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Occ. Territories</option>
                                <option value="">Palestinian Territories</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="0">pppppppppp</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="0">Republic of Rwanda</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RW">Ruanda</option>
                                <option value="">Russia</option>
                                <option value="RU">Russian Federation</option>
                                <option value="">Rwanda</option>
                                <option value="BL">Saint Barthalemy</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin (French part)</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome &amp; Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="0">Schengen</option>
                                <option value="0">Schengen Area</option>
                                <option value="">Scotland</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten (Dutch part)</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia &amp; South Sandwich</option>
                                <option value="KR">South Korea</option>
                                <option value="SS">South Sudan</option>
                                <option value="SU">Soviet Union</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="">St Kitts and Nevis</option>
                                <option value="">St Maarten</option>
                                <option value="">St Vincent and the Grenadines</option>
                                <option value="SH">St. Helena</option>
                                <option value="KN">St. Kitts and Nevis</option>
                                <option value="PM">St. Pierre &amp; Miquelon</option>
                                <option value="VC">St. Vincent &amp; the Grenadines</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard &amp; Jan Mayen Islands</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TC">Turcs &amp; Caicos Islands</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="">Turks and Caicos</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UM">U.S. Minor Outlaying Islands</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">UNITED KINGDOM</option>
                                <option value="UY">Uruguay</option>
                                <option value="">US Virgin Islands</option>
                                <option value="US">USA</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VA">Vatican City State</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="VI">Virgin Islands (US)</option>
                                <option value="">Wales</option>
                                <option value="WF">Wallis &amp; Futuna Islands</option>
                                <option value="EH">Western Sahara</option>
                                <option value="XO">XO</option>
                                <option value="YE">Yemen</option>
                                <option value="YU">Yugoslavia</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                            
                        </section> -->
                        <!-- </section>
                        <br>
                      
                    </section>
                    <br> -->
                    <div class="clear"></div>
                    <section id="aside" class="col-md-12" style="display: flex; margin-top: -44px;">
                        

                        <!-- <section id="recipientcase" class="col-md-6">
                            <label>Room Type  </label>
                            <select class="form-control" id="select-rooms3" class="selmenu" name="selectRoom">
                                 <?php 
                                // foreach($room_types as $rooms) { 
                                //     echo '<option value="'.$rooms->id.'">'.$rooms->room_type.'</option>';

                                // } 
                                ?>
                           </select>   -->
                           
                       </section>
                    </section>
                    <br>
                  
                
                <section id="aside">
                    <section id="recipientcase">
                        <label>&nbsp;</label>
                        <div class="ls-group-input">
                            <button type="button" class="new_btn px-3"  id="searchHotelButton" aria-hidden="true"> Submit </button>
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
                  
                    <form method="post" >
                      <div id="wrapping">
                      <input type="hidden" name="modal_transfer" id="modal_transfer" value=""/>

                      <!-- <section id="aligned" class="col-md-12">
                        <div class="first">
                            <label><input type="radio" name="colorRadio" value="TransArrival" checked="">Arrival Transfer</label>
                            <label><input type="radio" name="colorRadio" value="TransDeparture"> Departure Transfer</label>
                         </div>
                    </section> -->

                    <section id="aligned" class="col-md-12 mt-4">
                            <label><i class="fa-solid fa-plane-arrival"></i> Flight Arrival</label>
                            <div class="d-flex">
                                <input id="arrival_airline" class="form-control arrival_airline " type="text" placeholder="Airline Code" name="arrival_airline[]">
                                <input id="arrival_flight" class="form-control arrival_flight ml-2 " type="text" placeholder="Flight No" name="arrival_flight[]">
                                <input id="arrival_hours" class="form-control arrival_hours ml-2 " type="text" placeholder="Hours" name="arrival_hours[]">
                                <input id="arrival_mins" class="form-control arrival_mins ml-2 " type="text" placeholder="Minutes" name="arrival_mins[]">
                            </div>
                    </section>

                    <section id="aligned" class="col-md-12 mt-4">
                            <label><i class="fa-solid fa-plane-departure"></i> Return Flight</label>
                            <div class="d-flex">
                                <input id="return_airline" class="form-control return_airline " type="text" placeholder="Airline Code" name="return_airline[]">
                                <input id="return_flight" class="form-control return_flight ml-2 " type="text" placeholder="Flight No" name="return_flight[]">
                                <input id="return_hours" class="form-control return_hours ml-2 " type="text" placeholder="Hours" name="return_hours[]">
                                <input id="return_mins" class="form-control return_mins ml-2 " type="text" placeholder="Minutes" name="return_mins[]">
                            </div>
                    </section>

                        <section id="aligned" class="col-md-12 mt-4">
                            <label>Transfer Type</label>
                            <select id="transfertype"  required  name="transfertype"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                    <option value="">Select Transfer</option>
                                    <!-- <option value="oneway">Internal Transfer</option>
                                    <option value="round">Point to Point Transfer</option>
                                    ?php 
                                    foreach($transfer_types as $name) { 
                                        echo '<option value="'.$name.'">'.$name.'</option>';
                                    } 
                                    ?> -->
                                    <?php foreach($transfer_types as $value) : ?>
                                        <option value=<?php echo $value ?>><?php echo $value == "oneway" ? "Internal Transfer" : "Point to Point Transfer" ?></option>
                                    <?php endforeach ?>
                                </select>
                        </section>

                       <!-- <section id="" class="col-md-12 ">
                        <label>Flight </label>
                        <input id="transfer_from_date" class="form-control" type="text"  value="" name="transfer_from_date"/>
                        </section> -->
                        <section id="" class="col-md-12 mt-4">
                        <label>From Date</label>

                        <input id="transfer_from_date" class="form-control" type="date"  value="<?php echo isset($details['checkindate']) ? $details['checkindate'] : ""?>" name="transfer_from_date"/>
                        </section>
                        <br/>
                        <section id="aside" class="col-md-12 row" >
                            <section id="" class="col-md-6">
                            <label>Pick up</label>
                                <select id="pickupinternal"  required  name="buildTravelToDateCab"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                    <option value="Pickup">Pickup</option>
                                    <?php 
                                    foreach($transfer_pickup as $name) { 
                                        echo '<option value="'.$name.'">'.$name.'</option>';
                                    } 
                                    ?>  
                                </select>
                            </section>

                            <section id="" class="col-md-6">
                            <label>Drop off</label>
                                <select   id="dropoffinternal" name="buildTravelToCityCabDrop"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                    <!-- <?php 
                                    foreach($transfer_dropoff as $name) { 
                                        echo '<option value="'.$name.'">'.$name.'</option>';
                                    } 
                                    ?>   -->

                                        <option value="Drop Off">Drop Off</option>
                                        </select>
                            </section>
                        </section>

                        <section id="" class="col-md-6 mt-4">
                        <label>Route Name</label>
                            <input id="route_nameinternal" class="form-control" type="text" placeholder="Route Name" name="buildTravelTypeCab">
                            <!-- <select   id="route_nameinternal" class="form-control"  name="buildTravelTypeCab" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                    <?php 
                                    foreach($transfer_routes as $name) { 
                                        echo '<option value="'.$name.'">'.$name.'</option>';
                                    } 
                                    ?>  
                                </select> -->
                        </td>
                        </section>
                    
                    <section id="aside">
                    <section id="recipientcase">
                        <label>&nbsp;</label>
                        <div class="ls-group-input">
                            <button type="button" class="new_btn px-3"  id="searchTransferButton" aria-hidden="true"> Submit </button>
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
                  
                    <form method="post" >
                      <div id="wrapping">
                      <input type="hidden" name="modal_meals" id="modal_meals" value=""/>
                      <section id="" class="col-md-12">
                            <!-- <section id="" class="col-md-6">
                                    <label>Date</label>                            
                                    <input class="form-control" type="date" value="<?php echo isset($details['checkindate']) ? $details['checkindate'] : "" ;?>" name="meals_date" id="meals_date">
                            </section> -->
                  <!-- <section id="" class="col-md-12 d-flex">
                 <input type="radio" class="transfer_with_or_without" id="with_transfer" name="transfer_with_or_without" value="with_transfer" onclick="get_resturant_name('with_transfer','');" autocompleted=""> With Transfer<br>
                    <input type="radio" class="transfer_with_or_without" id="without_transfer" name="transfer_with_or_without" value="without_transfer" onclick="get_resturant_name('without_transfer','');"> Without Transfer  
                    </section> -->

                    <section id="" class="col-md-12 mt-4">
                                <label>Transfer Type</label>
                                <select id="transfer_with_or_without"  required  name="transfer_with_or_without" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                <option value="">Select Transfer</option>
                                    <?php foreach($resturant_transfer_type as $value) : ?>
                                        <option value=<?php echo $value ?>><?php echo $value == "with_transfer" ? "With Transfer" : "Without Transfer" ?></option>
                                    <?php endforeach ?>
                                </select>
                            </section>


                    
                            <section id="" class="col-md-12 mt-4">
                                <label>Resturant Type</label>
                                <select id="resturant_type"  required  name="resturant_type"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                <!-- <select id="resturant_type"  required  name="resturant_type" onchange="get_resturant_name()" class="js-example-basic-multiple w-100 bg-white form-control form-control-lg"> -->
                                <?php 
                                    foreach($resturant_type as $name) { 
                                        echo '<option value="'.$name.'">'.$name.'</option>';
                                    } 
                                    ?>  
                                    </select>
                            </section>

                            <section id="" class="col-md-12 mt-4">
                                <label>Resturant Name</label>
                                <select id="resturant_name"  required  name="resturant_name"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                <?php 
                                    foreach($resturant_name as $name) { 
                                        echo '<option value="'.$name.'">'.$name.'</option>';
                                    } 
                                    ?>             
                                </select> 
                            </section>
                        
                       <section id="aligned" class="col-md-12 mt-4">
                            <label>Meal </label>
                            <select id="meal"  required  name="meal"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                            <?php 
                                    foreach($meal as $name) { 
                                        echo '<option value="'.$name.'">'.$name.'</option>';
                                    } 
                                    ?>  
                                       
                                </select>
                        </section>

                        <section id="aligned" class="col-md-12 mt-4">
                            <label>Meal Type </label>
                            <select id="meal_type"  required  name="meal_type"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                            <?php 
                                    foreach($meal_type as $name) { 
                                        echo '<option value="'.$name.'">'.$name.'</option>';
                                    } 
                                    ?>  
                                       
                                </select>
                        </section>

                        <section id="" class="col-md-12 mt-4">
                        <label><i class="fa fa-male" aria-hidden="true"></i> Adult</label>
                            <input id="meal_adult" value="<?php echo ((int)$package->adult) ?>" class="form-control" type="text"  name="meal_adult"></td>

                        </section>
                        
                        <section id="" class="col-md-12 mt-4">
                        <label><i class="fa-solid fa-child"></i>Child</label>
                            <input id="meal_child" value="<?php echo ((int)$package->child) ?>" class="form-control" type="text"  name="meal_child"></td>

                        </section>

                            

                        </section>
                      

                      
                    </section>
                    
                    <section id="aside">
                    <section id="recipientcase">
                        <label>&nbsp;</label>
                        <div class="ls-group-input">
                            <button type="button" class="new_btn px-3"  id="searchMealsButton" aria-hidden="true"> Submit </button>
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
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-place-of-worship"></i> Excursion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="searchexcursion" style="display:block;">
                  
                    <form method="post" >
                      <div id="wrapping">
                      <input type="hidden" name="modal_excursion" id="modal_excursion" value=""/>
                      <section id="" class="">
                            <section id="" class="col-md-12">
                                    <label>Excursion Type</label> 
                                    <select id="excursion_type"  required  name="excursion_type"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                        <option value="">Select Type</option>
                                        <!-- <option value="SIC">SIC</option>
                                        <option value="PVT">PVT</option> -->
                                        <?php foreach($excursion_types as $value) : ?>
                                            <option value=<?php echo $value ?>><?php echo $value ?></option>
                                        <?php endforeach ?>
                                    </select>                           
                            </section>
                            <section id="" class="col-md-12 mt-4">
                                <label>Excursion Name</label>
                                <!-- <select required multiple="" id="excursion_name"  name="excursion[]"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg" > -->
                                <!-- <select id="excursion_name"  required  name="excursion"  class="js-example-basic-multiple w-100 bg-white form-control form-control-lg">
                                        <?php foreach($excursion_data as $value){ ?>
                                            <option value="<?php echo $value ?>"><?php echo $value ?></option>
                                        <?php } ?>
                                </select> -->

                                <select  required   name="excursion[]" id='excursion_name' multiple class="js-example-basic-multiple2 w-100 bg-white form-control form-control-lg">
                                        <?php foreach($excursion_data as $value){ ?>
                                            <option value="<?php echo $value ?>"><?php echo $value ?></option>
                                        <?php } ?>
                                </select>
                                
                            </section>
                        
                       <section id="" class="col-md-12 mt-4">
                        <label><i class="fa fa-male" aria-hidden="true"></i> Adult</label>
                            <input id="excursion_adult" value="<?php echo ((int)$package->adult) ?>" class="form-control" type="text"  name="excursion_adult"></td>

                        </section>

                        <section id="" class="col-md-12 mt-4">
                        <label><i class="fa-solid fa-child"></i> Child</label>
                            <input id="excursion_child"  value="<?php echo ((int)$package->child) ?>" class="form-control" type="text"  name="excursion_child"></td>

                        </section>

                     
                        <section id="" class="col-md-12 mt-4">
                        <label><i class="fa-solid fa-baby"></i>Infant</label>
                            <input id="excursion_infant" value="<?php echo ((int)$package->infant) ?>" class="form-control" type="text"  name="excursion_infant"></td>

                        </section>
                        </section>

                    </section>
                    
                    <section id="aside">
                    <section id="recipientcase">
                        <label>&nbsp;</label>
                        <div class="ls-group-input">
                            <button type="button" class="new_btn px-3"  id="searchExcursionButton" aria-hidden="true"> Submit </button>
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

                                    <?php foreach ($listSightseeings as $key ) {?>
                                    
                                    <tr id="sightsearchtablebody">
                                        <td><?php echo $key->tourname;?> </td>
                                    <td class="text-center"><strong><?php echo $key->adultprice;?> </strong>
                                        <input class="adults" type="hidden" name="costadult_2864" id="costadult_2864"
                                        value="0">

                                    </td>
                                    <td class="text-center"><strong><?php echo $key->childprice;?></strong>
                                        <input class="child" type="hidden" name="costkid_2864" id="costkid_2864" value="0">

                                    </td>
                                   
                                    <td>Demo Agency</td>
                                    <td><input type="checkbox"></td>
                                    </tr>
                                  <?php }?>
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

<script>
    function get_resturant_name(id){

    var transfer = $('input[name="transfer_with_or_without"]:checked').val();
    var rest_type =  $('#resturant_type').val();

    $("#resturant_name").empty();
    $.ajax({
          type:"POST",
          dataType: "json",
          url:'<?php echo site_url();?>/Query/get_resturant_name',
          data:{'transfer':transfer,'rest_type':rest_type},

          success:function(response){
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
<!-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script> -->