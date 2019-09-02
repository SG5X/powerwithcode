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
<h1>sduvdu</h1>
<?php
while(have_posts()){
	the_post(); ?>

<h2><?php the_title(); ?></h2>
<p><?php the_content(); ?></p>

<?php } ?>
</div>
<?php
get_footer();

?>