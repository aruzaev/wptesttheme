<?php

get_header();

echo "<h1>This is a page not a post</h1>";
while(have_posts()) {
	the_post(); ?>
	<h2><?php the_title();?></h2>
	<?php the_content();?>
	<hr>
<?php }

get_footer();
?>