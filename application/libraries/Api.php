<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Api {

    public function callAPI($method, $url, $data = NULL){
        if($method == "GET" && $data === NULL){
            $content = file_get_contents($url, false);

            return $content;
        }
        elseif($method == "POST"){
            $opts = array(
                'http' => array(
                    'method'    => "POST",
                    'header'    => 'Content-Type: application/x-www-form-urlencoded',
                    'content'   => $data
                    )
            );
            
            $context = stream_context_create($opts);
        
            $content = file_get_contents($url, false, $context);
            
            return $content;
        }
        else{
            return false;
        }
    }
}