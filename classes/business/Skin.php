<?php

class Skin {

	public $id = false;

	public $name = false;

	public function Skin($skin, $champname = null) {
		$this->id = $skin->id;

		$this->name = ($champname) ? 'Default ' . $champname : $skin->name;
	}
} 