<?php

	require_once 'config.php';

	$query = $dbconnect->prepare("select Material from material_amounts where Prereq = '1'");
	$query->execute();
	
	$jsonData = $query->fetchAll(PDO::FETCH_ASSOC);
					
	echo json_encode($jsonData);

	$dbconnect = null;
					
	return;

?>