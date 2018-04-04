$(document).ready(function() {
	$("#careerdata").on("click", "tr.level_range", function() {
		$(this).next("tr.list").toggleClass("hide");
	});
	$("#careerdata").on("click", "button#expand", function() {
		$("tr.list").removeClass("hide");
	});
	$("#careerdata").on("click", "button#collapse", function() {
		$("tr.list").addClass("hide");
	});
	$("button.career").click(function() {
		var $career = $(this).val();
		$("#jobs").empty();
		$.ajax({
			contentType: 'application/json; charset=UTF-8',
			data: {'function' : 'career', 'career' : $career},
			dataType: 'json',
			url: 'functions.php',
			success: function(data) {
				$.each(data, function(key,value) {
					var $jobname = value.Jobname;
					var $job = value.Job;
					var $shorthand = value.Shorthand;
					$("#jobs").append("<li>"
						+"<button type=\"button\" class=\"job\" id=\""+$job+"\" value=\""+$job+"\">"
							+"<img src=\"https://s3.amazonaws.com/www.shardsmith.com/images/icons/icon_job_"+$job+"_glow.png\" alt=\""+$job+"\" />"
						+"</button>"
					+"</li>");
				});
				$("button.job").click(function() {
					var $job = $(this).val();
					$("#careerdata").empty();
					$.ajax({
						contentType: 'application/json; charset=UTF-8',
						data: {'function' : 'job', 'career' : $career, 'job' : $job},
						dataType: 'json',
						url: 'functions.php',
						success: function(data) {
							$("#careerdata").html("<button type=\"button\" id=\"expand\" value=\"Expand All\">Expand All</button>"
							+"<button type=\"button\" id=\"collapse\" value=\"Collapse All\">Collapse All</button>"
							+"<table class=\"job\" id=\""+$job+"\">"
								+"<tr>"
									+"<th>"+$job+" <span></span></th>"
								+"</tr>"
							+"</table>");
							$.each(data, function(key,value) {
								var $level_range = key;
								if ($career == 'gathering') {
									$("table.job").append("<tr class=\"level_range\">"
										+"<td>Level "+$level_range+" <span></span></td>"
									+"</tr>"
									+"<tr class=\"list hide\">"
										+"<td>"
											+"<table id=\""+$level_range+"\">"
												+"<tr class=\"header\">"
													+"<td>Level</td>"
													+"<td colspan=\"2\">Item</td>"
													+"<td>Have</td>"
													+"<td>Goal</td>"
													+"<td>Update</td>"
												+"</tr>"
											+"</table>"
										+"</td>"
									+"</tr>");
									$.each(value, function(key,value) {
										var $itemid = value.ItemID;
										var $db = value.DB;
										var $material = value.Material;
										var $level = value.Level;
										var $grade = value.Grade;
										var $have = value.Have;
										var $goal = value.Goal;
										var $complete = value.Complete;
										$("table#"+$level_range).append("<tr class=\"material\">"
											+"<td>"+$level+$grade+"</td>"
											+"<td class=\"icon\" style=\"width:42px;\"><a href=\"http://na.finalfantasyxiv.com/lodestone/playguide/db/"+$db+"/"+$itemid+"/\" class=\"eorzeadb_link\"><img style=\"height:42px; vertical-align:bottom; width:42px; background:url(\'https://s3.amazonaws.com/www.shardsmith.com/images/items/"+$job+"/"+$itemid+".png\') 0 1px/42px 42px;\" src=\"https://s3.amazonaws.com/www.shardsmith.com/images/items/reflection.png\" alt=\""+$material+"\" /></a></td>"
											+"<td>"+$material+"</td>"
											+"<td><input type=\"number\" maxlength=\"10\" value=\""+$have+"\"></td>"
											+"<td>"+$goal+"</td>"
											+"<td><button type=\"button\" class=\"update\" value=\"Update\">Update</button></td>"
										+"</tr>");
										var $count = 0;
										var $count_checked = 0;
										var $count_rows = 0;
										var $count_rows_checked = 0;
										$("tr.material").each(function() {
											$count++;
										});
										$("table#"+$level_range+" tr.material").each(function() {
											$count_rows++;
										});
										$("table#"+$job+" tr:first").children("th").children("span").html("("+$count+")");
										$("table#"+$level_range).parent().parent().prev("tr.level_range").children("td").children("span").html("("+$count_rows+")");
									});
								} else if ($career == 'crafting') {
									$("table.job").append("<tr class=\"level_range\">"
										+"<td>Level "+$level_range+" <span></span></td>"
									+"</tr>"
									+"<tr class=\"list hide\">"
										+"<td>"
											+"<table id=\""+$level_range+"\">"
												+"<tr>"
													+"<td>Level</td>"
													+"<td colspan=\"2\">Item</td>"
													+"<td>Complete</td>"
												+"</tr>"
											+"</table>"
										+"</td>"
									+"</tr>");
									$.each(value, function(key,value) {
										var $itemid = value.ItemID;
										var $db = value.DB;
										var $recipe = value.Recipe;
										var $level = value.Level;
										var $grade = value.Grade;
										var $rarity = value.Rarity;
										var $complete = value.Complete;
										$("table#"+$level_range).append("<tr class=\"recipe\" id=\""+$recipe+"\">"
											+"<td>"+$level+$grade+"</td>"
											+"<td class=\"icon\" style=\"width:42px;\">"
												+"<a href=\"http://na.finalfantasyxiv.com/lodestone/playguide/db/"+$db+"/"+$itemid+"/\" class=\"eorzeadb_link\">"
													+"<img style=\"height:42px; vertical-align:bottom; width:42px; background:url(\'https://s3.amazonaws.com/www.shardsmith.com/images/items/"+$job+"/"+$itemid+".png\') 0 1px/42px 42px;\" src=\"https://s3.amazonaws.com/www.shardsmith.com/images/items/reflection.png\" alt=\""+$recipe+"\" />"
												+"</a>"
											+"</td>"
											+"<td class=\""+$rarity+"\">"+$recipe+"</td>"
											+"<td><input type=\"checkbox\" class=\"complete\" value=\""+$complete+"\"></td>"
										+"</tr>");
										var $count = 0;
										var $count_checked = 0;
										var $count_rows = 0;
										var $count_rows_checked = 0;
										$("tr.recipe").each(function() {
											$count++;
										});
										$("table#"+$level_range+" tr.recipe").each(function() {
											$count_rows++;
										});
										$("table#"+$job+" tr:first").children("th").children("span").html("("+$count+")");
										$("table#"+$level_range).parent().parent().prev("tr.level_range").children("td").children("span").html("("+$count_rows+")");
									});
								};
							});
						}
					});
				});
			},
			error: function(data, errorThrown){
				alert('Request failed: '+errorThrown);
			}
		});
	});
});