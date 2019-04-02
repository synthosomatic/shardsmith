<?php

include 'header.php';

if ($_SERVER['REQUEST_URI']=='/') {
	include 'home.php';
} elseif ($_SERVER['REQUEST_URI']=='/career/') {
	include 'career.php';
} elseif ($_SERVER['REQUEST_URI']=='/quests/') {
	include 'quests.php';
} elseif ($_SERVER['REQUEST_URI']=='/join/') {
	include 'join.php';
} elseif ($_SERVER['REQUEST_URI']=='/test/') {
	include 'test.php';
} elseif ($_SERVER['REQUEST_URI']=='/eo/') {
	include '../maginia-registrar/home.php';
} else {
	include '404.php';
}
	
include 'footer.php';

?>
