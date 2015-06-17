<?php

# 1. Load Libraries
require_once '../libraries/database.lib.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/auth.lib.php';

require_once '../models/user.model.php';

# 2. Logic
# Create a new user
if($_POST){

	$user = new User();
	$user->username = $_POST['username'];
	$user->email = $_POST['email'];
	$user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$user->save();
	
	Auth::log_in($user->id);
	URL::redirect('user.php');
}


# 3. Load Views
include '../views/header.php';
include '../views/nav.php';
include '../views/signup_form.php';
include '../views/footer.php';