<?php
namespace App\Controllers;

class WeatherController{
    function get() {
            $city = request('value');
            $url = "wttr.in/" . $city . "?format=3";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_MAXREDIRS, 4);
            curl_setopt($ch, CURLOPT_FORBID_REUSE, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($ch, CURLOPT_URL, $url);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($ch);

            global $base_url; 
            $base_url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
            $http_response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            curl_close ($ch);
            return $response;
    }
}