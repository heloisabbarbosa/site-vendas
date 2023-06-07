searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
}

let loginForm = document.querySelector('.login-form');
document.querySelector('#login-btn').onclick = () => {
    loginForm.classList.toggle('active');
}
document.querySelector('#close-login-btn').onclick = () => {
    loginForm.classList.remove('active');
}

let loginForm2 = document.querySelector('.login-form2');
document.querySelector('#register-btn').onclick = () => {
    loginForm2.classList.toggle('active');
}
document.querySelector('#close-login-btn2').onclick = () => {
  loginForm2.classList.remove('active');
}

let shopping = document.querySelector('.shopping-cart');
document.querySelector('#cart-btn').onclick = () => {
    shopping.classList.toggle('active');
}

function anuncios() {
  window.location.href = "anuncios.html";
}

new Cleave('.cpf', {
  delimiters: ['.','.','-'],
  blocks: [3,3,3,2],
  numericOnly: true
});

function showHide() {
  var input = document.getElementById('senha')
  var btnShow = document.getElementById('iconsenha')

  if (input.type === 'password') {
    input.setAttribute('type','text')
    btnShow.classList.replace('fa-eye','fa-eye-slash')
  }
  else {
    input.setAttribute('type','password')
    btnShow.classList.replace('fa-eye-slash','fa-eye')
  }
}

function show() {
  var inputPass = document.getElementById('password2')
  var btnShowPass = document.getElementById('iconsenha2')

  if (inputPass.type === 'password') {
    inputPass.setAttribute('type','text')
    btnShowPass.classList.replace('fa-eye','fa-eye-slash')
  }
  else {
    inputPass.setAttribute('type','password')
    btnShowPass.classList.replace('fa-eye-slash','fa-eye')
  }
}

window.onscroll = () => {

    searchForm.classList.remove('active');

    if(window.scrollY > 80) {
        document.querySelector('.header .header2').classList.add('active');
    }
    else {
        document.querySelector('.header .header2').classList.remove('active');
    }
}

window.onload = () => {

    if(window.scrollY > 80) {
        document.querySelector('.header .header2').classList.add('active');
    }
    else {
        document.querySelector('.header .header2').classList.remove('active');
    }
}

var swiper = new Swiper(".img-slider", {
    loop:true,
    centeredSlides: true,
    autoplay: {
        delay:9500,
        disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });

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

  var swiper = new Swiper(".arrivals-slider", {
    spaceBetween: 10,
    loop:true,
    centeredSlides: true,
    autoplay: {
        delay:9500,
        disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });

  var swiper = new Swiper(".reviews-slider", {
    spaceBetween: 10,
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay:9500,
        disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });

  var swiper = new Swiper(".contact-slider", {
    spaceBetween: 10,
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay:9500,
        disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });