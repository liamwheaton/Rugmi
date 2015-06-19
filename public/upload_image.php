<?php 

# 1. Load Libraries
require_once '../libraries/form.lib.php';
require_once '../libraries/upload.lib.php';
require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';

require_once '../models/new_upload.model.php';

# 2. Logic
Auth::kickout('index.php');
$user_id = Auth::user_id();


if($_POST){

	$new_upload = new new_upload();

	if($_FILES){
		# Upload the file and...
		$files = UPLOAD::to_folder('assets/uploads/');
				
		# Put a link to it in the database
		$new_upload->caption = $_POST['caption'];
		$new_upload->user_id = $user_id;
		$picture->date = date('Y-m-d H:i:s');
		$new_upload->url   = $files[0]['filepath'];
		$new_upload->save();
	}

	URL::redirect('user.php');
}

# 3. Load Views / Redirects

include '../views/header.php';
include '../views/admin_nav.php';
include '../views/upload_form.php';
include '../views/footer.php';