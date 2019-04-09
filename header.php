<?php
	error_reporting(E_ALL);
	ini_set("display_errors", "1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- If you can read this, say hi to Cerise Black on Hyperion! -->
	<title>Shardsmith</title>
	<meta name="robots" content="noimageindex" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<base href="/" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/normalize.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="css/screen.css" media="screen"/>
	<script type="text/javascript" src="scripts/functions.js"></script>
</head>
<body>
<header>
	<svg id="logo" width="26.5625em" height="2.5em">
		<defs>
			<linearGradient id="backing" x1="0%" y1="0%" x2="0%" y2="100%">
				<stop offset="0%" style="stop-color:#475787;stop-opacity:.15" />
				<stop offset="100%" style="stop-color:#b4a678;stop-opacity:.15" />
			</linearGradient>
			<linearGradient id="text" x1="0%" y1="0%" x2="0%" y2="100%">
				<stop offset="0%" style="stop-color:#fff;stop-opacity:1" />
				<stop offset="100%" style="stop-color:#876b1f;stop-opacity:1" />
			</linearGradient>
		</defs>
		<a href="/">
			<text id="backing" text-anchor="middle" dominant-baseline="central" fill="url(#backing)" font-family="Eorzea" x="50%" y="50%" font-size="4.0625em">SHARDSMITH</text>
			<text id="text" text-anchor="middle" dominant-baseline="central" fill="url(#text)" font-family="Open Sans" font-weight="300" x="50%" y="50%" font-size="1.5em" letter-spacing="1em">SHARDSMITH</text>
		</a>
	</svg>
	<ul>
		<li>
			<a href="/">Home</a>
		</li>
		<li>
			<a href="/career/">Career</a>
		</li>
		<li>
			<a href="/quests/">Quest Tracker</a>
		</li>
		<li>
			<a href="/alberia/">New Alberia Census</a>
		</li>
<!--		<li>
			<a href="/join/">Create an Account</a>
		</li>
		<li>
			<?php
//					if (isset($_POST["username"])) {
//						echo "Welcome, ", $_POST["username"], "! <a href=\"logout.php\">Logout</a>?";
//					} else {
//						echo "<form method=\"POST\" action=\"form.aspx\">
//							<input type=\"text\" id=\"username\" name=\"username\" minlength=\"3\" maxlength=\"12\" placeholder=\"Username\" required>
//							<input type=\"text\" id=\"password\" name=\"password\" minlength=\"12\" maxlength=\"24\" placeholder=\"Password\" required>
//							<button type=\"submit\" value=\"submit\" >Login</button>
//						</form>";
//					};
			?>
		</li>-->
	</ul>
	<classToggle>
		<img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Dragoon.png" />
	</classToggle>
</header>
<main>
