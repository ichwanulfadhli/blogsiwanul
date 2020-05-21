<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct(){
		parent::__construct();

		if(empty($this->session->userdata('checker'))){
			redirect(site_url('Login'));
		}

		$this->load->library('api');
		$this->load->helper('cookie');
	}
	
	public function index(){
		$data['title'] = "About Me";
		$data['content'] = "/_about/_v_about";

		$url = "https://api.blogsiwanul.my.id/index.php/About";
		$content = $this->api->callAPI("GET", $url);
		$data['result'] = $content;
		$data['description'] = "Website yang berisikan informasi yang bermanfaat, kadang gak jelas, dan juga jadi wadah curhatan si Wanul.";
		$data['keywords'] = "ichwanul fadhli, blog ichwanul fadhli, ichwanul, wanul, blog iseng-iseng, blog iseng";

		$this->load->view('_landing_page', $data);
	}

	public function new_about(){
		$data['title'] = "New Posts";
		$data['content'] = "/_about/_v_about_add";

		$data['description'] = "Website yang berisikan informasi yang bermanfaat, kadang gak jelas, dan juga jadi wadah curhatan si Wanul.";
		$data['keywords'] = "ichwanul fadhli, blog ichwanul fadhli, ichwanul, wanul, blog iseng-iseng, blog iseng";
		
		$this->load->view('_landing_page', $data);
    }
    
    public function view_about(){
        $data['title'] = "Description Edit";
        $data['content'] = "/_about/_v_about_edit";

        $data['description'] = "Website yang berisikan informasi yang bermanfaat, kadang gak jelas, dan juga jadi wadah curhatan si Wanul.";
		$data['keywords'] = "ichwanul fadhli, blog ichwanul fadhli, ichwanul, wanul, blog iseng-iseng, blog iseng";

        $url = "https://api.blogsiwanul.my.id/index.php/About";
        $content = $this->api->callAPI("GET", $url);
		$data['result'] = $content;

		$this->load->view('_landing_page', $data);
	}

	public function add_about(){
		$url = "https://api.blogsiwanul.my.id/index.php/About";

		$data = http_build_query(
			array(
				'aboutme_name'        => $this->input->post('my_name'),
				'aboutme_description' => $this->input->post('my_description'),
				'aboutme_photo'       => (empty($this->input->post('my_photo_url')) ? $this->file_upload('about'): $this->input->post('my_photo_url'))
			)
		);

		// print_r($data);

		$content = $this->api->callAPI('POST', $url, $data);

		$result = $content;

		if($result['message'] == "Input success."){
			redirect(site_url('About'));
		}
    }
    
    public function edit_about($id){
		$url = "https://api.blogsiwanul.my.id/index.php/About";

		$data = http_build_query(
			array(
				'aboutme_id'          => $id,
				'aboutme_name'        => $this->input->post('my_name'),
				'aboutme_description' => $this->input->post('my_description'),
				'aboutme_photo'       => (empty($this->input->post('my_photo_url')) ? $this->file_upload('about'): $this->input->post('my_photo_url'))
			)
		);

		// print_r($data);

		$content = $this->api->callAPI('PUT', $url, $data);

		$result = $content;

		if($result['message'] == "Update success."){
			// redirect(site_url('Posts'));
			redirect($_SERVER['HTTP_REFERER']);
		}
    }

	public function delete_about($id){
		$url = "http://localhost:8080/blogsiwanul_project/blogsiwanul_api/index.php/About/delete/". $id;

		$data = http_build_query(
			array(
				'request' 			=> "posts",
				'post_id' 			=> $id
			)
		);

		$content = $this->api->callAPI('POST', $url, $data);

		$result = $content;

		if($result['message'] == "delete_succeeded"){
			redirect(site_url('Home/About'));
		}
	}

	public function file_upload($dir){
		$config['upload_path'] = $_SERVER['DOCUMENT_ROOT']. "/data/uploads/". $dir. '/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('my_photo')){
			// $data = array('upload_data' => $this->upload->data());
			$upload_data = $this->upload->data(); 
			$file = "https://data.". $_SERVER['HTTP_HOST']. "/uploads/". $dir. '/'. $upload_data['file_name'];

			return $file;
		}
	}
}
