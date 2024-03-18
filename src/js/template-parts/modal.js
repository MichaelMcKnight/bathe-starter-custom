export const modalHandler = () => {
  const modal = document.getElementById('modal');

  if (modal) {
    let focusedElementBeforeModal;

    const focusableElementsString =
      'a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, [tabindex="0"], [contenteditable]';
    let focusableElements;

    const setFocusToFirstElement = () => {
      if (focusableElements.length) {
        focusableElements[0].focus();
      }
    };

    const trapTabKey = (e) => {
      if (e.keyCode === 9) {
        const firstFocusableElement = focusableElements[0];
        const lastFocusableElement =
          focusableElements[focusableElements.length - 1];

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

    const modalBg = modal.querySelector('.modal__bg');
    const modalContent = modal.querySelector('.modal__main');
    const modalClose = modal.querySelector(
      '.modal__main__header__close-button'
    );

    focusableElements = modal.querySelectorAll(focusableElementsString);

    if (modalContent) {
      setTimeout(() => {
        modalContent.classList.add('active');
        modal.setAttribute('aria-hidden', 'false');
        focusedElementBeforeModal = document.activeElement;
        setFocusToFirstElement();
        modal.addEventListener('keydown', trapTabKey);
      }, 500);
    }

    const closeModal = (content, modal) => {
      content.classList.remove('active');
      modal.setAttribute('aria-hidden', 'true');
      setTimeout(() => {
        modal.style.display = 'none';
        if (focusedElementBeforeModal) {
          focusedElementBeforeModal.focus();
        }
      }, 300);
      modal.removeEventListener('keydown', trapTabKey);
    };

    modalBg.addEventListener('click', () => {
      closeModal(modalContent, modal);
    });

    modalClose.addEventListener('click', () => {
      closeModal(modalContent, modal);
    });
  }
};
