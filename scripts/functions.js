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
  var list = document.getElementsByTagName("list")[0];
  // As long as <ul> has a child node, remove it
  while (list.hasChildNodes()) {
    list.removeChild(list.firstChild);
  }
  var listing = document.getElementsByTagName("listing")[0];
  // As long as <ul> has a child node, remove it
  while (listing.hasChildNodes()) {
    listing.removeChild(listing.firstChild);
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

    document.getElementById("recipeLevel").innerHTML = levelRanges += "<li><button type=\"button\" class=\"levelRange\" onclick=\"fetchData('https://xivapi.com/search?key=c01f6d205597419db64dd68c&indexes=Recipe&filters=ClassJob.ID=" + job + ",SecretRecipeBookTargetID=0,ItemResult.ItemRepairTargetID>0,ItemResult.ItemSearchCategoryTargetID>0,RecipeLevelTable.ClassJobLevel>=" + lower + ",RecipeLevelTable.ClassJobLevel<=" + upper + "', getRecipes)\">" + lower + "-" + upper + "</button></li>" + "<br />";

  }

}

// Get recipes for specified job
function getRecipes(xhttp) {

  var list = document.getElementsByTagName("list")[0];
  // As long as list has a child node, remove it
  while (list.hasChildNodes()) {
    list.removeChild(list.firstChild);
  }
  var listing = document.getElementsByTagName("listing")[0];
  // As long as listing has a child node, remove it
  while (listing.hasChildNodes()) {
    listing.removeChild(listing.firstChild);
  }

  var rawData = xhttp.response;

  var listings = "";

  for (i = 0; i < rawData.Results.length; i++) {

    var id = rawData.Results[i]['ID'];
    var name = rawData.Results[i]['Name'];

    list.innerHTML = listings += "<li><button type=\"button\" class=\"recipe\" onclick=\"fetchData('https://xivapi.com/recipe/" + id + "/?key=c01f6d205597419db64dd68c', getRecipeMaterials)\">" + name + "</button></li>" + "<br />";

  }

}

function getRecipeMaterials(xhttp) {
  
  var listing = document.getElementsByTagName("listing")[0];
  // As long as listing has a child node, remove it
  while (listing.hasChildNodes()) {
    listing.removeChild(listing.firstChild);
  }
  
  var rawData = xhttp.response;
  var materials = "";
  
  var ItemIngredient0 = rawData.ItemIngredient0['Name'];
  var ItemIngredient1 = rawData.ItemIngredient1['Name'];
  var ItemIngredient2 = rawData.ItemIngredient2['Name'];
  var ItemIngredient3 = rawData.ItemIngredient3['Name'];
  var ItemIngredient4 = rawData.ItemIngredient4['Name'];
  var ItemIngredient5 = rawData.ItemIngredient5['Name'];
  var ItemIngredient6 = rawData.ItemIngredient6['Name'];
  var ItemIngredient7 = rawData.ItemIngredient7['Name'];
  var ItemIngredient8 = rawData.ItemIngredient8['Name'];
  var ItemIngredient9 = rawData.ItemIngredient9['Name'];
  var AmountIngredient0 = rawData['AmountIngredient0'];
  var AmountIngredient1 = rawData['AmountIngredient1'];
  var AmountIngredient2 = rawData['AmountIngredient2'];
  var AmountIngredient3 = rawData['AmountIngredient3'];
  var AmountIngredient4 = rawData['AmountIngredient4'];
  var AmountIngredient5 = rawData['AmountIngredient5'];
  var AmountIngredient6 = rawData['AmountIngredient6'];
  var AmountIngredient7 = rawData['AmountIngredient7'];
  var AmountIngredient8 = rawData['AmountIngredient8'];
  var AmountIngredient9 = rawData['AmountIngredient9'];
    
  listing.innerHTML = materials += "<p>" + ItemIngredient0 + AmountIngredient0 + "</p>" + "<p>" + ItemIngredient1 + AmountIngredient1 + "</p>" + "<p>" + ItemIngredient2 + AmountIngredient2 + "</p>" + "<p>" + ItemIngredient3 + AmountIngredient3 + "</p>" + "<p>" + ItemIngredient4 + AmountIngredient4 + "</p>" + "<p>" + ItemIngredient5 + AmountIngredient5 + "</p>" + "<p>" + ItemIngredient6 + AmountIngredient6 + "</p>" + "<p>" + ItemIngredient7 + AmountIngredient7 + "</p>" + "<p>" + ItemIngredient8 + AmountIngredient8 + "</p>" + "<p>" + ItemIngredient9 + AmountIngredient9 + "</p>";
  
}

function getQuests(xhttp) {
	var quests = "";
	var rawData = xhttp.response;
	var questlist = document.getElementsByTagName("quests")[0];
	
	for (i = 0; i < rawData.Results.length; i++) {
		var id = rawData.Results[i]['ID'];
		var name = rawData.Results[i]['Name'];
		
		questlist.innerHTML = quests += "<p>" + id + " " + name + "</p>";
	}
}
