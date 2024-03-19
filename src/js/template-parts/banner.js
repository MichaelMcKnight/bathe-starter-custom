export const bannerHandler = () => {
  const banner = document.getElementById('homepage-banner');
  const bannerClose = document.getElementById('homepage-banner-close');

  if (bannerClose) {
    bannerClose.addEventListener('click', () => {
      banner.style.display = 'none';
    });
  }
};
