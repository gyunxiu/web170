<?php get_header(); ?>
<?php get_sidebar(); ?>
        
        <div id=right>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php the_content(''); ?>
            <?php endwhile; endif; ?>
            <small>single.php</small>
        </div>

<?php get_footer(); ?>