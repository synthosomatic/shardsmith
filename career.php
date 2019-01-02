<script>
	
// Get data from API
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

// Get level IDs from RecipeLevelTable
function getLevels(xhttp) {
    // Get the <ul> element with id="recipeLevel"
    var recipeLevels = document.getElementById("recipeLevel");
    // As long as <ul> has a child node, remove it
    while (recipeLevels.hasChildNodes()) {
        recipeLevels.removeChild(recipeLevels.firstChild);
    }

    var rawData = xhttp.response;
    var data = [];
    var levels = [];


    // Extract the level IDs into their own array
    for (i in rawData.Results) {

        var level = rawData.Results[i]['ID'];
        data.push(level);

    }

    levels = data.filter(function(value, index, Arr) {

        return index % 5 == 0;

    });

    var levelRanges = "";

    for (i = 0; i < levels.length; i++) {

        var lower = levels[i];
        var upper = levels[i] + 4;

        document.getElementById("recipeLevel").innerHTML = levelRanges += "<li><button type=\"button\" class=\"levelRange\" onclick=\"fetchData('https://xivapi.com/search?key=c01f6d205597419db64dd68c&indexes=Recipe&filters=ClassJob.ID=" + job + ",SecretRecipeBookTargetID=0,RecipeLevelTableTargetID>=" + lower + ",RecipeLevelTableTargetID<=" + upper + "', getRecipes)\">" + lower + "-" + upper + "</button></li>" + "<br />";

    }

}

// Get recipes for specified job
function getRecipes(xhttp) {
    // Get the <ul> element with id="recipeLevel"
    var recipeList = document.getElementById("recipeList");
    // As long as <ul> has a child node, remove it
    while (recipeList.hasChildNodes()) {
        recipeList.removeChild(recipeList.firstChild);
    }

    var rawData = xhttp.response;

    var list = "";

    for (i = 0; i < rawData.Results.length; i++) {

        var id = rawData.Results[i]['ID'];
        var name = rawData.Results[i]['Name'];

        document.getElementById("recipeList").innerHTML = list += "<li><button type=\"button\" class=\"recipe\" onclick=\"fetchData('https://xivapi.com/recipe/" + id + "/?key=c01f6d205597419db64dd68c', getRecipeMaterials)\">" + name + "</button></li>" + "<br />";

    }

}

</script>

<div id="craftingLog">

    <div id="jobList">

        <p><span>Crafting Log</span><span>Level 51 Miner</span></p>

        <ul id="jobs">

            <li><button type="button" class="job" value="8" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Carpenter.png"/></button></li>
            <li><button type="button" class="job" value="9" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Blacksmith.png"/></button></li>
            <li><button type="button" class="job" value="10" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Armorer.png"/></button></li>
            <li><button type="button" class="job" value="11" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Goldsmith.png"/></button></li>
            <li><button type="button" class="job" value="12" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Leatherworker.png"/></button></li>
            <li><button type="button" class="job" value="13" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Weaver.png"/></button></li>
            <li><button type="button" class="job" value="14" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Alchemist.png"/></button></li>
            <li><button type="button" class="job" value="15" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Culinarian.png"/></button></li>
			<li><button type="button" class="job" value="15">Search</button></li>
			
        </ul>
		
	</div>

    <div id="log">

        <div id="logMenu">

            <p>Recipe Search</p>

            <ul>Extras

                <li>Favorites</li>

            </ul>

            <p>Recipe Level</p>

            <button>Recipes</button><button>Special</button>

            <ul id="recipeLevel">

            </ul>

        </div>

        <div id="recipeList">

        </div>

        <div id="recipeMats">

        </div>

    </div>

</div>
