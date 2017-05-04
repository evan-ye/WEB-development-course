<?php

class UserReg {
	public $name;
	public $lastname;
	public $email;
	public $ticket;

	public function __construct($nm, $lnm, $eml, $tck) {
		$this->name = $nm;
		$this->lastname = $lnm;
		$this->email = $eml;
		$this->ticket = $tck;
	}

	public function doTrimData() {
		$this->name = trim($this->name);
		$this->lastname = trim($this->lastname);
		$this->email = trim($this->email);
	}

	private function doSearchWriteF() {
		$conn = new mysqli('localhost', 'root', 'root');
	    $conn->query("CREATE DATABASE IF NOT EXISTS AntonBerezenskyi");
	    $conn->close();
	    $conn = new mysqli('localhost', 'root', 'root', 'AntonBerezenskyi');
	    $createTableQuery = "CREATE TABLE IF NOT EXISTS users(
                          id int(4) NOT NULL auto_increment,
                          name varchar(50) NOT NULL default '',
                          lastname varchar(50) NOT NULL default '',
                          email varchar(50) NOT NULL default '',
                          ticket varchar(10) NOT NULL default '',
                          regdate timestamp NOT NULL default CURRENT_TIMESTAMP,
                          PRIMARY KEY (id)
                          )";
        $conn->query($createTableQuery);
        $selectEmailQuery = "SELECT email FROM users";
        $selectEmails = $conn->query($selectEmailQuery);
        while ($rowEmail = mysqli_fetch_assoc($selectEmails)) {
			if ($rowEmail['email'] == $this->email) {
			    echo "You are already registered</br>";
			    $this->email = false;
			}
		}
	    if ($this->email) {
	    	$addNewUserQuery = "INSERT INTO users (name, lastname, email, ticket)
                              VALUES ('$this->name', '$this->lastname', '$this->email', '$this->ticket')";
        	$conn->query($addNewUserQuery);
        	echo "<span style='color: green'>Registration completed successfully.</span></br>";
	    }
	}

	public function getValidation() {
		if (empty($this->name)) {
			echo "Enter Name.</br>";
		}
		if (empty($this->lastname)) {
			echo "Enter Last name.</br>";
		}
		if (empty($this->email)) {
			echo "Enter email.</br>";
		} else if ((preg_match("~^([a-z0-9_\-\.])+@([a-z0-9_\-\.])+\.([a-z0-9])+$~i", $this->email)) === 0) {
			echo "Enter valid email.</br>";
		} else {
			$this->doSearchWriteF();
		}
	}	
}

?>