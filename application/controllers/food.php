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
		//$this->load->view('documentPreparing');
		$this->load->view('homepage');
		$this->load->view('bot');
	}
	public function answer()
	{
		$this->load->view('top');
		$this->load->view('query_and_answer');
		$this->load->view('bot');
	}
	public function show()
	{
		$id=(isset($_REQUEST["id"])?$_REQUEST["id"]:"");
		//echo "value : ".$id;
		$this->load->view('top');
		$this->load->model('models');
		$result=$this->models->show($id);
		$data=array("data_result"=>$result);
		$this->load->view('show',$data);
		$this->load->view('bot');
	}
	public function list_all()
	{
		$this->load->model('models');
		$result=$this->models->all();
		$data=array("data_result"=>$result);
		$this->load->view('top');
		$this->load->view('show_list',$data);
		$this->load->view('bot');
	}
	public function list_n()
	{
		$this->load->model('models');
		$result=$this->models->n();
		$data=array("data_result"=>$result);
		$this->load->view('top');
		$this->load->view('show_list',$data);
		$this->load->view('bot');
	}
	public function list_c()
	{
		$this->load->model('models');
		$result=$this->models->c();
		$data=array("data_result"=>$result);
		$this->load->view('top');
		$this->load->view('show_list',$data);
		$this->load->view('bot');
	}
	public function list_e()
	{
		$this->load->model('models');
		$result=$this->models->e();
		$data=array("data_result"=>$result);
		$this->load->view('top');
		$this->load->view('show_list',$data);
		$this->load->view('bot');
	}
	public function list_s()
	{
		$this->load->model('models');
		$result=$this->models->s();
		$data=array("data_result"=>$result);
		$this->load->view('top');
		$this->load->view('show_list',$data);
		$this->load->view('bot');
	}
}
