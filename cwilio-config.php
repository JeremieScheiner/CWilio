<?php

//Connectwise Configuration
$connectwise = "https://cw.domain.com"; //Set your Connectwise URL
$companyname = "company"; //Set your company name from Connectwise. This is the company name field from login.
$apipublickey = "Connectwise Public Key"; //Public API key
$apiprivatekey = "Connectwise Private Key"; //Private API key
$ticketlength = "6"; //Expected ticket number length for CW tickets. This is required so the IVR kicks into gear after X numbers are entered. You can also specify that they need to press # instead after entering ticket.

//IVR Configuration
$ivrname = "Company Inc";
$helpdesk = "+1PHONENUMBER"; //Helpdesk phone number
$sales = "+1PHONENUMBER"; //Sales phone number
$phoneprefix = "+1PHONENUMBER"; //Phone prefix for directory. If your direct dial numbers are 612-867-53XX, set this to +161286753.
$extensiondigits = "2"; //Number of digits for company phone numbers. Number of X's according to above info.

$directory = "For John Smith, enter 01. 
            For Jenny Doe, enter 09. 
            etc etc";


?>