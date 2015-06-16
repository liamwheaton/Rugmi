<?php

# 1. Load Libraries
require_once '../libraries/database.lib.php';
require_once '../libraries/form.lib.php';

# 2. Logic

if($_POST){

	# Attempt to log the user in
	$user = new User();
	$user->username = $_POST['username'];
	$user->password = $_POST['password'];
	$success = $user->authenticate();

	if($success){
		Login::log_in($user->id);
		URL::redirect('user.php');
		
	}else{
		echo 'Your login details are incorrect!';
	}
}


# 3. Load Views
include '../views/header.php';
include '../views/nav.php';
include '../views/signin_form.php';
include '../views/footer.php';