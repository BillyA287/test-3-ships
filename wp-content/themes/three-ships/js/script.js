document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const closeIcon = document.querySelector('.close-icon');
    const menu = document.querySelector('.menu');

    menuToggle.addEventListener('click', function() {
        menu.classList.toggle('hidden');
        menuToggle.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });

    closeIcon.addEventListener('click', function() {
        menu.classList.add('hidden');
        menuToggle.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    });
});

// custom-menu.js
document.addEventListener("DOMContentLoaded", function() {
    // Get all anchor elements within the menu
    var menuItems = document.querySelectorAll('.menu a');

    // Loop through each anchor element and add event listeners for mouseenter and mouseleave
    menuItems.forEach(function(item) {
        // Add hover underline class on mouseenter
        item.addEventListener('mouseenter', function() {
            this.classList.add('hover:underline');
        });

        // Remove hover underline class on mouseleave
        item.addEventListener('mouseleave', function() {
            this.classList.remove('hover:underline');
        });
    });
});

// function for image carousel 
document.addEventListener('DOMContentLoaded', function() {
    
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) { slideIndex = 1; }    
  if (n < 1) { slideIndex = slides.length; }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

document.querySelector('.prev').addEventListener('click', () => {
  plusSlides(-1);
});

document.querySelector('.next').addEventListener('click', () => {
  plusSlides(1);
});

document.querySelectorAll('.dot').forEach((dot, index) => {
  dot.addEventListener('click', () => {
    currentSlide(index + 1);
  });
});


  });

