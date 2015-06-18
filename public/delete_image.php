<?php 

#1 libraries models

require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';

require_once '../models/image.model.php';

#2 Logic

Auth::kickout();

$image = new Image();

$image->load($_GET['id']);

$image->delete();

#3 views/redirect

URL::redirect('user.php');