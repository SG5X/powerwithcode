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
while(have_posts()){
	the_post(); ?>

<h2><?php the_title(); ?></h2>
<p><?php the_content(); ?></p>
	<hr class="section-break">
	<h2>Related Programs</h2>
	<?php $relatedPrograms = get_field('related_program');
	
	foreach($relatedPrograms as $programs){ ?>
	
	<li><a href="<?php echo get_the_permalink($programs);?>"><?php echo get_the_title($programs);?></a></li>
	
	<?php }
	
	?>

<?php } ?>
</div>
<?php
get_footer();

?>