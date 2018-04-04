<?php

include 'header.php';
 
?>

<script>

	$(document).ready(function(){
			
		$(":button.career").click(function() {

			var career = $(this).val();
			var fn = "GetCareer"+career;
			var GetCareer = window[fn];
				
			GetCareer();

		});
			
	});

</script>

<button type="button" class="career" value="Gathering">Gathering</button><button type="button" class="career" value="Crafting">Crafting</button>
	
<content>

	<section id="jobs"></section>

	<section id="content"></section>
	
</content>
	
<?php

include 'footer.php';

?>