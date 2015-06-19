<?php 

# 1. Load Libraries
require_once '../libraries/form.lib.php';
require_once '../libraries/upload.lib.php';
require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';

require_once '../models/picture.model.php';

# 2. Logic
Auth::kickout('index.php');
$user_id = Auth::user_id();


if($_POST){

	$picture = new picture();

	if($_FILES){
		# Upload the file and...
		$files = UPLOAD::to_folder('assets/uploads/');
				
		# Put a link to it in the database

		$picture->caption = $_POST['caption'];
		$picture->user_id = $user_id;
		$picture->url   = $files[0]['filepath'];
		$picture->save();

	}

	URL::redirect('user.php');
}

# 3. Load Views / Redirects

include '../views/header.php';
include '../views/admin_nav.php';
include '../views/upload_form.php';
include '../views/footer.php';