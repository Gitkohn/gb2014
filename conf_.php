<?php

class conf {
	const USR_NAME = "";
	const USR_PW = "";
	const USR_SALT = "";
	const USR_MAIL = "";
	const USR_PART = "";
	const USR_FNAME = "";
	const USR_LNAME = "";
	const TBL_USR = "";

	const SHOW_NAV = "";

	const NAV = "";
	
	public function __construct() {

	}

	public function getDataBaseInformation() {
		$info = array('dbHost' => '', 'port' => '', '' => '', 'user' => '', 'password' => '');
		return $info;
	}

}
?>