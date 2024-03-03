<?php
/*
Template Name: Homepage
*/ ?>


<?php get_header(); ?>
<body >
    
<div class="hero-text-container md:grid grid-cols-12 items-center">
<div class="text-continer text-xl sm:p-2 md:col-span-5	"> <h1 class="font-bold">Expert Roofing Solutions</h1>

<!-- <?php $loop = new WP_Query( array( 'post_type' => 'product', 'posts_per_page' => -1 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="pindex">
    <div class="pimage">
        <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a>
    </div>
    <div class="ptitle">
        <h2><?php echo get_the_title(); ?></h2>
        <?php the_content();?>
    </div>
</div>
<?php endwhile; wp_reset_query(); ?> -->

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