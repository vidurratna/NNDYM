import '../scss/index.scss';
import _, { head } from 'lodash';
import AOS from 'aos';

AOS.init();

window.onscroll = function() {navLock()};

var navbar = document.getElementById("header-menu");
var sticky = navbar.offsetTop;
var mobileLogo = document.getElementById('mobile-logo');

function navLock() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("fixed", 'top-0')
    mobileLogo.classList.remove('fade-out','hidden')
    mobileLogo.classList.add('fade-in')
  } else {
    navbar.classList.remove("fixed", 'top-0');
    mobileLogo.classList.add('fade-out')
    mobileLogo.classList.remove('fade-in')
  }
}

let mobileMenu = document.getElementById('mobile-menu');
let mobileMenuClose = document.getElementById('mobile-menu-close');
let mobileMenuOpen = document.getElementById('mobile-menu-open');
let mobileMenulist = document.getElementById('mobile-menu-list')

mobileMenuClose.addEventListener('click', closeMobileNav);

function closeMobileNav(){
    mobileMenu.classList.add('fade-out')
    mobileMenu.classList.remove('fade-in')
    setTimeout(() => {
        mobileMenu.classList.add('hidden')
    }, 800);
}

mobileMenuOpen.addEventListener('click', openMobileNav);

function openMobileNav(){
    mobileMenu.classList.remove('hidden','fade-out')
    mobileMenu.classList.add('fade-in')

    let count =  0;

    let list = mobileMenulist.getElementsByTagName('li');

    for (let index = 0; index < list.length; index++) {
        const li = list[index];
        li.classList.add('hidden','fade-in-bottom')
    }

    for (let index = 0; index < list.length; index++) {
        const li = list[index];
        setTimeout(() => {
            li.classList.remove('hidden')
        }, count);
        count = count + 200;
    }

}


let desktopMenu = document.getElementById('desktop-menu');
let desktopMenuClose = document.getElementById('desktop-menu-close');
let desktopMenuOpen = document.getElementById('desktop-menu-open');
let desktopMenulist = document.getElementById('desktop-sidebar-list')

desktopMenuClose.addEventListener('click', closeDesktopNav);

function closeDesktopNav(){
  desktopMenu.classList.add('fade-out')
  desktopMenu.classList.remove('fade-in')
    setTimeout(() => {
      desktopMenu.classList.add('hidden')
    }, 800);
}

desktopMenuOpen.addEventListener('click', openDesktopNav);

function openDesktopNav(){
  desktopMenu.classList.remove('hidden','fade-out')
  desktopMenu.classList.add('fade-in')

    let count =  0;

    let list = desktopMenulist.getElementsByTagName('li');

    for (let index = 0; index < list.length; index++) {
        const li = list[index];
        li.classList.add('hidden','fade-in-bottom')
    }

    for (let index = 0; index < list.length; index++) {
        const li = list[index];
        setTimeout(() => {
            li.classList.remove('hidden')
        }, count);
        count = count + 100;
    }

}

let searchBlock = document.getElementById('search-block');
let mobileSearchOpen = document.getElementById('mobile-serach-open');
let desktopSearchOpen = document.getElementById('desktop-serach-open');
let serachClose = document.getElementById('search-block-close');

mobileSearchOpen.addEventListener('click', searchBlockOpen);
desktopSearchOpen.addEventListener('click', searchBlockOpen);


function searchBlockOpen(){
  searchBlock.classList.remove('hidden','fade-out')
  searchBlock.classList.add('fade-in')
}

serachClose.addEventListener('click', searchBlockClose);


function searchBlockClose(){
  searchBlock.classList.add('fade-out')
  searchBlock.classList.remove('fade-in')
    setTimeout(() => {
      searchBlock.classList.add('hidden')
    }, 800);
}