<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->library('api');
	}

	public function index(){
		$url = "http://localhost:85/blogsiwanul_project/blogsiwanul_api/index.php/Posts?view=recent";
		$content = $this->api->callAPI("GET", $url);
		$data['recent_blog'] = json_decode($content, true);

		$url = "http://localhost:85/blogsiwanul_project/blogsiwanul_api/index.php/Posts?view=all";
		$content = $this->api->callAPI("GET", $url);
		$data['all_blogs'] = json_decode($content, true);

		$data['description'] = "Website yang berisikan informasi yang bermanfaat, kadang gak jelas, dan juga jadi wadah curhatan si Wanul.";
		$data['keywords'] = "ichwanul fadhli, blog ichwanul fadhli, ichwanul, wanul, blog iseng-iseng, blog iseng";

		$this->load->view('_index', $data);
	}
}
