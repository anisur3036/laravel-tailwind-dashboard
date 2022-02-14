require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

//helper
function getWindowWidth () {
	return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
}

// Sidebar menu toggle
const menuBtn = document.querySelector(".menu-btn");
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

document.querySelectorAll('.sidebar-submenu').forEach(e => {
	e.querySelector('.has-sidebar-subitem').onclick = (event) => {
		event.preventDefault();
		e.querySelector('.has-sidebar-subitem .icon').classList.toggle('active');
		e.querySelector('.has-sidebar-subitem').classList.toggle('active');
		let dropdownContent = e.querySelector('.sidebar-menu-dropdown-content');
		let dropdownContentLists = dropdownContent.querySelectorAll('li');
		let activeHight = dropdownContentLists[0].clientHeight * dropdownContentLists.length;
		dropdownContent.classList.toggle('active');
		dropdownContent.style.height = dropdownContent.classList.contains('active') ? activeHight + 'px': '0'
	}

})