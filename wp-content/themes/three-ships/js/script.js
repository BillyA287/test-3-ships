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