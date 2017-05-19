<?php get_header(); ?>

        
        <!-- banner -->
        <a href="http://gyunxiu.com/web170/wordpress/shows/"><img id="banner" src="http://gyunxiu.com/web170/template/imgs/banner.png" alt="New Shows" /></a>

        <!-- column one -->
        <div class="column">
        <a href="http://gyunxiu.com/web170/wordpress/about/"><img class="icon" src="http://gyunxiu.com/web170/template/imgs/icon-about.png" alt="About Us" /></a>
        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <?php the_content(''); ?>
        <?php endwhile; endif; ?>
        </div>

        <!-- column two -->
        <div class="column">
        <a href="http://gyunxiu.com/web170/wordpress/join-us/"><img class="icon" src="http://gyunxiu.com/web170/template/imgs/icon-member.png" alt="Membership" /></a>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<a class="more" href=" http://gyunxiu.com/web170/wordpress/join-us/">READ MORE</a></p>
        </div>

        <!-- column three -->
        <div class="column">
        <a href="http://gyunxiu.com/web170/wordpress/blog/"><img class="icon" src="http://gyunxiu.com/web170/template/imgs/icon-postings.png" alt="postings" /></a>
        <!--<p>
            ・17:00 12/12/17 Member gathering<br />
            ・19:00 11/11/17 Happy hours<br />
            ・09:00 01/01/17 Lunar new year<br />
            ・17:00 12/12/17 Member gathering<br />
            ・19:00 11/11/17 Happy hours<br />
            ・09:00 01/01/17 Lunar new year<br />
        <a class="more" href="http://gyunxiu.com/web170/wordpress/schedule/">READ MORE</a>
        </p>-->
        <ul>
        <?php rewind_posts(); ?>
        <?php query_posts('showposts=4');?>
        <?php while (have_posts()) : the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile;?>
        </ul>
        </div>

<?php get_footer(); ?>