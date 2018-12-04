<section id="careers">
	<ul id="jobs">
		<li><button type="button" class="job" value="woodworking">Carpenter</button></li>
		<li><button type="button" class="job" value="smithing">Blacksmith</button></li>
		<li><button type="button" class="job" value="armorcraft">Armorer</button></li>
		<li><button type="button" class="job" value="goldsmithing">Goldsmith</button></li>
		<li><button type="button" class="job" value="leatherworking">Leatherworker</button></li>
		<li><button type="button" class="job" value="clothcraft">Weaver</button></li>
		<li><button type="button" class="job" value="alchemy">Alchemist</button></li>
		<li><button type="button" class="job" value="cooking">Culinarian</button></li>
	</ul>
</section>
<section id="careerdata">

<?php

	$endpoint = "https://xivapi.com/";
	$key = "key=c01f6d205597419db64dd68c";

	$jsonData = file_get_contents($endpoint."search?indexes=Item&filters=ItemUICategory.Name_en=Crystal&".$key);

	$items = json_decode($jsonData, true);

	foreach($items["Results"] as $item){

		$itemData = file_get_contents($endpoint."Item/2?".$key);

		echo "<table><tr><td>".$item["Name"]."</td></tr></table>";

	}

?>

</section>