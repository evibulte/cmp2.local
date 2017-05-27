<?php get_header();?>

                    <!-- NAVBAR -->
                    <?php dynamic_sidebar( 'primary-sidebar' ); ?>
                    
    <div class="content">
            <div id="primary">
                <div id="content" role="main">

                    <div class="pagetitle"><?php while ( have_posts() ) : the_post(); ?> </div>
                        <?php get_template_part( 'content', 'page' ); ?>


                        <?php $query = new WP_Query( array( 'post_type' => 'blogposts' ) );                  

                        if ( $query->have_posts() ) :
                             while ( $query->have_posts() ) : $query->the_post(); ?>   
                                <div class="blogvak">
                                    <h2 class="blogtitel"><?php the_title(); ?></h2>
                                    <div class="datum"><?php the_date();?></div>
                                    <div class="blogtekst"><?php the_content(); ?></div>
                                </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        <?php else : ?>
                       
                        <?php endif; ?>
                        
                        <div class='feature_image'><?php the_post_thumbnail(); ?></div>
                        
                    <?php
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                endwhile; // end of the loop. ?>



                </div><!-- #content -->
            </div><!-- #primary -->

    </div>

<?php get_footer(); ?>
