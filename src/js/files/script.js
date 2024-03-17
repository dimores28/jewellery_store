// Підключення функціоналу "Чертоги Фрілансера"
import { isMobile } from "./functions.js";
// Підключення списку активних модулів
import { flsModules } from "./modules.js";


let player = document.querySelector('#specialOfferPlayer');
let playBtnWrap = document.querySelector('.video__btn-wrp');
let playBtn = document.querySelector('.video__btn');

playBtn?.addEventListener('click', function() {
    player.play();
});

playBtn?.addEventListener('click', function() {
    player.play();
});

player?.addEventListener('play', function() {
    playBtnWrap.style.display = 'none';
    player.setAttribute("controls", "controls");
})

player?.addEventListener('pause', function() {
    playBtnWrap.style.display = 'flex';
})

const openSearch = document.querySelector('.search__btn-open');
openSearch?.addEventListener('click', function() {
    document.querySelector('.header')?.classList.add('_open-search');
});

const closeSearch = document.querySelector('.search__btn-close');
closeSearch?.addEventListener('click', function() {
    console.log('click');
    document.querySelector('.header')?.classList.remove('_open-search');
});