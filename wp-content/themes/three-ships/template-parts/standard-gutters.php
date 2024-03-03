<?php
/*
Template Name: Standard Gutters
*/ ?>

<?php get_header(); ?>

<div class="gutter-container p-2 sm:grid grid-cols-12">
    <div class="gutter-heading-text flex flex-row justify-center sm:row-span-1 col-span-12 lg:row-span-1 ">
        <span class="bg-slate-300 p-1 font-semibold rounded-md sm:text-sm mt-2">Gutter Product</span>
    </div>
    <h1 class="sm:col-span-12 row-span-2 mt-2.5 font-bold">Premium Quality Gutter</h1>
    <p class="sm:col-span-12 row-span-3 mt-3 text-sm">Our gutter system is designed for maximum efficiency and durability. Made from high-quality materials, it is built to withstand even the harshest weather conditions</p>
    <img class="sm:col-span-6 sm:row-span-4 sm:col-start-4 mt-4" src="https://dummyimage.com/600x480/000/fff.png&text=small+screen+size+" alt="">
    
    <div class="check-box-points sm:row-span-5 col-span-12 text-center mt-4 text-sm">
    <div class="box-img-control flex justify-center items-center gap-1">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/tick.svg"alt="green tick"><p>High quality materials for maximum durability.</p></div>
    <div class="box-img-control flex justify-center items-center gap-1">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/tick.svg"alt="green tick"><p>Easy installation and maintenance.</p>
    </div>
    <div class="box-img-control flex justify-center items-center gap-1">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/tick.svg"alt="green tick"> <p>Efficient water drainage</p></div>
    </div>
    <div class="price-button-container sm:row-span-6 col-span-12 flex items-center justify-center gap-4">
        <h2 class="font-bold">Price: $199.99</h2>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded sm:my-6 text-sm">
            Buy Now
        </button>
    </div>
 

</div>


<?php get_footer(); ?>