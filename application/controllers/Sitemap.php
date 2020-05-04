<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Example use of the CodeIgniter Sitemap Generator Model
 * 
 * @author Gerard Nijboer <me@gerardnijboer.com>
 * @version 1.0
 * @access public
 *
 */
class Sitemap extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// We load the url helper to be able to use the base_url() function
		$this->load->helper('url');

		$this->load->library('api');
		
		$this->load->model('sitemapmodel');

		$url = "http://localhost:85/blogsiwanul_project/blogsiwanul_api/index.php/Posts?view=all";
		$content = $this->api->callAPI("GET", $url);
		$data['blog'] = json_decode($content, true);

		$this->articles = array();

		foreach($data['blog']['data'] as $result){
			$this->articles[] = array(
				'loc' => base_url('Blog/view/'. date("Y", strtotime($result['post_date'])). '/'. date("m", strtotime($result['post_date'])). '/'. date("d", strtotime($result['post_date']))),
				'lastmod' => date('Y-m-d', time()),
				'changefreq' => 'monthly',
				'priority' => 0.5
			);
		}
	}
	
	/**
	 * Generate a sitemap index file
	 * More information about sitemap indexes: http://www.sitemaps.org/protocol.html#index
	 */
	public function index() {
		$this->sitemapmodel->add(base_url('sitemap/general'), date('Y-m-d', time()));
		$this->sitemapmodel->add(base_url('sitemap/articles'), date('Y-m-d', time()));
		$this->sitemapmodel->output('sitemapindex');
	}
	
	/**
	 * Generate a sitemap both based on static urls and an array of urls
	 */
	public function general() {
		$this->sitemapmodel->add(base_url(), NULL, 'monthly', 1);
		$this->sitemapmodel->add(base_url('Blog'), NULL, 'monthly', 0.9);

		foreach ($this->articles as $article) {
			$this->sitemapmodel->add($article['loc'], $article['lastmod'], $article['changefreq'], $article['priority']);
		}
		$this->sitemapmodel->output();
	}
	
	/**
	 * Generate a sitemap only on an array of urls
	 */
	public function articles() {
		foreach ($this->articles as $article) {
			$this->sitemapmodel->add($article['loc'], $article['lastmod'], $article['changefreq'], $article['priority']);
		}
		$this->sitemapmodel->output();
	}
	
}