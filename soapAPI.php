<?php

function displayArr($array){
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}
$client = new SoapClient("https://www.ipayremitworldwide.com/webtracker/websiteapi.asmx?wsdl");
$params = array('REFNO' => $_POST['PIN']);
$Response =  $client->getTransactionStatus($params);
echo $Response->getTransactionStatusResult->STATUS;
?>
