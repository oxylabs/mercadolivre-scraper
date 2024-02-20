<?php

$params = [
    'source' => 'universal_ecommerce',
    'url' => 'https://lista.mercadolivre.com.br/eletronicos-audio-video/_loja_mercado-livre#deal_print_id=85ade3d0-cfda-11ee-8f23-2701100dea38&c_id=special-normal&c_element_order=4&c_campaign=eletronicos&c_uid=85ade3d0-cfda-11ee-8f23-2701100dea38',
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://realtime.oxylabs.io/v1/queries");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, "user" . ":" . "pass1");

$headers = array();
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo $result;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
?>