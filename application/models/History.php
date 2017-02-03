<?php
class History extends CI_Model {
	public $result;
	public $get;
	public function result($username){
		foreach($this->db->query("select * from History where key = '$username'")->result() as $result);
		$this->result = $result;
		return true;
	}

	public function List(){
		return $this->result;
	}
	public function Count(){
		return count($this->result);
	}

	public function get($id){
		if(!$id){
			return false;
		} else {
			foreach($this->db->query("select * from History where id = '$id")->result() as $result);
			if($result){
				return $result;
			} else {
				return false;
			}
		}
	}
	public function Erase(){
		$this->get = null;
	}
	public function getUsername(){
		return $this->get->username;
	}
	public function getInfo(){
		return $this->get->info;
	}
	public function Add($username,$info,$status){
		if(!$username || !$info || !$status){
			return false;
		} else {
			if($this->db->insert("history",array('username' => $username,'info' => $info,'status' => $status))){
				return true;
			} else {
				return false;
			}
		}
	}

	public function Delete($id){
		if(!$id){
			return false;
		} else {
			if($this->db->query("delete from History where id = '$id'")){
				return true;
			} else {
				return false;
			}
		}
	}
	public function Change($id,$info,$status){
		//if();
	}
}