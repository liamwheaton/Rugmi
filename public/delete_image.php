<?php 

#1 libraries models

require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';


require_once '../models/picture.model.php';


#2 Logic

Auth::kickout();


$image = new Picture();


$image->load($_GET['id']);

$image->delete();

#3 views/redirect

URL::restore();
