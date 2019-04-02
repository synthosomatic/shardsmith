<script>
  
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
  
</script>
  
<quests onload="fetchData('https://xivapi.com/Quest?key=c01f6d205597419db64dd68c', getQuests)">Quests</quests>

<journal>
  
  <journalHeader>
    
    <title></title>
    <subtitle></subtitle> <completedCount></completedCount>
    
  </journalHeader>
  
  <journalNav>
    
    <journalSection>
      
      <span>
        
        <button>MSQ (ARR/HW)</button>
        <button>MSQ (SB)</button>
        <button>CoaNE</button>
        <button>Sidequests</button>
        <button>Beast Tribe (ARR/HW)</button>
        <button>Beast Tribe (SB)</button>
        <button>Class/Job</button>
        <button>Other</button>
        
      </span>
      
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
