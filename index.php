<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content' ); ?>

	<hr class="post-break" />

<?php endwhile; ?> 

	<div id="nav-container">

		<div class="nav-previous"><?php next_posts_link( 'Older posts' ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>

	</div>

<?php else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>