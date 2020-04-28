<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->library('api');
    }

    public function view($y, $m, $d){
      $url = "http://localhost:85/blogsiwanul_project/blogsiwanul_api/index.php/Posts?view=blog&y=". $y. 
      "&m=". $m. "&d=". $d;
      $content = $this->api->callAPI("GET", $url);
      $data['blog'] = json_decode($content, true);
  
      $this->load->view('_blog', $data);
    }
}