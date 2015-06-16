<?php

# 1. Load Libraries
require_once '../libraries/database.lib.php';
require_once '../libraries/form.lib.php';

# 2. Logic
$form_type = $_GET['ftype'];




# 3. Load Views
include '../views/header.php';
include '../views/nav.php';



include '../views/login_form.php';

include '../views/footer.php';