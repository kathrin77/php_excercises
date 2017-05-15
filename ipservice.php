<html>
	<head>
            <title>IP-Service</title>
            <style type="text/css">
            table {
                border: solid 1px #000;
            }
            td {
                border: solid 1px #000;
            }
            body {
                font-family: sans-serif;
            }
            </style>
	</head>
	<body>
<?php
$soapClient = new SoapClient("http://www.webservicex.net/geoipservice.asmx?WSDL");
echo '<b>var_dump soapClient: </b></br>';
var_dump($soapClient->__getFunctions());

echo "<h1>th-wildau.de</h1>";
$ipthwildau = gethostbyname("th-wildau.de");
$thwildau = $soapClient->GetGeoIP(array("IPAddress" => $ipthwildau));
echo '<b>var_dump: </b></br>';
var_dump($thwildau);
drawTable($thwildau);


$xmlthwildau = simplexml_load_file("http://www.webservicex.net/geoipservice.asmx/GetGeoIP?IPAddress=".$ipthwildau);
//echo '<pre>';
//print_r($xmlthwildau);
//echo '</pre>';

xmlList($xmlthwildau);

echo "<h1>nytimes.com</h1>";
$ipnytimes = gethostbyname("nytimes.com");
$nytimes = $soapClient->GetGeoIP(array("IPAddress" => $ipnytimes));
echo '<b>var_dump: </b></br>';
var_dump($nytimes);
drawTable($nytimes);
$xmlnytimes = simplexml_load_file("http://www.webservicex.net/geoipservice.asmx/GetGeoIP?IPAddress=".$ipnytimes);
xmlList($xmlnytimes);


echo "<h1>unisg.ch</h1>";
$ipunisg = gethostbyname("unisg.ch");
$unisg = $soapClient->GetGeoIP(array("IPAddress" => $ipunisg));
echo '<b>var_dump: </b></br>';
var_dump($unisg);
drawTable($unisg);
$xmlunisg = simplexml_load_file("http://www.webservicex.net/geoipservice.asmx/GetGeoIP?IPAddress=".$ipunisg);
xmlList($xmlunisg);

/**
 * Ausgabe des var_dump der IP-Anfragen als Tabelle
 * 
 * @param type $data
 */
function drawTable($data) {
    echo "<br><br>";
    echo '<b>Ausgabe des var_dump als Tabelle</br></b>';
    foreach ($data as $key => $value) {
    echo '<table>';
    echo '<caption>'.$key.'</caption>';
    foreach ($value as $key1 => $value1) {
        echo '<tr>';
        echo '<td>'.$key1.'</td>';
        echo '<td>'.$value1.'</td>';
        echo '</tr>';        
    }
    echo '</table>';
    echo "<br><br>";
}
}

/**Ausgabe des xml aus dem xmlsimple parser als unsortiere Liste
 * @param type $xml
 */
function xmlList($xml) {
    echo '<b>Ausgabe mit XMLSimple</b></br>';
    echo '<ul>';
    echo '<li> IP-Adresse: '.$xml->IP.'</li>';
    echo '<li> Land: '.$xml->CountryName.'</li>';
    echo '<li> Ländercode: '.$xml->CountryCode.'</li>';
    echo '</ul>';
    
}



?>
	</body>
</html>
