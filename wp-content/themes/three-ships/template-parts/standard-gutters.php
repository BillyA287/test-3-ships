<?php
/*
Template Name: Standard Gutters
*/ ?>

<?php get_header(); ?>



<div class="product-container lg:mx-auto lg:max-w-[800px]">

    <div class="product-info mt-4 md:gap-4 sm:flex flex-col lg:grid grid-cols-12">
    <img class="sm:col-span-6 rounded-md" src="https://dummyimage.com/600x480/000/fff.png&text=small+screen+size+" alt="">

    <div class="product-description sm:flex flex-col md:col-span-6">
    <div class="gutter-heading-text flex flex-row  sm:mt-2.5 lg:col-span-12 ">
        <span class="bg-slate-300 p-1 font-semibold rounded-md sm:text-sm">Gutter Product</span>
    </div>
    <h1 class="sm mt-2.5 font-bold">Premium Quality Gutter</h1>
    <p class="sm: mt-3 text-sm">Our gutter system is designed for maximum efficiency and durability. Made from high-quality materials, it is built to withstand even the harshest weather conditions</p>
    
    <div class="check-box-points">
    <div class="box-img-control flex  items-center gap-1">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/tick.svg"alt="green tick"><p>High quality materials for maximum durability.</p></div>
    <div class="box-img-control flex  items-center gap-1">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/tick.svg"alt="green tick"><p>Easy installation and maintenance.</p>
    </div>
    <div class="box-img-control flex items-center gap-1">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/tick.svg"alt="green tick"> <p>Efficient water drainage</p></div>
    </div>
    <div class="price-button-container  flex items-center  gap-4">
        <h2 class="font-bold">Price: $199.99</h2>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded sm:my-2 text-sm">
            Buy Now
        </button>
    </div>
    </div>

    </div>
  <h1>tooo</h1>
  <?php get_template_part('template-parts/image-carousel') ?>

    </div>




<?php get_footer(); ?>