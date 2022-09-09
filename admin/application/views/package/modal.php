

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 800px!important;">
            <div class="modal-header" style="background-color: #33adb1;">
                <h5 class="modal-title" id="exampleModalLabel">All Hotels</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="searchhotel" style="display:block;">
                  
                    <form method="post" >
                      <div id="wrapping">
                        <section id="aligned" class="col-md-12">
                            <label>Destination</label>
                            <input type="text" class="form-control" autocomplete="off" name="Hotel_name_city" id="Hotel_name_city" value="">                                    			
                        </section>
                     
                        <section id="aside" class="col-md-12" style="display: flex; margin-top: 20px;">
                            <section id="recipientcase" class="col-md-6">
                                <label>Check In </label>
                                <input type="text" name="fromdate" id="check_in_date" class="form-control" value="">
                            </section>

                            <section id="recipientcase" class="col-md-6">
                                <label>Check Out</label>
                                <input type="text" name="todate" id="check_out_date" class="form-control txtinput" value="">
                            </section>
                        </section>
                        <br>
                       
                        <br>
                        <section id="aside" class="col-md-12" style="display: flex; margin-top: -44px;">
                            <section id="recipientcase"  class="col-md-6">
                                <label>Nights </label>
                                <select class="form-control" id="nights" name="nights" tabindex="6" class="selmenu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </section>
                             <section id="recipientcase"  class="col-md-6">
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
                            
                        </section>
                        </section>
                        <br>
                      
                    </section>
                    <br>
                    <div class="clear"></div>
                    <section id="aside" class="col-md-12" style="display: flex; margin-top: -44px;">
                        <section id="recipientcase" class="col-md-6">
                            <label>Star Rating  </label>
                            <select class="form-control" id="selectStarRating" name="selectStarRating" class="selmenu">
                                <option value="0">Any</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>               
                        </section>

                        <section id="recipientcase" class="col-md-6">
                            <label>Rooms  </label>
                            <select class="form-control" id="select-rooms3" class="selmenu" name="selectRoom">
                               <option value="1">1</option>
                               <option value="1">2</option> 
                               <option value="1">3</option>
                           </select>  
                           
                       </section>
                    </section>
                    <br>
                  
                
                <section id="aside">
                    <section id="recipientcase">
                        <label>&nbsp;</label>
                        <div class="ls-group-input">
                            <button type="button" class="btn btn-lg btn-primary"  id="searchHotelButton" aria-hidden="true"> Search Hotel </button>
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




