<?php
require_once ("inc/Services/Twilio.php");

$strfromnumber = "+19293222743";
$strtonumber = "+19172164313";
$strmsg = "Hello from Moududul Mujahedi";
 
$accountsid = "ACc4a322dc944d1af9919364b8d06c26d2";
$authtoken = "15e44de70b77e1522bf955702490fb14";
 
$objconnection = new Services_Twilio($accountsid, $authtoken);
 
$bsuccess = $objconnection->account->sms_messages->create(
      $strfromnumber,
      $strtonumber,
      $strmsg
);

echo "Success! <b>Text</b>: $strmsg, <b>Number</b>: $strtonumber";
?>

