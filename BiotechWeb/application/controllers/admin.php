<?php
class admin extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('db_admin');
		
	}
	
	public function index(){
		$this->load->view('template/header');
		$this->load->view('template/topbar');
		$this->load->view('template/sidebar');
		$this->load->view('admin');
		$this->load->view('template/footer');
	}
	
	public function insert(){
		print_r($_POST);
	}
}
?>