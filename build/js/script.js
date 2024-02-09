const menuBtn = document.querySelector("#menu-btn");
const navBar = document.querySelector("#menu");

const profile = document.querySelector('#profile-wrapper-sm');
const profileBtn = document.querySelector('#profile-btn');

const modal = document.querySelector('#modal');
const closeModal = document.querySelectorAll('#close-modal');
const showModal = document.querySelector('#show-modal');


// EVENT LISTENERS HERE
menuBtn.addEventListener('click', (event) => {
  event.stopPropagation();
  navBar.classList.toggle('hidden')
});

profileBtn.addEventListener('click', (event) => {
  event.stopPropagation(); 
  profile.classList.toggle('hidden')
});

// MODAL
showModal.addEventListener('click', (event) => {
  event.preventDefault();
  event.stopPropagation(); 
  modal.classList.remove('hidden');
});

closeModal.forEach(close => {
  close.addEventListener('click', (event) => {
    event.stopPropagation(); 
    event.preventDefault();
    modal.classList.add('hidden')
  });
});


document.addEventListener('scroll', () => {
  const header = document.querySelector('.header-wrapper');
  
  if (window.scrollY > 0) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

console.log(profile, profileBtn);

document.addEventListener('click', (event) => {
  const clickedElement = event.target;
  
  if (!navBar.contains(clickedElement) && clickedElement !== menuBtn) {
    navBar.classList.add('hidden');
  }

  if (!profile.contains(clickedElement) && clickedElement !== profileBtn) {
    profile.classList.add('hidden');
  }

  if (!modal.contains(clickedElement) && clickedElement !== showModal) {
    modal.classList.add('hidden');
  }
});
