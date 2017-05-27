<?php get_header();?>

        <?php is_home(); ?>
<div class="content">

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'index' ); ?>
				<div class="alleproducten">	
					<?php dynamic_sidebar( 'socialmedia-sidebar' ); ?>
				</div>
                                        <div class='feature_image'><?php the_post_thumbnail(); ?></div>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

</div>

<?php get_footer(); ?>