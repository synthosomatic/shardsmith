<script>
  
function getJournalSections(xhttp) {
	
	var journalSections = "";
	var rawData = xhttp.response;
	
	for (i = 0; i < rawData.Results.length; i++) {
		
		var name = rawData.Results[i]['Name'];
		
		document.getElementsByTagName("journalSection").innerHTML = journalSections += "<button>" + name + "</button>";
	
	}

}
  
</script>
  
<button onclick="fetchData('https://xivapi.com/JournalSection?key=c01f6d205597419db64dd68c', getJournalSections)">Quests</button>

<journal>
  
  <journalHeader>
    
    <title></title>
    <subtitle></subtitle> <completedCount></completedCount>
    
  </journalHeader>
  
  <journalNav>
    
    <journalSection>
      
      <span></span>
      
      <search></search>
      
    </journalSection>
    
    <journalCategory></journalCategory>
    
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
