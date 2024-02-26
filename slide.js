
// Carousel Galeria
let index = 0;
const track = document.getElementById('carouselTrack');
const slides = document.querySelectorAll('.carousel-slide');
const totalSlides = slides.length;
let slideInterval;

function updateCarousel() {
  const newPosition = -index * 100;
  track.style.transform = `translateX(${newPosition}%)`;
}

function nextSlide() {
  index = (index + 1) % totalSlides;
  updateCarousel();
}

function prevSlide() {
  index = (index - 1 + totalSlides) % totalSlides;
  updateCarousel();
}

function startSlideShow() {
  slideInterval = setInterval(nextSlide, 3000); // Altere o intervalo conforme necessário (3000 milissegundos = 3 segundos)
}

function stopSlideShow() {
  clearInterval(slideInterval);
}


// Inicie o slide automático ao carregar a página
startSlideShow();

// Adicione manipuladores de eventos para pausar/reiniciar a apresentação de slides ao passar o mouse sobre o carousel
document.querySelector('.carousel-container').addEventListener('mouseenter', stopSlideShow);
document.querySelector('.carousel-container').addEventListener('mouseleave', startSlideShow);

// Carousel Plantas

let index2 = 0;
const track2 = document.getElementById('plantas');
const slides2 = document.querySelectorAll('.slider-plants');
const totalSlides2 = slides2.length;
let slideInterval2;

function updateCarousel2() {
  const newPosition2 = -index2 * 100;
  track2.style.transform = `translateX(${newPosition2}%)`;
}

function nextSlide2() {
  index2 = (index2 + 1) % totalSlides2;
  updateCarousel2();
}

function prevSlide2() {
  index2 = (index2 - 1 + totalSlides2) % totalSlides2;
  updateCarousel2();
}

function startSlideShow2() {
  slideInterval2 = setInterval(nextSlide2, 3000); // Altere o intervalo conforme necessário (3000 milissegundos = 3 segundos)
}

function stopSlideShow2() {
  clearInterval(slideInterval2);
}

// Inicie o slide automático ao carregar a página
startSlideShow2();

// Adicione manipuladores de eventos para pausar/reiniciar a apresentação de slides ao passar o mouse sobre o carousel
document.querySelector('.slider-container').addEventListener('mouseenter', stopSlideShow2);
document.querySelector('.slider-container').addEventListener('mouseleave', startSlideShow2);

document.addEventListener('DOMContentLoaded', function () {
  const hamburgerMenu = document.querySelector('.hamburger-menu');
  const headerNav = document.querySelector('.header-nav');

  hamburgerMenu.addEventListener('click', function () {
      headerNav.classList.toggle('show');
  });
});


document.addEventListener('DOMContentLoaded', function () {
  // Seleciona todos os links do menu
  var links = document.querySelectorAll('.header-nav a');

  // Adiciona um ouvinte de evento de clique a cada link
  links.forEach(function (link) {
    link.addEventListener('click', function (e) {
      e.preventDefault();

      // Obtém o destino da rolagem a partir do atributo href do link
      var targetId = link.getAttribute('href').substring(1);
      var targetElement = document.getElementById(targetId);

      // Rola suavemente até o destino
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop,
          behavior: 'smooth'
        });
      }
    });
  });
});

AOS.init();