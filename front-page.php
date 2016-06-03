<?php get_header();  ?>

<!-- HERO HEADER STARTS -->
<div class="hero" style="background-image:url('<?php echo get_field('hero_image_background')['url'] ?>')">

	<div class="container">
		<h1>
			<?php echo get_field('page_title') ?>
		</h1>
	</div> <!-- /.container -->
</div> <!-- /.hero -->

<!-- FEATURED CONTENT/QUOTE SECTION STARTS -->
<section class="featuredContent">
	<div class="container">
		<p><?php the_field('introduction_quote'); ?></p>
		<a href="<?php the_field('more_info'); ?>">View more</a>

	</div> <!-- /.container --> 
</section>

<!-- BLOG PREVIEW SECTION  -->
<section class="blogPreview">
	<?php $pullBlogPost = new WP_Query(['posts_per_page' => 3]); ?>
		<?php if ($pullBlogPost->have_posts() ) : ?>
			<?php while ($pullBlogPost->have_posts() ) : $pullBlogPost->the_post(); ?>
					<article class="clearfix">
						<div class="blogContent">
							<h2><?php the_title(); ?></h2>
							<p><?php the_time('F j, Y'); ?></p>
							<p class="standout"><?php the_field('blog_post_subtitle') ?></p>
							<?php the_excerpt(); ?>
							<?php the_tags('', ' ') ?>
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