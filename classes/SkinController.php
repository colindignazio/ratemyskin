<?php

require_once ROOT . 'classes/ApiController.php';

class SkinController {

	public $skins = false;

	public function printSkins() {
		$apiCtrl = new ApiController();
		$rawJSON = $apiCtrl->getAllSkins();

		foreach($rawJSON->data as $champ) {
			foreach($champ->skins as $skin) {
				$this->skins[] = new Skin($skin);
			}
		}

	//	foreach($this->skins as $skin) {
	//		echo $skin->id . ' ' . $skin->name;
	//	}
	}

	public function getRandomSkins($num = 2) {
		$ids = array_rand($this->skins, $num);

		for($i = 0; $i < $num; $i++) {
			$skins[] = $this->skins[$ids[$i]];
		}

		return $skins;
	}
} 