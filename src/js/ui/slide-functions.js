export const slideUp = (element, duration) => {
  element.animate(
    [
      { opacity: 1, height: element.scrollHeight + 'px', overflow: 'hidden' },
      { opacity: 0, height: '0px' },
    ],
    {
      duration: duration,
      fill: 'forwards',
    }
  ).onfinish = function () {
    element.style.display = 'none'; // Hide the element after animation
  };
};

export const slideDown = (element, duration) => {
  element.style.display = 'block'; // Make the element displayable
  element.style.height = '0px';
  element.style.overflow = 'hidden';
  element.animate(
    [
      { opacity: 0, height: '0px' },
      { opacity: 1, height: element.scrollHeight + 'px' },
    ],
    {
      duration: duration,
      fill: 'forwards',
    }
  );
};

/* eslint-disable no-unused-vars */
// For slideToggle, you will decide whether to slide up or down based on the computed style of the element
export const slideToggle = (element, duration) => {
  const height = window.getComputedStyle(element).height;
  const opacity = window.getComputedStyle(element).opacity;
  if (height === '0px' || opacity === '0') {
    slideDown(element, duration);
  } else {
    slideUp(element, duration);
  }
};
