<?php

	if (isset($_GET['function'])) {
		
		$function = $_GET['function'];
		
		switch($function) {
			
			case 'career' :

				if (isset($_GET['career'])) {

					require_once 'config.php';

					$query = $dbconnect->prepare("select * from jobs where Category = :category order by Rank");
					$query->bindParam(':category', $category);
					$category = $_GET['career'];
					$query->execute();
					
					$jsonData = $query->fetchAll(PDO::FETCH_ASSOC);
					
					echo json_encode($jsonData);

					$dbconnect = null;
					
					return;

				} else {
				
					echo 'No career data found.';
					
					return;

				};
				
			case 'job' :
		
				if (isset($_GET['job'])) {
					
					if ($_GET['career'] == 'gathering') {

						require_once 'config.php';

						$query = $dbconnect->prepare("select * from materials join user_career_gathering on materials.Material = user_career_gathering.Material join categories on materials.Category = categories.Category join level_range on materials.Level_Range = level_range.Level_Range where materials.Job = :job and user_career_gathering.Username = 'zen' order by level_range.ID, Level, Grade, Hidden, CatID");
						$query->bindParam(':job', $job);
						$job = $_GET['job'];
						$query->execute();
						
						$jsonData = $query->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC);
						
						echo json_encode($jsonData);

						$dbconnect = null;

						return;
						
					} else if ($_GET['career'] == 'crafting') {

						require_once 'config.php';

						$query = $dbconnect->prepare("select * from recipes join user_career_crafting on recipes.Recipe = user_career_crafting.Recipe join categories on recipes.Category = categories.Category join level_range on recipes.Level_Range = level_range.Level_Range join books on recipes.Book = books.Book where recipes.Job = :job and user_career_crafting.Username = 'zen' order by level_range.ID, Rank, Level, Grade, Rarity, CatID");
						$query->bindParam(':job', $job);
						$job = $_GET['job'];
						$query->execute();
						
						$jsonData = $query->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC);
						
						echo json_encode($jsonData);

						$dbconnect = null;

						return;
						
					};

				} else {
				
					echo 'No job data found.';
					
					return;
					
				};
				
		};
		
	};

?>
