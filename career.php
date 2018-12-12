<script>
	
	function getJob(val) {
		
		var job = val;
        
        var levelRange = document.createElement("li");
        var levelRangeButton = document.createElement("button");
        var levelRangeLabel = document.createTextNode("1-5");

        // Get the <ul> element with id="recipeLevel"
        var list = document.getElementById("recipeLevel");

        // As long as <ul> has a child node, remove it
        while (list.hasChildNodes()) {   
            list.removeChild(list.firstChild);
        }

        levelRange.appendChild(levelRangeButton);
        levelRangeButton.appendChild(levelRangeLabel);
        document.getElementById("recipeLevel").appendChild(levelRange);
			
		function getRecipes(val) {

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
		
	}
		
</script>

<div id="nav">
		
	<ul id="jobs">Crafting Log

		<li><button type="button" class="job" value="8" onclick="getJob(this.value)">Carpenter</button></li>
		<li><button type="button" class="job" value="9" onclick="getJob(this.value)">Blacksmith</button></li>
		<li><button type="button" class="job" value="10" onclick="getJob(this.value)">Armorer</button></li>
		<li><button type="button" class="job" value="11" onclick="getJob(this.value)">Goldsmith</button></li>
		<li><button type="button" class="job" value="12" onclick="getJob(this.value)">Leatherworker</button></li>
		<li><button type="button" class="job" value="13" onclick="getJob(this.value)">Weaver</button></li>
		<li><button type="button" class="job" value="14" onclick="getJob(this.value)">Alchemist</button></li>
		<li><button type="button" class="job" value="15" onclick="getJob(this.value)">Culinarian</button></li>

	</ul>

</div>

<div id="log">

	<div id="nav">
		
		<p>Recipe Search</p>
		
		<ul>Extras
			
			<li>Favorites</li>
		
		</ul>
		
		<p>Recipe Level</p>
		
		<button>Recipes</button><button>Special</button>

		<ul id="recipeLevel">
		
		</ul>
	
	</div>

	<div id="list">

	</div>

	<div id="recipe">

	</div>
	
</div>
