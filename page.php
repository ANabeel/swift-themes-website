<?php get_header(); ?>

    <div class="content-body">
        <div class="content-section">

 <?php 

                if( have_posts() ):
                    while( have_posts() ): the_post(); ?>
                                        <?php the_content(); ?>
                    <?php endwhile;
                endif;
            ?>
            
        </div>
    </div>

<?php get_footer(); ?>