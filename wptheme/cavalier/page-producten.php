<?php get_header();?>
        <?php is_page(); ?>
<div class="content">
		<div id="primary">
			<div id="content" role="main">

				<div class="pagetitle"><?php while ( have_posts() ) : the_post(); ?> </div>

					<?php get_template_part( 'content', 'page' ); ?>
					
				<div class="alleproducten">	
									<?php dynamic_sidebar( 'producten-sidebar' ); ?>
				</div>

				<?php
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
			 endwhile; // end of the loop. ?>



			</div><!-- #content -->
		</div><!-- #primary -->

</div>

<?php get_footer(); ?>
