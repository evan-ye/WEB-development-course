<?php
$servername = "localhost";
$username = "root";
$password = "";


$db = new mysqli($servername, $username, $password);

if ($db->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$db->query("CREATE DATABASE IF NOT EXISTS k_users");
$db->select_db("k_users");
$db->query(
	"CREATE TABLE users (
	id int(4) NOT NULL auto_increment,
	firstname varchar(20) NOT NULL default '',
	secondname varchar(20) NOT NULL default '',
	email varchar(50) NOT NULL default '',
	ticket varchar(10) NOT NULL default '',
	regdate timestamp NOT NULL default CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
	)"
	);