<section id="careers">
	<ul>
		<li><button type="button" class="career" value="gathering">Gathering</button></li>
		<li><button type="button" class="career" value="crafting">Crafting</button></li>
	</ul>
	<ul id="jobs"></ul>
</section>
<section id="careerdata">

<?php

$key = "c01f6d205597419db64dd68c";

$jsonData = file_get_contents("https://xivapi.com/Item/2?columns=LevelItem,ItemUICategory.Name,Name&key=".$key);

$items = json_decode($jsonData);

foreach($items as $item){
	
	echo $item;

	//$image_url = 'https://storage.cloud.google.com/manasmith-221002.appspot.com/images/adventurers/icons/'.$adventurer['id'].'_'.$adventurer['variation'].'.png';
	
	//echo '<table class="adventurer '.$adventurer['element'].' rank'.$adventurer['newrank'].' collected'.$adventurer['collected'].'"><tr class="header"><th>'.$adventurer['name'].'</th></tr><tr class="icon"><td style="background: url(\''.$image_url.'\') no-repeat center"></td></tr></table>';

}
	
?>

</section>