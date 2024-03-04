<div class="footer-container bg-slate-700 lg:flex justify-around items-center ">
    <div class="footer-text-control p-2 lg:flex flex-col ">
<h3 class="font-bold">Roofing Inc</h3>

<p class="sm:text-sm">Expert Roofing Solutions</p>
    </div>
<div class="footer-mobile">


 <?php
wp_nav_menu(array(
    'theme_location' => 'footer',
    'menu_class' => 'footer-menu sm:mt-2 flex flex-row justify-between', 
    'container' => 'ul',
    'container_class' => 'footer-menu-container', 
    'link_before' => '<span class="text-white mr-4">', 
    'link_after' => '</span>', 
    'items_wrap' => '<ul id="menu-footer" class="items flex flex-row">%3$s</ul>', 
));
?>   
</div>

</div>

</body>
</html>