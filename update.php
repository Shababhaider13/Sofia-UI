<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">


    <!--===============================================================================================-->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.tutorialjinni.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.tutorialjinni.com/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/css/bootstrap-select-country.min.css" />
    <script src="https://jsuites.net/v4/jsuites.js"></script>
    <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container {
            position: relative;
            width: 160px;
            height: 160px;
        }
        
        .center {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .form-input {
            width: 350px;
            padding: 20px;
            background: #fff;
            box-shadow: 0px 4px 8px #c6c3e391;
            border-radius: 10px;
        }
        
        .form-input1 {
            width: 350px;
            padding: 20px;
            background: #fff;
            box-shadow: 0px 2px 4px #c6c3e391;
            border-radius: 10px;
        }
        
        .form-input input {
            display: none;
        }
        
        .form-input label {
            display: block;
            width: 45%;
            height: 45px;
            margin-left: 25%;
            line-height: 50px;
            text-align: center;
            background: #9DCAEB;
            color: #fff;
            font-size: 15px;
            font-family: "Open Sans", sans-serif;
            text-transform: Uppercase;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .form-input img {
            width: 100%;
            display: none;
            margin-bottom: 30px;
        }
        
        .form-input1 input {
            display: none;
        }
        
        .form-input1 label {
            display: block;
            width: 45%;
            height: 45px;
            margin-left: 25%;
            line-height: 50px;
            text-align: center;
            background: #9DCAEB;
            color: #fff;
            font-size: 15px;
            font-family: "Open Sans", sans-serif;
            text-transform: Uppercase;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .form-input1 img {
            width: 100%;
            display: none;
            margin-bottom: 30px;
        }
        
        .image {
            display: block;
            width: 160px;
            height: 160px;
        }
        
        .overlay {
            position: absolute;
            width: 160px;
            height: 160px;
            border-radius: 50%;
            opacity: 0;
            transition: .3s ease;
            background-color: black;
        }
        
        .form-input label {
            display: block;
            width: 55%;
            height: 55px;
            margin-left: 25%;
            line-height: 50px;
            text-align: center;
            background: #9DCAEB;
            color: #fff;
            font-size: 15px;
            font-family: "Open Sans", sans-serif;
            text-transform: Uppercase;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .container:hover .overlay {
            opacity: 1;
        }
        
        .icon {
            color: white;
            font-size: 25px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }
        
        .fa-user:hover {
            color: #eee;
        }

        .div1 {
  width: 140px;
  height: 140px;
  border-radius: 50%;
  border-style: solid;
  border-color: #FFFFFF;
  box-shadow: 0 0 8px 3px #B8B8B8;
  position: relative;
}

.div1 img {
  height: 100%;
  width: 100%;
  border-radius: 50%;
}

.div1 i {
  position: absolute;
  top: 20px;
  right: -7px;
  /* border: 1px solid; */
  border-radius: 50%;
  /* padding: 11px; */
  height: 30px;
  width: 30px;
  display: flex !important;
  align-items: center;
  justify-content: center;
  background-color: white;
  color: cornflowerblue;
  box-shadow: 0 0 8px 3px #B8B8B8;
}

        

        
    </style>
</head>

<body>
    


    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
        <i class="fa-solid fa-arrow-left-long fa-2x" onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profhead">Update Profile</div>
        </div>
        <div class="iconprofileheader">
        <a href="profile.php" style="color:black"><i class="fa-solid fa-user fa-2x"></i></a>
        </div>
    </div>
    <!-- header end -->


    <div class="signupcontent">
        <!-- <div style="display: flex;justify-content:center;align-items:center" class="container">
            <img src="user2.jpg" alt="Avatar" class="image profpicupd">
            <div class="overlay">
                <a href="#" class="icon" title="User Profile">
                    <i class="fa-sharp fa-solid fa-camera"></i>
                </a>
            </div>
        </div>  -->
        <!-- image start -->
<div style="display:flex;justify-content:center">
        <div class="div1">
  <img src="user2.jpg" class="main-profile-img" />
  <i class="fa fa-edit"></i>
</div>
</div>
        

        <!-- image end -->
        <label>First Name</label>
        <input type="text" class="typecol" placeholder="Hasham ">
        <label>Last Name</label>
        <input type="text" class="typecol" placeholder="Uddin">
        <label>User Email</label>
        <input type="email" class="typecol" placeholder="hashamlaptop@gmail.com">
        <label>Password</label>
        <div class="input-container1">
            <!-- <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;background: #0275d8;"><i class="fa fa-key icon"></i></div> -->
            <input type="text" class="typecol" placeholder="123456789" height="100%" autocomplete="off" style="margin-top:0px;margin-bottom:0px">
            <div style="width:100%;display: flex;justify-content:center;align-items:center;height: 100%;"><i class="fa-solid fa-eye"></i></div>

        </div>
        <div class="size-204 respon6-next mt-3 mb-3">
                                         <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
											<option>Country</option>
                                            <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, Democratic Republic of the Congo</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D'Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CW">Curacao</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
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
    <option value="GI">Gibraltar</option>
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
    <option value="HM">Heard Island and Mcdonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People's Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People's Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macao</option>
    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
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
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
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
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory, Occupied</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="CS">Serbia and Montenegro</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SX">Sint Maarten</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="SS">South Sudan</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan, Province of China</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Viet Nam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.s.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
											
										</select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                                <div class="size-204 respon6-next mt-3 mb-3">
                                         <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
											<option>City</option>
                                            <option value="Adilpur">Adilpur</option>
    <option value="Badin">Badin</option>
    <option value="Bagarji">Bagarji</option>
    <option value="Bandhi">Bandhi</option>
    <option value="Berani">Berani</option>
    <option value="Bhan">Bhan</option>
    <option value="Bhiria">Bhiria</option>
    <option value="Bhit Shah">Bhit Shah</option>
    <option value="Bozdar Wada">Bozdar Wada</option>
    <option value="Bulri">Bulri</option>
    <option value="Chak">Chak</option>
    <option value="Chamber">Chamber</option>
    <option value="Chhor">Chhor</option>
    <option value="Chuhar Jamali">Chuhar Jamali</option>
    <option value="Dadu">Dadu</option>
    <option value="Daromehar">Daromehar</option>
    <option value="Darya Khan Marri">Darya Khan Marri</option>
    <option value="Daulatpur">Daulatpur</option>
    <option value="Daur">Daur</option>
    <option value="Dhoro Naro">Dhoro Naro</option>
    <option value="Digri">Digri</option>
    <option value="Diplo">Diplo</option>
    <option value="Dokri">Dokri</option>
    <option value="Gambat">Gambat</option>
    <option value="Garhiyasin">Garhiyasin</option>
    <option value="Gharo">Gharo</option>
    <option value="Ghauspur">Ghauspur</option>
    <option value="Ghotki">Ghotki</option>
    <option value="Goth Garelo">Goth Garelo</option>
    <option value="Goth Phulji">Goth Phulji</option>
    <option value="Goth Radhan">Goth Radhan</option>
    <option value="Hala">Hala</option>
    <option value="Hingorja">Hingorja</option>
    <option value="Hyderabad">Hyderabad</option>
    <option value="Islamkot">Islamkot</option>
    <option value="Jacobabad">Jacobabad</option>
    <option value="Jām Sāhib">Jām Sāhib</option>
    <option value="Jamshoro">Jamshoro</option>
    <option value="Jati">Jati</option>
    <option value="Jhol">Jhol</option>
    <option value="Johi">Johi</option>
    <option value="Kadhan">Kadhan</option>
    <option value="Kambar">Kambar</option>
    <option value="Kandhkot">Kandhkot</option>
    <option value="Kandiari">Kandiari</option>
    <option value="Kandiaro">Kandiaro</option>
    <option value="Karachi">Karachi</option>
    <option value="Karaundi">Karaundi</option>
    <option value="Kario Ghanwar">Kario Ghanwar</option>
    <option value="Kashmor">Kashmor</option>
    <option value="Keti Bandar">Keti Bandar</option>
    <option value="Khadro">Khadro</option>
    <option value="Khairpur">Khairpur</option>
    <option value="Khairpur Mir’s">Khairpur Mir’s</option>
    <option value="Khairpur Nathan Shah">Khairpur Nathan Shah</option>
    <option value="Khanpur Mahar">Khanpur Mahar</option>
    <option value="Kot Diji">Kot Diji</option>
    <option value="Kotri">Kotri</option>
    <option value="Kunri">Kunri</option>
    <option value="Lakhi">Lakhi</option>
    <option value="Larkana">Larkana</option>
    <option value="Madeji">Madeji</option>
    <option value="Malir Cantonment">Malir Cantonment</option>
    <option value="Matiari">Matiari</option>
    <option value="Matli">Matli</option>
    <option value="Mehar">Mehar</option>
    <option value="Miro Khan">Miro Khan</option>
    <option value="Mirpur Bhtoro">Mirpur Bhtoro</option>
    <option value="Mirpur Khas">Mirpur Khas</option>
    <option value="Mirpur Mathelo">Mirpur Mathelo</option>
    <option value="Mirpur Sakro">Mirpur Sakro</option>
    <option value="Mirwah Gorchani">Mirwah Gorchani</option>
    <option value="Mithi">Mithi</option>
    <option value="Moro">Moro</option>
    <option value="Nabisar">Nabisar</option>
    <option value="Nasirabad">Nasirabad</option>
    <option value="Naudero">Naudero</option>
    <option value="Naukot">Naukot</option>
    <option value="Naushahro Firoz">Naushahro Firoz</option>
    <option value="Nawabshah">Nawabshah</option>
    <option value="New Bādāh">New Bādāh</option>
    <option value="Pad Idan">Pad Idan</option>
    <option value="Pano Aqil">Pano Aqil</option>
    <option value="Pir Jo Goth">Pir Jo Goth</option>
    <option value="Pithoro">Pithoro</option>
    <option value="Rajo Khanani">Rajo Khanani</option>
    <option value="Ranipur">Ranipur</option>
    <option value="Ratodero">Ratodero</option>
    <option value="Rohri">Rohri</option>
    <option value="Rustam">Rustam</option>
    <option value="Sakrand">Sakrand</option>
    <option value="Samaro">Samaro</option>
    <option value="Sanghar">Sanghar</option>
    <option value="Sann">Sann</option>
    <option value="Sehwan">Sehwan</option>
    <option value="Setharja Old">Setharja Old</option>
    <option value="Shahdad Kot">Shahdad Kot</option>
    <option value="Shahdadpur">Shahdadpur</option>
    <option value="Shahpur Chakar">Shahpur Chakar</option>
    <option value="Shikarpur">Shikarpur</option>
    <option value="Sinjhoro">Sinjhoro</option>
    <option value="Sīta Road">Sīta Road</option>
    <option value="Sobhodero">Sobhodero</option>
    <option value="Sukkur">Sukkur</option>
    <option value="Talhar">Talhar</option>
    <option value="Tando Adam">Tando Adam</option>
    <option value="Tando Allahyar">Tando Allahyar</option>
    <option value="Tando Bago">Tando Bago</option>
    <option value="Tando Jam">Tando Jam</option>
    <option value="Tando Mitha Khan">Tando Mitha Khan</option>
    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
    <option value="Tangwani">Tangwani</option>
    <option value="Tharu Shah">Tharu Shah</option>
    <option value="Thatta">Thatta</option>
    <option value="Thul">Thul</option>
    <option value="Ubauro">Ubauro</option>
    <option value="Umarkot">Umarkot</option>
    <option value="Umerkot District">Umerkot District</option>
    <option value="Warah">Warah</option>
    <option value="">Select City</option>
    <option value="Ahmadpur Sial">Ahmadpur Sial</option>
    <option value="Ahmedpur East">Ahmedpur East</option>
    <option value="Alipur Chatha">Alipur Chatha</option>
    <option value="Arifwala">Arifwala</option>
    <option value="Attock Tehsil">Attock Tehsil</option>
    <option value="Baddomalhi">Baddomalhi</option>
    <option value="Bahawalnagar">Bahawalnagar</option>
    <option value="Bahawalpur">Bahawalpur</option>
    <option value="Bakhri Ahmad Khan">Bakhri Ahmad Khan</option>
    <option value="Basirpur">Basirpur</option>
    <option value="Basti Dosa">Basti Dosa</option>
    <option value="Begowala">Begowala</option>
    <option value="Bhakkar">Bhakkar</option>
    <option value="Bhalwal">Bhalwal</option>
    <option value="Bhawana">Bhawana</option>
    <option value="Bhera">Bhera</option>
    <option value="Bhopalwala">Bhopalwala</option>
    <option value="Burewala">Burewala</option>
    <option value="Chak Azam Saffo">Chak Azam Saffo</option>
    <option value="Chak Jhumra">Chak Jhumra</option>
    <option value="Chak One Hundred Twenty Nine Left">Chak One Hundred Twenty Nine Left</option>
    <option value="Chak Thirty-one -Eleven Left">Chak Thirty-one -Eleven Left</option>
    <option value="Chak Two Hundred Forty-Nine TDA">Chak Two Hundred Forty-Nine TDA</option>
    <option value="Chakwal">Chakwal</option>
    <option value="Chawinda">Chawinda</option>
    <option value="Chichawatni">Chichawatni</option>
    <option value="Chiniot">Chiniot</option>
    <option value="Chishtian">Chishtian</option>
    <option value="Choa Saidanshah">Choa Saidanshah</option>
    <option value="Chuhar Kana">Chuhar Kana</option>
    <option value="Chunian">Chunian</option>
    <option value="Daira Din Panah">Daira Din Panah</option>
    <option value="Dajal">Dajal</option>
    <option value="Dandot RS">Dandot RS</option>
    <option value="Darya Khan">Darya Khan</option>
    <option value="Daska">Daska</option>
    <option value="Daud Khel">Daud Khel</option>
    <option value="Daultala">Daultala</option>
    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
    <option value="Dhanot">Dhanot</option>
    <option value="Dhaunkal">Dhaunkal</option>
    <option value="Dhok Awan">Dhok Awan</option>
    <option value="Dijkot">Dijkot</option>
    <option value="Dinan Bashnoian Wala">Dinan Bashnoian Wala</option>
    <option value="Dinga">Dinga</option>
    <option value="Dipalpur">Dipalpur</option>
    <option value="Dullewala">Dullewala</option>
    <option value="Dunga Bunga">Dunga Bunga</option>
    <option value="Dunyapur">Dunyapur</option>
    <option value="Eminabad">Eminabad</option>
    <option value="Faisalabad">Faisalabad</option>
    <option value="Faqirwali">Faqirwali</option>
    <option value="Faruka">Faruka</option>
    <option value="Fazilpur">Fazilpur</option>
    <option value="Ferozewala">Ferozewala</option>
    <option value="Fort Abbas">Fort Abbas</option>
    <option value="Garh Maharaja">Garh Maharaja</option>
    <option value="Gojra">Gojra</option>
    <option value="Gujar Khan">Gujar Khan</option>
    <option value="Gujranwala">Gujranwala</option>
    <option value="Gujranwala Division">Gujranwala Division</option>
    <option value="Gujrat">Gujrat</option>
    <option value="Hadali">Hadali</option>
    <option value="Hafizabad">Hafizabad</option>
    <option value="Harnoli">Harnoli</option>
    <option value="Harunabad">Harunabad</option>
    <option value="Hasan Abdal">Hasan Abdal</option>
    <option value="Hasilpur">Hasilpur</option>
    <option value="Haveli Lakha">Haveli Lakha</option>
    <option value="Hazro">Hazro</option>
    <option value="Hujra Shah Muqeem">Hujra Shah Muqeem</option>
    <option value="Jahanian Shah">Jahanian Shah</option>
    <option value="Jalalpur Jattan">Jalalpur Jattan</option>
    <option value="Jalalpur Pirwala">Jalalpur Pirwala</option>
    <option value="Jampur">Jampur</option>
    <option value="Jand">Jand</option>
    <option value="Jandiala Sher Khan">Jandiala Sher Khan</option>
    <option value="Jaranwala">Jaranwala</option>
    <option value="Jatoi Shimali">Jatoi Shimali</option>
    <option value="Jauharabad">Jauharabad</option>
    <option value="Jhang">Jhang</option>
    <option value="Jhang Sadar">Jhang Sadar</option>
    <option value="Jhawarian">Jhawarian</option>
    <option value="Jhelum">Jhelum</option>
    <option value="Kabirwala">Kabirwala</option>
    <option value="Kahna Nau">Kahna Nau</option>
    <option value="Kahuta">Kahuta</option>
    <option value="Kalabagh">Kalabagh</option>
    <option value="Kalaswala">Kalaswala</option>
    <option value="Kaleke Mandi">Kaleke Mandi</option>
    <option value="Kallar Kahar">Kallar Kahar</option>
    <option value="Kalur Kot">Kalur Kot</option>
    <option value="Kamalia">Kamalia</option>
    <option value="Kamar Mushani">Kamar Mushani</option>
    <option value="Kamoke">Kamoke</option>
    <option value="Kamra">Kamra</option>
    <option value="Kanganpur">Kanganpur</option>
    <option value="Karor">Karor</option>
    <option value="Kasur">Kasur</option>
    <option value="Keshupur">Keshupur</option>
    <option value="Khairpur Tamiwali">Khairpur Tamiwali</option>
    <option value="Khandowa">Khandowa</option>
    <option value="Khanewal">Khanewal</option>
    <option value="Khanga Dogran">Khanga Dogran</option>
    <option value="Khangarh">Khangarh</option>
    <option value="Khanpur">Khanpur</option>
    <option value="Kharian">Kharian</option>
    <option value="Khewra">Khewra</option>
    <option value="Khurrianwala">Khurrianwala</option>
    <option value="Khushab">Khushab</option>
    <option value="Kohror Pakka">Kohror Pakka</option>
    <option value="Kot Addu Tehsil">Kot Addu Tehsil</option>
    <option value="Kot Ghulam Muhammad">Kot Ghulam Muhammad</option>
    <option value="Kot Mumin">Kot Mumin</option>
    <option value="Kot Radha Kishan">Kot Radha Kishan</option>
    <option value="Kot Rajkour">Kot Rajkour</option>
    <option value="Kot Samaba">Kot Samaba</option>
    <option value="Kot Sultan">Kot Sultan</option>
    <option value="Kotli Loharan">Kotli Loharan</option>
    <option value="Kundian">Kundian</option>
    <option value="Kunjah">Kunjah</option>
    <option value="Ladhewala Waraich">Ladhewala Waraich</option>
    <option value="Lahore">Lahore</option>
    <option value="Lala Musa">Lala Musa</option>
    <option value="Lalian">Lalian</option>
    <option value="Layyah">Layyah</option>
    <option value="Layyah District">Layyah District</option>
    <option value="Liliani">Liliani</option>
    <option value="Lodhran">Lodhran</option>
    <option value="Mailsi">Mailsi</option>
    <option value="Malakwal">Malakwal</option>
    <option value="Malakwal City">Malakwal City</option>
    <option value="Mamu Kanjan">Mamu Kanjan</option>
    <option value="Mananwala">Mananwala</option>
    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
    <option value="Mandi Bahauddin District">Mandi Bahauddin District</option>
    <option value="Mangla">Mangla</option>
    <option value="Mankera">Mankera</option>
    <option value="Mehmand Chak">Mehmand Chak</option>
    <option value="Mian Channun">Mian Channun</option>
    <option value="Mianke Mor">Mianke Mor</option>
    <option value="Mianwali">Mianwali</option>
    <option value="Minchinabad">Minchinabad</option>
    <option value="Mitha Tiwana">Mitha Tiwana</option>
    <option value="Moza Shahwala">Moza Shahwala</option>
    <option value="Multan">Multan</option>
    <option value="Multan District">Multan District</option>
    <option value="Muridke">Muridke</option>
    <option value="Murree">Murree</option>
    <option value="Mustafabad">Mustafabad</option>
    <option value="Muzaffargarh">Muzaffargarh</option>
    <option value="Nankana Sahib">Nankana Sahib</option>
    <option value="Narang Mandi">Narang Mandi</option>
    <option value="Narowal">Narowal</option>
    <option value="Naushahra Virkan">Naushahra Virkan</option>
    <option value="Nazir Town">Nazir Town</option>
    <option value="Okara">Okara</option>
    <option value="Pakki Shagwanwali">Pakki Shagwanwali</option>
    <option value="Pakpattan">Pakpattan</option>
    <option value="Pasrur">Pasrur</option>
    <option value="Pattoki">Pattoki</option>
    <option value="Phalia">Phalia</option>
    <option value="Pind Dadan Khan">Pind Dadan Khan</option>
    <option value="Pindi Bhattian">Pindi Bhattian</option>
    <option value="Pindi Gheb">Pindi Gheb</option>
    <option value="Pir Mahal">Pir Mahal</option>
    <option value="Qadirpur Ran">Qadirpur Ran</option>
    <option value="Qila Didar Singh">Qila Didar Singh</option>
    <option value="Rabwah">Rabwah</option>
    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
    <option value="Rahimyar Khan District">Rahimyar Khan District</option>
    <option value="Raiwind">Raiwind</option>
    <option value="Raja Jang">Raja Jang</option>
    <option value="Rajanpur">Rajanpur</option>
    <option value="Rasulnagar">Rasulnagar</option>
    <option value="Rawalpindi">Rawalpindi</option>
    <option value="Rawalpindi District">Rawalpindi District</option>
    <option value="Renala Khurd">Renala Khurd</option>
    <option value="Rojhan">Rojhan</option>
    <option value="Sadiqabad">Sadiqabad</option>
    <option value="Sahiwal">Sahiwal</option>
    <option value="Sambrial">Sambrial</option>
    <option value="Sangla Hill">Sangla Hill</option>
    <option value="Sanjwal">Sanjwal</option>
    <option value="Sarai Alamgir">Sarai Alamgir</option>
    <option value="Sarai Sidhu">Sarai Sidhu</option>
    <option value="Sargodha">Sargodha</option>
    <option value="Shahkot Tehsil">Shahkot Tehsil</option>
    <option value="Shahpur">Shahpur</option>
    <option value="Shahr Sultan">Shahr Sultan</option>
    <option value="Shakargarh">Shakargarh</option>
    <option value="Sharqpur">Sharqpur</option>
    <option value="Sheikhupura">Sheikhupura</option>
    <option value="Shorkot">Shorkot</option>
    <option value="Shujaabad">Shujaabad</option>
    <option value="Sialkot">Sialkot</option>
    <option value="Sillanwali">Sillanwali</option>
    <option value="Sodhra">Sodhra</option>
    <option value="Sukheke Mandi">Sukheke Mandi</option>
    <option value="Surkhpur">Surkhpur</option>
    <option value="Talagang">Talagang</option>
    <option value="Talamba">Talamba</option>
    <option value="Tandlianwala">Tandlianwala</option>
    <option value="Taunsa">Taunsa</option>
    <option value="Toba Tek Singh">Toba Tek Singh</option>
    <option value="Umerkot">Umerkot</option>
    <option value="Vihari">Vihari</option>
    <option value="Wah">Wah</option>
    <option value="Warburton">Warburton</option>
    <option value="Wazirabad">Wazirabad</option>
    <option value="West Punjab">West Punjab</option>
    <option value="Yazman">Yazman</option>
    <option value="Zafarwal">Zafarwal</option>
    <option value="Zahir Pir">Zahir Pir</option>
											
										</select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
        <div class="size-204 respon6-next mt-3 mb-3">
                                         <div class="rs1-select2 bor8 bg0">
                                        <select class="js-select2" name="time">
											<option>Insurance Type</option>
											<option>My insurance covers rentals</option>
											<option>My insurance doesn't cover rentals or I don't have an insurance</option>
											<option>I have an insurance and don't know whether it covers rentals</option>
											
										</select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div> 
        <label>Postal Code </label>


        <input type="text" class="typecol" placeholder="1478pp">
        <label>Address </label>
        <input type="text" class="typecol" placeholder="North Karachi">
        <label>Phone </label>
        <input type="email" class="typecol" placeholder="0331-8347850">




        <!-- <div id="dropdown"></div> -->


        <!-- img upload start -->
        <div class="center mb-5 mt-3">
            <div class="form-input">
                <div class="preview">
                    <img id="file-ip-1-preview">
                </div>
                <label for="file-ip-1">Proof of ID Front</label>
                <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview1(event);">

            </div>
        </div>
        <!-- img upload end -->
        <!-- img upload start -->
        <div class="center">
            <div class="form-input">
                <div class="preview1">
                    <img id="file-ip-2-preview">
                </div>
                <label for="file-ip-2">Proof of ID Back</label>
                <input type="file" id="file-ip-2" accept="image/*" onchange="showPreview(event);">

            </div>
        </div>
        <!-- img upload end -->





        <div style="margin-top:25px;width:100%;display: flex;justify-content:center;align-items:center;height: 100%;">
            <button id="btn1log"><a href="profile.php" style="text-decoration:none;color:white;font-size:22px">Update</a></button>
        </div>

    </div>


    <div id="gap1"></div>

<?php include 'footer.php' ?>


    <script type="text/javascript">
        function showPreview1(event) {
            console.log(44)
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>


    <script>
        function showPreview(event) {
            console.log(55)
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-2-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>

<script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>




    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>



</body>

</html>