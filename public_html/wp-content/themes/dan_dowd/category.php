<?php
/*
	page for showing all posts in a category
*/

get_header();

// The Loop
if ( have_posts() ) {
    while (have_posts() ) { the_post(); ?>
		<div class="section">
			<h2 class="post-title"><?= get_the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
    <?php }
} else {
    // no posts found
}

get_footer();

?>
