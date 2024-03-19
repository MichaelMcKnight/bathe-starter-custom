import { modalHandler } from './template-parts/modal';
import { mobileMenuHandler } from './template-parts/mobile-menu';
import { bannerHandler } from './template-parts/banner';

document.addEventListener('DOMContentLoaded', () => {
  modalHandler();
  mobileMenuHandler();
  bannerHandler();
});
