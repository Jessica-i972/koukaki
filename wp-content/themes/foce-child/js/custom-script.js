/* global wp, jQuery */
/**
fichier personnalisé
 */

jQuery(document).ready(function($) {

  /*  Intégration du code du swiper - Slider characters */
 var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    spaceBetween: 60,
    grabCursor: true,
    centeredSlides: true,  
    loop: true,
    speed: 900,
    preventClicks: true,
    slidesPerView: 3,
    coverflowEffect: {
      rotate: 60,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
      on: {
          click(event) {
              swiper.slideTo(this.clickedIndex);
          },
      },
    autoplay: {
      delay: 2500,
    },
    });

    /* Intégration du code du menu burger */
  $(".modal-open").click(function () {
    console.log("modal-trigger cliqué");
    $(".modal__content").animate({ height: "toggle", opacity: "toggle" }, 1000);
    $(".modal__content").toggleClass("open");
    $(".modal__burger").toggleClass("close");
  });
  $("a").click(function () {
    if ($(".modal__content").hasClass("open")) {
      $(".modal__content").animate(
        { height: "toggle", opacity: "toggle" },
        1000
      );
      $(".modal__content").removeClass("open");
      $(".modal__burger").removeClass("close");
    }   
  });    
}); /* Fin de la balise jQuery */


// Animation au scroll
// Fonction pour animer les nuages lors du défilement de la page
function animateCloudsOnScroll() {
  const clouds = document.querySelectorAll('.cloud');
  const scrollPosition = window.scrollY;
  const windowHeight = window.innerHeight;

  clouds.forEach(cloud => {
    const cloudPosition = cloud.getBoundingClientRect().top + window.scrollY;

    // Vérifie si le nuage est visible à l'écran
    if (cloudPosition < scrollPosition + windowHeight && cloudPosition + cloud.clientHeight > scrollPosition) {
      // Nuage visible à l'écran
      if (scrollPosition > cloudPosition) {
        // Défilement vers le haut : appliquer animation reverse
        cloud.classList.add('cloud-animation-reverse');
        cloud.classList.remove('cloud-animation');
      } else {
        // Défilement vers le bas : appliquer animation normale
        cloud.classList.add('cloud-animation');
        cloud.classList.remove('cloud-animation-reverse');
      }
    } else {
      // Nuage non visible à l'écran : retirer les animations
      cloud.classList.remove('cloud-animation');
      cloud.classList.remove('cloud-animation-reverse');
    }
  });
}

// Écouter l'événement de défilement de la fenêtre pour animer les nuages
window.addEventListener('scroll', animateCloudsOnScroll);

// Animer les nuages lors du chargement initial de la page
animateCloudsOnScroll();






