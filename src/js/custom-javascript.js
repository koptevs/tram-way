// Add your JS customizations here
/**
 * Template Name: Arsha - v4.3.0
 * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */

import GLightbox from 'glightbox';

(function() {
		'use strict';

		/**
		 * Easy selector helper function
		 */
		const select = (el, all = false) => {
				el = el.trim();
				if (all) {
						return [...document.querySelectorAll(el)];
				} else {
						return document.querySelector(el);
				}
		};

		/**
		 * Easy event listener function
		 */
		const on = (type, el, listener, all = false) => {
				let selectEl = select(el, all);
				if (selectEl) {
						if (all) {
								selectEl.forEach(e => e.addEventListener(type, listener));
						} else {
								selectEl.addEventListener(type, listener);
						}
				}
		};

		/**
		 * Easy on scroll event listener
		 */
		const onscroll = (el, listener) => {
				el.addEventListener('scroll', listener);
		};

		/**
		 * Toggle .header-scrolled class to #header when page is scrolled
		 */
		let selectHeader = select('#wrapper-navbar');
		if (selectHeader) {
				const headerScrolled = () => {
						if (window.scrollY > 100) {
								selectHeader.classList.add('header-scrolled');
						} else {
								selectHeader.classList.remove('header-scrolled');
						}
				};
				window.addEventListener('load', headerScrolled);
				onscroll(document, headerScrolled);
		}

		/**
		 * Back to top button
		 */
		let backtotop = select('.back-to-top');
		if (backtotop) {
				const toggleBacktotop = () => {
						if (window.scrollY > 100) {
								backtotop.classList.add('active');
						} else {
								backtotop.classList.remove('active');
						}
				};
				window.addEventListener('load', toggleBacktotop);
				onscroll(document, toggleBacktotop);
		}

		/**
		 * Initiate  glightbox
		 */
		const glightbox = GLightbox({
				selector: '.glightbox',
		});

})();
