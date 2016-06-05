<?php get_header();  ?>

<!-- HERO HEADER STARTS -->
<div class="hero" style="background-image:url('<?php echo get_field('hero_image_background')['url'] ?>')">
		<h1>
			<?php echo get_field('page_title') ?>
		</h1>
		<h2>
			<?php echo get_field('subtitle') ?>
		</h2>
</div> <!-- /.hero -->

<!-- FEATURED CONTENT/QUOTE SECTION STARTS -->
<section class="featured-quote">
	<div class="container">
		<p><?php the_field('introduction_quote'); ?></p>
		<a href="<?php the_field('more_info'); ?>">View more</a>

	</div> <!-- /.container --> 
</section>

<!-- BLOG PREVIEW SECTION  -->
<section class="blog-preview">
	<?php $pullBlogPost = new WP_Query(['posts_per_page' => 3]); ?>
		<?php if ($pullBlogPost->have_posts() ) : ?>
			<?php while ($pullBlogPost->have_posts() ) : $pullBlogPost->the_post(); ?>
					<article class="blog-preview">
						<div class="blog-content">
							<div class="blog-content-container">
								<h2><?php the_title(); ?></h2>
								<p><?//php the_time('F j, Y'); ?></p>
								<p class="standout"><?php the_field('blog_post_subtitle') ?></p>
								<div class="blog-intro">
									<p>
									<?php $content = get_the_content();
										echo wp_trim_words( $content, '30'); ?>
									</p>
								</div>
								<a href="'. get_permalink() . '">Read More <span class="meta-nav">&rarr;</span></a>
								<?php the_tags('', ' ') ?>
							</div>
						</div>
						<figure style="background-image:url(<?php the_post_thumbnail_url('large'); ?>)">
						</figure>
					</article>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
	<?php else: ?>
	<?php endif; ?>
</section>

<?php get_footer(); ?>