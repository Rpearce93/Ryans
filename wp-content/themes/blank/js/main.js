window.buildjs = {

	init: function() {

		buildjs.global.init();
		buildjs.global.particlesInit();
		buildjs.global.navbarScroll();
		buildjs.global.readMore();
		buildjs.global.smoothScroll();
		buildjs.global.openHamburger();
		buildjs.global.checkTop();
		buildjs.global.owlCarousel();
	},

	global: require('./methods/global'),
	particles: require('./particles.min.js'),
	owlCarousel: require('./owl-carousel.min.js'),
	plugins: require('./plugins')

}

$(document).ready(buildjs.init);

