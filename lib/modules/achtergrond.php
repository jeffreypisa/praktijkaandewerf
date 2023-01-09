<style type="text/css">
/*
	 * - Strook | Afbeelding
	 */


<?php if(get_field('achtergrond_transparant', 'options')) {}

else {
	?>.select2-results__options li[id*='bg-transparent'] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('achtergrond_wit', 'options')) {}

else {
	?>.select2-results__options li[id*='bg-white'] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('achtergrond_lichtgrijs', 'options')) {}

else {
	?>.select2-results__options li[id*='bg-greylight'] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('achtergrond_donker', 'options')) {}

else {
	?>.select2-results__options li[id*='bg-dark'] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('achtergrond_merk', 'options')) {}

else {
	?>.select2-results__options li[id*='bg-brand'] {
		display: none;
	}

	<?php
}

?>
<?php if(get_field('achtergrond_actie', 'options')) {}

else {
	?>.select2-results__options li[id*='bg-action'] {
		display: none;
	}

	<?php
}

?>

</style>