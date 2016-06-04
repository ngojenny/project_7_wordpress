<?php

/*
	Template Name: Contact, No Sidebar
*/

get_header();  ?>

<div class="banner" style="background-image:url('<?php echo get_field('banner_image', $pageID)['url'] ?>')">
	<div class="container">
		<h1>
			<?php the_field('page_title', $pageID) ?>
		</h1>
	</div>
</div>

<div class="main">
	<?php // Start the loop ?>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div class="container">
		<h2><?php the_title(); ?></h2>
		<div class="containerFlex">
			<?php dynamic_sidebar('company-location'); ?>
		</div>
		<?php the_content(); ?>
			
	</div> <!-- /.container -->
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
</div> <!-- /.main -->

<?php get_footer(); ?>