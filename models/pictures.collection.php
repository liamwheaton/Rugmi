<?php 
# new_uploads_collection.collection.php

require_once '../libraries/collection.lib.php';

class Pictures_Collection extends Collection {

	protected $table = 'images';

	public function __construct($where = false){
		parent::__construct($this->table, $where);
	}
}