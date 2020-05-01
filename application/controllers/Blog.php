<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->library('api');
    }

    public function index(){
      $url = "http://localhost:85/blogsiwanul_project/blogsiwanul_api/index.php/Posts?view=all";
      $content = $this->api->callAPI("GET", $url);
      $data['all_blogs'] = json_decode($content, true);

      $data['description'] = "Website yang berisikan informasi yang bermanfaat, kadang gak jelas, dan juga jadi wadah curhatan si Wanul.";
      $data['keywords'] = "ichwanul fadhli, blog ichwanul fadhli, ichwanul, wanul, blog iseng-iseng, blog iseng";

      $this->load->view('blog/_blog', $data);
    }

    public function view($y = null, $m = null, $d = null){
      $url = "http://localhost:85/blogsiwanul_project/blogsiwanul_api/index.php/Posts?view=blog&y=". $y. 
      "&m=". $m. "&d=". $d;
      $content = $this->api->callAPI("GET", $url);
      $data['blog'] = json_decode($content, true);
  
      $this->load->view('blog/_blog_view', $data);
    }
}