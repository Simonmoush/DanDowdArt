<!--
	Art Page!

	The art page shows the contents of the art page and also a cool way to show the subcategories
-->
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="section">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>
<?php endwhile; ?>

<div id="art-categories">
	<?php

	$art_cat = get_category_by_slug("art");
	$sub_cats = get_categories($art_cat->term_id);

	forEach($sub_cats as $cat){ ?>
		<?php $cat_img_url = "http://localhost:8000/wp-content/uploads/2022/07/P1006406.jpg"; ?>
		<div class='category'>
			<img class="category-img" src="<?= $cat_img_url; ?>">
			<a class="category-name" href="<?= get_category_link($cat); ?>">
				<?= $cat->name; ?>
			</a>
		</div>
	<?php }

	?>
</div>

<?php get_footer(); ?>
