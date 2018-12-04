<section id="careers">
	<ul>
		<li><button type="button" class="career" value="gathering">Gathering</button></li>
		<li><button type="button" class="career" value="crafting">Crafting</button></li>
	</ul>
	<ul id="jobs"></ul>
</section>
<section id="careerdata">

<?php

	$key = "c01f6d205597419db64dd68c";

	$jsonData = file_get_contents("https://xivapi.com/Item?columns=LevelItem,ItemUICategory.Name,Name&key=".$key);

	$items = json_decode($jsonData, true);

	foreach($items["Results"] as $item){

		echo $item["Name"];

	}

?>

</section>