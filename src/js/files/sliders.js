/*
Документація по роботі у шаблоні: 
Документація слайдера: https://swiperjs.com/
Сніппет(HTML): swiper
*/

// Підключаємо слайдер Swiper з node_modules
// При необхідності підключаємо додаткові модулі слайдера, вказуючи їх у {} через кому
// Приклад: { Navigation, Autoplay }
import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
/*
Основні модулі слайдера:
Navigation, Pagination, Autoplay, 
EffectFade, Lazy, Manipulation
Детальніше дивись https://swiperjs.com/
*/

// Стилі Swiper
// Базові стилі
import "../../scss/base/swiper.scss";
// Повний набір стилів з scss/libs/swiper.scss
// import "../../scss/libs/swiper.scss";
// Повний набір стилів з node_modules
// import 'swiper/css';

// Ініціалізація слайдерів
function initSliders() {
	// Список слайдерів
	// Перевіряємо, чи є слайдер на сторінці
	if (document.querySelector('.blog__slider')) { // Вказуємо склас потрібного слайдера
		// Створюємо слайдер
		new Swiper('.blog__slider', { // Вказуємо склас потрібного слайдера
			// Підключаємо модулі слайдера
			// для конкретного випадку
			modules: [Navigation],
			observer: true,
			observeParents: true,
			slidesPerView: 3,
			spaceBetween: 20,
			speed: 800,
			loop: true,

			// Кнопки "вліво/вправо"
			navigation: {
				prevEl: '.blog__btn-prev',
				nextEl: '.blog__btn-next',
			},

			// Брейкпоінти
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 0,
					autoHeight: true,
				},
				640: {
					slidesPerView: 1,
					spaceBetween: 0,
					autoHeight: true,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				992: {
					slidesPerView: 3,
					spaceBetween: 20,
				}
			},

			// Події
			on: {

			}
		});
	}

	if (document.querySelector('.products__slider')) {
		new Swiper('.products__slider', { // Вказуємо склас потрібного слайдера
			// Підключаємо модулі слайдера
			// для конкретного випадку
			modules: [Navigation],
			observer: true,
			observeParents: true,
			slidesPerView: 3,
			spaceBetween: 15,
			speed: 800,

			loop: true,

			// Кнопки "вліво/вправо"
			navigation: {
				prevEl: '.products__btn-prev',
				nextEl: '.products__btn-next',
			},

			// Брейкпоінти
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 0,
					autoHeight: true,
				},
				894: {
					slidesPerView: 2,
					spaceBetween: 15,
				},
				1081: {
					slidesPerView: 3,
					spaceBetween: 15,
				},
			},

			// Події
			on: {

			}
		});
	}

	if (document.querySelector('.products__slider_2')) {
		new Swiper('.products__slider_2', { // Вказуємо склас потрібного слайдера
			// Підключаємо модулі слайдера
			// для конкретного випадку
			modules: [Navigation],
			observer: true,
			observeParents: true,
			slidesPerView: 3,
			spaceBetween: 15,
			speed: 800,

			loop: true,

			// Кнопки "вліво/вправо"
			navigation: {
				prevEl: '.products__btn-prev_2',
				nextEl: '.products__btn-next_2',
			},

			// Брейкпоінти
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 0,
					autoHeight: true,
				},
				894: {
					slidesPerView: 2,
					spaceBetween: 15,
				},
				1081: {
					slidesPerView: 3,
					spaceBetween: 15,
				},
			},

			// Події
			on: {

			}
		});
	}
}
// Скролл на базі слайдера (за класом swiper scroll для оболонки слайдера)
function initSlidersScroll() {
	let sliderScrollItems = document.querySelectorAll('.swiper_scroll');
	if (sliderScrollItems.length > 0) {
		for (let index = 0; index < sliderScrollItems.length; index++) {
			const sliderScrollItem = sliderScrollItems[index];
			const sliderScrollBar = sliderScrollItem.querySelector('.swiper-scrollbar');
			const sliderScroll = new Swiper(sliderScrollItem, {
				observer: true,
				observeParents: true,
				direction: 'vertical',
				slidesPerView: 'auto',
				freeMode: {
					enabled: true,
				},
				scrollbar: {
					el: sliderScrollBar,
					draggable: true,
					snapOnRelease: false
				},
				mousewheel: {
					releaseOnEdges: true,
				},
			});
			sliderScroll.scrollbar.updateSize();
		}
	}
}

window.addEventListener("load", function (e) {
	// Запуск ініціалізації слайдерів
	initSliders();
	// Запуск ініціалізації скролла на базі слайдера (за класом swiper_scroll)
	//initSlidersScroll();
});