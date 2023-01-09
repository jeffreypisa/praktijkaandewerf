import Mark from 'mark.js';

export function banner() {
	function numberWithCommas(x) {
		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
	}
	
	// Create an instance of mark.js and pass an argument containing
	// the DOM object of the context (where to search for matches)
	var markInstance = new Mark(document.querySelector(".pb-banner"));
	var thenumber = document.querySelector(".pb-banner h2").getAttribute('data-countup');
	markInstance.mark(thenumber);
	
	// How long you want the animation to take, in ms
	const animationDuration = 2000;
	// Calculate how long each ‘frame’ should last if we want to update the animation 60 times per second
	const frameDuration = 1000 / 60;
	// Use that to calculate how many frames we need to complete the animation
	const totalFrames = Math.round( animationDuration / frameDuration );
	// An ease-out function that slows the count as it progresses
	const easeOutQuad = t => t * ( 2 - t );
	
	// The animation function, which takes an Element
	const animateCountUp = el => {
		let frame = 0;
		const countTo = parseInt( el.innerHTML, 10 );
		// Start the animation running 60 times per second
		const counter = setInterval( () => {
			frame++;
			// Calculate our progress as a value between 0 and 1
			// Pass that value to our easing function to get our
			// progress on a curve
			const progress = easeOutQuad( frame / totalFrames );
			// Use the progress value to calculate the current count
			const currentCount = Math.round( countTo * progress );
	
			// If the current count has changed, update the element
			if ( parseInt( el.innerHTML, 10 ) !== currentCount ) {
				el.innerHTML = numberWithCommas(currentCount);
			}
	
			// If we’ve reached our last frame, stop the animation
			if ( frame === totalFrames ) {
				clearInterval( counter );
			}
		}, frameDuration );
	};
	

	var markelement = document.querySelector('.pb-banner mark');
	var markwidth = markelement.offsetWidth;
	markelement.style.width = markwidth + 'px';
	
	const countupEls = document.querySelectorAll( '.pb-banner mark' );
	countupEls.forEach( animateCountUp );

}