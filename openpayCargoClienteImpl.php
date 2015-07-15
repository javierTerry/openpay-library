<?php
require_once dirname(dirname(__FILE__)).'/openpay-php/Openpay.php';

try{
	
$openpay = Openpay::getInstance('mgvxcww4nbopuaimkkgw', 'sk_e9747dfe55b94e64805221563eb37874');


$customer = array(
     'name' => 'Juan',
     'last_name' => 'Vazquez Juarez',
     'phone_number' => '4423456723',
     'email' => 'juan.vazquez@empresa.com.mx');
	 
$chargeRequest = array(
    'method' => 'card',
    'source_id' => 'kjldhrtqat7ev8bwnb0v',
    'amount' => 100,
    'currency' => 'MXN'
    ,'description' => 'Cargo inicial a mi merchant',
    'order_id' => 'oid-00051',
    'device_session_id' => 'kR1MiQhz2otdIuUlQkbEyitIqVMiI16f'
    //,'customer' => $customer
	);
	
$customer = $openpay->customers->get('argmzwukbogwrs9pw3m7');
$cargo = $customer->charges->create($chargeRequest);
print_r($cargo);
} catch (Exception $e){
	$msg = sprintf("Descripcion %s, codifo de error %s", $e -> getDescription(), $e -> getErrorCode());
	print_r($msg);
	//print_r($e);
}
?>
