<?php

require_once ROOT . "classes/business/Skin.php";

class ApiController {

	const KEY = "fae7a94b-7781-4998-9d04-4aa1f09e5223";
	const PREFIX = "https://na.api.pvp.net/api/lol/";

	public static function apiCall($query) {
		$url = self::PREFIX . $query . "&api_key=" . self::KEY;
		$json = file_get_contents($url);
		return json_decode($json);
	}

	public function getAllSkins() {
		$query = "static-data/na/v1.2/champion?champData=skins";

		return ApiController::apiCall($query);
	}
}