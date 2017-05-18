<?php
class response {
	public static $status = 'fail';
	public static $msg;

	public static function error($msg)
	{
		response::$status = "fail";
		response::$msg = $msg;
		response::send();
	}
	
	public static function send(){
		$obj = [
			"status" => self::$status,
			"msg" => self::$msg,
		];
		die(json_encode($obj));
	}
}