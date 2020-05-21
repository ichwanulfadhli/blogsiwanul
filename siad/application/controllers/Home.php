<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();

		if(empty($this->session->userdata('checker'))){
			redirect(site_url('Login'));
		}

		$this->load->library('api');
		$this->load->helper('cookie');
	}
	
	public function index(){
		$data['title'] = "Home";
		$data['description'] = "Website yang berisikan informasi yang bermanfaat, kadang gak jelas, dan juga jadi wadah curhatan si Wanul.";
		$data['keywords'] = "ichwanul fadhli, blog ichwanul fadhli, ichwanul, wanul, blog iseng-iseng, blog iseng";

		$data['content'] = "_home";

		$this->load->view('_landing_page', $data);
	}

	public function logout(){
		$this->session->sess_destroy();
		delete_cookie('log_session');
		redirect(site_url('Login'));
	}

}
