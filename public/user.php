<?php 

	#libraries

require_once '../libraries/auth.lib.php';
require_once '../libraries/url.lib.php';
require_once '../libraries/form.lib.php';

require_once '../models/image.model.php';
require_once '../models/images.collection.php';
require_once '../models/user.model.php';

	#logic
Auth::kickout();


	#views/redirect

include '../views/header.php';
include '../views/admin_nav.php';
include '../views/user_profile.php';
include '../views/footer.php';

