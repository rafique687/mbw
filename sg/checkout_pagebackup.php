<?php include("header.php");?>
<?php 
 if(!isset($_SESSION['userid']))
{?>
   <script>window.location=" checkouttimelogin.php";</script>
 
<?php } ?>
    <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60">
      <div class="container">
        <h1 class="uppercase">Shopping Cart</h1>
        <ul>
          <li><a href="index.html"><i class="fa fa-home"></i></a></li>
          <li class="active">Shopping Cart</li>
        </ul>
      </div>
    </div>
    <!-- =====  BREADCRUMB END===== -->
    <div class="page-checkout section">
      <!-- =====  CONTAINER START  ===== -->
      <div class="container">
        <div class="row ">

          <div class="col-12 my-3">
            <div id="accordion">
           <!--    <div class="card my-1">
                <div class="card-header" id="headingOne">
                  <h4 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Step 1: Checkout Options <i class="fa fa-caret-down"></i></a>
                  </h4>
                </div>
 
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <h3>New Customer</h3>
                        <p>Checkout Options:</p>
                        <div class="form-group">
                        <div class="radio mb-10" >
                          <label>
                            <input type="radio" checked="checked" value="register" name="account"> Register Account</label>
                        </div>
                        <div class="radio mb-10" >
                          <label>
                            <input type="radio" value="guest" name="account"> Guest Checkout</label>
                        </div>
                        <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                        <input type="button" class="btn mb_20" data-loading-text="Loading..." id="button-account" value="Continue">
                      </div>
                      </div>
                      <div class="col-sm-6">
                        <h3>Returning Customer</h3>
                        <p>I am a returning customer</p>
                        <div class="form-group">
                          <label for="input-email" class="control-label">E-Mail</label>
                          <input type="text" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email">
                        </div>
                        <div class="form-group">
                          <label for="input-password" class="control-label">Password</label>
                          <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
                          <input type="button" class="btn mt_20" data-loading-text="Loading..." id="button-login" value="Login">
                          <a class="pt-30" href="#">Forgotten Password</a></div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div> -->
              <div class="card my-1">
                <div class="card-header" id="headingTwo">
                  <h4 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Step 1: Billing Details <i class="fa fa-caret-down"></i></a>
                  </h4>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    <form class="form-horizontal">
                      <div class="radio mb-10" >
                        <label>
                          <input type="radio" checked="checked" value="existing" name="payment_address" data-id="payment-existing"> I want to use an existing address</label>
                      </div>
                      <div id="payment-existing">
                        <select class="form-control" name="address_id">
                          <option selected="selected" value="4">dasd, adsasd, Al Hasakah, Syrian Arab Republic</option>
                        </select>
                      </div>
                      <div class="radio mb-10 mt-10" >
                        <label>
                          <input type="radio" value="new" name="payment_address" data-id="payment-new"> I want to use a new address</label>
                      </div>

                      <div id="payment-new" style="display: none;">
                        <div class="form-group row required">
                          <label for="input-payment-firstname" class="col-sm-2 control-label">First Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-payment-firstname" placeholder="First Name" value="" name="firstname">
                          </div>
                        </div>
                        <div class="form-group row required">
                          <label for="input-payment-lastname" class="col-sm-2 control-label">Last Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-payment-lastname" placeholder="Last Name" value="" name="lastname">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="input-payment-company" class="col-sm-2 control-label">Company</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-payment-company" placeholder="Company" value="" name="company">
                          </div>
                        </div>
                        <div class="form-group row required">
                          <label for="input-payment-address-1" class="col-sm-2 control-label">Address 1</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-payment-address-1" placeholder="Address 1" value="" name="address_1">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="input-payment-address-2" class="col-sm-2 control-label">Address 2</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-payment-address-2" placeholder="Address 2" value="" name="address_2">
                          </div>
                        </div>
                        <div class="form-group row required">
                          <label for="input-payment-city" class="col-sm-2 control-label">City</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-payment-city" placeholder="City" value="" name="city">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="input-payment-postcode" class="col-sm-2 control-label">Post Code</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-payment-postcode" placeholder="Post Code" value="" name="postcode">
                          </div>
                        </div>
                        <div class="form-group row required">
                          <label for="input-payment-country" class="col-sm-2 control-label">Country</label>
                          <div class="col-sm-10">
                            <select class="form-control" id="input-payment-country" name="country_id">
                              <option value=""> --- Please Select --- </option>
                              <option value="244">Aaland Islands</option>
                              <option value="1">Afghanistan</option>
                              <option value="2">Albania</option>
                              <option value="3">Algeria</option>
                              <option value="4">American Samoa</option>
                              <option value="5">Andorra</option>
                              <option value="6">Angola</option>
                              <option value="7">Anguilla</option>
                              <option value="8">Antarctica</option>
                              <option value="9">Antigua and Barbuda</option>
                              <option value="10">Argentina</option>
                              <option value="11">Armenia</option>
                              <option value="12">Aruba</option>
                              <option value="252">Ascension Island (British)</option>
                              <option value="13">Australia</option>
                              <option value="14">Austria</option>
                              <option value="15">Azerbaijan</option>
                              <option value="16">Bahamas</option>
                              <option value="17">Bahrain</option>
                              <option value="18">Bangladesh</option>
                              <option value="19">Barbados</option>
                              <option value="20">Belarus</option>
                              <option value="21">Belgium</option>
                              <option value="22">Belize</option>
                              <option value="23">Benin</option>
                              <option value="24">Bermuda</option>
                              <option value="25">Bhutan</option>
                              <option value="26">Bolivia</option>
                              <option value="245">Bonaire, Sint Eustatius and Saba</option>
                              <option value="27">Bosnia and Herzegovina</option>
                              <option value="28">Botswana</option>
                              <option value="29">Bouvet Island</option>
                              <option value="30">Brazil</option>
                              <option value="31">British Indian Ocean Territory</option>
                              <option value="32">Brunei Darussalam</option>
                              <option value="33">Bulgaria</option>
                              <option value="34">Burkina Faso</option>
                              <option value="35">Burundi</option>
                              <option value="36">Cambodia</option>
                              <option value="37">Cameroon</option>
                              <option value="38">Canada</option>
                              <option value="251">Canary Islands</option>
                              <option value="39">Cape Verde</option>
                              <option value="40">Cayman Islands</option>
                              <option value="41">Central African Republic</option>
                              <option value="42">Chad</option>
                              <option value="43">Chile</option>
                              <option value="44">China</option>
                              <option value="45">Christmas Island</option>
                              <option value="46">Cocos (Keeling) Islands</option>
                              <option value="47">Colombia</option>
                              <option value="48">Comoros</option>
                              <option value="49">Congo</option>
                              <option value="50">Cook Islands</option>
                              <option value="51">Costa Rica</option>
                              <option value="52">Cote D'Ivoire</option>
                              <option value="53">Croatia</option>
                              <option value="54">Cuba</option>
                              <option value="246">Curacao</option>
                              <option value="55">Cyprus</option>
                              <option value="56">Czech Republic</option>
                              <option value="237">Democratic Republic of Congo</option>
                              <option value="57">Denmark</option>
                              <option value="58">Djibouti</option>
                              <option value="59">Dominica</option>
                              <option value="60">Dominican Republic</option>
                              <option value="61">East Timor</option>
                              <option value="62">Ecuador</option>
                              <option value="63">Egypt</option>
                              <option value="64">El Salvador</option>
                              <option value="65">Equatorial Guinea</option>
                              <option value="66">Eritrea</option>
                              <option value="67">Estonia</option>
                              <option value="68">Ethiopia</option>
                              <option value="69">Falkland Islands (Malvinas)</option>
                              <option value="70">Faroe Islands</option>
                              <option value="71">Fiji</option>
                              <option value="72">Finland</option>
                              <option value="74">France, Metropolitan</option>
                              <option value="75">French Guiana</option>
                              <option value="76">French Polynesia</option>
                              <option value="77">French Southern Territories</option>
                              <option value="126">FYROM</option>
                              <option value="78">Gabon</option>
                              <option value="79">Gambia</option>
                              <option value="80">Georgia</option>
                              <option value="81">Germany</option>
                              <option value="82">Ghana</option>
                              <option value="83">Gibraltar</option>
                              <option value="84">Greece</option>
                              <option value="85">Greenland</option>
                              <option value="86">Grenada</option>
                              <option value="87">Guadeloupe</option>
                              <option value="88">Guam</option>
                              <option value="89">Guatemala</option>
                              <option value="256">Guernsey</option>
                              <option value="90">Guinea</option>
                              <option value="91">Guinea-Bissau</option>
                              <option value="92">Guyana</option>
                              <option value="93">Haiti</option>
                              <option value="94">Heard and Mc Donald Islands</option>
                              <option value="95">Honduras</option>
                              <option value="96">Hong Kong</option>
                              <option value="97">Hungary</option>
                              <option value="98">Iceland</option>
                              <option value="99">India</option>
                              <option value="100">Indonesia</option>
                              <option value="101">Iran (Islamic Republic of)</option>
                              <option value="102">Iraq</option>
                              <option value="103">Ireland</option>
                              <option value="254">Isle of Man</option>
                              <option value="104">Israel</option>
                              <option value="105">Italy</option>
                              <option value="106">Jamaica</option>
                              <option value="107">Japan</option>
                              <option value="257">Jersey</option>
                              <option value="108">Jordan</option>
                              <option value="109">Kazakhstan</option>
                              <option value="110">Kenya</option>
                              <option value="111">Kiribati</option>
                              <option value="113">Korea, Republic of</option>
                              <option value="253">Kosovo, Republic of</option>
                              <option value="114">Kuwait</option>
                              <option value="115">Kyrgyzstan</option>
                              <option value="116">Lao People's Democratic Republic</option>
                              <option value="117">Latvia</option>
                              <option value="118">Lebanon</option>
                              <option value="119">Lesotho</option>
                              <option value="120">Liberia</option>
                              <option value="121">Libyan Arab Jamahiriya</option>
                              <option value="122">Liechtenstein</option>
                              <option value="123">Lithuania</option>
                              <option value="124">Luxembourg</option>
                              <option value="125">Macau</option>
                              <option value="127">Madagascar</option>
                              <option value="128">Malawi</option>
                              <option value="129">Malaysia</option>
                              <option value="130">Maldives</option>
                              <option value="131">Mali</option>
                              <option value="132">Malta</option>
                              <option value="133">Marshall Islands</option>
                              <option value="134">Martinique</option>
                              <option value="135">Mauritania</option>
                              <option value="136">Mauritius</option>
                              <option value="137">Mayotte</option>
                              <option value="138">Mexico</option>
                              <option value="139">Micronesia, Federated States of</option>
                              <option value="140">Moldova, Republic of</option>
                              <option value="141">Monaco</option>
                              <option value="142">Mongolia</option>
                              <option value="242">Montenegro</option>
                              <option value="143">Montserrat</option>
                              <option value="144">Morocco</option>
                              <option value="145">Mozambique</option>
                              <option value="146">Myanmar</option>
                              <option value="147">Namibia</option>
                              <option value="148">Nauru</option>
                              <option value="149">Nepal</option>
                              <option value="150">Netherlands</option>
                              <option value="151">Netherlands Antilles</option>
                              <option value="152">New Caledonia</option>
                              <option value="153">New Zealand</option>
                              <option value="154">Nicaragua</option>
                              <option value="155">Niger</option>
                              <option value="156">Nigeria</option>
                              <option value="157">Niue</option>
                              <option value="158">Norfolk Island</option>
                              <option value="112">North Korea</option>
                              <option value="159">Northern Mariana Islands</option>
                              <option value="160">Norway</option>
                              <option value="161">Oman</option>
                              <option value="162">Pakistan</option>
                              <option value="163">Palau</option>
                              <option value="247">Palestinian Territory, Occupied</option>
                              <option value="164">Panama</option>
                              <option value="165">Papua New Guinea</option>
                              <option value="166">Paraguay</option>
                              <option value="167">Peru</option>
                              <option value="168">Philippines</option>
                              <option value="169">Pitcairn</option>
                              <option value="170">Poland</option>
                              <option value="171">Portugal</option>
                              <option value="172">Puerto Rico</option>
                              <option value="173">Qatar</option>
                              <option value="174">Reunion</option>
                              <option value="175">Romania</option>
                              <option value="176">Russian Federation</option>
                              <option value="177">Rwanda</option>
                              <option value="178">Saint Kitts and Nevis</option>
                              <option value="179">Saint Lucia</option>
                              <option value="180">Saint Vincent and the Grenadines</option>
                              <option value="181">Samoa</option>
                              <option value="182">San Marino</option>
                              <option value="183">Sao Tome and Principe</option>
                              <option value="184">Saudi Arabia</option>
                              <option value="185">Senegal</option>
                              <option value="243">Serbia</option>
                              <option value="186">Seychelles</option>
                              <option value="187">Sierra Leone</option>
                              <option value="188">Singapore</option>
                              <option value="189">Slovak Republic</option>
                              <option value="190">Slovenia</option>
                              <option value="191">Solomon Islands</option>
                              <option value="192">Somalia</option>
                              <option value="193">South Africa</option>
                              <option value="194">South Georgia &amp; South Sandwich Islands</option>
                              <option value="248">South Sudan</option>
                              <option value="195">Spain</option>
                              <option value="196">Sri Lanka</option>
                              <option value="249">St. Barthelemy</option>
                              <option value="197">St. Helena</option>
                              <option value="250">St. Martin (French part)</option>
                              <option value="198">St. Pierre and Miquelon</option>
                              <option value="199">Sudan</option>
                              <option value="200">Suriname</option>
                              <option value="201">Svalbard and Jan Mayen Islands</option>
                              <option value="202">Swaziland</option>
                              <option value="203">Sweden</option>
                              <option value="204">Switzerland</option>
                              <option selected="selected" value="205">Syrian Arab Republic</option>
                              <option value="206">Taiwan</option>
                              <option value="207">Tajikistan</option>
                              <option value="208">Tanzania, United Republic of</option>
                              <option value="209">Thailand</option>
                              <option value="210">Togo</option>
                              <option value="211">Tokelau</option>
                              <option value="212">Tonga</option>
                              <option value="213">Trinidad and Tobago</option>
                              <option value="255">Tristan da Cunha</option>
                              <option value="214">Tunisia</option>
                              <option value="215">Turkey</option>
                              <option value="216">Turkmenistan</option>
                              <option value="217">Turks and Caicos Islands</option>
                              <option value="218">Tuvalu</option>
                              <option value="219">Uganda</option>
                              <option value="220">Ukraine</option>
                              <option value="221">United Arab Emirates</option>
                              <option value="222">United Kingdom</option>
                              <option value="223">United States</option>
                              <option value="224">United States Minor Outlying Islands</option>
                              <option value="225">Uruguay</option>
                              <option value="226">Uzbekistan</option>
                              <option value="227">Vanuatu</option>
                              <option value="228">Vatican City State (Holy See)</option>
                              <option value="229">Venezuela</option>
                              <option value="230">Viet Nam</option>
                              <option value="231">Virgin Islands (British)</option>
                              <option value="232">Virgin Islands (U.S.)</option>
                              <option value="233">Wallis and Futuna Islands</option>
                              <option value="234">Western Sahara</option>
                              <option value="235">Yemen</option>
                              <option value="238">Zambia</option>
                              <option value="239">Zimbabwe</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row required">
                          <label for="input-payment-zone" class="col-sm-2 control-label">Region / State</label>
                          <div class="col-sm-10">
                            <select class="form-control" id="input-payment-zone" name="zone_id">
                              <option value=""> --- Please Select --- </option>
                              <option selected="selected" value="3121">Al Hasakah</option>
                              <option value="3122">Al Ladhiqiyah</option>
                              <option value="3123">Al Qunaytirah</option>
                              <option value="3124">Ar Raqqah</option>
                              <option value="3125">As Suwayda</option>
                              <option value="3126">Dara</option>
                              <option value="3127">Dayr az Zawr</option>
                              <option value="3128">Dimashq</option>
                              <option value="3129">Halab</option>
                              <option value="3130">Hamah</option>
                              <option value="3131">Hims</option>
                              <option value="3132">Idlib</option>
                              <option value="3133">Rif Dimashq</option>
                              <option value="3134">Tartus</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="buttons clearfix">
                        <div class="pull-right">
                          <input type="button" class="btn" data-loading-text="Loading..." id="button-payment-address" value="Continue">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="card my-1">
                <div class="card-header" id="headingThree">
                  <h4 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Step 3: Delivery Details <i class="fa fa-caret-down"></i></a>
                  </h4>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                    <form class="form-horizontal">
                      <div class="radio mb-10" >
                        <label>
                          <input type="radio" checked="checked" value="existing" name="shipping_address"> I want to use an existing address</label>
                      </div>
                      <div id="shipping-existing">
                        <select class="form-control" name="address_id">
                          <option selected="selected" value="4">adsasd, Al Hasakah, Syrian Arab Republic</option>
                        </select>
                      </div>
                      <div class="radio mb-10 mt-10" >
                        <label>
                          <input type="radio" value="new" name="shipping_address"> I want to use a new address</label>
                      </div>

                      <div id="shipping-new" style="display: none;">
                        <div class="form-group row required">
                          <label for="input-shipping-firstname" class="col-sm-2 control-label">First Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-shipping-firstname" placeholder="First Name" value="" name="firstname">
                          </div>
                        </div>
                        <div class="form-group row required">
                          <label for="input-shipping-lastname" class="col-sm-2 control-label">Last Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-shipping-lastname" placeholder="Last Name" value="" name="lastname">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="input-shipping-company" class="col-sm-2 control-label">Company</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-shipping-company" placeholder="Company" value="" name="company">
                          </div>
                        </div>
                        <div class="form-group row required">
                          <label for="input-shipping-address-1" class="col-sm-2 control-label">Address 1</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-shipping-address-1" placeholder="Address 1" value="" name="address_1">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="input-shipping-address-2" class="col-sm-2 control-label">Address 2</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-shipping-address-2" placeholder="Address 2" value="" name="address_2">
                          </div>
                        </div>
                        <div class="form-group row required">
                          <label for="input-shipping-city" class="col-sm-2 control-label">City</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-shipping-city" placeholder="City" value="" name="city">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="input-shipping-postcode" class="col-sm-2 control-label">Post Code</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-shipping-postcode" placeholder="Post Code" value="123456" name="postcode">
                          </div>
                        </div>
                        <div class="form-group row required">
                          <label for="input-shipping-country" class="col-sm-2 control-label">Country</label>
                          <div class="col-sm-10">
                            <select class="form-control" id="input-shipping-country" name="country_id">
                              <option value=""> --- Please Select --- </option>
                              <option value="244">Aaland Islands</option>
                              <option value="1">Afghanistan</option>
                              <option value="2">Albania</option>
                              <option value="3">Algeria</option>
                              <option value="4">American Samoa</option>
                              <option value="5">Andorra</option>
                              <option value="6">Angola</option>
                              <option value="7">Anguilla</option>
                              <option value="8">Antarctica</option>
                              <option value="9">Antigua and Barbuda</option>
                              <option value="10">Argentina</option>
                              <option value="11">Armenia</option>
                              <option value="12">Aruba</option>
                              <option value="252">Ascension Island (British)</option>
                              <option value="13">Australia</option>
                              <option value="14">Austria</option>
                              <option value="15">Azerbaijan</option>
                              <option value="16">Bahamas</option>
                              <option value="17">Bahrain</option>
                              <option value="18">Bangladesh</option>
                              <option value="19">Barbados</option>
                              <option value="20">Belarus</option>
                              <option value="21">Belgium</option>
                              <option value="22">Belize</option>
                              <option value="23">Benin</option>
                              <option value="24">Bermuda</option>
                              <option value="25">Bhutan</option>
                              <option value="26">Bolivia</option>
                              <option value="245">Bonaire, Sint Eustatius and Saba</option>
                              <option value="27">Bosnia and Herzegovina</option>
                              <option value="28">Botswana</option>
                              <option value="29">Bouvet Island</option>
                              <option value="30">Brazil</option>
                              <option value="31">British Indian Ocean Territory</option>
                              <option value="32">Brunei Darussalam</option>
                              <option value="33">Bulgaria</option>
                              <option value="34">Burkina Faso</option>
                              <option value="35">Burundi</option>
                              <option value="36">Cambodia</option>
                              <option value="37">Cameroon</option>
                              <option value="38">Canada</option>
                              <option value="251">Canary Islands</option>
                              <option value="39">Cape Verde</option>
                              <option value="40">Cayman Islands</option>
                              <option value="41">Central African Republic</option>
                              <option value="42">Chad</option>
                              <option value="43">Chile</option>
                              <option value="44">China</option>
                              <option value="45">Christmas Island</option>
                              <option value="46">Cocos (Keeling) Islands</option>
                              <option value="47">Colombia</option>
                              <option value="48">Comoros</option>
                              <option value="49">Congo</option>
                              <option value="50">Cook Islands</option>
                              <option value="51">Costa Rica</option>
                              <option value="52">Cote D'Ivoire</option>
                              <option value="53">Croatia</option>
                              <option value="54">Cuba</option>
                              <option value="246">Curacao</option>
                              <option value="55">Cyprus</option>
                              <option value="56">Czech Republic</option>
                              <option value="237">Democratic Republic of Congo</option>
                              <option value="57">Denmark</option>
                              <option value="58">Djibouti</option>
                              <option value="59">Dominica</option>
                              <option value="60">Dominican Republic</option>
                              <option value="61">East Timor</option>
                              <option value="62">Ecuador</option>
                              <option value="63">Egypt</option>
                              <option value="64">El Salvador</option>
                              <option value="65">Equatorial Guinea</option>
                              <option value="66">Eritrea</option>
                              <option value="67">Estonia</option>
                              <option value="68">Ethiopia</option>
                              <option value="69">Falkland Islands (Malvinas)</option>
                              <option value="70">Faroe Islands</option>
                              <option value="71">Fiji</option>
                              <option value="72">Finland</option>
                              <option value="74">France, Metropolitan</option>
                              <option value="75">French Guiana</option>
                              <option value="76">French Polynesia</option>
                              <option value="77">French Southern Territories</option>
                              <option value="126">FYROM</option>
                              <option value="78">Gabon</option>
                              <option value="79">Gambia</option>
                              <option value="80">Georgia</option>
                              <option value="81">Germany</option>
                              <option value="82">Ghana</option>
                              <option value="83">Gibraltar</option>
                              <option value="84">Greece</option>
                              <option value="85">Greenland</option>
                              <option value="86">Grenada</option>
                              <option value="87">Guadeloupe</option>
                              <option value="88">Guam</option>
                              <option value="89">Guatemala</option>
                              <option value="256">Guernsey</option>
                              <option value="90">Guinea</option>
                              <option value="91">Guinea-Bissau</option>
                              <option value="92">Guyana</option>
                              <option value="93">Haiti</option>
                              <option value="94">Heard and Mc Donald Islands</option>
                              <option value="95">Honduras</option>
                              <option value="96">Hong Kong</option>
                              <option value="97">Hungary</option>
                              <option value="98">Iceland</option>
                              <option value="99">India</option>
                              <option value="100">Indonesia</option>
                              <option value="101">Iran (Islamic Republic of)</option>
                              <option value="102">Iraq</option>
                              <option value="103">Ireland</option>
                              <option value="254">Isle of Man</option>
                              <option value="104">Israel</option>
                              <option value="105">Italy</option>
                              <option value="106">Jamaica</option>
                              <option value="107">Japan</option>
                              <option value="257">Jersey</option>
                              <option value="108">Jordan</option>
                              <option value="109">Kazakhstan</option>
                              <option value="110">Kenya</option>
                              <option value="111">Kiribati</option>
                              <option value="113">Korea, Republic of</option>
                              <option value="253">Kosovo, Republic of</option>
                              <option value="114">Kuwait</option>
                              <option value="115">Kyrgyzstan</option>
                              <option value="116">Lao People's Democratic Republic</option>
                              <option value="117">Latvia</option>
                              <option value="118">Lebanon</option>
                              <option value="119">Lesotho</option>
                              <option value="120">Liberia</option>
                              <option value="121">Libyan Arab Jamahiriya</option>
                              <option value="122">Liechtenstein</option>
                              <option value="123">Lithuania</option>
                              <option value="124">Luxembourg</option>
                              <option value="125">Macau</option>
                              <option value="127">Madagascar</option>
                              <option value="128">Malawi</option>
                              <option value="129">Malaysia</option>
                              <option value="130">Maldives</option>
                              <option value="131">Mali</option>
                              <option value="132">Malta</option>
                              <option value="133">Marshall Islands</option>
                              <option value="134">Martinique</option>
                              <option value="135">Mauritania</option>
                              <option value="136">Mauritius</option>
                              <option value="137">Mayotte</option>
                              <option value="138">Mexico</option>
                              <option value="139">Micronesia, Federated States of</option>
                              <option value="140">Moldova, Republic of</option>
                              <option value="141">Monaco</option>
                              <option value="142">Mongolia</option>
                              <option value="242">Montenegro</option>
                              <option value="143">Montserrat</option>
                              <option value="144">Morocco</option>
                              <option value="145">Mozambique</option>
                              <option value="146">Myanmar</option>
                              <option value="147">Namibia</option>
                              <option value="148">Nauru</option>
                              <option value="149">Nepal</option>
                              <option value="150">Netherlands</option>
                              <option value="151">Netherlands Antilles</option>
                              <option value="152">New Caledonia</option>
                              <option value="153">New Zealand</option>
                              <option value="154">Nicaragua</option>
                              <option value="155">Niger</option>
                              <option value="156">Nigeria</option>
                              <option value="157">Niue</option>
                              <option value="158">Norfolk Island</option>
                              <option value="112">North Korea</option>
                              <option value="159">Northern Mariana Islands</option>
                              <option value="160">Norway</option>
                              <option value="161">Oman</option>
                              <option value="162">Pakistan</option>
                              <option value="163">Palau</option>
                              <option value="247">Palestinian Territory, Occupied</option>
                              <option value="164">Panama</option>
                              <option value="165">Papua New Guinea</option>
                              <option value="166">Paraguay</option>
                              <option value="167">Peru</option>
                              <option value="168">Philippines</option>
                              <option value="169">Pitcairn</option>
                              <option value="170">Poland</option>
                              <option value="171">Portugal</option>
                              <option value="172">Puerto Rico</option>
                              <option value="173">Qatar</option>
                              <option value="174">Reunion</option>
                              <option value="175">Romania</option>
                              <option value="176">Russian Federation</option>
                              <option value="177">Rwanda</option>
                              <option value="178">Saint Kitts and Nevis</option>
                              <option value="179">Saint Lucia</option>
                              <option value="180">Saint Vincent and the Grenadines</option>
                              <option value="181">Samoa</option>
                              <option value="182">San Marino</option>
                              <option value="183">Sao Tome and Principe</option>
                              <option value="184">Saudi Arabia</option>
                              <option value="185">Senegal</option>
                              <option value="243">Serbia</option>
                              <option value="186">Seychelles</option>
                              <option value="187">Sierra Leone</option>
                              <option value="188">Singapore</option>
                              <option value="189">Slovak Republic</option>
                              <option value="190">Slovenia</option>
                              <option value="191">Solomon Islands</option>
                              <option value="192">Somalia</option>
                              <option value="193">South Africa</option>
                              <option value="194">South Georgia &amp; South Sandwich Islands</option>
                              <option value="248">South Sudan</option>
                              <option value="195">Spain</option>
                              <option value="196">Sri Lanka</option>
                              <option value="249">St. Barthelemy</option>
                              <option value="197">St. Helena</option>
                              <option value="250">St. Martin (French part)</option>
                              <option value="198">St. Pierre and Miquelon</option>
                              <option value="199">Sudan</option>
                              <option value="200">Suriname</option>
                              <option value="201">Svalbard and Jan Mayen Islands</option>
                              <option value="202">Swaziland</option>
                              <option value="203">Sweden</option>
                              <option value="204">Switzerland</option>
                              <option selected="selected" value="205">Syrian Arab Republic</option>
                              <option value="206">Taiwan</option>
                              <option value="207">Tajikistan</option>
                              <option value="208">Tanzania, United Republic of</option>
                              <option value="209">Thailand</option>
                              <option value="210">Togo</option>
                              <option value="211">Tokelau</option>
                              <option value="212">Tonga</option>
                              <option value="213">Trinidad and Tobago</option>
                              <option value="255">Tristan da Cunha</option>
                              <option value="214">Tunisia</option>
                              <option value="215">Turkey</option>
                              <option value="216">Turkmenistan</option>
                              <option value="217">Turks and Caicos Islands</option>
                              <option value="218">Tuvalu</option>
                              <option value="219">Uganda</option>
                              <option value="220">Ukraine</option>
                              <option value="221">United Arab Emirates</option>
                              <option value="222">United Kingdom</option>
                              <option value="223">United States</option>
                              <option value="224">United States Minor Outlying Islands</option>
                              <option value="225">Uruguay</option>
                              <option value="226">Uzbekistan</option>
                              <option value="227">Vanuatu</option>
                              <option value="228">Vatican City State (Holy See)</option>
                              <option value="229">Venezuela</option>
                              <option value="230">Viet Nam</option>
                              <option value="231">Virgin Islands (British)</option>
                              <option value="232">Virgin Islands (U.S.)</option>
                              <option value="233">Wallis and Futuna Islands</option>
                              <option value="234">Western Sahara</option>
                              <option value="235">Yemen</option>
                              <option value="238">Zambia</option>
                              <option value="239">Zimbabwe</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row required">
                          <label for="input-shipping-zone" class="col-sm-2 control-label">Region / State</label>
                          <div class="col-sm-10">
                            <select class="form-control" id="input-shipping-zone" name="zone_id">
                              <option value=""> --- Please Select --- </option>
                              <option selected="selected" value="3121">Al Hasakah</option>
                              <option value="3122">Al Ladhiqiyah</option>
                              <option value="3123">Al Qunaytirah</option>
                              <option value="3124">Ar Raqqah</option>
                              <option value="3125">As Suwayda</option>
                              <option value="3126">Dara</option>
                              <option value="3127">Dayr az Zawr</option>
                              <option value="3128">Dimashq</option>
                              <option value="3129">Halab</option>
                              <option value="3130">Hamah</option>
                              <option value="3131">Hims</option>
                              <option value="3132">Idlib</option>
                              <option value="3133">Rif Dimashq</option>
                              <option value="3134">Tartus</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="buttons clearfix">
                        <div class="pull-right">
                          <input type="button" class="btn" data-loading-text="Loading..." id="button-shipping-address" value="Continue">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- <div class="card my-1">
                <div class="card-header" id="headingFour">
                  <h4 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Step 4: Delivery Method<i class="fa fa-caret-down"></i></a>
                  </h4>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                  <div class="card-body">
                    <p>Please select the preferred shipping method to use on this order.</p>
                    <p><strong>Flat Rate</strong></p>
                    <div class="radio mb-10" >
                      <label>
                        <input type="radio" checked="checked" value="flat.flat" name="shipping_method"> Flat Shipping Rate - $5.00</label>
                    </div>
                    <p><strong>Add Comments About Your Order</strong></p>
                    <p>
                      <textarea class="form-control" rows="8" name="comment"></textarea>
                    </p>
                    <div class="buttons">
                      <div class="pull-right">
                        <input type="button" class="btn mt_20" data-loading-text="Loading..." id="button-shipping-method" value="Continue">
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="card my-1">
                <div class="card-header" id="headingFive">
                  <h4 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Step 5: Payment Method  <i class="fa fa-caret-down"></i></a>
                  </h4>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                  <div class="card-body">
                    <p>Please select the preferred payment method to use on this order.</p>

                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                      <label class="form-check-label" for="exampleRadios2">
                        PayPal
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                      <label class="form-check-label" for="exampleRadios1">
                        Cash On Delivery
                      </label>
                    </div>

   
                    <p>Add Comments About Your Order</p>
                    <p>
                      <textarea class="form-control" rows="8" name="comment"></textarea>
                    </p>
                    <div class="buttons">
                      <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a>
                        <input type="checkbox" value="1" name="agree"> &nbsp;
                        <input type="button" class="btn" data-loading-text="Loading..." id="button-payment-method" value="Continue">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card my-1">
                <div class="card-header" id="headingSix">
                  <h4 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Step 6: Confirm Order <i class="fa fa-caret-down"></i></a>
                  </h4>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-hover">
                        <thead>
                          <tr>
                             <td class="text-center">Image</td>
                            <td class="text-left">Name</td>
                            <!-- <td class="text-left">Model</td> -->
                            <td class="text-left">Quantity</td>
                            <td class="text-right">Unit Price</td>
                           <td class="text-right">Total</td>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                 $totalitem=0;
                 $gradtotal=0;
                 $i=0;
               foreach ($_SESSION['cart_item'] as $key => $cart) {?>
                          <tr>
                               <td class="text-center">
                       <?php  $pic=explode(",",$cart['image'])?>
                        <a href="#">
                          <img src="<?php   echo $mydata['baseurl'].'item/'.$pic[0];?>" alt="<?php echo $cart['item_name'];?>" title="iPod Classic" width="50" height="50">
                        </a>
                      </td>
                      <td class="text-left">
                        <a href="product.html">
                          <?php echo $cart['item_name'];?>
                        </a>
                      </td>
                     <!--  <td class="text-left">product 11</td> -->
                      <td class="text-left">
                        <div style="max-width: 200px;" class="input-group btn-block">
                         <span class="input-group-btn">
                          <?php echo $cart['quantity'];?>
                        </span>
                      </div>
                      </td>
                      <td class="text-right">
                        <img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12">
                        <?php echo $cart['price'];?>
                      </td>
                      <td class="text-right">
                        <img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12">
                        <?php echo $total=$cart['price']*$cart['quantity'];?>
                      </td>
                    <?php 

                    $gradtotal += $total;
                      $totalitem += $cart['quantity'];
                      $i++; } ?>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td class="text-right" colspan="4"><strong>Grand-Total:</strong></td>
                            <td class="text-right"><img src="https://www.flaticon.com/svg/static/icons/svg/25/25473.svg" height="15" width="12"><?php echo $gradtotal; ?></td>
                          </tr>
                          <!-- <tr>
                            <td class="text-right" colspan="4"><strong>Flat Shipping Rate:</strong></td>
                            <td class="text-right">$5.00</td>
                          </tr> -->
                        <!--   <tr>
                            <td class="text-right" colspan="4"><strong>Total:</strong></td>
                            <td class="text-right">$1,005.00</td>
                          </tr> -->
                        </tfoot>
                      </table>
                    </div>
                    <div class="buttons">
                      <div class="pull-right">
                        <input type="button" data-loading-text="Loading..." class="btn" id="button-confirm" value="Confirm Order">
                      </div>
                    </div>
                  </div>
                </div>
              </div>           
            </div>

          </div>
        </div>
      <!-- =====  Brand start ===== -->
      <div id="brand_carouse" class="section text-center my-5">
        <div class="type-01">
          <div class="heading-part mb-10 ">
            <h3 class="section_title">Brand Logo</h3>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="brand owl-carousel py-3">
                <div class="item text-center"> <a href="#"><img src="images/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- =====  Brand end ===== -->
      </div>
      <!-- =====  CONTAINER END  ===== -->
    </div>
   <?php include("footer.php");?>
  <script>
  $('input[name=\'payment_address\']').on('change', function() {
    if (this.value == 'new') {
      $('#payment-existing').hide();
      $('#payment-new').show();
    } else {
      $('#payment-existing').show();
      $('#payment-new').hide();
    }
  });
  $('input[name=\'shipping_address\']').on('change', function() {
    if (this.value == 'new') {
      $('#shipping-existing').hide();
      $('#shipping-new').show();
    } else {
      $('#shipping-existing').show();
      $('#shipping-new').hide();
    }
  });
  </script>
</body>

</html>