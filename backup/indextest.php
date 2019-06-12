<?php

include "header.php";
 
?>
	
<content>

<?php

	if (isset($_POST["username"])) {

		echo "<p>Welcome, ", $_POST["username"], "!</p>";
		
	} else {
		
		echo "<p>Welcome!</p>";
		echo "<form action=\"index.php\" method=\"post\" action=";?><?php echo htmlspecialchars($_SERVER["PHP_SELF"]),">
		Username: <input type=\"text\" name=\"username\" /><br />
		Password: <input type=\"text\" name=\"password\" /><br />
		<input type=\"submit\">
		</form>";
		
	};
	
?>

</content>
	
<?php

include 'footer.php';

?>