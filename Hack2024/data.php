<!--<?php

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

    $pairs1 = ['BTCUSDT', 'ETHUSDT', 'BNBUSDT', 'ADAUSDT', 'XRPUSDT'];
    $pairs2 = ['SOLUSDT', 'DOTUSDT', 'DOGEUSDT', 'LUNAUSDT', 'AVAXUSDT'];

    $prices1 = array();
    $prices2 = array();

    foreach ($pairs1 as $pair) {
        $params['symbol'] = $pair;
        $response = binanceRequest($apiUrl, $params);
        if (isset($response['price'])) {
            $prices1[$pair] = $response['price'];
        } else {
            $prices1[$pair] = 'N/A';
        }
    }

    foreach ($pairs2 as $pair) {
        $params['symbol'] = $pair;
        $response = binanceRequest($apiUrl, $params);
        if (isset($response['price'])) {
            $prices2[$pair] = $response['price'];
        } else {
            $prices2[$pair] = 'N/A';
        }
    }

    return array_merge($prices1, $prices2);
}


//ВЫЗОВ

//$data = getDataFromBinance($apiKey, $apiSecret);
//foreach ($data as $pair => $price) {
//    echo "$pair: $price\n" . "<br>";
//}