const modalHandler = () => {
  const modal = document.getElementById("modal");
  if (modal) {
    let focusedElementBeforeModal;
    const focusableElementsString = 'a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, [tabindex="0"], [contenteditable]';
    let focusableElements;
    const setFocusToFirstElement = () => {
      if (focusableElements.length) {
        focusableElements[0].focus();
      }
    };
    const trapTabKey = (e) => {
      if (e.keyCode === 9) {
        const firstFocusableElement = focusableElements[0];
        const lastFocusableElement = focusableElements[focusableElements.length - 1];
        if (e.shiftKey) {
          if (document.activeElement === firstFocusableElement) {
            e.preventDefault();
            lastFocusableElement.focus();
          }
        } else {
          if (document.activeElement === lastFocusableElement) {
            e.preventDefault();
            firstFocusableElement.focus();
          }
        }
      }
      if (e.keyCode === 27) {
        closeModal(modalContent, modal);
      }
    };
    const modalBg = modal.querySelector(".modal__bg");
    const modalContent = modal.querySelector(".modal__main");
    const modalClose = modal.querySelector(
      ".modal__main__header__close-button"
    );
    focusableElements = modal.querySelectorAll(focusableElementsString);
    if (modalContent) {
      setTimeout(() => {
        modalContent.classList.add("active");
        modal.setAttribute("aria-hidden", "false");
        focusedElementBeforeModal = document.activeElement;
        setFocusToFirstElement();
        modal.addEventListener("keydown", trapTabKey);
      }, 500);
    }
    const closeModal = (content, modal2) => {
      content.classList.remove("active");
      modal2.setAttribute("aria-hidden", "true");
      setTimeout(() => {
        modal2.style.display = "none";
        if (focusedElementBeforeModal) {
          focusedElementBeforeModal.focus();
        }
      }, 300);
      modal2.removeEventListener("keydown", trapTabKey);
    };
    modalBg.addEventListener("click", () => {
      closeModal(modalContent, modal);
    });
    modalClose.addEventListener("click", () => {
      closeModal(modalContent, modal);
    });
  }
};
const slideUp = (element, duration) => {
  element.animate(
    [
      { opacity: 1, height: element.scrollHeight + "px", overflow: "hidden" },
      { opacity: 0, height: "0px" }
    ],
    {
      duration,
      fill: "forwards"
    }
  ).onfinish = function() {
    element.style.display = "none";
  };
};
const slideDown = (element, duration) => {
  element.style.display = "block";
  element.style.height = "0px";
  element.style.overflow = "hidden";
  element.animate(
    [
      { opacity: 0, height: "0px" },
      { opacity: 1, height: element.scrollHeight + "px" }
    ],
    {
      duration,
      fill: "forwards"
    }
  );
};
const slideToggle = (element, duration) => {
  const height = window.getComputedStyle(element).height;
  const opacity = window.getComputedStyle(element).opacity;
  if (height === "0px" || opacity === "0") {
    slideDown(element, duration);
  } else {
    slideUp(element, duration);
  }
};
const mobileMenuHandler = () => {
  const mobileMenu = document.getElementById("mobile-menu");
  const mobileMenuTrigger = document.getElementById("mobile-menu-trigger");
  const mobileMenuNav = mobileMenu.querySelector(".menu");
  const toggleMenu = (trigger, menu, nav) => {
    let expanded = trigger.getAttribute("aria-expanded") === "true" || false;
    trigger.setAttribute("aria-expanded", !expanded);
    trigger.classList.toggle("is-active");
    if (expanded === false) {
      menu.classList.add("show-menu");
      setTimeout(() => {
        menu.classList.add("active");
        nav.classList.add("active");
      }, 100);
    } else {
      menu.classList.remove("active");
      nav.classList.remove("active");
      setTimeout(() => {
        menu.classList.remove("show-menu");
      }, 350);
    }
  };
  mobileMenuTrigger.addEventListener("click", () => {
    toggleMenu(mobileMenuTrigger, mobileMenu, mobileMenuNav);
  });
  const hasSubMenu = mobileMenuNav.querySelectorAll(".menu-item-has-children");
  const subMenu = mobileMenu.querySelectorAll(".sub-menu");
  if (hasSubMenu.length > 0) {
    hasSubMenu.forEach((el, index) => {
      el.addEventListener("click", () => {
        el.classList.toggle("active");
        slideToggle(subMenu[index], 200);
      });
    });
  }
};
const bannerHandler = () => {
  const banner = document.getElementById("homepage-banner");
  const bannerClose = document.getElementById("homepage-banner-close");
  if (bannerClose) {
    bannerClose.addEventListener("click", () => {
      banner.style.display = "none";
    });
  }
};
document.addEventListener("DOMContentLoaded", () => {
  modalHandler();
  mobileMenuHandler();
  bannerHandler();
});
//# sourceMappingURL=main.js.map
