<div class="alt-nav">
	<?php

	/*
		Template Name: About, No Sidebar
	*/

	get_header();  ?>
</div>
<div class="banner" style="background-image:url('<?php echo get_field('banner_image')['url'] ?>')">
	<div class="container">
		<h1>
			<?php the_field('page_title', $pageID) ?>
		</h1>
	</div>
</div>

<div class="main about-main">
	<div class="container">
		<?php // Start the loop ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="containerFlex">
			<?php the_content(); ?>
				<div class="skill-service-box service-box">
					<div class="skill-service-box-content">
						<?php dynamic_sidebar('list1'); ?>
						<a href="<?php the_field('additional_link1') ?>">Contact Us</a>
					</div>
					<div class="skill-service-box-photo">
						<img src="<?php echo get_field('image_1')['url'] ?>" alt="<?php echo get_field('image_1')['alt'] ?>">
					</div>
				</div>

				<div class="skill-service-box skills-box">
					<div class="skill-service-box-content">
						<?php dynamic_sidebar('list2'); ?>
						<a href="<?php the_field('additional_link1') ?>">Contact Us</a>
					</div>
					<div class="skill-service-box-photo">
						<img src="<?php echo get_field('image_2')['url'] ?>" alt="<?php echo get_field('image_1')['alt'] ?>">
					</div>
				</div>
			</div>

		<?php endwhile; // end the loop?>
	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>