<?php
class Users extends CI_Model {
	public $result;
	public function Login($username,$password){
		if(!$username || !$password){
			return false;
		} else {
			if($this->db->query("select * from User where username = '$username' AND password = '$password'")){
				if($this->db->query("select * from User where username = '$username' AND password = '$password'")->num_rows() == '1'){
				    foreach($this->db->query("select * from User where username = '$username' AND password = '$password'")->result() as $result);
				    $this->result = $result;
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		}
	} 
	public function Register($username,$password,$email,$nama){
		if(!$username || !$password || !$email || !$nama){
			return false;
		} else {
			if($this->db->insert('User',array(
				'username' => $username,
				'password' => $password,
				'email'    => $email,
				'nama'     => $nama,
				'code'      => md5(date('Y-m-d H:i:s')),
				'status'   => 1
				))){
				return true;
			} else {
				return false;
			}
		}
	}
	public function Balance($code,$action,$quantity){
		if($action == '-'){
			if(strpos($quantity,'-')){
				return false;
			} else {
				if($this->db->query("update User set saldo = saldo - $quantity where code = '$code'")){
					return true;
				} else {
					return false;
				}
			}
		} else if($action == '+'){
			if(strpos($quantity,'-') || strpos($quantity, '+')){
				return false;
			} else {
				if($this->db->query("update User set saldo = saldo + $quantity where code = '$code'")){
					return true;
				} else {
					return false;
				}
			}
		}
	}
	public function ChangeCode($code,$codeold){
		if($codeold != $this->getcode()){
			return false;
		} else {
			if($this->db->query("update user set code = '$code' where code = '$codeold'")){
				return true;
			} else {
				return false;
			}
		}
	}
	public function ChangePassword($code,$password,$passwordold){
		if($passwordold != $this->getPass()){
			return false;
		} else {
			if($this->db->query("update user set password = '$password' where code ='$code'")){
				return true;
			} else {
				return false;
			}
		}
	}
	public function Load($code){
		foreach($this->db->query("select * from User where code = '$code'")->result() as $result);
		if($result){
		$this->result = $result;
	    } else {
	    	return false;
	    }
		return true;
	}
	public function getUname(){
		return $this->result->username;
	}
	public function getCode(){
		return $this->result->code;
	}
	public function getNama(){
		return $this->result->nama;
	}
	public function getSaldo(){
		return $this->result->saldo;
	}
	public function getInfo(){
		return $this->result;
	}
	public function getPass(){
		return $this->result->password;
	}
}