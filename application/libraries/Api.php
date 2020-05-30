<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Api {

    /**
     * Call API Function. To get a resource from an API with a certain request.
     * 
     * @param string $method 
     * The request method : "GET", "POST", "PUT", "DELETE".
     * 
     * @param string $url 
     * The specified API's url.
     * 
     * @param array $data 
     * The data sent request. By default it's set to _null_, but if you wish to make "POST" or "PUT" request, 
     * the value shall be an array.
     * 
     */
    public function callAPI($method, $url, $data = null){
        // Initialize curl
        $curl = curl_init();

        // Checking the method request
        switch($method){
            // POST request
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            // PUT request
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }
        // Options
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        // Execute the process
        $result = curl_exec($curl);
        if (!$result) {
            die("Connection Failure");
        }
        curl_close($curl);

        // Returning the output
        return json_decode($result, true);
    }
}