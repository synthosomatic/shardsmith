<script>
	
	function fetchData(url, cFunction) {
	  var xhttp;
	  xhttp = new XMLHttpRequest();
	  xhttp.responseType = "json";
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	      cFunction(this);
	    }
	  };
	  xhttp.open("GET", url, true);
	  xhttp.send();
	}

	function getLevels(xhttp) {

	  // Get the <ul> element with id="recipeLevel"
	  var recipeLevels = document.getElementById("recipeLevel");
	  // As long as <ul> has a child node, remove it
	  while (recipeLevels.hasChildNodes()) {
	    recipeLevels.removeChild(recipeLevels.firstChild);
	  }

		// convert level ID objects to number array
	  var rawData = xhttp.response;
	  var data = [];

	  for (i in rawData.Results) {

	    var level = Number(rawData.Results[i]['ID']);
	    data.push(level);

	  }

		//
		var levelRanges = "";
	  var i;
	  for (i = 0; i < data.length; i++) {

	    var upper = i + 5;

	    document.getElementById("recipeLevel").innerHTML = levelRanges += data[i] + "-" + upper + "<br />";

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
