<?php
$token = "768bb806-25f0-4bb2-a628-9d5eaac56582bcbe02fe4554af9b3d811c35d01400c8be25-b31d-4693-a968-bb953973c97d";
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://sandbox.api.pagseguro.com/checkouts",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'customer' => [
      'phone' => [
        'country' => '+55',
        'area' => '27',
        'number' => '999999999'
      ],
      'name' => 'João teste',
      'email' => 'joao@teste.com',
      'tax_id' => '12345678909'
    ],
    
    'reference_id' => 'REFERENCIA_DO_PRODUTO',
    'expiration_date' => '2025-08-14T19:09:10-03:00',
    'items' => [
      [
        'reference_id' => 'ITEM01',
        'name' => 'Computador',
        'quantity' => 1,
        'unit_amount' => 500,
        'image_url' => 'https://www.petz.com.br/blog//wp-content/upload/2018/09/tamanho-de-cachorro-pet-1.jpg',
        'description' => 'Moderno e Rápido'
      ]
    ],
    'additional_amount' => 0,
    'discount_amount' => 0,
    'payment_methods' => [
      [
        'type' => 'PIX'
      ]
    ],
    'soft_descriptor' => 'produto',
    'redirect_url' => 'https://pagseguro.uol.com.br',
    'return_url' => 'https://pagseguro.uol.com.br',
    'notification_urls' => [
      'https://pagseguro.uol.com.br'
    ],
    'payment_notification_urls ' => [
      'http://localhost:8000/home'
    ]
  ]),
  
  CURLOPT_HTTPHEADER => [
    "Authorization: Bearer ". $token,
    "Content-type: application/json",
    "accept: application/json",
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}