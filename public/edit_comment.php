<?php 

	#libraries and models

require_once '../libraries/url.lib.php';
require_once '../libraries/auth.lib.php';
require_once '../libraries/form.lib.php';

require_once '../models/comment.model.php';
require_once '../models/comments.collection.php';
require_once '../models/new_upload.model.php';
require_once '../models/new_uploads.collection.php';


	#logic

Login::kickout();
URL::save();

$comment = new Comment();

$comment->load($_GET['id']);

if ($comment->user_id != Auth::user_id()) {
	URL::redirect('index.php');
}

if ($_POST) {


	$comment->content = $_POST['content'];

	$comment->save();

	URL::restore();
}

	#views

include '../views/header.php';
include '../views/admin_nav.php';
include '../views/edit_comment.php';
include '../views/footer.php';

