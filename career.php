<script>
	
	function getRecipes(val) {
		
        	var job = val;
		var xhttp = new XMLHttpRequest();
        
        	xhttp.onreadystatechange = function() {
		
			if (this.readyState == 4 && this.status == 200) {
		
				document.getElementById("list").innerHTML = this.responseText;
		
			} else {
            
            			document.getElementById("list").innerHTML = this.statusText;
            
			}
     
		};
		
		xhttp.open("GET", "https://xivapi.com/search?key=c01f6d205597419db64dd68c&indexes=Recipe&filters=ClassJob.ID="+job+",RecipeLevelTable.ClassJobLevel>=1,RecipeLevelTable.ClassJobLevel<=5", true);
		xhttp.send();
		
	}
		
</script>

<div id="log">

	<div id="nav">
		
		<ul id="jobs">Jobs
			
			<li><button type="button" class="job" value="8" onclick="getRecipes(this.value)">Carpenter</button></li>
			<li><button type="button" class="job" value="9" onclick="getRecipes(this.value)">Blacksmith</button></li>
			<li><button type="button" class="job" value="10" onclick="getRecipes(this.value)">Armorer</button></li>
			<li><button type="button" class="job" value="11" onclick="getRecipes(this.value)">Goldsmith</button></li>
			<li><button type="button" class="job" value="12" onclick="getRecipes(this.value)">Leatherworker</button></li>
			<li><button type="button" class="job" value="13" onclick="getRecipes(this.value)">Weaver</button></li>
			<li><button type="button" class="job" value="14" onclick="getRecipes(this.value)">Alchemist</button></li>
			<li><button type="button" class="job" value="15" onclick="getRecipes(this.value)">Culinarian</button></li>
		
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
