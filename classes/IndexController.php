<?php

require_once ROOT . 'classes/SkinController.php';

class IndexController {

	public $shared = false;

	public function init() {
		$skinCtrl = new SkinController();
		$skinCtrl->printSkins();
		$this->skins = $skinCtrl->getRandomSkins();

		$this->makeHtml();
	}

	private function makeHtml() {
		$html = "
				<!DOCTYPE html>
				<html>
					<head>
						<body>
							<h2>Choose the better skin:</h2>
							<h4>{$this->skins[0]->name} 	or 	{$this->skins[1]->name}</h4>
							<form action='/submitChoice'>
								<input type='radio' name='choice' value='{$this->skins[0]->id}'>&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name='choice' value='{$this->skins[1]->id}'><br />
								<input type='submit' value='Submit'>
							</form>
						</body>
					</head>
				</html>";

		echo $html;
	}
} 