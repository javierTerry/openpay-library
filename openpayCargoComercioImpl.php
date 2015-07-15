<?php
require_once dirname(dirname(__FILE__)).'/openpay-php/Openpay.php';

try{
	
$openpay = Openpay::getInstance('mgvxcww4nbopuaimkkgw', 'sk_e9747dfe55b94e64805221563eb37874');


$chargeData = array(
    'method' => 'card',
    'source_id' => $_POST["token_id"],
    'amount' => (float)"1123" //$_POST["amount"],
    ,'description' => "TEsde pago en clilente"//$_POST["description"],
    ,'device_session_id' => $_POST["deviceIdHiddenFieldName"]);

$charge = $openpay->charges->create($chargeData);
error_log($charge);
print_r($cargo);
} catch (Exception $e){
	$msg = sprintf("Descripcion %s, codifo de error %s", $e -> getDescription(), $e -> getErrorCode());
	print_r($msg);
	//print_r($e);
}
?>
