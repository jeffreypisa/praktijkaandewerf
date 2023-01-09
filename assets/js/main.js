import $ from "jquery";
import bootstrap from 'bootstrap/dist/js/bootstrap.bundle';
window.bootstrap = bootstrap;

// Init plugins
// import { slick_init } from './scripts/slick.js';
import { matchheight } from './scripts/matchheightplugin.js';
// import { animejs } from './scripts/anime.js';
// import { lity_init } from './scripts/lityplugin.js';
// import { simpleparallax } from './scripts/simpleparallax.js';

// Scripts
import { site_is_loaded } from './scripts/site_is_loaded.js';
import { footer_down } from './scripts/footer_down.js';
// import { mobilemenu } from './scripts/mobilemenu.js';
// import { sticky_header } from './scripts/sticky_header.js';
// import { banner } from './scripts/banner.js';
// import { loadmoreposts } from './scripts/loadmoreposts.js';

// lity_init();
// simpleparallax();

$( document ).ready(function() {
	footer_down();
	// mobilemenu();
	// slick_init();
	// banner();
	// loadmoreposts();
});

$(window).on('load', function() {
	matchheight();
	// animejs();
	// sticky_header();
	site_is_loaded();
});