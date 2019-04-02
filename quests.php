<script>
  
function getJournalSections(xhttp) {
	
	var journalSections = "";
	var rawData = xhttp.response;
	
	for (i = 0; i < rawData.Results.length; i++) {
		
		var id = rawData.Results[i]['ID'];
		var name = rawData.Results[i]['Name'];
		
		document.getElementsByTagName("journalSection")[0].innerHTML = journalSections += "<button onclick="fetchData('https://xivapi.com/JournalSection/' + id + '?key=c01f6d205597419db64dd68c', getJournalCategories);">" + name + "</button>";
	
	}

}
	
function getJournalCategories(xhttp) {
	
	var journalCategories = "";
	var rawData = xhttp.response;
	
	for (i = 0; i < rawData.GameContentLinks.JournalCategory.JournalSection.length; i++) {
		
		var id = journalCategories[i];
		
		document.getElementById("journalCategory").innerHTML = journalCategories += "<option value='" + id + "'>" + id + "</option>";
		
	}
	
}
  
</script>
  
<journal>
  
  <journalHeader>
    
    <title></title>
    <subtitle></subtitle> <completedCount></completedCount>
    
  </journalHeader>
  
  <journalNav>
    
    <journalSection>
	
		<script>
				fetchData('https://xivapi.com/JournalSection?key=c01f6d205597419db64dd68c', getJournalSections);
		</script>
      
     	<span></span>
      
      <search></search>
      
    </journalSection>
    
    <select id="journalCategory"></select>
    
  </journalNav>
  
  <journalBody>
    
    <list>

      <journalGenre>

        <quests></quests>

      </journalGenre>

    </list>
    
  </journalBody>
  
  <journalFooter>
    
    <subCompletedCount></subCompletedCount>
    
  </journalFooter>
  
</journal>
