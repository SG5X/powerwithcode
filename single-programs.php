<?php

get_header();
?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Learn how the school of your dreams got started.</p>
      </div>
    </div>  
  </div>

<div class="container container--narrow">
<?php the_field('event_date'); ?>
	
<?php the_field('e_subtitle'); ?>
<?php
	$programs = new WP_Query(array(
	'post_per_page' => 4,
	'post_type' => 'programs'));
	
while($programs->have_posts()){
	$programs->the_post(); ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p><?php the_content(); ?></p>

<?php } ?>
</div>
<?php
get_footer();

?>