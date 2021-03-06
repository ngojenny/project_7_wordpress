<div class="alt-nav">
	<?php get_header(); ?>
</div>

<div class="main main-single">
	<div class="container container-single">
		<div class="content content-single">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					
					<?php// $image_alt = get_post_meta($image->id, 'the_post_thumbnail_alt', true); ?>
					<img src="<?php the_post_thumbnail_url('large'); ?>" alt="">

					<!-- <div class="entry-meta">
						<?php// hackeryou_posted_on(); ?>
					</div> --><!-- .entry-meta -->

					<div class="entry-content-single">
						<div class="blog-content-single">
							<?php the_content(); ?>
							<?php wp_link_pages(array(
								'before' => '<div class="page-link"> Pages: ',
								'after' => '</div>'
							)); ?>
						</div>
					</div><!-- .entry-content -->

					<div class="entry-utility">
						<?php hackeryou_posted_in(); ?>
						<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-utility -->
				</div><!-- #post-## -->

				<div id="nav-below" class="navigation">
					<p class="nav-previous"><?php previous_post_link('%link', '&larr; %title'); ?></p>
					<p class="nav-next"><?php next_post_link('%link', '%title &rarr;'); ?></p>
				</div><!-- #nav-below -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div> <!-- /.content -->
		
		<aside>
			<p>By: <?php the_author_link(); ?></p>
			<p><?php the_date(); ?></p>
			<h4>About the author</h4>
			<p><?php the_author_meta('description'); ?></p>
			<?php get_sidebar(); ?>
		</aside>
		
	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>