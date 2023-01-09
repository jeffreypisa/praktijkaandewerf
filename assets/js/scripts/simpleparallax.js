import simpleParallax from 'simple-parallax-js';

export function simpleparallax() {
  var image = document.getElementsByClassName('js-parallax');
  new simpleParallax(image, {
    transition: 'cubic-bezier(0,0,0,1)',
    orientation: 'down',
    scale: 1.5
  });
}