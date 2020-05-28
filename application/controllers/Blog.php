<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->library('api');
	}
	
	public function index(){
		$url = "http://localhost:85/blogsiwanul_project/blogsiwanul_api/index.php/Experiment/Posts?view=all";
		$content = $this->api->callAPI("GET", $url);
		$data['all_blogs'] = $content;
      
        $data['description'] = "Website yang berisikan informasi yang bermanfaat, kadang gak jelas, dan juga jadi wadah curhatan si Wanul.";
        $data['keywords'] = "ichwanul fadhli, blog ichwanul fadhli, ichwanul, wanul, blog iseng-iseng, blog iseng";
      
        $this->load->view('blog/_blog', $data);
	}
	
	public function read($title = null){
		if(empty($title)){
			show_404();
		}
		else{
			$url = "http://localhost:85/blogsiwanul_project/blogsiwanul_api/index.php/Experiment/Posts?view=blog&title=". $title;
			$content = $this->api->callAPI("GET", $url);
			$data['blog'] = $content;

			$url = "http://localhost:85/blogsiwanul_project/blogsiwanul_api/index.php/Experiment/Posts/comment/". $title;
			$content = $this->api->callAPI("GET", $url);
			$data['comment'] = $content;
			
			if($data['blog']['data'] === NULL){
				show_404();
			}
			else{
				$this->load->view('blog/_blog_read', $data);
			}

			if(!empty($this->input->post("submit"))){
				$url = "http://localhost:85/blogsiwanul_project/blogsiwanul_api/index.php/Experiment/Posts/comment";

				$data = http_build_query(
					array(
						'comment_guest_name' => $this->input->post('nama'),
						'comment_guest_email' => $this->input->post('email'),
						'comment_content'    => $this->input->post('komen'),
						'post_title'         => $title
					)
				);

				$content = $this->api->callAPI('POST', $url, $data);

				$result = $content;

				if($result['message'] == "Input success."){
					redirect(site_url('blog/read/'. $title));
				}
			}

		}
	}
}