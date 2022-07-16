

<?php
get_header();


get_header(); ?>

<div style="background: url(<?php echo get_theme_file_uri('/build/images/ocean.jpg') ?>);" class="hero__section">
<div class="hero-content">
    <h1>
    <?php the_archive_title(); ?></h1>
    <p style="color: blue;"><?php the_archive_description(); ?></p>
</div>

<div class="posts__section">
<?php
while (have_posts()) {
    the_post(); ?>
    <div class="post">
        <h1> <a href="<?php the_permalink() ?>"><?php the_title(); ?></a> </h1>
        <h5>Posted by <?php the_author_posts_link(); ?> On <?php the_time('F j, Y'); ?> at <?php the_time('g: i a'); ?> on <?php echo get_the_category_list(', '); ?> Category </h5>
        <p class="post-content"><?php the_excerpt(); ?></p>
        <button class="continue-reading"><a href="<?php the_permalink(); ?>">Continue Reading &raquo;</a></button>
</div> 
<?php }
   echo paginate_links();
?>
</div>

<?php
get_footer();

?>
get_footer();
?>