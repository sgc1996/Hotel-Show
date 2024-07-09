<?php $data = $_POST; ?>
<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Hotel Show Colombo 2024</title>
    <!--<title>Registration Form in HTML CSS</title>-->
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <!-- Icons -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" /> -->
    
    <!---Custom CSS File--->
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
    
  </head>
  <body style="background: #0880b285; background-image: url(img/backg.jpg); background-position: center; background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
    
    <section class="container" style="--bs-gutter-x: 3.8rem; background-color: #ffffffe8; max-width:900px">
    <div class="agile-voltsub">
        <img src="img/hotel_show_logo.png" style="width: 300px" alt="Hotel Show Colombo 2024"><br><br>
        <h2>PRE REGISTRATION FORM</h2>
    </div><br>

      <form action="insert.php" class="form" method="post" enctype="multipart/form-data">
        
      <div class="column">
          <div class="input-box">
            <label>Contact Person <span style="color: red;">*</span></label>
            <div class="column">
              <div class="select-box" style="width: 30%;">
                <select name="title" required>
                  <option value="" hidden>Title</option>
                  <option value="Mr.">Mr.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Mrs.">Mrs.</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <input type="text" name="fullName" placeholder="Full name" required/>
            </div>
          </div>
          <div class="input-box">
            <label>Address <span style="color: red;">*</span></label>
            <input type="text" name="address" placeholder="Address" required />
          </div>
        </div>

        <!-- <div class="column">
          <div class="input-box">
            <label>First Name <span style="color: red;">*</span></label>
            <div class="column">
            <input type="text" name="fName" placeholder="Enter First Name" required/>
            </div>
          </div>
          <div class="input-box">
            <label>Last Name <span style="color: red;">*</span></label>
            <div class="column">
            <input type="text" name="lName" placeholder="Enter Last Name" required/>
            </div>
          </div>
        </div> -->

        <div class="column">
          <div class="input-box">
            <label>Contact Number <span style="color: red;">*</span></label>
            <div class="column">
              <div class="select-box" style="width: 60%;">
                <select name="conExt">
                  <option hidden>C. Code</option>
                    <option data-countryCode="DZ" value="00213">Algeria (+213)</option>
                    <option data-countryCode="AD" value="00376">Andorra (+376)</option>
                    <option data-countryCode="AO" value="00244">Angola (+244)</option>
                    <option data-countryCode="AI" value="001264">Anguilla (+1264)</option>
                    <option data-countryCode="AG" value="001268">Antigua &amp; Barbuda (+1268)</option>
                    <option data-countryCode="AR" value="0054">Argentina (+54)</option>
                    <option data-countryCode="AM" value="00374">Armenia (+374)</option>
                    <option data-countryCode="AW" value="00297">Aruba (+297)</option>
                    <option data-countryCode="AU" value="0061">Australia (+61)</option>
                    <option data-countryCode="AT" value="0043">Austria (+43)</option>
                    <option data-countryCode="AZ" value="00994">Azerbaijan (+994)</option>
                    <option data-countryCode="BS" value="001242">Bahamas (+1242)</option>
                    <option data-countryCode="BH" value="00973">Bahrain (+973)</option>
                    <option data-countryCode="BD" value="00880">Bangladesh (+880)</option>
                    <option data-countryCode="BB" value="001246">Barbados (+1246)</option>
                    <option data-countryCode="BY" value="00375">Belarus (+375)</option>
                    <option data-countryCode="BE" value="0032">Belgium (+32)</option>
                    <option data-countryCode="BZ" value="00501">Belize (+501)</option>
                    <option data-countryCode="BJ" value="00229">Benin (+229)</option>
                    <option data-countryCode="BM" value="001441">Bermuda (+1441)</option>
                    <option data-countryCode="BT" value="00975">Bhutan (+975)</option>
                    <option data-countryCode="BO" value="00591">Bolivia (+591)</option>
                    <option data-countryCode="BA" value="00387">Bosnia Herzegovina (+387)</option>
                    <option data-countryCode="BW" value="00267">Botswana (+267)</option>
                    <option data-countryCode="BR" value="0055">Brazil (+55)</option>
                    <option data-countryCode="BN" value="00673">Brunei (+673)</option>
                    <option data-countryCode="BG" value="00359">Bulgaria (+359)</option>
                    <option data-countryCode="BF" value="00226">Burkina Faso (+226)</option>
                    <option data-countryCode="BI" value="00257">Burundi (+257)</option>
                    <option data-countryCode="KH" value="00855">Cambodia (+855)</option>
                    <option data-countryCode="CM" value="00237">Cameroon (+237)</option>
                    <option data-countryCode="CA" value="001">Canada (+1)</option>
                    <option data-countryCode="CV" value="00238">Cape Verde Islands (+238)</option>
                    <option data-countryCode="KY" value="001345">Cayman Islands (+1345)</option>
                    <option data-countryCode="CF" value="00236">Central African Republic (+236)</option>
                    <option data-countryCode="CL" value="0056">Chile (+56)</option>
                    <option data-countryCode="CN" value="0086">China (+86)</option>
                    <option data-countryCode="CO" value="0057">Colombia (+57)</option>
                    <option data-countryCode="KM" value="00269">Comoros (+269)</option>
                    <option data-countryCode="CG" value="00242">Congo (+242)</option>
                    <option data-countryCode="CK" value="00682">Cook Islands (+682)</option>
                    <option data-countryCode="CR" value="00506">Costa Rica (+506)</option>
                    <option data-countryCode="HR" value="00385">Croatia (+385)</option>
                    <option data-countryCode="CU" value="0053">Cuba (+53)</option>
                    <option data-countryCode="CY" value="0090392">Cyprus North (+90392)</option>
                    <option data-countryCode="CY" value="00357">Cyprus South (+357)</option>
                    <option data-countryCode="CZ" value="0042">Czech Republic (+42)</option>
                    <option data-countryCode="DK" value="0045">Denmark (+45)</option>
                    <option data-countryCode="DJ" value="00253">Djibouti (+253)</option>
                    <option data-countryCode="DM" value="001809">Dominica (+1809)</option>
                    <option data-countryCode="DO" value="001809">Dominican Republic (+1809)</option>
                    <option data-countryCode="EC" value="00593">Ecuador (+593)</option>
                    <option data-countryCode="EG" value="0020">Egypt (+20)</option>
                    <option data-countryCode="SV" value="00503">El Salvador (+503)</option>
                    <option data-countryCode="GQ" value="00240">Equatorial Guinea (+240)</option>
                    <option data-countryCode="ER" value="00291">Eritrea (+291)</option>
                    <option data-countryCode="EE" value="00372">Estonia (+372)</option>
                    <option data-countryCode="ET" value="00251">Ethiopia (+251)</option>
                    <option data-countryCode="FK" value="00500">Falkland Islands (+500)</option>
                    <option data-countryCode="FO" value="00298">Faroe Islands (+298)</option>
                    <option data-countryCode="FJ" value="00679">Fiji (+679)</option>
                    <option data-countryCode="FI" value="00358">Finland (+358)</option>
                    <option data-countryCode="FR" value="0033">France (+33)</option>
                    <option data-countryCode="GF" value="00594">French Guiana (+594)</option>
                    <option data-countryCode="PF" value="00689">French Polynesia (+689)</option>
                    <option data-countryCode="GA" value="00241">Gabon (+241)</option>
                    <option data-countryCode="GM" value="00220">Gambia (+220)</option>
                    <option data-countryCode="GE" value="007880">Georgia (+7880)</option>
                    <option data-countryCode="DE" value="0049">Germany (+49)</option>
                    <option data-countryCode="GH" value="00233">Ghana (+233)</option>
                    <option data-countryCode="GI" value="00350">Gibraltar (+350)</option>
                    <option data-countryCode="GR" value="0030">Greece (+30)</option>
                    <option data-countryCode="GL" value="00299">Greenland (+299)</option>
                    <option data-countryCode="GD" value="001473">Grenada (+1473)</option>
                    <option data-countryCode="GP" value="00590">Guadeloupe (+590)</option>
                    <option data-countryCode="GU" value="00671">Guam (+671)</option>
                    <option data-countryCode="GT" value="00502">Guatemala (+502)</option>
                    <option data-countryCode="GN" value="00224">Guinea (+224)</option>
                    <option data-countryCode="GW" value="00245">Guinea - Bissau (+245)</option>
                    <option data-countryCode="GY" value="00592">Guyana (+592)</option>
                    <option data-countryCode="HT" value="00509">Haiti (+509)</option>
                    <option data-countryCode="HN" value="00504">Honduras (+504)</option>
                    <option data-countryCode="HK" value="00852">Hong Kong (+852)</option>
                    <option data-countryCode="HU" value="0036">Hungary (+36)</option>
                    <option data-countryCode="IS" value="00354">Iceland (+354)</option>
                    <option data-countryCode="IN" value="0091">India (+91)</option>
                    <option data-countryCode="ID" value="0062">Indonesia (+62)</option>
                    <option data-countryCode="IR" value="0098">Iran (+98)</option>
                    <option data-countryCode="IQ" value="00964">Iraq (+964)</option>
                    <option data-countryCode="IE" value="00353">Ireland (+353)</option>
                    <option data-countryCode="IL" value="00972">Israel (+972)</option>
                    <option data-countryCode="IT" value="0039">Italy (+39)</option>
                    <option data-countryCode="JM" value="001876">Jamaica (+1876)</option>
                    <option data-countryCode="JP" value="0081">Japan (+81)</option>
                    <option data-countryCode="JO" value="00962">Jordan (+962)</option>
                    <option data-countryCode="KZ" value="007">Kazakhstan (+7)</option>
                    <option data-countryCode="KE" value="00254">Kenya (+254)</option>
                    <option data-countryCode="KI" value="00686">Kiribati (+686)</option>
                    <option data-countryCode="KP" value="00850">Korea North (+850)</option>
                    <option data-countryCode="KR" value="0082">Korea South (+82)</option>
                    <option data-countryCode="KW" value="00965">Kuwait (+965)</option>
                    <option data-countryCode="KG" value="00996">Kyrgyzstan (+996)</option>
                    <option data-countryCode="LA" value="00856">Laos (+856)</option>
                    <option data-countryCode="LV" value="00371">Latvia (+371)</option>
                    <option data-countryCode="LB" value="00961">Lebanon (+961)</option>
                    <option data-countryCode="LS" value="00266">Lesotho (+266)</option>
                    <option data-countryCode="LR" value="00231">Liberia (+231)</option>
                    <option data-countryCode="LY" value="00218">Libya (+218)</option>
                    <option data-countryCode="LI" value="00417">Liechtenstein (+417)</option>
                    <option data-countryCode="LT" value="00370">Lithuania (+370)</option>
                    <option data-countryCode="LU" value="00352">Luxembourg (+352)</option>
                    <option data-countryCode="MO" value="00853">Macao (+853)</option>
                    <option data-countryCode="MK" value="00389">Macedonia (+389)</option>
                    <option data-countryCode="MG" value="00261">Madagascar (+261)</option>
                    <option data-countryCode="MW" value="00265">Malawi (+265)</option>
                    <option data-countryCode="MY" value="0060">Malaysia (+60)</option>
                    <option data-countryCode="MV" value="00960">Maldives (+960)</option>
                    <option data-countryCode="ML" value="00223">Mali (+223)</option>
                    <option data-countryCode="MT" value="00356">Malta (+356)</option>
                    <option data-countryCode="MH" value="00692">Marshall Islands (+692)</option>
                    <option data-countryCode="MQ" value="00596">Martinique (+596)</option>
                    <option data-countryCode="MR" value="00222">Mauritania (+222)</option>
                    <option data-countryCode="YT" value="00269">Mayotte (+269)</option>
                    <option data-countryCode="MX" value="0052">Mexico (+52)</option>
                    <option data-countryCode="FM" value="00691">Micronesia (+691)</option>
                    <option data-countryCode="MD" value="00373">Moldova (+373)</option>
                    <option data-countryCode="MC" value="00377">Monaco (+377)</option>
                    <option data-countryCode="MN" value="00976">Mongolia (+976)</option>
                    <option data-countryCode="MS" value="001664">Montserrat (+1664)</option>
                    <option data-countryCode="MA" value="00212">Morocco (+212)</option>
                    <option data-countryCode="MZ" value="00258">Mozambique (+258)</option>
                    <option data-countryCode="MN" value="0095">Myanmar (+95)</option>
                    <option data-countryCode="NA" value="00264">Namibia (+264)</option>
                    <option data-countryCode="NR" value="00674">Nauru (+674)</option>
                    <option data-countryCode="NP" value="00977">Nepal (+977)</option>
                    <option data-countryCode="NL" value="0031">Netherlands (+31)</option>
                    <option data-countryCode="NC" value="00687">New Caledonia (+687)</option>
                    <option data-countryCode="NZ" value="0064">New Zealand (+64)</option>
                    <option data-countryCode="NI" value="00505">Nicaragua (+505)</option>
                    <option data-countryCode="NE" value="00227">Niger (+227)</option>
                    <option data-countryCode="NG" value="00234">Nigeria (+234)</option>
                    <option data-countryCode="NU" value="00683">Niue (+683)</option>
                    <option data-countryCode="NF" value="00672">Norfolk Islands (+672)</option>
                    <option data-countryCode="NP" value="00670">Northern Marianas (+670)</option>
                    <option data-countryCode="NO" value="0047">Norway (+47)</option>
                    <option data-countryCode="OM" value="00968">Oman (+968)</option>
                    <option data-countryCode="PW" value="00680">Palau (+680)</option>
                    <option data-countryCode="PA" value="00507">Panama (+507)</option>
                    <option data-countryCode="PG" value="00675">Papua New Guinea (+675)</option>
                    <option data-countryCode="PY" value="00595">Paraguay (+595)</option>
                    <option data-countryCode="PE" value="0051">Peru (+51)</option>
                    <option data-countryCode="PH" value="0063">Philippines (+63)</option>
                    <option data-countryCode="PL" value="0048">Poland (+48)</option>
                    <option data-countryCode="PT" value="00351">Portugal (+351)</option>
                    <option data-countryCode="PR" value="001787">Puerto Rico (+1787)</option>
                    <option data-countryCode="QA" value="00974">Qatar (+974)</option>
                    <option data-countryCode="RE" value="00262">Reunion (+262)</option>
                    <option data-countryCode="RO" value="0040">Romania (+40)</option>
                    <option data-countryCode="RU" value="007">Russia (+7)</option>
                    <option data-countryCode="RW" value="00250">Rwanda (+250)</option>
                    <option data-countryCode="SM" value="00378">San Marino (+378)</option>
                    <option data-countryCode="ST" value="00239">Sao Tome &amp; Principe (+239)</option>
                    <option data-countryCode="SA" value="00966">Saudi Arabia (+966)</option>
                    <option data-countryCode="SN" value="00221">Senegal (+221)</option>
                    <option data-countryCode="CS" value="00381">Serbia (+381)</option>
                    <option data-countryCode="SC" value="00248">Seychelles (+248)</option>
                    <option data-countryCode="SL" value="00232">Sierra Leone (+232)</option>
                    <option data-countryCode="SG" value="0065">Singapore (+65)</option>
                    <option data-countryCode="SK" value="00421">Slovak Republic (+421)</option>
                    <option data-countryCode="SI" value="00386">Slovenia (+386)</option>
                    <option data-countryCode="SB" value="00677">Solomon Islands (+677)</option>
                    <option data-countryCode="SO" value="00252">Somalia (+252)</option>
                    <option data-countryCode="ZA" value="0027">South Africa (+27)</option>
                    <option data-countryCode="ES" value="0034">Spain (+34)</option>
                    <option data-countryCode="LK" selected value="0094">Sri Lanka (+94)</option>
                    <option data-countryCode="SH" value="00290">St. Helena (+290)</option>
                    <option data-countryCode="KN" value="001869">St. Kitts (+1869)</option>
                    <option data-countryCode="SC" value="001758">St. Lucia (+1758)</option>
                    <option data-countryCode="SD" value="00249">Sudan (+249)</option>
                    <option data-countryCode="SR" value="00597">Suriname (+597)</option>
                    <option data-countryCode="SZ" value="00268">Swaziland (+268)</option>
                    <option data-countryCode="SE" value="0046">Sweden (+46)</option>
                    <option data-countryCode="CH" value="0041">Switzerland (+41)</option>
                    <option data-countryCode="SI" value="00963">Syria (+963)</option>
                    <option data-countryCode="TW" value="00886">Taiwan (+886)</option>
                    <option data-countryCode="TJ" value="007">Tajikstan (+7)</option>
                    <option data-countryCode="TH" value="0066">Thailand (+66)</option>
                    <option data-countryCode="TG" value="00228">Togo (+228)</option>
                    <option data-countryCode="TO" value="00676">Tonga (+676)</option>
                    <option data-countryCode="TT" value="001868">Trinidad &amp; Tobago (+1868)</option>
                    <option data-countryCode="TN" value="00216">Tunisia (+216)</option>
                    <option data-countryCode="TR" value="0090">Turkey (+90)</option>
                    <option data-countryCode="TM" value="007">Turkmenistan (+7)</option>
                    <option data-countryCode="TM" value="00993">Turkmenistan (+993)</option>
                    <option data-countryCode="TC" value="001649">Turks &amp; Caicos Islands (+1649)</option>
                    <option data-countryCode="TV" value="00688">Tuvalu (+688)</option>
                    <option data-countryCode="UG" value="00256">Uganda (+256)</option>
                    <option data-countryCode="GB" value="0044">UK (+44)</option>
                    <option data-countryCode="UA" value="00380">Ukraine (+380)</option>
                    <option data-countryCode="AE" value="00971">United Arab Emirates (+971)</option>
                    <option data-countryCode="UY" value="00598">Uruguay (+598)</option>
                    <option data-countryCode="US" value="001">USA (+1)</option>
                    <option data-countryCode="UZ" value="007">Uzbekistan (+7)</option>
                    <option data-countryCode="VU" value="00678">Vanuatu (+678)</option>
                    <option data-countryCode="VA" value="00379">Vatican City (+379)</option>
                    <option data-countryCode="VE" value="0058">Venezuela (+58)</option>
                    <option data-countryCode="VN" value="0084">Vietnam (+84)</option>
                    <option data-countryCode="VG" value="0084">Virgin Islands - British (+1284)</option>
                    <option data-countryCode="VI" value="0084">Virgin Islands - US (+1340)</option>
                    <option data-countryCode="WF" value="00681">Wallis &amp; Futuna (+681)</option>
                    <option data-countryCode="YE" value="00969">Yemen (North)(+969)</option>
                    <option data-countryCode="YE" value="00967">Yemen (South)(+967)</option>
                    <option data-countryCode="ZM" value="00260">Zambia (+260)</option>
                    <option data-countryCode="ZW" value="00263">Zimbabwe (+263)</option>
                </select>
              </div>
              <input type="text" name="conNum" placeholder="Contact number" required />
            </div>
          </div>
          <div class="input-box">
            <label>WhatsApp Number</label>
            <div class="column">
              <div class="select-box" style="width: 60%;">
                <select name="whaExt">
                  <option hidden>C. Code</option>
                    <option data-countryCode="DZ" value="00213">Algeria (+213)</option>
                    <option data-countryCode="AD" value="00376">Andorra (+376)</option>
                    <option data-countryCode="AO" value="00244">Angola (+244)</option>
                    <option data-countryCode="AI" value="001264">Anguilla (+1264)</option>
                    <option data-countryCode="AG" value="001268">Antigua &amp; Barbuda (+1268)</option>
                    <option data-countryCode="AR" value="0054">Argentina (+54)</option>
                    <option data-countryCode="AM" value="00374">Armenia (+374)</option>
                    <option data-countryCode="AW" value="00297">Aruba (+297)</option>
                    <option data-countryCode="AU" value="0061">Australia (+61)</option>
                    <option data-countryCode="AT" value="0043">Austria (+43)</option>
                    <option data-countryCode="AZ" value="00994">Azerbaijan (+994)</option>
                    <option data-countryCode="BS" value="001242">Bahamas (+1242)</option>
                    <option data-countryCode="BH" value="00973">Bahrain (+973)</option>
                    <option data-countryCode="BD" value="00880">Bangladesh (+880)</option>
                    <option data-countryCode="BB" value="001246">Barbados (+1246)</option>
                    <option data-countryCode="BY" value="00375">Belarus (+375)</option>
                    <option data-countryCode="BE" value="0032">Belgium (+32)</option>
                    <option data-countryCode="BZ" value="00501">Belize (+501)</option>
                    <option data-countryCode="BJ" value="00229">Benin (+229)</option>
                    <option data-countryCode="BM" value="001441">Bermuda (+1441)</option>
                    <option data-countryCode="BT" value="00975">Bhutan (+975)</option>
                    <option data-countryCode="BO" value="00591">Bolivia (+591)</option>
                    <option data-countryCode="BA" value="00387">Bosnia Herzegovina (+387)</option>
                    <option data-countryCode="BW" value="00267">Botswana (+267)</option>
                    <option data-countryCode="BR" value="0055">Brazil (+55)</option>
                    <option data-countryCode="BN" value="00673">Brunei (+673)</option>
                    <option data-countryCode="BG" value="00359">Bulgaria (+359)</option>
                    <option data-countryCode="BF" value="00226">Burkina Faso (+226)</option>
                    <option data-countryCode="BI" value="00257">Burundi (+257)</option>
                    <option data-countryCode="KH" value="00855">Cambodia (+855)</option>
                    <option data-countryCode="CM" value="00237">Cameroon (+237)</option>
                    <option data-countryCode="CA" value="001">Canada (+1)</option>
                    <option data-countryCode="CV" value="00238">Cape Verde Islands (+238)</option>
                    <option data-countryCode="KY" value="001345">Cayman Islands (+1345)</option>
                    <option data-countryCode="CF" value="00236">Central African Republic (+236)</option>
                    <option data-countryCode="CL" value="0056">Chile (+56)</option>
                    <option data-countryCode="CN" value="0086">China (+86)</option>
                    <option data-countryCode="CO" value="0057">Colombia (+57)</option>
                    <option data-countryCode="KM" value="00269">Comoros (+269)</option>
                    <option data-countryCode="CG" value="00242">Congo (+242)</option>
                    <option data-countryCode="CK" value="00682">Cook Islands (+682)</option>
                    <option data-countryCode="CR" value="00506">Costa Rica (+506)</option>
                    <option data-countryCode="HR" value="00385">Croatia (+385)</option>
                    <option data-countryCode="CU" value="0053">Cuba (+53)</option>
                    <option data-countryCode="CY" value="0090392">Cyprus North (+90392)</option>
                    <option data-countryCode="CY" value="00357">Cyprus South (+357)</option>
                    <option data-countryCode="CZ" value="0042">Czech Republic (+42)</option>
                    <option data-countryCode="DK" value="0045">Denmark (+45)</option>
                    <option data-countryCode="DJ" value="00253">Djibouti (+253)</option>
                    <option data-countryCode="DM" value="001809">Dominica (+1809)</option>
                    <option data-countryCode="DO" value="001809">Dominican Republic (+1809)</option>
                    <option data-countryCode="EC" value="00593">Ecuador (+593)</option>
                    <option data-countryCode="EG" value="0020">Egypt (+20)</option>
                    <option data-countryCode="SV" value="00503">El Salvador (+503)</option>
                    <option data-countryCode="GQ" value="00240">Equatorial Guinea (+240)</option>
                    <option data-countryCode="ER" value="00291">Eritrea (+291)</option>
                    <option data-countryCode="EE" value="00372">Estonia (+372)</option>
                    <option data-countryCode="ET" value="00251">Ethiopia (+251)</option>
                    <option data-countryCode="FK" value="00500">Falkland Islands (+500)</option>
                    <option data-countryCode="FO" value="00298">Faroe Islands (+298)</option>
                    <option data-countryCode="FJ" value="00679">Fiji (+679)</option>
                    <option data-countryCode="FI" value="00358">Finland (+358)</option>
                    <option data-countryCode="FR" value="0033">France (+33)</option>
                    <option data-countryCode="GF" value="00594">French Guiana (+594)</option>
                    <option data-countryCode="PF" value="00689">French Polynesia (+689)</option>
                    <option data-countryCode="GA" value="00241">Gabon (+241)</option>
                    <option data-countryCode="GM" value="00220">Gambia (+220)</option>
                    <option data-countryCode="GE" value="007880">Georgia (+7880)</option>
                    <option data-countryCode="DE" value="0049">Germany (+49)</option>
                    <option data-countryCode="GH" value="00233">Ghana (+233)</option>
                    <option data-countryCode="GI" value="00350">Gibraltar (+350)</option>
                    <option data-countryCode="GR" value="0030">Greece (+30)</option>
                    <option data-countryCode="GL" value="00299">Greenland (+299)</option>
                    <option data-countryCode="GD" value="001473">Grenada (+1473)</option>
                    <option data-countryCode="GP" value="00590">Guadeloupe (+590)</option>
                    <option data-countryCode="GU" value="00671">Guam (+671)</option>
                    <option data-countryCode="GT" value="00502">Guatemala (+502)</option>
                    <option data-countryCode="GN" value="00224">Guinea (+224)</option>
                    <option data-countryCode="GW" value="00245">Guinea - Bissau (+245)</option>
                    <option data-countryCode="GY" value="00592">Guyana (+592)</option>
                    <option data-countryCode="HT" value="00509">Haiti (+509)</option>
                    <option data-countryCode="HN" value="00504">Honduras (+504)</option>
                    <option data-countryCode="HK" value="00852">Hong Kong (+852)</option>
                    <option data-countryCode="HU" value="0036">Hungary (+36)</option>
                    <option data-countryCode="IS" value="00354">Iceland (+354)</option>
                    <option data-countryCode="IN" value="0091">India (+91)</option>
                    <option data-countryCode="ID" value="0062">Indonesia (+62)</option>
                    <option data-countryCode="IR" value="0098">Iran (+98)</option>
                    <option data-countryCode="IQ" value="00964">Iraq (+964)</option>
                    <option data-countryCode="IE" value="00353">Ireland (+353)</option>
                    <option data-countryCode="IL" value="00972">Israel (+972)</option>
                    <option data-countryCode="IT" value="0039">Italy (+39)</option>
                    <option data-countryCode="JM" value="001876">Jamaica (+1876)</option>
                    <option data-countryCode="JP" value="0081">Japan (+81)</option>
                    <option data-countryCode="JO" value="00962">Jordan (+962)</option>
                    <option data-countryCode="KZ" value="007">Kazakhstan (+7)</option>
                    <option data-countryCode="KE" value="00254">Kenya (+254)</option>
                    <option data-countryCode="KI" value="00686">Kiribati (+686)</option>
                    <option data-countryCode="KP" value="00850">Korea North (+850)</option>
                    <option data-countryCode="KR" value="0082">Korea South (+82)</option>
                    <option data-countryCode="KW" value="00965">Kuwait (+965)</option>
                    <option data-countryCode="KG" value="00996">Kyrgyzstan (+996)</option>
                    <option data-countryCode="LA" value="00856">Laos (+856)</option>
                    <option data-countryCode="LV" value="00371">Latvia (+371)</option>
                    <option data-countryCode="LB" value="00961">Lebanon (+961)</option>
                    <option data-countryCode="LS" value="00266">Lesotho (+266)</option>
                    <option data-countryCode="LR" value="00231">Liberia (+231)</option>
                    <option data-countryCode="LY" value="00218">Libya (+218)</option>
                    <option data-countryCode="LI" value="00417">Liechtenstein (+417)</option>
                    <option data-countryCode="LT" value="00370">Lithuania (+370)</option>
                    <option data-countryCode="LU" value="00352">Luxembourg (+352)</option>
                    <option data-countryCode="MO" value="00853">Macao (+853)</option>
                    <option data-countryCode="MK" value="00389">Macedonia (+389)</option>
                    <option data-countryCode="MG" value="00261">Madagascar (+261)</option>
                    <option data-countryCode="MW" value="00265">Malawi (+265)</option>
                    <option data-countryCode="MY" value="0060">Malaysia (+60)</option>
                    <option data-countryCode="MV" value="00960">Maldives (+960)</option>
                    <option data-countryCode="ML" value="00223">Mali (+223)</option>
                    <option data-countryCode="MT" value="00356">Malta (+356)</option>
                    <option data-countryCode="MH" value="00692">Marshall Islands (+692)</option>
                    <option data-countryCode="MQ" value="00596">Martinique (+596)</option>
                    <option data-countryCode="MR" value="00222">Mauritania (+222)</option>
                    <option data-countryCode="YT" value="00269">Mayotte (+269)</option>
                    <option data-countryCode="MX" value="0052">Mexico (+52)</option>
                    <option data-countryCode="FM" value="00691">Micronesia (+691)</option>
                    <option data-countryCode="MD" value="00373">Moldova (+373)</option>
                    <option data-countryCode="MC" value="00377">Monaco (+377)</option>
                    <option data-countryCode="MN" value="00976">Mongolia (+976)</option>
                    <option data-countryCode="MS" value="001664">Montserrat (+1664)</option>
                    <option data-countryCode="MA" value="00212">Morocco (+212)</option>
                    <option data-countryCode="MZ" value="00258">Mozambique (+258)</option>
                    <option data-countryCode="MN" value="0095">Myanmar (+95)</option>
                    <option data-countryCode="NA" value="00264">Namibia (+264)</option>
                    <option data-countryCode="NR" value="00674">Nauru (+674)</option>
                    <option data-countryCode="NP" value="00977">Nepal (+977)</option>
                    <option data-countryCode="NL" value="0031">Netherlands (+31)</option>
                    <option data-countryCode="NC" value="00687">New Caledonia (+687)</option>
                    <option data-countryCode="NZ" value="0064">New Zealand (+64)</option>
                    <option data-countryCode="NI" value="00505">Nicaragua (+505)</option>
                    <option data-countryCode="NE" value="00227">Niger (+227)</option>
                    <option data-countryCode="NG" value="00234">Nigeria (+234)</option>
                    <option data-countryCode="NU" value="00683">Niue (+683)</option>
                    <option data-countryCode="NF" value="00672">Norfolk Islands (+672)</option>
                    <option data-countryCode="NP" value="00670">Northern Marianas (+670)</option>
                    <option data-countryCode="NO" value="0047">Norway (+47)</option>
                    <option data-countryCode="OM" value="00968">Oman (+968)</option>
                    <option data-countryCode="PW" value="00680">Palau (+680)</option>
                    <option data-countryCode="PA" value="00507">Panama (+507)</option>
                    <option data-countryCode="PG" value="00675">Papua New Guinea (+675)</option>
                    <option data-countryCode="PY" value="00595">Paraguay (+595)</option>
                    <option data-countryCode="PE" value="0051">Peru (+51)</option>
                    <option data-countryCode="PH" value="0063">Philippines (+63)</option>
                    <option data-countryCode="PL" value="0048">Poland (+48)</option>
                    <option data-countryCode="PT" value="00351">Portugal (+351)</option>
                    <option data-countryCode="PR" value="001787">Puerto Rico (+1787)</option>
                    <option data-countryCode="QA" value="00974">Qatar (+974)</option>
                    <option data-countryCode="RE" value="00262">Reunion (+262)</option>
                    <option data-countryCode="RO" value="0040">Romania (+40)</option>
                    <option data-countryCode="RU" value="007">Russia (+7)</option>
                    <option data-countryCode="RW" value="00250">Rwanda (+250)</option>
                    <option data-countryCode="SM" value="00378">San Marino (+378)</option>
                    <option data-countryCode="ST" value="00239">Sao Tome &amp; Principe (+239)</option>
                    <option data-countryCode="SA" value="00966">Saudi Arabia (+966)</option>
                    <option data-countryCode="SN" value="00221">Senegal (+221)</option>
                    <option data-countryCode="CS" value="00381">Serbia (+381)</option>
                    <option data-countryCode="SC" value="00248">Seychelles (+248)</option>
                    <option data-countryCode="SL" value="00232">Sierra Leone (+232)</option>
                    <option data-countryCode="SG" value="0065">Singapore (+65)</option>
                    <option data-countryCode="SK" value="00421">Slovak Republic (+421)</option>
                    <option data-countryCode="SI" value="00386">Slovenia (+386)</option>
                    <option data-countryCode="SB" value="00677">Solomon Islands (+677)</option>
                    <option data-countryCode="SO" value="00252">Somalia (+252)</option>
                    <option data-countryCode="ZA" value="0027">South Africa (+27)</option>
                    <option data-countryCode="ES" value="0034">Spain (+34)</option>
                    <option data-countryCode="LK" selected value="0094">Sri Lanka (+94)</option>
                    <option data-countryCode="SH" value="00290">St. Helena (+290)</option>
                    <option data-countryCode="KN" value="001869">St. Kitts (+1869)</option>
                    <option data-countryCode="SC" value="001758">St. Lucia (+1758)</option>
                    <option data-countryCode="SD" value="00249">Sudan (+249)</option>
                    <option data-countryCode="SR" value="00597">Suriname (+597)</option>
                    <option data-countryCode="SZ" value="00268">Swaziland (+268)</option>
                    <option data-countryCode="SE" value="0046">Sweden (+46)</option>
                    <option data-countryCode="CH" value="0041">Switzerland (+41)</option>
                    <option data-countryCode="SI" value="00963">Syria (+963)</option>
                    <option data-countryCode="TW" value="00886">Taiwan (+886)</option>
                    <option data-countryCode="TJ" value="007">Tajikstan (+7)</option>
                    <option data-countryCode="TH" value="0066">Thailand (+66)</option>
                    <option data-countryCode="TG" value="00228">Togo (+228)</option>
                    <option data-countryCode="TO" value="00676">Tonga (+676)</option>
                    <option data-countryCode="TT" value="001868">Trinidad &amp; Tobago (+1868)</option>
                    <option data-countryCode="TN" value="00216">Tunisia (+216)</option>
                    <option data-countryCode="TR" value="0090">Turkey (+90)</option>
                    <option data-countryCode="TM" value="007">Turkmenistan (+7)</option>
                    <option data-countryCode="TM" value="00993">Turkmenistan (+993)</option>
                    <option data-countryCode="TC" value="001649">Turks &amp; Caicos Islands (+1649)</option>
                    <option data-countryCode="TV" value="00688">Tuvalu (+688)</option>
                    <option data-countryCode="UG" value="00256">Uganda (+256)</option>
                    <option data-countryCode="GB" value="0044">UK (+44)</option>
                    <option data-countryCode="UA" value="00380">Ukraine (+380)</option>
                    <option data-countryCode="AE" value="00971">United Arab Emirates (+971)</option>
                    <option data-countryCode="UY" value="00598">Uruguay (+598)</option>
                    <option data-countryCode="US" value="001">USA (+1)</option>
                    <option data-countryCode="UZ" value="007">Uzbekistan (+7)</option>
                    <option data-countryCode="VU" value="00678">Vanuatu (+678)</option>
                    <option data-countryCode="VA" value="00379">Vatican City (+379)</option>
                    <option data-countryCode="VE" value="0058">Venezuela (+58)</option>
                    <option data-countryCode="VN" value="0084">Vietnam (+84)</option>
                    <option data-countryCode="VG" value="0084">Virgin Islands - British (+1284)</option>
                    <option data-countryCode="VI" value="0084">Virgin Islands - US (+1340)</option>
                    <option data-countryCode="WF" value="00681">Wallis &amp; Futuna (+681)</option>
                    <option data-countryCode="YE" value="00969">Yemen (North)(+969)</option>
                    <option data-countryCode="YE" value="00967">Yemen (South)(+967)</option>
                    <option data-countryCode="ZM" value="00260">Zambia (+260)</option>
                    <option data-countryCode="ZW" value="00263">Zimbabwe (+263)</option>
                </select>
              </div>
              <input type="text" name="whaNum" placeholder="WhatsApp number"/>
            </div>
          </div>
        </div>

        

        <div class="column">
          <div class="input-box">
            <label>Email Address <span style="color: red;">*</span></label>
            <input type="email" name="email" placeholder="Enter email address" required/>
          </div>
          <div class="input-box">
            <label>Designation</label>
            <input type="text" name="destination" placeholder="Designation" />
          </div>
        </div>

        <div class="column">
          <div class="input-box">
            <label>Organization</label>
            <input type="text" name="organization" placeholder="Organization" />
          </div>
        </div>

      <div class="gender-box">

        <button type="submit" onclick="submitForm('insert.php')">Submit</button>
        <br><br>

        <div class="container main-footer">
          <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-12 sponsor">
              <div class="form-group float-start sponsor-title">
                <h3>Organized by</h3>
                <div class="s-image">
                  <img src="img/chsga-logo.png" class="img-fluid" id="output">
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-5 col-sm-12 sponsor secondline">
              <div class="footer-info sponsor-title">
                <h3>Sri Lanka Hospitality Graduates Association</h3>
                <ul class="info" style="padding-left: 0rem;">
                <li class="address">
                  <a
                  ><i class="icon fa fa-map-marker-alt"></i>2nd Floor, LE CUBE , No. 130, High-level Road, Colombo 06, Sri Lanka.</a
                  >
                </li>
                <li class="phone">
                  <a href="tel: +94114022182"
                  ><i class="icon fa-solid fa-phone"></i>
                  +94 11 4022 182</a
                  >
                  <a href="tel: +94112423848">
                  +94 11 2423 848</a
                  >
                </li>
                <li class="email">
                  <a href="mailto:chsga@sltnet.lk"
                  ><i class="icon fa fa-envelope"></i>
                  chsga@sltnet.lk</a
                  >
                </li>
                <li class="web">
                  <a href="https://www.hotelshowcolombo.com/" target="_blank"
                  ><i class="icon fa-brands fa-internet-explorer"></i>
                  www.hotelshowcolombo.com</a
                  >
                </li>
                <li class="facebook">
                  <a href="https://web.facebook.com/profile.php?id=100067105736223" target="_blank"
                  ><i class="icon fa-brands fa-facebook-f"></i>
                  Hotel Show Colombo Sri Lanka</a
                  >
                </li>
                <li class="facebook">
                  <a href="https://www.instagram.com/hotelshowcolombo/" target="_blank"
                  ><i class="icon fa-brands fa-instagram"></i>
                  hotelshowcolombo</a
                  >
                </li>
                <li class="facebook">
                  <a href="https://lk.linkedin.com/in/hotel-show-colombo-sri-lanka-78a271167" target="_blank"
                  ><i class="icon fa-brands fa-linkedin-in"></i>
                  Hotel Show Colombo Sri Lanka</a
                  >
                </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
      </form>
    </section>
    <script>
      $('#form').validation({
      'autocomplete': 'off'
      });
    </script>
  </body>
</html>