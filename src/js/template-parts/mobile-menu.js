import { slideToggle } from '../ui/slide-functions';

export const mobileMenuHandler = () => {
  // JS for handling the menu itself
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileMenuTrigger = document.getElementById('mobile-menu-trigger');
  const mobileMenuNav = mobileMenu.querySelector('.menu');

  const toggleMenu = (trigger, menu, nav) => {
    let expanded = trigger.getAttribute('aria-expanded') === 'true' || false;
    trigger.setAttribute('aria-expanded', !expanded);

    trigger.classList.toggle('is-active');

    if (expanded === false) {
      menu.classList.add('show-menu');
      setTimeout(() => {
        menu.classList.add('active');
        nav.classList.add('active');
      }, 100);
    } else {
      menu.classList.remove('active');
      nav.classList.remove('active');
      setTimeout(() => {
        menu.classList.remove('show-menu');
      }, 350);
    }
  };

  mobileMenuTrigger.addEventListener('click', () => {
    toggleMenu(mobileMenuTrigger, mobileMenu, mobileMenuNav);
  });

  // JS for handling sub-menu
  const hasSubMenu = mobileMenuNav.querySelectorAll('.menu-item-has-children');
  const subMenu = mobileMenu.querySelectorAll('.sub-menu');

  if (hasSubMenu.length > 0) {
    hasSubMenu.forEach((el, index) => {
      el.addEventListener('click', () => {
        el.classList.toggle('active');
        slideToggle(subMenu[index], 200);
      });
    });
  }
};
