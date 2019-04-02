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

function getQuests(xhttp) {
	var quests = "";
	var rawData = xhttp.response;
	
	for (i = 0; i < rawData.Results.length; i++) {
		var id = rawData.Results[i]['ID'];
		var name = rawData.Results[i]['Name'];
		
		document.getElementsByTagName("quests")[0].InnerHTML = quests += id + name;
	}
}
</script>
	
<quests></quests>
