<?php
class Service extends CI_Model{
	public function list(){
		return $this->db->query("select id,name,price from service where enable = '1'")->result();
	}
	public function getInfo($id){
		foreach ($this->db->query("select * from service where id = '$id' AND enable = '1'")->result() as $result);
		return $result;
	}
	public function Add($name,$url,$data,$method,$type){
		if(!$name){
			return false;
		} else {
			if($this->db->insert("service",$this->db->insert('Service',array('nama' => $name,'url' => $url,'data' => $data,'method' => $method,'type' => $type)))){
				return true;
			} else {
				return false;
			}
		}
	}
}