<div class="footer-container bg-slate-700 lg:flex justify-around items-center ">
    <div class="footer-text-control p-2 lg:flex flex-col ">
        <h3 class="font-bold text-white">Roofing Inc</h3>

        <p class="sm:text-sm text-white">Expert Roofing Solutions</p>
    </div>
    <footer>
        <div class="footer-menu text-white">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer_secondary',
                'container' => false,
                'menu_class' => 'footer-menu-list flex gap-8 p-2',
            ));
            ?>
        </div>
    </footer>
</div>

</body>

</html>