<log>

	<nav>
		<ul id="classes">Class
			<li><button type="button" class="class" value="woodworking">Carpenter</button></li>
			<li><button type="button" class="class" value="smithing">Blacksmith</button></li>
			<li><button type="button" class="class" value="armorcraft">Armorer</button></li>
			<li><button type="button" class="class" value="goldsmithing">Goldsmith</button></li>
			<li><button type="button" class="class" value="leatherworking">Leatherworker</button></li>
			<li><button type="button" class="class" value="clothcraft">Weaver</button></li>
			<li><button type="button" class="class" value="alchemy">Alchemist</button></li>
			<li><button type="button" class="class" value="cooking">Culinarian</button></li>
		</ul>
		<ul>Extras
			<li>Favorites</li>
		</ul>
	</nav>

	<list>

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

	</list>

	<recipe>

		test

	</recipe>
	
</log>
