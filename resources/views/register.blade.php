<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Barbatos Shop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <form action="register" method="post">
            <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                <div>
                    <h1>REGISTER</h1>
                    <label for="user_name">Name</label><br>
                    <input type="text" name="user_name" placeholder="Enter Your Name"><br>

                    <label for="user_email">Email</label><br>
                    <input type="text" name="user_email" placeholder="Enter Your Email"><br>

                    <label for="user_password">Password</label><br>
                    <input type="password" name="user_password" placeholder="Enter Your Password"><br>

                    <label for="confirm_password">Confirm Password</label><br>
                    <input type="password" name="confirm_password" placeholder="Re-Type Your Password"><br>

                    <label for="user_gender">Gender</label><br>
                    <input type="radio" name="user_gender">
                    <label for="male">Male</label><br>

                    <input type="radio" name="user_gender">
                    <label for="female">Female</label><br>

                    <label for="user_dob">Date of Birth</label><br>
                    <input type="date" name="user_dob" placeholder="mm/dd/yyyy"><br>

                    <label for="user_country">Country</label><br>
                    <select name="country" class="form-control" id="country">
                        <option value="0" label="Choose a country" selected="selected"></option>
                        <optgroup id="country-Africa" label="Africa">
                            <option value="DZ" label="Algeria">Algeria</option>
                            <option value="AO" label="Angola">Angola</option>
                            <option value="BJ" label="Benin">Benin</option>
                            <option value="BW" label="Botswana">Botswana</option>
                            <option value="BF" label="Burkina Faso">Burkina Faso</option>
                            <option value="BI" label="Burundi">Burundi</option>
                            <option value="CM" label="Cameroon">Cameroon</option>
                            <option value="CV" label="Cape Verde">Cape Verde</option>
                            <option value="CF" label="Central African Republic">Central African Republic</option>
                            <option value="TD" label="Chad">Chad</option>
                            <option value="KM" label="Comoros">Comoros</option>
                            <option value="CG" label="Congo - Brazzaville">Congo - Brazzaville</option>
                            <option value="CD" label="Congo - Kinshasa">Congo - Kinshasa</option>
                            <option value="CI" label="Côte d’Ivoire">Côte d’Ivoire</option>
                            <option value="DJ" label="Djibouti">Djibouti</option>
                            <option value="EG" label="Egypt">Egypt</option>
                            <option value="GQ" label="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="ER" label="Eritrea">Eritrea</option>
                            <option value="ET" label="Ethiopia">Ethiopia</option>
                            <option value="GA" label="Gabon">Gabon</option>
                            <option value="GM" label="Gambia">Gambia</option>
                            <option value="GH" label="Ghana">Ghana</option>
                            <option value="GN" label="Guinea">Guinea</option>
                            <option value="GW" label="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="KE" label="Kenya">Kenya</option>
                            <option value="LS" label="Lesotho">Lesotho</option>
                            <option value="LR" label="Liberia">Liberia</option>
                            <option value="LY" label="Libya">Libya</option>
                            <option value="MG" label="Madagascar">Madagascar</option>
                            <option value="MW" label="Malawi">Malawi</option>
                            <option value="ML" label="Mali">Mali</option>
                            <option value="MR" label="Mauritania">Mauritania</option>
                            <option value="MU" label="Mauritius">Mauritius</option>
                            <option value="YT" label="Mayotte">Mayotte</option>
                            <option value="MA" label="Morocco">Morocco</option>
                            <option value="MZ" label="Mozambique">Mozambique</option>
                            <option value="NA" label="Namibia">Namibia</option>
                            <option value="NE" label="Niger">Niger</option>
                            <option value="NG" label="Nigeria">Nigeria</option>
                            <option value="RW" label="Rwanda">Rwanda</option>
                            <option value="RE" label="Réunion">Réunion</option>
                            <option value="SH" label="Saint Helena">Saint Helena</option>
                            <option value="SN" label="Senegal">Senegal</option>
                            <option value="SC" label="Seychelles">Seychelles</option>
                            <option value="SL" label="Sierra Leone">Sierra Leone</option>
                            <option value="SO" label="Somalia">Somalia</option>
                            <option value="ZA" label="South Africa">South Africa</option>
                            <option value="SD" label="Sudan">Sudan</option>
                            <option value="SZ" label="Swaziland">Swaziland</option>
                            <option value="ST" label="São Tomé and Príncipe">São Tomé and Príncipe</option>
                            <option value="TZ" label="Tanzania">Tanzania</option>
                            <option value="TG" label="Togo">Togo</option>
                            <option value="TN" label="Tunisia">Tunisia</option>
                            <option value="UG" label="Uganda">Uganda</option>
                            <option value="EH" label="Western Sahara">Western Sahara</option>
                            <option value="ZM" label="Zambia">Zambia</option>
                            <option value="ZW" label="Zimbabwe">Zimbabwe</option>
                        </optgroup>
                        <optgroup id="country-Americas" label="Americas">
                            <option value="AI" label="Anguilla">Anguilla</option>
                            <option value="AG" label="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="AR" label="Argentina">Argentina</option>
                            <option value="AW" label="Aruba">Aruba</option>
                            <option value="BS" label="Bahamas">Bahamas</option>
                            <option value="BB" label="Barbados">Barbados</option>
                            <option value="BZ" label="Belize">Belize</option>
                            <option value="BM" label="Bermuda">Bermuda</option>
                            <option value="BO" label="Bolivia">Bolivia</option>
                            <option value="BR" label="Brazil">Brazil</option>
                            <option value="VG" label="British Virgin Islands">British Virgin Islands</option>
                            <option value="CA" label="Canada">Canada</option>
                            <option value="KY" label="Cayman Islands">Cayman Islands</option>
                            <option value="CL" label="Chile">Chile</option>
                            <option value="CO" label="Colombia">Colombia</option>
                            <option value="CR" label="Costa Rica">Costa Rica</option>
                            <option value="CU" label="Cuba">Cuba</option>
                            <option value="DM" label="Dominica">Dominica</option>
                            <option value="DO" label="Dominican Republic">Dominican Republic</option>
                            <option value="EC" label="Ecuador">Ecuador</option>
                            <option value="SV" label="El Salvador">El Salvador</option>
                            <option value="FK" label="Falkland Islands">Falkland Islands</option>
                            <option value="GF" label="French Guiana">French Guiana</option>
                            <option value="GL" label="Greenland">Greenland</option>
                            <option value="GD" label="Grenada">Grenada</option>
                            <option value="GP" label="Guadeloupe">Guadeloupe</option>
                            <option value="GT" label="Guatemala">Guatemala</option>
                            <option value="GY" label="Guyana">Guyana</option>
                            <option value="HT" label="Haiti">Haiti</option>
                            <option value="HN" label="Honduras">Honduras</option>
                            <option value="JM" label="Jamaica">Jamaica</option>
                            <option value="MQ" label="Martinique">Martinique</option>
                            <option value="MX" label="Mexico">Mexico</option>
                            <option value="MS" label="Montserrat">Montserrat</option>
                            <option value="AN" label="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="NI" label="Nicaragua">Nicaragua</option>
                            <option value="PA" label="Panama">Panama</option>
                            <option value="PY" label="Paraguay">Paraguay</option>
                            <option value="PE" label="Peru">Peru</option>
                            <option value="PR" label="Puerto Rico">Puerto Rico</option>
                            <option value="BL" label="Saint Barthélemy">Saint Barthélemy</option>
                            <option value="KN" label="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="LC" label="Saint Lucia">Saint Lucia</option>
                            <option value="MF" label="Saint Martin">Saint Martin</option>
                            <option value="PM" label="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="VC" label="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                            <option value="SR" label="Suriname">Suriname</option>
                            <option value="TT" label="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="TC" label="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="VI" label="U.S. Virgin Islands">U.S. Virgin Islands</option>
                            <option value="US" label="United States">United States</option>
                            <option value="UY" label="Uruguay">Uruguay</option>
                            <option value="VE" label="Venezuela">Venezuela</option>
                        </optgroup>
                        <optgroup id="country-Asia" label="Asia">
                            <option value="AF" label="Afghanistan">Afghanistan</option>
                            <option value="AM" label="Armenia">Armenia</option>
                            <option value="AZ" label="Azerbaijan">Azerbaijan</option>
                            <option value="BH" label="Bahrain">Bahrain</option>
                            <option value="BD" label="Bangladesh">Bangladesh</option>
                            <option value="BT" label="Bhutan">Bhutan</option>
                            <option value="BN" label="Brunei">Brunei</option>
                            <option value="KH" label="Cambodia">Cambodia</option>
                            <option value="CN" label="China">China</option>
                            <option value="GE" label="Georgia">Georgia</option>
                            <option value="HK" label="Hong Kong SAR China">Hong Kong SAR China</option>
                            <option value="IN" label="India">India</option>
                            <option value="ID" label="Indonesia">Indonesia</option>
                            <option value="IR" label="Iran">Iran</option>
                            <option value="IQ" label="Iraq">Iraq</option>
                            <option value="IL" label="Israel">Israel</option>
                            <option value="JP" label="Japan">Japan</option>
                            <option value="JO" label="Jordan">Jordan</option>
                            <option value="KZ" label="Kazakhstan">Kazakhstan</option>
                            <option value="KW" label="Kuwait">Kuwait</option>
                            <option value="KG" label="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="LA" label="Laos">Laos</option>
                            <option value="LB" label="Lebanon">Lebanon</option>
                            <option value="MO" label="Macau SAR China">Macau SAR China</option>
                            <option value="MY" label="Malaysia">Malaysia</option>
                            <option value="MV" label="Maldives">Maldives</option>
                            <option value="MN" label="Mongolia">Mongolia</option>
                            <option value="MM" label="Myanmar [Burma]">Myanmar [Burma]</option>
                            <option value="NP" label="Nepal">Nepal</option>
                            <option value="NT" label="Neutral Zone">Neutral Zone</option>
                            <option value="KP" label="North Korea">North Korea</option>
                            <option value="OM" label="Oman">Oman</option>
                            <option value="PK" label="Pakistan">Pakistan</option>
                            <option value="PS" label="Palestinian Territories">Palestinian Territories</option>
                            <option value="YD" label="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
                            <option value="PH" label="Philippines">Philippines</option>
                            <option value="QA" label="Qatar">Qatar</option>
                            <option value="SA" label="Saudi Arabia">Saudi Arabia</option>
                            <option value="SG" label="Singapore">Singapore</option>
                            <option value="KR" label="South Korea">South Korea</option>
                            <option value="LK" label="Sri Lanka">Sri Lanka</option>
                            <option value="SY" label="Syria">Syria</option>
                            <option value="TW" label="Taiwan">Taiwan</option>
                            <option value="TJ" label="Tajikistan">Tajikistan</option>
                            <option value="TH" label="Thailand">Thailand</option>
                            <option value="TL" label="Timor-Leste">Timor-Leste</option>
                            <option value="TR" label="Turkey">Turkey</option>
                            <option value="TM" label="Turkmenistan">Turkmenistan</option>
                            <option value="AE" label="United Arab Emirates">United Arab Emirates</option>
                            <option value="UZ" label="Uzbekistan">Uzbekistan</option>
                            <option value="VN" label="Vietnam">Vietnam</option>
                            <option value="YE" label="Yemen">Yemen</option>
                        </optgroup>
                        <optgroup id="country-Europe" label="Europe">
                            <option value="AL" label="Albania">Albania</option>
                            <option value="AD" label="Andorra">Andorra</option>
                            <option value="AT" label="Austria">Austria</option>
                            <option value="BY" label="Belarus">Belarus</option>
                            <option value="BE" label="Belgium">Belgium</option>
                            <option value="BA" label="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="BG" label="Bulgaria">Bulgaria</option>
                            <option value="HR" label="Croatia">Croatia</option>
                            <option value="CY" label="Cyprus">Cyprus</option>
                            <option value="CZ" label="Czech Republic">Czech Republic</option>
                            <option value="DK" label="Denmark">Denmark</option>
                            <option value="DD" label="East Germany">East Germany</option>
                            <option value="EE" label="Estonia">Estonia</option>
                            <option value="FO" label="Faroe Islands">Faroe Islands</option>
                            <option value="FI" label="Finland">Finland</option>
                            <option value="FR" label="France">France</option>
                            <option value="DE" label="Germany">Germany</option>
                            <option value="GI" label="Gibraltar">Gibraltar</option>
                            <option value="GR" label="Greece">Greece</option>
                            <option value="GG" label="Guernsey">Guernsey</option>
                            <option value="HU" label="Hungary">Hungary</option>
                            <option value="IS" label="Iceland">Iceland</option>
                            <option value="IE" label="Ireland">Ireland</option>
                            <option value="IM" label="Isle of Man">Isle of Man</option>
                            <option value="IT" label="Italy">Italy</option>
                            <option value="JE" label="Jersey">Jersey</option>
                            <option value="LV" label="Latvia">Latvia</option>
                            <option value="LI" label="Liechtenstein">Liechtenstein</option>
                            <option value="LT" label="Lithuania">Lithuania</option>
                            <option value="LU" label="Luxembourg">Luxembourg</option>
                            <option value="MK" label="Macedonia">Macedonia</option>
                            <option value="MT" label="Malta">Malta</option>
                            <option value="FX" label="Metropolitan France">Metropolitan France</option>
                            <option value="MD" label="Moldova">Moldova</option>
                            <option value="MC" label="Monaco">Monaco</option>
                            <option value="ME" label="Montenegro">Montenegro</option>
                            <option value="NL" label="Netherlands">Netherlands</option>
                            <option value="NO" label="Norway">Norway</option>
                            <option value="PL" label="Poland">Poland</option>
                            <option value="PT" label="Portugal">Portugal</option>
                            <option value="RO" label="Romania">Romania</option>
                            <option value="RU" label="Russia">Russia</option>
                            <option value="SM" label="San Marino">San Marino</option>
                            <option value="RS" label="Serbia">Serbia</option>
                            <option value="CS" label="Serbia and Montenegro">Serbia and Montenegro</option>
                            <option value="SK" label="Slovakia">Slovakia</option>
                            <option value="SI" label="Slovenia">Slovenia</option>
                            <option value="ES" label="Spain">Spain</option>
                            <option value="SJ" label="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="SE" label="Sweden">Sweden</option>
                            <option value="CH" label="Switzerland">Switzerland</option>
                            <option value="UA" label="Ukraine">Ukraine</option>
                            <option value="SU" label="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
                            <option value="GB" label="United Kingdom">United Kingdom</option>
                            <option value="VA" label="Vatican City">Vatican City</option>
                            <option value="AX" label="Åland Islands">Åland Islands</option>
                        </optgroup>
                        <optgroup id="country-Oceania" label="Oceania">
                            <option value="AS" label="American Samoa">American Samoa</option>
                            <option value="AQ" label="Antarctica">Antarctica</option>
                            <option value="AU" label="Australia">Australia</option>
                            <option value="BV" label="Bouvet Island">Bouvet Island</option>
                            <option value="IO" label="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="CX" label="Christmas Island">Christmas Island</option>
                            <option value="CC" label="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
                            <option value="CK" label="Cook Islands">Cook Islands</option>
                            <option value="FJ" label="Fiji">Fiji</option>
                            <option value="PF" label="French Polynesia">French Polynesia</option>
                            <option value="TF" label="French Southern Territories">French Southern Territories</option>
                            <option value="GU" label="Guam">Guam</option>
                            <option value="HM" label="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                            <option value="KI" label="Kiribati">Kiribati</option>
                            <option value="MH" label="Marshall Islands">Marshall Islands</option>
                            <option value="FM" label="Micronesia">Micronesia</option>
                            <option value="NR" label="Nauru">Nauru</option>
                            <option value="NC" label="New Caledonia">New Caledonia</option>
                            <option value="NZ" label="New Zealand">New Zealand</option>
                            <option value="NU" label="Niue">Niue</option>
                            <option value="NF" label="Norfolk Island">Norfolk Island</option>
                            <option value="MP" label="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="PW" label="Palau">Palau</option>
                            <option value="PG" label="Papua New Guinea">Papua New Guinea</option>
                            <option value="PN" label="Pitcairn Islands">Pitcairn Islands</option>
                            <option value="WS" label="Samoa">Samoa</option>
                            <option value="SB" label="Solomon Islands">Solomon Islands</option>
                            <option value="GS" label="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                            <option value="TK" label="Tokelau">Tokelau</option>
                            <option value="TO" label="Tonga">Tonga</option>
                            <option value="TV" label="Tuvalu">Tuvalu</option>
                            <option value="UM" label="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                            <option value="VU" label="Vanuatu">Vanuatu</option>
                            <option value="WF" label="Wallis and Futuna">Wallis and Futuna</option>
                        </optgroup>
                    </select>

                    <br><button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </body>
</html>
