<?php

$host = "zendb.cn5kmpwmbexo.us-east-1.rds.amazonaws.com";
$user = "shardsmith";
$pass = "D5rcIG1pL9K5bEiz";
$database = "shardsmith";


try {

	$dbconnect = new PDO("mysql:host=$host;dbname=$database", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
	$dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}

catch(PDOException $e) {

	echo "Connection failed: " . $e->getMessage();

};

?>
