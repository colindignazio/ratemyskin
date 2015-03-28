<?php

require_once ROOT . 'classes/ApiController.php';

class SkinController {

	public $skins = false;

	public function printSkins() {
		$apiCtrl = new ApiController();
		$rawJSON = $apiCtrl->getAllSkins();

		foreach($rawJSON->data as $champ) {
			foreach($champ->skins as $skin) {
				if($skin->name === 'default') {
					$champname = $champ->name;
				}
				else {
					unset($champname);
				}
				$this->skins[] = new Skin($skin, $champname);
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