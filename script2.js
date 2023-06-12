let user = document.querySelector('.account');
document.querySelector('#user-btn').onclick = () => {
    user.classList.toggle('active');
}

function termos() {
  window.location.href = "termos.html";
}

function segurança() {
  window.location.href = "security.html";
}

function cadastro() {
  window.location.href = "profile.html";
}

function pagamentos() {
  window.location.href = "payment.html";
}

function comunicacoes() {
  window.location.href = "message.html";
}

var swiper = new Swiper(".produtos-slider", {
    spaceBetween: 10,
    loop:true,
    centeredSlides: true,
    autoplay: {
        delay:9500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      450: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
  });