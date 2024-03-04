
<div class=" flex-row justify-between items-baseline p-2 lg:mx-auto ">
<div class=" sm:p-2 nav-container flex justify-between" >
 <a href="">
<img src="<?php echo get_template_directory_uri(); ?>/assets/home.svg" alt="Home">

</a>    


<nav class="primary-menu">
    <!-- Hamburger Icon -->
    <button class="menu-toggle block md:hidden text-black">
        <svg class="h-6 w-6 hamburger-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>

    <!-- Close Icon -->
    <button class="close-icon hidden md:hidden text-black">
        <svg class="h-6 w-6 close-button" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>

    <!-- Primary Menu -->
    <?php
wp_nav_menu(array(
    'theme_location' => 'primary',
    'menu_class' => 'menu hidden md:flex gap-2 ', // Hide on small screens, show on medium and larger screens
    'container' => false, 
    'link_before' => '<span class="menu-item-link">', // Add a custom CSS class to each menu item link
));
?>

</nav>
</div>

    



