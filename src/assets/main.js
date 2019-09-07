const pageModule = (function() {
  'use strict';

  const init = () => {
    const navBtn = getNavBtn();
    const menu = getMenu();
    if (navBtn) {
      navBtn.addEventListener('click', () => {
        navBtn.classList.toggle('open');
        menu.classList.toggle('open');
      });
    }
  };

  const destroy = () => {
    const navBtn = getNavBtn();
    if (navBtn) {
      navBtn.removeEventListener('click');
    }
  }

  const getNavBtn = () => document.getElementById('btn-nav-toggle'); 
  const getMenu = () => document.getElementById('main-menu'); 
  
  return {
    init: init
  }
}());


pageModule.init();
