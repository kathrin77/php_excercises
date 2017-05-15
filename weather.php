<?php

//WSDL webservice:
$wsdl = 'http://webservicex.com/globalweather.asmx?WSDL';

//neuer SoapClient:
$soapClient = new SoapClient($wsdl);

//functions des webservice anzeigen:
var_dump($soapClient->__getFunctions());



//variable für Methodenname
$methodName = 'GetWeather';

//variable für Methodenparameter
$params = array('CityName'=>'San Francisco','CountryName'=>'United States');

//soapAction
$soapAction='www.webservicex.com/globalweather.asmx/GetWeather';

//soapcall
$objectResult = $soapClient->__soapCall($methodName, array('parameters'=> $params), array('soapaction' => $soapAction));

// display response
var_dump($objectResult);



?>