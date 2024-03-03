<?php
/*
Template Name: Homepage
*/ ?>


<?php get_header(); ?>
<body >
    
<div class="hero-text-container md:grid grid-cols-12 items-center">
<div class="text-continer text-xl sm:p-2 md:col-span-5	"> <h1 class="font-bold">Expert Roofing Solutions</h1>



<p class="sm:mt-4 text-sm ">We provide high-quality roofing services with a focus on customer satisfaction and quality workmanship.</p>
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded sm:my-6 text-sm">
  Button
</button>
</div>
    <img class="sm:mb-6 col-span-7 col-start-6" src="https://dummyimage.com/600x480/000/fff.png&text=small+screen+size+" alt="placeholder image">
</div>

<?php get_template_part('template-parts/types-of-gutters') ?>
<?php get_template_part('template-parts/testimonials') ?>

<?php get_footer(); ?>