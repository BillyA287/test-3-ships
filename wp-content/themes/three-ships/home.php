<?php
/*
Template Name: Homepage
*/ ?>


<?php get_header(); ?>

<body>

    <div class="hero-text-container md:grid grid-cols-12 items-center xl:max-w-[1000px] mx-[auto] my-[0]">
        <div class="text-continer text-xl sm:p-2 md:col-span-5 xl:col-[1_/_span_5]">
            <h1 class="font-bold lg:text-3xl">Expert Roofing Solutions</h1>
            <p class="sm:mt-4 text-sm ">We provide high-quality roofing services with a focus on customer satisfaction and quality workmanship.</p>
            <button class="bg-black hover:bg-slate-200 text-white font-bold py-2 px-4 rounded sm:my-6 text-sm">
                Button
            </button>
        </div>
        <img class="mobile-img  rounded-md sm:mb-6 col-span-7 col-start-6 xl:max-w-[90%] md:hidden" src="https://dummyimage.com/600x480/000/fff.png&text=small+screen+size+" alt="placeholder image">
        <img class="tablet_desktop-img rounded-md sm:mb-6 col-span-7 col-start-6 xl:max-w-[90%] sm:hidden md:block " src="https://dummyimage.com/2048 x 1536/22de11/57152e.png&text=Tablet/Desktop+screen+size" alt="placeholder image">


    </div>
    <?php dynamic_sidebar('money-1') ?>
    <?php get_template_part('template-parts/types-of-gutters') ?>
    <?php get_template_part('template-parts/testimonials') ?>

    <?php get_footer(); ?>