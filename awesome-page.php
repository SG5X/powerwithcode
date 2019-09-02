<?php


/* Template Name: Awesome */


get_header();

?>

<?php

$response = wp_remote_get('http://localhost:8888/powerwithcode/wp-json/wp/v2/posts');
$posts = json_decode( wp_remote_retrieve_body( $response));

echo '<div class="latest-posts">';

foreach ($posts as $post) {
	echo '<li><h2>'. $post->title->rendered.'</h2>'. $post->excerpt->rendered . '</li>';
}
echo '</div>';