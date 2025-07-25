<?php

$curl = curl_init();
$id = "CHEC_EA1ED174-E9BE-482C-988B-8A23F872B23E?offset=0&limit=5";
$token = "768bb806-25f0-4bb2-a628-9d5eaac56582bcbe02fe4554af9b3d811c35d01400c8be25-b31d-4693-a968-bb953973c97d";


curl_setopt_array($curl, [
  CURLOPT_URL => "https://sandbox.api.pagseguro.com/checkouts/".$id,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "Authorization: Bearer ". $token,
    "accept: application/json",
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    echo '<pre>';

    var_dump(json_decode($response, true));
    echo '</pre>';
}