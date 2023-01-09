<style type="text/css">
	/*
		 * - hide ACF layouts 
		 */

	/* Remove borders on li since we not removing li's  */
	.acf-fc-popup li {
		border: 0 !important;
	}

	<?php if(get_field('strook_content', 'options')) {}

	else {
		?>.acf-fc-popup a[data-layout="content"] {
			display: none;
		}

		<?php
	}

	?><?php if(get_field('strook_blokken', 'options')) {}

	else {
		?>.acf-fc-popup a[data-layout="blokken"] {
			display: none;
		}

		<?php
	}

	?><?php if(get_field('strook_tegels', 'options')) {}

	else {
		?>.acf-fc-popup a[data-layout="tegels"] {
			display: none;
		}

		<?php
	}

	?><?php if(get_field('strook_artikelen', 'options')) {}

	else {
		?>.acf-fc-popup a[data-layout="artikelen"] {
			display: none;
		}

		<?php
	}

	?><?php if(get_field('strook_cta', 'options')) {}

	else {
		?>.acf-fc-popup a[data-layout="cta"] {
			display: none;
		}

		<?php
	}

	?><?php if(get_field('strook_accordion', 'options')) {}

	else {
		?>.acf-fc-popup a[data-layout="accordion"] {
			display: none;
		}

		<?php
	}

	?><?php if(get_field('strook_video', 'options')) {}

	else {
		?>.acf-fc-popup a[data-layout="video"] {
			display: none;
		}

		<?php
	}

	?><?php if(get_field('strook_logos', 'options')) {}

	else {
		?>.acf-fc-popup a[data-layout="logos"] {
			display: none;
		}

		<?php
	}
	
	?><?php if(get_field('strook_afbeelding', 'options')) {}
	
	else {
		?>.acf-fc-popup a[data-layout="afbeelding"] {
			display: none;
		}
	
		<?php
	}
	
	?><?php if(get_field('strook_prijstabel', 'options')) {}
	
	else {
		?>.acf-fc-popup a[data-layout="prijstabel"] {
			display: none;
		}
	
		<?php
	}
	
	?>
</style>