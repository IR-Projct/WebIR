<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('top');
		$this->load->view('homepage');
		$this->load->view('bot');
	}

	public function search()
	{
		$name = isset($_GET'name_search'])?$_GET['name_search']:"";
		$this->load->model('model_gs','m');
		$data = array("list"=>$this->m->show_list());
		$this->load->view('top');
		$this->load->view('list_food',$data);
		$this->load->view('bot');
	}
}
