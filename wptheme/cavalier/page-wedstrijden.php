<?php get_header();?>
        <?php dynamic_sidebar( 'secundairy-sidebar' ); ?>

<div class="content">
		<div id="primary">
			<div id="content" role="main">

				<div class="pagetitle"><?php while ( have_posts() ) : the_post(); ?> </div>

					<?php get_template_part( 'content', 'page' ); ?>
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
