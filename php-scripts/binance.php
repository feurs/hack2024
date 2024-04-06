<?php

$apiKey = 'Cv9veitIE41S2OYTTlvDeWqCcCpCxqgno5SKQGaGqGVuTVRBqkWDlR08I84dRWHI';
$apiSecret = 'ArwigRY5wPpybG2zYauhCYG6tluMhMEV5dUixCc9s8VK8NAbv3YeKqjM9zTvVUU9';

function getDataFromBinance($apiKey, $apiSecret)
{
    function binanceRequest($url, $params = array())
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url . '?' . http_build_query($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }

    $apiUrl = 'https://api.binance.com/api/v3/ticker/price';
    $pairs = ['BTCUSDT', 'ETHUSDT', 'BNBUSDT', 'ADAUSDT', 'XRPUSDT', 'SOLUSDT', 'DOTUSDT', 'DOGEUSDT', 'LUNAUSDT', 'AVAXUSDT'];
    $prices = array();
    foreach ($pairs as $pair) {
        $params['symbol'] = $pair;
        $response = binanceRequest($apiUrl, $params);
        if (isset($response['price'])) {
            $prices[$pair] = $response['price'];
        } else {
            $prices[$pair] = 'N/A';
        }
    }

    return $prices;
}


//ВЫЗОВ

//$data = getDataFromBinance($apiKey, $apiSecret);
//foreach ($data as $pair => $price) {
//    echo "$pair: $price\n";
//}
