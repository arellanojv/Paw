import domReady from '@roots/sage/client/dom-ready';
import Swiper from 'swiper';
import JOS from "jos-animation";
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faPhone, faLocationDot, faCircleInfo, faCircleCheck } from '@fortawesome/free-solid-svg-icons';
import '@scripts/menu';

library.add(faPhone, faLocationDot, faCircleInfo, faCircleCheck);
dom.watch();
// import '@scripts/masco';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);

const swiper = new Swiper();

JOS.init({
  // disable: false, // Disable JOS gloabaly | Values :  'true', 'false'
  // debugMode: true, // Enable JOS debug mode | Values :  'true', 'false'
  passive: false, // Set the passive option for the scroll event listener | Values :  'true', 'false'

  once: true, // Disable JOS after first animation | Values :  'true', 'false' || Int : 0-1000
  animation: "fade-up", // JOS global animation type | Values :  'fade', 'slide', 'zoom', 'flip', 'fade-right', 'fade-left', 'fade-up', 'fade-down', 'zoom-in-right', 'zoom-in-left', 'zoom-in-up', 'zoom-in-down', 'zoom-out-right', 'zoom-out-left', 'zoom-out-up', 'zoom-out-down', 'flip-right', 'flip-left', 'flip-up', 'flip-down, spin, revolve, stretch, "my-custom-animation"
  // animationInverse: "static", // Set the animation type for the element when it is scrolled out of view | Values :  'fade', 'slide', 'zoom', 'flip', 'fade-right', 'fade-left', 'fade-up', 'fade-down', 'zoom-in-right', 'zoom-in-left', 'zoom-in-up', 'zoom-in-down', 'zoom-out-right', 'zoom-out-left', 'zoom-out-up', 'zoom-out-down', 'flip-right', 'flip-left', 'flip-up', 'flip-down, spin, revolve, stretch, "my-custom-animation"
  timingFunction: "ease", // JOS global timing function | Values :  'ease', 'ease-in', 'ease-out', 'ease-in-out', 'linear', 'step-start', 'step-end', 'steps()', 'cubic-bezier()', 'my-custom-timing-function'
  //mirror : false, // Set whether the element should animate back when scrolled out of view | Values :  'true', 'false'
  threshold: 0, // Set gloabal the threshold for the element to be visible | Values :  0-1
  delay: 0.5, // Set global the delay for the animation to start | Values :  0,1,2,3,4,5
  duration: 0.7, // Set global the duration for the animation playback | Values :  flota : 0-1 & int : 0,1,2,3,4,5

  // startVisible: "true", // Set whether the element should animate when the page is loaded | Values :  'true', 'false' || MS : 0-10000
  scrollDirection: "down", // Set the scroll direction for the element to be visible | Values :  'up', 'down', 'none'
  //scrollProgressDisable: true // disable or enable scroll callback function | Values :  'true', 'false'
  // intersectionRatio: 0.4, // Set the intersection ratio between which the element should be visible | Values :  0-1 (automaticaly set)
  // rootMargin_top: "0%", // Set by which percent the element should animate out (Recommended value between 10% to -30%)
  // rootMargin_bottom: "-50%", // Set by which percent the element should animate out (Recommended value between -10% to -60%)
  rootMargin: "0% 0% 15% 0%", // Set the root margin for the element to be visible | Values :  _% _% _% _%  (automaticaly set)
});

// Sticky Menu
window.addEventListener('scroll', function() {
  let header = document.querySelector('header');
  header.classList.toggle('scrolling', window.scrollY > 0);
});

const readText = (text) => {
  if (text.innerHTML === "Read More") {
    text.innerHTML = "Read Less";
  } else {
    text.innerHTML = "Read More";
  }
}

const accordions = document.querySelectorAll(".accordion-item");
accordions.forEach((item) => {
  const label = item.querySelector(".accordion-header");
  const box = item.querySelector(".box-toggle");
  const readMore = item.querySelector(".read-more a");

  readMore.innerHTML = "Read More"

  label.addEventListener("click", () => {
    readText(readMore);
    item.classList.toggle("active");
    box.classList.toggle("listing-blur");
  });

  // console.log(readMorez.innerText);
  readMore.addEventListener("click", (e) => {
    e.preventDefault();
    
    readText(readMore);
    item.classList.toggle("active");
    box.classList.toggle("listing-blur");
  });
  
});