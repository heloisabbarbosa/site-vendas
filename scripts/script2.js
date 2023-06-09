let user = document.querySelector('.account');
document.querySelector('#user-btn').onclick = () => {
    user.classList.toggle('active');
}

function termos() {
  window.location.href = "termos.php";
}

function segurança() {
  window.location.href = "security.php";
}

function cadastro() {
  window.location.href = "profile.php";
}

function pagamentos() {
  window.location.href = "payment.php";
}

function comunicacoes() {
  window.location.href = "message.php";
}

function nivel() {
  window.location.href = "level.php";
}
function sair() {
  window.location.href = "sair.php";
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