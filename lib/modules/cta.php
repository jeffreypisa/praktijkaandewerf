
<style type="text/css">
/*
	 * - Strook | Content
	 */

<?php if(get_field('cta_weergave', 'options') == 'card_xl') {}

else {
	?>.layout[data-layout="cta"] .acf-field[data-name="tekst_kolom_2"] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('cta_achtergrond', 'options')) {}

else {
	?>.layout[data-layout="cta"] .acf-field[data-name="achtergrond"] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('cta_afbeelding', 'options')) {}

else {
	?>.layout[data-layout="cta"] .acf-field[data-name="afbeelding"] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('cta_thema', 'options')) {}

else {
	?>.layout[data-layout="cta"] .acf-field[data-name="thema"] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('cta_titel', 'options')) {}

else {
	?>.layout[data-layout="cta"] .acf-field[data-name="titel"] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('cta_tekst', 'options')) {}

else {
	?>.layout[data-layout="cta"] .acf-field[data-name="tekst"] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('cta_link', 'options')) {}

else {
	?>.layout[data-layout="cta"] .acf-field[data-name="link"] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('cta_kolom_2_titel', 'options')) {}

else {
	?>.layout[data-layout="cta"] .acf-field[data-name="kolom_2_titel"] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('cta_kolom_2_tekst', 'options')) {}

else {
	?>.layout[data-layout="cta"] .acf-field[data-name="kolom_2_tekst"] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('cta_kolom_2_link', 'options')) {}

else {
	?>.layout[data-layout="cta"] .acf-field[data-name="kolom_2_link"] {
		display: none;
	}

	<?php
}

?>

<?php if(get_field('cta_kolom_2_tekst_onder_link', 'options')) {}

else {
	?>.layout[data-layout="cta"] .acf-field[data-name="kolom_2_tekst_onder_link"] {
		display: none;
	}

	<?php
}

?>

</style>