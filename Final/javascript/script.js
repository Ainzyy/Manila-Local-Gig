// Carousel
window.addEventListener("load", () => {
    autoSlide();
 })
 function autoSlide() {
    setInterval(() => {
       slide(getItemActiveIndex() + 1);
    }, 4000); // fade speed = 4s
 }
 function slide(toIndex) {
    const itemsArray = Array.from(document.querySelectorAll(".carousel_item"));
    const itemActive = document.querySelector(".carousel_item__active");
 
    // check if toIndex exceeds the number of carousel items
    if (toIndex >= itemsArray.length) {
       toIndex = 0;
    }
 
    const newItemActive = itemsArray[toIndex];
 
    // start transition

    setTimeout(() => {
       newItemActive.classList.add("carousel_item__next");
       itemActive.classList.add("carousel_item__next");
    }, 20);
 
    // remove all transition class and switch active class
    newItemActive.addEventListener("transitionend", () => {
       itemActive.className = "carousel_item";
       newItemActive.className = "carousel_item carousel_item__active";
    }, {
       once: true
    });
 }
 function getItemActiveIndex() {
    const itemsArray = Array.from(document.querySelectorAll(".carousel_item"));
    const itemActive = document.querySelector(".carousel_item__active");
    const itemActiveIndex = itemsArray.indexOf(itemActive);
    return itemActiveIndex;
 }

// Toggle Menu
 var navLinks = document.getElementById("navLinks");
   function showMenu(){
      navLinks.style.display = "2";
   }
   function hideMenu(){
      navLinks.style.display = "-5";
   }

// SLIDER
