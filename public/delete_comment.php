<?php 

#1 libraries models

require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';

require_once '../models/comment.model.php';
require_once '../models/new_upload.model.php';

#2 Logic

Auth::kickout();

$comment = new Comment();

$comment->load($_GET['id']);

if ($comment->user_id != Auth::user_id()) {
	URL::redirect('index.php');
}

$comment->delete();

#3 views/redirect

URL::restore();