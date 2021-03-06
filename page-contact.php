<div class="alt-nav">
	<?php

	/*
		Template Name: Contact, No Sidebar
	*/

	get_header();  ?>
</div>

<div class="banner" style="background-image:url('<?php echo get_field('banner_image', $pageID)['url'] ?>')">
	<div class="container">
		<h1>
			<?php the_field('page_title', $pageID) ?>
		</h1>
	</div>
</div>

<div class="main main-contact">
	<?php // Start the loop ?>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<div class="container main-container-contact">
		<h2><?php the_title(); ?></h2>
		<div class="container-contact">
			<div class="container-flex">
				<?php dynamic_sidebar('company-location'); ?>
			</div>
			<?php the_content(); ?>
				
		</div> 
		<div class="map">
			<?php 
			 
			$location = get_field('map');
			 
			if( !empty($location) ):
			?>
			<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			</div>
			<?php endif; ?>
		</div>

		<?php endwhile; // end the loop?>
	</div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>