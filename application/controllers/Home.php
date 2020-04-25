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

		$this->load->view('_index', $data);
	}


	public function view(){
		$post = $this->input->get('post');

		$url = "http://localhost:85/blogsiwanul_project/blogsiwanul_api/index.php/Posts?view=blog&id=". $post;
		$content = $this->api->callAPI("GET", $url);
		$data['blog'] = json_decode($content, true);

		$this->load->view('_blog', $data);
	}
}
