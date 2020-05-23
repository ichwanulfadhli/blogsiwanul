<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->library('api');
	}
	
	public function index(){
		$url = "https://api.blogsiwanul.my.id/index.php/Posts?view=all";
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
			$url = "https://api.blogsiwanul.my.id/index.php/Posts?view=blog&title=". $title;
			$content = $this->api->callAPI("GET", $url);
			$data['blog'] = $content;
			
			if($data['blog']['data'] === NULL){
				show_404();
			}
			else{
				$this->load->view('blog/_blog_read', $data);
			}
		}
	}
}