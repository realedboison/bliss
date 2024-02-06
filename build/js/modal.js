const modal = document.querySelector('#modal');
const closeModal = document.querySelectorAll('#close-modal');
const showModal = document.querySelector('#show-modal');

showModal.addEventListener('click', () => {
  modal.classList.remove('hidden');
});

closeModal.forEach(close => {
  close.addEventListener('click', () => {
    modal.classList.add('hidden')
  });
});



console.log(modal, closeModal, openModal)