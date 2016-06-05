<?php // If there are no posts to display, such as an empty archive page ?>

<?php if ( ! have_posts() ) : ?>

	<article id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Not Found</h1>
		<section class="entry-content">
			<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->

<?php endif; // end if there are no posts ?>

<?php // if there are posts, Start the Loop. ?>

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a class="expand-read" href="<?php the_permalink(); ?>">
			<div class="blog-post-image">
				<img src="<?php the_post_thumbnail_url('large')?>" alt="">
			</div>
		</a>

		<section class="entry-content">
    		<a class="blog-title" href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
    			<h2 class="entry-title">
      				<?php the_title(); ?>
      			</h2>
      			<p class="date"><?php the_time('F j, Y'); ?></p>
    		</a>
      		
			<p>
				<?php $content = get_the_content();
				echo wp_trim_words( $content, '100'); ?>
				<a class="expand-read" href="<?php the_permalink(); ?>">Read More <span class="meta-nav">&rarr;</span></a>
			</p>
			

			<?php wp_link_pages( array(
      			'before' => '<div class="page-link"> Pages:',
      			'after' => '</div>'
    		)); ?>
			
			<div class="organize-tags-cats">
				<p class="tags"><?php the_tags('', ' ', '<br>'); ?></p>
				<p class="categories"> Posted in <?php the_category(', '); ?></p>
			</div>
    		<p><?php comments_popup_link('Respond to this post &raquo;', '1 Response &raquo;', '% Responses &raquo;'); ?></p>
    		<p><?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?></p>
		</section><!-- .entry-content -->
	</article><!-- #post-## -->

	<?php comments_template( '', true ); ?>


<?php endwhile; // End the loop. Whew. ?>

<?php // Display navigation to next/previous pages when applicable ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <p class="alignleft"><?php next_posts_link('&laquo; Older Entries'); ?></p>
  <p class="alignright"><?php previous_posts_link('Newer Entries &raquo;'); ?></p>
<?php endif; ?>
