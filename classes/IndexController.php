<?php

require_once ROOT . 'classes/SkinController.php';

class IndexController {

	public function init() {
		$skinCtrl = new SkinController();
		$skinCtrl->printSkins();
		$skins = $skinCtrl->getRandomSkins();
		echo $skins[0]->name . ' ' . $skins[1]->name;
	}
} 