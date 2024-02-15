let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
	menu.classList.toggle('fa-times');
	navbar.classList.toggle('active');
};

window.onscroll = () => {
	menu.classList.remove('fa-times');
	navbar.classList.remove('active');
};

/* ----------------------------------------------- */
/* ======= Active Navbar links on select ========= */
// Get all navbar links
var navbarLinks = document.querySelectorAll('header nav a');

// Loop through the links
for (var i = 0; i < navbarLinks.length; i++) {
	// Check if the link href matches the current page URL
	if (navbarLinks[i].href === window.location.href) {
		// Add the "active" class to the current link
		navbarLinks[i].classList.add('active');
	}
}

/* ============= REMOVE THE HEADER ON SCROLL ============== */

/* hide the header on scrollY > 80 with a smooth transition and return it when scrolled back to the top of the page */

window.addEventListener('scroll', function () {
	var header = document.querySelector('.header');

	if (window.scrollY > 80) {
		header.classList.add('hide-smooth');
	} else {
		header.classList.remove('hide-smooth');
	}
});

/* ======= Active Navbar links on scroll ========= */
/*
const navbarLinks = document.querySelectorAll('.nav_link');

navbarLinks.forEach((navbarLinks) => {
	navbarLinks.addEventListener('click', () => {
		document.querySelector('.active')?.classList.remove('active');
		navbarLinks.classList.add('active');
	});
});
 */

/* --------------------------------------------------------- */
/* ======= REMOVE QUOTE AND COMPANY ICON ON SCROLL ========= */
/* window.onscroll = function () {
	if (window.scrollY > 60) {
		// Get the header element
		var header = document.querySelector('.header');

		// Remove the .header_quote class
		var headerQuote = header.querySelector('.header_quote');
		if (headerQuote) {
			headerQuote.classList.remove('header_quote');
		}

		// Hide the img element in the header
		var img = header.querySelector('.header-logo img');
		if (img) {
			img.style.display = 'none';
		}
	}
}; */

/* hide the .header_quote class and hide the img from the header on scrollY > 100 and return it when scrolled back to the top of the page */

/* window.addEventListener('scroll', function () {
	var headerQuote = document.querySelector('.header_quote');
	var headerLogo = document.querySelector('.header-logo img');

	if (window.scrollY > 100) {
		headerQuote.classList.add('hide');
		headerLogo.classList.add('hide');
	} else {
		headerQuote.classList.remove('hide');
		headerLogo.classList.remove('hide');
	}
}); */

/* ======================== SERVICES MODAL ========================= */
const modalViews = document.querySelectorAll('.services_modal'),
	modalBtns = document.querySelectorAll('.services_button'),
	modalCloses = document.querySelectorAll('.services_modal-close');

let modal = function (modalCLick) {
	modalViews[modalCLick].classList.add('active-modal');
};

// When the user clicks on the button, open the modal
modalBtns.forEach((modalBtn, i) => {
	modalBtn.addEventListener('click', () => {
		modal(i);
	});
});

// When the user clicks on .services_modal-close, close the modal
modalCloses.forEach((modalClose) => {
	modalClose.addEventListener('click', () => {
		modalViews.forEach((modalView) => {
			modalView.classList.remove('active-modal');
		});
	});
});

// When the user clicks anywhere outside of the modal, close it
window.addEventListener('click', (event) => {
	modalViews.forEach((modalView) => {
		if (event.target === modalView) {
			modalView.classList.remove('active-modal');
		}
	});
});

/* Initialize Swiper */
var swiper = new Swiper('.mySwiper', {
	spaceBetween: 30,
	centeredSlides: true,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	} /*
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	}, */,
	// Dynamically set slidesPerView based on window width
	slidesPerView: window.innerWidth < 700 ? 2 : 'auto',
});
