<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link rel="stylesheet" href="<?php echo e(asset('../resources/assets/')); ?>/styles/jquery.sliderTabs.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="<?php echo e(asset('../resources/assets/')); ?>/jquery.sliderTabs.min.js"></script>
        <?php echo Html::style(asset('master.css')); ?>

  
        <script>
        $(document).ready(function()
                 {
            
                    var slider = $("div#mySliderTabs").sliderTabs();
                    var slider = $("div#mySliderTabs").sliderTabs({
                    autoplay: true,
                    mousewheel: false,
                    position: "bottom"
                });
            
            
        });
        
        </script>
       
    </head>
    <body>
        <div class="container">
            <h2>VAF Application Form</h2>
             <?php echo Form::open(array('url' => 'app/submit', 'method' => 'post','class'=>'row','id'=>'submit_property_form','file'=>true, 'enctype'=>"multipart/form-data" )); ?>

<div id="mySliderTabs">
  <!-- Unordered list representing the tabs -->
  <ul>
    <li><a href="#customerdetails">Customer Details</a></li>
       <li><a href="#customerempdetails">Employemnet & Income Expense Details</a></li>
    <li><a href="#bank">Bank Account Details</a></li>
    <li><a href="#vehicle">Vehicle Details</a></li>
  </ul>

  <!-- Afterwards, include the div panels representing the panels of our slider -->
  <div id="customerdetails">
   
<div class="row">
        <div class="col">Third Party Email :</div>
        <div class="col"><?php echo Form::text('thirdPartyEmail', '', array('class' => 'awesome', 'placeholder' => "Customer's First Name")); ?></div>
        <div class="col">Advertisement Reference :</div>
        <div class="col"><?php echo Form::text('advertisementReference', '', array('class' => 'awesome', 'placeholder' => "Customer's Middle Name")); ?></div>
 </div>

      
<div class="row">
        <div class="col">Select Title :</div>
        <div class="col"><?php echo Form::select('customerTitle', array('' => 'Select','Advocate' => 'Advocate', 'Doctor' => 'Doctor', 'Mr' => 'Mr', 'Professor' => 'Professor', 'Reverend' => 'Reverend', 'Miss' => 'Miss', 'Mrs' => 'Mrs', 'Unknown' => 'Unknown', 'MS' => 'MS', 'SIR' => 'SIR'), null, array('class' => 'awesome')); ?></div>
        <div class="col">Middle Name :</div>
        <div class="col"><?php echo Form::text('firstname', '', array('class' => 'awesome', 'placeholder' => "Customer's First Name")); ?></div>
 </div>

      
  <div class="row">
        <div class="col">Enter Middle Name :</div>
        <div class="col"><?php echo Form::text('middlename', '', array('class' => 'awesome', 'placeholder' => "Customer's Middle Name")); ?></div>
        <div class="col">Customer Race Ethnic Group :</div>
        <div class="col"><?php echo Form::select('customerRaceEthnicGroup', array('' => 'Select','White' => 'White', 'Coloured' => 'Coloured', 'Black' => 'Black', 'Asian' => 'Asian'), null, array('class' => 'awesome')); ?></div>
 </div>      

  <div class="row">
        <div class="col">Customer Nationality :</div>
        <div class="col"><?php echo Form::select('customerNationality', array('' => 'Select',"SOUTH AFRICA"=>"SOUTH AFRICA", "AFGANISTAN"=>"AFGANISTAN", "ALBANIA"=>"ALBANIA", "ALGERIA"=>"ALGERIA","AMERICAN SAMOA"=>"AMERICAN SAMOA", "ANDORRA"=>"ANDORRA", "ANGOLA"=>"ANGOLA", "ANTIGUA (WEST INDIES)"=>"ANTIGUA (WEST INDIES)", "ARGENTINA"=>"ARGENTINA","AUSTRALIA"=>"AUSTRALIA", "AUSTRIA"=> "AUSTRIA","AZORES"=>"AZORES", "BAHAMAS"=>"BAHAMAS", "BAHRAIN"=>"BAHRAIN", "BANGLADESH"=>"BANGLADESH", "BARBADOS"=>"BARBADOS","BELEARIC ISLAND (SPAIN)"=>"BELEARIC ISLAND (SPAIN)","BELGIUM"=>"BELGIUM","BELIZE"=>"BELIZE", "BENIN"=>"BENIN", "BERMUDA"=>"BERMUDA","BHUTAN"=>"BHUTAN","BOLIVIA"=>"BOLIVIA","BOTSWANA"=>"BOTSWANA","BRAZIL"=>"BRAZIL","BRUNEI"=>"BRUNEI","BULGARIA"=>"BULGARIA","BURUNDI"=>"BURUNDI","CAMEROON (UNITED REPUBLIC OF)"=>"CAMEROON (UNITED REPUBLIC OF)","CANADA"=>"CANADA","CAPE VERDE"=>"CAPE VERDE","CAYMAN ISLAND (WEST INDIES)"=>"CAYMAN ISLAND (WEST INDIES)", "CENTRAL AFRICAN REPUBLIC"=>"CENTRAL AFRICAN REPUBLIC","CHAD"=>"CHAD", "CHILE"=>"CHILE","CHINA"=>"CHINA","CHRISTMAS ISLAND"=>"CHRISTMAS ISLAND","COCOS (KEELING) ISLAND"=>"COCOS (KEELING) ISLAND","COLUMBIA"=>"COLUMBIA", "COMOROS"=>"COMOROS", "CONGO (PEOPLE DEMOCRATIC REPUBLIC OF)"=>"CONGO (PEOPLE DEMOCRATIC REPUBLIC OF)", "COOK ISLAND"=>"COOK ISLAND","COSTA RICA"=>"COSTA RICA","CUBA"=>"CUBA","CYPRUS"=>"CYPRUS", "CZECHOSLOVAKIA"=>"CZECHOSLOVAKIA","DENMARK"=>"DENMARK","DJIBOUTI"=>"DJIBOUTI","DOMINICA (WEST INDIES)"=>"DOMINICA (WEST INDIES)","DOMINICAN REPUBLIC"=>"DOMINICAN REPUBLIC", "EAST TIMOR"=>"EAST TIMOR","ECUADOR"=>"ECUADOR", "EGYPT"=>"EGYPT","EL SALVADOR"=>"EL SALVADOR","EQUATORIAL GUINEA"=>"EQUATORIAL GUINEA","ETHIOPIA"=>"ETHIOPIA", "FALKLAND ISLAND"=>"FALKLAND ISLAND","FEAROE ISLAND"=>"FEAROE ISLAND", "FIJI"=>"FIJI","FINLAND"=>"FINLAND","FRANCE"=>"FRANCE","FRENCH GUIANA"=>"FRENCH GUIANA","FRENCH POLYNESIA"=>"FRENCH POLYNESIA","GABON"=>"GABON","GAMBIA"=>"GAMBIA","GERMANY (DEMOCRATIC)"=>"GERMANY (DEMOCRATIC)", "GHANA"=>"GHANA","GIBRALTAR"=>"GIBRALTAR", "GRANADA (WEST INDIES)"=>"GRANADA (WEST INDIES)", "GREECE"=>"GREECE","GREENLAND"=>"GREENLAND","GUADELOUPE (MARIE-GALANTE AND ST BARTHELEM)"=>"GUADELOUPE (MARIE-GALANTE AND ST BARTHELEM)","GUAM"=>"GUAM", "GUATEMALA"=>"GUATEMALA","GUINEA"=>"GUINEA","GUINEA-BISSAU"=>"GUINEA-BISSAU","GUYANA"=>"GUYANA","HAITI"=>"HAITI","HONDURAS"=>"HONDURAS","HONG KONG"=>"HONG KONG","HUNGARY"=>"HUNGARY","ICELAND"=>"ICELAND","INDIA"=>"INDIA", "INDONESIA"=>"INDONESIA", "IRAN"=>"IRAN","IRAQ"=>"IRAQ","IRELAND"=>"IRELAND","ISREAL"=>"ISREAL","ITALY"=>"ITALY","JAMAICA"=>"JAMAICA","JAPAN"=>"JAPAN", "JORDAN"=>"JORDAN", "KENYA"=>"KENYA","KIRIBATI"=>"KIRIBATI","KOREA (NORTH DEMOCRATIC PEOPLE REPUBLIC)"=>"KOREA (NORTH DEMOCRATIC PEOPLE REPUBLIC)","KOREA (SOUTH DEMOCRATIC PEOPLE REPUBLIC)"=>"KOREA (SOUTH DEMOCRATIC PEOPLE REPUBLIC)","KUWAIT"=>"KUWAIT","LAO (PEOPLE DEMOCRATIC REPUBLIC)"=>"LAO (PEOPLE DEMOCRATIC REPUBLIC)","LEBANON"=>"LEBANON","LESOTHO"=>"LESOTHO","LIBERIA"=>"LIBERIA","LIBYA"=>"LIBYA","LIECHTENSTEIN"=>"LIECHTENSTEIN","LUXEMBORG"=>"LUXEMBORG","MACAU"=>"MACAU","MADAGASCAR"=>"MADAGASCAR","MALAWI (REPUBLIC OF)"=>"MALAWI (REPUBLIC OF)","MALAYSIA"=>"MALAYSIA","MALDIVES"=>"MALDIVES","MALI (REPUBLIC OF)"=>"MALI (REPUBLIC OF)","MALTA-GOZO"=>"MALTA-GOZO","MARTINIQUE (FRENCH WEST INDIES)"=>"MARTINIQUE (FRENCH WEST INDIES)","MAURITANIA"=>"MAURITANIA","MAURITIUS"=>"MAURITIUS", "MEXICO"=>"MEXICO","MONACO"=>"MONACO", "MONGOLIA"=> "MONGOLIA", "MONTSERRAT (WEST INDIES)"=> "MONTSERRAT (WEST INDIES)","MOROCCO"=>"MOROCCO","MOZAMBIQUE"=>"MOZAMBIQUE","NAMIBIA"=>"NAMIBIA","NAURU ISLAND"=>"NAURU ISLAND", "NEPAL"=>"NEPAL", "NETHERLANDS"=>"NETHERLANDS","NETHERLANDS ANTILLES"=>"NETHERLANDS ANTILLES","NEW CALEDONIA"=>"NEW CALEDONIA","NEW ZEALAND"=>"NEW ZEALAND","NICARAGUA"=>"NICARAGUA","NIGER"=>"NIGER","NIGERIA"=>"NIGERIA","NIUE ISLAND"=>"NIUE ISLAND","NORFOLK ISLAND"=>"NORFOLK ISLAND", "NORWAY"=>"NORWAY", "OMAN"=>"OMAN", "PAKISTAN"=>"PAKISTAN","PALAU ISLANDS"=>"PALAU ISLANDS","PANAMA"=>"PANAMA","PAPUA NEW GUINEA"=>"PAPUA NEW GUINEA","PARAGUAY"=>"PARAGUAY","PERU"=>"PERU","PHILLIPINES"=>"PHILLIPINES","POLAND"=>"POLAND", "PORTUGAL"=>"PORTUGAL", "PUERTO RICO"=>"PUERTO RICO", "QATAR"=>"QATAR","REUNION"=>"REUNION","ROMANIA"=>"ROMANIA","RWANDA"=>"RWANDA", "SAMOA"=>"SAMOA","SAN MARINO"=>"SAN MARINO", "SAO TOME AND PRINCIPE"=>"SAO TOME AND PRINCIPE", "SAUDI ARABIA"=>"SAUDI ARABIA","SENEGAL"=>"SENEGAL","SEYCHELLES"=>"SEYCHELLES","SIERRA LEONNE"=>"SIERRA LEONNE","SINGAPORE"=>"SINGAPORE", "SOLOMON ISLANDS"=>"SOLOMON ISLANDS","SOMALIA"=>"SOMALIA", "SPAIN"=>"SPAIN","SRI LANKA (CEYLON)"=>"SRI LANKA (CEYLON)", "ST HELENA"=>"ST HELENA","ST KITTS-NEVAS ANGUILLA"=>"ST KITTS-NEVAS ANGUILLA","ST LUCIA"=>"ST LUCIA","SURINAM REPUBLIC"=>"SURINAM REPUBLIC", "SWAZI HOMELAND"=>"SWAZI HOMELAND","SWEDEN"=>"SWEDEN", "SWITZERLAND"=>"SWITZERLAND","SYRIAN ARAB REPUBLIC"=>"SYRIAN ARAB REPUBLIC","TAIWAN"=>"TAIWAN", "TANZANIA (UNITED REPUBLIC OF)"=>"TANZANIA (UNITED REPUBLIC OF)","THAILAND"=>"THAILAND", "TOGO (REPUBLIC OF)"=>"TOGO (REPUBLIC OF)","TOKELAU ISLANDS"=>"TOKELAU ISLANDS","TONGA"=>"TONGA", "TRINIDAD AND TOBAGO"=>"TRINIDAD AND TOBAGO", "TUNISIA"=>"TUNISIA", "TURKEY"=>"TURKEY", "TURKS AND CAICOS ISLANDS"=>"TURKS AND CAICOS ISLANDS", "TUVALU ISLANDS"=>"TUVALU ISLANDS", "UGANDA"=>"UGANDA","UKRANIAN USSR"=>"UKRANIAN USSR", "UNITED ARAB EMIRATES"=>"UNITED ARAB EMIRATES","UNITED KINGDOM"=>"UNITED KINGDOM","UNITED STATES VIRGIN ISLANDS"=>"UNITED STATES VIRGIN ISLANDS", "URUGUAY"=>"URUGUAY", "USA"=>"USA","VANUATU ISLAND"=>"VANUATU ISLAND", "VENEZUELA"=>"VENEZUELA","VIETNAM"=>"VIETNAM","WALLIS FUTUNA ISLANDS"=>"WALLIS FUTUNA ISLANDS","WESTERN SAHARA"=>"WESTERN SAHARA","YEMEN"=>"YEMEN","YUGOSLAVIA"=>"YUGOSLAVIA","ZAMBIA"=>"ZAMBIA","ZIMBABWE"=>"ZIMBABWE"), null, array('class' => 'awesome')); ?></div>
        <div class="col">Is Customer Graduate? :</div>
        <div class="col"><?php echo Form::select('customerGraduate', array('' => 'Select','Yes' => 'Yes', 'No' => 'No'), null, array('class' => 'awesome')); ?></div>
 </div>    
       
<div class="row">
        <div class="col">Customer Marital Status :</div>
        <div class="col"><?php echo Form::select('customerMaritalStatus', array('' => 'Select','Married' => 'Married', 'Divorced' => 'Divorced', 'Single' => 'Single', 'Widow/er' => 'Widow/er'), null, array('class' => 'awesome')); ?></div>
        <div class="col">Company Marital Contract:</div>
        <div class="col"><?php echo Form::select('customerMaritalContract', array('' => 'Select','Antenuptual Contract' => 'Antenuptual Contract', 'In Community of property' => 'In Community of property', 'Traditional Marriage' => 'Traditional Marriage'), null, array('class' => 'awesome')); ?></div>
 </div>
<div class="row">
        <div class="col">Enter Company Name :</div>
        <div class="col"><?php echo Form::text('companyName', '', array('class' => 'awesome', 'placeholder' => "Customer's First Name")); ?></div>
        <div class="col">Company Registration no :</div>
        <div class="col"><?php echo Form::text('companyRegistrationNumber', '', array('class' => 'awesome', 'placeholder' => "Customer's Middle Name")); ?></div>
 </div>

<div class="row">
        <div class="col">Customer Preferred Language :</div>
        <div class="col"><?php echo Form::select('customerPreferredLanguage', array('' => 'Select','Afrikaans' => 'Afrikaans', 'English' => 'English', 'Zulu' => 'Zulu', 'Tswana' => 'Tswana', 'Xhosa' => 'Xhosa', 'South Sotho' => 'South Sotho'), null, array('class' => 'awesome')); ?></div>
        <div class="col">Customer Gender :</div>
        <div class="col"><?php echo Form::select('customerGender', array('' => 'Select','Male' => 'Male', 'Female' => 'Female'), null, array('class' => 'awesome')); ?></div>
 </div>
           
<div class="row">
        <div class="col">Customer Id Type :</div>
        <div class="col"><?php echo Form::select('customerIdType', array('' => 'Select Id Type','South African Valid ID' => 'South African Valid ID', 'Passport' => 'Passport'), null, array('class' => 'awesome')); ?></div>
        <div class="col">Customer Id Verified :</div>
        <div class="col"><?php echo Form::select('customerIdVerified', array('' => 'Select','Yes' => 'Yes', 'No' => 'No'), null, array('class' => 'awesome')); ?></div>
 </div>      
<div class="row">
        <div class="col">Customer Driving License Approved :</div>
        <div class="col"><?php echo Form::select('customerDriversLicenseVerified', array('' => 'Select','Yes' => 'Yes', 'No' => 'No'), null, array('class' => 'awesome')); ?></div>
        <div class="col">Article Type :</div>
        <div class="col"><?php echo Form::select('articleType', array('' => 'Select','Motor Vehicle' => 'Motor Vehicle', 'Light Duty Vehicle' => 'Light Duty Vehicle', 'MotorCycle' => 'MotorCycle', 'Boats' => 'Boats', 'Caravans & Camping Equipment' => 'Caravans & Camping Equipment'), null, array('class' => 'awesome')); ?></div>
 </div>
<div class="row">
        <div class="col">Article Condition :</div>
        <div class="col"><?php echo Form::select('articleCondition', array('' => 'Select','New' => 'New', 'Used' => 'Used'), null, array('class' => 'awesome')); ?></div>
        <div class="col">Article Use :</div>
        <div class="col"><?php echo Form::select('articleUse', array('' => 'Select','Private' => 'Private', 'Business' => 'Business', 'Taxi' => 'Taxi'), null, array('class' => 'awesome')); ?></div>
 </div>
    
<div class="row">
        <div class="col">Enter Name :</div>
        <div class="col"><?php echo Form::text('surname', '', array('class' => 'awesome', 'placeholder' => "Customer's Surname")); ?></div>
        <div class="col">Enter Customer's Id No:</div>
        <div class="col"><?php echo Form::text('idno', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
 </div>
      
      
<div class="row">
        <div class="col">Date of Birth :</div>
        <div class="col"><?php echo Form::date('date_of_birth', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Enter Customer's Id No:</div>
        <div class="col"><?php echo Form::text('idno', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
 </div>

      
<div class="row">
        <div class="col">Date of Marriage :</div>
        <div class="col"><?php echo Form::date('date_of_birth', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Enter Customer's Mobile No:</div>
        <div class="col"><?php echo Form::text('mobile', '', array('class' => 'awesome', 'placeholder' => "Customer's mobile No")); ?></div>
 </div>
<div class="row">
        <div class="col">Customer Preferred Contact Method :</div>
        <div class="col"><?php echo Form::select('customerPreferredContactMethod', array('' => 'Select','Cell phone' => 'Cell phone', 'Home phone' => 'Home phone', 'Work phone' => 'Work phone', 'Email' => 'Email', 'Postal' => 'Postal'), null, array('class' => 'awesome')); ?></div>
        <div class="col">Customer Mobile Type:</div>
        <div class="col"><?php echo Form::select('mobileType', array('' => 'Select','Pay as you go' => 'Pay as you go', 'Contract' => 'Contract'), null, array('class' => 'awesome')); ?></div>
 </div>
      
      
<div class="row">
        <div class="col">Residential Phone No :</div>
        <div class="col"><?php echo Form::text('phone', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Enter Customer's Email Id:</div>
        <div class="col"><?php echo Form::text('email', '', array('class' => 'awesome', 'placeholder' => "Customer's Email Id")); ?></div>
 </div>

<div class="row">
        <div class="col">Office Phone No :</div>
        <div class="col"><?php echo Form::text('ophone', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Enter Customer's Email Id:</div>
        <div class="col"><?php echo Form::text('email', '', array('class' => 'awesome', 'placeholder' => "Customer's Email Id")); ?></div>
 </div>
<div class="row">
        <div class="col">Work Phone is a cell :</div>
        <div class="col"><?php echo Form::select('workPhonIsACell', array('' => 'Select','Yes' => 'Yes', 'No' => 'No'), null, array('class' => 'awesome')); ?></div>
        <div class="col">Spousal Consent Indicator:</div>
        <div class="col"><?php echo Form::select('spousalConsentIndicator', array('' => 'Select','Yes' => 'Yes', 'No' => 'No'), null, array('class' => 'awesome')); ?></div>
 </div>
      
<div class="row">
        <div class="col">Customer' Residential Address Line 1:</div>
        <div class="col"><?php echo Form::text('address1', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Customer' Residential Address Line 2:</div>
        <div class="col"><?php echo Form::text('address2', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
    
</div>
     <div class="row">
        <div class="col">Same as Residential Address:</div>
        <div class="col"><?php echo Form::select('sameAsRes', array('' => 'Select','Use Address Below' => 'Use Address Below', 'Use Residential Address' => 'Use Residential Address'), null, array('class' => 'awesome')); ?></div>
         <div class="col">Owner Tenant Lodger</div>
         <div class="col"><?php echo Form::select('ownerTenantLodger', array('' => 'Select','Owner - Bonded' => 'Owner - Bonded', 'Owner - Bond Free' => 'Owner - Bond Free', 'Tenant' => 'Tenant', 'Lodger' => 'Lodger'), null, array('class' => 'awesome')); ?></div>
      
    
</div>    
      
<div class="row">
        <div class="col">Joint Home Indicator:</div>
        <div class="col"><?php echo Form::select('jointHomeloanIndicator', array('' => 'Select','Yes' => 'Yes', 'No' => 'No'), null, array('class' => 'awesome')); ?></div>
         <div class="col">Owner Tenant Lodger</div>
         <div class="col"><?php echo Form::select('ownerTenantLodger', array('' => 'Select','Owner - Bonded' => 'Owner - Bonded', 'Owner - Bond Free' => 'Owner - Bond Free', 'Tenant' => 'Tenant', 'Lodger' => 'Lodger'), null, array('class' => 'awesome')); ?></div>
      
    
</div> 
<div class="row">
        <div class="col">Residential Owner:</div>
        <div class="col"><?php echo Form::select('residentialOwner', array('' => 'Select','Self' => 'Self', 'Both' => 'Both', 'Spouse' => 'Spouse', 'Other' => 'Other'), null, array('class' => 'awesome')); ?></div>
         <div class="col">Bond Lenders:</div>
         <div class="col"><?php echo Form::select('bondLenders', array('' => 'Select',"ABN AMRO BANK"=>"ABN AMRO BANK",
            "ABSA"=>"ABSA",
            "AFRICAN BANK"=>"AFRICAN BANK",
            "BANK WINDHOEK"=>"BANK WINDHOEK",
            "BIDVEST BANK"=>"BIDVEST BANK",
            "BOE BANK (NEDBANK)"=>"BOE BANK (NEDBANK)",
            "CAPITEC BANK"=>"CAPITEC BANK",
            "CITIBANK"=>"CITIBANK",
            "FBC FIDELITY BANK LTD"=>"FBC FIDELITY BANK LTD",
            "FIRST NATION BANK"=>"FIRST NATION BANK",
            "GRINDROD BANK"=>"GRINDROD BANK",
            "HABIB OVERSEAS BANK"=>"HABIB OVERSEAS BANK",
            "HBZ BANK"=>"HBZ BANK",
            "INVESTEC BANK LIMITED"=>"INVESTEC BANK LIMITED",
            "MERCANTILE BANK"=>"MERCANTILE BANK",
            "MTN BANKING  (Standard Bank)"=>"MTN BANKING  (Standard Bank)",
            "NBS (Nedbank)"=>"NBS (Nedbank)",
            "NEDBANK"=>"NEDBANK",
            "NEDBANK (Lesotho)"=>"NEDBANK (Lesotho)",
            "NEDBANK (Namibia)"=>"NEDBANK (Namibia)",
            "NEDBANK (Swaziland)"=>"NEDBANK (Swaziland)",
            "PEP BANK (NEDBANK)"=>"PEP BANK (NEDBANK)",
            "PERMANENT BANK" =>"PERMANENT BANK",
            "RESERVE BANK"=>"RESERVE BANK",
            "SA BANK OF ATHENS"=>"SA BANK OF ATHENS",
            "SA POST OFFICE"=>"SA POST OFFICE",
            "STANDARD BANK"=>"STANDARD BANK",
            "STANDARD BANK (SWAZILAND)"=>"STANDARD BANK (SWAZILAND)",
            "STANDARD CHARTERED BANK (20TWENTY)"=>"STANDARD CHARTERED BANK (20TWENTY)",
            "STANDARD LESOTHO BANK LIMITED"=>"STANDARD LESOTHO BANK LIMITED",
            "TEBA BANK"=>"TEBA BANK",
            "Wesbank"=>"Wesbank",
            "MFC"=>"MFC",
            "OTHER"=>"OTHER"), null, array('class' => 'awesome')); ?></div>
      
    
</div> 
<div class="row">
        <div class="col">Customer' Postal Address Line 1:</div>
        <div class="col"><?php echo Form::text('postal1', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Customer' Postal Address Line 2:</div>
        <div class="col"><?php echo Form::text('postal2', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>      
<div class="row">
        <div class="col">Customer' Residential Address City:</div>
        <div class="col"><?php echo Form::text('rcity', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Customer' Postal Address City:</div>
        <div class="col"><?php echo Form::text('pcity', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
<div class="row">
        <div class="col">Customer' Residential Address Suburb:</div>
        <div class="col"><?php echo Form::text('rsuburb', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Customer' Postal Address Suburb:</div>
        <div class="col"><?php echo Form::text('psuburb', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
    
<div class="row">
        <div class="col">Customer' Residential Postal Code:</div>
        <div class="col"><?php echo Form::text('rpcode', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Customer' Postal Address Postal Code:</div>
        <div class="col"><?php echo Form::text('ppcode', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
<div class="row">
        <div class="col">Customer Period At Previous Address Years:</div>
        <div class="col"><?php echo Form::text('cpapay', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">customer Period At Previous Address Months:</div>
        <div class="col"><?php echo Form::text('cpapam', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
<div class="row">
        <div class="col">Customer Period At Current Address Years:</div>
        <div class="col"><?php echo Form::text('cpacay', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">customer Period At Current Address Months:</div>
        <div class="col"><?php echo Form::text('cpacam', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
<div class="row">
        <div class="col">Customer Passport Issue Date:</div>
        <div class="col"><?php echo Form::date('customerPassportDateOfIssue', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">customer Passport Valid Till:</div>
        <div class="col"><?php echo Form::date('passportValidToDate', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
<div class="row">
        <div class="col">Customer Residence Permit Type:</div>
        <div class="col"><?php echo Form::text('customerResidencePermitType', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Customer Residence Permit No:</div>
        <div class="col"><?php echo Form::date('customerResidencePermitNumber', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
      <div class="row">
        <div class="col">Customer Residence Date of Issue:</div>
        <div class="col"><?php echo Form::text('customerResidencePermitDateOfIssue', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Customer Residence Permit Expiry Date:</div>
        <div class="col"><?php echo Form::date('customerResidencePermitExpiryDate', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
    <div class="row">
        <div class="col">Customer Work Experience Expiry Date:</div>
        <div class="col"><?php echo Form::text('customerWorkContractExpiryDate', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
   
    </div>
    <div class="row">
        <div class="col">Spouse First Name :</div>
        <div class="col"><?php echo Form::text('spouseFirstNames', '', array('class' => 'awesome', 'placeholder' => "Customer's Surname")); ?></div>
        <div class="col">Spouse Middle Name:</div>
        <div class="col"><?php echo Form::text('spouseMiddleName', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div> 
    <div class="row">
        <div class="col">Spouse First Name :</div>
        <div class="col"><?php echo Form::text('spouseFirstNames', '', array('class' => 'awesome', 'placeholder' => "Customer's Surname")); ?></div>
        <div class="col">Spouse Middle Name:</div>
        <div class="col"><?php echo Form::text('spouseMiddleName', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div> 
      <div class="row">
        <div class="col">Spouse Surname :</div>
        <div class="col"><?php echo Form::text('spouseSurname', '', array('class' => 'awesome', 'placeholder' => "Customer's Surname")); ?></div>
        <div class="col">Spouse Id Type:</div>
        <div class="col"><?php echo Form::text('spouseIdType', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
        <div class="row">
        <div class="col">Spouse Id No :</div>
        <div class="col"><?php echo Form::text('spouseIdNo', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Spouse Date of Birth:</div>
        <div class="col"><?php echo Form::date('spousedateOfBirth', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
     <div class="row">
        <div class="col">Spouse Phone No:</div>
        <div class="col"><?php echo Form::text('spousePhoneNumber', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Spouse Date of Birth:</div>
        <div class="col"><?php echo Form::date('spousedateOfBirth', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    

    <!-- rest of the panel content -->
  </div>
    
    
    
<!------------------------------ Employement Details----------------------------->
    <div id="customerempdetails">
   
<div class="row">
        <div class="col">Employer Name :</div>
        <div class="col"><?php echo Form::text('employerName', '', array('class' => 'awesome', 'placeholder' => "Customer's First Name")); ?></div>
        
 </div>
    
<div class="row">
        <div class="col">Employer Address Line 1 :</div>
        <div class="col"><?php echo Form::text('employerAddressLine1', '', array('class' => 'awesome', 'placeholder' => "Customer's Surname")); ?></div>
        <div class="col">Employer Address Line 2 :</div>
        <div class="col"><?php echo Form::text('employerAddressLine2', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
 </div>
 
      
<div class="row">
        <div class="col">Customer Occupation :</div>
        <div class="col"><?php echo Form::select('customerOccupation', array('' => 'Select', "Able Seaman"=>"Able Seaman",
            "Accommodation Occupations"=>"Accommodation Occupations",
            "Accountant/Auditor"=>"Accountant/Auditor",
            "Actor or Actress"=>"Actor or Actress",
            "Admin Assistant"=>"Admin Assistant",
            "Admin Clerk"=>"Admin Clerk",
            "Admin Manager"=>"Admin Manager",
            "Admiral"=>"Admiral",
            "Advocate"=>"Advocate",
            "Air Transport Occupations"=>"Air Transport Occupations",
            "Ammunition Seeker"=>"Ammunition Seeker",
            "Anaesthetist"=>"Anaesthetist",
            "Appraiser"=>"Appraiser",
            "Apprentice"=>"Apprentice",
            "Architect"=>"Architect",
            "Area Manager"=>"Area Manager",
            "Artisan"=>"Artisan",
            "Artist"=>"Artist",
            "Assembler"=>"Assembler",
            "Assessor"=>"Assessor",
            "Assistant"=>"Assistant",
            "Assistant Manager"=>"Assistant Manager",
            "Assistant to the Trades"=>"Assistant to the Trades",
            "Attorney"=>"Attorney",
            "Auctioneer"=>"Auctioneer",
            "Author"=>"Author",
            "Baker"=>"Baker",
            "Bank Employee"=>"Bank Employee",
            "Bank Teller"=>"Bank Teller",
            "Barmaid"=>"Barmaid",
            "Barman / Bartender"=>"Barman / Bartender",
            "Beautician"=>"Beautician",
            "Biologist"=>"Biologist",
            "Bombardier"=>"Bombardier",
            "Book Maker"=>"Book Maker",
            "Bookkeeper"=>"Bookkeeper",
            "Bricklayer"=>"Bricklayer",
            "Brigadier"=>"Brigadier",
            "Broker"=>"Broker",
            "Builder"=>"Builder",
            "Building Contractor"=>"Building Contractor",
            "Building Inspector"=>"Building Inspector",
            "Building Painter"=>"Building Painter",
            "Business Consultant"=>"Business Consultant",
            "Butcher"=>"Butcher",
            "Buyer"=>"Buyer",
            "Cabinet Maker"=>"Cabinet Maker",
            "Cabinet Minister"=>"Cabinet Minister",
            "Cable Joiner"=>"Cable Joiner",
            "Candidate Officer"=>"Candidate Officer",
            "Captain"=>"Captain",
            "Carpenter / Joiner"=>"Carpenter / Joiner",
            "Carpenter or Joiner"=>"Carpenter or Joiner",
            "Cashier"=>"Cashier",
            "Casting Worker"=>"Casting Worker",
            "Catering Occupations"=>"Catering Occupations",
            "Chairman of Company"=>"Chairman of Company",
            "Chartered Accountant"=>"Chartered Accountant",
            "Chefs"=>"Chefs",
            "Chemist"=>"Chemist",
            "Chief Petty Officer"=>"Chief Petty Officer",
            "Chiropracter"=>"Chiropracter",
            "Civil Servant"=>"Civil Servant",
            "Colonel"=>"Colonel",
            "Commander"=>"Commander",
            "Commandore"=>"Commandore",
            "Commissioner"=>"Commissioner",
            "Computer Operator"=>"Computer Operator",
            "Computer Programmer"=>"Computer Programmer",
            "Computer System Analyst"=>"Computer System Analyst",
            "Constable"=>"Constable",
            "Consultants"=>"Consultants",
            "Cook"=>"Cook",
            "Copywriter"=>"Copywriter",
            "Corporal"=>"Corporal",
            "Credit Collector or Personnel"=>"Credit Collector or Personnel",
            "Dance Instructor"=>"Dance Instructor",
            "Data Puncher"=>"Data Puncher",
            "Dean"=>"Dean",
            "Debtors / Creditors Clerk"=>"Debtors / Creditors Clerk",
            "Dental Assistant"=>"Dental Assistant",
            "Dentist"=>"Dentist",
            "Diplomat - not RSA Citizen"=>"Diplomat - not RSA Citizen",
            "Director"=>"Director",
            "District Manager"=>"District Manager",
            "Doctor / General Practitioner"=>"Doctor / General Practitioner",
            "Draughtsman"=>"Draughtsman",
            "Driver - Vehicle"=>"Driver - Vehicle",
            "Electrician"=>"Electrician",
            "Engineer"=>"Engineer",
            "Ensign"=>"Ensign",
            "Estate Agent"=>"Estate Agent",
            "Extension Officer - Agricultural"=>"Extension Officer - Agricultural",
            "Factory Worker"=>"Factory Worker",
            "Farm Foreman"=>"Farm Foreman",
            "Farm Worker"=>"Farm Worker",
            "Farmer (Private Capacity)"=>"Farmer (Private Capacity)",
            "Farmer ie Grower"=>"Farmer ie Grower",
            "Farmer Parttime"=>"Farmer Parttime",
            "Financial Advisors"=>"Financial Advisors",
            "Fireman"=>"Fireman",
            "Fisherman or Hunter"=>"Fisherman or Hunter",
            "Fisherman/Hunter"=>"Fisherman/Hunter",
            "Fitter And Turner"=>"Fitter And Turner",
            "Flight Sargeant"=>"Flight Sargeant",
            "Foreman"=>"Foreman",
            "Forensic Analyst"=>"Forensic Analyst",
            "Foundry Worker"=>"Foundry Worker",
            "Funeral Director"=>"Funeral Director",
            "General"=>"General",
            "General Manager - Company"=>"General Manager - Company",
            "Geologist"=>"Geologist",
            "Glazier"=>"Glazier",
            "Government Employees"=>"Government Employees",
            "Grinder"=>"Grinder",
            "Gynecologist"=>"Gynecologist",
            "Hairdresser / Barber"=>"Hairdresser / Barber",
            "Head of Technikon/College/School"=>"Head of Technikon/College/School",
            "Headmaster"=>"Headmaster",
            "Housekeeper"=>"Housekeeper",
            "Housewife"=>"Housewife",
            "Inspector"=>"Inspector",
            "Inspector of Schools"=>"Inspector of Schools",
            "Insurance Agent"=>"Insurance Agent",
            "Insurance Broker"=>"Insurance Broker",
            "Insurance Consultant"=>"Insurance Consultant",
            "Interior Decorator"=>"Interior Decorator",
            "Iron Worker"=>"Iron Worker",
            "Jeweller"=>"Jeweller",
            "Journalist"=>"Journalist",
            "Judge"=>"Judge",
            "Labourer / Unskilled Labourer"=>"Labourer / Unskilled Labourer",
            "Labourer or Unskilled Labourer"=>"Labourer or Unskilled Labourer",
            "Laundryman"=>"Laundryman",
            "Lay preacher"=>"Lay preacher",
            "Leading Seaman"=>"Leading Seaman",
            "Lecturer"=>"Lecturer",
            "Legal Professions Other"=>"Legal Professions Other",
            "Librarian"=> "Librarian",
            "Lieutenant"=>"Lieutenant",
            "Lieutenant Colonel"=>"Lieutenant Colonel",
            "Lieutenant Commander"=>"Lieutenant Commander",
            "Lieutenant General"=>"Lieutenant General",
            "Lumberman"=>"Lumberman",
            "Machine Operator"=>"Machine Operator",
            "Machinist"=>"Machinist",
            "Major"=>"Major",
            "Major General"=>"Major General",
            "Manager"=>"Manager",
            "Managing Director"=>"Managing Director",
            "Market Checker"=>"Market Checker",
            "Mason"=>"Mason",
            "Mechanic"=>"Mechanic",
            "Medic"=>"Medic",
            "Medical Doctor"=>"Medical Doctor",
            "Member of Parliament"=>"Member of Parliament",
            "Member of Provincial Council"=>"Member of Provincial Council",
            "Metal Worker"=>"Metal Worker",
            "Meter Reader"=>"Meter Reader",
            "Midshipman"=>"Midshipman",
            "Millwright"=>"Millwright",
            "Mine Worker"=>"Mine Worker",
            "Minister"=>"Minister",
            "Missionary"=>"Missionary",
            "Model"=>"Model",
            "Moulder"=>"Moulder",
            "Municipal Servant"=>"Municipal Servant",
            "Musician"=>"Musician",
            "Nurse"=>"Nurse",
            "Nursery Worker"=>"Nursery Worker",
            "Nursing Sister"=>"Nursing Sister",
            "Office Worker"=>"Office Worker",
            "Officer"=>"Officer",
            "Operator/Production Worker"=>"Operator/Production Worker",
            "Optician"=>"Optician",
            "Other Occupations Not Mentioned"=>"Other Occupations Not Mentioned",
            "Packer"=>"Packer",
            "Painter"=>"Painter",
            "Painter - Buildings"=>"Painter - Buildings",
            "Paramedics"=>"Paramedics",
            "Part time / Contract Worker"=>"Part time / Contract Worker",
            "Pensioner"=>"Pensioner",
            "Personnel Occupations"=>"Personnel Occupations",
            "Petty Officer"=>"Petty Officer",
            "Pharmacist"=>"Pharmacist",
            "Photographer"=>"Photographer",
            "Pilot"=>"Pilot",
            "Pipefitter"=>"Pipefitter",
            "Plasterer"=>"Plasterer",
            "Plumber"=>"Plumber",
            "Police Officer"=>"Police Officer",
            "Porter"=>"Porter",
            "Postal Services Occupations"=>"Postal Services Occupations",
            "President"=>"President",
            "Priest"=>"Priest",
            "Prison Officer"=>"Prison Officer",
            "Private"=>"Private",
            "Production Control"=>"Production Control",
            "Production Line Worker"=>"Production Line Worker",
            "Professor"=>"Professor",
            "Prospector"=>"Prospector",
            "Psychiatrist"=>"Psychiatrist",
            "Psychologist"=>"Psychologist",
            "Quality Control"=>"Quality Control",
            "Quality Surveyor"=>"Quality Surveyor",
            "Radio Announcer"=>"Radio Announcer",
            "Rail Transport Occupation"=>"Rail Transport Occupation",
            "Rear Admiral"=>"Rear Admiral",
            "Receptionist"=>"Receptionist",
            "Rector"=>"Rector",
            "Regional Manager"=>"Regional Manager",
            "Repair Man"=>"Repair Man",
            "Reporter"=>"Reporter",
            "Researchers"=>"Researchers",
            "Retired"=>"Retired",
            "Rigger / Scaffolder"=>"Rigger / Scaffolder",
            "Road Transport Occupations"=>"Road Transport Occupations",
            "Salesman"=>"Salesman",
            "Salesman/Marketer"=>"Salesman/Marketer",
            "Sargeant"=>"Sargeant",
            "Sargeant Major"=>"Sargeant Major",
            "Scholar"=>"Scholar",
            "Scientist"=>"Scientist",
            "Sculptor"=>"Sculptor",
            "Sea Transport Occupations"=>"Sea Transport Occupations",
            "Seaman"=>"Seaman",
            "Second Bombardier"=>"Second Bombardier",
            "Second Corporal"=>"Second Corporal",
            "Second Lieutenant"=>"Second Lieutenant",
            "Secretary"=>"Secretary",
            "Security Guard"=>"Security Guard",
            "Security Officer"=>"Security Officer",
            "Self Employed(non-professional)"=>"Self Employed(non-professional)",
            "Self Employed(professional)"=>"Self Employed(professional)",
            "Senator"=>"Senator",
            "Senior Executive Consultant"=>"Senior Executive Consultant",
            "Senior Superintendent"=>"Senior Superintendent",
            "Serviceman"=>"Serviceman",
            "Shopfitter"=>"Shopfitter",
            "Singer"=>"Singer",
            "Slaughterman"=>"Slaughterman",
            "Social Worker"=>"Social Worker",
            "Soldier"=>"Soldier",
            "Sole Owner"=>"Sole Owner",
            "Sole Owner - Individual(retail bank)"=>"Sole Owner - Individual(retail bank)",
            "Sole Owner(Business Bank)"=>"Sole Owner(Business Bank)",
            "Specialist"=>"Specialist",
            "Sport Occupations"=>"Sport Occupations" ,
            "Spray Painter"=>"Spray Painter",
            "Staff Sargeant"=>"Staff Sargeant",
            "Stage Artist"=>"Stage Artist",
            "Steel Worker"=>"Steel Worker",
            "Steeplejack"=>"Steeplejack",
            "Stock Controller"=>"Stock Controller",
            "Student"=>"Student",
            "Sub-Lieutenant"=>"Sub-Lieutenant",
            "Superintendent"=>"Superintendent",
            "Supervisor"=>"Supervisor",
            "Surgeon"=>"Surgeon",
            "Surveyor"=>"Surveyor",
            "Taxi Owner / Driver"=>"Taxi Owner / Driver",
            "Teacher"=>"Teacher",
            "Technician"=>"Technician",
            "Telecommunication Occupation"=>"Telecommunication Occupation",
            "Telephonist"=>"Telephonist",
            "Therapeutist"=>"Therapeutist",
            "Traffic Officer"=>"Traffic Officer",
            "Train Driver"=>"Train Driver",
            "Transport Contractor"=>"Transport Contractor",
            "Typist"=>"Typist",
            "Unemployed"=>"Unemployed",
            "Veterinarian"=>"Veterinarian",
            "Vice Admiral"=>"Vice Admiral",
            "Vice Corporal"=>"Vice Corporal",
            "Waiter"=>"Waiter",
            "Warrent Officer"=>"Warrent Officer",
            "Welder"=>"Welder",
            "Zoologist"=>"Zoologist",
            "ANALYST"=>"ANALYST",
            "BOILERMAKER"=>"BOILERMAKER",
            "CO-ORDINATOR"=>"CO-ORDINATOR",
            "DESIGNER"=>"DESIGNER",
            "GRAPHIC DESIGNER"=>"GRAPHIC DESIGNER",
            "IT/IT TECHNICIAN"=>"IT/IT TECHNICIAN",
            "LOGISTICS"=>"LOGISTICS",
            "MERCHANDISER"=>"MERCHANDISER"), null, array('class' => 'awesome')); ?></div>
        <div class="col">Employer Industry Type:</div>
        <div class="col"><?php echo Form::select('employerIndustryType', array('' => 'Select',   "AGRICULTURE"=>"AGRICULTURE",
            "BUILDING AND CONSTRUCTION"=>"BUILDING AND CONSTRUCTION",
            "BUSINESS SERVICES"=>"BUSINESS SERVICES",
            "COMMERCE"=>"COMMERCE",
            "COMMUNITY SERVICE"=>"COMMUNITY SERVICE",
            "EDUCATIONAL SERVICES - PRIVATE"=>"EDUCATIONAL SERVICES - PRIVATE",
            "ELECTRICITY, GAS AND WATER"=>"ELECTRICITY, GAS AND WATER",
            "ENTERTAINMENT/SPORTS/RECREATION"=>"ENTERTAINMENT/SPORTS/RECREATION",
            "ESCOM"=>"ESCOM",
            "FINANCIAL"=>"FINANCIAL",
            "GOVERNMENT"=>"GOVERNMENT",
            "MANUFACTURING"=>"MANUFACTURING",
            "MEDICAL SERVICES - PRIVATE"=>"MEDICAL SERVICES - PRIVATE",
            "MINING"=>"MINING",
            "NON-PROFIT ORGANISATIONS"=>"NON-PROFIT ORGANISATIONS",
            "PERSONAL SERVICES"=>"PERSONAL SERVICES",
            "TELKOM"=>"TELKOM",
            "TRANSPORT/STORAGE/COMMUNICATION"=>"TRANSPORT/STORAGE/COMMUNICATION",
            "UNKNOWN"=>"UNKNOWN"), null, array('class' => 'awesome')); ?></div>
 </div>
        
<div class="row">
        <div class="col">Customer Employement Status :</div>
        <div class="col"><?php echo Form::select('employerIndustryType', array('' => 'Select',     "Permanent"=>"Permanent",
            "Contractual"=>"Contractual",
            "Part time"=>"Part time",
            "Student"=>"Student",
            "Self employed"=>"Self employed",
            "Pensioner"=>"Pensioner",
            "Unemployed"=>"Unemployed"), null, array('class' => 'awesome')); ?></div>
        <div class="col">Customer Employement Level :</div>
        <div class="col"><?php echo Form::select('employmentLevel', array('' => 'Select', "Senior Management"=>"Senior Management",
            "Management"=>"Management",
            "Supervisor"=>"Supervisor",
            "Skilled Worker"=>"Skilled Worker",
            "Semi-Skilled Worker"=>"Semi-Skilled Worker",
            "Unskilled Worker"=>"Unskilled Worker",
            "Junior Position"=>"Junior Position"), null, array('class' => 'awesome')); ?></div>
 </div>
    <div class="row">
        <div class="col">Customer Type :</div>
        <div class="col"><?php echo Form::select('employerIndustryType', array('' => 'Select',"Private Individual"=>"Private Individual",
            "Self employed(non-professional) - Sole Proprietor"=>"Self employed(non-professional) - Sole Proprietor",
            "Self employed(non-professional) - Farmer"=>"Self employed(non-professional) - Farmer",
            "Self employed(professional) - Sole Proprietor"=>"Self employed(professional) - Sole Proprietor",
            "Self employed(professional) - Farmer"=>"Self employed(professional) - Farmer"), null, array('class' => 'awesome')); ?></div>
        <div class="col">Customer Employer City :</div>
        <div class="col"><?php echo Form::select('employerCity', array('' => 'Select'), null, array('class' => 'awesome')); ?></div>
 </div> 
<div class="row">
        <div class="col">ABS Asole Year End :</div>
        <div class="col"><?php echo Form::select('sourceOfIncome', array('' => 'Select', "January"=>"January",
            "February"=>"February",
            "March"=>"March",
            "April"=>"April",
            "May"=>"May",
            "June"=>"June",
            "July"=>"July",
            "August"=>"August",
            "September"=>"September",
            "October"=>"October",
            "November"=>"November",
            "December" =>"December"), null, array('class' => 'awesome')); ?></div>
        <div class="col">Employer Sub Urb:</div>
        <div class="col"><?php echo Form::select('employerSuburb', array('' => 'Select'), null, array('class' => 'awesome')); ?></div>
 </div>
<div class="row">
        <div class="col">Source Of Income :</div>
        <div class="col"><?php echo Form::select('sourceOfIncome', array('' => 'Select',  "Salary"=> "Salary",
            "Pension"=>"Pension",
            "Investments" =>"Investments",
            "Policy"=>"Policy",
            "Retirement Annuity"=>"Retirement Annuity",
            "Donation/Gift"=>"Donation/Gift",
            "Inheritance"=>"Inheritance"), null, array('class' => 'awesome')); ?></div>
        <div class="col">ABSA Sole Trader :</div>
        <div class="col"><?php echo Form::select('absaSoleTrader', array('' => 'Select'), null, array('class' => 'awesome')); ?></div>
 </div>
<div class="row">
        <div class="col">Employe Postal Code :</div>
        <div class="col"><?php echo Form::text('employerPostalCode ', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">ABSA Sole Trader :</div>
        <div class="col"><?php echo Form::select('absaSoleTrader', array('' => 'Select'), null, array('class' => 'awesome')); ?></div>
 </div>
      
<div class="row">
        <div class="col">Customer Period In Current Employer (years) :</div>
        <div class="col"><?php echo Form::text('customerPeriodAtCurrentEmployerYears ', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Customer Period In Current Employer (Months) :</div>
        <div class="col"><?php echo Form::text('customerPeriodAtCurrentEmployerMonths', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
 </div>

      
<div class="row">
        <div class="col">Customer Period In Previous Employer (Year) :</div>
        <div class="col"><?php echo Form::date('customerPeriodAtPreviousEmployerYears', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Customer Period In Previous Employer (Months) :</div>
        <div class="col"><?php echo Form::text('customerPeriodAtPreviousEmployerMonths', '', array('class' => 'awesome', 'placeholder' => "Customer's mobile No")); ?></div>
 </div>

<div class="row">
        <div class="col">Sum Income Customer Gross Renumeration:</div>
        <div class="col"><?php echo Form::text('sumIncomeCustomerGrossRemuneration  ', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Income Customer Monthly Commission:</div>
        <div class="col"><?php echo Form::text('sumIncomeCustomerMonthlyCommission', '', array('class' => 'awesome', 'placeholder' => "Customer's Email Id")); ?></div>
 </div>

<div class="row">
        <div class="col">Sum Income Customer Car Allowance:</div>
        <div class="col"><?php echo Form::text('sumIncomeCustomerCarAllowance', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Income Customer Other Allowance:</div>
        <div class="col"><?php echo Form::text('sumIncomeCustomerOtherAllowance', '', array('class' => 'awesome', 'placeholder' => "Customer's Email Id")); ?></div>
 </div>
      
<div class="row">
        <div class="col">Sum Income Customer Overtime:</div>
        <div class="col"><?php echo Form::text('sumIncomeCustomerOvertime', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Reimbursement:</div>
        <div class="col"><?php echo Form::text('reimbursement', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
      
<div class="row">
        <div class="col">Income Customer Net Take Home Pay:</div>
        <div class="col"><?php echo Form::text('addIncomeCustomerNetTakeHomePay', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Customer's Other Income:</div>
        <div class="col"><?php echo Form::text('addIncomeCustomerOtherIncome', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>      
<div class="row">
        <div class="col">Customer's Total M onthly Income:</div>
        <div class="col"><?php echo Form::text('customerTotalMonthlyIncome', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Spouse Income Gross Renumeration:</div>
        <div class="col"><?php echo Form::text('sumIncomeSpouseGrossRemuneration', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
<div class="row">
        <div class="col">Sum Income Spouse Monthly Commission:</div>
        <div class="col"><?php echo Form::text('sumIncomeSpouseMonthlyCommission', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Income Spouse Car Allowance:</div>
        <div class="col"><?php echo Form::text('sumIncomeSpouseCarAllowance', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
    
<div class="row">
        <div class="col">Spouse Total Salary:</div>
        <div class="col"><?php echo Form::text('totIncomeSpouseSalary', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Spouse Total Other Income:</div>
        <div class="col"><?php echo Form::text('totIncomeSpouseOtherIncome', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
<div class="row">
        <div class="col">Spouse Total Monthly Income:</div>
        <div class="col"><?php echo Form::text('spouseTotalMonthlyIncome', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum of Customer Bond Payment:</div>
        <div class="col"><?php echo Form::text('sumExpensesCustomerBondPayment', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
<div class="row">
        <div class="col">Sum of Spouse Bond Payment:</div>
        <div class="col"><?php echo Form::text('sumExpensesSpouseBondPayment', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Rent Payment:</div>
        <div class="col"><?php echo Form::text('rentPayment', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
<div class="row">
        <div class="col">Other Rent Payment:</div>
        <div class="col"><?php echo Form::date('rentPaymentOther', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Customer Total Rent Expense:</div>
        <div class="col"><?php echo Form::date('sumExpensesCustomerRent', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
<div class="row">
        <div class="col">Spouse Total Rent Expense:</div>
        <div class="col"><?php echo Form::text('sumExpensesSpouseRent', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Expense Customer Rates:</div>
        <div class="col"><?php echo Form::date('sumExpensesCustomerRates', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
      <div class="row">
        <div class="col">Sum Expense Spouse Rates:</div>
        <div class="col"><?php echo Form::text('sumExpensesSpouseRates', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Expense Customer Vehicle Installments:</div>
        <div class="col"><?php echo Form::date('sumExpensesCustomerVehicleInstallments', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
</div>
    <div class="row">
        <div class="col">Sum Expense Customer Vehicle Installments:</div>
        <div class="col"><?php echo Form::text('sumExpensesSpouseVehicleInstallments', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
   
    </div>
    <div class="row">
        <div class="col">Sum expense Customer Loan Re-payment:</div>
        <div class="col"><?php echo Form::text('SumExpensesCustomerLoanRepayments', '', array('class' => 'awesome', 'placeholder' => "Customer's Surname")); ?></div>
        <div class="col">Sum expense Spouse Loan Re-payment:</div>
        <div class="col"><?php echo Form::text('sumExpensesSpouseLoanRepayments', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div> 
    <div class="row">
        <div class="col">Sum Expense Customer Credit Card Re-payments:</div>
        <div class="col"><?php echo Form::text('sumExpensesCustomerCreditCardRepayments', '', array('class' => 'awesome', 'placeholder' => "Customer's Surname")); ?></div>
        <div class="col">Sum Expense Spouse Credit Card Re-payments:</div>
        <div class="col"><?php echo Form::text('sumExpensesSpouseCreditCardRepayments', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div> 
      <div class="row">
        <div class="col">Sum Expense Customer furniture Account:</div>
        <div class="col"><?php echo Form::text('sumExpensesCustomerFurnitureAccounts', '', array('class' => 'awesome', 'placeholder' => "Customer's Surname")); ?></div>
        <div class="col">Sum Expense Spouse furniture Account:</div>
        <div class="col"><?php echo Form::text('sumExpensesSpouseFurnitureAccounts', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
        <div class="row">
        <div class="col">Sum Expenses Customer Clothing Accounts :</div>
        <div class="col"><?php echo Form::text('sumExpensesCustomerClothingAccounts', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Expenses Spouse Clothing Accounts :</div>
        <div class="col"><?php echo Form::date('sumExpensesSpouseClothingAccounts', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
     <div class="row">
        <div class="col">Sum Expenses Customer Overdraft Re-payments:</div>
        <div class="col"><?php echo Form::text('sumExpensesCustomerOverdraftRepayments', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Expenses Spouse Overdraft Re-payments:</div>
        <div class="col"><?php echo Form::date('sumExpensesSpouseOverdraftRepayments', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
        
        
    <div class="row">
        <div class="col">Sum Expenses Customer Insurance Payments:</div>
        <div class="col"><?php echo Form::text('sumExpensesCustomerInsurancePayments', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Expense Spouse Policy Insurance Payments:</div>
        <div class="col"><?php echo Form::date('sumExpensesSpousePolicyInsurancePayments', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
        
        
             <div class="row">
        <div class="col">Sum Expenses Customer Telephone Payments:</div>
        <div class="col"><?php echo Form::text('sumExpensesCustomerTelephonePayments', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Expenses Spouse Telephone Payments:</div>
        <div class="col"><?php echo Form::date('sumExpensesSpouseTelephonePayments', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
        
        
             <div class="row">
        <div class="col">Sum Expenses Customer Transport:</div>
        <div class="col"><?php echo Form::text('sumExpensesCustomerTransport', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Expenses Spouse Transport:</div>
        <div class="col"><?php echo Form::date('sumExpensesSpouseTransport', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
        
        
             <div class="row">
        <div class="col">Sum Expenses Customer Food & Entertainment:</div>
        <div class="col"><?php echo Form::text('sumExpensesCustomerFoodAndEntertainment', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Expenses Spouse Food & Entertainment:</div>
        <div class="col"><?php echo Form::date('sumExpensesSpouseFoodAndEntertainment
', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
        
        
             <div class="row">
        <div class="col">Sum Expenses Customer Education Cost:</div>
        <div class="col"><?php echo Form::text('sumExpensesCustomerEducationCosts', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Expenses Spouse Education Cost:</div>
        <div class="col"><?php echo Form::date('sumExpensesSpouseEducationCosts', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
        
        
    <div class="row">
        <div class="col">Sum Expenses Customer Maintenance:</div>
        <div class="col"><?php echo Form::text('sumExpensesCustomerMaintenance', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Expenses Spouse Maintenance:</div>
        <div class="col"><?php echo Form::date('sumExpensesSpouseMaintenance', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
        
        
    <div class="row">
        <div class="col">Customer Household Expense:</div>
        <div class="col"><?php echo Form::text('sumExpensesCustomerHouseholdExpenses', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Spouse Household Expense:</div>
        <div class="col"><?php echo Form::date('sumExpensesSpouseHouseholdExpenses', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
        
        
        
    <div class="row">
        <div class="col">Customer Other Expenses:</div>
        <div class="col"><?php echo Form::text('sumExpensesCustomerOtherExpenses', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Spouse Other Expenses:</div>
        <div class="col"><?php echo Form::date('sumExpensesSpouseOtherExpenses', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
        
        
        
    <div class="row">
        <div class="col">Sum Expenses Customer Loan Re-paid Via Payroll Deduction:</div>
        <div class="col"><?php echo Form::text('sumExpensesCustomerLoansRepaidViaPayrollDeduc', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Expenses Spouse Loan Re-paid Via Payroll Deduction:</div>
        <div class="col"><?php echo Form::date('sumExpensesSpouseLoansRepaidViaPayrollDeduc', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
        
        
        
    <div class="row">
        <div class="col">Customer Total Expense:</div>
        <div class="col"><?php echo Form::text('customerTotalExpenses', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Spouse Total Expense:</div>
        <div class="col"><?php echo Form::date('spouseTotalExpenses', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
        
        
        
    <div class="row">
        <div class="col">Customer Disposable Income:</div>
        <div class="col"><?php echo Form::text('customerDisposableIncome', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Spouse Disposable Income:</div>
        <div class="col"><?php echo Form::date('spouseDisposableIncome', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
        
        
        
    <div class="row">
        <div class="col">Spouse Wage Frequency:</div>
        <div class="col"><?php echo Form::text('spouseWageFrequency', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Income Customer Bonus:</div>
        <div class="col"><?php echo Form::date('sumIncomeCustomerBonus', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    <div class="row">
        <div class="col">Sum Income Spouse Bonus:</div>
        <div class="col"><?php echo Form::text('sumIncomeSpouseBonus', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Sum Income Customer Other Non recurring:</div>
        <div class="col"><?php echo Form::date('sumIncomeCustomerOtherNonRecurring', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    <div class="row">
        <div class="col">Sum Income Spouse Other Non recurring:</div>
        <div class="col"><?php echo Form::text('sumIncomeSpouseOtherNonRecurring', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Surety Description:</div>
        <div class="col"><?php echo Form::date('suretyDescription', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    <div class="row">
        <div class="col">Guarantor Description:</div>
        <div class="col"><?php echo Form::text('guarantorDescription', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Co Debtor Description:</div>
        <div class="col"><?php echo Form::date('coDebtorDescription', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    <div class="row">
        <div class="col">Relative First Name:</div>
        <div class="col"><?php echo Form::text('relativeFirstNames', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Relative Surname:</div>
        <div class="col"><?php echo Form::date('relativeSurname', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    <div class="row">
        <div class="col">Relative Cellphone No:</div>
        <div class="col"><?php echo Form::text('relativeCellphone', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Relative Phone No:</div>
        <div class="col"><?php echo Form::date('relativePhoneNumber', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    <div class="row">
        <div class="col">Relative Work No:</div>
        <div class="col"><?php echo Form::text('relativeWorkNumber', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Relative Address Line 1:</div>
        <div class="col"><?php echo Form::date('relativeAddressLine1 ', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    <div class="row">
        <div class="col">Relative Address Line 2:</div>
        <div class="col"><?php echo Form::text('relativeAddressLine2', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">Relative Address Postal Code:</div>
        <div class="col"><?php echo Form::date('relativeAddressPostalCode', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    <div class="row">
        <div class="col">WB Surety Name:</div>
        <div class="col"><?php echo Form::text('wbSuretyName', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">WB Surety State:</div>
        <div class="col"><?php echo Form::date('wbSuretyState', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    <div class="row">
        <div class="col">WB Co Debt Details:</div>
        <div class="col"><?php echo Form::text('wbCoDebtDetials', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">WB Co Debt Status:</div>
        <div class="col"><?php echo Form::date('wbCoDebtStatus', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    <div class="row">
        <div class="col">WB Co Debt Details:</div>
        <div class="col"><?php echo Form::text('wbCoDebtDetials', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">WB Co Debt Status:</div>
        <div class="col"><?php echo Form::date('wbCoDebtStatus', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    <div class="row">
        <div class="col">WB Co Debt Details:</div>
        <div class="col"><?php echo Form::text('wbCoDebtDetials', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">WB Co Debt Status:</div>
        <div class="col"><?php echo Form::date('wbCoDebtStatus', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    <div class="row">
        <div class="col">WB Co Debt Details:</div>
        <div class="col"><?php echo Form::text('wbCoDebtDetials', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">WB Co Debt Status:</div>
        <div class="col"><?php echo Form::date('wbCoDebtStatus', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    <div class="row">
        <div class="col">WB Co Debt Details:</div>
        <div class="col"><?php echo Form::text('wbCoDebtDetials', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">WB Co Debt Status:</div>
        <div class="col"><?php echo Form::date('wbCoDebtStatus', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>
    <div class="row">
        <div class="col">WB Co Debt Details:</div>
        <div class="col"><?php echo Form::text('wbCoDebtDetials', '', array('class' => 'awesome', 'placeholder' => "")); ?></div>
        <div class="col">WB Co Debt Status:</div>
        <div class="col"><?php echo Form::date('wbCoDebtStatus', '', array('class' => 'awesome', 'placeholder' => "Customer's Id No")); ?></div>
    </div>

  </div>

    
    
    
    
    
    <!------------------------------------- Bank Details -------------------------------------> 
<div id="bank">
  <div class="row">
        <div class="col">Enter Bank Account Branch Name :</div>
        <div class="col"><?php echo Form::text('customerBankAccountBranchName', '', array('class' => 'awesome', 'placeholder' => "Customer's First Name")); ?></div>
        <div class="col">Enter Account Holder's Name :</div>
        <div class="col"><?php echo Form::text('customerBankAccountHolder', '', array('class' => 'awesome', 'placeholder' => "Customer's Middle Name")); ?></div>
 </div>
    
    
  <div class="row">
        <div class="col">Enter Account No:</div>
        <div class="col"><?php echo Form::text('customerBankAccountNumber', '', array('class' => 'awesome', 'placeholder' => "Customer's First Name")); ?></div>
        <div class="col">Customer Bank Account Branch Code :</div>
        <div class="col"><?php echo Form::text('customerBankAccountBranchCode', '', array('class' => 'awesome', 'placeholder' => "Customer's Middle Name")); ?></div>
  </div>
    
    
  <div class="row">
        <div class="col">Enter Account No for Settelment :</div>
        <div class="col"><?php echo Form::text('accountNumberToSettle', '', array('class' => 'awesome', 'placeholder' => "Customer's First Name")); ?></div>
        <div class="col">Monthly Installment on Account to Be Setteled:</div>
        <div class="col"><?php echo Form::text('monthlyInstallmentOnAccountToBeSettled', '', array('class' => 'awesome', 'placeholder' => "Customer's Middle Name")); ?></div>
  </div>
    
    
  <div class="row">
        <div class="col">Settelement Amount:</div>
        <div class="col"><?php echo Form::text('settlementAmount', '', array('class' => 'awesome', 'placeholder' => "Customer's First Name")); ?></div>
        <div class="col">First Payment Date:</div>
        <div class="col"><?php echo Form::text('firstPaymentDate', '', array('class' => 'awesome', 'placeholder' => "Customer's Middle Name")); ?></div>
  </div>
    
    
  <div class="row">
        <div class="col">Customer Preferred Email Address :</div>
        <div class="col"><?php echo Form::text('customerPreferredEmailAddress', '', array('class' => 'awesome', 'placeholder' => "Customer's First Name")); ?></div>
        <div class="col">Customer Alternate Email Address :</div>
        <div class="col"><?php echo Form::text('customerAlternateEmailAddress', '', array('class' => 'awesome', 'placeholder' => "Customer's Middle Name")); ?></div>
  </div>
    
    
  <div class="row">
        <div class="col">Sales Person :</div>
        <div class="col"><?php echo Form::text('salesperson', '', array('class' => 'awesome', 'placeholder' => "Customer's First Name")); ?></div>
        
  </div>
    
    
 
</div>
    
<!------------------------------- Vehicle Details ------------------------------------------------------------------->
  <div id="vehicle">
    
        <div class="row">
        <div class="col">Customer Preferred Email Address :</div>
        <div class="col"><?php echo Form::text('customerPreferredEmailAddress', '', array('class' => 'awesome', 'placeholder' => "Customer's First Name")); ?></div>
        <div class="col">Customer Alternate Email Address :</div>
        <div class="col"><?php echo Form::text('customerAlternateEmailAddress', '', array('class' => 'awesome', 'placeholder' => "Customer's Middle Name")); ?></div>
  </div>
    
      
      
      
  </div>
</div>


<?php echo Form::close(); ?>

        </div>
    </body>
</html>
