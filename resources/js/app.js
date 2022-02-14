require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//helper
function getWindowWidth () {
	return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
}

// Sidebar menu toggle
const sideMenu = document.querySelector("#sidebar");
const closeBtn = document.querySelector(".close-btn");
const mainContent = document.querySelector("#main-container");

menuBtn.addEventListener('click', (e) => {
	sideMenu.classList.toggle('active');
	mainContent.classList.toggle('active');
});

closeBtn.addEventListener('click', function() {
	if(sideMenu.classList.contains('active') && mainContent.classList.contains('active')) {
		sideMenu.classList.remove('active');
		mainContent.classList.remove('active');
	}
})