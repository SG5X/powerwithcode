<?php
get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/library-hero.jpg'); ?>);"></div>
    <div class="page-banner__content container t-center c-white">
      <h2 class="headline headline--medium">Latest News</h2>
    </div>
  </div>


<div class="container container--narrow page-section">
	
	<p>ifbufbfuifb</p>
<?php
	while(have_posts()){
		the_post(); ?>
	
	<div class="post-item">
	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	</div>
	
	<div class="meta-box">
	
	<p>Posted by <?php the_author(); ?>on <?php the_date(); ?> at <?php echo get_the_category_list('&'); ?></p>
	</div>
	
	<div class="generic-content">
	<?php the_excerpt();?>
	<a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue...</a>
	</div>
	
		<?php }
	echo paginate_links();
	?>
</div>

<?php get_footer();

?>