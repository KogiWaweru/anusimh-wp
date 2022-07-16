
<?php

get_header();

while (have_posts()) {
    the_post(); ?>

<div style="background: url(<?php echo get_theme_file_uri('/build/images/ocean.jpg') ?>);" class="hero__section">
        <div class="hero-content">
            <h1><?php the_title(); ?></h1>
            <p>More about this page</p>
        </div>

        <div class="posts__section"> 
        <div class="buttons">
            <button><a href="<?php echo site_url('/blog'); ?>">Blog Home</a></button>
            <button class="btn-2"><h5>Posted by <?php the_author_posts_link(); ?> On <?php the_time('F j, Y'); ?> at <?php the_time('g: i a'); ?> on <?php echo get_the_category_list(', '); ?>  </h5></button>
        </div>
        <p class="post-content"> <?php the_content(); ?> </p>
       </div>
<?php
}
get_footer();
?>