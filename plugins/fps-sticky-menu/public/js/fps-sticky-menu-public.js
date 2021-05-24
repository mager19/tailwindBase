(function ($) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	// Set DOM elements for VueJS
	const header = document.createElement('div');
	const vueContainer = document.createElement('vue-container');
	const firstBodyChild = document.querySelectorAll('body *')[0];

	header.setAttribute('id', 'fps-sticky-menu');
	header.appendChild(vueContainer);
	document.body.insertBefore(header, firstBodyChild);

	// Register VueJS Components
	Vue.component('vue-container', {
		template: `
		<div class="fps-sticky-menu__container" v-if="response.options.is_enabled !== false" :class="{ 'is-top': headerTop }">
			<div class="fps-sticky-menu__container-inner">
				<div class="fps-sticky-menu__logo" v-if="response.options.logo !== false">
					<a :href="siteUrl">
            <img :src="response.options.logo.url" alt="response.options.logo.alt" :width="width" :height="height"/>
          </a>
				</div>
				<div class="fps-sticky-menu__toggler">
					<a href="#" @click.prevent="handleMenuToggler">
						<svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M19 3.5H0V0.5H19V3.5ZM19 12H0V9H19V12ZM0 20.5H19V17.5H0V20.5Z" :fill="color"/>
						</svg>
					</a>
				</div>
				<div class="fps-sticky-menu__nav" v-html="response.menu_markup" ref="menu"></div>
				<div class="fps-sticky-menu__buttons">
					<div class="fps-sticky-menu__button" v-if="response.options.button !==''">
						<a :href="response.options.button.url" :target="response.options.button.target">{{response.options.button.title}}</a>
					</div>
					<div class="fps-sticky-menu__button-cta" v-if="response.options.button_cta !==''">
						<a :href="response.options.button_cta.url" :target="response.options.button_cta.target">{{response.options.button_cta.title}}</a>
					</div>
				</div>
			</div>
 	    </div>
 	  `,
		data() {
			return {
				response: {
					options: {
						is_enabled: false,
						button: '',
						button_cta: '',
					},
				},
				headerTop: true,
			};
		},
		computed: {
			width: {
				get() {
					return this.response.options.logo.width / 2;
				},
			},
			height: {
				get() {
					return this.response.options.logo.height / 2;
				},
			},
			accentColor: {
				get() {
					return this.response.options.accent_color;
				},
			},
			color: {
				get() {
					return this.response.options.color;
				},
			},
			backgroundColor: {
				get() {
					return this.response.options.background;
				},
			},
			siteUrl() {
				return fpsStickyMenuApi.site_url;
			},
		},
		mounted: async function () {
			var that = this;
			var settings = {
				async: true,
				crossDomain: true,
				url: fpsStickyMenuApi.url,
				method: 'GET',
				headers: {
					'Content-type': 'application/json',
				},
			};

			let request = await $.ajax(settings);
			that.response = await request;
			that.putCSS();

			window.addEventListener('scroll', function () {
				if (window.scrollY > 150) {
					that.headerTop = false;
				} else {
					that.headerTop = true;
				}
			});

			// Initiate Headroom
			var myElement = document.querySelector('#fps-sticky-menu');
			// construct an instance of Headroom, passing the element
			var headOptions = {
				up: 5,
				down: 5,
			};
			Headroom.options.tolerance = headOptions;
			var headroom = new Headroom(myElement);
			// initialise
			headroom.init();

			// Init mmenu
			const parser = new DOMParser();
			let node = parser.parseFromString(that.response.menu_markup, 'text/html');

			node = node.body.querySelector('div');
			node.classList.add('fps_sticky_mmenu');

			document.body.appendChild(node);

			node = document.querySelector('.fps_sticky_mmenu');

			window.fps_mmenu = new MmenuLight(node);

			fps_mmenu.enable();
			fps_mmenu.offcanvas();

			this.$nextTick(function () {
				// DOM is now updated
				let links = document.querySelectorAll('.fps-sticky-menu__nav .menu a');

				links.forEach((e) => {
					if (window.location.href == e.href) {
						e.parentElement.classList.add('current-menu-item');
					}
				});
			});
		},
		methods: {
			putCSS: function () {
				const dynamicStyle = document.createElement('style');
				const dynamicCSS = `
					.fps-sticky-menu__container {
						background-color: ${this.backgroundColor};
						color: ${this.color};
					}

					.fps-sticky-menu__nav a,
					.fps-sticky-menu__button a {
						color: ${this.color};
					}

					.fps-sticky-menu__nav a:hover,
					.fps-sticky-menu__button a:hover {
						color: ${this.accentColor};
					}

					.fps-sticky-menu__nav .sub-menu {
						background-color: ${this.backgroundColor};
						border-color: ${this.accentColor};
					}

					.fps-sticky-menu__button-cta a {
						background-color: ${this.accentColor};
					}

					@media(max-width: 990px){
						.fps-sticky-menu__nav ul.menu {
							background-color: ${this.backgroundColor};
							border-top: 2px solid ${this.accentColor};
						}
					}
				`;
				dynamicStyle.type = 'text/css';
				document.head.appendChild(dynamicStyle);
				dynamicStyle.appendChild(document.createTextNode(dynamicCSS));
			},
			handleMenuToggler: function () {
				fps_mmenu.open();
			},
		},
	});

	// Initiate VueJS
	var vueInstance = new Vue({
		el: '#fps-sticky-menu',
	});
})(jQuery);
