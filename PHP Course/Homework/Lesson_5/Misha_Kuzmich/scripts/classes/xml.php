<?php
class xml{
	public static $dom;
	public static function checkEmail($useremail)
	{
		$sxml = simplexml_load_file('../xml/base.xml');
		$users = $sxml->user;
		foreach ($users as $user) {
			if( $user->email == $useremail ){
				return 0;
			}
		}
		return 1;
	}
	public function insertNew($userdata)
	{
		echo $user->firstname;
		$dom = self::$dom;
		$user = $dom->addChild('user');
		$user->addChild("firstname", $userdata->firstname);
		$user->addChild('secondname', "$userdata->secondname");
		$user->addChild('email', "$userdata->email");
		$user->addChild('ticket', "$userdata->ticket");
		$dom->asXML("../xml/base.xml");

		response::$msg = "Регистрация успешна!";
		response::$status = "ok";
		response::send();
	}
	public function __construct()
	{
		if(file_exists('../xml/base.xml')){
			self::$dom = simplexml_load_file('../xml/base.xml');
		}
		else{
			$fp = fopen("../xml/base.xml", "w");
			fwrite($fp, "<?xml version=\"1.0\" encoding=\"UTF-8\"?> \n<base>\n</base>");
			fclose($fp);
			self::$dom = simplexml_load_file('../xml/base.xml');
		}
	}
}