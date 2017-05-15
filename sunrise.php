<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sunrise</title>
    </head>
    <body>
        <?php
        
        $soapClient = new SoapClient("http://www.webservicex.net/sunsetriseservice.asmx?WSDL");
        echo 'var_dump soapClient: </br>';
        var_dump($soapClient->__getFunctions());
        
        $params = array('L'=>"(array('Latitude'=>'47.391860','Longitude'=>'-9.368623')");
        
        
        $result = $soapClient->getSunSetRiseTime($params);
        echo '</br>var_dump result:</br>';
        var_dump($result);           
       
                
        ?>
    </body>
</html>