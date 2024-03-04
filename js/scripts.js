let firstSlide = document.querySelector('.slide.first');
const clone = firstSlide.cloneNode(true);
clone.setAttribute("class", "slide")
document.querySelector('.slides').append(clone);



let count = 1;
document.getElementById("radio1").checked = true;


// // drag

// const slides = document.querySelector('.slides');
// const slide = slides.querySelector('.slide');
// const first = slides.querySelector('.first');

// function onDrag({movementX}){
//   let getStyle = window.getComputedStyle(slides);
//   let left = parseInt(getStyle.marginLeft);    
//   slides.style.marginLeft= `${left + movementX}px`;
  
// };

// slides.addEventListener("mousedown", () => {
//   // if(slides.style.marginLeft < "80px"){      
//   //   slides.removeEventListener("mousemove", onDrag);
//   // }
//   slide.classList.add("active")
//   slides.addEventListener("mousemove", onDrag);
// });

// document.addEventListener("mouseup", () => {
//   slide.classList.remove("active");
//   slides.removeEventListener("mousemove", onDrag);
// });





console.log(window.innerWidth);


setInterval(function() {
  nextImage();
  
}, 5000);

function nextImage() {
  if (window.innerWidth < 1200){

    count++;  
    if(count > 2){
      count = 1;
    }
    document.getElementById(`radio${count}`).checked = true;
  }
}

