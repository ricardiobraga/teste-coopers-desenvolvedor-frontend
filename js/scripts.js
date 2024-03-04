let firstSlide = document.querySelector('.slide.first');
const clone = firstSlide.cloneNode(true);
clone.setAttribute("class", "slide")
document.querySelector('.slides').append(clone);

let count = 1;
document.getElementById("radio1").checked = true;

