<?php
class Setting extends CI_Model {
	public $result;
	function __construct(){
		$result = $this->db->query("select * from Setting where id = '1'")->result();
		foreach($result as $result);
		$this->result = $result;
	}
	public function SiteInfo(){
		return $this->result;
	}
	public function Theme(){
		return "theme/".$this->result->theme."/";
	}
	public function Maintenance(){
		if($this->result->status == '1'){
			return false;
		} else {
			return true;
		}
	}
}