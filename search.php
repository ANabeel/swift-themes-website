<?php get_header(); ?>

    <div class="main-container center">
        <div class="noflex">
                <?php 
                    if( have_posts() ):
                        while( have_posts() ): the_post(); ?>
                            <?php get_template_part('content', 'search') ?>
                        <?php endwhile; ?>
                       <?php else : ?>
                            <?php get_template_part( 'content', 'none' ); ?>

                   <?php endif;
                ?>
		</div>
    </div>
    
<?php get_footer(); ?>