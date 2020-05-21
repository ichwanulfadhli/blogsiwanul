<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {
	function __construct(){
		parent::__construct();
		
		if(empty($this->session->userdata('checker'))){
			redirect(site_url('Login'));
		}

		$this->load->library('api');
		$this->load->helper('cookie');
	}
	
	public function index(){
		if(!empty($this->input->get('view'))){
			$data['title'] = "Posts Edit";
			$data['content'] = "/_posts/_v_posts_edit";

			$this->load->view('_landing_page', $data);
		}
		else{
			$data['title'] = "Posts";
			$data['content'] = "/_posts/_v_posts";

			$url = "https://api.blogsiwanul.my.id/index.php/Posts?view=all&lvl=admin";
			$content = $this->api->callAPI("GET", $url);
			$data['result'] = $content;

			$data['description'] = "Website yang berisikan informasi yang bermanfaat, kadang gak jelas, dan juga jadi wadah curhatan si Wanul.";
			$data['keywords'] = "ichwanul fadhli, blog ichwanul fadhli, ichwanul, wanul, blog iseng-iseng, blog iseng";
			
			$this->load->view('_landing_page', $data);
		}
	}

	public function new_posts(){
		$data['title'] = "New Posts";
		$data['content'] = "/_posts/_v_posts_add";

		$data['description'] = "Website yang berisikan informasi yang bermanfaat, kadang gak jelas, dan juga jadi wadah curhatan si Wanul.";
		$data['keywords'] = "ichwanul fadhli, blog ichwanul fadhli, ichwanul, wanul, blog iseng-iseng, blog iseng";

		$this->load->view('_landing_page', $data);
	}
	
    public function view_posts($id){
        $data['title'] = "Posts Edit";
        $data['content'] = "/_posts/_v_posts_edit";

        $data['description'] = "Website yang berisikan informasi yang bermanfaat, kadang gak jelas, dan juga jadi wadah curhatan si Wanul.";
		$data['keywords'] = "ichwanul fadhli, blog ichwanul fadhli, ichwanul, wanul, blog iseng-iseng, blog iseng";

        $url = "https://api.blogsiwanul.my.id/index.php/Posts?view=blog&id=". $id;
        $content = $this->api->callAPI("GET", $url);
		$data['result'] = $content;

		$this->load->view('_landing_page', $data);
	}

	public function add_posts(){
		$url = "https://api.blogsiwanul.my.id/index.php/Posts";
		
		if(!empty($this->input->post('pst_cover_url'))){
			$cover =  $this->input->post('pst_cover_url');
		}
		elseif($_FILES['pst_cover']['size'] != 0){
			$cover = $this->file_upload('post_cover');
		}
		else{
			$cover = $this->randCover();
		}

		$data = http_build_query(
			array(
				'post_cover'       => $cover,
				'post_title'       => $this->input->post('pst_title'),
				'post_description' => $this->input->post('pst_description'),
				'post_content'     => $this->input->post('pst_content'),
				'post_keywords'    => $this->input->post('pst_keywords'),
				'post_status'      => $this->input->post('pst_status'),
				'login_id'         => $this->session->userdata('id')
			)
		);
		$content = $this->api->callAPI('POST', $url, $data);
		$result = $content;

		if($result['message'] == "Input success."){
			redirect(site_url('Posts'));
		}
    }

    public function edit_posts($id){
		$url = "https://api.blogsiwanul.my.id/index.php/Posts";
		
		if(!empty($this->input->post('pst_cover_url'))){
			$cover =  $this->input->post('pst_cover_url');
		}
		elseif($_FILES['pst_cover']['size'] != 0){
			$cover = $this->file_upload('post_cover');
		}
		else{
			$cover = $this->randCover();
		}
		
		$data = http_build_query(
			array(
				'post_id'          => $id,
				'post_cover'       => $this->input->post('pst_cover_url'),
				'post_title'       => $this->input->post('pst_title'),
				'post_description' => $this->input->post('pst_description'),
				'post_content'     => $this->input->post('pst_content'),
				'post_keywords'    => $this->input->post('pst_keywords'),
				'post_status'      => $this->input->post('pst_status'),
				'login_id'         => $this->session->userdata('id')
			)
		);
		
		$content = $this->api->callAPI('PUT', $url, $data);
		$result = $content;

		if($result['message'] == "Update success."){
			// redirect(site_url('Posts'));
			redirect($_SERVER['HTTP_REFERER']);
		}
    }

	public function delete_posts($id){
		$url = "http://localhost:8080/blogsiwanul_project/blogsiwanul_api/index.php/Posts/delete/". $id;
		$data = http_build_query(
			array(
				'request' 			=> "posts",
				'post_id' 			=> $id
			)
		);
		$content = $this->api->callAPI('POST', $url, $data);
		$result = $content;

		if($result['message'] == "delete_succeeded"){
			redirect(site_url('Home/posts'));
		}
	}

	public function file_upload($dir){
		$config['upload_path'] = $_SERVER['DOCUMENT_ROOT']. "/data/uploads/". $dir. '/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';

		$this->load->library('upload', $config);
		if($this->upload->do_upload('pst_cover')){
			// $data = array('upload_data' => $this->upload->data());
			$upload_data = $this->upload->data(); 
			$file = "https://data.". $_SERVER['HTTP_HOST']. "/uploads/". $dir. '/'. $upload_data['file_name'];

			return $file;
		}
	}
	
	public function randCover(){
	    $img = [
			'cover1.jpg',
			'cover2.jpg',
			'cover3.jpg',
			'cover4.jpg',
			'cover5.jpg',
			'cover6.jpg',
		];
		
		//$url = $_SERVER['DOCUMENT_ROOT']. "/data/uploads/post_cover/";
		$url = "https://data.". $_SERVER['HTTP_HOST']. "/uploads/post_cover/";
		$output = $img[rand(0, (count($img) - 1))];
		
		return $url. $output;
	}
}

