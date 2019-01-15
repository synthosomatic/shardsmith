// Get data from API
function fetchData(url, cFunction) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.responseType = "json";
    xhttp.onreadystatechange = function () {
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

    levels = data.filter(function (value, index, Arr) {

        return index % 5 == 0;

    });

    var levelRanges = "";

    for (i = 0; i < levels.length; i++) {

        var lower = levels[i];
        var upper = levels[i] + 4;

        document.getElementById("recipeLevel").innerHTML = levelRanges += "<li class=\"levelRange\" onclick=\"fetchData('https://xivapi.com/search?key=c01f6d205597419db64dd68c&indexes=Recipe&filters=ClassJob.ID=" + job + ",ItemResult.ItemSearchCategoryTargetID>0,RecipeLevelTable.ClassJobLevel>=" + lower + ",RecipeLevelTable.ClassJobLevel<=" + upper + "', getRecipes)\">" + lower + "-" + upper + "</li>" + "<br />";

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

        document.getElementById("recipeList").innerHTML = list += "<li class=\"recipe\" onclick=\"fetchData('https://xivapi.com/recipe/" + id + "/key=c01f6d205597419db64dd68c', getRecipeMaterials)\">" + name + "</li>" + "<br />";

    }

}
