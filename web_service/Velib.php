<?php

require_once dirname(__FILE__) . '/config.php';

/**
 * class Velib
 */
class Velib
{
    /**
     *
     */
    function __construct()
    {
    }

    /**
     *
     */
    public function getAvailableBikes($contract, $stationNumber)
    {
        $url = API_URL . $stationNumber . '?contract=' . $contract . '&apiKey=' . API_KEY;
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        if(curl_error($ch)) {
            throw new Exception("Error Processing Request: ". curl_error($ch), 1);
        }

        $response = json_decode($result);
        return $response;
    }
}
