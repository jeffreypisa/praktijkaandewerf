<style type="text/css">
/*
	 * - Strook | Content
	 */

<?php if(get_field('content_achtergrond', 'options')) {}

else {
	?>.layout[data-layout="content"] .acf-field[data-name="achtergrond"] {
		display: none;
	}

	<?php
}

?><?php if(get_field('content_afbeelding', 'options')) {}

else {
	?>.layout[data-layout="content"] .acf-field[data-name="afbeelding"] {
		display: none;
	}

	<?php
}

?><?php if(get_field('content_thema', 'options')) {}

else {
	?>.layout[data-layout="content"] .acf-field[data-name="thema"] {
		display: none;
	}

	<?php
}

?><?php if(get_field('content_lead', 'options')) {}

else {
	?>.layout[data-layout="content"] .acf-field[data-name="lead"] {
		display: none;
	}

	<?php
}

?><?php if(get_field('content_tekst', 'options')) {}

else {
	?>.layout[data-layout="content"] .acf-field[data-name="tekst"] {
		display: none;
	}

	<?php
}

?><?php if(get_field('content_usp', 'options')) {}

else {
	?>.layout[data-layout="content"] .acf-field[data-name="usp"] {
		display: none;
	}

	<?php
}

?><?php if(get_field('content_link', 'options')) {}

else {
	?>.layout[data-layout="content"] .acf-field[data-name="link"] {
		display: none;
	}

	<?php
}

?><?php if(get_field('content_link_secondary', 'options')) {}

else {
	?>.layout[data-layout="content"] .acf-field[data-name="link_secondary"] {
		display: none;
	}

	<?php
}

?>
</style>