<?php 

# new_upload.model.php

#load the model library if it hasnt already been done
require_once '../libraries/model.lib.php';


class Picture extends model{


	# Tell the page model what table it belongs to
	protected $table = 'images';

	# We need to do this for the model to work
	public function __construct(){
		parent::__construct($this->table);
	}

}