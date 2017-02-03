<?php
class Main extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Users');
		$this->load->model('Setting');
		$this->load->model('History');
		$this->load->model('Api');
		$this->load->model('Order');
		if($this->Setting->Maintenance()){
			redirect(base_url().'Home/Maintenance','refresh');
		}
	}
	public function login(){
		if($this->session->userdata('auth')){
			redirect(base_url()."Main/Index",'refresh');
		} 
		if($this->Setting->Maintenance()){
			$this->load->view($this->Setting->Theme().'Maintaince');
		} else {
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			$this->output->set_content_type('application/json');
			if(!$this->input->post('username') || !$this->input->post('password')){
				$json = array('result' => 0,'msg' => 'Isi Data Dengan Benar');
			} else {
				if($this->Users->Login($this->input->post('username'),md5($this->input->post('password')))){
					$this->session->set_userdata('auth',array('key' => $this->Users->getCode()));
					$json = array('result' => 1);
				} else {
					$json = array('result' => 0, 'msg' => 'Username / Password Salah');
				}
			}
			print(json_encode($json));
		} else {
		$data['Site'] = $this->Setting->SiteInfo();
		$this->load->view($this->Setting->Theme().'Login',$data);
	   }
	   } 
	}
	public function index(){
		if(!$this->session->userdata('auth')){
			redirect(base_url()."Main/Logout",'refresh');
		} 
		$this->Users->Load($this->session->auth['key']);
		$data['session'] = $this->session->userdata('auth');
		$data['Site']    = $this->Setting->SiteInfo();
		$this->load->view($this->Setting->Theme().'Order',$data);
	}
	public function logout(){
		session_destroy();
		redirect(base_url()."Main/Login",'refresh');
	}
	public function register(){
		if($this->Setting->SiteInfo()->register == '0'){
			redirect(base_url(),'refresh');
		} 
		if($this->session->userdata('auth')){
			redirect(base_url().'Main/Index','refresh');
		}
		if($this->input->server('REQUEST_METHOD') == 'POST'){
			if(!$this->input->post('username') || !$this->input->post('password') || !$this->input->post('nama') || !$this->input->post('email')){
				$json = array('result' => 0 ,'msg' => 'Isi Data Dengan Benar');
			} else {
				if($this->User->Register($this->input->post('username'),md5($this->input->post('password')),$this->input->post('email'),$this->input->post('nama'))){
					$json = array('result' => 1);
				} else {
					$json = array('result' => 0,'msg' => 'Data Salah');
				}
			}
			print(json_encode($json));
		} else {
		$data['Site'] = $this->Setting->SiteInfo();
		$this->load->view($this->Setting->Theme().'Register',$data);
	   }
	}
}