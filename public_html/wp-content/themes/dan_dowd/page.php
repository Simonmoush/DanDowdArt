<!--
	pages
-->
<?php get_header(); ?>
<div class="section">

<?php while ( have_posts() ) : the_post(); ?>
 
	<?php the_content(); ?>
 
<?php endwhile; ?>

</div>
<?php get_footer(); ?>
