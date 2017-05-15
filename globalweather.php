<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Global Weather</title>
    </head>
    <body>
        <?php
        
        $soapClient = new SoapClient("http://www.webservicex.net/globalweather.asmx?WSDL");
        var_dump($soapClient->__getFunctions());
        
        $params = array('CityName'=>'Lugano','CountryName'=>'Switzerland');
        
        $result = $soapClient->GetWeather($params);
        
        var_dump($result);
        
//        echo 'Das Wetter in Lugano: '.$result;        
       
                
        ?>
    </body>
</html>
