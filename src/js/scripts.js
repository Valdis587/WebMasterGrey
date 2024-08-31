import Swiper from 'swiper/bundle';
import {Autoplay, EffectFade, EffectCoverflow, EffectFlip, EffectCube, Navigation } from 'swiper/modules';
Swiper.use({ Autoplay, EffectFade, EffectCoverflow, EffectFlip, EffectCube, Navigation});

const headSlide = new Swiper('.homeslider__content', {
    loop: true,
    autoplay: true,
    speed: 2000,
    autoplayDisableOnInteraction:true,
    pagination: false,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
     },
   });

   const newshome = new Swiper('.homenews__content', {
   modules: [Autoplay, EffectFade, Navigation],
    speed: 400,
    autoplay: true,
    autoHeight: true,
    initialSlide: 0,
    //truewrapper adoptsheight of active slide
  
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // delay between transitions in ms
    autoplay: true,
    pagination: false,
  
    effect: 'slide',
    // Distance between slides in px.
    spaceBetween: 25,
    //
    slidesPerView: 'auto',
    //
    centeredSlides: false,
    //
    slidesOffsetBefore: 0,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    //
    breakpoints: {
       320: {
          slidesPerView: 1,
       },
       480: {
          slidesPerView: 1,
       },
       590: {
          slidesPerView: 2,
       },
       1100: {
          slidesPerView: 3,
       },
       1300: {
        slidesPerView: 4,
     },
    }
  });


  const homeproject = new Swiper('.homeproject__content', {
   modules: [Autoplay, EffectCoverflow, Navigation],
   effect: 'coverflow',
   loop: true,
   speed: 2000,
   autoplay: true,
   centeredSlides: true,
   autoHeight: true,
   slidesPerView: 5,
   centeredSlides: true,
     // Navigation arrows
     navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    coverflow: {
      rotate: 30,
      stretch: 400,
      depth: 400,
    },
    breakpoints: {
      320: {
         slidesPerView: 1,
      },
      480: {
         slidesPerView: 1,
      },
      590: {
         slidesPerView: 2,
      },
      1100: {
         slidesPerView: 3,
      },
      1300: {
       slidesPerView: 4,
    },
   }
  });

  const swiper5 = new Swiper('.sidebar__widget-prject', {
   modules: [Autoplay, EffectCube],
    loop: true,
    autoplay: true,
    // If we need pagination
    pagination: false,
    centeredSlides: true,
    effect: 'cube',
    speed: 2000,
    autoHeight: true,
 });

 const swiper6 = new Swiper('.sidebar__widget-reviews', {
   modules: [Autoplay, EffectCube],
    loop: true,
    autoplay: true,
    centeredSlides: true,
    // If we need pagination
    pagination: false,
    effect: 'cube',
    speed: 2000,
    autoHeight: true,
 });

 const homereviews = new Swiper('.homereviews__content-left', {
   loop: true,
   autoplay: true,
   // If we need pagination
   pagination: false,
   effect: 'flip',
   flipEffect: {
      slideShadows: false,
   },
   speed: 2000,
   autoHeight: true,
 });

 const homereviews2 = new Swiper('.homereviews__content-right', {
   loop: true,
   autoplay: true,
   // If we need pagination
   pagination: false,
   effect: 'flip',
   flipEffect: {
      slideShadows: false,
   },
   speed: 2000,
   autoHeight: true,
 });

 const accordionItemHeaders = document.querySelectorAll(".faq__title");

 accordionItemHeaders.forEach(accordionItemHeader => {
    accordionItemHeader.addEventListener("click", event => {
     
      // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
     
     const currentlyActiveAccordionItemHeader = document.querySelector(".faq__item .active");
      if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
        currentlyActiveAccordionItemHeader.classList.toggle("active");
         currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
       }
 
      accordionItemHeader.classList.toggle("active");
      const accordionItemBody = accordionItemHeader.nextElementSibling;
      if(accordionItemHeader.classList.contains("active")) {
       accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
      }
      else {
        accordionItemBody.style.maxHeight = 0;
      }
     
    });
 });

 const btnUp = {
   el: document.querySelector('.footer__up'),
   show() {
     // удалим у кнопки класс btn-up_hide
     this.el.classList.remove('footer__up-hide');
   },
   hide() {
     // добавим к кнопке класс btn-up_hide
     this.el.classList.add('footer__up-hide');
   },
   addEventListener() {
     // при прокрутке содержимого страницы
     window.addEventListener('scroll', () => {
       // определяем величину прокрутки
       const scrollY = window.scrollY || document.documentElement.scrollTop;
       // если страница прокручена больше чем на 400px, то делаем кнопку видимой, иначе скрываем
       scrollY > 400 ? this.show() : this.hide();
     });
     // при нажатии на кнопку .btn-up
     document.querySelector('.footer__up').onclick = () => {
       // переместим в начало страницы
       window.scrollTo({
         top: 0,
         left: 0,
         behavior: 'smooth'
       });
     }
   }
 }
 
 btnUp.addEventListener();


  const elements = document.querySelector('.tag-site'); 
  let el = elements.children;
  for(let i=0; i < el.length; i++) {
    el[i].removeAttribute('style');
  }
  


