

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
            <button><a href="<?php echo get_post_type_archive_link('event'); ?>">Event Home</a></button>
            <button class="btn-2"><h5><?php the_title(); ?>  </h5></button>
        </div>
        <p class="post-content"> <?php the_content(); ?> </p>
       </div>
<?php
}
get_footer();
?>