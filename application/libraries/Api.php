<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Api {

    public function callAPI($method, $url, $data = NULL){
        if($method == "GET" && $data === NULL){
            $content = file_get_contents($url, false);

            return json_decode($content, true);
        }
        elseif($method == "POST" || $method == "PUT"){
            $opts = array('http' => 
            array(
                'method'    => $method,
				'header'    => 'Content-Type: application/x-www-form-urlencoded',
                'content'   => $data
                )
            );
            
            $context = stream_context_create($opts);
        
            $content = file_get_contents($url, false, $context);
            
            return json_decode($content, true);
        }
        else{
            return false;
        }
    }
}