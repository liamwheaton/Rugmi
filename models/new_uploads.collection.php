<?php 
# images.collection.php

require_once '../libraries/collection.lib.php';

class New_Uploads_Collection extends Collection {

	protected $table = 'images';

	public function __construct($where = false){
		parent::__construct($this->table, $where);
	}
}