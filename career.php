<script>
	
	function getRecipes() {
		
		var xhttp = new XMLHttpRequest();
		
		xhttp.onreadystatechange = function() {
		
			if (this.readyState == 4 && this.status == 200) {
		
				document.getElementById("list").innerHTML = this.responseText;
		
			}
     
		};
		
		xhttp.open("GET", "https://xivapi.com/search?key=c01f6d205597419db64dd68c&indexes=Recipe&filters=ClassJob.ID=8,RecipeLevelTable.ClassJobLevel>=1,RecipeLevelTable.ClassJobLevel<=5", true);
		xhttp.send();
		
	}
		
</script>

<div id="log">

	<div id="nav">
		
		<ul id="jobs">Jobs
			
			<li><button type="button" class="job" value="8" onclick="getRecipes()">Carpenter</button></li>
			<li><button type="button" class="job" value="9" onclick="getRecipes()">Blacksmith</button></li>
			<li><button type="button" class="job" value="10" onclick="getRecipes()">Armorer</button></li>
			<li><button type="button" class="job" value="11" onclick="getRecipes()">Goldsmith</button></li>
			<li><button type="button" class="job" value="12" onclick="getRecipes()">Leatherworker</button></li>
			<li><button type="button" class="job" value="13" onclick="getRecipes()">Weaver</button></li>
			<li><button type="button" class="job" value="14" onclick="getRecipes()">Alchemist</button></li>
			<li><button type="button" class="job" value="15" onclick="getRecipes()">Culinarian</button></li>
		
		</ul>
		
		<ul>Extras
			
			<li>Favorites</li>
		
		</ul>
	
	</div>

	<div id="list">

	</div>

	<div id="recipe">

	</div>
	
</div>
