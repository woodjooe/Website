/*===== NAVBAR =====*/

let prevScrollpos = window.pageYOffset;
const myNav = document.getElementById("header");
window.onscroll = function  () {
    let currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        myNav.style.top = "0";

    } else {
        myNav.style.top = "-100px";
    }
    prevScrollpos = currentScrollPos;
}

/*===== TYPING =====*/

const typedTextSpan = document.querySelector('.typed-text');

const textArray = ["TES TEST TEST"];
const typingDelay = 100;
const erasingDelay = 100;
const newTextDelay = 2000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

function type() {
    if (charIndex < textArray[textArrayIndex].length) {
        typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
        charIndex++;
        setTimeout(type, typingDelay);
    } else {
        setTimeout(erase, newTextDelay);
    }
}

function erase() {
    if (charIndex > 0) {

        typedTextSpan.textContent = textArray[textArrayIndex].substring(
            0,
            charIndex - 1
        );
        charIndex--;
        setTimeout(erase, erasingDelay);
    } else {
        textArrayIndex++;
        if (textArrayIndex >= textArray.length) textArrayIndex = 0;
        setTimeout(type, 2000);
    }
}

document.addEventListener('DOMContentLoaded', function () {
    // On DOM Load initiate the effect
    if (textArray.length) setTimeout(type, 200);
});

/*===== FADEIN =====*/

function fadeIn(el, time) {
    el.style.opacity = 0;

    var last = +new Date();
    var tick = function() {
        el.style.opacity = +el.style.opacity + (new Date() - last) / time;
        last = +new Date();

        if (+el.style.opacity < 1) {
            (window.requestAnimationFrame && requestAnimationFrame(tick)) || setTimeout(tick, 16);
        }
    };

    tick();
}

var el = document.getElementById("home__img");
fadeIn(el, 2000);

/*===== FILTER =====*/

filterSelection("all")
function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterdiv")
    if (c == "all") c = "";
    // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
    for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
}

// Show filtered elements
function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {
            element.className += " " + arr2[i];
        }
    }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
    }
    element.className = arr1.join(" ");
}

$(document).ready(function(){
    $('#toggle-switcher').click(function(){
           if($(this).hasClass('open')){
               $(this).removeClass('open');
               $('#switch-style').animate({'left':'-100px'});
           }else{
               $(this).addClass('open');
               $('#switch-style').animate({'left':'0'});
           }
       });
   });