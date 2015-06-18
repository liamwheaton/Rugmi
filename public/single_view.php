<?php

# 1. Load Libraries
require_once '../models/image.model.php';
require_once '../models/images.collection.php';
require_once '../models/comments.collection.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/auth.lib.php';

# 2. Logic
$image_id = $_GET['image_id'];




# 3. Load Views
include '../views/header.php';
include '../views/nav.php';
include '../views/view_image.php';
include '../views/footer.php';