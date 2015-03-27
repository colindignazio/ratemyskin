<?php

class Skin {

	public $id = false;

	public $name = false;

	public function Skin($skin) {
		$this->id = $skin->id;
		$this->name = $skin->name;
	}
} 