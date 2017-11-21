<?php get_header(); ?>

            <?php 
                if( have_posts() ):
                    while( have_posts() ): the_post(); ?>
                                <div class="card">
                                    <h1 class="title titlepermlink">
                                        <a href="<?php the_permalink() ?>"rel="bookmark">
                                            <?php the_title(); ?>
                                        </a>
                                    </h1>
                                    <hr class="title-hr">
                                    <div class="body">
                                    <?php the_content('read more'); ?>
                                    </div>
                                </div>
                    <?php endwhile;
                endif;
            ?>

    
<?php get_footer(); ?>