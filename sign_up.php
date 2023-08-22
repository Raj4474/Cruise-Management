<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Login</title>
    <style>
        .bg-image {
            background-repeat: no-repeat;
            background-image: url('images/M38_Desktop_ExplorerDetail.jpg');
            height: 1200px;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .card {
            margin-top: -1100px;
            background: hsla(0, 0%, 100%, 0.5);
            backdrop-filter: blur(4px);
        }

        .cardbgdiv {
            padding-left: 30%;
            padding-right: 30%;
        }

        .mainlogin {
            height: 1rem;
        }

        a {
            text-decoration: none;
        }

        .eye {
            width: 35px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="mainlogin">
            <div class="p-5 bg-image"></div>
            <!-- Background image -->

            <div class="cardbgdiv">
                <div class="card mx-4 mx-md-5 shadow-5-strong">
                    <div class="card-body py-5 px-md-5">

                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <h2 class="fw-bold mb-5">SIGN UP</h2>
                                <form>
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example1" class="form-control" placeholder="First name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example2" class="form-control" placeholder="Last name" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- BOD select -->
                                    <div class="form-outline">
                                        <input type="date" class="form-control mb-4" id="exampleDatepicker1" placeholder="Date Of Birth" />
                                    </div>

                                    <!-- Country Select -->
                                    <select class="form-select mb-4" aria-label="Default select example">
                                        <option>Country/Region of residence</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="China">China</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
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
                                        <option value="Bonaire">Bonaire</option>
                                        <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean">British Indian Ocean</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burma">Burma</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Cape Verde Islands">Cape Verde Islands</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad Republic">Chad Republic</option>
                                        <option value="Chile">Chile</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Keeling Island">Cocos Keeling Island</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote Divoire">Cote Divoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curacao">Curacao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Dubai">Dubai</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Faeroe Islands">Faeroe Islands</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Fiji Islands">Fiji Islands</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French South. Territories">French South. Territories</option>
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
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard &amp; Mcdonald Isl">Heard &amp; Mcdonald Isl</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
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
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali Republic">Mali Republic</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte Island">Mayotte Island</option>
                                        <option value="Metropolitan France">Metropolitan France</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolian Peoples Republi">Mongolian Peoples Republi</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antillesnes">Netherlands Antillesnes</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="North Korea">North Korea</option>
                                        <option value="Northern Mariana Isl">Northern Mariana Isl</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Other">Other</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn Islands">Pitcairn Islands</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic Of Congo">Republic Of Congo</option>
                                        <option value="Republic Of Yemen">Republic Of Yemen</option>
                                        <option value="Reunion Island">Reunion Island</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="S.Georgia&amp;s.Sandwich Isla">S.Georgia&amp;s.Sandwich Isla</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts &amp; Nevis">Saint Kitts &amp; Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Maarten">Saint Maarten</option>
                                        <option value="Saint Pierre &amp; Miquelon">Saint Pierre &amp; Miquelon</option>
                                        <option value="Samoa (Western Ind)">Samoa (Western Ind)</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome And Principe">Sao Tome And Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal Republic">Senegal Republic</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles Islands">Seychelles Islands</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                        <option value="St. Kitts">St. Kitts</option>
                                        <option value="St. Maarten">St. Maarten</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard &amp; jan Mayen Islands">Svalbard &amp; jan Mayen Islands</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga Islands">Tonga Islands</option>
                                        <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks And Caicos Island">Turks And Caicos Island</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="U.S. Minor Out Islan">U.S. Minor Out Islan</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City">Vatican City</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                        <option value="Wallis And Futuna Islands">Wallis And Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="email" class="form-control" placeholder="Email address" />
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4 d-flex col-12 input_pwd gap-2">
                                        <input type="password" id="pwd" class="form-control " placeholder="Create New Password" />
                                        <img src="images/eye-icons/hide.png" id="eye" class="eye ml-2">
                                    </div>


                                    <!-- Checkbox -->
                                    <!-- <div class="form-check d-flex mb-4 gap-0">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                                        <label class="form-check-label" for="form2Example33">
                                            I would like to receive special offers, travel tips, and insider information by email.
                                        </label>
                                    </div> -->
                                    <div class="form-check mb-2">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label fs-6" for="flexCheckChecked">
                                            I would like to receive special offers, travel tips, and insider information by email.
                                        </label>
                                    </div>

                                    <!-- <p class="fs-6 mb-2">To create an account, you must agree to the following terms:</p> -->

                                    <div class="form-check mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label fs-6" for="flexCheckChecked">
                                            I have read and agree to the
                                            <a href="#">Terms of Use</a>
                                                        And
                                            <a href="#">Privacy Policy.</a> 
                                        </label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-4 container-fluid">
                                        SIGN UP
                                    </button>
                                    <div class="mt-4">
                                        <p class="mb-0">Already have an account? <a href="login.php" class="text-dark link fw-bold">Login Now</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        let eye = document.getElementById("eye");
        let pwd = document.getElementById("pwd");
        eye.onclick = function() {
            if (pwd.type == "password") {
                pwd.type = "text";
                eye.src = "images/eye-icons/visible.png";
            } else {
                pwd.type = "password";
                eye.src = "images/eye-icons/hide.png";
            }
        }
    </script>
</body>

</html>