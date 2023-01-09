<style type="text/css">
/*
	 * - Strook | Afbeelding
	 */


<?php if(get_field('afbeelding_achtergrond', 'options')) {}

else {
	?>.layout[data-layout="afbeelding"] .acf-field[data-name="afbeelding_achtergrond"] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('afbeelding_afbeelding', 'options')) {}

else {
	?>.layout[data-layout="afbeelding"] .acf-field[data-name="afbeelding"] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('afbeelding_achtergrond', 'options')) {}

else {
	?>.layout[data-layout="afbeelding"] .acf-field[data-name="achtergrond"] {
		display: none;
	}

	<?php
}

?>

</style>