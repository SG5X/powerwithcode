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
	<h3>p test</h3>
<?php the_field('e_subtitle'); ?>
<?php
	$profesor = new WP_Query(array(
	'post_per_page' => 4,
	'post_type' => 'profesor'));
	
while($profesor->have_posts()){
	$profesor->the_post(); ?>

<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p><?php the_content(); ?></p>
	<?php the_post_thumbnail('proImgTall'); ?>
	

<?php } ?>
</div>

<hr>
<?php

$url = wp_remote_get('http://localhost:8888/powerwithcode/wp-json/wp/v2/posts');
$post = json_decode(wp_remote_retrieve_body($url));

foreach($post as $posts){
	echo $posts->title->rendered . '<br>';
}

?>

<?php
get_footer();

?>