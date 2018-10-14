<!-- partial -->
     <div class="main-panel">
        <div class="content-wrapper">

        <form class="general-form" method="POST">

        <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-flex alifn-items-center">
              	<p>Don't know what to do? Check out our step-by-step tutorial <a href="#">here</a>.</p>
                <button id="general-submit" type="submit" class="btn ml-auto download-button">HISTORY</button>
                <button id="general-submit" type="submit" class="btn purchase-button">SAVE</button>
              </span>
            </div>
          </div>
         	
        <div class="row">
        	<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><b >GENERAL DETAILS:</b></h4>
                  <p class="card-description">
                    OWNER :  <b> <?php echo strtoupper($userData['first_name'].' '.$userData['last_name']); ?> </b>
                  </p>
                    <div class="form-group">
                    	<div class="row">
                    		<div class="col-md-6">
                    			 <label for="base_currency"><small><i class="fa fa-money" aria-hidden="true"></i> CURRENCY :</small></label>
                      			 <select name="base_currency" class="form-control">
									<option value="USD">United States Dollars</option>
									<option value="EUR">Euro</option>
									<option value="GBP">United Kingdom Pounds</option>
									<option value="DZD">Algeria Dinars</option>
									<option value="ARP">Argentina Pesos</option>
									<option value="AUD">Australia Dollars</option>
									<option value="ATS">Austria Schillings</option>
									<option value="BSD">Bahamas Dollars</option>
									<option value="BBD">Barbados Dollars</option>
									<option value="BEF">Belgium Francs</option>
									<option value="BMD">Bermuda Dollars</option>
									<option value="BRR">Brazil Real</option>
									<option value="BGL">Bulgaria Lev</option>
									<option value="CAD">Canada Dollars</option>
									<option value="CLP">Chile Pesos</option>
									<option value="CNY">China Yuan Renmimbi</option>
									<option value="CYP">Cyprus Pounds</option>
									<option value="CSK">Czech Republic Koruna</option>
									<option value="DKK">Denmark Kroner</option>
									<option value="NLG">Dutch Guilders</option>
									<option value="XCD">Eastern Caribbean Dollars</option>
									<option value="EGP">Egypt Pounds</option>
									<option value="FJD">Fiji Dollars</option>
									<option value="FIM">Finland Markka</option>
									<option value="FRF">France Francs</option>
									<option value="DEM">Germany Deutsche Marks</option>
									<option value="XAU">Gold Ounces</option>
									<option value="GRD">Greece Drachmas</option>
									<option value="HKD">Hong Kong Dollars</option>
									<option value="HUF">Hungary Forint</option>
									<option value="ISK">Iceland Krona</option>
									<option value="INR">India Rupees</option>
									<option value="IDR">Indonesia Rupiah</option>
									<option value="IEP">Ireland Punt</option>
									<option value="ILS">Israel New Shekels</option>
									<option value="ITL">Italy Lira</option>
									<option value="JMD">Jamaica Dollars</option>
									<option value="JPY">Japan Yen</option>
									<option value="JOD">Jordan Dinar</option>
									<option value="KRW">Korea (South) Won</option>
									<option value="LBP">Lebanon Pounds</option>
									<option value="LUF">Luxembourg Francs</option>
									<option value="MYR" selected="selected">Malaysia Ringgit</option>
									<option value="MXP">Mexico Pesos</option>
									<option value="NLG">Netherlands Guilders</option>
									<option value="NZD">New Zealand Dollars</option>
									<option value="NOK">Norway Kroner</option>
									<option value="PKR">Pakistan Rupees</option>
									<option value="XPD">Palladium Ounces</option>
									<option value="PHP">Philippines Pesos</option>
									<option value="XPT">Platinum Ounces</option>
									<option value="PLZ">Poland Zloty</option>
									<option value="PTE">Portugal Escudo</option>
									<option value="ROL">Romania Leu</option>
									<option value="RUR">Russia Rubles</option>
									<option value="SAR">Saudi Arabia Riyal</option>
									<option value="XAG">Silver Ounces</option>
									<option value="SGD">Singapore Dollars</option>
									<option value="SKK">Slovakia Koruna</option>
									<option value="ZAR">South Africa Rand</option>
									<option value="KRW">South Korea Won</option>
									<option value="ESP">Spain Pesetas</option>
									<option value="XDR">Special Drawing Right (IMF)</option>
									<option value="SDD">Sudan Dinar</option>
									<option value="SEK">Sweden Krona</option>
									<option value="CHF">Switzerland Francs</option>
									<option value="TWD">Taiwan Dollars</option>
									<option value="THB">Thailand Baht</option>
									<option value="TTD">Trinidad and Tobago Dollars</option>
									<option value="TRL">Turkey Lira</option>
									<option value="VEB">Venezuela Bolivar</option>
									<option value="ZMK">Zambia Kwacha</option>
									<option value="EUR">Euro</option>
									<option value="XCD">Eastern Caribbean Dollars</option>
									<option value="XDR">Special Drawing Right (IMF)</option>
									<option value="XAG">Silver Ounces</option>
									<option value="XAU">Gold Ounces</option>
									<option value="XPD">Palladium Ounces</option>
									<option value="XPT">Platinum Ounces</option>
								</select>
                    		</div>
                    		<div class="col-md-6">
                    			 <label for="base_lang"><small>PRIMARY LANGUAGE :</small></label>
                      			 <input type="text" class="form-control" name="base_lang" value="ENGLISH" disabled>
                    		</div>
                    	</div>
                    </div>
                    <div class="form-group">
                    	<div class="row">
                    		<div class="col-md-6">
                    			 <label for="base_name"><small>NAME:</small></label>
                                 <input type="text" class="form-control" name="base_name"  value="<?php echo @$userLodging['0']['name'];?>" placeholder="Stunning Lodge " required>
                    		</div>
                    		<div class="col-md-6">
                    			 <label for="base_url"><small>URL NAME:</small></label>
                      			 <input type="text" class="form-control" name="base_url"  value="<?php echo @$userLodging['0']['url'];?>" placeholder="Stunning-Lodge " required>
                    		</div>
                    	</div>            
                    </div>
                    <div class="form-group">
                    	<div class="row">                   		
                    		<div class="col-md-6">
                    			 <label for="base_country"><small><i class="fa fa-globe" aria-hidden="true"></i> COUNTRY :</small></label>
                      			 <select class="form-control" name="base_country" required>
									<option value="AFG">Afghanistan</option>
									<option value="ALA">Åland Islands</option>
									<option value="ALB">Albania</option>
									<option value="DZA">Algeria</option>
									<option value="ASM">American Samoa</option>
									<option value="AND">Andorra</option>
									<option value="AGO">Angola</option>
									<option value="AIA">Anguilla</option>
									<option value="ATA">Antarctica</option>
									<option value="ATG">Antigua and Barbuda</option>
									<option value="ARG">Argentina</option>
									<option value="ARM">Armenia</option>
									<option value="ABW">Aruba</option>
									<option value="AUS">Australia</option>
									<option value="AUT">Austria</option>
									<option value="AZE">Azerbaijan</option>
									<option value="BHS">Bahamas</option>
									<option value="BHR">Bahrain</option>
									<option value="BGD">Bangladesh</option>
									<option value="BRB">Barbados</option>
									<option value="BLR">Belarus</option>
									<option value="BEL">Belgium</option>
									<option value="BLZ">Belize</option>
									<option value="BEN">Benin</option>
									<option value="BMU">Bermuda</option>
									<option value="BTN">Bhutan</option>
									<option value="BOL">Bolivia, Plurinational State of</option>
									<option value="BES">Bonaire, Sint Eustatius and Saba</option>
									<option value="BIH">Bosnia and Herzegovina</option>
									<option value="BWA">Botswana</option>
									<option value="BVT">Bouvet Island</option>
									<option value="BRA">Brazil</option>
									<option value="IOT">British Indian Ocean Territory</option>
									<option value="BRN">Brunei Darussalam</option>
									<option value="BGR">Bulgaria</option>
									<option value="BFA">Burkina Faso</option>
									<option value="BDI">Burundi</option>
									<option value="KHM">Cambodia</option>
									<option value="CMR">Cameroon</option>
									<option value="CAN">Canada</option>
									<option value="CPV">Cape Verde</option>
									<option value="CYM">Cayman Islands</option>
									<option value="CAF">Central African Republic</option>
									<option value="TCD">Chad</option>
									<option value="CHL">Chile</option>
									<option value="CHN">China</option>
									<option value="CXR">Christmas Island</option>
									<option value="CCK">Cocos (Keeling) Islands</option>
									<option value="COL">Colombia</option>
									<option value="COM">Comoros</option>
									<option value="COG">Congo</option>
									<option value="COD">Congo, the Democratic Republic of the</option>
									<option value="COK">Cook Islands</option>
									<option value="CRI">Costa Rica</option>
									<option value="CIV">Côte d'Ivoire</option>
									<option value="HRV">Croatia</option>
									<option value="CUB">Cuba</option>
									<option value="CUW">Curaçao</option>
									<option value="CYP">Cyprus</option>
									<option value="CZE">Czech Republic</option>
									<option value="DNK">Denmark</option>
									<option value="DJI">Djibouti</option>
									<option value="DMA">Dominica</option>
									<option value="DOM">Dominican Republic</option>
									<option value="ECU">Ecuador</option>
									<option value="EGY">Egypt</option>
									<option value="SLV">El Salvador</option>
									<option value="GNQ">Equatorial Guinea</option>
									<option value="ERI">Eritrea</option>
									<option value="EST">Estonia</option>
									<option value="ETH">Ethiopia</option>
									<option value="FLK">Falkland Islands (Malvinas)</option>
									<option value="FRO">Faroe Islands</option>
									<option value="FJI">Fiji</option>
									<option value="FIN">Finland</option>
									<option value="FRA">France</option>
									<option value="GUF">French Guiana</option>
									<option value="PYF">French Polynesia</option>
									<option value="ATF">French Southern Territories</option>
									<option value="GAB">Gabon</option>
									<option value="GMB">Gambia</option>
									<option value="GEO">Georgia</option>
									<option value="DEU">Germany</option>
									<option value="GHA">Ghana</option>
									<option value="GIB">Gibraltar</option>
									<option value="GRC">Greece</option>
									<option value="GRL">Greenland</option>
									<option value="GRD">Grenada</option>
									<option value="GLP">Guadeloupe</option>
									<option value="GUM">Guam</option>
									<option value="GTM">Guatemala</option>
									<option value="GGY">Guernsey</option>
									<option value="GIN">Guinea</option>
									<option value="GNB">Guinea-Bissau</option>
									<option value="GUY">Guyana</option>
									<option value="HTI">Haiti</option>
									<option value="HMD">Heard Island and McDonald Islands</option>
									<option value="VAT">Holy See (Vatican City State)</option>
									<option value="HND">Honduras</option>
									<option value="HKG">Hong Kong</option>
									<option value="HUN">Hungary</option>
									<option value="ISL">Iceland</option>
									<option value="IND">India</option>
									<option value="IDN">Indonesia</option>
									<option value="IRN">Iran, Islamic Republic of</option>
									<option value="IRQ">Iraq</option>
									<option value="IRL">Ireland</option>
									<option value="IMN">Isle of Man</option>
									<option value="ISR">Israel</option>
									<option value="ITA">Italy</option>
									<option value="JAM">Jamaica</option>
									<option value="JPN">Japan</option>
									<option value="JEY">Jersey</option>
									<option value="JOR">Jordan</option>
									<option value="KAZ">Kazakhstan</option>
									<option value="KEN">Kenya</option>
									<option value="KIR">Kiribati</option>
									<option value="PRK">Korea, Democratic People's Republic of</option>
									<option value="KOR">Korea, Republic of</option>
									<option value="KWT">Kuwait</option>
									<option value="KGZ">Kyrgyzstan</option>
									<option value="LAO">Lao People's Democratic Republic</option>
									<option value="LVA">Latvia</option>
									<option value="LBN">Lebanon</option>
									<option value="LSO">Lesotho</option>
									<option value="LBR">Liberia</option>
									<option value="LBY">Libya</option>
									<option value="LIE">Liechtenstein</option>
									<option value="LTU">Lithuania</option>
									<option value="LUX">Luxembourg</option>
									<option value="MAC">Macao</option>
									<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
									<option value="MDG">Madagascar</option>
									<option value="MWI">Malawi</option>
									<option value="MYS" selected>Malaysia</option>
									<option value="MDV">Maldives</option>
									<option value="MLI">Mali</option>
									<option value="MLT">Malta</option>
									<option value="MHL">Marshall Islands</option>
									<option value="MTQ">Martinique</option>
									<option value="MRT">Mauritania</option>
									<option value="MUS">Mauritius</option>
									<option value="MYT">Mayotte</option>
									<option value="MEX">Mexico</option>
									<option value="FSM">Micronesia, Federated States of</option>
									<option value="MDA">Moldova, Republic of</option>
									<option value="MCO">Monaco</option>
									<option value="MNG">Mongolia</option>
									<option value="MNE">Montenegro</option>
									<option value="MSR">Montserrat</option>
									<option value="MAR">Morocco</option>
									<option value="MOZ">Mozambique</option>
									<option value="MMR">Myanmar</option>
									<option value="NAM">Namibia</option>
									<option value="NRU">Nauru</option>
									<option value="NPL">Nepal</option>
									<option value="NLD">Netherlands</option>
									<option value="NCL">New Caledonia</option>
									<option value="NZL">New Zealand</option>
									<option value="NIC">Nicaragua</option>
									<option value="NER">Niger</option>
									<option value="NGA">Nigeria</option>
									<option value="NIU">Niue</option>
									<option value="NFK">Norfolk Island</option>
									<option value="MNP">Northern Mariana Islands</option>
									<option value="NOR">Norway</option>
									<option value="OMN">Oman</option>
									<option value="PAK">Pakistan</option>
									<option value="PLW">Palau</option>
									<option value="PSE">Palestinian Territory, Occupied</option>
									<option value="PAN">Panama</option>
									<option value="PNG">Papua New Guinea</option>
									<option value="PRY">Paraguay</option>
									<option value="PER">Peru</option>
									<option value="PHL">Philippines</option>
									<option value="PCN">Pitcairn</option>
									<option value="POL">Poland</option>
									<option value="PRT">Portugal</option>
									<option value="PRI">Puerto Rico</option>
									<option value="QAT">Qatar</option>
									<option value="REU">Réunion</option>
									<option value="ROU">Romania</option>
									<option value="RUS">Russian Federation</option>
									<option value="RWA">Rwanda</option>
									<option value="BLM">Saint Barthélemy</option>
									<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
									<option value="KNA">Saint Kitts and Nevis</option>
									<option value="LCA">Saint Lucia</option>
									<option value="MAF">Saint Martin (French part)</option>
									<option value="SPM">Saint Pierre and Miquelon</option>
									<option value="VCT">Saint Vincent and the Grenadines</option>
									<option value="WSM">Samoa</option>
									<option value="SMR">San Marino</option>
									<option value="STP">Sao Tome and Principe</option>
									<option value="SAU">Saudi Arabia</option>
									<option value="SEN">Senegal</option>
									<option value="SRB">Serbia</option>
									<option value="SYC">Seychelles</option>
									<option value="SLE">Sierra Leone</option>
									<option value="SGP">Singapore</option>
									<option value="SXM">Sint Maarten (Dutch part)</option>
									<option value="SVK">Slovakia</option>
									<option value="SVN">Slovenia</option>
									<option value="SLB">Solomon Islands</option>
									<option value="SOM">Somalia</option>
									<option value="ZAF">South Africa</option>
									<option value="SGS">South Georgia and the South Sandwich Islands</option>
									<option value="SSD">South Sudan</option>
									<option value="ESP">Spain</option>
									<option value="LKA">Sri Lanka</option>
									<option value="SDN">Sudan</option>
									<option value="SUR">Suriname</option>
									<option value="SJM">Svalbard and Jan Mayen</option>
									<option value="SWZ">Swaziland</option>
									<option value="SWE">Sweden</option>
									<option value="CHE">Switzerland</option>
									<option value="SYR">Syrian Arab Republic</option>
									<option value="TWN">Taiwan, Province of China</option>
									<option value="TJK">Tajikistan</option>
									<option value="TZA">Tanzania, United Republic of</option>
									<option value="THA">Thailand</option>
									<option value="TLS">Timor-Leste</option>
									<option value="TGO">Togo</option>
									<option value="TKL">Tokelau</option>
									<option value="TON">Tonga</option>
									<option value="TTO">Trinidad and Tobago</option>
									<option value="TUN">Tunisia</option>
									<option value="TUR">Turkey</option>
									<option value="TKM">Turkmenistan</option>
									<option value="TCA">Turks and Caicos Islands</option>
									<option value="TUV">Tuvalu</option>
									<option value="UGA">Uganda</option>
									<option value="UKR">Ukraine</option>
									<option value="ARE">United Arab Emirates</option>
									<option value="GBR">United Kingdom</option>
									<option value="USA">United States</option>
									<option value="UMI">United States Minor Outlying Islands</option>
									<option value="URY">Uruguay</option>
									<option value="UZB">Uzbekistan</option>
									<option value="VUT">Vanuatu</option>
									<option value="VEN">Venezuela, Bolivarian Republic of</option>
									<option value="VNM">Viet Nam</option>
									<option value="VGB">Virgin Islands, British</option>
									<option value="VIR">Virgin Islands, U.S.</option>
									<option value="WLF">Wallis and Futuna</option>
									<option value="ESH">Western Sahara</option>
									<option value="YEM">Yemen</option>
									<option value="ZMB">Zambia</option>
									<option value="ZWE">Zimbabwe</option>
								</select>
                    		</div>
                    		<div class="col-md-6">
                    			 <label for="base_region"><small>REGION:</small></label>
                      			 <input type="text" class="form-control" name="base_region" value="<?php echo @$userLodging['0']['region'];?>" placeholder="Kota Kinabalu" required>
                    		</div>
                    	</div>
                    </div>
                    <div class="form-group">
                    	<div class="row">
                    		<div class="col-md-8">
                    			 <label for="base_address"><small><i class="fa fa-address-card-o" aria-hidden="true"></i> ADDRESS:</small></label>
                      			 <input type="text" class="form-control" name="base_address" value="<?php echo @$userLodging['0']['address'];?>" placeholder="Taman Kinfisher" required>
                    		</div>
                    		<div class="col-md-4">
                    			 <label for="base_postal"><small>POSTAL CODE :</small></label>
                      			 <input type="text" class="form-control" name="base_postal" value="<?php echo @$userLodging['0']['postal_code'];?>" placeholder="89300" required>
                    		</div>
                    	</div>
                    </div>                  
                    <div class="form-group">
                    	<div class="row">
                    		<div class="col-md-8">
                    			 <label for="base_email"><small><i class="fa fa-envelope-o" aria-hidden="true"></i> EMAIL :</small></label>
                      			 <input type="email" class="form-control" name="base_email" value="<?php echo @$userLodging['0']['email'];?>" placeholder="homestay@yahoo.com" required>
                    		</div>
                    		<div class="col-md-4">
                    			 <label for="base_phone"><small><i class="fa fa-phone" aria-hidden="true"></i> PHONE:</small></label>
                      			 <input type="phone" class="form-control" name="base_phone" value="<?php echo @$userLodging['0']['phone'];?>" placeholder="+60198432026" required>
                    		</div>
                    	</div>
                    </div>
                    <input type="hidden" name="owner_id" value="<?php echo $userData['oauth_uid'];?>">
                    <div class="form-group">
                      <label for="base_desc"><i class="fa fa-info" aria-hidden="true"></i> DESCRIPTION :</label>
                      <textarea class="form-control" name="base_desc" rows="12">
                      	<?php echo @$userLodging['0']['description'];?>
                      </textarea>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><b>MAP LOCATION:</b></h4>
                  <form class="location-form" method="POST">                                    
                    <div class="form-group">
                    	<div class="row">
                    		<div class="col-md-6">
                    			 <label for="base_latitude"><small><i class="fa fa-map-marker" aria-hidden="true"></i> LATITUDE:</small></label>
                      			 <input type="text" class="form-control" name="base_langitude" value="<?php echo @$userLodging['0']['latitude'];?>" placeholder="1.67393">
                    		</div>
                    		<div class="col-md-6">
                    			 <label for="base_longitude"><small><i class="fa fa-map-marker" aria-hidden="true"></i> LONGITUDE :</small></label>
                      			 <input type="text" class="form-control" name="base_longitude"value="<?php echo @$userLodging['0']['longitude'];?>"  placeholder="673430">
                    		</div>
                    	</div>
                    </div>             
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><b>SOCIAL MEDIA:</b></h4>                                  
                    <div class="form-group">
                    	<div class="row">
                    		<div class="col-md-6">
                    			 <label for="base_facebook"><small><i class="fa fa-facebook-square" aria-hidden="true"></i> FACEBOOK PAGE:</small></label>
                      			 <input type="text" class="form-control" name="base_facebook" value="<?php echo @$userLodging['0']['facebook'];?>"  placeholder="https://web.facebook.com/StunningHomestay/?ref=settings">
                    		</div>
                    		<div class="col-md-6">
                    			 <label for="base_instagram"><small><i class="fa fa-instagram" aria-hidden="true"></i> INSTAGRAM PAGE:</small></label>
                      			 <input type="text" class="form-control" name="base_instagram" value="<?php echo @$userLodging['0']['instagram'];?>" placeholder="https://www.instagram.com/homestay_kundasang_mesilou/?hl=en">
                    		</div>
                    	</div>
                    	<br>
                    	<div class="row">
                    		<div class="col-md-6">
                    			 <label for="base_facebook"><small><i class="fa fa-twitter" aria-hidden="true"></i> TWITTER PAGE:</small></label>
                      			 <input type="text" class="form-control" name="base_twitter" value="<?php echo @$userLodging['0']['twitter'];?>"  placeholder="https://web.twitter.com/StunningHomestay/?ref=settings">
                    		</div>
                    		<div class="col-md-6">
                    			 <label for="base_instagram"><small><i class="fa fa-pinterest-p" aria-hidden="true"></i> PINTEREST PAGE:</small></label>
                      			 <input type="text" class="form-control" name="base_pinterest" value="<?php echo @$userLodging['0']['pinterest'];?>" placeholder="https://www.pinterest.com/homestay_kundasang_mesilou/?hl=en">
                    		</div>
                    	</div>
                    </div>                                
                </div>
              </div>
              <br>
               <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><b>POLICIES:</b></h4>                                  
                    <div class="form-group">
                    	<div class="row">
                    		<div class="col-md-6">
                    			 <label for="pol_check_out"><small><i class="fa fa-clock-o" aria-hidden="true"></i> CHECK IN TIME :</small></label>
						            <input name="pol_check_in" type="time" class="form-control" value="<?php echo @$userLodging['0']['check_in'];?>">						            
                    		</div>
                    		<div class="col-md-6">
                    			 <label for="pol_check_out"><small><i class="fa fa-clock-o" aria-hidden="true"></i> CHECK OUT TIME :</small></label>
						            <input name="pol_check_out" type="time" class="form-control" value="<?php echo @$userLodging['0']['check_out'];?>">
                    		</div>
                    	</div>
                    	<br>
                    	<div class="row">
                    		<div class="col-md-6">
                    			 <label for="pol_pets"><small><i class="fa fa-paw" aria-hidden="true"></i> PETS:</small></label>
                      			 <select class="form-control" name="pol_pets" id="pol_pets">
                      			 	<option value="IS">IS ALLOWED</option>
                      			 	<option value="NOT">NOT ALLOWED</option>
                      			 </select>
                    		</div>
                    		<div class="col-md-6">
                    			 <label for="pol_children_bed"><small><i class="fa fa-child" aria-hidden="true"></i> CHILDREN BEDS :</small></label>
                      			 <select class="form-control" name="pol_children_bed" id="pol_children_bed">
                      			 	<option value="IS">IS PROVIDED</option>
                      			 	<option value="NOT">NOT PROVIDED</option>
                      			 </select>
                    		</div>
                    	</div>
                    </div>                    
                  </form>                 
                </div>
              </div>

            </div>
        </div>
    </div>
   <!-- content-wrapper ends -->
   <!-- partial:partials/_footer.html -->
        