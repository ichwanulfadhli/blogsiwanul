<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->library('api');
		$this->load->helper('cookie');

		if(!empty(get_cookie('login_session'))){
			$cookie_data = explode("-", get_cookie('login_session'));

			$this->session->set_userdata('checker', '1');
			$this->session->set_userdata('id', $cookie_data[0]);
			$this->session->set_userdata('username', $cookie_data[0]);
			redirect(site_url('Home'));
		}
	}

	public function index(){
		if($this->session->userdata('notif') == 'no_account'){
			$data['notif']['type'] = 'error';
			$data['notif']['msg'] = 'Username atau password yang anda masukan salah!';
		}
		elseif($this->session->userdata('notif') == 'no_access'){
			$data['notif']['type'] = 'warning';
			$data['notif']['msg'] = 'Anda tidak memiliki akses untuk menggunakan sistem!';
		}
		else{
			$data = NULL;
		}

		$this->load->view('index', $data);
	}

	public function go_login(){
		$url = "https://api.blogsiwanul.my.id/index.php/Login";

		$data = http_build_query(
			array(
				'username'	=> $this->input->post('username'),
				'pwd'		=> $this->input->post('pwd')
			)
		);

		$content = $this->api->callAPI("POST", $url, $data);

		$result = $content;

		if($result['message'] == "Login success."){
			$this->session->set_userdata('checker', '1');
			$this->session->set_userdata('id', $result["id"]);
			$this->session->set_userdata('username', $result["username"]);

			$this->input->set_cookie('log_session', base64_encode($result["id"]). '-'. base64_encode($result["username"]), "86400");

			redirect(site_url('Home'));
		}
		elseif($result['message'] == "Access denied."){
			$this->session->set_userdata('notif', 'no_access');

			redirect(site_url('Login'));
		}
		else{
			$this->session->set_userdata('notif', 'no_account');

			redirect(site_url('Login'));
		}
	}
}
