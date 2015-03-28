<?php

class MiscFunctions {
	public static function redirect($url) {
		header("Location: $url");
		die();
	}
}