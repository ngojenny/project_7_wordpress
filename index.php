<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>
	<?php 
	   global $wp_query;
	   $pageID = $wp_query->queried_object_id;
	?>

<div class="banner" style="background-image:url('<?php echo get_field('banner_image', $pageID)['url'] ?>')">

  <div class="container">
	<h1>
	  <?php the_field('page_title', $pageID) ?>
	</h1>
  </div> <!-- /.container -->

</div> <!-- /.hero -->

<div class="featured-post">
	<div class="featured-blurb">
		
	</div>
</div>

<div class="main">
  <div class="container">

	<div class="content">
		<?php get_template_part( 'loop', 'index' );	?>
	</div> <!--/.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>