<?php
require_once dirname(dirname(__FILE__)).'/openpay-php/Openpay.php';

try{
	

$openpay = Openpay::getInstance('mgvxcww4nbopuaimkkgw', 'sk_e9747dfe55b94e64805221563eb37874');

$cardDataRequest = array(
    'holder_name' => 'Teofilo Velazco',
    'card_number' => '4111111111111111',
    'cvv2' => '123',
    'expiration_month' => '12',
    'expiration_year' => '15',
    'address' => array(
            'line1' => 'Privada Rio No. 12',
            'line2' => 'Co. El Tintero',
            'line3' => '',
            'postal_code' => '76920',
            'state' => 'Querétaro',
            'city' => 'Querétaro.',
            'country_code' => 'MX'));

$customer = $openpay->customers->get('argmzwukbogwrs9pw3m7');
$card = $customer->cards->add($cardDataRequest);
print_r($card);
} catch (Exception $e) {
	$msg = sprintf("Descripcion %s, codifo de error %s", $e -> getDescription(), $e -> getErrorCode());
	print_r($msg);
	//print_r($e);
}
?>