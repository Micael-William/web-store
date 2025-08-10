<?php
namespace App\Services\AbacatePay;

class Payments
{
    public function pix()
    {
    
        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.abacatepay.com/v1/pixQrCode/create",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
            'amount' => 123,
            'expiresIn' => 123,
            'description' => 'teste do produto',
            'customer' => [
                'name' => 'Daniel Lima',
                'cellphone' => '(11) 4002-8922',
                'email' => 'daniel_lima@abacatepay.com',
                'taxId' => '123.456.789-01'
            ],
            'metadata' => [
                'externalId' => '123'
            ]
        ]),
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer". TOKEN,
            "Content-Type: application/json"
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
    }
}