<?php
class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Users');
		$this->load->model('Setting');
	}

	public function index(){
		$data['session'] = null;
		if($this->session->userdata('auth')){
			$data['session'] = $this->session->userdata('auth');
		} 
		if($this->Setting->Maintenance()){
			redirect(base_url().'Home/Maintenance','refresh');
		}
		$data['Site'] = $this->Setting->SiteInfo();
		$this->load->view($this->Setting->Theme().'Landing',$data);
	   
	}
	public function Maintenance(){
		if($this->Setting->Maintenance()){
			$this->load->view($this->Setting->Theme().'Maintenance');
		} else {
			redirect(base_url(),'refresh');
		}
	}
}