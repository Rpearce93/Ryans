window.buildjs = {

	init: function() {

		buildjs.global.init();
		buildjs.global.particlesInit();
		buildjs.global.navbarScroll();
		
	},

	global: require('./methods/global'),
	particles: require('./particles.min.js'),
	plugins: require('./plugins')

}

$(document).ready(buildjs.init);

