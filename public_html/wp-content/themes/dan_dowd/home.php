<!--
	blog posts page (world)
-->
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="section">
 	<h2>
		<?php the_title(); ?>
	</h2>
	<?php the_content(); ?>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>
