<?php

# 1. Load Libraries
require_once '../models/comment.model.php';
require_once '../libraries/url.lib.php';
require_once '../libraries/auth.lib.php';

# 2. Logic

Auth::kickout('signin.php');

$user_id = Auth::user_id();

if($_POST && $_POST != ""){

	$comment = new Comment();
	
	$comment->content = $_POST['content'];
	$comment->date = date('Y-m-d H:i:s');
	$comment->image_id = $_GET['image_id'];
	$comment->user_id = $user_id;
	
	$comment->save();

	URL::redirect('index.php');

}




# 3. Load Views
include '../views/header.php';
include '../views/nav.php';
include '../views/view_image.php';
include '../views/footer.php';