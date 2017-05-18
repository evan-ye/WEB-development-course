<?php
require 'config.php';
switch (DBTYPE) {
	case "SQL":
		$db = new db('localhost','root','');
		$db->newDB('k_users');
		$db->newTable();
	break;
	case "XML":
		$db = new xml();
	break;
}