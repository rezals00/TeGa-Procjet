<?php
class API extends CI_Model {
	public function get($id){
		if(!$id){
			return false;
		} else {
			foreach($this->db->query("select * from Api where id = '$id'")->result() as $result)
			if($result){
				return $result;
			} else {
				return false;
			}
		}
	}

	public function MPOST($url,$data){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec();
		curl_close($ch);
		return $result;
	}
	public function MGET($url){
		$result = file_get_contents($url);
		return $result;
	}
}