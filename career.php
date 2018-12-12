<script>
	
	function getRecipes() {
		
		var xhttp = new XMLHttpRequest();
		
		xhttp.onreadystatechange = function() {
		
			if (this.readyState == 4 && this.status == 200) {
		
				document.getElementsByTagName("list").innerHTML = this.statusText;
		
			}
		};
		
		xhttp.open("GET", "https://xivapi.com/search?indexes=Recipe&filters=ClassJob.ID=9,RecipeLevelTable.ClassJobLevel>=1,RecipeLevelTable.ClassJobLevel<=5&key=c01f6d205597419db64dd68c", true);
		xhttp.send();
		
	}
		
	function getMaterials() {
	
	}
	
</script>

<log>

	<nav>
		
		<ul id="classes">Class
			
			<li><button type="button" class="class" value="8" onclick="getRecipes()">Carpenter</button></li>
			<li><button type="button" class="class" value="9" onclick="getRecipes()">Blacksmith</button></li>
			<li><button type="button" class="class" value="10" onclick="getRecipes()">Armorer</button></li>
			<li><button type="button" class="class" value="11" onclick="getRecipes()">Goldsmith</button></li>
			<li><button type="button" class="class" value="12" onclick="getRecipes()">Leatherworker</button></li>
			<li><button type="button" class="class" value="13" onclick="getRecipes()">Weaver</button></li>
			<li><button type="button" class="class" value="14" onclick="getRecipes()">Alchemist</button></li>
			<li><button type="button" class="class" value="15" onclick="getRecipes()">Culinarian</button></li>
		
		</ul>
		
		<ul>Extras
			
			<li>Favorites</li>
		
		</ul>
	
	</nav>

	<list>

		<?php

//			$endpoint = "https://xivapi.com/";
//			$key = "key=c01f6d205597419db64dd68c";

//			$jsonData = file_get_contents($endpoint."search?indexes=Item&filters=ItemUICategory.Name_en=Crystal&".$key);

//			$items = json_decode($jsonData, true);

//			foreach($items["Results"] as $item){

//				echo "<table><tr><td>".$item["Name"]."</td></tr></table>";

//			}

		?>

	</list>

	<recipe>

		test

	</recipe>
	
</log>
