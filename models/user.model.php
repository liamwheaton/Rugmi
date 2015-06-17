<?php 

# user.model.php

#load the model library if it hasnt already been done
require_once '../libraries/model.lib.php';

class User extends model{

	# Tell the page model what table it belongs to
	protected $table = 'users';

	# We need to do this for the model to work
	public function __construct(){
		parent::__construct($this->table);
	}

	public function authenticate(){
		# $this->username is the username that was typed into the form
		# $this->password is the username that was typed into the form
		$user = $this->db
					 ->select('id, password')
					 ->from('users')
					 ->where('username', $this->username)
					 ->get_one();
		if($user){
			# check if both passwords are the same
			if(password_verify($this->password, $user['password'])) {
				$this->id = $user['id'];
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

}