@extends('ipay')
@section('header')
    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo"></a>
                </div>
                    
                  <div class="collapse navbar-collapse navbar-right">
                    <div class="row">
                            
                            <div class="header-top">
                            <div class="pull-left"> 
                                 <select class="country">
                                <option value="Pick a Country">Pick a Country</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Republic of China">Taiwan, Republic of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                                
                                 <div class="pull-right">   
                                <button type="button" class="btn btn-primary btn-xs">LOGIN</button>
                                <button type="button" class="btn btn-warning btn-xs">SIGN UP</button>
                             </div>
                            </div>
                    
                    </div>
                 
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li>
                       <!-- <li class="scroll"><a href="#features">Our Company</a></li>-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Company <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#corporateGovernancy">Corporate Governance</a></li>
                                <!-- <li><a href="img/AML.pdf" target="_blank">AML & Compliance</a></li> -->
                               
                            </ul>
                        </li>
                        <li class="scroll">

                            <!-- <a href="#services">Services</a> -->
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Services<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#services">Services</a></li>
                                <li><a href="#product">Product Differentiation</a></li>
                                
                               
                            </ul>
                        </li>
                        <li class="scroll"><a href="#work-process">How It Works</a></li>
                        <li class="scroll"><a href="#partner">Our Partners</a></li>
                        <li class="scroll"><a href="#internationalOffice">INT'L OFFICES</a></li>
                        <li class="scroll"><a href="#cta2">Resources</a></li>
                        <li class="scroll"><a href="#">Agent Networks</a></li>
                        <li class="scroll"><a href="#get-in-touch">Contact</a></li>                        
                    </ul>
                    
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
@endsection
@section('content')

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><span style="color:#fff;font-size:30px;">Reliable</span></h1>
                                     <h2 class="animation animated-item-2"><span style="color:#f5750c">Remmitance Services</span></h2>
                                    <p class="animation animated-item-3" ><span style="color:#fff">uis autem vel eum iriure dolor in n drerit in vul putate velit esse molestie consequat, vel illum dolore eu feugiat nulluis autem vel eum iriure dolor in n drerit in vul putate velit esse molestie consequat, vel illum dolore eu feugiat null</span></p>
                                    <a class="btn-slide animation animated-item-4" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-5">
                                <div class="slider-img">
                                    <img src="images/slider/sales-girl.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                
                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><span style="color:#fff; font-size:30px;">Easiest, safest and fastest</span> </h1>
                                    <h2 class="animation animated-item-2"><span style="color:#f5750c">Money Transfer</span></h2>
                                         <p class="animation animated-item-3" ><span style="color:#fff">uis autem vel eum iriure dolor in n drerit in vul putate velit esse molestie consequat, vel illum dolore eu feugiat nulluis autem vel eum iriure dolor in n drerit in vul putate velit esse molestie consequat, vel illum dolore eu feugiat null</span></p>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/sales-girl.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1"><span style="color:#fff; font-size:30px;">World Wide</span> </h1>
                                    <h2 class="animation animated-item-2"><span style="color:#f5750c">Remittance Partner</span></h2>
                                         <p class="animation animated-item-3" ><span style="color:#fff">uis autem vel eum iriure dolor in n drerit in vul putate velit esse molestie consequat, vel illum dolore eu feugiat nulluis autem vel eum iriure dolor in n drerit in vul putate velit esse molestie consequat, vel illum dolore eu feugiat null</span></p>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                     <img src="images/slider/sales-girl.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#main-slider-->

    <section id="cta" class="fadeIn">
            <div class="container">
            <div class="row">
                <div class="container">
               
                <div class='col-md-3 wow col-sm-6 fadeInUp'>
               
                <div class="circle">
                 <a class="" href="#features">
                    <img src="images/remittance-icon.png"  alt="remittance"/>
                     </a>
    <p> REMITTANCE</p>
                
                </div>
               
                </div>
               
                <div class='col-md-3 col-sm-6 wow fadeInUp'>
                
                <div class="circle">
                <img src="images/corporate-icon.png"  alt="corporate-icon"/>
                
                <p>FEE <br>
CALCULATOR</p>
                </div>
                
                </div>
                <div class='col-md-3 col-sm-6 wow fadeInUp'>
                <div class="circle">
                <img src="images/creditcard-icon.png"  alt="creditcard-icon"/>
               
                <p>Travel Card</p>
                </div>
                </div>
                <div class='col-md-3 col-sm-6 wow fadeInUp' data-toggle="modal" data-target="#forex">
                <div class="circle">
                <img src="images/banker-icon.png"  alt="banker-icon"/>                
                <p>Exchange<br> Rate</p>
                </div>
                </div>
            </div>
        </div>
            </div>
    </section><!--/#cta-->

        <section id="about">
            <div class="container">

                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">About Us</h2>
                    <!-- <p class="text-center wow fadeInDown">iPay Financial Services Pvt. Ltd. (Formerly known as TransCash Investment Pte. Ltd.) has the objective of providing prompt, reliable, affordable and better reach in remittance services. We ensure fast and accurate delivery to remitter’s beneficiaries anywhere through our brand iPay.              
                    
                  
                    </p> -->
                    
                </div>

                <div class="row">
                    <div class="col-sm-6 wow fadeInLeft">
                        <h3 class="column-title">Video Intro</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <p style="text-align: center; padding-left: 30px; margin: 0;"><span style="font-family: tahoma, arial, helvetica, sans-serif; color: #000000; font-size: 10pt;"><img style="margin: 0;" src="images/about-us.jpg" alt="" width="425" height="255"  border="0"></span></p>
                            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/heSOBf-sOm8" frameborder="0" allowfullscreen ></iframe> 
                        </div>  
                        <h3 class="column-title">Video Intro</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <p style="text-align: center;  margin: 0;"><span style="font-family: tahoma, arial, helvetica, sans-serif; color: #000000; font-size: 10pt;"><img style="margin: 0;" src="images/about-us.jpg" alt="" width="450" height="255"  border="0"></span></p>
                           <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/heSOBf-sOm8" frameborder="0" allowfullscreen ></iframe> 
                        </div> 
                    </div>

                    <div class="col-sm-6 wow fadeInRight">
                       <!--  <h3 class="column-title">About Us</h3> -->
                        <p>  TransCash International Pty. Ltd. is a remittance company registered in Australia and regulated under AUSTRAC for its global remittance operation services. Along with AUSTRAC registration, the company is registered with Australian Securities and Investment Commission (ASIC) holding Australian Financial Service License. Under the license, the company is allowed to deal in Forex both retain and corporate, bank notes, brokerage etc. The company is accredited with license by American Express Travel Services to issue Travel Card/ Prepaid Card, Corporate Forex dealing. The trading brand name is “iPay”.

    The company is majority owned by financial services company registered in Singapore named iPay Financial Services Pte. Ltd. The company is represented by Mr. Tan Chin Koon, seasoned financial expert with more than two decades of experience working in financial brokerage market.

    The company has more than 100 affiliates/ Agent in Australia to support & expand its remittance operations. All these agents/ affiliates are connected with world class online remittance system “iPayremit”. To support its growing appetite and expand business, the company has roll out its own branch/ counter in high street area, close to renowned shopping complex, where large footfall is expected. The company continued to expand branch/ counter in coming days across territories.</p>
    <p>
        <b>Vision</b><br>
        The Vision of the company is to be a leading remittance house in the countries of its operation.
        <br>
        <b>Mission</b><br>
        Our mission to be the most preferred Remittance Company to start with in the Far East, Middle East and Asia Pacific region.
        <br>
        <b>Values</b><br>
         •  We are absolutely committed to ethics, honesty and credibility. <br/>
         •  Innovation and imagination are integral to the working culture of the company <br/>
         •  As a global corporate citizen, we embrace diversity and varied perspectives. <br/>
         •  We are passionate about what we do as a team.<br/>
         •  We lead by example in giving back to the communities we serve and improving our world.<br/>
         •  We are open-minded about the positive changes that technologies can bring to our operations as well as the societies that we work in.<br/>
        <br>

    </p>

                         
           <!--  <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Vision</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        Any registed user, who presents a work, which is genuine and appealing, can post it on <strong>PrepBootstrap</strong>.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Mission</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        Values
                        <ul>
                            <li>Register an account</li>
                            <li>Activate your account</li>
                            <li>Go to the <strong>Themes</strong> section and upload your theme</li>
                            <li>The next step is the approval step, which usually takes about 72 hours.</li>
                        </ul>
                    </div>
                </div>
            </div> -->
            <!-- <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How much do I get from each sale?</a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                    <div class="panel-body">
                        Here, at <strong>PrepBootstrap</strong>, we offer a great, 70% rate for each seller, regardless of any restrictions, such as volume, date of entry, etc.
                        <br />
                    </div>
                </div>
            </div> -->
           

            
            
            
        </div>

                        

                     
                    </div>
                </div>
            </div>
        </section><!--/#about-->
        <section id="corporateGovernancy" >
           <div class="container">

                           <div class="section-header">
                                              <h2 class="section-title text-center wow fadeInDown">Corporate Governance</h2>
                                              <p class="text-left wow fadeInDown">
                                              As a financial service provider, we understand take the establishment of good corporate governance very seriously and make sure that there are policies in place that safeguard the interests of all the stakeholders. With regards to making strong and transparent governance system, we have in place, proper compliance of all the regulations and policies to support the implementation of sound corporate governance. iPay strongly believes in and adheres to the fight against money laundering as its corporate policy. We strictly abide by the Anti-Money Laundering Policy as an essential for the safety and ethical standards of the company’s operations.<br>

                                              Our policy is to conduct business in compliance with all applicable laws and regulations and stop criminals from using our products and services for the purpose of money laundering or financing of terrorism. Our cooperation to our regulators is in its entirety wherein we aim to maintain the highest operating standards to safeguard the interest of our customers, our shareholders, our employees and the communities where we operate. In conducting business with due skill, care and diligence we always seek to comply with both the letter and spirit of relevant laws, rules, regulation, code and standards of good practice. We aim to promptly address any irregularities that may arise, as we believe in transparency in our financial and regulatory reporting with swift disclosure of any breaches.</p>
                                         
                           </div>

          </div>
        </section>
    <section id="services" >
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Services</h2>
             <!--    <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-dollar"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">iPay Remit</h4>
                                <p>We offer lowest transfer fee and competitive exchange rate without</p>

                                 <a href="#" class="btn animation animated-item-4" data-toggle="modal" data-target="#ipayRemit">Read More</a>  
                                 <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                   Launch demo modal
                                 </button>  --> 
                            </div>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                               <i class="fa fa-credit-card"></i>

                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">AMEX Travel card </h4>
                                <p>iPay Australia has partnered with American Express for providing </p>
                               <a href="#" class="btn animation animated-item-4" data-toggle="modal" data-target="#travelCard">Read More</a>
                            </div>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">iPay Corporate FX</h4>
                                <p>We understand that organizations are into international businesses</p>
                                 <a href="#" class="btn animation animated-item-4" data-toggle="modal" data-target="#corporateFX">Read More</a>
                            </div>
                        </div>
                    </div><!--/.col-md-3-->
                
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-money"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">iPay Cash Services</h4>
                                <p>We source, sell and buy foreign currency at competitive prices....</p>
                                 <a href="#" class="btn animation animated-item-4" data-toggle="modal" data-target="#cashService">Read More</a>
                            </div>
                        </div>
                    </div><!--/.col-md-3-->

                   
                </div>
            </div>
            

          <!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->
    <section id="product">
        <div class="container">

            <div class="section-header">
                               <h2 class="section-title text-center wow fadeInDown">PRODUCT DIFFERENTIATION</h2>
                               <p class="text-left wow fadeInDown">
                               • Further, the main advantage the company offers is to bring value proposition, product differentiation in the market when the entire market is following uniform rate approach. Large customer base in this segment are attracted toward better Forex and the company strongly believe in achieving the same to leverage the market share of our partner.<br/>
                               • The company is willing to provide required marketing support like representatives, as deemed fit, to promote business and merchandising on mutual understanding basis to achieve desired result. 
                               • The company operates dynamic, flexible and robust system covering all partners in countries of its operations. The system dynamic captures flexible web servicing methodology covering all partners under single Application Program Interface (API) for smooth and hassle free operations. <br/>
                               • The company set of standard on Forex dealing; which helps and offer Forex protection to our partners and/ or customize the arrangement to best suit the partners need/ concern.<br/> 
                               • The main advantage our company represents is the customization and flexibility we bring into the business dynamics creating mutual gains between both parties.<br/>
                               • We can offer host to host connectivity offering seamless payment distribution mechanism (end to end) which will be very easy at both ends.<br/> 
                               • We follow risk based approach on data filtration and the main advantage of working in multi layered system will be multiple level of data filtration for compliance check and transaction flagging.</p>
                          
            </div>

        </div>
        
    </section>
    <section id="work-process">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">How it works</h2>
                <p class="text-center wow fadeInDown"></p>
            </div>

            <div class="row text-center">
                <div class="col-md-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="icon-circle">
                            <span>1</span>
                            <i class="fa fa-dollar fa-2x"></i>
                        </div>
                        <h3>Fast Money Transfer</h3>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="icon-circle">
                            <span>2</span>
                            <i class="fa fa-globe fa-2x"></i>
                        </div>
                        <h3>iPay anywhere, any time</h3>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6" href="test.php">
                <a href="admin/">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="icon-circle">
                            <span>3</span>
                            <i class="fa fa-image fa-2x"></i>
                        </div>
                        <h3>Track Transfers</h3>
                    </div>
                    </a>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="icon-circle">
                            <span>4</span>
                            <i class="fa fa-heart fa-2x"></i>
                        </div>
                        <h3>Send again with Quick Send</h3>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section><!--/#work-process-->
    
    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-sm-4  wow fadeInLeft">
                    <div class="media service-box wow fadeInRight">
                           
                            <h4 class="heading">
Send Money to Anywhere, anytime, anydevice</h4>
                            <p>Send money worldwide to friends and family in 33 countries from your computer, tablet, or mobile phone. We offer convenient ways for your loved ones to receive the money. Plus, track your transaction with text updates, email notifications, online access from your PC or mobile device or call us 24/7.</p>
                         
                    </div>
                    
                    <div class="row">
                            <div class="col-md-6">
                                <a href="http://online.ipayremit.com/webonline/" target="_blank">
                                    <button class="btn btn-send btn-block" type="button">Send Money to..</button>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://www.ipayremitworldwide.com/agent/homepg.asp" target="_blank">
                                    <button class="btn btn-send btn-block" type="button">Receive Money from..</button>
                                </a>
                            </div>
                    
                    </div>

                  
                    
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <img class="img-responsive" src="images/multi-device.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="partner">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2>Our Partners</h2>
                    <p class="lead"></p>
                </div>    
    
                <div class="partners">
                    <ul>
                        <li>
                            <a href="http://www.speedremit.com/" target="_blank">
                                <img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/5.jpg">
                            </a>
                        </li>
                        
                        <li> <a href="http://www.eseylan.com/E_Remittance.php" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/6.jpg"></a></li>
                        <li> <a href="http://www.dongamoneytransfer.com.vn/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/14.jpg"></a></li>
                        <li> <a href="http://www.mlhuillier.com/products-services/kwarta-padala-money-transfer/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/15.jpg"></a></li>
                        <li> <a href="http://instantcashworldwide.com/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/9.jpg"></a></li>
                        
                        <li> <a href="http://tranglo.com/products/gloremit" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/1.jpg"></a></li>
                        <li> <a href="http://www.metrobank.com.ph/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/13.jpg"></a></li>
                        <li> <a href="http://www.cimbislamic.com/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/11.jpg"></a></li>
                        <li> <a href="http://www1.cmtmoney.com/" target="_blank"><img height="110" class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/siguecmt.png"></a></li>
                        <li> <a href="https://www.landbank.com/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/2.jpg"></a></li>
                        

                        <li> <a href="http://www.sacombank.com.vn/en/Pages/default.aspx" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/8.jpg"></a></li>
                        <li> <a href="http://www.arg.co.id/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/3.jpg"></a></li>
                        <li> <a href="http://www.ucbl.com/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/12.jpg"></a></li>
                        <li> <a href="http://www1.cmtmoney.com/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/4.jpg"></a></li>
                        <li> <a href="https://www.transfast.com/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="images/partners/7.jpg"></a></li>

                        <li> <a href="https://www.bdo.com.ph/personal/remittance-services" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/partners/9.png"></a></li>
                        <li> <a href="http://www.riremit.com/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="images/partners/10.jpg"></a></li>
                        <li> <a href="http://www.reliableremit.com/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="images/partners/111.jpg"></a></li>
                        <li> <a href="https://www.cashtochina.com/" target="_blank"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="images/partners/CTC_Logo.jpg"></a></li>
                        

                        
                    </ul>
                </div>        
            </div><!--/.container-->
        </section><!--/#partner-->  
    <section id="internationalOffice" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">International Offices</h2>
             <!--    <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <!-- <div class="pull-left">
                                <i class="fa fa-dollar"></i>
                            </div> -->
                            <div class="media-body">
                                <h4 class="media-heading">Singapore</h4>
                                <p>
                                    iPay Financial Services Pte. Ltd.<br>
                                    63 Robinson Road # 06-20<br>
                                    Afro-Asia Building,Singapore 068894<br>
                                    Tel: +65 622 79277<br>
                                    Fax: +65 622 79279<br>
                                    E-mail: info.sg@ipayremit.com
                                </p>
                            </div>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">                                
                            <div class="media-body">
                                <h4 class="media-heading">Australia</h4>
                                <p>
                                    <b>Sydney Branch</b><br>
                                    Transcash International Pty Ltd<br>
                                    Suite 117 level 11 420 Pitt Street Sydney NSW 2000 Australia<br>
                                    Tel: +65 6227 9277, 6227 9278, Fax: +65 6227 9297<br>

                                    <b>Brisbane Branch</b><br>
                                    Transcash International Pty Ltd<br>
                                    Shop K19 Mt Ommaney S.C <br>
                                    Mt Ommaney QLD 4074<br>
                                    Tel: (07)3191 6531<br>
                                </p>
                              
                            </div>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="media-body">
                                <h4 class="media-heading">Malaysia</h4>
                                <p>
                                    Panorama Prize Sdn. Bhd.<br>
                                    Level 3, Wisma Paradise No. 63, Jalan Ampang,<br>
                                    50450 Kuala Lumpur, Malaysia<br>
                                    Tel: +60 3 2070 6055<br>
                                    Fax: + 60 3 2070 2066<br>
                                    E-mail: info.my@ipayremit.com <br>
                                </p>
                                 
                            </div>
                        </div>
                    </div><!--/.col-md-3-->
                
                    <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="media-body">
                                <h4 class="media-heading">Nepal</h4>
                                <p>
                                    Reliable International Remittance Pvt. Ltd.<br>
                                    GPO Box: 7613, Bagh Durbar<br>
                                    Sundhara – 11, Kathmandu, Nepal<br>
                                    Tel: 977 1 4256878<br>
                                    Fax: 977 1 4255937<br>
                                    E-mail: info@riremit.com <br>
                                    URL: www.riremit.com<br>
                                </p>
                                 
                            </div>
                        </div>
                    </div><!--/.col-md-3-->

                   
                </div>
            </div>
            

          <!--/.row-->    
        </div><!--/.container-->
    </section>

              <!--/#features-->
    <section id="cta2">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInUp"><span>DOWNLOAD </span> RESOURCES</h2>
             <!--    <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p> -->
            </div>
            <div class="row">
                            
                <div class=" col-xs-12 col-sm-6 col-md-3 wow fadeInUp col-md-offset-3 " data-wow-duration="300ms" data-wow-delay="0ms">
                    
                    <div class="media service-box ">
                        
                        <div class="media-body">
                        <div class="text-center">
                            <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><span class="btn btn-primary btn-lg">Transcash Company Constitution</span><br><a class="btn btn-primary btn-sm" href="img/TCC.pdf" target="_blank">Download</a>
                            </p>

                        </div>
                        </div>
                    </div>
                </div>      
                <div class=" col-xs-12 col-sm-6   wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                    <div class="media service-box ">
                        
                        <div class="media-body">
                        <div class="text-center">
                       
                            <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><span class="btn btn-primary btn-lg">AML & Compliance</span><br><a class="btn btn-primary btn-sm" href="img/AML.pdf" target="_blank">Download</a>
                            </p>

                        </div>
                        </div>
                    </div>
                </div>
                           
            </div>

            
        </div>
    </section>
               <!--/#cta2-->
    

    
      

    
    
    
       
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                            <div class="item">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
              <!--/#testimonial-->    
    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Get in Touch</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        </div>
    </section><!--/#get-in-touch-->
    
    <section id="contact">
        <div id="google-map" style="height:650px"  data-longitude="4.871331"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3988.8243104017643!2d103.84907600000003!3d1.2789850000000036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1433225669745" width="100%" height="100%" frameborder="0" style="border:0"></iframe></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Contact Info</h3>

                            <address>
<strong>iPay Financial Services Pte. Ltd.</strong><br>

63 Robinson Road, Afro-Asia Building<br>
#06-20, Singapore 068894<br>
<i class="fa fa-phone">+65 6227 9277, 6227 9278</i><br>
<i class="fa fa-fax">+65 6227 9277, 6227 9278</i>

                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#contact-->  
      
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="widget">
                        <h3>Contact Details</h3>
                        <strong>iPay Financial Services Pte. Ltd.</strong><br>
                        
                        63 Robinson Road, Afro-Asia Building<br>
                        #06-20, Singapore 068894<br>
                        <i class="fa fa-phone">+65 6227 9277, 6227 9278</i><br>
                        <i class="fa fa-fax">+65 6227 9277, 6227 9278</i>
                    </div>    
                </div><!--/.col-md-4-->

                <div class="col-md-4 ">
                    <div class="widget">
                        <h3>Security & Privacy</h3>
                        <ul>
                            <li><a href="#">Security Center</a></li>
                            <li><a href="#">Send Money Safely</a></li>
                            <li><a href="#">State Licensing</a></li>
                            <li><a href="#">Privacy Policy  </a></li>
                            <li><a href="#">User Agreement</a></li>
                           
                        </ul>
                    </div>    
                </div><!--/.col-md-4-->

                <div class="col-md-4 ">
                    <div class="widget">
                        <h3>Quick Navigation</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#"> About Us</a></li>
                            <li><a href="#">Security</a></li>
                            <li><a href="#">Payment</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Services</a></li>
                            
                        </ul>
                    </div>    
                </div><!--/.col-md-4-->

               
            </div>
        </div>
    </section><!--/#bottom-->
    
    <footer id="footer">
        <div class="container">
            <div class="row">
                <a href="#0" class="cd-top">Top</a>
                <div class="col-sm-6">
                    &copy; 2015 iPay. Designed & Developed by <a target="_blank" href="http://www.seattleapplab.com/" target="_blank" ><span style="color:#7a6dd7">Seattle App Lab</span></a>
                    
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
              <!--/#footer-->
              <div class="modal fade" id="ipayRemit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="  background: rgba(0,0,0,0.3);">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">iPay Remit</h4>
                    </div>
                    <div class="modal-body">
                    <img style="display: block; margin-left: auto; margin-right: auto;" src="images/ipayremit.png" alt="Home page 4" width="392" height="293">
                    <p>
                      We offer lowest transfer fee and competitive exchange rate without any hidden costs. In Australia, we have our collecting agents at convenient locations and for the disbursement, we have more than 5,000 world-wide network partners for “just in time” delivery. Besides, we also offer on-line fund transfer services through ipayonline. From Australia, we have been providing remittance services to Philippines, Indonesia, Vietnam, Nepal, China, Sri Lanka, India, Lebanon etc. Our customer service representative is available 24 hours a day, 7 days a week. You can simply give us a call at +61 2 9211 2255 and let your remittance taken care of.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="travelCard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="  background: rgba(0,0,0,0.3);">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">AMEX Travel card</h4>
                    </div>
                    <div class="modal-body">
                    <img style="display: block; margin-left: auto; margin-right: auto;" src="images/card.jpg" alt="Home page 4" width="392" height="293">
                    <p>
                      iPay Australia has partnered with American Express for providing global travel card solutions. With AMEX Travel cards, you don’t need to worry about funds expiring or having to pay inactivity fees. You can lock the foreign currency exchange rates at the time you add funds, so there is no worry about currency fluctuations. It’s easy to use, reloadable at the time of your convenience and accepted globally outside of Australia. Further, you can have the transactions history online or by phone wherever you are. You can simply give us a call at +61 2 9211 2255 and let your card requirement taken care of.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="corporateFX" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="  background: rgba(0,0,0,0.3);">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">iPay Corporate FX</h4>
                    </div>
                    <div class="modal-body">
                    <img style="display: block; margin-left: auto; margin-right: auto;" src="images/fx.png" alt="Home page 4" width="392" height="293">
                    <p>
                      We understand that organizations are into international businesses and they are involved in import related trades, may need to buy property overseas or may need to pay to their workers overseas. We provide expert service as a foreign exchange provider addressing all kinds of corporate requirements. Our professionals work closely with our corporate clients, understand their needs carefully and avail the best possible FX rates. We provide wholesale exchange rates and charge zero transfer fee. You can simply give us a call at +61 2 9211 2255 and let your corporate FX requirement taken care of.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="cashService" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="  background: rgba(0,0,0,0.3);">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">iPay Cash Services</h4>
                    </div>
                    <div class="modal-body">
                    <img style="display: block; margin-left: auto; margin-right: auto;" src="images/cash.png" alt="Home page 4" width="392" height="293">
                    <p>
                     We source, sell and buy foreign currency at competitive prices providing all types of physical cash solutions for our clients. As soon as we get bookings, our managers are on it to assure that you get the best rate in the market. You can order the required foreign currency online and get the money delivered the next day. Our clientele includes foreign exchange operators, tour operators, corporate clients and travelers of all sorts. Currently, we are providing cash services from our dedicated counter at Suite 117, Level 11, 420 Pitt Street, Sydney, NSW 2000, through our Australian office, TransCash International Pty. Ltd. You can simply give us a call at +61 2 9211 2255 and let your cash requirement taken care of.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="forex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="  background: rgba(0,0,0,0.3);">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">EXCHANGE RATE</h4>
                    </div>
                    <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>Origin Country</th>
                                    <th>Destination Country</th>
                                    <th>Rate</th>
                                    <th>Payout Currency</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>UAE</td>
                                    <td>Nepal</td>
                                    <td>27.7929</td>
                                    <td>NPR</td>
                                  </tr>
                                  <tr>
                                    <td>UAE</td>
                                    <td>India</td>
                                    <td>17.1935</td>
                                    <td>INR</td>
                                  </tr>
                                  
                                </tbody>
                              </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                    </div>
                  </div>
                </div>
              </div>
    

@endsection
