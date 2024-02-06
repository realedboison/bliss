const menuBtn = document.querySelector(".menu-btn");
const navBar = document.querySelector(".mobile-menu");
menuBtn.addEventListener('click', () => navBar.classList.toggle('active'));

const profile = document.querySelector('#profile-wrapper-sm');
const profileBtn = document.querySelector('#profile-btn');
profileBtn.addEventListener('click', () => profile.classList.toggle('active'));

document.addEventListener('scroll', () => {
  const header = document.querySelector('.header-wrapper');

  if (window.scrollY > 0) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
  }
})



// MODAL START
// const openModalButton = document.querySelector("#openModal");
// const closeModalButton = document.querySelector("#closeModal");
// const modal = document.querySelector("#modal");

// openModalButton.addEventListener("click", () => {
//     modal.classList.remove("hidden");
// });

// closeModalButton.addEventListener("click", () => {
//     modal.classList.add("hidden");
// });

// console.log(openModalButton)


// MODAL CLOSE


const modal = document.querySelector('#modal')
console.log(modal)